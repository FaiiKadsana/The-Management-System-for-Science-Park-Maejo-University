<!-- Section -->
<div id="section_header">
  <h2>ติดต่อ</h2>
</div>

<div class="row">
	<div class="col-sm-12">
    <!-- start 6 -->

    <div class="col-sm-6">
     <div class="row">
       <div class="col-md-offset-1 col-sm-11 padd">
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
       <div class="col-md-offset-1 col-sm-11 paddd">
         <h4 ><i class="fa fa-map-marker"></i><span>แผนที่</span></h4>
         <div id="maps"><iframe scrolling="no" marginheight="0" marginwidth="0" style="zoom:-50px" src="https://www.google.com/maps/d/embed?mid=zzvElLEMuTyc.kplDQhnqky-E" width="550" height="360"></iframe></div>

       </div>

     </div>


     <div class="row">
      <div class="col-md-offset-1 col-sm-8 padd">
        <h4><span>สอบถามเพิ่มเติม</span></h4>
     
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="ชื่อ-สกุล">
          </div>

<div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="ชื่อบริษัท">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="หัวเรื่อง">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>

          <div class="form-group">
            <textarea class="form-control" name="detail" placeholder="รายละเอียด" rows="6"></textarea>
          </div>

      <form method="post" action="contact.php">
              <?php
                   require_once('recaptchalib.php');
                   $publickey = "6Lc_hf0SAAAAAEcBdl4ILVSDYc4dbe5wfxlzyY13"; // you got this from the signup page
                    echo recaptcha_get_html($publickey);?>
     
           </div>
           </div>

           </div>
                <div class="col-md-12" style="padding: 0px">
                  <div id="email-panel" class="form-group col-sm-2   ">
                      </div>
                          <div id="email-panel" class="form-group col-sm-10  "style="padding: 0px">
                          <div class=" btn-send-contact" >
                          <button  type="submit" class="btn btn-primary " ><strong>ตกลง</strong></button> 
                          <button  type="reset" class="btn btn-warning " ><strong>ยกเลิก</strong></button>   
                      </div>
                  </div>
                </div>

            </div>
       </form>

          <div class="form-group">
            <input type="submit" class="btn btn-info  btn-lg btn-block" value="ส่ง">
          </div>
    
      </div><!-- end col-md-5 -->
    </div><!-- end row -->

  </div>

  <!-- end 6 -->

  <!-- start 6 -->

  <div class="col-sm-6">
   <div class="row">
     <div class="col-md-offset-1 col-sm-11 padd">
      <h4 ><span>บุคลากร</span></h4>
    </div>
  </div>

  <div class="row">
   <div class="col-md-offset-1  col-sm-11">
    <div class="col-sm-5 paddd">

      <div class="team style2 box-shadow">
        <div class="team-header">

         <img src='<?php echo base_url("asset/images/personnel/P.jpg") ?>' class="picture-personnel box-shadow" height="200px">
       </div>
       <div class="team-date">	
        <h6><font size='3'>นางสาวนิตยา&nbsp;ถาวัน</font></h6>
        <i class="piksell-color small-text">นักวิชาการศึกษา</i>
        <!--<p>Lorem ipsum ctetur dolor sit amet, conse ctetur tempor elit.</p>-->
        <br>
        <div align='left' style='font-size: 14px;'>
          เบอร์โทร :22222 </br>

        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-5 paddd">

    <div class="team style2 box-shadow">
      <div class="team-header">

       <img src='<?php echo base_url("asset/images/personnel/P.jpg") ?>' class="picture-personnel box-shadow" height="200px">
     </div>
     <div class="team-date">  
      <h6><font size='3'>นางสาวนิตยา&nbsp;ถาวัน</font></h6>
      <i class="piksell-color small-text">นักวิชาการศึกษา</i>
      <!--<p>Lorem ipsum ctetur dolor sit amet, conse ctetur tempor elit.</p>-->
      <br>
      <div align='left' style='font-size: 14px;'>
        เบอร์โทร :22222 </br>

      </div>
    </div>
  </div>
</div>

</div>
</div>

</div>
<!-- end 6 -->

</div>
</div>