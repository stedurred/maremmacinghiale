<?php

namespace MaremmaCinghialeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SquadraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('numero')
            ->add('urlFoto')
            ->add('cattureCinghiali')
            ->add('idAtc')
            ->add('trnDate', 'date')
            ->add('totUsersSquadra')
            ->add('quotaAnnuale')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaremmaCinghialeBundle\Entity\Squadra'
        ));
    }
}
