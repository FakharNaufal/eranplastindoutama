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
          <a href="{{ route('front.index') }}">{{ __('messages.home') }}</a>
        </li>
        <li class="{{ request()->routeIs('front.about') ? 'text-cp-dark-blue ' : '' }}{{ $liBase }}">
          <a href="{{ route('front.about') }}">{{ __('messages.about') }}</a>
        </li>
        <li class="{{ request()->routeIs('front.team') ? 'text-cp-dark-blue ' : '' }}{{ $liBase }}">
          <a href="{{ route('front.team') }}">{{ __('messages.products') }}</a>
        </li>
        <li class="{{ request()->routeIs('front.ourservice') ? 'text-cp-dark-blue ' : '' }}{{ $liBase }}">
          <a href="{{ route('front.ourservice') }}">{{ __('messages.services') }}</a>
        </li>
        <li class="{{ request()->routeIs('front.news') ? 'text-cp-dark-blue ' : '' }}{{ $liBase }}">
          <a href="{{ route('front.news') }}">{{ __('messages.news') }}</a>
        </li>
      </ul>

      {{-- RIGHT: Language Dropdown + CTA (Desktop) --}}
      @php $cur = app()->getLocale(); @endphp
      <div class="hidden md:flex items-center gap-3">

        {{-- Language Switcher Dropdown (Desktop) --}}
        <div x-data="{ langOpen: false }" class="relative">
          <button
            @click="langOpen = !langOpen"
            @keydown.escape.stop="langOpen=false"
            class="flex items-center gap-2 px-2 py-2 border border-[#E8EAF2] rounded-lg hover:bg-gray-50 transition-all duration-200"
            aria-haspopup="true"
            :aria-expanded="langOpen"
          >
            {{-- Globe icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cp-dark-blue" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M12 21c4.97 0 9-4.03 9-9s-4.03-9-9-9-9 4.03-9 9 4.03 9 9 9z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M3 12h18M12 3c2.5 3 2.5 15 0 18M5.5 5.5c3 1.5 10 1.5 13 0M5.5 18.5c3-1.5 10-1.5 13 0"/>
            </svg>
            {{-- Current flag --}}
            <img src="{{ asset($cur === 'id' ? 'assets/flags/id.png' : 'assets/flags/en.png') }}"
                 alt="{{ strtoupper($cur) }}" class="w-6 h-4 rounded-sm">
            {{-- Caret --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>

          {{-- Dropdown menu (smooth animation) --}}
          <div
            x-show="langOpen"
            @click.outside="langOpen = false"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95 -translate-y-1 origin-top-right"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0 origin-top-right"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0 origin-top-right"
            x-transition:leave-end="opacity-0 scale-95 -translate-y-1 origin-top-right"
            class="absolute right-0 mt-2 w-36 bg-white/95 backdrop-blur border border-[#E8EAF2] rounded-lg shadow-lg z-50"
          >
            <a href="{{ route('lang.switch','id') }}"
               class="flex items-center gap-2 px-3 py-2 text-sm hover:bg-gray-100 rounded-t-lg transition"
               @click="langOpen=false">
              <img src="{{ asset('assets/flags/id.png') }}" alt="Indonesia" class="w-6 h-4 rounded-sm">
              Bahasa
            </a>
            <a href="{{ route('lang.switch','en') }}"
               class="flex items-center gap-2 px-3 py-2 text-sm hover:bg-gray-100 rounded-b-lg transition"
               @click="langOpen=false">
              <img src="{{ asset('assets/flags/en.png') }}" alt="English" class="w-6 h-4 rounded-sm">
              English
            </a>
          </div>
        </div>

        {{-- CTA Contact (Desktop) --}}
        <a href="{{ route('front.appointment') }}"
           class="bg-cp-dark-blue text-white font-bold rounded-xl p-[14px_20px]
                  hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300">
          {{ __('messages.contact') }}
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
             @click="open=false">{{ __('messages.home') }}</a>
        </li>
        <li>
          <a href="{{ route('front.about') }}"
             class="block py-3 {{ request()->routeIs('front.about') ? 'text-cp-dark-blue font-semibold' : 'hover:text-cp-dark-blue' }}"
             @click="open=false">{{ __('messages.about') }}</a>
        </li>
        <li>
          <a href="{{ route('front.team') }}"
             class="block py-3 {{ request()->routeIs('front.team') ? 'text-cp-dark-blue font-semibold' : 'hover:text-cp-dark-blue' }}"
             @click="open=false">{{ __('messages.products') }}</a>
        </li>
        <li>
          <a href="{{ route('front.ourservice') }}"
             class="block py-3 {{ request()->routeIs('front.ourservice') ? 'text-cp-dark-blue font-semibold' : 'hover:text-cp-dark-blue' }}"
             @click="open=false">{{ __('messages.services') }}</a>
        </li>
        <li>
          <a href="{{ route('front.news') }}"
             class="block py-3 {{ request()->routeIs('front.news') ? 'text-cp-dark-blue font-semibold' : 'hover:text-cp-dark-blue' }}"
             @click="open=false">{{ __('messages.news') }}</a>
        </li>
      </ul>

      {{-- Language Switcher Dropdown (Mobile) --}}
      <div x-data="{ langMobile: false }" class="mt-4 text-center relative">
        <button @click="langMobile = !langMobile"
                class="flex items-center justify-center gap-2 w-full border border-[#E8EAF2] rounded-lg p-2 hover:bg-gray-50 transition">
          <img src="{{ asset($cur === 'id' ? 'assets/flags/id.png' : 'assets/flags/en.png') }}"
               alt="{{ strtoupper($cur) }}" class="w-6 h-4 rounded-sm">
          <span>{{ $cur === 'id' ? 'Bahasa' : 'English' }}</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <div x-show="langMobile"
             @click.outside="langMobile = false"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95 -translate-y-1 origin-top"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0 origin-top"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0 origin-top"
             x-transition:leave-end="opacity-0 scale-95 -translate-y-1 origin-top"
             class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-40 bg-white/95 backdrop-blur border border-[#E8EAF2] rounded-lg shadow z-50">
          <a href="{{ route('lang.switch','id') }}"
             class="flex items-center gap-2 px-3 py-2 text-sm hover:bg-gray-100 rounded-t-lg"
             @click="open=false; langMobile=false">
            <img src="{{ asset('assets/flags/id.png') }}" alt="Indonesia" class="w-6 h-4 rounded-sm">
            Bahasa
          </a>
          <a href="{{ route('lang.switch','en') }}"
             class="flex items-center gap-2 px-3 py-2 text-sm hover:bg-gray-100 rounded-b-lg"
             @click="open=false; langMobile=false">
            <img src="{{ asset('assets/flags/en.png') }}" alt="English" class="w-6 h-4 rounded-sm">
            English
          </a>
        </div>
      </div>

      {{-- CTA Contact (Mobile) --}}
      <div class="mt-4">
        <a href="{{ route('front.appointment') }}"
           class="w-full inline-flex justify-center items-center bg-cp-dark-blue text-white font-bold rounded-xl p-[14px_20px]
                  hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300"
           @click="open=false">
          {{ __('messages.contact') }}
        </a>
      </div>
    </div>
  </nav>
</div>
