<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Petugas Provinsi Bali</title>
    @vite('resources/css/app.css') <!-- Menghubungkan CSS dengan Tailwind -->
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Daftar Petugas</h1>
        <div class="flex justify-end mb-4">
            <button
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                onclick="openModal()">
                Tambah Petugas
            </button>
        </div>
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">No</th>
                    <th class="border border-gray-300 px-4 py-2">Nama Petugas</th>
                    <th class="border border-gray-300 px-4 py-2">No Telepon</th>
                    <th class="border border-gray-300 px-4 py-2">Alamat</th>
                    <th class="border border-gray-300 px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($petugas as $index => $p)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $p->nama }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $p->no_telepon }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $p->alamat }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $p->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
<div id="modalTambahPetugas" class="hidden fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded shadow-lg w-1/3">
        <h2 class="text-lg font-bold mb-4">Tambah Petugas</h2>
        <form method="POST" action="{{ route('petugas.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nama">Nama Petugas</label>
                <input type="text" name="nama" id="nama" required
                    class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="no_telepon">No Telepon</label>
                <input type="text" name="no_telepon" id="no_telepon" required
                    class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" required
                    class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeModal()">Batal</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('modalTambahPetugas').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modalTambahPetugas').classList.add('hidden');
    }
</script>

</body>
</html>
