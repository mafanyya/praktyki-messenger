<?php

namespace App\Form;

use App\Entity\Country;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddCountryFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('img', ChoiceType::class,[
                'choices' => [
                    'Afghanistan' => 'af',
                    'Malaysia' => 'my',
                    'North Korea' => 'kp',
                    'China' => 'cn',
                    'Congo' => 'sd',
                    'Uganda' => 'ug',
                    'Mozambique' => 'mz',
                    'Germany' => 'de',
                    'Ireland' => 'ie',
                    'Poland' => 'pl',
                    'Russia' => 'ru',
                    'USA' => 'us',
                    'Canada' => 'ca',
                    'Mexico' => 'mx',
                    'Cuba' => 'cu',
                    'Brazil' => 'br',
                    'Peru' => 'pe',
                    'Chile' => 'cl',
                    'Australia' => 'au',
                    'Papua New Guinea' => 'pg',
                    'Other' => 'un'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Country::class,
        ]);
    }
}
