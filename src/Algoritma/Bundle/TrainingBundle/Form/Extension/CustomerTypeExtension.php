<?php

namespace Algoritma\Bundle\TrainingBundle\Form\Extension;

use Oro\Bundle\CustomerBundle\Form\Type\CustomerType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class CustomerTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('fiscalCode');
//        $builder->remove('fiscal_code');
//        $builder->remove('vat');
//        $builder->remove('pec');
//        $builder->remove('sdi');
    }

    public static function getExtendedTypes(): iterable
    {
        return [CustomerType::class];
    }
}