<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<!-- Star row-->
		<div class="row">
			<div class="col-sm-12">
				<h1 class="page-header">
					<small>TBI Platform</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/project_tbi")?>">จัดการโครงการ</a></li>
				</ol>
			</div>
		</div></br>
		<!-- /.row -->
		<!-- Star row-->
		<div class="row">
			<div class=" col-sm-12">
				<center>
					<form id="" method="post" class="form-horizontal" action="">
						<table >

							<tr>
								<td></td>
								<td><input type="text" class="form-control" placeholder="กรอกชื่อนักวิจัย" name="research"></td>
								<td><input type="text" class="form-control" placeholder="กรอกชื่อโครงการ"  name="project_research"></td>
								<td><input type="text" class="form-control" placeholder="ปีที่ทำโครงการ" name="yearresearch"></td>
								<td><select class="form-control"  name="statussearch">
									<option value=""> เลือกสถานะ</option>
									<option value="สำเร็จ"> อนุมัติ</option>
									<option value="อยู่ในช่วงดำเนินงาน"> ลงนามในสัญญา</option>
									<option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 1</option>
									<option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 1</option>
									<option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 2</option>
									<option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 2</option>
									<option value="อยู่ในช่วงดำเนินงาน"> ส่งรายงานฉบับสมบูรณ์ พร้อมแผ่นซีดี 1 แผ่น</option>
									<option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 3</option>
								</select></td>
								<td><button class="btn btn-success" type="button" ><i class="fa fa-search"></i> ค้นหา</button></td>
								<td ><button class="btn btn-success" type="button" >ล้างข้อมูล</button> </td>


							</tr>
						</table>
					</form>
				</center>
			</div>
		</div><br>
		<!-- /.row -->

		<!-- Star row-->
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading">TBI Platform</div>
					<div class="panel-body">
						<table class="table table-striped">
							<tr class="bg-success">
								<th width="5%">#</th>
								<th width="15%">ชื่อนักวิจัย</th>
								<th width="15%">ชื่อโครงการ</th>
								<th width="20%">ชื่อสถานประกอบการ</th> 
								<th width="35%">สถานะ</th>     
								<th width="25%">ปีที่ทำวิจัย</th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
							</tr>   

							<!-- Show &Join table -->

							<tr class="bg-success">
								<td >1</td>
								<td >อลงกรณ์</td>
								<td >อยู่เกิด</td>   
								<td >กังหันลม</td>
								<td >อยู่ในช่วงดำเนินงาน</td>
								<td >2558</td>
								<td><a href="<?php echo base_url("backend/viewproject_tbi")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i> ดู</button></a></td> 
								<td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addproject_tbi"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
								<td><a href="<?php echo base_url("backend/editproject_tbi")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button></a></td>
								<td>สัญญา<input type="file" name=""></td>                  
							</tr>       
						</table>     
						<!-- End -->


						<!-- /.row -->
					</div>


					<form id="" method="post" class="form-horizontal" >

						<div class="modal fade bs-example-modal-lg-addproject_tbi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">


									<div class="panel panel-warning">
										<div class="panel-heading">ข้อมูลส่วนบุคคล</div>
										<div class="panel-body">


											<div class="row">
												<div class="col-lg-9 col-lg-offset-1">
													<hr>
													<center><h3>ข้อมูลส่วนบุคคล</h3></center><br> 

													<div class="form-group">
														<div class="col-lg-4">
															<select class="form-control"  name="bus_title">
																<option value="นาย">นาย</option>
																<option value="นาง">นาง</option>
																<option value="นางสาว">นางสาว</option>
															</select>
														</div>
														<div class="col-lg-4">
															<input type="text" class="form-control" name="bus_name" placeholder="ชื่อ"   />
														</div>
														<div class="col-lg-4">
															<input type="text" class="form-control" name="bus_ln" placeholder="นามสกุล"   />
														</div>
													</div>



													<div class="form-group">
														<label class="col-lg-2 control-label">เลขประจำตัวประชาชน</label>
														<div class="col-lg-4">
															<input type="text" class="form-control" name="rec_phone"   />
														</div>
														<label class="col-lg-2 control-label">วันเดือนปีเกิด</label>
														<div class="col-lg-4">
															<input type="date" class="form-control" name="rec_phone"   />
														</div>
													</div>

													<div class="row">
														<div class="col-lg-12">
															<label class="control-label">เชื่อชาติ</label>
															<div class="funkyradio">                      
																<table>
																	<tr>    
																		<td  width="25%">  <div class="funkyradio-warning">
																			<input type="radio" name="bus" id="radio1" />
																			<label for="radio1">ไทย</label>
																		</div></td>  
																		<td  width="25%"></td>
																		<td  width="25%">  <div class="funkyradio-success">
																			<input type="radio" name="bus" id="radio2" />
																			<label for="radio2">อื่นๆ ระบุ:</label>
																		</div> </td> </tr>
																		<tr>   <td  width="25%"></td>
																			<td  width="25%"></td>
																			<td  width="25%"> <input type="text" class="form-control" name="bus_type"  /></td>
																		</tr>
																	</table>
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-lg-12">
																<label class="control-label">ศาสนา</label>
																<div class="funkyradio">                      
																	<table>
																		<tr>    
																			<td  width="25%">  <div class="funkyradio-warning">
																				<input type="radio" name="bus_type" id="radio3" />
																				<label for="radio3">พุทธ</label>
																			</div></td>  
																			<td  width="25%"> <div class="funkyradio-info">
																				<input type="radio" name="bus_type" id="radio4" />
																				<label for="radio4">คริสต์ </label>
																			</div></td>  
																			<td  width="25%">  <div class="funkyradio-success">
																				<input type="radio" name="bus_type" id="radio5" />
																				<label for="radio5">อิสลาม</label>
																			</div>  </td>  </tr> 
																			<tr>                 
																				<td  width="25%">  <div class="funkyradio-warning">
																					<input type="radio" name="bus_type" id="radio6" />
																					<label for="radio6">อินดู</label>
																				</div></td> 
																				<td  width="25%">  <div class="funkyradio-success">
																					<input type="radio" name="bus_type" id="radio28" />
																					<label for="radio28">อื่นๆ ระบุ:</label>
																				</div> </td> </tr>
																				<tr>   <td  width="25%"></td>
																					<td  width="25%"> <input type="text" class="form-control" name="bus_type"  /></td>

																				</table>
																			</div>
																		</div>

																	</div><br>




																	<div class="form-group">
																		<label class="col-lg-2 control-label">ที่อยู่</label>
																		<div class="col-lg-10">
																			<textarea class="form-control"  name="rec_address">   </textarea>
																		</div>
																	</div>

																	
																	<div class="form-group">
																		<label class="col-lg-2 control-label">โทรศัะพท์ที่ติดต่อสะดวก</label>
																		<div class="col-lg-4">
																			<input type="tel" class="form-control" name="rec_phone"   />
																		</div>
																		<label class="col-lg-2 control-label">โทรสาร</label>
																		<div class="col-lg-4">
																			<input type="tel" class="form-control" name="rec_mail"   />
																		</div>
																	</div>


																	<div class="form-group">
																		<label class="col-lg-2 control-label">มือถือ</label>
																		<div class="col-lg-4">
																			<input type="tel" class="form-control" name="rec_phone"   />
																		</div>
																		<label class="col-lg-2 control-label">E-mail</label>
																		<div class="col-lg-4">
																			<input type="email" class="form-control" name="rec_mail"   />
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="col-lg-2 control-label">สถานะ</label>
																		<div class="col-lg-4">
																			<select class="form-control"  name="statussearch">
																				<option value="สำเร็จ"> อนุมัติ</option>
																				<option value="อยู่ในช่วงดำเนินงาน"> ลงนามในสัญญา</option>
																				<option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 1</option>
																				<option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 1</option>
																				<option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 2</option>
																				<option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 2</option>
																				<option value="อยู่ในช่วงดำเนินงาน"> ส่งรายงานฉบับสมบูรณ์ พร้อมแผ่นซีดี 1 แผ่น</option>
																				<option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 3</option>
																			</select>
																		</div>
																		<label class="col-lg-2 control-label">หมายเหตุ</label>
																		<div class="col-lg-4">
																			<input type="text" class="form-control" name="1"   />
																		</div>
																	</div>

																</div>
															</div>


														</div>
													</div>

													<div class="modal-footer">
														<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>


												</div>
											</div>
										</div>

									</form>


								</div>
							</div>
						</div>


					</div>
					<!-- /.container-fluid -->

				</div>
				<!-- /#page-wrapper -->

			</div>
			<!-- /#wrapper -->
