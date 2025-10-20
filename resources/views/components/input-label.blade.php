@props(['value'])

@php
    // normalize value jadi string agar htmlspecialchars tidak melempar error
    if (is_array($value)) {
        // ambil elemen pertama kalau ada; kalau tidak, jadikan JSON singkat
        $value = isset($value[0]) ? (string) $value[0] : json_encode($value);
    }
@endphp

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

