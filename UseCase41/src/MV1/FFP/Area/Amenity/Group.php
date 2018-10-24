<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity;

class Group implements GroupInterface
{
    /** @var int */
    protected $id;
    /** @var string */
    protected $area_key;
    /** @var string */
    protected $title;
    /** @var string */
    protected $description;
    /** @var int */
    protected $order;
    /** @var MapInterface */
    protected $amenities;

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function getId(): int
    {
        if ($this->id === null) {
            throw new \LogicException('Group id has not been set.');
        }

        return $this->id;
    }

    public function setId(int $id): GroupInterface
    {
        if ($this->id !== null) {
            throw new \LogicException('Group id is already set.');
        }
        $this->id = $id;

        return $this;
    }

    public function getAreaKey(): string
    {
        if ($this->area_key === null) {
            throw new \LogicException('Group area_key has not been set.');
        }

        return $this->area_key;
    }

    public function setAreaKey(string $area_key): GroupInterface
    {
        if ($this->area_key !== null) {
            throw new \LogicException('Group area_key is already set.');
        }
        $this->area_key = $area_key;

        return $this;
    }

    public function getTitle(): string
    {
        if ($this->title === null) {
            throw new \LogicException('Group title has not been set.');
        }

        return $this->title;
    }

    public function setTitle(string $title): GroupInterface
    {
        if ($this->title !== null) {
            throw new \LogicException('Group title is already set.');
        }
        $this->title = $title;

        return $this;
    }

    public function getDescription(): string
    {
        if ($this->description === null) {
            throw new \LogicException('Group description has not been set.');
        }

        return $this->description;
    }

    public function setDescription(string $description): GroupInterface
    {
        if ($this->description !== null) {
            throw new \LogicException('Group description is already set.');
        }
        $this->description = $description;

        return $this;
    }

    public function getOrder(): int
    {
        if ($this->order === null) {
            throw new \LogicException('Group order has not been set.');
        }

        return $this->order;
    }

    public function setOrder(int $order): GroupInterface
    {
        if ($this->order !== null) {
            throw new \LogicException('Group order is already set.');
        }
        $this->order = $order;

        return $this;
    }

    public function getAmenities(): MapInterface
    {
        if ($this->amenities === null) {
            throw new \LogicException('Group amenities has not been set.');
        }

        return $this->amenities;
    }

    public function setAmenities(MapInterface $amenities): GroupInterface
    {
        if ($this->amenities !== null) {
            throw new \LogicException('Group amenities is already set.');
        }
        $this->amenities = $amenities;

        return $this;
    }
}
