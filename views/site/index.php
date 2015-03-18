
<div class="row">
	  <div class="col-md-4">ชื่อ</div>		  <div class="col-md-1"><div align="right">เงินเดือน</div></div>
</div>
<hr>

<?php
			 foreach($model as $data){
				$employee=['name'=>$data['name'],'salary'=>$data['salary']];
				
				echo $this->render("_salary",['employee'=>$employee]);
			 }
?>			 

<div class="row"><hr>
	  <div class="col-md-4">รวม</div>		  <div class="col-md-1"><div align="right"><?=number_format($total)?></div></div>
</div>

