<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biaya Operasional</title>
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

    <div class="flex justify-between mx-auto px-4 py-4">
        <div>
            <h6 class="flex items-center">
                Pengeluaran Bulanan
            </h6>
        </div>
        <div class="flex items-center space-x-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded-full flex items-center" onclick="togglePopup()">
                <img src="imgKeuangan/add.png" alt="Tambah" class="w-4 h-4 mr-2">
                Tambah
            </button>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-full flex items-center">
                <img src="imgKeuangan/download.png" alt="Unduh" class="w-4 h-4 mr-2">
                Unduh
            </button>
        </div>
    </div>
    <!-- bagian body data card -->
    <div class="my-5 mx-5">
        <div class="bg-gray-300">
            <div class="flex justify-between mx-auto px-4 py-4">
                <div class="text-xl">Nama Biaya Operasional</div>
                <div class="text-xl text-red-500" id="harga">Rp. 50,505,050</div>
            </div>
        </div>
    </div>

    <!-- Popup -->
    <div class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg p-8 max-w-md bg-gray-200">
            <h2 class="text-2xl mb-4 font-bold">Tambah Biaya Operasional</h2>
            <form>
                <div class="mb-4">
                    <label for="nama-operasi" class="block mb-2">Nama Operasi</label>
                    <input type="text" id="nama-operasi" class="w-full border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="harga-transaksi" class="block mb-2">Harga Transaksi</label>
                    <input type="text" id="harga-transaksi" class="w-full border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="flex justify-end">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="togglePopup()">Simpan</button>
                    <button class="bg-gray-500 text-white px-4 py-2 rounded ml-2" onclick="togglePopup()">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePopup() {
            const popup = document.querySelector('.fixed');
            popup.classList.toggle('hidden');
        }
    </script>
</body>
</html>
