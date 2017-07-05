<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Tests\Fixtures\Entity;

class StockType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                    'label' => 'Titre',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control ',
                        'placeholder' => '',
                    ),
                )
            )
            ->add('product', EntityType::class, array(
                    'class' => 'AppBundle:Product',
                    'required' => true,
                    'multiple' => true,
                    'label' => 'Product',
                    'attr' => array(
                        'class' => 'form-control',
                    ),
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('m')
                            ->orderBy('m.name', 'ASC');
                    },
                    'choice_label' => 'name',
                )
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Stock'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_stock';
    }


}
