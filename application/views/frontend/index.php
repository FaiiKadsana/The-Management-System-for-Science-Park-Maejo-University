<!-- Welcome Section -->
<div id="section_header">
	<h2>ยินดีต้อนรับ</h2>
</div>
<!-- ข่าวสาร -->

<div class='row'>
	<div class= 'col-md-12'>

		<div class= 'col-md-7'>	
			<center>
				<p class='title-header org'>ข่าวประชาสัมพันธ์</p>			
			</center><br>

			<div class="row">
				<div class="col-md-12">

					<?php 
					foreach ($news as $rownew){

						?>

						<div class="row">
							<div class="col-md-4">
								<div class="col-md-4 " style="heigth:100px;" style="width:40px;">
									<?php echo '<img src= "'.base_url().$rownew->up_name.'" style="height:130px;" style="width:40px;">'; ?>
								</div>
							</div>
							<div class="col-md-8" > 
								<br>
								<h4><?php echo $rownew->ne_sub;?></h4>
								<h5><?php echo $rownew->ne_text;?></h5>
								<div class="row"> 
									<div class="col-md-12">
										<i class="fa fa-calendar"></i> <?php echo $rownew->ne_date_cre;?>
									</div>
								</div>
								<br><br>	
							</div>

						</div>

						<?php  } ?>

						<div class="row">
<<<<<<< HEAD
=======
							<center>
							<div class="paginationnext" >
>>>>>>> 2a0f9e41ca5281298da307425fd05c9e68fdd1e5

							<div class="col-md-12" >
								<ul class="paginationnext" >

									<li>
										<?php echo $page; ?>
									</li>
									<ul>
								</div>
<<<<<<< HEAD
							</div>  
=======
							</div>
							</center>
						</div>  
>>>>>>> 2a0f9e41ca5281298da307425fd05c9e68fdd1e5

						</div>	
					</div>	

				</div>	

				<div class= 'col-md-5'>	
					<center>
						<p class='title-header org'>ปฎิทินการนัดหมาย</p>		
					</center><br>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2><strong>Calendar</strong></h2>
								</div><br>
								<div class="panel-body">
									<!-- Calenda -->
									<?php echo $calendar; ?>
								</div>
							</div> 
						</div>
					</div>	

				</div>
			</div>
		</div>
	</div>

