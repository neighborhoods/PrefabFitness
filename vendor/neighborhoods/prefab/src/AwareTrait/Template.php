<?php
declare(strict_types=1);


/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $REPLACE_DAOVAR;

    public function setAwareTrait(REPLACE_DAONAMEInterface $REPLACE_DAOVAR) : self
    {
        if ($this->hasAwareTrait()) {
            throw new \LogicException('VARNAMEPLACEHOLDER is already set.');
        }
        $this->REPLACE_DAOVAR = $REPLACE_DAOVAR;

        return $this;
    }

    protected function getAwareTrait() : REPLACE_DAONAMEInterface
    {
        if (!$this->hasAwareTrait()) {
            throw new \LogicException('VARNAMEPLACEHOLDER is not set.');
        }

        return $this->REPLACE_DAOVAR;
    }

    protected function hasAwareTrait() : bool
    {
        return isset($this->REPLACE_DAOVAR);
    }

    protected function unsetAwareTrait() : self
    {
        if (!$this->hasAwareTrait()) {
            throw new \LogicException('VARNAMEPLACEHOLDER is not set.');
        }
        unset($this->REPLACE_DAOVAR);

        return $this;
    }
}
