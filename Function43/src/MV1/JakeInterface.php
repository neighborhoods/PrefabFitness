<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction43\MV1;

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