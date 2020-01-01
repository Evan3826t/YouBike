<?php
include_once ("../base.php");
$data = find($_POST['sna']);
?>
<div class="modal-header">
      <h4 class="modal-title" id="exampleModalCenterTitle">站名：<?=$data['sna']?></h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <h5><?=$data['sarea']?></h5>
        <div>總停車格：<?=$data['tot']?></div>
        <div>可借車位數：<?=$data['sbi']?></div>
        <div>地址：<?=$data['ar']?></div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>