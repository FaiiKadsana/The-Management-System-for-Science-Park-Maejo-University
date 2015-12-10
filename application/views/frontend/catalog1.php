<!-- Section -->
<div id="section_header">
	<h2>รายละเอียดผลงานวิจัย</h2>
</div>

<div class="row">
	<div class="col-sm-12">

		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-3">
				<div class="col-sm-12 ">
					<?php echo '<img src= "'.base_url().'asset/img/catalog/'.$Cl_picture.'" style="height:200px;" style="width:40px;">'; ?>
				</div>
			</div>
			<div class="col-sm-1">
				
			</div>
			<div class="col-sm-6" > 
				<br>
				<h4>ชื่อผลงาน  : <?=$Cl_research;?></h4>
				<h5>ชื่อนักวิจัย : <?=$Cl_researchers;?></h5>
				<h5>เบอร์โทร : <?=$Cl_contact;?></h5>
				<h5>ราคา : <?=$Cl_price;?></h5>
				<h5>วันที่ผลต : <?=date("d - m - Y",strtotime($Cl_date));?></h5><br>
				<h5>รายละเอียด : <?=$Cl_property;?></h5>

				<br><br><br>
			</div>
		</div>

	</div>  

</div>
<div class="row">
	<div class="col-sm-12">
		<table>
			<tr>
				<td width="80%">
				</td>
				<td width="80%">
				</td>
				<td>
					<a href="<?php echo base_url("frontend/catalog")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
				</td>
			</tr>
		</table>
	</div>

</div>


<br><br>