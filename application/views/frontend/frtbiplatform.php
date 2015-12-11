 <?php $random=random_string('alnum',6); ?>

 <!-- Section -->
 <div id="section_header">
 	<h2>TBI Platform</h2>
 </div>

 <form method="post" action="<?php echo $action; ?>" enctype="multipart/form-data">

 	<div class="row fromfont">
 		<div class="col-sm-12">

		
 			
 			<div class="row">
 				<div class="col-sm-12 ">
 					<center>
 						<table  width="70%" >
 							<tr>
 								<td width="15%" align="center"><img src='<?php echo base_url("asset/images/mju_logo.jpg") ?>' width='70%' ></td>
 								<td width="60%" align="center">
 									<p>โครงการการบ่มเพาะผู้ประกอบการเทคโนโลยี  มหาวิทยาลัยแม่โจ้</p>
 									<p>ภายใต้โครงการอุทยานวิทยาศาสตร์  มหาวิทยาลัยแม่โจ้</p>
 								</td>
 								<td width="25%" align="center"><img src='<?php echo base_url("asset/images/N.jpg") ?>' width='70%' height='20%'></td>
 							</tr>
 						</table>
 					</center>
 					<br>

 					<center>
 						<table width="70%" >
 							
 							<tr>
 								<td colspan="2" align="right" width="60%">
 									<p>ใบสมัครรับบริการบ่มเพาะผู้ประกอบการเทคโนโลยี</p>
 								</td>
 								<td >

 									<table border="1" width="30%" align="right">
 										<tr>
 											<td width="25%" align="center">
 												<br>
 												<p>ติดรูปถ่ายหน้าตรง</p>
 												<p>ขนาด1 นิ้ว<b style="color:red;"> *</b></p>
 												<br>
 											</td>
 										</tr>
 									</table>
 								</td>
 							</tr>

 							<tr>
 								<td align="left">
 								</td>
 								<td  colspan="2"  align="right"><input type="file" name="Tbi_picture" ></td>
 							</tr>
 							<tr>
 								<td colspan="2" align="left">
 									วันที่:<input type="date" name="Tbi_date"  ><b style="color:red;"> *</b>
 								</td>
 								<td align="right">เลขที่: <input type="text" name="Tbi_id4" size="20" ><b style="color:red;"> *</b></td>
 							</tr>
 							<tr>
 								<td colspan="3" align="left">
 									<u><b><p>ส่วนที่ 1&nbsp;&nbsp;&nbsp;&nbsp;	ข้อมูลส่วนบุคคล</p></b></u>
 								</td>
 							</tr>
 							<tr>
 								<td colspan="3" align="left">
 									&nbsp;&nbsp;&nbsp;&nbsp;1.1 <select name="Tbi_title"> 
 									<option value="นาย">นาย</option>
 									<option value="นาง">นาง</option>
 									<option value="นางสาว">นางสาว</option>
 								</select> <b style="color:red;"> *</b>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ: <input type="text" size="30" name="Tbi_name1" ><b style="color:red;"> *</b>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นามสกุล: <input type="text" size="30" name="Tbi_lastname" ><b style="color:red;"> *</b>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;1.2
 								เลขประจำตัวประชาชน: <input type="text" size="50" name="Tbi_code" ><b style="color:red;"> *</b>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;1.3
 								เกิดวันที่: <input type="date"  name="Tbi_birthday" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบันอายุ: <input type="text" size="10" name="Tbi_age" > ปี
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;1.4
 								ชื้อชาติ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_ethnicity" value="ไทย"> ไทย  
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_ethnicity" value="อื่นๆ"> อื่นๆ
 								&nbsp;&nbsp;<input type="text" size="30" name="Tbi_ethnicity_etc" placeholder="โปรดระบุ" > 
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;1.5
 								ศาสนา:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="Tbi_nationality" value="พุทธ"> พุทธ 
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="Tbi_nationality" value="คริสต์"> คริสต์  
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="Tbi_nationality" value="อิสลาม"> อิสลาม  
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="Tbi_nationality" value="ฮินดู"> ฮินดู   
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_nationality" value="อื่นๆ"> อื่นๆ
 								&nbsp;&nbsp;<input type="text" size="30" name="Tbi_nationality_etc" placeholder="โปรดระบุ" > 
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;1.6
 								ที่อยู่หรือสถานที่ติดต่อสะดวก (สำหรับจัดส่งเอกสารหรือข้อมูลข่าวสาร)
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่: <textarea name="Tbi_address" cols="60" rows="3" placeholder="ที่อยู่"></textarea>
 								

 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;1.7
 								โทรศัพท์ที่ติดต่อสะดวก: <input type="tel" size="10" name="Tbi_tell" ><b style="color:red;"> *</b>&nbsp;&nbsp;&nbsp;&nbsp;
 								โทรสาร: <input type="text" size="10" name="Tbi_fax" >&nbsp;&nbsp;&nbsp;&nbsp;
 								มือถือ: <input type="tel" size="10" name="Tbi_phone" ><b style="color:red;"> *</b>&nbsp;&nbsp;&nbsp;&nbsp;
 								E-mail: <input type="email" size="20" name="Tbi_mail" ><b style="color:red;"> *</b>&nbsp;&nbsp;&nbsp;&nbsp;
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;1.8
 								ท่านสำเร็จการศึกษาระดับใด หรือกำลังศึกษาอยู่ในระดับใด<b style="color:red;"> *</b>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_education" value="สำเร็จการศึกษา"> สำเร็จการศึกษา เมื่อ ปี พ.ศ. <input type="text" size="20" name="Tbi_year" >
 								สาขาวิชา<input type="text" size="20" name="Tbi_major" > สถาบัน <input type="text" size="20" name="Tbi_university" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								<input type="radio" name="Tbi_degree" value="มัธยมศึกษาตอนปลาย/ปวช."> มัธยมศึกษาตอนปลาย/ปวช. 
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" value="อนุปริญญา/ปวส./ปวท."> อนุปริญญา/ปวส./ปวท.  
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" value="ปริญญาตรี"> ปริญญาตรี	<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								<input type="radio" name="Tbi_degree" value="ปริญญาโทหรือสูงกว่า"> ปริญญาโทหรือสูงกว่า     
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" value="ปริญญาเอก"> ปริญญาเอก  
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" value="อื่นๆ"> อื่นๆ 
 								&nbsp;&nbsp;<input type="text" size="30" name="Tbi_degree_etc" placeholder="ระบุ" >
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_education" value="กำลังศึกษา"> กำลังศึกษา ในชั้นปีที่ <input type="text" size="20" name="Tbi_year" >
 								สาขาวิชา <input type="text" size="20" name="Tbi_major" > สถาบัน <input type="text" size="20" name="Tbi_university" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								<input type="radio" name="Tbi_degree" value="มัธยมศึกษาตอนปลาย/ปวช."> มัธยมศึกษาตอนปลาย/ปวช. 
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" value="อนุปริญญา/ปวส./ปวท."> อนุปริญญา/ปวส./ปวท.  
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" value="ปริญญาตรี"> ปริญญาตรี<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								<input type="radio" name="Tbi_degree" value="ปริญญาโทหรือสูงกว่า"> ปริญญาโทหรือสูงกว่า     
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" value="ปริญญาเอก"> ปริญญาเอก  
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" value="อื่นๆ"> อื่นๆ 
 								&nbsp;&nbsp;<input type="text" size="30" name="Tbi_degree_etc" placeholder="ระบุ" >
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;1.9
 								ปัจจุบันท่านประกอบอาชีพใด <b style="color:red;"> *</b>
 							</td>
 						</tr>
 						<tr>
 							<td  colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" value="เพิ่งสำเร็จการศึกษา"> เพิ่งสำเร็จการศึกษา ไม่เกิน 1 ปี และยังหางานทำไม่ได้<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" value="ไม่ได้ประกอบอาชีพใดๆ"> ไม่ได้ประกอบอาชีพใดๆ (เช่น ว่างงาน ลาออกจากงาน ถูกเลิกจ้าง เกษียณอายุ ปิดกิจการ สำเร็จการศึกษาเกิน 1ปี และยังหางานทำไม่ได้) <br>
 								&nbsp;&nbsp;&nbsp;&nbsp;มาเป็นเวลา <input type="text" size="20" name="Tbi_notwork_time" > ปี<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" value="พนักงานประจำ/ลูกจ้างประจำ บริษัท">พนักงานประจำ/ลูกจ้างประจำ บริษัท<input type="text" size="20" name="Tbi_emp_company" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;อยู่ในภาคธุรกิจใด(เลือกเพียงข้อเดียว)&nbsp;&nbsp;<input type="radio" name="Tbi_type_business" value="การผลิต"> การผลิต&nbsp;&nbsp;<input type="radio" name="Tbi_type_business" value="การค้า"> การค้า&nbsp;&nbsp;<input type="radio" name="Tbi_type_business" value="การบริการ"> การบริการ<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" value="ข้าราชการ หรือพนักงานรัฐวิสาหกิจ สังกัด">ข้าราชการ หรือพนักงานรัฐวิสาหกิจ สังกัด<input type="text" size="20" name="Tbi_official" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" value="ลูกจ้างรายวัน หรือรับจ้างทั่วไป"> ลูกจ้างรายวัน หรือรับจ้างทั่วไป<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" value="ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ)"> ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ)<input type="text" size="20" name="Tbi_etc" placeholder="โปรดระบุ"><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" value="ประกอบธุรกิจส่วนตัว"> ประกอบธุรกิจส่วนตัว หรือ เป็นเจ้าของกิจการ<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" value="อื่นๆ"> อื่นๆ<input type="text" size="20" name="Tbi_etc" placeholder="โปรดระบุ" ><br>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;1.10
 								ท่านมีประสบการณ์ในฐานะเจ้าของกิจการหรือเป็นทายาทธุรกิจหรือไม่
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_owners" value="เป็นเจ้าของ"> เป็นเจ้าของ หรือหุ้นส่วนผู้จัดการในธุรกิจอยู่แล้ว ตั้งแต่ปี พ.ศ. <input type="text" size="20" name="Tbi_owners_year" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_owners" value="เป็นทายาทของเจ้าของธุรกิจ"> เป็นทายาทของเจ้าของธุรกิจ และกำลังเตรียมรับสืบทอดธุรกิจ <br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_owners" value="ไม่เคยเป็นเจ้าของธุรกิจ"> ไม่เคยเป็นเจ้าของธุรกิจ และไม่ได้เป็นทายาทธุรกิจ                                       <br>        
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								<u><b><p>ส่วนที่ 2&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลเกี่ยวกับธุรกิจที่ต้องการจัดตั้ง</p></b></u>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;2.1
 								ท่านมีโครงการหรือมีแนวคิดเกี่ยวกับธุรกิจที่ต้องการลงทุนอยู่แล้วหรือไม่<b style="color:red;"> *</b>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_concept" value="ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร"> ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_concept" value="มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว"> มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว<br>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;2.2
 								ท่านสนใจหรือกำลังจะลงทุนในธุรกิจประเภทใด  <b style="color:red;"> *</b>         
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" value="การผลิต"> การผลิต&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="B_manufacture" placeholder="โปรดระบุประเภทสินค้าที่จะผลิต" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" value="การบริการ"> การบริการ&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="B_service" placeholder="โปรดระบุลักษณะของบริการ" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" value="การค้าส่ง"> การค้าส่ง&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="B_wholesale" placeholder="โปรดระบุประเภทสินค้า" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" value="การค้าปลีก"> การค้าปลีก&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="B_retail" placeholder="โปรดระบุประเภทสินค้า" > 
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;2.3
 								ท่านได้จัดทำแผนธุรกิจสำหรับโครงการที่จะลงทุนไว้แล้วหรือไม่ <b style="color:red;"> *</b>          
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" value="มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว"> มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" value="มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน"> มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" value="กำลังจัดทำแผนธุรกิจ"> กำลังจัดทำแผนธุรกิจ<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" value="ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ"> ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;2.4
 								ท่านมีเป้าหมายที่จะเริ่มลงทุนในธุรกิจที่สนใจ เมื่อใด          
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_goal" value="ภายในเดือน"> ภายในเดือน<input type="text" size="30" name="B_goal_month" >ปี<input type="text" size="20" name="B_goal_year" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_goal" value="ยังไม่มีเป้าหมายกำหนดเวลา"> ยังไม่มีเป้าหมายกำหนดเวลา

 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;2.5
 								ท่านคาดว่ากิจการที่จะเริ่มจัดตั้ง จะต้องใช้เงินลงทุนในปีแรก ประมาณ <input type="text" size="30" name="B_investment" > บาท        
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;2.6
 								ท่านคาดว่าจะได้เงินลงทุนดังกล่าวจากแหล่งใดบ้าง (ระบุได้มากกว่าหนึ่งข้อ) <b style="color:red;"> *</b>        
 							</td>
 						</tr>
 						<tr>
 							<td  colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_resources" value="เงินส่วนตัวของท่าน"> เงินส่วนตัวของท่าน ประมาณ <input type="text" size="20" name="B_balance" > บาท<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_resources" value="เงินจากหุ้นส่วน"> เงินจากหุ้นส่วน หรือผู้ร่วมทุน ประมาณ<input type="text" size="20" name="B_balance" > บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								<input type="radio" name="B_source" value="ญาติ สมาชิกในครอบครัว"> ญาติ สมาชิกในครอบครัว 
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="B_source" value="บุคคลอื่นที่ไม่ใช่ญาติ"> บุคคลอื่นที่ไม่ใช่ญาติ 
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" value="บริษัทหรือกิจการอื่น"> บริษัทหรือกิจการอื่น&nbsp;&nbsp;<input type="text" size="30" name="B_source_etc" placeholder="ระบุ" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_resources" value="เงินกู้ยืม"> เงินกู้ยืม ประมาณ <input type="text" size="20" name="B_balance" > บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								<input type="radio" name="B_source" value="ญาติ สมาชิกในครอบครัว"> ญาติ สมาชิกในครอบครัว &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" value="บุคคลอื่นที่ไม่ใช่ญาติ"> บุคคลอื่นที่ไม่ใช่ญาติ<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" value="ธนาคารของรัฐ"> ธนาคารของรัฐ &nbsp;&nbsp;<input type="text" size="30" name="B_source_etc" placeholder="ระบุ" >
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" value="ธนาคารพาณิชย์ของเอกชน"> ธนาคารพาณิชย์ของเอกชน&nbsp;&nbsp;<input type="text" size="30" name="B_source_etc" placeholder="ระบุ" ><br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" value="สถาบันการเงินที่ไม่ใช่ธนาคาร"> สถาบันการเงินที่ไม่ใช่ธนาคาร (นันแบงค์ เช่น บริษัทเครดิต, ลิสซิ่ง) &nbsp;&nbsp;<input type="text" size="30" name="B_source_etc" placeholder="ระบุ" >
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;2.7
 								ท่านคาดว่าในปีแรกที่จัดตั้งธุรกิจ จะมีการจ้างงาน (จ่ายเงินเดือนประจำ และลงบัญชีเป็นต้นทุน) จำนวนเท่าใด        
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ตัวท่านเอง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" value="ไม่มี">ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" value="มี"> มี<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- หุ้นส่วนที่ร่วมบริหารจัดการ/ดำเนินงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" value="ไม่มี"> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" value="มีประมาณ"> มีประมาณ
 								<input type="text" size="30" name="B_emp_sum" > คน<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงาน/ผู้ปฏิบัติงานที่เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" value="ไม่มี"> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" value="มีประมาณ"> มีประมาณ
 								<input type="text" size="30" name="B_emp_sum" > คน<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงานอื่นๆที่ไม่ได้เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" value="ไม่มี"> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" value="มีประมาณ"> มีประมาณ
 								<input type="text" size="30" name="B_emp_sum" > คน<br>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								<u><b><p>ส่วนที่ 3&nbsp;&nbsp;&nbsp;&nbsp;บริการที่ต้องการจากโครงการการบ่มเพาะผู้ประกอบการเทคโนโลยี มหาวิทยาลัยแม่โจ้</p></b></u>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.1
 								ท่านคาดว่าจะได้เงินลงทุนดังกล่าวจากแหล่งใดบ้าง (ระบุได้มากกว่าหนึ่งข้อ)   <b style="color:red;"> *</b>     
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" value="การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ"> การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" value="การจัดทำแผนธุรกิจ"> การจัดทำแผนธุรกิจ<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" value="การจัดทำ เว็บไซต์"> การจัดทำ เว็บไซต์<br>    
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" value="การออกแบบและจัดทำโลโก้"> การออกแบบและจัดทำโลโก้<br>    
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_investment_etc" placeholder="ระบุ" >        
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.2
 								การอบรมให้ความรู้เบื้องต้น          <b style="color:red;"> *</b>  
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" value="การตลาด"> การตลาด<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" value="การบัญชี-การเงิน"> การบัญชี-การเงิน<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" value="การผลิต"> การผลิต<br>    
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" value="การทรัพยากรบุคคล"> การทรัพยากรบุคคล<br>    
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_train_etc" placeholder="ระบุ" >        
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.3
 								การวิจัยและพัฒนาเทคโนโลยีและผลิตภัณฑ์        
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" value="การวิจัยและพัฒนาเทคโนโลยีการผลิต"> การวิจัยและพัฒนาเทคโนโลยีการผลิต<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" value="การวิจัยและพัฒนาผลิตภัณฑ์"> การวิจัยและพัฒนาผลิตภัณฑ์<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" value="การพัฒนาบรรจุภัณฑ์"> การพัฒนาบรรจุภัณฑ์<br>    
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_research_etc" placeholder="ระบุ" >        
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.4
 								การให้บริการระบบโครงสร้างพื้นฐาน       
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_service" value="การใช้พื้นที่"> การใช้พื้นที่<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_service" value="การใช้เลขานุการกลาง"> การใช้เลขานุการกลาง<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_service" value="การบริการจัดทำบัญชี"> การบริการจัดทำบัญชี<br>    
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_service" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_service_etc" placeholder="ระบุ" >        
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.5
 								การให้คำปรึกษาแนะนำ    <b style="color:red;"> *</b>     
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="แหล่งเงินทุน"> แหล่งเงินทุน<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="การร่วมลงทุน"> การร่วมลงทุน<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล"> การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="การตั้งโรงงาน"> การตั้งโรงงาน<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="การตลาด"> การตลาด<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="การเงิน"> การเงิน<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="การบัญชี"> การบัญชี<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="การบริหารบุคคล"> การบริหารบุคคล<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="การบริหารการผลิต"> การบริหารการผลิต<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="ภาษี"> ภาษี<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="กฎหมาย"> กฎหมาย<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="การค้าระหว่างประเทศ"> การค้าระหว่างประเทศ<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_counsel_etc" placeholder="ระบุ" >        
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.6
 								การขอใช้บริการห้องปฏิบัติการ<input type="text" size="30" name="Tbi_lab" placeholder="ระบุ" >   <b style="color:red;"> *</b>      
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.7
 								การขอรับการรับรองมาตรฐาน       
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" value=" อย."> อย.<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" value=" GMP"> GMP<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" value=" HACCP"> HACCP<br>    
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" value="ISO"> ISO  <input type="text" size="30" name="Tbi_certification_iso"> <br>      
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_certification_etc" placeholder="ระบุ" > <br>    
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.8
 								การสนับสนุนกิจกรรมประชาสัมพันธ์และการส่งเสริมการจำหน่าย      
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_announce" value="การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge"> การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_announce" value="การจัดนิทรรศการ ออกบูธ"> การจัดนิทรรศการ ออกบูธ<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_announce" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_announce_etc" placeholder="ระบุ" > <br>    
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.9
 								การประสานงานและเชื่อมโยงเครือข่ายกับหน่วยงานสนับสนุนการประกอบธุรกิจ      
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" value="OIL"> OIL<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" value="NIA"> NIA<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" value="I03 CR (รัฐร่วมเอกชน)"> I03 CR (รัฐร่วมเอกชน)<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" value="IP Fund"> IP Fund<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_coordinate_etc" placeholder="ระบุ" > <br>    
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.10
 								การขอรับการสนับสนุนทางการเงิน       <b style="color:red;"> *</b>  
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" value="การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)"> การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" value="การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ"> การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" value="การส่งเสริมทางการตลาด"> การส่งเสริมทางการตลาด<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_funding_etc" placeholder="ระบุ" > <br>    
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left">
 								&nbsp;&nbsp;&nbsp;&nbsp;3.11
 								การใช้บริการเรื่องการจัดการทรัพย์สินทางปัญญา   <b style="color:red;"> *</b>      
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="left" >
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" value="การให้บริการข้อมูล"> การให้บริการข้อมูล<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" value="การสืบค้นข้อมูลทรัพย์สินทางปัญญา"> การสืบค้นข้อมูลทรัพย์สินทางปัญญา<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" value="การจดทะเบียนทรัพย์สินทางปัญญา"> การจดทะเบียนทรัพย์สินทางปัญญา<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" value="การอนุญาตใช้สิทธ์"> การอนุญาตใช้สิทธ์<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" value="การเจรจาใช้สิทธิ์"> การเจรจาใช้สิทธิ์<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" value="การประเมินมูลค่าทรัพย์สินทางปัญญา"> การประเมินมูลค่าทรัพย์สินทางปัญญา<br>
 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="Tbi_asset_etc" placeholder="ระบุ" > <br>    
 							</td>
 						</tr>
 						<tr>
 							<td colspan="3" align="center" >
 								
 								<table border="1" width="80%" >
 									<tr>
 										<td colspan="3" align="center">
 											<p><b>คำรับรองของผู้สมัคร</b> <b style="color:red;"> *</b>  </p>
 											<table>
 												<tr>
 													<td colspan="3" align="center">
 														<br><br>
 														&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้ารับรองว่าหากข้าพเจ้าได้รับคัดเลือกเข้าร่วมโครงการบ่มเพาะวิสาหกิจ ในครั้งนี้ <br>
 														ข้าพเจ้าจะเข้าร่วมกิจกรรมตามหลักสูตรหรือ ตามหลักเกณฑ์ที่กำหนดของสถาบันบ่มเพาะ<br>
 														วิสาหกิจ มหาวิทยาลัยแม่โจ้ รวมทั้งจะร่วมมือให้ข้อมูลแก่ สถาบันบ่มเพาะวิสาหกิจ มหาวิทยาลัย<br>
 														แม่โจ้  หรือที่ปรึกษาที่ได้รับมอบหมาย ในการติดตามผลสัมฤทธิ์จากการเข้าร่วมโครงการบ่ม<br>
 														เพาะวิสาหกิจของข้าพเจ้า<br>
 													</td>
 												</tr>
 											</table><br>
 											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ลายมือชื่อ) <input type="text" size="30" name="" ><br>
 											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ผู้สมัคร</b><br><br>
 											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ตัวบรรจง) (<input type="text" size="30" name="Tbi_name" >)<br>
 											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่: <input type="date" size="30" name="Tbi_date_register" ><br><br>
 										</td>
 										<br>
 									</tr>
 									
 								</table>
 							</td>
 						</tr>
 					</table>
 				</center>

 			</div>
 		</div>

 	</div>
 </div>
 <br>
 <div class="row">
 	<div class="col-sm-12">
 		<center>
 			<table width="90%">
 				<tr>
 					<td><b style="color:red;"> *</b> หนังสือรับรองการจดทะเบียนนิติบุคคล: <input type="file" name="F_1">   </td>
 					<td><b style="color:red;"> *</b> สำเนาบัตรประชาชนของผู้มีสิทธิลงนาม: <input type="file" name="F_2">  </td>
 					<td><b style="color:red;"> *</b> หนังสือมอบอำนาจ(ถ้ามี): <input type="file" name="F_3">  </td>
 					<td><b style="color:red;"> *</b> สำเนาบัตรประชาชน/สำเนาบัตรข้าราชการของนักวิจัย: <input type="file" name="F_4">   </td>
 				</tr>
 			</table>
 		</center>

 	</div>
 </div>
 <br> <br> <br> <br>

 <div class="row">
 	<div class="col-sm-12">
 		<center>
 			<table width="70%">
 				<tr>
 					<td width="30%"></td>
 					<td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม: <label type="" size="20" name="Tbi_id3"><?php echo  $random; ?><input type="hidden" name="random" value="<?php echo  $random; ?>"></td>
 				</tr>
 			</table>
 		</center>
 	</div>
 </div>
 <br>
 <form method="post" action="frtbiplatform.php" >
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
</form>

<br><br>
