<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>จัดการซื้อขายงานวิจัย</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/dealing")?>">จัดการซื้อขายงานวิจัย</a></li>
         <li><i class="fa fa-eye"></i> <a href="<?php echo base_url("backend/editdealing")?>">แก้ไขการซื้อขายงานวิจัย</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->

   <!-- Star row-->
   <div class="row">
     <div class="col-sm-12">
       <div class="panel panel-warning">
        <div class="panel-heading">จัดการซื้อขายงานวิจัย</div>
        <div class="panel-body">



          <div class="col-sm-12">
            <!-- ข้อมูลนักวิจัย -->

            <!-- Show &Join table -->
            <table class="table table-bordered">
              <tr>
              <td>ชื่อโครงการ  : อ. อลงกรณ์  อยู่เกิด</td> 
              </tr>
              <tr>
                <td>ขายวันที่ : 18/05/2557</td>
              </tr>
              <tr>
                <td>ราคา : อาจารย์</td>
              </tr>
              <tr>
                <td>ผู้ซื้อ : clud FriA</td> 
              </tr>
               <tr>
                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editcatalog"><i class="fa fa-wrench"></i> แก้ไข</button></td> 
              </tr>
            
            </table>
            <!-- End -->


          <!-- start popup -->
          <form id="" method="post" class="form-horizontal" action="">

            <div class="modal fade bs-example-modal-lg-editcatalog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                 <div class="row">
                   <div class="col-lg-9 col-lg-offset-1">
                    <hr>
                    <center><h3>จัดการซื้อขายงานวิจัย</h3></center><br> 
                    
                    <div class="form-group">
                     <label class="col-lg-2 control-label">ชื่อโครงการ</label>
                     <div class="col-lg-4">
                      <input type="text" class="form-control" name=""   />
                    </div>
                    <label class="col-lg-2 control-label">ขายวันที่</label>
                    <div class="col-lg-4">
                      <input type="date" class="form-control" name=""   />
                    </div>
                  </div>
                  <br><br>


                  <div class="form-group">
                    <label class="col-lg-2 control-label">ราคา</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name=""   />
                    </div>
                    <label class="col-lg-2 control-label">ผู้ซื้อ</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name=""   />
                    </div>
                  </div>
                  <br><br>

                  
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
    <!-- End popup --> 


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
           <a href="<?php echo base_url("backend/dealing")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
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
