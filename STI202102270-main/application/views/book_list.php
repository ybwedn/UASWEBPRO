<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        h2 {
            text-align: center;
        }

        .button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .table-button {
            background-color: blue;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 2px 1px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>DATA BUKU</h2>

    <div class="button-container">
        <?php if ($this->session->userdata('logged_in')) : ?>
            <a href="<?php echo site_url('books/create'); ?>" class="button">Tambah</a>
            <a href="<?php echo site_url('login/logout'); ?>" class="button">Logout</a>
        <?php else : ?>
            <a href="<?php echo site_url('login'); ?>" class="button">Login</a>
        <?php endif; ?>

    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Kode Buku</th>
            <th>ISBN</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Sekilas Isi</th>
            <th>Tanggal Masuk</th>
            <th>Stok</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($tb_perpus)) : ?>
            <?php foreach ($tb_perpus as $tb_perpus) : ?>
                <tr>
                    <td><?php echo $tb_perpus['id']; ?></td>
                    <td><?php echo $tb_perpus['kode_buku']; ?></td>
                    <td><?php echo $tb_perpus['isbn']; ?></td>
                    <td><?php echo $tb_perpus['judul_buku']; ?></td>
                    <td><?php echo $tb_perpus['pengarang']; ?></td>
                    <td><?php echo $tb_perpus['sekilas_isi']; ?></td>
                    <td><?php echo $tb_perpus['tanggal_masuk']; ?></td>
                    <td><?php echo $tb_perpus['stok']; ?></td>
                    <td><img src="<?php echo $tb_perpus['foto']; ?>" alt="Foto" width="50"></td>
                    <td>
                        <a href="<?php echo site_url('books/edit/' . $tb_perpus['id']); ?>" class="button">Edit</a>
                        <a href="<?php echo site_url('books/delete/' . $tb_perpus['id']); ?>" class="button">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="11">No data found</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>