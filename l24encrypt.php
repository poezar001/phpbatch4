<?php

function setpassword($plaintext)
{
    $passcode = $plaintext;
    echo $passcode;
}

setpassword("password123");

function passworddef($plaintext)
{
    $passcode = password_hash($plaintext, PASSWORD_DEFAULT); // dynamic code
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passcode} ";
    echo strlen($passcode);
}

passworddef("password123"); // Before Encrypt = password123, After Encrypt = $2y$10$bSBAzLGvUJ/lD.HwqUgdQeqtAU6VJmNs07JN2mBwRsdw2t6QRGjGm 60

function passwordbcr($plaintext)
{
    $passcode = password_hash($plaintext, PASSWORD_BCRYPT); // dynamic code
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passcode} ";
    echo strlen($passcode);
}

passwordbcr("password123"); // Before Encrypt = password123, After Encrypt = $2y$10$CVXrlj3reZV0xjvKxoJHbOBsu/xSaKV.piUHH8IQWh00bLQoGNlxe 60

function passworddecry()
{
    $plaintextone = "password123";
    $encodeone = password_hash($plaintextone, PASSWORD_DEFAULT);

    $plaintexttwo = "password123";
    $encodetwo = password_hash($plaintexttwo, PASSWORD_DEFAULT);

    // echo "Encrypt Code One = {$encodeone}";
    // echo "Encrypt Code One = {$encodetwo}";

    $verfiy = password_verify($plaintextone, $encodetwo);

    if ($verfiy) {
        echo "Oki";
    } else {
        echo "Failed";
    }
}

passworddecry(); // Oki

function passwordmd5($plaintext)
{
    //Message-Digest = md5(string,binary)
    //Note :: binary = TRUE/true FALSE/false;
    //TRUE/true = RAW 16 characters binary format
    //FALSE/false = DEFAUlT 32 characters hax number

    $passcode1 = md5($plaintext); // static
    echo "Before encrypt = {$plaintext}, After encrypt md5 = {$passcode1} "; //Before encrypt = password123, After encrypt md5 = 482c811da5d5b4bc6d497ffa98491e38
    echo strlen($passcode1); // 32

    $passcode2 = md5($plaintext, false); // static
    echo "Before encrypt = {$plaintext}, After encrypt md5 by FALSE = {$passcode2} "; // Before encrypt = password123, After encrypt md5 by FALSE = 482c811da5d5b4bc6d497ffa98491e38
    echo strlen($passcode2); // 32

    $passcode3 = md5($plaintext, true); // static
    echo "Before encrypt = {$plaintext}, After encrypt md5 by TRUE = {$passcode3} "; // Before encrypt = password123, After encrypt md5 by TRUE = H,��մ�mI��I8
    echo strlen($passcode3); // 16
}
passwordmd5("password123");

function passwordmd5verify($plaintext)
{
    $getpassword = "482c811da5d5b4bc6d497ffa98491e38";

    if ($getpassword === md5($plaintext)) {
        echo "Password match with 32 chars hax number";
    } elseif ($getpassword === md5($plaintext, true)) {
        echo "Password match with 16 chars binary format"; // can't match cuz it's a binary
    } else {
        echo "Password do not match";
    }
}
passwordmd5verify("password123");

function passwordsha1($plaintext)
{
    //Secure Hash Algorithm = sha1(string,binary)
    //Note :: binary = TRUE/true / FALSE/false;
    //TRUE/true = RAW 20 characters binary format
    //FALSE/false = DEFAUlT 40 characters hax number

    $passcode1 = sha1($plaintext); // static
    echo "Before encrypt = {$plaintext}, After encrypt sha1 = {$passcode1} "; // Before encrypt = password123, After encrypt sha1 = cbfdac6008f9cab4083784cbd1874f76618d2a97
    echo strlen($passcode1); // 40

    $passcode2 = sha1($plaintext, false); // static
    echo "Before encrypt = {$plaintext}, After encrypt sha1 by FALSE = {$passcode2} "; // Before encrypt = password123, After encrypt sha1 = cbfdac6008f9cab4083784cbd1874f76618d2a97

    $passcode3 = sha1($plaintext, true); // static
    echo "Before encrypt = {$plaintext}, After encrypt sha1 by TRUE = {$passcode3} "; // Before encrypt = password123, After encrypt sha1 by TRUE = ���`�ʴ7��чOva�*�
    echo strlen($passcode3); // 20
}
passwordsha1("password123");

function passwordsha1verify($plaintext)
{
    $getpassword = "482c811da5d5b4bc6d497ffa98491e38";

    if ($getpassword === sha1($plaintext)) {
        echo "Password match with 32 chars hax number";
    } elseif ($getpassword === sha1($plaintext, true)) {
        echo "Password match with 16 chars binary format"; // can't match cuz it's a binary
    } else {
        echo "Password do not match";
    }
}
passwordsha1verify("password123");

function passwordcrypt($plaintext)
{
    //=> crypt(string,key)
    $cryptkey = "456789ABCDEFG";
    $passcode = crypt($plaintext, $cryptkey); // static code
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passcode} ";
    echo strlen($passcode); // 13
}
passwordcrypt("password123"); // Before Encrypt = password123, After Encrypt = 45X0h1uT9HvTw

function passwordcryptverify($plaintext)
{
    $getpassword = "45X0h1uT9HvTw";
    $cryptkey = "456789ABCDEFG";

    if ($getpassword === crypt($plaintext, $cryptkey)) {
        echo "Password match";
    } else {
        echo "Password do not match";
    }
}
passwordcryptverify("password123");

function strongpassword($plaintext)
{
    $cryptkey = "456789ABCDEFG";
    $newpassword = crypt(sha1(md5($plaintext)), $cryptkey);

    // $newpassword = md5($plaintext);
    // $newpassword = sha1($newpassword);
    // $newpassword = crypt($newpassword,$newpassword);

    echo "Before Encrypt = {$plaintext} , After Encrypt = {$newpassword} ";
    echo strlen($newpassword);
}
strongpassword("password123");

function strongpasswordverify($plaintext)
{
    $getpassword = "45QUhSRh116Mw";
    $cryptkey = "456789ABCDEFG";

    if ($getpassword === crypt(sha1(md5($plaintext)), $cryptkey)) {
        echo "Password match";
    } else {
        echo "Password do not match";
    }

    // $getpassword = "926wQBSqLwkTE";

    // if ($getpassword === crypt(sha1(md5($plaintext)), sha1(md5($plaintext)))) {
    //     echo "Password match";
    // } else {
    //     echo "Password do not match";
    // }
}
strongpasswordverify("password123");
