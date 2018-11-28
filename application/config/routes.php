<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/*-------------------------------------------------------------------------Login start Here-------------------------------------*/
$route['dashboard'] = "Main/admin";
/*-------------------------------------------------------------------------Login ends Here-------------------------------------*/

/*-------------------------------------------------------------------------Add Routes start Here-------------------------------------*/
$route['add-admitcard'] = "Main/add_admit";
$route['add-branch'] = "Main/add_Branch";
$route['add-Certificate'] = "Main/add_certificate";
$route['add-notice'] = "Main/add_notice";
$route['add-result'] = "Main/add_result";
$route['add-student'] = "Main/add_student";
$route['add-Syllabus'] = "Main/add_syllabus";
/*-------------------------------------------------------------------------Add Routes edns Here-------------------------------------*/
/*-------------------------------------------------------------------------Notice Starts Here---------------------------------------*/
$route['messege'] = "Main/dashboard_Messege";
$route['main_notice'] = "Main/Main_notice";

/*-------------------------------------------------------------------------Notice edns Here-----------------------------------------*/

/*-------------------------------------------------------------------------delete Routes start Here-------------------------------------*/
$route['delete-admitcard'] = "Main/delete_admit";
$route['delete-Branch'] = "Main/delete_Branch";
$route['delete-certificate'] = "Main/delete_certificate";
$route['delete-result'] = "Main/delete_result";
$route['delete-student'] = "Main/delete_student";

$route['delete-Syllabus'] = "Main/delete_Syllabus";	

/*-------------------------------------------------------------------------delete Routes edns Here-------------------------------------*/
	
/*-------------------------------------------------------------------------edit Routes edns Here-------------------------------------*/	
$route['edit-admitcard'] = "Main/edit_admit";	
$route['edit-branch'] = "Main/edit_Branch";	
$route['edit-result'] = "Main/edit_result";
$route['edit-certificate'] = "Main/edit_certificate";
$route['edit-Syllabus'] = "Main/edit_syllabus";	
$route['edit-student'] = "Main/edit_student";
/*-------------------------------------------------------------------------edit Routes edns Here-------------------------------------*/

/*-------------------------------------------------------------------------Search Routes edns Here-------------------------------------*/
$route['search-admitcard'] = "Main/search_admit";
$route['notice'] = "Main/notice";
$route['search-Branch'] = "Main/search_Branch";
$route['search-Certificate'] = "Main/search_Certificate";
$route['search-student'] = "Main/search_student";
$route['search-result'] = "Main/search_result";
$route['search-Syllabus'] = "Main/search_syllabus";
/*-------------------------------------------------------------------------Search Routes edns Here-------------------------------------*/

/*-------------------------------------------------------------------------Messege Routes edns Here-------------------------------------*/
$route['send-Messege'] = "Main/send_messege";
$route['welcome-message'] = "Main/welcome_message";
$route['sms-api'] = "Main/sms_api";
/*-------------------------------------------------------------------------Messege Routes edns Here-------------------------------------*/
/*-------------------------------------------------------------------------Mail Module-------------------------------------------------*/
$route['mail'] = "Main/send_mail";
/*-------------------------------------------------------------------------Mail Module-------------------------------------------------*/


$route['email'] = 'mail_Controller';

