<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessJakeService;

interface JakeInterface
{
    public function getAge();

    public function setAge($age) : JakeInterface;

    public function getHeight();

    public function setHeight($height) : JakeInterface;

    public function getCodingAbilities();

    public function setCodingAbilities($coding_abilities) : JakeInterface;

    public function jsonSerialize();
}
