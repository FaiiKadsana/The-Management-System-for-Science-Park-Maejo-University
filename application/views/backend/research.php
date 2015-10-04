<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-header">
                             <small>Home</small>
                        </h1>
                        <ol class="breadcrumb">
                             <li><i class="active"> <i class="fa fa-home"></i></i><a href="<?php echo base_url("backend/index")?>">Home</a></li><li><i class="fa fa-pencil"></i><a href="<?php echo base_url("backend/research")?>">จัดการข้อมูลผลงานวิจัย</a></li>
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
                   <tr class="bg-success"></p>
                        <td width="5%">#</td>
                        <td width="10%">ชื่อ</td>
                        <td width="10%">นามสกุล</td>
                         <td width="25%">ชื่อผลงานวิจัย</td>
                        <td width="20%">หน่วยงาน</td>
                        <td width="20%">ประเภทผลงานวิจัย</td>
                                       
                     </tr>   
                    
                    <!-- Show &Join table -->

                     <tr class="bg-success"></p>
                       <td width="5%">1</td>
                        <td width="10%">อลงกรณ์</td>
                        <td width="10%">เอยู่เกิด</td>
                         <td width="20%">กังหันลมน้ำ</td>
                        <td width="20%">มหาลัยแม่โจ้</td>
                        <td width="20%">วิทยาการคอมพิวเตอร์</td>    
                        <td><a href=""><button type="button" class="btn btn-info" id="viewresearcher"><i class="fa fa-eye"></i>  ดู</button></a></td>          
                        <td><a href=""><button type="button" class="btn btn-warning" id="editresearcher"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
                        <td><a href=""><button type="button" class="btn btn-danger"><i class="fa fa-times"></i>  ลบ</button></a></td>                     
                     </tr>       
                     
                     <!-- End -->

               </table>






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
