<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>Co-Research Platform</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/project_coresearch")?>">จัดการโครงการ</a></li>
         <li><i class="fa fa-wrench"></i> <a href="<?php echo base_url("backend/editproject_coresearch")?>">แก้ไขโครงการ</a></li>
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
              <td>ชื่อนักวิจัย : อ. อลงกรณ์  อยู่เกิด</td> 
            </tr>
            <tr>
              <td>Mr. Alongkorn Yukerd</td>
            </tr>
            <tr>
              <td>ตำแหน่ง : อาจารย์</td>
            </tr>
            <tr>
              <td>หน่วยงานสังกัด : clud FriA</td> 
            </tr>
            <tr>
              <td>ที่อยู่ที่สามรถติดต่อไดั : 57/2 ม.1  ตำบล นาหมื่นศรี  อำเภอ นาโยง  จังหวัด ตรัง</td>
            </tr>
            <tr>
              <td>เบอร์โทรศัพท์ : 0857856130</td>
            </tr>
            <tr>
              <td>E-mail : Alongkornyukerd@gmail.com</td>    
            </tr>
            <tr>
              <td>สถานที่ทำงาน: แม่โจ้</td>    
            </tr>
            <tr>
             <td ><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editproject_coresearcher"><i class="fa fa-wrench"></i> แก้ไข</button></td>  
           </tr>
         </table>
         <!-- End -->
         <!-- start popup แก้ไขข้อมูลนักวิจัย -->
         <form id="" method="post" class="form-horizontal" action="">

          <div class="modal fade bs-example-modal-lg-editproject_coresearcher" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

               <div class="row">
                 <div class="col-lg-9 col-lg-offset-1">
                  <hr>
                  <center><h3>ข้อมูลนักวิจัย</h3></center><br> 

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ชื่อ</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="rec_name_thai" placeholder="ภาษาไทย"  reqquired />
                    </div>
                    <label class="col-lg-2 control-label">นามสกุล</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="rec_ln_thai" placeholder="ภาษาไทย"  />
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="rec_name_eng" placeholder="ภาษาอังกฤษ"  />
                    </div>
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="rec_ln_eng" placeholder="ภาษาอังกฤษ"  />
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ที่อยู่</label>
                    <div class="col-lg-10">
                      <textarea class="form-control"  name="rec_address">   </textarea>
                    </div>
                  </div>
                  

                  <div class="form-group">
                   <label class="col-lg-2 control-label">เบอร์โทร</label>
                   <div class="col-lg-4">
                    <input type="tel" class="form-control" name="rec_phone"   />
                  </div>
                  <label class="col-lg-2 control-label">E-mail</label>
                  <div class="col-lg-4">
                    <input type="email" class="form-control" name="rec_mail"   />
                  </div>

                </div>
                


                <div class="form-group">
                  <label class="col-lg-2 control-label">ตำแหน่ง</label>
                  <div class="col-lg-4">
                    <select class="form-control"  name="rec_position">
                      <option value="ศ.ดร.">ศ.ดร.</option>
                      <option value="รศ.ดร.">รศ.ดร.</option>
                      <option value="พศ.ดร.">พศ.ดร.</option>
                      <option value="ศ.">ศ.</option>
                      <option value="รศ.">รศ.</option>
                      <option value="พศ.">พศ.</option>
                      <option value="ดร.">ดร.</option>
                      <option value="อ.">อ.</option>
                    </select>
                  </div>
                  <label class="col-lg-2 control-label">หน่วยงานสังกัด</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="rec_unit"   />
                  </div>
                </div>
                

                <div class="form-group">

                  <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                  <div class="col-lg-4">
                    <input type="file" name="rec_img">
                  </div>
                  <label class="col-lg-2 control-label">สถานที่ทำงาน</label>
                  <div class="col-lg-4">
                    <input type="text"  class="form-control" name="rec_office">
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
        <td>คอมพิวเตอร์</td>
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
              <th>ชื่อกิจการ</th>
              <th>ชื่อเจ้าของกิจการ</th>
              <th>นามสกุลเจ้าของกิจการ</th>
              <th>ประเภทกิจการา</th>
            </tr>
            <!-- Show &Join table -->
            <tr>
              <td>1</td>
              <td>Hotal</td>
              <td>อลงกร</td>
              <td>อยู่เกิด</td>
              <td>บริษัทจำกัด</td>
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
                        <select class="form-control"  name="title">
                         <option value="นาย">นาย</option>
                         <option value="นาง">นาง</option>
                         <option value="นางสาว">นางสาว</option>
                       </select>
                     </div>
                     <div class="col-lg-4">
                       <input type="text" class="form-control" name="bus_name" placeholder="ชื่อ"   />
                     </div>
                     <div class="col-lg-4">
                       <input type="text" class="form-control" name="bus_ln" placeholder="นามสกุล"   />
                     </div>
                   </div>
                   

                   <div class="form-group">
                    <label class="col-lg-2 control-label">เลขที่บัตรประชาชน</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="bus_id"  />
                    </div>
                    <label class="col-lg-2 control-label">ตำแหน่ง</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="bus_detil"  />
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label class="col-lg-2 control-label">เบอร์โทรติดต่อ</label>
                    <div class="col-lg-4">
                      <input type="tel" class="form-control" name="bus_tel"  />
                    </div>
                    <label class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-4">
                      <input type="email" class="form-control" name="bus_mail"  />
                    </div>
                  </div>
                  
                  <hr>

                  <center><h3>ข้อมูลทางธุรกิจ</h3></center> <br>

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ชื่อกิจการ</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="bus"  />
                    </div>
                    <label class="col-lg-2 control-label">ชื่อ-นามสกุลเจ้าของธุรกิจ</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="bus_ owners"  />
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ที่อยู่</label>
                    <div class="col-lg-10">
                      <textarea name="bus_address"  class="form-control"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-lg-2 control-label">โทรศัพท์</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="bus_ tell"  />
                    </div>
                    <label class="col-lg-2 control-label">โทรสาร</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="bus_ fax"  />
                    </div>
                  </div>


                  <div class="form-group">

                    <label class="col-lg-2 control-label">website</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="bus_ website"  />
                    </div>
                  </div>
                  

                  <div class="row">
                   <div class="col-lg-12">

                    <label class="control-label">เลขที่ทะเบียนพาณิชย์</label>
                    <div class="funkyradio"> 
                      <table>
                        <tr>
                         <td width="25%"><div class="funkyradio-warning">
                          <input type="radio" name="radio" id="radio1" />
                          <label for="radio1">ไม่มี</label>
                        </div></td> 
                        <td width="25%">      <div class="funkyradio-success">
                          <input type="radio" name="radio" id="radio29" />
                          <label for="radio29">อื่นๆ ระบุ:</label>
                        </div></td> 
                      </tr>
                      <tr>
                        <td width="25%"> </td> 
                        <td width="25%"> 
                          <input type="text" class="form-control" name=""  /></td> 
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
                       <input type="radio" name="radio1" id="radio3" />
                       <label for="radio3">เจ้าของกิจการ(บุคคลธรรมดา)</label>
                     </div></td>  
                     <td  width="25%"> <div class="funkyradio-info">
                      <input type="radio" name="radio1" id="radio4" />
                      <label for="radio4">ห้างหุ่นส่วนสามัญ </label>
                    </div></td>  
                    <td  width="25%">  <div class="funkyradio-success">
                      <input type="radio" name="radio1" id="radio5" />
                      <label for="radio5">ห้างหุ่นส่วนจำกัด</label>
                    </div>  </td>  </tr> 
                    <tr>                 
                     <td  width="25%">  <div class="funkyradio-warning">
                      <input type="radio" name="radio1" id="radio6" />
                      <label for="radio6">บริษัทจำกัด</label>
                    </div></td> 
                    <td  width="25%">  <div class="funkyradio-info">
                      <input type="radio" name="radio1" id="radio7" />
                      <label for="radio7">วิสาหกิจชุมชน </label>
                    </div></td> 
                    <td  width="25%">  <div class="funkyradio-success">
                      <input type="radio" name="radio1" id="radio28" />
                      <label for="radio28">อื่นๆ ระบุ:</label>
                    </div> </td> </tr>
                    <tr>   <td  width="25%"></td>
                      <td  width="25%"></td>
                      <td  width="25%"> <input type="text" class="form-control" name=""  /></td>

                    </table>
                  </div>
                </div>

              </div>




              <div class="row">
               <div class="col-lg-12">

                <label class="control-label">สาขาอุตสาหกรรม</label>
                <div class="funkyradio">   
                 <table>
                  <tr>
                   <td width="25%">  
                     <div class="funkyradio-warning">
                       <input type="radio" name="radio3" id="radio12" />
                       <label for="radio12">อาหาร/อาหารสัตว์</label>
                     </div>
                     <td width="25%">  <div class="funkyradio-info">
                      <input type="radio" name="radio3" id="radio13" />
                      <label for="radio13">สิ่งทอ/เครื่องนุ่งห่ม </label>
                    </div>
                    <td width="25%">  <div class="funkyradio-success">
                      <input type="radio" name="radio3" id="radio14" />
                      <label for="radio14">รองเท้า/เครื่องหนัง</label>
                    </div>                    
                    <tr> </td>  </tr> 
                    <td width="30%">    <div class="funkyradio-warning">
                      <input type="radio" name="radio3" id="radio15" />
                      <label for="radio15">ผลิตภัณฑ์พลาสติก/เครื่องเรือน</label>
                    </div>
                    <td width="25%">  <div class="funkyradio-info">
                      <input type="radio" name="radio3" id="radio16" />
                      <label for="radio16">ยา/เคมีภัณฑ์ </label>
                    </div>
                    <td width="25%">  <div class="funkyradio-default">
                      <input type="radio" name="radio3" id="radio17" />
                      <label for="radio17">ยางพารา/ผลิตภัณฑ์</label>
                    </div> </td>  </tr> 
                    <tr>
                     <td width="25%"> <div class="funkyradio-primary">
                      <input type="radio" name="radio3" id="radio18" />
                      <label for="radio18">บรรจุภัณฑ์/ผลิตภัณฑ์พลาสติก</label>
                    </div>
                    <td width="20%">  <div class="funkyradio-success">
                      <input type="radio" name="radio3" id="radio19" />
                      <label for="radio19">เซรามิกส์/แก้ว</label>
                    </div>
                    <td width="30%">    <div class="funkyradio-danger">
                      <input type="radio" name="radio3" id="radio20" />
                      <label for="radio20">เครื่องใช้ไฟฟ้า/อิเล็กทรอนิกส์</label>
                    </div> </td>  </tr> 
                    <tr>
                     <td width="25%"> <div class="funkyradio-warning">
                      <input type="radio" name="radio3" id="radio21" />
                      <label for="radio21">ชิ้นส่วน/ยานยนตื</label>
                    </div>
                    <td width="25%"> <div class="funkyradio-info">
                      <input type="radio" name="radio3" id="radio22" />
                      <label for="radio22">อัญมณี/เครื่องประดับ</label>
                    </div>
                    <td width="25%"> <div class="funkyradio-primary">
                      <input type="radio" name="radio3" id="radio23" />
                      <label for="radio23">เหล็ก/โลหะการ</label>
                    </div> </td>  </tr> 
                    <tr>
                     <td width="25%"> <div class="funkyradio-success">
                      <input type="radio" name="radio3" id="radio24" />
                      <label for="radio24">เครื่องจักรกล</label>
                    </div>
                    <td width="25%"> <div class="funkyradio-danger">
                      <input type="radio" name="radio3" id="radio25" />
                      <label for="radio25">ท่องเที่ยว</label>
                    </div>
                    <td width="25%">  <div class="funkyradio-warning">
                      <input type="radio" name="radio3" id="radio26" />
                      <label for="radio26">บริการด้านสุขภาพ</label>
                    </div> </td>  </tr> 
                    <tr> 
                     <td width="25%"> 
                      <div class="funkyradio-info">
                        <input type="radio" name="radio3" id="radio27" />
                        <label for="radio27">อื่น</label>
                      </div> </td>  </tr> 
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
                      <input type="radio" name="radio2" id="radio9" />
                      <label for="radio9">การผลิต</label>
                    </div></td> 
                    <td width="25%">   <div class="funkyradio-info">
                      <input type="radio" name="radio2" id="radio10" />
                      <label for="radio10">การค้า (ปลีกส่ง) </label>
                    </div></td> 
                    <td width="25%"> <div class="funkyradio-default">
                      <input type="radio" name="radio2" id="radio11" />
                      <label for="radio11">บริการ</label>
                    </div>  </td>  </tr>  
                    <tr>
                     <td width="25%">      <div class="funkyradio-success">
                      <input type="radio" name="radio2" id="radio30" />
                      <label for="radio30">อื่นๆ ระบุ:</label>
                    </div></td> 

                    <td width="25%"></td> 
                    <td width="25%"> </td>  </tr> 
                    <tr>
                     <td width="25%">
                       <input type="text" class="form-control" name=""  /></td>
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
                <input type="text" class="form-control" name="bus_ mony"  />
              </div>
              <label class="col-lg-2 control-label">จำนวนปีที่ประกอบการ</label>
              <div class="col-lg-4">
                <input type="text" class="form-control" name="bus_ amount"  />
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
              <th style="width: 20%">รางวัลงานวิจัย</th>
              <th style="width: 15%">ประเภทรางวัล</th>
              <th></th>
              <th></th>

              <!-- Show &Join table -->
              <tr>
                <td>1</td>
                <td>กังหันลบ</td>
                <td>2558</td>
                <td>สำเร็จ</td>
                <td>นานาชาติ</td>
                <td>n/s</td>
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
                          <input type="text" class="form-control" name="re_name" placeholder="ภาษาไทย"   />
                        </div>
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="re_name_eng"  placeholder="ภาษาอังกฤษ"  />
                        </div>
                      </div>
                      

                      <div class="form-group"> 
                        <label class="col-lg-2 control-label">กลุ่มอุตสาหกรรม</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="ret_detail"  />
                        </div>
                        <label class="col-lg-2 control-label">หน่วยงานวิจัย</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="m_id"   />
                        </div> 
                      </div>
                      

                      <div class="form-group">
                        <label class="col-lg-2 control-label">ปีที่เริ่ม<br>ทำโครงการ</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="re_start"   />
                        </div>
                        <label class="col-lg-2 control-label">ปีที่สิ้นสุด<br>ทำโครงการ</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="re_end"  />
                        </div>
                      </div>
                      

                      <div class="form-group">
                        <label class="col-lg-2 control-label">เลขที่<br>สิทธิบัตร</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="re_id_patent"   />
                        </div>
                        <label class="col-lg-2 control-label">สถานภาพ<br>โครงงาน</label>
                        <div class="col-lg-4">
                          <select class="form-control"  name="re_status" >
                            <option value="th">อย่ในช่วงดำเนินงาน</option>
                            <option value="en">สำเร้จแล้ว</option>
                          </select>
                        </div>
                      </div>
                      


                      <div class="form-group">
                        <label class="col-lg-2 control-label">แหล่งเงินทุน<br>อุทยาน</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="re_finances_1"  />
                        </div>
                        <label class="col-lg-2 control-label">แหล่งเงินทุน<br>บริษัท</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="re_finances_2"  />
                        </div>
                      </div>

                      <div class="form-group">
                       <label class="col-lg-2 control-label">บทสรุป</label>
                       <div class="col-lg-4">
                        <textarea class="form-control" name="re_abstract"></textarea>
                      </div>
                      <label class="col-lg-2 control-label">รางวัลผลงานวิจัย</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" name="res_award"   />
                      </div>
                    </div>
                    

                    <div class="form-group">
                     <label class="col-lg-2 control-label">ประเภทรางวัล</label>
                     <div class="col-lg-4">
                      <input type="text" class="form-control" name="rea_type"   />
                    </div>
                    <label class="col-lg-2 control-label">วันรับรางวัลผลงานวิจัย</label>
                    <div class="col-lg-4">
                      <input type="date" class="form-control" name="rea_date"   />
                    </div>
                    
                  </div>

                  <div class="form-group">             
                    <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                    <div class="col-lg-4">
                      <input type="file" name="re_picture">
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                   <label class="col-lg-2 control-label">สถานะ</label>
                   <div class="col-lg-4">
                    <select class="form-control"  name="statussearch">
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
                    <input type="text" class="form-control" name="1"   />
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
         <a href="<?php echo base_url("backend/project_coresearch")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
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
