<?php  foreach ($service as $rowservice) { ?>

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
         <li><i class="fa fa-eye"></i><a href="<?php echo base_url("backend/viewproject_service")?>">ดูโครงการ</a></li>
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
              <td>ชื่อนักวิจัย : <?php echo $rowservice->Rec_name_thai;?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rowservice->Rec_ln_thai;?></td> 
            </tr>
            <tr>
              <td><?php echo $rowservice->Rec_name_eng;?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rowservice->Rec_ln_eng;?></td>
            </tr>
            <tr>
              <td>ตำแหน่ง : <?php echo $rowservice->Rec_position;?></td>
            </tr>
            <tr>
              <td>หน่วยงานสังกัด : <?php echo $rowservice->Rec_unit;?></td> 
            </tr>
            <tr>
              <td>ที่อยู่ที่สามรถติดต่อไดั : <?php echo $rowservice->Rec_address;?> </td>
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
          </table>
          <!-- End -->
        </div>

        <div class="col-sm-5">
          <!-- ความเชี่ยวชาญ -->
          <div class="panel panel-success">
           <div class="panel-heading">ความเชี่ยวชาญ</div>

           <table class="table table-hover  table-hover table-striped table-condensed">
            <tr>

              <th>ความเชี่ยวชาญ</th>
            </tr>
            <!-- Show &Join table -->
            <tr>

              <td><?php echo $rowservice->Rec_office;?></td>
            </tr>
            <!--end -->
          </table>

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

                <th>ชื่อกิจการ</th>
                <th>ประเภทกิจการ</th>
                <th>ชื่อผู้ติดต่อ</th>
                <th>ตำแหน่งผู้ติดต่อ</th>
              </tr>
              <!-- Show &Join table -->
              <tr>

                <td><a  href="<?php echo base_url("backend/viewproject_service_entrepreneur")?>"><p  class="co" ><?php echo $rowservice->C_name;?></p></a></td>
                <td><?php echo $rowservice->C_company_type;?></td>
                <td><?php echo $rowservice->P_name;?></td>
                <td><?php echo $rowservice->P_position;?></td>
              </tr>
              <!--end -->
            </table>
            
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

              <th>ชื่อผลงานวิจัย</th>
              <th style="width: 15%">ปีที่ทำงานวิจัย</th>
              <th style="width: 15%">สถานภาพโครงการ</th>
              <th style="width: 20%">ประเภทรางวัล</th>
              <th style="width: 15%">วันที่ได้รับรางวัล</th>
              <th></th>

              <!-- Show &Join table -->
              <tr>

                <td><a  href="<?php echo base_url("backend/viewproject_service_project")?>"><p class="co" ><?php echo $rowservice->Re_name1;?></p></a></td>
                <td><?php echo $rowservice->Re_start;?></td>
                <td><?php echo $rowservice->Re_status;?></td>
                <td><?php echo $rowservice->Rea_type;?></td>
                <td><?php echo $rowservice->Rea_date;?></td>
                <td></td>
              </tr>
              <!--end -->
            </table>



          </div>
        </div>

      </div>
      <!-- /. row-->
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
<?php } ?>