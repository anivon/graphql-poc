<?php

namespace User\Infra\Repository\DoctrineORM;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use User\Domain\Repository\UserRepositoryInterface;

/**
 * @author Alexis NIVON <anivon@alexisnivon.fr>
 */
class UserRepository implements UserRepositoryInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function findRequired($userId)
    {
        $entity = $this->find($userId);

        if (!$entity) {
            throw new \LogicException(sprintf('User [%d] not found.', $userId));
        }

        return $entity;
    }

    /**
     * {@inheritdoc}
     */
    public function find($userId)
    {
        return $this->getRepository()->find($userId);
    }

    /**
     * @return ObjectRepository|EntityManagerInterface
     */
    private function getRepository()
    {
        return $this->entityManager->getRepository('UserBundle:User');
    }
}
