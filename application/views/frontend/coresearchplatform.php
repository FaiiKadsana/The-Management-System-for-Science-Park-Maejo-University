 <!-- Section -->
 <div id="section_header">
 	<h2>Co-Research Platform</h2>
 </div>

 <div class="row">
 			<div class="col-sm-offset-1 col-sm-11">
 					<table>
 						<tr>
 							<td>
 								<p><b style="color:red;"> การวิจัยร่วมกับภาคเอกชน (Co-Research Platform)</b></p>
 								<p>คือ การสร้างงานวิจัยที่เป็นความร่วมมือระหว่างภาคเอกชนและนักวิจัยในมหาวิทยาลัย โดยภาคเอกชนจะต้องมีส่วนร่วมในการวิจัยทั้งในด้านการร่วมทุนและการดำเนินงานวิจัย โดยคาดหวังว่าผลการวิจัยนั้นนอกจากจะสร้างมูลค่าและ</p>
 								<p>พัฒนาเทคโนโลยีการผลิต เพิ่มความสามารถในการแข่งขันของธุรกิจแล้ว ยังสามารถส่งเสริมศักยภาพในการทำงานวิจัยและพัฒนาของภาคเอกชนรวมถึงการพัฒนาหน่วยงานวิจัยและบุคลากรทางด้านวิจัยของภาคเอกชน </p>
 								<p>และมุ่งเน้นการให้บริการด้วนการส่งเสริมการนำ เทคโนโลยีเข้าไปทำให้เกิดนวัตกรรมในการพัฒนาเทคโนโลยีการผลิต </p>
 								<p>การจับคู่นวัตกรรมในรูปแบบของการใช้ผู้เชี่ยวชาญด้านเทคนิคเข้าไปเป็นที่ปรึกษาในการแก้ไขปัญหา ปรับปรุงประสิทธิภาพกระบวนการผลิต พัฒนาคุณภาพสินค้าให้ได้</p>
 								<p>มาตรฐานสากลและพัฒนาผลิตภัณฑ์ใหม่ ๆ รวมถึงการฝึกอบรม การเสาะหาเทคโนโลยีจากแหล่งต่าง ๆ เพื่อให้ผู้ประกอบการสามารถเข้าสู่การแข่งขันในตลาดการค้าสากลได้ ตลอดจนการเข้าถึงการให้บริการทางด้านทรัพย์สินทางปัญญาด้วย </p>

 							</td>
 						</tr>

 					</table>

 				</div>
 			</div>
 			<br><br><br><br>
 			
 <div class="row">
 	<div class="col-sm-12">
 		<div class="col-sm-offset-4 col-sm-5">
 			<center>
 				<form enctype="multipart/form-data" id="" method="post" class="form-horizontal" action="<?php $action; ?>">
 					<table >
 						<tr>

 							<td width="15%"><a href="<?php echo base_url("frontend/frcoresearchplatform")?>"><button class="btn btn-success" type="button" >กรอกแบบฟอร์ม</button></a></td>
 							<td><a target ="_blank" href="<?php echo base_url ("asset/form download/Co-research From.pdf")?>"><button class="btn btn-success" type="button" >ดาวน์โหลดแบบฟอร์ม</button></a></td>
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
 			<div class="panel-heading">Co-Research Platform</div>
 			<div class="panel-body">
 				<table class="table table-striped">

 					<?php if (empty($keyword)) { 

 						echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
 						echo "<script>alert('กรุณากรอกเลขที่แบบฟอร์มในช่องค้นหาคะ');</script>";?>    

 						<?php }else{ ?>

 						<?php foreach($search as $row){?>
 						<tr class="bg-success">
 							<th width="15%">เลขที่แบบฟอร์ม</th>
 							<th width="20%">ชื่อบริษัท</th>
 							<th width="20%">ชื่อโครงการ</th>
 							<th width="20%">วันที่ยืนโครงการ</th>  
 							<th width="20%">สถานะ</th>     
 							<th></th>
 						</tr>   
 						<tr class="bg-success">
 							<td ><?php echo $row->Co_id; ?></td>
 							<td ><?php echo $row->C_name; ?></td>
 							<td ><?php echo $row->Co_name_pro; ?></td>     
 							<td ><?php echo $row->Co_date; ?></td>
 							<td ><?php echo $row->Co_status; ?></td>
 							<td><a target ="_blank" href="<?php echo base_url('frontend/coresearchplatformreport/index/'.$row->Co_id)?>"><button type="button" class="btn btn-info" ><i class="fa fa-print"></i> ปริ้นท์</button></a></td> 
 							
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