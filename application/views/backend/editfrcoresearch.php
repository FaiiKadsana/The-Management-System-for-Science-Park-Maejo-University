 <?php  foreach ($coresearch_irct as $row) { ?>
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
                <td align="right"><b style="color:red;">*หมายเหตุ โปรดจำหมายเลขแบบฟอร์ม</b>&nbsp;&nbsp;เลขที่แบบฟอร์ม:<input type="text" size="20" name="Co_id" value="<?php echo $row->Co_id;?>" disabled></td>
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
            <table  width="100%" >
              <tr>
                <td width="35%" colspan="2"> 
                  วันที่:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="date"  name="Co_date" value="<?php echo $row->Co_date;?>"  >
                  <br><br><br><br> </td>

                </tr>

                <tr>
                  <td width="35%">1.ชื่อโครงการ</td>
                  <td >
                    <textarea type="text" cols="80" name="Co_name_pro" rows="3" ><?php echo $row->Co_name_pro;?>"</textarea>
                  </td>
                </tr>
                <tr>
                  <td width="35%">2.กลุ่มอุตสาหกรรม</td>
                  <td >
                   <input type="radio" name="Co_secter" <?php if($row->Co_secter == 'Focus (ข้าวทั้งห่วงโซ่)'){?>
                   checked <?php }else{} ?>  > Focus (ข้าวทั้งห่วงโซ่)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Co_secter" <?php if($row->Co_secter == '4 Focus Industries'){?>
                   checked <?php }else{} ?> > 4 Focus Industries&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Co_secter" <?php if($row->Co_secter == 'Others'){?>
                   checked <?php }else{} ?>  > Others ระบุ <input type="text" name="Co_secter_etc" value="<?php echo $row->Co_secter_etc;?>" size="15" >   
                 </td>
               </tr>
               <tr>
                <td width="35%">3.ผู้รับผิดชอบโครงการและความเชี่ยวชาญ</td>
                <td >
                  <br>
                  ชื่อผู้รับผิดชอบ: <input type="text" name="Rp_name" value="<?php echo $row->Rp_name;?>"size="26" > ตำแหน่ง: <input type="text" name="Rp_position" value="<?php echo $row->Rp_position;?>" size="26" > <br>
                  หน่วยงานรับผิดชอบ: <input type="text" name="Rp_institute" value="<?php echo $row->Rp_institute;?>" size="22" > เบอร์โทรศัพท์: <input type="tel" name="Rp_phone" value="<?php echo $row->Rp_phone;?>" size="22" > <br>
                  แฟกซ์: <input type="text" name="Rp_fax" value="<?php echo $row->Rp_fax;?>" size="30" > อีเมล์: <input type="email" name="Rp_mail" value="<?php echo $row->Rp_mail;?>" size="30" > <br>
                  ที่อยู่: <textarea name="Rp_address" cols="70" rows="3"  ><?php echo $row->Rp_address;?></textarea>
                  <br><br>
                </tr>
                <tr>
                  <td width="35%">4.ที่มาของโครงการ</td>
                  <td >
                    <textarea name="Co_origin" cols="80" rows="3" ><?php echo $row->Co_origin;?></textarea>
                  </td>
                </tr>
                <tr>
                  <td width="35%">5.วัตถุประสงค์</td>
                  <td >
                    <textarea name="Co_objective" cols="80" rows="3" ><?php echo $row->Co_objective;?></textarea>
                  </td>
                </tr>
                <tr>
                  <td width="35%">6.รายละเอียดผู้ประกอบการ</td>
                  <td >
                    <br>
                    ชื่อกิจการ: <input type="text" name="C_name" value="<?php echo $row->C_name;?>" size="24" ><br>
                    ประเภทนิติบุคคล: <input type="text" name="C_company_type" value="<?php echo $row->C_company_type;?>" size="24" > ทุนจดทะเบียน: <input type="text" name="C_investment" value="<?php echo $row->C_investment;?>" size="20" > <br>
                    จำนวนพนักงาน: <input type="text" name="Co_no_emp_total" value="<?php echo $row->Co_no_emp_total;?>" size="18" > ผลิตภัณฑ์หลักขององค์กร: <input type="tel" name="Co_main_pro1" value="<?php echo $row->Co_main_pro1;?>" size="18" > <br>
                    ที่อยู่: <textarea name="C_address" cols="70" rows="3"  ><?php echo $row->C_address;?></textarea> <br>
                    ผู้ติดต่อประสานงาน: <input type="text" name="P_name" value="<?php echo $row->P_name;?>" size="18" > เบอร์ผู้ติดต่อประสานงาน: <input type="email" name="P_phone" value="<?php echo $row->P_phone;?>"size="16" > <br><br>
                  </td>
                </tr>
                <tr>
                  <td width="35%">7.เหตุผลที่สนใจร่วมงานวิจัยและพัฒนาสำหรับโครงการนี้</td>
                  <td >
                    <textarea name="Co_reason" cols="80" rows="3" ><?php echo $row->Co_reason;?></textarea>
                  </td>
                </tr>
                <tr>
                  <td width="35%">8.โครงการ/งานวิจัยที่เคยทำร่วมกับผู้เชี่ยวชาญ</td>
                  <td >
                    <textarea name="Co_pro_together" cols="80" rows="3" ><?php echo $row->Co_pro_together;?></textarea>
                  </td>
                </tr>
                <tr>
                  <td width="35%">9.การใช้ผลงานวิจัยเดิมที่นำมาต่อยอดเพื่อพัฒนาสู่เชิงพาณิชย์</td>
                  <td >
                    <textarea name="Co_dem" cols="80" rows="3" ><?php echo $row->Co_dem;?></textarea>
                  </td>
                </tr>
                <tr>
                  <td width="35%">10.รายละเอียดห้องปฏิบัติการ และนักวิจัย</td>
                  <td >
                    <textarea name="Co_lab_re" cols="80" rows="3" ><?php echo $row->Co_lab_re;?></textarea>
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
                          <td width="40%" align="center"><input type="text" size="30" name="Pl_activity1" value="<?php echo $row->Pl_activity1;?>" ></td>
                          <td align="center"><input type="text" name="Pl_month1" value="<?php echo $row->Pl_month1;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month2" value="<?php echo $row->Pl_month2;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month3" value="<?php echo $row->Pl_month3;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month4" value="<?php echo $row->Pl_month4;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month5" value="<?php echo $row->Pl_month5;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month6" value="<?php echo $row->Pl_month6;?>" size="2" ></td>
                        </tr>
                        <tr>
                          <td width="40%" align="center"><input type="text" size="30" name="Pl_activity2" value="<?php echo $row->Pl_activity2;?>" ></td>
                          <td align="center"><input type="text" name="Pl_month1" value="<?php echo $row->Pl_month1;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month2" value="<?php echo $row->Pl_month2;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month3" value="<?php echo $row->Pl_month3;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month4" value="<?php echo $row->Pl_month4;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month5" value="<?php echo $row->Pl_month5;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month6" value="<?php echo $row->Pl_month6;?>" size="2" ></td>
                        </tr>
                        <tr>
                          <td width="40%" align="center"><input type="text" size="30" name="Pl_activity3" value="<?php echo $row->Pl_activity3;?>" ></td>
                          <td align="center"><input type="text" name="Pl_month1" value="<?php echo $row->Pl_month1;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month2" value="<?php echo $row->Pl_month2;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month3" value="<?php echo $row->Pl_month3;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month4" value="<?php echo $row->Pl_month4;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month5" value="<?php echo $row->Pl_month5;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month6" value="<?php echo $row->Pl_month6;?>" size="2" ></td>
                        </tr>
                        <tr>
                          <td width="40%" align="center"><input type="text" size="30" name="Pl_activity4" value="<?php echo $row->Pl_activity4;?>" ></td>
                          <td align="center"><input type="text" name="Pl_month1" value="<?php echo $row->Pl_month1;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month2" value="<?php echo $row->Pl_month2;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month3" value="<?php echo $row->Pl_month3;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month4" value="<?php echo $row->Pl_month4;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month5" value="<?php echo $row->Pl_month5;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month6" value="<?php echo $row->Pl_month6;?>" size="2" ></td>
                        </tr>
                        <tr>
                          <td width="40%" align="center"><input type="text" size="30" name="Pl_activity5" value="<?php echo $row->Pl_activity5;?>" ></td>
                          <td align="center"><input type="text" name="Pl_month1" value="<?php echo $row->Pl_month1;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month2" value="<?php echo $row->Pl_month2;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month3" value="<?php echo $row->Pl_month3;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month4" value="<?php echo $row->Pl_month4;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month5" value="<?php echo $row->Pl_month5;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month6" value="<?php echo $row->Pl_month6;?>" size="2" ></td>
                        </tr>
                        <tr>
                          <td width="40%" align="center"><input type="text" size="30" name="Pl_activity6" value="<?php echo $row->Pl_activity6;?>" ></td>
                          <td align="center"><input type="text" name="Pl_month1" value="<?php echo $row->Pl_month1;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month2" value="<?php echo $row->Pl_month2;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month3" value="<?php echo $row->Pl_month3;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month4" value="<?php echo $row->Pl_month4;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month5" value="<?php echo $row->Pl_month5;?>" size="2" ></td>
                          <td align="center"><input type="text" name="Pl_month6" value="<?php echo $row->Pl_month6;?>" size="2" ></td>
                        </tr>
                      </table>
                      <br>
                    </center>

                  </td>
                </tr>
                <tr>
                  <td width="35%">12.ผลที่คาดว่าจะได้รับ</td>
                  <td > 
                    <textarea name="Co_result" cols="80" rows="3"  ><?php echo $row->Co_result;?></textarea>
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
                        <td width="30%"><input type="text" size="20"   name="Bg_action1" value="<?php echo $row->Bg_action1;?>" placeholder="1"><br>
                          <input type="text" size="20" name="Bg_reward1" value="<?php echo $row->Bg_reward1;?>"  ><br>
                          <input type="text" size="20" name="Bg_wage1" value="<?php echo $row->Bg_wage1;?>" ><br>
                          <input type="text" size="20" name="Bg_expenses1" value="<?php echo $row->Bg_expenses1;?>" ><br>
                          <input type="text" size="20" name="Bg_material1" value="<?php echo $row->Bg_material1;?>" ><br>
                          <input type="text" size="20" name="" name="Bg_living1" value="<?php echo $row->Bg_living1;?>" ><br>
                          <input type="text" size="20" name="" name="Bg_management1" value="<?php echo $row->Bg_management1;?>" ><br>
                        </td>
                        <td width="30%">
                          <input type="text" size="10" name="Bg_action2" value="<?php echo $row->Bg_action2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_action3" value="<?php echo $row->Bg_action3;?>" ><br>
                          <input type="text" size="10" name="Bg_reward2" value="<?php echo $row->Bg_reward2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_reward3" value="<?php echo $row->Bg_reward3;?>" ><br>
                          <input type="text" size="10" name="Bg_wage2" value="<?php echo $row->Bg_wage2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_wage3" value="<?php echo $row->Bg_wage3;?>" ><br>
                          <input type="text" size="10" name="Bg_expenses2" value="<?php echo $row->Bg_expenses2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_expenses3" value="<?php echo $row->Bg_expenses3;?>" ><br>
                          <input type="text" size="10" name="Bg_material2" value="<?php echo $row->Bg_material2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_material3" value="<?php echo $row->Bg_material3;?>" ><br>
                          <input type="text" size="10" name="Bg_living2" value="<?php echo $row->Bg_living2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_living3" value="<?php echo $row->Bg_living3;?>" ><br>
                          <input type="text" size="10" name="Bg_management2" value="<?php echo $row->Bg_management2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_management3" value="<?php echo $row->Bg_management3;?>" ><br>
                        </td>
                        <td>
                          <input type="text" size="20" name="Bg_action4" value="<?php echo $row->Bg_action4;?>" ><br>
                          <input type="text" size="20" name="Bg_reward4" value="<?php echo $row->Bg_reward4;?>" ><br>
                          <input type="text" size="20" name="Bg_wage4" value="<?php echo $row->Bg_expenses4;?>" ><br>
                          <input type="text" size="20" name="Bg_material4" value="<?php echo $row->Bg_material4;?>" ><br>
                          <input type="text" size="20" name="Bg_living4" value="<?php echo $row->Bg_living4;?>" ><br>
                          <input type="text" size="20" name="Bg_management4" value="<?php echo $row->Bg_management4;?>" ><br>
                        </td>
                      </tr>
                      <tr>
                        <td width="20%">รวมงบดำเนินการ</td>
                        <td width="30%"><input type="text" size="20" name="Bg_total1" value="<?php echo $row->Bg_total1;?>" ></td>
                        <td width="30%"><input type="text" size="10" name="Bg_total2" value="<?php echo $row->Bg_total2;?>"  >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_total3" value="<?php echo $row->Bg_total3;?>" ><br></td>
                        <td><input type="text" size="20" name="Bg_total4" value="<?php echo $row->Bg_total4;?>" ></td>
                      </tr>
                      <tr>
                        <td width="20%">2.งบลงทุน<br>&nbsp;2.1ค่าครุภัณฑ์<br>&nbsp;2.2 ค่าก่อสร้าง (อาทิเช่น อาคาร สิ่งปลูกสร้าง สาธารณูปโภค)</td>                    
                        <td width="30%"><input type="text" size="20" name="Bg_in_invest1" value="<?php echo $row->Bg_in_invest1;?>"  placeholder="2"><br>
                          <input type="text" size="20" name="Bg_in_durable1" value="<?php echo $row->Bg_in_durable1;?>"  ><br>
                          <input type="text" size="20" name="Bg_in_building1" value="<?php echo $row->Bg_in_building1;?>"  ><br>
                        </td>
                        <td width="30%">
                          <input type="text" size="10"  name="Bg_in_invest2" value="<?php echo $row->Bg_in_invest2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_invest3" value="<?php echo $row->Bg_in_invest3;?>" ><br>
                          <input type="text" size="10" name="Bg_in_durable2" value="<?php echo $row->Bg_in_durable2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_durable3" value="<?php echo $row->Bg_in_durable3;?>" ><br>
                          <input type="text" size="10" name="Bg_in_building2" value="<?php echo $row->Bg_in_building2;?>" >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_building3" value="<?php echo $row->Bg_in_building3;?>" ><br>
                        </td>
                        <td>
                          <input type="text" size="20" name="Bg_in_invest4" value="<?php echo $row->Bg_in_invest4;?>" ><br>
                          <input type="text" size="20" name="Bg_in_durable4" value="<?php echo $row->Bg_in_durable4;?>" ><br>
                          <input type="text" size="20" name="Bg_in_building4" value="<?php echo $row->Bg_in_building4;?>" ><br>
                        </td>
                      </tr>
                      <tr>
                        <td width="20%">รวมงบลงทุน</td>
                        <td width="30%"><input type="text" size="20" name="Bg_in_total1" value="<?php echo $row->Bg_in_total1;?>" ></td>
                        <td width="30%"><input type="text" size="10" name="Bg_in_total2" value="<?php echo $row->Bg_in_total2;?>"  >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_total3" value="<?php echo $row->Bg_in_total3;?>" ><br></td>
                        <td><input type="text" size="20" name="Bg_in_total4" value="<?php echo $row->Bg_in_total4;?>" ></td>
                      </tr>
                      <tr>
                        <th width="20%">รวมงบประมาณทั้งหมด</th>
                        <th width="30%"><input type="text" size="20" name="Bg_in_sum1" value="<?php echo $row->Bg_in_sum1;?>" ></th>
                        <th width="30%"><input type="text" size="10" name="Bg_in_sum2" value="<?php echo $row->Bg_in_sum2;?>"  >&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="Bg_in_sum3" value="<?php echo $row->Bg_in_sum3;?>" ><br></th>
                        <th><input type="text" size="20" name="Bg_in_sum4" value="<?php echo $row->Bg_in_sum4;?>"  ></th>
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
     <div class="col-sm-12">
       <table>
         <tr>
           <td width="80%">
           </td>
           <td width="80%">
           </td>
           <td>
             <a href="<?php echo base_url("backend/coresearch")?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับ</button></a>
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