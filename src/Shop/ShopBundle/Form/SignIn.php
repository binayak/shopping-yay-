<?php
//src/Shop/ShopBundle/Form/SignIn.php
//
namespace Shop\ShopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SignIn extends AbstractType
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder->add('email','email');
		$builder->add('password','password');
	}
	
	public function getName()
	{
		return 'login';
	}
}

