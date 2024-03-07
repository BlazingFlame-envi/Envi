<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Equipement;
use App\Form\FormequipementType;
use App\Repository\EquipementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Label\Font\NotoSans;
 

  
class EquipementController extends AbstractController
{
    #[Route('/equipement', name: 'app_equipement')]
    public function index(EquipementRepository $equipementRepository): Response
    {

               $authors=$equipementRepository->findAll(); 

     
        return $this->render('equipement/index.html.twig', array(
            'authors' => $authors,
            
        ));
    }


 #[Route('/equipement/fnew', name: 'app_equipement_fnew')]
    public function fnew(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $authors = new Equipement();
       
       $form=$this->createForm(FormequipementType::class,$authors);
       $form->handleRequest($request);
       if($form->isSubmitted()&&$form->isValid()){
       $entityManagerInterface->persist($authors);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_equipement');
       }
       return $this->renderForm('equipement/formeequipement.html.twig',['form'=>$form]);
      // dump($author);
      // die();
    }


#[Route('/equipement/fedit/{id}', name: 'app_equipement_fedit')]
    public function fedit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , EquipementRepository $equipementRepository)
    {
       $author = $equipementRepository->find($id);
       $form=$this->createForm(FormequipementType::class,$author);
       $form->handleRequest($request);
      if($form->isSubmitted()&&$form->isValid())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_equipement');
       }
       return $this->renderForm('equipement/formeequipement.html.twig',['form'=>$form]);
       dump($author);
       die();
    }


  #[Route('/equipement/delete/{id} ', name: 'app_equipement_delete')]
public function delete($id ,EntityManagerInterface $entityManagerInterface , EquipementRepository $equipementRepository)
    {
       $author = $equipementRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_equipement');
       dd($author);
       
    }



#[Route('/back', name: 'app_back')]
    public function indexback(EquipementRepository $equipementRepository): Response
    {

               $authors=$equipementRepository->findAll(); 

     
        return $this->render('back/afficherequipementback.html.twig', array(
            'authors' => $authors,
            
        ));
    }





 #[Route('/equipementback/fnew_equipement', name: 'app_equipementback_fnew')]
    public function fnew_equipement_equipement(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $authors = new Equipement();
       
       $form=$this->createForm(FormequipementType::class,$authors);
       $form->handleRequest($request);
       if($form->isSubmitted()&&$form->isValid()){
       $entityManagerInterface->persist($authors);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_back');
       }
       return $this->renderForm('back/ajouter_back.html.twig',['form'=>$form]);
      // dump($author);
      // die();
    }






#[Route('/equipementback/fedit/{id}', name: 'app_equipementback_fedit')]
    public function fedit_back_equipement(Request $request,$id ,EntityManagerInterface $entityManagerInterface , EquipementRepository $equipementRepository)
    {
       $author = $equipementRepository->find($id);
       $form=$this->createForm(FormequipementType::class,$author);
       $form->handleRequest($request);
      if($form->isSubmitted()&&$form->isValid())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_back');
       }
       return $this->renderForm('back/ajouter_back.html.twig',['form'=>$form]);
       dump($author);
       die();
    }




  #[Route('/equipementback/delete/{id} ', name: 'app_equipementback_delete')]
public function delete_back_equipement($id ,EntityManagerInterface $entityManagerInterface , EquipementRepository $equipementRepository)
    {
       $author = $equipementRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_back');
       dd($author);
       
    }

     #[Route('/tri', name: 'app_equipement_tri', methods: ['GET'])]
    public function afficherSOrdredNom(EquipementRepository $equipementRepository): Response
    {
        $author = $equipementRepository->getStudentOrdredByName();
        return $this->render('equipement/index.html.twig', [
            'authors' => $author,
        ]);
    }

    
     #[Route('/triprix', name: 'app_equipement_triback', methods: ['GET'])]
    public function afficherSOrdredprix(EquipementRepository $equipementRepository): Response
    {
        $author = $equipementRepository->getStudentOrdredByrpix();
        return $this->render('back/afficherequipementback.html.twig', [
            'authors' => $author,
        ]);
    }


#[Route('/qr-codes', name: 'app_qr_codes')]
    public function qr(): Response
    {
        $writer = new PngWriter();
        $qrCode = QrCode::create('https://www.binaryboxtuts.com/')
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(120)
            ->setMargin(0)
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));
        $logo = Logo::create('img/logo.png')
            ->setResizeToWidth(60);
        $label = Label::create('')->setFont(new NotoSans(8));
 
        $qrCodes = [];
        $qrCodes['img'] = $writer->write($qrCode, $logo)->getDataUri();
        $qrCodes['simple'] = $writer->write(
                                $qrCode,
                                null,
                                $label->setText('Simple')
                            )->getDataUri();
 
        $qrCode->setForegroundColor(new Color(255, 0, 0));
        $qrCodes['changeColor'] = $writer->write(
            $qrCode,
            null,
            $label->setText('Color Change')
        )->getDataUri();
 
        $qrCode->setForegroundColor(new Color(0, 0, 0))->setBackgroundColor(new Color(255, 0, 0));
        $qrCodes['changeBgColor'] = $writer->write(
            $qrCode,
            null,
            $label->setText('Background Color Change')
        )->getDataUri();
 
        $qrCode->setSize(200)->setForegroundColor(new Color(0, 0, 0))->setBackgroundColor(new Color(255, 255, 255));
        $qrCodes['withImage'] = $writer->write(
            $qrCode,
            $logo,
            $label->setText('With Image')->setFont(new NotoSans(20))
        )->getDataUri();
        return $this->render('qr_code_generator/index.html.twig', $qrCodes);
    }

}

