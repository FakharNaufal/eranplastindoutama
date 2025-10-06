@extends('front.layouts.app')
@section('title', 'Our Services | PT Eran Plastindo Utama')
@section('meta_description', 'PT Eran Plastindo Utama provides world-class plastic injection molding services for automotive, electronics, and home appliances. ISO 9001:2015, 35 injection machines, QCD excellence.')

@section('content')
  {{-- Hero --}}
  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
      <x-navbar/>

      {{-- Breadcrumb + Page Title --}}
      <section class="flex flex-col gap-8 items-center py-12 md:py-20">
        <nav aria-label="Breadcrumb" class="text-sm">
          <ol class="flex items-center gap-3 text-cp-light-grey">
            <li><a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">Home</a></li>
            <li class="opacity-60">/</li>
            <li aria-current="page" class="text-cp-black font-semibold">About Us</li>
          </ol>
        </nav>

        {{-- Page Title --}}
        <section class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Our Services</h1>
            <p class="mt-3 text-base md:text-lg text-cp-light-grey max-w-2xl mx-auto">
                Plastic injection Industry solutions for automotive, electronics, home appliance, and etc.
                industries—delivered with ISO-certified quality and QCD excellence.
            </p>
        </section>
      </section>
    </div>
  </div>


  {{-- Services Grid --}}
  <section class="container max-w-[1130px] mx-auto px-4 pb-14">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      {{-- Card 1 --}}
      <article class="bg-white border border-[#E8EAF2] rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <img src="{{ asset('assets/icons/automotive-components.svg') }}" alt="Automotive components icon" class="w-12 h-12 mb-4" loading="lazy">
        <h2 class="text-xl font-bold">Automotive Components</h2>
        <p class="mt-2 text-cp-light-grey">
          High-precision plastic parts for motorcycles, vehicles and etc.
        </p>
      </article>

      {{-- Card 2 --}}
      <article class="bg-white border border-[#E8EAF2] rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <img src="{{ asset('assets/icons/electronics-appliances.svg') }}" alt="Electronics and appliances icon" class="w-12 h-12 mb-4" loading="lazy">
        <h2 class="text-xl font-bold">Electronics & Appliances</h2>
        <p class="mt-2 text-cp-light-grey">
          Injection-molded parts for electronics, home appliances and etc.
        </p>
      </article>

      {{-- Card 3 --}}
      <article class="bg-white border border-[#E8EAF2] rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <img src="{{ asset('assets/icons/supporting-services.svg') }}" alt="Supporting services icon" class="w-12 h-12 mb-4" loading="lazy">
        <h2 class="text-xl font-bold">Supporting Services</h2>
        <p class="mt-2 text-cp-light-grey">
          Mirror Assembly lines, mold maintenance, laser welding, and advanced quality inspection using CMM.
        </p>
      </article>
    </div>
  </section>

  {{-- Why Choose Us / Capabilities --}}
  <section class="bg-[#F6F7FA]">
    <div class="container max-w-[1130px] mx-auto px-4 py-14">
      <h2 class="text-3xl font-bold text-center">Why Choose Us?</h2>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]">
          <h3 class="font-semibold text-lg">ISO 9001:2015</h3>
          <p class="mt-2 text-cp-light-grey">Internationally recognized quality management for consistent results.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]">
          <h3 class="font-semibold text-lg">35 Injection Machineries</h3>
          <p class="mt-2 text-cp-light-grey">170–1050 Ton capacity equipped by automation & robotics.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]">
          <h3 class="font-semibold text-lg">QCD Excellence</h3>
          <p class="mt-2 text-cp-light-grey">Quality, Cost, and Delivery to meet costumer requirements.</p>
        </div>
      </div>
    </div>
  </section>


  {{-- CTA --}}
  <section class="bg-cp-dark-blue text-white">
    <div class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
      <h2 class="text-3xl font-bold">Need reliable plastic injection molding services?</h2>
      <p class="mt-2 opacity-90">Talk to our team about your part, tooling, and production requirements.</p>
      <a href="{{ route('front.appointment') }}"
         class="inline-block mt-6 bg-white text-cp-dark-blue font-bold px-6 py-3 rounded-xl hover:bg-gray-100 transition">
        Contact Us
      </a>
    </div>
  </section>

    {{-- Footer (pakai komponenmu) --}}
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
