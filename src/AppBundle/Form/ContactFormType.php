<?php

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Jon Doe',
                    'data-validation-required-message' => 'Please enter your name.'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => [
                    'placeholder' => 'example@example.com',
                    'data-validation-required-message' => 'Please enter your email address.'
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Phone',
                'required' => true,
                'attr' => [
                    'placeholder' => '+387 66 123 123',
                    'data-validation-required-message' => 'Please enter your phone number.'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Here you write your message.',
                    'data-validation-required-message' => 'Please enter a message.',
                    'rows' => 5
                ]
            ]);
    }

    /**
     * @inheritDoc
     */

    public function configureOptions(OptionsResolver $resolver) {

    }

}