<!-- Section -->
<div id="section_header">
  <h2>ติดต่อ</h2>
</div>
<div class="container">

  <!-- start row -->
<div class="row"> 


    <div class="col-sm-5">

     <div class="row">
       <div class="col-lg-offset-1 col-lg-11 col-md-11 col-sm-11 padd">
         <h4 ><span>ติดต่อ</span></h4>
         <p>	สถาบันบ่มเพาะวิสาหกิจ<br>
           ชั้น 4 อาคารอำนวยยศสุข มหาวิทยาลัยแม่โจ้	</p>
           <hr class="divider-dashed" />
           <address>
            <p> 
              <i class="fa fa-map-marker"></i>&nbsp;63 ม.4&nbsp;ต.หนองหาร&nbsp;อ.สันทราย&nbsp;จ.เชียงใหม่&nbsp;50290<br>
              <i class="fa fa-phone"></i>&nbsp;0-5387-5326 , 08-1883-2696 <br>
              <i class="fa fa-fax"></i>&nbsp;0-5387-5327<br>
              <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:mantii_ju@hotmail.com">mjubi.mju@mju.ac.th</a> 
            </p>
          </address>
          <hr class="divider-dashed" />
          Monday - Friday: <strong>8:00 am - 5:00 pm </strong><br />Saturday - Sunday: <strong>Closed</strong>
        </div>

      </div>




      <div class="row">
       <div class="col-md-offset-1 col-lg-11 col-md-11 col-sm-11 paddd">
         <h4 ><i class="fa fa-map-marker"></i> <span>แผนที่</span></h4>
         <div id="maps"><iframe scrolling="no" marginheight="0" marginwidth="0" style="zoom:-50px" src="https://www.google.com/maps/d/embed?mid=zzvElLEMuTyc.kplDQhnqky-E" width="450" height="360"></iframe></div>

       </div>

     </div>


     <div class="row">
      <div class="col-md-offset-1 col-lg-10 col-md-10 col-sm-10 padd">
        <h4><span>สอบถามเพิ่มเติม</span></h4>

        <form method="post" action="<?php echo $action; ?>">

          <div class="form-group">
            <input type="text" class="form-control" name="company" placeholder="ชื่อบริษัท">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="ชื่อ-สกุลผู้ติดต่อ">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="หัวข้อ">
          </div>

           <div class="form-group">
            <textarea class="form-control" name="detail" placeholder="รายละเอียด" rows="6"></textarea>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
 
           <form method="post" action="contact.php">
              <?php
                require_once('recaptchalib.php');
                  $publickey = "6Lc_hf0SAAAAAEcBdl4ILVSDYc4dbe5wfxlzyY13"; // you got this from the signup page
                  echo recaptcha_get_html($publickey);
              ?>

               <div class="form-group">
                  <br>
                 
                      <button  type="submit" class="btn btn-primary " ><strong>ตกลง</strong></button> 
                      <button  type="reset" class="btn btn-warning " ><strong>ยกเลิก</strong></button>   
              </div>
              
            </form>
        </form><!-- end form -->
      </div><!-- end col-md-5 -->
    </div><!-- end row -->

  </div>

 

<div class="col-sm-7">
   <div class="row">
     <div class="col-md-offset-1 col-lg-11 col-md-11 col-sm-11 padd">
      <h4 ><span>บุคลากร</span></h4>
    </div>
  </div>
<div class="row">
  <div class="col-md-offset-1  col-lg-11 col-md-11 col-sm-11">
 <?php  foreach ($officer as $rowofficer) { ?>
    <div class="col-lg-6 col-md-6 col-sm-6 paddd">

      <div class="team style2 box-shadow">
        <div class="team-header">
           <?php echo '<img src= "'.base_url().'asset/img/person/'.$rowofficer->O_picture.'" style="height:200px;" style="width:40px;">'; ?>
       </div>
       <div class="team-date" align='left' style='font-size: 14px;'>	
        <h6><font size='3'><?php echo $rowofficer->O_title;?><?php echo $rowofficer->O_name;?>&nbsp;<?php echo $rowofficer->O_lastname;?></font></h6>
        <i class="piksell-color small-text"><?php echo $rowofficer->O_position;?></i>
        <!--<p>Lorem ipsum ctetur dolor sit amet, conse ctetur tempor elit.</p>-->
        <br>
        <div align='left' style='font-size: 14px;'>
          เบอร์โทร : <?php echo $rowofficer->O_phone;?> </br>

        </div>
      </div>
    </div>
  </div>
 <!-- Ent row -->
<?php } ?>
<!-- start row -->

<div class="row">
      <center>
        <div class="paginationnext" >
          <div class="col-lg-12 col-md-12 col-sm-12" >
            <ul class="paginationnext" >
                <?php echo $page; ?>  
            <ul>
          </div>
        </div>  
      </center>
</div>
 <!-- Ent row -->
</div>

</div>
</div>
<!-- end 6 -->

</div>
</div>

</div>