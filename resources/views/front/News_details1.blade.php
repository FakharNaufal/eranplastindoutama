@extends('front.layouts.app')

@section('title', 'News – PT Eran Plastindo Utama')
@section('meta_description', 'Latest update from PT Eran Plastindo Utama: manufacturing insights, facility upgrades, and company activities.')

@push('head')
  {{-- (Opsional) Open Graph untuk social share --}}
  <meta property="og:title" content="PT Eran Plastindo Utama Expands Its Manufacturing Capabilities">
  <meta property="og:description" content="PT Eran Plastindo Utama announces facility upgrades to increase capacity while maintaining world-class quality.">
  <meta property="og:image" content="{{ asset('assets/news/news1.jpg') }}">
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
    <article class="lg:col-span-2"
      itemscope itemtype="https://schema.org/NewsArticle">

      {{-- COVER --}}
      <div class="overflow-hidden rounded-xl border border-[#E8EAF2]">
        <img src="{{ asset('assets/news/news1.jpg') }}"
             alt="PT Eran Plastindo Utama expands its manufacturing capabilities"
             class="w-full aspect-[16/9] object-cover"
             itemprop="image">
      </div>

      {{-- TITLE --}}
      <h1 class="mt-6 text-3xl md:text-4xl font-extrabold leading-tight" itemprop="headline">
        Automotive SMEs Strengthen Competitiveness Through Education & Collaboration
      </h1>

      {{-- META --}}
      <div class="mt-3 text-xs text-slate-500 flex flex-wrap items-center gap-4">
        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
          👤 <span itemprop="name">Khaerul Izan</span>
        </span>
        <time itemprop="datePublished" datetime="2025-09-01">Nov 22, 2023</time>
        <meta itemprop="dateModified" content="2025-09-01">
        <span>⏱️ 4–6 min read</span>
        <a href="#comments" class="hover:text-cp-dark-blue">💬 12 Comments</a>
      </div>

      {{-- BODY --}}
      <div class="prose max-w-none mt-6 prose-p:leading-relaxed prose-img:rounded-xl">
        <p itemprop="description">
            Automotive Small and Medium Enterprises (SMEs) in Indonesia are leveling up through
            education programs focused on efficiency, productivity, and innovation. These steps
            help SMEs qualify to become trusted partners for large-scale industries.
        </p>

        <p>
          The “IKM Closed Loop” program, initiated by Kadin Indonesia in collaboration with
          the Ministry of Industry and Astra International (via Yayasan Dharma Bhakti Astra),
          has provided intensive training and mentoring for SME players in the automotive sector.
        </p>

        <blockquote class="border-l-4 pl-4 italic text-slate-600">
          “With this program, we learned how to build efficient, productive, and innovative
          companies that meet the strict standards of major industries,” said Roni Purwantoro,
          an SME entrepreneur now successfully partnering with big automotive companies.
        </blockquote>

        <h3 class="font-bold">Key Highlights</h3>
        <ul class="list-disc pl-6">
          <li>Education in efficiency, productivity, and innovation is crucial for SMEs to grow.</li>
          <li>Partnership with large industries requires meeting high standards in cost, quality, and delivery.</li>
          <li>Training includes 5R principles (Sort, Set, Shine, Standardize, Sustain), occupational safety (K3L), technical skills, marketing, and financial management.</li>
          <li>Regular reviews and MoU monitoring ensure SMEs can progress to the next level.</li>
        </ul>

        <p>
          According to Kadin Indonesia, this collaborative effort builds a more inclusive
          SME ecosystem, ensuring long-term growth and competitiveness for local industries.
        </p>

        {{-- Example inline image with caption --}}
        <figure class="my-6">
          <img src="{{ asset('assets/news/news5.jpg') }}"
               alt="New assembly line and quality inspection area">
          <figcaption class="text-sm text-slate-500 mt-2">
            Automotive SMEs Strengthen Competitiveness Through Education & Collaboration
          </figcaption>
        </figure>
      </div>

      {{-- TAGS & SHARE --}}
      <div class="mt-8 flex flex-wrap items-center gap-4 justify-between border-y py-4">
        <div class="flex flex-wrap gap-2">
          <span class="text-sm text-slate-500">Tags:</span>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">Kadin</a>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">Ministry of Industry</a>
          <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">Industry</a>
        </div>
        <div class="flex items-center gap-2 text-sm">
          <span class="text-slate-500">Share:</span>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">Facebook</a>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">LinkedIn</a>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">WhatsApp</a>
        </div>
      </div>

      {{-- AUTHOR BOX (opsional) --}}
      <div class="mt-8 flex items-center gap-4 p-5 rounded-xl border border-[#E8EAF2] bg-white">
        <img src="{{ asset('assets/photos/photo1.png') }}" alt="Admin"
             class="w-14 h-14 rounded-full object-cover">
        <div>
          <div class="font-semibold">Khaerul Izan</div>
          <p class="text-sm text-slate-500">Sharing updates and stories from PT Eran Plastindo Utama.</p>
        </div>
      </div>

      {{-- COMMENTS --}}
      <div id="comments" class="mt-10">
        <div class="text-lg font-semibold mb-4">Recent Comments</div>
        <div class="space-y-6">
          <div class="flex gap-3">
            <img src="{{ asset('assets/photos/photo4.png') }}" class="w-12 h-12 rounded-full object-cover" alt="Georgia Reader">
            <div>
              <div class="font-medium">
                Sami Kimi
                <a href="#" class="text-cp-dark-blue text-sm ml-2">Reply</a>
              </div>
              <div class="text-xs text-slate-500">Des 2, 2023</div>
              <p class="mt-2">Great news—looking forward to seeing the new capabilities in action.</p>
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
        <a href="{{ route('front.news_details2') }}" class="block p-4 rounded-xl border border-[#E8EAF2] hover:bg-slate-50 transition">
          ← Previous: Strengthening the Supply Chain Through Supply Chain Financing: Collaboration between PT Astra Mitra Ventura & PT Astra Otoparts Tbk
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
            <a href="{{ route('front.news_details2') }}" class="group block">
              <img src="{{ asset('assets/news/news2.jpg') }}" alt="Facility upgrade announcement"
                   class="w-full rounded-lg mb-2 aspect-[4/3] object-cover border border-[#E8EAF2]">
              <div class="font-medium group-hover:text-cp-dark-blue transition">Strengthening the Supply Chain Through Supply Chain Financing: Collaboration between PT Astra Mitra Ventura & PT Astra Otoparts Tbk</div>
              <div class="text-xs text-slate-500">👤 Astra Ventura • Apr 09, 2025</div>
            </a>
          </li>
          <li>
            <a href="{{ route('front.news_details3') }}" class="group block">
              <img src="{{ asset('assets/news/news3.jpg') }}" alt="CSR: Community Support Program"
                   class="w-full rounded-lg mb-2 aspect-[4/3] object-cover border border-[#E8EAF2]">
              <div class="font-medium group-hover:text-cp-dark-blue transition">Ministry of Industry Partners with JICA to Accelerate Digitalization of Automotive Component SMEs</div>
              <div class="text-xs text-slate-500">👤 Vicky Rachman • Apr 24, 2025</div>
            </a>
          </li>
        </ul>
      </div>

      {{-- Tags --}}
      <div class="border rounded-xl p-6 bg-white">
        <div class="font-semibold mb-3">Tags</div>
        <div class="flex flex-wrap gap-2">
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Kadin</a>
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Kadin Indonesia</a>
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Ministry of Industry</a>
          <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">Industry</a>
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
