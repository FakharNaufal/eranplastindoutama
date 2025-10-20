@extends('front.layouts.app')

@section('title', __('appointment.meta_title'))
@section('meta_description', __('appointment.meta_description'))

@section('content')
  {{-- HERO / HEADER --}}
  <header class="bg-[#F6F7FA]">
    <div class="w-full bg-white shadow-sm border-b border-gray-200">
      <x-navbar/>
      <div class="py-12 md:py-16 text-center">
        <nav class="flex items-center justify-center gap-3 text-sm text-cp-light-grey" aria-label="Breadcrumb" data-reveal="fade-up">
          <a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">{{ __('appointment.breadcrumb_home') }}</a>
          <span>/</span>
          <span class="font-semibold text-cp-black">{{ __('appointment.breadcrumb_contact') }}</span>
        </nav>
        <h1 class="mt-6 font-extrabold text-[34px] leading-[42px] md:text-[44px] md:leading-[54px]" data-reveal="fade-up">
          {{ __('appointment.hero_title') }}
        </h1>
        <p class="mt-2 text-cp-light-grey max-w-3xl mx-auto" data-reveal="fade-up">
          {{ __('appointment.hero_desc') }}
        </p>
      </div>
    </div>
  </header>

  {{-- CONTENT --}}
  @php
    $companyEmail    = 'marketing@platindoutama.co.id';
    $companyPhone    = '021-8671165';
    $companyWhatsApp = '0813 9331 0145';
    $mapsUrl         = 'https://www.google.com/maps/place/PT.+Eran+Plastindo+Utama/@-6.4516257,106.9419563,1501m/data=!3m1!1e3!4m6!3m5!1s0x2e699500619f80b7:0xbf5c7dfe444c2430!8m2!3d-6.451335!4d106.941799!16s%2Fg%2F11y5ghb8z0';
  @endphp

  <section class="container max-w-[1130px] mx-auto px-4 md:px-0 mb-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 xl:gap-12 items-start">

      {{-- LEFT: Info cards + Map (Bagian 1 & 2) --}}
      <div class="space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

          {{-- Address --}}
          <div class="rounded-2xl border border-[#E8EAF2] bg-white p-5" data-reveal="fade-up">
            <p class="text-[11px] tracking-wider uppercase text-cp-light-grey mb-2">{{ __('appointment.address_title') }}</p>
            <address class="not-italic font-semibold leading-relaxed">
              {{ __('appointment.address_line1') }}<br>
              {{ __('appointment.address_line2') }}
            </address>
            <a href="{{ $mapsUrl }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 mt-3 text-cp-dark-blue font-semibold hover:underline">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z" fill="currentColor"/></svg>
              {{ __('appointment.open_maps') }}
            </a>
          </div>

          {{-- Phone / WhatsApp --}}
          <div class="rounded-2xl border border-[#E8EAF2] bg-white p-5" data-reveal="fade-up">
            <p class="text-[11px] tracking-wider uppercase text-cp-light-grey mb-2">{{ __('appointment.phonewa_title') }}</p>
            <p class="font-semibold leading-relaxed">
              {{ __('appointment.tel') }} {{ $companyPhone }}<br>
              WhatsApp {{ $companyWhatsApp }}
            </p>
          </div>

          {{-- Email --}}
          <div class="rounded-2xl border border-[#E8EAF2] bg-white p-5 w-full overflow-visible sm:col-span-2" data-reveal="fade-up">
            <p class="text-[11px] tracking-wider uppercase text-cp-light-grey mb-2">{{ __('appointment.email_title') }}</p>
            <a href="mailto:{{ $companyEmail }}"
               class="inline-flex items-center gap-2 font-semibold text-cp-dark-blue hover:underline break-words">
              <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none">
                <path d="M20 4H4a2 2 0 0 0-2 2v.4l10 6.25L22 6.4V6a2 2 0 0 0-2-2Zm0 4.2-8 5-8-5V18a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.2Z" fill="currentColor"/>
              </svg>
              <span class="break-words">{{ $companyEmail }}</span>
            </a>
          </div>
        </div>

        {{-- Google Map --}}
        <div class="rounded-2xl overflow-hidden border border-[#E8EAF2] bg-white" data-reveal="fade-up">
          <div class="aspect-[4/3] w-full">
            <iframe
              title="PT. Eran Plastindo Utama Map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5701567697062!2d106.9419563!3d-6.4516257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699500619f80b7%3A0xbf5c7dfe444c2430!2sPT.%20Eran%20Plastindo%20Utama!5e0!3m2!1sen!2sid!4v1695555555555!5m2!1sen!2sid"
              width="100%" height="100%" style="border:0"
              loading="lazy" allowfullscreen
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

      {{-- RIGHT: Appointment form (Bagian 3) --}}
      <div class="rounded-2xl border border-[#E8EAF2] bg-white p-6 md:p-7 shadow-[0_10px_30px_0_#D1D4DF40]" data-reveal="fade-left">
        <h2 class="font-bold text-xl mb-4">{{ __('appointment.form_title') }}</h2>

        <form action="{{ route('front.appointment_store') }}" method="POST" class="space-y-5" novalidate>
          @csrf

          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            {{-- Name --}}
            <label for="name" class="block">
              <span class="font-semibold">{{ __('appointment.name_label') }}</span>
              <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/profile.svg') }}" alt="" class="w-[18px] h-[18px]">
                <input type="text" name="name" id="name" required autocomplete="name"
                       placeholder="{{ __('appointment.name_ph') }}"
                       class="w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent">
              </div>
            </label>

            {{-- Email --}}
            <label for="email" class="block">
              <span class="font-semibold">{{ __('appointment.email_label') }}</span>
              <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/sms.svg') }}" alt="" class="w-[18px] h-[18px]">
                <input type="email" name="email" id="email" required autocomplete="email"
                       placeholder="{{ __('appointment.email_ph') }}"
                       class="w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent">
              </div>
            </label>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            {{-- Phone --}}
            <label for="phone_number" class="block">
              <span class="font-semibold">{{ __('appointment.phone_label') }}</span>
              <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/call-black.svg') }}" alt="" class="w-[18px] h-[18px]">
                <input type="tel" name="phone_number" id="phone_number" required autocomplete="tel"
                       placeholder="{{ __('appointment.phone_ph') }}"
                       class="w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent">
              </div>
            </label>

            {{-- Meeting Date --}}
            <label class="block">
              <span class="font-semibold">{{ __('appointment.meeting_label') }}</span>
              <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/calendar.svg') }}" alt="calendar" class="w-[18px] h-[18px]">
                <button type="button" id="dateButton"
                        class="w-full text-left bg-transparent outline-none font-semibold text-gray-700">
                  {{ __('appointment.meeting_btn_placeholder') }}
                </button>
                <input type="date" name="meeting_at" id="dateInput" class="sr-only">
              </div>
            </label>
          </div>

          {{-- Interest --}}
          <label for="product_id" class="block">
            <span class="font-semibold">{{ __('appointment.interest_label') }}</span>
            <div class="mt-2 flex flex-col gap-2">
              <div class="flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/building-4-black.svg') }}" alt="" class="w-[18px] h-[18px]">
                <select name="product_id" id="product_id" required
                        class="w-full outline-none font-semibold bg-transparent invalid:font-normal">
                  <option value="" hidden>{{ __('appointment.interest_choose') }}</option>
                  @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                  @endforeach
                  <option value="other">{{ __('appointment.interest_other') }}</option>
                </select>
              </div>

              {{-- input tambahan untuk "other" --}}
              <div id="otherInputWrapper" class="hidden">
                <input type="text" name="other_product" id="other_product"
                       placeholder="{{ __('appointment.other_placeholder') }}"
                       class="w-full rounded-xl border border-[#E8EAF2] px-4 py-3 font-semibold placeholder:font-normal placeholder:text-gray-500 bg-white">
              </div>
            </div>
          </label>

          {{-- Brief --}}
          <label for="brief" class="block">
            <span class="font-semibold">{{ __('appointment.brief_label') }}</span>
            <div class="mt-2 flex gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
              <img src="{{ asset('assets/icons/message-text.svg') }}" alt="" class="w-[18px] h-[18px] mt-[2px]">
              <textarea name="brief" id="brief" rows="6" placeholder="{{ __('appointment.brief_ph') }}"
                        class="w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent resize-none"></textarea>
            </div>
          </label>

          <p class="text-xs text-gray-500">{{ __('appointment.privacy_note') }}</p>
          <button type="submit"
                  class="w-full rounded-xl bg-cp-dark-blue px-5 py-4 font-bold text-white transition hover:bg-[#2A28B5] hover:shadow-[0_12px_30px_0_#312ECB66]">
            {{ __('appointment.submit_btn') }}
          </button>
        </form>
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
  <script src="{{ asset('js/carousel.js') }}"></script>
  <script src="{{ asset('js/accordion.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

  {{-- Tombol → input date --}}
  <script>
    (function(){
      const btn   = document.getElementById('dateButton');
      const input = document.getElementById('dateInput');
      if (!btn || !input) return;
      if (!input.value) btn.textContent = @json(__('appointment.meeting_btn_placeholder'));
      if (!('showPicker' in HTMLInputElement.prototype)) {
        btn.addEventListener('click', () => input.focus());
      } else {
        btn.addEventListener('click', () => input.showPicker());
      }
      input.addEventListener('change', () => {
        btn.textContent = input.value || @json(__('appointment.meeting_btn_placeholder'));
      });
    })();
  </script>

  {{-- Toggle "other" interest --}}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const selectEl = document.getElementById('product_id');
      const otherWrap = document.getElementById('otherInputWrapper');
      if (!selectEl || !otherWrap) return;
      const toggle = () => otherWrap.classList.toggle('hidden', selectEl.value !== 'other');
      selectEl.addEventListener('change', toggle);
      toggle();
    });
  </script>
@endpush
