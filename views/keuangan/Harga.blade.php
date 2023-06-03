<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-green-700 py-4">
        <div class="container mx-auto flex items-center justify-between px-4">
            <div class="flex items-center space-x-10 text-teal">
            </div>
            <div class="text-white">
                <div class="mb-1 text-right">Nama Pengguna</div>
                <div class="text-xs text-right">Keuangan</div>
            </div>
        </div>
    </nav>
    <!-- bagian button tambah ama undu -->
    <div class="flex justify-between mx-auto px-4 py-4">
        <div>
            <h6 class="flex items-center">
                Pengeluaran Bulanan
            </h6>
        </div>
        <div class="flex items-center space-x-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded-full flex items-center" onclick="togglePopup('add')">
                <img src="imgKeuangan/add.png" alt="Tambah" class="w-4 h-4 mr-2">
                Tambah
            </button>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-full flex items-center" onclick="togglePopup('edit')">
                <img src="imgKeuangan/download.png" alt="Unduh" class="w-4 h-4 mr-2">
                Unduh
            </button>
        </div>
    </div>
    <!-- bagian body data card -->
    <div class="my-5 mx-5 border-rounded-full">
    <div class="bg-gray-300">
        <div class="flex items-center">
            <div class="ml-4">
                <div class="text-xl">Nama Barang</div>
                <div class="text-sm">Rp. harga barang</div>
            </div>
            <div class="ml-auto flex space-x-10 px-3">
                <button class="bg-white text-black hover:bg-blue-600 hover:text-white font-bold py-2 px-10 rounded text-lg mt-3 mb-3" onclick="togglePopup('edit')">Edit</button>
                <button class="bg-red-500 text-black hover:bg-red-800 hover:text-white font-bold py-2 px-10 rounded text-lg mt-3 mb-3">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Popup -->
<div class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg p-8 max-w-md bg-gray-200">
        <h2 class="text-2xl mb-4 font-bold" id="popup-title"></h2>
        <form>
            <div class="mb-4">
                <label for="nama-barang" class="block mb-2">Nama Barang</label>
                <input type="text" id="nama-barang" class="w-full border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="harga-barang" class="block mb-2">Harga Barang</label>
                <input type="text" id="harga-barang" class="w-full border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="markup" class="block mb-2">Markup</label>
                <input type="text" id="markup" class="w-full border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex justify-end">
                <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="togglePopup('save')">Simpan</button>
                <button class="bg-gray-500 text-white px-4 py-2 rounded ml-2" onclick="togglePopup('cancel')">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
    function togglePopup(mode) {
        const popup = document.querySelector('.fixed');
        const popupTitle = document.querySelector('#popup-title');
        const namaBarangInput = document.querySelector('#nama-barang');
        const hargaBarangInput = document.querySelector('#harga-barang');
        const markupInput = document.querySelector('#markup');

        if (mode === 'edit') {
            popupTitle.textContent = 'Edit Barang';
            namaBarangInput.value = 'Nama Barang';
            hargaBarangInput.value = 'Rp. harga barang';
            markupInput.value = 'Persentase Harga';
        } else if (mode === 'add') {
            popupTitle.textContent = 'Tambah Barang';
            namaBarangInput.value = '';
            hargaBarangInput.value = '';
            markupInput.value = '';
        } else {
            popup.classList.add('hidden');
            return;
        }

        popup.classList.remove('hidden');
    }
</script>

</body>
</html>
