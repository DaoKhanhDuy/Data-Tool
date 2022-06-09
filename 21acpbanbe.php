error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
//color
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$do= "\033[1;91m"; 
$yellow = "\033[0;33m";
$vang = "\033[1;93m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
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
$ngay = date("d-m-Y"); 
$TIME=`date "+%H:%M"`; 
$cuongdz = $do."[".$luc."●".$do."] ".$trang."=> ";
$cuongvip = $do."[".$luc."●".$do."]";
$thuong = $do."[".$luc."●".$do."]".$trang." => ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$ip = file_get_contents('http://kiemtraip.com/raw.php');
date_default_timezone_set("Asia/Ho_Chi_Minh");
$useragent="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36";
$wait = $green."Đợi";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }

@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Chấp Nhận Kết Bạn Đơn Cookie\n";
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

echo $cuongdz.$luc."Nhập Cookie Facebook Cần Chạy: $vang";
$khocookie = (string)trim(fgets(STDIN));

@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Chấp Nhận Kết Bạn Đơn Cookie\n";
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

echo $cuongvip.$luc." Nhập Delay (trên 10s):$vang ";
$a = trim(fgets(STDIN));
echo $cuongvip.$luc." Chấp Nhận KB Bao Nhiêu Bật Chống Block: $vang";
$dungblock = trim(fgets(STDIN));
echo $cuongvip.$luc." Nhập Thời Gian Nghỉ Chống Block: $vang";
$delaybl = trim(fgets(STDIN));
echo $cuongvip.$luc." Chấp Nhận Bao Nhiêu KB Thì Dừng Tool: $vang";
$dungtool = trim(fgets(STDIN));

echo $thanhngang;
while (true) {
$header = array( "Host: mbasic.facebook.com", "upgrade-insecure-requests: 1", "save-data: on", "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1803) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site:same-origin", "sec-fetch-mode:navigate", "sec-fetch-user:?1", "sec-fetch-dest:document", "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cookie: $khocookie", );
$url = "https://mbasic.facebook.com/";
$data = '{"Email":"cuonghataycu@gmail.com"}';
$mr = curl_init();
curl_setopt_array($mr, array( CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $header ));
$mr2 = curl_exec($mr);
curl_close($mr);
$json = json_decode($mr2, true);
$c = explode('/a/notifications.php?', $mr2)[1];
$c = explode('"', $c)[0]; $id = explode('/a/notifications.php?confirm=', $mr2)[1];
$id = explode('&', $id)[0];
if ($id == "") {
echo $thuong.$do."Đã Hết Lời Mời\n";
exit;
}
$url = 'https://mbasic.facebook.com/a/notifications.php?' . htmlspecialchars_decode($c) . '';
$data = '{"Email":"vunamthangtb87@gmail.com"}';
$mr = curl_init();
curl_setopt_array($mr, array( CURLOPT_PORT => "443", CURLOPT_URL => "$url", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $header ));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2, true);
$t = random_int(31,37);
    $mau = "\e[1;$t"."m";
    $stt=$stt+1;
    $gio = date('H:i');
echo "\033[1;33m[\033[1;36m$stt\033[1;33m]\033[1;37m ● \033[1;96m$gio \033[1;97m● \033[1;93mChấp Nhận KB Thành Công ID\033[1;37m ● \033[1;96m$id\n";
for ($x = $a; $x >-1 ; $x--) {
echo " \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mThời Gian Delay Còn ".$vang.$x."\e[1;34m giây \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■ \e[1;34mThời Gian Delay Còn ".$vang.$x."\e[1;31m giây \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■ \e[1;33mThời Gian Delay Còn ".$vang.$x."\e[1;32m giây \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉ \e[1;31mThời Gian Delay Còn ".$vang.$x."\e[1;36m giây"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mThời Gian Delay Còn ".$vang.$x."\e[1;34m giây \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
}
           if ( $stt >= $dungtool ){
    echo $cuongdz.$luc."Hoàn Thành Chấp Nhận Kết Bạn\n";
    echo $thanhngang; echo $cuongdz.$luc."Đã Chấp Nhận \033[1;93m".$stt."\033[1;92m Bạn Bè\n";
    exit;}
                      
                     if($stt % $dungblock == 0 ){
                      delay2($delaybl);
                    }
 } 
           
           function delay2($delaybl){
  $green="\e[1;32m";
  $yellow="\e[1;33m";
  for($j = $delaybl;$j> 0;$j--){
    echo " \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mThời Gian Nghỉ Block Còn ".$vang.$j."\e[1;34m giây \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■ \e[1;34mThời Gian Nghỉ Block Còn ".$vang.$j."\e[1;31m giây \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■ \e[1;33mThời Gian Nghỉ Block Còn ".$vang.$j."\e[1;32m giây \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉ \e[1;31mThời Gian Nghỉ Block Còn ".$vang.$j."\e[1;36m giây"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mThời Gian Nghỉ Block Còn ".$vang.$j."\e[1;34m giây \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
}
  echo "\r";
  echo "                                                      \r";
}
