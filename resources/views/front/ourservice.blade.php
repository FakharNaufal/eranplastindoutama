@extends('front.layouts.app')
@section('title', __('services.meta_title'))
@section('meta_description', __('services.meta_description'))

@section('content')
  {{-- Hero --}}
  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="w-full bg-white shadow-sm border-b border-gray-200">
      <x-navbar/>

      {{-- Breadcrumb + Page Title --}}
      <section class="flex flex-col gap-8 items-center py-12 md:py-20">
        <nav aria-label="Breadcrumb" class="text-sm" data-reveal="fade-up">
          <ol class="flex items-center gap-3 text-cp-light-grey">
            <li><a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">{{ __('services.breadcrumb_home') }}</a></li>
            <li class="opacity-60">/</li>
            <li aria-current="page" class="text-cp-black font-semibold">{{ __('services.breadcrumb_services') }}</li>
          </ol>
        </nav>

        {{-- Page Title --}}
        <section class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
          <h1 class="text-4xl md:text-5xl font-extrabold leading-tight" data-reveal="fade-up">
            {{ __('services.hero_title') }}
          </h1>
          <p class="mt-3 text-base md:text-lg text-cp-light-grey max-w-2xl mx-auto" data-reveal="fade-up">
            {{ __('services.hero_desc') }}
          </p>
        </section>
      </section>
    </div>
  </div>

  {{-- Services Grid --}}
  <section class="container max-w-[1130px] mx-auto px-4 pb-14">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      {{-- Card 1 --}}
      <article class="bg-white border border-[#E8EAF2] rounded-2xl p-6 shadow-sm hover:shadow-md transition" data-reveal="fade-up">
        <img src="{{ asset('assets/icons/automotive-components.svg') }}" alt="" class="w-12 h-12 mb-4" loading="lazy">
        <h2 class="text-xl font-bold">{{ __('services.s1_title') }}</h2>
        <p class="mt-2 text-cp-light-grey">{{ __('services.s1_desc') }}</p>
      </article>

      {{-- Card 2 --}}
      <article class="bg-white border border-[#E8EAF2] rounded-2xl p-6 shadow-sm hover:shadow-md transition" data-reveal="fade-up">
        <img src="{{ asset('assets/icons/electronics-appliances.svg') }}" alt="" class="w-12 h-12 mb-4" loading="lazy">
        <h2 class="text-xl font-bold">{{ __('services.s2_title') }}</h2>
        <p class="mt-2 text-cp-light-grey">{{ __('services.s2_desc') }}</p>
      </article>

      {{-- Card 3 --}}
      <article class="bg-white border border-[#E8EAF2] rounded-2xl p-6 shadow-sm hover:shadow-md transition" data-reveal="fade-up">
        <img src="{{ asset('assets/icons/supporting-services.svg') }}" alt="" class="w-12 h-12 mb-4" loading="lazy">
        <h2 class="text-xl font-bold">{{ __('services.s3_title') }}</h2>
        <p class="mt-2 text-cp-light-grey">{{ __('services.s3_desc') }}</p>
      </article>
    </div>
  </section>

  {{-- Why Choose Us / Capabilities --}}
  <section class="bg-[#F6F7FA]">
    <div class="container max-w-[1130px] mx-auto px-4 py-14">
      <h2 class="text-3xl font-bold text-center" data-reveal="fade-up">{{ __('services.why_title') }}</h2>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]" data-reveal="fade-up">
          <h3 class="font-semibold text-lg">{{ __('services.why_iso_title') }}</h3>
          <p class="mt-2 text-cp-light-grey">{{ __('services.why_iso_desc') }}</p>
        </div>
        <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]" data-reveal="fade-up">
          <h3 class="font-semibold text-lg">{{ __('services.why_machines_title') }}</h3>
          <p class="mt-2 text-cp-light-grey">{{ __('services.why_machines_desc') }}</p>
        </div>
        <div class="bg-white rounded-2xl p-6 border border-[#E8EAF2]" data-reveal="fade-up">
          <h3 class="font-semibold text-lg">{{ __('services.why_qcd_title') }}</h3>
          <p class="mt-2 text-cp-light-grey">{{ __('services.why_qcd_desc') }}</p>
        </div>
      </div>
    </div>
  </section>

  {{-- CTA --}}
  <section class="bg-cp-dark-blue text-white">
    <div class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
      <h2 class="text-3xl font-bold" data-reveal="fade-up">{{ __('services.cta_title') }}</h2>
      <p class="mt-2 opacity-90" data-reveal="fade-up">{{ __('services.cta_desc') }}</p>
      <a href="{{ route('front.appointment') }}"
         class="inline-block mt-6 bg-white text-cp-dark-blue font-bold px-6 py-3 rounded-xl hover:bg-gray-100 transition"
         data-reveal="fade-up">
        {{ __('services.cta_button') }}
      </a>
    </div>
  </section>

  {{-- GALLERY --}}
  <section class="bg-[#F6F7FA]">
   <div class="container max-w-[1130px] mx-auto px-4 py-12">
    <header class="text-center mb-8">
      <h2 class="text-3xl font-bold">{{ __('home.gallery_title') }}</h2>
      <p class="text-sm text-gray-600 mt-2">{{ __('home.gallery_subtitle') }}</p>
    </header>

    @php $total = 5; @endphp

    <div id="gallery-carousel" class="relative w-full" data-carousel="slide">
      <div class="relative overflow-hidden rounded-xl h-[220px] sm:h-[300px] md:h-[380px] lg:h-[520px]">
        @for ($i = 1; $i <= $total; $i++)
          <div class="{{ $i === 1 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item="{{ $i === 1 ? 'active' : '' }}">
            <img
              src="{{ asset('assets/gallery/'.$i.'.png') }}"
              alt="{{ __('home.gallery.items.'.$i.'.title') }}"
              loading="lazy"
              class="absolute block w-full h-full object-cover object-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
            />
          </div>
        @endfor
      </div>

      <div class="absolute z-30 flex -translate-x-1/2 bottom-4 left-1/2 space-x-2">
        @for ($i = 0; $i < $total; $i++)
          <button type="button"
                  class="w-2.5 h-2.5 rounded-full bg-gray-300 aria-[current=true]:bg-cp-dark-blue transition"
                  aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                  aria-label="Slide {{ $i+1 }}"
                  data-carousel-slide-to="{{ $i }}">
          </button>
        @endfor
      </div>

      <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 group" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-200/80 group-hover:bg-gray-300/90">
          <svg class="w-5 h-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>

      <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 group" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-200/80 group-hover:bg-gray-300/90">
          <svg class="w-5 h-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>
   </div>
  </section>


  {{-- Footer --}}
  <x-footer/>
@endsection

@push('after-scripts')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
  <script src="{{asset('js/carousel.js')}}"></script>
  <script src="{{asset('js/accordion.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@endpush

