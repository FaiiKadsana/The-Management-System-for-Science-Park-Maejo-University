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
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/irtc")?>">จัดการข้อเสนอโครงการ</a></li>
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
            <!--<td><input type="text" class="form-control" placeholder="กรอกชื่อโครงการ"  name="project_research"></td>
            <td><input type="date" class="form-control"  name="dateresearch"></td>-->
            <td><select class="form-control"  name="keyword1">
             <option value=""> เลือกสถานะ</option>
             <option value="รอดำเนินงาน">รอดำเนินงาน</option>
             <option value="รออนุมัติ">รออนุมัติ</option>ห
             <option value="อนุมัติ">อนุมัติ</option>
             <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
           </select></td>
           <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
           <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>
           <td width="5%"></td>
           <td><a href="<?php echo base_url("backend/frirtc")?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button></a></td>
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
      <div class="panel-heading">Co-Research Platform</div>
      <div class="panel-body">
       <table class="table table-striped">

        <?php if (empty($keyword1)) { ?> 

         <tr class="bg-success">
          <th width="15%">เลขที่แบบฟอร์ม</th>
          <th width="20%">ชื่อสถานประกอบการ</th>
          <th width="20%">ชื่อโครงการ</th>
          <th width="20%">วันที่ยืนโครงการ</th> 
          <th width="20%">สถานะ</th>   
        </tr>   

       <?php foreach($irct as $row){?>

        <tr class="bg-success">
          <td ><?php echo $row->Co_id; ?></td>
          <td ><?php echo $row->C_name; ?></td>
          <td ><?php echo $row->Co_name_pro; ?></td>
          <td ><?php echo $row->Co_date; ?></td> 
          <td ><?php echo $row->Co_status; ?></td>
          <td><a href="<?php echo base_url("backend/viewcoresearch")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td>
          <td><a href="<?php echo base_url("backend/editfrcoresearch")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td><a href="<?php echo base_url("backend/coresearchplatformreport")?>"><button type="button" class="btn btn-success"><i class="fa fa-print"></i> ปริ้น</button></td> 
          <td><a href="<?php echo base_url("backend/filecoresearch")?>"><button type="button" class="btn btn-info" ><i class="fa fa-paperclip"></i>  ไฟล์เอกสารแนบ</button></a></td>                    
        </tr>  

         <?php } ?>

      <?php }else{ ;?>

          <tr class="bg-success">
          <th width="15%">เลขที่แบบฟอร์ม</th>
          <th width="20%">ชื่อสถานประกอบการ</th>
          <th width="20%">ชื่อโครงการ</th>
          <th width="20%">วันที่ยืนโครงการ</th> 
          <th width="20%">สถานะ</th>       
        </tr>   

       <?php foreach($search as $row){?>

        <tr class="bg-success">
<<<<<<< HEAD
          <td >1</td>
          <td >อลงกรณ์</td>
          <td >กังหันลม</td> 
          <td >12/05/2558</td>   
          <td >รอดำเนินการ</td>
          <td><a href="<?php echo base_url("backend/viewirtc")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td>
          <td><a href="<?php echo base_url("backend/editfrirtc")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
        <td><a target ="_blank" href="<?php echo base_url('backend/irtcplatformreport/index/'.$row->Co_id)?>")?><button type="button" class="btn btn-success"><i class="fa fa-print"></i> ปริ้น</button></td>                    
          <td><a href="<?php echo base_url("backend/fileirtc")?>"><button type="button" class="btn btn-info" ><i class="fa fa-paperclip"></i>  ไฟล์เอกสารแนบ</button></a></td>
        </tr>       
=======
          <td ><?php echo $row->Co_id; ?></td>
          <td ><?php echo $row->C_name; ?></td>
          <td ><?php echo $row->Co_name_pro; ?></td>
          <td ><?php echo $row->Co_date; ?></td> 
          <td ><?php echo $row->Co_status; ?></td>
          <td><a href="<?php echo base_url("backend/viewcoresearch")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td>
          <td><a href="<?php echo base_url("backend/editfrcoresearch")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td><a href="<?php echo base_url("backend/coresearchplatformreport")?>"><button type="button" class="btn btn-success"><i class="fa fa-print"></i> ปริ้น</button></td> 
          <td><a href="<?php echo base_url("backend/filecoresearch")?>"><button type="button" class="btn btn-info" ><i class="fa fa-paperclip"></i>  ไฟล์เอกสารแนบ</button></a></td>                    
        </tr>  

      <?php } }?>
>>>>>>> 0a5be33ba82720d140bd209e71e91b5bca00d8d1
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
