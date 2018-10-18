<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity;

interface GroupInterface extends \JsonSerializable
{
    public const TABLE_NAME = 'mv1_areas_fiftyfive';

    public function getId(): int;

    public function setId(int $id): GroupInterface;

    public function getAreaKey(): string;

    public function setAreaKey(string $area_key): GroupInterface;

    public function getTitle(): string;

    public function setTitle(string $title): GroupInterface;

    public function getDescription(): string;

    public function setDescription(string $description): GroupInterface;

    public function getOrder(): int;

    public function setOrder(int $order): GroupInterface;

    public function getAmenities(): MapInterface;

    public function setAmenities(MapInterface $amenities): GroupInterface;
}
