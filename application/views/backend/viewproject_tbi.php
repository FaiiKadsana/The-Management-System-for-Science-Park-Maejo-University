<?php  foreach ($tbi as $rowtbi) { ?>
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
         <li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> 
         <a href="<?php echo base_url("backend/project_tbi")?>">จัดการโครงการ</a></li>
         <li><i class="fa fa-eye"></i> <a href="<?php echo base_url("backend/viewproject_tbi")?>">ดูโครงการ</a></li>
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
              <td>ชื่อ-นามสกุล: <?php echo $rowservice->Tbi_title;?>&nbsp;&nbsp; <?php echo $rowservice->Tbi_name1;?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rowservice->Tbi_lastname;?> </td> 
              </tr>
              <tr>
                <td>เลขประจำตัวประชาชน : <?php echo $rowservice->Tbi_code;?></td>
              </tr>
              <tr>
                <td>วันเกิด : <?php echo $rowservice->Tbi_birthday;?> </td> 
              </tr>
              <tr>
                <td>เชื่อชาติ : <?php echo $rowservice->Tbi_ethnicity;?> </td> 
              </tr>
              <tr>
                <td>ศาสนา : <?php echo $rowservice->Tbi_nationality;?> </td> 
              </tr>
              <tr>
                <td>ที่อยู่ที่สามรถติดต่อไดั : <?php echo $rowservice->Tbi_address;?></td>
              </tr>
              <tr>
                <td>เบอร์โทรศัพท์ที่ติดต่อสะดวก : <?php echo $rowservice->Tbi_tell;?></td>
              </tr>
               <tr>
                <td>โทรสาร : <?php echo $rowservice->Tbi_fax;?></td>
              </tr>
               <tr>
                <td>มือถือ : <?php echo $rowservice->Tbi_phone;?></td>
              </tr>
              <tr>
                <td>E-mail : <?php echo $rowservice->Tbi_mail;?></td>    
              </tr>
              <tr>
                <td>สถานะ: <?php echo $rowservice->Tbi_status;?></td>    
              </tr>
              <!-- <tr>
                <td>หมายเหตุ: <?php //echo $rowservice->Rec_ln_eng;?></td>    
              </tr> -->
            </table>
            <!-- End -->
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
