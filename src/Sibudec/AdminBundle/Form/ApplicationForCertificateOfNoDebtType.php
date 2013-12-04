<?php

namespace Sibudec\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ApplicationForCertificateOfNoDebtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $reasonStudentChoices = array('Renuncia a la carrera','Suspensión de estudios','Reincorporación','Postulación a pasantía','Cambio de carrera','Traslado de Universidad');
        $reasonOfficerChoices = array('Retiro de fondos','Contratación');
        $studentType = array(1 => 'Pregrado', 2 => 'Postgrado');

        $builder
            ->add('firstName', null, array('label' => 'Nombres','required' => true))
            ->add('lastName', null, array('label' => 'Apellidos','required' => true))
            ->add('rut', null, array('label' => 'RUT','required' => true))
            ->add('degree', null, array('label' => 'Carrera'))
            ->add('reasonStudent', 'choice', array('label' => 'Motivo', 'choices' => $reasonStudentChoices))
            ->add('studentType', 'choice', array('label' => 'Tipo', 'choices' => $studentType, 'multiple'=>false, 'expanded'=>true))
            ->add('reasonOfficer', 'choice', array('label' => 'Motivo', 'choices' => $reasonOfficerChoices))
            ->add('department', null, array('label' => 'Repartición'))
            ->add('email', null, array('label' => 'Email','required' => true))
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
