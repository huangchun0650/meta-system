<?php

namespace HuangChun\MetaSystem\App\Repositories\Admin;

use HuangChun\MetaSystem\App\Models\Admin;
use HuangChun\MetaSystem\App\Repositories\BaseRepository;

class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    protected $model = Admin::class;
}
