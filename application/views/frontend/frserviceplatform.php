 <?php $random=random_string('alnum',6); ?>

 <!-- Section -->
 <div id="section_header">
 	<h2>Service Platform</h2>
 </div>

 <form method="post" action="<?php echo $action; ?>" enctype="multipart/form-data">
 	<div class="container">

 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-offset-1 col-lg-2 col-md-2 col-sm-2"><img src='<?php echo base_url("asset/images/N.jpg") ?>' width='30%' height='10%'></div>
 			<div class="col-lg-offset-1 col-lg-6 col-md-6 col-sm-6"><p>แบบฟอร์มกรอกข้อมูลผู้ประกอบการ/SMEs/วิสาหกิจชุมชน</p><p>ที่มารับบริการอุทยานวิทยาศาสตร์ภูมิภาค เครือข่ายภาคเหนือ</p></div>
 			<div class=" col-lg-2 col-md-2 col-sm-2"><img src='<?php echo base_url("asset/images/banner1.png") ?>' width='40%' height='30%'></div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-offset-9 col-lg-3col-md-offset-9 col-md-3 col-sm-offset-9 col-sm-3 ">
 				<p> สถาบันบ่มเพาะวิสาหกิจ มหาวิทยาลัย </p>
 				<p> วันที่มารับบริการ <input type="date"  name="S_date" ><b style="color:red;"> *</b></p>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<p><b><u>ข้อมูลส่วนตัว</u></b></p>
 			</div>
 		</div><br>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-1 col-md-1 col-sm-1">
 				<select name="P_title"> 
 					<option value="นาย">นาย</option>
 					<option value="นาง">นาง</option>
 					<option value="นางสาว">นางสาว</option>
 				</select>			
 			</div>
 			<div class="col-lg-2  col-md-2  col-sm-2 ">
 				ชื่อ:
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3">
 				<input type="text" size="20" name="P_name" ><b style="color:red;"> *</b>		
 			</div>
 			<div class="col-lg-2 col-md-2 col-sm-2">
 				นามสกุล:
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3">
 				<input type="text" size="20" name="P_lastname" ><b style="color:red;"> *</b>	
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1  col-lg-2 col-md-2 col-sm-2">
 				เลขที่บัตรประชาชน:
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3">
 				<input type="text" size="20" name="P_id_card" ><b style="color:red;"> *</b>
 			</div>
 			<div class="col-lg-2 col-md-2 col-sm-2">
 				ตำแหน่ง:
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3">
 				 <input type="text" size="20" name="P_position" ><b style="color:red;"> *</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 		<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1  col-lg-2 col-md-2 col-sm-2">
 				เบอร์โทรติดต่อ:
 			</div>
 			<div class=" col-lg-3 col-md-3 col-sm-3">
 				 <input type="tel" size="20" name="P_phone" ><b style="color:red;"> *</b>
 			</div>
 			<div class="col-lg-2 col-md-2 col-sm-2">
 				E-mail: 
 			</div>
 			<div class="col-lg-4 col-md-4 col-sm-4">
 				<input type="email" size="20" name="P_mail" ><b style="color:red;"> *</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<p><b><u>ข้อมูลทางธุรกิจ</u></b></p>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 		<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1  col-lg-2 col-md-2 col-sm-2">
 				ชื่อกิจการ:
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3">
 				 <input type="text" size="20" name="C_name"><b style="color:red;"> *</b>
 			</div>
 			<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">
 				<textarea name="C_address" cols="50" rows="3" placeholder="ที่อยู่"></textarea>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-4 col-md-4 col-sm-4">
 				โทรศัพท์: <input type="text" size="20" name="C_phone" ><b style="color:red;"> *</b>
 			</div>
 			<div class="col-lg-4 col-md-4 col-sm-4">
 				โทรสาร: <input type="text" size="20" name="C_fax" >
 			</div>
 			<div class="col-lg-4 col-md-4 col-sm-4">
 				Website: <input type="text" size="30" name="C_website" >
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>เลขที่ทะเบียนพาณิชย์: </b>&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_no_com" value="ไม่มี"> ไม่มี  
 				&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_no_com" value="มี"> มี 
 				&nbsp;&nbsp;<input type="text" size="30" name="C_no_com_etc" placeholder="กรุณากรอก" ><b style="color:red;"> *</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="2" value="เจ้าของกิจการ(บุคคลธรรมดา)"> เจ้าของกิจการ(บุคคลธรรมดา)  
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_company_type" value="ห้างหุ้นส่วนสามัญ"> ห้างหุ้นส่วนสามัญ
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_company_type" value="ห้างหุ้นส่วนจำกัด"> ห้างหุ่นส่วนจำกัด<br>
 				<input type="radio" name="2" value="เบริษัทจำกัด"> บริษัทจำกัด  
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_company_type" value="วิสาหกิจชุมชน"> วิสาหกิจชุมชน
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_company_type" value="อื่นๆ"> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="C_company_type_etc" placeholder="ระบุ" >
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>ลักษณะการประกอบการ (เลือกข้อใดข้อหนึ่ง)</b><b style="color:red;"> *</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="3" value="การผลิต"> การผลิต 
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" value="การค้า(ปลีก-ส่ง)"> การค้า(ปลีก-ส่ง)
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" value="บริการ"> บริการ
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_undertaking" value="อื่นๆ"> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="C_undertaking_etc" placeholder="ระบุ" >
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>สาขาอุตสาหกรรมที่ทำอยู่ (เลือกข้อใดข้อหนึ่ง)</b><b style="color:red;"> *</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="C_industry_type" value="อาหารและอาหารสัตว์"> อาหารและอาหารสัตว์
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="สิ่งทอและเครื่องนุ่งห่ม"> สิ่งทอและเครื่องนุ่งห่ม
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="รองเท้าและเครื่องหนัง"> รองเท้าและเครื่องหนัง
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" value="ผลิตภัณฑ์จากไม้และเครื่องเรือน"> ผลิตภัณฑ์จากไม้และเครื่องเรือน<br>
 				<input type="radio" name="C_industry_type" value="ยาและเคมีภัณฑ์"> ยาและเคมีภัณฑ์
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="ยางพาราและผลิตภัณฑ์"> ยางพาราและผลิตภัณฑ์
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก"> บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" value="เซรามิกส์และแก้ว"> เซรามิกส์และแก้ว<br>
 				<input type="radio" name="C_industry_type" value="เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์"> เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="ชิ้นส่วนและยานยนต์"> ชิ้นส่วนและยานยนต์
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="อัญมณีและเครื่องประดับ"> อัญมณีและเครื่องประดับ
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" value="เหล็กและโลหะการ"> เหล็กและโลหะการ<br>
 				<input type="radio" name="C_industry_type" value="เครื่องจักรกล"> เครื่องจักรกล
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="ท่องเที่ยว"> ท่องเที่ยว
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="บริการด้านสุขภาพ"> บริการด้านสุขภาพ
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" value="อื่นๆ"> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="C_industry_type_etc" placeholder="ระบุ" >
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				เงินจดทะเบียน: <input type="text" size="20" name="C_investment" >&nbsp;&nbsp;บาท(ถ้ามี)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนปีที่ประกอบการ: <input type="text" size="20" name="C_no_year" >&nbsp;&nbsp;ปี
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				จำนวนลูกจ้างทั้งหมด: <input type="text" size="15" name="S_no_emp_total" >&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;แบ่งเป็นลูกค้าปรจำ <input type="text" size="15" name="S_no_emp_reg" >&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;ลูกจ้างชั่วคราว <input type="text" size="15" name="S_no_emp_tem" >&nbsp;&nbsp;อัตรา
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				ผลิตภัณฑ์หลัก:&nbsp;&nbsp;1.) <input type="text" size="20" name="S_main_pro1" >&nbsp;&nbsp;2.) <input type="text" size="20" name="S_main_pro2" >&nbsp;&nbsp;3.) <input type="text" size="20" name="S_main_pro3" >
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<table width="100%" border="1">
 					<tr>
 						<td colspan="3" align="center">
 							<p>อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบนจะเป็นผู้เก็บรักษาความลับของผู้มารับบริการ โดยข้อมุลทั้งหมดจะเปิดเผยให้เฉพาะกับเจ้าหน้าที่</p>
 							<p>ที่เป็นหน่วยร่วมด้านการปรึกษาแนะนำเท่านั้น  ซึ่งจุดประสงค์ของการบันทึกข้อมูลก็เพื่อให้บริการจะเป็นไปด้วยความรวดเร็วและหาแนวทางแก้ไขได้อย่างถูกต้อง</p>
 						</td>
 					</tr>
 					<tr>
 						<td align="center"><br><br>
 							ลงชื่อ <!--<input type="text" size="25" name="S_provider" ><b style="color:red;"> *</b>--><br>
 							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<input type="text" size="25" name="S_provider1" >)<br>
 							<b>ผู้ขอรับบริการ</b>
 						</td>
 						<td align="center" colspan="2">
 							<input type="radio" name="S_comment" value="ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล"> ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล
 							<input type="radio" name="S_comment" value="ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล"> ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล
 						</td>
 					</tr>
 				</table>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>ยอดขาย</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="S_circulation" value="ขยายตลาด"> ขยายตลาด
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" value="พัฒนาผลิตภัณฑ์"> พัฒนาผลิตภัณฑ์
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" value="แบรนด์"> แบรนด์
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_circulation" value="สำรวจความต้องการของตลาด"> สำรวจความต้องการของตลาด<br>
 				<input type="radio" name="6" value="จัดทำแผนส่งเสริมการตลาด"> จัดทำแผนส่งเสริมการตลาด
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" value="หาพันธมิตรทางธุรกิจ"> หาพันธมิตรทางธุรกิจ
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" value="พัฒนาธุรกิจใหม่"> พัฒนาธุรกิจใหม่
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_circulation" value="พัฒนาตลาดต่างประเทศ"> พัฒนาตลาดต่างประเทศ
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>ความสามารถในการทำกำไร</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="S_profit" value="การเพิ่มประสิทธิภาพ"> การเพิ่มประสิทธิภาพ
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_profit" value="การลดต้นทุน"> การลดต้นทุน
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_profit" value="การจัดซื้อ จัดหา"> การจัดซื้อ จัดหา
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>เงินทุน</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="S_capital" value="ระดมทุน"> ระดมทุน
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_capital" value="การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน"> การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>การจัดการ</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="S_management" value="การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ"> การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_management" value="บริหารจัดการบัญชี"> บริหารจัดการบัญชี
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_management" value="กฎหมาย"> กฎหมาย<br>
 				<input type="radio" name="S_management" value="การใช้เทคโนโลยีสารสนเทศ(IT)"> การใช้เทคโนโลยีสารสนเทศ(IT)
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_management" value="การเริ่มต้นกิจการ/การเลิกกิจการ"> การเริ่มต้นกิจการ/การเลิกกิจการ
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_management" value="การสืบทอดธุรกิจ"> การสืบทอดธุรกิจ<br>
 				<input type="radio" name="S_management" value="การปฎิรูปการบริหารจัดการ"> การปฎิรูปการบริหารจัดการ
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>การปฏิบัติงาน</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="S_work" value="เพิ่มประสิทธิภาพการผลิต"> เพิ่มประสิทธิภาพการผลิต
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_work" value="คุณภาพ"> คุณภาพ
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_work" value="มาตรฐาน(standard)"> มาตรฐาน(standard)
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>ทรัพยากรบุคคล</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="S_humanresource" value="การบริหารจัดการทรัพยากรบุคคล"> การบริหารจัดการทรัพยากรบุคคล
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_humanresource" value="เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)"> เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)<br>
 				<input type="radio" name="S_humanresource" value="สัมมนาและฝึกอบรม(จัดนอกองค์กร)"> สัมมนาและฝึกอบรม(จัดนอกองค์กร)
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_humanresource" value="ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก"> ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>เทคโนโลยี</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<input type="radio" name="S_technology" value="พัฒนาเทคโนโลยี"> พัฒนาเทคโนโลยี
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_technology" value="ทรัพย์สินทางปัญญา"> ทรัพย์สินทางปัญญา
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_technology" value="การประหยัดพลังงาน"> การประหยัดพลังงาน
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_technology" value="มาตรการด้านสิ่งแวดล้อม"> มาตรการด้านสิ่งแวดล้อม<br>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				อื่นๆ: <input type="text" size="50" name="S_deteil_etc" placeholder="โปรดระบุ" >
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b>เรื่องที่มาขอคำปรึกษาแนะนำ (สำหรับผู้มารับบริการ)</b><b style="color:red;"> *</b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<textarea name="S_detail" cols="80" rows="3" ></textarea>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<br>
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-3 col-md-3 col-sm-3">
 				<b style="color:red;"> *</b>   หนังสือรับรองการจดทะเบียนนิติบุคคล: <input type="file" name="F_1">
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3">
 				<b style="color:red;"> *</b>   สำเนาบัตรประชาชนของผู้มีสิทธิลงนาม: <input type="file" name="F_2">
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3">
 				หนังสือมอบอำนาจ(ถ้ามี): <input type="file" name="F_3">
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3">
 				<b style="color:red;"> *</b>   สำเนาบัตรประชาชน/สำเนาบัตรข้าราชการของนักวิจัย: <input type="file" name="F_4">
 			</div>
 		</div>
 		<!-- Ent row -->
 		<br>	
 		<!-- start row -->
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12">
 				<b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม: <label type="" size="20" name="S_id"><?php echo  $random; ?><input type="hidden" name="random" value="<?php echo  $random; ?>"></b>
 			</div>
 		</div>
 		<!-- Ent row -->
 		<br>
 		<form method="post" action="frserviceplatform.php" >
 			<center>
 				<?php
 				require_once('recaptchalib.php');
 				$publickey = "6Lc_hf0SAAAAAEcBdl4ILVSDYc4dbe5wfxlzyY13"; 
 				echo recaptcha_get_html($publickey);
 				?>
 				<br>
 				<div class="form-group">
 					<br>

 					<button  type="submit" class="btn btn-primary " ><strong>ตกลง</strong></button> 
 					<button  type="reset" class="btn btn-warning " ><strong>ยกเลิก</strong></button>   
 				</div>
 			</center>
 		</form>
 	</div>
 </form>

 <br><br>
