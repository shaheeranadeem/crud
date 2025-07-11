<?php
include_once('header.php')
?>
<table class="table table-primary">
    <tr>
        <TH>Batch Id</TH>
    <th>Batch Name</th>
</tr>

<?php
$query="SELECT * FROM tbl_batch";
 $result=mysqli_query($conn,$query);
 foreach($result as $data)
 {?>
<tr>
    <td><?php echo $data ["b_id"]?></td>
    <td><?php echo $data ["b_name"]?></td>
</tr>

 <?php }


?>

</table>