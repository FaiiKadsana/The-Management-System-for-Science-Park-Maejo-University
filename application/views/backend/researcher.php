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
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/researcher")?>">จัดการข้อมูลนักวิจัย</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->
   <!-- Star row-->
   <div class="row">
    <div class="col-sm-12">
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
          <th width="15%">#</th>
          <th width="20%">รหัสนักวิจัย</th>
          <th width="25%">ชื่อ</th>
          <th width="25%">นามสกุล</th>   
          <th></th>
          <th></th>
          <th></th>
          <th></th>

        </tr>   

        <!-- Show &Join table -->

        <tr class="bg-success">
          <td width="15%">1</td>
          <td width="20%">2589</td>
          <td width="25%">อลงกรณ์</td>
          <td width="25%">อยู่เกิด</td>        
          <td><a href="<?php echo base_url("backend/viewresearcher")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> 
          <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addresearcher"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
          <td><a href="<?php echo base_url("backend/editresearcher")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm-delresearcher"><i class="fa fa-times"></i>  ลบ</button></td>                     
        </tr>       
      </table>     
      <!-- End -->
      <!-- popup add ข้อมูล-->
      <form id="" method="post" class="form-horizontal" action="">

        <div class="modal fade bs-example-modal-lg-addresearcher" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
                  <label class="col-lg-2 control-label">ความ<br>เชียวชาญ</label>
                  <div class="col-lg-4">
                    <select class="form-control"  name="detail">
                      <option value="th">ไทย</option>
                      <option value="en">อังกฤษ</option>
                    </select>
                  </div>
                </div>
                <br><br>

              </div>
            </div>
            <!-- End  row ประวัติส่วนตัว-->

            <!-- Start  row ผลงานวิจัย-->
            <div class="row">
              <div class="col-lg-9 col-lg-offset-1">
                <hr>
                <center><h3>ข้อมูลผลงานวิจัย</h3></center> <br>

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
            <!-- End  row ผลงานวิจัย-->
            <!-- Start  row ประวัติการทำงาน-->
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

              </div>
            </div>
            <!-- End  row ประวัติการทำงาน-->
            <!-- Start  row ประวัติการศึกษา-->
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

            </div>
          </div>
          <!-- End  row ประวัติการศึกษา-->


          <div class="modal-footer">
           <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
           <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
         </div>

       </div>
     </div>
   </div>

 </form>
 <!--end popup เพิ่ม -->
 <!--end popup ลบ -->
 <form id="" method="post" class="form-horizontal" action="">
  <div class="modal fade bs-example-modal-sm-delresearcher" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
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
<!-- /.row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
