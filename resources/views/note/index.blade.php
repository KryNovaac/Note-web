<x-header></x-header>
<x-main>
    <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('notes.create') }}" class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition duration-200">Buat Catatan Baru</a>

  
            <div class="flex space-x-4">
                <form action="{{ route('notes.index') }}" method="GET" class="flex items-center">
                    <input type="text" name="search" placeholder="Cari Catatan..." value="{{ request('search') }}"
                        class="px-4 py-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700 transition duration-200">Cari</button>
                </form>
                <form action="{{ route('notes.index') }}" method="GET" class="flex items-center">
                    <select name="sort" onchange="this.form.submit()" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="" disabled selected>Urutkan</option>
                        <option value="title_asc" {{ request('sort') == 'title_asc' ? 'selected' : '' }}>Judul A-Z</option>
                        <option value="title_desc" {{ request('sort') == 'title_desc' ? 'selected' : '' }}>Judul Z-A</option>
                        <option value="date_asc" {{ request('sort') == 'date_asc' ? 'selected' : '' }}>Tanggal Terlama</option>
                        <option value="date_desc" {{ request('sort') == 'date_desc' ? 'selected' : '' }}>Tanggal Terbaru</option>
                    </select>
                </form>
            </div>
        </div>

        @if (session('success'))
            <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($notes as $note)
                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col space-y-4">
                    <div class="flex items-start justify-between">
                        <h2 class="font-bold text-lg text-gray-800 truncate" title="{{ $note->title }}">{{ $note->title }}</h2>
                        <div class="flex space-x-2">
                            <a href="{{ route('notes.edit', $note) }}" class="text-gray-500 hover:text-gray-700">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button onclick="openModal({{ $note->id }})" class="text-gray-500 hover:text-gray-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text-gray-600 line-clamp-3">{{ $note->content }}</p>
                </div>
            @endforeach
        </div>

   
        <div class="mt-6">
            {{ $notes->links() }}
        </div>
    </div>


    <div id="delete-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Konfirmasi Hapus</h2>
            <p class="text-gray-700">Apakah Anda yakin ingin menghapus catatan ini?</p>
            <div class="mt-6 flex justify-end space-x-4">
                <button id="cancel-button" class="bg-gray-300 hover:bg-gray-400 text-black py-2 px-4 rounded">Batal</button>
                <form id="delete-form" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</x-main>

<script>
    function openModal(noteId) {
        const form = document.getElementById('delete-form');
        form.action = `/notes/${noteId}`;
        document.getElementById('delete-modal').classList.remove('hidden');
    }

    document.getElementById('cancel-button').onclick = function() {
        document.getElementById('delete-modal').classList.add('hidden');
    }
</script>
