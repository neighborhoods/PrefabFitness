<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map;

class Builder implements BuilderInterface
{

    use Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\Factory\AwareTrait;

    /**
     * @var array
     */
    protected $record = null;

    public function build() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\MapInterface
    {
        $map = $this->getmapFactory()->create();
        // @TODO - build the object.

        return $map;
    }

    protected function getRecord() : array
    {
        if ($this->record === null) {
            throw new \LogicException('Builder record has not been set.');
        }

        return $this->record;
    }

    public function setRecord(array $record) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\BuilderInterface
    {
        if ($this->record !== null) {
            throw new \LogicException('Builder record is already set.');
        }

        $this->record = $record;

        return $this;
    }


}

