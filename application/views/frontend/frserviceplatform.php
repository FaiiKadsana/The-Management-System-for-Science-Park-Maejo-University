<!-- Section -->
<div id="section_header">
	<h2>Service Platform</h2>
</div>

<form method="post" action="<?php echo $action; ?>">

<div class="row fromfont">
	<div class="col-sm-12">

		<div class="row">
			<div class="col-sm-12">
				<center>
					<table width="70%">
						<tr>
							<td width="30%"></td>
							<td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม: <label type="" size="20" name="S_id"><?php echo random_string('alnum',6);?></td>
						</tr>
					</table>
				</center>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 ">

				<center>
					

					<table  width="70%" >
						<tr>
							<td width="15%" align="center"><img src='<?php echo base_url("asset/images/N.jpg") ?>' width='80%' height='20%'></td>
							<td width="60%" align="center">
								<p>แบบฟอร์มกรอกข้อมูลผู้ประกอบการ/SMEs/วิสาหกิจชุมชน</p>
								<p>ที่มารับบริการอุทยานวิทยาศาสตร์ภูมิภาค เครือข่ายภาคเหนือ</p>
							</td>
							<td width="25%" align="center"><img src='<?php echo base_url("asset/images/banner1.png") ?>' width='50%' height='20%'></td>
						</tr>
						<tr>
							<td colspan="2" > </td>
							<td  align="left"> 
								<p> สถาบันบ่มเพาะวิสาหกิจ มหาวิทยาลัย </p>
								<p> วันที่มารับบริการ <input type="date"  name="S_date" > </p>
							</td>
						</tr>
						<tr>
							<td  align="left"> 
								<p><b><u>ข้อมูลส่วนตัว</u></b></p>
							</td>
							<td colspan="2" > </td>
						</tr>
						<tr>
							<td colspan="3"  align="center"><br>
								ชื่อ: <select name="P_title"> 
								<option value="นาย">นาย</option>
								<option value="นาง">นาง</option>
								<option value="นางสาว">นางสาว</option>
							</select>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="P_name" >
							&nbsp;&nbsp;&nbsp;&nbsp;นามสกุล: <input type="text" size="30" name="P_lastname" >
						</td>
					</tr>
					<tr>
						<td  colspan="3" align="center">เลขที่บัตรประชาชน: <input type="text" size="30" name="P_id_card" >
							&nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง: <input type="text" size="30" name="P_position" ></td>
						</tr>
						<tr>
							<td colspan="3"  align="center">เบอร์โทรติดต่อ: <input type="tel" size="30" name="P_phone" >
								&nbsp;&nbsp;&nbsp;&nbsp;E-mail: <input type="email" size="40" name="P_mail" ></td>
							</tr>
							<tr>
								<td  align="left"> 
									<p><b><u>ข้อมูลทางธุรกิจ</u></b></p>
								</td>
								<td colspan="2" > </td>
							</tr>
							<tr>
								<td colspan="3" align="center">
									ชื่อกิจการ: <input type="text" size="30" name="C_name" >
									ที่อยู่: <textarea name="C_address" cols="60" rows="3" placeholder="ที่อยู่"></textarea>
									
									
								</td>
							</tr>
							<tr>
								<td colspan="3" align="center">
									โทรศัพท์: <input type="text" size="20" name="C_phone" >
									&nbsp;&nbsp;&nbsp;โทรสาร: <input type="text" size="20" name="C_fax" >
									&nbsp;&nbsp;&nbsp;Website: <input type="text" size="30" name="C_website" >
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>เลขที่ทะเบียนพาณิชย์: </b>&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_no_com" value="ไม่มี"> ไม่มี  
									&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_no_com" value="มี"> มี
									&nbsp;&nbsp;<input type="text" size="30" name="C_no_com_etc" placeholder="กรุณากรอก" >                                                                                                                
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>ประเภทกิจการ (เลือกข้อใดข้อหนึ่ง)</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="2" value="เจ้าของกิจการ(บุคคลธรรมดา)"> เจ้าของกิจการ(บุคคลธรรมดา)  
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_company_type" value="ห้างหุ้นส่วนสามัญ"> ห้างหุ้นส่วนสามัญ
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_company_type" value="ห้างหุ้นส่วนจำกัด"> ห้างหุ่นส่วนจำกัด<br>
									<input type="radio" name="2" value="เบริษัทจำกัด"> บริษัทจำกัด  
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_company_type" value="วิสาหกิจชุมชน"> วิสาหกิจชุมชน
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_company_type" value="อื่นๆ"> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="C_company_type_etc" placeholder="ระบุ" >                                                                                                            
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>ลักษณะการประกอบการ (เลือกข้อใดข้อหนึ่ง)</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="3" value="การผลิต"> การผลิต 
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" value="การค้า(ปลีก-ส่ง)"> การค้า(ปลีก-ส่ง)
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" value="บริการ"> บริการ
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_undertaking" value="อื่นๆ"> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="C_undertaking_etc" placeholder="ระบุ" >
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>สาขาอุตสาหกรรมที่ทำอยู่ (เลือกข้อใดข้อหนึ่ง)</b>
								</td>
							</tr>
							<tr>
								<td colspan="3"  align="left">
									<input type="radio" name="C_industry_type" value="อาหารและอาหารสัตว์"> อาหารและอาหารสัตว์
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="สิ่งทอและเครื่องนุ่งห่ม"> สิ่งทอและเครื่องนุ่งห่ม
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="รองเท้าและเครื่องหนัง"> รองเท้าและเครื่องหนัง
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="ผลิตภัณฑ์จากไม้และเครื่องเรือน"> ผลิตภัณฑ์จากไม้และเครื่องเรือน<br>
									<input type="radio" name="C_industry_type" value="ยาและเคมีภัณฑ์"> ยาและเคมีภัณฑ์
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="ยางพาราและผลิตภัณฑ์"> ยางพาราและผลิตภัณฑ์
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก"> บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="เซรามิกส์และแก้ว"> เซรามิกส์และแก้ว<br>
									<input type="radio" name="C_industry_type" value="เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์"> เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="ชิ้นส่วนและยานยนต์"> ชิ้นส่วนและยานยนต์
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="อัญมณีและเครื่องประดับ"> อัญมณีและเครื่องประดับ
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="เหล็กและโลหะการ"> เหล็กและโลหะการ<br>
									<input type="radio" name="C_industry_type" value="เครื่องจักรกล"> เครื่องจักรกล
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="ท่องเที่ยว"> ท่องเที่ยว
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="บริการด้านสุขภาพ"> บริการด้านสุขภาพ
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="อื่นๆ"> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="C_industry_type_etc" placeholder="ระบุ" >
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									เงินจดทะเบียน: <input type="text" size="20" name="C_investment" >&nbsp;&nbsp;บาท(ถ้ามี)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนปีที่ประกอบการ: <input type="text" size="20" name="C_no_year" >&nbsp;&nbsp;ปี
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									จำนวนลูกจ้างทั้งหมด: <input type="text" size="15" name="S_no_emp_total" >&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;แบ่งเป็นลูกค้าปรจำ <input type="text" size="15" name="S_no_emp_reg" >&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;ลูกจ้างชั่วคราว <input type="text" size="15" name="S_no_emp_tem" >&nbsp;&nbsp;อัตรา
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									ผลิตภัณฑ์หลัก:&nbsp;&nbsp;1.) <input type="text" size="20" name="S_main_pro1" >&nbsp;&nbsp;2.) <input type="text" size="20" name="S_main_pro2" >&nbsp;&nbsp;3.) <input type="text" size="20" name="S_main_pro3" >
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<br>
									<table width="100%" border="1">
										<tr>
											<td colspan="3" align="center">
												<p>อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบนจะเป็นผู้เก็บรักษาความลับของผู้มารับบริการ โดยข้อมุลทั้งหมดจะเปิดเผยให้เฉพาะกับเจ้าหน้าที่</p>
												<p>ที่เป็นหน่วยร่วมด้านการปรึกษาแนะนำเท่านั้น  ซึ่งจุดประสงค์ของการบันทึกข้อมูลก็เพื่อให้บริการจะเป็นไปด้วยความรวดเร็วและหาแนวทางแก้ไขได้อย่างถูกต้อง</p>
											</td>
										</tr>
										<tr>
											<td align="center"><br><br>
												ลงชื่อ <input type="text" size="25" name="S_provider" ><br>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<input type="text" size="25" name="S_provider1" >)<br>
												<b>ผู้ขอรับบริการ</b>
											</td>
											<td align="center" colspan="2">
												<input type="radio" name="S_agreement" value="ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล"> ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล
												<input type="radio" name="S_agreement" value="ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล"> ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล
											</td>
										</tr>
									</table>
									<br>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>ยอดขาย</b>
								</td>
							</tr>

							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="6" value="ขยายตลาด"> ขยายตลาด
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="6" value="พัฒนาผลิตภัณฑ์"> พัฒนาผลิตภัณฑ์
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="6" value="แบรนด์"> แบรนด์
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="สำรวจความต้องการของตลาด"> สำรวจความต้องการของตลาด<br>
									<input type="radio" name="6" value="จัดทำแผนส่งเสริมการตลาด"> จัดทำแผนส่งเสริมการตลาด
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="6" value="หาพันธมิตรทางธุรกิจ"> หาพันธมิตรทางธุรกิจ
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="6" value="พัฒนาธุรกิจใหม่"> พัฒนาธุรกิจใหม่
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="พัฒนาตลาดต่างประเทศ"> พัฒนาตลาดต่างประเทศ
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>ความสามารถในการทำกำไร</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="7" value="การเพิ่มประสิทธิภาพ"> การเพิ่มประสิทธิภาพ
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="7" value="การลดต้นทุน"> การลดต้นทุน
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="7" value="การจัดซื้อ จัดหา"> การจัดซื้อ จัดหา
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>เงินทุน</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="9" value="ระดมทุน"> ระดมทุน
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="9" value="การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน"> การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>การจัดการ</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="8" value="การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ"> การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="8" value="บริหารจัดการบัญชี"> บริหารจัดการบัญชี
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="8" value="กฎหมาย"> กฎหมาย<br>
									<input type="radio" name="8" value="การใช้เทคโนโลยีสารสนเทศ(IT)"> การใช้เทคโนโลยีสารสนเทศ(IT)
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="8" value="การเริ่มต้นกิจการ/การเลิกกิจการ"> การเริ่มต้นกิจการ/การเลิกกิจการ
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="8" value="การสืบทอดธุรกิจ"> การสืบทอดธุรกิจ<br>
									<input type="radio" name="8" value="การปฎิรูปการบริหารจัดการ"> การปฎิรูปการบริหารจัดการ
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>การปฏิบัติงาน</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="10" value="เพิ่มประสิทธิภาพการผลิต"> เพิ่มประสิทธิภาพการผลิต
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="10" value="คุณภาพ"> คุณภาพ
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="10" value="มาตรฐาน(standard)"> มาตรฐาน(standard)
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>ทรัพยากรบุคคล</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="S_humanresource" value="การบริหารจัดการทรัพยากรบุคคล"> การบริหารจัดการทรัพยากรบุคคล
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_humanresource" value="เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)"> เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)<br>
									<input type="radio" name="S_humanresource" value="สัมมนาและฝึกอบรม(จัดนอกองค์กร)"> สัมมนาและฝึกอบรม(จัดนอกองค์กร)
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_humanresource" value="ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก"> ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>เทคโนโลยี</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="S_technology" value="พัฒนาเทคโนโลยี"> พัฒนาเทคโนโลยี
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_technology" value="ทรัพย์สินทางปัญญา"> ทรัพย์สินทางปัญญา
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_technology" value="การประหยัดพลังงาน"> การประหยัดพลังงาน
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_technology" value="มาตรการด้านสิ่งแวดล้อม"> มาตรการด้านสิ่งแวดล้อม<br>
									<input type="radio" name="S_technology" value="อื่นๆ"> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="S_technology_etc" placeholder="โปรดระบุ" >
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<b>เรื่องที่มาขอคำปรึกษาแนะนำ (สำหรับผู้มารับบริการ)</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="center">
									<textarea name="S_detail" cols="80" rows="3" ></textarea>
								</td>
							</tr>
							<hr>
							<tr>
								<td colspan="3" align="left">
									<b>วิธีการแนะนำและแนวทางแก้ไข (สำหรับเจ้าหน้าที่)</b>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left">
									<input type="radio" name="13" value="ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย"> ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="13" value="แนะนำให้คำปรึกษาภายนอก"> แนะนำให้คำปรึกษาภายนอก<br>
									<input type="radio" name="13" value="แนะนำไปยังหน่วยอื่น"> แนะนำไปยังหน่วยอื่น
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="13" value="แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)"> แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)<br>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="center">
									<textarea name="" cols="80" rows="3" ></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="1"></td>
								<td colspan="2" align="right">
									<table>
										<tr>
											<td>ชื่อผู้ให้การแนะนำ: <input type="text" size="30" name=""  ></td>
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
						<td>หนังสือรับรองการจดทะเบียนนิติบุคคล: <input type="file" name=""></td>
						<td>สำเนาบัตรประชาชนของผู้มีสิทธิลงนาม: <input type="file" name=""></td>
						<td>หนังสือมอบอำนาจ(ถ้ามี): <input type="file" name=""></td>
						<td>สำเนาบัตรประชาชน/สำเนาบัตรข้าราชการของนักวิจัย: <input type="file" name=""></td>
					</tr>
				</table>
			</center>
		</div>
	</div>
	<br>

	<form method="post" action="frserviceplatform.php" >
		<center>
		<?php
		require_once('recaptchalib.php');
                  $publickey = "6Lc_hf0SAAAAAEcBdl4ILVSDYc4dbe5wfxlzyY13"; // you got this from the signup page
                  echo recaptcha_get_html($publickey);
                  ?>
		</center><br>
                <div class="row">
                  	<div class="col-md-offset-5  col-sm-7">
                  		<button type="button" class="btn btn-success  btn-lg" >ตกลง</button>
                  		<button type="button" class="btn btn-success  btn-lg">ยกเลิก</button>
                  	</div>
                </div>
    </form>
</form>

              <br><br><br>
