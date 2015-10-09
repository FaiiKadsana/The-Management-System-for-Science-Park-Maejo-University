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
         <li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/project_coresearcher")?>">จัดการโครงการ</a></li>
         <li><i class="fa fa-eye"></i> <a href="<?php echo base_url("backend/viewproject_coresearcher")?>">ดูโครงการ</a></li>
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
              <td>ที่อยู่ที่สามรถติดต่อไดั : นนทบุรี่</td>
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


      <div class="row">
        <div class="col-lg-offset-1 col-sm-10">
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

            <!--end -->
          </table>

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
                <td><p data-toggle="modal" data-target=".bs-example-modal-lg-businessman">585</p></td>
                <td>อลงกร</td>
                <td>อยู่เกิด</td>
                <td>บริษัทจำกัด</td>
              </tr>
              <!--end -->
            </table>
            
            <div class="modal fade bs-example-modal-lg-businessman" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  ...
                </div>
              </div>
            </div>


          </div>

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
              <th>ชื่อผลงานวิจัย</th>
              <th style="width: 15%">ปีที่ทำงานวิจัย</th>
              <th style="width: 15%">สถาน</th>
              <th style="width: 20%">รางวัลงานวิจัย</th>
              <th style="width: 15%">ประเภทรางวัล</th>
              <th></th>

              <!-- Show &Join table -->
              <tr>
                <td>1</td>
                <td><p data-toggle="modal" data-target=".bs-example-modal-lg-portfolio">กังหันลบ</p></td>
                <td>2558</td>
                <td>สำเร็จ</td>
                <td>นานาชาติ</td>
                <td>n/s</td>
                <td></td>
              </tr>
              <!--end -->
            </table>

            <div class="modal fade bs-example-modal-lg-portfolio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  ...
                </div>
              </div>
            </div>


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
         <a href="<?php echo base_url("backend/project_coresearcher")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i>กลับ</button></a>
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