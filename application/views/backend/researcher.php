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
          <td><a href="<?php echo base_url("backend/viewresearcher")?>"><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg-viewresearcher"><i class="fa fa-eye"></i>  ดู</button></a></td> 
          <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addresearcher"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
          <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editresearcher"><i class="fa fa-wrench"></i>  แก้ไข</button></td>
          <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg-delresearcher"><i class="fa fa-times"></i>  ลบ</button></td>                     
        </tr>       
      </table>     
      <!-- End -->
      <form >

        <div class="modal fade bs-example-modal-lg-addresearcher" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Start  row ประวัติส่วนตัว-->
              <div class="row">
                <div class="col-lg-9 col-lg-offset-1">
                  <hr>
                  <center><h3>ข้อมูลนักวิจัย</h3></center> 

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ชื่อ</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="nth" placeholder="ภาษาไทย"  />
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
                    <label class="col-lg-2 control-label">ตำแหน่ง</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="pos_detail"   />
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">ความเชียวชาญ</label>
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
                  <center><h3>ข้อมูลผลงานวิจัย</h3></center> 

                  <div class="form-group">
                    <label class="col-lg-2 control-label">วันที่เริ่มทำงาน</label>
                    <div class="col-lg-4">
                      <input type="data" class="form-control" name="work_start"   />
                    </div>
                    <label class="col-lg-2 control-label">วันที่สินสุดการทำงาน</label>
                    <div class="col-lg-4">
                      <input type="data" class="form-control" name="work_end"  />
                    </div>
                  </div><br><br>

                  <div class="form-group"> 
                    <label class="col-lg-2 control-label">ประเภทผลงาน</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="Ret_detail"  />
                    </div>
                    <label class="col-lg-2 control-label">สถานที่ทำงาน</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="office"   />
                    </div> 
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">รางวัลงานวิจัย</label>
                    <div class="col-lg-4">
                     <select class="form-control"  name="award">
                        <option value="th">ไทย</option>
                        <option value="en">อังกฤษ</option>
                      </select>
                    </div>
                    <label class="col-lg-2 control-label">
                    <select class="form-control"  name="detail">รางวัลงานวิจัย</label>
                        <option value="th">ไทย</option>
                        <option value="en">อังกฤษ</option>
                      </select></label>
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
                    <label class="col-lg-3 control-label">ตำแหน่ง</label>
                    <div class="col-lg-5">
                      <select class="form-control"  name="detail">
                        <option value="th">ไทย</option>
                        <option value="en">อังกฤษ</option>
                      </select>
                    </div>
                  </div><br><br>
                  

                </div>
              </div>
              <!-- End  row ผลงานวิจัย-->


              <div class="modal-footer">
               <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>

           </div>
         </div>
       </div>

     </form>

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
