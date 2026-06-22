<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Villa;
use App\Models\GalleryImage;
use App\Models\Facility;
use App\Models\VillaFeature;
use App\Models\SpecialOffer;
use App\Models\Price;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $villa = Villa::first();

        $gallery = GalleryImage::where(
            'is_active',
            true
        )
            ->orderBy('sort_order')
            ->get();

        $featuredGallery =
            GalleryImage::where(
                'is_featured',
                true
            )->take(3)->get();

        $facilities =
            Facility::where(
                'is_active',
                true
            )
            ->orderBy('sort_order')
            ->get();

        $features =
            VillaFeature::orderBy(
                'sort_order'
            )->get();

        $offers =
            SpecialOffer::where(
                'is_active',
                true
            )->get();

        $price = Price::first();

        $setting = Setting::first();

        return view(
            'frontend.home',
            compact(
                'villa',
                'gallery',
                'featuredGallery',
                'facilities',
                'features',
                'offers',
                'price',
                'setting'
            )
        );
    }
}
