<?php
include_once('header.php');
?>
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Batch</label>
    <input type="text" class="form-control" name="batch">
   
  </div>
 <button type="submit" class="btn btn-primary">add batch</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $Batch =$_POST['batch'];
    $query="SELECT * FROM tbl_batch where (b_name)='$Batch'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
echo"<script>
alert('batch already exsist')
</script>";
    }
    else{
    $query="insert into tbl_batch(b_name) values('$Batch')";
    $result=mysqli_query($conn,$query);
    }
}
?>