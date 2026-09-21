<x-layout title="My Collection">

    <div class="py-10">

        <p class="text-sm tracking-[0.3em] uppercase text-[#B8E7FF]/70 mb-2">
            Personal Archive
        </p>

        <h1 class="text-4xl font-bold text-[#F4FBFF] mb-4">
            My Collection
        </h1>

        <p class="text-[#D9F4FF]/75 mb-8">
            Keep track of the cards you've discovered.
        </p>

        <div class="relative overflow-hidden
                    bg-[#B8E7FF]/10
                    backdrop-blur-md
                    border border-[#D9F4FF]/40
                    shadow-[0_0_8px_rgba(217,244,255,0.2),0_0_25px_rgba(185,231,255,0.1)]
                    rounded-lg
                    p-8">

            @if ($cards->isEmpty())

                <p class="text-[#D9F4FF]/70">
                    Your collection is currently empty.
                </p>

            @else

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

        @foreach ($cards as $cardGroup)

            @php
                $card = $cardGroup->first();
                $amount = $cardGroup->count();
            @endphp

            @if ($card->category === 'Spaceships')

                <div class="relative bg-[#6B7280]/40
                            border border-[#D1D5DB]/40
                            shadow-[0_8px_0_#1F2937]
                            rounded-lg
                            p-6">

                    <div class="absolute top-3 right-3
                                bg-[#1F2937]/60
                                border border-[#D1D5DB]/30
                                rounded-full
                                px-2 py-1
                                text-xs text-[#F4FBFF]">
                        ×{{ $amount }}
                    </div>

                    <p class="text-sm text-[#D1D5DB] mb-2">
                        {{ $card->category }}
                    </p>

                    <h2 class="text-2xl font-semibold text-white mb-3">
                        {{ $card->name }}
                    </h2>

                    <p class="text-[#E5E7EB]/80 text-sm">
                        {{ $card->description }}
                    </p>

                </div>

            @elseif ($card->category === 'Planets')

                <div class="relative bg-[#6FB6D9]/40
                            border border-[#DFF6FF]/50
                            shadow-[0_8px_0_#3B6F8F]
                            rounded-lg
                            p-6">

                    <div class="absolute top-3 right-3
                                bg-[#3B6F8F]/50
                                border border-[#DFF6FF]/30
                                rounded-full
                                px-2 py-1
                                text-xs text-[#F4FBFF]">
                        ×{{ $amount }}
                    </div>

                    <p class="text-sm text-[#DFF6FF] mb-2">
                        {{ $card->category }}
                    </p>

                    <h2 class="text-2xl font-semibold text-white mb-3">
                        {{ $card->name }}
                    </h2>

                    <p class="text-[#F3FCFF]/80 text-sm">
                        {{ $card->description }}
                    </p>

                </div>

            @elseif ($card->category === 'Space Events')

                <div class="relative bg-[#450A0A]/70
                            border border-[#991B1B]/60
                            shadow-[0_8px_0_#111827]
                            rounded-lg
                            p-6">

                    <div class="absolute top-3 right-3
                                bg-[#1F2937]/60
                                border border-[#FCA5A5]/30
                                rounded-full
                                px-2 py-1
                                text-xs text-[#F4FBFF]">
                        ×{{ $amount }}
                    </div>

                    <p class="text-sm text-[#FCA5A5] mb-2">
                        {{ $card->category }}
                    </p>

                    <h2 class="text-2xl font-semibold text-white mb-3">
                        {{ $card->name }}
                    </h2>

                    <p class="text-[#FECACA]/80 text-sm">
                        {{ $card->description }}
                    </p>

                </div>

            @endif

        @endforeach

    </div>

@endif

        </div>

    </div>

</x-layout>