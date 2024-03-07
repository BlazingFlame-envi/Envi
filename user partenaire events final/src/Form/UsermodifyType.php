<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class UsermodifyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',null, [
                'label' => 'nom ',
                'empty_data' => ''
            ])
            ->add('prenom',null, [
                'label' => 'prenom ',
                'empty_data' => ''
            ])
            ->add('mail',null, [
                'label' => 'mail ',
                'empty_data' => ''
            ])
            ->add('DN')
            ->add('num_tel',null, [
                'label' => 'Phone Number ',
                'empty_data' => ''
            ])
            ->add('Update', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success btn-lg',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
