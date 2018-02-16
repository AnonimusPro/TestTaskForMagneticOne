<?php
$url = "http://magnetictest.tryfcomet.com/service/v4_1/rest.php";
$username = "magneti1";
$password = "olB86m4kJ5";

function call($method, $parameters, $url)
{
    ob_start();
    $curl_request = curl_init();

    curl_setopt($curl_request, CURLOPT_URL, $url);
    curl_setopt($curl_request, CURLOPT_POST, 1);
    curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($curl_request, CURLOPT_HEADER, 1);
    curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

    $jsonEncodedData = json_encode($parameters);

    $post = array(
         "method" => $method,
         "input_type" => "JSON",
         "response_type" => "JSON",
         "rest_data" => $jsonEncodedData
    );

    curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
    $result = curl_exec($curl_request);
    curl_close($curl_request);

    $result = explode("\r\n\r\n", $result, 2);
    $response = json_decode($result[1]);
    ob_end_flush();

    return $response;
}

$login_parameters = array(
     "user_auth" => array(
          "user_name" => $username,
          "password" => md5($password),
          "version" => "1"
     ),
     "application_name" => "RestTest",
     "name_value_list" => array(),
);

$login_result = call("login", $login_parameters, $url);

$session_id = $login_result->id;

 $get_entry_list_parameters = array(

         'session' => $session_id,

         'module_name' => 'Accounts',

         'query' => "",

         'order_by' => "",

         'offset' => '0',

         'select_fields' => array(
              'id',
              'name',
              'title',
         ),


         'link_name_to_fields_array' => array(
         ),

         'max_results' => '10',
         'deleted' => '0',
         'Favorites' => false,
    );

    $get_entry_list_accounts = call('get_entry_list', $get_entry_list_parameters, $url);

    $get_entry_list_parameters['module_name'] = 'Leads';
    $get_entry_list_leads = call('get_entry_list', $get_entry_list_parameters, $url);

    $get_entry_list_parameters['module_name'] = 'Contacts';
    $get_entry_list_contacts = call('get_entry_list', $get_entry_list_parameters, $url);

    $get_entry_list_parameters['module_name'] = 'Tasks';
    $get_entry_list_tasks = call('get_entry_list', $get_entry_list_parameters, $url);

    $get_entry_list_parameters['module_name'] = 'Opportunities';
    $get_entry_list_opportunities = call('get_entry_list', $get_entry_list_parameters, $url);

	$get_entry_list_parameters['module_name'] = 'Users';
    $get_entry_list_users = call('get_entry_list', $get_entry_list_parameters, $url);
    require_once('view.php');

?>