<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    
    <form method="post" action="<?php echo site_url('books/update/' . $tb_perpus['id']); ?>">
    <h2>Edit Buku</h2>
        <label for="kode_buku">Kode Buku:</label>
        <input type="text" id="kode_buku" name="kode_buku" value="<?php echo $tb_perpus['kode_buku']; ?>" required>
        <br>
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" value="<?php echo $tb_perpus['isbn']; ?>" required>
        <br>
        <label for="judul_buku">Judul Buku:</label>
        <textarea id="judul_buku" name="judul_buku" required><?php echo $tb_perpus['judul_buku']; ?></textarea>
        <br>
        <label for="pengarang">Pengarang:</label>
        <input type="email" id="pengarang" name="pengarang" value="<?php echo $tb_perpus['pengarang']; ?>">
        <br>
        <label for="sekilas_isi">Sekilas Isi:</label>
        <input type="text" id="sekilas_isi" name="sekilas_isi" value="<?php echo $tb_perpus['sekilas_isi']; ?>" required>
        <br>
        <label for="tanggal_masuk">Tanggal Masuk:</label>
        <input type="date" id="tanggal_masuk" name="tanggal_masuk" value="<?php echo $tb_perpus['tanggal_masuk']; ?>" required>
        <br>
        <label for="stok">Stok:</label>
        <input type="text" id="stok" name="stok" value="<?php echo $tb_perpus['stok']; ?>" required>
        <br>
        <label for="foto">Foto (URL):</label>
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <input type="file" id="foto" name="foto" size="20" value="<?php echo $tb_perpus['foto']; ?>" />
        
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>