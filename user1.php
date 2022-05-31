<?php
require_once "pdo.php";
if (isset($_POST['Nama']) && isset($_POST['Email'])
&& isset($_POST['Password'])) {
    $sql = "INSERT INTO users (Nama, Email, Password)
    VALUES (:Nama, :Email, :Password)";
echo("<pre>\n".$sql."\n</pre>\n");
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
    ':Nama' => $_POST['Nama'],
    ':Email' => $_POST['Email'],
    ':Password' => $_POST['Password']));
}
?><html><head></head><body>
    <p>Add A New User</p>
    <form method="post">
        <p>Name:<input type="text" name="Nama" size="40"></p>
        <p>Email:<input type="text" name="Email"></p>
        <p>Password:<input type="password" name="Password"></p>
        <p><input type="submit" value="Add new"/></p>
    </form>
</body>
</html>