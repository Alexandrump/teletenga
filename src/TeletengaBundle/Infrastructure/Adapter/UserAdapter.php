<?php
/**
 * @author: Alejandro Martínez Peregrina
 * @date: 6/02/18
 */

namespace TeletengaBundle\Infrastructure\Adapter;


use Symfony\Component\Security\Core\User\UserInterface;
use TeletengaBundle\Domain\Entity\Model\User;

class UserAdapter extends User implements UserInterface
{


    public static function add($id, $nickname, $email)
    {
        return new static($id, $nickname, $email);
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }


}