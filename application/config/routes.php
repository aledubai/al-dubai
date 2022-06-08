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

| When you set this option to TRUE, it will replace ALL dashes with

| underscores in the controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/

$route['default_controller'] = "index";

$route['404_override'] = 'index/error_404';


$route['translate_uri_dashes'] = FALSE;





// Front 

$route['privacy-policy']  = 'privacy_policy';
// $route['propertydetails']  = 'propertylist';

$route['propertydetails/insert_contactus']  = 'propertydetails/insert_contactus';
$route['propertydetails/(:any)']  = 'propertydetails/public_property/$1';


$route['index/([a-z]+)']  = 'index/index/([a-z]+)';
$route['contact']  = 'homenew/contact_us';
$route['about']  = 'homenew/about_us';
$route['userVendor']  = 'userVendor/Dashboard/index';


$route['terms_and_conditions']  = 'homenew/terms_and_conditions';


$route['offers/apartments/book-with-two-percent/terms-and-conditions']  = 'homenew/terms_and_conditions';




$route['privacy_policy']  = 'homenew/privacy_policy';


$route['offers/apartments/book-with-two-percent/privacy-policy']  = 'homenew/privacy_policy';


$route['privacy_policy1']  = 'homenew/privacy_policy1';


$route['frequently_asked_questions']  = 'homenew/frequently_asked_questions';


$route['sign_Up']  = 'homenew/sign_Up';

$route['payment_calculator']  = 'homenew/payment_calculator';


$route['offers/apartments/book-with-two-percent']  = 'landingpageppc/index';

$route['offers/apartments/book-with-two-percent/thank-you']  = 'landingpageppc/thankyou';

 


$route['refund-policy'] = 'refund_policy';

$route['terms-of-use'] = 'terms_of_use';

$route['cookies-policy'] = 'cookies_policy';
$route['contact-us'] = 'contact';

$route['driver-installation-instruction'] = 'driver_installation_instruction';
$route['trial-driver-download'] = 'driver_installation_instruction/downloadlink';
$route['try-now'] = 'driver_installation_instruction/trynow';

$route['after-install'] = 'after_install';

$route['after-uninstall'] = 'after_uninstall';

$route['uninstall/feedback'] = 'feedback';//'uninstallinstructions';    //'feedback';

$route['installed/welcome'] = '';

$route['buy-now'] = 'cart';



//$route['front/login/resetPasswordConfirmUser/(:any)'] = 'front/login/resetPasswordConfirmUser/$1';

$route['admin'] = 'admin/dashboard';
$route['vendor']= 'vendor/dashboard';
$route['agent'] = 'agent/dashboard';



// Service supp

$route['product/(:num)/(:num)'] = 'product_list/get_product_list/$1/$1';

$route['shop'] = 'product_list/get_product_list';



$route['time-closed'] = 'timeclosed';
$route['index2'] = 'home/index2';
$route['companies/(:any)/(:any)'] = 'companies/companies_list/$1/$2';

