<?php
//src/Shop/ShopBundle/Entity/RegisterCustomerEntity.php

namespace Shop\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
	* @ORM\Entity
*/
class RegisterCustomerEntity
{

 /**
	 *@ORM\Id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
*/
	 protected $id;


	/**
	*@ORM\Column(type="string")
	*/
	protected $name;
	
	/**
	* @ORM\Column(type="string")
	*/
	protected $address;

	/**
	*@ORM\Column(name="email_address",unique="true")
	 */
	protected $email;

	/**
	* @ORM\Column(type="string")
	*/
	protected $password;

	/**
	* @ORM\Column(type="string")
	*/
	protected $confirmPassword;

	/**
	* @ORM\Column(type="datetime")
	*/
	protected $created;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $validated;

	public function __construct()
	{
		$this->setCreated(new \DateTime());
		$this->setValidated('false');
	}


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set confirmPassword
     *
     * @param string $confirmPassword
     */
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }

    /**
     * Get confirmPassword
     *
     * @return string 
     */
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;
    }

    /**
     * Get validated
     *
     * @return boolean 
     */
    public function getValidated()
    {
        return $this->validated;
    }


}
