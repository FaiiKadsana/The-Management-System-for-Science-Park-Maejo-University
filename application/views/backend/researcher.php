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
          <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-smdetali"><i class="fa fa-plus"></i> เพิ่มตำแหน่ง</button>
          </td>
           <td width="10px"></td>
          <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-smuniversity"><i class="fa fa-plus"></i> เพิ่มมหาวิทยาลัย</button>
          </td>
        </tr>
      </table>

    </center>
    <!-- Popup / เพิ่มตำแหน่ง-->
    <div  class="modal fade bs-example-modal-smdetali" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="container-fluid">
            <hr>
            ตำแหน่ง : <input class="form-control"  type="text" name="detali1" > <br>
            <table>
             <tr>
               <td width="180px"></td>
               <td> <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>เพิ่ม</button></td>
             </tr>
           </table>
           <hr>

         </div>
       </div>
     </div>
   </div>
   <!--  End Popup / ดูข้อมูลนัวิจัย-->
   <!-- Popup / เพิ่มมหาลัย-->
    <div  class="modal fade bs-example-modal-smuniversity" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="container-fluid">
            <hr>
            มหาวิทยาลัย: <input class="form-control"  type="text" name="university1" > <br>
            <table>
             <tr>
               <td width="180px"></td>
               <td> <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>เพิ่ม</button></td>
             </tr>
           </table>
           <hr>

         </div>
       </div>
     </div>
   </div>
   <!--  End Popup / ดูข้อมูลนัวิจัย-->
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
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg-viewresearcher"><i class="fa fa-eye"></i>  ดู</button></td> 
          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addresearcher"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
          <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editresearcher"><i class="fa fa-wrench"></i>  แก้ไข</button></td>
          <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg-delresearcher"><i class="fa fa-times"></i>  ลบ</button></td>                     
        </tr>       
      </table>     
      <!-- End -->

      <!-- Popup / ดูข้อมูลนัวิจัย-->
      <div class="modal fade bs-example-modal-lg-viewresearcher" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="container-fluid">

              <hr>
              <!-- Star row-->
              <div class="row">
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
                </table>
                <!-- End -->
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
                  <!--end -->
                </table>

              </div>
            </div>

          </div>

          <!-- /. row-->
          <!-- star row-->
          <div class="row">
            <div class=" col-md-offset-1 col-sm-10">
             <!-- ผลงานวิจัย -->
             <div class="panel panel-primary">
               <div class="panel-heading">ผลงานวิจัย</div>

               <table class="table table-hover  table-hover table-striped table-condensed">
                <tr>
                  <th>#</th>
                  <th>ชื่อผลงานวิจัย</th>
                  <th style="width: 15%">ปีที่ทำงานวิจัย</th>
                  <th style="width: 15%">สถาน</th>
                </tr>
                <!-- Show &Join table -->
                <tr>
                  <td>1</td>
                  <td>กังหันลบ</td>
                  <td style="width: 15%">2558</td>
                  <td style="width: 15%">สำเร็จ</td>
                </tr>
                <!--end -->
              </table>

            </div>
          </div>
        </div>
        <!-- /. row-->
        <!-- star row-->
        <div class="row">
          <div class=" col-md-offset-1 col-sm-10">
           <!-- ประวัติการทำงาน -->
           <div class="panel panel-primary">
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
              <!--end -->
            </table>

          </div>
        </div>
      </div>
      <!-- /. row-->
      <!-- star row-->
      <div class="row">
        <div class=" col-md-offset-1 col-sm-10">
         <!-- ประวัติการศึกษา -->
         <div class="panel panel-primary">
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
            <!--end -->
          </table>

        </div>
      </div>
    </div>
    <!-- /. row-->
    <hr>
  </div>
</div>
</div>
</div>
<!--  End Popup / ดูข้อมูลนัวิจัย-->
<!-- Popup / เพิ่มข้อมูลนัวิจัย-->
<div class="modal fade bs-example-modal-lg-addresearcher" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container-fluid">
        <hr > 
        <form id="defaultForm" method="post" class="form-horizontal" action="reseacher">
          <!-- star row-->
          <div class="row">
            <div class="col-lg-11  ">

              <center> <h3>ประวัตินักวิจัย</h3></center>
              <div class="form-group">
                <label class="col-lg-3 control-label">ชื่อ</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="fnth" placeholder="ชื่อภาษาไทย" />
                </div>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="lnth" placeholder="นามสกุลภาษาไทย" />
                </div>
              </div>

              <div class="form-group ">
                <label class="col-lg-3 control-label">ชื่อ </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="fnen" placeholder="ชื่อภาษาอังกฤษ" />
                </div>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="lnen" placeholder="นามสกุลภาษาอังกฤษ" />
                </div>
              </div> 

            </div>
          </div>
          <!-- /. row--> 
          <!-- star row-->
          
          <div class="row">
            <div class="col-lg-11 col-lg-offset-1 ">

             <div class="form-group ">
              <label class="col-lg-2 control-label">รหัสนักวิจัย</label>
              <div class="col-lg-3">
                <input type="text" class="form-control" name="idre"  />
              </div>
              <label class="col-lg-2 control-label">เบอร์โทร</label>
              <div class="col-lg-3">
                <input type="tel" class="form-control" name="tel"  />
              </div>
            </div><br>  

            <div class="form-group ">
              <label class="col-lg-2 control-label">Email </label>
              <div class="col-lg-3">
                <input type="email" class="form-control" name="email" />
              </div>
              <label class="col-lg-2 control-label">ตำแหน่ง</label>
              <div class="col-lg-3">
                <select  class="form-control" name="detail">
                  <option value="อาจารย์">อาจารย์</option>
                  <option value="ดร.">เดอร์เตอร์</option>
                </select>
              </div>
            </div><br>

            <div class="form-group ">
              <label class="col-lg-2 control-label">ที่อยู่</label>
              <div class="col-lg-3">
                <textarea class="form-control" name="address" >   </textarea> 
              </div>
              <label class="col-lg-2 control-label">หน่วยงานสังกัด </label>
              <div class="col-lg-3">
                <input type="text" class="form-control" name="institution" />
              </div>
            </div>

          </div>      
        </div>
        <!-- /. row-->
        <hr>

        <!-- star row-->

        <div class="row">
          <div class="col-lg-11 col-lg-offset-1  ">

           <center> <h3>ประวัติการศึกษา</h3></center>

           <div class="form-group ">
            <label class="col-lg-2 control-label">การศึกษา</label>
            <div class="col-lg-3">
              <select  class="form-control" name="degree">
                <option value="ปริญญาเอก">ปริญญาเอก</option>
                <option value="ปริญญาโท">ปริญญาโท</option>
                <option value="ปริญญาตรี">ปริญญาตรี</option>
              </select>
            </div>
            <label class="col-lg-2 control-label">ปีการศึกษา</label>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="dct_year"  />
            </div>
          </div><br>  

          <div class="form-group ">
            <label class="col-lg-2 control-label">คณะ </label>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="faculty" />
            </div>
            <label class="col-lg-2 control-label">สาขาวิชา</label>
            <div class="col-lg-3">
             <input type="text" class="form-control" name="major" />
           </div>
         </div><br>

         <div class="form-group ">
          <label class="col-lg-2 control-label">มหาวิทยาลัย</label>
          <div class="col-lg-3">
            <select  class="form-control" name="university">
              <option value="ปริญญาเอก">มหาวิทยาลัยแม่โจ้</option>
              <option value="ปริญญาโท">มหาลัยเชียงใหม่</option>
            </select>
          </div>
        </div>
      </div>      
    </div>
    <!-- /. row-->
    <hr>
    <!-- star row-->

    <div class="row">
      <div class="col-lg-11 col-lg-offset-1  ">

       <center> <h3>ประวัติการทำงาน</h3></center>

       <div class="form-group ">
        <label class="col-lg-2 control-label">วันที่เริ่มทำงาน</label>
        <div class="col-lg-3">
          <input type="date" class="form-control" name="work_start">
        </div>
        <label class="col-lg-2 control-label">วันที่สิ้นสุดทำงาน</label>
        <div class="col-lg-3">
          <input type="date" class="form-control" name="work_end">
        </div>
      </div><br>  

      <div class="form-group ">
        <label class="col-lg-2 control-label">สถานที่ทำงาน </label>
        <div class="col-lg-3">
          <input type="text" class="form-control" name="office" />
        </div>
        <label class="col-lg-2 control-label"></label>
        <div class="col-lg-3">
        <button  style="50px"  type="button" class="btn btn-primary " ><i class="fa fa-plus"></i>  เพิ่ม</button>
        </div>
      </div><br>


    </div>      
  </div>
  <!-- /. row-->
  <hr>

</div>
</div>
</div>
</div>
</form>
<!--  End Popup / ดูข้อมูลนัวิจัย-->
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
