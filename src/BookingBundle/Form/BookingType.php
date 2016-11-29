<?php

namespace BookingBundle\Form;

use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	        ->add('visitingDay',        DateType::class, array(
	        	'widget'        => 'single_text',
		        'html5'         => false,
		        'attr'          => ['class' => 'js_datepicker'],
	        ))

	        ->add('kindOfTicket',       ChoiceType::class, array(
	        	'choices'       => array(
	        		'journée'       => true,
			        'demi-journée'  => false
		        )
	        ))
	        ->add('emailVisitor',       EmailType::class)
	        ->add('nbTicket',           IntegerType::class)
	        // ajout du bouton de soumission du formulaire
	        ->add('ordering',           SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BookingBundle\Entity\Booking'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bookingbundle_booking';
    }


}
