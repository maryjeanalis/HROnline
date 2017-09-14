<?php
	include('auth.php');
	include('connect.php');

	$uploaddir = '../../andersongroup.ph/application/csv/';
	$uploadfile = $uploaddir . basename($_FILES['csvhere']['name']);
	$mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');

	if(isset($_POST['loadtest'])){
		/*dynamic sql |imfrom*/
		$_SESSION['uploadnotice'] = "";
		$sql = '';
		if($_POST['fromsource'] == "application"){
			
			$prev = "google.php";
			 $sql =	"CREATE TEMPORARY TABLE tbl_tmp LIKE tbl_application;";
                    
                    $sql2 = "LOAD DATA LOCAL INFILE '".$uploadfile."'
                            INTO TABLE tbl_tmp
                            FIELDS TERMINATED BY ','
                            OPTIONALLY ENCLOSED BY '\"' 
                            IGNORE 1 LINES
                            (POSITION, SHIFTING_SCHEDULE, WEEKENDS_HOLIDAYS, EMPLOYMENT_DATE, NAME, NICKNAME, AGE, `DATE OF BIRTH`, `PLACE OF BIRTH`, GENDER, `CIVIL STATUS`, CITIZENSHIP, `CURRENT ADDRESS`, `CONTACT NO.`, `EMAIL ADDRESS`, `SPOUSE'S NAME`, `SPOUSE'S OCCUPATION`, `FATHER'S NAME`, `MOTHER'S MAIDEN NAME`, `1. Inclusive Dates`, `1.1 Employer's Name, Address and Phone`, `1.2 Position Title`, `1.3 Name_Position and Contact No. of Immediate Supervisor`, `1.4 Monthly Salary`, `1.5 Reason for Leaving`, `2. Inclusive Dates`, `2.1 Employer's Name, Address and Phone`, `2.2 Position Title`, `2.3 Name_Position and Contact No. of Immediate Supervisor`, `2.4 Monthly Salary`, `2.5 Reason for Leaving`, `3. Inclusive Dates`, `3.1 Employer's Name, Address and Phone`, `3.2 Position Title`, `3.3 Name_Position and Contact No. of Immediate Supervisor`, `3.4 Monthly Salary`, `3.5 Reason for Leaving`, `4. Inclusive Dates`, `4.1 Employer's Name, Address and Phone`, `4.2 Position Title`, `4.3 Name_Position and Contact No. of Immediate Supervisor`, `4.4 Monthly Salary`, `4.5 Reason for Leaving`, `5. Inclusive Dates`, `5.1 Employer's Name, Address and Phone`, `5.2 Position Title`, `5.3 Name_Position and Contact No. of Immediate Supervisor`, `5.4 Monthly Salary`, `5.5 Reason for Leaving`, `ELEM_Name of School`, `ELEM_Year Graduated`, `ELEM_Highest Grade/ Level/ Units Earned`, `ELEM_Inclusive Dates of Attendance`, `ELEM_Scholarship/ Academic Honors Received`, `HS_Name of School`, `HS_Year Graduated`, `HS_Highest Grade/ Level/ Units Earned`, `HS_Inclusive Dates of Attendance`, `HS_Scholarship/ Academic Honors Received`, `COL_Name of School`, `COL_Degree Course`, `COL_Graduated`, `COL_Year Graduated`, `COL_Highest Grade/ Level/ Units Earned`, `COL_Inclusive Dates of Attendance`, `COL_Scholarship/ Academic Honors Received`, `FORMALLY_CHARGED`, `ADMINISTRARIVE_OFFENSE`, `CRIME_VIOLATION`, `MODES`, `REF_Name`, `REF_Address`, `REF_ContactNum`, `CERTIFY`, `SALARY`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `PROVINCIAL_ADDRESS`, `HOME_TELNUM`, `SKYPE_USERID`, `CONTACT NAME`, `CONTACT DETAILS`, `MOBILE_NUMBER`, `FATHER PLACEBIRTH`, `MOTHER PLACEBIRTH`, `RELIGION`, `REF_Name2`, `REF_Address2`, `REF_ContactNum2`, `REF_Name3`, `REF_Address3`, `REF_ContactNum3`, `GRAD_Name of School`, `GRAD_Degree Course`, `GRAD_Graduated?`, `GRAD_Year Graduated`, `GRAD_Highest Grade/ Level/ Units Earned`, `GRAD_Inclusive Dates of Attendance`, `GRAD_Scholarship`, `PROF_License1`, `PROF_Rating1`, `PROF_DateGranted1`, `PROF_Institution1`, `PROF_Licensennum1`, `PROF_DateReleased1`, `PROF_License2`, `PROF_Rating2`, `PROF_DateGranted2`, `PROF_Institution2`, `PROF_Licensennum2`, `PROF_DateReleased2`, `PROF_License3`, `PROF_Rating3`, `PROF_DateGranted3`, `PROF_Institution3`, `PROF_Licensennum3`, `PROF_DateReleased3`);";
                    
                $sql3 =" UPDATE tbl_tmp SET `source` = 'application';";
                            
                      $sql4 ="INSERT IGNORE INTO `tbl_application` (POSITION, SHIFTING_SCHEDULE, WEEKENDS_HOLIDAYS, EMPLOYMENT_DATE, NAME, NICKNAME, AGE, `DATE OF BIRTH`, `PLACE OF BIRTH`, GENDER, `CIVIL STATUS`, CITIZENSHIP, `CURRENT ADDRESS`, `CONTACT NO.`, `EMAIL ADDRESS`, `SPOUSE'S NAME`, `SPOUSE'S OCCUPATION`, `FATHER'S NAME`, `MOTHER'S MAIDEN NAME`, `1. Inclusive Dates`, `1.1 Employer's Name, Address and Phone`, `1.2 Position Title`, `1.3 Name_Position and Contact No. of Immediate Supervisor`, `1.4 Monthly Salary`, `1.5 Reason for Leaving`, `2. Inclusive Dates`, `2.1 Employer's Name, Address and Phone`, `2.2 Position Title`, `2.3 Name_Position and Contact No. of Immediate Supervisor`, `2.4 Monthly Salary`, `2.5 Reason for Leaving`, `3. Inclusive Dates`, `3.1 Employer's Name, Address and Phone`, `3.2 Position Title`, `3.3 Name_Position and Contact No. of Immediate Supervisor`, `3.4 Monthly Salary`, `3.5 Reason for Leaving`, `4. Inclusive Dates`, `4.1 Employer's Name, Address and Phone`, `4.2 Position Title`, `4.3 Name_Position and Contact No. of Immediate Supervisor`, `4.4 Monthly Salary`, `4.5 Reason for Leaving`, `5. Inclusive Dates`, `5.1 Employer's Name, Address and Phone`, `5.2 Position Title`, `5.3 Name_Position and Contact No. of Immediate Supervisor`, `5.4 Monthly Salary`, `5.5 Reason for Leaving`, `ELEM_Name of School`, `ELEM_Year Graduated`, `ELEM_Highest Grade/ Level/ Units Earned`, `ELEM_Inclusive Dates of Attendance`, `ELEM_Scholarship/ Academic Honors Received`, `HS_Name of School`, `HS_Year Graduated`, `HS_Highest Grade/ Level/ Units Earned`, `HS_Inclusive Dates of Attendance`, `HS_Scholarship/ Academic Honors Received`, `COL_Name of School`, `COL_Degree Course`, `COL_Graduated`, `COL_Year Graduated`, `COL_Highest Grade/ Level/ Units Earned`, `COL_Inclusive Dates of Attendance`, `COL_Scholarship/ Academic Honors Received`, `FORMALLY_CHARGED`, `ADMINISTRARIVE_OFFENSE`, `CRIME_VIOLATION`, `MODES`, `REF_Name`, `REF_Address`, `REF_ContactNum`, `CERTIFY`, `SALARY`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `PROVINCIAL_ADDRESS`, `HOME_TELNUM`, `SKYPE_USERID`, `CONTACT NAME`, `CONTACT DETAILS`, `MOBILE_NUMBER`, `FATHER PLACEBIRTH`, `MOTHER PLACEBIRTH`, `RELIGION`, `REF_Name2`, `REF_Address2`, `REF_ContactNum2`, `REF_Name3`, `REF_Address3`, `REF_ContactNum3`, `GRAD_Name of School`, `GRAD_Degree Course`, `GRAD_Graduated?`, `GRAD_Year Graduated`, `GRAD_Highest Grade/ Level/ Units Earned`, `GRAD_Inclusive Dates of Attendance`, `GRAD_Scholarship`, `PROF_License1`, `PROF_Rating1`, `PROF_DateGranted1`, `PROF_Institution1`, `PROF_Licensennum1`, `PROF_DateReleased1`, `PROF_License2`, `PROF_Rating2`, `PROF_DateGranted2`, `PROF_Institution2`, `PROF_Licensennum2`, `PROF_DateReleased2`, `PROF_License3`, `PROF_Rating3`, `PROF_DateGranted3`, `PROF_Institution3`, `PROF_Licensennum3`, `PROF_DateReleased3`, `source`)
                            
                            SELECT POSITION, SHIFTING_SCHEDULE, WEEKENDS_HOLIDAYS, EMPLOYMENT_DATE, NAME, NICKNAME, AGE, `DATE OF BIRTH`, `PLACE OF BIRTH`, GENDER, `CIVIL STATUS`, CITIZENSHIP, `CURRENT ADDRESS`, `CONTACT NO.`, `EMAIL ADDRESS`, `SPOUSE'S NAME`, `SPOUSE'S OCCUPATION`, `FATHER'S NAME`, `MOTHER'S MAIDEN NAME`, `1. Inclusive Dates`, `1.1 Employer's Name, Address and Phone`, `1.2 Position Title`, `1.3 Name_Position and Contact No. of Immediate Supervisor`, `1.4 Monthly Salary`, `1.5 Reason for Leaving`, `2. Inclusive Dates`, `2.1 Employer's Name, Address and Phone`, `2.2 Position Title`, `2.3 Name_Position and Contact No. of Immediate Supervisor`, `2.4 Monthly Salary`, `2.5 Reason for Leaving`, `3. Inclusive Dates`, `3.1 Employer's Name, Address and Phone`, `3.2 Position Title`, `3.3 Name_Position and Contact No. of Immediate Supervisor`, `3.4 Monthly Salary`, `3.5 Reason for Leaving`, `4. Inclusive Dates`, `4.1 Employer's Name, Address and Phone`, `4.2 Position Title`, `4.3 Name_Position and Contact No. of Immediate Supervisor`, `4.4 Monthly Salary`, `4.5 Reason for Leaving`, `5. Inclusive Dates`, `5.1 Employer's Name, Address and Phone`, `5.2 Position Title`, `5.3 Name_Position and Contact No. of Immediate Supervisor`, `5.4 Monthly Salary`, `5.5 Reason for Leaving`, `ELEM_Name of School`, `ELEM_Year Graduated`, `ELEM_Highest Grade/ Level/ Units Earned`, `ELEM_Inclusive Dates of Attendance`, `ELEM_Scholarship/ Academic Honors Received`, `HS_Name of School`, `HS_Year Graduated`, `HS_Highest Grade/ Level/ Units Earned`, `HS_Inclusive Dates of Attendance`, `HS_Scholarship/ Academic Honors Received`, `COL_Name of School`, `COL_Degree Course`, `COL_Graduated`, `COL_Year Graduated`, `COL_Highest Grade/ Level/ Units Earned`, `COL_Inclusive Dates of Attendance`, `COL_Scholarship/ Academic Honors Received`, `FORMALLY_CHARGED`, `ADMINISTRARIVE_OFFENSE`, `CRIME_VIOLATION`, `MODES`, `REF_Name`, `REF_Address`, `REF_ContactNum`, `CERTIFY`, `SALARY`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `PROVINCIAL_ADDRESS`, `HOME_TELNUM`, `SKYPE_USERID`, `CONTACT NAME`, `CONTACT DETAILS`, `MOBILE_NUMBER`, `FATHER PLACEBIRTH`, `MOTHER PLACEBIRTH`, `RELIGION`, `REF_Name2`, `REF_Address2`, `REF_ContactNum2`, `REF_Name3`, `REF_Address3`, `REF_ContactNum3`, `GRAD_Name of School`, `GRAD_Degree Course`, `GRAD_Graduated?`, `GRAD_Year Graduated`, `GRAD_Highest Grade/ Level/ Units Earned`, `GRAD_Inclusive Dates of Attendance`, `GRAD_Scholarship`, `PROF_License1`, `PROF_Rating1`, `PROF_DateGranted1`, `PROF_Institution1`, `PROF_Licensennum1`, `PROF_DateReleased1`, `PROF_License2`, `PROF_Rating2`, `PROF_DateGranted2`, `PROF_Institution2`, `PROF_Licensennum2`, `PROF_DateReleased2`, `PROF_License3`, `PROF_Rating3`, `PROF_DateGranted3`, `PROF_Institution3`, `PROF_Licensennum3`, `PROF_DateReleased3`, `source`
                            FROM tbl_tmp;";
                            
                       $sql5 ="DROP TEMPORARY TABLE tbl_tmp;";
		}
        
        else if($_POST['fromsource'] == "indeed"){

                    $prev = "google.php";
                    $sql =	"CREATE TEMPORARY TABLE tbl_tmp LIKE tbl_application;";
                    
                    $sql2 = "LOAD DATA LOCAL INFILE '".$uploadfile."'
                            INTO TABLE tbl_tmp
                            FIELDS TERMINATED BY ','
                            OPTIONALLY ENCLOSED BY '\"' 
                            IGNORE 1 LINES
                            (POSITION, SHIFTING_SCHEDULE, WEEKENDS_HOLIDAYS, EMPLOYMENT_DATE, NAME, NICKNAME, AGE, `DATE OF BIRTH`, `PLACE OF BIRTH`, GENDER, `CIVIL STATUS`, CITIZENSHIP, `CURRENT ADDRESS`, `CONTACT NO.`, `EMAIL ADDRESS`, `SPOUSE'S NAME`, `SPOUSE'S OCCUPATION`, `FATHER'S NAME`, `MOTHER'S MAIDEN NAME`, `1. Inclusive Dates`, `1.1 Employer's Name, Address and Phone`, `1.2 Position Title`, `1.3 Name_Position and Contact No. of Immediate Supervisor`, `1.4 Monthly Salary`, `1.5 Reason for Leaving`, `2. Inclusive Dates`, `2.1 Employer's Name, Address and Phone`, `2.2 Position Title`, `2.3 Name_Position and Contact No. of Immediate Supervisor`, `2.4 Monthly Salary`, `2.5 Reason for Leaving`, `3. Inclusive Dates`, `3.1 Employer's Name, Address and Phone`, `3.2 Position Title`, `3.3 Name_Position and Contact No. of Immediate Supervisor`, `3.4 Monthly Salary`, `3.5 Reason for Leaving`, `4. Inclusive Dates`, `4.1 Employer's Name, Address and Phone`, `4.2 Position Title`, `4.3 Name_Position and Contact No. of Immediate Supervisor`, `4.4 Monthly Salary`, `4.5 Reason for Leaving`, `5. Inclusive Dates`, `5.1 Employer's Name, Address and Phone`, `5.2 Position Title`, `5.3 Name_Position and Contact No. of Immediate Supervisor`, `5.4 Monthly Salary`, `5.5 Reason for Leaving`, `ELEM_Name of School`, `ELEM_Year Graduated`, `ELEM_Highest Grade/ Level/ Units Earned`, `ELEM_Inclusive Dates of Attendance`, `ELEM_Scholarship/ Academic Honors Received`, `HS_Name of School`, `HS_Year Graduated`, `HS_Highest Grade/ Level/ Units Earned`, `HS_Inclusive Dates of Attendance`, `HS_Scholarship/ Academic Honors Received`, `COL_Name of School`, `COL_Degree Course`, `COL_Graduated`, `COL_Year Graduated`, `COL_Highest Grade/ Level/ Units Earned`, `COL_Inclusive Dates of Attendance`, `COL_Scholarship/ Academic Honors Received`, `FORMALLY_CHARGED`, `ADMINISTRARIVE_OFFENSE`, `CRIME_VIOLATION`, `MODES`, `REF_Name`, `REF_Address`, `REF_ContactNum`, `CERTIFY`, `SALARY`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `PROVINCIAL_ADDRESS`, `HOME_TELNUM`, `SKYPE_USERID`, `CONTACT NAME`, `CONTACT DETAILS`, `MOBILE_NUMBER`, `FATHER PLACEBIRTH`, `MOTHER PLACEBIRTH`, `RELIGION`, `REF_Name2`, `REF_Address2`, `REF_ContactNum2`, `REF_Name3`, `REF_Address3`, `REF_ContactNum3`, `GRAD_Name of School`, `GRAD_Degree Course`, `GRAD_Graduated?`, `GRAD_Year Graduated`, `GRAD_Highest Grade/ Level/ Units Earned`, `GRAD_Inclusive Dates of Attendance`, `GRAD_Scholarship`, `PROF_License1`, `PROF_Rating1`, `PROF_DateGranted1`, `PROF_Institution1`, `PROF_Licensennum1`, `PROF_DateReleased1`, `PROF_License2`, `PROF_Rating2`, `PROF_DateGranted2`, `PROF_Institution2`, `PROF_Licensennum2`, `PROF_DateReleased2`, `PROF_License3`, `PROF_Rating3`, `PROF_DateGranted3`, `PROF_Institution3`, `PROF_Licensennum3`, `PROF_DateReleased3`);";
                    
                $sql3 =" UPDATE tbl_tmp SET `source` = 'indeed';";
                            
                      $sql4 ="REPLACE INTO `tbl_application` (POSITION, SHIFTING_SCHEDULE, WEEKENDS_HOLIDAYS, EMPLOYMENT_DATE, NAME, NICKNAME, AGE, `DATE OF BIRTH`, `PLACE OF BIRTH`, GENDER, `CIVIL STATUS`, CITIZENSHIP, `CURRENT ADDRESS`, `CONTACT NO.`, `EMAIL ADDRESS`, `SPOUSE'S NAME`, `SPOUSE'S OCCUPATION`, `FATHER'S NAME`, `MOTHER'S MAIDEN NAME`, `1. Inclusive Dates`, `1.1 Employer's Name, Address and Phone`, `1.2 Position Title`, `1.3 Name_Position and Contact No. of Immediate Supervisor`, `1.4 Monthly Salary`, `1.5 Reason for Leaving`, `2. Inclusive Dates`, `2.1 Employer's Name, Address and Phone`, `2.2 Position Title`, `2.3 Name_Position and Contact No. of Immediate Supervisor`, `2.4 Monthly Salary`, `2.5 Reason for Leaving`, `3. Inclusive Dates`, `3.1 Employer's Name, Address and Phone`, `3.2 Position Title`, `3.3 Name_Position and Contact No. of Immediate Supervisor`, `3.4 Monthly Salary`, `3.5 Reason for Leaving`, `4. Inclusive Dates`, `4.1 Employer's Name, Address and Phone`, `4.2 Position Title`, `4.3 Name_Position and Contact No. of Immediate Supervisor`, `4.4 Monthly Salary`, `4.5 Reason for Leaving`, `5. Inclusive Dates`, `5.1 Employer's Name, Address and Phone`, `5.2 Position Title`, `5.3 Name_Position and Contact No. of Immediate Supervisor`, `5.4 Monthly Salary`, `5.5 Reason for Leaving`, `ELEM_Name of School`, `ELEM_Year Graduated`, `ELEM_Highest Grade/ Level/ Units Earned`, `ELEM_Inclusive Dates of Attendance`, `ELEM_Scholarship/ Academic Honors Received`, `HS_Name of School`, `HS_Year Graduated`, `HS_Highest Grade/ Level/ Units Earned`, `HS_Inclusive Dates of Attendance`, `HS_Scholarship/ Academic Honors Received`, `COL_Name of School`, `COL_Degree Course`, `COL_Graduated`, `COL_Year Graduated`, `COL_Highest Grade/ Level/ Units Earned`, `COL_Inclusive Dates of Attendance`, `COL_Scholarship/ Academic Honors Received`, `FORMALLY_CHARGED`, `ADMINISTRARIVE_OFFENSE`, `CRIME_VIOLATION`, `MODES`, `REF_Name`, `REF_Address`, `REF_ContactNum`, `CERTIFY`, `SALARY`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `PROVINCIAL_ADDRESS`, `HOME_TELNUM`, `SKYPE_USERID`, `CONTACT NAME`, `CONTACT DETAILS`, `MOBILE_NUMBER`, `FATHER PLACEBIRTH`, `MOTHER PLACEBIRTH`, `RELIGION`, `REF_Name2`, `REF_Address2`, `REF_ContactNum2`, `REF_Name3`, `REF_Address3`, `REF_ContactNum3`, `GRAD_Name of School`, `GRAD_Degree Course`, `GRAD_Graduated?`, `GRAD_Year Graduated`, `GRAD_Highest Grade/ Level/ Units Earned`, `GRAD_Inclusive Dates of Attendance`, `GRAD_Scholarship`, `PROF_License1`, `PROF_Rating1`, `PROF_DateGranted1`, `PROF_Institution1`, `PROF_Licensennum1`, `PROF_DateReleased1`, `PROF_License2`, `PROF_Rating2`, `PROF_DateGranted2`, `PROF_Institution2`, `PROF_Licensennum2`, `PROF_DateReleased2`, `PROF_License3`, `PROF_Rating3`, `PROF_DateGranted3`, `PROF_Institution3`, `PROF_Licensennum3`, `PROF_DateReleased3`, `source`)
                            
                            SELECT POSITION, SHIFTING_SCHEDULE, WEEKENDS_HOLIDAYS, EMPLOYMENT_DATE, NAME, NICKNAME, AGE, `DATE OF BIRTH`, `PLACE OF BIRTH`, GENDER, `CIVIL STATUS`, CITIZENSHIP, `CURRENT ADDRESS`, `CONTACT NO.`, `EMAIL ADDRESS`, `SPOUSE'S NAME`, `SPOUSE'S OCCUPATION`, `FATHER'S NAME`, `MOTHER'S MAIDEN NAME`, `1. Inclusive Dates`, `1.1 Employer's Name, Address and Phone`, `1.2 Position Title`, `1.3 Name_Position and Contact No. of Immediate Supervisor`, `1.4 Monthly Salary`, `1.5 Reason for Leaving`, `2. Inclusive Dates`, `2.1 Employer's Name, Address and Phone`, `2.2 Position Title`, `2.3 Name_Position and Contact No. of Immediate Supervisor`, `2.4 Monthly Salary`, `2.5 Reason for Leaving`, `3. Inclusive Dates`, `3.1 Employer's Name, Address and Phone`, `3.2 Position Title`, `3.3 Name_Position and Contact No. of Immediate Supervisor`, `3.4 Monthly Salary`, `3.5 Reason for Leaving`, `4. Inclusive Dates`, `4.1 Employer's Name, Address and Phone`, `4.2 Position Title`, `4.3 Name_Position and Contact No. of Immediate Supervisor`, `4.4 Monthly Salary`, `4.5 Reason for Leaving`, `5. Inclusive Dates`, `5.1 Employer's Name, Address and Phone`, `5.2 Position Title`, `5.3 Name_Position and Contact No. of Immediate Supervisor`, `5.4 Monthly Salary`, `5.5 Reason for Leaving`, `ELEM_Name of School`, `ELEM_Year Graduated`, `ELEM_Highest Grade/ Level/ Units Earned`, `ELEM_Inclusive Dates of Attendance`, `ELEM_Scholarship/ Academic Honors Received`, `HS_Name of School`, `HS_Year Graduated`, `HS_Highest Grade/ Level/ Units Earned`, `HS_Inclusive Dates of Attendance`, `HS_Scholarship/ Academic Honors Received`, `COL_Name of School`, `COL_Degree Course`, `COL_Graduated`, `COL_Year Graduated`, `COL_Highest Grade/ Level/ Units Earned`, `COL_Inclusive Dates of Attendance`, `COL_Scholarship/ Academic Honors Received`, `FORMALLY_CHARGED`, `ADMINISTRARIVE_OFFENSE`, `CRIME_VIOLATION`, `MODES`, `REF_Name`, `REF_Address`, `REF_ContactNum`, `CERTIFY`, `SALARY`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `PROVINCIAL_ADDRESS`, `HOME_TELNUM`, `SKYPE_USERID`, `CONTACT NAME`, `CONTACT DETAILS`, `MOBILE_NUMBER`, `FATHER PLACEBIRTH`, `MOTHER PLACEBIRTH`, `RELIGION`, `REF_Name2`, `REF_Address2`, `REF_ContactNum2`, `REF_Name3`, `REF_Address3`, `REF_ContactNum3`, `GRAD_Name of School`, `GRAD_Degree Course`, `GRAD_Graduated?`, `GRAD_Year Graduated`, `GRAD_Highest Grade/ Level/ Units Earned`, `GRAD_Inclusive Dates of Attendance`, `GRAD_Scholarship`, `PROF_License1`, `PROF_Rating1`, `PROF_DateGranted1`, `PROF_Institution1`, `PROF_Licensennum1`, `PROF_DateReleased1`, `PROF_License2`, `PROF_Rating2`, `PROF_DateGranted2`, `PROF_Institution2`, `PROF_Licensennum2`, `PROF_DateReleased2`, `PROF_License3`, `PROF_Rating3`, `PROF_DateGranted3`, `PROF_Institution3`, `PROF_Licensennum3`, `PROF_DateReleased3`, `source`
                            FROM tbl_tmp;";
                            
                       $sql5 ="DROP TEMPORARY TABLE tbl_tmp;";
                }
        
         else if($_POST['fromsource'] == "jobfair"){

                    $prev = "google.php";
                    $sql =	"CREATE TEMPORARY TABLE tbl_tmp LIKE tbl_application;";
                    
                    $sql2 = "LOAD DATA LOCAL INFILE '".$uploadfile."'
                            INTO TABLE tbl_tmp
                            FIELDS TERMINATED BY ','
                            OPTIONALLY ENCLOSED BY '\"' 
                            IGNORE 1 LINES
                            (POSITION, SHIFTING_SCHEDULE, WEEKENDS_HOLIDAYS, EMPLOYMENT_DATE, NAME, NICKNAME, AGE, `DATE OF BIRTH`, `PLACE OF BIRTH`, GENDER, `CIVIL STATUS`, CITIZENSHIP, `CURRENT ADDRESS`, `CONTACT NO.`, `EMAIL ADDRESS`, `SPOUSE'S NAME`, `SPOUSE'S OCCUPATION`, `FATHER'S NAME`, `MOTHER'S MAIDEN NAME`, `1. Inclusive Dates`, `1.1 Employer's Name, Address and Phone`, `1.2 Position Title`, `1.3 Name_Position and Contact No. of Immediate Supervisor`, `1.4 Monthly Salary`, `1.5 Reason for Leaving`, `2. Inclusive Dates`, `2.1 Employer's Name, Address and Phone`, `2.2 Position Title`, `2.3 Name_Position and Contact No. of Immediate Supervisor`, `2.4 Monthly Salary`, `2.5 Reason for Leaving`, `3. Inclusive Dates`, `3.1 Employer's Name, Address and Phone`, `3.2 Position Title`, `3.3 Name_Position and Contact No. of Immediate Supervisor`, `3.4 Monthly Salary`, `3.5 Reason for Leaving`, `4. Inclusive Dates`, `4.1 Employer's Name, Address and Phone`, `4.2 Position Title`, `4.3 Name_Position and Contact No. of Immediate Supervisor`, `4.4 Monthly Salary`, `4.5 Reason for Leaving`, `5. Inclusive Dates`, `5.1 Employer's Name, Address and Phone`, `5.2 Position Title`, `5.3 Name_Position and Contact No. of Immediate Supervisor`, `5.4 Monthly Salary`, `5.5 Reason for Leaving`, `ELEM_Name of School`, `ELEM_Year Graduated`, `ELEM_Highest Grade/ Level/ Units Earned`, `ELEM_Inclusive Dates of Attendance`, `ELEM_Scholarship/ Academic Honors Received`, `HS_Name of School`, `HS_Year Graduated`, `HS_Highest Grade/ Level/ Units Earned`, `HS_Inclusive Dates of Attendance`, `HS_Scholarship/ Academic Honors Received`, `COL_Name of School`, `COL_Degree Course`, `COL_Graduated`, `COL_Year Graduated`, `COL_Highest Grade/ Level/ Units Earned`, `COL_Inclusive Dates of Attendance`, `COL_Scholarship/ Academic Honors Received`, `FORMALLY_CHARGED`, `ADMINISTRARIVE_OFFENSE`, `CRIME_VIOLATION`, `MODES`, `REF_Name`, `REF_Address`, `REF_ContactNum`, `CERTIFY`, `SALARY`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `PROVINCIAL_ADDRESS`, `HOME_TELNUM`, `SKYPE_USERID`, `CONTACT NAME`, `CONTACT DETAILS`, `MOBILE_NUMBER`, `FATHER PLACEBIRTH`, `MOTHER PLACEBIRTH`, `RELIGION`, `REF_Name2`, `REF_Address2`, `REF_ContactNum2`, `REF_Name3`, `REF_Address3`, `REF_ContactNum3`, `GRAD_Name of School`, `GRAD_Degree Course`, `GRAD_Graduated?`, `GRAD_Year Graduated`, `GRAD_Highest Grade/ Level/ Units Earned`, `GRAD_Inclusive Dates of Attendance`, `GRAD_Scholarship`, `PROF_License1`, `PROF_Rating1`, `PROF_DateGranted1`, `PROF_Institution1`, `PROF_Licensennum1`, `PROF_DateReleased1`, `PROF_License2`, `PROF_Rating2`, `PROF_DateGranted2`, `PROF_Institution2`, `PROF_Licensennum2`, `PROF_DateReleased2`, `PROF_License3`, `PROF_Rating3`, `PROF_DateGranted3`, `PROF_Institution3`, `PROF_Licensennum3`, `PROF_DateReleased3`);";
                    
                $sql3 =" UPDATE tbl_tmp SET `source` = 'jobfair';";
                            
                      $sql4 ="INSERT IGNORE INTO `tbl_application` (POSITION, SHIFTING_SCHEDULE, WEEKENDS_HOLIDAYS, EMPLOYMENT_DATE, NAME, NICKNAME, AGE, `DATE OF BIRTH`, `PLACE OF BIRTH`, GENDER, `CIVIL STATUS`, CITIZENSHIP, `CURRENT ADDRESS`, `CONTACT NO.`, `EMAIL ADDRESS`, `SPOUSE'S NAME`, `SPOUSE'S OCCUPATION`, `FATHER'S NAME`, `MOTHER'S MAIDEN NAME`, `1. Inclusive Dates`, `1.1 Employer's Name, Address and Phone`, `1.2 Position Title`, `1.3 Name_Position and Contact No. of Immediate Supervisor`, `1.4 Monthly Salary`, `1.5 Reason for Leaving`, `2. Inclusive Dates`, `2.1 Employer's Name, Address and Phone`, `2.2 Position Title`, `2.3 Name_Position and Contact No. of Immediate Supervisor`, `2.4 Monthly Salary`, `2.5 Reason for Leaving`, `3. Inclusive Dates`, `3.1 Employer's Name, Address and Phone`, `3.2 Position Title`, `3.3 Name_Position and Contact No. of Immediate Supervisor`, `3.4 Monthly Salary`, `3.5 Reason for Leaving`, `4. Inclusive Dates`, `4.1 Employer's Name, Address and Phone`, `4.2 Position Title`, `4.3 Name_Position and Contact No. of Immediate Supervisor`, `4.4 Monthly Salary`, `4.5 Reason for Leaving`, `5. Inclusive Dates`, `5.1 Employer's Name, Address and Phone`, `5.2 Position Title`, `5.3 Name_Position and Contact No. of Immediate Supervisor`, `5.4 Monthly Salary`, `5.5 Reason for Leaving`, `ELEM_Name of School`, `ELEM_Year Graduated`, `ELEM_Highest Grade/ Level/ Units Earned`, `ELEM_Inclusive Dates of Attendance`, `ELEM_Scholarship/ Academic Honors Received`, `HS_Name of School`, `HS_Year Graduated`, `HS_Highest Grade/ Level/ Units Earned`, `HS_Inclusive Dates of Attendance`, `HS_Scholarship/ Academic Honors Received`, `COL_Name of School`, `COL_Degree Course`, `COL_Graduated`, `COL_Year Graduated`, `COL_Highest Grade/ Level/ Units Earned`, `COL_Inclusive Dates of Attendance`, `COL_Scholarship/ Academic Honors Received`, `FORMALLY_CHARGED`, `ADMINISTRARIVE_OFFENSE`, `CRIME_VIOLATION`, `MODES`, `REF_Name`, `REF_Address`, `REF_ContactNum`, `CERTIFY`, `SALARY`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `PROVINCIAL_ADDRESS`, `HOME_TELNUM`, `SKYPE_USERID`, `CONTACT NAME`, `CONTACT DETAILS`, `MOBILE_NUMBER`, `FATHER PLACEBIRTH`, `MOTHER PLACEBIRTH`, `RELIGION`, `REF_Name2`, `REF_Address2`, `REF_ContactNum2`, `REF_Name3`, `REF_Address3`, `REF_ContactNum3`, `GRAD_Name of School`, `GRAD_Degree Course`, `GRAD_Graduated?`, `GRAD_Year Graduated`, `GRAD_Highest Grade/ Level/ Units Earned`, `GRAD_Inclusive Dates of Attendance`, `GRAD_Scholarship`, `PROF_License1`, `PROF_Rating1`, `PROF_DateGranted1`, `PROF_Institution1`, `PROF_Licensennum1`, `PROF_DateReleased1`, `PROF_License2`, `PROF_Rating2`, `PROF_DateGranted2`, `PROF_Institution2`, `PROF_Licensennum2`, `PROF_DateReleased2`, `PROF_License3`, `PROF_Rating3`, `PROF_DateGranted3`, `PROF_Institution3`, `PROF_Licensennum3`, `PROF_DateReleased3`, `source`)
                            
                            SELECT POSITION, SHIFTING_SCHEDULE, WEEKENDS_HOLIDAYS, EMPLOYMENT_DATE, NAME, NICKNAME, AGE, `DATE OF BIRTH`, `PLACE OF BIRTH`, GENDER, `CIVIL STATUS`, CITIZENSHIP, `CURRENT ADDRESS`, `CONTACT NO.`, `EMAIL ADDRESS`, `SPOUSE'S NAME`, `SPOUSE'S OCCUPATION`, `FATHER'S NAME`, `MOTHER'S MAIDEN NAME`, `1. Inclusive Dates`, `1.1 Employer's Name, Address and Phone`, `1.2 Position Title`, `1.3 Name_Position and Contact No. of Immediate Supervisor`, `1.4 Monthly Salary`, `1.5 Reason for Leaving`, `2. Inclusive Dates`, `2.1 Employer's Name, Address and Phone`, `2.2 Position Title`, `2.3 Name_Position and Contact No. of Immediate Supervisor`, `2.4 Monthly Salary`, `2.5 Reason for Leaving`, `3. Inclusive Dates`, `3.1 Employer's Name, Address and Phone`, `3.2 Position Title`, `3.3 Name_Position and Contact No. of Immediate Supervisor`, `3.4 Monthly Salary`, `3.5 Reason for Leaving`, `4. Inclusive Dates`, `4.1 Employer's Name, Address and Phone`, `4.2 Position Title`, `4.3 Name_Position and Contact No. of Immediate Supervisor`, `4.4 Monthly Salary`, `4.5 Reason for Leaving`, `5. Inclusive Dates`, `5.1 Employer's Name, Address and Phone`, `5.2 Position Title`, `5.3 Name_Position and Contact No. of Immediate Supervisor`, `5.4 Monthly Salary`, `5.5 Reason for Leaving`, `ELEM_Name of School`, `ELEM_Year Graduated`, `ELEM_Highest Grade/ Level/ Units Earned`, `ELEM_Inclusive Dates of Attendance`, `ELEM_Scholarship/ Academic Honors Received`, `HS_Name of School`, `HS_Year Graduated`, `HS_Highest Grade/ Level/ Units Earned`, `HS_Inclusive Dates of Attendance`, `HS_Scholarship/ Academic Honors Received`, `COL_Name of School`, `COL_Degree Course`, `COL_Graduated`, `COL_Year Graduated`, `COL_Highest Grade/ Level/ Units Earned`, `COL_Inclusive Dates of Attendance`, `COL_Scholarship/ Academic Honors Received`, `FORMALLY_CHARGED`, `ADMINISTRARIVE_OFFENSE`, `CRIME_VIOLATION`, `MODES`, `REF_Name`, `REF_Address`, `REF_ContactNum`, `CERTIFY`, `SALARY`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `PROVINCIAL_ADDRESS`, `HOME_TELNUM`, `SKYPE_USERID`, `CONTACT NAME`, `CONTACT DETAILS`, `MOBILE_NUMBER`, `FATHER PLACEBIRTH`, `MOTHER PLACEBIRTH`, `RELIGION`, `REF_Name2`, `REF_Address2`, `REF_ContactNum2`, `REF_Name3`, `REF_Address3`, `REF_ContactNum3`, `GRAD_Name of School`, `GRAD_Degree Course`, `GRAD_Graduated?`, `GRAD_Year Graduated`, `GRAD_Highest Grade/ Level/ Units Earned`, `GRAD_Inclusive Dates of Attendance`, `GRAD_Scholarship`, `PROF_License1`, `PROF_Rating1`, `PROF_DateGranted1`, `PROF_Institution1`, `PROF_Licensennum1`, `PROF_DateReleased1`, `PROF_License2`, `PROF_Rating2`, `PROF_DateGranted2`, `PROF_Institution2`, `PROF_Licensennum2`, `PROF_DateReleased2`, `PROF_License3`, `PROF_Rating3`, `PROF_DateGranted3`, `PROF_Institution3`, `PROF_Licensennum3`, `PROF_DateReleased3`, `source`
                            FROM tbl_tmp;";
                            
                       $sql5 ="DROP TEMPORARY TABLE tbl_tmp;";
                }
        
		if(in_array($_FILES['csvhere']['type'],$mimes)){
			if (move_uploaded_file($_FILES['csvhere']['tmp_name'], $uploadfile)) {
			} 
			else {
			    $_SESSION['uploadnotice'] = "File cannot be moved!\n";
			}
			if ($conn->query($sql)) {
                //echo $_POST['fromsource'];
                if($conn->query($sql2)){
                    if($conn->query($sql3)){
                        if($conn->query($sql4)){
                            $_SESSION['uploadnotice'] .= mysqli_affected_rows($conn)." rows successfully uploaded";
                                
                            if($conn->query($sql5)){
								header("location: ");
                            }
                            else {
								$_SESSION['uploadnotice'] .= " Error:5 " . $sql5 . "<br>" . $conn->error;
							}
                        }
                        else {
							$_SESSION['uploadnotice'] .= " Error:4 " . $sql4 . "<br>" . $conn->error;
						}
                    }
                    else {
						$_SESSION['uploadnotice'] .= " Error:3 " . $sql3 . "<br>" . $conn->error;
					}
                }
                else {
					$_SESSION['uploadnotice'] .= " Error:2 " . $sql2 . "<br>" . $conn->error;
				}	
			} 
			else {
			    $_SESSION['uploadnotice'] .= " Error:1 " . $sql . "<br>" . $conn->error;
			}
		} 
		else {
		  $_SESSION['uploadnotice'] = "Please upload file in CSV format";
		}
		header("location: $prev");
	}
?>