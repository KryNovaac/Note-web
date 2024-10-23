<x-header></x-header>
<x-main>
    <div class="flex flex-col items-center justify-center h-full">
        <h1 class="text-4xl font-bold mb-4">Selamat datang di Aplikasi Note!</h1>
        <p class="text-lg text-gray-700 mb-6 text-center">
            Aplikasi ini membantu Anda mengelola catatan dengan mudah dan efisien.
        </p>
        <div class="flex space-x-4">
            <a href="{{ route('notes.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                Lihat Catatan
            </a>
            <a href="{{ route('notes.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition">
                Buat Catatan Baru
            </a>
        </div>
    </div>
</x-main>
