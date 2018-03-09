<?php
/**
 * @author: Alejandro Martínez Peregrina
 * @date: 6/02/18
 */

namespace TeletengaBundle\Domain\Model\User\Entity;

/**
 * Class User
 * @package TeletengaBundle\Domain\Model\User\Entity
 */
class User
{

    /**
     * @var \TeletengaBundle\Domain\Model\User\ValueObject\UserId
     */
    private $userId;

    private $nickname;

    private $email;

    /**
     * User constructor.
     * @param $id
     * @param $nickname
     * @param $email
     */
    protected function __construct($id, $nickname, $email)
    {
        $this->userId = $id;

        $this->nickname = $nickname;

        $this->email = $email;
    }

    /**
     * @return \TeletengaBundle\Domain\Model\User\ValueObject\UserId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }




}