<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Lain</title>
    <style>
        /* Styling untuk tata letak sederhana */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Data Barang</h2>

    <?php
    // Menggunakan PDO untuk terhubung dengan database MySQL
    $pdo = new PDO("mysql:host=localhost;dbname=tambahbarang_database", "username", "password");

    // Mengambil data barang dari tabel
    $query = "SELECT * FROM barang";
    $statement = $pdo->query($query);
    $barangs = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Menampilkan data barang dalam tabel HTML
    if (count($barangs) > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Gambar Barang</th>
                    <th>Deskripsi Barang</th>
                </tr>";
        foreach ($barangs as $barang) {
            echo "<tr>
                    <td>{$barang['id_barang']}</td>
                    <td>{$barang['nama_barang']}</td>
                    <td><img src='{$barang['gambar_barang']}' alt='{$barang['nama_barang']}' style='max-width: 100px;'></td>
                    <td>{$barang['deskripsi_barang']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data barang.";
    }
    ?>

</body>
</html>
