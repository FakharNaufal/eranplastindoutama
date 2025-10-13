<footer class="bg-cp-black w-full relative overflow-hidden mt-20">
  <div class="container max-w-[1130px] mx-auto px-4 sm:px-6">

    {{-- Top: Brand + Social --}}
    <div data-reveal class="opacity-0 translate-y-4 transition-all duration-700 ease-out
                            flex flex-col md:flex-row items-center md:items-start justify-between gap-8 pt-16 relative z-10">

      {{-- Brand --}}
      <div class="flex flex-col items-center md:items-start gap-6 md:gap-8">
        <div class="flex items-center gap-3">
          <div class="h-10 sm:h-12 w-auto">
            <img src="{{ asset('assets/logo/Logo_PT_ERAN_PLASTINDO_UTAMA.png') }}" alt="Logo PT Eran Plastindo Utama"
                 class="h-full w-auto object-contain">
          </div>
          <div class="hidden sm:flex flex-col">
            <p class="font-extrabold text-lg sm:text-xl text-white">PT Eran Plastindo Utama</p>
            <p class="text-xs sm:text-sm text-cp-light-grey">{{ __('footer.tagline') }}</p>
          </div>
        </div>

        {{-- Social --}}
        <div class="flex flex-wrap items-center justify-center md:justify-start gap-4">
          <a href="https://www.youtube.com/@EranPlastindoUtama" aria-label="YouTube" class="opacity-90 hover:opacity-100 transition">
            <img src="{{ asset('assets/icons/youtube.svg') }}" alt="YouTube" class="w-6 h-6">
          </a>
          <a href="https://wa.me/+6281393310145" aria-label="WhatsApp" class="opacity-90 hover:opacity-100 transition">
            <img src="{{ asset('assets/icons/whatsapp.svg') }}" alt="WhatsApp" class="w-6 h-6">
          </a>
          <a href="https://web.facebook.com/profile.php?id=61581358684002" aria-label="Facebook" class="opacity-90 hover:opacity-100 transition">
            <img src="{{ asset('assets/icons/facebook.svg') }}" alt="Facebook" class="w-6 h-6">
          </a>
          <a href="https://www.instagram.com/eranplastindoutama/" aria-label="Instagram" class="opacity-90 hover:opacity-100 transition">
            <img src="{{ asset('assets/icons/instagram.svg') }}" alt="Instagram" class="w-6 h-6">
          </a>
          <a href="https://www.linkedin.com/company/pt-eran-plastindo-utama/" aria-label="LinkedIn" class="opacity-90 hover:opacity-100 transition">
            <img src="{{ asset('assets/icons/linkedin-white.svg') }}" alt="LinkedIn" class="w-6 h-6">
          </a>
        </div>
      </div>

      {{-- Links --}}
      <div data-reveal class="opacity-0 translate-y-4 transition-all duration-700 ease-out
                              w-full md:w-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 text-center md:text-left">
        {{-- About --}}
        <div>
          <p class="font-bold text-white text-lg mb-3">{{ __('footer.about_title') }}</p>
          <ul class="space-y-2">
            <li><a href="{{ route('front.about') }}" class="text-cp-light-grey hover:text-white transition">{{ __('footer.about_company') }}</a></li>
            <li><a href="{{ route('front.ourservice') }}" class="text-cp-light-grey hover:text-white transition">{{ __('footer.about_awards') }}</a></li>
            <li><a href="{{ route('front.appointment') }}" class="text-cp-light-grey hover:text-white transition">{{ __('footer.about_contact') }}</a></li>
          </ul>
        </div>

        {{-- Services --}}
        <div>
          <p class="font-bold text-white text-lg mb-3">{{ __('footer.service_title') }}</p>
          <ul class="space-y-2">
            <li><a href="{{ route('front.team') }}" class="text-cp-light-grey hover:text-white transition">{{ __('footer.service_product') }}</a></li>
            <li><a href="{{ route('front.ourservice') }}" class="text-cp-light-grey hover:text-white transition">{{ __('footer.service_main') }}</a></li>
            <li><a href="{{ route('front.index') }}" class="text-cp-light-grey hover:text-white transition">{{ __('footer.service_facility') }}</a></li>
          </ul>
        </div>

        {{-- News & Event --}}
        <div>
          <p class="font-bold text-white text-lg mb-3">{{ __('footer.news_title') }}</p>
          <ul class="space-y-2">
            <li><a href="{{ route('front.news') }}" class="text-cp-light-grey hover:text-white transition">{{ __('footer.news_news') }}</a></li>
            <li><a href="{{ route('front.index') }}" class="text-cp-light-grey hover:text-white transition">{{ __('footer.news_faq') }}</a></li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Divider + Bottom --}}
    <div data-reveal class="opacity-0 translate-y-4 transition-all duration-700 ease-out relative z-10 mt-12 border-t border-white/10 py-6">
      <div class="flex flex-col sm:flex-row items-center justify-between gap-3 text-center sm:text-left">
        <p class="text-xs sm:text-sm text-white/70">
          © {{ date('Y') }} PT Eran Plastindo Utama. {{ __('footer.copyright') }}
        </p>
        <div class="flex items-center gap-4 text-xs sm:text-sm">
          <a href="#" class="text-white/70 hover:text-white transition">{{ __('footer.privacy') }}</a>
          <span class="text-white/30">•</span>
          <a href="#" class="text-white/70 hover:text-white transition">{{ __('footer.terms') }}</a>
        </div>
      </div>
    </div>
  </div>

  {{-- Watermark --}}
  <div class="hidden md:block absolute inset-x-0 bottom-[-110px] pointer-events-none select-none">
    <p class="font-extrabold text-[64px] lg:text-[100px] leading-[1] text-center text-white/5">
      PT. Eran Plastindo Utama
    </p>
  </div>
</footer>
