<?php

namespace MS\MsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use MS\MsBundle\Entity\User;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user_type', 'choice', array('choices' => User::getUserTypes(), 'multiple' => true, "expanded" => true,'mapped' => true)) 
		    ->add('nick_name')
            //->add('nick_name')
            ->add('first_name')
           // ->add('last_name')
            ->add('email')
            ->add('password','password')
			->add('join', 'submit', array('attr' => array('class' => 'btn btn-success')))
            /*->add('salt')
            ->add('status')
            ->add('id_chat_status')
            ->add('sex')
            ->add('descriptionMe')
            ->add('country')
            ->add('city')
            ->add('date_of_birth')
            ->add('date_reg')
            ->add('date_last_login')
            ->add('type')
            ->add('facebook_url')
            ->add('twitter_url')
            ->add('youtube_url')
            ->add('myspace_url')
            ->add('id_paypal')
            ->add('id_media')
            ->add('record_label')
            ->add('id_music_genre')*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MS\MsBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ms_msbundle_user';
    }
}
