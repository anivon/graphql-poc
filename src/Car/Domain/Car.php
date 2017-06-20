<?php

namespace Car\Domain;

use User\Domain\User;

/**
 * @author Alexis NIVON <anivon@alexisnivon.fr>
 */
class Car
{
    /** @var int **/
    private $id;

    /** @var User **/
    private $owner;

    /** @var string **/
    private $denomination;

    /**
     * @param User   $owner
     * @param string $denomination
     */
    public function __construct(User $owner, $denomination)
    {
        $this->owner        = $owner;
        $this->denomination = $denomination;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return string
     */
    public function getDenomination()
    {
        return $this->denomination;
    }
}
