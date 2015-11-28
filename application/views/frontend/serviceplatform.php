<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<?php 

?>


<script>
$(function() {
	var availableTags = [ 
	<?php 
	/*$i=0;
	foreach ($service as $rowservice){
		$i++; 
	//echo $rowservice->S_id ;
		$auto =  " ' ".$rowservice->S_id." ' ";

		if("6" == $i){
			$auto .= " ";
		}else{
			$auto .= ",";
		}

		echo $auto;
	} */?>

	];
	$( "#tags" ).autocomplete({
		source: availableTags
	});
});
</script>-->

<!-- Section -->
<div id="section_header">
	<h2>Service Platform</h2>
</div>

<div class="row">
	<div class="col-sm-12">
		<center>
			<table width="100%">
				<tr>
					<td align="center"><b style="color:red;">*หมายเหตุ สำหรับผู้ประกอบการ</b></td>
				</tr>
			</table>
		</center>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-offset-3  col-sm-9">
		<center>
			<form enctype="multipart/form-data" id="" method="post" class="form-horizontal" action="<?php $action; ?>">
				<!--<?php //$search = array('S_id'=>'S_id','value'=>"",);?>-->
				<table >
					<tr>
						<td width="15%"><input type="text" class="form-control" placeholder="กรอกเลขแบบฟอร์ม" name="keyword" value=""></td>
						<td width="15%"><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
						<td width="15%"><a href="<?php echo base_url("frontend/frserviceplatform")?>"><button class="btn btn-success" type="button" >กรอกแบบฟอร์ม</button></a></td>
						<td><a target ="_blank" href="<?php echo base_url ("asset/form download/IRTC Form.pdf")?>"><button class="btn btn-success" type="button" >ดาวน์โหลดแบบฟอร์ม</button></a></td>
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
			<div class="panel-heading">Service Platform</div>
			<div class="panel-body">
				<table class="table table-striped">

					<?php if (empty($keyword)) { ?>    

					<?php }else{ ?>

					<?php foreach($search as $row){?>
					<tr class="bg-success">
						<th width="15%">เลขที่แบบฟอร์ม</th>
						<th width="20%">ชื่อสถานประกอบการ</th>
						<th width="20%">ชื่อผู้ประสานงาน</th>
						<th width="20%">วันที่ยืนโครงการ</th> 
						<th width="20%">สถานะ</th>    
					</tr>
					<tr class="bg-success">
						<td ><?php echo $row->S_id; ?></td>
						<td ><?php echo $row->C_name; ?></td>
						<td ><?php echo $row->P_title , $row->P_name , $row->P_lastname ; ?> </td>
						<td ><?php echo $row->S_date; ?></td>  
						<td ><?php echo $row->S_status; ?></td>
						<td><a target ="_blank" href="<?php echo base_url('frontend/serviceplatformreport/index/'.$row->S_id)?>")?><button type="button" class="btn btn-info"><i class="fa fa-print"></i> ปริ้นท์</button></a></td> 	
					</tr> 
					<?php } ?>      
				</table>     
				<!-- End -->
			</div>
		</div>
	</div>
				<?php }  ?>
			<!-- /.row -->
</div>
<!-- End  row-->
</div>
</div>
</div>