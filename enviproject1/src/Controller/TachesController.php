<?php

namespace App\Controller;
use App\Entity\Taches;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\TachesRepository;
use App\Form\TachesType;
use Symfony\Component\HttpFoundation\JsonResponse;

class TachesController extends AbstractController
{
   
    #[Route('/taches', name: 'app_taches')]
    public function index1(TachesRepository $tachesRepository): Response
    {
        $taches=$tachesRepository->findAll();
        return $this->render('basefront.html.twig');
    }
    

    #[Route('/taches/new', name: 'app_taches_new')]
    public function fnew_tache(Request $request ,EntityManagerInterface $entityManagerInterface)
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role  != 'benevole') {
           
           
                $tache= new taches();
                $form=$this->createForm(TachesType::class,$tache);
                $form->handleRequest($request);
                if($form->isSubmitted()&& $form->isValid()){
                    
                    $tache->setUser( $this->getUser());
                    $entityManagerInterface->persist($tache);
                    $entityManagerInterface->flush();
                    $this->addFlash('success', 'La nouvelle tâche a été ajoutée avec succès.');
                    return $this->redirectToRoute('app_taches_index');
                    
                }
                
                return $this->renderForm('taches/formtaches.html.twig',['form'=>$form,'taches' => $tache,'info'=>'Add taches']);
           
            }
            else {
                // Si le rôle de l'utilisateur n'est pas 'agence', rediriger ou afficher un message d'erreur
                $this->addFlash('error', 'You do not have permission to access this page.');
                return $this->redirectToRoute('app_taches_index'); // Redirection vers une page d'accueil ou une autre page appropriée
            }
       

    }


    #[Route('/taches/index', name: 'app_taches_index')]
    public function index(TachesRepository $authorRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role === 'agence') {
            $listTaches = $entityManagerInterface->getRepository(Taches::class)->getEntrepriseByUser($user);       
                       return $this->render('taches/index.html.twig', array(
                        'taches' => $listTaches,
                    ));
         
     }
     else  {
        $authorss=$authorRepository->findAll();
        return $this->render('taches/index.html.twig', [
         'controller_name' => 'AuthorController',
         'taches' => $authorss 
     ]);
                  
    }     
    
              
     
       
}

    #[Route('taches/edit/{id}', name: 'app_taches_edit')]
    public function edit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , TachesRepository $authorRepository)
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role  != 'benevole') {
       $taches = $authorRepository->find($id);
       $form=$this->createForm(TachesType::class,$taches);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($taches);
       $entityManagerInterface->flush();
       $this->addFlash('success', 'La tâche a été editée avec succès.');
       return $this->redirectToRoute('app_taches_index');
       }
       return $this->renderForm('taches/edit.html.twig',['form'=>$form]);
       dump($taches);
       die();
    }
    else {
        // Si le rôle de l'utilisateur n'est pas 'agence', rediriger ou afficher un message d'erreur
        $this->addFlash('error', 'You do not have permission to access this page.');
        return $this->redirectToRoute('app_taches_index'); // Redirection vers une page d'accueil ou une autre page appropriée
    }
}
   
   
    #[Route('/taches/delete/{id}', name: 'app_taches_delete')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , TachesRepository $tachesRepository): Response
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role  != 'benevole') {
        $tache = $tachesRepository->find($id);
       $entityManagerInterface->remove($tache);
       $entityManagerInterface->flush();
       $this->addFlash('success', 'La tâche a été supprimée avec succès.');
       return $this->redirectToRoute('app_taches_index');
       dd($tache);
    }
    else {
        // Si le rôle de l'utilisateur n'est pas 'agence', rediriger ou afficher un message d'erreur
        $this->addFlash('error', 'You do not have permission to access this page.');
        return $this->redirectToRoute('app_taches_index'); // Redirection vers une page d'accueil ou une autre page appropriée
    }
}

    #[Route('/taches/affback', name: 'app_taches_index_back')]
   public function index2(tachesRepository $tachesRepository): Response
   {
              $taches=$tachesRepository->findAll();
       return $this->render('back/backevents/indextaches.html.twig', array(
           'taches' => $taches,
           
       ));
   }
   #[Route('taches/editback/{id}', name: 'app_taches_edit_back')]
    public function editB(Request $request,$id ,EntityManagerInterface $entityManagerInterface , tachesRepository $authorRepository)
    {
       $taches = $authorRepository->find($id);
       $form=$this->createForm(TachesType::class,$taches);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($taches);
       $entityManagerInterface->flush();
       $this->addFlash('success', 'Latâche a été editée avec succès.');
       return $this->redirectToRoute('app_taches_index_back');
       }
       return $this->renderForm('back/backevents/edittaches.html.twig',['form'=>$form]);
       dump($taches);
       die();
    }
    #[Route('/taches/newback', name: 'app_taches_new_back')]
    public function fnewB(Request $request ,EntityManagerInterface $entityManagerInterface)
    {
        $succe= new taches();
        $form=$this->createForm(TachesType::class,$succe);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            
            $entityManagerInterface->persist($succe);
            $entityManagerInterface->flush();
            $this->addFlash('success', 'La nouvelle tâche a été ajoutée avec succès.');
            return $this->redirectToRoute('app_taches_index_back');
        }
        return $this->renderForm('back/backevents/ajouttaches.html.twig',['form'=>$form,'taches' => $succe,'info'=>'Add taches']);
    
    }
    #[Route('/taches/deleteback/{id}', name: 'app_taches_delete_back')]
    public function deleteB($id ,EntityManagerInterface $entityManagerInterface , tachesRepository $tachesRepository): Response
    {
        $succe = $tachesRepository->find($id);
       $entityManagerInterface->remove($succe);
       $entityManagerInterface->flush();
       $this->addFlash('success', 'La tâche a été supprimee avec succès.');
       return $this->redirectToRoute('app_taches_index_back');
       dd($succe);
    }
    #[Route('/marquer-favoris/{id}', name: 'app_marquer_favoris')]
public function marquerFavoris($id, TachesRepository $tachesRepository, EntityManagerInterface $entityManager)
{
    $tache = $tachesRepository->find($id);
    $tache->setFavoris(true);
    $entityManager->flush();
    // Vous pouvez retourner une réponse JSON si nécessaire
    return new JsonResponse(['success' => true]);
}

#[Route('/retirer-favoris/{id}', name: 'app_retirer_favoris')]
public function retirerFavoris($id, TachesRepository $tachesRepository, EntityManagerInterface $entityManager)
{
    $tache = $tachesRepository->find($id);
    $tache->setFavoris(false);
    $entityManager->flush();
    // Vous pouvez retourner une réponse JSON si nécessaire
    return new JsonResponse(['success' => true]);
}
#[Route('/taches/favorites', name: 'app_taches_favorites')]
public function favorites(TachesRepository $tachesRepository,EntityManagerInterface $entityManagerInterface): Response
{
    $user = $this->getUser();
   // $favorites = $tachesRepository->isFavoris('true');
  //  $favorites = $tachesRepository->findOneBy(['favoris' => true]);
    
   // getEntrepriseByUserFavories
   $listTaches = $entityManagerInterface->getRepository(Taches::class)->getEntrepriseByUserFavories($user, true);
    return $this->render('taches/favorites.html.twig', [
        'favorites' =>  $listTaches,
    ]);
}
    
}
