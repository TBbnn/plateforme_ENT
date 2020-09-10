<?php

namespace App\Form;

use App\Entity\LiaisonCm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Membre;
use App\Entity\Classe;

class LiaisonCmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('classe', Null, [
                'class' => Classe::class, 
                'choice_label' => 'nom',
                'by_reference' =>true,
                'mapped' =>true,
                'required' => true
            ])
            ->add('membre', Null, [
                'class' => Membre::class, 
                'choice_label' => 'nom',
                'by_reference' =>true,
                'mapped' =>true,
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LiaisonCm::class,
        ]);
    }
}
