<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction43\MV1\Jake;

/**
 * @neighborhoods\prefab:DAO
 */
class Noah implements NoahInterface
{
    protected $age;
    protected $height;
    protected $coding_abilities;

    public function getAge()
    {
        if ($this->age === null) {
            throw new \LogicException('Jake age has not been set.');
        }
        return $this->age;
    }

    public function setAge($age) : NoahInterface
    {
        if ($this->age !== null) {
            throw new \LogicException('Jake age is already set.');
        }
        $this->age = $age;
        return $this;
    }

    public function getHeight()
    {
        if ($this->height === null) {
            throw new \LogicException('Jake height has not been set.');
        }
        return $this->height;
    }

    public function setHeight($height) : NoahInterface
    {
        if ($this->height !== null) {
            throw new \LogicException('Jake height is already set.');
        }
        $this->height = $height;
        return $this;
    }

    public function getCodingAbilities()
    {
        if ($this->coding_abilities === null) {
            throw new \LogicException('Jake coding_abilities has not been set.');
        }
        return $this->coding_abilities;
    }

    public function setCodingAbilities($coding_abilities) : NoahInterface
    {
        if ($this->coding_abilities !== null) {
            throw new \LogicException('Jake coding_abilities is already set.');
        }
        $this->coding_abilities = $coding_abilities;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
