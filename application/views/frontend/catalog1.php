<!-- Section -->
<div id="section_header">
	<h2>ผลงาววิจัย</h2>
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
			<div class="col-sm-2">
				
			</div>
			<div class="col-sm-5" > 
				<br>
				<h4>ชื่อผลงาน  : <?=$rowcatalog->Cl_research;?></h4><br>
				<h4>ชื่อนักวิจัย : <?=$rowcatalog->Cl_researchers;?></h4><br>
				<h4>ราคา : <?=$rowcatalog->Cl_price;?></h4><br>
				<h5>รายละเอียด : <?=$rowcatalog->Cl_property;?></h5><br>
				<h4>เบอร์โทร : <?=$rowcatalog->Cl_contact;?></h4><br>
				<h4>วันที่ผลต : </h4>	
				
				<br><br>	
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