<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area;

interface AmenityInterface extends \JsonSerializable
{

    public function getId(): int;

    public function setId(int $id): AmenityInterface;

    public function getAmenityId(): int;

    public function setAmenityId(int $amenity_id): AmenityInterface;

    public function getName(): string;

    public function setName(string $name): AmenityInterface;

    public function getAlias(): string;

    public function setAlias(string $alias): AmenityInterface;

    public function getOrder(): int;

    public function setOrder(int $order): AmenityInterface;
}
