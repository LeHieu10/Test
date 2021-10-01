<?php
    include "../config/config.php";
    $s = $_POST['data'];
    $sql = "SELECT * FROM thongtin WHERE fullname like '%$s%' ";
    $query = mysqli_query($con, $sql);
    $num = mysqli_num_rows($query);
    if($num > 0){
        while($cs = mysqli_fetch_array($query)){
?>
<tr>
    <td style="text-align: center"><?php echo $cs['username']?></td>
    <td style="text-align: center"><?php echo $cs['fullname']?></td>
    <td style="text-align: center"><?php echo $cs['date']?></td>
    <td style="text-align: center"><?php echo $cs['address']?></td>
    <td style="text-align: center"><?php echo $cs['phonenumber']?></td>
    <td style="text-align: center"><a href="./addInfo.php?user=<?php echo $cs['username']?>"><button class="btn btn-warning"  style="color:#000">Sửa</button></a></td>
</tr>
<?php
        }
    }
?>