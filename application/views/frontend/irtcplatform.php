 <!-- Section -->
 <div id="section_header">
 	<h2>IRTC Platform</h2>
 </div>

    <div class="row">
    <div class="col-sm-offset-1 col-sm-11">
        <table>
          <tr>
            <td>
              <p><b style="color:red;">การพัฒนาขีดความสามารถทางเทคโนโลยีและวิจัยของภาคเอกชนในพื้นที่ (Industrial Research and Technology Capacity Development Program Platform : IRTC Platform) </b></p><br>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คือ การให้บริการอย่างครบวงจรแก่ผู้ประกอบการและเอกชน เพื่อทำหน้าที่ขยายการให้ความช่วยเหลือผู้ประกอบการภาคอุตสาหกรรมการผลิตทุกประเภท ด้วยการส่งเสริมการนำ</p>
              <p>เทคโนโลยีเข้าไปทำให้เกิดนวัตกรรมในการพัฒนาเทคโนโลยีการผลิต การจับคู่นวัตกรรมในรูปแบบของการใช้ผู้เชี่ยวชาญด้านเทคนิคเข้าไปเป็นที่ปรึกษาในการแก้ไขปัญหาทางเทคนิคปรับปรุง</p>
              <p>ประสิทธิภาพกระบวนการผลิต พัฒนาคุณภาพสินค้าให้ได้มาตรฐานสากลและพัฒนาผลิตภัณฑ์ใหม่ๆ รวมถึงการฝึกอบรม การเสาะหาเทคโนโลยีจากแหล่งต่างๆเพื่อให้สามารถเข้าสู่การแข่งขัน</p> 
              <p>ในตลาดการค้าสากลตลอดจนการเข้าถึงการให้บริการทางด้านทรัพย์สินทางปัญญา โดยจะครอบคลุมอุตสาหกรรมเป้าหมาย ได้แก่</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. อุตสาหกรรมในโซ่คุณค่าของ พืช ผัก ผลไม้ สมุนไพรเมืองเหนือ และข้าว (ครอบคลุมตั้งแต่เกษตรต้นน้ำด้านพันธุ์พืช ไปจนถึงอุตสาหกรรมเกษตรแปรรูปผลิตภัณฑ์ และกระบวนการ</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แปรรูปอาหาร)</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. อุตสาหกรรม IT Software และ Digital content (เชื่อมโยงอุตสาหกรรมการผลิตหัตถอุตสาหกรรมการท่องเที่ยว และอุตสาหกรรมการออกแบบละสร้างสรรค์)</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. อุตสาหกรรมด้านการแพทย์ และเทคโนโลยีชีวภาพ</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. อุตสาหกรรมด้านเทคโนโลยีพลังงานทดแทน สิ่งแวดล้อม และวัสดุด้านพลังงาน</p>
            </td>
          </tr>

        </table>

      </div>
    </div>
    <br><br><br>
 <div class="row">
 	<div class="col-sm-12">
 		<div class="col-sm-offset-4 col-sm-5">
 			<center>
 				<form enctype="multipart/form-data" id="" method="post" class="form-horizontal" action="<?php $action; ?>">
 					<table >
 						<tr>

 							<td width="15%"><a href="<?php echo base_url("frontend/frirtcplatform")?>"><button class="btn btn-success" type="button" >กรอกแบบฟอร์ม</button></a></td>
 							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target ="_blank" href="<?php echo base_url ("asset/form download/IRTC Form.pdf")?>"><button class="btn btn-success" type="button" >ดาวน์โหลดแบบฟอร์ม</button></a></td>
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
 			<div class="panel-heading">IRCT Platform</div>
 			<div class="panel-body">
 				<table class="table table-striped">
 					<?php if (empty($keyword)) { 

 						//echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
 						//echo "<script>alert('กรุณากรอกเลขที่แบบฟอร์มในช่องค้นหาคะ');</script>";?>    

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

 						<!-- Show &Join table -->


 						<tr class="bg-success">

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