@extends('front.layouts.app')

@section('title', __('news1.meta_title'))
@section('meta_description', __('news1.meta_description'))

@push('head')
  {{-- Open Graph (opsional) --}}
  <meta property="og:title" content="{{ __('news1.og_title') }}">
  <meta property="og:description" content="{{ __('news1.og_description') }}">
  <meta property="og:image" content="{{ asset('assets/news/news1.jpg') }}">
  <meta property="og:type" content="article">
@endpush

@section('content')

  {{-- ========== BAGIAN 1: HEADER / BREADCRUMB ========== --}}
  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="w-full bg-white shadow-sm border-b border-gray-200">
      <x-navbar/>
      <div class="flex flex-col gap-10 items-center py-14">
        <nav class="breadcrumb flex items-center justify-center gap-3 text-sm text-cp-light-grey" aria-label="Breadcrumb" data-reveal="fade-up">
          <a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">{{ __('news1.breadcrumb_home') }}</a>
          <span>/</span>
          <a href="{{ route('front.news') }}" class="hover:text-cp-dark-blue">{{ __('news1.breadcrumb_news') }}</a>
          <span>/</span>
          <span class="font-semibold text-cp-black">{{ __('news1.breadcrumb_details') }}</span>
        </nav>
      </div>
    </div>
  </div>

  {{-- ========== BAGIAN 2: KONTEN ARTIKEL ========== --}}
  <div class="container mx-auto max-w-6xl px-4 py-12 grid lg:grid-cols-3 gap-10">

    {{-- MAIN ARTICLE --}}
    <article class="lg:col-span-2" itemscope itemtype="https://schema.org/NewsArticle">

      {{-- COVER --}}
      <div class="overflow-hidden rounded-xl border border-[#E8EAF2]" data-reveal="fade-up">
        <img src="{{ asset('assets/news/news1.jpg') }}"
             alt="{{ __('news1.cover_alt') }}"
             class="w-full aspect-[16/9] object-cover"
             itemprop="image">
      </div>

      {{-- TITLE --}}
      <h1 class="mt-6 text-3xl md:text-4xl font-extrabold leading-tight" itemprop="headline" data-reveal="fade-up">
        {{ __('news1.title') }}
      </h1>

      {{-- META --}}
      <div class="mt-3 text-xs text-slate-500 flex flex-wrap items-center gap-4" data-reveal="fade-up">
        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
          👤 <span itemprop="name">{{ __('news1.author') }}</span>
        </span>
        <time itemprop="datePublished" datetime="2023-11-22">{{ __('news1.date_display') }}</time>
        <meta itemprop="dateModified" content="2023-11-22">
        <span>{{ __('news1.read_time') }}</span>
        <a href="#comments" class="hover:text-cp-dark-blue">{{ __('news1.comments_count') }}</a>
      </div>

      {{-- BODY --}}
      <div class="prose max-w-none mt-6 prose-p:leading-relaxed prose-img:rounded-xl" data-reveal="fade-up">
        <p itemprop="description">
          {{ __('news1.p1') }}
        </p>

        <p>
          {!! __('news1.p2_html') !!}
        </p>

        <blockquote class="border-l-4 pl-4 italic text-slate-600">
          {{ __('news1.quote') }}
        </blockquote>

        <h3 class="font-bold">{{ __('news1.highlights_title') }}</h3>
        <ul class="list-disc pl-6">
          <li>{{ __('news1.hl1') }}</li>
          <li>{{ __('news1.hl2') }}</li>
          <li>{{ __('news1.hl3') }}</li>
          <li>{{ __('news1.hl4') }}</li>
        </ul>

        <p>
          {{ __('news1.p3') }}
        </p>

        <figure class="my-6">
          <img src="{{ asset('assets/news/news5.jpg') }}" alt="{{ __('news1.figure_alt') }}">
          <figcaption class="text-sm text-slate-500 mt-2">
            {{ __('news1.figure_caption') }}
          </figcaption>
        </figure>
      </div>

      {{-- TAGS & SHARE --}}
      <div class="mt-8 flex flex-wrap items-center gap-4 justify-between border-y py-4" data-reveal="fade-up">
        <div class="flex flex-wrap gap-2">
          <span class="text-sm text-slate-500">{{ __('news1.tags') }}</span>
          @foreach(__('news1.tags_list') as $tag)
            <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">{{ $tag }}</a>
          @endforeach
        </div>
        <div class="flex items-center gap-2 text-sm">
          <span class="text-slate-500">{{ __('news1.share') }}</span>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">Facebook</a>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">LinkedIn</a>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">WhatsApp</a>
        </div>
      </div>

      {{-- AUTHOR BOX --}}
      <div class="mt-8 flex items-center gap-4 p-5 rounded-xl border border-[#E8EAF2] bg-white" data-reveal="fade-up">
        <img src="{{ asset('assets/photos/user.png') }}" alt="Author" class="w-14 h-14 rounded-full object-cover">
        <div>
          <div class="font-semibold">{{ __('news1.author') }}</div>
          <p class="text-sm text-slate-500">{{ __('news1.author_desc') }}</p>
        </div>
      </div>

      {{-- COMMENTS --}}
      <div id="comments" class="mt-10" data-reveal="fade-up">
        <div class="text-lg font-semibold mb-4">{{ __('news1.comments_title') }}</div>
        <div class="space-y-6">
          <div class="flex gap-3">
            <img src="{{ asset('assets/photos/photo1.png') }}" class="w-12 h-12 rounded-full object-cover" alt="User">
            <div>
              <div class="font-medium">
                {{ __('news1.sample_comment_name') }}
                <a href="#" class="text-cp-dark-blue text-sm ml-2">{{ __('news1.reply') }}</a>
              </div>
              <div class="text-xs text-slate-500">{{ __('news1.sample_comment_date') }}</div>
              <p class="mt-2">{{ __('news1.sample_comment_text') }}</p>
            </div>
          </div>
        </div>
      </div>

      {{-- COMMENT FORM --}}
      <div class="mt-10" data-reveal="fade-up">
        <div class="text-lg font-semibold mb-4">{{ __('news1.leave_comment') }}</div>
        <form class="space-y-4">
          <div class="grid md:grid-cols-2 gap-4">
            <input class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" placeholder="{{ __('news1.form_name') }}">
            <input class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" placeholder="{{ __('news1.form_email') }}">
          </div>
          <input class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" placeholder="{{ __('news1.form_website') }}">
          <textarea class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" rows="5" placeholder="{{ __('news1.form_comment') }}"></textarea>
          <button class="px-5 py-3 rounded-xl bg-cp-dark-blue text-white font-semibold hover:shadow-[0_12px_30px_0_#312ECB66] transition">
            {{ __('news1.post_comment') }}
          </button>
        </form>
      </div>

      {{-- PREV / NEXT --}}
      <div class="mt-12 grid sm:grid-cols-2 gap-4" data-reveal="fade-up">
        <a href="{{ route('front.news_details2') }}" class="block p-4 rounded-xl border border-[#E8EAF2] hover:bg-slate-50 transition">
          ← {{ __('news1.prev') }}
        </a>
        <a href="{{ route('front.news_details3') }}" class="block p-4 rounded-xl border border-[#E8EAF2] hover:bg-slate-50 transition text-right">
          {{ __('news1.next') }} →
        </a>
      </div>
    </article>

    {{-- ========== BAGIAN 3: SIDEBAR ========== --}}
    <aside class="lg:col-span-1 space-y-8" aria-label="Sidebar">
      {{-- Recent News --}}
      <div class="border rounded-xl p-6 bg-white" data-reveal="fade-left">
        <div class="font-semibold mb-4">{{ __('news1.recent_news') }}</div>
        <ul class="space-y-5 text-sm">
          <li>
            <a href="{{ route('front.news_details2') }}" class="group block">
              <img src="{{ asset('assets/news/news2.jpg') }}" alt="{{ __('news1.recent2_alt') }}"
                   class="w-full rounded-lg mb-2 aspect-[4/3] object-cover border border-[#E8EAF2]">
              <div class="font-medium group-hover:text-cp-dark-blue transition">{{ __('news1.recent2_title') }}</div>
              <div class="text-xs text-slate-500">👤 Astra Ventura • Apr 09, 2025</div>
            </a>
          </li>
          <li>
            <a href="{{ route('front.news_details3') }}" class="group block">
              <img src="{{ asset('assets/news/news3.jpg') }}" alt="{{ __('news1.recent3_alt') }}"
                   class="w-full rounded-lg mb-2 aspect-[4/3] object-cover border border-[#E8EAF2]">
              <div class="font-medium group-hover:text-cp-dark-blue transition">{{ __('news1.recent3_title') }}</div>
              <div class="text-xs text-slate-500">👤 Vicky Rachman • Apr 24, 2025</div>
            </a>
          </li>
        </ul>
      </div>

      {{-- Tags --}}
      <div class="border rounded-xl p-6 bg-white" data-reveal="fade-left">
        <div class="font-semibold mb-3">{{ __('news1.tags') }}</div>
        <div class="flex flex-wrap gap-2">
          @foreach(__('news1.tags_list') as $tag)
            <a href="#" class="px-2 py-1 rounded-full border text-xs hover:bg-slate-50">{{ $tag }}</a>
          @endforeach
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
