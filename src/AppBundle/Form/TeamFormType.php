<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class TeamFormType extends AbstractType
{
	public function getBlockPrefix(){
    	return 'team_save';
	}

public function buildForm(FormBuilderInterface $builder, array $options){
    $builder
        ->add('nombre', TextType::class)
        ->add('origen', TextType::class,array('required' => false));
}



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Equipo'
        ));
    }

}