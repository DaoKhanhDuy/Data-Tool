error_reporting(0); 
session_start(); 
$ktfile = file_exists("TTC.txt"); 
if ($ktfile == 1){ unlink('TTC.txt'); } 
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
        $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday':
          $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday':
            $weekday = "\033[1;33mThứ \033[1;36m7"; break; default:
              $weekday = "\033[1;33mCN"; break; }

 //Key tool
if (!$sock = @fsockopen('www.google.com', 80)) {echo 'Vui lòng bật kết nối mạng';
exit;
  }

$trim= array(
'$nhiemvu = trim(fgets(STDIN));',//0
'$thoigianmin = trim(fgets(STDIN));',//1
'$thoigianmax = trim(fgets(STDIN));',//2
'$delaybl = trim(fgets(STDIN));',//3
'$doinick = trim(fgets(STDIN));',//4
'$dungtool = trim(fgets(STDIN));',//5
);

$chonnv= array(
"\033[1;91m[\033[1;92m●\033[1;91m]\033[1;97m =>\033[1;32m Nhập\033[1;91m [\033[1;93m1\033[1;91m] \033[1;32mChạy Nhiệm Vụ Like\n",//0
"\033[1;91m[\033[1;92m●\033[1;91m]\033[1;97m =>\033[1;32m Nhập\033[1;91m [\033[1;93m2\033[1;91m] \033[1;32mChạy Nhiệm Vụ Comment\n",//1
"\033[1;91m[\033[1;92m●\033[1;91m]\033[1;97m =>\033[1;32m Nhập\033[1;91m [\033[1;93m3\033[1;91m] \033[1;32mChạy Nhiệm Vụ Share\n",//2
"\033[1;91m[\033[1;92m●\033[1;91m]\033[1;97m =>\033[1;32m Nhập\033[1;91m [\033[1;93m4\033[1;91m] \033[1;32mChạy Nhiệm Vụ Cảm Xúc\n",//3
"\033[1;91m[\033[1;92m●\033[1;91m]\033[1;97m =>\033[1;32m Nhập\033[1;91m [\033[1;93m5\033[1;91m] \033[1;32mChạy Nhiệm Vụ Like CMT\n",//4
"\e[1;95m┌─[\e[1;37m\e[1;42m Chọn Nhiệm Vụ \e[0m\e[1;95m]
└──╼ \e[1;39m:$vang ",//5
"\033[1;91m[\033[1;92m●\033[1;91m]\033[1;97m =>\033[1;32m Nhập Thời Gian Delay Min: \033[1;93m",//6
"\033[1;91m[\033[1;92m●\033[1;91m]\033[1;97m =>\033[1;32m Nhập Thời Gian Delay Max: \033[1;93m",//7
"\033[1;91m[\033[1;92m●\033[1;91m]\033[1;97m =>\033[1;32m Chuyển Nick Sao Bao Nhiêu Nhiệm Vụ: \033[1;93m",//8
"\033[1;91m[\033[1;92m●\033[1;91m]\033[1;97m =>\033[1;32m Chạy Bao Nhiêu Nhiệm Vụ Rồi Dừng Tool: \033[1;93m",//9
);
@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Tương Tác Chéo Token Đa Luồng\n";
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
$dem =0;

//token ttc
$_SESSION['check'] = file_exists("logtoolttc_token.txt");
if ($_SESSION['check'] =='1'){
  luachon:
echo $thuong.$xnhac."Vào Tool Luôn".$xnhac." Bấm".$yellow." Enter".$red." /".$xnhac." Thay Token TTC Nhập".$do." ok:$vang ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='ok' and $_SESSION['nhap'] != 'Ok' and $_SESSION['nhap'] !=''){
echo $thuong.$red."Nhập Sai Vui Lòng Nhập Lại\n";
GOTO luachon;
}
if ($_SESSION['nhap'] =='ok' or $_SESSION['nhap'] =='Ok'){
$my = fopen("logtoolttc_token.txt", "w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập TTC_Access_token\e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$TTC_Access_token =trim(fgets(STDIN));

$arr = array("TTC_Access_token"=> $TTC_Access_token);
fwrite($my,json_encode($arr));
    $my = file("logtoolttc_token.txt");
$bb = file_get_contents('logtoolttc_token.txt');
$cc =json_decode($bb);
$_SESSION['TTC_Access_token']= $cc->{"TTC_Access_token"};
}
if ($_SESSION['nhap'] == ''){
$bb = file_get_contents("logtoolttc_token.txt");
$cc =json_decode($bb);
$_SESSION['TTC_Access_token']= $cc->{"TTC_Access_token"};
}
} else {
luachon2:
$my = fopen("logtoolttc_token.txt", "w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập TTC_Access_token\e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$TTC_Access_token =trim(fgets(STDIN));
$arr = array("TTC_Access_token"=> $TTC_Access_token);
fwrite($my,json_encode($arr));
$_SESSION['TTC_Access_token'] = $TTC_Access_token;
}
$TTC_Access_token = $_SESSION['TTC_Access_token'];
$source = getcookiettc($TTC_Access_token,$useragent);
$sou= json_decode($source,true);
if ($sou['status'] == 'success' ){
  echo $thuong.$vang."Đăng Nhập TTC Thành Công\n";
  echo $thanhngang;
  sleep (1);
  $user = $sou['data']['user'];
  $xu = $sou['data']['sodu'];
}else{
	echo $red.$sou['mess'];
	echo "\n";
	GOTO luachon2; 
}

//cookie facebook
$khocookie = [];
if (file_exists('Tokenfb_toolttc.txt')){
    echo $thuong.$luc."Vào Tool Luôn Bấm ".$trang."Enter".$luc." Thay Token FB Nhập ".$do."ok: $vang";
   $choice=trim(fgets(STDIN));
    if ($choice=='ok'){
        @system('rm Tokenfb_toolttc.txt');
        }
    }
if (!file_exists('Tokenfb_toolttc.txt')){
for($a = 1; $a < 999999;$a++){
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Token Facebook Thứ $a \e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khocookie,$nhapck);
    }
            $js=json_encode($khocookie);
            $demcki=count($khocookie);
            $k = fopen("Tokenfb_toolttc.txt","a+");
fwrite($k, $js);
fclose($k);
echo $thuong.$luc."Bạn đã nhập ".$vang.$demcki." ".$luc."Token Facebook\n";
sleep(2);
    }else{
        $khocookie = json_decode(fread(fopen("Tokenfb_toolttc.txt","r"),filesize("Tokenfb_toolttc.txt")),true);
        $demcki = count($khocookie);
    }

@system('clear');
echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Tương Tác Chéo Token Đa Luồng\n";
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
print $thuong.$do."Tài Khoản TTC: ".$vang.$user."\n";
print $thuong.$trang."Số Xu Hiện Tại: ".$vang.$xu." Xu\n";
print $thuong.$xnhac."Đang Chạy: ".$vang.$demcki."\033[1;32m Nick Facebook\n";
print $thanhngang;
print($chonnv[0]);
print($chonnv[1]);
print($chonnv[2]);
print($chonnv[3]);
print($chonnv[4]);
print $thanhngang;
print($chonnv[5]);
eval($trim[0]);
print($chonnv[6]);
eval ($trim[1]);
print($chonnv[7]);
eval($trim[2]);
print $thuong.$green."Chạy Bao Nhiêu Nhiệm Vụ Thì Bật Chống Block: \033[1;93m";
$xxxxx = trim(fgets(STDIN));
print $thuong.$green."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Block Bao Nhiêu Giây: $vang";
eval($trim[3]);
print($chonnv[8]);
eval($trim[4]);
print($chonnv[9]);
eval($trim[5]);
$loilike = [];
$loisub = [];
$loicmt = [];
$loishare = [];
while(true){
  if(count($khocookie) == 0){
    
for($a = 1; $a < 999999;$a++){
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Token Facebook Thứ $a \e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khocookie,$nhapck);
    }
            $js=json_encode($khocookie);
            $demcki=count($khocookie);
            $k = fopen("Tokenfb_toolttc.txt","a+");
fwrite($k, $js);
fclose($k);
echo $xanh."\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Tìm Thấy ".$vang.$demcki." ".$luc."Token\n";
  }
$themtk = 0;
  for($xz=0;$xz<count($khocookie);$xz++){
 if ( $themtk == 1){ break; }
    $cookie = $khocookie[$xz];
$access_token = $cookie;
if (strpos($access_token, 'EAA') !== 0) {
    echo "\r";
    echo "                                                      \r";
    echo $thuong.$do."Token Facebook Bị Die!!!\n";
    array_splice($khocookie,$xz,1);
    continue;
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$h = datnick($idfb, $useragent);
if ($h == '1') {
echo $thanhngang;
echo $xnhac." Thưởng Tool".$trang." </> ".$luc." Đang Cấu Hình ID".$trang." </> ".$vang.$tenfb."".$res."\n";
echo $thanhngang;
} else {
echo $thanhngang;
echo $do."Cấu Hình Thất Bại Bạn Chưa Thêm ".$vang.$tenfb." \033[1;91mVào Cấu Hình\n";
continue;
}
$spam = 0;
$xu = $xuhientai;
while (true) {
if ($spam == 1) {
break;
}
                    if (strpos($nhiemvu, '1') !== false) {
                        for ($i = 0;$i < 5;$i++) {
                            $listlike = getlike($useragent);
                            if ($listlike == '') {
                                while ($listlike == '') {
                                    $listlike = getlike($useragent);
                                }
                            }
                            if (count($listlike) > 0) {
                                break;
                            }
                        }
                        if (count($listlike) == 0) {
                            $rd = rand(1, 7);
                            echo $thuong.$rd.$red." Đang tạm thời hết nhiệm vụ like       \r"; 
                        }
                    }
                    
                    if (strpos($nhiemvu, '2') !== false) {
                        for ($i = 1;$i < 5;$i++) {
                            $listcmt = getnv('cmt', $useragent);
                            if ($listcmt == '') {
                                while ($listcmt == '') {
                                    $listcmt = getnv('cmt', $useragent);
                                }
                            }
                            if (count($listcmt) > 0) {
                                break;
                            }
                        }
                        if (count($listcmt) == 0) {
                            $rd = rand(1, 7);
                            echo $thuong.$rd.$red." Đang tạm thời hết nhiệm vụ CMT       \r";
                        }
                    }
                    if (strpos($nhiemvu, '3') !== false) {
                        for ($i = 1;$i < 5;$i++) {
                            $listshare = getnv('share', $useragent);
                            if ($listshare == '') {
                                while ($listshare == '') {
                                    $listshare = getnv('share', $useragent);
                                }
                            }
                            if (count($listshare) > 0) {
                                break;
                            }
                        }
                        if (count($listshare) == 0) {
                            $rd = rand(1, 7);
                            echo $thuong.$rd.$red." Đang tạm thời hết nhiệm vụ Share       \r";
                        }
                    }
                    if (strpos($nhiemvu, '4') !== false) {
                        for ($i = 1;$i < 5;$i++) {
                            $listcx = getnv('camxuc', $useragent);
                            if ($listcx == '') {
                                while ($listcx == '') {
                                    $listcx = getnv('camxuc', $useragent);
                                }
                            }
                            if (count($listcx) > 0) {
                                break;
                            }
                        }
                        if (count($listcx) == 0) {
                            $rd = rand(1, 7);
                            echo $thuong.$rd.$red." Đang tạm thời hết nhiệm vụ Cảm Xúc       \r";
                        }
                    }
                    if (strpos($nhiemvu, '5') !== false) {
                        for ($i = 1;$i < 5;$i++) {
                            $listlikecmt = getnvcxcmt($useragent);
                            if ($listlikecmt == '') {
                                while ($listlikecmt == '') {
                                    $listlikecmt = getnvcxcmt($useragent);
                                }
                            }
                            if (count($listlikecmt) > 0) {
                                break;
                            }
                        }
                        if (count($listlikecmt) == 0) {
                            $rd = rand(1, 7);
                            echo $thuong.$rd.$red." Đang tạm thời hết nhiệm vụ like cmt       \r";
                        }
                    }
                    
         ///lam nhiem vu           
                    for ($lap = 0; $lap < 20; $lap++) {
        // like
      
        if ($listlike != NULL) {
            $idlike = $listlike[$lap]["idpost"];
            if ($idlike != '') {
                $g = like($access_token, $idlike, $cookie);
				//var_dump( $g);
if ($dem % 25 == 0){
  $xu = getxu();
}
          if ($g -> {'error'} -> {'code'} == 190) {
                    echo $thuong.$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;

                }
              if ($g -> {'error'} -> {'code'} == 368) {
                echo $thuong.$do." Bạn Đã Bị Block Like\n";
                array_splice($khocookie,$xz,1);
                $spam = 1; break;
              
                  $testbl = like($access_token,'2639172716389635', $cookie);
              if ($testbl -> {'error'} -> {'code'} == 368) {
                    echo " \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                $nhanlike = nhantienlike($idlike,$useragent);
                $s= $nhanlike[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+400;
                    $xujob = 400;
                    $dem++;
                    
                    hoanthanh($dem, '  LIKE  ', $idlike, $xujob, $xu);
                    if ( $dem >= $dungtool ){
                      $dungtool = 999999;
                      echo $do."[".$luc."●".$do."]".$red." ●".$ngan." Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu." Xu\n";
                      exit;
                    }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                       
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}

  //share
            if ($listshare != NULL) {
                $id = $listshare[$lap]["idpost"];
                if ($id != '') {
                    $g = share($access_token, $id);
                    if ($dem % 25 == 0){
                      $xu = getxu();
                    }
          if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $thuong.$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                echo $thuong.$do." Bạn Đã Bị Block Share\n";
                array_splice($khocookie,$xz,1);
                $spam = 1; break;
                
              $testbl = share($access_token,'2639172716389635');
              if ($testbl -> {'error'} -> {'code'} == 368) {
                    echo " \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
            $nhanshare = traluong('share',$id);
          $s= $nhanshare[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                            $xujob = 600;
                            $dem++;
                            hoanthanh($dem, ' SHARES ', $id, $xujob, $xu);
                            if ( $dem >= $dungtool ){
                      $dungtool = 999999;
                      echo $do."[".$luc."●".$do."]".$red." ●".$ngan." Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu." Xu\n";
                      exit;
                    }
                            if($dem % $doinick == 0){
                      if (count($khocookie)>1){       
                      $spam = 1; break;
                      }
                            }
                            if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                      
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
                }}
          //cảm xúc
        if ($listcx != NULL) {
            $idcx = $listcx[$lap]["idpost"];
            $type = $listcx[$lap]["loaicx"];
            if ($idcx != '') {
                $g = camxuc($idcx, $type, $cookie);
 if ($dem % 25 == 0){
  $xu = getxu();
}
                if ($g -> {'error'} -> {'code'} == 190) {
                  echo "\r";
                      echo "                                                      \r";
                        echo $thuong.$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                        $spam = 1; break;
                    }
                    if ($g -> {'error'} -> {'code'} == 368) {
                      echo $thuong.$do." Bạn Đã Bị Block Cảm Xúc\n";
                      array_splice($khocookie,$xz,1);
                      $spam = 1; break;
                    
                      if ($g -> {'error'} -> {'code'} == 368) {
                      echo "\033[1;91m".$g-> {'error'}-> {'message'};
                        echo "\n";
                        array_splice($khocookie,$xz,1);
                        $spam = 1; break;
                    }

                $nhancx = traluongcx($type,$idcx);
                $s= $nhancx[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+400;
                    $xujob = 400;
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
                      $dungtool = 999999;
                      echo $do."[".$luc."●".$do."]".$red." ●".$ngan." Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu." Xu\n";
                      exit;
                    }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                       
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
    
        //likecmt
        if ($listlikecmt != NULL) {
            $idlikecmt = $listlikecmt[$lap]["idpost"];
            $type = $listlikecmt[$lap]["loaicx"];
            if ($idlikecmt != '') {
                if ($type == 'LIKE'){
                    like($access_token, $idlikecmt, $cookie);
                }else{
                    camxuc($idlikecmt, $type, $cookie);
                }
                if ($dem % 25 == 0){
                  $xu = getxu();
                  
                }
                $nhanlcmt = traluonglikecmt($type, $idlikecmt);
                $s= $nhanlcmt[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                    $xujob = 600;
                    $dem++;
                    hoanthanh($dem, $type.' CMT', $idlikecmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
                      $dungtool = 999999;
                      echo $do."[".$luc."●".$do."]".$red." ●".$ngan." Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu." Xu\n";
                      exit;
                    }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                      
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                } 
            }
        }
                    
        //cmt
        if ($listcmt != NULL) {
            $idcmt = $listcmt[$lap]["idpost"];
            $ms = json_decode($listcmt[$lap]["nd"]);
            $msg = $ms[0];
            if ($idcmt != '') {
                $g = cmt($access_token, $idcmt, $cookie, $msg);
if ($dem % 25 == 0){
  $xu = getxu();
}
                                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
echo "\r";
       echo "                                                      \r";
                    echo $thuong.$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
            }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                 echo $thuong.$do." Bạn Đã Bị Block CMT\n";
                array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                
              $testbl = cmt($access_token,'2639172716389635', $cookie,'thuongdz');
              if ($testbl -> {'error'} -> {'code'} == 368) {
                    echo " \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                $nhancmt = traluong('cmt',$idcmt);
                $s= $nhancmt[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                    $xujob = 600;
                    $dem++;
                    hoanthanh($dem, 'COMMENTS', $idcmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
                      $dungtool = 999999;
                      echo $do."[".$luc."●".$do."]".$red." ●".$ngan." Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu." Xu\n";
                      exit;
                    }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                        
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
     
       
    
    }}}}}

        
        function share($access_token, $id) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
            $data = array('privacy' => '{"value":"EVERYONE"}', 'message' => '', 'link' => 'https://mbasic.facebook.com/' . $id . '', 'access_token' => $access_token);
            curl_setopt($ch, CURLOPT_POST, count($data));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $a = json_decode(curl_exec($ch), true);
            curl_close($ch);
            return $a;
        }
        function like($access_token, $id, $cookie) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/likes');
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
            curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $idcmt . '/comments');
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
        function hoanthanh($dem, $type, $id, $xujob, $xu) {
            $xu = getxu();
            $t = date('H:i');
            $idk = substr($id, 0, 15);
            $rd = rand(1, 7);
            echo "\r";
            echo "                                              \r";
            $a = "\033[1;33m[".$dem."\033[1;33m] \033[1;31m● \033[1;36m".$tim.date("H:i:s")."\033[1;31m ●\033[1;3".$rd."m$type\033[1;31m● \033[1;97m Hoàn Thành \e[0m\033[1;31m● \033[1;32m+$xujob \033[1;31m● \033[1;93m".$xu." Xu\n";
            $len = strlen($a);
            for ($x = 0;$x < $len;$x++) {
                echo $a[$x];
            }
        }
        function delay($delay) {
            $rd = rand(1, 7);
            $time = $delay;
            for ($x = $time;$x > 0;$x--) {
echo "\r                                                      \r";
       echo "\r\033[1;92mLàm Nhiệm Vụ Tiếp Theo Sau:\033[1;93m $x\033[1;93m Giây ";
usleep(133333);
echo $do."Loading";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ● ";
usleep(133333);
echo "$res  \r";
}}

function delay2($delaybl){
  $green="\e[1;32m";
  $yellow="\e[1;33m";
  for($j = $delaybl;$j> 0;$j--){
    echo "\r                                                      \r";
       echo "\r\033[1;95mĐang Nghỉ Chuống Block Làm Tiếp Sau:\033[1;93m $j\033[1;93m Giây ";
usleep(133333);
echo $do."Loading";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ● ";
usleep(133333);
echo "$res  \r";
      
           }
  echo "\r";
  echo "                                                      \r";
}
            function getcookiettc($TTC_Access_token, $useragent) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/logintoken.php');
            curl_setopt($ch, CURLOPT_COOKIEJAR, "ttc.txt");
            curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
            $login = array('access_token' => $TTC_Access_token);
            curl_setopt($ch, CURLOPT_POST, count($login));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
            curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
            $source = curl_exec($ch);
            curl_close($ch);
            return $source;
        }
        function datnick($idfb, $useragent) {
            $url = 'https://tuongtaccheo.com/cauhinh/datnick.php';
            $header = array("Host: tuongtaccheo.com", "accept: */*", "x-requested-with: XMLHttpRequest", "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36", "content-type: application/x-www-form-urlencoded; charset=UTF-8", "origin: https://tuongtaccheo.com", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://tuongtaccheo.com/cauhinh/",);
            $data = 'iddat%5B%5D=' . $idfb . "&loai=fb";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_PORT, "443");
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_ENCODING, "");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $h = curl_exec($ch);
            curl_close($ch);
            return $h;
        }
        function getlike($useragent) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/getpost.php');
            $head[] = 'Host: tuongtaccheo.com';
            $head[] = 'accept: application/json, text/javascript, *' . '/' . '*; q=0.01';
            $head[] = 'x-requested-with: XMLHttpRequest';
            $head[] = 'referer: https://tuongtaccheo.com/kiemtien/';
            curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
            curl_setopt($ch, CURLOPT_ENCODING, TRUE);
            curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
            return json_decode(curl_exec($ch), true);
            curl_close($ch);
        }
        function nhantienlike($id, $useragent) {
            $ch = curl_init();
            $data = ('id=') . $id;
            curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/nhantien.php');
            $head[] = 'Host: tuongtaccheo.com';
            $head[] = 'content-length: ' . strlen($data);
            $head[] = 'x-requested-with: XMLHttpRequest';
            $head[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
            $head[] = 'origin: https://tuongtaccheo.com';
            $head[] = 'referer: https://tuongtaccheo.com/kiemtien/';
            $head[] = 'cookie: TawkConnectionTime=0';
            curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
            curl_setopt($ch, CURLOPT_ENCODING, TRUE);
            curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
            $xu = json_decode(curl_exec($ch), true);
            curl_close($ch);
            return $xu;
        }
        function getxu() {
            $url = "https://tuongtaccheo.com/home.php";
            $curl = curl_init();
            curl_setopt_array($curl, array(CURLOPT_PORT => "443", CURLOPT_URL => "$url", CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => "", CURLOPT_SSL_VERIFYPEER => true, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_COOKIEFILE => "ttc.txt"));
            $data = curl_exec($curl);
            curl_close($curl);
            preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
            $xu = $sd["1"];
            return $xu;
        }
        function getnv($loai, $useragent) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/' . $loai . 'cheo/getpost.php');
            $head[] = 'Host: tuongtaccheo.com';
            $head[] = 'accept: application/json, text/javascript, *' . '/' . '*; q=0.01';
            $head[] = 'x-requested-with: XMLHttpRequest';
            $head[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36';
            $head[] = 'referer: https://tuongtaccheo.com/kiemtien/' . $loai . 'cheo';
            curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
            curl_setopt($ch, CURLOPT_ENCODING, TRUE);
            curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
            return json_decode(curl_exec($ch), true);
            curl_close($ch);
        }
        function getnvcxcmt($useragent) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/getpost.php');
            $head[] = 'Host: tuongtaccheo.com';
            $head[] = 'accept: application/json, text/javascript, *' . '/' . '*; q=0.01';
            $head[] = 'x-requested-with: XMLHttpRequest';
            $head[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36';
            $head[] = 'referer: https://tuongtaccheo.com/kiemtien/camxuccheobinhluan';
            curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
            curl_setopt($ch, CURLOPT_ENCODING, TRUE);
            curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
            return json_decode(curl_exec($ch), true);
            curl_close($ch);
        }
        function traluong($loai, $id) {
            $url = "https://tuongtaccheo.com/kiemtien/$loai" . "cheo/nhantien.php";
            $data = ('id=') . $id;
            $head = array("Host: tuongtaccheo.com", "content-length: " . strlen($data), "x-requested-with: XMLHttpRequest", "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36", "content-type: application/x-www-form-urlencoded; charset=UTF-8", "origin: https://tuongtaccheo.com", "referer: https://tuongtaccheo.com/kiemtien/$loai" . "cheo/");
            $ch = curl_init();
            curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => $data, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_COOKIEFILE => "ttc.txt", CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
            $a = json_decode(curl_exec($ch), true);
            return $a;
        }
        function gettoken($cookie, $useragent) {
            $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: business.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
            $ch = curl_init();
            curl_setopt_array($ch, array(CURLOPT_URL => "https://business.facebook.com/business_locations", CURLOPT_USERAGENT => $useragent, CURLOPT_COOKIE => $cookie, CURLOPT_HTTPHEADER => $head, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => FALSE, CURLOPT_TIMEOUT => 60, CURLOPT_CONNECTTIMEOUT => 60, CURLOPT_FOLLOWLOCATION => TRUE));
            $access = curl_exec($ch);
            curl_close($ch);
            $access_token = 'EAAG' . explode('","', explode('EAAG', $access) [1]) [0];
            if (strlen($access_token) > 5) {
                return $access_token;
            } else {
                return 'die';
            }
        }
        function camxuc($idcx, $type, $cookie) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id=' . $idcx);
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
            if ($type == 'LIKE') {
                $haha2 = explode('" style="display:block"', $haha[1]) [0];
            } else if ($type == 'LOVE') {
                $haha2 = explode('" style="display:block"', $haha[2]) [0];
            } else if ($type == 'WOW') {
                $haha2 = explode('" style="display:block"', $haha[5]) [0];
            } else if ($type == 'CARE') {
                $haha2 = explode('" style="display:block"', $haha[3]) [0];
            } else if ($type == 'HAHA') {
                $haha2 = explode('" style="display:block"', $haha[4]) [0];
            } else if ($type == 'SAD') {
                $haha2 = explode('" style="display:block"', $haha[6]) [0];
            } else {
                $haha2 = explode('" style="display:block"', $haha[7]) [0];
            }
            $link2 = html_entity_decode($haha2);
            curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com' . $link2);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            curl_close($ch);
        }
        function traluongcx($type, $id) {
            $url = "https://tuongtaccheo.com/kiemtien/camxuccheo/nhantien.php";
            $data = 'id=' . $id . '&loaicx=' . $type;
            $head = array("Host: tuongtaccheo.com", "content-length: " . strlen($data), "x-requested-with: XMLHttpRequest", "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36", "content-type: application/x-www-form-urlencoded; charset=UTF-8", "origin: https://tuongtaccheo.com", "referer: https://tuongtaccheo.com/kiemtien/camxuccheo/");
            $ch = curl_init();
            curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => $data, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_CUSTOMREQUEST => "POST", CURLOPT_COOKIEFILE => "ttc.txt", CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
            $a = json_decode(curl_exec($ch), true);
            return $a;
        }
        function traluonglikecmt($type, $id) {
            $url = "https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/nhantien.php";
            $data = 'id=' . $id . '&loaicx=' . $type;
            $head = array("Host: tuongtaccheo.com", "content-length: " . strlen($data), "x-requested-with: XMLHttpRequest", "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36", "content-type: application/x-www-form-urlencoded; charset=UTF-8", "origin: https://tuongtaccheo.com", "referer: https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/");
            $ch = curl_init();
            curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => $data, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_CUSTOMREQUEST => "POST", CURLOPT_COOKIEFILE => "ttc.txt", CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
            $a = json_decode(curl_exec($ch), true);
            return $a;
        }
        function page($idpage, $cookie) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $idpage);
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
            $page = curl_exec($ch);
            if (explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page) [1]) [0]) {
                $get = explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page) [1]) [0];
                $link = 'https://mbasic.facebook.com/a/profile.php?fan&id=' . $idpage . '&origin=page_profile&pageSuggestionsOnLiking=1&gfid=' . $get . '&refid=17';
                curl_setopt($ch, CURLOPT_URL, $link);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_exec($ch);
            }
            curl_close($ch);
        
        }
