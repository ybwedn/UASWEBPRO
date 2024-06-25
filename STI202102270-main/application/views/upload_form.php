<!-- upload_form.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
</head>

<body>
    <h2>Form Upload File</h2>
    <?php echo form_open_multipart('upload/do_upload'); ?>
    <input type="file" name="userfile" size="20" />
    <br /><br />
    <input type="submit" value="Upload File" />
    <?php echo form_close(); ?>
</body>

</html>