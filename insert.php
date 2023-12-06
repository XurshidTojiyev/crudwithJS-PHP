<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        include "connect.php";
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $age = $_POST['age'];
            $sql = "INSERT INTO users(id, username, age)VALUES(NULL, '$username', '$age');";
            $connect->query($sql);
            header('Location: /');
        }
    ?>

<div>
    <div class="container mt-5"><br>
        <a href="/" class="btn btn-primary">← Back</a>
        <form method="post">
            <h2>Add User</h2>
            <label for="username">Username</label><br>
            <input type="text" name="username" class="form-control w-50"><br>
            <label for="age">Age</label><br>
            <input type="number" name="age" class="form-control w-50"><br>
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
    
</body>
</html>