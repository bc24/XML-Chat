<?PHP
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

header('Content-Type: application/json');

$msg    = htmlspecialchars($_GET['msg']);
$datum  = date("m.d.Y H:i:s", time());
$ip     = $_SERVER['REMOTE_ADDR'];

$string = file_get_contents("messages.json");
$json_a = json_decode($string, true);

$new_line['ip']     = $ip;
$new_line['text']    = $msg;
$new_line['datum']  = $datum;

array_push($json_a['messages'],$new_line);
$new_json = json_encode($json_a, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
file_put_contents("messages.json", $new_json);
print $new_json;
?>