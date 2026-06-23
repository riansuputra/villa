<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\Price;
use App\Models\Setting;
use App\Models\SpecialOffer;
use App\Models\Villa;
use App\Models\VillaFeature;
use Illuminate\Database\Seeder;

class InitialVillaSeeder extends Seeder
{
    public function run(): void
    {

        Villa::create([

            'name' => 'Villa Paradise',

            'about' => 'Private luxury villa.',

            'contact' => 'Contact us anytime.',

            'phone' => '628123456789',

            'email' => 'villa@mail.com',

            'address' => 'Bali',

            'map_url' => 'https://maps.google.com',

            'hero_title' => 'Luxury Villa',

            'hero_subtitle' => 'Feel your stay',

            'hero_image' => 'hero.jpg',

            'explore_title' => 'Explore',

            'explore_description' => 'Beautiful view',

            'explore_background' => 'bg.jpg',

            'cta_title' => 'Ready To Stay',

            'cta_subtitle' => 'Reserve now',

        ]);

        Price::create([

            'price_day' => 1000000,

            'price_week' => 6500000,

            'price_month' => 20000000,

        ]);

        Setting::create([

            'default_currency' => 'IDR',

            'default_language' => 'en',

            'booking_whatsapp' => '628123456789',

            'instagram' => 'villa',

            'facebook' => 'villa',

            'tiktok' => 'villa',

            'youtube' => 'villa',

            'copyright' => '© Villa',

            'privacy_policy' => 'Privacy',

        ]);

        Facility::create([
            'name' => 'Restaurant',
            'icon' => 'restaurant',
        ]);

        VillaFeature::create([
            'title' => 'Bed',
            'value' => 'King Bed',
        ]);

        SpecialOffer::create([

            'title' => 'Opening Promo',

            'discount' => 10,

            'is_active' => true,

        ]);
    }
}
