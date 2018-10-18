<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteriaInterface;

interface BuilderInterface
{
    public function build(): SearchCriteriaInterface;
}
