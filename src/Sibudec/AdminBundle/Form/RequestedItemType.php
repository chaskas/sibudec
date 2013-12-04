<?php

namespace Sibudec\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RequestedItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array('label'=>'Título del artículo', 'required' => true))
            ->add('journalTitle', null, array('label'=>'Título de la Revista', 'required' => true))
            ->add('author', null, array('label'=>'Autor(es)', 'required' => true))
            ->add('volume', null, array('label'=>'Vol.', 'required' => false))
            ->add('number', null, array('label'=>'Nº', 'required' => false))
            ->add('year', null, array('label'=>'Año', 'required' => true))
            ->add('initialPage', null, array('label'=>'Página Inicio', 'required' => true))
            ->add('finalPage', null, array('label'=>'Página Fin', 'required' => false))
            ->add('requesterName', null, array('label'=>'Nombre del Solicitante', 'required' => true))
            ->add('requesterSchool', null, array('label'=>'Facultad', 'required' => true))
            ->add('requesterHQ', null, array('label'=>'Sede', 'required' => true))
            ->add('requesterEmail', null, array('label'=>'Correo electrónico', 'required' => true))
            ->add('requesterPhone', null, array('label'=>'Teléfono', 'required' => false))
            ->add('comment', null, array('label'=>'Observaciones', 'required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sibudec\AdminBundle\Entity\RequestedItem'
        ));
    }

    public function getName()
    {
        return 'sibudec_adminbundle_requesteditemtype';
    }
}
