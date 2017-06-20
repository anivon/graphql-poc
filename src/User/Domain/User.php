<?php

namespace User\Domain;

use Car\Domain\Car;
use Doctrine\Common\Collections\ArrayCollection;
use GraphQL\Type\Definition\InterfaceType;

/**
 * @author Alexis NIVON <anivon@alexisnivon.fr>
 */
class User extends InterfaceType
{
    /** @var int **/
    private $id;

    /** @var string **/
    private $email;

    /** @var string **/
    private $firstname;
    
    /** @var string **/
    private $lastname;

    /** @var ArrayCollection|Car[] **/
    private $cars;


    /**
     * @param string $email
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct($email, $firstname, $lastname)
    {
        $this->email     = $email;
        $this->firstname = $firstname;
        $this->lastname  = $lastname;

        $this->cars      = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return Car[]|ArrayCollection
     */
    public function getCars()
    {
        return $this->cars;
    }
}
