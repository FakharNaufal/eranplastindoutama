@props([
  'id' => null,
  'name',                       {{-- Wajib --}}
  'type' => 'text',
  'label' => null,
  'placeholder' => null,
  'icon' => null,               {{-- contoh: 'profile.svg' --}}
  'required' => false,
  'autocomplete' => null,
])

<label @if($id) for="{{ $id }}" @endif class="block">
  @if($label)
    <span class="font-semibold">{{ $label }}</span>
  @endif

  <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#E8EAF2] bg-white px-4 py-3 focus-within:border-cp-dark-blue">
    @if($icon)
      <img src="{{ asset('assets/icons/'.$icon) }}" alt="" class="w-[18px] h-[18px]">
    @endif

    <input
      {{ $attributes->merge(['class' => 'w-full outline-none font-semibold placeholder:font-normal placeholder:text-gray-500 bg-transparent']) }}
      type="{{ $type }}"
      name="{{ $name }}"
      id="{{ $id ?? $name }}"
      value="{{ old($name) }}"
      placeholder="{{ $placeholder }}"
      @if($required) required @endif
      @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif
    >
  </div>

  @error($name)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
  @enderror
</label>
