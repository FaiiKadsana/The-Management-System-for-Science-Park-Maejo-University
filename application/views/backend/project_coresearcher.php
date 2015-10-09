<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>Home</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/viewproject_coresearcher")?>">จัดการโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->
   <!-- Star row-->
   <div class="row">
    <div class=" col-sm-12">
      <center>

        <table >
          <tr>
           <td>
           </td>
           <td >
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search " required>
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" ><i class="fa fa-search"></i></button>
              </span>

            </div>
          </td>
          <td width="10px"></td>

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
      <div class="panel-heading">ข้อมูลนักวิจัย</div>
      <div class="panel-body">
       <table class="table table-striped">
         <tr class="bg-success">
          <th width="5%">#</th>
          <th width="25%">ชื่อ</th>
          <th width="25%">นามสกุล</th>
          <th width="25%">ชื่อโครงการ</th> 
          <th width="30%">สถานะ</th>     
          <th></th>
          <th></th>
          <th></th>
          <th></th>

        </tr>   

        <!-- Show &Join table -->

        <tr class="bg-success">
          <td >1</td>
          <td >อลงกรณ์</td>
          <td >อยู่เกิด</td>   
          <td >กังหันลม</td>
          <td >อยู่ในช่วงดำเนินงาน</td>
          <td><a href="<?php echo base_url("backend/viewproject_coresearcher")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> 
          <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addproject_coresearcher"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
          <td><a href="<?php echo base_url("backend/editproject_coresearcher")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm-delproject_coresearcher"><i class="fa fa-times"></i>  ลบ</button></td>                     
        </tr>       
      </table>     
      <!-- End -->

      <!-- popup add ข้อมูล-->
      <form id="" method="post" class="form-horizontal" action="">

        <div class="modal fade bs-example-modal-lg-addproject_coresearcher" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Start  row ประวัติส่วนตัว-->
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
                <br><br>

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
                <br><br>

                <div class="form-group">
                 <label class="col-lg-2 control-label">ที่อยู่</label>
                 <div class="col-lg-4">
                  <textarea class="form-control"  name="rec_address">   </textarea>
                </div>
                <label class="col-lg-2 control-label">เบอร์โทร</label>
                <div class="col-lg-4">
                  <input type="tel" class="form-control" name="rec_phone"   />
                </div>
              </div>
              <br><br>

              <div class="form-group">
                <label class="col-lg-2 control-label">E-mail</label>
                <div class="col-lg-4">
                  <input type="email" class="form-control" name="rec_mail"   />
                </div>
                <label class="col-lg-2 control-label">ตำแหน่ง</label>
                <div class="col-lg-4">
                  <select class="form-control"  name="rec_pos_detail">
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
              </div>
              <br><br><br>

              <div class="form-group">

                <label class="col-lg-2 control-label">หน่วยงานสังกัด</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="rec_work_unit"   />
                </div>
                <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                <div class="col-lg-4">
                  <input type="file" name="rec_img">
                </div>

              </div>
              <br><br>

              <div class="form-group">
               <label class="col-lg-2 control-label">สถานที่ทำงาน</label>
               <div class="col-lg-4">
                <input type="text" name="rec_work_office">
              </div >
              <label class="col-lg-2  control-label">ความเชียวชาญ</label>
            <div class="col-lg-4" >
              <select class="form-control"  name="sct_detail">
                <option value="th">ไทย</option>
                <option value="en">อังกฤษ</option>
              </select>
              <br><br>
            </div>
            </div>

          </div>
        </div>

        <!-- End  row ประวัติส่วนตัว-->

        <div class="row">
          <div class="col-lg-9 col-lg-offset-1">
            <hr>
            <center><h3>ประวัติการศึกษา</h3></center> <br>

            <div class="form-group">
              <label class="col-lg-2 control-label">ระดับการศึกษา</label>
              <div class="col-lg-4">
                <select class="form-control"  name="dg_detail">
                  <option value="ปริญญาเอก">ปริญญาเอก</option>
                  <option value="ปริญญาโท">ปริญญาโท</option>
                  <option value="ปริญญาตรี">ปริญญาตรี</option>
                </select>
              </div>
              <label class="col-lg-2 control-label">ปีการศึกษา</label>
              <div class="col-lg-4">
                <input type="text" class="form-control" name="dct_year"  />
              </div>
            </div>
            <br><br>

            <div class="form-group">
              <label class="col-lg-2 control-label">คณะ</label>
              <div class="col-lg-4">
                <input type="text" class="form-control" name="dct_faculty"  />
              </div>
              <label class="col-lg-2 control-label">สาขาวิชา</label>
              <div class="col-lg-4">
                <input type="text" class="form-control" name="dct_major"  />
              </div>
            </div>
            <br><br>

            <div class="form-group">
              <label class="col-lg-2 control-label">มหาวิทยาลัย</label>
              <div class="col-lg-4">
               <input type="text" class="form-control" name="uy_detail"  />
             </div>
           </div>
           <br><br>


           <!-- End popup ประวัติการศึกษา-->

           <!-- start popup - ผู้ประกอบการ-->

           <div class="row">
            <div class="col-lg-12 ">

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
           <br><br>


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
          <br><br>

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
          <br><br>
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
          <br><br>

          <div class="form-group">
            <label class="col-lg-2 control-label">ที่อยู่</label>
            <div class="col-lg-4">
              <textarea name="bus_address"></textarea>
            </div>
            <label class="col-lg-2 control-label">โทรศัพท์</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="bus_ tell"  />
            </div>
          </div>
          <br><br>

          <div class="form-group">
            <label class="col-lg-2 control-label">โทรสาร</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="bus_ fax"  />
            </div>
            <label class="col-lg-2 control-label">website</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="bus_ website"  />
            </div>
          </div>
          <br><br>

          <div class="row">
           <div class="col-lg-12">

             <div class="col-lg-6">
              <label class="control-label">เลขที่ทะเบียนพาณิชย์</label>
              <div class="funkyradio">                      
               <div class="funkyradio-warning">
                <input type="radio" name="radio" id="radio1" />
                <label for="radio1">ไม่มี</label>
              </div>
              <div class="funkyradio-success">
                <input type="radio" name="radio" id="radio29" />
                <label for="radio29">อื่นๆ ระบุ:</label>
              </div>
              <input type="text" class="form-control" name=""  />

            </div>
          </div>

          <div class="col-lg-6">
            <label class="control-label">ประเภทกิจการ</label>
            <div class="funkyradio">                      
             <div class="funkyradio-warning">
               <input type="radio" name="radio1" id="radio3" />
               <label for="radio3">เจ้าของกิจการ(บุคคลธรรมดา)</label>
             </div>
             <div class="funkyradio-info">
              <input type="radio" name="radio1" id="radio4" />
              <label for="radio4">ห้างหุ่นส่วนสามัญ </label>
            </div>
            <div class="funkyradio-success">
              <input type="radio" name="radio1" id="radio5" />
              <label for="radio5">ห้างหุ่นส่วนจำกัด</label>
            </div>                    
            <div class="funkyradio-warning">
              <input type="radio" name="radio1" id="radio6" />
              <label for="radio6">บริษัทจำกัด</label>
            </div>
            <div class="funkyradio-info">
              <input type="radio" name="radio1" id="radio7" />
              <label for="radio7">วิสาหกิจชุมชน </label>
            </div>
            <div class="funkyradio-success">
              <input type="radio" name="radio1" id="radio28" />
              <label for="radio28">อื่นๆ ระบุ:</label>
            </div> 
            <input type="text" class="form-control" name=""  />

          </div>
        </div>

      </div>
    </div>


    <div class="row">
     <div class="col-lg-12">


      <div class="col-lg-6">
        <label class="control-label">สาขาอุตสาหกรรม</label>
        <div class="funkyradio">                      
         <div class="funkyradio-warning">
           <input type="radio" name="radio3" id="radio12" />
           <label for="radio12">อาหารและอาหารสัตว์</label>
         </div>
         <div class="funkyradio-info">
          <input type="radio" name="radio3" id="radio13" />
          <label for="radio13">สิ่งทอและเครื่องนุ่งห่ม </label>
        </div>
        <div class="funkyradio-success">
          <input type="radio" name="radio3" id="radio14" />
          <label for="radio14">รองเท้าและเครื่องหนัง</label>
        </div>                    
        <div class="funkyradio-warning">
          <input type="radio" name="radio3" id="radio15" />
          <label for="radio15">ผลิตภัณฑ์พลาสติกและเครื่องเรือน</label>
        </div>
        <div class="funkyradio-info">
          <input type="radio" name="radio3" id="radio16" />
          <label for="radio16">ยาและเคมีภัณฑ์ </label>
        </div>
        <div class="funkyradio-default">
          <input type="radio" name="radio3" id="radio17" />
          <label for="radio17">ยางพาราและผลิตภัณฑ์</label>
        </div>
        <div class="funkyradio-primary">
          <input type="radio" name="radio3" id="radio18" />
          <label for="radio18">บรรจุภัณฑ์และผลิตภัณฑ์พลาสติก</label>
        </div>
        <div class="funkyradio-success">
          <input type="radio" name="radio3" id="radio19" />
          <label for="radio19">เซรามิกส์และแก้ว</label>
        </div>
        <div class="funkyradio-danger">
          <input type="radio" name="radio3" id="radio20" />
          <label for="radio20">เครื่องใช้ไฟฟ้าแล้อิเล็กทรอนิกส์</label>
        </div>
        <div class="funkyradio-warning">
          <input type="radio" name="radio3" id="radio21" />
          <label for="radio21">ชิ้นส่วนและยานยนตื</label>
        </div>
        <div class="funkyradio-info">
          <input type="radio" name="radio3" id="radio22" />
          <label for="radio22">อัญมณีและเครื่องประดับ</label>
        </div>
        <div class="funkyradio-primary">
          <input type="radio" name="radio3" id="radio23" />
          <label for="radio23">เหล็กและโลหะการ</label>
        </div>
        <div class="funkyradio-success">
          <input type="radio" name="radio3" id="radio24" />
          <label for="radio24">เครื่องจักรกล</label>
        </div>
        <div class="funkyradio-danger">
          <input type="radio" name="radio3" id="radio25" />
          <label for="radio25">ท่องเที่ยว</label>
        </div>
        <div class="funkyradio-warning">
          <input type="radio" name="radio3" id="radio26" />
          <label for="radio26">บริการด้านสุขภาพ</label>
        </div>
        <div class="funkyradio-info">
          <input type="radio" name="radio3" id="radio27" />
          <label for="radio27">อื่น</label>
        </div>
      </div>
    </div>


    <div class="col-lg-6">
      <label class="control-label">ลักษณะการประกอบการ</label>
      <div class="funkyradio">                      
       <div class="funkyradio-warning">
        <input type="radio" name="radio2" id="radio9" />
        <label for="radio9">การผลิต</label>
      </div>
      <div class="funkyradio-info">
        <input type="radio" name="radio2" id="radio10" />
        <label for="radio10">การค้า (ปลีกส่ง) </label>
      </div>
      <div class="funkyradio-default">
        <input type="radio" name="radio2" id="radio11" />
        <label for="radio11">บริการ</label>
      </div>   
      <div class="funkyradio-success">
        <input type="radio" name="radio2" id="radio30" />
        <label for="radio30">อื่นๆ ระบุ:</label>
      </div>
      <input type="text" class="form-control" name=""  />
    </div>
  </div>


</div>
</div><br>

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



<!-- End popup เแก้ไขผู้ประกอบการ-->  

<!-- start popup เพิ่มผลงาานวิจัย-->


<div class="row">
  <div class="col-lg-9 col-lg-offset-1">
    <hr>
    <center><h3>เพิ่มโครงการ</h3></center> <br>

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
    <br><br>

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
    <br><br>

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
    <br><br>

    <div class="form-group">
      <label class="col-lg-2 control-label">เลขที่<br>สิทธิบัตร</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="re_id_patent"   />
      </div>
      <label class="col-lg-2 control-label">สถานภาพ<br>โครงการ</label>
      <div class="col-lg-4">
        <select class="form-control"  name="re_status" >
          <option value="th">อย่ในช่วงดำเนินงาน</option>
          <option value="en">สำเร้จแล้ว</option>
        </select>
      </div>
    </div>
    <br><br>


    <div class="form-group">
      <label class="col-lg-2 control-label">แหล่งเงินทุน<br>อุทยาน</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="re_finances_1"  />
      </div>
      <label class="col-lg-2 control-label">แหล่งเงินทุน<br>บริษัท</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="re_finances_2"  />
      </div>
    </div><br><br><br>

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
  <br><br>

  <div class="form-group">
   <label class="col-lg-2 control-label">ประเภทรางวัล</label>
   <div class="col-lg-4">
    <input type="text" class="form-control" name="rea_type"   />
  </div>
  <label class="col-lg-2 control-label">วันรับรางวัลผลงานวิจัย</label>
  <div class="col-lg-4">
    <input type="date" class="form-control" name="rea_date"   />
  </div>

</div><br><br>

<div class="form-group">             
  <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
  <div class="col-lg-4">
    <input type="file" name="re_picture">
  </div>
</div><br><br>

</div>
</div>


<!-- End popup เพิ่มผลงาานวิจัย-->   



<div class="modal-footer">
 <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
 <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
</div>

</div>
</div>
</div>

</form>
<!--end popup เพิ่ม -->

</div>

<!-- /.row -->


<!--end popup ลบ -->
<form id="" method="post" class="form-horizontal" action="">
  <div class="modal fade bs-example-modal-sm-delproject_coresearcher" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

       <div class="row">
         <div class="col-lg-11 ">
          <div class="form-group">
           <label class="col-lg-9 control-label">ยืนยันการลบ</label>
         </div>

       </div>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-success">ตกลง</button>
       <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
     </div>
   </div>
 </div>
</div>
</form>
<!--end popup ลบ-->


</div>

</div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
