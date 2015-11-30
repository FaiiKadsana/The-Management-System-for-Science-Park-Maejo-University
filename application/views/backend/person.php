<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
          <small>Person</small>
        </h1>
        <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/person")?>">จัดการบุคคล</a></li>
       </ol>
     </div>
   </div></br></br>

   <div class="row"> 
    <div class="col-sm-12 ">
      <center>
        <form enctype="multipart/form-data" id="" method="post" class="form-horizontal" action="<?php $action; ?>">
          <table >
            <tr>
             <td>
              <td><input type="text" class="form-control"  name="keyword"></td>
              <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
              <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>
            </td>
            <td>
              <div class="input-group">
              <a href="<?php echo base_url("backend/addperson")?>"><button type="button" class="btn btn-btn btn-primary"><i class="fa fa-plus"></i>  เพิ่ม</button></a>
             </div>
           </td>
           <td>
           </td>
         </tr>
       </table>
     </form>
   </center>
   <!-- /input-group -->
 </div>
</div><br>        


<!-- Search-->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">ข้อมูลบุคลากร</div>
      <div class="panel-body">
        <table class="table table-striped">
          <?php if (empty($keyword)) { ?>
          <tr class="bg-success">
            <th width="5%">#</th>
            <th width="25%">ชื่อ</th>
            <th width="25%">นามสกุล</th>
            <th width="25%">ตำแหน่ง</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>

          <?php foreach($officer as $row){?>

          <tr class="bg-success">
            <td><?php echo $row->O_id; ?></td>
            <td><?php echo $row->O_title , $row->O_name ; ?></td>
            <td><?php echo $row->O_lastname;?></td> 
            <td><?php echo $row->O_position;?></td>  
            <td><a href="<?php echo base_url("backend/viewperson")?>"><button type="button" class="btn btn-info"><i class="fa fa-eye"></i>  ดู</button></a></td>          
            <td><a href="<?php echo base_url("backend/editperson")?>"><button type="button" class="btn btn-btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          </tr> 
          <?php } ?>  
          <?php }else if($keyword){ ?>

          <?php foreach($search as $row){ ?>
          <tr class="bg-success">
            <th width="5%">#</th>
            <th width="25%">ชื่อ</th>
            <th width="25%">นามสกุล</th>
            <th width="25%">ตำแหน่ง</th>
            <th></th>
            <th></th>
            <th></th>
          </tr> 
          <tr class="bg-success">
            <td><?php echo $row->O_id; ?></td>
            <td><?php echo $row->O_title , $row->O_name ; ?></td>
            <td><?php echo $row->O_lastname;?></td> 
            <td><?php echo $row->O_position;?></td>  
            <td><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></td>          
            <td><a href="<?php echo base_url("backend/editperson")?>"><button type="button" class="btn btn-btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          </tr> 
          <?php } } ?> 

        </table> 

        <!-- End -->

<!-- /.row -->
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

