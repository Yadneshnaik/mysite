<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run()
    {
        About::create([
            'content' => 'We are a leading IT company providing innovative solutions to help businesses succeed in the digital age.',
        ]);
    }
}
