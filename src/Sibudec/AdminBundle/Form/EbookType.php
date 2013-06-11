<?php

namespace Sibudec\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EbookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',              null, array('label'=>'Título'))
            ->add('author',             null, array('label'=>'Autor'))
            ->add('year',               null, array('label'=>'Año'))
            ->add('url',                null, array('label'=>'Url'))
            ->add('subscriptionType',   null, array('label'=>'Tipo de suscripción'))
            ->add('bibliography',       null, array('label'=>'Bibliografía'))
            ->add('status',             null, array('label'=>'Estado'))
            ->add('category',           null, array('label'=>'Área temática'))
            ->add('source',             null, array('label'=>'Fuente'))
            ->add('accessType',         null, array('label'=>'Tipo de acceso'))
            ->add('editorial',          null, array('label'=>'Editorial'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sibudec\AdminBundle\Entity\Ebook'
        ));
    }

    public function getName()
    {
        return 'sibudec_adminbundle_ebooktype';
    }
}
