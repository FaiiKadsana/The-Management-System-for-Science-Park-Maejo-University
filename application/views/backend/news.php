<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
        <small>New</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/new")?>">จัดการข่าวสารประชาสัมพันธ์</a></li>
       </ol>
     </div>
   </div></br></br>

   <div class="row"> 
    <div class="col-sm-12 ">
      <center>
        <table >
          <tr>
           <td>
           </td>
           <td>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search ">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
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
</div><br>        


<!-- Star row-->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">ข้อมูลข่าวสาร</div>
      <div class="panel-body">
       <table class="table table-striped">
         <tr class="bg-success">
          <th width="5%">#</th>
          <th width="30%">หัวข้อข่าว</th>
          <th width="40%">รายละเอียด</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>

        </tr>   

        <!-- Show &Join table -->

        <tr class="bg-success">
          <td >1</td>
          <td >นวัตกรรมใหม่</td>
          <td >เป็นนวัตกรรมใหม่ที่เกี่ยวกับ เกตรกร</td>   
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg-viewnew"><i class="fa fa-eye"></i>  ดู</button></td> 
          <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addnew"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
          <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editnew"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm-delnew"><i class="fa fa-times"></i>  ลบ</button></td>                     
        </tr>       
      </table>     
      <!-- End -->
      <!-- start popup ดูข่าว-->
      <form id="" method="post" class="form-horizontal" action="">

        <div class="modal fade bs-example-modal-lg-viewnew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="panel-body">
                <form id="" method="post" class="form-horizontal" action="">
                 <div class="row">
                   <div class="col-lg-12">
                    <hr>
                    <center><h3>ข้อมูลข่าว</h3></center><br> 

                    <div class="col-sm-2">
                      <img width="200px" height="260px" src="<?php echo base_url("asset2/img/011.jpg") ?>"> <br><br>

                    </div>

                    <div class="col-lg-offset-1 col-sm-8">
                     <!-- Show &Join table -->
                     <table class="table table-bordered">
                      <tr>
                        <td>หัวข้อข่าว: นวัตกรรมใหม่</td> 
                      </tr>
                      <tr>
                        <td>รายละเอียด :  เป็นนวัตกรรมใหม่ที่เกี่ยวกับ ข้าว ที่ มีสารอาหารครบ</td> 
                      </tr>
                    </table>
                    <!-- End -->   

                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- End popup ดูข่าว--> 
    <!-- start popup เพิ่มผลงาน-->
    <form id="" method="post" class="form-horizontal" action="">

      <div class="modal fade bs-example-modal-lg-addnew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

           <div class="row">
             <div class="col-lg-9 col-lg-offset-1">
              <hr>
              <center><h3>ข้อมูลข่าว</h3></center><br> 


              <div class="form-group">
               <label class="col-lg-2 control-label">หัวข้อข่าว</label>
               <div class="col-lg-4">
                <input type="title" class="form-control" name="rec_phone"   />
              </div>
              <label class="col-lg-2 control-label">รายละเอียดข่าว</label>
              <div class="col-lg-4">
                <textarea ></textarea>
              </div>
            </div>
            <br><br>

            <div class="form-group">
              <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
              <div class="col-lg-4">
                <input type="file" name="picture">
              </div>
            </div><br><br>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

</form>
<!-- End popup เพิ่มผลงาน--> 
<!-- start popup แก้ไขผลงาน-->
<form id="" method="post" class="form-horizontal" action="">

  <div class="modal fade bs-example-modal-lg-editnew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
              <input type="title" class="form-control" name="rec_phone"   />
            </div>
            <label class="col-lg-2 control-label">รายละเอียดข่าว</label>
            <div class="col-lg-4">
              <input type="detail" class="form-control" name="rec_phone"   />
            </div>
          </div>
          <br><br>

          <div class="form-group">
            <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
            <div class="col-lg-4">
              <input type="file" name="picture">
            </div>
          </div><br><br>

        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>


    </div>
  </div>
</div>

</form>
<!-- End popup แก้ไขผลงาน--> 

<!--end popup ลบ -->
<form id="" method="post" class="form-horizontal" action="">
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
<!--end popup ลบ-->


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
