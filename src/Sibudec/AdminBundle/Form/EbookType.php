<?php

namespace Sibudec\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EbookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $suscriptionType = array('Anual', 'Perpetuo');

        $bibliography = array('Básica', 'C', 'Complementaria', 'G');

        $purchaseMode = array('Por Título','');

        $userType = array('Monousuario','Multiusuario');

        $builder
            ->add('title', null, array('label'=>'Título'))
            ->add('author', null, array('label'=>'Autor'))
            ->add('year', null, array('label'=>'Año'))
            ->add('url', null, array('label'=>'Url'))
            ->add('purchaseMode', 'choice', array('choices' => $purchaseMode, 'label'=>'Modalidad de Compra'))
            ->add('subscriptionType', 'choice', array('choices' => $suscriptionType, 'label'=>'Tipo de suscripción'))
            ->add('bibliography', 'choice', array('choices' => $bibliography, 'label'=>'Tipo Bibliografía'))
            ->add('inMetasearch', null, array('label'=>'En Metabuscador'))
            ->add('activationDate', null, array('label'=>'Fecha de Activación'))
            ->add('note', null, array('label'=>'Notas'))
            ->add('userType', 'choice', array('choices' => $userType, 'label'=>'Tipo de Usuario'))
            ->add('isbn', null, array('label'=>'ISBN'))
            ->add('purchaseYear', null, array('label'=>'Año de Compra'))
            ->add('category', null, array('label'=>'Área temática'))
            ->add('source', null, array('label'=>'Base de datos y/o Plataforma'))
            ->add('accessType', null, array('label'=>'Tipo Acceso'))
            ->add('access', null, array('label'=>'Ingreso'))
            ->add('editorial', null, array('label'=>'Editorial'))
            ->add('broken', null, array('label'=>'¿Enlace Roto?', 'required' => false))
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
