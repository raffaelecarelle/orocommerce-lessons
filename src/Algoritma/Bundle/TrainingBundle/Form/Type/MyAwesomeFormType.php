<?php

namespace Algoritma\Bundle\TrainingBundle\Form\Type;

use Algoritma\Bundle\TrainingBundle\Entity\MyAwesomeEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MyAwesomeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
        ;
    }

    public function getBlockPrefix()
    {
        return 'my_awesome_form';
    }

    public function getName()
    {
        return 'my_awesome_form';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MyAwesomeEntity::class,
        ]);
    }
}