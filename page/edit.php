<?php 
    require "connect.php";

    $user = $_GET['user'];

    $result = mysqli_query($con, "SELECT * FROM tb_member WHERE user = '$user' ");
    $rows = mysqli_fetch_assoc($result);
?>

<html>
<head></head>
<body>
<form action="update_member.php?name=<?=$rows['user']?>" method="post">
        <label>USER</label>
        <input type="text" placeholder="USER" name="user">
        <br>
        <label>AGE</label>
        <input type="text" value="15" name="age">
        <br>
        <label>SEX</label>
        <input type="radio" name="sex" value="1"><label>MALE</label>
        <input type="radio" name="sex" value="2"><label>FEMALE</label>
        <br>
        <label>Favorite</label>
        <input type="checkbox" name="fav_b" value="banana"><label>BANANA</label>
        <input type="checkbox" name="fav_a" value="apple"><label>APPLE</label>
        <br>
        <label>Province</label>
        <select name="province">
            <option value="1">BURIRAM</option>
            <option value="2">BANGKOK</option>
        </select>
        <hr>
        <button type="submit"> SAVE </button>
    </form>
</body>
</html>