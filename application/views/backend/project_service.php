<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>Service Platform</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/project_service")?>">จัดการโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->

   <!-- Star row-->

   <form method="post" class="form-horizontal" action="<?php echo $action1; ?>" >

     <div class="row">
      <div class=" col-sm-12">

       <center>

        <table >

          <tr>
            <td></td>
            <td><select class="form-control"  name="S_status">
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
           <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
           <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>

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
      <div class="panel-heading">Service Platform</div>
      <div class="panel-body">
       <table class="table table-striped">
         <tr class="bg-success">
          <th width="5%">#</th>
          <th width="15%">ชื่อนักวิจัย</th>
          <th width="15%">ชื่อโครงการ</th>
          <th width="20%">ชื่อสถานประกอบการ</th> 
          <th width="35%">สถานะ</th>     
          <th width="25%">ปีที่ทำวิจัย</th>
          <th></th>
          <th></th>
          <th></th>


        </tr>   

        <!-- Show &Join table -->

        <tr class="bg-success">
          <td ><?php echo $i++;?></td>
          <td ><?php echo $rowservice->Rec_name_thai;?></td>
          <td ><?php echo $rowservice->Re_name1;?></td>   
          <td ><?php echo $rowservice->C_name;?></td>
          <td ><?php echo $rowservice->S_status;?></td>
          <td ><?php echo $rowservice->Re_start;?></td>
          <td><a href="<?php echo base_url("backend/viewproject_service")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> 
          <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addproject_service"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
          <td><a href="<?php echo base_url("backend/editproject_service")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>

        </tr>       
      </table>     
      <!-- End -->
    </div>

  </div>
</div>
<!-- /.row -->
</div>
</form>

<form method="post" class="form-horizontal" action="<?php echo $action; ?>" >

  <div class="modal fade bs-example-modal-lg-addproject_service" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="panel panel-warning">
          <div class="panel-heading">ข้อมูลนักวิจัย</div>
          <div class="panel-body">


           <div class="row">
             <div class="col-lg-9 col-lg-offset-1">
              <hr>
              <center><h3>ข้อมูลนักวิจัย</h3></center><br> 

              <div class="form-group">
                <label class="col-lg-2 control-label">ชื่อ</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="Rec_name_thai" placeholder="ภาษาไทย"  reqquired />
                </div>
                <label class="col-lg-2 control-label">นามสกุล</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="Rec_ln_thai"  placeholder="ภาษาไทย"  />
                </div>
              </div>


              <div class="form-group">
                <label class="col-lg-2 control-label"></label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="Rec_name_eng" placeholder="ภาษาอังกฤษ"  />
                </div>
                <label class="col-lg-2 control-label"></label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="Rec_ln_eng"   placeholder="ภาษาอังกฤษ"  />
                </div>
              </div>


              <div class="form-group">
               <label class="col-lg-2 control-label">ที่อยู่</label>
               <div class="col-lg-10">
                <textarea class="form-control"  name="Rec_address"></textarea>
              </div>
            </div>

            <div class="form-group">
             <label class="col-lg-2 control-label">เบอร์โทร</label>
             <div class="col-lg-4">
              <input type="tel" class="form-control" name="Rec_phone"  >
            </div>
            <label class="col-lg-2 control-label">E-mail</label>
            <div class="col-lg-4">
              <input type="email" class="form-control" name="Rec_mail"  >
            </div>

          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">ตำแหน่ง</label>
            <div class="col-lg-4">
              <select class="form-control"  name="Rec_position" >
                <option value="<?php echo $rowservice->Rec_position;?>"></option>
                
              </select>
            </div>
            <label class="col-lg-2 control-label">หน่วยงานสังกัด</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="Rec_unit"  >
            </div>
          </div>


          <div class="form-group">

            <label class="col-lg-2 control-label">รูป</label>
            <div class="col-lg-4">
              <input type="file" name="Rec_picture1" >
            </div>
            <label class="col-lg-2 control-label">สถานที่ทำงาน</label>
            <div class="col-lg-4">
              <input type="text" name="Rec_office" >
            </div>
          </div>
          <br><br>
          <div class="form-group">    
            <label class="col-lg-2 control-label">ความเชียวชาญ</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="Sct_detail"  >
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- ข้อมูลนักวิจัย -->

  <div class="panel panel-warning">
    <div class="panel-heading">ข้อมูลผู้ประกอบการ</div>
    <div class="panel-body">

      <div class="row">
        <div class="col-lg-9 col-lg-offset-1">

         <center><h3>ข้อมูลผู้ติดต่อ</h3></center> <br>

         <div class="form-group">
          <div class="col-lg-4">
            <select class="form-control"  name="P_title" disabled>
              <option value="<?php echo $rowservice->P_title;?>"><?php echo $rowservice->P_title;?></option>
              <option value="นาย">นาย</option>
              <option value="นาง">นาง</option>
              <option value="นางสาว">นางสาว</option>
            </select>
          </div>
          <div class="col-lg-4">
           <input type="text" class="form-control" name="P_name" value="<?php echo $rowservice->P_name;?>"  disabled>
         </div>
         <div class="col-lg-4">
           <input type="text" class="form-control"  name="P_lastname" value="<?php echo $rowservice->P_lastname;?>"   disabled>
         </div>
       </div>



       <div class="form-group">
        <label class="col-lg-2 control-label">เลขที่บัตรประชาชน</label>
        <div class="col-lg-4">
          <input type="text" class="form-control"  name="P_id_card" value="<?php echo $rowservice->P_id_card;?>" disabled>
        </div>
        <label class="col-lg-2 control-label">ตำแหน่ง</label>
        <div class="col-lg-4">
          <input type="text" class="form-control" name="P_position" value="<?php echo $rowservice->P_position;?>" disabled>
        </div>
      </div>


      <div class="form-group">
        <label class="col-lg-2 control-label">เบอร์โทรติดต่อ</label>
        <div class="col-lg-4">
          <input type="tel" class="form-control" name="P_phone" value="<?php echo $rowservice->P_phone;?>"disabled>
        </div>
        <label class="col-lg-2 control-label">E-mail</label>
        <div class="col-lg-4">
          <input type="email" class="form-control" name="P_mail" value="<?php echo $rowservice->P_mail;?>" disabled>
        </div>
      </div>

      <br>
      <hr>

      <center><h3>ข้อมูลทางธุรกิจ</h3></center> <br>

      <div class="form-group">
        <label class="col-lg-2 control-label">ชื่อกิจการ</label>
        <div class="col-lg-4">
          <input type="text" class="form-control" name="C_name" value="<?php echo $rowservice->C_name;?>" disabled>
        </div>
      </div>


      <div class="form-group">
       <label class="col-lg-2 control-label">ที่อยู่</label>
       <div class="col-lg-10">
        <textarea class="form-control"  name="C_address" disabled><?php echo $rowservice->C_address;?></textarea>
      </div>
    </div>


    <div class="form-group">
      <label class="col-lg-2 control-label">โทรศัพท์</label>
      <div class="col-lg-4">
        <input type="text" class="form-control"  name="C_phone" value="<?php echo $rowservice->C_phone;?>"  disabled>
      </div>
      <label class="col-lg-2 control-label">โทรสาร</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="C_fax" value="<?php echo $rowservice->C_fax;?>"  disabled>
      </div> 
    </div>

    <div class="form-group">

      <label class="col-lg-2 control-label">website</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="C_website" value="<?php echo $rowservice->C_website;?>" disabled>
      </div>
    </div>


    <div class="row">
     <div class="col-lg-12">

      <label class="control-label">เลขที่ทะเบียนพาณิชย์</label>
      <div class="funkyradio"> 
        <table>
          <tr>
           <td width="25%"><div class="funkyradio-warning">
             <input type="radio" name="C_no_com" <?php if($rowservice->C_no_com == 'ไม่มี'){?>
             checked <?php }else{} ?> disabled >
             <label for="radio1">ไม่มี</label>
           </div></td> 
           <td width="25%">      <div class="funkyradio-success">
            <input type="radio" name="C_no_com" <?php if($rowservice->C_no_com == 'มี'){?>
            checked <?php }else{} ?>disabled>
            <label for="radio29">มี</label>
          </div></td> 
        </tr>
        <tr>
          <td width="25%"> </td> 
          <td width="25%"> 
            <input type="text" class="form-control" name="C_no_com_etc" value="<?php echo $rowservice->C_no_com_etc;?>"   disabled></td> 
          </tr>
        </table>
      </div>

    </div>
  </div>


  <div class="row">
   <div class="col-lg-12">
    <label class="control-label">ประเภทกิจการ</label>
    <div class="funkyradio">                      
     <table>
      <tr>    
        <td  width="25%">  <div class="funkyradio-warning">
         <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'เจ้าของกิจการ(บุคคลธรรมดา)'){?>
         checked <?php }else{} ?>  disabled>
         <label for="radio3">เจ้าของกิจการ(ธรรมดา)</label>
       </div></td>  
       <td  width="25%"> <div class="funkyradio-info">
        <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'ห้างหุ้นส่วนสามัญ'){?>
        checked <?php }else{} ?>  disabled>
        <label for="radio4">ห้างหุ่นส่วนสามัญ </label>
      </div></td>  
      <td  width="25%">  <div class="funkyradio-success">
        <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'ห้างหุ่นส่วนจำกัด'){?>
        checked <?php }else{} ?> disabled>
        <label for="radio5">ห้างหุ่นส่วนจำกัด</label>
      </div>  </td>  </tr> 
      <tr>                 
       <td  width="25%">  <div class="funkyradio-warning">
        <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'บริษัทจำกัด'){?>
        checked <?php }else{} ?>
        <label for="radio6">บริษัทจำกัด</label>
      </div></td> 
      <td  width="25%">  <div class="funkyradio-info">
        <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'วิสาหกิจชุมชน'){?>
        checked <?php }else{} ?>  disabled>
        <label for="radio7">วิสาหกิจชุมชน </label>
      </div></td> 
      <td  width="25%">  <div class="funkyradio-success">
       <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'อื่นๆ'){?>
       checked <?php }else{} ?> disabled>
       <label for="radio28">อื่นๆ ระบุ:</label>
     </div> </td> </tr>
     <tr>   <td  width="25%"></td>
      <td  width="25%"></td>
      <td  width="25%"> <input type="text" class="form-control" name="C_company_type_etc" value="<?php echo $rowservice->C_company_type_etc;?>"  disabled></td>

    </table>
  </div>
</div>

</div>


<div class="row">
 <div class="col-lg-12">

  <label class="control-label">ลักษณะการประกอบการ</label>
  <div class="funkyradio"> 
   <table>
    <tr>
     <td width="25%">                  
       <div class="funkyradio-warning">
        <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'การผลิต'){?>
        checked <?php }else{} ?> disabled>
        <label for="radio9">การผลิต</label>
      </div></td> 
      <td width="25%">   <div class="funkyradio-info">
       <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'การค้า(ปลีก-ส่ง)'){?>
       checked <?php }else{} ?> disabled>
       <label for="radio10">การค้า (ปลีกส่ง) </label>
     </div></td> 
     <td width="25%"> <div class="funkyradio-default">
      <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'บริการ'){?>
      checked <?php }else{} ?> disabled>
      <label for="radio11">บริการ</label>
    </div>  </td>  </tr>  
    <tr>
     <td width="25%">      <div class="funkyradio-success">
      <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'อื่นๆ'){?>
      checked <?php }else{} ?> disabled>
      <label for="radio30">อื่นๆ ระบุ:</label>
    </div></td> 

    <td width="25%"></td> 
    <td width="25%"> </td>  </tr> 
    <tr>
     <td width="25%">
       <input type="text" class="form-control" name="C_undertaking_etc" value="<?php echo $rowservice->C_undertaking_etc;?>"  disabled></td>
       <td width="25%"></td> 
       <td width="25%">   </td>  </tr>   
     </table>
   </div>

 </div>
</div>

</div>
</div><br>

<div class="row">
  <div class="col-lg-9 col-lg-offset-1">
   <div class="form-group">
    <label class="col-lg-2 control-label">เงินจดทะเบียน</label>
    <div class="col-lg-4">
      <input type="text" class="form-control"  name="C_investment" value="<?php echo $rowservice->C_investment;?>"  disabled>
    </div>
    <label class="col-lg-2 control-label">จำนวนปีที่ประกอบการ</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="C_no_year" value="<?php echo $rowservice->C_no_year;?>" disabled>
    </div>
  </div>

</div>
</div>

</div>
</div>

<!-- ข้อมูลผู้ประกอบการ -->


<div class="panel panel-warning">
  <div class="panel-heading">ข้อมูลโครงการ</div>
  <div class="panel-body">


    <div class="row">
      <div class="col-lg-9 col-lg-offset-1">
        <hr>
        <center><h3>เพิ่มโครงการ</h3></center> <br>

        <div class="form-group">
          <label class="col-lg-2 control-label">ชื่อโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_name1" placeholder="ภาษาไทย"   />
          </div>
          <label class="col-lg-2 control-label"></label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_name_eng"  placeholder="ภาษาอังกฤษ"  />
          </div>
        </div>
        

        <div class="form-group"> 
          <label class="col-lg-2 control-label">กลุ่มอุตสาหกรรม</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_industry_group"  />
          </div>
        </div>
        

        <div class="form-group">
          <label class="col-lg-2 control-label">ปีที่เริ่ม<br>ทำโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_start"   />
          </div>
          <label class="col-lg-2 control-label">ปีที่สิ้นสุด<br>ทำโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_end"  />
          </div>
        </div>
        

        <div class="form-group">
          <label class="col-lg-2 control-label">เลขที่<br>สิทธิบัตร</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_id_patent"   />
          </div>
          <label class="col-lg-2 control-label">สถานภาพ<br>โครงการ</label>
          <div class="col-lg-4">
            <select class="form-control"  name="Re_status" >
              <option value="อย่ในช่วงดำเนินงาน">อย่ในช่วงดำเนินงาน</option>
              <option value="สำเร้จแล้ว">สำเร้จแล้ว</option>
            </select>
          </div>
        </div>
        


        <div class="form-group">
          <label class="col-lg-2 control-label">แหล่งเงินทุน<br>อุทยาน</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_finances_sp"  />
          </div>
          <label class="col-lg-2 control-label">แหล่งเงินทุน<br>บริษัท</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_finances_b"  />
          </div>
        </div>
        <div class="form-group">
         <label class="col-lg-2 control-label">บทสรุป</label>
         <div class="col-lg-4">
          <textarea class="form-control" name="Re_abstract"></textarea>
        </div>
      </div>
      

      <div class="form-group">
       <label class="col-lg-2 control-label">ประเภทรางวัล</label>
       <div class="col-lg-4">
        <input type="text" class="form-control" name="Rea_type"   />
      </div>
      <label class="col-lg-2 control-label">วันรับรางวัลผลงานวิจัย</label>
      <div class="col-lg-4">
        <input type="date" class="form-control" name="Rea_date"   />
      </div>

    </div>

    <div class="form-group">             
      <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
      <div class="col-lg-4">
        <input type="file" name="Re_picture1">
      </div>
      <label class="col-lg-2 control-label">สัญญา</label>
      <div class="col-lg-4">
        <input type="file" name="S_agreement">
      </div>
    </div>

    <br>

    <div class="form-group">
     <label class="col-lg-2 control-label">สถานะ</label>
     <div class="col-lg-4">
      <select class="form-control"  name="S_status">
        <option value="สำเร็จ"> อนุมัติ</option>
        <option value="อยู่ในช่วงดำเนินงาน"> ลงนามในสัญญา</option>
        <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 1</option>
        <option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 1</option>
        <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 2</option>
        <option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 2</option>
        <option value="อยู่ในช่วงดำเนินงาน"> ส่งรายงานฉบับสมบูรณ์ พร้อมแผ่นซีดี 1 แผ่น</option>
        <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 3</option>
      </select>
    </div>
    <label class="col-lg-2 control-label">หมายเหตุ</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="Re_notes"   />
    </div>
  </div>

</div>
</div>

</div>
</div>

<!-- ข้อมูลโครงการ -->

<div class="modal-footer">
  <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
  <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

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
