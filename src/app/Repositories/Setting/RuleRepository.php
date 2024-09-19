<?php

namespace HuangChun\MetaSystem\App\Repositories\Setting;

use HuangChun\MetaSystem\App\Models\Rule;
use HuangChun\MetaSystem\App\Repositories\BaseRepository;

class RuleRepository extends BaseRepository implements RuleRepositoryInterface
{
    protected $model = Rule::class;

    public function getRuleWithMethods($ruleId = null)
    {
        $role = $this->with('methods')
            ->when(filled($ruleId), fn ($query) => $query->where('id', $ruleId));

        return $role;
    }
}
