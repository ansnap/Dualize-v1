<?php

namespace Anton\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email')
            ->add('password', 'password')
            ->add('remember', 'checkbox', array(
				'mapped' => false // Because not have connection with Entity User
            ))
            ->add('login', 'button');
    }

    public function getName()
    {
        return 'login';
    }
}

