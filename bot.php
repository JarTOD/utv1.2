<?php


//// W A R N A ////
$d = "\033[0m";
$h = "\033[0;30m";
$a2 = "\033[1;30m";
$pt = "\033[0;37m";
$pt2 = "\033[1;37m";
$r = "\033[0;31m";
$r2 = "\033[1;31m";
$g = "\033[0;32m";
$g2 = "\033[1;32m";
$y = "\033[0;33m";
$y2 = "\033[1;33m";
$b = "\033[0;34m";
$b2 = "\033[1;34m";
$p = "\033[0;35m";
$p2 = "\033[1;35m";
$lb = "\033[0;36m";
$lb2 = "\033[1;36m";

//// H E A D E R S ////
function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");


$res = url("https://controlc.com/f29f5cde");
//echo $res."\n";
//exit;
$link1 = explode('Link: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('[tpcolor=#000080]',$res);
$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "{$r2}[OFFLINE]";
}else{
$o = "{$g2}[ONLINE]";
}
if ($pass=="update"){
$o = "{$y2}[Update]";
}


if ($pass == 'update'){
      echo $HJ2." ^ {$r2}SCRIPT Anda Tidak Terhubung ke Server \n";
      echo " # {$y2}Silahkan Copy Paste Link \n\n";
      echo $HJ2." # {$g2}Link Script Versi Update $link[0]\n\n";
      exit;
}

if ($link[0]==""){
echo " {$r2}CONNECTING LOST...!!!\n\n";
exit;
}
if ($pass == 'off'){
      echo $M2." # SCRIPT SEDANG MAINTENANCE \n";
      exit;
}else{
if($read == $pass){
	echo $banner = ("\n\n
 {$r2}**        **      **  **********         **    **** 
/**      /**      /** /////**///         ***   */// *{$y2}
/**   *  /**      /**     /**           //**  /    /*
/**  *** /**      /**     /**     *****  /**     *** {$g2}
/** **/**/**      /**     /**    /////   /**    *//  
/**** //****  **  /**     /**            /**   */{$lb2}
/**/   ///** //*****      /**           /**** /******
//       //   /////       //            ////  //////\n
{$pt2}=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=
{$g2}Author{$p2}       ==>{$b2} jToN
{$y2}Created by{$p2}   ==>{$r2} Terbit
{$b2}Github{$p2}       ==>{$g2} https://github.com/JarTOD
{$r2}You{$pt2}Tube{$p2}      ==>{$y2} https://controlc.com/d6622e86{$pt2}
=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=
");
      echo $HJ2."\n{$g2}▶  CHECKING Password... \r";
      sleep(3);
       system("xdg-open https://youtube.com/channel/UCL0cnWCI8eB0FrIHKViykvg");
       sleep(5);
        echo "$g2 • • •T R I M A K A S I H• • •\n\n";
      sleep(1);
}

elseif($read != $pass){
    echo $banner = ("\n\n
 {$r2}**        **      **  **********         **    **** 
/**      /**      /** /////**///         ***   */// *{$y2}
/**   *  /**      /**     /**           //**  /    /*
/**  *** /**      /**     /**     *****  /**     *** {$g2}
/** **/**/**      /**     /**    /////   /**    *//  
/**** //****  **  /**     /**            /**   */{$lb2}
/**/   ///** //*****      /**           /**** /******
//       //   /////       //            ////  //////\n
{$pt2}=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=
{$g2}Author{$p2}       ==>{$b2} jToN
{$y2}Created by{$p2}   ==>{$r2} Terbit
{$b2}Github{$p2}       ==>{$g2} https://github.com/JarTOD
{$r2}You{$pt2}Tube{$p2}      ==>{$y2} https://controlc.com/d6622e86{$pt2}
=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=
");
	echo $pt2."note: {$r2}#~{$y2} SILAHKAN MASUKAN PASSWORD YANG ADA DI DALAM LINK!
      {$r2}#~{$lb2} PASSWORD AKAN DIRESET SETIAP JAM 18.00 WIB!!!
      {$r2}#~{$p2} ANDA AKAN DIMINTAI PASSWORD KEMBALI SETIAP\n         MENJALANKAN SCRIPT!!!
      {$r2}#~{$pt2} SIMPAN PASSWORDNYA!!!
      {$r2}#~{$g2} TERIMAKASIH... \n{$pt2}=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=\n";
      $save = fopen("key.txt", "w");
echo "{$r2}#$y2 Link Password :$HJ2 $link[0]\n\n";
echo $M2."{$r2}#$g2 INPUT PASSWORD!!! : ".$p2;
$p = trim(fgets(STDIN));

echo $g2."\n Loading \033[1;31m•\033[1;32m>\r";
sleep(1);
echo $g2." Loading \033[1;31m•\033[1;32m> \033[1;31m•\033[1;32m>\r";
sleep(1);
echo $g2." Loading \033[1;31m•\033[1;32m> \033[1;31m•\033[1;32m> \033[1;31m•\033[1;32m>\r";
sleep(1);
system("rm key.txt");
if($pass == $p){
        fwrite($save, $p);
        echo $HJ2." # MANTAP. . .            \r";
        fclose($save);
        sleep(3);
        system("xdg-open https://youtube.com/channel/UCL0cnWCI8eB0FrIHKViykvg");
        echo "$g2 • • •T R I M A K A S I H• • • \n\n";
        sleep(5);
        }else{
        echo $r2."MAAF...!!!, PASSWORD YANG ANDA MASUKAN SALAH... \n{$r2}# {$g2}SILAHKAN COBA LAGI✓\n\n";
        exit;
        }
        }
}

//// E N D. P A S S W O R D ////

require_once('useragent.php');
$config = require_once('config.php');

$agent = new userAgent();
$ua = $agent->generate('mobile');

function get($url, $header)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip deflate');
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}
function post($url, $header, $data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip deflate');
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

function verify($ua, $curr, $address)
{
    $url = 'http://uptocoin.tk/fp/verify.php';
    $header = [
        'Host: uptocoin.tk',
        'Origin: http://uptocoin.tk',
        'Content-Type: application/x-www-form-urlencoded',
        'User-Agent: ' . $ua,
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'Referer: http://uptocoin.tk/fp/',
        'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
        'Cookie: '
    ];
    $data = 'address=' . $address . '&currency=' . $curr;

    return post($url, $header, $data);

}
system('clear');

function back($ua)
{
    $url = 'http://uptocoin.tk/fp/';
    $header = [
        'Host: uptocoin.tk',
        'Origin: http://uptocoin.tk',
        'Content-Type: application/x-www-form-urlencoded',
        'User-Agent: ' . $ua,
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
        'Cookie: '
    ];

    return get($url, $header);
}
$banner;
echo "\n\n \033[1;35mWELCOME TO MY SCRIPT\n⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️
\033[1;33m
 _   _       _         ____      _
| | | |_ __ | |_ ___  / ___|___ (_)_ __
| | | | '_ \| __/ _ \| |   / _ \| | '_ \
| |_| | |_) | || (_) | |__| (_) | | | | |
 \___/| .__/ \__\___/ \____\___/|_|_| |_|
      |_|                               v1.2
   

";
sleep(1);
      echo "\033[1;37m
=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷
{$g2}Author{$p2}       ==>{$b2} jToN
{$y2}Created by{$p2}   ==>{$r2} Terbit
{$b2}Github{$p2}       ==>{$g2} https://github.com/JarTOD
{$r2}You{$p2}Tube{$p2}      ==>{$y2} https://controlc.com/d6622e86{$p2}
=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×
";


///TIMER TO ADD START///

echo "\n \033[1;30mWait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30m  + Wait... Procesing Sctipt...\033[1;32m [+]\r";
sleep(1);
echo " \033[1;30m  + Wait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30m  + Wait... Procesing Sctipt...\033[1;32m [+]\r";
sleep(1);
echo " \033[1;30m  + Wait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30m  + Wait... Procesing Sctipt...\033[1;32m [+]\r";
sleep(1);
echo " \033[1;30m  + Wait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30m  + Wait... Procesing Sctipt...\033[1;32m [+]\r";
sleep(1);
echo " \033[1;30m  + Wait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30m  + Wait... Procesing Sctipt...\033[1;32m [✓]\r";
sleep(1);





////////
echo "\n {$r2}  + Geting Your Wallet Address  \033[1;32m[{$r2}×\033[1;32m]\r";
sleep(1);
echo " {$r2}  + {$g2}Geting Your Wallet Address  \033[1;32m[×]\r";
sleep(1);
echo " {$r2}  + Geting Your Wallet Address  \033[1;32m[{$r2}+\033[1;32m]\r";
sleep(1);
echo " {$r2}  + {$g2}Geting Your Wallet Address  \033[1;32m[×]\r";
sleep(1);
echo " {$r2}  + Geting Your Wallet Address  \033[1;32m[{$r2}+\033[1;32m]\r";
sleep(1);
echo " {$r2}  + {$g2}Geting Your Wallet Address  \033[1;32m[×]\r";
sleep(1);
echo " {$r2}  + Geting Your Wallet Address  \033[1;32m[{$r2}+\033[1;32m]\r";
sleep(1);
echo " {$r2}  + {$g2}Geting Your Wallet Address  \033[1;32m[×]\r";
sleep(1);
echo " {$r2}  + Geting Your Wallet Address  \033[1;32m[{$r2}+\033[1;32m]\r";
sleep(1);
echo " {$r2}  + {$g2}Geting Your Wallet Address  \033[1;32m[×]\r";
sleep(1);
echo " {$r2}  + Geting Your Wallet Address  \033[1;32m[{$r2}+\033[1;32m]\r";
sleep(1);
echo " {$r2}  + {$g2}Geting Your Wallet Address  \033[1;32m[×]\r";
sleep(1);
echo " {$r2}  + Geting Your Wallet Address  \033[1;32m[{$r2}+\033[1;32m]\r";
sleep(1);
echo " {$r2}  + {$g2}Geting Your Wallet Address  \033[1;32m[✓]\r";
sleep(1);
///END TIMER TO ADD///
echo "\033[1;35m
••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
\033[1;31m ____  _____ _        _    __  __    _  _____
/ ___|| ____| |      / \  |  \/  |  / \|_   _|
\033[1;33m\___ \|  _| | |     / _ \ | |\/| | / _ \ | |
 ___) | |___| |___ / ___ \| |  | |/ ___ \| |
\033[1;32m|____/|_____|_____/_/   \_\_|  |_/_/   \_\_|

 ____  _____ ____  _  _______ ____     _   _
| __ )| ____|  _ \| |/ / ____|  _ \   | | / \
\033[1;33m|  _ \|  _| | |_) | ' /|  _| | |_) |  | |/ _ \
| |_) | |___|  _ <| . \| |___|  _ < |_| / ___ \
\033[1;31m|____/|_____|_| \_\_|\_\_____|_| \_\___/_/   \_\
\033[1;35m
••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
\033[1;30m
";
sleep(3);


$iteration = 1;
while (true) {
    echo "\n{$b2}[>••••••••••••••••••••••••••{$g2}[{$y22}$iteration{$g2}]{$b2}••••••••••••••••••••••••••<]\n";    foreach ($config['wallets'] as $wallet) {
        $verify = verify($ua, $config['currency'], $wallet);
        $msg = explode('<div class="alert alert-success">', $verify);
        if (isset($msg[1])) {
            $msg = $msg[1];
            $msg = explode('<a', $msg)[0];
            $msg2 = explode('href="https://faucetpay.io/page/balance/?address=', $verify)[1];
            $msg2 = explode('">your', $msg2)[0];
            echo "$y2" . $msg . "$lb2" . "[>" . "$pt2" . $msg2 . "$lb2" . "<]" . "\n";
            echo "{$g2}[>=========================================================<]\n";
        } else {
            echo "{$r2}Failed: {$pt2}$wallet\n";
            echo "{$r2}[>=========================================================<]\n";
            sleep(1);
        }
    }
    
    for ($i = 1; $i >= 0; $i--) {
        echo "\r";
        echo "{$lb2}===>Wait... {$y2}$i {$g2}Second";
        sleep(1);
    }
    echo "\r";

    $back = back($ua);

    sleep(1);
    $iteration++;
}
