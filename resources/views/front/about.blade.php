@extends('front.layouts.app')

@section('title', __('about.meta_title'))
@section('meta_description', __('about.meta_description'))

@section('content')
<main>
  {{-- HEADER --}}
  <div id="header" class="bg-[#F6F7FA] relative" data-reveal="fade-up">
    {{-- Navbar --}}
    <div class="w-full bg-white shadow-sm border-b border-gray-200">
      <x-navbar />
    </div>

    {{-- Breadcrumb + Page Title --}}
    <div class="container max-w-[1130px] mx-auto px-4">
      <section class="flex flex-col gap-8 items-center py-12 md:py-20">
        {{-- Breadcrumb --}}
        <nav aria-label="Breadcrumb" class="text-sm" data-reveal="fade-up">
          <ol class="flex items-center gap-3 text-cp-light-grey">
            <li>
              <a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">
                {{ __('about.breadcrumb_home') }}
              </a>
            </li>
            <li class="opacity-60">/</li>
            <li aria-current="page" class="text-cp-black font-semibold">
              {{ __('about.breadcrumb_about') }}
            </li>
          </ol>
        </nav>

        {{-- Page Title --}}
        <section class="container max-w-[1130px] mx-auto px-4 text-center" data-reveal="fade-up">
          <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
            {{ __('about.hero_title') }}
          </h1>
          <p class="mt-3 text-base md:text-lg text-cp-light-grey max-w-2xl mx-auto">
            {{ __('about.hero_desc') }}
          </p>
        </section>
      </section>
    </div>
  </div>

  {{-- ABOUT BLOCKS --}}
  <section id="AboutBlocks" class="container max-w-[1130px] mx-auto px-4 md:px-0 flex flex-col gap-16 md:gap-20 mt-10 md:mt-16">
    @forelse($abouts as $about)
      <article class="flex flex-col-reverse lg:flex-row items-center gap-8 md:gap-12 {{ $loop->even ? 'lg:flex-row-reverse' : '' }}" data-reveal="fade-up">
        <div class="w-full lg:w-[470px]">
          <figure class="w-full rounded-2xl overflow-hidden border border-[#E8EAF2] bg-white shadow-sm hover:shadow-md transition">
            <img src="{{ Storage::url($about->thumbnail) }}" alt="{{ $about->name }} facility photo" loading="lazy" class="w-full h-[260px] sm:h-[320px] md:h-[360px] lg:h-[420px] object-cover">
          </figure>
        </div>

        <div class="w-full max-w-[560px]">
          <span class="inline-block bg-cp-pale-blue text-cp-light-blue px-4 py-2 rounded-full text-[12px] font-bold tracking-wide">
            {{ __('about.badge_company_profile') }}
          </span>
          <h2 class="mt-3 md:mt-4 font-bold text-2xl md:text-3xl leading-snug">{{ $about->name }}</h2>

          @if($about->keypoints && $about->keypoints->count())
            <ul class="mt-4 md:mt-5 space-y-3">
              @foreach($about->keypoints as $keypoint)
                <li class="flex items-start gap-3">
                  <img src="{{ asset('assets/icons/tick-circle.svg') }}" alt="" class="w-5 h-5 mt-0.5">
                  <p class="leading-7 font-semibold text-[15px]">{{ $keypoint->keypoint }}</p>
                </li>
              @endforeach
            </ul>
          @endif
        </div>
      </article>
    @empty
      <p class="text-center text-cp-light-grey" data-reveal="fade-up">{{ __('about.empty_state') }}</p>
    @endforelse
  </section>

  {{-- BUSINESS PLAN --}}
  <section class="container max-w-[1130px] mx-auto px-4 md:px-0 mt-16 md:mt-20" data-reveal="fade-up">
    <div class="container max-w-[1130px] mx-auto px-4 py-14">
      <header class="mb-8 md:mb-10 text-center">
        <h2 class="font-bold text-3xl md:text-4xl leading-tight">{{ __('about.bp_title') }}</h2>
      </header>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach([
          ['assets/backgrounds/Diversifikasi.png', __('about.bp1_img_alt'), __('about.bp1_title'), __('about.bp1_desc')],
          ['assets/backgrounds/Operasional.png', __('about.bp2_img_alt'), __('about.bp2_title'), __('about.bp2_desc')],
          ['assets/backgrounds/SDM.png', __('about.bp3_img_alt'), __('about.bp3_title'), __('about.bp3_desc')],
        ] as $bp)
        <article class="bg-white border border-[#E8EAF2] rounded-2xl overflow-hidden hover:-translate-y-2 hover:shadow-md transition" data-reveal="fade-up">
          <img src="{{ asset($bp[0]) }}" alt="{{ $bp[1] }}" loading="lazy" class="w-full h-44 object-cover">
          <div class="p-6">
            <h3 class="font-bold text-xl">{{ $bp[2] }}</h3>
            <p class="mt-2 text-cp-light-grey">{{ $bp[3] }}</p>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </section>
</main>

{{-- FOOTER --}}
<x-footer />
@endsection

{{-- JSON-LD --}}
@push('structured_data')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BreadcrumbList",
  "itemListElement":[
    {"@type":"ListItem","position":1,"name":"{{ __('about.breadcrumb_home') }}","item":"{{ route('front.index') }}"},
    {"@type":"ListItem","position":2,"name":"{{ __('about.breadcrumb_about') }}","item":"{{ url()->current() }}"}
  ]
}
</script>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"Organization",
  "name":"PT Eran Plastindo Utama",
  "url":"{{ route('front.index') }}",
  "logo":"{{ asset('assets/logo/Logo_PT_ERAN_PLASTINDO_UTAMA.png') }}",
  "sameAs":[
    "https://www.youtube.com/@EranPlastindoUtama",
    "https://wa.me/6281234567890",
    "https://www.facebook.com/eranplastindoutama",
    "https://www.instagram.com/eran_plastindo_utama/"
  ]
}
</script>
@endpush

@push('after-scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
@endpush

