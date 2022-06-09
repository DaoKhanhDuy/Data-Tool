error_reporting(0);
session_start();
$res="\033[0m";
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$BGreen="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$red="\033[1;31m";
$white= "\033[1;37m";
$whiteb= "\033[1;37m";
$redb="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$cam="\033[1;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[1;34m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$vang="\033[1;93m";
$do="\033[1;91m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$BCyan="\033[1;36m";
$trang="\033[1;37m";
$do="\033[1;31m";
$luc="\033[1;32m";
$vang="\033[1;33m";
$luc="\033[1;92m";
$thuong = $do."[".$luc."●".$do."]".$trang." => ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday':
  $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday':
    $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday':
      $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday':
        $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday':
          $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday':
            $weekday = "\033[1;33mThứ \033[1;36m7"; break; default:
              $weekday = "\033[1;33mCN"; break; }

 //Key tool
if (!$sock = @fsockopen('www.google.com', 80)) {echo 'Vui lòng bật kết nối mạng';
exit;
  }

@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Lọc Bạn Bè Đơn Cookie\n";
usleep(70000);
echo $thuong.$xnhac."Bản Quyền Thưởng Channel\n";
usleep(70000);
echo $thuong.$BBlue."Web Bán Xu + Key Tool + VPS:".$do." http://thuongchannel.xyz\n";
usleep(70000);
echo $thuong.$maugi."Web Tăng Like Follow:".$do." http://thuonglike.tk\n";
usleep(70000);
echo $thuong.$xnhac."Hôm Nay \033[1;36m$weekday \033[1;33mNgày \033[1;36m$ngay \033[1;33mTháng \033[1;36m$thang \033[1;33mNăm \033[1;36m$nam$end\033[0;00m\n";
usleep(70000);
echo $thuong.$hong."IP Tool Của Bạn: \033[1;97m$ip\n";
usleep(70000);
echo $luc."╚═══════════════════════════════════════════════════════════╝\n";
usleep(70000); 
echo $green." Nhập Cookie Facebook Cần Lọc Bạn Bè:$white ";
$cookie=trim(fgets(STDIN));
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36";

$access = cookie($cookie,$useragent);
$access_token = 'EAAG'.explode('","', explode('EAAG', $access)[1])[0];
if ($access_token == 'die') {
  echo $thuong.$do."[".$luc."●".$do."]".$red." ●".$do."Cookie Facebook Die\n";
}
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Lọc Bạn Bè Đơn Cookie\n";
usleep(70000);
echo $thuong.$xnhac."Bản Quyền Thưởng Channel\n";
usleep(70000);
echo $thuong.$BBlue."Web Bán Xu + Key Tool + VPS:".$do." http://thuongchannel.xyz\n";
usleep(70000);
echo $thuong.$maugi."Web Tăng Like Follow:".$do." http://thuonglike.tk\n";
usleep(70000);
echo $thuong.$xnhac."Hôm Nay \033[1;36m$weekday \033[1;33mNgày \033[1;36m$ngay \033[1;33mTháng \033[1;36m$thang \033[1;33mNăm \033[1;36m$nam$end\033[0;00m\n";
usleep(70000);
echo $thuong.$hong."IP Tool Của Bạn: \033[1;97m$ip\n";
usleep(70000);
echo $luc."╚═══════════════════════════════════════════════════════════╝\n";
usleep(70000); 
while(true){ 
 unset($so); unset($_SESSION['giaay']);unset($nhap);
 unset($nguoi); unset($so1); unset($dem);
$banbe =[];
$listbv = getbaiviet($cookie,$access_token,$useragent,'me')->{'data'};
$listbb = getbanbe($access_token,$useragent)->{'data'};
foreach ($listbb as $idbb){
$idbb = $idbb->{'id'};
array_push($banbe,$idbb); 
}
while(true){
echo $thuong.$BCyan."Đang Đếm Số Bạn Bè Tương Tác Trong 3 Tháng Qua \n";
echo $thanhngang;
sleep (2);
foreach ($listbv as $key => $list){
 $id = $list->{'id'};if (strstr($id,'_')){$idbv = explode('_',$id)[1];}
$like = demlike($cookie,$access_token,$idbv,$useragent)->{'data'};
if(!empty($like)){
foreach ($like as $key2=> $likes){
 $id = $likes->{'id'}; $name = $likes->{'name'};
 if(in_array($id,$banbe) == true){$so++;
 $banbe = \array_diff($banbe, [$id]);
 echo $BYellow."[".$BCyan.$so.$BYellow."]".$BGreen." Bạn Của Bạn Là: ".$BYellow.$name.$BGreen." Đã Tương Tác Với Bạn\n";
 }
}}
}
echo $thanhngang;
echo $Blue."\033[1;31m[\033[1;32m●\033[1;31m]$white => \033[1;71mCòn lại:\033[1;31m ".count($banbe)." \033[1;37mChưa Tương Tác Lần Nào\n";
echo $Blue."\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập Số Bạn Muốn Xóa: ".$BYellow;
$xoa = trim(fgets(STDIN));
echo $Blue."\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập Delay Khi Xóa: $BYellow";
$giay = trim(fgets(STDIN));
echo $thanhngang;
foreach ($banbe as $id=>$key){
$uid = $key;
$g = xoabanbe($cookie,$uid,$useragent);
$so1++;
echo  $BCyan."[".$BCyan.$so1.$BCyan."]".$BGreen." Đã Xoá ".$BCyan.$uid.$BGreen." Ra Khỏi Danh Sách Bạn Bè\n";
for($v = 0;$v<$giay;$v++){echo $yellow."Vui Lòng Đợi   ".($giay-$v)." giây ~>";sleep(1);echo "     \r";} 
if ($so1 == $xoa){
  echo " Đã Xóa Thành Công Số Bạn Bè Cần Xóa\n";
  break;sleep(5);
}
} unset($so);break;
}break;
}
function getbaiviet($cookie,$access_token,$useragent,$idfb){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idfb.'/posts?limit=1000&fields=id,name&access_token='.$access_token);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access_token);
}
function demlike($cookie,$access_token,$idpost,$useragent){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v1.0/'.$idpost.'/likes?access_token='.$access_token.'&pretty=1&limit=5000');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function getbanbe($access_token,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://graph.facebook.com/me/friends/?access_token='.$access_token);
  $head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return json_decode(curl_exec($ch));
curl_close($ch);
}
function xoabanbe($cookie,$id,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/profile.php?id='.$id);
  $head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
$list = curl_exec($ch);
$data1 = explode('" autocomplete=',explode('name="fb_dtsg" value="',$list)[1])[0];
$data2= explode('" autocomplete=',explode('name="jazoest" value="',$list)[1])[0];
$data = http_build_query(array('fb_dtsg'=>$data1,'jazoest'=>$data2,'friend_id'=>$id ,'unref'=>'profile_gear','confirm'=>'Xác nhận'));
$head[] = 'content-length: '.strlen($data);
$head[] = 'refer: https://mbasic.facebook.com/removefriend.php?friend_id='.$id.'&unref=profile_gear&refid=17';
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/a/removefriend.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$h = curl_exec($ch);
curl_close($ch);
}
function gettiephome($cookie,$linktiep,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$linktiep);
$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function gethome($cookie,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/home.php');
$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function cookie($cookie, $useragent) {
    $head= array("Connection: keep-alive","Keep-Alive: 300","authority: business.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document");
$ch=curl_init();
	curl_setopt_array($ch , array(
		CURLOPT_URL => "https://business.facebook.com/business_locations",
		CURLOPT_USERAGENT => $useragent,
		CURLOPT_COOKIE => $cookie,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE
	));
	$access = curl_exec($ch);
	curl_close($ch);
$access_token = 'EAAG'.explode('","', explode('EAAG', $access)[1])[0];
if(strlen($access_token) > 5){
	return $access_token;
} else {
	return 'die';
}
}
