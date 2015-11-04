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
<<<<<<< HEAD
			<div class="row">
				<div class="col-md-12">
				<table >
						<tr>
						<td rowspan="2" width="30%">
					<img src='<?php echo base_url("asset/images/banner1.png") ?>' width='100%' height='20%'>
						</td>	
						<td width="55%" >
								หัวข้อข่าว
							</td>
							<td>
								วันที่ : 16/08/58
							</td>
						</tr>
						<tr>
							<td  colspan="2" >
								<p>รายละเอียด</p>
							</td>
						</tr>
					</table>
=======

			<?php 
			foreach ($newlist as $rownew){
				?>

				<div class="row">
					<div class="col-md-4">
						<div class="col-md-4 " style="heigth:200px;">
							<?php echo '<img src="'.base_url().$rownew['up_name'].'" title="GETTINGCAMP" " style="height:200px;">'; ?>
						</div>
					</div>

					<div class="col-md-8" > 
						<h5><?php echo anchor("index/news/view/".$rownew['ne_id'],$rownew['ne_sub'],"target='_blank'");?></h5>
						<?=iconv_substr($rownew['ne_text'],0,350, "UTF-8")."...";?>
						<div class="row">
							<div class="col-md-12">
								<span><i class="fa fa-calendar"></i> <?=date("d - m - Y",strtotime($rownew['ne_date_cre']));?> <i class="fa fa-eye"></i> <?=$rownew['ne_view']?> </span>
							</div>
						</div>	
					</div>
>>>>>>> Science-Park
				</div>
				<?php  } ?>

				<div class="row">
					<div class="paginationnext" >

						<div class="col-md-12" >
							<?php echo $page ?>
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
