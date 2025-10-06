@extends('front.layouts.app')

@section('title', 'Products | PT Eran Plastindo Utama')
@section('meta_description', 'Browse precision plastic injection products from PT Eran Plastindo Utama: motorcycle parts, vehicle parts, home appliance components, and others. ISO 9001:2015 quality.')

@section('content')
  {{-- Header --}}
  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
      <x-navbar/>

      {{-- Breadcrumb + Title --}}
      <section class="flex flex-col gap-8 items-center py-12 md:py-20">
        <nav aria-label="Breadcrumb" class="text-sm">
          <ol class="flex items-center gap-3 text-cp-light-grey">
            <li><a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">Home</a></li>
            <li class="opacity-60">/</li>
            <li aria-current="page" class="text-cp-black font-semibold">Products</li>
          </ol>
        </nav>
        {{-- PRODUCTS --}}
        <section class="container max-w-[1130px] mx-auto px-4 py-14 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Our Products</h1>
            <p class="mt-3 text-base md:text-lg text-cp-light-grey max-w-2xl mx-auto">
                High-quality plastic injection products for automotive, electronics, home appliances, and etc.
                engineered with precision and durability to meet global standards.
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
    <div class="flex items-center justify-center py-2 md:py-4 flex-wrap" role="tablist" aria-label="Filter products by category">
      <button type="button" @click="set('all')"        :aria-pressed="active==='all'"        :class="btn('{{$btn}}', active==='all')">All categories</button>
      <button type="button" @click="set('motorcycle')"  :aria-pressed="active==='motorcycle'" :class="btn('{{$btn}}', active==='motorcycle')">Automotive (Motor Cycle) parts</button>
      <button type="button" @click="set('vehicle')"     :aria-pressed="active==='vehicle'"    :class="btn('{{$btn}}', active==='vehicle')">Automotive (Vehicle) parts</button>
      <button type="button" @click="set('home')"        :aria-pressed="active==='home'"       :class="btn('{{$btn}}', active==='home')">Home Appliance</button>
      <button type="button" @click="set('others')"      :aria-pressed="active==='others'"     :class="btn('{{$btn}}', active==='others')">Others</button>
    </div>

    {{-- Grid --}}
    <ul class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 text-left">
            {{-- MOTORCYCLE --}}
            <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture1.png') }}"
                        alt="Air Filter for motorcycle"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Case</p></figcaption>
                </figure>
            </li>

            <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture2.png') }}"
                        alt="Cover Filter for motorcycle"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Cover</p></figcaption>
                </figure>
            </li>

            <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture3.png') }}"
                        alt="Case Air Filter for motorcycle"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Element Assy</p></figcaption>
                </figure>
            </li>

            <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture4.png') }}"
                        alt="Plate Bottom for motorcycle"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Holder Mirror</p></figcaption>
                </figure>
            </li>

            <li data-cat="motorcycle" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture5.png') }}"
                        alt="Plate Bottom for motorcycle"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Plate Bottom</p></figcaption>
                </figure>
            </li>

            {{-- VEHICLE --}}
            <li data-cat="vehicle" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture7.png') }}"
                        alt="Grip Handle Bracket for vehicle"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Grip Handle Bracket</p></figcaption>
                </figure>
            </li>

            <li data-cat="vehicle" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture8.png') }}"
                        alt="Grip Parking Brake Lever for vehicle"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Grip Parking Brake Lever</p></figcaption>
                </figure>
            </li>

            <li data-cat="vehicle" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture9.png') }}"
                        alt="Cover, Parking Brake Hole for vehicle"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Cover, Parking Brake Hole</p></figcaption>
                </figure>
            </li>

            {{-- HOME APPLIANCE --}}
            <li data-cat="home" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture10.png') }}"
                        alt="Switch Cover for rice cooker"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Switch Cover (Rice Cooker)</p></figcaption>
                </figure>
            </li>

            <li data-cat="home" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture11.png') }}"
                        alt="Gauge Hopper for rice box"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Gauge Hopper (Rice Box)</p></figcaption>
                </figure>
            </li>

            <li data-cat="home" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture12.png') }}"
                        alt="Switch Box for electric fan"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Switch Box (Electric Fan)</p></figcaption>
                </figure>
            </li>

            <li data-cat="home" x-show="isShown ? isShown($el) : true" x-transition.opacity>
                <figure class="rounded-2xl border border-[#E8EAF2] bg-white p-3 md:p-4 shadow-sm h-full">
                <div class="aspect-square flex items-center justify-center overflow-hidden rounded-lg bg-white">
                    <img src="{{ asset('assets/products/Picture13.png') }}"
                        alt="Stand Base for electric fan"
                        loading="lazy" width="560" height="560"
                        class="max-w-full max-h-full object-contain object-center"
                        onerror="this.onerror=null;this.src='{{ asset('assets/products/placeholder.png') }}';">
                </div>
                <figcaption class="mt-3 md:mt-4"><p class="text-base md:text-lg font-bold text-gray-900">Stand Base (Electric Fan)</p></figcaption>
                </figure>
            </li>
    </ul>
  </section>


  {{-- About Us --}}
  <x-footer/>
@endsection

@push('structured_data')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"ItemList",
  "itemListElement":[
    { "@type":"ListItem", "position":1, "name":"Air Filter" },
    { "@type":"ListItem", "position":2, "name":"Cover Filter" },
    { "@type":"ListItem", "position":3, "name":"Case Air Filter" },
    { "@type":"ListItem", "position":4, "name":"Plate Bottom" },
    { "@type":"ListItem", "position":5, "name":"Grip Handle Bracket" },
    { "@type":"ListItem", "position":6, "name":"Grip Parking Brake Lever" },
    { "@type":"ListItem", "position":7, "name":"Cover, Parking Brake Hole" },
    { "@type":"ListItem", "position":8, "name":"Switch Cover (Rice Cooker)" },
    { "@type":"ListItem", "position":9, "name":"Gauge Hopper (Rice Box)" },
    { "@type":"ListItem", "position":10, "name":"Switch Box (Electric Fan)" },
    { "@type":"ListItem", "position":11, "name":"Stand Base (Electric Fan)" }
  ]
}
</script>
@endpush
