<?php

namespace User\Domain\Repository;

use User\Domain\User;

/**
 * @author Alexis NIVON <anivon@alexisnivon.fr>
 */
interface UserRepositoryInterface
{
    /**
     * @param int $userId
     *
     * @return User
     */
    public function findRequired($userId);

    /**
     * @param int $userId
     *
     * @return User|null
     */
    public function find($userId);
}
