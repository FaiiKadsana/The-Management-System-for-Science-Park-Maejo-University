<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>TBI Platform</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/project_tbi")?>">จัดการโครงการ</a></li>
         <li><i class="fa fa-wrench"></i> <a href="<?php echo base_url("backend/editproject_tbi")?>">แก้ไขโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->
   <!-- Star row-->
   <div class="row">
     <div class="col-sm-12">
       <div class="panel panel-warning">
        <div class="panel-heading">TBI Platform</div>
        <div class="panel-body">


          <div class="col-sm-12">
            <!-- ข้อมูลนักวิจัย -->

            <!-- Show &Join table -->
            <table class="table table-bordered">
              <tr>
                <td>ชื่อ-นามสกุล: นาย อลงกรณ์  อยู่เกิด</td> 
              </tr>
              <tr>
                <td>เลขประจำตัวประชาชน : 1929900366417</td>
              </tr>
              <tr>
                <td>วันเกิด : 17/05/2536 </td> 
              </tr>
              <tr>
                <td>เชื่อชาติ : ไทย </td> 
              </tr>
              <tr>
                <td>ศาสนา : พุทธ </td> 
              </tr>
              <tr>
                <td>ที่อยู่ที่สามรถติดต่อไดั : 57/2 ม.1 ตำบล นาหมื่นศรี  อำเภอ นาโยง จังหวัด ตรัง</td>
              </tr>
              <tr>
                <td>เบอร์โทรศัพท์ที่ติดต่อสะดวก : 0857856130</td>
              </tr>
              <tr>
                <td>โทรสาร : 0857856130</td>
              </tr>
              <tr>
                <td>มือถือ : 0857856130</td>
              </tr>
              <tr>
                <td>E-mail : Alongkornyukerd@gmail.com</td>    
              </tr>
              <tr>
                <td>สถานะ: แม่โจ้</td>    
              </tr>
              <tr>
                <td>หมายเหตุ: แม่โจ้</td>    
              </tr>
              <tr>
               <td ><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editproject_tbi"><i class="fa fa-wrench"></i> แก้ไข</button></td>  
             </tr>
           </table>
           <!-- End -->
           <form id="" method="post" class="form-horizontal" >

            <div class="modal fade bs-example-modal-lg-editproject_tbi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">


                  <div class="panel panel-warning">
                    <div class="panel-heading">ข้อมูลส่วนบุคคล</div>
                    <div class="panel-body">


                      <div class="row">
                        <div class="col-lg-9 col-lg-offset-1">
                          <hr>
                          <center><h3>ข้อมูลส่วนบุคคล</h3></center><br> 

                          <div class="form-group">
                            <div class="col-lg-4">
                              <select class="form-control"  name="bus_title">
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
                            <label class="col-lg-2 control-label">เลขประจำตัวประชาชน</label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" name="rec_phone"   />
                            </div>
                            <label class="col-lg-2 control-label">วันเดือนปีเกิด</label>
                            <div class="col-lg-4">
                              <input type="date" class="form-control" name="rec_phone"   />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-12">
                              <label class="control-label">เชื่อชาติ</label>
                              <div class="funkyradio">                      
                                <table>
                                  <tr>    
                                    <td  width="25%">  <div class="funkyradio-warning">
                                      <input type="radio" name="bus" id="radio1" />
                                      <label for="radio1">ไทย</label>
                                    </div></td>  
                                    <td  width="25%"></td>
                                    <td  width="25%">  <div class="funkyradio-success">
                                      <input type="radio" name="bus" id="radio2" />
                                      <label for="radio2">อื่นๆ ระบุ:</label>
                                    </div> </td> </tr>
                                    <tr>   <td  width="25%"></td>
                                      <td  width="25%"></td>
                                      <td  width="25%"> <input type="text" class="form-control" name="bus_type"  /></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-12">
                                <label class="control-label">ศาสนา</label>
                                <div class="funkyradio">                      
                                  <table>
                                    <tr>    
                                      <td  width="25%">  <div class="funkyradio-warning">
                                        <input type="radio" name="bus_type" id="radio3" />
                                        <label for="radio3">พุทธ</label>
                                      </div></td>  
                                      <td  width="25%"> <div class="funkyradio-info">
                                        <input type="radio" name="bus_type" id="radio4" />
                                        <label for="radio4">คริสต์ </label>
                                      </div></td>  
                                      <td  width="25%">  <div class="funkyradio-success">
                                        <input type="radio" name="bus_type" id="radio5" />
                                        <label for="radio5">อิสลาม</label>
                                      </div>  </td>  </tr> 
                                      <tr>                 
                                        <td  width="25%">  <div class="funkyradio-warning">
                                          <input type="radio" name="bus_type" id="radio6" />
                                          <label for="radio6">อินดู</label>
                                        </div></td> 
                                        <td  width="25%">  <div class="funkyradio-success">
                                          <input type="radio" name="bus_type" id="radio28" />
                                          <label for="radio28">อื่นๆ ระบุ:</label>
                                        </div> </td> </tr>
                                        <tr>   <td  width="25%"></td>
                                          <td  width="25%"> <input type="text" class="form-control" name="bus_type"  /></td>

                                        </table>
                                      </div>
                                    </div>

                                  </div><br>




                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">ที่อยู่</label>
                                    <div class="col-lg-4">
                                      <textarea class="form-control"  name="rec_address">   </textarea>
                                    </div>
                                    <label class="col-lg-2 control-label">ตำบล</label>
                                    <div class="col-lg-4">
                                      <select class="form-control"  name="rec_subdistrict">
                                        <option value="ศ.ดร.">หนองหาร</option>
                                        <option value="รศ.ดร.">นาหมื่นศรี</option>
                                      </select>
                                    </div>
                                  </div>


                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">อำเภอ</label>
                                    <div class="col-lg-4">
                                      <select class="form-control"  name="rec_district">
                                        <option value="ศ.ดร.">สันทราย</option>
                                        <option value="รศ.ดร.">นาโยง</option>
                                      </select>
                                    </div>
                                    <label class="col-lg-2 control-label">จังหวัด</label>
                                    <div class="col-lg-4">
                                      <select class="form-control"  name="rec_province">
                                        <option value="ศ.ดร.">เชียงใหม่</option>
                                        <option value="รศ.ดร.">ตรัง</option>
                                      </select>
                                    </div>
                                  </div>


                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">โทรศัะพท์ที่ติดต่อสะดวก</label>
                                    <div class="col-lg-4">
                                      <input type="tel" class="form-control" name="rec_phone"   />
                                    </div>
                                    <label class="col-lg-2 control-label">โทรสาร</label>
                                    <div class="col-lg-4">
                                      <input type="tel" class="form-control" name="rec_mail"   />
                                    </div>
                                  </div>


                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">มือถือ</label>
                                    <div class="col-lg-4">
                                      <input type="tel" class="form-control" name="rec_phone"   />
                                    </div>
                                    <label class="col-lg-2 control-label">E-mail</label>
                                    <div class="col-lg-4">
                                      <input type="email" class="form-control" name="rec_mail"   />
                                    </div>
                                  </div>

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




                  
                </div>


              </div>
            </div>
            <!-- /. row-->
          </div>
        </div>


<div class="row">
   <div class="col-sm-12">
     <table>
       <tr>
         <td width="80%">
         </td>
         <td width="80%">
         </td>
         <td>
           <a href="<?php echo base_url("backend/project_tbi")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
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
