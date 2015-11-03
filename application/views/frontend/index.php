<style type=”text/css”>
.calendar {
font-family: Arial; font-size: 12px;
}
table.calendar {
margin: auto; border-collapse: collapse;
}
.calendar .days td {
width: 60px; height: 60px; padding: 4px;
border: 1px solid #999;
vertical-align: top;
background-color: #DEF;
}
.calendar .days td:hover {
background-color: #FFF;
}
.calendar .highlight {
font-weight: bold; color: #00F;
}
</style>

<!-- Welcome Section -->
<div id="section_header">
	<h2>ยินดีต้อนรับ</h2>
</div>
<!-- ข่าวสาร -->

<div class='row'>
	<div class= 'col-md-12'>

		<div class= 'col-md-7'>	
			<center>
				<p class='title-header org'>ข่าวประชาสัมพันธ์</p>			
			</center><br>
			<div class="row">
				<div class="col-md-12">
				<table >
						<tr>
						<td rowspan="2" width="30%">
					<img src='<?php echo base_url("asset/images/banner1.png") ?>' width='100%' height='20%'>
						</td>	
						<td width="55%" >
								หัวข้อข่าว
							</td>
							<td>
								วันที่ : 16/08/58
							</td>
						</tr>
						<tr>
							<td  colspan="2" >
								<p>รายละเอียด</p>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>	

		<div class= 'col-md-5'>	
			<center>
				<p class='title-header org'>ปฎิทินการนัดหมาย</p>		
			</center><br>
			<div class="row">

				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><strong>Calendar</strong></h2>
						</div><br>
						<div class="panel-body">
							<!-- Calenda -->
							 <?php echo $calendar; ?>
                 
						</div>
					</div> 
			</div>
		</div>	 

	</div>
</div>

