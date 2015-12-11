 <!-- Section -->
 <div id="section_header">
 	<h2>TBI Platform</h2>
 </div>

 <div class="row">
 	<div class="col-sm-12">
 		<div class="col-sm-offset-4 col-sm-5">
 			<center>
 				<form enctype="multipart/form-data" id="" method="post" class="form-horizontal" action="<?php $action; ?>">
 					<table >
 						<tr>
 							<td width="15%"><a href="<?php echo base_url("frontend/frtbiplatform")?>"><button class="btn btn-success" type="button" >กรอกแบบฟอร์ม</button></a></td>
 							<td><a target ="_blank" href="<?php echo base_url ("asset/form download/บ่มเพาะ TBI Form.pdf")?>"><button class="btn btn-success" type="button" >ดาวน์โหลดแบบฟอร์ม</button></a></td>
 						</tr>
 					</table>
 				</form>
 			</center>

 		</div>
 		<div class="col-sm-3">
 			<form enctype="multipart/form-data" id="" method="post" class="form-horizontal" action="<?php $action; ?>">
 				<table>
 					<tr>
 						<td width="15%"><input type="text" class="form-control" placeholder="กรอกเลขแบบฟอร์ม" name="keyword"></td>
 						<td width="15%"><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
 					</tr>
 				</table>
 			</form>
 		</div>
 	</div>
 </div> 


 <!-- End  row-->
 <br><br>

 <div class="row">
 	<div class="col-md-offset-1  col-sm-10">
 		<div class="panel panel-default">
 			<div class="panel-heading">TBI Platform</div>
 			<div class="panel-body">
 				<table class="table table-striped">
 					<?php if (empty($keyword)) { 

 						echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
 						echo "<script>alert('กรุณากรอกเลขที่แบบฟอร์มในช่องค้นหาคะ');</script>";

 						?> 
 						<?php }else{ ?>

 						<?php foreach($search as $row){?>
 						<tr class="bg-success">
 							<th width="15%">เลขที่แบบฟอร์ม</th>
 							<th width="25%">ชื่อผู้เสนอโครงการ</th>
 							<th width="25%">วันที่เสนอโครงการ</th>
 							<th width="30%">สถานะ</th>     
 							<th></th>
 						</tr>   
 						<tr class="bg-success">
 							<td ><?php echo $row->Tbi_id3; ?></td>
 							<td ><?php echo $row->Tbi_title; ?><?php echo $row->Tbi_name1;?>&nbsp;<?php echo $row->Tbi_lastname ; ?></td>
 							<td ><?php echo $row->Tbi_date; ?></td>   
 							<td ><?php echo $row->Tbi_status; ?></td>
 							<td><a target ="_blank" href="<?php echo base_url('frontend/tbiplatformreport/index/'.$row->Tbi_id3)?>")?><button type="button" class="btn btn-info" ><i class="fa fa-print"></i> ปริ้นท์</button></a></td> 	
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