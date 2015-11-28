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
		<form method="post" action= "<?php echo $action; ?>" enctype= "multipart/form-data">
		<div class="row">
			<div class=" col-sm-12">
				<center>
					<form id="" method="post" class="form-horizontal" action="">
						<table >

							<tr>
								<td></td>
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
								<th width="20%">ชื่อผู้ขอรับบริการ</th>
								<th width="20%">นามสกุล</th>
								<th width="35%">สถานะ</th>     
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
								<td >อยู่ในช่วงดำเนินงาน</td>
								<td><a href="<?php echo base_url("backend/viewproject_tbi")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i> ดู</button></a></td> 
								<td><a href="<?php echo base_url("backend/editproject_tbi")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button></a></td>
								<td>สัญญา<input type="file" name=""></td>                  
							</tr>       
						</table>     
						<!-- End -->


						<!-- /.row -->
					</div>

				</div>
			</div>
		</div>
	</form>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
