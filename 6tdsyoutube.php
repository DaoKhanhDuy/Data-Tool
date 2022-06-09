error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$xnhac = "\033[1;36m";
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
$gioi_han_job = 2;
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";
$thanhngang = $vang."-------------------------------------------------------------\n";
$thanhngang1 = $vang."-------------------------------------------------------------\n";
$thanhchay = $vang."-------------------------------------------------------------\n";
$ngoctool = $do."[".$luc."●".$do."]".$trang." => ";
$thuong = $do."[".$luc."●".$do."]".$trang." => ";

@system("clear");
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
@system('clear');
 echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Trao Đổi Sub YTB\n";
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
$khoTDS =[];
while(true){
   if (file_exists('logtds_ytb.txt'))
    {
        echo "$ngoctool\033[1;32mNhập ".$do."[".$vang."1".$do."]".$luc." Chạy Tài Khoản TDS Đã Lưu \n";
        echo "$ngoctool\033[1;32mNhập ".$do."[".$vang."2".$do."]".$luc." Chạy Tài Khoản TDS Mới\n";
        echo "$ngoctool\033[1;32mNhập Chế Độ: \033[1;33m";
        $cookietds = trim(fgets(STDIN));
        if ($cookietds == "2" )
        {
            unlink('logtds_ytb.txt');
        }else{}
    }else{
        echo "$ngoctool\033[1;32mNhập Tài Khoản TDS: $vang";
        $tktds = trim(fgets(STDIN));
        echo "$ngoctool\033[1;32mNhập Mật Khẩu TDS: $vang";
        $mktds = trim(fgets(STDIN));
        array_push($khoTDS,$tktds);
        array_push($khoTDS,$mktds);
        $js=json_encode($khoTDS);
        $k = fopen("logtds_ytb.txt","a+");
        fwrite($k, $js);
        fclose($k);
        }
        if (file_exists('logtds_ytb.txt')){
        $khoTDS = json_decode(fread(fopen("logtds_ytb.txt","r"),filesize("logtds_ytb.txt")),true);
        $username = $khoTDS[0];
        $password = $khoTDS[1];
        }
    $data = 'username='.$username.'&password='.$password;
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_COOKIEJAR, 'file.txt');
    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
    $mr2 = curl_exec($mr); 
    curl_close($mr); 
    $dn = explode('success":', $mr2)[1];
    $dn = explode('}', $dn)[0];
    if($dn == 'true'){
    echo $xnhac."Đăng Nhập Thành Công\n";
    sleep(0.1);
    break;
    }else{
    echo $do."Sai Tài Khoản Hoặc Mật Khẩu \n";
    sleep(0.1);
    unlink('logtds_ytb.txt');
    }
}
@system('clear');
 echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Trao Đổi Sub YTB\n";
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
$khoTT = [];
    if (file_exists('idyt.txt'))
    {
        echo "$ngoctool\033[1;32mNhập ".$do."[".$vang."1".$do."]".$luc." Chạy ID YouTube Đã Lưu \n";
        echo "$ngoctool\033[1;32mNhập ".$do."[".$vang."2".$do."]".$luc." Chạy ID YouTube Mới\n";
        echo "$ngoctool\033[1;32mNhập Chế Độ: \033[1;33m";
        $cookietds = trim(fgets(STDIN));
        if ($cookietds == "2" )
        {
            unlink('idyt.txt');
        }else{}
    }else{
            echo $ngoctool.$luc."Vào Web TDS Sao Chép ID YouTube Đang Cấu Hình \n";
            echo $ngoctool.$luc."Nhập ID Youtube Cấu Hình TDS : $vang";
        $idyt = trim(fgets(STDIN));
        array_push($khoTT,$idyt);
        $js=json_encode($khoTT);
        $k = fopen("idyt.txt","a+");
        fwrite($k, $js);
        fclose($k);
        }
        if (file_exists('idyt.txt'))
    {
        $khoTT = json_decode(fread(fopen("idyt.txt","r"),filesize("idyt.txt")),true);
        $idyoutube = $khoTT[0];
    }

    // cấu hình
    $header = array( 
        "Host:traodoisub.com",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "x-requested-with:XMLHttpRequest",
        "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
        "origin:https://traodoisub.com",
        "referer:https://traodoisub.com/view/chyoutube/",
        );
        $data = 'iddat='.$idyoutube;
        $mr = curl_init();
        curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/scr/youtube_datnick.php');
        curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
        curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
        curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
        curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
        $mr2 = curl_exec($mr); 
        curl_close($mr);
        if($mr2 == '1'){
        echo $xnhac."Cấu Hình Thành Công \n";
        break;
        }else{
            echo $do."Cấu Hình Thất Bại \n";
            sleep(2);
        }

}

// lấy xu
$header = array( 
    "Host:traodoisub.com",
    "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
    "referer:https://traodoisub.com/view/setting/",
    );
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/view/setting/load.php');
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
    $mr2 = curl_exec($mr); 
    curl_close($mr);
    $xu = explode('xu":"', $mr2)[1];
    $xu = explode('"', $xu)[0];
    
    $user = explode('user":"', $mr2)[1];
    $user = explode('"', $user)[0];
@system('clear');
 echo "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n";
usleep(70000);
echo $thuong.$vang."Tool Trao Đổi Sub YTB\n";
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
echo "$ngoctool\033[1;32mTên Tài Khoản: \033[1;93m$user\n";
echo "$ngoctool\033[1;32mXu Hiện Tại: \033[1;93m$xu \n";
while(true){
    
    echo $thanhngang;
    echo "$ngoctool\033[1;32mNhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Subscribe\n";
    echo "$ngoctool\033[1;32mNhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Comment \n";
    echo $ngoctool.$luc."Nhập Chế Độ: $vang";
    $nhiemvu = trim(fgets(STDIN));
    echo $ngoctool.$luc."Nhập Delay (Trên 20): $vang";
    $delay = trim(fgets(STDIN));
    if($delay < 15)
		{exit($ngoctool."\033[1;91mÍt Nhất 20 Giây\n");}
$tool = "\033[1;92mTraoDoiSub Youtube";
    echo $thanhngang;


$spam = 0;
while(true){

    if($spam == 1){
        break;
    }

    if($nhiemvu == 1){

        

        // lấy id follow
        $header = array( 
        "Host:traodoisub.com",
        "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
        "referer:https://traodoisub.com/ex/youtube_follow/",
        );
        $mr = curl_init();
        curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_follow/load.php');
        curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
        curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
        curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
        $mr2 = curl_exec($mr); 
            curl_close($mr); 

            $id = explode('id":"', $mr2)[2];
            $id = explode('"', $id)[0];
            
            $aidi = substr($id,22);
            
            $link = explode('link":"', $mr2)[1];
            $link = explode('"', $link)[0];

            $type = explode('type":"', $mr2)[1];
            $type = explode('"', $type)[0];
            
            $link2 = substr($link,27);
            $link = "https://youtube.com/".$link2;

            if($id == ''){
                $demhetnv++;
                if($demhetnv == 5){
                    $demhetnv = 0;
                    $spam = 1;
                    break;
                }
            }else{
                $demhetnv = 0;
            $dem++;
            
           $kl = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;33mSubscribe\033[1;31m | \033[1;37m".$link2." \n";
 for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(1000);}
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
                @system('xdg-open '.$link);
            } else {
                @system('cmd /c start '.$link);
            }
            delay ($delay);
            // làm job
            $header = array( 
                "Host:traodoisub.com",
                "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                "x-requested-with:XMLHttpRequest",
                "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
                "origin:https://traodoisub.com",
                "referer:https://traodoisub.com/ex/youtube_follow/",
                );
                $data = 'id='.$id.'&type='.$type.'';
                $mr = curl_init();
                curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_follow/cache.php');
                curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                $mr2 = curl_exec($mr); 
                curl_close($mr);
            
                
                 // nhận tiền
                $header = array( 
                    "Host:traodoisub.com",
                    "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                    "x-requested-with:XMLHttpRequest",
                    "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
                    "origin:https://traodoisub.com",
                    "referer:https://traodoisub.com/ex/youtube_follow/",
                    );
                    $data = 'key=0257272C744254';
                    $mr = curl_init();
                    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_follow/nhantien.php');
                    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                    $mr2 = curl_exec($mr); 
                    curl_close($mr);
                    $json = json_decode($mr2, true);
                    $ok = explode('code": "', $mr2)[1];
                    $ok = explode('"', $ok)[0];
                    
                    $xu = explode('xu": ', $mr2)[1];
                    $xu = explode(',', $xu)[0];
                    
                    $nt = explode('ng', $mr2)[1];
                    $nt  = explode('"', $nt)[0];

            if($ok == "success"){
                echo $thanhngang;
                echo "\033[1;36m Nhận Thành Công ".$nt."\033[1;31m |\033[1;33m $xu \n";
                echo $thanhngang;
   }else{
            }

        }
        

        }elseif($nhiemvu == 2){



        // lấy id cmt
        $header = array( 
            "Host:traodoisub.com",
            "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
            "referer:https://traodoisub.com/ex/youtube_comment/",
            );
            $mr = curl_init();
            curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_comment/load.php');
            curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
            curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
            curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
            $mr2 = curl_exec($mr); 
            curl_close($mr);
            $json = json_decode($mr2, true);
            
            $id = explode('id":"', $mr2)[2];
            $id = explode('"', $id)[0];
            
            $aidi = substr($id,22);
            
            $link = explode('link":"', $mr2)[1];
            $link = explode('"', $link)[0];
            
            $type = explode('type":"', $mr2)[1];
            $type = explode('"', $type)[0];
            
            $msg = explode('msg":"', $mr2)[1];
            $msg = explode('"', $msg)[0];
            
            $msg1 = $json["data"][0]["msg"];
            
            $link2 = substr($link,27);
            
            $link = "https://youtube.com/".$link2;


            if($id == ''){
                $demhetnv++;
                if($demhetnv == 5){
                    $demhetnv = 0;
                    $spam = 1;
                    break;
                }
            }else{
                $demhetnv = 0;
                $dem++;
                $kl = "\033[1;34m[\033[0;33m".$dem."\033[1;34m] \033[1;31m● \033[1;32m\033[1;36m".date("H:i:s")."\033[1;32m \033[1;31m● \033[1;".rand(31,37)."m"."Comment \033[1;".rand(31,37)."m"."➩ \033[1;37mhttps://youtube.com/".$link2." \033[1;91m| \033[1;97mNội Dung: ".$msg1."\n";
                for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
                if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	
                    @system('xdg-open '.$link);
                } else {
                    @system('cmd /c start '.$link);
                }
                delay ($delay);
                // làm job
                $header = array( 
                    "Host:traodoisub.com",
                    "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                    "x-requested-with:XMLHttpRequest",
                    "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
                    "origin:https://traodoisub.com",
                    "referer:https://traodoisub.com/ex/youtube_comment/",
                    );
                    $data = 'id='.$id.'&type='.$type.'';
                    $mr = curl_init();
                    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_comment/cache.php');
                    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                    $mr2 = curl_exec($mr); 
                    curl_close($mr);
                
                    
                     // nhận tiền
                    $header = array( 
                        "Host:traodoisub.com",
                        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                        "x-requested-with:XMLHttpRequest",
                        "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
                        "origin:https://traodoisub.com",
                        "referer:https://traodoisub.com/ex/youtube_comment/",
                        );
                        $data = 'id='.$id.'&type='.$type.'';
                        $mr = curl_init();
                        curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_comment/nhantien.php');
                        curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                        curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                        curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                        curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                        $mr2 = curl_exec($mr); 
                        curl_close($mr);
                        $json = json_decode($mr2, true);
                $ok = explode('code": "', $mr2)[1];
                $ok = explode('"', $ok)[0];
                
                $xu = explode('xu": ', $mr2)[1];
                $xu = explode(',', $xu)[0];
                
                $nt = explode('ng', $mr2)[1];
                $nt  = explode('"', $nt)[0];
                if($ok == "success"){
                    echo $thanhngang;
                    echo "\e[1;32mSuccess\033[1;34m\033[1;".rand(31,37)."m =>\033[1;91m \033[1;33m Nhận Thành Công".$nt."\033[1;37m |\033[1;33m $xu\n";
                    echo $thanhngang;
                }else{
                }
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
