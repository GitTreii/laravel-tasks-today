<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TasksTodaySeeder extends Seeder
{
    public function run(): void
    {
        $today = Carbon::today();

        DB::table('tasks')->insert([
            [
                'title' => 'Check team emails',
                'status' => 'pending',
                'task_date' => $today,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Update project documentation',
                'status' => 'pending',
                'task_date' => $today,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Review task progress',
                'status' => 'completed',
                'task_date' => $today,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Prepare weekly report',
                'status' => 'pending',
                'task_date' => $today,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Database backup',
                'status' => 'completed',
                'task_date' => $today->copy()->subDay(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Review client feedback',
                'status' => 'completed',
                'task_date' => $today->copy()->subDay(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Plan next sprint',
                'status' => 'pending',
                'task_date' => $today->copy()->addDay(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Team planning meeting',
                'status' => 'pending',
                'task_date' => $today->copy()->addDay(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('users')->insert([
            'username' => 'demo_user',
            'full_name' => 'Tracey Justin Devilleres',
            'email' => 'demo@example.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
