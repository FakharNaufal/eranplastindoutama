@extends('front.layouts.app')
@section('title', 'About Us | PT Eran Plastindo Utama')
@section('meta_description', 'PT Eran Plastindo Utama manufactures precision plastic injection parts for automotive, electronics, and home appliances. ISO 9001:2015, QCD excellence, and scalable capacity.')
@section('content')


  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
      <x-navbar/>

      {{-- Breadcrumb + Page Title --}}
      <section class="flex flex-col gap-8 items-center py-12 md:py-20">
        <nav aria-label="Breadcrumb" class="text-sm">
          <ol class="flex items-center gap-3 text-cp-light-grey">
            <li><a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">Home</a></li>
            <li class="opacity-60">/</li>
            <li aria-current="page" class="text-cp-black font-semibold">News</li>
          </ol>
        </nav>
        {{-- NEWS --}}
         <section class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">News & Events</h1>
            <p class="mt-3 text-base md:text-lg text-cp-light-grey max-w-2xl mx-auto">
                Stay updated with the latest company news, industry insights, and innovations shaping the future of
                plastic injection Industry.
            </p>
         </section>
      </section>
    </div>
  </div>
    <!-- News Section -->
    <div class="container mx-auto max-w-6xl px-4 py-10">

  {{-- GRID NEWS --}}
  <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

    {{-- News Card 1 --}}
    <div class="flex flex-col">
      <a href="{{ route('front.news_details1') }}" class="block overflow-hidden rounded-lg">
        <img src="{{asset('assets/news/news1.jpg')}}" alt="News 1" class="w-full aspect-[4/3] object-cover">
      </a>
      <div class="mt-3 text-xs text-slate-500 flex items-center gap-3">
        <span>👤 Khaerul Izan</span>
        <time datetime="2022-01-01">Nov 22, 2023</time>
      </div>
      <a href="{{ route('front.news_details1') }}" class="mt-2 text-lg font-semibold hover:text-emerald-600">
        Automotive SMEs Strengthen Competitiveness Through Education & Collaboration
      </a>
      <p class="mt-2 text-sm text-slate-600 line-clamp-2">

      </p>
    </div>

    {{-- News Card 2 --}}
    <div class="flex flex-col">
      <a href="{{ route('front.news_details2') }}" class="block overflow-hidden rounded-lg">
        <img src="{{asset('assets/news/news2.jpg')}}" alt="News 2" class="w-full aspect-[4/3] object-cover">
      </a>
      <div class="mt-3 text-xs text-slate-500 flex items-center gap-3">
        <span>👤 Astra Ventura</span>
        <time datetime="2022-02-10">Apr 09, 2025</time>
      </div>
      <a href="{{ route('front.news_details2') }}" class="mt-2 text-lg font-semibold hover:text-emerald-600">
        Strengthening the Supply Chain Through Supply Chain Financing: Collaboration between PT Astra Mitra Ventura & PT Astra Otoparts Tbk
      </a>
      <p class="mt-2 text-sm text-slate-600 line-clamp-2">

      </p>
    </div>

    {{-- News Card 3 --}}
    <div class="flex flex-col">
      <a href="{{ route('front.news_details3') }}" class="block overflow-hidden rounded-lg">
        <img src="{{asset('assets/news/news3.jpg')}}" alt="News 3" class="w-full aspect-[4/3] object-cover">
      </a>
      <div class="mt-3 text-xs text-slate-500 flex items-center gap-3">
        <span>👤 Vicky Rachman</span>
        <time datetime="2022-07-05">Apr 24, 2025</time>
      </div>
      <a href="{{ route('front.news_details3') }}" class="mt-2 text-lg font-semibold hover:text-emerald-600">
        Ministry of Industry Partners with JICA to Accelerate Digitalization of Automotive Component SMEs
      </a>
      <p class="mt-2 text-sm text-slate-600 line-clamp-2">
        
      </p>
    </div>

  </div>



</div>
  <!-- Footer Section -->
    <x-footer/>
@endsection
@push('after-scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
  <script src="{{asset('js/carousel.js')}}"></script>
  <script src="{{asset('js/accordion.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@endpush
