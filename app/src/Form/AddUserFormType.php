<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\ArrayType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class AddUserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username')
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'invalid_message' => 'The password fields must match.',
                'attr' => ['autocomplete' => 'new-password'],
                'required' => true,
                'first_options' => ['label' => false],
                'second_options' => ['label' => false],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                ],
            ])
            ->add('email', TextType::class, [
                'data' => 'Unknown email'
            ])
            ->add('avatar', TextType::class, [
                'data' => 'https://checklists.expert/images/no-avatar-ff.png',
                'required' => false
            ])
            ->add('birthdate', TextType::class, [
                'required' => false
            ])
            ->add('isShowCredentials', CheckboxType::class, [
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
