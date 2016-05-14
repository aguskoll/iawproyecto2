<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Doctrine\ORM\EntityRepository;

class MatchFormType extends AbstractType
{
	public function getBlockPrefix(){
    	return 'match_save';
	}

public function buildForm(FormBuilderInterface $builder, array $options){
    $builder
    ->add('Editor',  EntityType::class, array('class' => 'UserBundle:User',
        'query_builder' => function (EntityRepository $er) {
        return $er->createQueryBuilder('u')
            ->where('u.esEditor = 1');
    }, 'attr' => array('class'=>'form-control')))
    ->add('Horario', TimeType::class, array('input'  => 'datetime','widget' =>'single_text',));
}



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' =>'AppBundle\Entity\Partido',
        ));
    }

}