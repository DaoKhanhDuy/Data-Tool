error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$BBlue="\033[1;34m"        ;
$maugi="\033[1;35m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$white= "\033[0;37m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";
$ip = file_get_contents('http://kiemtraip.com/raw.php');
date_default_timezone_set("Asia/Ho_Chi_Minh");
$useragent="Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36";
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
        $weekday = "\033[1;33mThứ \033[1;36m5"; bireak; case 'friday':
          $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday':
            $weekday = "\033[1;33mThứ \033[1;36m7"; break; default:
              $weekday = "\033[1;33mCN"; break; }

 //ket noi mang //////
if (!$sock = @fsockopen('www.google.com', 80)) {echo 'Vui lòng bật kết nối mạng';
exit;
  }
/////sever tool ///////
/*$lock=file_get_contents('https://pastebin.com/raw/6jcRGkBx');
$keylock=md5(htmlspecialchars($lock));
if (md5('lock') != $keylock){
sleep(0); 
@system('clear');
$string = strlen($logo);
for($i=0; $i<=$string; $i++){
echo $logo[$i];usleep(500);}
echo $thuong.$do."Tool Hiện Tại Đã Dừng Hoạt Động\n";
echo $thanhngang;
echo $thuong.$xnhac."Vào Link Này Xem Có Cập Nhật Tool Mới Chưa\n";
echo $thuong.$do."http://thuongtool.blogspot.com\n";
echo $thanhngang;
exit;
}
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Nuôi Facebook Đa Cookie 2.0\n";
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
/// key tool /////
while (true){
$checkkey  = file('https://pastebin.com/raw/Lx1b6ReB');
echo $thuong.$cyan."Lưu Ý Mỗi Ngày Sẽ Đổi Một Key\n";
echo $thuong.$vang."Link lấy key: ".$red."https://link1s.com/Keynuoifb2\n";
echo $thuong.$luc."Nhập Key Để Vào Tool: \033[1;33m";
      $makey = trim(fgets(STDIN));
    if ($makey == $checkkey[0])  {
    sleep(1);
        echo "\033[1;32";
        echo "\n";
        break;
    } else {
        echo $thuong.$do."Key Sai Vui Lòng Lấy Lại\n";
        echo $thanhngang;
        sleep(1);
       continue;
       }
}**/
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Nuôi Facebook Đa Cookie 2.0\n";
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

///cookie facebook ///////////
$khoToken = [];
if (file_exists('nuoifb_cookie_2.0.txt')){
    echo $thuong.$luc."Vào Tool Luôn Bấm ".$trang."Enter".$luc." Thay Cookie FB Nhập ".$do."ok: $vang";
   $choice=trim(fgets(STDIN));
    if ($choice=='ok'){
        @system('rm nuoifb_cookie_2.0.txt');
        }
    }
if (!file_exists('nuoifb_cookie_2.0.txt')){
for($a = 1; $a < 999999;$a++){
echo $thuong.$vang."Nếu Không Nhập Cookie Facebook Nữa Ấn Enter\n";
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Cookie Facebook Thứ $a \e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
$access_token = gettoken($cookie, $useragent);
array_push($khoToken,$nhapck);

    }
            $js=json_encode($khoToken);
            $demcki=count($khoToken);
            $k = fopen("nuoifb_cookie_2.0.txt","a+");
fwrite($k, $js);
fclose($k);
echo $thuong.$luc."Bạn đã nhập ".$vang.$demcki." ".$luc."Cookie Facebook\n";
sleep(2);
    }else{
        $khoToken = json_decode(fread(fopen("nuoifb_cookie_2.0.txt","r"),filesize("nuoifb_cookie_2.0.txt")),true);
        $demcki = count($khoToken);
    }
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Nuôi Facebook Đa Cookie 2.0\n";
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

echo $thuong."\033[1;32mNhập \033[1;31m[\033[1;33m1\033[1;31m]\033[1;32m Auto Cảm Thả Xúc\n";
echo $thuong."\033[1;32mNhập \033[1;31m[\033[1;33m2\033[1;31m]\033[1;32m Auto Comment\n";
echo $thuong."\033[1;32mNhập \033[1;31m[\033[1;33m3\033[1;31m]\033[1;32m Auto Thêm Bạn Bè\n";
echo $thuong.$xnhac."Có Thể Chọn Nhiều Chế Độ Ví Dụ Nhập \033[1;93m1\033[1;95m2\033[1;97m3\n";
echo $thuong."\033[1;32mNhập Số Để Chạy: \033[1;33m"; 
$chedo = trim(fgets(STDIN));
if(strpos($chedo, '1') !== false){
echo $thanhngang;
echo $thuong.$luc."Nhập \033[1;31m[\033[1;33m1\033[1;31m]$luc LIKE \n";
echo $thuong.$luc."Nhập \033[1;31m[\033[1;33m2\033[1;31m]$luc LOVE \n";
echo $thuong.$luc."Nhập \033[1;31m[\033[1;33m3\033[1;31m]$luc CARE \n";
echo $thuong.$luc."Nhập \033[1;31m[\033[1;33m4\033[1;31m]$luc HAHA \n";
echo $thuong.$luc."Nhập \033[1;31m[\033[1;33m5\033[1;31m]$luc WOW \n";
echo $thuong.$luc."Nhập \033[1;31m[\033[1;33m6\033[1;31m]$luc SAD \n";
echo $thuong.$luc."Nhập \033[1;31m[\033[1;33m7\033[1;31m]$luc ANGRY \n";
echo $thuong.$xnhac."Có Thể Chọn Nhiều Cảm Xúc Ví Dụ Nhập \033[1;93m1\033[1;95m2\033[1;97m3  \n";
echo $thuong.$luc."Nhập Số Để Chạy: \033[1;93m"; 
$loaicx = trim(fgets(STDIN));
$listcx = []; 

if(strpos($loaicx,'1') !== false){
    array_push($listcx,'LIKE');
}
if(strpos($loaicx,'2') !== false){
    array_push($listcx,'LOVE');
}
if(strpos($loaicx,'3') !== false){
    array_push($listcx,'CARE');
}
if(strpos($loaicx,'4') !== false){
    array_push($listcx,'HAHA');
}
if(strpos($loaicx,'5') !== false){
    array_push($listcx,'WOW');
}
if(strpos($loaicx,'6') !== false){
    array_push($listcx,'SAD');
}
if(strpos($loaicx,'7') !== false){
    array_push($listcx,'ANGRY');
}
}
echo $thanhngang;

if(strpos($chedo, '2') !== false){
///
$khocmt = [];
if (file_exists('NDcmt.txt')){
    echo $thuong.$luc."Bạn Có Muốn Dùng Nội Dung Comment Đã Lưu (y/n): ".$vang;
     $choice=trim(fgets(STDIN));
    if ($choice=='n'){ @system('rm NDcmt.txt'); } }
if(!file_exists('NDcmt.txt')){
    echo $thuong.$luc."Bạn Muốn Nhập Bao Nhiêu Nội Dung: $vang";
	$snd = trim(fgets(STDIN));
while ($b < $snd){$b++;
echo $thuong.$luc."Nhập Nội Dung Thứ $b: $vang";
        $nhapck = (string)trim(fgets(STDIN));
    if($nhapck == ''){break;}
    array_push($khocmt,$nhapck);
        }
                $js=json_encode($khocmt);
                $demcmt=count($khocmt);
                $k = fopen("NDcmt.txt","a+");
    fwrite($k, $js);
    fclose($k);
    }else{
        $khocmt = json_decode(fread(fopen("NDcmt.txt","r"),filesize("NDcmt.txt")),true);
        $demcmt = count($khocmt);
        $a = 0;
        
        for($ss = 0; $ss < $demcmt; $ss++){
        $a++;
            echo $thuong.$luc."Nội Dung Thứ $a: \033[1;33m".$khocmt[$ss]."\n"; 
        }
    }
}

echo $thuong.$luc."Nhập Thời Gian Delay".$trang." Min: $vang"; 
$delaya=trim(fgets(STDIN));
if($delaya == ""){
$delaya =0;
}
echo $thuong.$luc."Nhập Thời Gian Delay".$trang." Max: $vang";
$delayb=trim(fgets(STDIN));
if($delayb == ""){
$delayb =0;
}
///doi acc
echo $thuong.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Đổi Nick: \033[1;33m"; 
$doiacc = (int)trim(fgets(STDIN));
// Dừng Tool
echo $thuong.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Dùng Tool: \033[1;33m"; 
$stop = (int)trim(fgets(STDIN));
$dem = 0;
while(true){
  if(count($khoToken) == 0){
for($a = 1; $a < 999999;$a++){
echo $thuong.$vang."Nếu Không Nhập Cookie Facebook Nữa Ấn Enter\n";
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Cookie Facebook Thứ $a \e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);

    }
            $js=json_encode($khoToken);
            $demcki=count($khoToken);
            $k = fopen("nuoifb_cookie_2.0.txt","a+");
fwrite($k, $js);
fclose($k);
echo $xanh."\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Tìm Thấy ".$vang.$demcki." ".$luc."Cookie\n";
  }
$themtk = 0;
  for($xz=0;$xz<count($khoToken);$xz++){
 if ( $themtk == 1){ break; }
    $cookie = $khoToken[$xz];
$access_token = gettoken($cookie, $useragent);
$idfb = explode(";", explode("c_user=", $cookie)[1])[0];
$idfb = explode(";", explode("c_user=", $cookie)[1])[0];
if (strpos($access_token, 'EAA') !== 0) {
    echo $thanhngang.$do." Cookie Facebook".$trang." </> ".$vang.$idfb.$trang." </> ".$do." bị Die\n";
}else{
// Lấy ID FB
$idfb = explode(";", explode("c_user=", $cookie)[1])[0];
// Lấy Tên FB
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
echo $thanhngang;
echo $xnhac." Thưởng Tool".$trang." </> ".$luc." Đang Nuôi Facebook".$trang." </> ".$vang.$idfb."\n";
echo $thanhngang;
$spam=0;
}
while(true){
// Header facebook
$headfb = array(
"Host: mbasic.facebook.com",
"upgrade-insecure-requests: 1",
"user-agent: Mozilla/5.0 (Linux; Android 7.1.1; CPH1729 Build/N6F26Q; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.198 YaBrowser/19.6.0.158 (lite) Mobile Safari/537.36",
"accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"sec-fetch-site: same-origin",
"sec-fetch-mode: navigate",
"sec-fetch-user: ?1",
"sec-fetch-dest: document",
"accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
"cookie:$cookie",
);
            
            // Header graph API
            $headapi = array(
            "Connection: keep-alive",
            "authority: m.facebook.com",
            "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7",
            "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "sec-fetch-user: ?1",
            "user-agent:Mozilla/5.0 (Linux; Android 10; SM-A015F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.134 Mobile Safari/537.36",
            "cookie:$cookie",
            );



        if($spam == 1){
            break;
        }

            $pickmsg = "";
            $id = "";
            $dem1 = 0;
            
            while($id == ""){
                //loaicx
                
                    
                    $id = getidfb($headfb);
                $dem1++;
                if($dem1 > 2){
                    sleep(3);
                    if($dem1 == 100){
                        echo "\r                            \r";
                        echo "Có thể Cookie đã bị die hoặc lỗi vui lòng nhập lại cookie mới";
                        sleep(2);
                        $access_token = "die";
                        $spam = 1; 
                        break;
                    }
                }
            }
            
        if(strpos($chedo, '1') !== false){
            
            $setcx = array_rand($listcx);
            $type = $listcx[$setcx];
            
            // like($access_token, $id, $cookie);
            // $type = " LIKE  ";
            $g = camxuc($id,$type,$cookie);
            if ($g -> {'error'} -> {'code'} == 190) {
                echo "\033[1;31mCookie \033[1;97m".$tenfb."\033[1;91m die !!?!\n";
                array_splice($khoToken,$xz,1);
                $spam = 1; break;
            }
            if ($g -> {'error'} -> {'code'} == 368) {
                
                echo " \033[1;91mĐợi 15s Check Xem Có Block Ảo Không\r";
                sleep(15);
                $g = camxuc('10103832396388711',$type,$cookie);
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    $spam = 1; break;
                }
            }
            if ($g -> {'error'} -> {'code'} == 405) {
                echo "\033[1;91m Tài khoản bị checkpoint";
                $spam = 1;
                array_splice($khoToken,$xz,1);
                break;
            }

        
            if($type == 'LIKE'){
                $type ==' LIKE  ';
            }
            if($type == 'LOVE'){
                $type ==' LOVE  ';
            }
            if($type == 'CARE'){
                $type ==' CARE  ';
            }
            if($type == 'HAHA'){
                $type ==' HAHA  ';
            }
            if($type == 'WOW'){
                $type =='  WOW  ';
            }
            if($type == 'SAD'){
                $type =='  SAD  ';
            }
            if($type == 'ANGRY'){
                $type ==' ANGRY ';
            }
                $dem++;
            hoanthanh($id,$type,$dem,$pickmsg);
                // Delay
            $delay = rand($delaya,$delayb);
            delay($delay,$tenfb);
            
        }

        if(strpos($chedo, '2') !== false){
            
            $urlinfo = "https://mbasic.facebook.com/photo.php?fbid=$id&_rdr";
            // Chọn Ngẫu Nhiên 1 Nội Dung
            // $setmsg = array_rand($listmsg);
            // $pickmsg = $listmsg[$setmsg];
            while(!file_exists('NDcmt.txt')){
                echo "\r                                      \r"; 
                echo "\r\e[1;91mTạm dừng vì thiếu nội dung cmt               \r"; 
                sleep(2);
            }
            $khocmt = json_decode(fread(fopen("NDcmt.txt","r"),filesize("NDcmt.txt")),true);
            $demcmt = count($khocmt);
            $sttcmt = rand(0,$demcmt-1);
            $pickmsg = $khocmt[$sttcmt];
            // URL Bài Viết
            // Truy Cập Bài Viết
            $scomment = api($urlinfo,$headfb);
            // Lọc Dữ Liệu Định Danh Gửi Về Server
            $sfb_dtsg = explode('<input type="hidden" name="fb_dtsg" value="',$scomment)[1];
            $fb_dtsg = explode('" autocomplete="off" />',$sfb_dtsg)[0];
            $sjazoest = explode('<input type="hidden" name="jazoest" value="',$scomment)[1];
            $jazoest = explode('" autocomplete="off" />',$sjazoest)[0];
            // Lọc Href (API Coomment)
            $scodecmt = explode('action="/a/comment.php?',$scomment)[1];
            $sscodecmt = explode('">',$scodecmt)[0];
            $codecmt = html_entity_decode($sscodecmt);
            // Data + Nội Dung Comment
            $datacmt = "fb_dtsg=$fb_dtsg&jazoest=$jazoest&comment_text=$pickmsg";
            // URL Gửi Comment
            $urlcomment = "https://mbasic.facebook.com/a/comment.php?"."$codecmt";
            // Gửi Comment
            $comment = sapi($urlcomment,$datacmt,$headfb);
            $type = "Comment";
            $dem++;
            hoanthanh($id,$type,$dem,$pickmsg);
                // Delay
            $delay = rand($delaya,$delayb);
            delay($delay,$tenfb);
        }




        if(strpos($chedo, '3') !== false){
            
        $urllist = "https://mbasic.facebook.com/friends/center/mbasic/";

        // Truy Cập List
        $listadd = api($urllist,$headfb);
        $scode = explode('<a href="/a/mobile/friends/add_friend.php?',$listadd)[1];
        $sscode = explode('" class=',$scode)[0];
        $codeadd = html_entity_decode($sscode);

        $sid = explode('id=',$scode)[1];
        $id = explode('&amp;',$sid)[0];


        // URL Add Bạn Bè
        $urladd = "https://mbasic.facebook.com/a/mobile/friends/add_friend.php?$codeadd";

        // Gửi Lời Mời
        $addfriend = api($urladd,$headfb);

        $type = "Kết Bạn";
        $pickmsg = "";
        $dem++;
        hoanthanh($id,$type,$dem,$pickmsg);
            // Delay
        $delay = rand($delaya,$delayb);
        delay($delay,$tenfb);
        }

        

        // Hoàn Thành

        //dừng
        if($dem % $stop == 0){
            echo "\r                                                           \r";
            echo $thuong.$luc."Đã Hoàn Thành Bạn Muốn Chạy Tiếp Không (y/n): \033[1;33m";
            $clgtresscca = trim(fgets(STDIN));
           if ( $clgtresscca == "n" ){
        
    
    echo $thuong.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Thưởng Channel\n";
    exit;}
    if ( $clgtresscca == "y" ){
 echo $thuong.$luc."Bạn Muốn Chạy Thêm Bao Nhiêu Nhiệm Vụ Nữa: \033[1;33m"; 
            $stopthem = (int)trim(fgets(STDIN));
            $stop = $stop + $stopthem;
            }}
        if($dem % $doiacc == 0){
            $spam=1;
            break;
            }


}}}

function getidfb($headfb){
    // URL Trang Chủ Facebook
    $urlhome = "https://mbasic.facebook.com/";
    
    // Lấy ID Bài Viết
    $home = api($urlhome,$headfb);
    $sidpost = explode('href="/photo.php?fbid=',$home);
    $random = rand(1,5);
    $id = explode('&amp',$sidpost[$random])[0];
    return $id;
}


function like($access_token, $id, $cookie){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function camxuc($id,$type,$cookie){
	$ch = curl_init();
	if(strpos($id,'_')){
		$uid = explode('_',$id, 2);
		$id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
	}else{
		$id2 = $id;
	}
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id2;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if($type == 'LIKE'){
		$haha2 = explode('" style="display:block"',$haha[1])[0];
	}elseif($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}elseif($type == 'CARE'){
		$haha2 = explode('" style="display:block"',$haha[3])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}elseif($type == 'ANGRY'){
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}
	$link2 = html_entity_decode($haha2);	
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch);
}
function hoanthanh($id,$type,$dem,$pickmsg){
    echo "\r";
    echo "                                       \r";
      $a = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m ● \033[1;96m".date("H:i")."\033[1;91m ● \033[1;93m$type\033[1;91m ● \033[1;97m".$id."\033[1;91m ● \033[1;96m ".$pickmsg."\n";
  $len = strlen($a);
      for ($x = 0; $x < $len; $x++) {
          echo $a[$x];
          usleep(600);
      }
      
  }

  function api($url,$header){
    $ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL => "$url",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => $header
    ));
    $ch2 = curl_exec($ch);
    curl_close($ch);
    return $ch2;
    }
    
    function sapi($url,$data,$header){
        $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => $header
        ));
        $ch2 = curl_exec($ch);
        curl_close($ch);
        return $ch2;
        }
///get token fb    
function gettoken($cookie, $useragent) {
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

function delay($delay){
	for($x = $delay ;$x>= 1;$x--){
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
        }}
