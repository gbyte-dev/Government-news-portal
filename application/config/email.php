<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Email Configuration (Offinitti SMTP)
|--------------------------------------------------------------------------
| Ye config tumhare provided credentials ka use karega.
*/
$config['protocol']     = 'smtp';
$config['smtp_host']    = 'smtp.gmail.com';
$config['smtp_port']    = 587; // SSL
$config['smtp_user']    = '';
$config['smtp_pass']    = ''; // App Password
$config['smtp_crypto']  = 'tls';
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";
$config['smtp_timeout'] = 30;
$config['debug'] = TRUE;
$config['from_email']   = '';
$config['from_name']    = '';

