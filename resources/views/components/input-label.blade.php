@props(['value'])

@php
    // Ambil value atau slot fallback
    $val = $value ?? null;

    // Jika tidak ada value, gunakan slot jika ada (slot biasanya string/HTML)
    if (is_null($val)) {
        // jika slot tersedia, ambil slot content (slot kemungkinan sudah string/html)
        // tapi kadang slot bisa berisi array (jika salah binding), jadi periksa juga
        $slotContent = trim((string) ($slot ?? ''));
        $val = $slotContent !== '' ? $slotContent : '';
    }

    // Jika value adalah array, kita normalisasi:
    if (is_array($val)) {
        // Prefer mengambil elemen pertama jika ada
        $val = isset($val[0]) ? $val[0] : implode(' ', array_map('strval', $val));
    }

    // Pastikan jadi string
    $val = (string) $val;
@endphp

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $val }}
</label>

