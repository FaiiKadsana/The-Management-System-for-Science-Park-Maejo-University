<body onclick="window.print()">

	<?php  foreach ($tbi as $rowtbi) { ?>
	<div class="row">
		<div class="col-sm-12">
			<center>
				<table width="100%">
					<tr>
						<td width="20%"></td>
						<td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม...<?php echo $rowtbi->Tbi_id3;?>...</td>
					</tr>
				</table>
			</center>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col-sm-12 ">
			<center>
				<table  width="70%" >
					<tr>
						<td width="15%" align="center"><img src='<?php echo base_url("asset/images/mju_logo.jpg") ?>' width='30%'height='5%' ></td>
						<td width="60%" align="center">
							<p>โครงการการบ่มเพาะผู้ประกอบการเทคโนโลยี  มหาวิทยาลัยแม่โจ้</p>
							<p>ภายใต้โครงการอุทยานวิทยาศาสตร์  มหาวิทยาลัยแม่โจ้</p>
						</td>
						<td width="25%" align="center"><img src='<?php echo base_url("asset/images/N.jpg") ?>' width='50%' height='15%'></td>
					</tr>
				</table>
			</center>


			<center>
				<table width="100%" >

					<tr>
						<td colspan="2" align="center" width="%">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ใบสมัครรับบริการบ่มเพาะผู้ประกอบการเทคโนโลยี
						</td>
						<td >

							<table border="1" width="60%" align="right">
								<tr>
									<td align="center">
										<br>
										<p>ติดรูปถ่ายหน้าตรง</p>
										<p>ขนาด1 นิ้ว</p>
										<br>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="left">
							วันที่......<?php echo $rowtbi->Tbi_date;?>......
						</td>
						<td align="right">เลขที่.....<?php echo $rowtbi->Tbi_id4;?>.....</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<u><b><p>ส่วนที่ 1&nbsp;&nbsp;&nbsp;&nbsp;	ข้อมูลส่วนบุคคล</p></b></u>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.1  <?php echo $rowtbi->Tbi_title;?>	ชื่อ...............<?php echo $rowtbi->Tbi_name1;?>.....................นามสกุล................<?php echo $rowtbi->Tbi_lastname;?>...................
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.2 เลขประจำตัวประชาชน.........................<?php echo $rowtbi->Tbi_code;?>.............................
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.3 เกิดวันที่...................<?php echo $rowtbi->Tbi_birthday;?>.....................................ปัจจุบันอายุ........<?php echo $rowtbi->Tbi_age;?>....... ปี
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.4 ชื้อชาติ
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_ethnicity" <?php if($rowtbi->Tbi_ethnicity == 'ไทย'){?>
							checked <?php }else{} ?> > ไทย  
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_ethnicity" <?php if($rowtbi->Tbi_ethnicity == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ ระบุ
							&nbsp;&nbsp;..........<?php echo $rowtbi->Tbi_ethnicity_etc;?>........... 
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.5 ศาสนา&nbsp;&nbsp;<input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'พุทธ'){?>
							checked <?php }else{} ?> > พุทธ 
							&nbsp;&nbsp;<input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'คริสต์'){?>
							checked <?php }else{} ?> > คริสต์  
							&nbsp;&nbsp;<input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'อิสลาม'){?>
							checked <?php }else{} ?> > อิสลาม  
							&nbsp;&nbsp;<input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'ฮินดู'){?>
							checked <?php }else{} ?> > ฮินดู   
							&nbsp;&nbsp;<input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ ระบุ
							&nbsp;&nbsp;..................<?php echo $rowtbi->Tbi_nationality_etc;?>.............................
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.6	ที่อยู่หรือสถานที่ติดต่อสะดวก (สำหรับจัดส่งเอกสารหรือข้อมูลข่าวสาร)
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							ที่อยู่................<?php echo $rowtbi->Tbi_address;?>....................<br>

						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.7 โทรศัพท์ที่ติดต่อสะดวก....<?php echo $rowtbi->Tbi_tell;?>....โทรสาร...<?php echo $rowtbi->Tbi_fax;?>...มือถือ....<?php echo $rowtbi->Tbi_phone;?>....<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail..........<?php echo $rowtbi->Tbi_mail;?>.............
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.8 ท่านสำเร็จการศึกษาระดับใด หรือกำลังศึกษาอยู่ในระดับใด
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_education" <?php if($rowtbi->Tbi_education == 'สำเร็จการศึกษา'){?>
							checked <?php }else{} ?> > สำเร็จการศึกษา เมื่อ ปี พ.ศ. ..........<?php echo $rowtbi->Tbi_year;?>..............
							สาขาวิชา.....<?php echo $rowtbi->Tbi_major;?>.....สถาบัน.....<?php echo $rowtbi->Tbi_university;?>......<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'มัธยมศึกษาตอนปลาย/ปวช.'){?>
							checked <?php }else{} ?> > มัธยมศึกษาตอนปลาย/ปวช. 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'อนุปริญญา/ปวส./ปวท.'){?>
							checked <?php }else{} ?> > อนุปริญญา/ปวส./ปวท.  
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาตรี'){?>
							checked <?php }else{} ?> > ปริญญาตรี	<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาโทหรือสูงกว่า'){?>
							checked <?php }else{} ?> > ปริญญาโทหรือสูงกว่า     
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาเอก'){?>
							checked <?php }else{} ?> > ปริญญาเอก  
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ ระบุ
							&nbsp;&nbsp;.......<?php echo $rowtbi->Tbi_degree_etc;?>........
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_education" <?php if($rowtbi->Tbi_education == 'กำลังศึกษา'){?>
							checked <?php }else{} ?> > กำลังศึกษา ในชั้นปีที่ ........<?php echo $rowtbi->Tbi_year;?>.......
							สาขาวิชา.........<?php echo $rowtbi->Tbi_major;?>...........สถาบัน........<?php echo $rowtbi->Tbi_university;?>.........<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'มัธยมศึกษาตอนปลาย/ปวช.'){?>
							checked <?php }else{} ?> > มัธยมศึกษาตอนปลาย/ปวช. 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'อนุปริญญา/ปวส./ปวท.'){?>
							checked <?php }else{} ?> > อนุปริญญา/ปวส./ปวท.  
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาตรี'){?>
							checked <?php }else{} ?> > ปริญญาตรี<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาโทหรือสูงกว่า'){?>
							checked <?php }else{} ?> > ปริญญาโทหรือสูงกว่า     
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาเอก'){?>
							checked <?php }else{} ?> > ปริญญาเอก  
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ  ระบุ
							&nbsp;&nbsp;.........<?php echo $rowtbi->Tbi_degree_etc;?>.............
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.9 ปัจจุบันท่านประกอบอาชีพใด 
						</td>
					</tr>
					<tr>
						<td  colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'เพิ่งสำเร็จการศึกษา'){?>
							checked <?php }else{} ?> > เพิ่งสำเร็จการศึกษา ไม่เกิน 1 ปี และยังหางานทำไม่ได้<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ไม่ได้ประกอบอาชีพใดๆ'){?>
							checked <?php }else{} ?> > ไม่ได้ประกอบอาชีพใดๆ (เช่น ว่างงาน ลาออกจากงาน ถูกเลิกจ้าง เกษียณอายุ ปิดกิจการ สำเร็จการศึกษาเกิน 1ปี และยังหางานทำไม่ได้) <br>
							&nbsp;&nbsp;&nbsp;&nbsp;มาเป็นเวลา......<?php echo $rowtbi->Tbi_notwork_time;?>.......ปี<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'พนักงานประจำ/ลูกจ้างประจำ'){?>
							checked <?php }else{} ?> >พนักงานประจำ/ลูกจ้างประจำ บริษัท.......<?php echo $rowtbi->Tbi_emp_company;?>.......<br>
							&nbsp;&nbsp;&nbsp;&nbsp;อยู่ในภาคธุรกิจใด(เลือกเพียงข้อเดียว)&nbsp;&nbsp;<input type="radio" name="Tbi_type_business" <?php if($rowtbi->Tbi_type_business == 'การผลิต'){?>
							checked <?php }else{} ?> > การผลิต&nbsp;&nbsp;<input type="radio" name="Tbi_type_business" <?php if($rowtbi->Tbi_type_business == 'การค้า'){?>
							checked <?php }else{} ?> > การค้า&nbsp;&nbsp;<input type="radio" name="Tbi_type_business" <?php if($rowtbi->Tbi_type_business == 'การบริการ'){?>
							checked <?php }else{} ?> > การบริการ<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ข้าราชการ หรือพนักงานรัฐวิสาหกิจ'){?>
							checked <?php }else{} ?> >ข้าราชการ หรือพนักงานรัฐวิสาหกิจ สังกัด......<?php echo $rowtbi->Tbi_official;?>......<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ลูกจ้างรายวัน หรือรับจ้างทั่วไป'){?>
							checked <?php }else{} ?> > ลูกจ้างรายวัน หรือรับจ้างทั่วไป<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ)'){?>
							checked <?php }else{} ?> > ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ) โปรดระบุ ...........<?php echo $rowtbi->Tbi_etc;?>......<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ประกอบธุรกิจส่วนตัว หรือ เป็นเจ้าของกิจการ'){?>
							checked <?php }else{} ?> > ประกอบธุรกิจส่วนตัว หรือ เป็นเจ้าของกิจการ<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ โปรดระบุ.......<?php echo $rowtbi->Tbi_etc;?>.......<br>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							1.10 ท่านมีประสบการณ์ในฐานะเจ้าของกิจการหรือเป็นทายาทธุรกิจหรือไม่
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_owners" <?php if($rowtbi->Tbi_owners == 'เป็นเจ้าของ'){?>
							checked <?php }else{} ?> > เป็นเจ้าของ หรือหุ้นส่วนผู้จัดการในธุรกิจอยู่แล้ว ตั้งแต่ปี พ.ศ.....<?php echo $rowtbi->Tbi_owners_year;?>.....<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_owners" <?php if($rowtbi->Tbi_owners == 'เป็นทายาทของเจ้าของธุรกิจ'){?>
							checked <?php }else{} ?> > เป็นทายาทของเจ้าของธุรกิจ และกำลังเตรียมรับสืบทอดธุรกิจ <br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_owners" <?php if($rowtbi->Tbi_owners == 'ไม่เคยเป็นเจ้าของธุรกิจ'){?>
							checked <?php }else{} ?> > ไม่เคยเป็นเจ้าของธุรกิจ และไม่ได้เป็นทายาทธุรกิจ<br>        
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<u><b><p>ส่วนที่ 2&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลเกี่ยวกับธุรกิจที่ต้องการจัดตั้ง</p></b></u>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							2.1 ท่านมีโครงการหรือมีแนวคิดเกี่ยวกับธุรกิจที่ต้องการลงทุนอยู่แล้วหรือไม่
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_concept" <?php if($rowtbi->B_concept == 'ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร'){?>
							checked <?php }else{} ?> > ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_concept" <?php if($rowtbi->B_concept == 'มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว'){?>
							checked <?php }else{} ?> > มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว<br>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							2.2 ท่านสนใจหรือกำลังจะลงทุนในธุรกิจประเภทใด           
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" <?php if($rowtbi->B_interest == 'การผลิต'){?>
							checked <?php }else{} ?> > การผลิต&nbsp;&nbsp;&nbsp;โปรดระบุประเภทสินค้าที่จะผลิต............<?php echo $rowtbi->B_manufacture;?>........<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" <?php if($rowtbi->B_interest == 'การบริการ'){?>
							checked <?php }else{} ?> > การบริการ&nbsp;&nbsp;&nbsp;โปรดระบุประเภทสินค้าที่จะผลิต..........<?php echo $rowtbi->B_service;?>........<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" <?php if($rowtbi->B_interest == 'การค้าส่ง'){?>
							checked <?php }else{} ?> > การค้าส่ง&nbsp;&nbsp;&nbsp;โปรดระบุประเภทสินค้าที่จะผลิต..........<?php echo $rowtbi->B_wholesale;?>........<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" <?php if($rowtbi->B_interest == 'การค้าปลีก'){?>
							checked <?php }else{} ?> > การค้าปลีก&nbsp;&nbsp;&nbsp;โปรดระบุประเภทสินค้าที่จะผลิต........<?php echo $rowtbi->B_retail;?>........
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							2.3 ท่านได้จัดทำแผนธุรกิจสำหรับโครงการที่จะลงทุนไว้แล้วหรือไม่           
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" <?php if($rowtbi->B_business_plan == 'มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว'){?>
							checked <?php }else{} ?> > มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" <?php if($rowtbi->B_business_plan == 'มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน'){?>
							checked <?php }else{} ?> > มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" <?php if($rowtbi->B_business_plan == 'กำลังจัดทำแผนธุรกิจ'){?>
							checked <?php }else{} ?> > กำลังจัดทำแผนธุรกิจ<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" <?php if($rowtbi->B_business_plan == 'ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ'){?>
							checked <?php }else{} ?> > ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							2.4 ท่านมีเป้าหมายที่จะเริ่มลงทุนในธุรกิจที่สนใจ เมื่อใด          
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_goal" <?php if($rowtbi->B_goal == 'ภายในเดือน'){?>
							checked <?php }else{} ?> > ภายในเดือน......<?php echo $rowtbi->B_goal_month;?>.......ปี......<?php echo $rowtbi->B_goal_year;?>.....<br>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_goal" <?php if($rowtbi->B_goal == 'ยังไม่มีเป้าหมายกำหนดเวลา'){?>
							checked <?php }else{} ?> >  ยังไม่มีเป้าหมายกำหนดเวลา

						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							2.5	ท่านคาดว่ากิจการที่จะเริ่มจัดตั้ง จะต้องใช้เงินลงทุนในปีแรก ประมาณ ........<?php echo $rowtbi->B_investment;?>........ บาท        
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							2.6	ท่านคาดว่าจะได้เงินลงทุนดังกล่าวจากแหล่งใดบ้าง (ระบุได้มากกว่าหนึ่งข้อ)         
						</td>
					</tr>
					<tr>
						<td  colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_resources" <?php if($rowtbi->B_resources == 'เงินส่วนตัวของท่าน'){?>
							checked <?php }else{} ?> > เงินส่วนตัวของท่าน ประมาณ ..........<?php echo $rowtbi->B_balance;?>....... บาท<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_resources" <?php if($rowtbi->B_resources == 'เงินจากหุ้นส่วน'){?>
							checked <?php }else{} ?> > เงินจากหุ้นส่วน หรือผู้ร่วมทุน ประมาณ.....<?php echo $rowtbi->B_balance;?>....... บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'ญาติ สมาชิกในครอบครัว'){?>
							checked <?php }else{} ?> > ญาติ สมาชิกในครอบครัว 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="B_source" <?php if($rowtbi->B_source == 'บุคคลอื่นที่ไม่ใช่ญาติ'){?>
							checked <?php }else{} ?> > บุคคลอื่นที่ไม่ใช่ญาติ 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'บริษัทหรือกิจการอื่น'){?>
							checked <?php }else{} ?> > บริษัทหรือกิจการอื่น&nbsp;&nbsp;ระบุ.....<?php echo $rowtbi->B_source_etc;?>.......<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_resources" <?php if($rowtbi->B_source == 'เงินกู้ยืม'){?>
							checked <?php }else{} ?> > เงินกู้ยืม ประมาณ ......<?php echo $rowtbi->B_balance;?>....... บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'ญาติ สมาชิกในครอบครัว'){?>
							checked <?php }else{} ?> > ญาติ สมาชิกในครอบครัว &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'บุคคลอื่นที่ไม่ใช่ญาติ'){?>
							checked <?php }else{} ?> > บุคคลอื่นที่ไม่ใช่ญาติ<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'ธนาคารของรัฐ'){?>
							checked <?php }else{} ?> > ธนาคารของรัฐ &nbsp;&nbsp;ระบุ........<?php echo $rowtbi->B_source_etc;?>.............
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'ธนาคารพาณิชย์ของเอกชน'){?>
							checked <?php }else{} ?> > ธนาคารพาณิชย์ของเอกชน&nbsp;&nbsp;ระบุ.........<?php echo $rowtbi->B_source_etc;?>..........<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'สถาบันการเงินที่ไม่ใช่ธนาคาร'){?>
							checked <?php }else{} ?> > สถาบันการเงินที่ไม่ใช่ธนาคาร (นันแบงค์ เช่น บริษัทเครดิต, ลิสซิ่ง) &nbsp;&nbsp;ระบุ........<?php echo $rowtbi->B_source_etc;?>..........
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							2.7	ท่านคาดว่าในปีแรกที่จัดตั้งธุรกิจ จะมีการจ้างงาน (จ่ายเงินเดือนประจำ และลงบัญชีเป็นต้นทุน) จำนวนเท่าใด        
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ตัวท่านเอง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'ไม่มี'){?>
							checked <?php }else{} ?> >ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'มี'){?>
							checked <?php }else{} ?> >มี<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- หุ้นส่วนที่ร่วมบริหารจัดการ/ดำเนินงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'ไม่มี'){?>
							checked <?php }else{} ?> > ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'มีประมาณ'){?>
							checked <?php }else{} ?> > มีประมาณ
							.....<?php echo $rowtbi->B_emp_sum;?>....คน<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงาน/ผู้ปฏิบัติงานที่เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'ไม่มี'){?>
							checked <?php }else{} ?> > ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'มีประมาณ'){?>
							checked <?php }else{} ?> > มีประมาณ
							.....<?php echo $rowtbi->B_emp_sum;?>....คน<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงานอื่นๆที่ไม่ได้เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'ไม่มี'){?>
							checked <?php }else{} ?> > ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'มีประมาณ'){?>
							checked <?php }else{} ?> > มีประมาณ
							.....<?php echo $rowtbi->B_emp_sum;?>....คน<br>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							<u><b><p>ส่วนที่3&nbsp;บริการที่ต้องการจากโครงการการบ่มเพาะผู้ประกอบการเทคโนโลยีมหาวิทยาลัยแม่โจ้</p></b></u>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							3.1 ท่านคาดว่าจะได้เงินลงทุนดังกล่าวจากแหล่งใดบ้าง (ระบุได้มากกว่าหนึ่งข้อ)         
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ'){?>
							checked <?php }else{} ?> > การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'การจัดทำแผนธุรกิจ'){?>
							checked <?php }else{} ?> > การจัดทำแผนธุรกิจ<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'การจัดทำ เว็บไซต์'){?>
							checked <?php }else{} ?> > การจัดทำ เว็บไซต์<br>    
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'การออกแบบและจัดทำโลโก้'){?>
							checked <?php }else{} ?> > การออกแบบและจัดทำโลโก้<br>    
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ ระบุ.......<?php echo $rowtbi->Tbi_investment_etc;?>........        
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							3.2 การอบรมให้ความรู้เบื้องต้น         
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'การตลาด'){?>
							checked <?php }else{} ?> > การตลาด<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'การบัญชี-การเงิน'){?>
							checked <?php }else{} ?> > การบัญชี-การเงิน<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'การผลิต'){?>
							checked <?php }else{} ?> > การผลิต<br>    
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'การทรัพยากรบุคคล'){?>
							checked <?php }else{} ?> > การทรัพยากรบุคคล<br>    
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ ระบุ......<?php echo $rowtbi->Tbi_train_etc;?>........       
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							3.3 การวิจัยและพัฒนาเทคโนโลยีและผลิตภัณฑ์        
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" <?php if($rowtbi->Tbi_research == 'การวิจัยและพัฒนาเทคโนโลยีการผลิต'){?>
							checked <?php }else{} ?> > การวิจัยและพัฒนาเทคโนโลยีการผลิต<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" <?php if($rowtbi->Tbi_research == 'การวิจัยและพัฒนาผลิตภัณฑ์'){?>
							checked <?php }else{} ?> > การวิจัยและพัฒนาผลิตภัณฑ์<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" <?php if($rowtbi->Tbi_research == 'การพัฒนาบรรจุภัณฑ์'){?>
							checked <?php }else{} ?> > การพัฒนาบรรจุภัณฑ์<br>    
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" <?php if($rowtbi->Tbi_research == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ ระบุ......<?php echo $rowtbi->Tbi_research_etc;?>......        
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							3.4	การให้บริการระบบโครงสร้างพื้นฐาน       
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_service" <?php if($rowtbi->Tbi_service == 'การใช้พื้นที่'){?>
							checked <?php }else{} ?> >  การใช้พื้นที่<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_service" <?php if($rowtbi->Tbi_service == 'การใช้เลขานุการกลาง'){?>
							checked <?php }else{} ?> >  การใช้เลขานุการกลาง<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_service" <?php if($rowtbi->Tbi_service == 'การบริการจัดทำบัญชี'){?>
							checked <?php }else{} ?> >  การบริการจัดทำบัญชี<br>    
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_service" <?php if($rowtbi->Tbi_service == 'อื่นๆ'){?>
							checked <?php }else{} ?> >  อื่นๆ ระบุ........<?php echo $rowtbi->Tbi_service_etc;?>........       
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							3.5 การให้คำปรึกษาแนะนำ      
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'แหล่งเงินทุน'){?>
							checked <?php }else{} ?> > แหล่งเงินทุน<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การร่วมลงทุน'){?>
							checked <?php }else{} ?> > การร่วมลงทุน<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล'){?>
							checked <?php }else{} ?> > การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การตลาด'){?>
							checked <?php }else{} ?> > การตั้งโรงงาน<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การตลาด'){?>
							checked <?php }else{} ?> > การตลาด<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การเงิน'){?>
							checked <?php }else{} ?> > การเงิน<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การบัญชี'){?>
							checked <?php }else{} ?> > การบัญชี<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การบริหารบุคคล'){?>
							checked <?php }else{} ?> > การบริหารบุคคล<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การบริหารการผลิต'){?>
							checked <?php }else{} ?> > การบริหารการผลิต<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'ภาษี'){?>
							checked <?php }else{} ?> > ภาษี<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'กฎหมาย'){?>
							checked <?php }else{} ?> > กฎหมาย<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การค้าระหว่างประเทศ'){?>
							checked <?php }else{} ?> > การค้าระหว่างประเทศ<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ ระบุ .........<?php echo $rowtbi->Tbi_counsel_etc;?>...........        
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							3.6 การขอใช้บริการห้องปฏิบัติการ ระบุ................<?php echo $rowtbi->Tbi_lab;?>.............      
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							3.7	การขอรับการรับรองมาตรฐาน       
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'อย'){?>
							checked <?php }else{} ?> >  อย<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'GMP'){?>
							checked <?php }else{} ?> >  GMP<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'HACCP'){?>
							checked <?php }else{} ?> >  HACCP<br>    
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'ISO'){?>
							checked <?php }else{} ?> >  ISO.....<?php echo $rowtbi->Tbi_certification_iso;?>.... <br>      
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'อื่นๆ'){?>
							checked <?php }else{} ?> >  อื่นๆ ระบุ.......<?php echo $rowtbi->Tbi_certification_etc;?>....... <br>    
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							3.8 การสนับสนุนกิจกรรมประชาสัมพันธ์และการส่งเสริมการจำหน่าย      
						</td>
					</tr>
					<tr>
						<td colspan="3" align="left">
							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_announce" <?php if($rowtbi->Tbi_announce == 'การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge'){?>
							checked <?php }else{} ?> > การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_announce" <?php if($rowtbi->Tbi_announce == 'การจัดนิทรรศการ ออกบูธ'){?>
							checked <?php }else{} ?> > การจัดนิทรรศการ ออกบูธ<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_announce" <?php if($rowtbi->Tbi_announce == 'อื่นๆ'){?>
							checked <?php }else{} ?> > อื่นๆ ระบุ........<?php echo $rowtbi->Tbi_announce_etc;?>.........<br>    
							<br><br><br><br><br><br></</td>
						</tr>
						<tr>
							<td colspan="3" align="left">
								3.9 การประสานงานและเชื่อมโยงเครือข่ายกับหน่วยงานสนับสนุนการประกอบธุรกิจ      
							</td>
						</tr>
						<tr>
							<td colspan="3" align="left">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'OIL'){?>
								checked <?php }else{} ?> > OIL<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'NIA'){?>
								checked <?php }else{} ?> > NIA<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'I03 CR (รัฐร่วมเอกชน)'){?>
								checked <?php }else{} ?> > I03 CR (รัฐร่วมเอกชน)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'IP Fund'){?>
								checked <?php }else{} ?> > IP Fund<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'อื่นๆ'){?>
								checked <?php }else{} ?> > อื่นๆ ระบุ.......<?php echo $rowtbi->Tbi_coordinate_etc;?>.........<br>    

							</td>

						</tr>
						<tr>
							<td colspan="3" align="left">
								3.10 การขอรับการสนับสนุนทางการเงิน      
							</td>
						</tr>
						<tr>
							<td colspan="3" align="left">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" <?php if($rowtbi->Tbi_funding == 'การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)'){?>
								checked <?php }else{} ?> > การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" <?php if($rowtbi->Tbi_funding == 'การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ'){?>
								checked <?php }else{} ?> > การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" <?php if($rowtbi->Tbi_funding == 'การส่งเสริมทางการตลาด'){?>
								checked <?php }else{} ?> > การส่งเสริมทางการตลาด<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" <?php if($rowtbi->Tbi_funding == 'อื่นๆ'){?>
								checked <?php }else{} ?> > อื่นๆ ระบุ........<?php echo $rowtbi->Tbi_funding_etc;?>.......<br>    
							</td>
						</tr>
						<tr>
							<td colspan="3" align="left">
								3.11 การใช้บริการเรื่องการจัดการทรัพย์สินทางปัญญา      
							</td>
						</tr>
						<tr>
							<td colspan="3" align="left">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การให้บริการข้อมูล'){?>
								checked <?php }else{} ?> > การให้บริการข้อมูล<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การสืบค้นข้อมูลทรัพย์สินทางปัญญา'){?>
								checked <?php }else{} ?> > การสืบค้นข้อมูลทรัพย์สินทางปัญญา<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การจดทะเบียนทรัพย์สินทางปัญญา'){?>
								checked <?php }else{} ?> > การจดทะเบียนทรัพย์สินทางปัญญา<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การอนุญาตใช้สิทธ์'){?>
								checked <?php }else{} ?> > การอนุญาตใช้สิทธ์<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การเจรจาใช้สิทธิ์'){?>
								checked <?php }else{} ?> > การเจรจาใช้สิทธิ์<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การประเมินมูลค่าทรัพย์สินทางปัญญา'){?>
								checked <?php }else{} ?> > การประเมินมูลค่าทรัพย์สินทางปัญญา<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'อื่นๆ'){?>
								checked <?php }else{} ?> > อื่นๆ ระบุ.......<?php echo $rowtbi->Tbi_asset_etc;?>........<br>    
							</td>
						</tr>
						<tr>
							<td colspan="3" align="center">
								<br>
								<table border="1" width="80%">
									<tr>
										<td colspan="3" align="center">
											<br>
											<p><b>คำรับรองของผู้สมัคร</b></p>
											<table>
												<tr>
													<td colspan="3" align="center">
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้ารับรองว่าหากข้าพเจ้าได้รับคัดเลือกเข้าร่วมโครงการบ่มเพาะวิสาหกิจ ในครั้งนี้ <br>
														ข้าพเจ้าจะเข้าร่วมกิจกรรมตามหลักสูตรหรือ ตามหลักเกณฑ์ที่กำหนดของสถาบันบ่มเพาะ<br>
														วิสาหกิจ มหาวิทยาลัยแม่โจ้ รวมทั้งจะร่วมมือให้ข้อมูลแก่ สถาบันบ่มเพาะวิสาหกิจ มหาวิทยาลัย<br>
														แม่โจ้  หรือที่ปรึกษาที่ได้รับมอบหมาย ในการติดตามผลสัมฤทธิ์จากการเข้าร่วมโครงการบ่ม<br>
														เพาะวิสาหกิจของข้าพเจ้า<br>
													</td>
												</tr>
											</table><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ลายมือชื่อ) .....................................<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ผู้สมัคร</b><br><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ตัวบรรจง) (....<?php echo $rowtbi->Tbi_name;?>...)<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่...<?php echo $rowtbi->Tbi_date_register;?>...<br> <br>
											<br>
											<br>
										</td>
									</tr>
								</table>
								<br><br><br><br><br><br><br>
							</td>
						</tr>

						<tr>
							<td colspan="3" align="center">
								<br>
								<br>
								<table border="1" width="80%">
									<tr>
										<td colspan="3" align="center">
											<br>
											<p><b>สำหรับเจ้าหน้าที่</b></p>
											<table>
												<tr>
													<td colspan="2" align="left">
														<p><b>หลักฐานประกอบการยื่นสมัคร</b></p>								
														<input type="checkbox" name="Tbi_evidence_register" <?php if($rowtbi->Tbi_evidence_register == 'ใบสมัคร'){?>
														checked <?php }else{} ?> > ใบสมัคร<br>
														<input type="checkbox" name="Tbi_evidence_register" <?php if($rowtbi->Tbi_evidence_register == 'สำเนาบัตรประชาชน  เลขประจำตัว'){?>
														checked <?php }else{} ?> > สำเนาบัตรประชาชน  เลขประจำตัว .....<?php echo $rowtbi->Tbi_code;?>...<br> 
														<input type="checkbox" name="Tbi_evidence_register" <?php if($rowtbi->Tbi_evidence_register == 'สำเนาหลักฐานการศึกษา วุฒิการศึกษา'){?>
														checked <?php }else{} ?> > สำเนาหลักฐานการศึกษา วุฒิการศึกษา.....<?php echo $rowtbi->Tbi_education;?>....<br> 
														<input type="checkbox" name="Tbi_evidence_register" <?php if($rowtbi->Tbi_evidence_register == 'เอกสารรับรองการทำงาน  ชื่อหน่วยงาน'){?>
														checked <?php }else{} ?> > เอกสารรับรองการทำงาน  ชื่อหน่วยงาน ....<?php echo $rowtbi->Tbi_department;?>....<br> 
													</td>
													<td align="left">
														<p><b>การนัดหมาย</b></p>
														<input type="radio" name="Tbi_appointment" <?php if($rowtbi->Tbi_appointment == 'นัดนำเสนอแนวคิดธุรกิจ'){?>
														checked <?php }else{} ?> > นัดนำเสนอแนวคิดธุรกิจ<br>
														วันที่...<?php echo $rowtbi->Tbi_date_concept;?>...<br> 
														<input type="radio" name="Tbi_appointment" <?php if($rowtbi->Tbi_appointment == 'นัดเข้าพบสถานประกอบการธุรกิจ'){?>
														checked <?php }else{} ?> > นัดเข้าพบสถานประกอบการธุรกิจ<br>
														วันที่....<?php echo $rowtbi->Tbi_date_meet;?>....<br> 

													</td>
												</tr>	
												<tr><td colspan="3" align="left">
													<input type="checkbox" name="Tbi_evidence_register" <?php if($rowtbi->Tbi_evidence_register == 'รูปถ่ายหน้าตรงขนาด 1 นิ้ว จำนวน 1 รูป'){?>
													checked <?php }else{} ?> > รูปถ่ายหน้าตรงขนาด 1 นิ้ว จำนวน 1 รูป<br> 
													<input type="checkbox" name="Tbi_evidence_register" <?php if($rowtbi->Tbi_evidence_register == 'Concept paper'){?>
													checked <?php }else{} ?> > Concept paper<br> 
													<input type="checkbox" name="Tbi_evidence_register" <?php if($rowtbi->Tbi_evidence_register == 'แผนธุรกิจ'){?>
													checked <?php }else{} ?> > แผนธุรกิจ<br> 
													<input type="checkbox" name="Tbi_evidence_register" <?php if($rowtbi->Tbi_evidence_register == 'ข้อมูล Idea/Innovation/Technology เพิ่มเติม'){?>
													checked <?php }else{} ?> > ข้อมูล Idea/Innovation/Technology เพิ่มเติม<br> <br>
												</td></tr>
											</table><br>
										</td>
									</tr>
								</table>

							</td>
						</tr>
						<tr>
							<td colspan="3" align="center">
								<br>
								<table border="1" width="80%">
									<tr>
										<td colspan="3" align="center">
											<br>
											<p><b>แนวปฏิบัติของการบ่มเพาะผู้ประกอบการ</b></p>
											<table>
												<tr>
													<td colspan="3" align="left">
														<input type="checkbox" name="Tbi_practicality" <?php if($rowtbi->Tbi_practicality == 'มีผลงานวิจัยสนับสนุน'){?>
													checked <?php }else{} ?> >  มีผลงานวิจัยสนับสนุน<br>
														<input type="checkbox" name="Tbi_practicality" <?php if($rowtbi->Tbi_practicality == 'เป็นไปได้และถ้าเป็นไปได้ควรมีต้นแบบ (Prototype) หรือผลิตภัณฑ์แล้ว'){?>
													checked <?php }else{} ?> >  เป็นไปได้และถ้าเป็นไปได้ควรมีต้นแบบ (Prototype) หรือผลิตภัณฑ์แล้ว<br>
														<input type="checkbox" name="Tbi_practicality" <?php if($rowtbi->Tbi_practicality == 'ผู้ประกอบการต้องมีความรู้  ความเข้าใจในเทคโนโลยีที่ใช้เป็นอย่างดี'){?>
													checked <?php }else{} ?> >  ผู้ประกอบการต้องมีความรู้  ความเข้าใจในเทคโนโลยีที่ใช้เป็นอย่างดี<br>
														<input type="checkbox" name="Tbi_practicality" <?php if($rowtbi->Tbi_practicality == 'มีแนวคิดในการปรับปรุงเทคโนโลยีเพื่อให้เกิดผลิตภัณฑ์ที่หลากหลายตามความต้องการของลูกค้า'){?>
													checked <?php }else{} ?> >  มีแนวคิดในการปรับปรุงเทคโนโลยีเพื่อให้เกิดผลิตภัณฑ์ที่หลากหลายตามความต้องการของลูกค้า<br>
														<input type="checkbox" name="Tbi_practicality" <?php if($rowtbi->Tbi_practicality == 'มีทุนทรัพย์ในการเริ่มต้นธุรกิจ'){?>
													checked <?php }else{} ?> >  มีทุนทรัพย์ในการเริ่มต้นธุรกิจ<br>
													</td>
												</tr>
											</table><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ลายมือชื่อ) ...................................<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ผู้ตรวจใบสมัคร</b><br><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ตัวบรรจง) (......<?php echo $rowtbi->Tbi_inspector;?>......)<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่....<?php echo $rowtbi->Tbi_date_inspect;?>....<br> <br>
										</td>
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