<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessFunction44\MV1;

interface DAOInterface extends \JsonSerializable
{

    public function getPropertyInt(): int;

    public function setPropertyInt(int $property_int): DAOInterface;

    public function getPropertyFloat(): float;

    public function setPropertyFloat(float $property_float): DAOInterface;

    public function getPropertyString(): string;

    public function setPropertyString(string $property_string): DAOInterface;

    public function getPropertyBool(): bool;
}
