<?php
    include "../config/config.php";
    $s = $_POST['data'];
    $sql = "SELECT * FROM users WHERE username like '%$s%' ";
    $query = mysqli_query($con, $sql);
    $num = mysqli_num_rows($query);
    if($num > 0){
        while($cs = mysqli_fetch_array($query)){
?>
<tr>
    <td style="text-align: center"><?php echo $cs['userID']?></td>
    <td style="text-align: center"><?php echo $cs['username']?></td>
    <td style="text-align: center"><?php echo $cs['password']?></td>
    <td style="text-align: center"><?php echo $cs['email']?></td>
    <td style="text-align: center"><?php echo $cs['level']?></td>
    <td style="text-align: center"><a href="./addUser.php?id=<?php echo $cs['userID']?>"><button class="btn btn-warning"  style="color:#000">Sửa</button></a></td>
    <td style="text-align: center"><button class="btn btn-danger" style="color:#fff" onclick="deleteUser(<?php echo $cs['userID']?>)">Xóa</button></td>
</tr>
<?php
        }
    }
?>