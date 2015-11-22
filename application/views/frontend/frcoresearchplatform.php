<?php $random=random_string('alnum',6); ?>
<!-- Section -->
<div id="section_header">
	<h2>Co-Research Platform</h2>
</div>

<form method="post" action="<?php echo $action; ?>" enctype="multipart/form-data">

<div class="row fromfont">
	<div class="col-sm-12">
		
		<div class="row">
			<div class="col-sm-12">
				<center>
					<table width="55%">
						<tr>
							<td width="30%"></td>
							<td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม: <label type="" size="20" name="Co_id"><?php echo  $random; ?><input type="hidden" name="random" value="<?php echo  $random; ?>"></td>
						</tr>
					</table>
				</center>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12 ">

				<center>
					<p>Collaborative Research Project</p>
					<p>ข้อเสนอโครงการฉบับย่อ</p>
					<p>เพื่อขอรับการสนับสนุนตามกลไกอุทยานวิทยาศาสตร์ภาคเหนือ</p>
					<p>ปีงบประมาณ 2558</p>
					<br>
					<table  width="60%" >
						<tr>
							<td width="30%" colspan="2"> 
								วันที่:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="date"  name="Co_date" ><b style="color:red;"> *</b>
							</td>
						</tr>
						<tr>
							<td width="30%">1.ชื่อโครงการ</td>
							<td >
								<textarea type="text" cols="75" name="Co_name_pro" rows="3" placeholder="(เป็นโครงการวิจัยและพัฒนาที่ภาคเอกชนพร้อมร่วมมือในการวิจัยและพัฒนาร่วมกัน)"></textarea><b style="color:red;"> *</b>
							</td>
						</tr>
						<tr>
							<td width="30%">2.กลุ่มอุตสาหกรรม </td>
							<td >
								<input type="radio"  name="Co_secter" value="Focus (ข้าวทั้งห่วงโซ่)"> Focus (ข้าวทั้งห่วงโซ่)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="Co_secter" value="4 Focus Industries"> 4 Focus Industries&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="Co_secter" value="Others"> Others ระบุ <input type="text" name="" size="15"><b style="color:red;"> *</b> 
							</td>
						</tr>
						<tr>
							<td width="30%">3.ผู้รับผิดชอบโครงการและความเชี่ยวชาญ </td>
							<td >
								<br>
								ชื่อผู้รับผิดชอบ: <input type="text" name="Rp_name" size="23"><b style="color:red;"> *</b>&nbsp;&nbsp;ตำแหน่ง: <input type="text" name="Rp_position" size="23"><b style="color:red;"> *</b> 
								หน่วยงานรับผิดชอบ: <input type="tel" name="Rp_institute" size="20"><b style="color:red;"> *</b>  เบอร์โทรศัพท์: <input type="tel" name="Rp_phone" size="20"><b style="color:red;"> *</b> <br>
								แฟกซ์: <input type="email" name="Rp_phone" size="30"> อีเมล์: <input type="email" name="Rp_mail" size="30"> <br>
								ที่อยู่: <textarea name="Rp_address" cols="80" rows="3" placeholder=" ที่อยู่" ></textarea><br><br>
							</td>
						</tr>
						<tr>
							<td width="30%">4.ที่มาของโครงการ</td>
							<td >
								<textarea name="Co_origin" cols="78" rows="3" ></textarea><b style="color:red;"> *</b>
							</td>
						</tr>
						<tr>
							<td width="30%">5.วัตถุประสงค์</td>
							<td >
								<textarea name="Co_objective" cols="78" rows="3" ></textarea><b style="color:red;"> *</b>
							</td>
						</tr>
						<tr>
							<td width="30%">6.รายละเอียดผู้ประกอบการ</td>
							<td >
								<br>
								ประเภทนิติบุคคล: <input type="text" name="C_company_type" size="22"><b style="color:red;"> *</b>&nbsp;&nbsp; ทุนจดทะเบียน: <input type="text" name="C_investment" size="20"> <br>
								จำนวนพนักงาน: <input type="text" name="S_no_emp_total" size="18"> ผลิตภัณฑ์หลักขององค์กร: <input type="tel" name="S_main_pro1" size="20"> <br>
								ที่อยู่: <textarea name="C_address" cols="80" rows="3" placeholder=" ที่อยู่" ></textarea> <br>
								ผู้ติดต่อประสานงาน: <input type="text" name="P_name" size="16"><b style="color:red;"> *</b> เบอร์ผู้ติดต่อประสานงาน: <input type="tel" name="P_phone" size="16"><b style="color:red;"> *</b> <br><br><br>
							</td>
						</tr>
						<tr>
							<td width="30%">7.เหตุผลที่สนใจร่วมงานวิจัยและพัฒนาสำหรับโครงการนี้</td>
							<td >
								<textarea name="Co_reason" cols="80" rows="3" ></textarea>
							</td>
						</tr>
						<tr>
							<td width="30%">8.โครงการ/งานวิจัยที่เคยทำร่วมกับผู้เชี่ยวชาญ</td>
							<td >
								<textarea name="Co_pro_together" cols="80" rows="3" ></textarea>
							</td>
						</tr>
						<tr>
							<td width="30%">9.การใช้ผลงานวิจัยเดิมที่นำมาต่อยอดเพื่อพัฒนาสู่เชิงพาณิชย์</td>
							<td >
								<textarea name="Co_dem" cols="80" rows="3" ></textarea>
							</td>
						</tr>
						<tr>
							<td width="30%">10.รายละเอียดห้องปฏิบัติการ และนักวิจัย</td>
							<td >
								<textarea name="Co_lab_re" cols="80" rows="3" ></textarea>
							</td>
						</tr>
						<tr>
							<td width="30%">11.แผนการดำเนินงาน</td>
							<td >

								<center>
									<br>
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
											<td width="40%" align="center"><input type="text" size="30" name="Pl_activity1"></td>
											<td align="center"><input type="checkbox" value="1" name="Pl_month1"></td>
											<td align="center"><input type="checkbox" value="2" name="Pl_month2"></td>
											<td align="center"><input type="checkbox" value="3" name="Pl_month3"></td>
											<td align="center"><input type="checkbox" value="4" name="Pl_month4"></td>
											<td align="center"><input type="checkbox" value="5" name="Pl_month5"></td>
											<td align="center"><input type="checkbox" value="6" name="Pl_month6"></td>
										</tr>
										<tr>
											<td width="40%" align="center"><input type="text" size="30" name="Pl_activity2"></td>
											<td align="center"><input type="checkbox" value="1" name="Pl_month1"></td>
											<td align="center"><input type="checkbox" value="2" name="Pl_month2"></td>
											<td align="center"><input type="checkbox" value="3" name="Pl_month3"></td>
											<td align="center"><input type="checkbox" value="4" name="Pl_month4"></td>
											<td align="center"><input type="checkbox" value="5" name="Pl_month5"></td>
											<td align="center"><input type="checkbox" value="6" name="Pl_month6"></td>
										</tr>
										<tr>
											<td width="40%" align="center"><input type="text" size="30" name="Pl_activity3"></td>
											<td align="center"><input type="checkbox" value="1" name="Pl_month1"></td>
											<td align="center"><input type="checkbox" value="2" name="Pl_month2"></td>
											<td align="center"><input type="checkbox" value="3" name="Pl_month3"></td>
											<td align="center"><input type="checkbox" value="4" name="Pl_month4"></td>
											<td align="center"><input type="checkbox" value="5" name="Pl_month5"></td>
											<td align="center"><input type="checkbox" value="6" name="Pl_month6"></td>
										</tr>
										<tr>
											<td width="40%" align="center"><input type="text" size="30" name="Pl_activity4"></td>
											<td align="center"><input type="checkbox" value="1" name="Pl_month1"></td>
											<td align="center"><input type="checkbox" value="2" name="Pl_month2"></td>
											<td align="center"><input type="checkbox" value="3" name="Pl_month3"></td>
											<td align="center"><input type="checkbox" value="4" name="Pl_month4"></td>
											<td align="center"><input type="checkbox" value="5" name="Pl_month5"></td>
											<td align="center"><input type="checkbox" value="6" name="Pl_month6"></td>
										</tr>
										<tr>
											<td width="40%" align="center"><input type="text" size="30" name="Pl_activity5"></td>
											<td align="center"><input type="checkbox" value="1" name="Pl_month1"></td>
											<td align="center"><input type="checkbox" value="2" name="Pl_month2"></td>
											<td align="center"><input type="checkbox" value="3" name="Pl_month3"></td>
											<td align="center"><input type="checkbox" value="4" name="Pl_month4"></td>
											<td align="center"><input type="checkbox" value="5" name="Pl_month5"></td>
											<td align="center"><input type="checkbox" value="6" name="Pl_month6"></td>
										</tr>
										<tr>
											<td width="40%" align="center"><input type="text" size="30" name="Pl_activity6"></td>
											<td align="center"><input type="checkbox" value="1" name="Pl_month1"></td>
											<td align="center"><input type="checkbox" value="2" name="Pl_month2"></td>
											<td align="center"><input type="checkbox" value="3" name="Pl_month3"></td>
											<td align="center"><input type="checkbox" value="4" name="Pl_month4"></td>
											<td align="center"><input type="checkbox" value="5" name="Pl_month5"></td>
											<td align="center"><input type="checkbox" value="6" name="Pl_month6"></td>
										</tr>
									</table>
									<br>
								</center>

							</td>
						</tr>
						<tr>
							<td width="30%">12.ผลที่คาดว่าจะได้รับ</td>
							<td > 
								<textarea name="Co_result" cols="80" rows="3" placeholder="•รายได้เพิ่มขึ้นของผู้ประกอบการในภาคเอกชนที่เป็นผลมาจากโครงการ xxx บาท  • มูลค่าการลงทุนในการวิจัยและพัฒนา (R&D) ของภาคเอกชนที่เพิ่มขึ้น xxx บาท  • จำนวนการจ้างงานวิจัยที่อยู่ในภาคเอกชนเพิ่มขึ้น xxx คน  •..." ></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" width="30%" >13.งบประมาณโครงการ <b style="color:red;"> *</b>
								<br><br>
								<table  border="1" width="100%">
									<tr>
										<th rowspan="2" align="center" width="20%">กิจกรรม</th>
										<th rowspan="2"  align="center" width="30%">ค่าใช้จ่ายสนับสนุนโดยอุทยานฯ(ไม่เกิน 40%)</th>
										<th   align="center"width="30%">ค่าใช้จ่ายสนับสนุนโดยเอกชน(มากกว่าหรือเท่ากับ 60%)</th>
										<th rowspan="2"  align="center">รวม(บาท)</th>
									</tr>
									<tr>
										<td>
											<table  border="1" width="100%">
												<tr>
													<th width="50%">
														IN-CASH
													</th>
													<th>
														IN-KIND
													</th>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td width="20%">1.งบดำเนินการ<br>&nbsp;1.1ค่าตอบแทน<br>&nbsp;1.2ค่าจ้าง<br>&nbsp;1.3ค่าใช้จ่ายในการดำเนินงาน<br>&nbsp;1.4ค่าวัสดุ<br>&nbsp;1.5ค่าใช้สอย<br>&nbsp;1.6ค่าบริหารจัดการ</td>										
										<td width="30%"><input type="text" size="20" name="Bg_action1" placeholder="1"><br>
											<input type="text" size="20" name="Bg_reward1" placeholder="1.1"><br>
											<input type="text" size="20" name="Bg_wage1" placeholder="1.2"><br>
											<input type="text" size="20" name="Bg_expenses1" placeholder="1.3"><br>
											<input type="text" size="20" name="Bg_material1" placeholder="1.4"><br>
											<input type="text" size="20" name="Bg_living1" placeholder="1.5"><br>
											<input type="text" size="20" name="Bg_management1" placeholder="1.6"><br>
										</td>
										<td width="30%">
											<input type="text" size="10" name="Bg_action2" placeholder="1">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_action3" placeholder="1"><br>
											<input type="text" size="10" name="Bg_reward2" placeholder="1.1">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_reward3" placeholder="1.1"><br>
											<input type="text" size="10" name="Bg_wage2" placeholder="1.2">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_wage3" placeholder="1.2"><br>
											<input type="text" size="10" name="Bg_expenses2" placeholder="1.3">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_expenses3" placeholder="1.3"><br>
											<input type="text" size="10" name="Bg_material2" placeholder="1.4">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_material3" placeholder="1.4"><br>
											<input type="text" size="10" name="Bg_living2" placeholder="1.5">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_living3" placeholder="1.5"><br>
											<input type="text" size="10" name="Bg_management2" placeholder="1.6">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_management3" placeholder="1.6"><br>
										</td>
										<td>
											<input type="text" size="20" name="Bg_action4" placeholder="1"><br>
											<input type="text" size="20" name="Bg_reward4" placeholder="1.1"><br>
											<input type="text" size="20" name="Bg_wage4" placeholder="1.2"><br>
											<input type="text" size="20" name="Bg_expenses4" placeholder="1.3"><br>
											<input type="text" size="20" name="Bg_material4" placeholder="1.4"><br>
											<input type="text" size="20" name="Bg_living4" placeholder="1.5"><br>
											<input type="text" size="20" name="Bg_management4" placeholder="1.6"><br>
										</td>
									</tr>
									<tr>
										<td width="20%">รวมงบดำเนินการ</td>
										<td width="30%"><input type="text" size="20" name="Bg_total1" ></td>
										<td width="30%"><input type="text" size="10" name="Bg_total2" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_total3" ><br></td>
										<td><input type="text" size="20" name="Bg_total4" ></td>
									</tr>
									<tr>
										<td width="20%">2.งบลงทุน<br>&nbsp;2.1ค่าครุภัณฑ์<br>&nbsp;2.2 ค่าก่อสร้าง (อาทิเช่น อาคาร สิ่งปลูกสร้าง สาธารณูปโภค)</td>										
										<td width="30%"><input type="text" size="20" name="Bg_in_invest1" placeholder="2"><br>
											<input type="text" size="20" name="Bg_in_durable1" placeholder="2.1"><br>
											<input type="text" size="20" name="Bg_in_building1" placeholder="2.2"><br>
										</td>
										<td width="30%">
											<input type="text" size="10" name="Bg_in_invest2" placeholder="2">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_invest3" placeholder="2"><br>
											<input type="text" size="10" name="Bg_in_durable2" placeholder="2.1">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_durable3" placeholder="2.1"><br>
											<input type="text" size="10" name="Bg_in_building2" placeholder="2.2">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_building3" placeholder="2.2"><br>
										</td>
										<td>
											<input type="text" size="20" name="Bg_in_invest4" placeholder="2"><br>
											<input type="text" size="20" name="Bg_in_durable4" placeholder="2.1"><br>
											<input type="text" size="20" name="Bg_in_building4" placeholder="2.2"><br>
										</td>
									</tr>
									<tr>
										<td width="20%">รวมงบลงทุน</td>
										<td width="30%"><input type="text" size="20" name="Bg_in_total1" ></td>
										<td width="30%"><input type="text" size="10" name="Bg_in_total2" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_total3" ><br></td>
										<td><input type="text" size="20" name="Bg_in_total4" ></td>
									</tr>
									<tr>
										<th width="20%">รวมงบประมาณทั้งหมด</th>
										<th width="30%"><input type="text" size="20" name="Bg_in_sum1" ></th>
										<th width="30%"><input type="text" size="10" name="Bg_in_sum2" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_sum3" ><br></th>
										<th><input type="text" size="20" name="Bg_in_sum4" ></th>
									</tr>
								</table>
								<br>
								<p style="color:red;">*หมายเหตุ  สัดส่วนการสนับสนุนงบประมาณ ภาคเอกชนไม่ต่ำกว่า 60% อุทยานวิทยาศาสตร์ภาคเหนือไม่เกิน 40%</p>
								<br>
							</td>	
						</tr>
						<tr>
							<td colspan="2" width="30%">14.ลายเซ็น

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

	</div>
</div>
<br><br>
<div class="row">
	<div class="col-sm-12">
		<center>
			<table width="95%">
				<tr>
					<td><b style="color:red;"> *</b>  หนังสือรับรองการจดทะเบียนนิติบุคคล:<input type="file" name="F_1"></td>
					<td><b style="color:red;"> *</b>  สำเนาบัตรประชาชนของผู้มีสิทธิลงนาม:<input type="file" name="F_2"></td>
					<td><b style="color:red;"> *</b>  หนังสือมอบอำนาจ(ถ้ามี):<input type="file" name="F_3"></td>
					<td><b style="color:red;"> *</b>  สำเนาบัตรประชาชน/สำเนาบัตรข้าราชการของนักวิจัย:<input type="file" name="F_4"></td>
				</tr>
			</table>
		</center>
	</div>
</div>
<br><br>

	<form method="post" action="frcoresearchplatform.php" >
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