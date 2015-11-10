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

   <div class="row"> 
    <div class="col-sm-12 ">
      <center>

        <table >

          <tr>
            <td></td>
            <td><input type="text" class="form-control" placeholder="ชื่อโครงการ" name=""></td>
            <td><button class="btn btn-success" type="button" ><i class="fa fa-search"></i> ค้นหา</button></td>
            <td width="20%"><button class="btn btn-success" type="button" >ล้างข้อมูล</button> </td>
            <td ><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addcatalog"><i class="fa fa-plus"></i> เพิ่ม</button></td>    

          </tr>
        </table>
      </center>
      <!-- /input-group -->
    </div>
  </div><br>        
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
            <td><a href="<?php echo base_url("backend/viewdealing")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> 
            <td><a href="<?php echo base_url("backend/editdealing")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
            <td>สัญญาการซื้อขาย<input type="file" name=""></td>                  
          </tr>       
        </table>     
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
