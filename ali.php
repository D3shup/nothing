<?php
//==========//
#By Code: @pd3li ريمبو#
#CH: @pd3li#
#تنشر اذكر المصدر لا تصير فرخ#
//==========//
$API_KEY = "5832963320:AAErTWkJJdoj6xNSTYlnLVQMpPTCmNYwVKs";
define("API_KEY",$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER["SERVER_NAME"] . "" . $_SERVER["SCRIPT_NAME"]);
function bot($method,$datas=[]){
$rembo = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$rembo";
$sajad = file_get_contents($url);
return json_decode($sajad);}
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$get = file_get_contents("https://rembo1.000webhostapp.com/getme.php?token=$text"); 
$js = json_decode($get);
$jh = $js->result;
$nameb = $jh->first_name;
$userb = $jh->username;
$bid = $jh->id;
//==========//
#By Code: @pd3li المطور#
#CH: @pd3li#
#تنشر اذكر المصدر لا تصير فرخ#
//==========//
if($text =="/start"){
	bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
مرحبًا بك في بوت اشتراكات هاك ببجي موبايل، 
حالة اشتراكك : غير مشترك ❌
للأشتراك ارسل (/on)
",
]); 
}
if($text =="/on"){
	bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
تم تفعيل حالة الاشتراك التجريبي لفترة محدودة ✅
راسل المطور لتستلم المفتاح والنسخة  ( @PD3lI )
وللأشتراك الدائمي عليك تحويل (3$) للرقم التالي،
+9647711760314
ثم مراسلة المطور ✅
",
]); 
}
if($text =="."){
	bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"@PD3lI "
]); 
}
if($text =="المطور"){
	bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"@PD3lI "
]); 
}
//==========//
#By Code: @pd3li المطور#
#CH: @pd3li#
#تنشر اذكر المصدر لا تصير فرخ#
//==========//