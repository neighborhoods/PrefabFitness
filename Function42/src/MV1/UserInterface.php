<?php

namespace Neighborhoods\Function42\MV1;


/**
 * @neighborhoods\prefab:DAO
 */
interface UserInterface
{
    public function getId() : int;

    public function setId(int $id) : UserInterface;

    public function getEmail() : string;

    public function setEmail(string $email) : UserInterface;

    public function getFirstname() : string;

    public function setFirstname(string $first_name) : UserInterface;

    public function getLastname() : string;

    public function setLastname(string $last_name) : UserInterface;

    public function getKey() : string;

    public function setKey(string $key) : UserInterface;

    public function getPhone() : string;

    public function setPhone(string $phone) : UserInterface;

    public function getStatus() : string;

    public function setStatus(string $status) : UserInterface;

    public function getVerified() : bool;

    public function setVerified(bool $verified) : UserInterface;

    public function jsonSerialize();
}
