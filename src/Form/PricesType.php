<?php

namespace App\Form;

use App\Entity\Prices;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PricesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('days')
            ->add('adultprices')
            ->add('kidsprice')
            ->add('groups')
            ->add('school')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prices::class,
        ]);
    }
}
