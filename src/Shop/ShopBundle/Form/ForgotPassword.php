<?php
//src/Shop/ShopBundle/Form/ForgotPassword.php
//
namespace Shop\ShopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ForgotPassword extends AbstractType
{
	public function buildform(FormBuilder $builder, array $options)
	{
		$builder->add('email','email');
	}

	public function getName()
	{return 'forgot';}
}

