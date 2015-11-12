<!-- Section -->
<div id="section_header">
	<h2>ผลงานวิจัยพร้อมใช้ประโยชน์</h2>
</div>
<div class="row">
	<div class="col-sm-12">

	<?php  foreach ($catalog as $rowcatalog){  ?>
		
	<div class="col-sm-3">
			<div class="paddd">
				<div class="team style2 box-shadow">
					<div class="team-header">
						<?php echo '<img src= "'.base_url().$rowcatalog->Re_picture.'" style="height:130px;" style="width:40px;">'; ?>
					</div>
					<div class="team-date">
						<p><font size='3'>ชื่อผลงาน  : <?php echo $rowcatalog->Re_name;?></font></p>
						<i class="piksell-color small-text">ชื่อนักวิจัย : <?php echo $rowcatalog->Rec_name;?></font></i><br>
						<i class="piksell-color small-text">รหัสสนธิบัตร: <?php echo $rowcatalog->ne_text;?></i><br>
						<i class="piksell-color small-text">ราคา: <?php echo $rowcatalog->Cl_price;?></i><br>
						<!--<p>Lorem ipsum ctetur dolor sit amet, conse ctetur tempor elit.</p>-->
						<i class="piksell-color small-text">รายละเอียด: <?php echo $rowcatalog->Cl_property;?></i><br>
						<i class="piksell-color small-text">เบอร์โทร:<?php echo $rowcatalog->Cl_contact;?></i>
					</div>
				</div>
			</div>
	</div>

	<?php } ?>

	<div class="row">
		<center>
			<div class="paginationnext" >
				<div class="col-md-12" >
					<ul class="paginationnext" >

						<li>
							<?php echo $page; ?>
						</li>
						<ul>
						</div>
					</div>  

				</div>
			</center>
		</div>

		<div class="col-sm-3">
			<div class="paddd">
				<div class="team style2 box-shadow">
					<div class="team-header">
						<img src='<?php echo base_url("asset/images/personnel/P.jpg") ?>' class="picture-personnel box-shadow" height="250px">
					</div>
					<div class="team-date">
						<p><font size='3'>>ชื่อผลงานผลงาน  : กังหันลม</font></p>
						<i class="piksell-color small-text">ชื่อนักวิจัย : นางสาวนิตยา&nbsp;ถาวัน</font></i><br>
						<i class="piksell-color small-text">รหัสสนธิบัตร:กห2575</i><br>
						<i class="piksell-color small-text">ราคา:ขึ้นอยู่กับการเจรจา</i><br>
						<!--<p>Lorem ipsum ctetur dolor sit amet, conse ctetur tempor elit.</p>-->
						<i class="piksell-color small-text">รายละเอียด:เป็นกังหนลม</i><br>
						<i class="piksell-color small-text">เบอร์โทร:0857856130</i>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="paddd">
				<div class="team style2 box-shadow">
					<div class="team-header">
						<img src='<?php echo base_url("asset/images/personnel/P.jpg") ?>' class="picture-personnel box-shadow" height="250px">
					</div>
					<div class="team-date">	
						<p><font size='3'>>ชื่อผลงานผลงาน  : กังหันลม</font></p>
						<i class="piksell-color small-text">ชื่อนักวิจัย : นางสาวนิตยา&nbsp;ถาวัน</font></i><br>
						<i class="piksell-color small-text">รหัสสนธิบัตร:กห2575</i><br>
						<i class="piksell-color small-text">ราคา:ขึ้นอยู่กับการเจรจา</i><br>
						<!--<p>Lorem ipsum ctetur dolor sit amet, conse ctetur tempor elit.</p>-->
						<i class="piksell-color small-text">รายละเอียด:เป็นกังหนลม</i><br>
						<i class="piksell-color small-text">เบอร์โทร:0857856130</i>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="paddd">
				<div class="team style2 box-shadow">
					<div class="team-header">
						<img src='<?php echo base_url("asset/images/personnel/P.jpg") ?>' class="picture-personnel box-shadow" height="250px">
					</div>
					<div class="team-date">	
						<p><font size='3'>>ชื่อผลงานผลงาน  : กังหันลม</font></p>
						<i class="piksell-color small-text">ชื่อนักวิจัย : นางสาวนิตยา&nbsp;ถาวัน</font></i><br>
						<i class="piksell-color small-text">รหัสสนธิบัตร:กห2575</i><br>
						<i class="piksell-color small-text">ราคา:ขึ้นอยู่กับการเจรจา</i><br>
						<!--<p>Lorem ipsum ctetur dolor sit amet, conse ctetur tempor elit.</p>-->
						<i class="piksell-color small-text">รายละเอียด:เป็นกังหนลม</i><br>
						<i class="piksell-color small-text">เบอร์โทร:0857856130</i>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


