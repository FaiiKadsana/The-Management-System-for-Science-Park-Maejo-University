<!-- Section -->
<div id="section_header">
	<h2>ข่าวสาร</h2>
</div>


<div class="row">
	<div class="col-md-12">
		<?php foreach ($news as $rownew){ ?>

		<div class="row">
			<div class="col-md-4">
				<div class="col-md-4 ">
					<?php echo '<img src= "'.base_url().'asset/img/News/'.$rownew->Ne_picture.'" style="height:100px;" >'; ?>
				</div>
			</div>
			<div class="col-md-8" > 
				<br>
				<h4><?php echo $rownew->Ne_sub;?></h4>
				<h5><?php echo $rownew->Ne_text;?></h5>
				<div class="row"> 
					<div class="col-md-12">
						<i class="fa fa-calendar"></i> <?php echo $rownew->Ne_date_up;?>
					</div>
				</div>
				<br><br>	
			</div>

		</div>

		<?php  } ?>

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