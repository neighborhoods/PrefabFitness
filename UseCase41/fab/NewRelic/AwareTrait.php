<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\NewRelic;

use Neighborhoods\PrefabExamplesUseCase41\NewRelicInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41NewRelic;

    public function setNewRelic(NewRelicInterface $newRelic): self
    {
        if ($this->hasNewRelic()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41NewRelic is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41NewRelic = $newRelic;

        return $this;
    }

    protected function getNewRelic(): NewRelicInterface
    {
        if (!$this->hasNewRelic()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41NewRelic is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41NewRelic;
    }

    protected function hasNewRelic(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41NewRelic);
    }

    protected function unsetNewRelic(): self
    {
        if (!$this->hasNewRelic()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41NewRelic is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41NewRelic);

        return $this;
    }
}
