<!-- Section -->
<div id="section_header">
	<h2>TBI Platform</h2>
</div>

<div class="row">
	<div class="col-md-offset-3  col-sm-9">
		<center>
			<form id="" method="post" class="form-horizontal" action="">
				<table width="80%">
					<tr>
						<td width="15%"><input type="text" class="form-control" placeholder="กรอกเลขแบบฟอร์ม" name="research"></td>
						<td width="15%"><button class="btn btn-success" type="button" ><i class="fa fa-search"></i> ค้นหา</button></td>
						<td width="15%"><a href="<?php echo base_url("frontend/frtbiplatform")?>"><button class="btn btn-success" type="button" >กรอกแบบฟอร์ม</button></a></td>
						<td><button class="btn btn-success" type="button" >ดาว์นโหลดแบบฟอร์ม</button></td>
					</tr>
				</table>
			</form>
		</center>

	</div>
</div>
<!-- End  row-->
<br><br>

<div class="row">
	<div class="col-md-offset-1  col-sm-10">
		<div class="panel panel-default">
			<div class="panel-heading">TBI Platform</div>
			<div class="panel-body">
				<table class="table table-striped">
					<tr class="bg-success">
						<th width="5%">#</th>
						<th width="25%">เลขที่แบบฟอร์ม</th>
						<th width="25%">ชื่อบริษัท</th>
						<th width="25%">ชื่อโครงการ</th> 
						<th width="30%">สถานะ</th>     
						<th></th>
					</tr>   

					<!-- Show &Join table -->

					<tr class="bg-success">
						<td >1</td>
						<td >259863</td>
						<td >Hotal</td>   
						<td >กังหันลม</td>
						<td >อยู่ในช่วงดำเนินงาน</td>
						<td><a href="<?php echo base_url("backend/")?>"><button type="button" class="btn btn-info" ><i class="fa fa-download"></i>ดาว์นโหลด</button></a></td> 
						
					</tr>       
				</table>     
				<!-- End -->


				<!-- /.row -->
			</div>

		</div>
	</div>
</div>
       <!-- End  row-->