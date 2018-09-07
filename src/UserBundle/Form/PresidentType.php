<?php

namespace UserBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PresidentType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomPresident', TextType::class, array('attr' => array('class' => 'form-control'),'label' => "Nom", 'required' => true))
            ->add('prenomPresident', TextType::class, array('attr' => array('class' => 'form-control'),'label' => "Prénom", 'required' => true))
            ->add('username', TextType::class, array('attr' => array('class' => 'form-control'),'label' => "Nom d'utilisateur", 'required' => true))
            ->add('email', EmailType::class, array('attr' => array('class' => 'form-control'),'required' => true))
            ->add('password', PasswordType::class, array('attr' => array('class' => 'form-control'),'label' => 'Mot de passe', 'required' => true))
            ->add('plainPassword', PasswordType::class, array('attr' => array('class' => 'form-control'),'label' => 'Retapez le mot de passe ', 'required' => true))
            ->add('telPresident', IntegerType::class, array('attr' => array('class' => 'form-control'),'label' => "Tel", 'required' => true));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\President'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_president';
    }

}
