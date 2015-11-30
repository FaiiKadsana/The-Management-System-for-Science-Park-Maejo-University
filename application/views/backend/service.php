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
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/service")?>">จัดการข้อเสนอโครงการ</a></li>
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
            <td><select class="form-control"  name="keyword1">
             <option value="0"> เลือกสถานะ</option>
             <option value="รอดำเนินงาน">รอดำเนินงาน</option>
             <option value="รออนุมัติ">รออนุมัติ</option>
             <option value="อนุมัติ">อนุมัติ</option>
             <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
           </select></td>
           <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
           <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>
           <td width="5%"></td>
           <td><a href="<?php echo base_url("backend/frservice")?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button></a></td>
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

    <?php if (empty($keyword1)) { ?>

       <tr class="bg-success">
         <th width="15%">เลขที่แบบฟอร์ม</th>
         <th width="20%">ชื่อสถานประกอบการ</th>
         <th width="20%">ชื่อผู้ประสานงาน</th>
         <th width="20%">วันที่ยืนโครงการ</th> 
         <th width="20%">สถานะ</th>    
       </tr>  

       <?php foreach($service as $row){?>

       <tr class="bg-success">
          <td ><?php echo $row->S_id; ?></td>
          <td ><?php echo $row->C_name; ?></td>
          <td ><?php echo $row->P_title , $row->P_name , $row->P_lastname ; ?> </td>
          <td ><?php echo $row->S_date; ?></td>  
          <td ><?php echo $row->S_status; ?></td>
          <td><a  href="<?php echo base_url('backend/viewservice/index/'.$row->S_id)?>")?><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td>
          <td><a href="<?php echo base_url("backend/editfrservice")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
<<<<<<< HEAD
         <td><a target ="_blank" href="<?php echo base_url('backend/serviceplatformreport/index/'.$row->S_id)?>")?><button type="button" class="btn btn-success"><i class="fa fa-print"></i> ปริ้น</button></td>                     
=======
          <td><a target ="_blank" href="<?php echo base_url('backend/serviceplatformreport/index/'.$row->S_id)?>")?><button type="button" class="btn btn-success"><i class="fa fa-print"></i> ปริ้น</button></td>                     
>>>>>>> 0a5be33ba82720d140bd209e71e91b5bca00d8d1
          <td><a href="<?php echo base_url("backend/fileservice")?>"><button type="button" class="btn btn-info" ><i class="fa fa-paperclip"></i>  ไฟล์เอกสารแนบ</button></a></td>
        </tr> 
       
         <?php } ?>

      <?php }else{ ;?>

       <tr class="bg-success">
       <th width="15%">เลขที่แบบฟอร์ม</th>
       <th width="20%">ชื่อสถานประกอบการ</th>
       <th width="20%">ชื่อผู้ประสานงาน</th>
       <th width="20%">วันที่ยืนโครงการ</th> 
       <th width="20%">สถานะ</th>    
       </tr>  

       <?php foreach($search as $row){?>
       <tr class="bg-success">
        <td ><?php echo $row->S_id; ?></td>
        <td ><?php echo $row->C_name; ?></td>
        <td ><?php echo $row->P_title; ?><?php echo $row->P_name;?>&nbsp;<?php echo $row->P_lastname ; ?></td>
        <td ><?php echo $row->S_date; ?></td>  
        <td ><?php echo $row->S_status; ?></td>
        <td><a  href="<?php echo base_url('backend/viewservice/index/'.$row->S_id)?>")?><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td>
        <td><a href="<?php echo base_url("backend/editfrservice")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td><a target ="_blank" href="<?php echo base_url('backend/serviceplatformreport/index/'.$row->S_id)?>")?><button type="button" class="btn btn-success"><i class="fa fa-print"></i> ปริ้น</button></td>                    
        <td><a href="<?php echo base_url("backend/fileservice")?>"><button type="button" class="btn btn-info" ><i class="fa fa-paperclip"></i>  ไฟล์เอกสารแนบ</button></a></td>
      </tr> 
      <?php } }?>
    </table>     
  <!-- End -->

</div>
</div>

<div class="row">
  <center>
    <div class="paginationnext" >
      <div class="col-md-12" >
        <ul class="paginationnext" >
          <?php echo $page; ?>
          <ul>
          </div>
        </div>  
      </center>
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
