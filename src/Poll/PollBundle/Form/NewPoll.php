<?php

namespace Poll\PollBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class NewPoll extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('title', 'text')
            ->add('description', 'textarea', array('required' => False))
            ->add('submit', 'submit', array('label' => "Create"));
    }

    public function getName() {
        return 'newpoll';
    }
} 