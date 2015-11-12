<div id="page-wrapper ">

  <div class="container-fluid">


    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row ">
      <div class="col-sm-12">
        <h1 class="page-header">
         <small>TBI Platform</small>
       </h1>
       <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/tbi")?>">จัดการข้อเสนอโครงการ</a></li>
         <li><i class="fa fa-file"></i> <a href="<?php echo base_url("backend/viewtbi")?>">View From</a></li>
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
              <td width="15%" align="center"><img src='<?php echo base_url("asset/images/mju_logo.jpg") ?>' width='70%' ></td>
              <td width="60%" align="center">
                <p>โครงการการบ่มเพาะผู้ประกอบการเทคโนโลยี  มหาวิทยาลัยแม่โจ้</p>
                <p>ภายใต้โครงการอุทยานวิทยาศาสตร์  มหาวิทยาลัยแม่โจ้</p>
              </td>
              <td width="25%" align="center"><img src='<?php echo base_url("asset/images/N.jpg") ?>' width='70%' height='20%'></td>
            </tr>
          </table>
        </center>
        <br>

        <center>
          <table width="80%" >
            
            <tr>
              <td colspan="2" align="right" width="60%">
                <p>ใบสมัครรับบริการบ่มเพาะผู้ประกอบการเทคโนโลยี</p>
              </td>
              <td >

                <table border="1" width="30%" align="right">
                  <tr>
                    <td width="25%" align="center">
                      <br>
                      <p>ติดรูปถ่ายหน้าตรง</p>
                      <p>ขนาด1 นิ้ว</p>
                      <br>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td colspan="2" align="left">
                วันที่:<input type="date" name=""  disabled>
              </td>
              <td align="right">เลขที่: <input type="text" name="" size="20" disabled ></td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <u><b><p>ส่วนที่ 1&nbsp;&nbsp;&nbsp;&nbsp;  ข้อมูลส่วนบุคคล</p></b></u>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                &nbsp;&nbsp;&nbsp;&nbsp;1.1 <select name="" disabled> 
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
              </select> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ: <input type="text" size="30" name="" disabled>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นามสกุล: <input type="text" size="30" name="" disabled>
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.2
              เลขประจำตัวประชาชน: <input type="text" size="50" name="" disabled>
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.3
              เกิดวันที่: <input type="date"  name=""disabled >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบันอายุ: <input type="text" size="10" name="" disabled> ปี
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.4
              ชื้อชาติ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="1" value="ไทย" disabled> ไทย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="1" value="อื่นๆ" disabled> อื่นๆ
              &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุ" disabled > 
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.5
              ศาสนา:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="พุทธ" disabled> พุทธ 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="คริสต์" disabled> คริสต์  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="อิสลาม" disabled> อิสลาม  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="ฮินดู" disabled> ฮินดู   
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="2" value="อื่นๆ" disabled> อื่นๆ
              &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุ"  disabled> 
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.6
              ที่อยู่หรือสถานที่ติดต่อสะดวก (สำหรับจัดส่งเอกสารหรือข้อมูลข่าวสาร)
            </td>
          </tr>
          <tr>
            <td colspan="3" align="center">
             ที่อยู่: <textarea name="" cols="80" rows="3" placeholder="ที่อยู่" disabled></textarea>
              
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;1.7
        โทรศัพท์ที่ติดต่อสะดวก: <input type="tel" size="10" name="" disabled >&nbsp;&nbsp;&nbsp;&nbsp;
        โทรสาร: <input type="text" size="10" name="" disabled >&nbsp;&nbsp;&nbsp;&nbsp;
        มือถือ: <input type="tel" size="10" name="" disabled>&nbsp;&nbsp;&nbsp;&nbsp;
        E-mail: <input type="email" size="20" name="" disabled>&nbsp;&nbsp;&nbsp;&nbsp;
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;1.8
        ท่านสำเร็จการศึกษาระดับใด หรือกำลังศึกษาอยู่ในระดับใด
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="3" value="สำเร็จการศึกษา" disabled> สำเร็จการศึกษา เมื่อ ปี พ.ศ. <input type="text" size="20" name="" disabled>
        สาขาวิชา<input type="text" size="20" name=""disabled > สถาบัน <input type="text" size="20" name="" disabled><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="4" value="มัธยมศึกษาตอนปลาย/ปวช." disabled> มัธยมศึกษาตอนปลาย/ปวช. 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="4" value="อนุปริญญา/ปวส./ปวท."disabled> อนุปริญญา/ปวส./ปวท.  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="ปริญญาตรี" disabled> ปริญญาตรี <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="4" value="ปริญญาโทหรือสูงกว่า" disabled> ปริญญาโทหรือสูงกว่า     
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="4" value="ปริญญาเอก" disabled> ปริญญาเอก  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="อื่นๆ" disabled> อื่นๆ 
        &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" disabled>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="3" value="กำลังศึกษา" disabled> กำลังศึกษา ในชั้นปีที่ <input type="text" size="20" name="" disabled>
        สาขาวิชา <input type="text" size="20" name="" disabled > สถาบัน <input type="text" size="20" name="" disabled><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="5" value="มัธยมศึกษาตอนปลาย/ปวช." disabled> มัธยมศึกษาตอนปลาย/ปวช. 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="5" value="อนุปริญญา/ปวส./ปวท." disabled> อนุปริญญา/ปวส./ปวท.  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="5" value="ปริญญาตรี" disabled> ปริญญาตรี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="5" value="ปริญญาโทหรือสูงกว่า" disabled> ปริญญาโทหรือสูงกว่า     
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="5" value="ปริญญาเอก" disabled> ปริญญาเอก  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="5" value="อื่นๆ" disabled> อื่นๆ 
        &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" disabled>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;1.9
        ปัจจุบันท่านประกอบอาชีพใด 
      </td>
    </tr>
    <tr>
      <td  colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="เพิ่งสำเร็จการศึกษา" disabled> เพิ่งสำเร็จการศึกษา ไม่เกิน 1 ปี และยังหางานทำไม่ได้<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ไม่ได้ประกอบอาชีพใดๆ" disabled> ไม่ได้ประกอบอาชีพใดๆ (เช่น ว่างงาน ลาออกจากงาน ถูกเลิกจ้าง เกษียณอายุ ปิดกิจการ สำเร็จการศึกษาเกิน 1ปี และยังหางานทำไม่ได้) <br>
        &nbsp;&nbsp;&nbsp;&nbsp;มาเป็นเวลา <input type="text" size="20" name=""  disabled> ปี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="พนักงานประจำ/ลูกจ้างประจำ บริษัท" disabled>พนักงานประจำ/ลูกจ้างประจำ บริษัท<input type="text" size="20" name=""  disabled><br>
        &nbsp;&nbsp;&nbsp;&nbsp;อยู่ในภาคธุรกิจใด(เลือกเพียงข้อเดียว)&nbsp;&nbsp;<input type="radio" name="7" value="การผลิต" disabled> การผลิต&nbsp;&nbsp;<input type="radio" name="7" value="การค้า" disabled> การค้า&nbsp;&nbsp;<input type="radio" name="7" value="การบริการ" disabled> การบริการ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ข้าราชการ หรือพนักงานรัฐวิสาหกิจ สังกัด" disabled>ข้าราชการ หรือพนักงานรัฐวิสาหกิจ สังกัด<input type="text" size="20" name="" disabled><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ลูกจ้างรายวัน หรือรับจ้างทั่วไป" disabled> ลูกจ้างรายวัน หรือรับจ้างทั่วไป<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ)" disabled> ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ)<input type="text" size="20" name="" placeholder="โปรดระบุ" disabled><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ประกอบธุรกิจส่วนตัว" disabled> ประกอบธุรกิจส่วนตัว หรือ เป็นเจ้าของกิจการ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="อื่นๆ" disabled> อื่นๆ<input type="text" size="20" name="" placeholder="โปรดระบุ"  disabled><br>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;1.10
        ท่านมีประสบการณ์ในฐานะเจ้าของกิจการหรือเป็นทายาทธุรกิจหรือไม่
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="7" value="เป็นเจ้าของ" disabled> เป็นเจ้าของ หรือหุ้นส่วนผู้จัดการในธุรกิจอยู่แล้ว ตั้งแต่ปี พ.ศ. <input type="text" size="20" name="" disabled><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="7" value="เป็นทายาทของเจ้าของธุรกิจ" disabled> เป็นทายาทของเจ้าของธุรกิจ และกำลังเตรียมรับสืบทอดธุรกิจ <br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="7" value="ไม่เคยเป็นเจ้าของธุรกิจ" disabled> ไม่เคยเป็นเจ้าของธุรกิจ และไม่ได้เป็นทายาทธุรกิจ   <br>        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        <u><b><p>ส่วนที่ 2&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลเกี่ยวกับธุรกิจที่ต้องการจัดตั้ง</p></b></u>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;2.1
        ท่านมีโครงการหรือมีแนวคิดเกี่ยวกับธุรกิจที่ต้องการลงทุนอยู่แล้วหรือไม่
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="8" value="ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร" disabled> ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="8" value="มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว" disabled> มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว<br>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;2.2
        ท่านสนใจหรือกำลังจะลงทุนในธุรกิจประเภทใด           
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="9" value="การผลิต" disabled> การผลิต&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุประเภทสินค้าที่จะผลิต" disabled ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="9" value="การบริการ" disabled> การบริการ&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุลักษณะของบริการ" disabled ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="9" value="การค้าส่ง" disabled> การค้าส่ง&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุประเภทสินค้า" disabled><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="9" value="การค้าปลีก" disabled> การค้าปลีก&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุประเภทสินค้า" disabled> 
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;2.3
        ท่านได้จัดทำแผนธุรกิจสำหรับโครงการที่จะลงทุนไว้แล้วหรือไม่           
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="10" value="มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว" disabled> มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="10" value="มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน" disabled> มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="10" value="กำลังจัดทำแผนธุรกิจ" disabled> กำลังจัดทำแผนธุรกิจ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="10" value="ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ" disabled> ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;2.4
        ท่านมีเป้าหมายที่จะเริ่มลงทุนในธุรกิจที่สนใจ เมื่อใด          
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="11" value="ภายในเดือน" disabled> ภายในเดือน<input type="text" size="30" name="" disabled >ปี<input type="text" size="20" name="" disabled><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="11" value="ยังไม่มีเป้าหมายกำหนดเวลา" disabled> ยังไม่มีเป้าหมายกำหนดเวลา
        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;2.5
        ท่านคาดว่ากิจการที่จะเริ่มจัดตั้ง จะต้องใช้เงินลงทุนในปีแรก ประมาณ <input type="text" size="30" name="" disabled> บาท        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;2.6
        ท่านคาดว่าจะได้เงินลงทุนดังกล่าวจากแหล่งใดบ้าง (ระบุได้มากกว่าหนึ่งข้อ)         
      </td>
    </tr>
    <tr>
      <td  colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="12" value="เงินส่วนตัวของท่าน" disabled> เงินส่วนตัวของท่าน ประมาณ <input type="text" size="20" name="" disabled> บาท<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="12" value="เงินจากหุ้นส่วน" disabled> เงินจากหุ้นส่วน หรือผู้ร่วมทุน ประมาณ<input type="text" size="20" name="" disabled > บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="13" value="ญาติ สมาชิกในครอบครัว" disabled> ญาติ สมาชิกในครอบครัว 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="13" value="บุคคลอื่นที่ไม่ใช่ญาติ" disabled> บุคคลอื่นที่ไม่ใช่ญาติ 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="13" value="บริษัทหรือกิจการอื่น" disabled> บริษัทหรือกิจการอื่น&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="12" value="เงินกู้ยืม" disabled> เงินกู้ยืม ประมาณ <input type="text" size="20" name="" disabled> บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="14" value="ญาติ สมาชิกในครอบครัว" disabled> ญาติ สมาชิกในครอบครัว &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="14" value="บุคคลอื่นที่ไม่ใช่ญาติ" disabled> บุคคลอื่นที่ไม่ใช่ญาติ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="14" value="ธนาคารของรัฐ" disabled> ธนาคารของรัฐ &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ"  disabled>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="14" value="ธนาคารพาณิชย์ของเอกชน" disabled> ธนาคารพาณิชย์ของเอกชน&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" disabled><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="14" value="สถาบันการเงินที่ไม่ใช่ธนาคาร"> สถาบันการเงินที่ไม่ใช่ธนาคาร (นันแบงค์ เช่น บริษัทเครดิต, ลิสซิ่ง) &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" >
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;2.7
        ท่านคาดว่าในปีแรกที่จัดตั้งธุรกิจ จะมีการจ้างงาน (จ่ายเงินเดือนประจำ และลงบัญชีเป็นต้นทุน) จำนวนเท่าใด        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ตัวท่านเอง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="18" value="ไม่มี" disabled>ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="18" value="มี" disabled> มี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- หุ้นส่วนที่ร่วมบริหารจัดการ/ดำเนินงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="15" value="ไม่มี" disabled> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="15" value="มีประมาณ" disabled> มีประมาณ
        <input type="text" size="30" name="" disabled > คน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงาน/ผู้ปฏิบัติงานที่เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="16" value="ไม่มี" disabled> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="16" value="มีประมาณ" disabled> มีประมาณ
        <input type="text" size="30" name="" disabled> คน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงานอื่นๆที่ไม่ได้เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="17" value="ไม่มี" disabled> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="17" value="มีประมาณ" disabled> มีประมาณ
        <input type="text" size="30" name="" disabled> คน<br>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        <u><b><p>ส่วนที่ 3&nbsp;&nbsp;&nbsp;&nbsp;บริการที่ต้องการจากโครงการการบ่มเพาะผู้ประกอบการเทคโนโลยี มหาวิทยาลัยแม่โจ้</p></b></u>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.1
        ท่านคาดว่าจะได้เงินลงทุนดังกล่าวจากแหล่งใดบ้าง (ระบุได้มากกว่าหนึ่งข้อ)         
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ" disabled> การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="การจัดทำแผนธุรกิจ" disabled> การจัดทำแผนธุรกิจ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="การจัดทำ เว็บไซต์" disabled> การจัดทำ เว็บไซต์<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="การออกแบบและจัดทำโลโก้" disabled> การออกแบบและจัดทำโลโก้<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" disabled >        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.2
        การอบรมให้ความรู้เบื้องต้น         
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="การตลาด" disabled> การตลาด<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="การบัญชี-การเงิน" disabled> การบัญชี-การเงิน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="การผลิต" disabled> การผลิต<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="การทรัพยากรบุคคล" disabled> การทรัพยากรบุคคล<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" disabled>        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.3
        การวิจัยและพัฒนาเทคโนโลยีและผลิตภัณฑ์        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="20" value="การวิจัยและพัฒนาเทคโนโลยีการผลิต" disabled> การวิจัยและพัฒนาเทคโนโลยีการผลิต<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="20" value="การวิจัยและพัฒนาผลิตภัณฑ์" disabled> การวิจัยและพัฒนาผลิตภัณฑ์<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="20" value="การพัฒนาบรรจุภัณฑ์" disabled> การพัฒนาบรรจุภัณฑ์<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="20" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" disabled >        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.4
        การให้บริการระบบโครงสร้างพื้นฐาน       
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="21" value="การใช้พื้นที่" disabled> การใช้พื้นที่<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="21" value="การใช้เลขานุการกลาง" disabled> การใช้เลขานุการกลาง<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="21" value="การบริการจัดทำบัญชี" disabled> การบริการจัดทำบัญชี<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="21" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ"  disabled>        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.5
        การให้คำปรึกษาแนะนำ      
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="แหล่งเงินทุน" disabled> แหล่งเงินทุน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การร่วมลงทุน" disabled> การร่วมลงทุน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล" disabled> การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การตั้งโรงงาน" disabled> การตั้งโรงงาน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การตลาด" disabled> การตลาด<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การเงิน" disabled> การเงิน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การบัญชี" disabled> การบัญชี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การบริหารบุคคล" disabled> การบริหารบุคคล<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การบริหารการผลิต" disabled> การบริหารการผลิต<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="ภาษี" disabled> ภาษี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="กฎหมาย" disabled> กฎหมาย<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การค้าระหว่างประเทศ" disabled> การค้าระหว่างประเทศ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" disabled>        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.6
        การขอใช้บริการห้องปฏิบัติการ<input type="text" size="30" name="" placeholder="ระบุ" disabled>      
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.7
        การขอรับการรับรองมาตรฐาน       
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value=" อย." disabled> อย.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value=" GMP" disabled> GMP<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value=" HACCP" disabled> HACCP<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value="ISO" disabled> ISO  <input type="text" size="30" name=""> <br>      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" disabled > <br>    
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.8
        การสนับสนุนกิจกรรมประชาสัมพันธ์และการส่งเสริมการจำหน่าย      
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="24" value="การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge" disabled> การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="24" value="การจัดนิทรรศการ ออกบูธ" disabled> การจัดนิทรรศการ ออกบูธ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="24" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" disabled> <br>    
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.9
        การประสานงานและเชื่อมโยงเครือข่ายกับหน่วยงานสนับสนุนการประกอบธุรกิจ      
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="OIL" disabled> OIL<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="NIA" disabled> NIA<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="I03 CR (รัฐร่วมเอกชน)" disabled> I03 CR (รัฐร่วมเอกชน)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="IP Fund" disabled> IP Fund<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" disabled> <br>    
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.10
        การขอรับการสนับสนุนทางการเงิน      
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="26" value="การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)" disabled> การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="26" value="การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ" disabled> การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="26" value="การส่งเสริมทางการตลาด" disabled> การส่งเสริมทางการตลาด<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="26" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" disabled> <br>    
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.11
        การใช้บริการเรื่องการจัดการทรัพย์สินทางปัญญา      
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การให้บริการข้อมูล" disabled> การให้บริการข้อมูล<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การสืบค้นข้อมูลทรัพย์สินทางปัญญา" disabled> การสืบค้นข้อมูลทรัพย์สินทางปัญญา<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การจดทะเบียนทรัพย์สินทางปัญญา" disabled> การจดทะเบียนทรัพย์สินทางปัญญา<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การอนุญาตใช้สิทธ์" disabled> การอนุญาตใช้สิทธ์<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การเจรจาใช้สิทธิ์" disabled> การเจรจาใช้สิทธิ์<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การประเมินมูลค่าทรัพย์สินทางปัญญา" disabled> การประเมินมูลค่าทรัพย์สินทางปัญญา<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="อื่นๆ" disabled> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" disabled> <br>    
      </td>
    </tr>
    <tr>
      <td colspan="3" align="center">
        <br>
        <table border="1" width="80%">
          <tr>
            <td colspan="3" align="center">
              <p><b>คำรับรองของผู้สมัคร</b></p>
              <table>
                <tr>
                  <td colspan="3" align="center">
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้ารับรองว่าหากข้าพเจ้าได้รับคัดเลือกเข้าร่วมโครงการบ่มเพาะวิสาหกิจ ในครั้งนี้ <br>
                    ข้าพเจ้าจะเข้าร่วมกิจกรรมตามหลักสูตรหรือ ตามหลักเกณฑ์ที่กำหนดของสถาบันบ่มเพาะ<br>
                    วิสาหกิจ มหาวิทยาลัยแม่โจ้ รวมทั้งจะร่วมมือให้ข้อมูลแก่ สถาบันบ่มเพาะวิสาหกิจ มหาวิทยาลัย<br>
                    แม่โจ้  หรือที่ปรึกษาที่ได้รับมอบหมาย ในการติดตามผลสัมฤทธิ์จากการเข้าร่วมโครงการบ่ม<br>
                    เพาะวิสาหกิจของข้าพเจ้า<br>
                  </td>
                </tr>
              </table><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ลายมือชื่อ) <input type="text" size="30" name="" disabled ><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ผู้สมัคร</b><br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ตัวบรรจง) (<input type="text" size="30" name="" disabled>)<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่: <input type="date" size="30" name="" disabled><br><br>
            </td>
            <br>
          </tr>
          <br>
        </table>

      </td>
    </tr>

    <tr>
      <td colspan="3" align="center">
        <br>
        <br>
        <table border="1" width="80%">
          <tr>
            <td colspan="3" align="center">
              <p><b>สำหรับเจ้าหน้าที่</b></p>
              <table>
                <tr>
                  <td colspan="2" align="left">
                    <p><b>หลักฐานประกอบการยื่นสมัคร</b></p>               
                    <input type="checkbox" name="28" value="ใบสมัคร" disabled> ใบสมัคร<br>
                    <input type="checkbox" name="28" value="สำเนาบัตรประชาชน  เลขประจำตัว" disabled> สำเนาบัตรประชาชน  เลขประจำตัว <input type="text" size="15" name="" disabled><br> 
                    <input type="checkbox" name="28" value="สำเนาหลักฐานการศึกษา วุฒิการศึกษา" disabled> สำเนาหลักฐานการศึกษา วุฒิการศึกษา<input type="text" size="15" name="" disabled><br> 
                    <input type="checkbox" name="28" value="เอกสารรับรองการทำงาน  ชื่อหน่วยงาน" disabled> เอกสารรับรองการทำงาน  ชื่อหน่วยงาน <input type="text" size="15" name="" disabled><br> 
                  </td>
                  <td align="left">
                    <p><b>การนัดหมาย</b></p>
                    <input type="radio" name="29" value="นัดนำเสนอแนวคิดธุรกิจ " disabled> นัดนำเสนอแนวคิดธุรกิจ<br>
                    วันที่: <input type="date"  name="" disabled ><br> 
                    <input type="radio" name="29" value="นัดเข้าพบสถานประกอบการธุรกิจ" disabled> นัดเข้าพบสถานประกอบการธุรกิจ<br>
                    วันที่: <input type="date"  name="" disabled><br> 

                  </td>
                </tr> 
                <tr><td colspan="3" align="left">
                  <input type="checkbox" name="28" value="รูปถ่ายหน้าตรงขนาด 1 นิ้ว จำนวน 1 รูป" disabled> รูปถ่ายหน้าตรงขนาด 1 นิ้ว จำนวน 1 รูป<br> 
                  <input type="checkbox" name="28" value="Concept paper" disabled> Concept paper<br> 
                  <input type="checkbox" name="28" value="แผนธุรกิจ" disabled> แผนธุรกิจ<br> 
                  <input type="checkbox" name="28" value="ข้อมูล Idea/Innovation/Technology เพิ่มเติม" disabled> ข้อมูล Idea/Innovation/Technology เพิ่มเติม<br> 
                </td></tr>
              </table><br>
            </td>
          </tr>
        </table>

      </td>
    </tr>
    <tr>
      <td colspan="3" align="center">
        <br>
        <table border="1" width="80%">
          <tr>
            <td colspan="3" align="center">
              <p><b>แนวปฏิบัติของการบ่มเพาะผู้ประกอบการ</b></p>
              <table>
                <tr>
                  <td colspan="3" align="left">
                    <br>
                    <input type="checkbox" name="30" value="มีผลงานวิจัยสนับสนุน" disabled> มีผลงานวิจัยสนับสนุน<br>
                    <input type="checkbox" name="30" value="เป็นไปได้และถ้าเป็นไปได้ควรมีต้นแบบ (Prototype) หรือผลิตภัณฑ์แล้ว" disabled> เป็นไปได้และถ้าเป็นไปได้ควรมีต้นแบบ (Prototype) หรือผลิตภัณฑ์แล้ว<br>
                    <input type="checkbox" name="30" value="ผู้ประกอบการต้องมีความรู้  ความเข้าใจในเทคโนโลยีที่ใช้เป็นอย่างดี" disabled> ผู้ประกอบการต้องมีความรู้  ความเข้าใจในเทคโนโลยีที่ใช้เป็นอย่างดี<br>
                    <input type="checkbox" name="30" value="มีแนวคิดในการปรับปรุงเทคโนโลยีเพื่อให้เกิดผลิตภัณฑ์ที่หลากหลายตามความต้องการของลูกค้า" disabled> มีแนวคิดในการปรับปรุงเทคโนโลยีเพื่อให้เกิดผลิตภัณฑ์ที่หลากหลายตามความต้องการของลูกค้า<br>
                    <input type="checkbox" name="30" value="มีทุนทรัพย์ในการเริ่มต้นธุรกิจ" disabled> มีทุนทรัพย์ในการเริ่มต้นธุรกิจ<br>
                  </td>
                </tr>
              </table><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ลายมือชื่อ) <input type="text" size="30" name="" disabled ><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ผู้ตรวจใบสมัคร</b><br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ตัวบรรจง) (<input type="text" size="30" name="" disabled>)<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่: <input type="date" size="30" name="" disabled><br><br>
            </td>
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
             <a href="<?php echo base_url("backend/tbi")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
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
