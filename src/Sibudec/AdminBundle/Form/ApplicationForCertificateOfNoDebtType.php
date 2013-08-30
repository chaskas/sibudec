<?php

namespace Sibudec\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ApplicationForCertificateOfNoDebtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',null,array('label'=>'Nombre'))
            ->add('lastName',null,array('label'=>'Apellido'))
            ->add('rUT',null,array('label'=>'RUT'))
            ->add('degree',null,array('label'=>'Carrera'))
            ->add('reason',null,array('label'=>'Motivo'))
            ->add('division',null,array('label'=>'Repartición'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sibudec\AdminBundle\Entity\ApplicationForCertificateOfNoDebt'
        ));
    }

    public function getName()
    {
        return 'sibudec_adminbundle_applicationforcertificateofnodebttype';
    }
}
