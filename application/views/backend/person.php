<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
          <small>Officer</small>
        </h1>
        <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/person")?>">จัดการข้อมูลบุคคลกร</a></li>
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
              <td><input type="text" class="form-control" placeholder="กรอกชื่อบุคลากร" name="keyword"></td>
              <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
              <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>
            </td>
            <td>
            <div class="input-group">
             <button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addperson"><i class="fa fa-plus"> <a href="<?php echo base_url("backend/person")?>"></a></i> เพิ่ม</button>
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
           <!-- <td><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg-viewperson"><i class="fa fa-eye"></i>  ดู</button></td> -->          
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editperson"><i class="fa fa-wrench"></i>  แก้ไข</button></td>
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
           <!-- <td><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg-viewperson"><i class="fa fa-eye"></i>  ดู</button></td> -->           
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editperson"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          </tr> 
          <?php } } ?> 

        </table> 

        <!-- End -->


      <!-- start popup ดูข้อมูล-->
      
      <!--  <div class="modal fade bs-example-modal-lg-viewperson" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="panel-body">
                <form id="" method="post" class="form-horizontal" action="">
                 <div class="row">
                   <div class="col-lg-12">
                    <hr>
                    <center><h3>ข้อมูลบุคลากร</h3></center><br> 

                    <div class="col-sm-2">
                      <img width="200px" height="260px" src="<?php //echo base_url("asset2/img/011.jpg") ?>"> <br><br>

                    </div>

                    <div class="col-lg-offset-1 col-sm-8">
                    
                     <table class="table table-bordered">
                      <tr>
                        <td>นาย: มนตรี  ศรีษะเกษ</td> 
                      </tr>
                      <tr>
                        <td>รหัสบัตรประชาชน: 2569788699523</td> 
                      </tr>
                      <tr>
                        <td>ตำแหน่ง : พนักงาน</td> 
                      </tr>
                      <tr>
                        <td>E-mail : พนักงาน</td> 
                      </tr>
                      <tr>
                        <td>เบอร์โทรศัพท์: 0857856130</td> 
                      </tr>
                      <tr>
                        <td>Password : 1705</td> 
                      </tr>
                      <tr>
                        <td>สถานะ : sevice plamform</td> 
                      </tr>
                    </table>
                    

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
    </div>-->

    <!-- End popup ดูข้อมูล--> 
    <!-- start popup เพิ่มพนักงาน-->
    <form id="" method="post" class="form-horizontal" action="<?php echo $action1; ?>" enctype="multipart/form-data">

      <div class="modal fade bs-example-modal-lg-addperson" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

           <div class="row">
             <div class="col-lg-9 col-lg-offset-1">
              <hr>
              <center><h3>ข้อมูลบุคลากร</h3></center><br> 

               <div class="form-group">
            <div class="col-lg-4">
              <select class="form-control"  name="O_title">
               <option value="นาย">นาย</option>
               <option value="นาง">นาง</option>
               <option value="นางสาว">นางสาว</option>
             </select>
           </div>
           <div class="col-lg-4">
             <input type="text" class="form-control" name="O_name" placeholder="ชื่อ"   />
           </div>
           <div class="col-lg-4">
             <input type="text" class="form-control" name="O_lastname" placeholder="นามสกุล"   />
           </div>
         </div>


         <div class="form-group">
           <label class="col-lg-2 control-label">รหัสบัตรประชาชน</label>
           <div class="col-lg-4">
            <input type="text" class="form-control" name="O_id_card"   />
          </div>
          <label class="col-lg-2 control-label">ตำแหน่ง</label>
          <div class="col-lg-4">
           <select class="form-control"  name="O_position">
             <option value="นักวิชาการศึกษา">นักวิชาการศึกษา </option>
             <option value="เจ้าหน้าที่บริหารงานทั่วไป">เจ้าหน้าที่บริหารงานทั่วไป </option>
             <option value="นักจัดการทรัพย์สินทางปัญญา">นักจัดการทรัพย์สินทางปฝ่ายบ่มเพาะธุรกิจและนวัตกรรมญญา </option>
             <option value="นักพัฒนาธุรกิจ">นักพัฒนาธุรกิจ</option>
             <option value="ฝ่ายบ่มเพาะธุรกิจและนวัตกรรม">ฝ่ายบ่มเพาะธุรกิจและนวัตกรรม</option>
             <option value="ฝ่ายฝึกอบรมและถ่ายทอดเทคโนโลยี">ฝ่ายฝึกอบรมและถ่ายทอดเทคโนโลยี</option>
           </select>
         </div>

       </div>
       

       <div class="form-group">
         <label class="col-lg-2 control-label">email</label>
         <div class="col-lg-4">
          <input type="email" class="form-control" name="O_email"   />
        </div>
        <label class="col-lg-2 control-label">เบอร์โทรศัพท์</label>
        <div class="col-lg-4">
          <input type="tel" class="form-control" name="O_phone"   />
        </div>

      </div>


      <div class="form-group">
        <label class="col-lg-2 control-label">Password</label>
        <div class="col-lg-4">
          <input type="password" class="form-control" name="O_password"/>
        </div>
        <label class="col-lg-2 control-label">status</label>
        <div class="col-lg-4">
          <input type="checkbox"  name="O_status"  value="1">Service Platform<br>
          <input type="checkbox"  name="O_status" value="2" >Co-Research Platform<br>
          <input type="checkbox"  name="O_status" value="3">IRTC Platform<br>
          <input type="checkbox"  name="O_status" value="4">TBI Platform<br>
          <input type="checkbox"  name="O_status" value="5">Service Platform,TBI Platform,IRTC Platform,Service Platform<br>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
        <div class="col-lg-4">
          <input type="file" name="O_picture">
        </div>
        <label class="col-lg-2 control-label">สถานะ</label>
        <div class="col-lg-4">
         <select class="form-control"  name="O_status_work">
           <option value=""> เลือกสถานะ</option>
           <option value="พนักงาน">พนักงาน</option>
           <option value="ลาออก">ลาออก</option>
         </select>
       </div>
     </div>

       </div>
     </div>

     <div class="modal-footer">
      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
       <button  type="reset" class="btn btn-warning " ><strong>ยกเลิก</strong></button> 
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>

  </div>
</div>
</div>

</form>
<!-- End popup เพิ่มผลงาน--> 
<!-- start popup แก้ไขผลงาน-->
<form id="" method="post" class="form-horizontal" action="">

  <div class="modal fade bs-example-modal-lg-editperson" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="row">
         <div class="col-lg-9 col-lg-offset-1">
          <hr>
          <center><h3>ข้อมูลบุคลากร</h3></center><br> 

          <div class="form-group">
            <div class="col-lg-4">
              <select class="form-control"  name="per_title">
               <option value="นาย">นาย</option>
               <option value="นาง">นาง</option>
               <option value="นางสาว">นางสาว</option>
             </select>
           </div>
           <div class="col-lg-4">
             <input type="text" class="form-control" name="per_name" placeholder="ชื่อ"   />
           </div>
           <div class="col-lg-4">
             <input type="text" class="form-control" name="per_ln" placeholder="นามสกุล"   />
           </div>
         </div>


         <div class="form-group">
           <label class="col-lg-2 control-label">รหัสบัตรประชาชน</label>
           <div class="col-lg-4">
            <input type="text" class="form-control" name="per_id"   />
          </div>
          <label class="col-lg-2 control-label">ตำแหน่ง</label>
          <div class="col-lg-4">
           <select class="form-control"  name="per_title">
             <option value=" ">พนักงาน</option>
             <option value=" ">พนักงาน</option>
             <option value=" ">พนักงาน</option>
           </select>
         </div>

       </div>
       

       <div class="form-group">
         <label class="col-lg-2 control-label">email</label>
         <div class="col-lg-4">
          <input type="email" class="form-control" name="per_email"   />
        </div>
        <label class="col-lg-2 control-label">เบอร์โทรศัพท์</label>
        <div class="col-lg-4">
          <input type="tel" class="form-control" name="per_tell"   />
        </div>

      </div>


      <div class="form-group">
        <label class="col-lg-2 control-label">Password</label>
        <div class="col-lg-4">
          <input type="password" class="form-control" name="per_Password"   />
        </div>
        <label class="col-lg-2 control-label">status</label>
        <div class="col-lg-4">
          <input type="checkbox"  name="per_status" >Service Platform<br>
          <input type="checkbox"  name="per_status" />Co-Research Platform<br>
          <input type="checkbox"  name="per_status" />IRTC Platform<br>
          <input type="checkbox"  name="per_status" />TBI Platform<br>
        </div>
      </div>



      <div class="form-group">
        <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
        <div class="col-lg-4">
          <input type="file" name="picture">
        </div>
        <label class="col-lg-2 control-label">สถานะ</label>
        <div class="col-lg-4">
         <select class="form-control"  name="statussearch">
           <option value=""> เลือกสถานะ</option>
           <option value="รอดำเนินงาน">พนักงาน</option>
           <option value="รออนุมัติ">ลาออก</option>ห
         </select>
       </div>
     </div>

   </div>
 </div>
 <div class="modal-footer">
  <button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i> แก้ไข</button>
   <button  type="reset"  class="btn btn-danger"><strong>ยกเลิก</strong></button> 
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>
</div>

</div>
</div>
</div>

</form>
<!-- End popup แก้ไขผลงาน--> 

<!--end popup ลบ -->
<form id="" method="post" class="form-horizontal" action="">
  <div class="modal fade bs-example-modal-sm-delperson"tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
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
        <button  type="reset" class="btn btn-warning " ><strong>ยกเลิก</strong></button> 
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

