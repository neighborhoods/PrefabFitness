<?php
declare(strict_types=1);

namespace Neighborhoods\Function42\MV1\User;

use Neighborhoods\Function42\MV1\UserInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    /** @var array */
    protected $record;

    public function build() : UserInterface
    {
        $user = $this->getMV1UserFactory()->create();
        $user->setId($this->record['id'])
            ->setKey($this->record['key'])
            ->setFirstname($this->record['fname'])
            ->setLastname($this->record['lname'])
            ->setEmail($this->record['email'])
            ->setStatus($this->record['status'])
            ->setPhone($this->record['phone'] ?? '')
            ->setVerified($this->record['verified']);

        return $user;
    }

    protected function getRecord() : array
    {
        if ($this->record === null) {
            throw new \LogicException('Builder record has not been set.');
        }

        return $this->record;
    }

    public function setRecord(array $record) : BuilderInterface
    {
        if ($this->record !== null) {
            throw new \LogicException('Builder record is already set.');
        }

        $this->record = $record;

        return $this;
    }
}
