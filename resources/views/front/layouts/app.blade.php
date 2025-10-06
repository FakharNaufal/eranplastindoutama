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
    {{-- //file js disini khusus halaman disini--}}
    @stack('after-scripts')

</body>
</html>
