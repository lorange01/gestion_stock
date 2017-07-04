<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('ref', TextType::class, array(
                    'label' => 'Réf',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control ',
                        'placeholder' => '#FFRERE12',
                    ),
                )
            )
            ->add('name', TextType::class, array(
                    'label' => 'Libellé',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control ',
                        'placeholder' => 'Libellé',
                    ),
                )
            )
           ->add('purchasePrice', MoneyType::class, array(
                    'label' => 'Prix d\'achat',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control ',
                        'placeholder' => '0.99',
                    ),
                )
            )->add('salePrice', MoneyType::class, array(
                    'label' => 'Prix de vente',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control ',
                        'placeholder' => 'Prix de vente',
                    ),
                )
            )
            ->add('tva', MoneyType::class, array(
                    'label' => 'TVA',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control ',
                        'placeholder' => '19.9',
                    ),
                )
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_product';
    }


}
