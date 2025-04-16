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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//---------------------------------------Franchise-Section---------------------------------------------//

 $route['partner']='partner/login';
 $route['partner/dashboard']='partner/dashboard';

 //Students Registration
 $route['partner/enrolled-students/pending']='partner/students/show_pending';
 $route['partner/enrolled-students/approved']='partner/students/show_approved';
 $route['partner/enrolled-students/form']='partner/students/registration';
 $route['partner/enrolled-students/save-records']='partner/students/save';
 $route['partner/enrolled-students/view-records/(:num)']='partner/students/view_registration/$1';

//---------------------------------------Admin Section-------------------------------------------------//

$route['admin']='admin/login';
$route['dashboard']='admin/dashboard';

//Franchise owned Branch
$route['admin/branch-office']='admin/centre/branch';
$route['admin/branch-office/form']='admin/centre/add_branch';
$route['admin/branch-office/save-branch']='admin/centre/save_branch';
$route['admin/branch-office/edit-branch/(:num)']='admin/centre/edit_branch/$1';
$route['admin/branch-office/update-branch/(:num)']='admin/centre/update_branch/$1';
$route['admin/branch-office/delete-branch/(:num)']='admin/centre/delete_branch/$1';

//Franchise Page Content
$route['admin/franchise-page-content']='admin/centre/page';
$route['admin/franchise-page-content/edit/(:num)']='admin/centre/edit_page/$1';
$route['admin/franchise-page-content/update/(:num)']='admin/centre/update_page/$1';

//Franchise Table Content
$route['admin/franchise-table-content']='admin/centre/table';
$route['admin/franchise-table-content/table']='admin/centre/add_table';
$route['admin/franchise-table-content/save-table']='admin/centre/save_table';
$route['admin/franchise-table-content/edit-table/(:num)']='admin/centre/edit_table/$1';
$route['admin/franchise-table-content/update-table/(:num)']='admin/centre/update_table/$1';
$route['admin/franchise-table-content/delete-table/(:num)']='admin/centre/delete_table/$1';

//Course(Category)
$route['admin/stream']='admin/course/stream';
$route['admin/stream/form']='admin/course/add_stream';
$route['admin/stream/save-stream']='admin/course/save_stream';
$route['admin/stream/edit-stream/(:num)']='admin/course/edit_stream/$1';
$route['admin/stream/update-stream/(:num)']='admin/course/update_stream/$1';
$route['admin/stream/delete-stream/(:num)']='admin/course/delete_stream/$1';

//Course(course details)
$route['admin/course']='admin/course/content';
$route['admin/course/form']='admin/course/add_content';
$route['admin/course/save-course']='admin/course/save_content';
$route['admin/course/edit-course/(:num)']='admin/course/edit_content/$1';
$route['admin/course/update-course/(:num)']='admin/course/update_content/$1';
$route['admin/course/delete-course/(:num)']='admin/course/delete_content/$1';

//General-Information
$route['admin/general-details']='admin/details';
$route['admin/general-details/edit/(:num)']='admin/details/edit_details/$1';
$route['admin/general-details/update/(:num)']='admin/details/update_details/$1';


//Home(News & Update)
$route['admin/news-update']='admin/home/news';
$route['admin/news-update/form']='admin/home/form_news';
$route['admin/news-update/save']='admin/home/save_news';
$route['admin/news-update/delete/(:num)']='admin/home/delete_news/$1';

//Home(Content)
$route['admin/home-content']='admin/home/content';
$route['admin/home-content/edit/(:num)']='admin/home/edit_content/$1';
$route['admin/home-content/update/(:num)']='admin/home/update_content/$1';

//Home(Banner)
$route['admin/banner']='admin/home/banner';
$route['admin/banner/form']='admin/home/form_banner';
$route['admin/banner/save']='admin/home/save_banner';
$route['admin/banner/delete/(:num)']='admin/home/delete_banner/$1';

//Home(Logo)
$route['admin/logo-section']='admin/home/logo';
$route['admin/logo-section/form']='admin/home/form_logo';
$route['admin/logo-section/save']='admin/home/save_logo';
$route['admin/logo-section/delete/(:num)']='admin/home/delete_banner/$1';

//Gallery
$route['admin/gallery']='admin/gallery/gallery';
$route['admin/gallery/form']='admin/gallery/form_gallery';
$route['admin/gallery/save']='admin/gallery/save_gallery';
$route['admin/gallery/delete/(:num)']='admin/gallery/delete_gallery/$1';

//About Us
$route['admin/about-us']='admin/about/content';
$route['admin/about-us/edit/(:num)']='admin/about/edit_content/$1';
$route['admin/about-us/update/(:num)']='admin/about/update_content/$1';

//Contact Us
$route['admin/users-message']='admin/contact';

//Students Registration
$route['admin/registered-students/form']='admin/students/registration';  
$route['admin/registered-students/save-records']='admin/students/save';  
$route['admin/registered-students/pending']='admin/students/show_pending';
$route['admin/registered-students/approved']='admin/students/show_approved';
$route['admin/registered-students/view-records/(:num)']='admin/students/view_registration/$1';


//-----------------------------------Front-end section-------------------------------------------//

$route['about-us']='about';
$route['offered-courses']='course';
$route['training-centre']='Centre';
$route['image-gallery']='gallery';

$route['contact-us']='contact';
$route['contact-us/save-details']='contact/submit';

$route['student-registration']='students/registration';
$route['student-registration/save']='students/save_records';
$route['students/view-result']='students/result';
$route['studens/view-profile']='students/profile';
