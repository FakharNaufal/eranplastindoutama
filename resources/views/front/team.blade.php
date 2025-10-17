@extends('front.layouts.app')

@section('title', __('products.meta_title'))
@section('meta_description', __('products.meta_description'))

@section('content')
  {{-- Header --}}
  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="w-full bg-white shadow-sm border-b border-gray-200">
      <x-navbar/>

      {{-- Breadcrumb + Title --}}
      <section class="flex flex-col gap-8 items-center py-12 md:py-20">
        <nav aria-label="Breadcrumb" class="text-sm" data-reveal="fade-up">
          <ol class="flex items-center gap-3 text-cp-light-grey">
            <li>
              <a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">
                {{ __('products.breadcrumb_home') }}
              </a>
            </li>
            <li class="opacity-60">/</li>
            <li aria-current="page" class="text-cp-black font-semibold">
              {{ __('products.breadcrumb_products') }}
            </li>
          </ol>
        </nav>

        {{-- PRODUCTS --}}
        <section class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
          <h1 class="text-4xl md:text-5xl font-extrabold leading-tight" data-reveal="fade-up">
            {{ __('products.page_title') }}
          </h1>
          <p class="mt-3 text-base md:text-lg text-cp-light-grey max-w-2xl mx-auto" data-reveal="fade-up">
            {{ __('products.page_subtitle') }}
          </p>
        </section>
      </section>
    </div>
  </div>

  {{-- Our Products --}}
  <section id="OurProducts"
    x-data="{
      active: 'all',
      init(){
        const qs = new URLSearchParams(location.search).get('class');
        if (qs) this.active = qs;
      },
      set(cat){ this.active = cat; },
      isShown(el){
        if(this.active === 'all') return true;
        const cat = (el.dataset.cat || '').split(',').map(s => s.trim());
        return cat.includes(this.active);
      },
      btn(base,on){ return (on
        ? 'text-white bg-gray-900 border-gray-900 '
        : 'text-gray-900 bg-white border-gray-200 hover:border-gray-300 ') + base }
    }"
    x-cloak
    class="container max-w-[1130px] mx-auto px-4 md:px-0 flex flex-col gap-6 mt-10 md:mt-16">

    {{-- Filter --}}
    @php $btn = 'rounded-full text-sm md:text-base font-medium px-4 md:px-5 py-2.5 border focus:outline-none me-2 mb-2'; @endphp
    <div class="flex items-center justify-center py-2 md:py-4 flex-wrap" role="tablist" aria-label="{{ __('products.filter_aria') }}" data-reveal="fade-up">
      <button type="button" @click="set('all')"        :aria-pressed="active==='all'"        :class="btn('{{$btn}}', active==='all')">{{ __('products.filter_all') }}</button>
      <button type="button" @click="set('motorcycle')"  :aria-pressed="active==='motorcycle'" :class="btn('{{$btn}}', active==='motorcycle')">{{ __('products.filter_motorcycle') }}</button>
      <button type="button" @click="set('vehicle')"     :aria-pressed="active==='vehicle'"    :class="btn('{{$btn}}', active==='vehicle')">{{ __('products.filter_vehicle') }}</button>
      <button type="button" @click="set('home')"        :aria-pressed="active==='home'"       :class="btn('{{$btn}}', active==='home')">{{ __('products.filter_home') }}</button>
      <button type="button" @click="set('Food')"      :aria-pressed="active==='Food'"     :class="btn('{{$btn}}', active==='Food')">{{ __('Packaging Food') }}</button>
      <button type="button" @click="set('Amenities')"      :aria-pressed="active==='Amenities'"     :class="btn('{{$btn}}', active==='Amenities')">{{ __('Amenities') }}</button>
      <button type="button" @click="set('Farmation')"      :aria-pressed="active==='Farmation'"     :class="btn('{{$btn}}', active==='Farmation')">{{ __('Farmation') }}</button>
      <button type="button" @click="set('others')"      :aria-pressed="active==='others'"     :class="btn('{{$btn}}', active==='others')">{{ __('products.filter_others') }}</button>
    </div>

    {{-- Grid --}}
    <ul class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 text-left">
      {{-- MOTORCYCLE --}}
      <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture1.png') }}"
                 alt="{{ __('products.p1_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p1_name') }}</p>
          </figcaption>
        </figure>
      </li>

      <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture2.png') }}"
                 alt="{{ __('products.p2_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p2_name') }}</p>
          </figcaption>
        </figure>
      </li>

      <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture3.png') }}"
                 alt="{{ __('products.p3_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p3_name') }}</p>
          </figcaption>
        </figure>
      </li>

      <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture4.png') }}"
                 alt="{{ __('products.p4_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p4_name') }}</p>
          </figcaption>
        </figure>
      </li>

      <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture5.png') }}"
                 alt="{{ __('products.p5_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p5_name') }}</p>
          </figcaption>
        </figure>
      </li>

      {{-- VEHICLE --}}
      <li data-cat="vehicle" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture7.png') }}"
                 alt="{{ __('products.p7_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p7_name') }}</p>
          </figcaption>
        </figure>
      </li>

      <li data-cat="vehicle" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture8.png') }}"
                 alt="{{ __('products.p8_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p8_name') }}</p>
          </figcaption>
        </figure>
      </li>

      <li data-cat="vehicle" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture9.png') }}"
                 alt="{{ __('products.p9_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p9_name') }}</p>
          </figcaption>
        </figure>
      </li>

      {{-- HOME APPLIANCE --}}
      <li data-cat="home" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture10.png') }}"
                 alt="{{ __('products.p10_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p10_name') }}</p>
          </figcaption>
        </figure>
      </li>

      <li data-cat="home" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture11.png') }}"
                 alt="{{ __('products.p11_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p11_name') }}</p>
          </figcaption>
        </figure>
      </li>

      <li data-cat="home" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture12.png') }}"
                 alt="{{ __('products.p12_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p12_name') }}</p>
          </figcaption>
        </figure>
      </li>

      <li data-cat="home" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Picture13.png') }}"
                 alt="{{ __('products.p13_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p13_name') }}</p>
          </figcaption>
        </figure>
      </li>

      {{-- Packging Food--}}

      <li data-cat="Food" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Home5.png') }}"
                 alt="{{ __('products.p13_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p14_name') }}</p>
          </figcaption>
        </figure>
      </li>

      {{-- Amenities --}}

      <li data-cat="Amenities" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Home4.png') }}"
                 alt="{{ __('products.p13_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p15_name') }}</p>
          </figcaption>
        </figure>
      </li>

      {{-- Farmation --}}

      <li data-cat="Farmation" x-show="isShown ? isShown($el) : true" x-transition.opacity data-reveal="fade-up">
        <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
          <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
            <img src="{{ asset('assets/products/Home6.png') }}"
                 alt="{{ __('products.p13_alt') }}"
                 loading="lazy" width="560" height="560"
                 class="max-w-full max-h-full object-contain object-center"
                 onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
          </div>
          <figcaption class="mt-3 md:mt-4">
            <p class="text-base md:text-lg font-bold text-gray-900">{{ __('products.p16_name') }}</p>
          </figcaption>
        </figure>
      </li>

    </ul>
  </section>

  <x-footer/>
@endsection

@push('structured_data')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"ItemList",
  "itemListElement":[
    { "@type":"ListItem", "position":1, "name":"{{ __('products.p1_name') }}" },
    { "@type":"ListItem", "position":2, "name":"{{ __('products.p2_name') }}" },
    { "@type":"ListItem", "position":3, "name":"{{ __('products.p3_name') }}" },
    { "@type":"ListItem", "position":4, "name":"{{ __('products.p4_name') }}" },
    { "@type":"ListItem", "position":5, "name":"{{ __('products.p5_name') }}" },
    { "@type":"ListItem", "position":6, "name":"{{ __('products.p7_name') }}" },
    { "@type":"ListItem", "position":7, "name":"{{ __('products.p8_name') }}" },
    { "@type":"ListItem", "position":8, "name":"{{ __('products.p9_name') }}" },
    { "@type":"ListItem", "position":9, "name":"{{ __('products.p10_name') }}" },
    { "@type":"ListItem", "position":10, "name":"{{ __('products.p11_name') }}" },
    { "@type":"ListItem", "position":11, "name":"{{ __('products.p12_name') }}" },
    { "@type":"ListItem", "position":12, "name":"{{ __('products.p13_name') }}" },
    { "@type":"ListItem", "position":13, "name":"{{ __('products.p14_name') }}" },
    { "@type":"ListItem", "position":14, "name":"{{ __('products.p15_name') }}" },
    { "@type":"ListItem", "position":15, "name":"{{ __('products.p15_name') }}" }
  ]
}
</script>
@endpush
