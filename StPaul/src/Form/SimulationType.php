<?php

namespace App\Form;

use App\Entity\Simul;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SimulationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('famNom')
            ->add('famNbEnfant')
            ->add('famQF')
            ->add('simulNbEnfPartant')
            ->add('simulReducQF')
            ->add('simulReducFamilleNombreuse')
            ->add('simulReducDepartMultiple')
            ->add('simulSousTotal')
            ->add('simulTotalApresReduc')
            ->add('simulTotalApresPlafond')
            ->add('simulTotalDepartMultiple')
            ->add('sejNo')
            ->add('sejMBI')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Simul::class,
        ]);
    }
}
