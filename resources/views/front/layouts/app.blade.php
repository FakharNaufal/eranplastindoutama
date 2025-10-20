<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eran Plastindo Utama</title>
  <link rel="icon" type="image/png" href="{{asset('assets/logo/Logo_PT_ERAN_PLASTINDO_UTAMA.png')}}"/>
    <!-- CSS for Tailwind -->
  <link href="{{asset('css/output.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <!-- CSS for carousel/flickity-->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">
  <!-- CSS for modal/flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
  @env('local')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
  {{-- pastikan sudah npm run build --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
@endenv
  <style>[x-cloak]{display:none!important}</style>
</head>
<body class="font-poppins text-cp-black">
    @yield('content')
    <!-- Google Fonts Poppins -->

    {{-- include footer --}}
    @stack('before-scripts')
    @push('after-scripts')
<script>
(function(){
  const els = document.querySelectorAll('[data-reveal]');
  if (!('IntersectionObserver' in window) || !els.length) {
    // Fallback: langsung tampil
    els.forEach(el => el.classList.remove('opacity-0','translate-y-4'));
    return;
  }

  const obs = new IntersectionObserver((entries, observer) => {
    entries.forEach(({isIntersecting, target}) => {
      if (isIntersecting) {
        // hapus kelas "hidden state"
        target.classList.remove('opacity-0','translate-y-4');
        // tambahkan "visible state"
        target.classList.add('opacity-100','translate-y-0');
        observer.unobserve(target);
      }
    });
  }, { root: null, rootMargin: '0px 0px -10% 0px', threshold: 0.15 });

  els.forEach(el => {
    // pastikan ada kelas visible target untuk transition
    el.classList.add('opacity-0','translate-y-4');
    obs.observe(el);
  });
})();
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll("[data-reveal]");
  const io = new IntersectionObserver((entries, obs) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add("opacity-100", "translate-y-0");
        e.target.classList.remove("opacity-0", "translate-y-6");
        obs.unobserve(e.target);
      }
    });
  }, {threshold: 0.2});

  elements.forEach(el => {
    el.classList.add("opacity-0", "translate-y-6", "transition-all", "duration-700", "ease-out");
    io.observe(el);
  });
});
</script>
@endpush

    @stack('after-scripts')

</body>
</html>
