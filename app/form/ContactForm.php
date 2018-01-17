<?php

use \Symfony\Component\Form as SForm;

class ContactForm extends SForm\AbstractType
{

    public function buildForm(SForm\FormBuilder $builder, array $options)
    {

        $builder->add('id', null, array('read_only' => true));
        $builder->add('name');
        $builder->add('content');
        $builder->add('created');
    }

    public function getDefaultOptions(array $options)
    {

        return array(
            'data_class' => 'Glory4gamers\Form\Contact',
        );
    }

    public function getName() {

        return $this->getName();
    }
}