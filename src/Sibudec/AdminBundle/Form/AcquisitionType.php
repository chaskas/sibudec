<?php

namespace Sibudec\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AcquisitionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title'       ,null, array('label'=>'Título'))
            ->add('author'      ,null, array('label'=>'Autor'))
            ->add('year'        ,null, array('label'=>'Año'))
            ->add('bibliography',null, array('label'=>'Bibliografía'))
            ->add('school'      ,null, array('label'=>'Facultad'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sibudec\AdminBundle\Entity\Acquisition'
        ));
    }

    public function getName()
    {
        return 'sibudec_adminbundle_acquisitiontype';
    }
}
