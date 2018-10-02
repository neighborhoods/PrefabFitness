<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessFunction44\MV1;

class DAO implements DAOInterface
{
    /** @var int */
    protected $property_int;
    /** @var float */
    protected $property_float;
    /** @var string */
    protected $property_string;
    /** @var bool */
    protected $property_bool;

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function getPropertyInt(): int
    {
        if ($this->property_int === null) {
            throw new \LogicException('DAO property_int has not been set.');
        }

        return $this->property_int;
    }

    public function setPropertyInt(int $property_int): DAOInterface
    {
        if ($this->property_int !== null) {
            throw new \LogicException('DAO property_int is already set.');
        }
        $this->property_int = $property_int;

        return $this;
    }

    public function getPropertyFloat(): float
    {
        if ($this->property_float === null) {
            throw new \LogicException('DAO property_float has not been set.');
        }

        return $this->property_float;
    }

    public function setPropertyFloat(float $property_float): DAOInterface
    {
        if ($this->property_float !== null) {
            throw new \LogicException('DAO property_float is already set.');
        }
        $this->property_float = $property_float;

        return $this;
    }

    public function getPropertyString(): string
    {
        if ($this->property_string === null) {
            throw new \LogicException('DAO property_string has not been set.');
        }

        return $this->property_string;
    }

    public function setPropertyString(string $property_string): DAOInterface
    {
        if ($this->property_string !== null) {
            throw new \LogicException('DAO property_string is already set.');
        }
        $this->property_string = $property_string;

        return $this;
    }

    public function getPropertyBool(): bool
    {
        if ($this->property_bool === null) {
            throw new \LogicException('DAO property_bool has not been set.');
        }

        return $this->property_bool;
    }

    public function setPropertyBool(bool $property_bool): DAOInterface
    {
        if ($this->property_bool !== null) {
            throw new \LogicException('DAO property_bool is already set.');
        }
        $this->property_bool = $property_bool;

        return $this;
    }
}
