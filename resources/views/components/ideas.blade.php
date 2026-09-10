<x-layout>
    <form method="POST" action="/ideas">
        @csrf
    <div class="col-span-full">
        <label for="idea" class="block text-sm/6 font-medium text-white">Submit your idea</label>
        <div class="mt-2">
            <textarea id="idea" name="idea" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-300">Share your idea with us!</p>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="reset" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
    </form>

    <div>
        <h2>Your Ideas</h2>

        <ul>
            @foreach ($ideas as $idea)
                <li>{{ $idea }}</li>
            @endforeach
        </ul>
    </div>
</x-layout>