<?php

namespace HuangChun\MetaSystem\App\Repositories\Setting;

use HuangChun\MetaSystem\App\Repositories\BaseRepositoryInterface;

interface RuleRepositoryInterface extends BaseRepositoryInterface
{
    public function getRuleWithMethods($ruleId = null);
}
