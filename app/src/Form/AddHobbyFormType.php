<?php

namespace App\Form;

use App\Entity\Hobby;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddHobbyFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('img', ChoiceType::class,[
                'choices' => [
                    'palette' => 'bi bi-palette',
                    'fried egg' => 'bi bi-egg-fried',
                    'cup straw' => 'bi bi-cup-straw',
                    'balloon heart' => 'bi bi-balloon-heart',
                    'gear' => 'bi bi-gear',
                    'cpu' => 'bi bi-cpu',
                    'diamond' => 'bi bi-x-diamond',
                    'boombox' => 'bi bi-boombox',
                    'controller' => 'bi bi-controller',
                    'motherboard' => 'bi bi-motherboard',
                    'egg' => 'bi bi-egg',
                    'music file' => 'bi bi-file-music',
                    'music note list' => 'bi bi-music-note-list',
                    'brightness high' => 'bi bi-brightness-high',
                    'chat dots' => 'bi bi-chat-dots',
                    'circle' => 'bi bi-circle',
                    'airplane' => 'bi bi-airplane',
                    'bag' => 'bi bi-bag',
                    'box' => 'bi bi-box',
                    'car front' => 'bi bi-car-front',
                    'cash' => 'bi bi-cash',
                    'cup hot' => 'bi bi-cup-hot'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hobby::class,
        ]);
    }
}
