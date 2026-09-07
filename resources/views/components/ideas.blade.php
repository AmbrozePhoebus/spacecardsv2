<x-layout>
    <form method="POST" action="/ideas">
        @csrf
        <label for="idea">Submit your idea:</label>
        <input type="text" id="idea" name="idea" required>
        <button type="submit">Submit</button>
</x-layout>