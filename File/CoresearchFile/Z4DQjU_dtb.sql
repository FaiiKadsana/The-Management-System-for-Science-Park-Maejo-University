SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `Scieace Park` ;

-- -----------------------------------------------------
-- Table `Scieace Park`.`company`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`company` (
  `C_id` INT NOT NULL AUTO_INCREMENT ,
  `C_name` VARCHAR(255) NULL ,
  `C_address` TEXT NULL ,
  `C_phone` VARCHAR(20) NULL ,
  `C_fax` VARCHAR(20) NULL ,
  `C_website` VARCHAR(255) NULL ,
  `C_no_com` VARCHAR(100) NULL ,
  `C_no_com_etc` VARCHAR(100) NULL ,
  `C_company_type` VARCHAR(100) NULL ,
  `C_company_type_etc` VARCHAR(100) NULL ,
  `C_undertaking` VARCHAR(100) NULL ,
  `C_undertaking_etc` VARCHAR(100) NULL ,
  `C_industry_type` VARCHAR(100) NULL ,
  `C_industry_type_etc` VARCHAR(100) NULL ,
  `C_investment` INT NULL ,
  `C_no_year` VARCHAR(50) NULL ,
  PRIMARY KEY (`C_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางสถานประกอบการ';


-- -----------------------------------------------------
-- Table `Scieace Park`.`contact_person`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`contact_person` (
  `P_id` INT NOT NULL AUTO_INCREMENT ,
  `P_picture` VARCHAR(200) NULL ,
  `P_title` VARCHAR(100) NULL ,
  `P_name` VARCHAR(255) NULL ,
  `P_lastname` VARCHAR(255) NULL ,
  `P_id_card` VARCHAR(50) NULL ,
  `P_position` VARCHAR(255) NULL ,
  `P_phone` VARCHAR(20) NULL ,
  `P_mail` VARCHAR(100) NULL ,
  `P_order` INT NULL ,
  PRIMARY KEY (`P_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางผู้ติดต่อ';


-- -----------------------------------------------------
-- Table `Scieace Park`.`news`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`news` (
  `N_id` INT NOT NULL AUTO_INCREMENT ,
  `N_title` VARCHAR(200) NOT NULL ,
  `N_detail` VARCHAR(255) NOT NULL ,
  `N_picture` VARCHAR(255) NOT NULL ,
  `N_order` INT NULL ,
  PRIMARY KEY (`N_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางข่าวประชาสัมพันธ์';


-- -----------------------------------------------------
-- Table `Scieace Park`.`officer`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`officer` (
  `O_id` INT NOT NULL AUTO_INCREMENT ,
  `O_id_card` VARCHAR(50) NOT NULL ,
  `Ol_picture` VARCHAR(255) NULL ,
  `O_title` VARCHAR(100) NULL ,
  `O_name` VARCHAR(255) NULL ,
  `O_lastname` VARCHAR(255) NULL ,
  `O_position` VARCHAR(255) NULL ,
  `O_email` VARCHAR(100) NULL ,
  `O_phone` VARCHAR(50) NULL ,
  `O_password` VARCHAR(100) NULL ,
  `O_status` VARCHAR(100) NULL ,
  `O_order` INT NULL ,
  PRIMARY KEY (`O_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางข้อมุลเจ้าหน้าที่';


-- -----------------------------------------------------
-- Table `Scieace Park`.`research`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`research` (
  `Re_id` INT NOT NULL AUTO_INCREMENT ,
  `Re_name` VARCHAR(255) NULL ,
  `Re_name_eng` VARCHAR(255) NULL ,
  `Re_type` VARCHAR(100) NULL ,
  `Re_start` YEAR NULL ,
  `Re_end` YEAR NULL ,
  `Re_id_patent` VARCHAR(50) NOT NULL COMMENT 'เลขที่สิทธิบัตร' ,
  `Re_status` VARCHAR(50) NULL ,
  `Re_finances_sp` VARCHAR(255) NULL ,
  `Re_finances_b` VARCHAR(255) NULL ,
  `Re_abstract` TEXT NULL ,
  `Re_picture` VARCHAR(255) NULL ,
  `Re_order` INT NULL ,
  PRIMARY KEY (`Re_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางงานวิจัย';


-- -----------------------------------------------------
-- Table `Scieace Park`.`research_award`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`research_award` (
  `Rec_id` INT NOT NULL AUTO_INCREMENT ,
  `Rea_type` VARCHAR(255) NOT NULL ,
  `Rea_date` DATE NOT NULL ,
  `Rea_order` INT NULL ,
  PRIMARY KEY (`Rec_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางรางวัลงานวิจัย';


-- -----------------------------------------------------
-- Table `Scieace Park`.`researchers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`researchers` (
  `Rec_id` INT NOT NULL AUTO_INCREMENT ,
  `Rec_name_thai` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT 'อะไร' ,
  `Rec_ln_thai` VARCHAR(255) NOT NULL ,
  `Rec_name_eng` VARCHAR(255) NOT NULL ,
  `Rec_ln_eng` VARCHAR(255) NOT NULL ,
  `Rec_address` TEXT NOT NULL ,
  `Rec_phone` VARCHAR(50) NULL ,
  `Rec_mail` VARCHAR(255) NULL ,
  `Rec_position` VARCHAR(200) NULL ,
  `Rec_unit` VARCHAR(255) NOT NULL ,
  `Rec_picture` VARCHAR(200) NULL ,
  `Rec_office` VARCHAR(100) NULL ,
  `Rec_order` INT NULL ,
  PRIMARY KEY (`Rec_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางนักวิจัย';


-- -----------------------------------------------------
-- Table `Scieace Park`.`specialization`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`specialization` (
  `Sct_id` INT NOT NULL AUTO_INCREMENT ,
  `Sct_detail` VARCHAR(100) NULL ,
  `Sct_order` INT NULL ,
  PRIMARY KEY (`Sct_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางความเชี่ยวชาญ';


-- -----------------------------------------------------
-- Table `Scieace Park`.`slideshow`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`slideshow` (
  `Ss_id` INT NOT NULL AUTO_INCREMENT ,
  `Ss_picture` VARCHAR(255) NOT NULL ,
  `Ss_order` INT NULL ,
  PRIMARY KEY (`Ss_id`) )
ENGINE = InnoDB
COMMENT = 'ตาราง slideshow';


-- -----------------------------------------------------
-- Table `Scieace Park`.`major`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`major` (
  `M_id` INT NOT NULL AUTO_INCREMENT ,
  `M_detail` VARCHAR(255) NOT NULL ,
  `M_order` INT NULL ,
  PRIMARY KEY (`M_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางสาขาวิชา';


-- -----------------------------------------------------
-- Table `Scieace Park`.`form_Download`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`form_Download` (
  `Fd_id` INT NOT NULL AUTO_INCREMENT ,
  `Fd_name` VARCHAR(100) NULL ,
  `Fd_file` VARCHAR(255) NULL ,
  `Fd_order` INT NULL ,
  PRIMARY KEY (`Fd_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางแบบฟอร์มดาวน์โหลด';


-- -----------------------------------------------------
-- Table `Scieace Park`.`catalog`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`catalog` (
  `Cl_id` INT NOT NULL AUTO_INCREMENT ,
  `Cl_price` VARCHAR(50) NULL ,
  `Cl_property` VARCHAR(255) NULL ,
  `Cl_contact` VARCHAR(50) NULL ,
  `Cl_order` INT NULL ,
  PRIMARY KEY (`Cl_id`) )
ENGINE = InnoDB
COMMENT = 'ตาราง catalog ผลงานวิจัย';


-- -----------------------------------------------------
-- Table `Scieace Park`.`deal`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`deal` (
  `D_id` INT NOT NULL AUTO_INCREMENT ,
  `D_id_contract` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL COMMENT 'เลขที่สัญญา' ,
  `D_name` VARCHAR(255) NULL ,
  `D_unit` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL COMMENT 'หน่วยงาน' ,
  `D_start_ct` DATE NULL COMMENT 'วันที่เริ่มสัญญา' ,
  `D_end_ct` DATE NULL COMMENT 'วันที่สิ้นสุดสัญญา' ,
  `D_tax` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL COMMENT 'ภาษี' ,
  `D_price` FLOAT NULL COMMENT 'ราคา' ,
  PRIMARY KEY (`D_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางการซื้อขายงานวิจัย';


-- -----------------------------------------------------
-- Table `Scieace Park`.`calendar`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`calendar` (
  `Cd_id` INT NOT NULL AUTO_INCREMENT ,
  `Cd_date` DATE NULL ,
  `Cd_time` TIME NULL ,
  `Cd_detail` VARCHAR(255) NULL ,
  `Cd_order` INT NULL ,
  PRIMARY KEY (`Cd_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางปฏิทินนัดหมาย';


-- -----------------------------------------------------
-- Table `Scieace Park`.`service`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`service` (
  `S_id` VARCHAR(50) NOT NULL ,
  `S_date` DATE NULL ,
  `S_no_emp_total` INT NULL ,
  `S_no_emp_reg` INT NULL ,
  `S_no_emp_tem` INT NULL ,
  `S_main_pro1` VARCHAR(100) NULL ,
  `S_main_pro2` VARCHAR(100) NULL ,
  `S_main_pro3` VARCHAR(100) NULL ,
  `S_circulation` VARCHAR(100) NULL ,
  `S_profit` VARCHAR(100) NULL ,
  `S_capital` VARCHAR(100) NULL ,
  `S_management` VARCHAR(100) NULL ,
  `S_work` VARCHAR(100) NULL ,
  `S_humanresource` VARCHAR(100) NULL ,
  `S_technology` VARCHAR(100) NULL ,
  `S_technology_etc` VARCHAR(100) NULL ,
  `S_etc` VARCHAR(50) NULL ,
  `S_etc_deteil` VARCHAR(100) NULL ,
  `S_detail` TEXT NULL ,
  `S_agreement` VARCHAR(255) NULL ,
  `S_provider` VARCHAR(100) NOT NULL ,
  `S_provider1` VARCHAR(100) NULL ,
  `S_order` INT NULL ,
  PRIMARY KEY (`S_id`) )
ENGINE = InnoDB
COMMENT = 'ตาราง service platform';


-- -----------------------------------------------------
-- Table `Scieace Park`.`status_platform`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`status_platform` (
  `Spf_id` INT NOT NULL AUTO_INCREMENT ,
  `Spf_status` VARCHAR(100) NULL ,
  `Spf_order` INT NULL ,
  PRIMARY KEY (`Spf_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางสถานะ platform';


-- -----------------------------------------------------
-- Table `Scieace Park`.`co-research_irct`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`co-research_irct` (
  `Co_id` VARCHAR(50) NOT NULL ,
  `Co_name_pro` VARCHAR(255) NULL ,
  `Co_secter` VARCHAR(100) NULL ,
  `Co_origin` TEXT NULL ,
  `Co_objective` TEXT NULL ,
  `Co_reason` TEXT NULL ,
  `Co_pro_together` TEXT NULL ,
  `Co_lab_re` TEXT NULL ,
  `Co_result` VARCHAR(255) NULL ,
  `Co_dem` VARCHAR(255) NULL ,
  `Co_agreement` VARCHAR(255) NULL ,
  PRIMARY KEY (`Co_id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'ตาราง co-research หรือ IRTC platform';


-- -----------------------------------------------------
-- Table `Scieace Park`.`plan`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`plan` (
  `Pl_id` INT NOT NULL AUTO_INCREMENT ,
  `Pl_month1` INT NULL ,
  `Pl_month2` INT NULL ,
  `Pl_month3` INT NULL ,
  `Pl_month4` INT NULL ,
  `Pl_month5` INT NULL ,
  `Pl_month6` INT NULL ,
  `Pl_activity1` VARCHAR(200) NULL ,
  `Pl_activity2` VARCHAR(200) NULL ,
  `Pl_activity3` VARCHAR(200) NULL ,
  `Pl_activity4` VARCHAR(200) NULL ,
  `Pl_activity5` VARCHAR(200) NULL ,
  `Pl_activity6` VARCHAR(200) NULL ,
  `Pl_order` VARCHAR(45) NULL ,
  PRIMARY KEY (`Pl_id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'ตารางแผนการดำเนินงาน \nco-research หรือ IRTC platform';


-- -----------------------------------------------------
-- Table `Scieace Park`.`responsible_person`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`responsible_person` (
  `Rp_id` INT NOT NULL ,
  `Rp_name` VARCHAR(100) NULL ,
  `Rp_position` VARCHAR(100) NULL ,
  `Rp_institute` VARCHAR(50) NULL ,
  `Rp_address` VARCHAR(255) NULL ,
  `Rp_phone` VARCHAR(50) NULL ,
  `Rp_fax` VARCHAR(50) NULL ,
  `Rp_mail` VARCHAR(100) NULL ,
  PRIMARY KEY (`Rp_id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'ตารางผู้รับผิดชอบ co-research หรือ IRTC platform';


-- -----------------------------------------------------
-- Table `Scieace Park`.`budget_action`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`budget_action` (
  `Bg_id` INT NOT NULL AUTO_INCREMENT ,
  `Bg_action1` INT NULL ,
  `Bg_action2` INT NULL ,
  `Bg_action3` INT NULL ,
  `Bg_action4` INT NULL ,
  `Bg_reward1` INT NULL ,
  `Bg_reward2` INT NULL ,
  `Bg_reward3` INT NULL ,
  `Bg_reward4` INT NULL ,
  `Bg_wage1` INT NULL ,
  `Bg_wage2` INT NULL ,
  `Bg_wage3` INT NULL ,
  `Bg_wage4` INT NULL ,
  `Bg_expenses1` INT NULL ,
  `Bg_expenses2` INT NULL ,
  `Bg_expenses3` INT NULL ,
  `Bg_expenses4` INT NULL ,
  `Bg_material1` INT NULL ,
  `Bg_material2` INT NULL ,
  `Bg_material3` INT NULL ,
  `Bg_material4` INT NULL ,
  `Bg_living1` INT NULL ,
  `Bg_living2` INT NULL ,
  `Bg_living3` INT NULL ,
  `Bg_living4` INT NULL ,
  `Bg_management1` INT NULL ,
  `Bg_management2` INT NULL ,
  `Bg_management3` INT NULL ,
  `Bg_management4` INT NULL ,
  `Bg_total1` INT NULL ,
  `Bg_total2` INT NULL ,
  `Bg_total3` INT NULL ,
  `Bg_total4` INT NULL ,
  `Bg_order` INT NULL ,
  PRIMARY KEY (`Bg_id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'ตารางงบการดำเนินงานของ\nco-research หรือ IRTC platform';


-- -----------------------------------------------------
-- Table `Scieace Park`.`status_tbi`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`status_tbi` (
  `Tbi_id` INT NOT NULL ,
  `Tbi_status` VARCHAR(100) NULL ,
  `Tbi_order` INT NULL ,
  PRIMARY KEY (`Tbi_id`) )
ENGINE = InnoDB
COMMENT = 'สถานะของ Tbi';


-- -----------------------------------------------------
-- Table `Scieace Park`.`tbi_person`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`tbi_person` (
  `Tbi_id` INT NOT NULL AUTO_INCREMENT ,
  `Tbi_picture` VARCHAR(200) NULL ,
  `Tbi_title` VARCHAR(50) NULL ,
  `Tbi_name` VARCHAR(150) NULL ,
  `Tbi_lastname` VARCHAR(150) NULL ,
  `Tbi_code` INT NULL ,
  `Tbi_birthday` DATE NULL ,
  `Tbi_age` INT NULL ,
  `Tbi_ethnicity` VARCHAR(100) NULL ,
  `Tbi_nationality` VARCHAR(100) NULL ,
  `Tbi_tell` VARCHAR(50) NULL ,
  `Tbi_fax` VARCHAR(50) NULL ,
  `Tbi_phone` VARCHAR(50) NULL ,
  `Tbi_mail` VARCHAR(100) NULL ,
  `Tbi_order` INT NULL ,
  PRIMARY KEY (`Tbi_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางข้อมูลส่วนบุคคลของ Tbi';


-- -----------------------------------------------------
-- Table `Scieace Park`.`status_project`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`status_project` (
  `Sp_id` INT NOT NULL AUTO_INCREMENT ,
  `Sp_status` VARCHAR(150) NULL ,
  `Sp_order` INT NULL ,
  PRIMARY KEY (`Sp_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Scieace Park`.`tbi_business`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`tbi_business` (
  `B_id` INT NOT NULL AUTO_INCREMENT ,
  `B_concept` VARCHAR(100) NULL ,
  `B_interest` VARCHAR(100) NULL ,
  `B_manufacture` VARCHAR(200) NULL ,
  `B_service` VARCHAR(200) NULL ,
  `B_wholesale` VARCHAR(200) NULL ,
  `B_retail` VARCHAR(200) NULL ,
  `B_business_plan` VARCHAR(255) NULL ,
  `B_goal` VARCHAR(255) NULL ,
  `B_goal_month` INT NULL ,
  `B_goal_year` INT NULL ,
  `B_investment` VARCHAR(100) NULL ,
  `B_resources` VARCHAR(200) NULL ,
  `B_balance` VARCHAR(100) NULL ,
  `B_source` VARCHAR(200) NULL ,
  `B_employee` VARCHAR(100) NULL ,
  `B_emp_sum` INT NULL ,
  `B_order` INT NULL ,
  PRIMARY KEY (`B_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางข้อมูลที่เกี่ยวกับการจัดตั้งธรกิจ';


-- -----------------------------------------------------
-- Table `Scieace Park`.`tbi_service`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`tbi_service` (
  `Tbi_id` INT NOT NULL AUTO_INCREMENT ,
  `Tbi_train` VARCHAR(200) NULL ,
  `Tbi_research` VARCHAR(200) NULL ,
  `Tbi_service` VARCHAR(200) NULL ,
  `Tbi_counsel` VARCHAR(200) NULL ,
  `Tbi_lab` VARCHAR(200) NULL ,
  `Tbi_certification` VARCHAR(200) NULL ,
  `Tbi_announce` VARCHAR(200) NULL ,
  `Tbi_coordinate` VARCHAR(200) NULL ,
  `Tbi_funding` VARCHAR(100) NULL ,
  `Tbi_asset` VARCHAR(200) NULL ,
  `Tbi_order` INT NULL ,
  PRIMARY KEY (`Tbi_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางบริการที่ต้องการของ Tbi';


-- -----------------------------------------------------
-- Table `Scieace Park`.`tbi`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`tbi` (
  `Tbi_id` VARCHAR(50) NOT NULL ,
  `Tbi_date` DATE NULL ,
  `Tbi_order` INT NULL ,
  PRIMARY KEY (`Tbi_id`) )
ENGINE = InnoDB
COMMENT = 'ตาราง Tbi platform';


-- -----------------------------------------------------
-- Table `Scieace Park`.`file`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`file` (
  `F_id` INT NOT NULL AUTO_INCREMENT ,
  `F_1` VARCHAR(100) NULL ,
  `F_2` VARCHAR(100) NULL ,
  `F_3` VARCHAR(100) NULL ,
  `F_4` VARCHAR(100) NULL ,
  `F_order` INT NULL ,
  PRIMARY KEY (`F_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางไฟล์แนบ';


-- -----------------------------------------------------
-- Table `Scieace Park`.`budget_invest`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`budget_invest` (
  `Bg_in_id` INT NOT NULL AUTO_INCREMENT ,
  `Bg_in_invest1` INT NULL ,
  `Bg_in_invest2` INT NULL ,
  `Bg_in_invest3` INT NULL ,
  `Bg_in_invest4` INT NULL ,
  `Bg_in_durable1` INT NULL ,
  `Bg_in_durable2` INT NULL ,
  `Bg_in_durable3` INT NULL ,
  `Bg_in_` INT NULL ,
  `Bg_in_building1` INT NULL ,
  `Bg_in_building2` INT NULL ,
  `Bg_in_building3` INT NULL ,
  `Bg_in_building4` INT NULL ,
  `Bg_in_total1` INT NULL ,
  `Bg_in_total2` INT NULL ,
  `Bg_in_total3` INT NULL ,
  `Bg_in_total4` INT NULL ,
  `Bg_in_sum1` INT NULL ,
  `Bg_in_sum2` INT NULL ,
  `Bg_in_sum3` INT NULL ,
  `Bg_in_sum4` INT NULL ,
  `Bg_in_order` INT NULL ,
  PRIMARY KEY (`Bg_in_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Scieace Park`.`tbi_person1`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Scieace Park`.`tbi_person1` (
  `Tbi_id1` INT NOT NULL AUTO_INCREMENT ,
  `Tbi_education` VARCHAR(100) NULL ,
  `Tbi_year` VARCHAR(50) NULL ,
  `Tbi_major` VARCHAR(100) NULL ,
  `Tbi_university` VARCHAR(100) NULL ,
  `Tbi_degree` VARCHAR(100) NULL ,
  `Tbi_occupation` VARCHAR(255) NULL ,
  `Tbi_notwork_time` VARCHAR(50) NULL ,
  `Tbi_emp_company` VARCHAR(100) NULL ,
  `Tbi_type_business` VARCHAR(100) NULL ,
  `Tbi_official` VARCHAR(100) NULL ,
  `Tbi_etc` VARCHAR(100) NULL ,
  `Tbi_owners` VARCHAR(100) NULL ,
  `Tbi_owners_year` VARCHAR(50) NULL ,
  `Tbi_order` INT NULL ,
  PRIMARY KEY (`Tbi_id1`) )
ENGINE = InnoDB
COMMENT = 'ตารางข้อมูลส่วนบุคคลของ Tbi';



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
