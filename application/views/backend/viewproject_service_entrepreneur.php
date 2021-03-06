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
         <li><i class="fa fa-eye"></i><a href="<?php echo base_url("backend/viewproject_service")?>"> ดูโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->


   <div class="panel panel-danger">
    <div class="panel-heading">ข้อมูลผู้ประกอบการ</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-offset-3  col-sm-6">

          <div class="panel panel-info">
            <div class="panel-heading">ข้อมูลผู้ติดต่อ</div>

            <!-- Show &Join table -->

            <table class="table table-bordered">
              <tr>
                <td>ชื่อผู้ติดต่อ : <?php echo $rowservice->P_title;?> &nbsp;&nbsp; <?php echo $rowservice->P_name;?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rowservice->P_lastname;?></td> 
              </tr>
              <tr>
                <td> เลขที่บัตรประชาชน: <?php echo $rowservice->P_id_card;?></td>
              </tr>
              <tr>
                <td>ตำแหน่ง: <?php echo $rowservice->P_position;?></td>
              </tr>
              <tr>
                <td>เบอร์โทรศัพท์ : <?php echo $rowservice->P_phone;?></td>
              </tr>
              <tr>
                <td>E-mail : <?php echo $rowservice->P_mail;?></td>    
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- End -->
    <div class="row">
      <div class="col-lg-offset-3  col-sm-6">
        <div class="panel panel-info">
          <div class="panel-heading">ข้อมูลทางธุรกิจ</div>

          <!-- Show &Join table -->

          <table class="table table-bordered">
            <tr>
              <td>ชื่อกิจการ :  <?php echo $rowservice->C_name;?></td> 
            </tr>
            <tr>
              <td>ที่อยู่ : <?php echo $rowservice->C_address;?></td>
            </tr>
            <tr>
              <td>โทรศัพท์ : <?php echo $rowservice->C_phone;?></td> 
            </tr>
            <tr>
              <td>โทรสาร : <?php echo $rowservice->C_fax;?></td>
            </tr>
            <tr>
              <td>website : <?php echo $rowservice->C_website;?></td>
            </tr>
            <tr>
              <td>เลขที่ทะเบียนพาณิชย์ : <?php echo $rowservice->C_no_com_etc;?></td>    
            </tr>
            <tr>
              <td>ประเภทกิจการ: <?php echo $rowservice->C_company_type;?></td>    
            </tr>
            <tr>
              <td>ลักษณะการประกอบการ : <?php echo $rowservice->C_undertaking;?></td>    
            </tr>
            <tr>
              <td>สาขาอุตสาหกรรมที่ทำอยู่: <?php echo $rowservice->C_industry_type;?></td>    
            </tr>
            <tr>
              <td>เงินจดทะเบียน : <?php echo $rowservice->C_investment;?> บาท</td>    
            </tr>
            <tr>
              <td>จำนวนปีที่ประกอบการ:<?php echo $rowservice->C_no_year;?> ปี</td>    
            </tr>
          </table>
        </div>
      </div>

      <!-- End -->

    </div>
  </div> 



</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php } ?>