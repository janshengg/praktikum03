<?php
require_once "pdo.php";

if ( isset($_POST['ID']) ) {
    $sql="DELETE FROM users WHERE ID = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip'=>$_POST['ID']));
}
?>
<p>Delete A User</p>
<form method="post">
    <p>ID to delete:
        <input type="text" name="ID"></p>
        <p><input type="submit" value="Delete"/></p>
</form>