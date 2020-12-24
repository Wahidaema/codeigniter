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
$route['default_controller'] = 'blog';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['aboutsingle'] = 'blog/aboutsingle';
$route['aboutus'] = 'blog/aboutus';
$route['contact'] = 'blog/contact';
$route['index'] = 'blog/index';
$route['recipe'] = 'blog/recipe';
$route['relatedpage'] = 'blog/relatedpage';
$route['dessertrecipe'] = 'blog/dessertrecipe';
$route['singup']='blog/singup';
$route['viewpage1'] = 'blog/viewpage1';
$route['viewpage2'] = 'blog/viewpage2';
$route['viewpage3'] = 'blog/viewpage3';


$route['login']='login/index';
$route['admin'] = 'admin/index';
$route['addheader'] = 'admin/addheader';
$route['admin/(:any)'] = "admin/index/$1";

$route['aboutsinglepage'] = 'admin/aboutsinglepage';
$route['addaboutsinglepage'] = 'admin/addaboutsinglepage';

$route['aboutuspage'] = 'admin/aboutuspage';
$route['addaboutuspage'] = 'admin/addaboutuspage';

$route['post'] = 'admin/post';
$route['addpost'] = 'admin/addpost';

$route['contactpage'] = 'admin/contactpage';
$route['addcontactpage'] = 'admin/addcontactpage';

$route['dessert'] = 'admin/dessert';
$route['adddessert'] = 'admin/adddessert';

$route['maincourse'] = 'admin/maincourse';
$route['addmaincourse'] = 'admin/addmaincourse';

$route['recipefooter'] = 'admin/recipefooter';
$route['addrecipefooter'] = 'admin/addrecipefooter';

$route['recipeindex'] = 'admin/recipeindex';
$route['addrecipeindex'] = 'admin/addrecipeindex';

$route['relatedpost'] = 'admin/relatedpost';
$route['addrelatedpost'] = 'admin/addrelatedpost';

$route['teamsection'] = 'admin/teamsection';
$route['addteamsection'] = 'admin/addteamsection';
$route['message']='admin/message';
$route['author'] = 'admin/author';
$route['addauthor'] = 'admin/addauthor';



$route['savehdr'] = 'admin/savehdr';
$route['saveaboutsingle'] = 'admin/saveaboutsingle';
$route['saveaboutus'] = 'admin/saveaboutus';
$route['savepost'] = 'admin/savepost';
$route['savecontact'] = 'admin/savecontact';
$route['savedessert'] = 'admin/savedessert';
$route['savemain'] = 'admin/savemain';
$route['saverecipefooter'] = 'admin/saverecipefooter';
$route['saverecipeindex'] = 'admin/saverecipeindex';
$route['saverelated'] = 'admin/saverelated';
$route['saveteam'] = 'admin/saveteam';
$route['savemessage']='admin/savemessage';
$route['saveaddauthor']='admin/saveaddauthor';
$route['saveauthor']='admin/saveauthor';