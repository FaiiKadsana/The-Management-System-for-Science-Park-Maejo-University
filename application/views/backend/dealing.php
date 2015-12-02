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
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/dealing")?>"> จัดการซื้อขายงานวิจัย</a></li>
       </ol>
     </div>
   </div></br></br>

   <form id="" method="post" class="form-horizontal" action="">

     <div class="row"> 
      <div class="col-sm-12 ">
        <center>
          <table >
            <tr>
              <td></td>
              <td><input type="text" class="form-control" placeholder="ชื่อโครงการ" name=""></td>
              <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button> </td>
              <td width="20%"><button class="btn btn-success" type="reset" > ล้างข้อมูล</button> </td>
              <td ><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addcatalog"><i class="fa fa-plus"></i> เพิ่ม</button></td>    
            </tr>
          </table>
        </center>
        <!-- /input-group -->
      </div>
    </div><br> 
  </form>       
  <!-- /.row -->

  <!-- Star row-->
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">การซื้อขายงานวิจัย</div>
        <div class="panel-body">
         <table class="table table-striped">
           <tr class="bg-success">
            <th width="5%">#</th>
            <th width="25%">ชื่อโครงการ</th>
            <th width="25%">ขายวันที่</th>
            <th width="25%">ราคา</th> 
            <th width="30%">ผู้ซื้อ</th>     
            <th></th>
            <th></th>
            <th></th>
            <th></th>

          </tr>   

          <!-- Show &Join table -->

          <tr class="bg-success">
            <td >1</td>
            <td >กังหันลม</td>
            <td >อลงกรณ์</td>   
            <td >500 บาท</td>
            <td >085666666</td>
            <!--<td><a href="<?php //echo base_url(//"backend/viewdealing")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> -->
            <td><a href="<?php echo base_url("backend/editdealing")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
            <td><button type="button" class="btn btn-success"><i class="fa fa-print"></i> ปริ้น</button></td>                  
          </tr>       
        </table>  


        <!-- start popup -->
        <form id="" method="post" class="form-horizontal" action="">

          <div class="modal fade bs-example-modal-lg-addcatalog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

               <div class="row">
                 <div class="col-lg-9 col-lg-offset-1">
                  <hr>
                  <center><h3>จัดการซื้อขายงานวิจัย</h3></center><br> 

                  <div class="form-group">
                   <label class="col-lg-2 control-label">ชื่อโครงการ</label>
                   <div class="col-lg-4">
                    <input type="text" class="form-control" name="D_name"   />
                  </div>
                  <label class="col-lg-2 control-label">ขายวันที่</label>
                  <div class="col-lg-4">
                    <input type="date" class="form-control" name="D_date"   />
                  </div>
                </div>
                <br><br>


                <div class="form-group">
                  <label class="col-lg-2 control-label">ราคา</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="D_price"   />
                  </div>
                  <label class="col-lg-2 control-label">ผู้ซื้อ</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="D_name_buyer"   />
                  </div>
                </div>
                <br><br>


                <div class="form-group">
                  <label class="col-lg-2 control-label">สัญญาการซื้อขาย</label>
                  <div class="col-lg-4">
                    <input type="file"  name="D_contract"   />
                  </div>
                </div>
                <br><br>

                
              </div>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
              <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>


          </div>
        </div>
      </div>

    </form>
    <!-- End popup -->    
    <!-- End -->

  </div>
</div>
</div>
</div>






</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
