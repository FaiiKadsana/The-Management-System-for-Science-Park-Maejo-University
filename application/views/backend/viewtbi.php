<?php  foreach ($tbi as $rowtbi) { ?>
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
            <td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม:<input type="text" size="20" name="Tbi_id3" value="<?php echo $rowtbi->Tbi_id3;?>" disabled></td>
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
              วันที่:<input type="date" name="Tbi_date" value="<?php echo $rowtbi->Tbi_date;?>"  disabled>
            </td>
            <td align="right">เลขที่: <input type="text" name="Tbi_id4" value="<?php echo $rowtbi->Tbi_id4;?>" size="20" disabled ></td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              <u><b><p>ส่วนที่ 1&nbsp;&nbsp;&nbsp;&nbsp;  ข้อมูลส่วนบุคคล</p></b></u>
            </td>
          </tr>
          <tr>
            <td colspan="3" align="left">
              &nbsp;&nbsp;&nbsp;&nbsp;1.1<select  name="Tbi_title"disabled> 
              <option value="<?php echo $rowservice->Tbi_title;?>"><?php echo $rowservice->Tbi_title;?></option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ: <input type="text" size="30" name="Tbi_name1" value="<?php echo $rowtbi->Tbi_name1;?>" disabled>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นามสกุล: <input type="text" size="30" name="Tbi_lastname" value="<?php echo $rowtbi->Tbi_lastname;?>" disabled>
          </td>
        </tr>
        <tr>
          <td colspan="3" align="left">
            &nbsp;&nbsp;&nbsp;&nbsp;1.2
            เลขประจำตัวประชาชน: <input type="text" size="50" name="Tbi_code" value="<?php echo $rowtbi->Tbi_code;?>" disabled>
          </td>
        </tr>
        <tr>
          <td colspan="3" align="left">
            &nbsp;&nbsp;&nbsp;&nbsp;1.3
            เกิดวันที่: <input type="date"  name="Tbi_birthday" value="<?php echo $rowtbi->Tbi_birthday;?>" disabled >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบันอายุ: <input type="text" size="10" name="Tbi_age" value="<?php echo $rowtbi->Tbi_age;?>" disabled> ปี
          </td>
        </tr>
        <tr>
          <td colspan="3" align="left">
            &nbsp;&nbsp;&nbsp;&nbsp;1.4
            ชื้อชาติ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_ethnicity" <?php if($rowtbi->Tbi_ethnicity == 'ไทย'){?>
            checked <?php }else{} ?>  disabled> ไทย  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_ethnicity" <?php if($rowtbi->Tbi_ethnicity == 'อื่นๆ'){?>
            checked <?php }else{} ?>  disabled> อื่นๆ
            &nbsp;&nbsp;<input type="text" size="30" name="Tbi_ethnicity_etc" value="<?php echo $rowtbi->Tbi_ethnicity_etc;?>" disabled > 
          </td>
        </tr>
        <tr>
          <td colspan="3" align="left">
            &nbsp;&nbsp;&nbsp;&nbsp;1.5
            ศาสนา:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'พุทธ'){?>
            checked <?php }else{} ?> disabled> พุทธ 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'คริสต์'){?>
            checked <?php }else{} ?> disabled> คริสต์  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'อิสลาม'){?>
            checked <?php }else{} ?> disabled> อิสลาม  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'ฮินดู'){?>
            checked <?php }else{} ?> disabled> ฮินดู   
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_nationality" <?php if($rowtbi->Tbi_nationality == 'อื่นๆ'){?>
            checked <?php }else{} ?> disabled> อื่นๆ
            &nbsp;&nbsp;<input type="text" size="30" name="Tbi_nationality_etc" value="<?php echo $rowtbi->Tbi_nationality_etc;?>" disabled> 
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
           ที่อยู่: <textarea name="Tbi_address" cols="80" rows="3"  disabled><?php echo $rowtbi->Tbi_address;?></textarea>

         </td>
       </tr>
       <tr>
        <td colspan="3" align="left">
          &nbsp;&nbsp;&nbsp;&nbsp;1.7
          โทรศัพท์ที่ติดต่อสะดวก: <input type="tel" size="10" name="Tbi_tell" value="<?php echo $rowtbi->Tbi_tell;?>" disabled >&nbsp;&nbsp;&nbsp;&nbsp;
          โทรสาร: <input type="text" size="10" name="Tbi_fax" value="<?php echo $rowtbi->Tbi_fax;?>" disabled >&nbsp;&nbsp;&nbsp;&nbsp;
          มือถือ: <input type="tel" size="10" name="Tbi_phone" value="<?php echo $rowtbi->Tbi_phone;?>" disabled>&nbsp;&nbsp;&nbsp;&nbsp;
          E-mail: <input type="email" size="20" name="Tbi_mail" value="<?php echo $rowtbi->Tbi_mail;?>" disabled>&nbsp;&nbsp;&nbsp;&nbsp;
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
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_education" <?php if($rowtbi->Tbi_education == 'สำเร็จการศึกษา'){?>
          checked <?php }else{} ?>  disabled> สำเร็จการศึกษา เมื่อ ปี พ.ศ. <input type="text" size="20" name="Tbi_year" value="<?php echo $rowtbi->Tbi_year;?>" disabled>
          สาขาวิชา<input type="text" size="20" name="Tbi_major" value="<?php echo $rowtbi->Tbi_major;?>" disabled > สถาบัน <input type="text" size="20" name="Tbi_university" value="<?php echo $rowtbi->Tbi_university;?>" disabled><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'มัธยมศึกษาตอนปลาย/ปวช.'){?>
          checked <?php }else{} ?> disabled> มัธยมศึกษาตอนปลาย/ปวช. 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'อนุปริญญา/ปวส./ปวท.'){?>
          checked <?php }else{} ?> disabled> อนุปริญญา/ปวส./ปวท.  
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาตรี'){?>
          checked <?php }else{} ?> disabled> ปริญญาตรี <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาโทหรือสูงกว่า'){?>
          checked <?php }else{} ?> disabled> ปริญญาโทหรือสูงกว่า     
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาเอก'){?>
          checked <?php }else{} ?> disabled> ปริญญาเอก  
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'อื่นๆ'){?>
          checked <?php }else{} ?> disabled> อื่นๆ 
          &nbsp;&nbsp;<input type="text" size="30"name="Tbi_degree_etc" value="<?php echo $rowtbi->Tbi_degree_etc;?>" disabled>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_education" <?php if($rowtbi->Tbi_education == 'กำลังศึกษา'){?>
          checked <?php }else{} ?>  disabled> กำลังศึกษา ในชั้นปีที่ <input type="text" size="20" name="Tbi_year" value="<?php echo $rowtbi->Tbi_year;?>" disabled>
          สาขาวิชา <input type="text" size="20" name="Tbi_major" value="<?php echo $rowtbi->Tbi_major;?>" disabled > สถาบัน <input type="text" size="20" name="Tbi_university" value="<?php echo $rowtbi->Tbi_university;?>" disabled><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'มัธยมศึกษาตอนปลาย/ปวช.'){?>
          checked <?php }else{} ?> disabled> มัธยมศึกษาตอนปลาย/ปวช. 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'อนุปริญญา/ปวส./ปวท.'){?>
          checked <?php }else{} ?>  disabled> อนุปริญญา/ปวส./ปวท.  
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาตรี'){?>
          checked <?php }else{} ?> disabled> ปริญญาตรี<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาโทหรือสูงกว่า'){?>
          checked <?php }else{} ?> disabled> ปริญญาโทหรือสูงกว่า     
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'ปริญญาเอก'){?>
          checked <?php }else{} ?> disabled> ปริญญาเอก  
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_degree" <?php if($rowtbi->Tbi_degree == 'อื่นๆ'){?>
          checked <?php }else{} ?> disabled> อื่นๆ 
          &nbsp;&nbsp;<input type="text" size="30" name="Tbi_degree_etc" value="<?php echo $rowtbi->Tbi_degree_etc;?>" disabled>
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
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'เพิ่งสำเร็จการศึกษา'){?>
          checked <?php }else{} ?> disabled> เพิ่งสำเร็จการศึกษา ไม่เกิน 1 ปี และยังหางานทำไม่ได้<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ไม่ได้ประกอบอาชีพใดๆ'){?>
          checked <?php }else{} ?> disabled> ไม่ได้ประกอบอาชีพใดๆ (เช่น ว่างงาน ลาออกจากงาน ถูกเลิกจ้าง เกษียณอายุ ปิดกิจการ สำเร็จการศึกษาเกิน 1ปี และยังหางานทำไม่ได้) <br>
          &nbsp;&nbsp;&nbsp;&nbsp;มาเป็นเวลา <input type="text" size="20" name="Tbi_notwork_time" value="<?php echo $rowtbi->Tbi_notwork_time;?>"  disabled> ปี<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'พนักงานประจำ/ลูกจ้างประจำ'){?>
          checked <?php }else{} ?> disabled>พนักงานประจำ/ลูกจ้างประจำ บริษัท<input type="text" size="20" name="Tbi_emp_company" value="<?php echo $rowtbi->Tbi_emp_company;?>"  disabled><br>
          &nbsp;&nbsp;&nbsp;&nbsp;อยู่ในภาคธุรกิจใด(เลือกเพียงข้อเดียว)&nbsp;&nbsp;<input type="radio" name="Tbi_type_business" <?php if($rowtbi->Tbi_type_business == 'การผลิต'){?>
          checked <?php }else{} ?> disabled> การผลิต&nbsp;&nbsp;<input type="radio" name="Tbi_type_business" <?php if($rowtbi->Tbi_type_business == 'การค้า'){?>
          checked <?php }else{} ?>  disabled> การค้า&nbsp;&nbsp;<input type="radio" name="Tbi_type_business" <?php if($rowtbi->Tbi_type_business == 'การบริการ'){?>
          checked <?php }else{} ?>disabled> การบริการ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ข้าราชการ หรือพนักงานรัฐวิสาหกิจ'){?>
          checked <?php }else{} ?> disabled>ข้าราชการ หรือพนักงานรัฐวิสาหกิจ สังกัด<input type="text" size="20"  name="Tbi_official" value="<?php echo $rowtbi->Tbi_official;?>" disabled><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ลูกจ้างรายวัน หรือรับจ้างทั่วไป'){?>
          checked <?php }else{} ?> disabled> ลูกจ้างรายวัน หรือรับจ้างทั่วไป<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ)'){?>
          checked <?php }else{} ?>  disabled> ประกอบวิชาชีพอิสระ (เช่น ทนายความ ฯลฯ)<input type="text" size="20" name="Tbi_etc" value="<?php echo $rowtbi->Tbi_etc;?>"disabled><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'ประกอบธุรกิจส่วนตัว หรือ เป็นเจ้าของกิจการ'){?>
          checked <?php }else{} ?> disabled> ประกอบธุรกิจส่วนตัว หรือ เป็นเจ้าของกิจการ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_occupation" <?php if($rowtbi->Tbi_occupation == 'อื่นๆ'){?>
          checked <?php }else{} ?>  disabled> อื่นๆ<input type="text" size="20" name="Tbi_etc" value="<?php echo $rowtbi->Tbi_etc;?>"  disabled><br>
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
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_owners" <?php if($rowtbi->Tbi_owners == 'เป็นเจ้าของ'){?>
          checked <?php }else{} ?> disabled> เป็นเจ้าของ หรือหุ้นส่วนผู้จัดการในธุรกิจอยู่แล้ว ตั้งแต่ปี พ.ศ. <input type="text" size="20" name="Tbi_owners_year" value="<?php echo $rowtbi->Tbi_owners_year;?>" disabled><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_owners" <?php if($rowtbi->Tbi_owners == 'เป็นทายาทของเจ้าของธุรกิจ'){?>
          checked <?php }else{} ?> disabled> เป็นทายาทของเจ้าของธุรกิจ และกำลังเตรียมรับสืบทอดธุรกิจ <br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_owners" <?php if($rowtbi->Tbi_owners == 'ไม่เคยเป็นเจ้าของธุรกิจ'){?>
          checked <?php }else{} ?> disabled> ไม่เคยเป็นเจ้าของธุรกิจ และไม่ได้เป็นทายาทธุรกิจ   <br>        
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
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_concept" <?php if($rowtbi->B_concept == 'ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร'){?>
          checked <?php }else{} ?> disabled> ยังไม่มีแนวคิดว่าจะลงทุนในธุรกิจอะไร<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_concept" <?php if($rowtbi->B_concept == 'มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว'){?>
          checked <?php }else{} ?> disabled> มีโครงการหรือแนวคิดเกี่ยวกับธุรกิจที่จะลงทุนอยู่แล้ว<br>
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
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" <?php if($rowtbi->B_interest == 'การผลิต'){?>
          checked <?php }else{} ?> disabled> การผลิต&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="B_manufacture" value="<?php echo $rowtbi->B_manufacture;?>" disabled ><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" <?php if($rowtbi->B_interest == 'การบริการ'){?>
          checked <?php }else{} ?> disabled> การบริการ&nbsp;&nbsp;&nbsp;<input type="text" size="30"  name="B_service" value="<?php echo $rowtbi->B_service;?>" disabled ><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" <?php if($rowtbi->B_interest == 'การค้าส่ง'){?>
          checked <?php }else{} ?> disabled> การค้าส่ง&nbsp;&nbsp;&nbsp;<input type="text" size="30"  name="B_wholesale" value="<?php echo $rowtbi->B_wholesale;?>" disabled><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_interest" <?php if($rowtbi->B_interest == 'การค้าปลีก'){?>
          checked <?php }else{} ?> disabled> การค้าปลีก&nbsp;&nbsp;&nbsp;<input type="text" size="30"  name="B_retail" value="<?php echo $rowtbi->B_retail;?>" disabled> 
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
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" <?php if($rowtbi->B_business_plan == 'มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว'){?>
          checked <?php }else{} ?> disabled> มีแผนธุรกิจแล้ว และเคยนำไปเสนอกับแหล่งเงินทุนแล้ว<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" <?php if($rowtbi->B_business_plan == 'มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน'){?>
          checked <?php }else{} ?> disabled> มีแผนธุรกิจแล้ว แต่ยังไม่เคยนำไปเสนอกับแหล่งเงินทุน<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" <?php if($rowtbi->B_business_plan == 'กำลังจัดทำแผนธุรกิจ'){?>
          checked <?php }else{} ?>  disabled> กำลังจัดทำแผนธุรกิจ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_business_plan" <?php if($rowtbi->B_business_plan == 'ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ'){?>
          checked <?php }else{} ?> disabled> ยังไม่ได้ดำเนินการใดๆเกี่ยวกับแผนธุรกิจ
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
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_goal" <?php if($rowtbi->B_goal == 'ภายในเดือน'){?>
          checked <?php }else{} ?> disabled> ภายในเดือน<input type="text" size="30" name="B_goal_month" value="<?php echo $rowtbi->B_goal_month;?>" disabled >ปี<input type="text" size="20" name="B_goal_year" value="<?php echo $rowtbi->B_goal_year;?>" disabled><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_goal" <?php if($rowtbi->B_goal == 'ยังไม่มีเป้าหมายกำหนดเวลา'){?>
          checked <?php }else{} ?> disabled> ยังไม่มีเป้าหมายกำหนดเวลา

        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          &nbsp;&nbsp;&nbsp;&nbsp;2.5
          ท่านคาดว่ากิจการที่จะเริ่มจัดตั้ง จะต้องใช้เงินลงทุนในปีแรก ประมาณ <input type="text" size="30" name="B_investment" value="<?php echo $rowtbi->B_investment;?>" disabled> บาท        
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_resources" <?php if($rowtbi->B_resources == 'เงินส่วนตัวของท่าน'){?>
          checked <?php }else{} ?> disabled> เงินส่วนตัวของท่าน ประมาณ <input type="text" size="20" name="B_balance" value="<?php echo $rowtbi->B_balance;?>" disabled> บาท<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_resources" <?php if($rowtbi->B_resources == 'เงินจากหุ้นส่วน'){?>
          checked <?php }else{} ?> disabled> เงินจากหุ้นส่วน หรือผู้ร่วมทุน ประมาณ<input type="text" size="20" name="B_balance" value="<?php echo $rowtbi->B_balance;?>" disabled > บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="B_source" <?php if($rowtbi->B_source == 'ญาติ สมาชิกในครอบครัว'){?>
          checked <?php }else{} ?> disabled> ญาติ สมาชิกในครอบครัว 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="B_source" <?php if($rowtbi->B_source == 'บุคคลอื่นที่ไม่ใช่ญาติ'){?>
              checked <?php }else{} ?> disabled> บุคคลอื่นที่ไม่ใช่ญาติ 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'บริษัทหรือกิจการอื่น'){?>
              checked <?php }else{} ?> disabled> บริษัทหรือกิจการอื่น&nbsp;&nbsp;<input type="text" size="30" name="B_source_etc" value="<?php echo $rowtbi->B_source_etc;?>" ><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_resources" <?php if($rowtbi->B_source == 'เงินกู้ยืม'){?>
              checked <?php }else{} ?> disabled> เงินกู้ยืม ประมาณ <input type="text" size="20" name="B_balance" value="<?php echo $rowtbi->B_balance;?>" disabled> บาท ซึ่งคาดว่าจะได้จากแหล่งใดบ้าง<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="radio" name="B_source" <?php if($rowtbi->B_source == 'ญาติ สมาชิกในครอบครัว'){?>
              checked <?php }else{} ?> disabled> ญาติ สมาชิกในครอบครัว &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'บุคคลอื่นที่ไม่ใช่ญาติ'){?>
              checked <?php }else{} ?>disabled> บุคคลอื่นที่ไม่ใช่ญาติ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'ธนาคารของรัฐ'){?>
              checked <?php }else{} ?> disabled> ธนาคารของรัฐ &nbsp;&nbsp;<input type="text" size="30" name="B_source_etc" value="<?php echo $rowtbi->B_source_etc;?>"  disabled>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'ธนาคารพาณิชย์ของเอกชน'){?>
              checked <?php }else{} ?>disabled> ธนาคารพาณิชย์ของเอกชน&nbsp;&nbsp;<input type="text" size="30" name="B_source_etc" value="<?php echo $rowtbi->B_source_etc;?>" disabled><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_source" <?php if($rowtbi->B_source == 'สถาบันการเงินที่ไม่ใช่ธนาคาร'){?>
              checked <?php }else{} ?>disabled> สถาบันการเงินที่ไม่ใช่ธนาคาร (นันแบงค์ เช่น บริษัทเครดิต, ลิสซิ่ง) &nbsp;&nbsp;<input type="text" size="30" disabled name="B_source_etc" value="<?php echo $rowtbi->B_source_etc;?>">
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ตัวท่านเอง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'ไม่มี'){?>
              checked <?php }else{} ?> disabled>ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'มี'){?>
              checked <?php }else{} ?>disabled> มี<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- หุ้นส่วนที่ร่วมบริหารจัดการ/ดำเนินงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'ไม่มี'){?>
              checked <?php }else{} ?> disabled> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'มีประมาณ'){?>
              checked <?php }else{} ?> disabled> มีประมาณ
          <input type="text" size="30" name="" disabled > คน<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงาน/ผู้ปฏิบัติงานที่เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'ไม่มี'){?>
              checked <?php }else{} ?> disabled> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'มีประมาณ'){?>
              checked <?php }else{} ?> disabled> มีประมาณ
          <input type="text" size="30" name="B_emp_sum" value="<?php echo $rowtbi->B_emp_sum;?>" disabled> คน<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- พนักงานอื่นๆที่ไม่ได้เป็นสมาชิกในครอบครัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'ไม่มี'){?>
              checked <?php }else{} ?> > disabled> ไม่มี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="B_employee" <?php if($rowtbi->B_employee == 'มีประมาณ'){?>
              checked <?php }else{} ?> disabled> มีประมาณ
          <input type="text" size="30" name="B_emp_sum" value="<?php echo $rowtbi->B_emp_sum;?>" disabled> คน<br>
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ'){?>
              checked <?php }else{} ?> disabled> การให้บริการข้อมูลเบื้องต้นก่อนการบ่มเพาะ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'การจัดทำแผนธุรกิจ'){?>
              checked <?php }else{} ?> disabled> การจัดทำแผนธุรกิจ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'การจัดทำ เว็บไซต์'){?>
              checked <?php }else{} ?> disabled> การจัดทำ เว็บไซต์<br>    
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'การออกแบบและจัดทำโลโก้'){?>
              checked <?php }else{} ?> disabled> การออกแบบและจัดทำโลโก้<br>    
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_investment" <?php if($rowtbi->Tbi_investment == 'อื่นๆ'){?>
              checked <?php }else{} ?>disabled> อื่นๆ  <input type="text" size="30" name="Tbi_investment_etc" value="<?php echo $rowtbi->Tbi_investment_etc;?>" disabled >        
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'การตลาด'){?>
              checked <?php }else{} ?> disabled> การตลาด<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'การบัญชี-การเงิน'){?>
              checked <?php }else{} ?>  disabled> การบัญชี-การเงิน<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'การผลิต'){?>
              checked <?php }else{} ?> disabled> การผลิต<br>    
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'การทรัพยากรบุคคล'){?>
              checked <?php }else{} ?> disabled > การทรัพยากรบุคคล<br>    
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_train" <?php if($rowtbi->Tbi_train == 'การตลาด'){?>
              checked <?php }else{} ?>disabled > อื่น <input type="text" size="30" name="Tbi_train_etc" value="<?php echo $rowtbi->Tbi_train_etc;?>" disabled>        
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" <?php if($rowtbi->Tbi_research == 'การวิจัยและพัฒนาเทคโนโลยีการผลิต'){?>
              checked <?php }else{} ?> disabled> การวิจัยและพัฒนาเทคโนโลยีการผลิต<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" <?php if($rowtbi->Tbi_research == 'การวิจัยและพัฒนาผลิตภัณฑ์'){?>
              checked <?php }else{} ?> disabled> การวิจัยและพัฒนาผลิตภัณฑ์<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_research" <?php if($rowtbi->Tbi_research == 'การพัฒนาบรรจุภัณฑ์'){?>
              checked <?php }else{} ?>disabled> การพัฒนาบรรจุภัณฑ์<br>    
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" <input type="radio" name="Tbi_research" <?php if($rowtbi->Tbi_research == 'อื่นๆ'){?>
              checked <?php }else{} ?> disabled> อื่นๆ  <input type="text" size="30" name="Tbi_research_etc" value="<?php echo $rowtbi->Tbi_research_etc;?>" disabled >        
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_service" <?php if($rowtbi->Tbi_service == 'การใช้พื้นที่'){?>
              checked <?php }else{} ?>disabled> การใช้พื้นที่<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_service" <?php if($rowtbi->Tbi_service == 'การใช้เลขานุการกลาง'){?>
              checked <?php }else{} ?> disabled> การใช้เลขานุการกลาง<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_service" <?php if($rowtbi->Tbi_service == 'การบริการจัดทำบัญชี'){?>
              checked <?php }else{} ?> disabled> การบริการจัดทำบัญชี<br>    
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_service" <?php if($rowtbi->Tbi_service == 'อื่นๆ'){?>
              checked <?php }else{} ?> disabled> อื่นๆ  <input type="text" size="30" name="Tbi_service_etc" value="<?php echo $rowtbi->Tbi_service_etc;?>"  disabled>        
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'แหล่งเงินทุน'){?>
              checked <?php }else{} ?>disabled> แหล่งเงินทุน<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การร่วมลงทุน'){?>
              checked <?php }else{} ?> disabled> การร่วมลงทุน<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล'){?>
              checked <?php }else{} ?> disabled> การจัดตั้งธุรกิจ/จดทะเบียนนิติบุคคล<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การตั้งโรงงาน'){?>
              checked <?php }else{} ?> disabled> การตั้งโรงงาน<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การตลาด'){?>
              checked <?php }else{} ?> disabled> การตลาด<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การเงิน'){?>
              checked <?php }else{} ?> disabled> การเงิน<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การบัญชี'){?>
              checked <?php }else{} ?>disabled> การบัญชี<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การบริหารบุคคล'){?>
              checked <?php }else{} ?> disabled> การบริหารบุคคล<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การบริหารการผลิต'){?>
              checked <?php }else{} ?>disabled> การบริหารการผลิต<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'ภาษี'){?>
              checked <?php }else{} ?> disabled> ภาษี<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'กฎหมาย'){?>
              checked <?php }else{} ?> disabled> กฎหมาย<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'การค้าระหว่างประเทศ'){?>
              checked <?php }else{} ?> disabled> การค้าระหว่างประเทศ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_counsel" <?php if($rowtbi->Tbi_counsel == 'อื่นๆ'){?>
              checked <?php }else{} ?> disabled> อื่นๆ  <input type="text" size="30" name="Tbi_counsel_etc" value="<?php echo $rowtbi->Tbi_counsel_etc;?>" disabled>        
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left">
          &nbsp;&nbsp;&nbsp;&nbsp;3.6
          การขอใช้บริการห้องปฏิบัติการ<input type="text" size="30" name="Tbi_lab" value="<?php echo $rowtbi->Tbi_lab;?>" disabled>      
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'อย'){?>
              checked <?php }else{} ?> disabled> อย.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'GMP'){?>
              checked <?php }else{} ?> disabled> GMP<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'HACCP'){?>
              checked <?php }else{} ?> disabled> HACCP<br>    
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'ISO'){?>
              checked <?php }else{} ?> disabled> ISO  <input type="text" size="30" name="Tbi_certification_iso" value="<?php echo $rowtbi->Tbi_certification_iso;?>"> <br>      
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_certification" <?php if($rowtbi->Tbi_certification == 'อื่นๆ'){?>
              checked <?php }else{} ?> disabled> อื่นๆ  <input type="text" size="30" name="Tbi_certification_etc" value="<?php echo $rowtbi->Tbi_certification_etc;?>" disabled > <br>    
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_announce" <?php if($rowtbi->Tbi_announce == 'การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge'){?>
              checked <?php }else{} ?> disabled> การถ่ายทอดเทคโนโลยีภายใต้โครงการBridge<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_announce" <?php if($rowtbi->Tbi_announce == 'การจัดนิทรรศการ ออกบูธ'){?>
              checked <?php }else{} ?> disabled> การจัดนิทรรศการ ออกบูธ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_announce" <?php if($rowtbi->Tbi_announce == 'อื่นๆ'){?>
              checked <?php }else{} ?> disabled> อื่นๆ  <input type="text" size="30" name="Tbi_announce_etc" value="<?php echo $rowtbi->Tbi_announce_etc;?>" disabled> <br>    
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'OIL'){?>
                checked <?php }else{} ?> disabled> OIL<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'NIA'){?>
                checked <?php }else{} ?> disabled> NIA<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'I03 CR (รัฐร่วมเอกชน)'){?>
                checked <?php }else{} ?> disabled> I03 CR (รัฐร่วมเอกชน)<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'IP Fund'){?>
                checked <?php }else{} ?>disabled> IP Fund<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_coordinate" <?php if($rowtbi->Tbi_coordinate == 'อื่นๆ'){?>
                checked <?php }else{} ?> disabled> อื่นๆ  <input type="text" size="30" name="Tbi_coordinate_etc" value="<?php echo $rowtbi->Tbi_coordinate_etc;?>" disabled> <br>    
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" <?php if($rowtbi->Tbi_funding == 'การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)'){?>
                checked <?php }else{} ?> disabled> การพัฒนาผลิตภัณฑ์ต้นแบบ (Prototype)<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" <?php if($rowtbi->Tbi_funding == 'การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ'){?>
                checked <?php }else{} ?> disabled> การให้คำปรึกษาด้านเทคโนโลยีและธุรกิจ<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" <?php if($rowtbi->Tbi_funding == 'การส่งเสริมทางการตลาด'){?>
                checked <?php }else{} ?> disabled> การส่งเสริมทางการตลาด<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_funding" <?php if($rowtbi->Tbi_funding == 'อื่นๆ (Prototype)'){?>
                checked <?php }else{} ?> disabled> อื่นๆ  <input type="text" size="30" name="Tbi_funding_etc" value="<?php echo $rowtbi->Tbi_funding_etc;?>" disabled> <br>    
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การให้บริการข้อมูล'){?>
                checked <?php }else{} ?>disabled> การให้บริการข้อมูล<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การสืบค้นข้อมูลทรัพย์สินทางปัญญา'){?>
                checked <?php }else{} ?> disabled> การสืบค้นข้อมูลทรัพย์สินทางปัญญา<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การจดทะเบียนทรัพย์สินทางปัญญา'){?>
                checked <?php }else{} ?> disabled> การจดทะเบียนทรัพย์สินทางปัญญา<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การอนุญาตใช้สิทธ์'){?>
                checked <?php }else{} ?> disabled> การอนุญาตใช้สิทธ์<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การเจรจาใช้สิทธิ์'){?>
                checked <?php }else{} ?> disabled> การเจรจาใช้สิทธิ์<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'การประเมินมูลค่าทรัพย์สินทางปัญญา'){?>
                checked <?php }else{} ?> disabled> การประเมินมูลค่าทรัพย์สินทางปัญญา<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Tbi_asset" <?php if($rowtbi->Tbi_asset == 'อื่นๆ'){?>
                checked <?php }else{} ?>disabled> อื่นๆ  <input type="text" size="30" name="Tbi_asset_etc" value="<?php echo $rowtbi->Tbi_asset_etc;?>" disabled> <br>    
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ลายมือชื่อ) <input type="text" size="30" disabled ><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ผู้สมัคร</b><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ตัวบรรจง) (<input type="text" size="30" name="Tbi_name" value="<?php echo $rowtbi->Tbi_name;?>" disabled>)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่: <input type="date" size="30"name="Tbi_date_register" value="<?php echo $rowtbi->Tbi_date_register;?>" disabled><br><br>
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
<?php } ?>