<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1,500) as $count) {
            Report::create([
                'user_id' => rand(1, 2),
                'title' => sprintf('Report #%s', $count),
                'body' => sprintf('Jalan %s berlubang', $count),
            ]);
        }
    }
}
