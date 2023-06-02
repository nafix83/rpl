<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <header >
    <nav class="bg-blue-400 py-4">
        <div class="container mx-auto flex items-center justify-between px-4">
          <div class="flex items-center space-x-10 text-teal">
            <!-- <a href="#" class="text-white text-xl transition duration-300 ease-in-out font-bold">Pesanan</a>
            <a href="#" class="text-white text-xl font-bold">Pengiriman</a> -->
          </div>
            <div class="text-white">
                <div class="mb-1 text-right">Nama Pengguna</div>
                <div class="text-xs text-right">Sales</div>
            </div>
        </div>
    </nav>
      </header>
    

    <main class="bg-g">  
  <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-4xl bg-white p-8 shadow-md rounded">
      <div class="flex">
        <div class="w-1/2 pr-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="companyName">
              Nama Perusahaan
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="companyName" type="text" placeholder="Nama Perusahaan">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="productName">
              Nama Barang
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="productName">
              <option value="">Pilih Barang</option>
              <option value="barang1">Barang 1</option>
              <option value="barang2">Barang 2</option>
              <option value="barang3">Barang 3</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
              Jumlah
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="quantity" type="number" placeholder="Jumlah">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="productType">
              Tipe Barang
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="productType">
              <option value="">Pilih Tipe Barang</option>
              <option value="tipe1">Tipe 1</option>
              <option value="tipe2">Tipe 2</option>
              <option value="tipe3">Tipe 3</option>
            </select>
          </div>
        </div>
        <div class="w-1/2 pl-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
              Alamat
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2">

            </textarea>
            </div>
        </div>

    </div>
    <div class="flex justify-end">
        <button type="button" class="bg-green-500 rounded items-center mb-4 px-3 py-1">Kirim</button>    
    </div>
</main>

    
</body>
                


