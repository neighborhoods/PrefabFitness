<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Time;

use Neighborhoods\PrefabExamplesUseCase41\TimeInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41Time;

    public function setTime(TimeInterface $time): self
    {
        if ($this->hasTime()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41Time is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41Time = $time;

        return $this;
    }

    protected function getTime(): TimeInterface
    {
        if (!$this->hasTime()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41Time is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41Time;
    }

    protected function hasTime(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41Time);
    }

    protected function unsetTime(): self
    {
        if (!$this->hasTime()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41Time is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41Time);

        return $this;
    }
}
