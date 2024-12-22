<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Electronics',
                'slug' => Str::slug('Electronics'),
                'is_active' => true,
            ],
            [
                'name' => 'Clothing',
                'slug' => Str::slug('Clothing'),
                'is_active' => true,
            ],
            [
                'name' => 'Books',
                'slug' => Str::slug('Books'),
                'is_active' => true,
            ],
            [
                'name' => 'Furniture',
                'slug' => Str::slug('Furniture'),
                'is_active' => true,
            ],
            [
                'name' => 'Appliances',
                'slug' => Str::slug('Appliances'),
                'is_active' => true,
            ],
        ];

        for ($i = 0; $i < count($departments); $i++) {
            $departments[$i]['created_at'] = now();
            $departments[$i]['updated_at'] = now();
        }

        DB::table('departments')->insert($departments);
    }
}
