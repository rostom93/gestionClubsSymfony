<?php

namespace AdminBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClubType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => "Nom du Club",
                'required' => true,
                'attr' => array('class' => 'form-control')))
            ->add('objectif', TextareaType::class, array('label' => "Objectif du Club",
                'required' => true,
                'attr' => array('rows' => '10','class' => 'form-control')))
            ->add('telClub', IntegerType::class, array('label' => "Numero du telehpone",
                'required' => false,
                'attr' => array('class' => 'form-control')))
            ->add('responsable', TextType::class, array('label' => "Le responsable du club",
                'required' => false,
                'attr' => array('class' => 'form-control')))
            ->add('president', EntityType::class, array(
                'class' => 'UserBundle:President',
                'required' => true,
                'attr' => array('class' => 'form-control')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Club'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_club';
    }

}
