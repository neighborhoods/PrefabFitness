<?php
declare(strict_types=1);

namespace Neighborhoods\Function42\MV1;

/**
 * @neighborhoods\prefab:DAO
 */

class User implements UserInterface
{
    /** @var int */
    protected $id;
    /** @var string */
    protected $email;
    /** @var string */
    protected $first_name;
    /** @var string */
    protected $last_name;
    /** @var string */
    protected $key;
    /** @var string */
    protected $phone;
    /** @var string */
    protected $status;
    /** @var bool */
    protected $verified;

    public function getId() : int
    {
        if ($this->id === null) {
            throw new \LogicException('User id has not been set.');
        }
        return $this->id;
    }

    public function setId(int $id) : UserInterface
    {
        if ($this->id !== null) {
            throw new \LogicException('User id already set.');
        }
        $this->id = $id;
        return $this;
    }

    public function getEmail() : string
    {
        if ($this->email === null) {
            throw new \LogicException('User email has not been set.');
        }
        return $this->email;
    }

    public function setEmail(string $email) : UserInterface
    {
        if ($this->email !== null) {
            throw new \LogicException('User email already set.');
        }
        $this->email = $email;
        return $this;
    }

    public function getFirstname() : string
    {
        if ($this->first_name === null) {
            throw new \LogicException('User fname has not been set.');
        }
        return $this->first_name;
    }

    public function setFirstname(string $first_name) : UserInterface
    {
        if ($this->first_name !== null) {
            throw new \LogicException('User fname already set.');
        }
        $this->first_name = $first_name;
        return $this;
    }

    public function getLastname() : string
    {
        if ($this->last_name === null) {
            throw new \LogicException('User lname has not been set.');
        }
        return $this->last_name;
    }

    public function setLastname(string $last_name) : UserInterface
    {
        if ($this->last_name !== null) {
            throw new \LogicException('User lname already set.');
        }
        $this->last_name = $last_name;
        return $this;
    }

    public function getKey() : string
    {
        if ($this->key === null) {
            throw new \LogicException('User key has not been set.');
        }
        return $this->key;
    }

    public function setKey(string $key) : UserInterface
    {
        if ($this->key !== null) {
            throw new \LogicException('User key already set.');
        }
        $this->key = $key;
        return $this;
    }

    public function getPhone() : string
    {
        if ($this->phone === null) {
            throw new \LogicException('User phone has not been set.');
        }
        return $this->phone;
    }

    public function setPhone(string $phone) : UserInterface
    {
        if ($this->phone !== null) {
            throw new \LogicException('User phone already set.');
        }
        $this->phone = $phone;
        return $this;
    }

    public function getStatus() : string
    {
        if ($this->status === null) {
            throw new \LogicException('User status has not been set.');
        }
        return $this->status;
    }

    public function setStatus(string $status) : UserInterface
    {
        if ($this->status !== null) {
            throw new \LogicException('User status already set.');
        }
        $this->status = $status;
        return $this;
    }

    public function getVerified() : bool
    {
        if ($this->verified === null) {
            throw new \LogicException('User verified has not been set.');
        }
        return $this->verified;
    }

    public function setVerified(bool $verified) : UserInterface
    {
        if ($this->verified !== null) {
            throw new \LogicException('User verified already set.');
        }
        $this->verified = $verified;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
