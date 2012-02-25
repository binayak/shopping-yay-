<?php
//src/Shop/ShopBundle/Entity/SignInEntity.php

namespace Shop\ShopBundle\Entity;

class SignInEntity
{
	protected $email;
	//email used to sign in

	protected $password;
	
	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}
}



