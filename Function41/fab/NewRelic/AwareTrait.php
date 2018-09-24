<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\NewRelic;

use Neighborhoods\PrefabExamplesFunction41\NewRelicInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41NewRelic;

    public function setNewRelic(NewRelicInterface $newRelic): self
    {
        if ($this->hasNewRelic()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41NewRelic is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41NewRelic = $newRelic;

        return $this;
    }

    protected function getNewRelic(): NewRelicInterface
    {
        if (!$this->hasNewRelic()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41NewRelic is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41NewRelic;
    }

    protected function hasNewRelic(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41NewRelic);
    }

    protected function unsetNewRelic(): self
    {
        if (!$this->hasNewRelic()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41NewRelic is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41NewRelic);

        return $this;
    }
}
