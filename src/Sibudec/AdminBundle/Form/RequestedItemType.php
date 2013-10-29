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
            ->add('title')
            ->add('journalTitle')
            ->add('author')
            ->add('volume')
            ->add('number')
            ->add('year')
            ->add('initialPage')
            ->add('finalPage')
            ->add('requesterName')
            ->add('requesterEmail')
            ->add('requesterPhone')
            ->add('comment')
            ->add('createdAt')
            ->add('updatedAt')
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
