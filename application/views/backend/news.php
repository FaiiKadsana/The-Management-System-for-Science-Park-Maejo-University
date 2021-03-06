<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
          <small>News</small>
        </h1>
        <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/new")?>">จัดการข่าวสารประชาสัมพันธ์</a></li>
       </ol>
     </div>
   </div></br></br>

 <form id="" method="post" class="form-horizontal" action="<?php echo $action1 ; ?>">
   <div class="row"> 
    <div class="col-sm-12 ">
      <center>
        <table >
          <tr>
           <td>
           </td>
           <td>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="หัวข้อข่าว" name="keyword">
              <span class="input-group-btn">
                <center>
                  <table >
                    <tr>
                      <td> <button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
                      <td width="20%"><button class="btn btn-success" type="reset" > ล้างข้อมูล</button> </td>
                      <td ><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addnew"><i class="fa fa-plus"></i> เพิ่ม</button></td>    
                    </tr>
                  </table>
                </center>
              </span>
            </div>
          </td>
          <td>
          </td>
        </tr>
      </table>
    </center>
    <!-- /input-group -->
  </div>
</div>
</form>
<br>        
<!-- Star row-->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">ข้อมูลข่าวสาร</div>
      <div class="panel-body">
       <table class="table table-striped">

        <?php if(empty($keyword)){ ?>

         <tr class="bg-success">
          <th width="5%">#</th>
          <th width="30%">หัวข้อข่าว</th>
          <th width="40%">รายละเอียด</th>
        </tr>   

         <?php $i='1';  foreach ($news as $row){ ?>

        <tr class="bg-success">
          <td ><?php echo $i++;?></td>
          <td ><?php echo $row->Ne_sub; ?></td>
          <td ><?php echo $row->Ne_text; ?></td>   
         <!-- <td><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg-viewnew"><i class="fa fa-eye"></i>  ดู</button></td> -->          
          <td>
          <button type="button" class="btn btn-warning" data-toggle ="modal" data-target="#modal<?php echo $row->Ne_id; ?>"><i class="fa fa-wrench"></i> แก้ไข</button></td>
          <td><a target ="_blank" href="<?php echo base_url('backend/news/deletenews/'.$row->Ne_id)?>"> <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm-delnew"><i class="fa fa-times"></i> ลบ</button></a></td>                     
        </tr> 

                <form id="" method="post" class="form-horizontal" action="<?php echo $action3 ; ?>" enctype="multipart/form-data" >

                      <div class="modal fade bs-example-modal-lg-editnew" id="modal<?php echo $row->Ne_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                           <div class="row">
                             <div class="col-lg-9 col-lg-offset-1">
                              <hr>
                              <center><h3>ข้อมูลข่าว</h3></center><br> 
                              <center>

                               <div class="form-group">
                                 <label class="col-lg-2 control-label">หัวข้อข่าว</label>
                                 <div class="col-lg-4">
                                   <input type="hidden" class="form-control" value="<?php echo $row->Ne_id; ?>" name="Ne_id"/>
                                  <input type="title" class="form-control" value="<?php echo $row->Ne_sub; ?>" name="Ne_sub"/>
                                </div>
                                <label class="col-lg-2 control-label">รายละเอียดข่าว</label>
                                <div class="col-lg-4">
                                <textarea name="Ne_text" type="detail" class="form-control" cols="50" rows="4"><?php echo $row->Ne_text; ?></textarea>
                                
                                </div>
                              </div>
                              <br><br><br>

                              <div class="form-group">
                                <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                                <div class="col-lg-4">
                                  <input type="file" name="Ne_picture">
                                </div>
                                <label class="col-lg-2 control-label">วันที่</label>
                                <div class="col-lg-4">
                                  <input type="date" value="<?php echo $row->Ne_date_up; ?>" name="Ne_date_up">
                                </div>
                              </div><br><br>

                            </div>
                          </div>

                          <div class="modal-footer">
                            <button type="submit" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button> 
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    </form>
                  
        <?php } ?>

      <?php }else{ ;?>

      <?php $i='1'; foreach($search as $row){?>

          <tr class="bg-success">
          <th width="5%">#</th>
          <th width="30%">หัวข้อข่าว</th>
          <th width="40%">รายละเอียด</th>
          </tr>  

        <tr class="bg-success">
          <td ><?php echo $i++;?></td>
          <td ><?php echo $row->Ne_sub; ?></td>
          <td ><?php echo $row->Ne_text; ?></td> 
         <!-- <td><button type="button" class="btn btn-info" data-toggle="modal" ><i class="fa fa-eye"></i>  ดู</button></td> -->           
          <td><button type="button" class="btn btn-warning" data-toggle ="modal" data-target="#modal<?php echo $row->Ne_id; ?>"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td><a target ="_blank" href="<?php echo base_url('backend/news/deletenews/'.$row->Ne_id)?>")?><button type="button" class="btn btn-warning" data-toggle ="modal" ><i class="fa fa-times"></i> ลบ</button></a></td>                     
        </tr> 

            <form id="" method="post" class="form-horizontal" action="<?php echo $action3 ; ?>" enctype="multipart/form-data" >

                      <div class="modal fade bs-example-modal-lg-editnew" id="modal<?php echo $row->Ne_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                           <div class="row">
                             <div class="col-lg-9 col-lg-offset-1">
                              <hr>
                              <center><h3>ข้อมูลข่าว</h3></center><br> 
                              <center>

                               <div class="form-group">
                                 <label class="col-lg-2 control-label">หัวข้อข่าว</label>
                                 <div class="col-lg-4">
                                  <input type="hidden" class="form-control" value="<?php echo $row->Ne_id; ?>" name="Ne_id"/>
                                  <input type="title" class="form-control" value="<?php echo $row->Ne_sub; ?>" name="Ne_sub"/>
                                </div>
                                <label class="col-lg-2 control-label">รายละเอียดข่าว</label>
                                <div class="col-lg-4">
                                  <textarea name="Ne_text" type="detail" class="form-control" cols="50" rows="4"><?php echo $row->Ne_text; ?></textarea>
                                </div>
                              </div>
                              <br><br><br>

                              <div class="form-group">
                                <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                                <div class="col-lg-4">
                                  <input type="file" value="<?php echo $row->Ne_picture; ?>" name="Ne_picture">
                                </div>
                                <label class="col-lg-2 control-label">วันที่</label>
                                <div class="col-lg-4">
                                  <input type="date" value="<?php echo $row->Ne_date_up; ?>" name="Ne_date_up">
                                </div>
                              </div><br><br>

                            </div>
                          </div>

                          <div class="modal-footer">
                            <button type="submit" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    </form>
                     
       <?php } }?>

      </table>     
      <!-- End -->

<!-- /.row -->
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


<!-- start popup เพิ่มผลงาน-->
    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="<?php echo $action ; ?>" >

      <div class="modal fade bs-example-modal-lg-addnew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

           <div class="row">
             <div class="col-lg-9 col-lg-offset-1">
              <hr>
              <center><h3>ข้อมูลข่าวประชาสัมพันธ์</h3></center><br> 


              <div class="form-group">
               <label class="col-lg-2 control-label">ข้อมูลข่าวประชาสัมพันธ์</label>
               <div class="col-lg-4">
                <input type="title" class="form-control" name="Ne_sub"   />
              </div>
              <label class="col-lg-2 control-label">รายละเอียดข่าว</label>
              <div class="col-lg-4">
                 <textarea name="Ne_text" type="detail" class="form-control" cols="50" rows="4"></textarea>
              </div>
            </div>
            <br><br>

            <div class="form-group">
              <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
              <div class="col-lg-4">
                <input type="file" name="Ne_picture">
              </div>
            </div><br><br>

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
  
<!-- End popup เพิ่มผลงาน--> 

 <!-- start popup ดูข่าว-->
<!--  <form id="" method="post" class="form-horizontal" enctype="multipart/form-data"  action="<?php //echo $action2 ; ?>">

    <?php  //foreach ($news as $rownews) { ?>

        <div class="modal fade bs-example-modal-lg-viewnew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="panel-body">
                 <div class="row">
                   <div class="col-lg-12">
                    <hr>
                    <center><h3>ข้อมูลข่าว</h3></center><br> 

                    <div class="col-sm-2">
                      <?php //echo '<img src= "'.base_url().'asset/img/News/'.$rownews->Ne_picture.'" style="height:200px;" style="width:40px;">'; ?>
                    </div>

                    <div class="col-lg-offset-1 col-sm-8">
                    
                     <table class="table table-bordered">
                      <tr>
                        <td>หัวข้อข่าว: <?php //echo $rownews->Ne_sub;?> </td> 
                      </tr>
                      <tr>
                        <td>รายละเอียด :  <?php //echo $rownews->Ne_text;?> </td> 
                      </tr>
                      <tr>
                        <td>วันที่ : <?php //echo $rownews->Ne_date_up;?></td> 
                      </tr>
                    </table>
                    

                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div> 
          </div>    
        </div> 
      </div>
    </div>
    <?php //} ?> 
  </form>-->
    <!-- End popup ดูข่าว--> 

<!--end popup ลบ -->
<!--<form id="" method="post" class="form-horizontal" action="">
  <div class="modal fade bs-example-modal-sm-delnew" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

       <div class="row">
         <div class="col-lg-11 ">
          <div class="form-group">
           <label class="col-lg-9 control-label">ยืนยันการลบ</label>
         </div>

       </div>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-success">ตกลง</button>
       <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
     </div>
   </div>
 </div>
</div>
</form>
end popup ลบ--> 

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
