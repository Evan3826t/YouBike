<table class="table table-hover table-light addr " >
  <thead class="thead-dark ">
    <tr class="text-center">
      <th style="width:120px">站名</th>
      <th style="width:120px">可借車數量</th>
      <th style="width:120px">場占總停車格</th>
      <th>地址</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include_once("../base.php");
  $sarea = $_POST['sarea'];
  $data = all($sarea);
  foreach($data as $row){
    ?>
    <tr>
      <td  data-th="站名"><?=$row['sna']?></td>
      <td  data-th="可借車數量"><?=$row['sbi']?></td>
      <td  data-th="場占總停車格"><?=$row['tot']?></td>
      <td  data-th="地址"><?=$row['ar']?></td>
    <tr>
    <?php
  }
  ?>

  </tbody>
</table>