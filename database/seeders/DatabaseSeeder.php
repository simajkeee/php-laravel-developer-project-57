<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(static function () {
            if (config('seeders.truncate.task_statuses')) {
                DB::table('task_statuses')->truncate();
            }

            TaskStatus::factory()->createMany([
                ['name' => 'New'],
                ['name' => 'In progress'],
                ['name' => 'Testing'],
                ['name' => 'Completed']
            ]);
        });
    }
}
