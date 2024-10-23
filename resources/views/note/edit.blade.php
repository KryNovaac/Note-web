<x-header></x-header>
<x-main>
    <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-4xl font-semibold mb-6 text-gray-800">Edit Catatan</h1>

        <form action="{{ route('notes.update', $note) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-gray-700 font-medium">Judul:</label>
                <input type="text" id="title" name="title" value="{{ $note->title }}" required class="border border-gray-300 rounded p-2 w-full mt-2 focus:outline-none focus:ring focus:ring-blue-500 transition duration-200">
            </div>
            <div class="mt-4">
                <label for="content" class="block text-gray-700 font-medium">Konten:</label>
                <textarea id="content" name="content" required class="border border-gray-300 rounded p-2 w-full mt-2 focus:outline-none focus:ring focus:ring-blue-500 transition duration-200">{{ $note->content }}</textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-full mt-6 hover:bg-blue-700 transition duration-200">Perbarui</button>
        </form>
    </div>
</x-main>
