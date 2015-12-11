<!-- Section -->
<div id="section_header">
	<h2>รายละเอียดข่าวประชาสัมพันธ์</h2>
</div>


<div class="row">
<div class="col-md-1"></div>
	<div class="col-md-10">

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
					<div class="col-md-10">
						<h4><?= $Ne_text;?></h4>
					</div>
				</div>
				<br><br>
				<div class="row"> 
<<<<<<< HEAD
					<div class="col-md-10">
						<i class="fa fa-calendar"></i> </h5><?= $Ne_date_up;?></h5>
=======
					<div class="col-md-12">
						<span><h5><i class="fa fa-calendar"></i> <?=date("d - m - Y",strtotime($Ne_date_up));?></h5></span>
>>>>>>> 6d19861ac9b5022936fe40faaab46d4f9f88b049
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