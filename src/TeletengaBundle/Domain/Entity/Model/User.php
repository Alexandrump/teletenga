<?php
/**
 * @author: Alejandro Martínez Peregrina
 * @date: 6/02/18
 */

namespace TeletengaBundle\Domain\Entity\Model;

/**
 * Class User
 * @package TeletengaBundle\Domain\Entity\Model
 */
class User
{

    private $id;

    private $nickname;

    private $email;

    protected function __construct($id, $nickname, $email)
    {
        $this->id = $id;

        $this->nickname = $nickname;

        $this->email =$email;
    }

    public static function add ($id, $nickname, $email)
    {
        return new static($id, $nickname, $email);
    }


}