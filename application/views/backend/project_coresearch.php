<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>Co-Research Platform</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/project_coresearch")?>">จัดการโครงการ</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->
   <!-- Star row-->
   <div class="row">
    <div class=" col-sm-12">
     <center>
       <form id="" method="post" class="form-horizontal" action="">
        <table >

          <tr>
            <td></td>
            <td><select class="form-control"  name="statussearch">
             <option value=""> เลือกสถานะ</option>
             <option value="สำเร็จ"> อนุมัติ</option>
             <option value="อยู่ในช่วงดำเนินงาน"> ลงนามในสัญญา</option>
             <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 1</option>
             <option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 1</option>
             <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 2</option>
             <option value="อยู่ในช่วงดำเนินงาน"> รายงานความก้าวหน้าครั้งที่ 2</option>
             <option value="อยู่ในช่วงดำเนินงาน"> ส่งรายงานฉบับสมบูรณ์ พร้อมแผ่นซีดี 1 แผ่น</option>
             <option value="อยู่ในช่วงดำเนินงาน"> จ่ายเงินงวดที่ 3</option>
           </select></td>
           <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
           <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>


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
         <tr class="bg-success">
          <th width="5%">#</th>
          <th width="15%">ชื่อนักวิจัย</th>
          <th width="15%">ชื่อโครงการ</th>
          <th width="20%">ชื่อสถานประกอบการ</th> 
          <th width="35%">สถานะ</th>     
          <th width="25%">ปีที่ทำวิจัย</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>

        </tr>   

        <!-- Show &Join table -->

        <tr class="bg-success">
          <td >1</td>
          <td >อลงกรณ์</td>
          <td >อยู่เกิด</td>   
          <td >กังหันลม</td>
          <td >อยู่ในช่วงดำเนินงาน</td>
          <td >2558</td>
          <td><a href="<?php echo base_url("backend/viewproject_coresearch")?>"><button type="button" class="btn btn-info" ><i class="fa fa-eye"></i>  ดู</button></a></td> 
          <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-addproject_coresearcher"><i class="fa fa-plus"></i> เพิ่ม</button></td>          
          <td><a href="<?php echo base_url("backend/editproject_coresearch")?>"><button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i>  แก้ไข</button></a></td>
          <td>สัญญา<input type="file" name=""></td>                            
        </tr>       
      </table>     
      <!-- End -->


      <!-- /.row -->
    </div>

    <form id="" method="post" class="form-horizontal" action="">
      <div class="modal fade bs-example-modal-lg-addproject_coresearcher" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
                      <input type="text" class="form-control" name="rec_name_thai" placeholder="ภาษาไทย"  reqquired />
                    </div>
                    <label class="col-lg-2 control-label">นามสกุล</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="rec_ln_thai" placeholder="ภาษาไทย"  />
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="rec_name_eng" placeholder="ภาษาอังกฤษ"  />
                    </div>
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="rec_ln_eng" placeholder="ภาษาอังกฤษ"  />
                    </div>
                  </div>
                  

                  <div class="form-group">
                   <label class="col-lg-2 control-label">ที่อยู่</label>
                   <div class="col-lg-10">
                    <textarea class="form-control"  name="rec_address">   </textarea>
                  </div>
                </div>
                

                
                

                <div class="form-group">
                 <label class="col-lg-2 control-label">เบอร์โทร</label>
                 <div class="col-lg-4">
                  <input type="tel" class="form-control" name="rec_phone"   />
                </div>
                <label class="col-lg-2 control-label">E-mail</label>
                <div class="col-lg-4">
                  <input type="email" class="form-control" name="rec_mail"   />
                </div>

              </div>
              


              <div class="form-group">
                <label class="col-lg-2 control-label">ตำแหน่ง</label>
                <div class="col-lg-4">
                  <select class="form-control"  name="rec_position">
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
                  <input type="text" class="form-control" name="rec_unit"   />
                </div>
              </div>
              

              <div class="form-group">

                <label class="col-lg-2 control-label">เลือกไฟล์ที่จะอัฟโหลด</label>
                <div class="col-lg-4">
                  <input type="file" name="rec_img">
                </div>
                <label class="col-lg-2 control-label">สถานที่ทำงาน</label>
                <div class="col-lg-4">
                  <input type="text" name="rec_office">
                </div>
              </div>
              <br><br>
              <div class="form-group">    
                <label class="col-lg-2 control-label">ความเชียวชาญ</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="sct_detail"   />
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
      <!-- ข้อมูลนักวิจัย -->

      <div class="panel panel-warning">
        <div class="panel-heading">ข้อมูลผู้ประกอบการ</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-lg-9 col-lg-offset-1">

             <center><h3>ข้อมูลผู้ติดต่อ</h3></center> <br>

             <div class="form-group">
              <div class="col-lg-4">
                <select class="form-control"  name="title">
                 <option value="นาย">นาย</option>
                 <option value="นาง">นาง</option>
                 <option value="นางสาว">นางสาว</option>
               </select>
             </div>
             <div class="col-lg-4">
               <input type="text" class="form-control" name="bus_name" placeholder="ชื่อ"   />
             </div>
             <div class="col-lg-4">
               <input type="text" class="form-control" name="bus_ln" placeholder="นามสกุล"   />
             </div>
           </div>
           


           <div class="form-group">
            <label class="col-lg-2 control-label">เลขที่บัตรประชาชน</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="bus_id"  />
            </div>
            <label class="col-lg-2 control-label">ตำแหน่ง</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="bus_detil"  />
            </div>
          </div>
          

          <div class="form-group">
            <label class="col-lg-2 control-label">เบอร์โทรติดต่อ</label>
            <div class="col-lg-4">
              <input type="tel" class="form-control" name="bus_tel"  />
            </div>
            <label class="col-lg-2 control-label">E-mail</label>
            <div class="col-lg-4">
              <input type="email" class="form-control" name="bus_mail"  />
            </div>
          </div>
          
          <hr>

          <center><h3>ข้อมูลทางธุรกิจ</h3></center> <br>

          <div class="form-group">
            <label class="col-lg-2 control-label">ชื่อกิจการ</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="bus"  />
            </div>
            <label class="col-lg-2 control-label">ชื่อเจ้าของธุรกิจ</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="bus_ owners"  />
            </div>
          </div>
          

          <div class="form-group">
           <label class="col-lg-2 control-label">ที่อยู่</label>
           <div class="col-lg-10">
            <textarea class="form-control"  name="rec_address">   </textarea>
          </div>
        </div>
        
        
        <div class="form-group">
          <label class="col-lg-2 control-label">โทรศัพท์</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="bus_phone"  />
          </div>
          <label class="col-lg-2 control-label">โทรสาร</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="bus_ fax"  />
          </div> 
        </div>
        
        <div class="form-group">

          <label class="col-lg-2 control-label">website</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="bus_ website"  />
          </div>
        </div>
        

        <div class="row">
         <div class="col-lg-12">

          <label class="control-label">เลขที่ทะเบียนพาณิชย์</label>
          <div class="funkyradio"> 
            <table>
              <tr>
               <td width="25%"><div class="funkyradio-warning">
                <input type="radio" name="radio" id="radio1" />
                <label for="radio1">ไม่มี</label>
              </div></td> 
              <td width="25%">      <div class="funkyradio-success">
                <input type="radio" name="radio" id="radio29" />
                <label for="radio29">อื่นๆ ระบุ:</label>
              </div></td> 
            </tr>
            <tr>
              <td width="25%"> </td> 
              <td width="25%"> 
                <input type="text" class="form-control" name=""  /></td> 
              </tr>
            </table>
          </div>

        </div>
      </div>


      <div class="row">
       <div class="col-lg-12">
        <label class="control-label">ประเภทกิจการ</label>
        <div class="funkyradio">                      
         <table>
          <tr>    
            <td  width="25%">  <div class="funkyradio-warning">
             <input type="radio" name="radio1" id="radio3" />
             <label for="radio3">เจ้าของกิจการ(ธรรมดา)</label>
           </div></td>  
           <td  width="25%"> <div class="funkyradio-info">
            <input type="radio" name="radio1" id="radio4" />
            <label for="radio4">ห้างหุ่นส่วนสามัญ </label>
          </div></td>  
          <td  width="25%">  <div class="funkyradio-success">
            <input type="radio" name="radio1" id="radio5" />
            <label for="radio5">ห้างหุ่นส่วนจำกัด</label>
          </div>  </td>  </tr> 
          <tr>                 
           <td  width="25%">  <div class="funkyradio-warning">
            <input type="radio" name="radio1" id="radio6" />
            <label for="radio6">บริษัทจำกัด</label>
          </div></td> 
          <td  width="25%">  <div class="funkyradio-info">
            <input type="radio" name="radio1" id="radio7" />
            <label for="radio7">วิสาหกิจชุมชน </label>
          </div></td> 
          <td  width="25%">  <div class="funkyradio-success">
            <input type="radio" name="radio1" id="radio28" />
            <label for="radio28">อื่นๆ ระบุ:</label>
          </div> </td> </tr>
          <tr>   <td  width="25%"></td>
            <td  width="25%"></td>
            <td  width="25%"> <input type="text" class="form-control" name=""  /></td>

          </table>
        </div>
      </div>

    </div>




    <div class="row">
     <div class="col-lg-12">

      <label class="control-label">สาขาอุตสาหกรรม</label>
      <div class="funkyradio">   
       <table>
        <tr>
         <td width="25%">  
           <div class="funkyradio-warning">
             <input type="radio" name="radio3" id="radio12" />
             <label for="radio12">อาหาร/อาหารสัตว์</label>
           </div>
           <td width="25%">  <div class="funkyradio-info">
            <input type="radio" name="radio3" id="radio13" />
            <label for="radio13">สิ่งทอ/เครื่องนุ่งห่ม </label>
          </div>
          <td width="25%">  <div class="funkyradio-success">
            <input type="radio" name="radio3" id="radio14" />
            <label for="radio14">รองเท้า/เครื่องหนัง</label>
          </div>                    
          <tr> </td>  </tr> 
          <td width="30%">    <div class="funkyradio-warning">
            <input type="radio" name="radio3" id="radio15" />
            <label for="radio15">ผลิตภัณฑ์พลาสติก/เครื่องเรือน</label>
          </div>
          <td width="25%">  <div class="funkyradio-info">
            <input type="radio" name="radio3" id="radio16" />
            <label for="radio16">ยา/เคมีภัณฑ์ </label>
          </div>
          <td width="25%">  <div class="funkyradio-default">
            <input type="radio" name="radio3" id="radio17" />
            <label for="radio17">ยางพารา/ผลิตภัณฑ์</label>
          </div> </td>  </tr> 
          <tr>
           <td width="25%"> <div class="funkyradio-primary">
            <input type="radio" name="radio3" id="radio18" />
            <label for="radio18">บรรจุภัณฑ์/ผลิตภัณฑ์พลาสติก</label>
          </div>
          <td width="20%">  <div class="funkyradio-success">
            <input type="radio" name="radio3" id="radio19" />
            <label for="radio19">เซรามิกส์/แก้ว</label>
          </div>
          <td width="30%">    <div class="funkyradio-danger">
            <input type="radio" name="radio3" id="radio20" />
            <label for="radio20">เครื่องใช้ไฟฟ้า/อิเล็กทรอนิกส์</label>
          </div> </td>  </tr> 
          <tr>
           <td width="25%"> <div class="funkyradio-warning">
            <input type="radio" name="radio3" id="radio21" />
            <label for="radio21">ชิ้นส่วน/ยานยนตื</label>
          </div>
          <td width="25%"> <div class="funkyradio-info">
            <input type="radio" name="radio3" id="radio22" />
            <label for="radio22">อัญมณี/เครื่องประดับ</label>
          </div>
          <td width="25%"> <div class="funkyradio-primary">
            <input type="radio" name="radio3" id="radio23" />
            <label for="radio23">เหล็ก/โลหะการ</label>
          </div> </td>  </tr> 
          <tr>
           <td width="25%"> <div class="funkyradio-success">
            <input type="radio" name="radio3" id="radio24" />
            <label for="radio24">เครื่องจักรกล</label>
          </div>
          <td width="25%"> <div class="funkyradio-danger">
            <input type="radio" name="radio3" id="radio25" />
            <label for="radio25">ท่องเที่ยว</label>
          </div>
          <td width="25%">  <div class="funkyradio-warning">
            <input type="radio" name="radio3" id="radio26" />
            <label for="radio26">บริการด้านสุขภาพ</label>
          </div> </td>  </tr> 
          <tr> 
           <td width="25%"> 
            <div class="funkyradio-info">
              <input type="radio" name="radio3" id="radio27" />
              <label for="radio27">อื่น</label>
            </div> </td>  </tr> 
          </table>
        </div>
      </div>

    </div>



    <div class="row">
     <div class="col-lg-12">

      <label class="control-label">ลักษณะการประกอบการ</label>
      <div class="funkyradio"> 
       <table>
        <tr>
         <td width="25%">                  
           <div class="funkyradio-warning">
            <input type="radio" name="radio2" id="radio9" />
            <label for="radio9">การผลิต</label>
          </div></td> 
          <td width="25%">   <div class="funkyradio-info">
            <input type="radio" name="radio2" id="radio10" />
            <label for="radio10">การค้า (ปลีกส่ง) </label>
          </div></td> 
          <td width="25%"> <div class="funkyradio-default">
            <input type="radio" name="radio2" id="radio11" />
            <label for="radio11">บริการ</label>
          </div>  </td>  </tr>  
          <tr>
           <td width="25%">      <div class="funkyradio-success">
            <input type="radio" name="radio2" id="radio30" />
            <label for="radio30">อื่นๆ ระบุ:</label>
          </div></td> 

          <td width="25%"></td> 
          <td width="25%"> </td>  </tr> 
          <tr>
           <td width="25%">
             <input type="text" class="form-control" name=""  /></td>
             <td width="25%"></td> 
             <td width="25%">   </td>  </tr>   
           </table>
         </div>

       </div>
     </div>

   </div>
 </div><br>

 <div class="row">
  <div class="col-lg-9 col-lg-offset-1">
   <div class="form-group">
    <label class="col-lg-2 control-label">เงินจดทะเบียน</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="bus_ mony"  />
    </div>
    <label class="col-lg-2 control-label">จำนวนปีที่ประกอบการ</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="bus_ amount"  />
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
            <input type="text" class="form-control" name="re_name" placeholder="ภาษาไทย"   />
          </div>
          <label class="col-lg-2 control-label"></label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="re_name_eng"  placeholder="ภาษาอังกฤษ"  />
          </div>
        </div>
        

        <div class="form-group"> 
          <label class="col-lg-2 control-label">กลุ่มอุตสาหกรรม</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="ret_detail"  />
          </div>
          <label class="col-lg-2 control-label">หน่วยงานวิจัย</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="m_id"   />
          </div> 
        </div>
        

        <div class="form-group">
          <label class="col-lg-2 control-label">ปีที่เริ่ม<br>ทำโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="re_start"   />
          </div>
          <label class="col-lg-2 control-label">ปีที่สิ้นสุด<br>ทำโครงการ</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="re_end"  />
          </div>
        </div>
        

        <div class="form-group">
          <label class="col-lg-2 control-label">เลขที่<br>สิทธิบัตร</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="re_id_patent"   />
          </div>
          <label class="col-lg-2 control-label">สถานภาพ<br>โครงการ</label>
          <div class="col-lg-4">
            <select class="form-control"  name="re_status" >
              <option value="th">อย่ในช่วงดำเนินงาน</option>
              <option value="en">สำเร้จแล้ว</option>
            </select>
          </div>
        </div>
        


        <div class="form-group">
          <label class="col-lg-2 control-label">แหล่งเงินทุน<br>อุทยาน</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="re_finances_1"  />
          </div>
          <label class="col-lg-2 control-label">แหล่งเงินทุน<br>บริษัท</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="re_finances_2"  />
          </div>
        </div>
        <div class="form-group">
         <label class="col-lg-2 control-label">บทสรุป</label>
         <div class="col-lg-4">
          <textarea class="form-control" name="re_abstract"></textarea>
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
        <input type="file" name="re_picture">
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
      <input type="text" class="form-control" name="1"   />
    </div>
  </div>

</div>
</div>

</div>
</div>
<!-- ข้อมูลโครงการ -->


<div class="modal-footer">
  <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่ม</button>
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</form>

</div>
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
