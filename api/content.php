<style>
.main{
  height:750px;
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
    foreach($data as $row){
      echo "<div>" . $row['sna'] . "</div>";
  
      
    }
      echo "</div>";
  }else{
    echo "<h3 class='text-align'>暫無設站</h3>";
  }
  
?>