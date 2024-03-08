<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\Required;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class FormProduit extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_produit', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'The product name is required.',
                    ]),
                    new Regex([
                        'pattern' => '/^[A-Z].*$/',
                        'message' => 'The product name must start with an uppercase letter.',
                    ]),
                ],
            ])
            ->add('prix', NumberType::class, [

                'constraints' => [
                    new Positive(['message' => 'The price must be positive.']),
                ],
            ])
            ->add('quantite', NumberType::class, [
                'constraints' => [

                    new GreaterThanOrEqual([
                        'value' => 0,
                        'message' => 'The quantity must be positive.',
                    ]),

                ],
            ])
            ->add('id_categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom_categorie',
                'placeholder' => 'Choisir votre categorie',
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image du produit',
                'required' => true,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Submit',
                'attr' => ['class' => 'btn btn-primary btn-lg']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
