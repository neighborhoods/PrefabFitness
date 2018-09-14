<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\SearchCriteria;

use Neighborhoods\PrefabExamplesFunction41\SearchCriteriaInterface;

interface BuilderInterface
{
    public function build(): SearchCriteriaInterface;
}
