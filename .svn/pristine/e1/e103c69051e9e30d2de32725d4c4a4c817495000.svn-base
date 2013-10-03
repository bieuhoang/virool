<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] 												= "home";
$route['404_override'] 														= '';

//authentication
$route['reset_password/(:any)']												= 'admin/forgot_password/$1';
$route['activate/(:num)/(:any)']											= 'admin/activate/$1/$2';
$route['deactivate/(:num)']													= 'admin/deactivate/$1';

$route['(signup|login|logout|forgot_password|change_password)'] 					= 'user/$1';

//backend
$route['dashboard']															= 'admin/dashboard';
$route['admin/help/([a-zA-Z_-]+)']											= 'admin/help/$1';
$route['admin/([a-zA-Z_-]+)/(:any)']										= '$1/admin/$2';
$route['admin/(dashboard|login|logout|forgot_password|change_password)']	= 'admin/$1';
$route['admin/([a-zA-Z_-]+)']												= '$1/admin/index';
$route['admin/([a-zA-Z_-]+)/(:any)/(:any)']									= '$1/admin/$2/$3';

//for ajax
$route['ajax/([a-zA-Z_-]+)/(:any)']											= '$1/ajax/$2';
$route['ajax/([a-zA-Z_-]+)']												= '$1/ajax/index';

// page
$route['contact'] 															= 'home/contact';
$route['about_us'] 															= 'home/about_us';
$route['privacy_policy'] 													= 'home/privacy_policy';
$route['faqs'] 																= 'home/faqs';

$route['Promote-Video'] 													= 'promotevideo';
$route['Promote-Video/(:any)'] 												= 'youtubevideo';

$route['Campaigns-Publisher'] 												= 'campaignspublisher';

$route['activate']															= 'activates/index';
$route['activate/(:any)'] 													= 'activates/index';

$route['Open-Campaigns']													= 'user';
$route['Open-Campaigns/(:any)/(:any)']										= 'opencamp/$1/$2';

$route['My-Finances']														= 'myfinances';

$route['Manage-Campaigns']													= 'campaigns';
$route['Manage-Campaigns/edit/(:any)']										= 'campaigns/edit';
$route['Manage-Campaigns/(:any)']											= 'campaigns';

$route['My-Sites']															= 'mysites';
$route['My-Sites/add']														= 'mysites/add';
$route['My-Sites/edit/(:any)']												= 'mysites/edit/$1';

$route['Promote-Document'] 													= 'promotedocument';
$route['Promote-Document/edit/(:any)'] 										= 'promotedocument/edit/$1';
$route['Promote-Document/(:any)'] 											= 'promotedocument/view';

$route['advertiser/([a-zA-Z_-]+)'] 											= 'advertiser/$1';

$route['api/(:any)'] 														= 'api/index/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */