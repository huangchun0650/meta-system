<?php

namespace Database\Seeders;

use HuangChun\MetaSystem\App\Models\Method;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('methods') as $methodData) {
            Method::firstOrCreate([
                'name' => $methodData['name'],
            ]);
        }
    }
}
