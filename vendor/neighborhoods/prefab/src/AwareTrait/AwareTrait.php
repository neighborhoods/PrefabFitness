<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamples\AwareTrait;


/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesAwareTrait;

    public function setAwareTrait(AwareTrait $awareTrait) : self
    {
        if ($this->hasAwareTrait()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesAwareTrait is already set.');
        }
        $this->NeighborhoodsPrefabExamplesAwareTrait = $awareTrait;

        return $this;
    }

    protected function getAwareTrait() : AwareTrait
    {
        if (!$this->hasAwareTrait()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesAwareTrait is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesAwareTrait;
    }

    protected function hasAwareTrait() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesAwareTrait);
    }

    protected function unsetAwareTrait() : self
    {
        if (!$this->hasAwareTrait()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesAwareTrait is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesAwareTrait);

        return $this;
    }
}
