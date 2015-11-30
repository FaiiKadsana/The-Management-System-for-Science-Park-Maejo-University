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

					<?php foreach ($news as $rownew){ ?>

						<div class="row">
							<div class="col-md-4">
								<div class="col-md-4 ">
									  <?php echo '<img src= "'.base_url().'asset/img/News/'.$rownew->Ne_picture.'" style="height:100px;" >'; ?>
								</div>
							</div>
							<div class="col-md-8" > 
								<br>
								<h4><?php echo $rownew->Ne_sub;?></h4>
								<h5><?php echo $rownew->Ne_text;?></h5>
								<div class="row"> 
									<div class="col-md-12">
										<i class="fa fa-calendar"></i> <?php echo $rownew->Ne_date_up;?>
									</div>
								</div>
								<br><br>	
							</div>

						</div>

						<?php  } ?>

						<div class="row">
							<center>
								<div class="paginationnext" >
									<div class="col-md-12" >
										<ul class="paginationnext" >
												<?php echo $page; ?>	
										<ul>
									</div>
								</div>  
							</center>
						</div>
						
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

