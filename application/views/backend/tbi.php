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
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/tbi")?>">จัดการข้อเสนอโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->

     <!-- Star row-->
   <div class="row">
    <div class=" col-sm-12">
     <center>
      <form id="" method="post" class="form-horizontal" action="<?php $action; ?>">
        <table >
          <tr>
            <td></td>
            <!--<td><input type="text" class="form-control" placeholder="กรอกชื่อผู้ขอใช้บริการ" name="research"></td>
            <td><input type="date" class="form-control"  name="dateresearch"></td>-->
            <td><select class="form-control"  name="keyword1">
             <option value=""> เลือกสถานะ</option>
             <option value="รอดำเนินงาน">pre incubated</option>
             <option value="รออนุมัติ">incubatee</option>
             <option value="อนุมัติ">start up</option>
              <option value="ไม่อนุมัติ">sping off(gratduate)</option>
           </select></td>
           <td><button class="btn btn-success" type="button" ><i class="fa fa-search"></i> ค้นหา</button></td>
           <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>
           <td width="5%"></td>
           <td><a href="<?php echo base_url("backend/frtbi")?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button></a></td>
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
          <th width="20%">ชื่อผู้ขอรับบริการ</th>
           <th width="20%">วันที่ยืนโครงการ</th> 
          <th width="30%">สถานะ</th>    
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>   

        <!-- Show &Join table -->

        <tr class="bg-success">
          <td >1</td>
          <td >อลงกรณ์</td>
           <td >12/05/2558</td>   
          <td >รอดำเนินการ</td>
          <td><a href="<?php echo base_url("backend/viewtbi")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td>
          <td><a href="<?php echo base_url("backend/editfrtbi")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
         <td><a target ="_blank" href="<?php echo base_url('backend/tbiplatformreport/index/'.$row->Tbi_id3)?>")?><button type="button" class="btn btn-success"><i class="fa fa-print"></i> ปริ้น</button></td>                     
         <td><a href="<?php echo base_url("backend/filetbi")?>"><button type="button" class="btn btn-info" ><i class="fa fa-paperclip"></i>  ไฟล์เอกสารแนบ</button></a></td>
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
