<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Appointments') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                @forelse($appointments as $appointment)
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        @if($appointment->product)
                            <img src="{{ Storage::url($appointment->product->thumbnail) }}"
                                alt="{{ $appointment->product->name }}"
                                class="rounded-2xl object-cover w-[90px] h-[90px]">
                        @else
                            <img src="{{ asset('assets/products/custom-product.png') }}"
                                alt="Custom Product"
                                class="rounded-2xl object-cover w-[90px] h-[90px]">
                        @endif
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">
                                {{ $appointment->product->name ?? $appointment->other_product }}
                            </h3>
                        </div>
                    </div>
                <div class="hidden md:flex flex-col">
                    <p class="text-slate-500 text-sm">Date</p>
                    <h3 class="text-indigo-950 text-xl font-bold">{{ optional($appointment->meeting_at)->format('d M Y') }}</h3>
                </div>

                <div class="hidden md:flex flex-row items-center gap-x-3">
                    <a href="{{ route('admin.appointments.show', $appointment) }}"
                    class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                    Details
                </a>
            </div>
        </div>
        @empty
        <p class="text-center text-gray-500">belum ada data terbaru</p>
        @endforelse
        {{$appointments->links()}}
    </div>
</div>
</div>
</x-app-layout>
