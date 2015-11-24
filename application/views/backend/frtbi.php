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
         <li><i class="fa fa-file"></i> <a href="<?php echo base_url("backend/frtbi")?>">From</a></li>
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
              <td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม:<input type="text" size="20" name=""></td>
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
                วันที่:<input type="date" name=""  >
              </td>
              <td align="right">เลขที่: <input type="text" name="" size="20" ></td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <u><b><p>ส่วนที่ 1&nbsp;&nbsp;&nbsp;&nbsp;  ข้อมูลส่วนบุคคล</p></b></u>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                &nbsp;&nbsp;&nbsp;&nbsp;1.1 <select name=""> 
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
              </select> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ: <input type="text" size="30" name="" >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นามสกุล: <input type="text" size="30" name="" >
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.2
              เลขประจำตัวประชาชน: <input type="text" size="50" name="" >
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.3
              เกิดวันที่: <input type="date"  name="" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบันอายุ: <input type="text" size="10" name="" > ปี
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.4
              ชื้อชาติ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="1" value="ไทย"> ไทย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="1" value="อื่นๆ"> อื่นๆ
              &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุ" > 
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.5
              ศาสนา:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="พุทธ"> พุทธ 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="คริสต์"> คริสต์  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="อิสลาม"> อิสลาม  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="2" value="ฮินดู"> ฮินดู   
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="2" value="อื่นๆ"> อื่นๆ
              &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุ" > 
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
             ที่อยู่: <textarea name="" cols="80" rows="3" placeholder="ที่อยู่"></textarea>
              
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;1.7
        โทรศัพท์ที่ติดต่อสะดวก: <input type="tel" size="10" name="" >&nbsp;&nbsp;&nbsp;&nbsp;
        โทรสาร: <input type="text" size="10" name="" >&nbsp;&nbsp;&nbsp;&nbsp;
        มือถือ: <input type="tel" size="10" name="" >&nbsp;&nbsp;&nbsp;&nbsp;
        E-mail: <input type="email" size="20" name="" >&nbsp;&nbsp;&nbsp;&nbsp;
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
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="3" value="สำเร็จการศึกษา"> สำเร็จการศึกษา เมื่อ ปี พ.ศ. <input type="text" size="20" name="" >
        สาขาวิชา<input type="text" size="20" name="" > สถาบัน <input type="text" size="20" name="" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="4" value="มัธยมศึกษาตอนปลาย/ปวช."> มัธยมศึกษาตอนปลาย/ปวช. 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="4" value="อนุปริญญา/ปวส./ปวท."> อนุปริญญา/ปวส./ปวท.  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="ปริญญาตรี"> ปริญญาตรี <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="4" value="ปริญญาโทหรือสูงกว่า"> ปริญญาโทหรือสูงกว่า     
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="4" value="ปริญญาเอก"> ปริญญาเอก  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="4" value="อื่นๆ"> อื่นๆ 
        &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" >
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="3" value="กำลังศึกษา"> กำลังศึกษา ในชั้นปีที่ <input type="text" size="20" name="" >
        สาขาวิชา <input type="text" size="20" name="" > สถาบัน <input type="text" size="20" name="" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="5" value="มัธยมศึกษาตอนปลาย/ปวช."> มัธยมศึกษาตอนปลาย/ปวช. 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="5" value="อนุปริญญา/ปวส./ปวท."> อนุปริญญา/ปวส./ปวท.  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="5" value="ปริญญาตรี"> ปริญญาตรี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="5" value="ปริญญาโทหรือสูงกว่า"> ปริญญาโทหรือสูงกว่า     
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="5" value="ปริญญาเอก"> ปริญญาเอก  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="5" value="อื่นๆ"> อื่นๆ 
        &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" >
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
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="เพิ่งสำเร็จการศึกษา"> เพิ่งสำเร็จการศึกษา ไม่เกิน 1 ปี และยังหางานทำไม่ได้<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ไม่ได้ประกอบอาชีพใดๆ"> ไม่ได้ประกอบอาชีพใดๆ (เช่น ว่างงาน ลาออกจากงาน ถูกเลิกจ้าง เกษียณอายุ ปิดกิจการ สำเร็จการศึกษาเกิน 1ปี และยังหางานทำไม่ได้) <br>
        &nbsp;&nbsp;&nbsp;&nbsp;มาเป็นเวลา <input type="text" size="20" name="" > ปี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="พนักงานประจำ/ลูกจ้างประจำ บริษัท">พนักงานประจำ/ลูกจ้างประจำ บริษัท<input type="text" size="20" name="" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;อยู่ในภาคธุรกิจใด(เลือกเพียงข้อเดียว)&nbsp;&nbsp;<input type="radio" name="7" value="การผลิต"> การผลิต&nbsp;&nbsp;<input type="radio" name="7" value="การค้า"> การค้า&nbsp;&nbsp;<input type="radio" name="7" value="การบริการ"> การบริการ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ข้าราชการ หรือพนักงานรัฐวิสาหกิจ สังกัด">ข้าราชการ หรือพนักงานรัฐวิสาหกิจ สังกัด<input type="text" size="20" name="" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ลูกจ้างรายวัน หรือรับจ้างทั่วไป"> ลูกจ้างรายวัน หรือรับจ้างทั่วไป<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ)"> ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ)<input type="text" size="20" name="" placeholder="โปรดระบุ"><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="ประกอบธุรกิจส่วนตัว"> ประกอบธุรกิจส่วนตัว หรือ เป็นเจ้าของกิจการ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="6" value="อื่นๆ"> อื่นๆ<input type="text" size="20" name="" placeholder="โปรดระบุ" ><br>
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
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="7" value="เป็นเจ้าของ"> เป็นเจ้าของ หรือหุ้นส่วนผู้จัดการในธุรกิจอยู่แล้ว ตั้งแต่ปี พ.ศ. <input type="text" size="20" name="" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="7" value="เป็นทายาทของเจ้าของธุรกิจ"> เป็นทายาทของเจ้าของธุรกิจ และกำลังเตรียมรับสืบทอดธุรกิจ <br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="7" value="ไม่เคยเป็นเจ้าของธุรกิจ"> ไม่เคยเป็นเจ้าของธุรกิจ และไม่ได้เป็นทายาทธุรกิจ                                       <br>        
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
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="8" value="ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร"> ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="8" value="มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว"> มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว<br>
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
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="9" value="การผลิต"> การผลิต&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุประเภทสินค้าที่จะผลิต" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="9" value="การบริการ"> การบริการ&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุลักษณะของบริการ" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="9" value="การค้าส่ง"> การค้าส่ง&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุประเภทสินค้า" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="9" value="การค้าปลีก"> การค้าปลีก&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="โปรดระบุประเภทสินค้า" > 
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
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="10" value="มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว"> มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="10" value="มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน"> มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="10" value="กำลังจัดทำแผนธุรกิจ"> กำลังจัดทำแผนธุรกิจ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="10" value="ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ"> ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ
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
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="11" value="ภายในเดือน"> ภายในเดือน<input type="text" size="30" name="" >ปี<input type="text" size="20" name="" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="11" value="ยังไม่มีเป้าหมายกำหนดเวลา"> ยังไม่มีเป้าหมายกำหนดเวลา
        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;2.5
        ท่านคาดว่ากิจการที่จะเริ่มจัดตั้ง จะต้องใช้เงินลงทุนในปีแรก ประมาณ <input type="text" size="30" name="" > บาท        
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="12" value="เงินส่วนตัวของท่าน"> เงินส่วนตัวของท่าน ประมาณ <input type="text" size="20" name="" > บาท<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="12" value="เงินจากหุ้นส่วน"> เงินจากหุ้นส่วน หรือผู้ร่วมทุน ประมาณ<input type="text" size="20" name="" > บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="13" value="ญาติ สมาชิกในครอบครัว"> ญาติ สมาชิกในครอบครัว 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="13" value="บุคคลอื่นที่ไม่ใช่ญาติ"> บุคคลอื่นที่ไม่ใช่ญาติ 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="13" value="บริษัทหรือกิจการอื่น"> บริษัทหรือกิจการอื่น&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" ><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="12" value="เงินกู้ยืม"> เงินกู้ยืม ประมาณ <input type="text" size="20" name="" > บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="14" value="ญาติ สมาชิกในครอบครัว"> ญาติ สมาชิกในครอบครัว &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="14" value="บุคคลอื่นที่ไม่ใช่ญาติ"> บุคคลอื่นที่ไม่ใช่ญาติ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="14" value="ธนาคารของรัฐ"> ธนาคารของรัฐ &nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="14" value="ธนาคารพาณิชย์ของเอกชน"> ธนาคารพาณิชย์ของเอกชน&nbsp;&nbsp;<input type="text" size="30" name="" placeholder="ระบุ" ><br>
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ตัวท่านเอง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="18" value="ไม่มี">ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="18" value="มี"> มี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- หุ้นส่วนที่ร่วมบริหารจัดการ/ดำเนินงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="15" value="ไม่มี"> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="15" value="มีประมาณ"> มีประมาณ
        <input type="text" size="30" name="" > คน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงาน/ผู้ปฏิบัติงานที่เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="16" value="ไม่มี"> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="16" value="มีประมาณ"> มีประมาณ
        <input type="text" size="30" name="" > คน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงานอื่นๆที่ไม่ได้เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="17" value="ไม่มี"> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="17" value="มีประมาณ"> มีประมาณ
        <input type="text" size="30" name="" > คน<br>
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ"> การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="การจัดทำแผนธุรกิจ"> การจัดทำแผนธุรกิจ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="การจัดทำ เว็บไซต์"> การจัดทำ เว็บไซต์<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="การออกแบบและจัดทำโลโก้"> การออกแบบและจัดทำโลโก้<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="18" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" >        
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="การตลาด"> การตลาด<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="การบัญชี-การเงิน"> การบัญชี-การเงิน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="การผลิต"> การผลิต<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="การทรัพยากรบุคคล"> การทรัพยากรบุคคล<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="19" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" >        
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="20" value="การวิจัยและพัฒนาเทคโนโลยีการผลิต"> การวิจัยและพัฒนาเทคโนโลยีการผลิต<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="20" value="การวิจัยและพัฒนาผลิตภัณฑ์"> การวิจัยและพัฒนาผลิตภัณฑ์<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="20" value="การพัฒนาบรรจุภัณฑ์"> การพัฒนาบรรจุภัณฑ์<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="20" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" >        
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="21" value="การใช้พื้นที่"> การใช้พื้นที่<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="21" value="การใช้เลขานุการกลาง"> การใช้เลขานุการกลาง<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="21" value="การบริการจัดทำบัญชี"> การบริการจัดทำบัญชี<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="21" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" >        
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="แหล่งเงินทุน"> แหล่งเงินทุน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การร่วมลงทุน"> การร่วมลงทุน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล"> การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การตั้งโรงงาน"> การตั้งโรงงาน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การตลาด"> การตลาด<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การเงิน"> การเงิน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การบัญชี"> การบัญชี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การบริหารบุคคล"> การบริหารบุคคล<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การบริหารการผลิต"> การบริหารการผลิต<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="ภาษี"> ภาษี<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="กฎหมาย"> กฎหมาย<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="การค้าระหว่างประเทศ"> การค้าระหว่างประเทศ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="22" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" >        
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;3.6
        การขอใช้บริการห้องปฏิบัติการ<input type="text" size="30" name="" placeholder="ระบุ" >      
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value=" อย."> อย.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value=" GMP"> GMP<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value=" HACCP"> HACCP<br>    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value="ISO"> ISO  <input type="text" size="30" name=""> <br>      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="23" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" > <br>    
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="24" value="การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge"> การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="24" value="การจัดนิทรรศการ ออกบูธ"> การจัดนิทรรศการ ออกบูธ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="24" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" > <br>    
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="OIL"> OIL<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="NIA"> NIA<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="I03 CR (รัฐร่วมเอกชน)"> I03 CR (รัฐร่วมเอกชน)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="IP Fund"> IP Fund<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="25" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" > <br>    
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="26" value="การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)"> การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="26" value="การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ"> การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="26" value="การส่งเสริมทางการตลาด"> การส่งเสริมทางการตลาด<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="26" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" > <br>    
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การให้บริการข้อมูล"> การให้บริการข้อมูล<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การสืบค้นข้อมูลทรัพย์สินทางปัญญา"> การสืบค้นข้อมูลทรัพย์สินทางปัญญา<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การจดทะเบียนทรัพย์สินทางปัญญา"> การจดทะเบียนทรัพย์สินทางปัญญา<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การอนุญาตใช้สิทธ์"> การอนุญาตใช้สิทธ์<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การเจรจาใช้สิทธิ์"> การเจรจาใช้สิทธิ์<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="การประเมินมูลค่าทรัพย์สินทางปัญญา"> การประเมินมูลค่าทรัพย์สินทางปัญญา<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="27" value="อื่นๆ"> อื่นๆ  <input type="text" size="30" name="" placeholder="ระบุ" > <br>    
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
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ลายมือชื่อ) <input type="text" size="30" name="" ><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ผู้สมัคร</b><br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ตัวบรรจง) (<input type="text" size="30" name="" >)<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่: <input type="date" size="30" name="" ><br><br>
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
                    <input type="checkbox" name="28" value="ใบสมัคร"> ใบสมัคร<br>
                    <input type="checkbox" name="28" value="สำเนาบัตรประชาชน  เลขประจำตัว"> สำเนาบัตรประชาชน  เลขประจำตัว <input type="text" size="15" name="" ><br> 
                    <input type="checkbox" name="28" value="สำเนาหลักฐานการศึกษา วุฒิการศึกษา"> สำเนาหลักฐานการศึกษา วุฒิการศึกษา<input type="text" size="15" name="" ><br> 
                    <input type="checkbox" name="28" value="เอกสารรับรองการทำงาน  ชื่อหน่วยงาน"> เอกสารรับรองการทำงาน  ชื่อหน่วยงาน <input type="text" size="15" name="" ><br> 
                  </td>
                  <td align="left">
                    <p><b>การนัดหมาย</b></p>
                    <input type="radio" name="29" value="นัดนำเสนอแนวคิดธุรกิจ "> นัดนำเสนอแนวคิดธุรกิจ<br>
                    วันที่: <input type="date"  name="" ><br> 
                    <input type="radio" name="29" value="นัดเข้าพบสถานประกอบการธุรกิจ"> นัดเข้าพบสถานประกอบการธุรกิจ<br>
                    วันที่: <input type="date"  name="" ><br> 

                  </td>
                </tr> 
                <tr><td colspan="3" align="left">
                  <input type="checkbox" name="28" value="รูปถ่ายหน้าตรงขนาด 1 นิ้ว จำนวน 1 รูป"> รูปถ่ายหน้าตรงขนาด 1 นิ้ว จำนวน 1 รูป<br> 
                  <input type="checkbox" name="28" value="Concept paper"> Concept paper<br> 
                  <input type="checkbox" name="28" value="แผนธุรกิจ"> แผนธุรกิจ<br> 
                  <input type="checkbox" name="28" value="ข้อมูล Idea/Innovation/Technology เพิ่มเติม"> ข้อมูล Idea/Innovation/Technology เพิ่มเติม<br> 
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
                    <input type="checkbox" name="30" value="มีผลงานวิจัยสนับสนุน"> มีผลงานวิจัยสนับสนุน<br>
                    <input type="checkbox" name="30" value="เป็นไปได้และถ้าเป็นไปได้ควรมีต้นแบบ (Prototype) หรือผลิตภัณฑ์แล้ว"> เป็นไปได้และถ้าเป็นไปได้ควรมีต้นแบบ (Prototype) หรือผลิตภัณฑ์แล้ว<br>
                    <input type="checkbox" name="30" value="ผู้ประกอบการต้องมีความรู้  ความเข้าใจในเทคโนโลยีที่ใช้เป็นอย่างดี"> ผู้ประกอบการต้องมีความรู้  ความเข้าใจในเทคโนโลยีที่ใช้เป็นอย่างดี<br>
                    <input type="checkbox" name="30" value="มีแนวคิดในการปรับปรุงเทคโนโลยีเพื่อให้เกิดผลิตภัณฑ์ที่หลากหลายตามความต้องการของลูกค้า"> มีแนวคิดในการปรับปรุงเทคโนโลยีเพื่อให้เกิดผลิตภัณฑ์ที่หลากหลายตามความต้องการของลูกค้า<br>
                    <input type="checkbox" name="30" value="มีทุนทรัพย์ในการเริ่มต้นธุรกิจ"> มีทุนทรัพย์ในการเริ่มต้นธุรกิจ<br>
                  </td>
                </tr>
              </table><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ลายมือชื่อ) <input type="text" size="30" name="" ><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ผู้ตรวจใบสมัคร</b><br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ตัวบรรจง) (<input type="text" size="30" name="" >)<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่: <input type="date" size="30" name="" ><br><br>
            </td>
          </tr>
        </table>

      </td>
    </tr>
  </table>
</center>

</div>
</div>

<br>
    <div class="row">
      <div class="col-sm-12">
        <center>
          <table width="90%">
            <tr>
              <td><b style="color:red;"> *</b>   หนังสือรับรองการจดทะเบียนนิติบุคคล: <input type="file" name="F_1"></td>
              <td><b style="color:red;"> *</b>   สำเนาบัตรประชาชนของผู้มีสิทธิลงนาม: <input type="file" name="F_2"></td>
              <td><b style="color:red;"> *</b>   หนังสือมอบอำนาจ(ถ้ามี): <input type="file" name="F_3"></td>
              <td><b style="color:red;"> *</b>   สำเนาบัตรประชาชน/สำเนาบัตรข้าราชการของนักวิจัย: <input type="file" name="F_4"></td>
            </tr>

            <tr>
              <td>
                <br>
                <select class="form-control"  name="">
                 <option value=""> เลือกสถานะ</option>
                 <option value="รอดำเนินงาน">รอดำเนินงาน</option>
                 <option value="รออนุมัติ">รออนุมัติ</option>
                 <option value="อนุมัติ">อนุมัติ</option>
                 <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
               </select></td>
                <td><b style="color:red;"> *</b> </td>
               <td></td>
               <td></td>
             </tr>
           </table>
         </center>
       </div>
     </div>
     <br>

<div class="row">
  <div class="col-md-offset-5  col-sm-7">
    <button type="button" class="btn btn-success  btn-lg" >ตกลง</button>
    <button type="button" class="btn btn-success  btn-lg">ยกเลิก</button>
  </div>
</div>



   </div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
