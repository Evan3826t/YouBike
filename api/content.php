<style>
.main{
  height:650px;
  overflow: auto;
}
</style>
  <?php
  include_once("../base.php");
  $sarea = $_POST['sarea'];
  $data = all($sarea);
  $allnum = nums(1)[0];
  $disnum = nums($sarea)[0];
  echo "<div class='main' data-allnum='".$allnum."' data-disnum='". $disnum ."'>";
  if($disnum>0){
    echo "<h3>站名</h3>";
    foreach($data as $row){
      echo "<div class='btn btn-warning my-1 sna' data-sna='" . $row['sna'] . "' data-toggle='modal' data-target='#exampleModalCenter'>" . $row['sna'] . "</div><br>";
    }
      echo "</div>";
  }else{
    echo "<h3 class='text-align'>暫無設站</h3>";
  }
  
?>