<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class TeamFormType extends AbstractType
{
	public function getBlockPrefix(){
    	return 'team_save';
	}

public function buildForm(FormBuilderInterface $builder, array $options){
    $builder
        ->add('nombre', TextType::class, array('attr' => array('class'=>'input-txt',
                                                                'placeholder'=>'Nombre'
                                                                )))
        ->add('origen', TextType::class,array('required' => false,
            'attr' => array('class'=>'input-txt','placeholder'=>'Ciudad origen')))

        ->add('logo', FileType::class, array('required' => false,'attr' => array('class'=>'file',
                                                                'placeholder'=>'Escudo'
                                                                )));
}



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Equipo'
        ));
    }

}