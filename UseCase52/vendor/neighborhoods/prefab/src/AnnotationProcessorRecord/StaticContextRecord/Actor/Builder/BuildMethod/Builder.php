<?php
declare(strict_types=1);

namespace Neighborhoods\Prefab\AnnotationProcessorRecord\StaticContextRecord\Actor\Builder\BuildMethod;

use Neighborhoods\Prefab\BuildConfigurationInterface;
use Neighborhoods\Prefab\DaoPropertyInterface;
use Neighborhoods\Prefab\AnnotationProcessorRecord\StaticContextRecord\BuilderInterface;
use Neighborhoods\Prefab\AnnotationProcessor;

class Builder implements BuilderInterface
{
    protected $buildConfiguration;

    public function build() : array
    {
        $staticContextRecord = [];
        $propertyArray = [];

        foreach ($this->getBuildConfiguration()->getDaoPropertyMap() as $daoProperty) {
            $propertyArray[$daoProperty->getName()] = [
                AnnotationProcessor\Actor\Builder::ACTOR_PROPERTY_KEY_NULLABLE => $daoProperty->getNullable(),
                AnnotationProcessor\Actor\Builder::ACTOR_PROPERTY_KEY_DATA_TYPE => $daoProperty->getDataType(),
                AnnotationProcessor\Actor\Builder::ACTOR_PROPERTY_KEY_CREATED_ON_INSERT => $daoProperty->getCreatedOnInsert(),
            ];
        }

        $staticContextRecord[AnnotationProcessor\Actor\Builder::STATIC_CONTEXT_RECORD_KEY_PROPERTIES] = $propertyArray;
        $staticContextRecord[AnnotationProcessor\Actor\Builder::STATIC_CONTEXT_RECORD_KEY_VENDOR] = $this->getBuildConfiguration()->getVendorName();

        return $staticContextRecord;
    }

    protected function getBuildConfiguration() : BuildConfigurationInterface
    {
        if ($this->buildConfiguration === null) {
            throw new \LogicException('Builder buildConfiguration has not been set.');
        }
        return $this->buildConfiguration;
    }

    public function setBuildConfiguration(BuildConfigurationInterface $buildConfiguration) : BuilderInterface
    {
        if ($this->buildConfiguration !== null) {
            throw new \LogicException('Builder buildConfiguration is already set.');
        }
        $this->buildConfiguration = $buildConfiguration;
        return $this;
    }
}
