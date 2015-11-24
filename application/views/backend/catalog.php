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

   <div class="row"> 
    <div class="col-sm-12 ">
      <center>

        <table >

          <tr>
            <td></td>
            <td><input type="text" class="form-control" placeholder="กรอกชื่อผลงาน"  name=""></td>
            <td><button class="btn btn-success" type="button" ><i class="fa fa-search"></i> ค้นหา</button></td>
            <td ><button class="btn btn-success" type="button" >ล้างข้อมูล</button> </td>


          </tr>
        </table>
      </center>
      <!-- /input-group -->
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
            <th width="25%">ชื่อผลงานวิจัย</th>
            <th width="25%">ชื่อนักวิจัย</th>
            <th width="25%">ติดต่อ</th> 
            <th width="30%">สถานะ</th>     
            <th></th>
            <th></th>
            <th></th>
            

          </tr>   

          <!-- Show &Join table -->

          <tr class="bg-success">
            <td >1</td>
            <td >กังหันลม</td>
            <td >อลงกรณ์</td>   
            <td >085666666</td>
            <td >ใช้ประโยชน์</td>
            <td><a href="<?php echo base_url("backend/viewcatalog")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> 
            <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addcatalog"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
            <td><a href="<?php echo base_url("backend/editcatalog")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
            
          </tr>       
        </table>     
        <!-- End -->

        <!-- start popup เพิ่มผลงาน-->
        <form id="" method="post" class="form-horizontal" action="<?php echo $action; ?>" enctype="multipart/form-data">

          <div class="modal fade bs-example-modal-lg-addcatalog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

               <div class="row">
                 <div class="col-lg-9 col-lg-offset-1">
                  <hr>
                  <center><h3>ข้อมูลแค็ตตาล็อก</h3></center><br> 
                  <center>
                    <div class="form-group">
                      <div class="input-group col-lg-4 control-label">
                        <input type="text" class="form-control" placeholder="Search ">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                      </div>
                    </div><br><br>
                  </center>
                  <div class="form-group">
                   <label class="col-lg-2 control-label">เลขที่สิทธิ</label>
                   <div class="col-lg-4">
                    <input type="tel" class="form-control" name="rec_phone"   />
                  </div>
                  <label class="col-lg-2 control-label">ผลงานวิจัย</label>
                  <div class="col-lg-4">
                    <input type="tel" class="form-control" name="Re_name"   />
                  </div>
                </div>
                <br><br>


                <div class="form-group">
                  <label class="col-lg-2 control-label">นักวิจัย</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="Rec_name_thai"   />
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
                 <select class="form-control"  name="statussearch">
                   <option value=""> เลือกสถานะ</option>
                   <option value="รอดำเนินงาน">ใช้ประโยชน์</option>
                   <option value="รออนุมัติ">ยังไม่ใช้ประโยชน์</option>ห
                 </select>
               </div><br><br>

             </div>
         

           <div class="modal-footer">
            <button  type="submit" class="btn btn-primary " ><strong>ตกลง</strong></button> 
            <button  type="reset" class="btn btn-warning " ><strong>ยกเลิก</strong></button>   
          </div>


        </div>
      </div>
    </div>

  </form>
  <!-- End popup แก้ไขผลงาน--> 
  
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
