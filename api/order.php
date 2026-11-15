<?php
// Solicitudes de pedido. Requiere HTTPS y PHP 8+. No procesa pagos.
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('Cache-Control: no-store');
function out($code,$msg){http_response_code($code);echo json_encode(['ok'=>$code<300,'message'=>$msg],JSON_UNESCAPED_UNICODE);exit;}
if($_SERVER['REQUEST_METHOD']!=='POST')out(405,'Método no permitido.');
if(empty($_SERVER['HTTPS'])||$_SERVER['HTTPS']==='off')out(400,'Se requiere conexión HTTPS.');
$origin=$_SERVER['HTTP_ORIGIN']??'';$host=$_SERVER['HTTP_HOST']??'';if($origin && parse_url($origin,PHP_URL_HOST)!==$host)out(403,'Origen no permitido.');
$raw=file_get_contents('php://input');if(strlen($raw)>20000)out(413,'Solicitud demasiado grande.');$d=json_decode($raw,true);if(!is_array($d))out(400,'Datos no válidos.');
$name=trim($d['name']??'');$email=filter_var($d['email']??'',FILTER_VALIDATE_EMAIL);$line=$d['line']??'';if(mb_strlen($name)<2||!$email||!in_array($line,['ready','mtm','adapted'],true)||empty($d['privacy']))out(422,'Revisa los campos obligatorios.');
$allowed=['name','email','phone','location','line','cut','fabric','fit','measureMode','size','height','neck','chest','waist','shoulders','sleeve','length','initials','illustration','notes','estimatedPrice'];$clean=[];foreach($allowed as $k){if(isset($d[$k])&&is_scalar($d[$k]))$clean[$k]=mb_substr(trim((string)$d[$k]),0,1200);} $clean['createdAt']=gmdate('c');$clean['ipHash']=hash('sha256',($_SERVER['REMOTE_ADDR']??'').(getenv('SARTORIAL_IP_SALT')?:'configure-a-secret-salt'));
$dir=dirname(__DIR__).'/data';if(!is_dir($dir)||!is_writable($dir))out(500,'El almacenamiento no está configurado.');$file=$dir.'/orders.jsonl';$fp=fopen($file,'ab');if(!$fp)out(500,'No se pudo guardar la solicitud.');flock($fp,LOCK_EX);fwrite($fp,json_encode($clean,JSON_UNESCAPED_UNICODE|JSON_INVALID_UTF8_SUBSTITUTE)."\n");flock($fp,LOCK_UN);fclose($fp);out(200,'Solicitud recibida.');
