<?php

namespace HuangChun\MetaSystem\App\Repositories\Setting;

use HuangChun\MetaSystem\App\Models\Method;
use HuangChun\MetaSystem\App\Repositories\BaseRepository;

class MethodRepository extends BaseRepository implements MethodRepositoryInterface
{
    protected $model = Method::class;
}
