<x-layout title="Space Cards">

    <div class="min-h-[70vh] flex items-center justify-center">

        <div class="relative w-full max-w-4xl">

            <!-- Main information panel -->
            <div class="relative overflow-hidden
                        bg-[#B8E7FF]/10
                        backdrop-blur-md
                        border border-[#D9F4FF]/50
                        shadow-[0_0_8px_rgba(217,244,255,0.25),0_0_30px_rgba(185,231,255,0.15)]
                        p-8
                        rounded-lg">

                <!-- Decorative top-right control panel -->
                <div class="absolute top-0 right-0 flex">

                    <div class="w-12 h-8
                                bg-[#B8E7FF]/10
                                border-l border-b border-[#D9F4FF]/30
                                flex items-center justify-center">
                        <span class="text-[#D9F4FF]/70 text-xs">●</span>
                    </div>

                    <div class="w-12 h-8
                                bg-[#B8E7FF]/10
                                border-l border-b border-[#D9F4FF]/30
                                flex items-center justify-center">
                        <span class="text-[#D9F4FF]/70 text-xs">●</span>
                    </div>

                    <div class="w-12 h-8
                                bg-[#B8E7FF]/10
                                border-l border-b border-[#D9F4FF]/30
                                flex items-center justify-center">
                        <span class="text-[#D9F4FF]/70 text-xs">●</span>
                    </div>

                </div>

                <!-- Decorative glowing edge -->
                <div class="absolute top-0 left-0 w-32 h-1
                            bg-[#D9F4FF]/60
                            blur-[1px]">
                </div>

                <div class="pt-6">

                    <p class="text-sm tracking-[0.3em] uppercase text-[#B8E7FF]/70 mb-2">
                        Galactic Collection Database
                    </p>

                    <h1 class="text-4xl font-bold text-[#F4FBFF] mb-4">
                        Welcome to Space Cards
                    </h1>

                    <p class="text-lg text-[#D9F4FF]/90 leading-relaxed mb-8">
                        Explore the galaxy, discover unique cards, and build
                        your own collection.
                    </p>


                    <!-- How it works -->
                    <div class="grid md:grid-cols-3 gap-4">

                        <div class="bg-[#B8E7FF]/5
                                    border border-[#D9F4FF]/25
                                    rounded-lg p-5">

                            <p class="text-sm text-[#8FD8FF] mb-2">
                                01
                            </p>

                            <h2 class="text-xl font-semibold text-[#F4FBFF] mb-2">
                                Discover
                            </h2>

                            <p class="text-[#D9F4FF]/75 text-sm">
                                Browse the cards available in the galaxy.
                                Discover spaceships, planets, and cosmic
                                phenomena.
                            </p>

                        </div>


                        <div class="bg-[#B8E7FF]/5
                                    border border-[#D9F4FF]/25
                                    rounded-lg p-5">

                            <p class="text-sm text-[#8FD8FF] mb-2">
                                02
                            </p>

                            <h2 class="text-xl font-semibold text-[#F4FBFF] mb-2">
                                Collect
                            </h2>

                            <p class="text-[#D9F4FF]/75 text-sm">
                                Add cards to your personal collection as
                                you discover them.
                            </p>

                        </div>


                        <div class="bg-[#B8E7FF]/5
                                    border border-[#D9F4FF]/25
                                    rounded-lg p-5">

                            <p class="text-sm text-[#8FD8FF] mb-2">
                                03
                            </p>

                            <h2 class="text-xl font-semibold text-[#F4FBFF] mb-2">
                                Complete
                            </h2>

                            <p class="text-[#D9F4FF]/75 text-sm">
                                Collect the cards belonging to each set and
                                see how much of the galaxy you've discovered.
                            </p>

                        </div>

                    </div>

                    @auth        
                    <div class="mt-12 text-center">

        <form method="POST" action="/discover">
        @csrf

        <button
            type="submit"
                class="rounded-lg
                       bg-[#B8E7FF]/20
                       border border-[#D9F4FF]/40
                       text-[#F4FBFF]
                       px-8 py-3
                       hover:bg-[#B8E7FF]/30
                       shadow-[0_0_12px_rgba(185,231,255,0.15)]
                       transition">
                Discover a Card
        </button>
    </form>
@endauth

                </div>

            </div>

        </div>

    </div>

</x-layout>