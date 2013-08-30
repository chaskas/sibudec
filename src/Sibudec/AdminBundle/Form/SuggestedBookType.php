<?php

namespace Sibudec\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SuggestedBookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array('label'=>'Título'))
            ->add('author', null, array('label'=>'Autor'))
            ->add('year', null, array('label'=>'Año'))
            ->add('additionalInformation', null, array('label'=>'Información adicional'))
            ->add('format', null, array('label'=>'Formato'))
            ->add('reason', null, array('label'=>'Motivo'))
            ->add('petitionerFullName', null, array('label'=>'Nombre Completo'))
            ->add('petitionerEmail', null, array('label'=>'Email'))
            ->add('petitionerStatus', null, array('label'=>'Ocupación'))
            ->add('petitionerArea', null, array('label'=>'Área'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sibudec\AdminBundle\Entity\SuggestedBook'
        ));
    }

    public function getName()
    {
        return 'sibudec_adminbundle_suggestedbooktype';
    }
}
