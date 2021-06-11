<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase85\V1;

use LogicException;

class Custom implements CustomInterface
{
    /** @var int */
    private $id;

     public function getId(): int
     {
         if ($this->id === null) {
             throw new LogicException('id has not been set');
         }
         
         return $this->id;
     }
     
     public function setId(int $id): CustomInterface
     {
         if ($this->id !== null) {
             throw new LogicException('id has already been set');
         }
         
         $this->id = $id;
         return $this;
     }
     
     public function hasId(): bool
     {
        return $this->id !== null;
     }
     

    public function jsonSerialize()
    {
        return [
            'jsonSerialize' => 'custom implementation',
        ];
    }
}
