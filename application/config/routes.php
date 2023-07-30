<?php

defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'MainController';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['getIATA'] = 'MainController/getIATA';
$route['payment/(:any)'] = 'MainController/payment';
$route['ticket/(:any)'] = 'MainController/ticket';
$route['tick'] = 'MainController/tick';
$route['call'] = 'MainController/call';
$route['dashboard'] = 'MainController/dashboard';
$route['gticket/(:any)'] = 'MainController/gticket/$1';
$route['read'] = 'MainController/read';
$route['logout'] = 'Signup/logout';
$route['LoginUser'] = 'Signup/loginurl';
$route['about-us'] = 'MainController/about';
$route['contact-us'] = 'MainController/contact';
$route['privacy-policy'] = 'MainController/privacy';
$route['cancellation-and-refund-policy'] = 'MainController/refund';
$route['terms-conditions'] = 'MainController/terms';




$route['first-class-flight-reservations'] = 'MainController/first_cls_reservation';
$route['business-class-flight-reservations'] = 'MainController/business_cls_reservation';
$route['group-travel-flight-reservation'] = 'MainController/group_tvl_reservation';

$route['flight-tickets-to-orlando'] = 'MainController/flight_to_orlando';
$route['flight-tickets-to-las-vegas'] = 'MainController/flight_to_las_vegas';
$route['flight-tickets-to-new-york'] = 'MainController/flight_to_new_york';

$route['book-cheap-flights-to-chicago'] = 'MainController/cheap_flight_chicago';
$route['book-cheap-flights-to-dallas'] = 'MainController/cheap_flight_dallas';
$route['book-cheap-flights-to-denver'] = 'MainController/cheap_flight_denver';
$route['book-cheap-flights-to-los-angeles'] = 'MainController/cheap_flight_los_angeles';
$route['book-cheap-flights-to-miami'] = 'MainController/cheap_flight_miami';
$route['spirit-airlines'] = 'MainController/landing_page1';
$route['frontier-airlines'] = 'MainController/landing_page2';
$route['hawaiian-airlines'] = 'MainController/hawaiian_airlines';
$route['cheap-flight-to-california'] = 'MainController/landing_california';
$route['cheap-flight-to-alaska'] = 'MainController/landing_alaska';
$route['site-map'] = 'MainController/site_map';
$route['success'] = 'MainController/success_msg';
$route['user-inquiry'] = 'MainController/user_inquiry';
$route['lp-page'] = 'MainController/lp_page';
$route['book-airline-tickets-under-49'] = 'MainController/flight_under49';
$route['flight-tickets-under-39'] = 'MainController/flight_under39';

$route['flight-search'] = 'MainController/flight_search';
$route['hawaiian-flights'] = 'MainController/hawaiian_flights';
$route['jetblue-airways'] = 'MainController/jetblue_flights';
$route['flights-to-united-states'] = 'MainController/united_flights';
$route['allegiant-airlines'] = 'MainController/allegiant_airlines';
$route['flights-to-southwest'] = 'MainController/flights_southwest';
$route['air-canada'] = 'MainController/air_canada';
$route['air-france'] = 'MainController/air_france';
$route['discount-and-savings-claim'] = 'MainController/discount_claim';
$route['top-destination'] = 'MainController/top_destination';
$route['cheap-flight-tickets'] = 'MainController/cheap_ft';
$route['spirit-airlines'] = 'MainController/spirit_airlines';
$route['alaska-airlines'] = 'MainController/alaska_airlines';
$route['jetblue-airways'] = 'MainController/jetblue_airways';
$route['cheap-flight'] = 'MainController/cheap_flight';
$route['aeromexico-airlines'] = 'MainController/aeromexico_airlines';
$route['flair-airlines'] = 'MainController/flair_airlines';
$route['test-front-page'] = 'MainController/test_front_page';
$route['southwest-airlines'] = 'MainController/southwest_airlines';
$route['front-page'] = 'MainController/front_page';
$route['disclaimer'] = 'MainController/disclaimer_page';
$route['british-airways'] = 'MainController/british_airways';
$route['canadian-north'] = 'MainController/canadian_north';
$route['qatar-airways'] = 'MainController/qatar_airways';

$route['emirates-airlines'] = 'MainController/emirates_airlines';
$route['klm-airlines'] = 'MainController/klm_airlines';
$route['united-airlines'] = 'MainController/united_airlines';
$route['lufthansa-airlines'] = 'MainController/lufthansa_airlines';
$route['about-usx'] = 'MainController/about_usx';
$route['contact-usx'] = 'MainController/contact_usx';
$route['cheap-flight-booking'] = 'MainController/cheap_flights';
$route['cheap-flight-tickets'] = 'MainController/cheap_flight_tickets';
$route['flights-under-49'] = 'MainController/flights_under_49';
$route['flights-under-69'] = 'MainController/flights_under_69';
$route['flights-under-99'] = 'MainController/flights_under_99';
$route['flights-under-199'] = 'MainController/flights_under_199';




$route['flight'] = 'MainController/flights';