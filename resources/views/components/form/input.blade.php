@props([
  'id' => null,
  'name',                       // wajib
  'type' => 'text',
  'label' => null,
  'placeholder' => null,
  'icon' => null,               // contoh: 'profile.svg'
  'required' => false,
  'autocomplete' => null,
])

<label @if($id) for="{{ $id }}" @endif class="block">
  @if($label)
    <span class="font-semibold">{{ $label }}</span>
  @endif

  @php
    // Ambil old value dengan aman (hindari array error)
    $oldValue = old($name);

    if (is_array($oldValue)) {
        $oldValue = isset($oldValue[0]) ? $oldValue[0] : '';
    }

    // Tentukan apakah ada error untuk input ini (untuk border)
    $hasError = $errors->has($name);
  @endphp

  <div class="mt-2 flex items-center gap-2 rounded-xl border px-4 py-3 bg-white focus-within:border-cp-dark-blue {{ $hasError ? 'border-red-500' : 'border-[#E8EAF2]' }}">
    @if($icon)
      <img src="{{ asset('public/assets/icons/'.$icon) }}" alt="" class="w-[18px] h-[18px]">
    @endif

    <input
      {{ $attributes->merge(['class' => 'w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent']) }}
      type="{{ $type }}"
      name="{{ $name }}"
      id="{{ $id ?? $name }}"
      @if($type !== 'file')
        value="{{ $oldValue }}"
      @endif
      placeholder="{{ $placeholder }}"
      @if($required) required @endif
      @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif
    >
  </div>

  @error($name)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
  @enderror
</label>
