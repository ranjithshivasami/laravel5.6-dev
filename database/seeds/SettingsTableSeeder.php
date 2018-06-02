<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Setting::create([
            'site_name' => "Laravel's Blog",
            'contact_number' => '123456789',
            'contact_email' => 'ranjith@gmail.com',
            'address' => 'No6 New buston Layout, coimbatore'
        ]);
    }
}
