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
$thuong = $do."[".$luc."●".$do."]".$trang." => ";
$sr = $do."[".$luc."●".$do."]".$trang." => ".$luc."";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$ip = file_get_contents('http://kiemtraip.com/raw.php');
/////key tool ///////

@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool RPW Liker\n";
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
$list_ck = [];
$list_ua = [];
for($i=0;$i<=9999999;$i++){
echo $sr."Nhập Cookie RpwLiker Thứ ".($i+1).": \033[1;31m";
$ckk = trim(fgets(STDIN));
if($ckk != ''){array_push($list_ck, $ckk);} else {break;}
echo $sr."Nhập User Agent Thứ ".($i+1).": \033[1;31m";
$uaa = trim(fgets(STDIN));
if($uaa != ''){array_push($list_ua, $uaa);} else {break;}
}
dk();
if(count($list_ck) != count($list_ua)){
  echo $sr."Ngáo À Bạn Hiền !!\n";
  exit();
}
echo $sr."Bạn Đã Nhập ".count($list_ck)." Cookie RpwLiker Và User Agent\n";
dk();
echo $sr."Buff Avatar Thỉ Nhập Link Có Dạng photo...\n";
echo $sr."Nhập Link Bài Viết: \033[1;37m";
$link = trim(fgets(STDIN));
dk();
echo $sr."Buff Like Việt Hay Tây (viet/tay): ";
$kl = trim(fgets(STDIN));
if($kl == 'tay'){
$kl="0";
}else{
$kl="1";
}
dk();
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool RPW Liker\n";
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
echo $sr."Nhập like\n";
echo $sr."Nhập love\n";
echo $sr."Nhập haha\n";
echo $sr."Nhập sad\n";
echo $sr."Nhập wow\n";
echo $sr."Nhập angry\n";
echo $sr."Buff Xong Chưa Lên Cảm Xúc Liền Đâu Nha\n";
dk();
echo $sr."Nhập Cảm Xúc Cần Tăng: \033[1;93m";
$cx = trim(fgets(STDIN));
dk();
$dem = 1;
while (true){for($gh=0;$gh<count($list_ck);$gh++){$ck = $list_ck[$gh];$ua=$list_ua[$gh];$token = get_token($ck, $ua);$bf = buff($cx, $ck, $ua, $link, $token,$kl);if(strpos($bf, 'success')){if(strpos($bf, 'true')){hoanthanh($dem, $cx);$f = 1200;}else{echo $sr.$bf;}} elseif(strpos($bf, 'Try again after')){if(strpos($bf, 'minutes')){$f = explode(' minutes', explode('Try again after ', $bf)[1])[0];in_ra($sr."Bạn Đã Buff Trước Đó - Chờ ".$f." Phút Để Chạy Tiếp \r");echo "$f Phút\r";sleep(2);$f = $f*60+2;break;} else {$f = explode(' secon', explode('Try again after ', $bf)[1])[0]+2;in_ra($sr."Bạn Đã Buff Trước Đó - Chờ ".$f." Giây Để Chạy Tiếp \r");echo $f." Giây";sleep(2);}}$dem++;}dung($f);}function dung($delay){for($i=$delay;$i--;$i){echo "                                           \r";
          echo "\e[1;32m● Vui lòng chờ \e[1;31m▉\e[1;32m■\e[1;33m■\e[1;34m■\e[1;35m■ ".$i." \e[1;33m giây";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;36m● Vui lòng chờ \e[1;33m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■ ".$i."\e[1;34m giây";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;34m● Vui lòng chờ \e[1;34m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■ ".$i."\e[1;31m  iây";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;33m● Vui lòng chờ \e[1;35m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■ ".$i."\e[1;32m giây";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;31m● Vui lòng chờ \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉ ".$i."\e[1;36m giây";
       usleep(185000);
       echo "\r";
      
}}
function buff($cx, $ck, $ua, $link, $token, $kl){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://rpwliker.com/facebook/autoreaction');
  $head[] = "Host:rpwliker.com";
  $head[] = "x-csrf-token:$token";
  $head[] = "user-agent:$ua";
  $head[] = "referer:https://rpwliker.com/facebook/posts";
  $head[] = "cookie:$ck";
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $da = "is_from_local=".$kl."&is_from_old_account=0&reaction_type[]=$cx&&post_link=$link&quantity=100";
  curl_setopt($ch, CURLOPT_POSTFIELDS, $da);
  $a = curl_exec($ch);
  curl_close($ch);
  return $a;
}
function get_token($ck,$ua){
	$ch = curl_init();
	$sr="\033[1;91m[\033[1;32m🔥\033[1;91m]\033[1;97m => \033[1;92m";
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_URL, 'https://rpwliker.com/facebook/posts');
	$head[] = "Host:rpwliker.com";
        $head[] = "user-agent:$ua";
        $head[] = "referer:https://rpwliker.com/";
        $head[] = "cookie:$ck";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
        $a = curl_exec($ch);
    if(strpos($a, 'csrf-token')){
    	$token = explode('">', explode('me="csrf-token" content="', $a)[1])[0];
    } else {
    	exit($sr."Lấy Token Thất Bại \n$a");
    }
    return $token;
}
function hoanthanh($dem, $type){
  $mau = "\033[1;".rand(31,37)."m";
  $a = "\033[1;91m[ \033[1;92m".$dem." \033[1;91m] \033[1;93m".date("H:i")." \033[1;91m● \033[1;093mThuongTool \033[1;91m● \033[1;92m BUFF THÀNH CÔNG ".strtoupper($type)."\n";
  for($k=0;$k<strlen($a);$k++){
    echo $a[$k];
    usleep(8000);
  }
}

function dk(){
    for($i=0;$i<=30;$i++){
        echo "\033[1;93m-";
        usleep(6000);
        echo "\033[1;93m-";
        usleep(6000);
    }
    echo "\n";
}
