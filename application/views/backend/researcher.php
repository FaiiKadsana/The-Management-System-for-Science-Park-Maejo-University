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
           <td>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search " required>
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" ><i class="fa fa-search"></i></button>
              </span>
            </div>
          </td>
          <td>
          </td>
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
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-eye"></i>  ดู</button></td> 
          <td><a href=""><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button></a></td>          
          <td><a href=""><button type="button" class="btn btn-warning" id="editresearcher"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td><a href=""><button type="button" class="btn btn-danger"><i class="fa fa-times"></i>  ลบ</button></a></td>                     
        </tr>       
      </table>     
      <!-- End -->

      <!-- Popup / ดูข้อมูลนัวิจัย-->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="container-fluid">

              <hr>
              <!-- Star row-->
              <div class="row">
               <!-- รูปนักวิจัย-->
               <div class="col-sm-2">
                <img width="145px" height="200px" src="<?php echo base_url("asset2/img/011.jpg") ?>"> <br><br>
                <center>รหัส : <input type="text" name="idres" disabled value="5268" size="5">  </center>           
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
