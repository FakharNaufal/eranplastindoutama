@extends('front.layouts.app')

@section('title', 'About Us | PT Eran Plastindo Utama')
@section('meta_description', 'PT Eran Plastindo Utama manufactures precision plastic injection parts for automotive, electronics, and home appliances. ISO 9001:2015, QCD excellence, and scalable capacity.')

@section('content')
  {{-- Header --}}
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
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Company Profile</h1>
            <p class="mt-3 text-base md:text-lg text-cp-light-grey max-w-2xl mx-auto">
                PT Eran Plastindo Utama is dedicated to delivering ISO-certified plastic injection solutions with a
                commitment to Quality, Cost, and Delivery (QCD) excellence, empowering industries worldwide.
            </p>
        </section>
      </section>
    </div>
  </div>

  {{-- About Blocks --}}
  <section id="AboutBlocks" class="container max-w-[1130px] mx-auto px-4 md:px-0 flex flex-col gap-16 md:gap-20 mt-10 md:mt-16">
    @forelse($abouts as $about)
      <article class="flex flex-col-reverse lg:flex-row items-center gap-8 md:gap-12 {{ $loop->even ? 'lg:flex-row-reverse' : '' }}">
        <div class="w-full lg:w-[470px]">
          <figure class="w-full rounded-2xl overflow-hidden border border-[#E8EAF2]">
            <img
              src="{{ Storage::url($about->thumbnail) }}"
              alt="{{ $about->name }} facility photo"
              loading="lazy"
              class="w-full h-[260px] sm:h-[320px] md:h-[360px] lg:h-[420px] object-cover">
          </figure>
        </div>

        <div class="w-full max-w-[560px]">
          <span class="inline-block bg-cp-pale-blue text-cp-light-blue px-4 py-2 rounded-full text-[12px] font-bold tracking-wide">
            COMPANY PROFILE
          </span>

          <h2 class="mt-3 md:mt-4 font-bold text-2xl md:text-3xl leading-snug">
            {{ $about->name }}
          </h2>

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
      <p class="text-center text-cp-light-grey">Belum ada data terbaru.</p>
    @endforelse
  </section>

  {{-- BUSINESS PLAN / STRATEGY (3 PILAR) --}}
  <section id="" class="container max-w-[1130px] mx-auto px-4 md:px-0 mt-16 md:mt-20">
    <div class="container max-w-[1130px] mx-auto px-4 py-14">

        <header class="mb-8 md:mb-10 text-center">
      <h2 class="font-bold text-3xl md:text-4xl leading-tight">Business Plan<br class="hidden md:block"></h2>
        </header>
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

  {{-- Organization Structure --}}
  <section id="Teams" class="container max-w-[1130px] mx-auto px-4 md:px-0 mt-16 md:mt-20">
    <header class="mb-8 md:mb-10 text-center">
      <h2 class="font-bold text-3xl md:text-4xl leading-tight">Organization<br class="hidden md:block">Structure</h2>
    </header>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[20px] md:gap-[30px]">
      @forelse($teams as $team)
        <article class="bg-white flex flex-col h-full items-center p-6 md:p-7 gap-5 rounded-[20px] border border-[#E8EAF2] hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition">
          <div class="w-[96px] h-[96px] rounded-full grid place-items-center bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
            <div class="w-[88px] h-[88px] rounded-full overflow-hidden bg-white">
              <img
                src="{{ Storage::url($team->avatar) }}"
                alt="{{ $team->name }} portrait"
                loading="lazy"
                class="w-full h-full object-cover object-center">
            </div>
          </div>

          <div class="text-center">
            <h3 class="font-bold text-lg md:text-xl">{{ $team->name }}</h3>
            <p class="text-cp-light-grey text-sm md:text-[15px] mt-1">{{ $team->occupation }}</p>
          </div>
        </article>
      @empty
        <p class="text-center text-cp-light-grey col-span-full">Belum ada data terbaru.</p>
      @endforelse
    </div>
  </section>

  {{-- Footer --}}
  <x-footer/>
@endsection

{{-- Structured data (Breadcrumb) --}}
@push('structured_data')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BreadcrumbList",
  "itemListElement":[
    {"@type":"ListItem","position":1,"name":"Home","item":"{{ route('front.index') }}"},
    {"@type":"ListItem","position":2,"name":"About Us","item":"{{ url()->current() }}"}
  ]
}
</script>
@endpush
{{-- Structured data (Organization) --}}
@push('structured_data')
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity ="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@endpush
