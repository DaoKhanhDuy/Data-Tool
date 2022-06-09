error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$vang = "\033[1;93m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do= "\033[1;91m"; 
$luc = "\033[1;92m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
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
$thanhngang = $vang."-------------------------------------------------------------\n";
$ip = file_get_contents('http://kiemtraip.com/raw.php');
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Safari/537.36';
$_SESSION['mobile'] = "Mozilla/5.0 (Linux; Android 10; RMX3063) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.87 Mobile Safari/537.36";

/***[ Đánh Dấu Bản Quyền ]***/
$thanh_xau= $do."[".$luc."●".$do."]".$trang." => ";
$thuong= $do."[".$luc."●".$do."]".$trang." => ";
$thanh_dep= $do."[".$luc."●".$do."]".$trang." => ";
/***[ Thiết Bị ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 2000;
	$_SESSION['delay'] = 5000;
} else {
	$_SESSION['load'] = 0;
	$_SESSION['delay'] = 0;
}
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
/***[ Banner ]***/

/***[ Clear + Thông Số Admin ]***/
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Trao Đổi Sub TikTok Token\n";
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
while (true){
if (file_exists("logtiktok_token.txt")){
	$_SESSION['token'] = fread(fopen("logtiktok_token.txt", "r"), filesize("logtiktok_token.txt"));
	$info = logintoken();
	echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."1".$vang."] ".$luc."Giữ Lại Tài Khoản ".$vang.$_SESSION['user']."\n";
	echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."2".$vang."] ".$luc."Nhập Access_Token TDS Mới \n";
	echo $thanh_dep.$luc."Nhập ".$trang."===>: $vang";
    	$chon_tk = trim(fgets(STDIN));
    if ($chon_tk == "2") {
        unlink("logtiktok_token.txt");
         
	} else if ($chon_tk == "1") {
    } else {
		echo $do." Lựa chọn không xác định !!!\n"; 
		  continue;
    }
}
if(!file_exists("logtiktok_token.txt")){
echo $thanh_dep.$luc."Nhập Token TDS: $vang";
$tokenacc = trim(fgets(STDIN));
$file = fopen("logtiktok_token.txt", "w+");
fwrite($file, ''.$tokenacc);
fclose($file);
}
$_SESSION['token'] = fread(fopen("logtiktok_token.txt", "r"), filesize("logtiktok_token.txt"));
	$login = logintoken();
	if(!$login["error"]){
		echo $xnhac." Đăng Nhập Thành Công.       \n";
		break;
	} else {
		echo $do."Đăng Nhập Thất Bại.\n";
		unlink("logtiktok_token.txt");
		 
	}
}
$urltim = "https://traodoisub.com/api/?fields=tiktok_like&access_token=".$_SESSION['token'];
$urlfl = "https://traodoisub.com/api/?fields=tiktok_follow&access_token=".$_SESSION['token'];
$urlcmt = "https://traodoisub.com/api/?fields=tiktok_comment&access_token=".$_SESSION['token'];
$js = xu($thanh_dep);
$xu = $js[0];
$xudie = $js[1];
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Trao Đổi Sub TikTok Token\n";
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
echo $thanh_dep.$luc."Tên Tài Khoản: ".$vang.$_SESSION['user']."\n";
echo $thanh_dep.$luc."Xu Hiện Tại: ".$vang.$xu."\n";
echo $thanh_dep.$luc."Xu Bị Phạt: ".$vang.$xudie."\n";
while(true) {
echo $thanhngang;
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Tim \n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Follow \n";
echo $thanh_dep.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
	$nhiemvu = trim(fgets(STDIN));
echo $thanh_dep.$luc."Nhập Delay: $vang";
	$delay = trim(fgets(STDIN));
echo $thanh_dep.$luc."Ẩn ID (\033[1;33my/n\033[1;32m): \033[1;33m";
$yon = trim(fgets(STDIN));
while(true) {
echo $thanh_dep.$luc."Nhận Tiền Sau Bao Nhiêu Nhiệm Vụ: $vang";
	$nhan = trim(fgets(STDIN));
if ($nhan < 8) { echo $do." Trên 8 Nhiệm Vụ Mới Được Nhận Tiền!\n"; continue; }
echo $thanh_dep.$luc."Nhập ID Tik Tok Cần Cấu Hình: $vang";
$idtik = trim(fgets(STDIN));
$idnick = layid($idtik);

$cauhinh = cauhinh($idnick[0]);
if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
echo $thanhngang;
echo $luc." Đang Cấu Hình ID: ".$vang.$idnick[0].$trang." </> ".$luc."Tên: ".$vang.$idnick[1]."\n";   
echo $thanhngang;
break;
} else {
echo $thanhngang;
echo $do." Cấu Hình Thất Bại ID: ".$trang.$idnick[0].$luc." </> ".$do."Tên: ".$trang.$idnick[1]." \n"; 
echo $thanhngang;
continue;
}
}

$ngoc = 0;
while(true) {
if ($ngoc == 1) {
	break;
}
if ($nhiemvu == "1"){
$json = api($urltim);
if ($json == ""){ echo $do." Kết Nối Mạng Không Ổn Định.\r"; continue; }

if($json["error"]){
                        if($json["error"] == 'Thao tác quá nhanh vui lòng chậm lại'){
  

                                         $del = explode(".", $json["countdown"])[0];
	
	ero($del);
                                continue;
                        } else {
                                echo $do.$json["error"]."\n";
                        }
                }

$listtim = $json["data"];
    if(count($listtim) == 0){
		echo $do."Có Quá Ít Nhiệm Vụ Tim, Không Thể Nhận Xu Khi Làm \n"; break;
	}
	if(count($listtim) !== 0){
		echo " \033[1;32mTìm Thấy ".$vang.count($listtim)." \033[1;32mNhiệm Vụ Tim \r";
	}
foreach ($listtim as $data){
$id = $data["id"];
$cache = cache($id, "LIKE");
$link = $data["link"];
$type = $data["type"];
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    	    @system('xdg-open '.$link);
    	} else {
        	@system('cmd /c start '.$link);
    	}
$dem++;
if($yon == "y") {
$kl = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;".rand(31,37)."m"."TIM\033[1;31m |\n";
} else {
$kl = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;".rand(31,37)."m"."TIM\033[1;31m | \033[1;37m".$id." \n";
}
for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
delay($delay);
//if($cache >= $nhan){
if($dem % $nhan == 0 ){
$nhantien = coin("LIKE");
if ($nhantien["data"]["msg"] == "+0 Xu") {
	echo $do."Kiểm Tra Lại Xem TikTok Đã Bị Block Chưa \n"; $ngoc = 1; break;
}
if ($nhantien["data"]) {
$xujob = $nhantien["data"]["msg"];
$xu = tien($nhantien["data"]["xu"]);
echo $thanhngang;
$kl = "\033[1;36m Nhận Thành Công ".($xujob / 500)." Nhiệm Vụ\033[1;31m | \033[1;32m".$xujob." \033[1;31m|\033[1;33m $xu \n";
for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
echo $thanhngang;
} else { echo $do.$nhantien["error"]."\n"; }
}
}
} else if ($nhiemvu == "2"){
$json = api($urlfl);
if ($json == ""){ echo $do." Kết Nối Mạng Không Ổn Định.\r"; continue; }
if($json["error"]){
                        if($json["error"] == 'Thao tác quá nhanh vui lòng chậm lại'){
  

                                         $del = explode(".", $json["countdown"])[0];
	
	ero($del);
                                continue;
                        } else {
                                echo $do.$json["error"]."\n";
                        }
                }


$listfl = $json["data"];
if(count($listfl) == 0){
	echo $do."Có Quá Ít Nhiệm Vụ Follow, Không Thể Nhận Xu Khi Làm \n"; break;
}
if(count($listfl) !== 0){
	echo " \033[1;32mTìm Thấy ".$vang.count($listfl)." \033[1;32mNhiệm Vụ Follow \r";
}
foreach ($listfl as $data){
$id = $data["id"];
$cache = cache($id, "FOLLOW");
$link = $data["link"];
$type = $data["type"];
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    	@system('xdg-open '.$link);
    } else {
        @system('cmd /c start '.$link);
    }
$dem++;
if($yon == "y") {
$kl = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;".rand(31,37)."m"."FOLLOW\033[1;31m | \n";
} else {
$kl = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;".rand(31,37)."m"."FOLLOW\033[1;31m | \033[1;37m".$id." \n";
}
for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
delay($delay);
//if($cache >= $nhan){
	if($dem % $nhan == 0 ){
$nhantien = coin("FOLLOW");
if ($nhantien["data"]["msg"] == "+0 Xu") {
	echo $do."Kiểm Tra Lại Xem TikTok Đã Bị Block Chưa \n"; $ngoc = 1; break;
}
if ($nhantien["data"]) {
$xujob = $nhantien["data"]["msg"];
$xu = tien($nhantien["data"]["xu"]);
echo $thanhngang;
$kl = "\033[1;36m Nhận Thành Công ".($xujob / 1000)." Nhiệm Vụ\033[1;31m | \033[1;32m".$xujob." \033[1;31m|\033[1;33m $xu \n";
for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
echo $thanhngang;
} else { echo $do.$nhantien["error"]."\n"; }
}
}
} else { echo $do." Vui Lòng Chọn 1 Nhiệm Vụ.\n"; break; }
}
}
function logintoken(){
    $ch  = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://traodoisub.com/api/?fields=profile&access_token=".$_SESSION['token'],
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
	$info = json_decode(curl_exec($ch), true);
	$_SESSION['user'] = $info["data"]["user"];
	return $info;
}
function xu($thanh_dep){
    $ch  = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://traodoisub.com/api/?fields=profile&access_token=".$_SESSION['token'],
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $js = json_decode(curl_exec($ch), true);
    $xu = tien($js["data"]["xu"]);
    $xudie = tien($js["data"]["xudie"]);
	return array($xu, $xudie);
}
function cauhinh($id){
    $ch = curl_init();
    curl_setopt_array($ch, array(
	CURLOPT_URL => "https://traodoisub.com/api/?fields=tiktok_run&id=".$id."&access_token=".$_SESSION['token'],
	CURLOPT_FOLLOWLOCATION => TRUE,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_USERAGENT => $_SESSION['useragent'],
	CURLOPT_ENCODING => TRUE
));
return json_decode(curl_exec($ch), true);
}
function api($url){
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => $_SESSION['useragent']
    ));
    return json_decode(curl_exec($ch), true);
}
function cache($id, $type){
    $url  = "https://traodoisub.com/api/coin/?type=TIKTOK_".$type."_CACHE&id=".$id."&access_token=".$_SESSION['token'];
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => $_SESSION['useragent']
    ));
    $data = json_decode(curl_exec($ch), true);
    return $data["cache"];
}
function coin($type){
    $url = "https://traodoisub.com/api/coin/?type=TIKTOK_".$type."&id=TIKTOK_".$type."_API&access_token=".$_SESSION['token'];
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => $_SESSION['useragent']
    ));
    $data = json_decode(curl_exec($ch), true);
return $data;
}
function tien($price){
    return str_replace(",", ".", number_format($price));
}
function chay($t) { for ($x = 0; $x <= $t; $x++) {echo "\033[1;37m= ";usleep(5000); } echo"\n";}
function gioithieu($banner, $thanh_dep){
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { @system('clear'); } else { @system('cls'); }
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}

}

function delay ($delay){
        for($tt = $delay ;$tt>= 1;$tt--){
        echo "\r\033[1;33m   ThưởngTool \033[1;97m ~>       \033[1;97m LO      \033[1;91m ● $tt ● ";usleep(150000);
        echo "\r\033[1;31m   ThưởngTool \033[0;96m   ~>     \033[0;96m LOA     \033[0;92m ● $tt ● ";usleep(150000);
        echo "\r\033[1;32m   ThưởngTool \033[0;95m     ~>   \033[0;95m LOAD    \033[0;93m ● $tt ● ";usleep(150000);
        echo "\r\033[1;34m   ThưởngTool \033[0;94m       ~> \033[0;94m LOADI   \033[0;94m ● $tt ● ";usleep(150000);
        echo "\r\033[1;35m   ThưởngTool \033[0;93m        ~>\033[0;93m LOADIN  \033[0;95m ● $tt ● ";usleep(150000);
        echo "\r\033[1;35m   ThưởngTool \033[0;92m        ~>\033[0;92m LOADING \033[0;96m ● $tt ● ";usleep(150000);
        echo "\r\033[1;35m   ThưởngTool \033[0;91m        ~>\033[0;91m LOADING.\033[0;97m ● $tt ● ";usleep(150000);} 
echo "\r\e[1;96m    Thuongchannel.xyz                  \r"; 
}
function layid($id) {
$ch=curl_init();
	curl_setopt_array($ch , array(
		CURLOPT_URL => "https://www.tiktok.com/@".$id,
		CURLOPT_TIMEOUT => 60,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => $_SESSION['mobile']
	));
	$access = curl_exec($ch);
$idt = explode("?refer", explode('user/profile/', $access)[1])[0];
$ten = explode('header-center">', explode('</h1><div', $access)[0])[1];
if(strlen($idt) > 5){
	return array($idt, $ten);
} else {
	return '2';
}
}
function geturl($url){
    $headers[] = 'User-Agent: '.$_SESSION['useragent'];
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
	    CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers
        ));
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "\033[1;31mVui Lòng Kiểm Tra Kết Nối Internet Hoặc VPN Rồi Thử Lại!\n";
        die;
    }
    return $result;
}
function ero($del) {
    for ($time = $del; $time > -0; $time--) {echo "\r"; 
	    echo "\r\033[1;31m Thao Tác Quá Nhanh Sẽ Chạy Lại Sau $time Giây"; sleep(1); echo "\r                                                       \r"; 
    }
}
