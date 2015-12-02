

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
        <li> <i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/editfrservice")?>">Edit From</a></li>
       </ol>
     </div>
   </div></br>
   <!-- /.row -->

    <form method="post" action="<?php echo $action; ?>" enctype="multipart/form-data">

     <div class="row">
    <div class="col-sm-12">
      <center>
        <table width="100%">
          <tr>
            <td width="30%"></td>
            <td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม:<input type="text" size="20" name="S_id" value="<?php echo $rs->S_id;?>" disabled></td>
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
              <p> วันที่มารับบริการ <input type="date"  name="S_date" value="<?php echo $rowservice->S_date;?>"   > </p>
            </td>
          </tr>
          <tr>
            <td  align="left"> 
              <p><b><u>ข้อมูลส่วนตัว</u></b></p>
            </td>
            <td colspan="2" > </td>
          </tr>
          <tr>
            <td colspan="3"  align="left"><br>
              ชื่อ: <select  name="P_title"  > 
              <option><?php echo $rowservice->P_title;?></option>

            </select>
            <input type="hidden" name="S_id" id="S_id" value="<?php echo $rowservice->S_id ;?>">
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30"  name="P_name" value="<?php echo $rowservice->P_name;?>"  >
            &nbsp;&nbsp;&nbsp;&nbsp;นามสกุล: <input type="text" size="30"  name="P_lastname" value="<?php echo $rowservice->P_lastname;?>"  >
          </td>
        </tr>
        <tr>
          <td  colspan="3" align="center">เลขที่บัตรประชาชน: <input type="text" size="30"  name="P_id_card" value="<?php echo $rowservice->P_id_card;?>"   >
            &nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง: <input type="text" size="30"  name="P_position" value="<?php echo $rowservice->P_position;?>"   ></td>
          </tr>
          <tr>
            <td colspan="3"  align="center">เบอร์โทรติดต่อ: <input type="tel" size="30"  name="P_phone" value="<?php echo $rowservice->P_phone;?>"  >
              &nbsp;&nbsp;&nbsp;&nbsp;E-mail: <input type="email" size="40"  name="P_mail" value="<?php echo $rowservice->P_mail;?>"   ></td>
            </tr>
            <tr>
              <td  align="left"> 
                <p><b><u>ข้อมูลทางธุรกิจ</u></b></p>
              </td>
              <td colspan="2" > </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                ชื่อกิจการ: <input type="text" size="30"  name="C_name" value="<?php echo $rowservice->C_name;?>"  >
                ที่อยู่: <textarea  name="C_address"   cols="40" rows="3"  ><?php echo $rowservice->C_address;?></textarea>

              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                โทรศัพท์: <input type="text" size="20"  name="C_phone" value="<?php echo $rowservice->C_phone;?>" >
                &nbsp;&nbsp;&nbsp;โทรสาร: <input type="text" size="20"  name="C_fax" value="<?php echo $rowservice->C_fax;?>"  >
                &nbsp;&nbsp;&nbsp;Website: <input type="text" size="30"  name="C_website" value="<?php echo $rowservice->C_website;?>"   >
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>เลขที่ทะเบียนพาณิชย์: </b>&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_no_com" <?php if($as->C_no_com == 'ไม่มี'){?>
                checked <?php }else{} ?>  > ไม่มี  
                &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_no_com" <?php if($as->C_no_com == 'มี'){?>
                checked <?php }else{} ?>> มี
                &nbsp;&nbsp;<input type="text" size="30"  name="C_no_com_etc" value="<?php echo $rowservice->C_no_com_etc;?>"  >                                                                                                                
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>ประเภทกิจการ (เลือกข้อใดข้อหนึ่ง)</b>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'เจ้าของกิจการ(บุคคลธรรมดา)'){?>
                checked <?php }else{} ?>  > เจ้าของกิจการ(บุคคลธรรมดา)  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'ห้างหุ้นส่วนสามัญ'){?>
                checked <?php }else{} ?>  > ห้างหุ้นส่วนสามัญ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'ห้างหุ่นส่วนจำกัด'){?>
                checked <?php }else{} ?> > ห้างหุ่นส่วนจำกัด<br>
                <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'บริษัทจำกัด'){?>
                checked <?php }else{} ?>  > บริษัทจำกัด  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'วิสาหกิจชุมชน'){?>
                checked <?php }else{} ?>  > วิสาหกิจชุมชน
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_company_type" <?php if($rowservice->C_company_type == 'อื่นๆ'){?>
                checked <?php }else{} ?> > อื่นๆ&nbsp;&nbsp;<input type="text" size="30"name="C_company_type_etc" value="<?php echo $rowservice->C_company_type_etc;?>"  >                                                                                                            
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>ลักษณะการประกอบการ (เลือกข้อใดข้อหนึ่ง)</b>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'การผลิต'){?>
                checked <?php }else{} ?>> การผลิต 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'การค้า(ปลีก-ส่ง)'){?>
                checked <?php }else{} ?>> การค้า(ปลีก-ส่ง)
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'บริการ'){?>
                checked <?php }else{} ?> > บริการ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_undertaking" <?php if($rowservice->C_undertaking == 'อื่นๆ'){?>
                checked <?php }else{} ?> > อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="C_undertaking_etc" value="<?php echo $rowservice->C_undertaking_etc;?>" >
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>สาขาอุตสาหกรรมที่ทำอยู่ (เลือกข้อใดข้อหนึ่ง)</b>
              </td>
            </tr>
            <tr>
              <td colspan="3"  align="left">
                <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'อาหารและอาหารสัตว์'){?>
                checked <?php }else{} ?> > อาหารและอาหารสัตว์
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'สิ่งทอและเครื่องนุ่งห่ม'){?>
                checked <?php }else{} ?> > สิ่งทอและเครื่องนุ่งห่ม
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'รองเท้าและเครื่องหนัง'){?>
                checked <?php }else{} ?> > รองเท้าและเครื่องหนัง
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ผลิตภัณฑ์จากไม้และเครื่องเรือน'){?>
                checked <?php }else{} ?> > ผลิตภัณฑ์จากไม้และเครื่องเรือน<br>
                <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ยาและเคมีภัณฑ์'){?>
                checked <?php }else{} ?> > ยาและเคมีภัณฑ์
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ยางพาราและผลิตภัณฑ์'){?>
                checked <?php }else{} ?> > ยางพาราและผลิตภัณฑ์
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก'){?>
                checked <?php }else{} ?> > บรรจุภัณฑ์ผลิตภัณฑ์พลาสติก
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'เซรามิกส์และแก้ว'){?>
                checked <?php }else{} ?> > เซรามิกส์และแก้ว<br>
                <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์'){?>
                checked <?php }else{} ?>> เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ชิ้นส่วนและยานยนต์'){?>
                checked <?php }else{} ?> > ชิ้นส่วนและยานยนต์
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'อัญมณีและเครื่องประดับ'){?>
                checked <?php }else{} ?> > อัญมณีและเครื่องประดับ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'เหล็กและโลหะการ'){?>
                checked <?php }else{} ?>> เหล็กและโลหะการ<br>
                <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'เครื่องจักรกล'){?>
                checked <?php }else{} ?>> เครื่องจักรกล
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'ท่องเที่ยว'){?>
                checked <?php }else{} ?> > ท่องเที่ยว
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="C_industry_type" <?php if($rowservice->C_industry_type == 'บริการด้านสุขภาพ'){?>
                checked <?php }else{} ?>  > บริการด้านสุขภาพ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                > อื่นๆ&nbsp;&nbsp;<input type="text" size="30" name="C_industry_type_etc" value="<?php echo $rowservice->C_industry_type_etc;?>"  >
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                เงินจดทะเบียน: <input type="text" size="20" name="C_investment" value="<?php echo $rowservice->C_investment;?>" >&nbsp;&nbsp;บาท(ถ้ามี)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนปีที่ประกอบการ: <input type="text" size="20" name="C_no_year" value="<?php echo $rowservice->C_no_year;?>" >&nbsp;&nbsp;ปี
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                จำนวนลูกจ้างทั้งหมด: <input type="text" size="15" name="S_no_emp_total" value="<?php echo $rowservice->S_no_emp_total;?>" >&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;แบ่งเป็นลูกค้าปรจำ <input type="text" size="15" name="S_no_emp_reg" value="<?php echo $rowservice->S_no_emp_reg;?>" >&nbsp;&nbsp;อัตรา&nbsp;&nbsp;&nbsp;&nbsp;ลูกจ้างชั่วคราว <input type="text" size="15" name="S_no_emp_tem" value="<?php echo $rowservice->S_no_emp_tem;?>" >&nbsp;&nbsp;อัตรา
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                ผลิตภัณฑ์หลัก:&nbsp;&nbsp;1.) <input type="text" size="20" name="S_main_pro1" value="<?php echo $rowservice->S_main_pro1;?>"  >&nbsp;&nbsp;2.) <input type="text" size="20" name="S_main_pro2" value="<?php echo $rowservice->S_main_pro2;?>" >&nbsp;&nbsp;3.) <input type="text" size="20" name="S_main_pro3" value="<?php echo $rowservice->S_main_pro3;?>" >
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
                      ลงชื่อ <input type="text" size="25" name="S_provider" value="<?php echo $rowservice->S_provider;?>" ><br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<input type="text" size="25" name="S_provider1" value="<?php echo $rowservice->S_provider1;?>" >)<br>
                      <b>ผู้ขอรับบริการ</b>
                    </td>
                    <td align="center" colspan="2">
                      <input type="radio" name="S_agreement" <?php if($rowservice->S_agreement == 'ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล'){?>
                      checked <?php }else{} ?> > ข้าพเจ้าเห็นด้วย ที่จะให้บันทึกข้อมูล
                      <input type="radio" name="S_agreement" <?php if($rowservice->S_agreement == 'ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล'){?>
                      checked <?php }else{} ?>> ข้าพเจ้าไม่เห็นด้วย ที่จะให้บันทึกข้อมูล
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
                <input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'ขยายตลาด'){?>
              checked <?php }else{} ?> > ขยายตลาด
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'พัฒนาผลิตภัณฑ์'){?>
              checked <?php }else{} ?>> พัฒนาผลิตภัณฑ์
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'แบรนด์'){?>
              checked <?php }else{} ?> > แบรนด์
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'สำรวจความต้องการของตลาด'){?>
              checked <?php }else{} ?> > สำรวจความต้องการของตลาด<br>
                <input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'จัดทำแผนส่งเสริมการตลาด'){?>
              checked <?php }else{} ?> >  จัดทำแผนส่งเสริมการตลาด
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'หาพันธมิตรทางธุรกิจ'){?>
              checked <?php }else{} ?> > หาพันธมิตรทางธุรกิจ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'พัฒนาธุรกิจใหม่'){?>
              checked <?php }else{} ?>> พัฒนาธุรกิจใหม่
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S_circulation" <?php if($rowservice->S_circulation == 'พัฒนาตลาดต่างประเทศ'){?>
              checked <?php }else{} ?> > พัฒนาตลาดต่างประเทศ
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>ความสามารถในการทำกำไร</b>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
               <input type="radio" name="S_profit" <?php if($rowservice->S_profit == 'การเพิ่มประสิทธิภาพ'){?>
              checked <?php }else{} ?> > การเพิ่มประสิทธิภาพ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_profit" <?php if($rowservice->S_profit == 'การลดต้นทุน'){?>
              checked <?php }else{} ?> > การลดต้นทุน
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_profit" <?php if($rowservice->S_profit == 'การจัดซื้อ จัดหา'){?>
              checked <?php }else{} ?> > การจัดซื้อ จัดหา
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>เงินทุน</b>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <input type="radio" name="S_capital" <?php if($rowservice->S_capital == 'ระดมทุน'){?>
              checked <?php }else{} ?> > ระดมทุน
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_capital" <?php if($rowservice->S_capital == 'การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน'){?>
              checked <?php }else{} ?> v> การนำอุปกรณ์เครื่องจักรเข้ามาใช้งาน
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>การจัดการ</b>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <input type="radio" name="S_management" <?php if($rowservice->S_management == 'การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ'){?>
              checked <?php }else{} ?> > การวางแผนธุรกิจ(Business Plan)/กลยุทธ์การจัดการ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_management" <?php if($rowservice->S_management == 'บริหารจัดการบัญชี'){?>
              checked <?php }else{} ?> > บริหารจัดการบัญชี
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_management" <?php if($rowservice->S_management == 'กฎหมาย'){?>
              checked <?php }else{} ?> > กฎหมาย<br>
                <input type="radio" name="S_management" <?php if($rowservice->S_management == 'การใช้เทคโนโลยีสารสนเทศ(IT)'){?>
              checked <?php }else{} ?> > การใช้เทคโนโลยีสารสนเทศ(IT)
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_management" <?php if($rowservice->S_management == 'การเริ่มต้นกิจการ/การเลิกกิจการ'){?>
              checked <?php }else{} ?> > การเริ่มต้นกิจการ/การเลิกกิจการ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_management" <?php if($rowservice->S_management == 'การสืบทอดธุรกิจ'){?>
              checked <?php }else{} ?> > การสืบทอดธุรกิจ<br>
                <input type="radio" name="S_management" <?php if($rowservice->S_management == 'การปฎิรูปการบริหารจัดการ'){?>
              checked <?php }else{} ?> > การปฎิรูปการบริหารจัดการ
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>การปฏิบัติงาน</b>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <input type="radio" name="S_work" <?php if($rowservice->S_work == 'เพิ่มประสิทธิภาพการผลิต'){?>
              checked <?php }else{} ?> > เพิ่มประสิทธิภาพการผลิต
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_work" <?php if($rowservice->S_work == 'คุณภาพ'){?>
              checked <?php }else{} ?> > คุณภาพ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_work" <?php if($rowservice->S_work == 'มาตรฐาน(standard)'){?>
              checked <?php }else{} ?> > มาตรฐาน(standard)
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>ทรัพยากรบุคคล</b>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <input type="radio" name="S_humanresource" <?php if($rowservice->S_humanresource == 'การบริหารจัดการทรัพยากรบุคคล'){?>
              checked <?php }else{} ?> > การบริหารจัดการทรัพยากรบุคคล
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_humanresource" <?php if($rowservice->S_humanresource == 'เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)'){?>
              checked <?php }else{} ?> > เสริมสร้างศักยภาพบุคคลากร(จัดในองค์กร)<br>
                <input type="radio" name="S_humanresource" <?php if($rowservice->S_humanresource == 'สัมมนาและฝึกอบรม(จัดนอกองค์กร)'){?>
              checked <?php }else{} ?> > สัมมนาและฝึกอบรม(จัดนอกองค์กร)
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_humanresource" <?php if($rowservice->S_humanresource == 'ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก'){?>
              checked <?php }else{} ?> > ผู้เชี่ยวชาญและที่ปรึกษาจากภายนอก
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <b>เทคโนโลยี</b>
              </td>
            </tr>
            <tr>
              <td colspan="3" align="left">
                <input type="radio" name="S_technology" <?php if($rowservice->S_technology == 'พัฒนาเทคโนโลยี'){?>
              checked <?php }else{} ?> > พัฒนาเทคโนโลยี
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_technology" <?php if($rowservice->S_technology == 'ทรัพย์สินทางปัญญา'){?>
              checked <?php }else{} ?>> ทรัพย์สินทางปัญญา
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_technology" <?php if($rowservice->S_technology == 'การประหยัดพลังงาน'){?>
              checked <?php }else{} ?> > การประหยัดพลังงาน
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_technology" <?php if($rowservice->S_technology == 'มาตรการด้านสิ่งแวดล้อม'){?>
              checked <?php }else{} ?> > มาตรการด้านสิ่งแวดล้อม<br>
              </td>
            </tr>
            <tr>
              <td>
              <br> 
                อื่นๆ โปรดระบุ<input type="text" name="S_deteil_etc" value="<?php echo $rowservice->S_deteil_etc;?>"  size="60" >
                <br>
                </td>
              </tr>
              <tr>
                <td colspan="3" align="left">
                 <br>
                  <b>เรื่องที่มาขอคำปรึกษาแนะนำ (สำหรับผู้มารับบริการ)</b>
                  <br>
                </td>
              </tr>
              <tr>
                <td colspan="3" align="center">
                  <textarea name="S_detail"  cols="80" rows="3" ><?php echo $rowservice->S_detail;?></textarea>
                </td>
              </tr>
              <hr>
              <tr>
              <br>
                <td colspan="3" align="left">
                  <b>วิธีการแนะนำและแนวทางแก้ไข (สำหรับเจ้าหน้าที่)</b>
                  <br>
                </td>
              </tr>
              <tr>
                <td colspan="3" align="left">
                  <input type="radio" name="S_solution" <?php if($rowservice->S_solution == 'ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย'){?>
              checked <?php }else{} ?> > ให้คำปรึกษาแนะนำโดยเจ้าหน้าที่ประจำหน่วย
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="S_solution" <?php if($rowservice->S_solution == 'แนะนำให้คำปรึกษาภายนอก'){?>
              checked <?php }else{} ?> > แนะนำให้คำปรึกษาภายนอก<br>
                  <input type="radio" name="S_solution" <?php if($rowservice->S_solution == 'แนะนำไปยังหน่วยอื่น'){?>
              checked <?php }else{} ?> > แนะนำไปยังหน่วยอื่น
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="S_solution" <?php if($rowservice->S_solution == 'แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)'){?>
              checked <?php }else{} ?> > แนะนำไปยังหน่วยบริการอื่นๆ(ที่ไม่ใช่อุทยานวิทยาศาสตร์และเทคโนโลยีเครือข่ายภาคเหนือตอนบน)<br>
                </td>
              </tr>
              <tr>
                <td colspan="3" align="center">
                 <textarea name="S_solution_detail"  cols="80" rows="3" ><?php echo $rowservice->S_solution_detail;?></textarea>
               </td>
             </tr>
             <tr>
              <td colspan="1"></td>
              <td colspan="2" align="right">
                <table>
                  <tr>
                    <td>ชื่อผู้ให้การแนะนำ: <input type="text" size="30" name="S_solution_name" value="<?php echo $rowservice->S_solution_name;?>"  ></td>
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

 </form>

 </div>
 <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
