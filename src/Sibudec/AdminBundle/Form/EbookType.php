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
            ->add('title')
            ->add('author')
            ->add('year')
            ->add('url')
            ->add('subscriptionType')
            ->add('bibliography')
            ->add('status')
            ->add('category')
            ->add('source')
            ->add('accessType')
            ->add('editorial')
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
