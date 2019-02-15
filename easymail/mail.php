<?php
$headers= "From: EasyDispatch <no-reply@easydispatch.ng>"."\r\n";;
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$variables = array();
$variables['origin'] = "Nck";
$variables['destination'] = "Bodethomas";
$variables['price'] = 500;
$variables['miles'] = 4;
//$variables['pdate'] = $new_date;
$variables['ptype'] = "mail test";
$variables['ttype'] = "easydispatch";
//$variables['category'] = $category;
$template = file_get_contents("https://www.easydispatch.ng/email_templates/job_delivered.php");
foreach($variables as $key => $value) {
    $template = str_replace('{{ '.$key.' }}', $value, $template);
}
$msg= $template;
@mail("chuks@ncktech.com","Job order delivery receipt",$msg, $headers);