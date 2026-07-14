<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class AddSocialSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $favicon = asset('web/img/favicon.png');

        Setting::create(['key' => 'favicon', 'value' => $favicon]);
        Setting::create(['key' => 'facebook_url', 'value' => 'https://www.facebook.com/Tenadam/']);
        Setting::create(['key' => 'twitter_url', 'value' => 'https://twitter.com/Tenadam?lang=en']);
        Setting::create(['key' => 'instagram_url', 'value' => 'https://www.instagram.com/?hl=en']);
        Setting::create([
            'key' => 'linkedIn_url',
            'value' => 'https://www.linkedin.com/organization-guest/company/Tenadam-technologies?challengeId=AQFgQaMxwSxCdAAAAXOA_wosiB2vYdQEoITs6w676AzV8cu8OzhnWEBNUQ7LCG4vds5-A12UIQk1M4aWfKmn6iM58OFJbpoRiA&submissionId=0088318b-13b3-2416-9933-b463017e531e',
        ]);
        Setting::create([
            'key' => 'about_us', 'value' => 'Tenadam is a modern, comprehensive Health Management System designed to streamline hospital operations, enhance patient care, and improve administrative efficiency. Built with cutting-edge technology, Tenadam empowers healthcare providers with powerful tools for appointment management, patient records, billing, pharmacy operations, and more.',
        ]);
    }
}
