@extends('front.layouts.app')

@section('title', 'News – PT Eran Plastindo Utama')
@section('meta_description', 'Supply Chain Financing collaboration between PT Astra Mitra Ventura and PT Astra Otoparts Tbk to strengthen suppliers and SMEs in the automotive ecosystem.')

@push('head')
  {{-- Open Graph for social share --}}
  <meta property="og:title" content="Strengthening the Supply Chain Through Supply Chain Financing">
  <meta property="og:description" content="Collaboration between PT Astra Mitra Ventura & PT Astra Otoparts Tbk to improve suppliers’ financial access and resilience.">
  <meta property="og:image" content="{{ asset('assets/news/news2.jpg') }}">
  <meta property="og:type" content="article">
@endpush

@section('content')

  {{-- HEADER --}}
  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
      <x-navbar/>
      <div class="flex flex-col gap-10 items-center py-14">
        <nav class="breadcrumb flex items-center justify-center gap-3 text-sm text-cp-light-grey" aria-label="Breadcrumb">
          <a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">Home</a>
          <span>/</span>
          <a href="{{ route('front.news') }}" class="hover:text-cp-dark-blue">News</a>
          <span>/</span>
          <span class="font-semibold text-cp-black">Details</span>
        </nav>
      </div>
    </div>
  </div>

  {{-- CONTENT --}}
  <div class="container mx-auto max-w-6xl px-4 py-12 grid lg:grid-cols-3 gap-10">

    {{-- MAIN ARTICLE --}}
    <article class="lg:col-span-2" itemscope itemtype="https://schema.org/NewsArticle">

      {{-- COVER --}}
      <div class="overflow-hidden rounded-xl border border-[#E8EAF2]">
        <img src="{{ asset('assets/news/news2.jpg') }}"
             alt="Supply Chain Financing collaboration announcement"
             class="w-full aspect-[16/9] object-cover"
             itemprop="image">
      </div>

      {{-- TITLE --}}
      <h1 class="mt-6 text-3xl md:text-4xl font-extrabold leading-tight" itemprop="headline">
        Strengthening the Supply Chain Through Supply Chain Financing: Collaboration between PT Astra Mitra Ventura & PT Astra Otoparts Tbk
      </h1>

      {{-- META --}}
      <div class="mt-3 text-xs text-slate-500 flex flex-wrap items-center gap-4">
        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
          👤 <span itemprop="name">Astra Ventura</span>
        </span>
        <time itemprop="datePublished" datetime="2025-04-09">Apr 09, 2025</time>
        <meta itemprop="dateModified" content="2025-04-09">
        <span>⏱️ 4–6 min read</span>
        <a href="#comments" class="hover:text-cp-dark-blue">💬 12 Comments</a>
      </div>

      {{-- BODY --}}
      <div class="prose max-w-none mt-6 prose-p:leading-relaxed prose-img:rounded-xl">
        <p itemprop="description">
          PT Astra Mitra Ventura and PT Astra Otoparts Tbk announced a joint initiative to expand
          <em>Supply Chain Financing (SCF)</em> access for tier-2/3 suppliers and automotive SMEs.
          The program aims to improve liquidity, shorten cash conversion cycles, and ensure on-time delivery
          across the ecosystem.
        </p>

        <p>
          Through SCF, qualified suppliers can receive early payment based on approved invoices from buyers,
          enabling them to purchase raw materials, maintain production stability, and meet increasing demand
          without heavy collateral requirements. The collaboration is expected to support operational resilience,
          particularly for SMEs transitioning to higher QCD (Quality, Cost, Delivery) standards.
        </p>

        <h3 class="font-bold">How the Collaboration Works</h3>
        <ul class="list-disc pl-6">
          <li><strong>Buyer-backed invoices:</strong> Financing is based on verified PO/invoices from Astra Otoparts and its network.</li>
          <li><strong>Fast disbursement:</strong> Digital submission and credit assessment to accelerate approval time.</li>
          <li><strong>Competitive rate:</strong> Preferential pricing for participating suppliers within the program.</li>
          <li><strong>Capability building:</strong> Mentoring on cashflow planning, basic finance, and production scheduling.</li>
        </ul>

        <blockquote class="border-l-4 pl-4 italic text-slate-600">
          “SCF allows SMEs to focus on production, not cashflow gaps. With stronger working capital,
          suppliers can improve delivery reliability and quality performance,” said the collaboration team.
        </blockquote>

        <h3 class="font-bold">Benefits for Suppliers & SMEs</h3>
        <ul class="list-disc pl-6">
          <li>Improved working capital and purchase planning.</li>
          <li>Stabilized production and reduced risk of stock-out.</li>
          <li>Better negotiation power for raw-material procurement.</li>
          <li>Enhanced performance to meet OEM QCD requirements.</li>
        </ul>

        <figure class="my-6">
          <img src="{{ asset('assets/news/news2.jpg') }}" alt="Program briefing with suppliers">
          <figcaption class="text-sm text-slate-500 mt-2">
            Program briefing: aligning financing, delivery schedules, and supplier performance metrics.
          </figcaption>
        </figure>

        <p>
          This initiative complements broader ecosystem programs such as supplier development,
          digitalization, and quality assurance support—targeting sustainable and scalable growth
          for Indonesia’s automotive manufacturing sector.
        </p>
      </div>

      {{-- TAGS & SHARE --}}
      <div class="mt-8 flex flex-wrap items-center gap-4 justify-between border-y py-4">
        <div class="flex flex-wrap gap-2">
          <span class="text-sm text-slate-500">Tags:</span>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">Supply Chain</a>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">Financing</a>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">Automotive</a>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">SMEs</a>
        </div>
        <div class="flex items-center gap-2 text-sm">
          <span class="text-slate-500">Share:</span>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">Facebook</a>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">LinkedIn</a>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">WhatsApp</a>
        </div>
      </div>

      {{-- AUTHOR BOX --}}
      <div class="mt-8 flex items-center gap-4 p-5 rounded-xl border border-[#E8EAF2] bg-white">
        <img src="{{ asset('assets/photos/photo1.png') }}" alt="Author"
             class="w-14 h-14 rounded-full object-cover">
        <div>
          <div class="font-semibold">Astra Ventura</div>
          <p class="text-sm text-slate-500">Updates on supplier financing and ecosystem strengthening initiatives.</p>
        </div>
      </div>

      {{-- COMMENTS --}}
      <div id="comments" class="mt-10">
        <div class="text-lg font-semibold mb-4">Recent Comments</div>
        <div class="space-y-6">
          <div class="flex gap-3">
            <img src="{{ asset('assets/photos/photo4.png') }}" class="w-12 h-12 rounded-full object-cover" alt="Sami Kimi">
            <div>
              <div class="font-medium">
                Sami Kimi
                <a href="#" class="text-cp-dark-blue text-sm ml-2">Reply</a>
              </div>
              <div class="text-xs text-slate-500">Apr 10, 2025</div>
              <p class="mt-2">Great step for SMEs—cashflow support is exactly what suppliers need.</p>
            </div>
          </div>
        </div>
      </div>

      {{-- COMMENT FORM --}}
      <div class="mt-10">
        <div class="text-lg font-semibold mb-4">Leave a Comment</div>
        <form class="space-y-4">
          <div class="grid md:grid-cols-2 gap-4">
            <input class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" placeholder="Your Name*">
            <input class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" placeholder="Your Email*">
          </div>
          <input class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" placeholder="Your Website">
          <textarea class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" rows="5" placeholder="Your Comment*"></textarea>
          <button class="px-5 py-3 rounded-xl bg-cp-dark-blue text-white font-semibold hover:shadow-[0_12px_30px_0_#312ECB66] transition">
            Post Comment
          </button>
        </form>
      </div>

      {{-- PREV / NEXT --}}
      <div class="mt-12 grid sm:grid-cols-2 gap-4">
        <a href="{{ route('front.news_details1') }}" class="block p-4 rounded-xl border border-[#E8EAF2] hover:bg-slate-50 transition">
          ← Previous: Automotive SMEs Strengthen Competitiveness Through Education & Collaboration
        </a>
        <a href="{{ route('front.news_details3') }}" class="block p-4 rounded-xl border border-[#E8EAF2] hover:bg-slate-50 transition text-right">
          Next: Ministry of Industry Partners with JICA to Accelerate Digitalization of Automotive Component SMEs →
        </a>
      </div>
    </article>

    {{-- SIDEBAR --}}
    <aside class="lg:col-span-1 space-y-8" aria-label="Sidebar">
      {{-- Recent News --}}
      <div class="border rounded-xl p-6 bg-white">
        <div class="font-semibold mb-4">Recent News</div>
        <ul class="space-y-5 text-sm">
          <li>
            <a href="{{ route('front.news_details1') }}" class="group block">
              <img src="{{ asset('assets/news/news1.jpg') }}" alt="Education & collaboration for SMEs"
                   class="w-full rounded-lg mb-2 aspect-[4/3] object-cover border border-[#E8EAF2]">
              <div class="font-medium group-hover:text-cp-dark-blue transition">
                Automotive SMEs Strengthen Competitiveness Through Education & Collaboration
              </div>
              <div class="text-xs text-slate-500">👤 Khaerul Izan • Nov 22, 2023</div>
            </a>
          </li>
          <li>
            <a href="{{ route('front.news_details3') }}" class="group block">
              <img src="{{ asset('assets/news/news3.jpg') }}" alt="JICA digitalization partnership"
                   class="w-full rounded-lg mb-2 aspect-[4/3] object-cover border border-[#E8EAF2]">
              <div class="font-medium group-hover:text-cp-dark-blue transition">
                Ministry of Industry Partners with JICA to Accelerate Digitalization of Automotive Component SMEs
              </div>
              <div class="text-xs text-slate-500">👤 Vicky Rachman • Apr 24, 2025</div>
            </a>
          </li>
        </ul>
      </div>

      {{-- Tags --}}
      <div class="border rounded-xl p-6 bg-white">
        <div class="font-semibold mb-3">Tags</div>
        <div class="flex flex-wrap gap-2">
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Supply Chain</a>
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Financing</a>
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Astra</a>
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">SMEs</a>
        </div>
      </div>
    </aside>

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
