<?php
//USE ;end TO SEPERATE SQL STATEMENTS. DON'T USE ;end IN ANY OTHER PLACES!

$sql=array() ;
$count=0 ;

//v0.0.01
$sql[$count][0]="0.0.01" ;
$sql[$count][1]="-- First version, nothing to update" ;

//v0.0.02
$count++;
$sql[$count][0]="0.0.02" ;
$sql[$count][1]="" ;

//v0.1.00
$count++;
$sql[$count][0]="0.1.00" ;
$sql[$count][1]="UPDATE gibbonAction SET name='Create Issue', URLList='issues_create.php', entryURL='issues_create.php' WHERE name='Submit Issue' AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
INSERT INTO gibbonAction SET name='Create Issue_forOther', precedence='1', category='', description='Submits an IT related issue to be resolved by the help desk staff with an optional feature to create on the behalf of others.', URLList='issues_create.php', entryURL='issues_create.php', defaultPermissionAdmin='Y', defaultPermissionTeacher='Y', defaultPermissionStudent='Y', defaultPermissionParent='N', defaultPermissionSupport='Y', categoryPermissionStaff='Y', categoryPermissionStudent='Y', categoryPermissionParent='Y', categoryPermissionOther='N' WHERE name='Submit Issue' AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
ALTER TABLE helpDeskIssue ADD createdByID int(12) unsigned zerofill NOT NULL;end" ;

//v0.1.01
$count++;
$sql[$count][0]="0.1.01" ;
$sql[$count][1]="INSERT INTO gibbonAction SET name='Create Issue_forOther', precedence='1', category='', description='Submits an IT related issue to be resolved by the help desk staff with an optional feature to create on the behalf of others.', URLList='issues_create.php', entryURL='issues_create.php', defaultPermissionAdmin='Y', defaultPermissionTeacher='Y', defaultPermissionStudent='Y', defaultPermissionParent='N', defaultPermissionSupport='Y', categoryPermissionStaff='Y', categoryPermissionStudent='Y', categoryPermissionParent='Y', categoryPermissionOther='N', gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end" ;

//v0.1.02
$count++;
$sql[$count][0]="0.1.02" ;
$sql[$count][1]="UPDATE gibbonAction SET URLList='issues_view.php, issues_discuss_view.php' WHERE name='View issues_All' AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
UPDATE gibbonAction SET URLList='issues_view.php, issues_assign.php, issues_discuss_view.php' WHERE name='View issues_All&Assign' AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
ALTER TABLE helpDeskIssueDiscuss DROP COLUMN technicianPosted;end
ALTER TABLE helpDeskIssueDiscuss ADD gibbonPersonID int(10) unsigned zerofill NOT NULL;end" ;

//v0.1.03
$count++;
$sql[$count][0]="0.1.03";
$sql[$count][1]="";

//v0.1.04
$count++;
$sql[$count][0]="0.1.04" ;
$sql[$count][1]="" ;

//v0.1.05
$count++;
$sql[$count][0]="0.1.05" ;
$sql[$count][1]="" ;

//v0.2.00
$count++;
$sql[$count][0]="0.2.00" ;
$sql[$count][1]="" ;

//v0.2.01
$count++;
$sql[$count][0]="0.2.01" ;
$sql[$count][1]="" ;

//v0.2.02
$count++;
$sql[$count][0]="0.2.02" ;
$sql[$count][1]="" ;

//v0.3.00
$count++;
$sql[$count][0]="0.3.00" ;
$sql[$count][1]="
DELETE FROM gibbonAction WHERE name='View issues_All' AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
DELETE FROM gibbonAction WHERE name='View issues_All&Assign' AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
UPDATE gibbonAction SET name='Issues', description='Shows issues depending on role/permissions.' WHERE name='View issues_Mine'AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
DELETE FROM gibbonAction WHERE name='Create Issue_forOther' AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
CREATE TABLE `helpDeskTechGroups` (`groupID` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT, `groupName` varchar(55) NOT NULL, `viewIssue` boolean DEFAULT 1, `viewIssueStatus` ENUM('All', 'UP', 'PR', 'Pending') DEFAULT 'All', `assignIssue` boolean DEFAULT 0, `acceptIssue` boolean DEFAULT 1, `resolveIssue` boolean DEFAULT 1, `createIssueForOther` boolean DEFAULT 1, `fullAccess` boolean DEFAULT 0, PRIMARY KEY (`groupID`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;end
UPDATE gibbonAction SET URLList='helpDesk_settings.php', entryURL='helpDesk_settings.php' WHERE name='Help Desk Settings'AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
UPDATE gibbonAction SET URLList='helpDesk_manageTechnicians.php', entryURL='helpDesk_manageTechnicians.php' WHERE name='Manage Technicians'AND gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
INSERT INTO gibbonAction SET name='Manage Technician Groups', precedence='0', category='', description='Manage Technician Groups.', URLList='helpDesk_manageTechnicianGroup.php', entryURL='helpDesk_manageTechnicianGroup.php', defaultPermissionAdmin='Y', defaultPermissionTeacher='N', defaultPermissionStudent='N', defaultPermissionParent='N', defaultPermissionSupport='N', categoryPermissionStaff='Y', categoryPermissionStudent='N', categoryPermissionParent='N', categoryPermissionOther='N', gibbonModuleID=(SELECT gibbonModuleID FROM gibbonModule WHERE name='Help Desk');end
ALTER TABLE helpDeskTechnicians ADD groupID int(4) unsigned zerofill NOT NULL;end
" ;

?>
