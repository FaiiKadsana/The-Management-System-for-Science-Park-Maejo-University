<div id="page-wrapper ">

  <div class="container-fluid">


    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row ">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>Co-Research Platform</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/coresearch")?>">จัดการข้อเสนอโครงการ</a></li>
        <li> <i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/editfrcoresearch")?>">Edit From</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->

<div class="row ">
  <div class="col-sm-12">
    
    <div class="row">
      <div class="col-sm-12">
        <center>
          <table width="100%">
            <tr>
              <td width="30%"></td>
              <td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม:<input type="text" size="20" name="" disabled></td>
            </tr>
          </table>
        </center>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-12 ">

        <center>
          <p>Collaborative Research Project</p>
          <p>ข้อเสนอโครงการฉบับย่อ</p>
          <p>เพื่อขอรับการสนับสนุนตามกลไกอุทยานวิทยาศาสตร์ภาคเหนือ</p>
          <p>ปีงบประมาณ 2558</p>
          <br>
          <table  width="80%" >
          <tr>
              <td width="35%" colspan="2"> 
                วันที่:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="date"  name="dateca" >
             <br><br><br><br> </td>

            </tr>

            <tr>
              <td width="35%">1.ชื่อโครงการ</td>
              <td >
                <textarea type="text" cols="80" name="" rows="3" placeholder="(เป็นโครงการวิจัยและพัฒนาที่ภาคเอกชนพร้อมร่วมมือในการวิจัยและพัฒนาร่วมกัน)"></textarea>
              </td>
            </tr>
            <tr>
              <td width="35%">2.กลุ่มอุตสาหกรรม</td>
              <td >
                <input type="radio"  name="1" value="Focus (ข้าวทั้งห่วงโซ่)"> Focus (ข้าวทั้งห่วงโซ่)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="1" value="4 Focus Industries"> 4 Focus Industries&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="1" value="Others"> Others ระบุ <input type="text" name="" size="15">   
              </td>
            </tr>
            <tr>
              <td width="35%">3.ผู้รับผิดชอบโครงการและความเชี่ยวชาญ</td>
              <td >
                <br>
                ชื่อผู้รับผิดชอบ: <input type="text" name="" size="26"> ตำแหน่ง: <input type="text" name="" size="26"> <br>
                หน่วยงานรับผิดชอบ: <input type="text" name="" size="22"> เบอร์โทรศัพท์: <input type="tel" name="" size="22"> <br>
                แฟกซ์: <input type="text" name="" size="30"> อีเมล์: <input type="email" name="" size="30"> <br>
                ที่อยู่: <textarea name="" cols="40" rows="3" placeholder=" ที่อยู่" ></textarea>ตำบล: <select name="" > 
                <option value="นาหมื่นครี">นาหมื่นครี</option>
                <option value="นาโยง">นาโยง</option>
              </select> <br>
              อำเภอ: <select name="" > 
              <option value="นาหมื่นครี">นาหมื่นครี</option>
              <option value="นาโยง">นาโยง</option>
            </select> 
            จังหวัด: <select name="" > 
            <option value="นาหมื่นครี">นาหมื่นครี</option>
            <option value="นาโยง">นาโยง</option>
          </select> <br><br>
        </td>
      </tr>
      <tr>
        <td width="35%">4.ที่มาของโครงการ</td>
        <td >
          <textarea name="" cols="80" rows="3" ></textarea>
        </td>
      </tr>
      <tr>
        <td width="35%">5.วัตถุประสงค์</td>
        <td >
          <textarea name="" cols="80" rows="3" ></textarea>
        </td>
      </tr>
      <tr>
        <td width="35%">6.รายละเอียดผู้ประกอบการ</td>
        <td >
          <br>
          ประเภทนิติบุคคล: <input type="text" name="" size="24"> ทุนจดทะเบียน: <input type="text" name="" size="20"> <br>
          จำนวนพนักงาน: <input type="text" name="" size="18"> ผลิตภัณฑ์หลักขององค์กร: <input type="tel" name="" size="18"> <br>
          ที่อยู่: <textarea name="" cols="40" rows="3" placeholder=" ที่อยู่" ></textarea>ตำบล: <select name="" > 
          <option value="นาหมื่นครี">นาหมื่นครี</option>
          <option value="นาโยง">นาโยง</option>
        </select> <br>
        อำเภอ: <select name="" > 
        <option value="นาหมื่นครี">นาหมื่นครี</option>
        <option value="นาโยง">นาโยง</option>
      </select>
      จังหวัด: <select name="" > 
      <option value="นาหมื่นครี">นาหมื่นครี</option>
      <option value="นาโยง">นาโยง</option>
    </select> <br>
    ผู้ติดต่อประสานงาน: <input type="text" name="" size="18"> เบอร์ผู้ติดต่อประสานงาน: <input type="email" name="" size="16"> <br><br>
  </td>
</tr>
<tr>
  <td width="35%">7.เหตุผลที่สนใจร่วมงานวิจัยและพัฒนาสำหรับโครงการนี้</td>
  <td >
    <textarea name="" cols="80" rows="3" ></textarea>
  </td>
</tr>
<tr>
  <td width="35%">8.โครงการ/งานวิจัยที่เคยทำร่วมกับผู้เชี่ยวชาญ</td>
  <td >
    <textarea name="" cols="80" rows="3" ></textarea>
  </td>
</tr>
<tr>
  <td width="35%">9.การใช้ผลงานวิจัยเดิมที่นำมาต่อยอดเพื่อพัฒนาสู่เชิงพาณิชย์</td>
  <td >
    <textarea name="" cols="80" rows="3" ></textarea>
  </td>
</tr>
<tr>
  <td width="35%">10.รายละเอียดห้องปฏิบัติการ และนักวิจัย</td>
  <td >
    <textarea name="" cols="80" rows="3" ></textarea>
  </td>
</tr>
<tr>
  <td width="35%">11.แผนการดำเนินงาน</td>
  <td >

    <center>
      <br>
      <table border="1" width="100%">
        <tr>
          <th rowspan="2" align="center">กิจกรรม</th>
          <th colspan="6" align="center">เดือนที่</th>
        </tr>
        <tr>
          <td align="center">1</td>
          <td align="center">2</td>
          <td align="center">3</td>
          <td align="center">4</td>
          <td align="center">5</td>
          <td align="center">6</td>
        </tr>
        <tr>
          <td width="40%" align="center"><input type="text" size="30" name=""></td>
          <td align="center"><input type="checkbox" value="1" name=""></td>
          <td align="center"><input type="checkbox" value="2" name=""></td>
          <td align="center"><input type="checkbox" value="3" name=""></td>
          <td align="center"><input type="checkbox" value="4" name=""></td>
          <td align="center"><input type="checkbox" value="5" name=""></td>
          <td align="center"><input type="checkbox" value="6" name=""></td>
        </tr>
        <tr>
          <td width="40%" align="center"><input type="text" size="30" name=""></td>
          <td align="center"><input type="checkbox" value="1" name=""></td>
          <td align="center"><input type="checkbox" value="2" name=""></td>
          <td align="center"><input type="checkbox" value="3" name=""></td>
          <td align="center"><input type="checkbox" value="4" name=""></td>
          <td align="center"><input type="checkbox" value="5" name=""></td>
          <td align="center"><input type="checkbox" value="6" name=""></td>
        </tr>
        <tr>
          <td width="40%" align="center"><input type="text" size="30" name=""></td>
          <td align="center"><input type="checkbox" value="1" name=""></td>
          <td align="center"><input type="checkbox" value="2" name=""></td>
          <td align="center"><input type="checkbox" value="3" name=""></td>
          <td align="center"><input type="checkbox" value="4" name=""></td>
          <td align="center"><input type="checkbox" value="5" name=""></td>
          <td align="center"><input type="checkbox" value="6" name=""></td>
        </tr>
        <tr>
          <td width="40%" align="center"><input type="text" size="30" name=""></td>
          <td align="center"><input type="checkbox" value="1" name=""></td>
          <td align="center"><input type="checkbox" value="2" name=""></td>
          <td align="center"><input type="checkbox" value="3" name=""></td>
          <td align="center"><input type="checkbox" value="4" name=""></td>
          <td align="center"><input type="checkbox" value="5" name=""></td>
          <td align="center"><input type="checkbox" value="6" name=""></td>
        </tr>
        <tr>
          <td width="40%" align="center"><input type="text" size="30" name=""></td>
          <td align="center"><input type="checkbox" value="1" name=""></td>
          <td align="center"><input type="checkbox" value="2" name=""></td>
          <td align="center"><input type="checkbox" value="3" name=""></td>
          <td align="center"><input type="checkbox" value="4" name=""></td>
          <td align="center"><input type="checkbox" value="5" name=""></td>
          <td align="center"><input type="checkbox" value="6" name=""></td>
        </tr>
        <tr>
          <td width="40%" align="center"><input type="text" size="30" name=""></td>
          <td align="center"><input type="checkbox" value="1" name=""></td>
          <td align="center"><input type="checkbox" value="2" name=""></td>
          <td align="center"><input type="checkbox" value="3" name=""></td>
          <td align="center"><input type="checkbox" value="4" name=""></td>
          <td align="center"><input type="checkbox" value="5" name=""></td>
          <td align="center"><input type="checkbox" value="6" name=""></td>
        </tr>
      </table>
      <br>
    </center>

  </td>
</tr>
<tr>
  <td width="35%">12.ผลที่คาดว่าจะได้รับ</td>
  <td > 
    <textarea name="" cols="80" rows="3" placeholder="•รายได้เพิ่มขึ้นของผู้ประกอบการในภาคเอกชนที่เป็นผลมาจากโครงการ xxx บาท  • มูลค่าการลงทุนในการวิจัยและพัฒนา (R&D) ของภาคเอกชนที่เพิ่มขึ้น xxx บาท  • จำนวนการจ้างงานวิจัยที่อยู่ในภาคเอกชนเพิ่มขึ้น xxx คน  •..." ></textarea>
  </td>
</tr>
<tr>
  <td colspan="2" width="30%" >13.งบประมาณโครงการ 
    <br><br>
    <table  border="1" width="100%">
      <tr>
        <th rowspan="2" align="center" width="20%">กิจกรรม</th>
        <th rowspan="2"  align="center" width="30%">ค่าใช้จ่ายสนับสนุนโดยอุทยานฯ(ไม่เกิน 40%)</th>
        <th   align="center"width="30%">ค่าใช้จ่ายสนับสนุนโดยเอกชน(มากกว่าหรือเท่ากับ 60%)</th>
        <th rowspan="2"  align="center">รวม(บาท)</th>
      </tr>
      <tr>
        <td>
          <table  border="1" width="100%">
            <tr>
              <th width="50%">
                IN-CASH
              </th>
              <th>
                IN-KIND
              </th>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td width="20%">1.งบดำเนินการ<br>&nbsp;1.1ค่าตอบแทน<br>&nbsp;1.2ค่าจ้าง<br>&nbsp;1.3ค่าใช้จ่ายในการดำเนินงาน<br>&nbsp;1.4ค่าวัสดุ<br>&nbsp;1.5ค่าใช้สอย<br>&nbsp;1.6ค่าบริหารจัดการ</td>                    
        <td width="30%"><input type="text" size="20" name="1" placeholder="1"><br>
          <input type="text" size="20" name="" placeholder="1.1"><br>
          <input type="text" size="20" name="" placeholder="1.2"><br>
          <input type="text" size="20" name="" placeholder="1.3"><br>
          <input type="text" size="20" name="" placeholder="1.4"><br>
          <input type="text" size="20" name="" placeholder="1.5"><br>
          <input type="text" size="20" name="" placeholder="1.6"><br>
        </td>
        <td width="30%">
          <input type="text" size="10" name="" placeholder="1">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="1"><br>
          <input type="text" size="10" name="" placeholder="1.1">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="1.1"><br>
          <input type="text" size="10" name="" placeholder="1.2">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="1.2"><br>
          <input type="text" size="10" name="" placeholder="1.3">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="1.3"><br>
          <input type="text" size="10" name="" placeholder="1.4">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="1.4"><br>
          <input type="text" size="10" name="" placeholder="1.5">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="1.5"><br>
          <input type="text" size="10" name="" placeholder="1.6">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="1.6"><br>
        </td>
        <td>
          <input type="text" size="20" name="" placeholder="1"><br>
          <input type="text" size="20" name="" placeholder="1.1"><br>
          <input type="text" size="20" name="" placeholder="1.2"><br>
          <input type="text" size="20" name="" placeholder="1.3"><br>
          <input type="text" size="20" name="" placeholder="1.4"><br>
          <input type="text" size="20" name="" placeholder="1.5"><br>
          <input type="text" size="20" name="" placeholder="1.6"><br>
        </td>
      </tr>
      <tr>
        <td width="20%">รวมงบดำเนินการ</td>
        <td width="30%"><input type="text" size="20" name="" ></td>
        <td width="30%"><input type="text" size="10" name="" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" ><br></td>
        <td><input type="text" size="20" name="" ></td>
      </tr>
      <tr>
        <td width="20%">2.งบลงทุน<br>&nbsp;2.1ค่าครุภัณฑ์<br>&nbsp;2.2 ค่าก่อสร้าง (อาทิเช่น อาคาร สิ่งปลูกสร้าง สาธารณูปโภค)</td>                    
        <td width="30%"><input type="text" size="20" name="1" placeholder="2"><br>
          <input type="text" size="20" name="" placeholder="2.1"><br>
          <input type="text" size="20" name="" placeholder="2.2"><br>
        </td>
        <td width="30%">
          <input type="text" size="10" name="" placeholder="2">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="2"><br>
          <input type="text" size="10" name="" placeholder="2.1">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="2.1"><br>
          <input type="text" size="10" name="" placeholder="2.2">&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" placeholder="2.2"><br>
        </td>
        <td>
          <input type="text" size="20" name="" placeholder="2"><br>
          <input type="text" size="20" name="" placeholder="2.1"><br>
          <input type="text" size="20" name="" placeholder="2.2"><br>
        </td>
      </tr>
      <tr>
        <td width="20%">รวมงบลงทุน</td>
        <td width="30%"><input type="text" size="20" name="" ></td>
        <td width="30%"><input type="text" size="10" name="" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" ><br></td>
        <td><input type="text" size="20" name="" ></td>
      </tr>
      <tr>
        <th width="20%">รวมงบประมาณทั้งหมด</th>
        <th width="30%"><input type="text" size="20" name="" ></th>
        <th width="30%"><input type="text" size="10" name="" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="" ><br></th>
        <th><input type="text" size="20" name="" ></th>
      </tr>
    </table>
    <br>
    <p style="color:red;">*หมายเหตุ  สัดส่วนการสนับสนุนงบประมาณ ภาคเอกชนไม่ต่ำกว่า 60% อุทยานวิทยาศาสตร์ภาคเหนือไม่เกิน 40%</p>
    <br>
  </td> 
</tr>
<tr>
  <td colspan="2" width="30%">14.ลายเซ็น

    <center>
      <table  width="80%">
        <tr>
          <br><br><br>
          <td width="40%"> 
            <p>ผู้รับผิดชอบโครงการ</p>
            <p>&nbsp;&nbsp; (มหาวิทยาลัย)</p>
          </td>
          <td width="40%"> 
            <p>ผู้ประกอบการ (เอกชน)</p>
            <p>(ประทับตราบริษัท ถ้ามี)</p>
          </td>
        </tr>
      </table>
    </center>
  </td>
</tr>
</table>
</center>   
</div>
</div>

</div>
</div>

<br><br>
<div class="row">
  <div class="col-md-offset-5  col-sm-7">
  <button type="button" class="btn btn-warning    btn-lg">แก้ไข</button>
    <button type="button" class="btn btn-warning  btn-lg">ยกเลิก</button>
  </div>
</div>



   </div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
