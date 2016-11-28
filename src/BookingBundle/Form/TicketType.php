<?php

namespace BookingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	        ->add('visitorLastName',        TextType::class)
	        ->add('visitorFirstName',       TextType::class)
	        ->add('nationality',            CountryType::class, array(
	        	'preferred_choices'     => array(
	        		'FR',
			        'IT'
		        )
	        ))
	        ->add('birthDate',              BirthdayType::class, array(
	        	'widget'                => 'text',
		        'format'                => 'dd-MM-yyyy'
	        ))
	        // ajout du bouton de soumission vers le paiement
	        ->add('paying',                 SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BookingBundle\Entity\Ticket'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bookingbundle_ticket';
    }


}
