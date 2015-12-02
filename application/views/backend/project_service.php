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
         <li class="active"><i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/project_service")?>">จัดการโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->

   <!-- Star row-->
   <form method="post" class="form-horizontal" action="<?php echo $action; ?>" >
     <div class="row">
      <div class=" col-sm-12">
       <center>
        <table >
          <tr>
            <td></td>
            <td><select class="form-control"  name="keyword1">
             <option value=""> เลือกสถานะ</option>
             <option value="อนุมัติ"> อนุมัติ</option>
             <option value="ลงนามในสัญญา"> ลงนามในสัญญา</option>
             <option value="จ่ายเงินงวดที่ 1"> จ่ายเงินงวดที่ 1</option>
             <option value="รายงานความก้าวหน้าครั้งที่ 1"> รายงานความก้าวหน้าครั้งที่ 1</option>
             <option value="จ่ายเงินงวดที่ 2"> จ่ายเงินงวดที่ 2</option>
             <option value="รายงานความก้าวหน้าครั้งที่ 2"> รายงานความก้าวหน้าครั้งที่ 2</option>
             <option value="ส่งรายงานฉบับสมบูรณ์ พร้อมแผ่นซีดี 1 แผ่น"> ส่งรายงานฉบับสมบูรณ์ พร้อมแผ่นซีดี 1 แผ่น</option>
             <option value="จ่ายเงินงวดที่ 3"> จ่ายเงินงวดที่ 3</option>
           </select></td>
           <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
           <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>
         </tr>
       </table>  
     </center>
   </div>
 </div>
 <br>
</form>
<!-- /.row -->
<!-- Star row-->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">Service Platform</div>
      <div class="panel-body">
       <table class="table table-striped">

        <?php if (empty($keyword1)) { ?>

        <tr class="bg-success">
          <th width="15%">รหัสแบบฟอร์ม</th>
          <!--<th width="15%">ชื่อนักวิจัย</th>-->
          <th width="15%">ชื่อโครงการ</th>
          <th width="20%">ชื่อสถานประกอบการ</th> 
          <!-- <th width="20%">ปีที่ทำวิจัย</th> -->
          <th width="30%">สถานะ</th>          
        </tr>   

        <?php $i='1';  foreach ($service as $rowservice){ ?>

        <tr class="bg-success">
          <td ><?php echo $rowservice->S_id; ?></td>
          <!--<td ><?php //echo $rowservice->Rec_name_thai;?></td>-->
          <td ><?php echo $rowservice->Re_name1;?></td>   
          <td ><?php echo $rowservice->C_name;?></td>
          <!--  <td ><?php //echo $rowservice->Re_start;?></td> -->
          <td ><?php echo $rowservice->S_status;?></td> 
          <td><a href="<?php echo base_url('backend/viewservice/index/'.$rowservice->S_id)?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> 
          <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $rowservice->S_id; ?>" ><i class="fa fa-plus"></i> เพิ่ม</button></td>          
          <td><a href="<?php echo base_url("backend/editproject_service")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
        </tr> 

        <form method="post" class="form-horizontal" action="<?php echo $action1; ?>" enctype="multipart/form-data" >

          <div class="modal fade bs-example-modal-lg-addproject_service" id="modal<?php echo $rowservice->S_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="panel panel-warning">
                  <div class="panel-heading">ข้อมูลนักวิจัย</div>
                  <div class="panel-body">

                   <div class="row">
                     <div class="col-lg-9 col-lg-offset-1">
                      <hr>
                      <center><h3>ข้อมูลนักวิจัย</h3></center><br> 

                      <div class="form-group">
                        <label class="col-lg-2 control-label">ชื่อ</label>
                        <div class="col-lg-4">
                          <!--     <input type="hidden" class="form-control" name="S_id"/> -->
                          <input type="text" class="form-control" name="Rec_name_thai" placeholder="ภาษาไทย"  /> 
                        </div>
                        <label class="col-lg-2 control-label">นามสกุล</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Rec_ln_thai"  placeholder="ภาษาไทย"  />
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Rec_name_eng" placeholder="ภาษาอังกฤษ" />
                        </div>
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" name="Rec_ln_eng" placeholder="ภาษาอังกฤษ" />
                        </div>
                      </div>

                      <div class="form-group">
                       <label class="col-lg-2 control-label">ที่อยู่</label>
                       <div class="col-lg-10">
                        <textarea class="form-control"  name="Rec_address"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                     <label class="col-lg-2 control-label">เบอร์โทร</label>
                     <div class="col-lg-4">
                      <input type="tel" class="form-control" name="Rec_phone"  >
                    </div>
                    <label class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-4">
                      <input type="email" class="form-control" name="Rec_mail"  >
                    </div>

                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ตำแหน่ง</label>
                    
                    <div class="col-lg-4">
                      <select class="form-control"  name="Rec_position">
                        <option value="ศ.ดร.">ศ.ดร.</option>
                        <option value="รศ.ดร.">รศ.ดร.</option>
                        <option value="พศ.ดร.">พศ.ดร.</option>
                        <option value="ศ.">ศ.</option>
                        <option value="รศ.">รศ.</option>
                        <option value="พศ.">พศ.</option>
                        <option value="ดร.">ดร.</option>
                        <option value="อ.">อ.</option>
                      </select>
                    </div>
                    
                    <label class="col-lg-2 control-label">หน่วยงานสังกัด</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="Rec_unit"  >
                    </div>
                  </div>


                  <div class="form-group">

                    <label class="col-lg-2 control-label">รูป</label>
                    <div class="col-lg-4">
                      <input type="file" name="Rec_picture1" >
                    </div>
                    <label class="col-lg-2 control-label">สถานที่ทำงาน</label>
                    <div class="col-lg-4">
                      <input type="text" name="Rec_office" >
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">    
                    <label class="col-lg-2 control-label">ความเชียวชาญ</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="Sct_detail"  >
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
          
        <!-- ข้อมูลผู้ประกอบการ -->
<div class="panel panel-warning">
  <div class="panel-heading">ข้อมูลโครงการ</div>
  <div class="panel-body">


    <div class="row">
      <div class="col-lg-9 col-lg-offset-1">
        <hr>
        <center><h3>เพิ่มโครงการ</h3></center> <br>

        <div class="form-group">
          <label class="col-lg-2 control-label">ชื่อโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_name1" placeholder="ภาษาไทย"   />
          </div>
          <label class="col-lg-2 control-label"></label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_name_eng"  placeholder="ภาษาอังกฤษ"  />
          </div>
        </div>
        

        <div class="form-group"> 
          <label class="col-lg-2 control-label">กลุ่มอุตสาหกรรม</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_industry_group"  />
          </div>
          <label class="col-lg-2 control-label">หน่วยงานวิจัย</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="m_id"   />
          </div> 
        </div>
        

        <div class="form-group">
          <label class="col-lg-2 control-label">ปีที่เริ่ม<br>ทำโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_start"   />
          </div>
          <label class="col-lg-2 control-label">ปีที่สิ้นสุด<br>ทำโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_end"  />
          </div>
        </div>
        

        <div class="form-group">
          <label class="col-lg-2 control-label">เลขที่<br>สิทธิบัตร</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_id_patent"   />
          </div>
          <label class="col-lg-2 control-label">สถานภาพ<br>โครงการ</label>
          <div class="col-lg-4">
            <select class="form-control"  name="Re_status" >
              <option value="อย่ในช่วงดำเนินงาน">อย่ในช่วงดำเนินงาน</option>
              <option value="สำเร้จแล้ว">สำเร้จแล้ว</option>
            </select>
          </div>
        </div>
        


        <div class="form-group">
          <label class="col-lg-2 control-label">แหล่งเงินทุน<br>อุทยาน</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_finances_sp"  />
          </div>
          <label class="col-lg-2 control-label">แหล่งเงินทุน<br>บริษัท</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_finances_b"  />
          </div>
        </div>
        <div class="form-group">
         <label class="col-lg-2 control-label">บทสรุป</label>
         <div class="col-lg-4">
          <textarea class="form-control" name="Re_abstract"></textarea>
        </div>
        <label class="col-lg-2 control-label">รางวัลผลงานวิจัย</label>
        <div class="col-lg-4">
          <input type="text" class="form-control" name="res_award"   />
        </div>
      </div>
      

      <div class="form-group">
       <label class="col-lg-2 control-label">ประเภทรางวัล</label>
       <div class="col-lg-4">
        <input type="text" class="form-control" name="rea_type"   />
      </div>
      <label class="col-lg-2 control-label">วันรับรางวัลผลงานวิจัย</label>
      <div class="col-lg-4">
        <input type="date" class="form-control" name="rea_date"   />
      </div>

    </div>

    <div class="form-group">             
      <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
      <div class="col-lg-4">
        <input type="file" name="Re_picture1">
      </div>
      <label class="col-lg-2 control-label">สัญญา</label>
      <div class="col-lg-4">
        <input type="file" name="Co_agreement">
      </div>
    </div> 

    <br>

    <div class="form-group">
     <label class="col-lg-2 control-label">สถานะ</label>
     <div class="col-lg-4">
      <select class="form-control"  name="statussearch">
        <option value="สำเร็จ"> อนุมัติ</option>
        <option value="อยู่ในช่วงดำเนินงาน"> ลงนามในสัญญา</option>
        <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 1</option>
        <option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 1</option>
        <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 2</option>
        <option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 2</option>
        <option value="อยู่ในช่วงดำเนินงาน"> ส่งรายงานฉบับสมบูรณ์ พร้อมแผ่นซีดี 1 แผ่น</option>
        <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 3</option>
      </select>
    </div>
    <label class="col-lg-2 control-label">หมายเหตุ</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="Re_notes"   />
    </div>
  </div>

</div>
</div>

</div>
</div>
<!-- ข้อมูลโครงการ -->

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
      <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>

  </div>

</div>
</div>
</div>
</div>
</form> 

<?php } ?>

<?php }else{ ;?>

<tr class="bg-success">
  <th width="15%">รหัสแบบฟอร์ม</th>
  <!--<th width="15%">ชื่อนักวิจัย</th>-->
  <th width="15%">ชื่อโครงการ</th>
  <th width="20%">ชื่อสถานประกอบการ</th> 
  <!--   <th width="25%">ปีที่ทำวิจัย</th> -->
  <th width="35%">สถานะ</th>     
  
</tr>   

<?php $i='1';  foreach ($search as $rowservice){ ?>

<tr class="bg-success">
 <td ><?php echo $rowservice->S_id; ?></td>
 <!-- <td ><?php //echo $rowservice->Rec_name_thai;?></td>-->
 <td ><?php echo $rowservice->Re_name1;?></td>   
 <td ><?php echo $rowservice->C_name;?></td>
 <!--  <td ><?php //echo $rowservice->Re_start;?></td> -->
 <td ><?php echo $rowservice->S_status;?></td>
 
 <td><a href="<?php echo base_url('backend/viewservice/index/'.$rowservice->S_id)?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> 
 <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $rowservice->S_id; ?>"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
 <td><a href="<?php echo base_url("backend/editproject_service")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
</tr>  

<form method="post" class="form-horizontal" action="<?php echo $action1; ?>" enctype="multipart/form-data" >

  <div class="modal fade bs-example-modal-lg-addproject_service"  id="modal<?php echo $rowservice->S_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="panel panel-warning">
          <div class="panel-heading">ข้อมูลนักวิจัย</div>
          <div class="panel-body">

           <div class="row">
             <div class="col-lg-9 col-lg-offset-1">
              <hr>
              <center><h3>ข้อมูลนักวิจัย</h3></center><br> 

              <div class="form-group">
                <label class="col-lg-2 control-label">ชื่อ</label>
                <div class="col-lg-4">
                 <!--    <input type="hidden" class="form-control" name="S_id"/> -->
                 <input type="text" class="form-control" name="Rec_name_thai" placeholder="ภาษาไทย" /> 
               </div>
               <label class="col-lg-2 control-label">นามสกุล</label>
               <div class="col-lg-4">
                <input type="text" class="form-control" name="Rec_ln_thai"  placeholder="ภาษาไทย"  />
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-2 control-label"></label>
              <div class="col-lg-4">
                <input type="text" class="form-control" name="Rec_name_eng" placeholder="ภาษาอังกฤษ" />
              </div>
              <label class="col-lg-2 control-label"></label>
              <div class="col-lg-4">
                <input type="text" class="form-control" name="Rec_ln_eng" placeholder="ภาษาอังกฤษ" />
              </div>
            </div>

            <div class="form-group">
             <label class="col-lg-2 control-label">ที่อยู่</label>
             <div class="col-lg-10">
              <textarea class="form-control"  name="Rec_address"></textarea>
            </div>
          </div>

          <div class="form-group">
           <label class="col-lg-2 control-label">เบอร์โทร</label>
           <div class="col-lg-4">
            <input type="tel" class="form-control" name="Rec_phone"  >
          </div>
          <label class="col-lg-2 control-label">E-mail</label>
          <div class="col-lg-4">
            <input type="email" class="form-control" name="Rec_mail"  >
          </div>

        </div>

        <div class="form-group">
          <label class="col-lg-2 control-label">ตำแหน่ง</label>
          <div class="col-lg-4">
            <select class="form-control"  name="Rec_position" >
              <option value="<?php echo $rowservice->Rec_position;?>"></option>

            </select>
          </div>
          <label class="col-lg-2 control-label">หน่วยงานสังกัด</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Rec_unit"  >
          </div>
        </div>


        <div class="form-group">

          <label class="col-lg-2 control-label">รูป</label>
          <div class="col-lg-4">
            <input type="file" name="Rec_picture1" >
          </div>
          <label class="col-lg-2 control-label">สถานที่ทำงาน</label>
          <div class="col-lg-4">
            <input type="text" name="Rec_office" >
          </div>
        </div>
        <br><br>
        <div class="form-group">    
          <label class="col-lg-2 control-label">ความเชียวชาญ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Sct_detail"  >
          </div>
        </div>

      </div>
    </div>

  </div>
</div>

<div class="panel panel-warning">
  <div class="panel-heading">ข้อมูลโครงการ</div>
  <div class="panel-body">


    <div class="row">
      <div class="col-lg-9 col-lg-offset-1">
        <hr>
        <center><h3>เพิ่มโครงการ</h3></center> <br>

        <div class="form-group">
          <label class="col-lg-2 control-label">ชื่อโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_name1" placeholder="ภาษาไทย"   />
          </div>
          <label class="col-lg-2 control-label"></label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_name_eng"  placeholder="ภาษาอังกฤษ"  />
          </div>
        </div>


        <div class="form-group"> 
          <label class="col-lg-2 control-label">กลุ่มอุตสาหกรรม</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_industry_group"  />
          </div>
        </div>


        <div class="form-group">
          <label class="col-lg-2 control-label">ปีที่เริ่ม<br>ทำโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_start"   />
          </div>
          <label class="col-lg-2 control-label">ปีที่สิ้นสุด<br>ทำโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_end"  />
          </div>
        </div>


        <div class="form-group">
          <label class="col-lg-2 control-label">เลขที่<br>สิทธิบัตร</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_id_patent"   />
          </div>
          <label class="col-lg-2 control-label">สถานภาพ<br>โครงการ</label>
          <div class="col-lg-4">
            <select class="form-control"  name="Re_status" >
              <option value="อย่ในช่วงดำเนินงาน">อย่ในช่วงดำเนินงาน</option>
              <option value="สำเร้จแล้ว">สำเร้จแล้ว</option>
            </select>
          </div>
        </div>



        <div class="form-group">
          <label class="col-lg-2 control-label">แหล่งเงินทุน<br>อุทยาน</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_finances_sp"  />
          </div>
          <label class="col-lg-2 control-label">แหล่งเงินทุน<br>บริษัท</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="Re_finances_b"  />
          </div>
        </div>
        <div class="form-group">
         <label class="col-lg-2 control-label">บทสรุป</label>
         <div class="col-lg-4">
          <textarea class="form-control" name="Re_abstract"></textarea>
        </div>
      </div>


      <div class="form-group">
       <label class="col-lg-2 control-label">ประเภทรางวัล</label>
       <div class="col-lg-4">
        <input type="text" class="form-control" name="Rea_type"   />
      </div>
      <label class="col-lg-2 control-label">วันรับรางวัลผลงานวิจัย</label>
      <div class="col-lg-4">
        <input type="date" class="form-control" name="Rea_date"   />
      </div>

    </div>

    <div class="form-group">             
      <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
      <div class="col-lg-4">
        <input type="file" name="Re_picture1">
      </div>
      <label class="col-lg-2 control-label">สัญญา</label>
      <div class="col-lg-4">
        <input type="file" name="S_agreement">
      </div>
    </div>

    <br>

    <div class="form-group">
     <label class="col-lg-2 control-label">สถานะ</label>
     <div class="col-lg-4">
      <select class="form-control"  name="S_status">
        <option value="สำเร็จ"> อนุมัติ</option>
        <option value="อยู่ในช่วงดำเนินงาน"> ลงนามในสัญญา</option>
        <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 1</option>
        <option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 1</option>
        <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 2</option>
        <option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 2</option>
        <option value="อยู่ในช่วงดำเนินงาน"> ส่งรายงานฉบับสมบูรณ์ พร้อมแผ่นซีดี 1 แผ่น</option>
        <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 3</option>
      </select>
    </div>
    <label class="col-lg-2 control-label">หมายเหตุ</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="Re_notes"   />
    </div>
  </div>

</div>
</div>

</div>
</div>

<!-- ข้อมูลโครงการ -->

<div class="modal-footer">
  <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
  <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>
</div>
</div>
</div>
</form> 


<?php } }?>
</table>     
<!-- End -->
</div>

</div>
</div>
<!-- /.row -->
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
