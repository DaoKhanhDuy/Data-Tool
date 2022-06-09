error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh"); 
$wait = $green."Đợi";
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
$thuong = $do."[".$luc."●".$do."]".$trang." => ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }

@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Chọc Bạn Đơn Cookie\n";
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
$cookie = trim(fgets(STDIN));
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Chọc Bạn Đơn Cookie\n";
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
  

echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nên Để Delay Tránh Bị Block\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Delay: $vang";
    $a = trim(fgets(STDIN));
    echo $thanhngang;
    while (true) {
        $header = array(
            "Host: mbasic.facebook.com",
            "upgrade-insecure-requests: 1",
            "save-data: on",
            "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1803) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "sec-fetch-site:same-origin",
            "sec-fetch-mode:navigate",
            "sec-fetch-user:?1",
            "sec-fetch-dest:document",
            "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
            "cookie:$cookie",
        );
        $url = "https://mbasic.facebook.com/pokes/?ref_component=mbasic_bookmark&ref_page=XMenuController";
        $data = '{"Email":"tronglongts@gmail.com"}';
        $mr = curl_init();
        curl_setopt_array($mr, array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => "$url",
            CURLOPT_ENCODING => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            // CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $header
        ));
        $mr2 = curl_exec($mr);
        curl_close($mr);
        $json = json_decode($mr2, true);
        $id = explode('/pokes/inline/?', $mr2)[1];
        $id = explode('"', $id)[0];
        $ok = explode('poke_target=', $mr2)[1];
        $ok = explode('&', $ok)[0];
        $url = 'https://mbasic.facebook.com/pokes/inline/?' . htmlspecialchars_decode($id) . '';
        $data = '{"Email":"nguyenthuyanvta06@gmail.com"}';
        $mr = curl_init();
        curl_setopt_array($mr, array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => "$url",
            CURLOPT_ENCODING => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            // CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $header
        ));
        $mr2 = curl_exec($mr);
        curl_close($mr);
        $json = json_decode($mr2, true);
            $stt=$stt+1;
            $gio = date('H:i');
        $t= "\033[1;33m[\033[1;36m$stt\033[1;33m]\033[1;37m ● \033[1;96m$gio \033[1;97m● \033[1;93mTrọc Thành Công ID\033[1;37m ● \033[1;96m$ok\n";
$len = strlen($t);
    for ($xt = 0; $xt < $len; $xt++) {
        echo $t[$xt];
        usleep(1000);
			}
        for ($x=$a;$x>-1;$x--){
            $maul=rand(31,37);
$maui="\033[1;".$maul."m";
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
$max=0;
echo "\r";
}
