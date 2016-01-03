<!-- Welcome Section -->
<div id="section_header">
	<h2>ยินดีต้อนรับ</h2>
</div>
<!-- ข่าวสาร -->

<div class='row'>
	<div class= 'col-md-12'>

	<div id="products-post">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                	<center>
				<p class='title-header org'>ข่าวประชาสัมพันธ์</p>			
			</center><br>
            </div>
        </div>

        <div class="row">
           <div class="col-md-12">
              	<?php foreach ($news as $rownew){ ?>
                <div class="newlist col-md-12">
                    <div class="col-md-4 newlistimg" style="heigth:50px;">
                        <?php echo '<img src= "'.base_url().'asset/img/News/'.$rownew->Ne_picture.'" style="heigth:50px;" >'; ?>
                    </div>
                    <br>
                    <div class="col-md-8">
                       	<h4><b><a href="<?php echo base_url('frontend/viewnews/index/'.$rownew->Ne_id)?>"> <?php echo $rownew->Ne_sub;?></a></b></h4>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=iconv_substr($rownew->Ne_text,0,350, "UTF-8")."...";?>
							<br><br>
							<div class="row"> 
								<div class="col-md-12">
									<span><i class="fa fa-calendar"></i> <?=date("d - m - Y",strtotime($rownew->Ne_date_up));?></span>
								</div>
							</div>
						<br>
                    </div>
                </div>
                <?php  } ?>

                <div class="paginationnext" >
                 <div class="row">
                 	<center>
                    <div class="col-md-12" >
                        <?php echo $page ?>
                    </div>
                    </center>
                </div>
            </div>      
        </div>
    </div>
		</div>
	</div>




