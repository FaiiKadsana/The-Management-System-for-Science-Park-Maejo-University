<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-header">
                             <small>Home</small>
                        </h1>
                        <ol class="breadcrumb">
                             <li><i class="active"> <i class="fa fa-home"></i></i><a href="<?php echo base_url("backend/index")?>">Home</a></li><li><i class="fa fa-pencil"></i><a href="<?php echo base_url("backend/researcher")?>">จัดการข้อมูลนักวิจัย</a></li>
                        </ol>
                    </div>
                </div></br>
                <!-- /.row -->
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

                     <tr class="bg-success"></p>
                        <td width="15%">1</td>
                        <td width="20%">2589</td>
                        <td width="25%">อลงกรณ์</td>
                        <td width="25%">อยู่เกิด</td>        
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-eye"></i>  ดู</button></td>  
                        <td><a href=""><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button></a></td>          
                        <td><a href=""><button type="button" class="btn btn-warning" id="editresearcher"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
                        <td><a href=""><button type="button" class="btn btn-danger"><i class="fa fa-times"></i>  ลบ</button></a></td>                     
                     </tr>       
                     
                     <!-- End -->

               </table>

 <!-- Large modal -->





<!-- Large modal -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
