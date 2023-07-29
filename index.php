<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apotik cantik</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-S">
        <h2>Aplikasi Apotik</h2>
        <a class="btn btn-primary" href="/crud/create.php" role="button">+Tambah Data</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama obat</th>
                    <th>jenis obat</th>
                    <th>harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "dbuwin";

                // create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // chek connection
                if($connection->connect_error) {
                    die("connection failed: " .$connection->connect_error);
                } 
                // read all row form database table
                $sql = "SELECT * FROM obat";
                $result = $connection->query($sql);

                if(!$result) {
                    die("invalid query:" .$connection->error);
                }

                // read data of each row
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>$row[id]</td>
                            <td>$row[nama]</td>
                            <td>$row[jenis]</td>
                            <td>$row[harga]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='/crud/edit.php?id=$row[id]'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='/crud/hapus.php?id=$row[id]'>Hapus</a>
                            </td>
                        </tr>";
                } 
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>