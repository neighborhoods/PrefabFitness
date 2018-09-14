<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area;

class Amenity implements AmenityInterface
{
    /** @var int */
    protected $id;
    /** @var int */
    protected $amenity_id;
    /** @var string */
    protected $name;
    /** @var string */
    protected $alias;
    /** @var int */
    protected $order;

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function getId(): int
    {
        if ($this->id === null) {
            throw new \LogicException('Amenity id has not been set.');
        }

        return $this->id;
    }

    public function setId(int $id): AmenityInterface
    {
        if ($this->id !== null) {
            throw new \LogicException('Amenity id is already set.');
        }
        $this->id = $id;

        return $this;
    }

    public function getAmenityId(): int
    {
        if ($this->amenity_id === null) {
            throw new \LogicException('Amenity amenity_id has not been set.');
        }

        return $this->amenity_id;
    }

    public function setAmenityId(int $amenity_id): AmenityInterface
    {
        if ($this->amenity_id !== null) {
            throw new \LogicException('Amenity amenity_id is already set.');
        }
        $this->amenity_id = $amenity_id;

        return $this;
    }

    public function getName(): string
    {
        if ($this->name === null) {
            throw new \LogicException('Amenity name has not been set.');
        }

        return $this->name;
    }

    public function setName(string $name): AmenityInterface
    {
        if ($this->name !== null) {
            throw new \LogicException('Amenity name is already set.');
        }
        $this->name = $name;

        return $this;
    }

    public function getAlias(): string
    {
        if ($this->alias === null) {
            throw new \LogicException('Amenity alias has not been set.');
        }

        return $this->alias;
    }

    public function setAlias(string $alias): AmenityInterface
    {
        if ($this->alias !== null) {
            throw new \LogicException('Amenity alias is already set.');
        }
        $this->alias = $alias;

        return $this;
    }

    public function getOrder(): int
    {
        if ($this->order === null) {
            throw new \LogicException('Amenity order has not been set.');
        }

        return $this->order;
    }

    public function setOrder(int $order): AmenityInterface
    {
        if ($this->order !== null) {
            throw new \LogicException('Amenity order is already set.');
        }
        $this->order = $order;

        return $this;
    }
}
