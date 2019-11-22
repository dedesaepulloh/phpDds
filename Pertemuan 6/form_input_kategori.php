<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Data Kategori</title>
</head>
<body>
    <h2 align="center">Form Input Data Kategori</h2>
    <form method="POST" action="insert_kategori.php">
        <table>
            <tr>
                <td>Nama Kategori</td>
                <td>: <input type="text" name="nama_kategori" /></td>
            </tr>

            <tr>
                <td></td>
                <td>:
                    <input type="reset" name="reset" value="Reset" />
                    <input type="submit" name="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
        <a href="tampil_kategori.php">Kembali</a>
</body>
</html>