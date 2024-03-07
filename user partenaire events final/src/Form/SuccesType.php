<?php

namespace App\Form;

use App\Entity\Succes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SuccesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type_s', ChoiceType::class, [
                'choices' => [
                    'money' => 'money',
                    'reduction' => 'reduction',
                    'certificate' => 'certificate',
                ],
            ])
            ->add('nombenef_s')
            ->add('nomspon_s')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Succes::class,
        ]);
    }
}
