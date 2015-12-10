<!-- Section -->
<div id="section_header">
	<h2>รายละเอียดข่าวประชาสัมพันธ์</h2>
</div>


<div class="row">
	<div class="col-md-12">

		<div class="row">

			<div class="col-md-5"><center>
				<div class="col-md-4">
					<?php echo '<img src= "'.base_url().'asset/img/News/'.$Ne_picture.'" style="height:300px;" >'; ?>
				</div></center>
			</div>
			<div class="col-md-7" > 
				<br>
				<h3><?= $Ne_sub;?></h3>
				<div class="row"> 
					<div class="col-md-12">
						<h4><?= $Ne_text;?></h4>
					</div>
				</div>
				<br><br>
				<div class="row"> 
					<div class="col-md-12">
						<i class="fa fa-calendar"></i> </h5><?= $Ne_date_up;?></h5>
					</div>
				</div>
				<br><br>	
			</div>

		</div>

	</div>  

</div>


    <div class="row">
     <div class="col-sm-12">
       <table>
         <tr>
           <td width="80%">
           </td>
           <td width="80%">
           </td>
           <td>
             <a href="<?php echo base_url("frontend/index")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
           </td>
         </tr>
       </table>
     </div>

   </div>


<br><br>