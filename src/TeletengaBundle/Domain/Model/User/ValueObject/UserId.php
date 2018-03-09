<?php
/**
 * @author: Alejandro Martínez Peregrina
 * @date: 6/02/18
 */

namespace TeletengaBundle\Domain\Model\User\ValueObject;

/**
 * Class UserRepositoryInterface
 * @package TeletengaBundle\Domain\Model\User\ValueObject
 */
class UserId
{

    private $id;

    /**
     * UserId constructor.
     * @param $id
     */
    protected function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @param UserId $anotherId
     * @return bool
     */
    public function equals(UserId $anotherId)
    {
        return $this->id === $anotherId->id();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->id();
    }

}