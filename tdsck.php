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
date_default_timezone_set("Asia/Ho_Chi_Minh");
$useragent = 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36';
$ip = file_get_contents('http://kiemtraip.com/raw.php');
$dat = $do."[".$luc."●".$do."]".$trang." => ";
$cuongdz = $do."[".$luc."●".$do."]".$trang." => ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }

 //mang
if (!$sock = @fsockopen('www.google.com', 80)) {echo 'Vui lòng bật kết nối mạng';
exit;}

@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $dat.$vang."Tool Trao Đổi Sub Cookie Đa Luồng\n";
usleep(70000);
echo $dat.$xnhac."Bản Quyền Thưởng Channel\n";
usleep(70000);
echo $dat.$BBlue."Web Bán Xu + Key Tool + VPS:".$do." http://thuongchannel.xyz\n";
usleep(70000);
echo $dat.$maugi."Web Tăng Like Follow:".$do." http://thuonglike.tk\n";
usleep(70000);
echo $dat.$xnhac."Hôm Nay \033[1;36m$weekday \033[1;33mNgày \033[1;36m$ngay \033[1;33mTháng \033[1;36m$thang \033[1;33mNăm \033[1;36m$nam$end\033[0;00m\n";
usleep(70000);
echo $dat.$hong."IP Tool Của Bạn: \033[1;97m$ip\n";
usleep(70000);
echo $luc."╚═══════════════════════════════════════════════════════════╝\n";
usleep(70000);

///token trao doi sub
$_SESSION['check'] = file_exists("longtds_cookie.txt");
if ($_SESSION['check'] =='1'){
  luachon:
echo $thuong.$xnhac."Vào Tool Luôn".$xnhac." Bấm".$yellow." Enter".$xnhac." Thay Token TDS Nhập".$do." Ok:$vang ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='ok' and $_SESSION['nhap'] != 'Ok' and $_SESSION['nhap'] !=''){
echo $thuong.$red."Nhập Sai Vui Lòng Nhập Lại\n";
GOTO luachon;
}
echo $thanhngang;
if ($_SESSION['nhap'] =='ok' or $_SESSION['nhap'] =='Ok'){
$my = fopen("longtds_cookie.txt", "w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Access_Token TDS\e[0m\e[1;95m]
└──╼ \e[1;39m:$vang "; 
$tokenacc =trim(fgets(STDIN));
fwrite($my,$tokenacc);
    $my = file("longtds_cookie.txt");
$tokenacc = file_get_contents('longtds_cookie.txt');

}
if ($_SESSION['nhap'] == ''){
$tokenacc = file_get_contents("longtds_cookie.txt");
}
} else {
$my = fopen("longtds_cookie.txt","w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Access_Token TDS \e[0m\e[1;95m]
└──╼ \e[1;39m:$vang "; 
$tokenacc = $_SESSION["cc"]=trim(fgets(STDIN));

fwrite($my,$_SESSION["cc"]);
}
//Token Facebook
$khocookie = [];
if (file_exists('Cookiefb_tooltds.txt')){
  
  echo $thuong.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Sử Dụng Cookie Facebook Đã Lưu \n";
echo $thuong.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhập Cookie Facebook Mới \n";
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Số  \e[0m\e[1;95m]
└──╼ \e[1;39m:$vang "; 
   $choice=trim(fgets(STDIN));
    if ($choice=='2'){
        @system('rm Cookiefb_tooltds.txt');
        }
    }
if (!file_exists('Cookiefb_tooltds.txt')){
for($a = 1; $a < 999999;$a++){
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Cookie Facebook Thứ $a \e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khocookie,$nhapck);
    }
            $js=json_encode($khocookie);
            $demcki=count($khocookie);
            $k = fopen("Cookiefb_tooltds.txt","a+");
fwrite($k, $js);
fclose($k);
echo $thuong.$luc."Bạn đã nhập ".$vang.$demcki." ".$luc."Token Facebook\n";
sleep(2);
    }else{
        $khocookie = json_decode(fread(fopen("Cookiefb_tooltds.txt","r"),filesize("Cookiefb_tooltds.txt")),true);
        $demcki = count($khocookie);
    }

//url
$urlinfo = "https://traodoisub.com/api/?fields=profile&access_token=$tokenacc";
$urllike = "https://traodoisub.com/api/?fields=like&access_token=$tokenacc";
$urlsub = "https://traodoisub.com/api/?fields=follow&access_token=$tokenacc";
$urlcx = "https://traodoisub.com/api/?fields=reaction&access_token=$tokenacc";
$urlshare = "https://traodoisub.com/api/?fields=share&access_token=$tokenacc";
$urlcmt = "https://traodoisub.com/api/?fields=comment&access_token=$tokenacc";
$urlpage = "https://traodoisub.com/api/?fields=page&access_token=$tokenacc";
$urllikecmt = "https://traodoisub.com/api/?fields=reactcmt&access_token=$tokenacc";
//login
$info = api($urlinfo);
if ($info["error"]) {
    exit ($info["error"]);
}
//$thongtin
$user = strtolower($info["data"]["user"]);
$xuhientai = $info["data"]["xu"];
$xudie = $info["data"]["xudie"];
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $dat.$vang."Tool Trao Đổi Sub Cookie Đa Luồng\n";
usleep(70000);
echo $dat.$xnhac."Bản Quyền Thưởng Channel\n";
usleep(70000);
echo $dat.$BBlue."Web Bán Xu + Key Tool + VPS:".$do." http://thuongchannel.xyz\n";
usleep(70000);
echo $dat.$maugi."Web Tăng Like Follow:".$do." http://thuonglike.tk\n";
usleep(70000);
echo $dat.$xnhac."Hôm Nay \033[1;36m$weekday \033[1;33mNgày \033[1;36m$ngay \033[1;33mTháng \033[1;36m$thang \033[1;33mNăm \033[1;36m$nam$end\033[0;00m\n";
usleep(70000);
echo $dat.$hong."IP Tool Của Bạn: \033[1;97m$ip\n";
usleep(70000);
echo $luc."╚═══════════════════════════════════════════════════════════╝\n";
usleep(70000);
$dem = 0;
echo $dat.$luc."Tài Khoản TDS Của Bạn Là: ".$vang.$user."\n";
echo $dat.$luc."Số Xu Hiện Tại Của Bạn Là: ".$vang.$xuhientai."\n";
echo $dat.$luc."Số FB Đang Chạy: ".$vang.$demcki." Nick\n";
echo $dat.$luc."Số Xu Bị Trừ: ".$vang.$xudie."\n";
echo $thanhngang;
echo $dat.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Để Chọn Nhiệm Vụ Like\n"; 
echo $dat.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Để Chọn Nhiệm Vụ Follow\n"; 
echo $dat.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Để Chọn Nhiệm Vụ Cảm Xúc\n"; 
echo $dat.$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Để Chọn Nhiệm Vụ Comment\n"; 
echo $dat.$luc."Nhập ".$do."[".$vang."5".$do."]".$luc." Để Chọn Nhiệm Vụ Fanpage\n"; 
echo $dat.$luc."Nhập ".$do."[".$vang."6".$do."]".$luc." Để Chọn Nhiệm Vụ Share\n"; 
echo $dat.$luc."Nhập ".$do."[".$vang."7".$do."]".$luc." Để Chọn Nhiệm Vụ Cảm Xúc CMT\n"; 
echo $thanhngang;
echo $dat.$luc."Vui Lòng Chọn Nhiệm Vụ: $vang"; 
$nhiemvu = trim(fgets(STDIN));
echo $dat.$luc."Nhập Thời Gian Delay".$trang." Min: $vang"; 
$thoigianmin = trim(fgets(STDIN)); 
echo $dat.$luc."Nhập Thời Gian Delay".$trang." Max: $vang"; 
$thoigianmax = trim(fgets(STDIN)); 
echo $dat.$luc."Bật Chống Block Sau Bao Nhiêu Nhiệm Vụ: $vang"; 
$xxxxx = trim(fgets(STDIN));
echo $dat.$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Dừng Bao Lâu: $vang"; 
$delaybl = trim(fgets(STDIN));
echo $dat.$luc."Đổi Nick Sau Bao Nhiêu Nhiệm Vụ: $vang"; 
$doinick = trim(fgets(STDIN)); 
echo $dat.$luc."Bao Nhiêu Nhiệm Vụ Thì Dừng Tool: $vang"; 
$dungtool = trim(fgets(STDIN)); 
while(true){
  if(count($khocookie) == 0){
    
for($a = 1; $a < 999999;$a++){
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Cookie Facebook Thứ $a \e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khocookie,$nhapck);
    }
            $js=json_encode($khocookie);
            $demcki=count($khocookie);
            $k = fopen("Cookiefb_tooltds.txt","a+");
fwrite($k, $js);
fclose($k);
echo $xanh."\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Tìm Thấy ".$vang.$demcki." ".$luc."Cookie\n";
  }
$themtk = 0;
  for($xz=0;$xz<count($khocookie);$xz++){
 if ( $themtk == 1){ break; }
    $cookie = $khocookie[$xz];
$access_token = laytoken($cookie,$useragent);
if ($access_token == 'die') {
    echo "\r";
    echo "                                                      \r";
    echo $white."Lỗi ".$red."Cookie Die!!!\n";
    array_splice($khocookie,$xz,1);
    continue;
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = explode(";", explode("c_user=", $cookie)[1])[0];
$urlcauhinh = "https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc";
$cauhinh = api($urlcauhinh);
if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
echo $thanhngang;
echo $xnhac." Thưởng Tool".$trang." </> ".$luc." Đang Cấu Hình ID".$trang." </> ".$vang.$idfb."".$res."\n";
echo $thanhngang;
} else {
  echo $thanhngang;
    echo $do."Cấu Hình Thất Bại Bạn Chưa Thêm ".$vang.$idfb." \033[1;91mVào Cấu Hình\n";
    continue;
}
$spam = 0;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
        for ($i = 0; $i < 10; $i++) {
            $listlike = api($urllike);
            if($listlike == ''){
          echo $do."Mạng không ổn định                          \r";
          while($listlike==''){
            $listlike = api($urllike);
          }}
            if (count($listlike) > 0) {
                break;
            }}
          
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
        for ($i = 1; $i < 10; $i++) {
            $listsub = api($urlsub);
            if($listsub == ''){
          echo $do."Mạng không ổn định                          \r";
          while($listsub==''){
            $listsub = api($urlsub);
          }}
            if (count($listsub) > 0) {
                break;
            }
        }
    }
    //listreaction
    if (strpos($nhiemvu, '3') !== false) {
        for ($i = 1; $i < 10; $i++) {
            $listcx = api($urlcx);
            if($listcx == ''){
          echo $do."Mạng không ổn định                          \r";
          while($listcx==''){
            $listcx = api($urlcx);
          }}
            if (count($listcx) > 0) {
                break;
            }}
    }
    //listcmt
    if (strpos($nhiemvu, '4') !== false) {
        for ($i = 1; $i < 10; $i++) {
            $listcmt = api($urlcmt);
            if($listcmt == ''){
          echo $do."Mạng không ổn định                          \r";
          while($listcmt==''){
            $listcmt = api($urlcmt);
          }}
            if (count($listcmt) > 0) {
                break;
            }}
    }
    //listpage
    if (strpos($nhiemvu, '5') !== false) {
        for ($i = 1; $i < 10; $i++) {
            $listpage = api($urlpage);
           if($listpage == ''){
          echo $do."Mạng không ổn định                          \r";
          while($listpage==''){
            $listpage = api($urlpage);
          }}
            if (count($listpage) > 0) {
                break;
            }}
    }
    //share
    if (strpos($nhiemvu, '6') !== false) {
        for ($i = 1; $i < 10; $i++) {
            $listshare = api($urlshare);
            if($listshare == ''){
          echo $do."Mạng không ổn định                          \r";
          while($listshare==''){
            $listshare = api($urlshare);
          }}
            if (count($listshare) > 0) {
                break;
            }}
    }
    //listlikecmt
    if (strpos($nhiemvu, '7') !== false) {
        for ($i = 1; $i < 10; $i++) {
            $listlikecmt = api($urllikecmt);
         if($listlikecmt == ''){
          echo $do."Mạng không ổn định                          \r";
          while($listlikecmt==''){
            $listlikecmt = api($urllikecmt);
          }}
            if (count($listlikecmt) > 0) {
                break;
            }}
    }
    
    for ($lap = 0; $lap < 20; $lap++) {
        // like
        if ($listlike !== NULL) {
            $idlike = $listlike[$lap]["id"];
            if ($idlike !== '') {
                $g = like($access_token, $idlike, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   •  ".$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ● ".$red."Đã Bị Block Like\n";
          array_splice($khocookie,$xz,1);
            $spam = 1;
            break;
    }
                $nhanlike = nhantien('LIKE', $idlike, $tokenacc);
                if ($nhanlike["success"] == 200) {
                    $xu = $nhanlike["data"]["xu"];
                    $xujob = $nhanlike["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, '  LIKE  ', $idlike, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    echo $thanhngang; echo $cuongdz.$luc."Đã làm xong \033[1;93m".$dem."\033[1;92m nhiệm vụ, Chạy tiếp không bạn \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m: \033[1;93m";
      $stop = trim(fgets(STDIN));
if ( $stop == "n" ){
  $dungtool = 999999;
    echo $cuongdz.$luc."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu." Xu\n";
    echo $cuongdz.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của \033[1;37mThưởng Channel\n";
    exit;}
 else {
  echo $cuongdz.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
    $chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $cuongdz.$luc."Bạn Muốn Chạy Cookie Mới Không \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m: $BWhite";
  $themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khocookie=[];
  break;
 } else { continue; }
 }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
        //follow
        if ($listsub !== NULL) {
            $idsub = $listsub[$lap]["id"];
            if ($idsub !== '') {
                $g = follow($access_token, $idsub, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   •  ".$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ● ".$red."Đã Bị Block Follow\n";
          array_splice($khocookie,$xz,1);
            $spam = 1;
            break;
    }
                $nhansub = nhantien('FOLLOW', $idsub, $tokenacc);
                if ($nhansub["success"] == 200) {
                    $xu = $nhansub["data"]["xu"];
                    $xujob = $nhansub["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, ' FOLLOW ', $idsub, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    echo $thanhngang; echo $cuongdz.$luc."Đã làm xong \033[1;93m".$dem."\033[1;92m nhiệm vụ, Chạy tiếp không bạn \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m: \033[1;93m";
      $stop = trim(fgets(STDIN));
if ( $stop == "n" ){
  $dungtool = 999999;
    echo $cuongdz.$luc."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu." Xu\n";
    echo $cuongdz.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của \033[1;37mThưởng Channel\n";
    exit;}
 else {
  echo $cuongdz.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
    $chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $cuongdz.$luc."Bạn Muốn Chạy Cookie Mới Không \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m : $BWhite";
  $themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khocookie=[];
  break;
 } else { continue; }
 }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
        //cảm xúc
        if ($listcx !== NULL) {
            $idcx = $listcx[$lap]["id"];
            $type = $listcx[$lap]["type"];
            if ($idcx !== '') {
                $g = camxuc($idcx, $type, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   •  ".$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ● ".$red."Đã Bị Block Like\n";
          array_splice($khocookie,$xz,1);
            $spam = 1;
            break;
    }
                $nhancx = nhantien($type, $idcx, $tokenacc);
                if ($nhancx["success"] == 200) {
                    $xu = $nhancx["data"]["xu"];
                    $xujob = $nhancx["data"]["msg"];
                    $dem++;
                    if ($type == 'WOW') {
                        $type = '  WOW   ';
                    } elseif ($type == 'SAD') {
                        $type = '  SAD   ';
                    } elseif ($type == 'ANGRY') {
                        $type = '  ANGRY ';
                    } elseif ($type == 'LOVE') {
                        $type = '  LOVE  ';
                    } elseif ($type == 'HAHA') {
                        $type = '  HAHA  ';
                    } elseif ($type == 'CARE') {
                        $type = '  CARE  ';
                    }
                    hoanthanh($dem, $type, $idcx, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    echo $thanhngang; echo $cuongdz.$luc."Đã làm xong \033[1;93m".$dem."\033[1;92m nhiệm vụ, Chạy tiếp không bạn \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m: \033[1;93m";
      $stop = trim(fgets(STDIN));
if ( $stop == "n" ){
  $dungtool = 999999;
    echo $cuongdz.$luc."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu." Xu\n";
    echo $cuongdz.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của \033[1;37mThưởng Channel\n";
    exit;}
 else {
  echo $cuongdz.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
    $chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $cuongdz.$luc."Bạn Muốn Chạy Cookie Mới Không \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m : $BWhite";
  $themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khocookie=[];
  break;
 } else { continue; }
 }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
            if ($listshare !== NULL) {
                $id = $listshare[$lap]["id"];
                    $g = share($access_token, $id);
                    if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   >^_^<  ".$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                    if ($g -> {'error'} -> {'code'} == 368) {
                        echo "\033[1;91m".$g-> {'error'}-> {'message'};
                        echo "\n";
                        array_splice($khocookie,$xz,1);
                        $spam = 1; break;
                    }
                        $nhanshare = nhantien('SHARE', $id, $tokenacc);
                        if ($nhanshare["success"] == 200) {
                            $xu = $nhanshare["data"]["xu"];
                            $xujob = $nhanshare["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, ' SHARES ', $id, $xujob, $xu);
                            if ( $dem >= $dungtool ){
    echo $thanhngang; echo $cuongdz.$luc."Đã làm xong \033[1;93m".$dem."\033[1;92m nhiệm vụ, Chạy tiếp không bạn \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m: \033[1;93m";
      $stop = trim(fgets(STDIN));
if ( $stop == "n" ){
  $dungtool = 999999;
    echo $cuongdz.$luc."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu." Xu\n";
    echo $cuongdz.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của \033[1;37mThưởng Channel\n";
    exit;}
 else {
  echo $cuongdz.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
    $chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $cuongdz.$luc."Bạn Muốn Chạy Cookie Mới Không \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m : $BWhite";
  $themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khocookie=[];
  break;
 } else { continue; }
 }
                            if($dem % $doinick == 0){
                              $spam = 1; break;
                            }
                            if($dem % $xxxxx == 0){
                      delay($thoigiannghi);
                    }
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }}
        //cmt
        if ($listcmt !== NULL) {
            $idcmt = $listcmt[$lap]["id"];
            $msg = $listcmt[$lap]["msg"];
            if ($idcmt !== '') {
                $g = cmt($access_token, $idcmt, $cookie, $msg);
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   •  ".$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ● ".$red."Đã Bị Block Cmt\n";
          array_splice($khocookie,$xz,1);
            $spam = 1;
            break;
    }
                $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                if ($nhancmt["success"] == 200) {
                    $xu = $nhancmt["data"]["xu"];
                    $xujob = $nhancmt["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, 'COMMENTS', $idcmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    echo $thanhngang; echo $cuongdz.$luc."Đã làm xong \033[1;93m".$dem."\033[1;92m nhiệm vụ, Chạy tiếp không bạn \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m: \033[1;93m";
      $stop = trim(fgets(STDIN));
if ( $stop == "n" ){
  $dungtool = 999999;
    echo $cuongdz.$luc."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu." Xu\n";
    echo $cuongdz.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của \033[1;37mThưởng Channel\n";
    exit;}
 else {
  echo $cuongdz.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
    $chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $cuongdz.$luc."Bạn Muốn Chạy Cookie Mới Hay Cookie Cũ \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m : $BWhite";
  $themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khocookie=[];
  break;
 } else { continue; }
 }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
        //page
        if ($listpage !== NULL) {
            $idpage = $listpage[$lap]["id"];
            if ($idpage !== '') {
                $g = page($idpage, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Cookie die !!?!\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
               
                $nhanpage = nhantien('PAGE', $idpage, $tokenacc);
                if ($nhanpage["success"] == 200) {
                    $xu = $nhanpage["data"]["xu"];
                    $xujob = $nhanpage["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, '  PAGE  ', $idpage, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    echo $thanhngang; echo $cuongdz.$luc."Đã làm xong \033[1;93m".$dem."\033[1;92m nhiệm vụ, Chạy tiếp không bạn \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m: \033[1;93m";
      $stop = trim(fgets(STDIN));
if ( $stop == "n" ){
  $dungtool = 999999;
    echo $cuongdz.$luc."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu." Xu\n";
    echo $cuongdz.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của  \033[1;37mThưởng Channel\n";
    exit;}
 else {
  echo $cuongdz.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
    $chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $cuongdz.$luc."Bạn Muốn Chạy Cookie Mới Không \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m : $BWhite";
  $themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khocookie=[];
  break;
 } else { continue; }
 }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }
        }
        //likecmt
        if ($listlikecmt !== NULL) {
            $idlikecmt = $listlikecmt[$lap]["id"];
            $type = $listlikecmt[$lap]["type"];
            if ($idlikecmt !== '') {
                if ($type == 'LIKE'){
                    like($access_token, $idlikecmt, $cookie);
                }else{
                    camxuc($idlikecmt, $type, $cookie);
                }               
                $nhanpage = nhantien($type.'CMT', $idlikecmt, $tokenacc);
                if ($nhanpage["success"] == 200) {
                    $xu = $nhanpage["data"]["xu"];
                    $xujob = $nhanpage["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, $type.' CMT', $idlikecmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    echo $thanhngang; echo $cuongdz.$luc."Đã làm xong \033[1;93m".$dem."\033[1;92m nhiệm vụ, Chạy tiếp không bạn \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m: \033[1;93m";
      $stop = trim(fgets(STDIN));
if ( $stop == "n" ){
  $dungtool = 999999;
    echo $cuongdz.$luc."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu." Xu\n";
    echo $cuongdz.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của  \033[1;37mThưởng Channel\n";
    exit;}
 else {
  echo $cuongdz.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
    $chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $cuongdz.$luc."Bạn Muốn Chạy Cookie Mới Không \033[1;31m(\033[1;97my/n\033[1;31m)\033[1;97m : $BWhite";
  $themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khocookie=[];
  break;
 } else { continue; }
 }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }
        }
      
    }
}}}

function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/E7FBAF",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        //"accept-encoding: gzip, deflate, br",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    curl_close($ch);
    return json_decode($get, true);
}



function nhantien($type, $id, $tokenacc) {
    $nhan = file_get_contents("https://traodoisub.com/api/coin/?type=$type&id=$id&access_token=$tokenacc");
    return json_decode($nhan, true);
}


function follow ($access_token, $idsub, $cookie){
    $head =  array(
"Host:mbasic.facebook.com",
"user-agent: TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg5LjAuNDM4OS45MCBTYWZhcmkvNTM3LjM2",
"cookie: ".$cookie
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$idsub);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
$send = curl_exec($ch);
$follow = explode('"',explode('/a/subscribe.php?',$send)[1])[0];
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/a/subscribe.php?'.htmlspecialchars_decode($follow));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
$sned = curl_exec($ch);
curl_close($ch);
return array($send, $sned);
}
function share($access_token,$id) {
 $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = json_decode(curl_exec($ch), true);                                    
curl_close($ch);
   return $a;
}
function like($access_token, $id, $cookie) {
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
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
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
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function page($idpage, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$idpage.'?_rdr');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "upgrade-insecure-requests: 1";
    // $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    // $head[] = "Accept-Language: en-us,en;q=0.5";
    // $head[] = "Accept-encoding: gzip, deflate, br";
    // $head[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-ch-ua-mobile: ?0";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $page = curl_exec($ch);
    if (explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0]) {
        $get = explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0];
        $link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$idpage.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
    }
    curl_close($ch);

}
function camxuc($idcx, $type, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$idcx);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
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
    $cx = curl_exec($ch);
    $haha = explode('<a href="', $cx);
    if ($type == 'LOVE') {
        $haha2 = explode('" style="display:block"', $haha[2])[0];
    } else if ($type == 'WOW') {
        $haha2 = explode('" style="display:block"', $haha[5])[0];
    } else if ($type == 'HAHA') {
        $haha2 = explode('" style="display:block"', $haha[4])[0];
    } else if ($type == 'SAD') {
        $haha2 = explode('" style="display:block"', $haha[6])[0];
    } else {
        $haha2 = explode('" style="display:block"', $haha[7])[0];
    }
    $link2 = html_entity_decode($haha2);
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
}
function hoanthanh($dem, $type, $id, $xujob, $xu) {
  $t = date("H:i:s");
  $rd = rand(1, 7);
  $rd2 = rand(7, 1);
  echo "\r";
      echo "                                              \r";
    $a = "\033[1;91m[\033[1;93m".$dem."\033[1;91m]\033[1;91m ● \033[1;96m$t\033[1;31m ●\033[1;3".$rd."m$type\033[1;31m● \033[1;36mThưởng Tool \033[1;31m● \033[1;32m$xujob \033[1;31m● \033[1;93m".$xu." \033[1;91mXu\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(150);
    }
}
function delay($delay) {
  $rd = rand(1, 7);
    $time = $delay; 
    for ( $x = $time; $x> 0; $x-- ) {
        echo " \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;34m giây";
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■ \e[1;34mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;31m giây";
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■ \e[1;33mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;32m giây"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉ \e[1;31mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;36m giây"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;34m giây"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
        }}
function delay2($delaybl){
  for($time = $delaybl;$time> 0;$time--){
echo " \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;34m giây";
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■ \e[1;34mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;31m giây";
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■ \e[1;33mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;32m giây";
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉ \e[1;31mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;36m giây";
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;34m giây";
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
        }}
function laytoken($cookie, $useragent) {
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
function joingr($id,$cookie){
  $ch = curl_init();
  $head_fb=array(
    "Host:mbasic.facebook.com",
    "cache-control:max-age=0",
    "upgrade-insecure-requests:1",
    "save-data:on",
    "user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36",
    "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "sec-fetch-site:cross-site",
    "sec-fetch-mode:navigate",
    "sec-fetch-user:?1",
    "sec-fetch-dest:document",
    "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    "cookie:".$cookie);
  curl_setopt_array ($ch, array (
  CURLOPT_URL => "https://mbasic.facebook.com/groups/$id?_rdr",
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_HTTPGET => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => $head_fb,
  CURLOPT_HEADER => true,
  CURLOPT_ENCODING => TRUE));
  $data = curl_exec($ch);
 // var_dump($data);
  if (strpos($data,"xs=deleted") == true){
  echo ( $red."Cookie die rồi\n");
  }
  $tìm =explode("/a/group/join/?",$data);
  $tìm1=explode('"',$tìm[1]);
  $fb=explode('name="fb_dtsg" value="',$data);
  $fb=explode('"',$fb[1]);
  $fbdtsg=htmlspecialchars_decode($fb[0]);
  $jaz=explode('name="jazoest" value="',$data);
  $jaz=explode('"',$jaz[1]);
  $url="https://mbasic.facebook.com/a/group/join/?".htmlspecialchars_decode($tìm1[0]);
  $data="fb_dtsg=$fbdtsg&jazoest=".$jaz[0];
  curl_setopt_array ($ch, array (
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => $head_fb));
  $xxx = curl_exec($ch);
}