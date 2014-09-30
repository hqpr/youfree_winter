<?php
date_default_timezone_set("Asia/Almaty");

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);
require 'app/registration.php';

/**
 * Return AJAX flag
 * @return bool
 */
function isAjax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

$output = array('status'=>'error', 'mess'=>'');

//check if request sended via ajax
if(isAjax()){
    if (!empty($_POST)) {
        $model = new Registration();

        //bind params
        $model->first_name = !empty($_POST['first_name']) ? $_POST['first_name'] : null;
        $model->last_name  = !empty($_POST['last_name']) ? $_POST['last_name'] : null;
        $model->phone      = !empty($_POST['mobile_number']) && preg_match('/\d{10}/', $_POST['mobile_number']) ? $_POST['mobile_number'] : null;
        $model->gender     = isset($_POST['sex']) && preg_match('/(0|1)/', $_POST['sex']) ? $_POST['sex'] : null;
        $model->email      = !empty($_POST['email']) ? $_POST['email'] : null;
        $model->birthdate  = $_POST['birth_year'] . '-' . $_POST['birth_month'] . '-' . $_POST['birth_day'];
        $model->is_smoker  = isset($_POST['is_smoker']) ? preg_match('/(0|1)/', $_POST['is_smoker']) : null;
    }

    try {
        $model->save();

        $output['status'] = 'ok';
    } catch (Exception $e) {
        $output['mess']   = $e->getMessage();
    }
} else {
    header('HTTP/1.0 403 Forbidden');
    $output['mess']   = 'request must be send via ajax';
}

echo json_encode($output);
exit;