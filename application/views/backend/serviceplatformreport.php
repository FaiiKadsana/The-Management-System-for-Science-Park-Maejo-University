<body onclick="window.print()">

	<?php  foreach ($service as $rowservice) { ?>
	<div class="row" >
		<div class="col-sm-12">
			<center>
				<table width="100%">
					<tr>
						<td width="5%"></td>
						<td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม.....<?php echo $rowservice->S_id;?>....</td>
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
							<b>เลขที่ทะเบียนพาณิชย์: </b>&nbsp;&nbsp;&nbsp;&nbsp; 
							<input type="radio" name="C_no_com" <?php if($rowservice->C_no_com == 'ไม่มี'){?>
							checked <?php }else{} ?>  >ไม่มี  
							&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_no_com" <?php if($rowservice->C_no_com == 'มี'){?>
							checked <?php }else{} ?>  >มี กรุณากรอก
							&nbsp;&nbsp;......<?php echo $rowservice->C_no_com_etc;?>...........................................                                                                                                                
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<b>ประเภทกิจการ (เลือกข้อใดข้อหนึ่ง)</b>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'เจ้าของกิจการ(บุคคลธรรมดา)'){?>
							checked <?php }else{} ?>  >เจ้าของกิจการ(บุคคลธรรมดา)  
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_company_type"<?php if($rowservice->C_company_type == 'ห้างหุ้นส่วนสามัญ'){?>
							checked <?php }else{} ?>  > ห้างหุ้นส่วนสามัญ
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'ห้างหุ่นส่วนจำกัด'){?>
							checked <?php }else{} ?>  > ห้างหุ่นส่วนจำกัด<br>
							<input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'บริษัทจำกัด'){?>
							checked	<?php }else{} ?>  > บริษัทจำกัด  
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'วิสาหกิจชุมชน'){?>
							checked	<?php }else{} ?>  >วิสาหกิจชุมชน
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'อื่นๆ'){?>
							checked	<?php }else{} ?>  > อื่นๆ ระบุ&nbsp;&nbsp;..............<?php echo $rowservice->C_company_type_etc;?>..................................                                                                                                          
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<b>ลักษณะการประกอบการ (เลือกข้อใดข้อหนึ่ง)</b>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'การผลิต'){?>
							checked <?php }else{} ?>  > การผลิต 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'การค้า(ปลีก-ส่ง)'){?>
							checked <?php }else{} ?>  > การค้า(ปลีก-ส่ง)
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'บริการ'){?>
							checked <?php }else{} ?>  > บริการ
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'อื่นๆ'){?>
							checked <?php }else{} ?>  > อื่นๆ ระบุ&nbsp;&nbsp;........<?php echo $rowservice->C_undertaking_etc;?>.................................
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<b>สาขาอุตสาหกรรมที่ทำอยู่ (เลือกข้อใดข้อหนึ่ง)</b>
						</td>
					</tr>
					<tr>
						<td colspan="3"  align="left">
							<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'อาหารและอาหารสัตว์'){?>
							checked <?php }else{} ?>  > อาหารและอาหารสัตว์
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'สิ่งทอและเครื่องนุ่งห่ม'){?>
							checked <?php }else{} ?>  > สิ่งทอและเครื่องนุ่งห่ม
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'รองเท้าและเครื่องหนัง'){?>
							checked <?php }else{} ?>  > รองเท้าและเครื่องหนัง<br>
							<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ผลิตภัณฑ์จากไม้และเครื่องเรือน'){?>
							checked <?php }else{} ?>  > ผลิตภัณฑ์จากไม้และเครื่องเรือน
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ยาและเคมีภัณฑ์'){?>
							checked <?php }else{} ?>  > ยาและเคมีภัณฑ์
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ยางพาราและผลิตภัณฑ์'){?>
							checked <?php }else{} ?>  > ยางพาราและผลิตภัณฑ์<br>
							<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก'){?>
							checked <?php }else{} ?>  > บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'เซรามิกส์และแก้ว'){?>
							checked <?php }else{} ?>  > เซรามิกส์และแก้ว
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์'){?>
							checked <?php }else{} ?>  > เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์<br>
							<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ชิ้นส่วนและยานยนต์'){?>
							checked <?php }else{} ?>  > ชิ้นส่วนและยานยนต์
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'อัญมณีและเครื่องประดับ'){?>
							checked <?php }else{} ?>  > อัญมณีและเครื่องประดับ
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'เหล็กและโลหะการ'){?>
							checked <?php }else{} ?>  > เหล็กและโลหะการ<br>
							<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'เครื่องจักรกล'){?>
							checked <?php }else{} ?>  > เครื่องจักรกล
							<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ท่องเที่ยว'){?>
							checked <?php }else{} ?>  > ท่องเที่ยว
							<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'บริการด้านสุขภาพ'){?>
							checked <?php }else{} ?>  > บริการด้านสุขภาพ
							<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'อื่นๆ'){?>
							checked <?php }else{} ?>  > อื่นๆ ระบุ&nbsp;&nbsp;..............................<?php echo $rowservice->C_industry_type_etc;?>.....................
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							เงินจดทะเบียน...................<?php echo $rowservice->C_investment;?>.......บาท(ถ้ามี)&nbsp;&nbsp;&nbsp;&nbsp;จำนวนปีที่ประกอบการ.................<?php echo $rowservice->C_no_year;?>..................ปี
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							จำนวนลูกจ้างทั้งหมด..<?php echo $rowservice->S_no_emp_total;?>..&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;แบ่งเป็นลูกค้าปรจำ..<?php echo $rowservice->S_no_emp_reg;?>..&nbsp;&nbsp;อัตรา&nbsp;&nbsp;ลูกจ้างชั่วคราว..<?php echo $rowservice->S_no_emp_tem;?>..&nbsp;&nbsp;อัตรา
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
										<input type="radio" name="S_agreement" <?php if($rowservice->S_agreement == 'ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล'){?>
										checked <?php }else{} ?>  >  ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_agreement" <?php if($rowservice->S_agreement == 'ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล'){?>
										checked <?php }else{} ?>  >  ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล
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
							<input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'ขยายตลาด'){?>
							checked <?php }else{} ?>  >ขยายตลาด
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'พัฒนาผลิตภัณฑ์'){?>
							checked <?php }else{} ?>  > พัฒนาผลิตภัณฑ์
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'แบรนด์'){?>
							checked <?php }else{} ?>  > แบรนด์<br>
							<input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'สำรวจความต้องการของตลาด'){?>
							checked <?php }else{} ?>  > สำรวจความต้องการของตลาด
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'จัดทำแผนส่งเสริมการตลาด'){?>
							checked <?php }else{} ?>  > จัดทำแผนส่งเสริมการตลาด
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'หาพันธมิตรทางธุรกิจ'){?>
							checked <?php }else{} ?>  > หาพันธมิตรทางธุรกิจ<br>
							<input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'พัฒนาธุรกิจใหม่'){?>
							checked <?php }else{} ?>  > พัฒนาธุรกิจใหม่
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'พัฒนาตลาดต่างประเทศ'){?>
							checked <?php }else{} ?>  > พัฒนาตลาดต่างประเทศ
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<b>ความสามารถในการทำกำไร</b>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<input type="radio" name="S_profit" <?php if($rowservice->S_profit == 'การเพิ่มประสิทธิภาพ'){?>
							checked <?php }else{} ?>  > การเพิ่มประสิทธิภาพ
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="S_profit" <?php if($rowservice->S_profit == 'การลดต้นทุน'){?>
							checked <?php }else{} ?>  > การลดต้นทุน
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_profit" <?php if($rowservice->S_profit == 'การจัดซื้อ จัดหา'){?>
							checked <?php }else{} ?>  > การจัดซื้อ จัดหา
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<b>เงินทุน</b>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<input type="radio" name="S_capital" <?php if($rowservice->S_capital == 'ระดมทุน'){?>
							checked <?php }else{} ?>  > ระดมทุน
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_capital" <?php if($rowservice->S_capital == 'การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน'){?>
							checked <?php }else{} ?>  > การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<b>การจัดการ</b>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<input type="radio" name="S_management" <?php if($rowservice->S_management == 'การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ'){?>
							checked <?php }else{} ?>  > การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ
							&nbsp;&nbsp; <input type="radio" name="S_management" <?php if($rowservice->S_management == 'บริหารจัดการบัญชี'){?>
							checked <?php }else{} ?>  > บริหารจัดการบัญชี
							&nbsp;&nbsp; <input type="radio" name="S_management" <?php if($rowservice->S_management == 'กฎหมาย'){?>
							checked <?php }else{} ?>  > กฎหมาย<br>
							<input type="radio" name="S_management" <?php if($rowservice->S_management == 'การใช้เทคโนโลยีสารสนเทศ(IT)'){?>
							checked <?php }else{} ?>  > การใช้เทคโนโลยีสารสนเทศ(IT)
							&nbsp;&nbsp; <input type="radio" name="S_management" <?php if($rowservice->S_management == 'การเริ่มต้นกิจการ/การเลิกกิจการ'){?>
							checked <?php }else{} ?>  > การเริ่มต้นกิจการ/การเลิกกิจการ
							&nbsp;&nbsp; <input type="radio" name="S_management" <?php if($rowservice->S_management == 'การสืบทอดธุรกิจ'){?>
							checked <?php }else{} ?>  > การสืบทอดธุรกิจ<br>
							<input type="radio" name="S_management" <?php if($rowservice->S_management == 'การปฎิรูปการบริหารจัดการ'){?>
							checked <?php }else{} ?>  > การปฎิรูปการบริหารจัดการ
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<b>การปฏิบัติงาน</b>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<input type="radio" name="S_work" <?php if($rowservice->S_work == 'เพิ่มประสิทธิภาพการผลิต'){?>
							checked <?php }else{} ?>  > เพิ่มประสิทธิภาพการผลิต
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_work" <?php if($rowservice->S_work == 'คุณภาพ'){?>
							checked <?php }else{} ?>  > คุณภาพ
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_work" <?php if($rowservice->S_work == 'มาตรฐาน(standard)'){?>
							checked <?php }else{} ?>  > มาตรฐาน(standard)
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<b>ทรัพยากรบุคคล</b>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<input type="radio" name="S_humanresource" <?php if($rowservice->S_humanresource == 'การบริหารจัดการทรัพยากรบุคคล'){?>
							checked <?php }else{} ?>  > การบริหารจัดการทรัพยากรบุคคล
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_humanresource" <?php if($rowservice->S_humanresource == 'เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)'){?>
							checked <?php }else{} ?>  > เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)<br>
							<input type="radio" name="S_humanresource" <?php if($rowservice->S_humanresource == 'สัมมนาและฝึกอบรม(จัดนอกองค์กร)'){?>
							checked <?php }else{} ?>  > สัมมนาและฝึกอบรม(จัดนอกองค์กร)
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_humanresource" <?php if($rowservice->S_humanresource == 'ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก'){?>
							checked <?php }else{} ?>  > ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<b>เทคโนโลยี</b>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<input type="radio" name="S_technology" <?php if($rowservice->S_technology == 'พัฒนาเทคโนโลยี'){?>
							checked <?php }else{} ?>  > พัฒนาเทคโนโลยี
							<input type="radio" name="S_technology" <?php if($rowservice->S_technology == 'ทรัพย์สินทางปัญญา'){?>
							checked <?php }else{} ?>  > ทรัพย์สินทางปัญญา
							<input type="radio" name="S_technology" <?php if($rowservice->S_technology == 'การประหยัดพลังงาน'){?>
							checked <?php }else{} ?>  > การประหยัดพลังงาน
							<input type="radio" name="S_technology" <?php if($rowservice->S_technology == 'มาตรการด้านสิ่งแวดล้อม'){?>
							checked <?php }else{} ?>  >  มาตรการด้านสิ่งแวดล้อม<br>

						</tr>
						<tr>
							<td>
								อื่นๆโปรดระบุ...................<?php echo $rowservice->S_deteil_etc;?>............................................................................................................
							</td>
						</tr>
						<tr>
							<td colspan="3" align="left">
								<br>	<br>
								<b>เรื่องที่มาขอคำปรึกษาแนะนำ (สำหรับผู้มารับบริการ)</b>
							</td>
						</tr>
						<tr>
							<td colspan="3" align="left">
								<br>
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
								<input type="radio" name="S_solution" <?php if($rowservice->S_solution == 'ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย'){?>
								checked <?php }else{} ?>  > ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_solution" <?php if($rowservice->S_solution == 'แนะนำให้คำปรึกษาภายนอก'){?>
								checked <?php }else{} ?>  > แนะนำให้คำปรึกษาภายนอก<br>
								<input type="radio" name="S_solution" <?php if($rowservice->S_solution == 'แนะนำไปยังหน่วยอื่น'){?>
								checked <?php }else{} ?>  > แนะนำไปยังหน่วยอื่น
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_solution" <?php if($rowservice->S_solution == 'แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)'){?>
								checked <?php }else{} ?>  > แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)<br>
							</td>
						</tr>
						<tr>
							<td colspan="3" align="left">
								<br>	<br>
								............................<?php echo $rowservice->S_solution_detail;?>.............................................................................................................................................................................................<br>

							</td>
						</tr>
						<tr>

							<td colspan="3" align="right">
								<table>
									<tr>
										<br>
										<td>ชื่อผู้ให้การแนะนำ.............<?php echo $rowservice->S_solution_name;?>...........</td>
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