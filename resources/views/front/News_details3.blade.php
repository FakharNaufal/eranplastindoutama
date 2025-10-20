@extends('front.layouts.app')

@section('title', __('news3.meta_title'))
@section('meta_description', __('news3.meta_description'))

@push('head')
  {{-- Open Graph --}}
  <meta property="og:title" content="{{ __('news3.og_title') }}">
  <meta property="og:description" content="{{ __('news3.og_description') }}">
  <meta property="og:image" content="{{ asset('assets/news/news3.jpg') }}">
  <meta property="og:type" content="article">
@endpush

@section('content')

  {{-- ========== BAGIAN 1: HEADER / BREADCRUMB ========== --}}
  <div id="header" class="bg-[#F6F7FA] relative">
    <div class="w-full bg-white shadow-sm border-b border-gray-200">
      <x-navbar/>
      <div class="flex flex-col gap-10 items-center py-14">
        <nav class="breadcrumb flex items-center justify-center gap-3 text-sm text-cp-light-grey" aria-label="Breadcrumb" data-reveal="fade-up">
          <a href="{{ route('front.index') }}" class="hover:text-cp-dark-blue">{{ __('news3.breadcrumb_home') }}</a>
          <span>/</span>
          <a href="{{ route('front.news') }}" class="hover:text-cp-dark-blue">{{ __('news3.breadcrumb_news') }}</a>
          <span>/</span>
          <span class="font-semibold text-cp-black">{{ __('news3.breadcrumb_details') }}</span>
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
        <img src="{{ asset('assets/news/news3.jpg') }}"
             alt="{{ __('news3.cover_alt') }}"
             class="w-full aspect-[16/9] object-cover"
             itemprop="image">
      </div>

      {{-- TITLE --}}
      <h1 class="mt-6 text-3xl md:text-4xl font-extrabold leading-tight" itemprop="headline" data-reveal="fade-up">
        {{ __('news3.title') }}
      </h1>

      {{-- META --}}
      <div class="mt-3 text-xs text-slate-500 flex flex-wrap items-center gap-4" data-reveal="fade-up">
        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
          👤 <span itemprop="name">{{ __('news3.author') }}</span>
        </span>
        <time itemprop="datePublished" datetime="2025-04-24">{{ __('news3.date_display') }}</time>
        <meta itemprop="dateModified" content="2025-04-24">
        <span>{{ __('news3.read_time') }}</span>
        <a href="#comments" class="hover:text-cp-dark-blue">{{ __('news3.comments_count') }}</a>
      </div>

      {{-- BODY --}}
      <div class="prose max-w-none mt-6 prose-p:leading-relaxed prose-img:rounded-xl" data-reveal="fade-up">
        <p itemprop="description">{!! __('news3.p1_html') !!}</p>

        <p>{{ __('news3.p2') }}</p>

        <h3 class="font-bold">{{ __('news3.focus_title') }}</h3>
        <ul class="list-disc pl-6">
          <li>{!! __('news3.focus_1_html') !!}</li>
          <li>{!! __('news3.focus_2_html') !!}</li>
          <li>{!! __('news3.focus_3_html') !!}</li>
          <li>{{ __('news3.focus_4') }}</li>
        </ul>

        <blockquote class="border-l-4 pl-4 italic text-slate-600">
          {{ __('news3.quote') }}
        </blockquote>

        <h3 class="font-bold">{{ __('news3.outcomes_title') }}</h3>
        <ul class="list-disc pl-6">
          <li>{{ __('news3.outcome_1') }}</li>
          <li>{{ __('news3.outcome_2') }}</li>
          <li>{{ __('news3.outcome_3') }}</li>
        </ul>

        <figure class="my-6">
          <img src="{{ asset('assets/news/news3.jpg') }}" alt="{{ __('news3.figure_alt') }}">
          <figcaption class="text-sm text-slate-500 mt-2">{{ __('news3.figure_caption') }}</figcaption>
        </figure>
      </div>

      {{-- TAGS & SHARE --}}
      <div class="mt-8 flex flex-wrap items-center gap-4 justify-between border-y py-4" data-reveal="fade-up">
        <div class="flex flex-wrap gap-2">
          <span class="text-sm text-slate-500">{{ __('news3.tags') }}</span>
          @foreach(__('news3.tags_list') as $tag)
            <a href="#" class="px-2 py-1 rounded border text-sm hover:bg-slate-50">{{ $tag }}</a>
          @endforeach
        </div>
        <div class="flex items-center gap-2 text-sm">
          <span class="text-slate-500">{{ __('news3.share') }}</span>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">Facebook</a>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">LinkedIn</a>
          <a href="#" class="px-2 py-1 rounded border hover:bg-slate-50">WhatsApp</a>
        </div>
      </div>

      {{-- AUTHOR BOX --}}
      <div class="mt-8 flex items-center gap-4 p-5 rounded-xl border border-[#E8EAF2] bg-white" data-reveal="fade-up">
        <img src="{{ asset('assets/photos/user.png') }}" alt="Author"
             class="w-14 h-14 rounded-full object-cover">
        <div>
          <div class="font-semibold">{{ __('news3.author') }}</div>
          <p class="text-sm text-slate-500">{{ __('news3.author_desc') }}</p>
        </div>
      </div>

      {{-- COMMENTS --}}
      <div id="comments" class="mt-10" data-reveal="fade-up">
        <div class="text-lg font-semibold mb-4">{{ __('news3.comments_title') }}</div>
        <div class="space-y-6">
          <div class="flex gap-3">
            <img src="{{ asset('assets/photos/photo3.png') }}" class="w-12 h-12 rounded-full object-cover" alt="User">
            <div>
              <div class="font-medium">
                {{ __('news3.sample_comment_name') }}
                <a href="#" class="text-cp-dark-blue text-sm ml-2">{{ __('news3.reply') }}</a>
              </div>
              <div class="text-xs text-slate-500">{{ __('news3.sample_comment_date') }}</div>
              <p class="mt-2">{{ __('news3.sample_comment_text') }}</p>
            </div>
          </div>
        </div>
      </div>

      {{-- COMMENT FORM --}}
      <div class="mt-10" data-reveal="fade-up">
        <div class="text-lg font-semibold mb-4">{{ __('news3.leave_comment') }}</div>
        <form class="space-y-4">
          <div class="grid md:grid-cols-2 gap-4">
            <input class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" placeholder="{{ __('news3.form_name') }}">
            <input class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" placeholder="{{ __('news3.form_email') }}">
          </div>
          <input class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" placeholder="{{ __('news3.form_website') }}">
          <textarea class="w-full rounded-xl border border-[#E8EAF2] px-3 py-3" rows="5" placeholder="{{ __('news3.form_comment') }}"></textarea>
          <button class="px-5 py-3 rounded-xl bg-cp-dark-blue text-white font-semibold hover:shadow-[0_12px_30px_0_#312ECB66] transition">
            {{ __('news3.post_comment') }}
          </button>
        </form>
      </div>

      {{-- PREV / NEXT (mengikuti pola file-mu sebelumnya) --}}
      <div class="mt-12 grid sm:grid-cols-2 gap-4" data-reveal="fade-up">
        <a href="{{ route('front.news_details1') }}" class="block p-4 rounded-xl border border-[#E8EAF2] hover:bg-slate-50 transition">
          ← {{ __('news3.prev') }}
        </a>
        <a href="{{ route('front.news_details2') }}" class="block p-4 rounded-xl border border-[#E8EAF2] hover:bg-slate-50 transition text-right">
          {{ __('news3.next') }} →
        </a>
      </div>
    </article>

    {{-- ========== BAGIAN 3: SIDEBAR ========== --}}
    <aside class="lg:col-span-1 space-y-8" aria-label="Sidebar">
      {{-- Recent News --}}
      <div class="border rounded-xl p-6 bg-white" data-reveal="fade-left">
        <div class="font-semibold mb-4">{{ __('news3.recent_news') }}</div>
        <ul class="space-y-5 text-sm">
          <li>
            <a href="{{ route('front.news_details1') }}" class="group block">
              <img src="{{ asset('assets/news/news1.jpg') }}" alt="{{ __('news3.recent1_alt') }}"
                   class="w-full rounded-lg mb-2 aspect-[4/3] object-cover border border-[#E8EAF2]">
              <div class="font-medium group-hover:text-cp-dark-blue transition">{{ __('news3.recent1_title') }}</div>
              <div class="text-xs text-slate-500">👤 {{ __('news3.recent1_author') }} • {{ __('news3.recent1_date') }}</div>
            </a>
          </li>
          <li>
            <a href="{{ route('front.news_details2') }}" class="group block">
              <img src="{{ asset('assets/news/news2.jpg') }}" alt="{{ __('news3.recent2_alt') }}"
                   class="w-full rounded-lg mb-2 aspect-[4/3] object-cover border border-[#E8EAF2]">
              <div class="font-medium group-hover:text-cp-dark-blue transition">{{ __('news3.recent2_title') }}</div>
              <div class="text-xs text-slate-500">👤 {{ __('news3.recent2_author') }} • {{ __('news3.recent2_date') }}</div>
            </a>
          </li>
        </ul>
      </div>

      {{-- Tags --}}
      <div class="border rounded-xl p-6 bg-white" data-reveal="fade-left">
        <div class="font-semibold mb-3">{{ __('news3.tags') }}</div>
        <div class="flex flex-wrap gap-2">
          @foreach(__('news3.tags_list') as $tag)
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

