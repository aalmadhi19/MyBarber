<?php

use App\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'name'  => 'Auto Confirmation',
            'description' => 'Confirm appointment without approval',
            'status' => 1,
        ]);

    }
}
