<?php
include_once("header.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tbl_batch where b_id = $id";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$batchname = $data['b_name'];

?>
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Batch</label>
    <input type="text" class="form-control" value="<?php echo $batchname?>" name="batch">
  </div>
 <button type="submit" class="btn btn-primary">update batch</button>
</form>
<?php
 if($_SERVER['REQUEST_METHOD']=="POST"){
    $Batch =$_POST['batch'];
    $query="SELECT * FROM tbl_batch where b_name = '$Batch'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
echo"<script>
alert('batch already exsist')
window.location.href='view_batch.php';
</script>";
    }
    else{
    $query="update tbl_batch SET b_name = '$Batch' WHERE id=$id";
    $result=mysqli_query($conn,$query);
    
    }
}
?>