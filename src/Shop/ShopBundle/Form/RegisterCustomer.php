<?php
//src/Shop/ShopBundle/Form/RegisterCustomer.php

namespace Shop\ShopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RegisterCustomer extends AbstractType
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder->add('name');
		$builder->add('email','email');
		$builder->add('address','textarea');
		$builder->add('password','password');
		$builder->add('confirmPassword','password');
	}

	public function getName()
	{
		return 'customer';
	}
}

