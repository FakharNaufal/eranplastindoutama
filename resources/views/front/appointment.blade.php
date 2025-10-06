@extends('front.layouts.app')

@section('title', 'Contact Us – PT Eran Plastindo Utama')
@section('meta_description', 'Schedule a meeting or send your brief. Our team will respond promptly. Location: Coco Park Industrial Area, Klapanunggal, Bogor.')

@section('content')
  {{-- HERO / HEADER --}}
  <header class="bg-[#F6F7FA]">
    <div class="container max-w-[1130px] mx-auto pt-10">
      <x-navbar/>
      <div class="py-12 md:py-16 text-center">
        <nav class="flex items-center justify-center gap-3 text-sm text-cp-light-grey" aria-label="Breadcrumb">
          <a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">Home</a>
          <span>/</span>
          <span class="font-semibold text-cp-black">Contact Us</span>
        </nav>
        <h1 class="mt-6 font-extrabold text-[34px] leading-[42px] md:text-[44px] md:leading-[54px]">
          Let’s Start a Conversation
        </h1>
        <p class="mt-2 text-cp-light-grey">Our team is ready to provide solutions in precision plastic manufacturing.
            Book a meeting today and let’s build excellence together</p>
      </div>
    </div>
  </header>

  {{-- CONTENT --}}
    @php
    // Pusatkan pengaturan agar mudah diubah
    $companyEmail = 'marketing@platindoutama.co.id';
    $companyPhone = '021-8671165';
    $companyWhatsApp = '0813 9331 0145';
    $mapsUrl = 'https://www.google.com/maps/place/PT.+Eran+Plastindo+Utama/@-6.4516257,106.9419563,1501m/data=!3m1!1e3!4m6!3m5!1s0x2e699500619f80b7:0xbf5c7dfe444c2430!8m2!3d-6.451335!4d106.941799!16s%2Fg%2F11y5ghb8z0';
    @endphp

    <section class="container max-w-[1130px] mx-auto px-4 md:px-0 mb-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 xl:gap-12 items-start">

        {{-- LEFT: Info cards + Map --}}
        <div class="space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            {{-- Address --}}
            <div class="rounded-2xl border border-[#E8EAF2] bg-white p-5">
            <p class="text-[11px] tracking-wider uppercase text-cp-light-grey mb-2">Address</p>
            <address class="not-italic font-semibold leading-relaxed">
                Coco Park Industrial Area, Blok B1 No.1<br>
                Desa Kembang Kuning, Klapanunggal, Bogor – West Java RT 002/006 16710
            </address>
            <a href="{{ $mapsUrl }}" target="_blank" rel="noopener"
                class="inline-flex items-center gap-2 mt-3 text-cp-dark-blue font-semibold hover:underline">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z" fill="currentColor"/></svg>
                Open in Google Maps
            </a>
            </div>

            {{-- Phone / WhatsApp --}}
            <div class="rounded-2xl border border-[#E8EAF2] bg-white p-5">
            <p class="text-[11px] tracking-wider uppercase text-cp-light-grey mb-2">Phone / WhatsApp</p>
            <p class="font-semibold leading-relaxed">
                Tel. {{ $companyPhone }}<br>
                WhatsApp {{ $companyWhatsApp }}
            </p>
            </div>

            {{-- Email --}}
            <div class="rounded-2xl border border-[#E8EAF2] bg-white p-5">
            <p class="text-[11px] tracking-wider uppercase text-cp-light-grey mb-2">Email</p>
            <a href="mailto:{{ $companyEmail }}"
                class="inline-flex items-center gap-2 font-semibold text-cp-dark-blue hover:underline break-all">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M20 4H4a2 2 0 0 0-2 2v.4l10 6.25L22 6.4V6a2 2 0 0 0-2-2Zm0 4.2-8 5-8-5V18a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.2Z" fill="currentColor"/></svg>
                {{ $companyEmail }}
            </a>
            </div>

            {{-- Website --}}
            <div class="rounded-2xl border border-[#E8EAF2] bg-white p-5">
            <p class="text-[11px] tracking-wider uppercase text-cp-light-grey mb-2">Website</p>
            <a href="https://eranplastindoutama.co.id" target="_blank" rel="noopener"
                class="font-semibold text-cp-dark-blue hover:underline">
                eranplastindoutama.co.id
            </a>
            </div>
        </div>

        {{-- Google Map --}}
        <div class="rounded-2xl overflow-hidden border border-[#E8EAF2] bg-white">
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

        {{-- RIGHT: Appointment form --}}
        <div class="rounded-2xl border border-[#E8EAF2] bg-white p-6 md:p-7 shadow-[0_10px_30px_0_#D1D4DF40]">
        <h2 class="font-bold text-xl mb-4">Book an Appointment</h2>

        <form action="{{ route('front.appointment_store') }}" method="POST" class="space-y-5" novalidate>
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            {{-- Name --}}
            <label for="name" class="block">
                <span class="font-semibold">Complete Name</span>
                <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/profile.svg') }}" alt="" class="w-[18px] h-[18px]">
                <input type="text" name="name" id="name" required autocomplete="name"
                        placeholder="Write your complete name"
                        class="w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent">
                </div>
            </label>

            {{-- Email --}}
            <label for="email" class="block">
                <span class="font-semibold">Email Address</span>
                <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/sms.svg') }}" alt="" class="w-[18px] h-[18px]">
                <input type="email" name="email" id="email" required autocomplete="email"
                        placeholder="Write your email address"
                        class="w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent">
                </div>
            </label>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            {{-- Phone --}}
            <label for="phone_number" class="block">
                <span class="font-semibold">Phone Number</span>
                <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/call-black.svg') }}" alt="" class="w-[18px] h-[18px]">
                <input type="tel" name="phone_number" id="phone_number" required autocomplete="tel"
                        placeholder="Write your phone number"
                        class="w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent">
                </div>
            </label>

            {{-- Meeting Date (button + hidden input) --}}
            <label class="block">
                <span class="font-semibold">Meeting Date</span>
                <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/calendar.svg') }}" alt="calendar" class="w-[18px] h-[18px]">
                <button type="button" id="dateButton"
                        class="w-full text-left bg-transparent outline-none font-semibold text-gray-700">
                    Select a date
                </button>
                <input type="date" name="meeting_at" id="dateInput" class="sr-only">
                </div>
            </label>
            </div>

            {{-- Interest --}}
            <label for="product_id" class="block">
            <span class="font-semibold">Your Interest</span>
            <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/building-4-black.svg') }}" alt="" class="w-[18px] h-[18px]">
                <select name="product_id" id="product_id" required
                        class="w-full outline-none font-semibold bg-transparent invalid:font-normal">
                <option value="" hidden>Choose a project</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
                    <option value="other">Other</option>
                </select>
            {{-- input tambahan untuk other --}}
            <div id="otherInputWrapper" class="hidden mt-3">
                <input type="text" name="other_product" id="other_product" placeholder="Please specify your request"
                class="w-full rounded-xl border border-[#E8EAF2] px-4 py-3 font-semibold placeholder:font-normal placeholder:text-gray-500 bg-white">
            </div>
            </div>
            </label>

            {{-- Brief --}}
            <label for="brief" class="block">
            <span class="font-semibold">Project Brief</span>
            <div class="mt-2 flex gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
                <img src="{{ asset('assets/icons/message-text.svg') }}" alt="" class="w-[18px] h-[18px] mt-[2px]">
                <textarea name="brief" id="brief" rows="6" placeholder="Tell us the project brief"
                        class="w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent resize-none"></textarea>
            </div>
            </label>

            <p class="text-xs text-gray-500">By submitting this form you agree to our privacy policy.</p>

            <button type="submit"
                    class="w-full rounded-xl bg-cp-dark-blue px-5 py-4 font-bold text-white transition hover:bg-[#2A28B5] hover:shadow-[0_12px_30px_0_#312ECB66]">
            Book Appointment
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
  {{-- Tombol kalender → input date (script milikmu) --}}
  <script defer src="{{ asset('js/contact-form.js') }}"></script>
  {{-- Fallback kalau browser tak mendukung showPicker --}}
  <script>
    (function(){
      const btn = document.getElementById('dateButton');
      const input = document.getElementById('dateInput');
      if (!btn || !input) return;
      // jika showPicker tidak tersedia, fokuskan ke input (akan buka datepicker default pada mobile)
      if (!('showPicker' in HTMLInputElement.prototype)) {
        btn.addEventListener('click', () => input.focus());
      }
      // set placeholder tanggal saat load (opsional)
      if (!input.value) btn.textContent = 'Select a date';
    })();
  </script>
    {{-- Validasi form (script milikmu) --}}
<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "{{ url('/') }}#org",
      "name": "PT. Eran Plastindo Utama",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('assets/logo/Logo_PT_ERAN_PLASTINDO_UTAMA.png') }}",
      "foundingDate": "2020",
      "slogan": "Plastic Injection Industry",
      "sameAs": [
        "https://www.facebook.com/REPLACE",
        "https://www.instagram.com/REPLACE",
        "https://www.youtube.com/REPLACE",
        "https://wa.me/REPLACE"
      ],
      "contactPoint": [{
        "@type": "ContactPoint",
        "contactType": "customer service",
        "telephone": "+62-21-8671165",
        "email": "marketing@platindoutama.co.id",
        "availableLanguage": ["id","en"]
      }]
    },
    {
      "@type": "LocalBusiness",
      "@id": "{{ url('/') }}#local",
      "name": "PT Eran Plastindo Utama",
      "image": [
        "{{ asset('assets/og/cover.jpg') }}"
      ],
      "url": "{{ route('front.appointment') }}",
      "priceRange": "$$",
      "telephone": "+62-21-8671165",
      "parentOrganization": { "@id": "{{ url('/') }}#org" },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Coco Park Industrial Area, Blok B1 No.1, Desa Kembang Kuning",
        "addressLocality": "Klapanunggal",
        "addressRegion": "Jawa Barat",
        "postalCode": "16820",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -6.451335,
        "longitude": 106.941799
      },
      "hasMap": "https://www.google.com/maps/place/PT.+Eran+Plastindo+Utama/@-6.4516257,106.9419563,1501m/data=!3m1!1e3!4m6!3m5!1s0x2e699500619f80b7:0xbf5c7dfe444c2430!8m2!3d-6.451335!4d106.941799!16s%2Fg%2F11y5ghb8z0",
      "openingHoursSpecification": [
        { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens": "08:00", "closes": "17:00" }
      ],
      "areaServed": ["Indonesia","Southeast Asia"],
      "department": [{
        "@type": "Service",
        "name": "Plastic Injection Molding",
        "serviceType": "Manufacturing",
        "provider": { "@id": "{{ url('/') }}#org" }
      }]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ route('front.index') }}" },
        { "@type": "ListItem", "position": 2, "name": "Contact Us", "item": "{{ route('front.appointment') }}" }
      ]
    }
  ]
}</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const selectEl = document.getElementById('product_id');
  const otherWrap = document.getElementById('otherInputWrapper');

  if (!selectEl || !otherWrap) return;

  const toggle = () => {
    if (selectEl.value === 'other') {
      otherWrap.classList.remove('hidden');
    } else {
      otherWrap.classList.add('hidden');
    }
  };

  selectEl.addEventListener('change', toggle);
  toggle(); // initial
});
</script>
@endpush
