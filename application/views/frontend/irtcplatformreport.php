<body onclick="window.print()">

<?php  foreach ($irct as $row) { ?>
<div class="row">
	<div class="col-sm-12">
		<center>
			<table width="55%">
				<tr>
					<td width="20%"></td>
					<td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม...........<?php echo $row->Co_id;?>......</td>
				</tr>
			</table>
		</center>
	</div>

	<div class="row fromfont">
		<div class="col-sm-12">


			<center>
				<p>(Industrial Research and Technology Capacity Development Program: IRTC)</p>
				<p>ข้อเสนอโครงการฉบับย่อ</p>
				<p>เพื่อขอรับการสนับสนุนตามกลไกอุทยานวิทยาศาสตร์ภาคเหนือ</p>
				<p>ปีงบประมาณ 2558</p>
				<br>
				<table  width="90%" border="1">
					<tr>
						<td colspan="2">
							&nbsp;&nbsp;&nbsp;&nbsp;วันที่........<?php echo $row->Co_date;?>..........
						</td>
					</tr>
					<tr>
						<td width="30%">1.ชื่อโครงการ</td>
						<td >
							<?php echo $row->Co_name_pro;?>
						</td>
					</tr>
					<tr>
						<td width="30%">2.กลุ่มอุตสาหกรรม</td>
						<td >
							<input type="radio" name="Co_secter" <?php if($row->Co_secter == 'Focus (ข้าวทั้งห่วงโซ่)'){?>
							checked <?php }else{} ?>  > Focus (ข้าวทั้งห่วงโซ่)<input type="radio" name="Co_secter" <?php if($row->Co_secter == '4 Focus Industries'){?>
							checked <?php }else{} ?>  > 4 Focus Industries<input type="radio" name="Co_secter" <?php if($row->Co_secter == 'Others'){?>
							checked <?php }else{} ?>  > Others ระบุ...<?php echo $row->Co_secter_etc;?>...
						</td>
					</tr>
					<tr>
						<td width="30%">3.ผู้รับผิดชอบโครงการและความเชี่ยวชาญ</td>
						<td >
							<br>
							ชื่อผู้รับผิดชอบ: <?php echo $row->Rp_name;?>&nbsp;&nbsp;  ตำแหน่ง: <?php echo $row->Rp_position;?> <br>
							หน่วยงานรับผิดชอบ: <?php echo $row->Rp_institute;?>&nbsp;&nbsp;  เบอร์โทรศัพท์: <?php echo $row->Rp_phone;?> <br>
							แฟกซ์: <?php echo $row->Rp_fax;?>&nbsp;&nbsp;  อีเมล์: <?php echo $row->Rp_mail;?> <br>
							ที่อยู่: <?php echo $row->Rp_address;?><br><br>
						</td>
					</tr>
					<tr>
						<td width="30%">4.ที่มาของโครงการ</td>
						<td >
							<?php echo $row->Co_origin;?>
						</td>
					</tr>
					<tr>
						<td width="30%">5.วัตถุประสงค์</td>
						<td >
							<?php echo $row->Co_objective;?>
						</td>
					</tr>
					<tr>
						<td width="30%">6.รายละเอียดผู้ประกอบการ</td>
						<td ><br>
							ชื่อกิจการ: <?php echo $row->C_name;?><br>
							ประเภทนิติบุคคล: <?php echo $row->C_company_type;?>&nbsp;&nbsp;ทุนจดทะเบียน: <?php echo $row->C_investment;?> <br>
							จำนวนพนักงาน: <?php echo $row->Co_no_emp_total;?>&nbsp;&nbsp;ผลิตภัณฑ์หลักขององค์กร: <?php echo $row->Co_main_pro1;?> <br>
							ที่อยู่: <?php echo $row->C_address;?> <br>
							ผู้ติดต่อประสานงาน: <?php echo $row->P_title;?>&nbsp;<?php echo $row->P_name;?>&nbsp;&nbsp;<?php echo $row->P_lastname;?>&nbsp;&nbsp;เบอร์ผู้ติดต่อประสานงาน: <?php echo $row->P_phone;?><br><br>
						</td>
					</tr>
					<tr>
						<td width="30%">7.เหตุผลที่สนใจร่วมงานวิจัยและพัฒนาสำหรับโครงการนี้</td>
						<td >
							<?php echo $row->Co_reason;?>
						</td>
					</tr>
					<tr>
						<td width="30%">8.โครงการ/งานวิจัยที่เคยทำร่วมกับผู้เชี่ยวชาญ</td>
						<td >
							<?php echo $row->Co_pro_together;?>
						</td>
					</tr>
					<tr>
						<td width="30%">9.การใช้ผลงานวิจัยเดิมที่นำมาต่อยอดเพื่อพัฒนาสู่เชิงพาณิชย์</td>
						<td >
							<?php echo $row->Co_dem;?>
						</td>
					</tr>
					<tr>
						<td width="30%">10.รายละเอียดห้องปฏิบัติการ และนักวิจัย</td>
						<td >
							<?php echo $row->Co_lab_re;?>
						</td>
					</tr>
				</table>
				<br><br><br><br><br><br><br>
				<table width="90%" border="1">
					<tr>
						<td width="30%">11.แผนการดำเนินงาน</td>
						<td >

							<center>
								
								<table border="1" width="100%">
									<tr>
										<th rowspan="2" align="center">กิจกรรม</th>
										<th colspan="6" align="center">เดือนที่</th>
									</tr>
									<tr>
										<td align="center">1</td>
										<td align="center">2</td>
										<td align="center">3</td>
										<td align="center">4</td>
										<td align="center">5</td>
										<td align="center">6</td>
									</tr>
									<tr>
										<td width="40%" align="center"><?php echo $row->Pl_activity1;?></td>
										<td align="center"><?php echo $row->Pl_month1;?></td>
										<td align="center"><?php echo $row->Pl_month2;?></td>
										<td align="center"><?php echo $row->Pl_month3;?></td>
										<td align="center"><?php echo $row->Pl_month4;?></td>
										<td align="center"><?php echo $row->Pl_month5;?></td>
										<td align="center"><?php echo $row->Pl_month6;?></td>
									</tr>
									<tr>
										<td width="40%" align="center"><?php echo $row->Pl_activity2;?></td>
										<td align="center"><?php echo $row->Pl_month1;?></td>
										<td align="center"><?php echo $row->Pl_month2;?></td>
										<td align="center"><?php echo $row->Pl_month3;?></td>
										<td align="center"><?php echo $row->Pl_month4;?></td>
										<td align="center"><?php echo $row->Pl_month5;?></td>
										<td align="center"><?php echo $row->Pl_month6;?></td>
									</tr>
									<tr>
										<td width="40%" align="center"><?php echo $row->Pl_activity3;?></td>
										<td align="center"><?php echo $row->Pl_month1;?></td>
										<td align="center"><?php echo $row->Pl_month2;?></td>
										<td align="center"><?php echo $row->Pl_month3;?></td>
										<td align="center"><?php echo $row->Pl_month4;?></td>
										<td align="center"><?php echo $row->Pl_month5;?></td>
										<td align="center"><?php echo $row->Pl_month6;?></td>
									</tr>
									<tr>
										<td width="40%" align="center"><?php echo $row->Pl_activity4;?></td>
										<td align="center"><?php echo $row->Pl_month1;?></td>
										<td align="center"><?php echo $row->Pl_month2;?></td>
										<td align="center"><?php echo $row->Pl_month3;?></td>
										<td align="center"><?php echo $row->Pl_month4;?></td>
										<td align="center"><?php echo $row->Pl_month5;?></td>
										<td align="center"><?php echo $row->Pl_month6;?></td>
									</tr>
									<tr>
										<td width="40%" align="center"><?php echo $row->Pl_activity5;?></td>
										<td align="center"><?php echo $row->Pl_month1;?></td>
										<td align="center"><?php echo $row->Pl_month2;?></td>
										<td align="center"><?php echo $row->Pl_month3;?></td>
										<td align="center"><?php echo $row->Pl_month4;?></td>
										<td align="center"><?php echo $row->Pl_month5;?></td>
										<td align="center"><?php echo $row->Pl_month6;?></td>
									</tr>
									<tr>
										<td width="40%" align="center"><?php echo $row->Pl_activity6;?></td>
										<td align="center"><?php echo $row->Pl_month1;?></td>
										<td align="center"><?php echo $row->Pl_month2;?></td>
										<td align="center"><?php echo $row->Pl_month3;?></td>
										<td align="center"><?php echo $row->Pl_month4;?></td>
										<td align="center"><?php echo $row->Pl_month5;?></td>
										<td align="center"><?php echo $row->Pl_month6;?></td>
									</tr>
								</table>
								
							</center>

						</td>
					</tr>
					<tr>
						<td width="30%">12.ผลที่คาดว่าจะได้รับ</td>
						<td > 
							<?php echo $row->Co_result;?>
						</td>
					</tr>


					<tr>
						<td colspan="2" width="30%" >13.งบประมาณโครงการ 
							<br>
							<table  border="1" width="100%">
								<tr>
									<th rowspan="2" align="center" width="20%">กิจกรรม</th>
									<th rowspan="2"  align="center" width="30%">ค่าใช้จ่ายสนับสนุนโดยอุทยานฯ(ไม่เกิน 50%)</th>
									<th   align="center"width="30%">ค่าใช้จ่ายสนับสนุนโดยเอกชน(มากกว่าหรือเท่ากับ 50%)</th>
									<th rowspan="2"  align="center">รวม(บาท)</th>
								</tr>
								<tr>
									<td>
										<table  border="1" width="100%">
											<tr>
												<th width="50%">
													IN-CASH<br>
													(ไม่ต่ำกว่า50%)
												</th>
												<th>
													IN-KIND<br>
													(ไม่ต่ำกว่า50%)
												</th>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td width="20%">1.งบดำเนินการ<br>&nbsp;1.1ค่าตอบแทน<br>&nbsp;1.2ค่าจ้าง<br>&nbsp;1.3ค่าใช้จ่ายในการดำเนินงาน<br>&nbsp;1.4ค่าวัสดุ<br>&nbsp;1.5ค่าใช้สอย<br>&nbsp;1.6ค่าบริหารจัดการ</td>										
									<td width="20%">1.) <?php echo $row->Bg_action1;?><br>
										1.1) <?php echo $row->Bg_reward1;?><br>
										1.2)<?php echo $row->Bg_wage1;?><br>
										1.3) <?php echo $row->Bg_expenses1;?><br><br>
										1.4) <?php echo $row->Bg_material1;?><br>
										1.5) <?php echo $row->Bg_living1;?><br>
										1.6) <?php echo $row->Bg_management1;?>

									</td>
									<td width="40%" align="left">
										1.) <?php echo $row->Bg_action2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.) <?php echo $row->Bg_action3;?>000<br> 
										1.1) <?php echo $row->Bg_reward2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1) <?php echo $row->Bg_reward3;?><br>
										1.2) <?php echo $row->Bg_wage2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2) <?php echo $row->Bg_wage3;?><br>
										1.3) <?php echo $row->Bg_expenses2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.3) <?php echo $row->Bg_expenses3;?><br><br>
										1.4) <?php echo $row->Bg_material2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.4) <?php echo $row->Bg_material3;?><br>
										1.5) <?php echo $row->Bg_living2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.5) <?php echo $row->Bg_living3;?><br>
										1.6) <?php echo $row->Bg_management2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.6) <?php echo $row->Bg_management3;?>
									</td>
									<td>
										1.) <?php echo $row->Bg_action4;?><br>
										1.1) <?php echo $row->Bg_reward4;?><br>
										1.2) <?php echo $row->Bg_wage4;?><br>
										1.3) <?php echo $row->Bg_expenses4;?><br><br>
										1.4) <?php echo $row->Bg_material4;?><br>
										1.5) <?php echo $row->Bg_living4;?><br>
										1.6) <?php echo $row->Bg_management4;?>
									</td>
								</tr>
								<tr>
									<td width="20%">รวมงบดำเนินการ</td>
									<td width="30%"><?php echo $row->Bg_total1;?></td>
									<td width="30%" align="center"><?php echo $row->Bg_total2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Bg_total3;?></td>
									<td><?php echo $row->Bg_total4;?></td>
								</tr>
								<tr>
									<td width="20%">2.งบลงทุน<br>&nbsp;2.1ค่าครุภัณฑ์<br>&nbsp;2.2 ค่าก่อสร้าง (อาทิเช่น อาคาร สิ่งปลูกสร้าง สาธารณูปโภค)</td>										
									<td width="30%">2.)<?php echo $row->Bg_in_invest1;?><br>
										2.1)<?php echo $row->Bg_in_durable1;?><br>
										2.2) <?php echo $row->Bg_in_building1;?><br>
									</td>
									<td width="30%" align="left">
										2.) <?php echo $row->Bg_in_invest2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.) <?php echo $row->Bg_in_invest3;?><br> 
										2.1) <?php echo $row->Bg_in_durable2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1) <?php echo $row->Bg_in_durable3;?><br>
										2.2) <?php echo $row->Bg_in_building2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2) <?php echo $row->Bg_in_building3;?><br>
									</td>
									<td>
										2.) <?php echo $row->Bg_in_invest4;?><br>
										2.1) <?php echo $row->Bg_in_durable4;?><br>
										2.2) <?php echo $row->Bg_in_building4;?><br>
									</td>
								</tr>
								<tr>
									<td width="20%">รวมงบลงทุน</td>
									<td width="30%"><?php echo $row->Bg_in_total1;?></td>
									<td width="30%" align="center"><?php echo $row->Bg_in_total2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Bg_in_total3;?></td>
									<td><?php echo $row->Bg_in_total4;?></td>
								</tr>
								<tr>
									<th width="20%">รวมงบประมาณทั้งหมด</th>
									<th width="30%"><?php echo $row->Bg_in_sum1;?></th>
									<th width="30%" align="center"><?php echo $row->Bg_in_sum2;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Bg_in_sum3;?></th>
									<th><?php echo $row->Bg_in_sum4;?></th>
								</tr>
							</table>
							
							<p style="color:red;">*หมายเหตุ  สัดส่วนการสนับสนุนงบประมาณ ภาคเอกชนไม่ต่ำกว่า 50% อุทยานวิทยาศาสตร์ภาคเหนือไม่เกิน 50%</p>
							
						</td>	
					</tr>
				</table>
				<br><br><br><br><br><br>
				<table width="90%" border="1">
					<tr>
						<td colspan="2"   width="30%">14.ลายเซ็น

							<center>
								<table  width="80%">
									<tr>
										<br><br><br>
										<td width="40%"> 
											<p>ผู้รับผิดชอบโครงการ</p>
											<p>&nbsp;&nbsp; (มหาวิทยาลัย)</p>
										</td>
										<td width="40%"> 
											<p>ผู้ประกอบการ (เอกชน)</p>
											<p>(ประทับตราบริษัท ถ้ามี)</p>
										</td>
									</tr>
								</table>
							</center>

						</td>
					</tr>
				</table>
			</center>	

		</div>
	</div>
<?php } ?>
</body>