<?php

namespace App\Form;

use App\Entity\Annuaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnuaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Prenom',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])

            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])

            ->add('telephone', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Telephone',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])

            ->add('email', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Email',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])

            ->add('adresse', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Adresse',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])

            ->add('poste', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Poste',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])

            ->add('salaire', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Salaire',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])

            ->add('datedenaissance', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Date de naissance',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-4'
                ],
                'label' => 'Créer une nouvelle ligne'
            ])

            ->add('submit2', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-4'
                ],
                'label' => 'Modifier une ligne'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Annuaire::class,
        ]);
    }
}
