<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{public string $fromEmail  = 'f1d022013anhar@gmail.com';
public string $fromName   = ' anhar muhammad ';
public string $recipients = '';

public string $userAgent = 'CodeIgniter';
public string $protocol = 'smtp';
public string $mailPath = '/usr/sbin/sendmail'; // Abaikan jika pakai SMTP

public string $SMTPHost = 'smtp.gmail.com';
public string $SMTPUser = 'f1d022013anhar@gmail.com';
public string $SMTPPass = 'khkj fblx spau javh'; // BUKAN password akun Gmail
public int    $SMTPPort = 587;
public int    $SMTPTimeout = 10;
public bool   $SMTPKeepAlive = false;
public string $SMTPCrypto = 'tls';

public bool   $wordWrap = true;
public int    $wrapChars = 76;
public string $mailType = 'html';
public string $charset = 'UTF-8';
public bool   $validate = true;

public int    $priority = 3;
public string $CRLF = "\r\n";
public string $newline = "\r\n";
public bool   $BCCBatchMode = false;
public int    $BCCBatchSize = 200;
public bool   $DSN = false;
}