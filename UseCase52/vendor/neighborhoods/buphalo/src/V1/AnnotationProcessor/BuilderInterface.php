<?php
declare(strict_types=1);

namespace Neighborhoods\Buphalo\V1\AnnotationProcessor;

use Neighborhoods\Buphalo\V1\AnnotationProcessorInterface;
use Neighborhoods\Buphalo\V1\FabricationFileInterface;

interface BuilderInterface
{
    public const PROCESSOR_FQCN = 'processor_fqcn';

    public function build(): AnnotationProcessorInterface;

    public function setRecord(array $record): BuilderInterface;

    public function setFabricationFile(FabricationFileInterface $FabricationFile);
}
