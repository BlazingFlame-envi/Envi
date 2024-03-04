<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use VictorPrdh\RecaptchaBundle\Form\ReCaptchaType;
class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'benevole' => 'benevole',
                    'agence' => 'agence',
                    'employé' => 'employé',
                  
                ],
            ])
            ->add('mail')
            ->add('motdepasse',PasswordType::class)
            ->add('DN')
            ->add('num_tel')
            ->add('recaptcha',RecaptchaType::class)
            ->add('Change', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary font-weight-bold mt-3',
                ],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
    
}
