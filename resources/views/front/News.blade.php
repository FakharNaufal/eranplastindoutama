@extends('front.layouts.app')
@section('title', __('news.meta_title'))
@section('meta_description', __('news.meta_description'))

@section('content')
  {{-- HEADER --}}
  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="w-full bg-white shadow-sm border-b border-gray-200">
      <x-navbar/>

      {{-- Breadcrumb + Page Title --}}
      <section class="flex flex-col gap-8 items-center py-12 md:py-20">
        <nav aria-label="Breadcrumb" class="text-sm" data-reveal="fade-up">
          <ol class="flex items-center gap-3 text-cp-light-grey">
            <li><a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">{{ __('news.breadcrumb_home') }}</a></li>
            <li class="opacity-60">/</li>
            <li aria-current="page" class="text-cp-black font-semibold">{{ __('news.breadcrumb_news') }}</li>
          </ol>
        </nav>

        {{-- NEWS HERO --}}
        <section class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
          <h1 class="text-4xl md:text-5xl font-extrabold leading-tight" data-reveal="fade-up">
            {{ __('news.hero_title') }}
          </h1>
          <p class="mt-3 text-base md:text-lg text-cp-light-grey max-w-2xl mx-auto" data-reveal="fade-up">
            {{ __('news.hero_desc') }}
          </p>
        </section>
      </section>
    </div>
  </div>

  {{-- GRID NEWS --}}
  <div class="container mx-auto max-w-6xl px-4 py-10">
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      {{-- News Card 1 --}}
      <div class="flex flex-col" data-reveal="fade-up">
        <a href="{{ route('front.news_details1') }}" class="block overflow-hidden rounded-lg border border-[#E8EAF2]">
          <img src="{{ asset('assets/news/news1.jpg') }}" alt="" class="w-full aspect-[4/3] object-cover">
        </a>
        <div class="mt-3 text-xs text-slate-500 flex items-center gap-3">
          <span>👤 {{ __('news.card1_author') }}</span>
          <time datetime="2023-11-22">{{ __('news.card1_date') }}</time>
        </div>
        <a href="{{ route('front.news_details1') }}" class="mt-2 text-lg font-semibold hover:text-cp-dark-blue">
          {{ __('news.card1_title') }}
        </a>
        <p class="mt-2 text-sm text-slate-600 line-clamp-2">{{ __('news.card1_desc') }}</p>
      </div>

      {{-- News Card 2 --}}
      <div class="flex flex-col" data-reveal="fade-up">
        <a href="{{ route('front.news_details2') }}" class="block overflow-hidden rounded-lg border border-[#E8EAF2]">
          <img src="{{ asset('assets/news/news2.jpg') }}" alt="" class="w-full aspect-[4/3] object-cover">
        </a>
        <div class="mt-3 text-xs text-slate-500 flex items-center gap-3">
          <span>👤 {{ __('news.card2_author') }}</span>
          <time datetime="2025-04-09">{{ __('news.card2_date') }}</time>
        </div>
        <a href="{{ route('front.news_details2') }}" class="mt-2 text-lg font-semibold hover:text-cp-dark-blue">
          {{ __('news.card2_title') }}
        </a>
        <p class="mt-2 text-sm text-slate-600 line-clamp-2">{{ __('news.card2_desc') }}</p>
      </div>

      {{-- News Card 3 --}}
      <div class="flex flex-col" data-reveal="fade-up">
        <a href="{{ route('front.news_details3') }}" class="block overflow-hidden rounded-lg border border-[#E8EAF2]">
          <img src="{{ asset('assets/news/news3.jpg') }}" alt="" class="w-full aspect-[4/3] object-cover">
        </a>
        <div class="mt-3 text-xs text-slate-500 flex items-center gap-3">
          <span>👤 {{ __('news.card3_author') }}</span>
          <time datetime="2025-04-24">{{ __('news.card3_date') }}</time>
        </div>
        <a href="{{ route('front.news_details3') }}" class="mt-2 text-lg font-semibold hover:text-cp-dark-blue">
          {{ __('news.card3_title') }}
        </a>
        <p class="mt-2 text-sm text-slate-600 line-clamp-2">{{ __('news.card3_desc') }}</p>
      </div>
    </div>
  </div>

  <x-footer/>
@endsection

@push('after-scripts')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
  <script src="{{ asset('js/carousel.js') }}"></script>
  <script src="{{ asset('js/accordion.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@endpush

