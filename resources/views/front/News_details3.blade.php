@extends('front.layouts.app')

@section('title', 'News – PT Eran Plastindo Utama')
@section('meta_description', 'Ministry of Industry collaborates with JICA to accelerate digitalization for automotive component SMEs: productivity, quality, and supply-chain visibility.')

@push('head')
  {{-- Open Graph for social share --}}
  <meta property="og:title" content="Ministry of Industry & JICA Accelerate Digitalization of Automotive Component SMEs">
  <meta property="og:description" content="Partnership focuses on smart manufacturing practices, digital QC, and supplier readiness to meet OEM standards.">
  <meta property="og:image" content="{{ asset('assets/news/news3.jpg') }}">
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
        <img src="{{ asset('assets/news/news3.jpg') }}"
             alt="Ministry of Industry and JICA digitalization partnership for automotive SMEs"
             class="w-full aspect-[16/9] object-cover"
             itemprop="image">
      </div>

      {{-- TITLE --}}
      <h1 class="mt-6 text-3xl md:text-4xl font-extrabold leading-tight" itemprop="headline">
        Ministry of Industry Partners with JICA to Accelerate Digitalization of Automotive Component SMEs
      </h1>

      {{-- META --}}
      <div class="mt-3 text-xs text-slate-500 flex flex-wrap items-center gap-4">
        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
          👤 <span itemprop="name">Vicky Rachman</span>
        </span>
        <time itemprop="datePublished" datetime="2025-04-24">Apr 24, 2025</time>
        <meta itemprop="dateModified" content="2025-04-24">
        <span>⏱️ 4–6 min read</span>
        <a href="#comments" class="hover:text-cp-dark-blue">💬 12 Comments</a>
      </div>

      {{-- BODY --}}
      <div class="prose max-w-none mt-6 prose-p:leading-relaxed prose-img:rounded-xl">
        <p itemprop="description">
          The Ministry of Industry (Kemenperin) and the Japan International Cooperation Agency (JICA)
          launched a joint initiative to speed up digital transformation among automotive component SMEs.
          The program targets productivity, quality assurance, and supply-chain visibility to meet OEM QCD standards.
        </p>

        <p>
          The collaboration introduces pilot projects in digital production tracking, electronic work
          instructions, and real-time quality monitoring. SMEs receive workshops, onsite mentoring, and
          assessments to prioritize high-impact use cases while keeping investments practical and scalable.
        </p>

        <h3 class="font-bold">Focus Areas</h3>
        <ul class="list-disc pl-6">
          <li><strong>Digital shopfloor:</strong> OEE tracking, downtime analysis, and paperless work orders.</li>
          <li><strong>Quality systems:</strong> e-checksheet, SPC dashboards, and faster traceability.</li>
          <li><strong>Supply-chain visibility:</strong> PO status, delivery adherence, and inventory accuracy.</li>
          <li><strong>Capability building:</strong> training on lean, data literacy, and change management.</li>
        </ul>

        <blockquote class="border-l-4 pl-4 italic text-slate-600">
          “Digital adoption is most successful when problems are clear and teams are ready.
          We start small, prove value, then scale,” said the program facilitators.
        </blockquote>

        <h3 class="font-bold">Expected Outcomes</h3>
        <ul class="list-disc pl-6">
          <li>Higher throughput and reduced defects through data-driven decisions.</li>
          <li>Faster response to customer demand and better on-time delivery.</li>
          <li>Stronger readiness to comply with OEM audits and sustainability goals.</li>
        </ul>

        <figure class="my-6">
          <img src="{{ asset('assets/news/news3.jpg') }}" alt="Workshop on digital QC and production dashboards">
          <figcaption class="text-sm text-slate-500 mt-2">
            Workshop session: mapping pain points, selecting use cases, and defining KPI baselines.
          </figcaption>
        </figure>
      </div>

      {{-- TAGS & SHARE --}}
      <div class="mt-8 flex flex-wrap items-center gap-4 justify-between border-y py-4">
        <div class="flex flex-wrap gap-2">
          <span class="text-sm text-slate-500">Tags:</span>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">Digitalization</a>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">Automotive</a>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">SMEs</a>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">Quality</a>
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
          <div class="font-semibold">Vicky Rachman</div>
          <p class="text-sm text-slate-500">Covering industry collaboration and smart manufacturing initiatives.</p>
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
              <div class="text-xs text-slate-500">Apr 25, 2025</div>
              <p class="mt-2">Great direction—digital QC and OEE will help suppliers scale faster.</p>
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
        <a href="{{ route('front.news_details2') }}" class="block p-4 rounded-xl border border-[#E8EAF2] hover:bg-slate-50 transition text-right">
          Next: Strengthening the Supply Chain Through Supply Chain Financing: Collaboration between PT Astra Mitra Ventura & PT Astra Otoparts Tbk
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
            <a href="{{ route('front.news_details2') }}" class="group block">
              <img src="{{ asset('assets/news/news2.jpg') }}" alt="Supply Chain Financing collaboration"
                   class="w-full rounded-lg mb-2 aspect-[4/3] object-cover border border-[#E8EAF2]">
              <div class="font-medium group-hover:text-cp-dark-blue transition">
                Strengthening the Supply Chain Through Supply Chain Financing
              </div>
              <div class="text-xs text-slate-500">👤 Astra Ventura • Apr 09, 2025</div>
            </a>
          </li>
        </ul>
      </div>

      {{-- Tags --}}
      <div class="border rounded-xl p-6 bg-white">
        <div class="font-semibold mb-3">Tags</div>
        <div class="flex flex-wrap gap-2">
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Digitalization</a>
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Automotive</a>
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">SMEs</a>
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Quality</a>
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
