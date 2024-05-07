<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class ="card">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form action="index.php" method="post">
                        <label for="username">Username:</label><br>
                        <input type="text" id="username" name="username"><br>
                        <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password"><br><br>
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>

    {if isset($error)}
        <p style="color: red;">{$error}</p>
    {/if}
    <!-- Bootstrap JavaScript -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
