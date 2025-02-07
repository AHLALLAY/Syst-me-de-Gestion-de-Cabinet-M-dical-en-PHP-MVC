<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="/3/controller/LoginController.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="your email">
        <label for="pwd">Password</label>
        <input type="text" name="pwd" id="pwd" placeholder="your password">
        <button type="submit">login</button>
    </form>
</body>
</html>