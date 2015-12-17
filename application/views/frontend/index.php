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
						<br>
						<div class="col-md-4">
							<div class="col-md-4 ">
								<?php echo '<img src= "'.base_url().'asset/img/News/'.$rownew->Ne_picture.'" style="height:100px;" >'; ?>
							</div>
						</div>
						<div class="col-md-8" > 
							
							<h4><b><a href="<?php echo base_url('frontend/viewnews/index/'.$rownew->Ne_id)?>"> <?php echo $rownew->Ne_sub;?></a></b></h4>
							<?=iconv_substr($rownew->Ne_text,0,350, "UTF-8")."...";?>
							<br><br>
							<div class="row"> 
								<div class="col-md-12">
									<span><h5><i class="fa fa-calendar"></i> <?=date("d - m - Y",strtotime($rownew->Ne_date_up));?></h5> </span>
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
									<ul>
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
						<p class='title-header org'>ปฎิทิน</p>		
					</center><br>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2><strong>Calendar</strong></h2>
								</div><br>
								<div class="panel-body">
									<center>
										<embed type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" name="flashplayer" src="http://i251.photobucket.com/albums/gg294/wafpaf/calendars/swf/flowers1.swf" quality="high" width="500" height="300" swliveconnect="true" allowscriptaccess="samedomain" /></embed><br /> <a href="http://www.zalim-code.com/day.htm" target="new"></a>
										
										</center>
									</div>
								</div> 
							</div>
						</div>	

					</div>
				</div>
			</div>
		</div>

