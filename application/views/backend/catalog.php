<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>Catalog</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/catalog")?>"> จัดการแค็ตตาล็อก</a></li>
       </ol>
     </div>
   </div></br></br>

   <form id="" method="post" class="form-horizontal" action="<?php echo $action ; ?>">
   <div class="row"> 
    <div class="col-sm-12 ">
      <center>
        <table >
          <tr>
           <td>
           </td>
           <td>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="ชื่อผลงานวิจัย" name="keyword">
              <span class="input-group-btn">
                <center>
                  <table >
                    <tr> 
                      <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
                      <td width="20%"><button class="btn btn-success" type="reset" > ล้างข้อมูล</button> </td>
                      <td ><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addcatalog"><i class="fa fa-plus"></i> เพิ่ม</button></td>    
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
<br><br> 
  <!-- Star row-->
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">ข้อมูลนักวิจัย</div>
        <div class="panel-body">
         <table class="table table-striped">


        <?php if(empty($keyword)){ ?>

           <tr class="bg-success">
            <th width="5%">#</th>
            <th width="25%">รหัสสิทธิบัตร</th> 
            <th width="25%">ชื่อผลงานวิจัย</th>
            <th width="25%">ชื่อนักวิจัย</th>
            <th width="30%">สถานะ</th>     
        
          </tr>  

        <?php $i='1';  foreach ($catalog as $row){ ?>

          <tr class="bg-success">
            <td ><?php echo $i++;?></td>
            <td ><?php echo $row->Cl_code_re; ?></td>
            <td ><?php echo $row->Cl_research; ?></td>   
            <td ><?php echo $row->Cl_researchers; ?></td>
            <td ><?php echo $row->Cl_status; ?></td>
            <!--<td><a href="<?php //echo base_url("backend/viewcatalog")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td>  -->    
            <td><a href="<?php echo base_url("backend/editcatalog")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
            
          </tr> 

          <?php } ?>      

            <?php }else{ ;?>

          <tr class="bg-success">
            <th width="5%">#</th>
            <th width="25%">รหัสสิทธิบัตร</th> 
            <th width="25%">ชื่อผลงานวิจัย</th>
            <th width="25%">ชื่อนักวิจัย</th>
            <th width="30%">สถานะ</th>     
          </tr>  

        <?php $i='1'; foreach($search as $row){?>


          <tr class="bg-success">
            <td ><?php echo $i++;?></td>
            <td ><?php echo $row->Cl_code_re; ?></td>
            <td ><?php echo $row->Cl_research; ?></td>   
            <td ><?php echo $row->Cl_researchers; ?></td>
            <td ><?php echo $row->Cl_status; ?></td>
            <!--<td><a href="<?php //echo base_url("backend/viewcatalog")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> -->     
            <td><a href="<?php echo base_url("backend/editcatalog")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
            
          </tr> 
             
            <?php }  } ?>
        </table>     
        <!-- End -->

        <!-- start popup เพิ่มผลงาน-->
        <form id="" method="post" class="form-horizontal" action="<?php echo $action1; ?>" enctype="multipart/form-data">

          <div class="modal fade bs-example-modal-lg-addcatalog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

               <div class="row">
                 <div class="col-lg-9 col-lg-offset-1">
                  <hr>
                  <center><h3>ข้อมูลแค็ตตาล็อก</h3></center><br> 
                  <!--<center>
                    <div class="form-group">
                      <div class="input-group col-lg-4 control-label">
                        <input type="text" class="form-control" placeholder="Search ">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                      </div>
                    </div><br><br>
                  </center>-->
                  <div class="form-group">
                   <label class="col-lg-2 control-label">เลขที่สิทธิ</label>
                   <div class="col-lg-4">
                    <input type="tel" class="form-control" name="Cl_code_re"   />
                  </div>
                  <label class="col-lg-2 control-label">ผลงานวิจัย</label>
                  <div class="col-lg-4">
                    <input type="tel" class="form-control" name="Cl_research"   />
                  </div>
                </div>
                <br><br>


                <div class="form-group">
                  <label class="col-lg-2 control-label">นักวิจัย</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="Cl_researchers"   />
                  </div>
                  <label class="col-lg-2 control-label">ราคา</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="Cl_price"   />
                  </div>
                </div>
                <br><br>

                <div class="form-group">
                 <label class="col-lg-2 control-label">รายละเอียด</label>
                 <div class="col-lg-4">
                   <textarea name="Cl_property" class="form-control">    </textarea>
                 </div>
                 <label class="col-lg-2 control-label">เบอร์โทรศัพท์ติดต่อ</label>
                 <div class="col-lg-4">
                   <input type="text" class="form-control" name="Cl_contact"   />
                 </div>
               </div>
               <br><br>

               <div class="form-group">
                <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                <div class="col-lg-4">
                  <input type="file" name="Cl_picture">
                </div>
                <label class="col-lg-2 control-label">สถานะ</label>
                <div class="col-lg-4">
                 <select class="form-control"  name="Cl_status">
                   <option value=""> เลือกสถานะ</option>
                   <option value="ใช้ประโยชน์">ใช้ประโยชน์</option>
                   <option value="ยังไม่ใช้ประโยชน์">ยังไม่ใช้ประโยชน์</option>ห
                 </select>
               </div><br><br>

             </div>
         

           <div class="modal-footer">
            <button  type="submit" class="btn btn-primary " ><strong>ตกลง</strong></button> 
            <button  type="reset" class="btn btn-warning " ><strong>ยกเลิก</strong></button> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
          </div>


        </div>
      </div>
    </div>

  </form>
  <!-- End popup แก้ไขผลงาน--> 
  
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
