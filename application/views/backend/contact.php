<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
          <small>Contact</small>
        </h1>
        <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/contact")?>">จัดการข้อมูลการติดต่อ</a></li>
       </ol>
     </div>
   </div></br></br>

<!--    <div class="row"> 
 <div class="col-sm-12 ">
   <center>
 <form id="" method="post" class="form-horizontal" action="<?php //echo $action ; ?>">
     <table >
       <tr>
        <td>
         <td><input type="date" class="form-control"   name="keyword"></td>
         <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
         <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>
       </td>

     </tr>
   </table>
</form>
 </center>
 /input-group
  </div>
</div><br>        
 -->

<!-- Search-->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">ข้อมูลการติดต่อ</div>
      <div class="panel-body">

        <table class="table table-striped">

        <?php if(empty($keyword)){ ?>

          <tr class="bg-success">
            <th width="5%">#</th>
            <th width="20%">ชื่อบริษัท</th>
            <th width="20%">ชื่อ-สุกลผู้ติดต่อ</th>
            <th width="20%">หัวข้อติดต่อ</th>
            <th width="20%">วันที่</th>
            <th></th>
            <th></th>
          </tr>

        <?php $i='1';  foreach ($contact as $row){ ?>

          <tr class="bg-success">
            <td><?php echo $i++;?></td>
            <td><?php echo $row->company; ?></td>
            <td><?php echo $row->name; ?></td> 
            <td><?php echo $row->subject; ?></td>  
            <td><?php echo $row->date; ?></td>  
            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal<?php echo $row->id; ?>"><i class="fa fa-eye"></i>  ดู</button></td>         
            <td><a target ="_blank" href="<?php echo base_url('backend/contact/deletecontact/'.$row->id)?>")?><button type="button" class="btn btn-danger" data-toggle ="modal" ><i class="fa fa-times"></i> ลบ</button></a></td>   
          </tr>

          <form  method="post" class="form-horizontal"   action="<?php echo $action ; ?>" >

            <div class="modal fade bs-example-modal-lg-viewperson"  id="modal<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                 <div class="row">
                   <div class="col-lg-9 col-lg-offset-1">
                    <hr>
                    <center><h3>ข้อมูลการติดต่อ</h3></center><br> 
                    <center>

                     <div class="form-group">
                       <label class="col-lg-2 control-label">ชื่อบริษัท</label>
                       <div class="col-lg-4">
                       <input type="text" class="form-control" value="<?php echo $row->company; ?>" name="company">
                      </div>
                      <label class="col-lg-2 control-label">ชื่อ-สกุล ผู้ติดต่อ</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $row->name; ?>" name="name">
                      </div>
                    </div>
                    <br><br><br>

                    <div class="form-group">
                      <label class="col-lg-2 control-label">หัวข้อ</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $row->subject; ?>" name="subject">
                      </div>
                      <label class="col-lg-2 control-label">รายละเอียด</label>
                      <div class="col-lg-4">
                        <textarea class="form-control" name="detail" rows="3" cols="60"><?php echo $row->detail; ?></textarea>
                      </div>
                    </div><br><br>

                    <div class="form-group">
                      <label class="col-lg-2 control-label">E-mail</label>
                      <div class="col-lg-4">
                        <input type="email" class="form-control" value="<?php echo $row->email; ?>" name="email">
                      </div>
                      <label class="col-lg-2 control-label">วันที่ติดต่อ</label>
                      <div class="col-lg-4">
                        <input type="email" class="form-control" value="<?php echo $row->date; ?>" name="date">
                      </div>
                    </div><br><br>

                  </div>
                </div>

                <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>
           </div>
         </div>

       </form>

         <?php } }?>
     </table> 

   </div>
 </div>
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
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->