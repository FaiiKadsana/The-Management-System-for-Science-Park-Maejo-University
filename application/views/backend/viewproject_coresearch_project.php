 <?php  foreach ($coresearch_irct as $row) { ?>

 <div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>Co-Research Platform</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/project_coresearch")?>">จัดการโครงการ</a></li>
         <li><i class="fa fa-eye"></i><a href="<?php echo base_url("backend/viewproject_coresearch")?>">ดูโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->


                   <div class="panel panel-danger">
                    <div class="panel-heading">ข้อมูลโครงการ</div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-offset-3  col-sm-6">

                          <div class="panel panel-info">
                            <div class="panel-heading">โครงการ</div>

                            <!-- Show &Join table -->

                            <table class="table table-bordered">
                              <tr>
                                <td>ชื่อโครงการ : <?php echo $row->Re_name1;?></td> 
                              </tr>
                              <tr>
                                <td>กลุ่มอุตสาหกรรม: <?php echo $row->Re_industry_group;?></td>
                              </tr>
                               <tr>
                                <td>ปีที่เริ่มทำโครงการ: <?php echo $row->Re_start;?></td>    
                              </tr>
                              <tr>
                                <td>ปีที่สิ้นสุดทำโครงการ: <?php echo $row->Re_end;?></td>    
                              </tr>
                              <tr>
                                <td>เลขที่สิทธิบัตร: <?php echo $row->Re_id_patent;?></td>    
                              </tr>
                              <tr>
                                <td>สถานภาพโครงการ: <?php echo $row->Re_status;?></td>    
                              </tr>
                              <tr>
                                <td>แหล่งเงินทุนอุทยาน: <?php echo $row->Re_finances_sp;?></td>    
                              </tr>
                              <tr>
                                <td>แหล่งเงินทุนบริษัท: <?php echo $row->Re_finances_b;?></td>    
                              </tr>
                              <tr>
                                <td>บทสรุป: <?php echo $row->Re_abstract;?></td>    
                              </tr>
                               <tr>
                                <td>ประเภทรางวัล: <?php echo $row->Rea_type;?></td>    
                              </tr>
                              <tr>
                                <td>วันรับรางวัลผลงานวิจัย: <?php echo $row->Rea_date;?></td>    
                              </tr>
                               <td>
                                รูป : <img width="150px" height="200px" src="<?php echo base_url("asset2/img/011.jpg") ?>">
                                 </td>
                                <tr> 
                                <td>
                                สถานะโครงการ: <?php echo $row->Sp_status;?> 
                               </td>    
                             </tr>
                             <!--<tr> 
                                <td>
                                หมายเหตุ: รออนุมัติ
                               </td>    
                             </tr> --> 
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- End -->

                 


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php } ?>