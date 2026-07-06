<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data aktif dari CMS
        $hero = Hero::first();
        $benefits = Benefit::where('status', true)->get();
        $products = Product::with('prices')->where('status', true)->latest()->take(4)->get();
        $galleries = Gallery::where('status', true)->get();
        $testimonials = Testimonial::where('status', 'published')->latest()->take(5)->get();
        $partners = Partner::get();
        
        $ceo = Team::where('position', 'LIKE', '%CEO%')->first() ?? Team::first();
        
        $settings = Setting::pluck('value', 'key')->toArray();

        return view('public.home', compact(
            'hero',
            'benefits',
            'products',
            'galleries',
            'testimonials',
            'partners',
            'ceo',
            'settings'
        ));
    }
}
