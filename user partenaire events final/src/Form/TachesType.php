<?php

namespace App\Form;

use App\Entity\Taches;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TachesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_t')
            ->add('type_t', ChoiceType::class, [
                'choices' => [
                    'cleaning' => 'cleaning',
                    'preserve water' => 'preserve water',
                    'invest in energy' => 'invest in energy',
                ],
                ],)
            ->add('nom_t')
            ->add('nbpart_t')
            ->add('empl_t')
            ->add('succes')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Taches::class,
        ]);
    }
}
