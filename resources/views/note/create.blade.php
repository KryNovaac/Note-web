<x-header></x-header>
<x-main>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold mb-6">Buat Catatan Baru</h1>

        <form action="{{ route('notes.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Judul:</label>
                <input type="text" id="title" name="title" required class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan judul catatan...">
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-medium mb-2">Konten:</label>
                <textarea id="content" name="content" required class="border border-gray-300 rounded p-2 w-full h-40 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan konten catatan..."></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4 hover:bg-blue-600 transition">Simpan</button>
        </form>
    </div>
</x-main>
