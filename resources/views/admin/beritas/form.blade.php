<div class="flex justify-center h-screen">
    <div class="w-2/3">
        <div class="container mx-auto px-10">
            <form id="uploadForm" enctype="multipart/form-data" class="space-y-4">
                <div class="mb-5">
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul', $berita->judul ?? '') }}" required
                           class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="mb-5">
                    <label for="isi_berita" class="block text-sm font-medium text-gray-700">Isi Berita</label>
                    <textarea id="isi_berita" name="isi_berita" rows="4"
                              class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                              required>{{ old('isi_berita', $berita->isi_berita ?? '') }}</textarea>
                </div>

                <div class="mb-5">
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <div class="mt-1 flex items-center">
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                               type="file" id="gambar" name="gambar">
                        @if(isset($berita) && $berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita"
                                 class="ml-4 h-10 w-10 rounded-full object-cover">
                        @endif
                    </div>
                    <p id="error-message" class="mt-2 text-sm text-red-600 hidden">
                        <span class="font-medium">Oops!</span> Lebar gambar harus lebih besar dari tinggi (format landscape).
                    </p>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('uploadForm').addEventListener('submit', function(event) {
    var fileInput = document.getElementById('gambar');
    var file = fileInput.files[0];

    if (file) {
        var img = new Image();
        img.src = URL.createObjectURL(file);
        img.onload = function() {
            if (img.width <= img.height) {
                event.preventDefault();
                document.getElementById('error-message').classList.remove('hidden');
            }
        };
    }
});
</script>
