<?php

namespace MaremmaCinghialeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titolo')
            ->add('dataEvento', 'datetime')
            ->add('importo')
            ->add('idSquadra')
            ->add('descrizione')
            ->add('urlFoto')
            ->add('ristoroEvento')
            ->add('totUsersEvento')
            ->add('maxUsersEvento')
            ->add('cattureCinghiali')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaremmaCinghialeBundle\Entity\Evento'
        ));
    }
}
