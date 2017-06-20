<?php

namespace User\Domain\Resolver;

use Overblog\GraphQLBundle\Resolver\AbstractResolver;
use Overblog\GraphQLBundle\Resolver\ResolverInterface;
use User\Domain\Repository\UserRepositoryInterface;
use User\Domain\User;

/**
 * @author Alexis NIVON <anivon@alexisnivon.fr>
 */
class UserResolver extends AbstractResolver
{
    /** @var UserRepositoryInterface **/
    private $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function resolve($input)
    {
        if (!$input->offsetExists('id')) {
            return null;
        }

        return $this->userRepository->findRequired($input->offsetGet('id'));
    }
}
