<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Entity\Jugador;
use UserBundle\Entity\Equipo;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class PlayerFormType extends AbstractType
{
	public function getBlockPrefix(){
    	return 'new_player';
	}

public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
        ->add('nombre', TextType::class, array('attr' => array('class'=>'input-txt',
                                                                'placeholder'=>'Nombre'
                                                                )))
        ->add('equipo', EntityType::class, array('class' => 'AppBundle:Equipo',
    'choice_label' => 'nombre',));
}



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' =>'AppBundle\Entity\Jugador',
        ));
    }

}