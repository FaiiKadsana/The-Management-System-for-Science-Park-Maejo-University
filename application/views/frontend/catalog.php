
<!-- Section -->
<div id="section_header">
	<h2>ผลงานวิจัยพร้อมใช้ประโยชน์</h2>
</div>
<div class="container">
	<!-- start row -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 40px;">

			<?php  foreach ($catalog as $rowcatalog) { ?>

			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="paddd">
					<div class="team style2 box-shadow">
						<div class="team-header">
							<?php echo '<img src= "'.base_url().'asset/img/catalog/'.$rowcatalog->Cl_picture.'" style="height:200px;" style="width:40px;">'; ?>
							<div class="team-date">
								<p><font size='3'><b>ชื่อผลงาน  : <a href="<?php echo base_url('frontend/catalog1/index/'.$rowcatalog->Cl_id)?>"><?=iconv_substr($rowcatalog->Cl_research,0,20, "UTF-8")."...";?></a></b></font></p>
								<i class="piksell-color small-text">ชื่อนักวิจัย : <?php echo $rowcatalog->Cl_researchers;?></font></i><br>
								<i class="piksell-color small-text">ราคา : <?php echo $rowcatalog->Cl_price;?></i><br>
								<!--<p>Lorem ipsum ctetur dolor sit amet, conse ctetur tempor elit.</p>-->
								<i class="piksell-color small-text">เบอร์โทร : <?php echo $rowcatalog->Cl_contact;?></i>
							</div>
						</div>
					</div>
				</div>
			</div>


			<?php } ?>
		</div>
	</div>
	<!-- Ent row -->

	<!-- start row -->
	<div class="row">
		<center>
			<div class="paginationnext" > 
				<div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 40px;">
					<ul class="paginationnext" >
						<?php echo $page; ?>
						<ul>
						</div>
					</div>  
				</center>
			</div>
			<!-- Ent row -->


		</div>