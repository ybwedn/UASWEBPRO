<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .login-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container h2 {
            text-align: center;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if ($this->session->flashdata('error')) : ?>
            <p class="error"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
        <?php echo form_open('login/authenticate'); ?>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</body>

</html>