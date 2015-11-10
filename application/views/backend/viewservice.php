<div id="page-wrapper ">

  <div class="container-fluid">


    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row ">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>Service Platform</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/service")?>">จัดการข้อเสนอโครงการ</a></li>
         <li><i class="fa fa-file"></i> <a href="<?php echo base_url("backend/viewservice")?>">View From</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->

  
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
        <table  width="80%" >
          <tr>
            <td width="15%" align="center"><img src='<?php echo base_url("asset/images/N.jpg") ?>' width='80%' height='20%'></td>
            <td width="60%" align="center">
              <p>แบบฟอร์มกรอกข้อมูลผู้ประกอบการ/SMEs/วิสาหกิจชุมชน</p>
              <p>ที่มารับบริการอุทยานวิทยาศาสตร์ภูมิภาค เครือข่ายภาคเหนือ</p>
            </td>
            <td width="25%" align="center"><img src='<?php echo base_url("asset/images/banner1.png") ?>' width='50%' height='20%'></td>
          </tr>
          <tr>
            <td colspan="2" > </td>
            <td  align="left"> 
              <p> สถาบันบ่มเพาะวิสาหกิจ มหาวิทยาลัย </p>
              <p> วันที่มารับบริการ <input type="date"  name=""  disabled> </p>
            </td>
          </tr>
          <tr>
            <td  align="left"> 
              <p><b><u>ข้อมูลส่วนตัว</u></b></p>
            </td>
            <td colspan="2" > </td>
          </tr>
          <tr>
            <td colspan="3"  align="center"><br>
              ชื่อ: <select name="" disabled> 
              <option value="นาย">นาย</option>
              <option value="นาง">นาง</option>
              <option value="นางสาว">นางสาว</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="" disabled>
            &nbsp;&nbsp;&nbsp;&nbsp;นามสกุล: <input type="text" size="30" name="" disabled>
          </td>
        </tr>
        <tr>
          <td  colspan="3" align="center">เลขที่บัตรประชาชน: <input type="text" size="30" name=""disabled >
            &nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง: <input type="text" size="30" name=""disabled ></td>
          </tr>
          <tr>
            <td colspan="3"  align="center">เบอร์โทรติดต่อ: <input type="tel" size="30" name="" disabled>
              &nbsp;&nbsp;&nbsp;&nbsp;E-mail: <input type="email" size="40" name="" disabled ></td>
            </tr>
            <tr>
              <td  align="left"> 
                <p><b><u>ข้อมูลทางธุรกิจ</u></b></p>
              </td>
              <td colspan="2" > </td>
            </tr>
            <tr>
              <td colspan="3" align="center">
                ชื่อกิจการ: <input type="text" size="30" name="" disabled><br>
                <textarea name="" cols="30" rows="3" placeholder="ที่อยู่" disabled></textarea>
                &nbsp;&nbsp;&nbsp;&nbsp;
                ตำบล <select name="" disabled> 
                <option value="นาหมื่นครี">นาหมื่นครี</option>
                <option value="นาโยง">นาโยง</option>
              </select>
              &nbsp;&nbsp;&nbsp;&nbsp;
              อำเภอ <select name="" disabled> 
              <option value="นาโยง">นาโยง</option>
              <option value="สันทราย">สันทราย</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp; 
            จังหวัด <select name="" disabled> 
            <option value="ตรัง">ตรัง</option>
            <option value="เชียงใหม่">เชียงใหม่</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center">
          โทรศัพท์: <input type="text" size="20" name="" disabled>
          &nbsp;&nbsp;&nbsp;โทรสาร: <input type="text" size="20" name=""disabled >
          &nbsp;&nbsp;&nbsp;Website: <input type="text" size="30" name="" disabled >
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>เลขที่ทะเบียนพาณิชย์: </b>&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="1" disabled value="ไม่มี"> ไม่มี  
          &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="1" value="มี" disabled> มี
          &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="กรุณากรอก"  disabled>                                                                                                                
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>ประเภทกิจการ (เลือกข้อใดข้อหนึ่ง)</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="2" value="เจ้าของกิจการ(บุคคลธรรมดา)" disabled> เจ้าของกิจการ(บุคคลธรรมดา)  
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="ห้างหุ้นส่วนสามัญ" disabled> ห้างหุ้นส่วนสามัญ
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="ห้างหุ้นส่วนจำกัด" disabled> ห้างหุ่นส่วนจำกัด<br>
          <input type="radio" name="2" value="เบริษัทจำกัด" disabled> บริษัทจำกัด  
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="2" value="วิสาหกิจชุมชน" disabled> วิสาหกิจชุมชน
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="2" value="อื่นๆ" disabled> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" disabled >                                                                                                            
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>ลักษณะการประกอบการ (เลือกข้อใดข้อหนึ่ง)</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="3" value="การผลิต" disabled> การผลิต 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="3" value="การค้า(ปลีก-ส่ง)"disabled> การค้า(ปลีก-ส่ง)
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="3" value="บริการ" disabled> บริการ
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="3" value="อื่นๆ" disabled> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" disabled>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>สาขาอุตสาหกรรมที่ทำอยู่ (เลือกข้อใดข้อหนึ่ง)</b>
        </td>
      </tr>
      <tr>
        <td colspan="3"  align="left">
          <input type="radio" name="4" value="อาหารและอาหารสัตว์" disabled> อาหารและอาหารสัตว์
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="สิ่งทอและเครื่องนุ่งห่ม" disabled> สิ่งทอและเครื่องนุ่งห่ม
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="รองเท้าและเครื่องหนัง" disabled> รองเท้าและเครื่องหนัง
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="ผลิตภัณฑ์จากไม้และเครื่องเรือน" disabled> ผลิตภัณฑ์จากไม้และเครื่องเรือน<br>
          <input type="radio" name="4" value="ยาและเคมีภัณฑ์"> ยาและเคมีภัณฑ์
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="ยางพาราและผลิตภัณฑ์" disabled> ยางพาราและผลิตภัณฑ์
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก" disabled> บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="เซรามิกส์และแก้ว" disabled> เซรามิกส์และแก้ว<br>
          <input type="radio" name="4" value="เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์" disabled> เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="ชิ้นส่วนและยานยนต์" disabled> ชิ้นส่วนและยานยนต์
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="อัญมณีและเครื่องประดับ" disabled> อัญมณีและเครื่องประดับ
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="เหล็กและโลหะการ" disabled> เหล็กและโลหะการ<br>
          <input type="radio" name="4" value="เครื่องจักรกล"> เครื่องจักรกล
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="ท่องเที่ยว" disabled> ท่องเที่ยว
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="4" value="บริการด้านสุขภาพ" disabled> บริการด้านสุขภาพ
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="อื่นๆ" disabled> อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" disabled >
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          เงินจดทะเบียน: <input type="text" size="20" name="" disabled>&nbsp;&nbsp;บาท(ถ้ามี)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนปีที่ประกอบการ: <input type="text" size="20" name="" disabled>&nbsp;&nbsp;ปี
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          จำนวนลูกจ้างทั้งหมด: <input type="text" size="15" name="" disabled>&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;แบ่งเป็นลูกค้าปรจำ <input type="text" size="15" name="" disabled>&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;ลูกจ้างชั่วคราว <input type="text" size="15" name="" disabled>&nbsp;&nbsp;อัตรา
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          ผลิตภัณฑ์หลัก:&nbsp;&nbsp;1.) <input type="text" size="20" name="" disabled >&nbsp;&nbsp;2.) <input type="text" size="20" name="" disabled>&nbsp;&nbsp;3.) <input type="text" size="20" name="" disabled>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <br>
          <table width="100%" border="1">
            <tr>
              <td colspan="3" align="center">
                <p>อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบนจะเป็นผู้เก็บรักษาความลับของผู้มารับบริการ โดยข้อมุลทั้งหมดจะเปิดเผยให้เฉพาะกับเจ้าหน้าที่</p>
                <p>ที่เป็นหน่วยร่วมด้านการปรึกษาแนะนำเท่านั้น  ซึ่งจุดประสงค์ของการบันทึกข้อมูลก็เพื่อให้บริการจะเป็นไปด้วยความรวดเร็วและหาแนวทางแก้ไขได้อย่างถูกต้อง</p>
              </td>
            </tr>
            <tr>
              <td align="center"><br><br>
                ลงชื่อ <input type="text" size="25" name="" disabled><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<input type="text" size="25" name="" disabled>)<br>
                <b>ผู้ขอรับบริการ</b>
              </td>
              <td align="center" colspan="2">
                <input type="radio" name="5" value="ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล" disabled> ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล
                <input type="radio" name="5" value="ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล" disabled> ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล
              </td>
            </tr>
          </table>
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>ยอดขาย</b>
        </td>
      </tr>

      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="6" value="ขยายตลาด" disabled> ขยายตลาด
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="6" value="พัฒนาผลิตภัณฑ์" disabled> พัฒนาผลิตภัณฑ์
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="6" value="แบรนด์" disabled> แบรนด์
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="สำรวจความต้องการของตลาด" disabled> สำรวจความต้องการของตลาด<br>
          <input type="radio" name="6" value="จัดทำแผนส่งเสริมการตลาด"> จัดทำแผนส่งเสริมการตลาด
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="6" value="หาพันธมิตรทางธุรกิจ" disabled> หาพันธมิตรทางธุรกิจ
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="6" value="พัฒนาธุรกิจใหม่" disabled> พัฒนาธุรกิจใหม่
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="พัฒนาตลาดต่างประเทศ" disabled> พัฒนาตลาดต่างประเทศ
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>ความสามารถในการทำกำไร</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="7" value="การเพิ่มประสิทธิภาพ" disabled> การเพิ่มประสิทธิภาพ
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="7" value="การลดต้นทุน" disabled> การลดต้นทุน
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="7" value="การจัดซื้อ จัดหา" disabled> การจัดซื้อ จัดหา
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>เงินทุน</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="9" value="ระดมทุน" disabled> ระดมทุน
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="9" value="การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน" disabledv> การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>การจัดการ</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="8" value="การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ" disabled> การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="8" value="บริหารจัดการบัญชี" disabled> บริหารจัดการบัญชี
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="8" value="กฎหมาย" disabled> กฎหมาย<br>
          <input type="radio" name="8" value="การใช้เทคโนโลยีสารสนเทศ(IT)" disabled> การใช้เทคโนโลยีสารสนเทศ(IT)
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="8" value="การเริ่มต้นกิจการ/การเลิกกิจการ" disabled> การเริ่มต้นกิจการ/การเลิกกิจการ
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="8" value="การสืบทอดธุรกิจ" disabled> การสืบทอดธุรกิจ<br>
          <input type="radio" name="8" value="การปฎิรูปการบริหารจัดการ" disabled> การปฎิรูปการบริหารจัดการ
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>การปฏิบัติงาน</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="10" value="เพิ่มประสิทธิภาพการผลิต" disabled> เพิ่มประสิทธิภาพการผลิต
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="10" value="คุณภาพ" disabled> คุณภาพ
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="10" value="มาตรฐาน(standard)" disabled> มาตรฐาน(standard)
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>ทรัพยากรบุคคล</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="11" value="การบริหารจัดการทรัพยากรบุคคล" disabled> การบริหารจัดการทรัพยากรบุคคล
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="11" value="เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)" disabled> เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)<br>
          <input type="radio" name="11" value="สัมมนาและฝึกอบรม(จัดนอกองค์กร)" disabled> สัมมนาและฝึกอบรม(จัดนอกองค์กร)
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="11" value="ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก" disabled> ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>เทคโนโลยี</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="12" value="พัฒนาเทคโนโลยี" disabled> พัฒนาเทคโนโลยี
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="12" value="ทรัพย์สินทางปัญญา" disabled> ทรัพย์สินทางปัญญา
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="12" value="การประหยัดพลังงาน" disabled> การประหยัดพลังงาน
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="12" value="มาตรการด้านสิ่งแวดล้อม" disabled> มาตรการด้านสิ่งแวดล้อม<br>
        </td>
      </tr>
      <tr>
        <td>
          อื่นๆ โปรดระบุ<input type="text" name="" size="40" disabled>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <b>เรื่องที่มาขอคำปรึกษาแนะนำ (สำหรับผู้มารับบริการ)</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center">
          <textarea name="" cols="80" rows="3" disabled></textarea>
        </td>
      </tr>
      <hr>
      <tr>
        <td colspan="3" align="left">
          <b>วิธีการแนะนำและแนวทางแก้ไข (สำหรับเจ้าหน้าที่)</b>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          <input type="radio" name="13" value="ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย" disabled> ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="13" value="แนะนำให้คำปรึกษาภายนอก" disabled> แนะนำให้คำปรึกษาภายนอก<br>
          <input type="radio" name="13" value="แนะนำไปยังหน่วยอื่น" disabled> แนะนำไปยังหน่วยอื่น
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="13" disabled value="แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)"> แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)<br>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center">
          <textarea name="" cols="80" rows="3" disabled></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="1"></td>
        <td colspan="2" align="right">
          <table>
            <tr>
              <td>ชื่อผู้ให้การแนะนำ: <input type="text" size="30" name="" disabled ></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </center>

</div>
</div>



<br><br>




  <div class="row">
     <div class="col-sm-12">
       <table>
         <tr>
           <td width="80%">
           </td>
           <td width="80%">
           </td>
           <td>
             <a href="<?php echo base_url("backend/service")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
           </td>
         </tr>
       </table>
     </div>

   </div>




   </div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
