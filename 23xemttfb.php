error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$gio = date( 'H:i' );
$ngay = date("d/m/Y");
$res="\033[0m";
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
$vang="\033[1;33m";
$luc="\033[1;92m";
$thuong = $do."[".$luc."●".$do."]".$trang." => ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }

 //Key tool
if (!$sock = @fsockopen('www.google.com', 80)) {echo 'Vui lòng bật kết nối mạng';
exit;
  }

///vao tool
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Check Thông Tin Facebook Token\n";
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

while(true) {
echo $thuong.$luc."Nhập Token Facebook: $vang";
$cookie=trim(fgets(STDIN));
if ($cookie != 1 && $cookie != '') {
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
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
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
	if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0]) {
	}
	if (true) {
		$access_token = $cookie;
		if (json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'id'}) {
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'id'};
$hofb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'first_name'};
$type = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'locale'};
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'last_name'};
$ns = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'birthday'};
$gmail = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'email'};
$gt = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'gender'};
$idcfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'username'};
$name = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'name'};
$link = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'link'};
$name = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'name'};
$tt = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'relationship_status'};
echo "                                                      \r";
usleep(20000);
echo $luc."Token Chính Xác Đợi Lấy Thông Tin\n";
sleep(4);
@system("clear");
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Check Thông Tin Facebook Đơn Token\n";
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
echo $thuong.$xanht."Female:".$vang." Nữ\n";
echo $thuong.$do."Male:".$vang." Nam\n";
echo $thuong.$cyan."Vi_Vn:".$vang." Việt Nam\n";
echo $thanhngang;
echo $trang." Link Fb: \033[1;36m".$link."\n";
usleep(50000);
echo $luc." Tên: \033[1;36m".$hofb."\n";
usleep(50000);
echo $vang." Họ: \033[1;36m".$tenfb."\n";
usleep(50000);
echo $do." Tên Fb: \033[1;36m".$name."\n";
usleep(50000);
echo $Blue." ID Fb: \033[1;36m".$idfb."\n";
echo $hong." Username Fb: \033[1;36m".$idcfb."\n";
usleep(50000);
echo $trang." Gmail: \033[1;36m".$gmail."\n";
usleep(50000);
echo $luc." Ngày Sinh: \033[1;36m".$ns."\n";
usleep(50000);
echo $do." Giới Tính: \033[1;36m".$gt."\n";
usleep(50000);
echo $vang." Quốc Tịch: \033[1;36m".$type."\n";
echo $Blue." Tình Cảm: \033[1;36m".$tt."\n";
echo "\n";
exit;
}else{
echo $do." Nhập Sai Token Đã Bị Out\n";
usleep(50000);
exit;
}
}
}
}
