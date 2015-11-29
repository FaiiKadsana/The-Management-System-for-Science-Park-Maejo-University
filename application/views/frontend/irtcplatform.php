<!-- Section -->
<div id="section_header">
	<h2>IRCT Platform</h2>
</div>

<div class="row">
	<div class="col-md-offset-3  col-sm-9">
		<center>
			<form id="" method="post" class="form-horizontal" action="">
				<table >
					<tr>
						<td width="15%"><input type="text" class="form-control" placeholder="กรอกเลขแบบฟอร์ม" name="research"></td>
						<td width="15%"><button class="btn btn-success" type="button" ><i class="fa fa-search"></i> ค้นหา</button></td>
						<td width="15%"><a href="<?php echo base_url("frontend/frirtcplatform")?>"><button class="btn btn-success" type="button" >กรอกแบบฟอร์ม</button></a></td>
						<td><a target ="_blank" href="<?php echo base_url ("asset/form download/IRTC Form.pdf")?>"><button class="btn btn-success" type="button" >ดาว์นโหลดแบบฟอร์ม</button></a></td>
					</tr>
				</table>
			</form>
		</center>

	</div>
</div>
<!-- End  row-->
<br><br>

<div class="row">
	<div class="col-md-offset-1  col-sm-10">
		<div class="panel panel-default">
			<div class="panel-heading">IRCT Platform</div>
			<div class="panel-body">
				<table class="table table-striped">
					<?php if (empty($keyword)) { 

					echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
					echo "<script>alert('กรุณากรอกเลขที่แบบฟอร์มในช่องค้นหาคะ');</script>";?>    

					<?php }else{ ?>

					<?php foreach($search as $row){?>
					<tr class="bg-success">
						<th width="5%">#</th>
						<th width="25%">เลขที่แบบฟอร์ม</th>
						<th width="25%">ชื่อบริษัท</th>
						<th width="25%">ชื่อโครงการ</th> 
						<th width="30%">สถานะ</th>     
						<th></th>
					</tr>   

					<!-- Show &Join table -->

						<tr class="bg-success">
						<td ><?php echo $row->Co_id; ?></td>
						<td ><?php echo $row->C_name; ?></td>
						<td ><?php echo $row->Co_name_pro; ?></td>     
						<td ><?php echo $row->Co_date; ?></td>
						<td ><?php echo $row->Co_status; ?></td>
						<td><a target ="_blank" href="<?php echo base_url('frontend/irtcplatformreport/index/'.$row->Co_id)?>"><button type="button" class="btn btn-info" ><i class="fa fa-print"></i> ปริ้นท์</button></a></td> 
						
					</tr>   
					<?php } }?>     
				</table>     
				<!-- End -->


				<!-- /.row -->
			</div>

		</div>
	</div>
</div>
       <!-- End  row-->