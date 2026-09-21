<x-layout title="Cards">

    <div class="py-10">

        <p class="text-sm tracking-[0.3em] uppercase text-[#B8E7FF]/70 mb-2">
            Galactic Archive
        </p>

        <h1 class="text-4xl font-bold text-[#F4FBFF] mb-4">
            Card Database
        </h1>

        <p class="text-[#D9F4FF]/75 mb-12">
            Browse the cards discovered throughout the galaxy.
        </p>


        <!-- Spaceships -->

        <section class="mb-16">

            <div class="mb-6">
                <p class="text-sm tracking-[0.25em] uppercase text-[#D1D5DB]/60 mb-1">
                    Set 01
                </p>

                <h2 class="text-3xl font-bold text-[#F4FBFF]">
                    Spaceships
                </h2>

                <p class="text-[#D9F4FF]/60 mt-2">
                    Vessels built to travel, explore, and work among the stars.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach ($cards as $card)

                    @if ($card->category === 'Spaceships')

                        <div class="bg-[#6B7280]/40
                                    border border-[#D1D5DB]/40
                                    shadow-[0_8px_0_#1F2937]
                                    rounded-lg
                                    p-6">

                            <p class="text-sm text-[#D1D5DB] mb-2">
                                {{ $card->category }}
                            </p>

                            <h3 class="text-2xl font-semibold text-white mb-3">
                                {{ $card->name }}
                            </h3>

                            <p class="text-[#E5E7EB]/80 text-sm">
                                {{ $card->description }}
                            </p>

                        </div>

                    @endif

                @endforeach

            </div>

        </section>


        <!-- Planets -->

        <section class="mb-16">

            <div class="mb-6">
                <p class="text-sm tracking-[0.25em] uppercase text-[#DFF6FF]/60 mb-1">
                    Set 02
                </p>

                <h2 class="text-3xl font-bold text-[#F4FBFF]">
                    Planets
                </h2>

                <p class="text-[#D9F4FF]/60 mt-2">
                    Worlds scattered throughout the known galaxy.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach ($cards as $card)

                    @if ($card->category === 'Planets')

                        <div class="bg-[#6FB6D9]/40
                                    border border-[#DFF6FF]/50
                                    shadow-[0_8px_0_#3B6F8F]
                                    rounded-lg
                                    p-6">

                            <p class="text-sm text-[#DFF6FF] mb-2">
                                {{ $card->category }}
                            </p>

                            <h3 class="text-2xl font-semibold text-white mb-3">
                                {{ $card->name }}
                            </h3>

                            <p class="text-[#F3FCFF]/80 text-sm">
                                {{ $card->description }}
                            </p>

                        </div>

                    @endif

                @endforeach

            </div>

        </section>


        <!-- Space Events -->

        <section class="mb-16">

            <div class="mb-6">
                <p class="text-sm tracking-[0.25em] uppercase text-[#FCA5A5]/60 mb-1">
                    Set 03
                </p>

                <h2 class="text-3xl font-bold text-[#F4FBFF]">
                    Space Events
                </h2>

                <p class="text-[#D9F4FF]/60 mt-2">
                    Rare and powerful events occurring throughout space.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach ($cards as $card)

                    @if ($card->category === 'Space Events')

                        <div class="bg-[#450A0A]/70
                                    border border-[#991B1B]/60
                                    shadow-[0_8px_0_#111827]
                                    rounded-lg
                                    p-6">

                            <p class="text-sm text-[#FCA5A5] mb-2">
                                {{ $card->category }}
                            </p>

                            <h3 class="text-2xl font-semibold text-white mb-3">
                                {{ $card->name }}
                            </h3>

                            <p class="text-[#FECACA]/80 text-sm">
                                {{ $card->description }}
                            </p>

                        </div>

                    @endif

                @endforeach

            </div>

        </section>

    </div>

</x-layout>