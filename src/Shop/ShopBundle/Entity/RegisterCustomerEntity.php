<?php
//src/Shop/ShopBundle/Entity/RegisterCustomerEntity.php

namespace Shop\ShopBundle\Entity;

class RegisterCustomerEntity
{
	protected $name;

	protected $address;

	protected $email;

	protected $password;

	protected $confirmPassword;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name ;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setAddress($address)
	{
		$this->address =$address ;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email ;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password ;
	}

	public function getConfirmPassword()
	{
		return $this->confirmPassword;
	}

	public function setConfirmPassword($confirmPassword)
	{
		$this->confirmPassword = $confirmPassword ;
	}
}

