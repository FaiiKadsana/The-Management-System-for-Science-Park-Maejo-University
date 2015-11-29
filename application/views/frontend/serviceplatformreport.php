<body onclick="window.print()">

<?php  foreach ($service as $rowservice) { ?>
<div class="row" >
	<div class="col-sm-12">
		<center>
			<table width="100%">
				<tr>
					<td width="5%"></td>
					<td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม......................................</td>
				</tr>
			</table>
		</center>
	</div>
</div>
<div class="row fromfont">
	<div class="col-sm-12">
		<center>
			<table width="100%">
				<tr>
					<td width="15%" align="center"><img src='<?php echo base_url("asset/images/N.jpg") ?>' width='50%' height='8%'></td>
					<td width="60%" align="center">
						<p>แบบฟอร์มกรอกข้อมูลผู้ประกอบการ/SMEs/วิสาหกิจชุมชน</p>
						<p>ที่มารับบริการอุทยานวิทยาศาสตร์ภูมิภาค เครือข่ายภาคเหนือ</p>
					</td>
					<td width="15%" align="center"><img src='<?php echo base_url("asset/images/banner1.png") ?>' width='50%' height='8%'></td>
				</tr>
			</table>
			<table  width="100%"  >
				<tr>
					
					<td colspan="3"  align="right"> 
						<p>สถาบันบ่มเพาะวิสาหกิจมหาวิทยาลัย</p>
						<p>วันที่มารับบริการ ....<?php echo $rowservice->S_date;?>.....</p>
					</td>
				</tr>
				<tr>
					<td width="88%"  align="left"> 
						<p><b><u>ข้อมูลส่วนตัว</u></b></p>
					</td>
					<td colspan="2" > </td>
				</tr>
				<tr>
					<td colspan="3"  align="left"><br>
						ชื่อ.............<?php echo $rowservice->P_title;?>.....<?php echo $rowservice->P_name;?>..................... นามสกุล...........<?php echo $rowservice->P_lastname;?>..........................
					</td>
				</tr>
				<tr>
					<td  colspan="3" align="left">เลขที่บัตรประชาชน.......<?php echo $rowservice->P_id_card;?>........&nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง.....<?php echo $rowservice->P_position;?>......</td><tr>
					<td colspan="3"  align="left">เบอร์โทรติดต่อ......<?php echo $rowservice->P_phone;?>.....&nbsp;&nbsp;&nbsp;&nbsp;E-mail:.......<?php echo $rowservice->P_mail;?>.............</td>
				</tr>
				<tr>
					<td  align="left"> 
						<p><b><u>ข้อมูลทางธุรกิจ</u></b></p>
					</td>
					<td colspan="2" > </td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						ชื่อกิจการ...............................<?php echo $rowservice->C_name;?>............................................................................<br>
						ที่อยู่.......<?php echo $rowservice->C_address;?>............................................................................................................<br>
						
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						โทรศัพท์.........<?php echo $rowservice->C_phone;?>.........&nbsp;&nbsp;&nbsp;โทรสาร.........<?php echo $rowservice->C_fax;?>......&nbsp;&nbsp;&nbsp;Website.....<?php echo $rowservice->C_website;?>......................................<br>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<b>เลขที่ทะเบียนพาณิชย์: </b>&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_no_com" value="ไม่มี"> ไม่มี  
						&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_no_com" value="มี"> มี กรุณากรอก
						&nbsp;&nbsp;......<?php echo $rowservice->C_no_com_etc;?>..............................................                                                                                                                
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<b>ประเภทกิจการ (เลือกข้อใดข้อหนึ่ง)</b>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<input type="radio" name="C_company_type" value="เจ้าของกิจการ(บุคคลธรรมดา)"> เจ้าของกิจการ(บุคคลธรรมดา)  
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_company_type" value="ห้างหุ้นส่วนสามัญ"> ห้างหุ้นส่วนสามัญ
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_company_type" value="ห้างหุ้นส่วนจำกัด"> ห้างหุ่นส่วนจำกัด<br>
						<input type="radio" name="C_company_type" value="เบริษัทจำกัด"> บริษัทจำกัด  
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_company_type" value="วิสาหกิจชุมชน"> วิสาหกิจชุมชน
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_company_type" value="อื่นๆ"> อื่นๆ ระบุ&nbsp;&nbsp;..............<?php echo $rowservice->C_company_type_etc;?>..................................                                                                                                          
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<b>ลักษณะการประกอบการ (เลือกข้อใดข้อหนึ่ง)</b>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<input type="radio" name="C_undertaking" value="การผลิต"> การผลิต 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" value="การค้า(ปลีก-ส่ง)"> การค้า(ปลีก-ส่ง)
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" value="บริการ"> บริการ
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_undertaking" value="อื่นๆ"> อื่นๆ ระบุ&nbsp;&nbsp;........<?php echo $rowservice->C_undertaking_etc;?>.................................
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
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_industry_type" value="สิ่งทอและเครื่องนุ่งห่ม"> สิ่งทอและเครื่องนุ่งห่ม
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="รองเท้าและเครื่องหนัง"> รองเท้าและเครื่องหนัง<br>
						<input type="radio" name="C_industry_type" value="ผลิตภัณฑ์จากไม้และเครื่องเรือน"> ผลิตภัณฑ์จากไม้และเครื่องเรือน
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" value="ยาและเคมีภัณฑ์"> ยาและเคมีภัณฑ์
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="ยางพาราและผลิตภัณฑ์"> ยางพาราและผลิตภัณฑ์<br>
						<input type="radio" name="C_industry_type" value="บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก"> บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" value="เซรามิกส์และแก้ว"> เซรามิกส์และแก้ว
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" value="เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์"> เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์<br>
						<input type="radio" name="C_industry_type" value="ชิ้นส่วนและยานยนต์"> ชิ้นส่วนและยานยนต์
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" value="อัญมณีและเครื่องประดับ"> อัญมณีและเครื่องประดับ
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" value="เหล็กและโลหะการ"> เหล็กและโลหะการ<br>
						<input type="radio" name="C_industry_type" value="เครื่องจักรกล"> เครื่องจักรกล
						<input type="radio" name="C_industry_type" value="ท่องเที่ยว"> ท่องเที่ยว
						<input type="radio" name="C_industry_type" value="บริการด้านสุขภาพ"> บริการด้านสุขภาพ
						<input type="radio" name="C_industry_type" value="อื่นๆ"> อื่นๆ ระบุ&nbsp;&nbsp;..............................<?php echo $rowservice->C_industry_type_etc;?>.....................
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						เงินจดทะเบียน...................<?php echo $rowservice->C_investment;?>.......บาท(ถ้ามี)&nbsp;&nbsp;&nbsp;&nbsp;จำนวนปีที่ประกอบการ.................<?php echo $rowservice->C_no_year;?>..................ปี
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						จำนวนลูกจ้างทั้งหมด......<?php echo $rowservice->S_no_emp_total;?>..........&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;แบ่งเป็นลูกค้าปรจำ.........<?php echo $rowservice->S_no_emp_reg;?>.......&nbsp;&nbsp;อัตรา<br>ลูกจ้างชั่วคราว.......<?php echo $rowservice->S_no_emp_tem;?>.......&nbsp;&nbsp;อัตรา
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						ผลิตภัณฑ์หลัก&nbsp;&nbsp;1.)..........<?php echo $rowservice->S_main_pro1;?>.........&nbsp;&nbsp;2.).......<?php echo $rowservice->S_main_pro2;?>............&nbsp;&nbsp;3.)..........<?php echo $rowservice->S_main_pro3;?>.....................
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						
						<table width="100%" border="1">
							<tr>
								<td colspan="3" align="center">
									<p>อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบนจะเป็นผู้เก็บรักษาความลับของผู้มารับบริการ </p>
									<p>โดยข้อมุลทั้งหมดจะเปิดเผยให้เฉพาะกับเจ้าหน้าที่ ที่เป็นหน่วยร่วมด้านการปรึกษาแนะนำเท่านั้น</p>
									<p> ซึ่งจุดประสงค์ของการบันทึกข้อมูลก็เพื่อให้บริการจะเป็นไปด้วยความรวดเร็วและหาแนวทางแก้ไขได้อย่างถูกต้อง</p>
								</td>
							</tr>
							<tr>
								<td width="30%" align="center">
									ลงชื่อ..<?php echo $rowservice->S_provider;?>..<br>
									&nbsp;&nbsp;&nbsp;&nbsp;(..<?php echo $rowservice->S_provider1;?>..)<br>
									<b>ผู้ขอรับบริการ</b>
								</td>
								<td align="center" colspan="2">
									<input type="radio" name="S_agreement" value="ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล"> ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_agreement" value="ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล"> ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล
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
						<input type="radio" name="S_circulation" value="ขยายตลาด"> ขยายตลาด
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" value="พัฒนาผลิตภัณฑ์"> พัฒนาผลิตภัณฑ์
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" value="แบรนด์"> แบรนด์<br>
						<input type="radio" name="S_circulation" value="สำรวจความต้องการของตลาด"> สำรวจความต้องการของตลาด
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_circulation" value="จัดทำแผนส่งเสริมการตลาด"> จัดทำแผนส่งเสริมการตลาด
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" value="หาพันธมิตรทางธุรกิจ"> หาพันธมิตรทางธุรกิจ<br>
						<input type="radio" name="S_circulation" value="พัฒนาธุรกิจใหม่"> พัฒนาธุรกิจใหม่
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_circulation" value="พัฒนาตลาดต่างประเทศ"> พัฒนาตลาดต่างประเทศ
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<b>ความสามารถในการทำกำไร</b>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<input type="radio" name="S_profit" value="การเพิ่มประสิทธิภาพ"> การเพิ่มประสิทธิภาพ
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_profit" value="การลดต้นทุน"> การลดต้นทุน
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_profit" value="การจัดซื้อ จัดหา"> การจัดซื้อ จัดหา
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<b>เงินทุน</b>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<input type="radio" name="S_capital" value="ระดมทุน"> ระดมทุน
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_capital" value="การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน"> การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<b>การจัดการ</b>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<input type="radio" name="S_management" value="การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ"> การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ
						&nbsp;&nbsp; <input type="radio" name="S_management" value="บริหารจัดการบัญชี"> บริหารจัดการบัญชี
						&nbsp;&nbsp; <input type="radio" name="S_management" value="กฎหมาย"> กฎหมาย<br>
						<input type="radio" name="S_management" value="การใช้เทคโนโลยีสารสนเทศ(IT)"> การใช้เทคโนโลยีสารสนเทศ(IT)
						&nbsp;&nbsp; <input type="radio" name="S_management" value="การเริ่มต้นกิจการ/การเลิกกิจการ"> การเริ่มต้นกิจการ/การเลิกกิจการ
						&nbsp;&nbsp; <input type="radio" name="S_management" value="การสืบทอดธุรกิจ"> การสืบทอดธุรกิจ<br>
						<input type="radio" name="S_management" value="การปฎิรูปการบริหารจัดการ"> การปฎิรูปการบริหารจัดการ
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<b>การปฏิบัติงาน</b>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<input type="radio" name="S_work" value="เพิ่มประสิทธิภาพการผลิต"> เพิ่มประสิทธิภาพการผลิต
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_work" value="คุณภาพ"> คุณภาพ
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_work" value="มาตรฐาน(standard)"> มาตรฐาน(standard)
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
						<input type="radio" name="S_technology" value="ทรัพย์สินทางปัญญา"> ทรัพย์สินทางปัญญา
						<input type="radio" name="S_technology" value="การประหยัดพลังงาน"> การประหยัดพลังงาน
						<input type="radio" name="S_technology" value="มาตรการด้านสิ่งแวดล้อม"> มาตรการด้านสิ่งแวดล้อม<br>
									
				</tr>
				<tr>
					<td>
						อื่นๆโปรดระบุ...................<?php echo $rowservice->S_deteil_etc;?>............................................................................................................
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<b>เรื่องที่มาขอคำปรึกษาแนะนำ (สำหรับผู้มารับบริการ)</b>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						....................................<?php echo $rowservice->S_detail;?>................................................................................................<br>
						
					</td>
				</tr>
				<tr>
					<br><br>
					<td colspan="3" align="left">
						<b>วิธีการแนะนำและแนวทางแก้ไข (สำหรับเจ้าหน้าที่)</b>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<input type="radio" name="S_solution" value="ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย"> ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_solution" value="แนะนำให้คำปรึกษาภายนอก"> แนะนำให้คำปรึกษาภายนอก<br>
						<input type="radio" name="S_solution" value="แนะนำไปยังหน่วยอื่น"> แนะนำไปยังหน่วยอื่น
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_solution" value="แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)"> แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)<br>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						........................<?php echo $rowservice->S_solution_detail;?>.................................................................................................<br>
						
					</td>
				</tr>
				<tr>
					
					<td colspan="3" align="right">
						<table>
							<tr>
								<td>ชื่อผู้ให้การแนะนำ................<?php echo $rowservice->S_solution_name;?>...........</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</center>

	</div>
</div>
<?php } ?>
</body>