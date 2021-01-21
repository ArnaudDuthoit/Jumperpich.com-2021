<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Nom', 'attr' => array('maxlength' => 255, 'class' => 'form-control', 'placeholder' => "Veuillez entrer votre nom ici", 'style' => 'margin-bottom:15px')))
            ->add('email', EmailType::class, array('label' => 'Email', 'attr' => array('maxlength' => 255, 'class' => 'form-control', 'placeholder' => "Veuillez entrer votre adresse mail ici", 'style' => 'margin-bottom:15px')))
            ->add('subject', TextType::class, array('label' => 'Objet', 'attr' => array('maxlength' => 255, 'class' => 'form-control', 'placeholder' => "Veuillez entrer l'objet de votre message ici", 'style' => 'margin-bottom:15px')))
            ->add('message', TextareaType::class, array('label' => 'Message (0/255)', 'label_attr' => array('id' => 'text'), 'attr' => array('maxlength' => 255, 'class' => 'form-control', 'placeholder' => "Veuillez entrer votre message ici")))
            ->add('Save', SubmitType::class, array('label' => 'Envoyer', 'attr' => array('class' => 'btn btn__custom', 'style' => 'margin-top:15px')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}