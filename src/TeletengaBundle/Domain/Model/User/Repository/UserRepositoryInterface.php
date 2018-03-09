<?php
/**
 * @author: Alejandro Martínez Peregrina
 * @date: 6/02/18
 */

namespace TeletengaBundle\Domain\Model\User\Repository;

use TeletengaBundle\Domain\Model\User\Entity\User;
use TeletengaBundle\Domain\Model\User\ValueObject\UserId;

/**
 * Interface UserRepositoryInterface
 * @package TeletengaBundle\Domain\Model\User\Repository
 */
interface UserRepositoryInterface
{
    public function find(UserId $userId);

    public function findAll();

    public function add(User $user);

    public function delete(User $user);

}