<?php
//src/Shop/ShopBundle/Entity/ForgotPasswordEntity.php
//

namespace Shop\ShopBundle\Entity;

class ForgotPasswordEntity
{
	protected $email;

	public function getEmail()
	{
		return $this->email;
	}
	
	public function setEmail($email)
	{
		$this->email = $email;
	}
}



