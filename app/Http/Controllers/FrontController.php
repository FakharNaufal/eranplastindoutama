<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\CompanyAbout;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\Product;
use App\Models\OurTeam;
use App\Models\ProjectClient;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $hero_section = HeroSection::OrderByDesc('id')->take(1)->get();
        $statistics = CompanyStatistic::take(4)->get();
        $principles = OurPrinciple::take(8)->get();
        $products = Product::take(4)->get();
        $teams = OurTeam::take(7)->get();
        $testimonials = Testimonial::take(4)->get();
        $clients = ProjectClient::take(3)->get();
        $logos = ['logo1.png', 'logo2.png', 'logo3.png']; // Contoh data logo
        return view('front.index', compact('statistics', 'principles','products','hero_section','teams', 'testimonials','clients','logos'));
    }

    public function team(){
        $teams = OurTeam::take(7)->get();
        $statistics = CompanyStatistic::take(4)->get();
        return view('front.team', compact('teams','statistics'));
    }

    public function about(){
        $teams = OurTeam::take(7)->get();
        $statistics = CompanyStatistic::take(4)->get();
        $abouts = CompanyAbout::take(2)->get();
        return view('front.about', compact('statistics','abouts','teams'));
    }

    public function appointment(){
        $testimonials = Testimonial::take(4)->get();
        $products = Product::take(3)->get();
        return view('front.appointment', compact('testimonials','products'));
    }

    public function appointment_store(StoreAppointmentRequest $request){
        DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $newAppointment = Appointment::create($validated);
        });
        return redirect()->route('front.index')->with('success', 'Appointment created successfully.');
    }

    public function ourservice(){
        $products = Product::take(6)->get();
        return view('front.ourservice', compact('products'));
    }

    public function News(){
        return view('front.news',);
    }
    public function news_details1($slug = null){
        return view('front.news_details1',);
    }
     public function news_details2($slug = null){
        return view('front.news_details2',);
    }
     public function news_details3($slug = null){
        return view('front.news_details3',);
    }
}
