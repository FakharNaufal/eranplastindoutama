<div x-data="{ open:false }"
     x-init="$watch('open', v => document.body.classList.toggle('overflow-hidden', v))"
     @keydown.escape.window="open=false"
     class="sticky top-0 z-50 bg-white/90 backdrop-blur">

  <nav class="container mx-auto max-w-7xl px-4 py-3">
    <div class="flex items-center justify-between gap-3 bg-white p-[20px_30px] rounded-[20px] shadow-sm">

      {{-- LEFT: Logo + Company --}}
      <div class="flex items-center gap-3 min-w-0">
        <div class="flex shrink-0 h-[43px] w-auto overflow-hidden">
          <img src="{{ asset('assets/logo/Logo_PT_ERAN_PLASTINDO_UTAMA.png') }}"
               class="object-contain w-full h-full" alt="logo">
        </div>
        <div class="flex flex-col overflow-hidden">
          <p id="CompanyName" class="font-extrabold text-xl leading-[30px] truncate">
            PT. Eran Plastindo Utama
          </p>
          <p id="CompanyTagline" class="text-sm text-cp-light-grey truncate">
            "Plastic Injection Industry"
          </p>
        </div>
      </div>

      {{-- CENTER: Menu (Desktop) --}}
      @php
        $liBase = 'font-semibold transition-all duration-300 hover:text-cp-dark-blue';
      @endphp
      <ul class="hidden md:flex flex-wrap items-center gap-[30px]">
        <li class="{{ request()->routeIs('front.index') ? 'text-cp-dark-blue ' : '' }}{{ $liBase }}">
          <a href="{{ route('front.index') }}">Home</a>
        </li>
        <li class="{{ request()->routeIs('front.about') ? 'text-cp-dark-blue ' : '' }}{{ $liBase }}">
          <a href="{{ route('front.about') }}">About</a>
        </li>
        <li class="{{ request()->routeIs('front.team') ? 'text-cp-dark-blue ' : '' }}{{ $liBase }}">
          <a href="{{ route('front.team') }}">Products</a>
        </li>
        <li class="{{ request()->routeIs('front.ourservice') ? 'text-cp-dark-blue ' : '' }}{{ $liBase }}">
          <a href="{{ route('front.ourservice') }}">Our Services</a>
        </li>
        <li class="{{ request()->routeIs('front.news') ? 'text-cp-dark-blue ' : '' }}{{ $liBase }}">
          <a href="{{ route('front.news') }}">News</a>
        </li>
      </ul>

      {{-- RIGHT: CTA (Desktop) --}}
      <div class="hidden md:block">
        <a href="{{ route('front.appointment') }}"
           class="bg-cp-dark-blue text-white font-bold rounded-xl p-[14px_20px]
                  hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300">
          Contact us
        </a>
      </div>

      {{-- HAMBURGER (Mobile) --}}
      <button type="button"
              class="md:hidden inline-flex items-center justify-center rounded-lg p-2 border
                     hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-cp-dark-blue/30"
              :aria-expanded="open"
              aria-controls="mobileMenu"
              @click="open = !open">
        <span class="sr-only">Toggle menu</span>
        <svg x-show="!open" class="h-6 w-6" viewBox="0 0 24 24" fill="none">
          <path d="M4 6h16M4 12h16M4 18h16"
                stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        <svg x-show="open" x-cloak class="h-6 w-6" viewBox="0 0 24 24" fill="none">
          <path d="M6 6l12 12M18 6l-12 12"
                stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </button>
    </div>

    {{-- MOBILE PANEL --}}
    <div id="mobileMenu"
         x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden mt-3 bg-white rounded-2xl shadow p-4">

      <ul class="flex flex-col divide-y">
        <li>
          <a href="{{ route('front.index') }}"
             class="block py-3 {{ request()->routeIs('front.index') ? 'text-cp-dark-blue font-semibold' : 'hover:text-cp-dark-blue' }}"
             @click="open=false">Home</a>
        </li>
        <li>
          <a href="{{ route('front.about') }}"
             class="block py-3 {{ request()->routeIs('front.about') ? 'text-cp-dark-blue font-semibold' : 'hover:text-cp-dark-blue' }}"
             @click="open=false">About</a>
        </li>
        <li>
          <a href="{{ route('front.team') }}"
             class="block py-3 {{ request()->routeIs('front.team') ? 'text-cp-dark-blue font-semibold' : 'hover:text-cp-dark-blue' }}"
             @click="open=false">Products</a>
        </li>
        <li>
          <a href="{{ route('front.ourservice') }}"
             class="block py-3 {{ request()->routeIs('front.ourservice') ? 'text-cp-dark-blue font-semibold' : 'hover:text-cp-dark-blue' }}"
             @click="open=false">Our Services</a>
        </li>
        <li>
          <a href="{{ route('front.news') }}"
             class="block py-3 {{ request()->routeIs('front.news') ? 'text-cp-dark-blue font-semibold' : 'hover:text-cp-dark-blue' }}"
             @click="open=false">News</a>
        </li>
      </ul>

      <div class="mt-4">
        <a href="{{ route('front.appointment') }}"
           class="w-full inline-flex justify-center items-center bg-cp-dark-blue text-white font-bold rounded-xl p-[14px_20px]
                  hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300"
           @click="open=false">
          Contact us
        </a>
      </div>
    </div>
  </nav>
</div>
