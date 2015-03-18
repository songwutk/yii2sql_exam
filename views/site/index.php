
<div class="row">
	  <div class="col-md-4">ชื่อ</div>		  <div class="col-md-1"><div align="right">เงินเดือน</div></div>
</div>
<hr>

<?php
			 foreach($model as $employee){
				 echo '<div class="row">';
				 echo '<div class="col-md-4">';	 echo $employee['name']." ";  					echo "</div>";
				 echo '<div class="col-md-1"><div align="right">';	 echo number_format($employee['salary']);  echo "</div></div>";
				 echo "</div>";
			 }
?>			 
<hr>

<div class="row">
	  <div class="col-md-4">รวม</div>		  <div class="col-md-1"><div align="right"><?=number_format($total)?></div></div>
</div>
