<?php

namespace AdminBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CahierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, array('label' => "Titre de l'évenement",
                'required' => true,
                'attr' => array('class' => 'form-control')))
            ->add('type', TextType::class, array('label' => "Type de l'evenement",
                'required' => true,
                'attr' => array('class' => 'form-control')))
            ->add('dateEvent', DateType::class, array('label' => "Date de l'evenement",
                'required' => true,
                'attr' => array('class' => 'form-control')))
            ->add('objectif', TextareaType::class, array('label' => "Objectif",
                'required' => true,
                'attr' => array('rows' => '10','class' => 'form-control')))
            ->add('details', TextType::class, array('label' => "Details",
                'required' => false,
                'attr' => array('class' => 'form-control')))
            ->add('listInvited', TextAreaType::class, array('label' => "Liste des invités",
                'required' => false,
                'attr' => array('rows' => '10','class' => 'form-control')))
            ->add('equipments', TextType::class, array('label' => "Equipements",
                'required' => false,
                'attr' => array('class' => 'form-control')))
            ->add('program', TextareaType::class, array(
                'label' => "Programme",
                'attr' => array('class' => 'form-control ', 'rows' => '10')
            ))
            ->add('president', EntityType::class, array(
                'class' => 'UserBundle:President',
                'required' => true,
                'attr' => array('class' => 'form-control')))
            ->add('club', EntityType::class, array(
                'class' => 'AdminBundle:Club',
                'required' => true,
                'attr' => array('class' => 'form-control')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\CahierCharge'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_cahier';
    }

}
