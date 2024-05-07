<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h2>HOME</h2>
    {if isset($success)}
        <p style="color: green;">{$success}</p>
    {/if}
    <!-- Bootstrap JavaScript -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
