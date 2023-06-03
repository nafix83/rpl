<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
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
<div id="main">
        <a href="#" type="button" class="bg-blue-300 mb-3 text-white" style="font-weight: bold;">Tambah Data</a>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <?php
            include 'connect.php';
            $sql = "SELECT * FROM mahasiswa";
            $query = mysqli_query($connect, $sql);
            $i = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $i ?></td>
                        <td><?= $data['Nim'] ?></td>
                        <td><?= $data['Nama_Mhs'] ?></td>
                        <td><?= $data['Jenis_Kelamin'] ?></td>
                        <td><?= $data['Program_Studi'] ?></td>
                        <td><a href="#?id=<?= $data['Nim'] ?>" class="bg-yellow-100">Beli</a></td>
                        <td><a href="#?id=<?= $data['Nim'] ?>" class="bg-green-100">Edit</a></td>
                        <td><a href="#?id=<?= $data['Nim'] ?>" class="bg-red-100">Delete</a></td>
                    </tr>
                </tbody>
            <?php $i += 1;
            } ?>
        </table>
    </div>
</body>
</html>
