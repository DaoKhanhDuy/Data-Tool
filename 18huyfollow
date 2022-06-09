error_reporting(0);
session_start();
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
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ip = file_get_contents('http://kiemtraip.com/raw.php');
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
$thuong = $do."[".$luc."●".$do."]".$trang." => ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }

if (!$sock = @fsockopen('www.google.com', 80)) {echo 'Vui lòng bật kết nối mạng';
exit;
  }
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Hủy Follow Facebook Đơn Cookie\n";
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

echo $thuong.$luc."Nhập Cookie Facebook: $vang";
        $cookie=trim(fgets(STDIN));
$head= array("Connection: keep-alive","Keep-Alive: 300","authority: m.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document");
$ch=curl_init();
        curl_setopt_array($ch , array(
                CURLOPT_URL => "https://business.facebook.com/business_locations",
                CURLOPT_USERAGENT => $_SESSION['useragent'],
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
$page = thongtin('me', $cookie, $useragent);
//lấy tên
$tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
$idfb = explode('%',explode('?lst=', $page)[1])[0];
}else{
        exit($thuong.$do."Cookie Facebook Bị Die     \n");
}
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Hủy Follow Facebook Đơn Cookie\n";
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
echo $thuong.$luc."Nhập Delay: $vang";
        $delay = trim(fgets(STDIN));
if ($delay <= 1){ echo $thuong.$do."Nhập ít Nhất 1 Giây\n"; } else { break; }
}
echo $thuong.$luc."Hủy Follow Bao Nhiêu Job Thì Bật Chống Block: $vang";
        $BLOCK = trim(fgets(STDIN));
echo $thuong.$luc."Sau ".$vang.$BLOCK."$luc Job Hủy Follow Thì Nghỉ Bao Lâu: $vang";
        $delaybl = trim(fgets(STDIN));  
echo $thanhngang;
echo $luc." Đang Chạy Facebook: ".$vang.$tenfb." ".$luc."ID FB: ".$vang.$idfb."".$res."\n";
echo $thanhngang;
$id = explode(';',explode('c_user=',$mr2)[1])[0];
$t=10;
$dem=0;
while(true){
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/subscribe/lists/?id=$id&f=$t&t=out");
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($mr, CURLOPT_USERAGENT, $_SESSION['useragent']);
curl_setopt($mr, CURLOPT_COOKIE, $cookie);
curl_setopt($mr, CURLOPT_HTTPHEADER, $head);
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($mr, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($mr, CURLOPT_FOLLOWLOCATION, TRUE);
$mr2 = curl_exec($mr);
if(explode('"bn"><a href="/',$mr2)){
$one=explode('"bn"><a href="/',$mr2);
if(count($one)<=1){$t=$t+10;}
for($i=1;$i<count($one);$i++){
$url=htmlspecialchars_decode(explode('"',$one[$i])[0]);
$name=htmlspecialchars_decode(explode('</span></a>',explode('><span>',$one[$i])[1])[0]);
$link = "https://mbasic.facebook.com/$url";
curl_setopt($mr, CURLOPT_URL, $link);
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
$mr2 = curl_exec($mr);
$chantt = strpos($mr2,">Ok<");
if ($chantt==true) {
 echo $do."Bạn Hủy Follow Quá Thường Xuyên Sẽ Bị Hạn Chế, Nghỉ 90 Giây Để Tiếp Tục      \n";
 delay(90);
 break;
}
if(explode('"',explode('/a/subscriptions/remove?',$mr2)[1])[0]){
$url=htmlspecialchars_decode(explode('"',explode('/a/subscriptions/remove?',$mr2)[1])[0]);
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/a/subscriptions/remove?$url");
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
$mr2 = curl_exec($mr);
$check = explode('"',explode('/a/subscribe.php?',$mr2)[1])[0];
if($check==TRUE){ $stt_job++;
$idacc = explode("&", $url)[0];
$idacc = explode("subject_id=", $idacc)[1];
$kl = "\033[1;33m[\033[1;37m".$stt_job."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m |\033[1;32m HỦY FOLLOW\033[1;31m | ".$trang.$idacc."\033[1;31m | \033[1;36m".$name." \n";

for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(2000);}
if ($stt_job % $BLOCK == 0){ delay ($delaybl); } else { delay ($delay); }
}elseif($check==FALSE){
  echo $do."Hủy Follow $name Thất Bại $name \r";}
}
}
}
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
function thongtin($id1, $cookie, $useragent)
{

    $ch = curl_init();
    $header = array(
        "Host:m.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    $linkbv = 'https://m.facebook.com/' . $id1 . '/about';
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $page = curl_exec($ch);
    $page1 = json_decode($page);
    return $page;
}
