<x-layout title="Register">

    <div class="min-h-[70vh] flex items-center justify-center">

        <div class="w-full max-w-md
                    bg-[#B8E7FF]/10
                    backdrop-blur-md
                    border border-[#D9F4FF]/40
                    shadow-[0_0_8px_rgba(217,244,255,0.2),0_0_25px_rgba(185,231,255,0.1)]
                    rounded-lg
                    p-8">

            <p class="text-sm tracking-[0.3em] uppercase text-[#B8E7FF]/70 mb-2">
                Galactic Archive
            </p>

            <h1 class="text-3xl font-bold text-[#F4FBFF] mb-2">
                Create Account
            </h1>

            <p class="text-[#D9F4FF]/70 mb-8">
                Create an account to start your personal collection.
            </p>

            <form method="POST" action="/register" class="space-y-5">

                @csrf

                <div>
                    <label for="name" class="block text-sm text-[#D9F4FF]/80 mb-2">
                        Name
                    </label>

                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        class="w-full rounded-lg
                               bg-[#0B1026]/70
                               border border-[#D9F4FF]/25
                               text-white
                               px-4 py-3
                               focus:outline-none
                               focus:border-[#B8E7FF]/70"
                    >

                    @error('name')
                        <p class="text-red-300 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm text-[#D9F4FF]/80 mb-2">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full rounded-lg
                               bg-[#0B1026]/70
                               border border-[#D9F4FF]/25
                               text-white
                               px-4 py-3
                               focus:outline-none
                               focus:border-[#B8E7FF]/70"
                    >

                    @error('email')
                        <p class="text-red-300 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm text-[#D9F4FF]/80 mb-2">
                        Password
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        class="w-full rounded-lg
                               bg-[#0B1026]/70
                               border border-[#D9F4FF]/25
                               text-white
                               px-4 py-3
                               focus:outline-none
                               focus:border-[#B8E7FF]/70"
                    >

                    @error('password')
                        <p class="text-red-300 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm text-[#D9F4FF]/80 mb-2">
                        Confirm Password
                    </label>

                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                        class="w-full rounded-lg
                               bg-[#0B1026]/70
                               border border-[#D9F4FF]/25
                               text-white
                               px-4 py-3
                               focus:outline-none
                               focus:border-[#B8E7FF]/70"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full rounded-lg
                           bg-[#B8E7FF]/20
                           border border-[#D9F4FF]/40
                           text-[#F4FBFF]
                           px-4 py-3
                           hover:bg-[#B8E7FF]/30
                           transition">
                    Create Account
                </button>

            </form>

            <p class="text-center text-sm text-[#D9F4FF]/60 mt-6">
                Already have an account?
                <a href="/login" class="text-[#B8E7FF] hover:text-white">
                    Log in
                </a>
            </p>

        </div>

    </div>

</x-layout>