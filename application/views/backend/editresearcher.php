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
         <li><i class="active"> <i class="fa fa-home"></i></i><a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i><a href="<?php echo base_url("backend/researcher")?>">จัดการข้อมูลนักวิจัย</a></li>
         <li><i class="fa fa-wrench"></i><a href="<?php echo base_url("backend/editresearcher")?>">แก้ไขข้อมูลนักวิจัย</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->
   <!-- Star row-->
   <div class="row">
     <div class="col-sm-12">
       <!-- รูปนักวิจัย-->
       <div class="col-sm-2">
        <img width="145px" height="200px" src="<?php echo base_url("asset2/img/011.jpg") ?>"> <br><br>
        <center><label>รหัส : 58527</label>  </center>           
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
            <td>ที่อยู่ที่สามรถติดต่อไดั : นนทบุรี่</td>
          </tr>
          <tr>
            <td>เบอร์โทรศัยท์ : 0857856130</td>
          </tr>
          <tr>
            <td>E-mail : Alongkornyukerd@gmail.com</td>    
          </tr>
          <tr>

           <td ><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editresearcher"><i class="fa fa-wrench"></i> แก้ไข</button></td>  
         </table>
         <!-- start popup แก้ไขข้อมูลนักวิจัย -->
         <form id="" method="post" class="form-horizontal" action="">

          <div class="modal fade bs-example-modal-lg-editresearcher" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

               <div class="row">
                 <div class="col-lg-9 col-lg-offset-1">
                  <hr>
                  <center><h3>ข้อมูลนักวิจัย</h3></center><br> 

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ชื่อ</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="nth" placeholder="ภาษาไทย"  reqquired />
                    </div>
                    <label class="col-lg-2 control-label">นามสกุล</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="lnth" placeholder="ภาษาไทย"  />
                    </div>
                  </div>
                  <br><br>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="neng" placeholder="ภาษาอังกฤษ"  />
                    </div>
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="lneng" placeholder="ภาษาอังกฤษ"  />
                    </div>
                  </div>
                  <br><br>

                  <div class="form-group">
                    <label class="col-lg-2 control-label">รหัสนักวิจัย</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="idres"  />
                    </div>
                    <label class="col-lg-2 control-label">เบอร์โทร</label>
                    <div class="col-lg-4">
                      <input type="tel" class="form-control" name="tell"   />
                    </div>
                  </div>
                  <br><br>

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ที่อยู่</label>
                    <div class="col-lg-4">
                      <textarea class="form-control"  name="address">   </textarea>
                    </div>
                    <label class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-4">
                      <input type="email" class="form-control" name="email"   />
                    </div>
                  </div>
                  <br><br><br>

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ตำแหน่ง</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="pos_detail"   />
                    </div>
                    <label class="col-lg-2 control-label">หน่วยงานสังกัด</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="work_unit"   />
                    </div>

                  </div>
                  <br><br>

                  <div class="form-group">
                   <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                   <div class="col-lg-4">
                    <input type="file" name="upimg">
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
      </tr>
      <!-- Show &Join table -->
      <tr>
        <td>1</td>
        <td>คอมพิวเตอร์</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-primary"data-toggle="modal" data-target=".bs-example-modal-sm-addspecialization"><i class="fa fa-plus"></i>เพิ่มความเชียวชาญ</button></td>
        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm-editspecialization"><i class="fa fa-wrench"></i> แก้ไข</button></td>
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
                  <input type="text" class="form-control" name="adddetail"   />
                </div>
              </div>
              <br><br>

            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>เพิ่มความเชียวชาญ</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>


        </div>
      </div>
    </div>

  </form>
  <!-- End popup เพิ่มความเชี่ยชาญ-->   

  <!-- start popup แก้ไขความเชี่ยชาญ -->
  <form id="" method="post" class="form-horizontal" action="">

    <div class="modal fade bs-example-modal-sm-editspecialization" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">

         <div class="row">
           <div class="col-lg-9 col-lg-offset-1">
            <hr>
            <center><h3>ความเชี่ยวชาญ</h3></center><br> 

            <div class="form-group">
                        <label class="control-label">ความเชียวชาญ</label>
              <div >
                <select class="form-control"  name="detail">
                  <option value="th">ไทย</option>
                  <option value="en">อังกฤษ</option>
                </select>
                <br><br>
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

</form>
<!-- End popup แก้ไขความเชี่ยชาญ-->   

</div>
</div>

<!-- /. row-->
<!-- star row-->
<div class="row">
  <div class=" col-md-offset-1 col-sm-10">
   <!-- ผลงานวิจัย -->
   <div class="panel panel-info">
     <div class="panel-heading">ผลงานวิจัย</div>

     <table class="table table-hover  table-hover table-striped table-condensed">
      <tr>
        <th>#</th>
        <th>ชื่อผลงานวิจัย</th>
        <th style="width: 15%">ปีที่ทำงานวิจัย</th>
        <th style="width: 15%">สถาน</th>
        <th style="width: 20%">รางวัลงานวิจัย</th>
        <th style="width: 15%">ประเภทรางวัล</th>
        <th></th>
        <th><button type="button" class="btn btn-primary"data-toggle="modal" data-target=".bs-example-modal-lg-addportfolio"><i class="fa fa-plus"></i>เพิ่มผลงานวิจัย</button></th>
      </tr>
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
     <!-- start popup เพิ่มผลงาานวิจัย-->
  <form id="" method="post" class="form-horizontal" action="">

    <div  class="modal fade bs-example-modal-lg-addportfolio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

 <div class="row">
            <div class="col-lg-9 col-lg-offset-1">
              <hr>
             <center><h3>เพิ่มผลงานวิจัย</h3></center> <br>

              <div class="form-group">
                <label class="col-lg-2 control-label">ชื่อผลงานวิจัย</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="name" placeholder="ภาษาไทย"   />
                </div>
                <label class="col-lg-2 control-label"></label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="name_eng"  placeholder="ภาษาอังกฤษ"  />
                </div>
              </div>
              <br><br>

              <div class="form-group"> 
                <label class="col-lg-2 control-label">ประเภท<br>ผลงาน</label>
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
                <label class="col-lg-2 control-label">เลขที่<br>สิทธิบัตร</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="patent"   />
                </div>
                <label class="col-lg-2 control-label">สถานภาพ<br>ผลงาน</label>
                <div class="col-lg-4">
                  <select class="form-control"  name="status" >
                    <option value="th">อย่ในช่วงดำเนินงาน</option>
                    <option value="en">สำเร้จแล้ว</option>
                  </select>
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
                <label class="col-lg-2 control-label">บทคัดย่อ</label>
                <div class="col-lg-4">
                  <textarea class="form-control" name="abstract"></textarea>
                </div>
                <label class="col-lg-2 control-label">แหล่งเงินทุน</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="finances"  />
                </div>
              </div><br><br><br>

              <div class="form-group">
                <label class="col-lg-2 control-label">รางวัลผลงานวิจัย</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="award"   />
                </div>
                <label class="col-lg-2 control-label">ประเภทรางวัล</label>
                <div class="col-lg-4">
                  <select class="form-control"  name="rea_type">
                    <option value="th">ไทย</option>
                    <option value="en">อังกฤษ</option>
                  </select>
                </div>
              </div>
              <br><br>

              <div class="form-group">
                <label class="col-lg-2 control-label">วันรับรางวัลผลงานวิจัย</label>
                <div class="col-lg-4">
                  <input type="date" class="form-control" name="rea_date"   />
                </div>
                <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                <div class="col-lg-4">
                  <input type="file" name="upfile">
                </div>
              </div><br><br>
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
<!-- End popup เพิ่มผลงาานวิจัย-->   
  <!-- start popup แก้ไขผลงาานวิจัย-->
  <form id="" method="post" class="form-horizontal" action="">

    <div  class="modal fade bs-example-modal-lg-editportfolio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

 <div class="row">
            <div class="col-lg-9 col-lg-offset-1">
              <hr>
             <center><h3>ผลงานวิจัย</h3></center> <br>

              <div class="form-group">
                <label class="col-lg-2 control-label">ชื่อผลงานวิจัย</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="name" placeholder="ภาษาไทย"   />
                </div>
                <label class="col-lg-2 control-label"></label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="name_eng"  placeholder="ภาษาอังกฤษ"  />
                </div>
              </div>
              <br><br>

              <div class="form-group"> 
                <label class="col-lg-2 control-label">ประเภท<br>ผลงาน</label>
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
                <label class="col-lg-2 control-label">เลขที่<br>สิทธิบัตร</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="patent"   />
                </div>
                <label class="col-lg-2 control-label">สถานภาพ<br>ผลงาน</label>
                <div class="col-lg-4">
                  <select class="form-control"  name="status" >
                    <option value="th">อย่ในช่วงดำเนินงาน</option>
                    <option value="en">สำเร้จแล้ว</option>
                  </select>
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
                <label class="col-lg-2 control-label">บทคัดย่อ</label>
                <div class="col-lg-4">
                  <textarea class="form-control" name="abstract"></textarea>
                </div>
                <label class="col-lg-2 control-label">แหล่งเงินทุน</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="finances"  />
                </div>
              </div><br><br><br>

              <div class="form-group">
                <label class="col-lg-2 control-label">รางวัลผลงานวิจัย</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="award"   />
                </div>
                <label class="col-lg-2 control-label">ประเภทรางวัล</label>
                <div class="col-lg-4">
                  <select class="form-control"  name="rea_type">
                    <option value="th">ไทย</option>
                    <option value="en">อังกฤษ</option>
                  </select>
                </div>
              </div>
              <br><br>

              <div class="form-group">
                <label class="col-lg-2 control-label">วันรับรางวัลผลงานวิจัย</label>
                <div class="col-lg-4">
                  <input type="date" class="form-control" name="rea_date"   />
                </div>
                <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                <div class="col-lg-4">
                  <input type="file" name="upfile">
                </div>
              </div><br><br>

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
<!-- /. row-s->

<!-- star row-->
<div class="row">
  <div class=" col-md-offset-1 col-sm-10">
   <!-- ประวัติการทำงาน -->
   <div class="panel panel-info">
     <div class="panel-heading">ประวัติการทำงาน</div>

     <table class="table table-hover  table-hover table-striped table-condensed">
      <tr>
        <th>เริ่มทำงาน</th>
        <th>ถึงวันที่</th>
        <th>สถานที่ทำงาน</th>
        <th>ตำแหน่ง</th>

      </tr>
      <!-- Show &Join table -->
      <tr>
        <td>13/5/2553</td>
        <td>ปัจจุบัน</td>
        <td>มหาลัยแม่โจ้</td>
        <td>อาจารย์</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-researcherwork "><i class="fa fa-wrench"></i> แก้ไข</button></td>

      </tr>
      <!--end -->
    </table>
     <!-- start popup แก้ไขประวัติการทำงาน-->
  <form id="" method="post" class="form-horizontal" action="">

    <div  class="modal fade bs-example-modal-lg-researcherwork" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
 <div class="row">
            <div class="col-lg-9 col-lg-offset-1">
              <hr>
              <center><h3>ประวัติการทำงาน</h3></center> <br>

              <div class="form-group">
                <label class="col-lg-2 control-label">วันที่เริ่มทำงาน</label>
                <div class="col-lg-4">
                  <input type="date" class="form-control" name="work_start"  />
                </div>
                <label class="col-lg-2 control-label">วันที่สิ้นสุดการทำงาน</label>
                <div class="col-lg-4">
                  <input type="date" class="form-control" name="work_end"  />
                </div>
              </div>
              <br><br>

              <div class="form-group">
                <label class="col-lg-2 control-label">สถานที่ทำงาน</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="work_office"  />
                </div>

              </div>
              <br><br>
<div class="modal-footer">
              <button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

            </div>
          </div>

      </div>
    </div>
  </div>

</form>
<!-- End popup แก้ไขประวัติการทำงาน-->   

  </div>
</div>
</div>
<!-- /. row-->
<!-- star row-->
<div class="row">
  <div class=" col-md-offset-1 col-sm-10">
   <!-- ประวัติการศึกษา -->
   <div class="panel panel-info">
     <div class="panel-heading">ประวัติการศึกษา</div>

     <table class="table table-hover  table-hover table-striped table-condensed">
      <tr>
        <th>ปีการศึกษา</th>
        <th>ระดับการศึกษา</th>
        <th>คณะ</th>
        <th>สาขาวิชา</th>
        <th>ชื่อสถาบัน</th>
      </tr>
      <!-- Show &Join table -->
      <tr>
        <td>2553</td>
        <td>ปริญญาตรี</td>
        <td>วิทยาศาสตร์</td>
        <td>วิทยาการคอม</td>
        <td>แม่โจ้</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-education "><i class="fa fa-wrench"></i> แก้ไข</button></td>
      </tr>
      <!--end -->
    </table>

     <!-- start popup แก้ไขประวัติการศึกษา-->
  <form id="" method="post" class="form-horizontal" action="">

    <div  class="modal fade bs-example-modal-lg-education" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
 <div class="row">
            <div class="col-lg-9 col-lg-offset-1">
              <hr>
              <center><h3>ประวัติการศึกษา</h3></center> <br>

              <div class="form-group">
                <label class="col-lg-2 control-label">ระดับการศึกษา</label>
                <div class="col-lg-4">
                  <select class="form-control"  name="degree">
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
                  <input type="text" class="form-control" name="faculty"  />
                </div>
                <label class="col-lg-2 control-label">สาขาวิชา</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="major"  />
                </div>
              </div>
              <br><br>

              <div class="form-group">
                <label class="col-lg-2 control-label">มหาวิทยาลัย</label>
                <div class="col-lg-4">
                 <select class="form-control"  name="degree">
                  <option value="แม่โจ้">แม่โจ้</option>
                  <option value="เชียงใหม่">เชียงใหม่</option>
                </select>
              </div>
            </div>
            <br><br>
<div class="modal-footer">
              <button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

            </div>
          </div>

      </div>
    </div>
  </div>

</form>
<!-- End popup แก้ไขประวัติการศึกษา-->   


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
         <a href="<?php echo base_url("backend/researcher")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i>กลับ</button></a>
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
