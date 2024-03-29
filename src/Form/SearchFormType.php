<?php

namespace App\Form;

use App\Data\SearchData;
use App\Entity\Tag;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

       $builder

           ->add('Tags', EntityType::class, [
               'label' =>false,
               'required' =>false,
               'class'=> Tag::class,
               'expanded' => true,
               'multiple' =>true
           ]);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver ->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }


    public function getBlockPrefix()
    {
        return '';
    }



}
