<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cours;
use App\Repository\EmplacementRepository;
use App\Form\CoursType;
use Symfony\Component\HttpFoundation\Request;



class WorkshopsController extends AbstractController
{    
    #[Route('/workshops', name: 'app_workshops')]
    public function index(): Response
    {

        return $this->render('basefront.html.twig', [
            'controller_name' => 'WorkshopsController',
        ]);
    }
    
    #[Route('/workshops/fnew', name: 'app_workshops_fnew')]
    public function fnew(Request $request , EntityManagerInterface $entityManagerInterface)
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role != 'benevole') {
       $author = new Cours();
       
       $form=$this->createForm(CoursType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isvalid()){
        $author->setUser( $this->getUser());
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops_list');
       }
       return $this->render('workshops/ajoutcours.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }
    else {
        // Si le rôle de l'utilisateur n'est pas 'agence', rediriger ou afficher un message d'erreur
        $this->addFlash('error', 'You do not have permission to access this page.');
        return $this->redirectToRoute('app_workshops_list'); // Redirection vers une page d'accueil ou une autre page appropriée
    }
}  
    #[Route('/workshops/delete/{id}', name: 'app_workshops_delete')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , CoursRepository $authorRepository)
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role != 'benevole') {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops_list');
       dd($author);
       
    }
    else {
        // Si le rôle de l'utilisateur n'est pas 'agence', rediriger ou afficher un message d'erreur
        $this->addFlash('error', 'You do not have permission to access this page.');
        return $this->redirectToRoute('app_workshops_list'); // Redirection vers une page d'accueil ou une autre page appropriée
    }
}
    #[Route('/afficherwork', name: 'app_workshops1')]
    public function index3(CoursRepository $authorRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        
        $authorss=$authorRepository->findAll();
        return $this->render('workshops/index.html.twig',  [
            'controller_name' => 'AuthorController',
            'workshops' => $authorss,
            
        
        ]    
        );
    }
   
    #[Route('/workshops/listwork', name: 'app_workshops_list')]
    public function index7(CoursRepository $authorRepository,EntityManagerInterface $entityManagerInterface): Response
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role === 'agence') {
        $listTaches = $entityManagerInterface->getRepository(Cours::class)->getEntrepriseByUser($user); 
        return $this->render('workshops/listwork.html.twig', [
            'controller_name' => 'AuthorController',
            'workshops' => $listTaches,
            
        ]);
    }
    else  {
        $authorss=$authorRepository->findAll();
        return $this->render('workshops/listwork.html.twig', [
         'controller_name' => 'AuthorController',
         'workshops' => $authorss 
     ]);
                  
    }     
    
}
    #[Route('/workshops/fedit/{id}', name: 'app_work_fedit')]
    public function fedit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , CoursRepository $authorRepository)
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role != 'benevole') {
       $author = $authorRepository->find($id);
       $form=$this->createForm(CoursType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops_list');
       }
       return $this->render('workshops/ajoutcours.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }
    else {
        // Si le rôle de l'utilisateur n'est pas 'agence', rediriger ou afficher un message d'erreur
        $this->addFlash('error', 'You do not have permission to access this page.');
        return $this->redirectToRoute('app_workshops_list'); // Redirection vers une page d'accueil ou une autre page appropriée
    }
}
    #[Route('/detailwork/{id}', name: 'app_work_detail')]
    public function fedit3($id, EntityManagerInterface $entityManager, CoursRepository $coursRepository)
    {
        $cours = $coursRepository->find($id);
        
        // Vérifiez si le cours existe
        if (!$cours) {
            throw $this->createNotFoundException('Cours non trouvée');
        }
        
        return $this->render('workshops/detail.html.twig', [
            'cours' => $cours,
        ]);
    }

    #[Route('/backend', name: 'app_back')]
    public function indexback(): Response
    {
        return $this->render('homeback.html.twig', [
            'controller_name' => 'WorkshopsController',
        ]);
    }

    #[Route('/workshops/afficherworkback', name: 'app_workshops_back1')]
    public function indexx(CoursRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('back/workshopsback.html.twig', [
            'controller_name' => 'AuthorController',
            'workshops' => $authorss,
            
        ]);
    }

    #[Route('/workshopsback/fnew', name: 'app_workshopsback_fnew')]
    public function fnew2(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new Cours();
       
       $form=$this->createForm(CoursType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isValid()){
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops_back1');
       }
       return $this->render('back/ajoutcoursBack.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }

    #[Route('/editworkback/{id}', name: 'app_workback_fedit')]
    public function fedit2(Request $request,$id ,EntityManagerInterface $entityManagerInterface , CoursRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(CoursType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops_back1');
       }
       return $this->render('back/ajoutcoursBack.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }

    #[Route('/back/deletework/{id}', name: 'app_workshopsback_delete')]
    public function delete2($id ,EntityManagerInterface $entityManagerInterface , CoursRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops_back1');
       dd($author);
       
    }

        private const API_URL = 'https://api.openai.com/v1/engines/text-davinci-003/completions';
        private const API_KEY = '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';
        
        #[Route('/workshops/chat', name: 'app_chat_index')]
        public function indexch(Request $request): Response
        {
            $question = $request->query->get('question');
        
            if ($question) {
                // Vérifier si la question est liée à envi
                if (preg_match('/envi|termsAndConditions|cours|partenaire|product|fournisseur|event/i', $question)) {
                    try {
                        $answer = $this->getAnswerFromAPI($question);
                        return $this->render('chatbot.html.twig', [
                            'answer' => $answer,
                        ]);
                    } catch (\Exception $e) {
                        return new Response('Error making API request: ' . $e->getMessage());
                    }
                } else {
                    // La question n'est pas pertinente
                    return $this->render('chatbot.html.twig', [
                        'answer' => 'Je suis désolé, je ne peux répondre qu\'aux questions liées à Envi, les cours, les events, le shop , le stock  et les partenaires.',
                    ]);
                }
            }
        
            return $this->render('chatbot.html.twig');
        }
    
        private function getAnswerFromAPI(string $question): string
        {   
            $cours="you can easily  view our courses with their emplacements to assist in it by consulting the page workshops ";
            $partenaire="you can discover our partners that  collaborates with our agencies by consulting the page Partenaire ";   
             $product = 'you can easily  buy any product that you desire in our shop by consulting the page Shop.';
             $fournisseur = 'you can view the list of suppliers and the equipements that they offer by consulting the page Stock';
             $event = 'you can easily parctise in our events and wins points by consulting the page Events';
             $enviAnswer = 'Envi is a website that helps you maximize the positive impact in preserving the ecosystem..';
            $termsAndConditions = 'En utilisant l\'application Envi, vous acceptez les présentes conditions d\'utilisation. Veuillez les lire attentivement avant d\'utiliser l\'application.
            
            Utilisation de l\'application
            Envi est une application de logistique qui fournit des services de livraison et de location de véhicules. L\'utilisation de l\'application est réservée aux personnes âgées de 18 ans ou plus.
        
            Inscription et compte utilisateur
            Pour utiliser certains services de l\'application, vous devez créer un compte utilisateur en fournissant des informations personnelles précises et à jour. Vous êtes entièrement responsable de la protection et de la confidentialité de votre compte utilisateur. Vous ne devez pas partager votre compte avec d\'autres personnes et vous êtes entièrement responsable de toutes les activités effectuées sous votre compte.
        
            Conditions de paiement
            L\'utilisation de certains services de l\'application peut entraîner des frais. Vous êtes entièrement responsable du paiement de tous les frais liés à l\'utilisation de l\'application. Les modes de paiement acceptés sont ceux spécifiés dans l\'application.
        
            Propriété intellectuelle
            Tous les droits de propriété intellectuelle associés à l\'application et à son contenu, y compris mais sans s\'y limiter, les marques, les logos, les textes, les images, les graphiques, les sons et les vidéos, sont la propriété d\'envi ou de ses fournisseurs de contenu. Vous ne devez pas copier, reproduire, distribuer, transmettre, afficher, vendre, concéder sous licence ou exploiter de toute autre manière tout contenu de l\'application sans l\'autorisation écrite préalable d\'Envi.
        
            Limitation de responsabilité
            Envi ne peut garantir la qualité, la fiabilité, l\'exactitude ou l\'exhaustivité de tout contenu de l\'application. L\'utilisation de l\'application est à vos risques et périls. Envi ne peut être tenu responsable de tout dommage résultant de l\'utilisation ou de l\'incapacité à utiliser l\'application, y compris les dommages directs, indirects, accessoires, spéciaux ou consécutifs.
    
            Modification des conditions d\'utilisation
            Envi se réserve le droit de modifier les présentes conditions d\'utilisation à tout moment sans préavis. Il est de votre responsabilité de vérifier régulièrement les conditions d\'utilisation pour être informé des modifications éventuelles.
            
            En utilisant l\'application Envi, vous acceptez les présentes conditions d\'utilisation. Si vous ne les acceptez pas, veuillez ne pas utiliser l\'application.
            Limitation de responsabilité
            Envi ne sera pas responsable des dommages directs, indirects, spéciaux, consécutifs ou accessoires découlant de l\'utilisation ou de l\'impossibilité d\'utiliser la plateforme ou de son contenu.
            
            Droit applicable
            Ces conditions sont régies par les lois en vigueur en Tunisie. Tout litige relatif à ces conditions sera soumis aux tribunaux compétents de France.
            
            Contact
            Si vous avez des questions concernant ces conditions, vous pouvez contacter Envi à l\'adresse suivante : contact@envi.com.';
            
            // Check if the question is related to Envi's terms and conditions
            if (preg_match('/conditions|termes|utilisation|paiement|propriété/i', $question)) {
                return $termsAndConditions;
            } elseif (preg_match('/envi/i', $question)) {
                return $enviAnswer;
            } elseif (preg_match('/cours|emplacement|workshop|map/i', $question)) {
                return $cours;
            } elseif (preg_match('/partenaire|offre|prix/i', $question)) {
                return $partenaire;
            } elseif (preg_match('/product|shop|buy/i', $question)) {
                return $product;
            } elseif (preg_match('/event|participate|succes|points|win/i', $question)) {
                return $event;
            } elseif (preg_match('/fournisseur|equipements|supplier/i', $question)) {
                return $fourniseur;
            } else {
                $postData = [
                    'prompt' => $question,
                    'temperature' => 0.7,
                    'max_tokens' => 4000,
                    'top_p' => 1,
                    'frequency_penalty' => 0.5,
                    'presence_penalty' => 0,
                ];
    
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => self::API_URL,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($postData),
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . self::API_KEY,
                ],
            ]);
    
            $response = curl_exec($curl);
            curl_close($curl);
    
            $responseArray = json_decode($response, true);
            $answer = $responseArray['choices'][0]['text'];
            $regex = '/(?<=contact@envi.com).*$/im';
            
            preg_match($regex, $answer, $matches);
            if (!empty($matches)) {
                return trim($matches[0]);
            }
            return $answer;
        }
    }

}



