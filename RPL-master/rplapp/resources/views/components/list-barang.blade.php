<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body >

<nav class="bg-yellow-400 py-4">
        <div class="container mx-auto flex items-center justify-between px-4">
          <div class="flex items-center space-x-10 text-teal">
            <a href="#" class="text-white text-xl transition duration-300 ease-in-out font-bold">Pesanan</a>
            <a href="#" class="text-white text-xl font-bold">Pengiriman</a>
          </div>
            <div class="text-white">
                <div class="mb-1 text-right">Nama Pengguna</div>
                <div class="text-xs text-right">Gudang</div>
            </div>
        </div>
    </nav>
<div class="flex justify-center items-center h-screen">
  <div class="container border p-4 w-96 bg-gray-200">
    
    <h2 class="font-bold text-xl">Form Pengisian Barang</h2>
    <div class="row">
        <div class="col-sm-4">
        <div class="flex mb-4">
        <div class="mr-4 p-4 border-radius:10px rounded">
          <img src="coba.jpg" alt="Gambar Barang" class="w-1/3">
        </div>
        </div>
        <div class="col-sm-8">
        <form action="proses.php" method="POST">
        <div class="form-group">
          <label for="nama_barang" class="font-bold">Nama Barang:</label>
          <input type="text" name="nama_barang" id="nama_barang" required class="w-full p-2 border border-gray-300 rounded">
        </div>
      </div>
      <div class="form-group mb-4">
        <label for="stok_barang" class="font-bold">Stok Barang:</label>
        <input type="number" name="stok_barang" id="stok_barang" required class="w-full p-2 border border-gray-300 rounded">
      </div>
      <div class="button-container">
        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Simpan</button>
        <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded">Batal</button>
      </div>
    </form>
        </div>
    
    </div>
  </div>
  </div>
</body>
</html>
