<!-- upload_success.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload Success</title>
</head>

<body>
    <h2>File Berhasil Diupload</h2>
    <p>Informasi File:</p>
    <ul>
        <li>Nama File: <?php echo $upload_data['file_name']; ?></li>
        <li>Ukuran File: <?php echo $upload_data['file_size']; ?> KB</li>
        <li>Tipe File: <?php echo $upload_data['file_type']; ?></li>
        <li>Path File: <?php echo $upload_data['file_path']; ?></li>
    </ul>
    <a href="<?php echo base_url('upload'); ?>">Kembali ke Form Upload</a>
</body>

</html>