<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post Form</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="submit" value="Register">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            if (!isset($_POST['name']) || !isset($_POST['email']) || 
                empty($_POST['name']) || empty($_POST['email'])) {
                throw new Exception("Введите данные");
            }
            echo "<p style='color:green;'>Регистрация прошла успешно!</p>";
        } catch (Exception $e) {
            echo "<p style='color:red;'>Ошибка: " . $e->getMessage() . "</p>";
        }
    }
    ?>
</body>
</html>
