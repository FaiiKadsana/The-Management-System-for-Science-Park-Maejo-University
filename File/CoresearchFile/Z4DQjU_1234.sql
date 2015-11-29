SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`company`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`company` (
  `C_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสสถานประกอบการ' ,
  `C_no_com` VARCHAR(100) NULL COMMENT 'สถานะเลขที่ทะเบียนพาณิชย์' ,
  `C_no_com_etc` VARCHAR(100) NULL COMMENT 'เลขที่ทะเบียนพาณิชย์' ,
  `C_name` VARCHAR(255) NULL COMMENT 'ชื่อสถานประกอบการ' ,
  `C_address` TEXT NULL COMMENT 'ที่อยู่' ,
  `C_phone` VARCHAR(20) NULL COMMENT 'เบอร์โทร' ,
  `C_fax` VARCHAR(20) NULL COMMENT 'โทรสาร' ,
  `C_website` VARCHAR(255) NULL COMMENT 'เว็บไซต์' ,
  `C_investment` INT NULL COMMENT 'เงินลงทุนกิจการ' ,
  `C_no_year` VARCHAR(50) NULL COMMENT 'จำนวนปีที่ประกอบการ' ,
  `C_company_type` VARCHAR(100) NULL COMMENT 'ประเภทกิจการ' ,
  `C_company_type_etc` VARCHAR(100) NULL COMMENT 'ประเภทกิจการอื่นๆ' ,
  `C_undertaking` VARCHAR(100) NULL COMMENT 'ลักษณะกาประกอบการ' ,
  `C_undertaking_etc` VARCHAR(100) NULL COMMENT 'ลักษณะกาประกอบการอื่นๆ' ,
  `C_industry_type` VARCHAR(100) NULL COMMENT 'สาขาอุตสาหกรรมที่ทำ' ,
  `C_industry_type_etc` VARCHAR(100) NULL COMMENT 'สาขาอุตสาหกรรมที่ทำอื่นๆ' ,
  `C_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`C_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางสถานประกอบการ';


-- -----------------------------------------------------
-- Table `mydb`.`contact_person`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`contact_person` (
  `P_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ติดต่อ' ,
  `P_id_card` VARCHAR(50) NULL COMMENT 'รหัสบัตรประชาชน' ,
  `P_title` VARCHAR(100) NULL COMMENT 'คำนำหน้าชื่อ' ,
  `P_name` VARCHAR(255) NULL COMMENT 'ชื่อ' ,
  `P_lastname` VARCHAR(255) NULL COMMENT 'นามสกุล' ,
  `P_phone` VARCHAR(20) NULL COMMENT 'เบอร์โทร' ,
  `P_mail` VARCHAR(100) NULL COMMENT 'อีเมลล์' ,
  `P_position` VARCHAR(255) NULL COMMENT 'ตำแหน่ง' ,
  `P_picture` VARCHAR(200) NULL COMMENT 'รูปภาพ' ,
  `P_order` INT NULL COMMENT 'ลำดับ' ,
  `C_id` INT NULL COMMENT 'รหัสสถานประกอบการ' ,
  PRIMARY KEY (`P_id`) ,
  INDEX `fk_contact_person_company_idx` (`C_id` ASC) ,
  CONSTRAINT `fk_contact_person_company`
    FOREIGN KEY (`C_id` )
    REFERENCES `mydb`.`company` (`C_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตารางผู้ติดต่อ';


-- -----------------------------------------------------
-- Table `mydb`.`news`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`news` (
  `Ne_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสข่าวประชาสัมพันธ์' ,
  `Ne_sub` VARCHAR(255) NULL COMMENT 'หัวข้อข่าว' ,
  `Ne_text` TEXT NULL COMMENT 'รายละเอียดข่าว' ,
  `Ne_date_cre` DATETIME NULL COMMENT 'วันที่ลงข่าว' ,
  `Ne_date_up` DATETIME NULL COMMENT 'วันที่อัพเดตข่าว' ,
  `N_order` INT NULL ,
  PRIMARY KEY (`Ne_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางข่าวประชาสัมพันธ์';


-- -----------------------------------------------------
-- Table `mydb`.`officer`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`officer` (
  `O_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสเจ้าหน้าที่' ,
  `O_id_card` VARCHAR(50) NULL COMMENT 'เลขบัตรประจำตัวประชาชน' ,
  `Ol_picture` VARCHAR(255) NULL COMMENT 'รูปภาพ' ,
  `O_title` VARCHAR(100) NULL COMMENT 'คำนำหน้าชื่อ' ,
  `O_name` VARCHAR(255) NULL COMMENT 'ชื่อ' ,
  `O_lastname` VARCHAR(255) NULL COMMENT 'นามสกุล' ,
  `O_position` VARCHAR(255) NULL COMMENT 'ตำแหน่ง' ,
  `O_email` VARCHAR(100) NULL COMMENT 'อีเมลล์' ,
  `O_phone` VARCHAR(50) NULL COMMENT 'เบอร์โทรศัพท์' ,
  `O_password` VARCHAR(100) NULL COMMENT 'รหัสผ่าน' ,
  `O_status` VARCHAR(100) NULL COMMENT 'สิทธิการใช้งาน' ,
  `O_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`O_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางข้อมุลเจ้าหน้าที่';


-- -----------------------------------------------------
-- Table `mydb`.`status_platform`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`status_platform` (
  `Spf_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสสถานะแบบฟอร์ม' ,
  `Spf_status` VARCHAR(100) NULL COMMENT 'สถานะแบบฟอร์ม' ,
  `Spf_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`Spf_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางสถานะ platform';


-- -----------------------------------------------------
-- Table `mydb`.`service`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`service` (
  `S_id` VARCHAR(50) NOT NULL COMMENT 'รหัสบริการ service' ,
  `S_date` DATE NULL COMMENT 'วันที่มารับบริการ' ,
  `S_no_emp_total` INT NULL COMMENT 'จำนวนลูกจ้างทั้งหมด' ,
  `S_no_emp_reg` INT NULL COMMENT 'จำนวนลูกจ้างประจำ' ,
  `S_no_emp_tem` INT NULL COMMENT 'จำนวนลูกจ้างชั่วคราว' ,
  `S_main_pro1` VARCHAR(100) NULL COMMENT 'ผลิตภัณฑ์หลักลำดับ1' ,
  `S_main_pro2` VARCHAR(100) NULL COMMENT 'ผลิตภัณฑ์หลักลำดับ2' ,
  `S_main_pro3` VARCHAR(100) NULL COMMENT 'ผลิตภัณฑ์หลักลำดับ3' ,
  `S_circulation` VARCHAR(100) NULL COMMENT 'ยอดขาย' ,
  `S_profit` VARCHAR(100) NULL COMMENT 'การทำกำไร' ,
  `S_capital` VARCHAR(100) NULL COMMENT 'เงินทุน' ,
  `S_management` VARCHAR(100) NULL COMMENT 'การจัดการ' ,
  `S_work` VARCHAR(100) NULL COMMENT 'การปฏิบัติงาน' ,
  `S_humanresource` VARCHAR(100) NULL COMMENT 'ทรัพยากรบุคคล' ,
  `S_technology` VARCHAR(100) NULL COMMENT 'เทคโนโลยี' ,
  `S_deteil_etc` VARCHAR(100) NULL COMMENT 'อื่นๆ' ,
  `S_detail` TEXT NULL COMMENT 'เรื่องที่ขอรับบริการ' ,
  `S_comment` VARCHAR(255) NULL COMMENT 'ความคิดเห็น' ,
  `S_provider` VARCHAR(100) NULL COMMENT 'ลายเซ็นต์' ,
  `S_provider1` VARCHAR(100) NULL COMMENT 'ชื่อผู้ขอรับบริการ' ,
  `S_solution` VARCHAR(100) NULL COMMENT 'วิธีการแนะนำ' ,
  `S_solution_detail` VARCHAR(100) NULL COMMENT 'รายละเอียดการแนะนำ' ,
  `S_solution_name` VARCHAR(100) NULL COMMENT 'ชื่อผู้ให้การแนะนำ' ,
  `S_agreement` VARCHAR(255) NULL COMMENT 'สัญญาข้อตกลง' ,
  `S_order` INT NULL COMMENT 'ลำดับ' ,
  `C_id` INT NULL COMMENT 'รหัสสถานประกอบการ' ,
  `P_id` INT NULL COMMENT 'รหัสผู้ติดต่อ' ,
  `Spf_id` INT NULL COMMENT 'รหัสสถานะ platform' ,
  PRIMARY KEY (`S_id`) ,
  INDEX `fk_service_company1_idx` (`C_id` ASC) ,
  INDEX `fk_service_status_platform1_idx` (`Spf_id` ASC) ,
  INDEX `fk_service_contact_person1_idx` (`P_id` ASC) ,
  CONSTRAINT `fk_service_company1`
    FOREIGN KEY (`C_id` )
    REFERENCES `mydb`.`company` (`C_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_service_status_platform1`
    FOREIGN KEY (`Spf_id` )
    REFERENCES `mydb`.`status_platform` (`Spf_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_service_contact_person1`
    FOREIGN KEY (`P_id` )
    REFERENCES `mydb`.`contact_person` (`P_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตาราง service platform';


-- -----------------------------------------------------
-- Table `mydb`.`co-research_irct`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`co-research_irct` (
  `Co_id` VARCHAR(50) NOT NULL COMMENT 'รหัสบริการ co-research หรือ irct' ,
  `Co_date` DATE NULL COMMENT 'วันที่รับบริการ ' ,
  `Co_name_pro` VARCHAR(255) NULL COMMENT 'ชื่อโครงการ' ,
  `Co_secter` VARCHAR(100) NULL COMMENT 'กลุ่มอุตสาหกรรม ' ,
  `Co_origin` TEXT NULL COMMENT 'ที่มาของโครงการ' ,
  `Co_objective` TEXT NULL COMMENT 'วัตถุประสงค์' ,
  `Co_reason` TEXT NULL COMMENT 'เหตุผลที่สนใจ' ,
  `Co_pro_together` TEXT NULL COMMENT 'งานวิจัยที่เคยทำร่วม' ,
  `Co_lab_re` TEXT NULL COMMENT 'รายละเอียดห้องปฏิบัติการ' ,
  `Co_result` VARCHAR(255) NULL COMMENT 'ผลที่คาดว่าจะได้รับ' ,
  `Co_dem` VARCHAR(255) NULL COMMENT 'การใช้ผลงานในเชิงพานิชย์' ,
  `Co_agreement` VARCHAR(255) NULL COMMENT 'สัญญาข้อตกลง' ,
  `Co_order` INT NULL COMMENT 'ลำดับ' ,
  `C_id` INT NULL COMMENT 'รหัสสถานประกอบการ' ,
  `P_id` INT NULL COMMENT 'รหัสผู้ติดต่อ' ,
  `Spf_id` INT NULL COMMENT 'รหัสสถานะ platform' ,
  PRIMARY KEY (`Co_id`) ,
  INDEX `fk_co-research_irct_status_platform1_idx` (`Spf_id` ASC) ,
  INDEX `fk_co-research_irct_company1_idx` (`C_id` ASC) ,
  INDEX `fk_co-research_irct_contact_person1_idx` (`P_id` ASC) ,
  CONSTRAINT `fk_co-research_irct_status_platform1`
    FOREIGN KEY (`Spf_id` )
    REFERENCES `mydb`.`status_platform` (`Spf_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_co-research_irct_company1`
    FOREIGN KEY (`C_id` )
    REFERENCES `mydb`.`company` (`C_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_co-research_irct_contact_person1`
    FOREIGN KEY (`P_id` )
    REFERENCES `mydb`.`contact_person` (`P_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'ตาราง co-research หรือ IRTC platform';


-- -----------------------------------------------------
-- Table `mydb`.`researchers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`researchers` (
  `Rec_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสนักวิจัย' ,
  `Rec_picture` VARCHAR(200) NULL COMMENT 'รูปนักวิจัย' ,
  `Rec_name_thai` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL COMMENT 'ชื่อภาษาไทย' ,
  `Rec_ln_thai` VARCHAR(255) NULL COMMENT 'นามสกุลภาษาไทย' ,
  `Rec_name_eng` VARCHAR(255) NULL COMMENT 'ชื่อภาษาอังกฤษ' ,
  `Rec_ln_eng` VARCHAR(255) NULL COMMENT 'นามสกุลภาษาอังกฤษ' ,
  `Rec_address` TEXT NULL COMMENT 'ที่อยู่' ,
  `Rec_phone` VARCHAR(50) NULL COMMENT 'เบอร์โทร' ,
  `Rec_mail` VARCHAR(255) NULL COMMENT 'อีเมลล์' ,
  `Rec_position` VARCHAR(200) NULL COMMENT 'ตำแหน่ง' ,
  `Rec_unit` VARCHAR(255) NULL COMMENT 'หน่วยงานสังกัด' ,
  `Rec_office` VARCHAR(100) NULL COMMENT 'สถานที่ทำงาน' ,
  `Rec_order` INT NULL COMMENT 'ลำดับ' ,
  `S_id` VARCHAR(50) NULL COMMENT 'รหัสบริการ service' ,
  `Spf_id` INT NULL COMMENT 'รหัสสถานะ platform' ,
  `Co_id` VARCHAR(50) NULL COMMENT 'รหัสบริการ co-research หรือ irtc' ,
  PRIMARY KEY (`Rec_id`) ,
  INDEX `fk_researchers_service1_idx` (`S_id` ASC) ,
  INDEX `fk_researchers_status_platform1_idx` (`Spf_id` ASC) ,
  INDEX `fk_researchers_co-research_irct1_idx` (`Co_id` ASC) ,
  CONSTRAINT `fk_researchers_service1`
    FOREIGN KEY (`S_id` )
    REFERENCES `mydb`.`service` (`S_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_researchers_status_platform1`
    FOREIGN KEY (`Spf_id` )
    REFERENCES `mydb`.`status_platform` (`Spf_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_researchers_co-research_irct1`
    FOREIGN KEY (`Co_id` )
    REFERENCES `mydb`.`co-research_irct` (`Co_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตารางนักวิจัย';


-- -----------------------------------------------------
-- Table `mydb`.`major`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`major` (
  `M_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสสาขาวิชา' ,
  `M_detail` VARCHAR(255) NULL COMMENT 'สาขาวิชา' ,
  `M_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`M_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางสาขาวิชา';


-- -----------------------------------------------------
-- Table `mydb`.`status_project`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`status_project` (
  `Sp_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสสถานะโครงการ' ,
  `Sp_status` VARCHAR(150) NULL COMMENT 'สถานะโครงการ' ,
  `Sp_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`Sp_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางสถานะโครงการ';


-- -----------------------------------------------------
-- Table `mydb`.`research`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`research` (
  `Re_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสผลงานวิจัย ' ,
  `Re_picture` VARCHAR(255) NULL COMMENT 'รูปภาพผลงานวิจัย ' ,
  `Re_id_patent` VARCHAR(50) NULL COMMENT 'เลขที่สิทธิบัตร' ,
  `Re_name` VARCHAR(255) NULL COMMENT 'ชื่อผลงานวิจัยภาษาไทย ' ,
  `Re_name_eng` VARCHAR(255) NULL COMMENT 'ชื่อผลงานวิจัยภาษาอังกฤษ' ,
  `Re_industry_group` VARCHAR(100) NULL COMMENT 'กลุ่มอุตสาหกรรม' ,
  `Re_start` YEAR NULL COMMENT 'ปีที่เริ่มทำโครงการ' ,
  `Re_end` YEAR NULL COMMENT 'ปีที่สิ้นสุดการทำโครงการ' ,
  `Re_status` VARCHAR(50) NULL COMMENT 'สถานภาพโครงการ' ,
  `Re_abstract` TEXT NULL COMMENT 'บทสรุป' ,
  `Re_finances_sp` VARCHAR(255) NULL COMMENT 'แหล่งเงินทุนอุทยานฯ' ,
  `Re_finances_b` VARCHAR(255) NULL COMMENT 'แหล่งเงินทุนบริษัท' ,
  `Re_ notes` VARCHAR(255) NULL COMMENT 'หมายเหตุ' ,
  `Re_order` INT NULL COMMENT 'ลำดับ' ,
  `Rec_id` INT NULL COMMENT 'รหัสนักวิจัย ' ,
  `M_id` INT NULL COMMENT 'รหัสหน่วยงานวิจัย' ,
  `Sp_id` INT NULL COMMENT 'รหัสสถานะโครงการ' ,
  PRIMARY KEY (`Re_id`) ,
  INDEX `fk_research_researchers1_idx` (`Rec_id` ASC) ,
  INDEX `fk_research_major1_idx` (`M_id` ASC) ,
  INDEX `fk_research_status_project1_idx` (`Sp_id` ASC) ,
  CONSTRAINT `fk_research_researchers1`
    FOREIGN KEY (`Rec_id` )
    REFERENCES `mydb`.`researchers` (`Rec_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_research_major1`
    FOREIGN KEY (`M_id` )
    REFERENCES `mydb`.`major` (`M_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_research_status_project1`
    FOREIGN KEY (`Sp_id` )
    REFERENCES `mydb`.`status_project` (`Sp_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตารางงานวิจัย';


-- -----------------------------------------------------
-- Table `mydb`.`research_award`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`research_award` (
  `Rec_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสรางวัลงานวิจัย' ,
  `Rea_type` VARCHAR(255) NULL COMMENT 'ประเภทรางวัลงานวิจัย' ,
  `Rea_date` DATE NULL COMMENT 'วันที่ได้รับรางวัล' ,
  `Rea_order` INT NULL COMMENT 'ลำดับ' ,
  `Re_id` INT NULL COMMENT 'รหัสงานวิจัย' ,
  PRIMARY KEY (`Rec_id`) ,
  INDEX `fk_research_award_research1_idx` (`Re_id` ASC) ,
  CONSTRAINT `fk_research_award_research1`
    FOREIGN KEY (`Re_id` )
    REFERENCES `mydb`.`research` (`Re_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตารางรางวัลงานวิจัย';


-- -----------------------------------------------------
-- Table `mydb`.`specialization`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`specialization` (
  `Sct_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสความเชี่ยวชาญ' ,
  `Sct_detail` VARCHAR(100) NULL COMMENT 'ความเชี่ยวชาญ' ,
  `Sct_order` INT NULL COMMENT 'ลำดับ' ,
  `Rec_id` INT NULL COMMENT 'รหัสนักวิจัย' ,
  PRIMARY KEY (`Sct_id`) ,
  INDEX `fk_specialization_researchers1_idx` (`Rec_id` ASC) ,
  CONSTRAINT `fk_specialization_researchers1`
    FOREIGN KEY (`Rec_id` )
    REFERENCES `mydb`.`researchers` (`Rec_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตารางความเชี่ยวชาญ';


-- -----------------------------------------------------
-- Table `mydb`.`slideshow`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`slideshow` (
  `Ss_id` INT NOT NULL AUTO_INCREMENT ,
  `Ss_picture` VARCHAR(255) NOT NULL ,
  `Ss_order` INT NULL ,
  PRIMARY KEY (`Ss_id`) )
ENGINE = InnoDB
COMMENT = 'ตาราง slideshow';


-- -----------------------------------------------------
-- Table `mydb`.`upload`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`upload` (
  `up_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสไฟล์รูปภาพ' ,
  `up_name` TEXT NULL COMMENT 'พาทไฟล์ข้อมูล' ,
  `up_id_data` INT NULL COMMENT 'รหัสไอดีทุกตารางที่อัพโหลดไฟล์' ,
  `up_id_type` INT NULL COMMENT 'ชนิดของไฟล์' ,
  `up_type_file` INT NULL COMMENT 'ประเภทของไฟล์' ,
  `up_date_cre` DATETIME NULL COMMENT 'วันที่อัพไฟล์ลงฐาน' ,
  PRIMARY KEY (`up_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางแบบฟอร์มดาวน์โหลด';


-- -----------------------------------------------------
-- Table `mydb`.`catalog`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`catalog` (
  `Cl_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสผลงานวิจัยพร้อมใช้ประโยชน์' ,
  `Cl_price` VARCHAR(50) NULL COMMENT 'ราคา' ,
  `Cl_property` VARCHAR(255) NULL COMMENT 'รายละเอียด' ,
  `Cl_contact` VARCHAR(50) NULL COMMENT 'เบอร์โทรศัพท์' ,
  `Cl_order` INT NULL COMMENT 'ลำดับ' ,
  `Re_id` INT NULL COMMENT 'รหัสผลงานวิจัย' ,
  `Rec_id` INT NULL COMMENT 'รหัสนักวิจัย' ,
  PRIMARY KEY (`Cl_id`) ,
  INDEX `fk_catalog_research1_idx` (`Re_id` ASC) ,
  INDEX `fk_catalog_researchers1_idx` (`Rec_id` ASC) ,
  CONSTRAINT `fk_catalog_research1`
    FOREIGN KEY (`Re_id` )
    REFERENCES `mydb`.`research` (`Re_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_catalog_researchers1`
    FOREIGN KEY (`Rec_id` )
    REFERENCES `mydb`.`researchers` (`Rec_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตาราง catalog ผลงานวิจัย';


-- -----------------------------------------------------
-- Table `mydb`.`deal`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`deal` (
  `D_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสการซื้อขายโครงการ' ,
  `D_name` VARCHAR(255) NULL COMMENT 'ชื่อโครงการ' ,
  `D_date` DATE NULL COMMENT 'วันที่ขาย' ,
  `D_price` FLOAT NULL COMMENT 'ราคาที่ขาย' ,
  `D_name_buyer` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL COMMENT 'ชื่อผู้ซื้อ' ,
  `D_contract` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL COMMENT 'สัญญาการซื้อขาย' ,
  `D_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`D_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางการซื้อขายงานวิจัย';


-- -----------------------------------------------------
-- Table `mydb`.`calendar`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`calendar` (
  `Cd_id` INT NOT NULL AUTO_INCREMENT ,
  `Cd_date` DATE NULL ,
  `Cd_time` TIME NULL ,
  `Cd_detail` VARCHAR(255) NULL ,
  `Cd_order` INT NULL ,
  PRIMARY KEY (`Cd_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางปฏิทินนัดหมาย';


-- -----------------------------------------------------
-- Table `mydb`.`plan`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`plan` (
  `Pl_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสการดำเนินงาน' ,
  `Pl_month1` INT NULL COMMENT 'เดือนที่1' ,
  `Pl_month2` INT NULL COMMENT 'เดือนที่2' ,
  `Pl_month3` INT NULL COMMENT 'เดือนที่3' ,
  `Pl_month4` INT NULL COMMENT 'เดือนที่4' ,
  `Pl_month5` INT NULL COMMENT 'เดือนที่5' ,
  `Pl_month6` INT NULL COMMENT 'เดือนที่6' ,
  `Pl_activity1` VARCHAR(200) NULL COMMENT 'กิจกรรมที่1' ,
  `Pl_activity2` VARCHAR(200) NULL COMMENT 'กิจกรรมที่2' ,
  `Pl_activity3` VARCHAR(200) NULL COMMENT 'กิจกรรมที่3' ,
  `Pl_activity4` VARCHAR(200) NULL COMMENT 'กิจกรรมที่4' ,
  `Pl_activity5` VARCHAR(200) NULL COMMENT 'กิจกรรมที่5' ,
  `Pl_activity6` VARCHAR(200) NULL COMMENT 'กิจกรรมที่6' ,
  `Pl_order` VARCHAR(45) NULL COMMENT 'ลำดับ' ,
  `Co_id` VARCHAR(50) NULL COMMENT 'รหัสบริการ co-research หรือ irtc' ,
  PRIMARY KEY (`Pl_id`) ,
  INDEX `fk_plan_co-research_irct1_idx` (`Co_id` ASC) ,
  CONSTRAINT `fk_plan_co-research_irct1`
    FOREIGN KEY (`Co_id` )
    REFERENCES `mydb`.`co-research_irct` (`Co_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'ตารางแผนการดำเนินงาน \nco-research หรือ IRTC platform';


-- -----------------------------------------------------
-- Table `mydb`.`responsible_person`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`responsible_person` (
  `Rp_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้รับผิดชอบโครงการ' ,
  `Rp_name` VARCHAR(100) NULL COMMENT 'ชื่อผู้รับผิดชอบ' ,
  `Rp_position` VARCHAR(100) NULL COMMENT 'ตำแหน่ง' ,
  `Rp_institute` VARCHAR(50) NULL COMMENT 'หน่วยงานรับผิดชอบ' ,
  `Rp_address` VARCHAR(255) NULL COMMENT 'ที่อยู่' ,
  `Rp_phone` VARCHAR(50) NULL COMMENT 'เบอร์โทรศัพท์' ,
  `Rp_fax` VARCHAR(50) NULL COMMENT 'แฟกซ์' ,
  `Rp_mail` VARCHAR(100) NULL COMMENT 'อีเมลล์' ,
  `Rp_order` INT NULL COMMENT 'ลำดับ' ,
  `Co_id` VARCHAR(50) NULL COMMENT 'รหัสบริการ co-research หรือ irct' ,
  PRIMARY KEY (`Rp_id`) ,
  INDEX `fk_responsible_person_co-research_irct1_idx` (`Co_id` ASC) ,
  CONSTRAINT `fk_responsible_person_co-research_irct1`
    FOREIGN KEY (`Co_id` )
    REFERENCES `mydb`.`co-research_irct` (`Co_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'ตารางผู้รับผิดชอบ co-research หรือ IRTC platform';


-- -----------------------------------------------------
-- Table `mydb`.`budget_action`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`budget_action` (
  `Bg_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสงบดำเนินการ' ,
  `Bg_action1` INT NULL COMMENT 'งบดำเนินการจากอุทยานฯ' ,
  `Bg_action2` INT NULL COMMENT 'งบดำเนินการ IN-CASH ' ,
  `Bg_action3` INT NULL COMMENT 'งบดำเนินการ IN-KIND ' ,
  `Bg_action4` INT NULL COMMENT 'รวมงบดำเนินการ' ,
  `Bg_reward1` INT NULL COMMENT 'ค่าตอบแทนจากอุทยานฯ' ,
  `Bg_reward2` INT NULL COMMENT 'ค่าตอบแทน IN-CASH ' ,
  `Bg_reward3` INT NULL COMMENT 'ค่าตอบแทน IN-KIND ' ,
  `Bg_reward4` INT NULL COMMENT 'รวมค่าตอบแทน' ,
  `Bg_wage1` INT NULL COMMENT 'ค่าจ้างจากอุทยานฯ' ,
  `Bg_wage2` INT NULL COMMENT 'ค่าจ้าง IN-CASH ' ,
  `Bg_wage3` INT NULL COMMENT 'ค่าจ้าง IN-KIND ' ,
  `Bg_wage4` INT NULL COMMENT 'รวมค่าจ้าง' ,
  `Bg_expenses1` INT NULL COMMENT 'ค่าใช้จ่ายจากอุทยานฯ' ,
  `Bg_expenses2` INT NULL COMMENT 'ค่าใช้จ่าย IN-CASH ' ,
  `Bg_expenses3` INT NULL COMMENT 'ค่าใช้จ่าย IN-KIND ' ,
  `Bg_expenses4` INT NULL COMMENT 'รวมค่าใช้จ่าย' ,
  `Bg_material1` INT NULL COMMENT 'ค่าวัสดุจากอุทยานฯ' ,
  `Bg_material2` INT NULL COMMENT 'ค่าวัสดุ IN-CASH ' ,
  `Bg_material3` INT NULL COMMENT 'ค่าวัสดุ IN-KIND ' ,
  `Bg_material4` INT NULL COMMENT 'รวมค่าวัสดุ' ,
  `Bg_living1` INT NULL COMMENT 'ค่าใช้สอยจากอุทยานฯ' ,
  `Bg_living2` INT NULL COMMENT 'ค่าใช้สอย IN-CASH ' ,
  `Bg_living3` INT NULL COMMENT 'ค่าใช้สอย IN-KIND ' ,
  `Bg_living4` INT NULL COMMENT 'รวมค่าใช้สอย' ,
  `Bg_management1` INT NULL COMMENT 'ค่าบริหารจัดการจากอุทยานฯ' ,
  `Bg_management2` INT NULL COMMENT 'ค่าบริหารจัดการ IN-CASH \\n' ,
  `Bg_management3` INT NULL COMMENT 'ค่าบริหารจัดการ IN-KIND \\n' ,
  `Bg_management4` INT NULL COMMENT 'รวมค่าบริหารจัดการ' ,
  `Bg_total1` INT NULL COMMENT 'รวมงบดำเนินการจากอุทยานฯ' ,
  `Bg_total2` INT NULL COMMENT 'รวมงบดำเนินการ IN-CASH \\n' ,
  `Bg_total3` INT NULL COMMENT 'รวมงบดำเนินการ IN-KIND \\n' ,
  `Bg_total4` INT NULL COMMENT 'รวมงบดำเนินการทั้งหมด' ,
  `Bg_order` INT NULL COMMENT 'ลำดับ' ,
  `Co_id` VARCHAR(50) NULL COMMENT 'รหัสบริการ co-research หรือ irct' ,
  PRIMARY KEY (`Bg_id`) ,
  INDEX `fk_budget_action_co-research_irct1_idx` (`Co_id` ASC) ,
  CONSTRAINT `fk_budget_action_co-research_irct1`
    FOREIGN KEY (`Co_id` )
    REFERENCES `mydb`.`co-research_irct` (`Co_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
COMMENT = 'ตารางงบการดำเนินงานของ\nco-research หรือ IRTC platform';


-- -----------------------------------------------------
-- Table `mydb`.`status_tbi`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`status_tbi` (
  `Tbi_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสสถานะของบริการ tbi' ,
  `Tbi_status` VARCHAR(100) NULL COMMENT 'สถานะของบริการ tbi' ,
  `Tbi_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`Tbi_id`) )
ENGINE = InnoDB
COMMENT = 'สถานะของ Tbi';


-- -----------------------------------------------------
-- Table `mydb`.`tbi_person`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`tbi_person` (
  `Tbi_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสข้อมูลส่วนบุคคลของบริการ tbi' ,
  `Tbi_picture` VARCHAR(200) NULL COMMENT 'รูปภาพ' ,
  `Tbi_title` VARCHAR(50) NULL COMMENT 'คำนำหน้าชื่อ' ,
  `Tbi_name` VARCHAR(150) NULL COMMENT 'ชื่อ' ,
  `Tbi_lastname` VARCHAR(150) NULL COMMENT 'นามสกุล' ,
  `Tbi_code` INT NULL COMMENT 'เลขบัตรประจำตัวประชาชน' ,
  `Tbi_birthday` DATE NULL COMMENT 'วันเกิด' ,
  `Tbi_age` INT NULL COMMENT 'อายุ' ,
  `Tbi_ethnicity` VARCHAR(100) NULL COMMENT 'เชื้อชาติ' ,
  `Tbi_ethnicity_etc` VARCHAR(100) NULL COMMENT 'เชื้อชาติอื่นๆ' ,
  `Tbi_nationality` VARCHAR(100) NULL COMMENT 'ศาสนา' ,
  `Tbi_nationality_etc` VARCHAR(100) NULL COMMENT 'ศาสนาอื่นๆ' ,
  `Tbi_tell` VARCHAR(50) NULL COMMENT 'เบอร์โทร' ,
  `Tbi_address` VARCHAR(255) NULL COMMENT 'ที่อยู่' ,
  `Tbi_fax` VARCHAR(50) NULL COMMENT 'แฟกซ์' ,
  `Tbi_phone` VARCHAR(50) NULL COMMENT 'เบอร์โทรศัพท์มือถือ' ,
  `Tbi_mail` VARCHAR(100) NULL COMMENT 'อีเมลล์' ,
  `Tbi_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`Tbi_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางข้อมูลส่วนบุคคลของ Tbi';


-- -----------------------------------------------------
-- Table `mydb`.`tbi_business`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`tbi_business` (
  `B_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสข้อมูลเกี่ยวกับธุรกิจ' ,
  `B_concept` VARCHAR(100) NULL COMMENT 'แนวคิดเกี่ยวกับธุรกิจ' ,
  `B_interest` VARCHAR(100) NULL COMMENT 'ธุรกิจที่สนใจ' ,
  `B_manufacture` VARCHAR(200) NULL COMMENT 'การผลิต' ,
  `B_service` VARCHAR(200) NULL COMMENT 'การบริการ' ,
  `B_wholesale` VARCHAR(200) NULL COMMENT 'การค้าส่ง' ,
  `B_retail` VARCHAR(200) NULL COMMENT 'การค้าปลีก' ,
  `B_business_plan` VARCHAR(255) NULL COMMENT 'แผนธุรกิจ' ,
  `B_goal` VARCHAR(255) NULL COMMENT 'เป้าหมายในการเริ่มธุรกิจ' ,
  `B_goal_month` INT NULL COMMENT 'เป้าหมาย (เดือน)' ,
  `B_goal_year` INT NULL COMMENT 'เป้าหมาย (ปี)' ,
  `B_investment` VARCHAR(100) NULL COMMENT 'เงินลงทุนในปีแรก' ,
  `B_resources` VARCHAR(200) NULL COMMENT 'แหล่งเงินทุน' ,
  `B_balance` VARCHAR(100) NULL COMMENT 'ยอดเงิน' ,
  `B_source` VARCHAR(200) NULL COMMENT 'แหล่งที่มา' ,
  `B_employee` VARCHAR(100) NULL COMMENT 'การจ้างลูกจ้าง' ,
  `B_emp_sum` INT NULL COMMENT 'จำนวนลูกจ้าง' ,
  `B_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`B_id`) )
ENGINE = InnoDB
COMMENT = 'ตารางข้อมูลที่เกี่ยวกับการจัดตั้งธรกิจ';


-- -----------------------------------------------------
-- Table `mydb`.`tbi_service`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`tbi_service` (
  `Tbi_id2` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสข้อมูลบริการที่ต้องการจากบริการ tbi' ,
  `Tbi_investment` VARCHAR(200) NULL COMMENT 'แหล่งเงินทุน' ,
  `Tbi_investment_etc` VARCHAR(200) NULL COMMENT 'แหล่งเงินทุนอื่นๆ' ,
  `Tbi_train` VARCHAR(200) NULL COMMENT 'การอบรมให้ความรู้' ,
  `Tbi_train_etc` VARCHAR(200) NULL COMMENT 'การอบรมให้ความรู้อื่นๆ' ,
  `Tbi_research` VARCHAR(200) NULL COMMENT 'การวิจัย' ,
  `Tbi_research_etc` VARCHAR(200) NULL COMMENT 'การวิจัยอื่นๆ' ,
  `Tbi_service` VARCHAR(200) NULL COMMENT 'การให้บริการระบบ' ,
  `Tbi_service_etc` VARCHAR(200) NULL COMMENT 'การให้บริการระบบอื่นๆ' ,
  `Tbi_counsel` VARCHAR(200) NULL COMMENT 'การให้คำปรึกษา' ,
  `Tbi_counsel_etc` VARCHAR(200) NULL COMMENT 'การให้คำปรึกษาอื่นๆ' ,
  `Tbi_lab` VARCHAR(200) NULL COMMENT 'การใช้ห้องปฏิบัติการ' ,
  `Tbi_lab_etc` VARCHAR(200) NULL COMMENT 'การใช้ห้องปฏิบัติการอื่นๆ' ,
  `Tbi_certification` VARCHAR(200) NULL COMMENT 'การรับรองมาตรฐาน' ,
  `Tbi_certification_iso` VARCHAR(200) NULL COMMENT 'การรับรองมาตรฐาน iso' ,
  `Tbi_certification_etc` VARCHAR(200) NULL COMMENT 'การรับรองมาตรฐานอื่นๆ' ,
  `Tbi_announce` VARCHAR(200) NULL COMMENT 'การประชาสัมพันธ์' ,
  `Tbi_announce_etc` VARCHAR(200) NULL COMMENT 'การประชาสัมพันธ์อื่นๆ' ,
  `Tbi_coordinate` VARCHAR(200) NULL COMMENT 'การประสานงาน' ,
  `Tbi_coordinate_etc` VARCHAR(200) NULL COMMENT 'การประสานงานอื่นๆ' ,
  `Tbi_funding` VARCHAR(200) NULL COMMENT 'การสนับสนุนเงิน' ,
  `Tbi_funding_etc` VARCHAR(200) NULL COMMENT 'การสนับสนุนเงินอื่นๆ' ,
  `Tbi_asset` VARCHAR(200) NULL COMMENT 'การจัดการทรัพย์สิน' ,
  `Tbi_asset_etc` VARCHAR(200) NULL COMMENT 'การจัดการทรัพย์สินอื่นๆ' ,
  `Tbi_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`Tbi_id2`) )
ENGINE = InnoDB
COMMENT = 'ตารางบริการที่ต้องการของ Tbi';


-- -----------------------------------------------------
-- Table `mydb`.`tbi_person1`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`tbi_person1` (
  `Tbi_id1` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสข้อมูลส่วนบุคคลของบริการ tbi (ต่อ)' ,
  `Tbi_education` VARCHAR(100) NULL COMMENT 'การศึกษา' ,
  `Tbi_year` VARCHAR(50) NULL COMMENT 'ปีที่สำเร็จการศึกษา' ,
  `Tbi_major` VARCHAR(100) NULL COMMENT 'สาขาวิชา' ,
  `Tbi_university` VARCHAR(100) NULL COMMENT 'สถาบัน' ,
  `Tbi_degree` VARCHAR(100) NULL COMMENT 'ระดับการศึกษา' ,
  `Tbi_degree_etc` VARCHAR(100) NULL COMMENT 'ระดับการศึกษาอื่นๆ' ,
  `Tbi_occupation` VARCHAR(255) NULL COMMENT 'อาชีพ' ,
  `Tbi_notwork_time` VARCHAR(50) NULL COMMENT 'จำนวนปีที่ทำงาน' ,
  `Tbi_emp_company` VARCHAR(100) NULL COMMENT 'บริษัทที่ทำงาน' ,
  `Tbi_type_business` VARCHAR(100) NULL COMMENT 'ประเภทธุรกิจ' ,
  `Tbi_official` VARCHAR(100) NULL COMMENT 'สังกัด' ,
  `Tbi_etc` VARCHAR(100) NULL COMMENT 'อื่นๆ' ,
  `Tbi_owners` VARCHAR(100) NULL COMMENT 'ประสบการณ์' ,
  `Tbi_owners_year` VARCHAR(50) NULL COMMENT 'จำนวนปีที่เป็นเจ้าของธุรกิจ' ,
  `Tbi_order` INT NULL COMMENT 'ลำดับ' ,
  PRIMARY KEY (`Tbi_id1`) )
ENGINE = InnoDB
COMMENT = 'ตารางข้อมูลส่วนบุคคลของ Tbi (ต่อ)';


-- -----------------------------------------------------
-- Table `mydb`.`tbi`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`tbi` (
  `Tbi_id3` VARCHAR(50) NOT NULL COMMENT 'รหัสข้อมูลบริการ tbi' ,
  `Tbi_id4` VARCHAR(50) NULL COMMENT 'เลขที่บริการ tbi' ,
  `Tbi_date` DATE NULL COMMENT 'วันที่รับบริการ' ,
  `Tbi_order` INT NULL COMMENT 'ลำดับ' ,
  `Tbi_name` VARCHAR(200) NULL COMMENT 'ชื่อผู้สมัคร' ,
  `Tbi_date_register` DATE NULL COMMENT 'วันที่สมัคร' ,
  `Tbi_evidence_ register` VARCHAR(100) NULL COMMENT 'หลักฐานประกอบการยื่นสมัคร' ,
  `Tbi_code` INT NULL COMMENT 'เลขบัตรประจำตัวประชาชน' ,
  `Tbi_ education` VARCHAR(200) NULL COMMENT 'วุฒิการศึกษา' ,
  `Tbi_ department` VARCHAR(200) NULL COMMENT 'ชื่อหน่วยงาน' ,
  `Tbi_ appointment` VARCHAR(200) NULL COMMENT 'การนัดหมาย' ,
  `Tbi_date_ concept` DATE NULL COMMENT 'วันที่นำเสนอแนวคิด' ,
  `Tbi_date_ meet` DATE NULL COMMENT 'วันที่พบสถานประกอบการธุรกิจ' ,
  `Tbi_ practicality` VARCHAR(200) NULL COMMENT 'แนวปฏิบัติของ tbi' ,
  `Tbi_inspector` VARCHAR(200) NULL COMMENT 'ชื่อผู้ตรวจใบสมัคร' ,
  `Tbi_date_inspect` DATE NULL COMMENT 'วันที่ตรวจใบสมัคร' ,
  `Tbi_id1` INT NULL COMMENT 'รหัสข้อมูลส่วนบุคคลของบริการ tbi (ต่อ)' ,
  `Tbi_id` INT NULL COMMENT 'รหัสข้อมูลส่วนบุคคลของบริการ tbi' ,
  `B_id` INT NULL COMMENT 'รหัสข้อมูลเกี่ยวกับธุรกิจ' ,
  `Tbi_id5` INT NULL COMMENT 'รหัสสถานะ tbi' ,
  `Spf_id` INT NULL COMMENT 'รหัสสถานะ platform' ,
  `Tbi_id2` INT NULL ,
  PRIMARY KEY (`Tbi_id3`) ,
  INDEX `fk_tbi_tbi_person11_idx` (`Tbi_id1` ASC) ,
  INDEX `fk_tbi_tbi_person1_idx` (`Tbi_id` ASC) ,
  INDEX `fk_tbi_tbi_business1_idx` (`B_id` ASC) ,
  INDEX `fk_tbi_status_tbi1_idx` (`Tbi_id5` ASC) ,
  INDEX `fk_tbi_status_platform1_idx` (`Spf_id` ASC) ,
  INDEX `fk_tbi_tbi_service1_idx` (`Tbi_id2` ASC) ,
  CONSTRAINT `fk_tbi_tbi_person11`
    FOREIGN KEY (`Tbi_id1` )
    REFERENCES `mydb`.`tbi_person1` (`Tbi_id1` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_tbi_tbi_person1`
    FOREIGN KEY (`Tbi_id` )
    REFERENCES `mydb`.`tbi_person` (`Tbi_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_tbi_tbi_business1`
    FOREIGN KEY (`B_id` )
    REFERENCES `mydb`.`tbi_business` (`B_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_tbi_status_tbi1`
    FOREIGN KEY (`Tbi_id5` )
    REFERENCES `mydb`.`status_tbi` (`Tbi_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_tbi_status_platform1`
    FOREIGN KEY (`Spf_id` )
    REFERENCES `mydb`.`status_platform` (`Spf_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_tbi_tbi_service1`
    FOREIGN KEY (`Tbi_id2` )
    REFERENCES `mydb`.`tbi_service` (`Tbi_id2` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตาราง Tbi platform';


-- -----------------------------------------------------
-- Table `mydb`.`file`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`file` (
  `F_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสไฟล์เอกสารแนบ' ,
  `F_1` VARCHAR(100) NULL COMMENT 'หนังสือรับรองการจดทะเบียนนิติบุคคล\\n' ,
  `F_2` VARCHAR(100) NULL COMMENT 'สำเนาบัตรประชาชนของผู้มีสิทธิลงนาม' ,
  `F_3` VARCHAR(100) NULL COMMENT 'หนังสือมอบอำนาจ' ,
  `F_4` VARCHAR(100) NULL COMMENT 'สำเนาบัตรประชาชน/สำเนาบัตรข้าราชการของ\\nนักวิจัย' ,
  `F_order` INT NULL COMMENT 'ลำดับ' ,
  `S_id` VARCHAR(50) NULL COMMENT 'รหัสบริการ service' ,
  `Co_id` VARCHAR(50) NULL COMMENT 'รหัสบริการ co-research หรือ irtc' ,
  `Spf_id` INT NULL COMMENT 'รหัสสถานะ platform' ,
  PRIMARY KEY (`F_id`) ,
  INDEX `fk_file_service1_idx` (`S_id` ASC) ,
  INDEX `fk_file_co-research_irct1_idx` (`Co_id` ASC) ,
  INDEX `fk_file_status_platform1_idx` (`Spf_id` ASC) ,
  CONSTRAINT `fk_file_service1`
    FOREIGN KEY (`S_id` )
    REFERENCES `mydb`.`service` (`S_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_file_co-research_irct1`
    FOREIGN KEY (`Co_id` )
    REFERENCES `mydb`.`co-research_irct` (`Co_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_file_status_platform1`
    FOREIGN KEY (`Spf_id` )
    REFERENCES `mydb`.`status_platform` (`Spf_id` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตารางไฟล์แนบ';


-- -----------------------------------------------------
-- Table `mydb`.`budget_invest`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`budget_invest` (
  `Bg_in_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสงบลงทุน' ,
  `Bg_in_invest1` INT NULL COMMENT 'งบลงทุนจากอุทยานฯ' ,
  `Bg_in_invest2` INT NULL COMMENT 'งบลงทุน IN-CASH ' ,
  `Bg_in_invest3` INT NULL COMMENT 'งบลงทุน IN-KIND ' ,
  `Bg_in_invest4` INT NULL COMMENT 'รวมงบลงทุน' ,
  `Bg_in_durable1` INT NULL COMMENT 'ค่าครุภัณฑ์จากอุทยานฯ' ,
  `Bg_in_durable2` INT NULL COMMENT 'ค่าครุภัณฑ์ IN-CASH ' ,
  `Bg_in_durable3` INT NULL COMMENT 'ค่าครุภัณฑ์ IN-KIND ' ,
  `Bg_in_durable4` INT NULL COMMENT 'รวมค่าครุภัณฑ์' ,
  `Bg_in_building1` INT NULL COMMENT 'ค่าก่อสร้างจากอุทยานฯ' ,
  `Bg_in_building2` INT NULL COMMENT 'ค่าก่อสร้าง IN-CASH ' ,
  `Bg_in_building3` INT NULL COMMENT 'ค่าก่อสร้าง IN-KIND ' ,
  `Bg_in_building4` INT NULL COMMENT 'รวมค่าก่อสร้าง' ,
  `Bg_in_total1` INT NULL COMMENT 'รวมงบลงทุนจากอุทยานฯ' ,
  `Bg_in_total2` INT NULL COMMENT 'รวมงบลงทุน IN-CASH ' ,
  `Bg_in_total3` INT NULL COMMENT 'รวมงบลงทุน IN-KIND ' ,
  `Bg_in_total4` INT NULL COMMENT 'รวมงบลงทุนทั้งหมด' ,
  `Bg_in_sum1` INT NULL COMMENT 'รวมงบงบประมาณทั้งหมดจากอุทยานฯ' ,
  `Bg_in_sum2` INT NULL COMMENT 'รวมงบงบประมาณทั้งหมด IN-CASH ' ,
  `Bg_in_sum3` INT NULL COMMENT 'รวมงบงบประมาณทั้งหมด IN-KIND ' ,
  `Bg_in_sum4` INT NULL COMMENT 'รวมงบงบประมาณทั้งหมด' ,
  `Bg_in_order` INT NULL COMMENT 'ลำดับ' ,
  `Co_id` VARCHAR(50) NULL COMMENT 'รหัสบริการ co-research หรือ irct' ,
  PRIMARY KEY (`Bg_in_id`) ,
  INDEX `fk_budget_invest_co-research_irct1_idx` (`Co_id` ASC) ,
  CONSTRAINT `fk_budget_invest_co-research_irct1`
    FOREIGN KEY (`Co_id` )
    REFERENCES `mydb`.`co-research_irct` (`Co_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'ตารางงบลงทุนของ\nco-research หรือ IRTC platform';


-- -----------------------------------------------------
-- Table `mydb`.`file1`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`file1` (
  `F_id` INT NOT NULL AUTO_INCREMENT COMMENT 'รหัสไฟล์เอกสารแนบ' ,
  `F_1` VARCHAR(100) NULL COMMENT 'หนังสือรับรองการจดทะเบียนนิติบุคคล\\n' ,
  `F_2` VARCHAR(100) NULL COMMENT 'สำเนาบัตรประชาชนของผู้มีสิทธิลงนาม' ,
  `F_3` VARCHAR(100) NULL COMMENT 'หนังสือมอบอำนาจ' ,
  `F_4` VARCHAR(100) NULL COMMENT 'สำเนาบัตรประชาชน/สำเนาบัตรข้าราชการของ\\nนักวิจัย' ,
  `F_order` INT NULL COMMENT 'ลำดับ' ,
  `Tbi_id3` VARCHAR(50) NULL COMMENT 'รหัสข้อมูลบริการ tbi' ,
  PRIMARY KEY (`F_id`) ,
  INDEX `fk_file1_tbi1_idx` (`Tbi_id3` ASC) ,
  CONSTRAINT `fk_file1_tbi1`
    FOREIGN KEY (`Tbi_id3` )
    REFERENCES `mydb`.`tbi` (`Tbi_id3` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'ตารางไฟล์แนบ';



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
