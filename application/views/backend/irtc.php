<div id="page-wrapper">

  <div class="container-fluid">


    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>IRTC Platform</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/project_coresearch")?>">จัดการข้อเสนอโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->

     <!-- Star row-->
   <div class="row">
    <div class=" col-sm-12">
     <center>
       <form id="" method="post" class="form-horizontal" action="">
        <table >

          <tr>
            <td></td>
            <td><input type="text" class="form-control" placeholder="กรอกชื่อผู้เสนอโครงการ" name="research"></td>
            <td><input type="text" class="form-control" placeholder="กรอกชื่อโครงการ"  name="project_research"></td>
            <td><select class="form-control"  name="statussearch">
             <option value=""> เลือกสถานะ</option>
             <option value="สำเร็จ">รอดำเนินงาน</option>
             <option value="อยู่ในช่วงดำเนินงาน">รออนุมัติ</option>
             <option value="อยู่ในช่วงดำเนินงาน">อนุมัติ</option>
           </select></td>
           <td><button class="btn btn-success" type="button" ><i class="fa fa-search"></i> ค้นหา</button></td>
           <td ><button class="btn btn-success" type="button" >ล้างข้อมูล</button> </td>
           <td width="5%"></td>
           <td><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button></td>
         </tr>
       </table>
     </form>
   </center>
 </div>
</div><br>
<!-- /.row -->

<!-- Star row-->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">ข้อมูลนักวิจัย</div>
      <div class="panel-body">
       <table class="table table-striped">
         <tr class="bg-success">
          <th width="5%">#</th>
          <th width="30%">ชื่อผู้เสนอโครงการ</th>
          <th width="30%">ชื่อโครงการ</th>
          <th width="30%">สถานะ</th>    
          <th></th>
          <th></th>
          <th></th>
        </tr>   

        <!-- Show &Join table -->

        <tr class="bg-success">
          <td >1</td>
          <td >อลงกรณ์</td>
          <td >กังหันลม</td>   
          <td >รอดำเนินการ</td>
          <td><a href="<?php echo base_url("backend/")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td>
          <td><a href="<?php echo base_url("backend/")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td><a href="<?php echo base_url("backend/")?>"><button type="button" class="btn btn-success"><i class="fa fa-print"></i> ปริ้นท์</button></td>                     
        </tr>       
      </table>     
      <!-- End -->
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
