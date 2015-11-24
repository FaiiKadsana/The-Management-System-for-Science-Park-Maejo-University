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
         <li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/catalog")?>">จัดการแค็ตตาล็อก</a></li>
         <li><i class="fa fa-wrench"></i> <a href="<?php echo base_url("backend/editcatalog")?>">แก้ไขแค็ตตาล็อก</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->

   <!-- Star row-->
   <div class="row">
     <div class="col-sm-12">
       <div class="panel panel-warning">
        <div class="panel-heading">ข้อมูลแค็ตตาล็อก</div>
        <div class="panel-body">

         <!-- รูปนักวิจัย-->
         <div class="col-sm-2">
          <img width="240px" height="280px" src="<?php echo base_url("asset2/img/011.jpg") ?>"> <br><br>

        </div>

        <div class="col-lg-offset-1 col-sm-9">
          <!-- ข้อมูลนักวิจัย -->

          <!-- Show &Join table -->
          <table class="table table-bordered">
            <tr>
              <td>เลขที่สิทธิ : 52896</td> 
            </tr>
            <tr>
              <td>ผลงานวิจัย : กังหันลม</td>
            </tr>
            <tr>
              <td>นักวิจัย : อลงกรณ์ อยู่เกิด</td>
            </tr>
            <tr>
              <td>ราคา  :  500  บาท</td> 
            </tr>
            <tr>
              <td>รายละเอียด : เป็นกังหันลมที่พัฒนาเพื่อใช่ในการเกตร</td>
            </tr>
            <tr>
              <td>เบอร์โทรศัพท์ติดต่อ : 0857856130</td>
            </tr>
            <tr>
              <td>สถานะ : ใช้ประโยชน์</td>
            </tr>
            <tr>
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg-editcatalog"><i class="fa fa-wrench"></i> แก้ไข</button></td>
            </tr>
          </table>

          <!-- start popup แก้ไขผลงาน-->
          <form id="" method="post" class="form-horizontal" action="">

            <div class="modal fade bs-example-modal-lg-editcatalog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                 <div class="row">
                   <div class="col-lg-9 col-lg-offset-1">
                    <hr>
                    <center><h3>ข้อมูลแค็ตตาล็อก</h3></center><br> 
                    
                    <div class="form-group">
                     <label class="col-lg-2 control-label">เลขที่สิทธิ</label>
                     <div class="col-lg-4">
                      <input type="tel" class="form-control" name="rec_phone"   />
                    </div>
                    <label class="col-lg-2 control-label">ผลงานวิจัย</label>
                    <div class="col-lg-4">
                      <input type="tel" class="form-control" name="rec_phone"   />
                    </div>
                  </div>
                  <br><br>


                  <div class="form-group">
                    <label class="col-lg-2 control-label">นักวิจัย</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="rec_work_unit"   />
                    </div>
                    <label class="col-lg-2 control-label">ราคา</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="rec_work_unit"   />
                    </div>
                  </div>
                  <br><br>

                  <div class="form-group">
                   <label class="col-lg-2 control-label">รายละเอียด</label>
                   <div class="col-lg-4">
                     <textarea >    </textarea>
                   </div>
                   <label class="col-lg-2 control-label">เบอร์โทรศัพท์ติดต่อ</label>
                   <div class="col-lg-4">
                     <input type="text" class="form-control" name="rec_work_unit"   />
                   </div>
                 </div>
                 <br><br>

                 <div class="form-group">
                  <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                  <div class="col-lg-4">
                    <input type="file" name="rec_img">
                  </div>
                  <label class="col-lg-2 control-label">สถานะ</label>
                  <div class="col-lg-4">
                   <select class="form-control"  name="statussearch">
                     <option value=""> เลือกสถานะ</option>
                     <option value="รอดำเนินงาน">ใช้ประโยชน์</option>
                     <option value="รออนุมัติ">ยังไม่ใช้ประโยชน์</option>ห
                   </select>
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

</div>
</div>
</div>


<div class="row">
 <div class="col-sm-12">
   <table>
     <tr>
       <td width="80%">
       </td>
       <td width="80%">
       </td>
       <td>
         <a href="<?php echo base_url("backend/catalog")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
       </td>
     </tr>
   </table>
 </div>

</div>


<!-- /.row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
