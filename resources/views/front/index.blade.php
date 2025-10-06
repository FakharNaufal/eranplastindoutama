@extends('front.layouts.app')

@section('title', 'PT Eran Plastindo Utama | Plastic Injection Molding Manufacturer Indonesia')
@section('meta_description', 'PT Eran Plastindo Utama is an ISO 9001:2015 certified plastic injection molding manufacturer in Bogor, Indonesia. Automotive, electronics, home appliances. QCD excellence.')

@section('content')
  {{-- Navbar --}}
  <x-navbar />

  {{-- HERO --}}
  <section class="bg-white">
    <div class="bg-[#F6F7FA]">
        <div class="container max-w-[1130px] mx-auto px-4 lg:px-0 py-10 lg:py-16">
        @forelse($hero_section as $hero)
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-12 items-center">

            {{-- KIRI: Teks + CTA --}}
            <div class="order-2 lg:order-1">
            {{-- Modal Video (hidden input untuk modal-video.js jika dipakai) --}}
            <input type="hidden" id="path_video" name="path_video" value="{{ $hero->path_video }}">

            <div class="inline-flex items-center bg-white px-4 py-2 gap-2 rounded-full border border-[#E8EAF2]">
                <p class="font-semibold text-sm">{{ $hero->achievement }}</p>
            </div>

            <div class="mt-4 space-y-3">
                <h1 class="font-extrabold text-[34px] leading-[42px] md:text-[44px] md:leading-[56px]">
                {{ $hero->heading }}
                </h1>
                <p class="text-cp-light-grey leading-7 max-w-[520px]">
                {{ $hero->subheading }}
                </p>
            </div>

            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('front.ourservice') }}"
                class="bg-cp-dark-blue text-white px-6 py-3 rounded-xl font-bold hover:shadow-[0_12px_30px_0_#312ECB66] transition">
                Our Services
                </a>
                <a href="{{ route('front.about') }}"
                class="px-6 py-3 rounded-xl font-bold border border-cp-dark-blue text-cp-dark-blue hover:bg-cp-dark-blue hover:text-white transition">
                Explore More
                </a>
            </div>
            </div>

            {{-- KANAN: Banner (landscape, tidak terpotong) --}}
            <figure class="order-1 lg:order-2">
                <div class="rounded-2xl border border-[#E8EAF2] overflow-hidden bg-white shadow-sm">
                    {{-- Rasio landscape responsif --}}
                    <div class="aspect-[4/3] sm:aspect-[16/10] lg:aspect-[16/9]">
                        <img src="{{ Storage::url($hero->banner) }}"
                        alt="Hero banner"
                        loading="lazy"
                        class="w-full h-full object-cover object-center" />
                    </div>
                </div>
            </figure>
        </div>
        @empty
            <p class="text-center text-cp-light-grey py-10">Belum ada update data terbaru</p>
        @endforelse
        </div>
    </div>
  </section>

  {{-- QUICK STATS / VALUE PROPS --}}
  <section class="bg-[#F6F7FA]">
    <div class="container max-w-[1130px] mx-auto px-4 py-10 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
      <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]">
        <p class="text-3xl font-extrabold">35+</p>
        <p class="text-cp-light-grey mt-1">Injection Machineries</p>
      </div>
      <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]">
        <p class="text-3xl font-extrabold">ISO</p>
        <p class="text-cp-light-grey mt-1">9001:2015 Certified</p>
      </div>
      <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]">
        <p class="text-3xl font-extrabold">QCD</p>
        <p class="text-cp-light-grey mt-1">Quality • Cost • Delivery</p>
      </div>
      <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]">
        <p class="text-3xl font-extrabold">Multi-Sector</p>
        <p class="text-cp-light-grey mt-1">Automotives • Electronics • Home Appliances • etc </p>
      </div>
    </div>
  </section>

  {{-- COMPANY PROFILE VIDEO --}}
  <section class="bg-[#F6F7FA]">
    <div class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
        <h2 class="text-3xl font-bold mb-6">Company Profile Video</h2>
        <p class="text-cp-light-grey max-w-2xl mx-auto mb-10">
        Get to know PT Eran Plastindo Utama — our capabilities, facilities, and commitment to quality.
        </p>

        {{-- YouTube Embed (lebih ringan) --}}
        <div class="relative w-full pb-[56.25%] h-0 overflow-hidden rounded-2xl shadow-lg">
        <iframe class="absolute top-0 left-0 w-full h-full rounded-2xl"
            src="https://www.youtube.com/embed/{{ Str::afterLast($hero->path_video, 'youtu.be/') }}?rel=0"
            title="PT Eran Plastindo Utama Company Profile"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
        </div>
        {{-- Jika self-host pakai video tag --}}
        {{--
        <video controls class="w-full max-w-4xl mx-auto rounded-2xl shadow-lg" poster="{{ asset('assets/hero/hero-factory.jpg') }}">
        <source src="{{ asset('assets/videos/company-profile.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
        </video>
        --}}
    </div>
  </section>

  {{-- BUSINESS PLAN / STRATEGY (3 PILAR) --}}
  <section class="bg-[#F6F7FA]">
    <div class="container max-w-[1130px] mx-auto px-4 py-14">
      <div class="flex items-center justify-between gap-4 mb-8">
        <h2 class="text-3xl font-bold">Business Plan</h2>
        <a href="{{ route('front.about') }}" class="text-cp-dark-blue font-semibold hover:underline">Learn More</a>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <article class="bg-white border border-[#E8EAF2] rounded-2xl overflow-hidden">
          <img src="{{ asset('assets/backgrounds/Diversifikasi.png') }}" alt="Diversification & Market Expansion image" loading="lazy" class="w-full h-44 object-cover">
          <div class="p-6">
            <h3 class="font-bold text-xl">Costumer & Product Expansion</h3>
            <p class="mt-2 text-cp-light-grey">Expanding into non-automotive sectors while developing after-market opportunities and new customers.</p>
          </div>
        </article>

        <article class="bg-white border border-[#E8EAF2] rounded-2xl overflow-hidden">
          <img src="{{ asset('assets/backgrounds/Operasional.png') }}" alt="Operational Excellence & Production Capacity image" loading="lazy" class="w-full h-44 object-cover">
          <div class="p-6">
            <h3 class="font-bold text-xl">Operational Excellence & Capacity</h3>
            <p class="mt-2 text-cp-light-grey">Upgrading machinery and scaling capacity to capture opportunities and meet customer needs.</p>
          </div>
        </article>

        <article class="bg-white border border-[#E8EAF2] rounded-2xl overflow-hidden">
          <img src="{{ asset('assets/backgrounds/SDM.png') }}" alt="Human Capital & Customer Satisfaction image" loading="lazy" class="w-full h-44 object-cover">
          <div class="p-6">
            <h3 class="font-bold text-xl">Human Capital & Customer Satisfaction</h3>
            <p class="mt-2 text-cp-light-grey">Building skills and enhancing service through continuous QCD improvement.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  {{-- FEATURED PRODUCTS (static teaser, nanti bisa dinamis) --}}
    <section class="container max-w-[1130px] mx-auto px-4 py-14">
        <div class="flex items-center justify-between gap-4 mb-8">
        <h2 class="text-3xl font-bold">Featured Products</h2>
        <a href="{{ route('front.team') }}" class="text-cp-dark-blue font-semibold hover:underline">View All</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            @php
            $products = [
                ['name' => 'Case Air Cleaner', 'image' => 'Picture1.png'],
                ['name' => 'Cover Air Cleaner', 'image' => 'Picture2.png'],
                ['name' => 'Element Assy Air Cleaner', 'image' => 'Picture3.png'],
                ['name' => 'Mirror Assy', 'image' => 'Picture4.png'],
                ['name' => 'Plate Bottom', 'image' => 'Picture5.png'],
            ];
            @endphp

            @foreach($products as $product)
            <article class="border border-[#E8EAF2] rounded-xl overflow-hidden hover:shadow-md transition">
                <div class="aspect-square bg-white">
                <img src="{{ asset('assets/products/' . $product['image']) }}"
                    alt="{{ $product['name'] }}"
                    loading="lazy"
                    class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                <p class="font-semibold">{{ $product['name'] }}</p>
                <p class="text-xs text-cp-light-grey mt-1">Motorcycle Parts</p>
                </div>
            </article>
            @endforeach
        </div>
    </section>


  {{-- OUR CLIENTS --}}
    <section class="bg-[#F6F7FA]">
        <div class="container max-w-[1130px] mx-auto px-4 py-16">

            {{-- Headline --}}
            <div class="text-center">
            <h2 class="text-3xl font-bold leading-tight">Our Clients</h2>
            <p class="mt-2 text-sm text-[#666A79]">Trusted by Leading Manufacturers</p>
            </div>

            {{-- CLIENT LOGOS --}}
            <div class="mt-10 grid grid-cols-2 md:grid-cols-3 gap-6">

            {{-- ASKI --}}
            <figure class="flex items-center justify-center h-32 md:h-36 rounded-xl border border-[#E8EAF2] bg-white p-6">
                <img
                src="{{ asset('assets/Logo/logo1.svg') }}"
                alt="PT Astra Komponen Indonesia (ASKI)"
                class="h-[64px] md:h-[80px] w-auto object-contain select-none
                        grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition"
                loading="lazy">
            </figure>

            {{-- API --}}
            <figure class="flex items-center justify-center h-32 md:h-36 rounded-xl border border-[#E8EAF2] bg-white p-6">
                <img
                src="{{ asset('assets/Logo/logo2.svg') }}"
                alt="PT Autoplastik Indonesia (API)"
                class="h-[64px] md:h-[100px] w-auto object-contain select-none
                        grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition"
                loading="lazy">
            </figure>

            {{-- Star Cosmos --}}
            <figure class="flex items-center justify-center h-32 md:h-36 rounded-xl border border-[#E8EAF2] bg-white p-6">
                <img
                src="{{ asset('assets/Logo/logo3.svg') }}"
                alt="PT Star Cosmos"
                class="h-[64px] md:h-[100px] w-auto object-contain select-none
                        grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition"
                loading="lazy">
            </figure>

            </div>
        </div>
    </section>


  {{-- SERVICES PREVIEW (pakai ikon SVG yang sudah kita buat) --}}
  <section class="container max-w-[1130px] mx-auto px-4 py-14">
    <div class="flex items-center justify-between gap-4 mb-8">
      <h2 class="text-3xl font-bold">Our Services</h2>
      <a href="{{ route('front.ourservice') }}" class="text-cp-dark-blue font-semibold hover:underline">Explore Services</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <article class="bg-white border border-[#E8EAF2] rounded-2xl p-6 hover:shadow-md transition">
        <img src="{{ asset('assets/icons/automotive-components.svg') }}" alt="Automotive components icon" class="w-12 h-12 mb-4">
        <h3 class="text-xl font-bold">Automotive Components</h3>
        <p class="mt-2 text-cp-light-grey">High-precision plastic parts for motorcycles, vehicles and etc.</p>
      </article>

      <article class="bg-white border border-[#E8EAF2] rounded-2xl p-6 hover:shadow-md transition">
        <img src="{{ asset('assets/icons/electronics-appliances.svg') }}" alt="Electronics & appliances icon" class="w-12 h-12 mb-4">
        <h3 class="text-xl font-bold">Electronics & Appliances</h3>
        <p class="mt-2 text-cp-light-grey">Injection-molded components for electronics, home appliances and etc.</p>
      </article>

      <article class="bg-white border border-[#E8EAF2] rounded-2xl p-6 hover:shadow-md transition">
        <img src="{{ asset('assets/icons/supporting-services.svg') }}" alt="Supporting services icon" class="w-12 h-12 mb-4">
        <h3 class="text-xl font-bold">Supporting Services</h3>
        <p class="mt-2 text-cp-light-grey">Mirror Assembly lines, mold maintenance, CMM-based quality inspection, laser Welding and Cutting</p>
      </article>
    </div>
  </section>

  {{-- LATEST NEWS --}}
    <section class="container max-w-[1130px] mx-auto px-4 py-14">
    <div class="flex items-center justify-between gap-4 mb-8">
        <h2 class="text-3xl font-bold">Recent News</h2>
        <a href="{{ route('front.news') }}" class="text-cp-dark-blue font-semibold hover:underline">See All</a>
    </div>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        {{-- News Card 1 --}}
        <article class="flex flex-col">
        <a href="{{ route('front.news_details1') }}" class="block border border-[#E8EAF2] rounded-lg overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden rounded-lg">
            <img
                src="{{ asset('assets/news/news1.jpg') }}"
                alt="Automotive SMEs Strengthen Competitiveness"
                loading="lazy"
                class="object-cover w-full h-full">
            </div>
        </a>
        <div class="mt-3 text-xs text-slate-500 flex items-center gap-3">
            <span>👤 Khaerul Izan</span>
            <time datetime="2023-11-22">Nov 22, 2023</time>
        </div>
        <a href="{{ route('front.news_details1') }}" class="mt-2 text-lg font-semibold hover:text-cp-dark-blue">
            Automotive SMEs Strengthen Competitiveness Through Education & Collaboration
        </a>
        <p class="mt-2 text-sm text-slate-600 line-clamp-2">
            Brief highlight about the program that empowers SMEs through education, productivity, and innovation.
        </p>
        </article>

        {{-- News Card 2 --}}
        <article class="flex flex-col">
        <a href="{{ route('front.news_details2') }}" class="block border border-[#E8EAF2] rounded-lg overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden rounded-lg">
            <img
                src="{{ asset('assets/news/news2.jpg') }}"
                alt="Supply Chain Financing Collaboration"
                loading="lazy"
                class="object-cover w-full h-full">
            </div>
        </a>
        <div class="mt-3 text-xs text-slate-500 flex items-center gap-3">
            <span>👤 Astra Ventura</span>
            <time datetime="2025-04-09">Apr 09, 2025</time>
        </div>
        <a href="{{ route('front.news_details2') }}" class="mt-2 text-lg font-semibold hover:text-cp-dark-blue">
            Strengthening the Supply Chain Through Supply Chain Financing: Collaboration between PT Astra Mitra Ventura & PT Astra Otoparts Tbk
        </a>
        <p class="mt-2 text-sm text-slate-600 line-clamp-2">
            Short summary of the collaboration to improve suppliers’ financial access and resilience.
        </p>
        </article>

        {{-- News Card 3 --}}
        <article class="flex flex-col">
        <a href="{{ route('front.news_details3') }}" class="block border border-[#E8EAF2] rounded-lg overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden rounded-lg">
            <img
                src="{{ asset('assets/news/news3.jpg') }}"
                alt="JICA–Ministry of Industry Digitalization Program"
                loading="lazy"
                class="object-cover w-full h-full">
            </div>
        </a>
        <div class="mt-3 text-xs text-slate-500 flex items-center gap-3">
            <span>👤 Vicky Rachman</span>
            <time datetime="2025-04-24">Apr 24, 2025</time>
        </div>
        <a href="{{ route('front.news_details3') }}" class="mt-2 text-lg font-semibold hover:text-cp-dark-blue">
            Ministry of Industry Partners with JICA to Accelerate Digitalization of Automotive Component SMEs
        </a>
        <p class="mt-2 text-sm text-slate-600 line-clamp-2">
            A concise overview of the digital transformation initiative for component manufacturers.
        </p>
        </article>
    </div>
    </section>
    {{--End Latest News Card--}}

  {{-- CONTACT CTA --}}
  <section class="bg-cp-dark-blue text-white">
    <div class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
      <h2 class="text-3xl font-bold">Let’s build reliable plastic parts together</h2>
      <p class="mt-2 opacity-90">Share your drawing/spec, and our team will propose tooling & production plans.</p>
      <a href="{{ route('front.appointment') }}" class="inline-block mt-6 bg-white text-cp-dark-blue font-bold px-6 py-3 rounded-xl hover:bg-gray-100 transition">
        Request a Consultation
      </a>
    </div>
  </section>

  {{-- GALLERY --}}
  <section class="bg-[#F6F7FA]">
  <div class="container max-w-[1130px] mx-auto px-4 py-12">
    <header class="text-center mb-8">
      <h2 class="text-3xl font-bold">Our Facilities</h2>
      <p class="text-sm text-gray-600 mt-2">
        A look into PT Eran Plastindo Utama’s facilities and daily operations.
      </p>
    </header>

    <div id="gallery-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-[500px] overflow-hidden rounded-xl">

        <!-- Item 1 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item="active">
          <img src="{{ asset('assets/gallery/1.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Material & Component W/H Area">
          <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
            <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                Material & Component W/H Area
            </h3>
            <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                Ensuring smooth production flow.
            </p>
        </div>
        </div>

        <!-- Item 2 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/2.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Production Area">
          <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
            <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                Production Area
            </h3>
            <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                Clean and organized workspace for efficient manufacturing.
            </p>
        </div>
        </div>

        <!-- Item 3 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/3.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Injection Molding Line">
        <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
            <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                Injection Molding Line
            </h3>
            <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                Modern machinery ensuring efficiency and quality.
            </p>
        </div>
        </div>

        <!-- Item 4 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/4.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Automated Machinery">
          <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
            <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                Automated Machinery
            </h3>
            <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
               Advanced production equipment with robotic integration.
            </p>
        </div>
        </div>

        <!-- Item 5 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/5.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Mirror Assembly Line">
            <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
                <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                    Mirror Assembly Line
                </h3>
                <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                    Organized process flow to deliver products with high productivity.
                </p>
            </div>
        </div>

        <!-- Item 6 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/6.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Laser Welding Machine">
            <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
                <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                    Laser Welding Machine
                </h3>
                <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                    High-precision welding technology for durable products.
                </p>
            </div>
        </div>

        <!-- Item 7 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/7.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="CMM Machine">
            <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
                <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                    Coordinate Measuring Machine (CMM)
                </h3>
                <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                    Ensures accuracy and consistency in product quality.
                </p>
            </div>
        </div>

        <!-- Item 8 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/8.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="CO2 Laser Cutting Machine">
          <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
                <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                    CO2 Laser Cutting Machine
                </h3>
                <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                    Versatile equipment for high-precision cutting solutions.
                </p>
            </div>
        </div>

        <!-- Item 9 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/9.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Finished Goods W/H">
            <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
                <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                    Finished Goods W/H Area
                </h3>
                <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                    Products are organized before shipment.
                </p>
            </div>
        </div>

        <!-- Item 10 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/10.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Loading Dock">
            <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
                <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                     Loading Dock
                </h3>
                <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                    Efficient loading and unloading area designed for large trucks.
                </p>
            </div>
        </div>

        <!-- Item 11 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/11.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Truck loading process">
          <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
                <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                    Truck loading process
                </h3>
                <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                    Truck loading process for distribution.
                </p>
          </div>
        </div>

        <!-- Item 12 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="{{ asset('assets/gallery/12.jpg') }}"
               class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
               alt="Company Mosque">
          <div class="absolute bottom-0 w-full bg-black/60 text-center py-4 px-3">
                <h3 class="text-lg md:text-xl font-bold text-white drop-shadow-md">
                    Company Mosque
                </h3>
                <p class="text-sm md:text-base text-gray-200 mt-1 drop-shadow-sm">
                    Dedicated prayer facility for employees.
                </p>
          </div>
        </div>

        <!-- Tambahkan item lain sesuai daftar -->
      </div>

      <!-- Controls -->
      <div class="flex justify-center items-center pt-4 gap-4">
        <button type="button" class="flex items-center justify-center h-10 w-10 rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none" data-carousel-prev>
          <span class="sr-only">Previous</span>
          <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/></svg>
        </button>
        <button type="button" class="flex items-center justify-center h-10 w-10 rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none" data-carousel-next>
          <span class="sr-only">Next</span>
          <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
        </button>
      </div>
    </div>
  </div>
  </section>
  {{-- END GALLERY --}}

  {{-- FAQ --}}
  <section>
    <div id="FAQ" class="bg-[#F6F7FA] w-full py-20 px-[10px] mt-20 -mb-20">
    <div class="container max-w-[1000px] mx-auto">
      <div class="flex flex-col lg:flex-row gap-[50px] sm:gap-[70px] items-center">
          <div class="flex flex-col gap-[30px]">
              <div class="flex flex-col gap-[10px]">
                  <h2 class="font-bold text-4xl leading-[45px]">Frequently Asked Questions</h2>
              </div>
              <a href="/appointment" class="p-5 bg-cp-black rounded-xl text-white w-fit font-bold">Contact Us</a>
          </div>
          <div class="flex flex-col gap-[30px] sm:w-[603px] shrink-0">
              <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                  <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-1">
                      <span class="font-bold text-lg leading-[27px] text-left">What is PT. Eran Plastindo Utama?</span>
                      <div class="arrow w-9 h-9 flex shrink-0">
                          <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                      </div>
                  </button>
                  <div id="accordion-faq-1" class="accordion-content hide">
                      <p class="leading-[30px] text-cp-light-grey pt-[14px]">PT. Eran Plastindo Utama is a plastic injection industry established in 2020, located in Bogor, West Java. We aim to be a world-class producer of high-quality plastic products, serving industries such as automotive, electronics, and home appliances.</p>
                  </div>
              </div>
              <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                  <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-2">
                      <span class="font-bold text-lg leading-[27px] text-left">What products and services do you offer?</span>
                      <div class="arrow w-9 h-9 flex shrink-0">
                          <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                      </div>
                  </button>
                  <div id="accordion-faq-2" class="accordion-content hide">
                      <p class="leading-[30px] text-cp-light-grey pt-[14px]">We specialize in precision plastic components manufactured through injection molding. Our portfolio includes:
                        1. Automotive Parts: motorcycles and vehicle components.
                        2. Electronics and Home Appliances.
                        3. Supporting Services: Mirror Assembly line, mold maintenance, laser welding, and advanced quality control using Coordinate Measuring Machines (CMM).</p>
                  </div>
              </div>
              <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                  <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-3">
                      <span class="font-bold text-lg leading-[27px] text-left">What certifications and strengths does the company have?</span>
                      <div class="arrow w-9 h-9 flex shrink-0">
                          <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                      </div>
                  </button>
                  <div id="accordion-faq-3" class="accordion-content hide">
                      <p class="leading-[30px] text-cp-light-grey pt-[14px]">Our commitment to international quality standards is reflected in:
                        1. ISO 9001:2015 Certification for quality management.
                        2. Modern production facilities with 35 injection molding machines (170–1050 tons) supported by automation and robotics.
                        3. A focus on QCD (Quality, Cost, Delivery) to ensure customer satisfaction.
                        4. Continuous development of human resources to enhance technical expertise and innovation.</p>
                  </div>
              </div>
              <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                  <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-4">
                      <span class="font-bold text-lg leading-[27px] text-left">Who are your clients and markets?</span>
                      <div class="arrow w-9 h-9 flex shrink-0">
                          <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                      </div>
                  </button>
                  <div id="accordion-faq-4" class="accordion-content hide">
                      <p class="leading-[30px] text-cp-light-grey pt-[14px]">We are trusted by leading companies, especially in the automotive and manufacturing sectors. Some of our key clients include:
                        1. PT Astra Komponen Indonesia (ASKI)
                        2. PT Autoplastik Indonesia (API)
                        3. PT Star Cosmos</p>
                  </div>
              </div>
              <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                  <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-5">
                      <span class="font-bold text-lg leading-[27px] text-left">How can we collaborate with PT Eran Plastindo Utama?</span>
                      <div class="arrow w-9 h-9 flex shrink-0">
                          <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                      </div>
                  </button>
                  <div id="accordion-faq-5" class="accordion-content hide">
                      <p class="leading-[30px] text-cp-light-grey pt-[14px]">We welcome partnerships and collaborations with companies seeking reliable and innovative plastic injection molding solutions. To explore opportunities, you can contact us directly through our website or arrange a consultation with our team.</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
    </div>
  </section>
    {{-- END FAQ --}}

  {{-- Footer --}}
  <x-footer />
@endsection
@push('after-scripts')
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="{{asset('js/carousel.js')}}"></script>
  <script src="{{asset('js/accordion.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="{{asset('js/modal-video.js')}}"></script>
  <script>
  (function () {
    // kalau Flickity ada & berhasil dimuat, tampilkan carousel dan sembunyikan grid
    function enableCarousel() {
      var Carousel = document.getElementById('GalleryCarousel');
      var Grid     = document.getElementById('GalleryGrid');
      if (!Carousel || !Grid) return;

      try {
        // pastikan library ada
        if (window.Flickity) {
          Carousel.classList.remove('hidden');
          Grid.classList.add('hidden');

          // inisialisasi manual jika diperlukan (sebagian sudah via data-flickity)
          var el = Carousel.querySelector('.main-carousel');
          // eslint-disable-next-line no-unused-vars
          var flkty = new Flickity(el, JSON.parse(el.getAttribute('data-flickity') || '{}'));
        } else {
          // fallback: biarkan grid tampil
          Carousel.classList.add('hidden');
          Grid.classList.remove('hidden');
        }
      } catch (e) {
        // kalau error, pakai grid
        Carousel.classList.add('hidden');
        Grid.classList.remove('hidden');
        console.warn('Flickity init failed, using grid fallback:', e);
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', enableCarousel);
    } else {
      enableCarousel();
    }
  })();
  </script>

@endpush
