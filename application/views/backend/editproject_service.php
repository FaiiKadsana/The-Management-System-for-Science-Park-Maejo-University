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
         <li><i class="fa fa-wrench"></i> <a href="<?php echo base_url("backend/editproject_service")?>">แก้ไขโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->



   <!-- Star row-->
   <div class="row">
     <div class="col-sm-12">
       <div class="panel panel-warning">
        <div class="panel-heading">ข้อมูลนักวิจัย</div>
        <div class="panel-body">

         <!-- รูปนักวิจัย-->
         <div class="col-sm-2">
          <img width="145px" height="200px" src="<?php echo base_url("asset2/img/011.jpg") ?>"> <br><br>

        </div>

        <div class="col-sm-5">
          <!-- ข้อมูลนักวิจัย -->

          <!-- Show &Join table -->
          <table class="table table-bordered">
            <tr>
              <td>ชื่อนักวิจัย : <?php echo $rowservice->Rec_name_thai;?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowservice->Rec_ln_thai;?> อยู่เกิด</td> 
            </tr>
            <tr>
              <td><?php echo $rowservice->Rec_name_eng;?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowservice->Rec_ln_eng;?></td>
            </tr>
            <tr>
              <td>ตำแหน่ง : <?php echo $rowservice->Rec_position;?></td>
            </tr>
            <tr>
              <td>หน่วยงานสังกัด : <?php echo $rowservice->Rec_position;?></td> 
            </tr>
            <tr>
              <td>ที่อยู่ที่สามรถติดต่อไดั :<?php echo $rowservice->Rec_address;?> </td>
            </tr>
            <tr>
              <td>เบอร์โทรศัพท์ : <?php echo $rowservice->Rec_phone;?></td>
            </tr>
            <tr>
              <td>E-mail : <?php echo $rowservice->Rec_mail;?></td>    
            </tr>
            <tr>
              <td>สถานที่ทำงาน: <?php echo $rowservice->Rec_office;?></td>    
            </tr>
            <tr>
             <td ><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editproject_service"><i class="fa fa-wrench"></i> แก้ไข</button></td>  
           </tr>
         </table>
         <!-- End -->
         <!-- start popup แก้ไขข้อมูลนักวิจัย -->
         <form id="" method="post" class="form-horizontal" action="">

          <div class="modal fade bs-example-modal-lg-editproject_service" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

               <div class="row">
                 <div class="col-lg-9 col-lg-offset-1">
                  <hr>
                  <center><h3>ข้อมูลนักวิจัย</h3></center><br> 

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ชื่อ</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="Rec_name_thai" value="<?php echo $rowservice->Rec_name_thai;?>" />
                    </div>
                    <label class="col-lg-2 control-label">นามสกุล</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="Rec_ln_thai" value="<?php echo $rowservice->Rec_ln_thai;?>" />
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="Rec_name_eng"  value="<?php echo $rowservice->Rec_name_eng;?>"  />
                    </div>
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="Rec_ln_eng" value="<?php echo $rowservice->Rec_ln_eng;?>"  />
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ที่อยู่</label>
                    <div class="col-lg-10">
                      <textarea class="form-control"  name="Rec_address"><?php echo $rowservice->Rec_address;?></textarea>
                    </div>
                  </div>


                  <div class="form-group">
                   <label class="col-lg-2 control-label">เบอร์โทร</label>
                   <div class="col-lg-4">
                    <input type="tel" class="form-control" name="Rec_phone" value="<?php echo $rowservice->Rec_phone;?>"  />
                  </div>
                  <label class="col-lg-2 control-label">E-mail</label>
                  <div class="col-lg-4">
                    <input type="email" class="form-control" name="Rec_mail"  value="<?php echo $rowservice->Rec_mail;?>" />
                  </div>

                </div>



                <div class="form-group">
                  <label class="col-lg-2 control-label">ตำแหน่ง</label>
                  <div class="col-lg-4">
                    <select class="form-control"  name="rec_position">
                      <option value="<?php echo $rowservice->Rec_position;?>"><?php echo $rowservice->Rec_position;?></option>

                    </select>
                  </div>
                  <label class="col-lg-2 control-label">หน่วยงานสังกัด</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="Rec_unit"   value="<?php echo $rowservice->Rec_unit;?>">
                  </div>
                </div>
                

                <div class="form-group">

                  <label class="col-lg-2 control-label">รูป</label>
                  <div class="col-lg-4">
                    <input type="file" name="Rec_picture1" value="<?php echo $rowservice->Rec_picture1;?>">
                  </div>
                  <label class="col-lg-2 control-label">สถานที่ทำงาน</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="Rec_office" value="<?php echo $rowservice->Rec_office;?>">
                  </div>
                </div>

                

              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>


          </div>
        </div>
      </div>

    </form>
    <!-- End popup แก้ไขข้อมูลนักวิจัย --> 
  </div>

  <div class="col-sm-5">
    <!-- ความเชี่ยวชาญ -->
    <div class="panel panel-success">
     <div class="panel-heading">ความเชี่ยวชาญ</div>

     <table class="table table-hover  table-hover table-striped table-condensed">
      <tr>
        <th>#</th>
        <th>ความเชี่ยวชาญ</th>
        <th><button type="button" class="btn btn-primary"data-toggle="modal" data-target=".bs-example-modal-sm-addspecialization"><i class="fa fa-plus"></i> เพิ่มความเชียวชาญ</button></th>
      </tr>
      <!-- Show &Join table -->
      <tr>
        <td>1</td>
        <td><?php echo $rowservice->Sct_detail;?></td>
        <td></td>
      </tr>

      <!--end -->
    </table>

    <!-- start popup เพิ่มความเชี่ยชาญ -->
    <form id="" method="post" class="form-horizontal" action="">

      <div class="modal fade bs-example-modal-sm-addspecialization" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

           <div class="row">
             <div class="col-lg-9 col-lg-offset-1">
              <hr>
              <center><h3>เพิ่มความเชี่ยวชาญ</h3></center><br> 

              <div class="form-group">
                <label class=" control-label">ความเชียวชาญ</label>
                <div >
                  <input type="text" class="form-control" name="sct_detail"   />
                </div>
              </div>
              <br><br>

            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่มความเชียวชาญ</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>


        </div>
      </div>
    </div>

  </form>
  <!-- End popup เพิ่มความเชี่ยชาญ-->   



</div>
</div>


</div>
</div>
</div>
<!-- /. row-->

<!-- Star row-->
<div class="row">
 <div class="col-sm-12">
   <div class="panel panel-warning">
    <div class="panel-heading">ผู้ประกอบการ</div>
    <div class="panel-body">

      <div class="col-lg-offset-1 col-sm-10">
        <div class="panel panel-info">
          <div class="panel-heading"></div>

          <table class="table table-hover  table-hover table-striped table-condensed">
            <tr>
              <th>#</th>
              <th>ชื่อผู้ติดต่อ</th>
               <th>ชื่อกิจการ</th>
                <th>โทรศัพท์</th>
              <th>ประเภทกิจการ</th>
            </tr>
            <!-- Show &Join table -->
            <tr>
              <td><?php echo $i++;?></td>
              <td><?php echo $rowservice->P_name;?></td>
              <td><?php echo $rowservice->C_name;?></td>
              <td><?php echo $rowservice->C_phone;?></td>
              <td><?php echo $rowservice->C_company_type;?></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-businessman "><i class="fa fa-wrench"></i> แก้ไข</button></td>
            </tr>
            <!--end -->
          </table>

          <!-- start popup - เแก้ไขผู้ประกอบการ-->
          <form id="" method="post" class="form-horizontal" action="">

            <div class="modal fade bs-example-modal-lg-businessman" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="row">
                    <div class="col-lg-9 col-lg-offset-1">

                     <center><h3>ข้อมูลผู้ติดต่อ</h3></center> <br>

                     <div class="form-group">
                      <div class="col-lg-4">
                        <select class="form-control"  name="P_title">
                          <option value="<?php echo $rowservice->P_title;?>"><?php echo $rowservice->P_title;?></option>
                          <option value="นาย">นาย</option>
                          <option value="นาง">นาง</option>
                          <option value="นางสาว">นางสาว</option>
                        </select>
                      </div>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" name="P_name" value="<?php echo $rowservice->P_name;?>"   />
                      </div>
                      <div class="col-lg-4">
                       <input type="text" class="form-control"  name="P_lastname" value="<?php echo $rowservice->P_lastname;?>"   />
                     </div>
                   </div>



                   <div class="form-group">
                    <label class="col-lg-2 control-label">เลขที่บัตรประชาชน</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="P_id_card" value="<?php echo $rowservice->P_id_card;?>" />
                    </div>
                    <label class="col-lg-2 control-label">ตำแหน่ง</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="P_position" value="<?php echo $rowservice->P_position;?>"  />
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-lg-2 control-label">เบอร์โทรติดต่อ</label>
                    <div class="col-lg-4">
                      <input type="tel" class="form-control" name="P_phone" value="<?php echo $rowservice->P_phone;?>"  />
                    </div>
                    <label class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-4">
                      <input type="email" class="form-control" name="P_mail" value="<?php echo $rowservice->P_mail;?>"  />
                    </div>
                  </div>

                  <hr>

                  <center><h3>ข้อมูลทางธุรกิจ</h3></center> <br>

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ชื่อกิจการ</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="C_name" value="<?php echo $rowservice->C_name;?>" />
                    </div>
                  </div>


                  <div class="form-group">
                   <label class="col-lg-2 control-label">ที่อยู่</label>
                   <div class="col-lg-10">
                    <textarea class="form-control"  name="C_address"><?php echo $rowservice->C_address;?></textarea>
                  </div>
                </div>


                
                <div class="form-group">
                  <label class="col-lg-2 control-label">โทรศัพท์</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control"  name="C_phone" value="<?php echo $rowservice->C_phone;?>"  />
                  </div>
                  <label class="col-lg-2 control-label">โทรสาร</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="C_fax" value="<?php echo $rowservice->C_fax;?>"  />
                  </div>
                </div>


                <div class="form-group">

                  <label class="col-lg-2 control-label">website</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="C_website" value="<?php echo $rowservice->C_website;?>" />
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
                        checked <?php }else{} ?>  >
                        <label for="radio1">ไม่มี</label>
                      </div></td> 
                      <td width="25%">      <div class="funkyradio-success">
                       <input type="radio" name="C_no_com" <?php if($rowservice->C_no_com == 'มี'){?>
                       checked <?php }else{} ?> >
                       <label for="radio29">มี</label>
                     </div></td> 
                   </tr>
                   <tr>
                    <td width="25%"> </td> 
                    <td width="25%"> 
                      <input type="text" class="form-control" name="C_no_com_etc" value="<?php echo $rowservice->C_no_com_etc;?>"  /></td> 
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
                   checked <?php }else{} ?>  >
                   <label for="radio3">เจ้าของกิจการ(บุคคลธรรมดา)</label>
                 </div></td>  
                 <td  width="25%"> <div class="funkyradio-info">
                   <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'ห้างหุ้นส่วนสามัญ'){?>
                   checked <?php }else{} ?>  >
                   <label for="radio4">ห้างหุ่นส่วนสามัญ </label>
                 </div></td>  
                 <td  width="25%">  <div class="funkyradio-success">
                  <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'ห้างหุ่นส่วนจำกัด'){?>
                  checked <?php }else{} ?> >
                  <label for="radio5">ห้างหุ่นส่วนจำกัด</label>
                </div>  </td>  </tr> 
                <tr>                 
                 <td  width="25%">  <div class="funkyradio-warning">
                  <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'บริษัทจำกัด'){?>
                  checked <?php }else{} ?> >
                  <label for="radio6">บริษัทจำกัด</label>
                </div></td> 
                <td  width="25%">  <div class="funkyradio-info">
                  <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'วิสาหกิจชุมชน'){?>
                  checked <?php }else{} ?>  >
                  <label for="radio7">วิสาหกิจชุมชน </label>
                </div></td> 
                <td  width="25%">  <div class="funkyradio-success">
                 <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'อื่นๆ'){?>
                 checked <?php }else{} ?> >
                 <label for="radio28">อื่นๆ ระบุ:</label>
               </div> </td> </tr>
               <tr>   <td  width="25%"></td>
                <td  width="25%"></td>
                <td  width="25%"> <input type="text" class="form-control" name="C_company_type_etc" value="<?php echo $rowservice->C_company_type_etc;?>"  /></td>

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
                checked <?php }else{} ?> >
                <label for="radio9">การผลิต</label>
              </div></td> 
              <td width="25%">   <div class="funkyradio-info">
               <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'การค้า(ปลีก-ส่ง)'){?>
                checked <?php }else{} ?> >
                <label for="radio10">การค้า (ปลีกส่ง) </label>
              </div></td> 
              <td width="25%"> <div class="funkyradio-default">
               <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'บริการ'){?>
                checked <?php }else{} ?> >
                <label for="radio11">บริการ</label>
              </div>  </td>  </tr>  
              <tr>
               <td width="25%">      <div class="funkyradio-success">
                <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'อื่นๆ'){?>
                checked <?php }else{} ?> >
                <label for="radio30">อื่นๆ ระบุ:</label>
              </div></td> 

              <td width="25%"></td> 
              <td width="25%"> </td>  </tr> 
              <tr>
               <td width="25%">
                 <input type="text" class="form-control" name="C_undertaking_etc" value="<?php echo $rowservice->C_undertaking_etc;?>" /></td>
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
          <input type="text" class="form-control"  name="C_investment" value="<?php echo $rowservice->C_investment;?>" />
        </div>
        <label class="col-lg-2 control-label">จำนวนปีที่ประกอบการ</label>
        <div class="col-lg-4">
          <input type="text" class="form-control" name="C_no_year" value="<?php echo $rowservice->C_no_year;?>"  />
        </div>
      </div>

    </div>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>

</div>
</div>


</div>
</div>
</div>


<!-- End popup เแก้ไขผู้ประกอบการ-->  
</div>
</form>
</div>

</div>
</div>
</div>
</div>
<!-- /. row-->
<!-- Star row-->
<div class="row">
 <div class="col-sm-12">
   <div class="panel panel-warning">
    <div class="panel-heading">ข้อมูลโครงการ</div>
    <div class="panel-body">

      <div class="col-lg-offset-1 col-sm-10">
        <div class="panel panel-info">
          <div class="panel-heading"></div>

          <table class="table table-hover  table-hover table-striped table-condensed">
            <tr>
              <th>#</th>
              <th>ชื่อโครงการ</th>
              <th style="width: 15%">ปีที่ทำงานวิจัย</th>
              <th style="width: 15%">สถาน</th>
                <th style="width: 15%">ประเภทรางวัล</th>
              <th></th>
              <th></th>

              <!-- Show &Join table -->
              <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $rowservice->Re_name1;?></td>
                <td><?php echo $rowservice->Re_start;?></td>
                <td><?php echo $rowservice->Re_status;?></td>
                <td><?php echo $rowservice->Rea_type;?></td>
                <td></td>
                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editportfolio"><i class="fa fa-wrench"></i> แก้ไข</button></td>
              </tr>
              <!--end -->
            </table>

            
            <!-- start popup แก้ไขผลงาานวิจัย-->
            <form id="" method="post" class="form-horizontal" action="">

              <div  class="modal fade bs-example-modal-lg-editportfolio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                   <div class="row">
                    <div class="col-lg-9 col-lg-offset-1">
                      <hr>
                      <center><h3>โครงงาน</h3></center> <br>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">ชื่อโครงการ</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Re_name1" value="<?php echo $rowservice->Re_name1;?>"  />
                        </div>
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Re_name_eng"  value="<?php echo $rowservice->Re_name_eng;?>"  />
                        </div>
                      </div>


                      <div class="form-group"> 
                        <label class="col-lg-2 control-label">กลุ่มอุตสาหกรรม</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Re_industry_group" value="<?php echo $rowservice->Re_industry_group;?>" />
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-lg-2 control-label">ปีที่เริ่ม<br>ทำโครงการ</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Re_start"  value="<?php echo $rowservice->Re_start;?>" />
                        </div>
                        <label class="col-lg-2 control-label">ปีที่สิ้นสุด<br>ทำโครงการ</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Re_end" value="<?php echo $rowservice->Re_end;?>" />
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-lg-2 control-label">เลขที่<br>สิทธิบัตร</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Re_id_patent" value="<?php echo $rowservice->Re_id_patent;?>"  />
                        </div>
                        <label class="col-lg-2 control-label">สถานภาพ<br>โครงงาน</label>
                        <div class="col-lg-4">
                          <select class="form-control"  name="re_status" >
                            <option value="<?php echo $rowservice->Re_status;?>"><?php echo $rowservice->Re_status;?></option>
                            <option value="อย่ในช่วงดำเนินงาน">อย่ในช่วงดำเนินงาน</option>
                            <option value="สำเร้จแล้ว">สำเร้จแล้ว</option>
                            
                          </select>
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="col-lg-2 control-label">แหล่งเงินทุน<br>อุทยาน</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Re_finances_sp" value="<?php echo $rowservice->Re_finances_sp;?>" />
                        </div>
                        <label class="col-lg-2 control-label">แหล่งเงินทุน<br>บริษัท</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Re_finances_b" value="<?php echo $rowservice->Re_finances_b;?>" />
                        </div>
                      </div>

                      <div class="form-group">
                       <label class="col-lg-2 control-label">บทสรุป</label>
                       <div class="col-lg-4">
                        <textarea class="form-control" name="Re_abstract"><?php echo $rowservice->Re_abstract;?></textarea>
                      </div>
                    </div>
                    

                    <div class="form-group">
                     <label class="col-lg-2 control-label">ประเภทรางวัล</label>
                     <div class="col-lg-4">
                      <input type="text" class="form-control" name="Rea_type" value="<?php echo $rowservice->Rea_type;?>"  />
                    </div>
                    <label class="col-lg-2 control-label">วันรับรางวัลผลงานวิจัย</label>
                    <div class="col-lg-4">
                      <input type="date" class="form-control" name="Rea_date" value="<?php echo $rowservice->Rea_date;?>"  />
                    </div>

                  </div>

                  <div class="form-group">             
                    <label class="col-lg-2 control-label">รูป</label>
                    <div class="col-lg-4">
                      <input type="file" name="Re_picture1" value="<?php echo $rowservice->Re_picture1;?>">
                    </div>
                    <label class="col-lg-2 control-label">สัญญา</label>
                    <div class="col-lg-4">
                      <input type="file" name="S_agreement" value="<?php echo $rowservice->S_agreement;?>">
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                   <label class="col-lg-2 control-label">สถานะ</label>
                   <div class="col-lg-4">
                    <select class="form-control"  name="statussearch">
                     <option value="<?php echo $rowservice->S_status;?>"> <?php echo $rowservice->S_status;?></option>
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
                  <input type="text" class="form-control" name="Re_notes" value="<?php echo $rowservice->Re_notes;?>"  />
                </div>
              </div>

            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

  </form>
  <!-- End popup แก้ไขผลงาานวิจัย-->   


</div>

</div>

</div>
</div>
</div>
</div>
<!-- /. row-->

<div class="row">
 <div class="col-sm-12">
   <table>
     <tr>
       <td width="80%">
       </td>
       <td width="80%">
       </td>
       <td>
         <a href="<?php echo base_url("backend/project_service")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
       </td>
     </tr>
   </table>
 </div>

</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
