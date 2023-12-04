<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        /* Styling untuk tata letak sederhana */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Tambah Barang</h2>
    <form action="tambahbarang_process.php" method="post">
        <label for="idBarang">ID Barang:</label>
        <input type="text" id="idBarang" name="idBarang" required>

        <label for="namaBarang">Nama Barang:</label>
        <input type="text" id="namaBarang" name="namaBarang" required>

        <label for="gambarBarang">Link Gambar Barang:</label>
        <input type="text" id="gambarBarang" name="gambarBarang" required>

        <label for="deskripsiBarang">Deskripsi Barang:</label>
        <textarea id="deskripsiBarang" name="deskripsiBarang" rows="4" required></textarea>

        <button type="submit">Tambah Barang</button>
    </form>
</body>
</html>
