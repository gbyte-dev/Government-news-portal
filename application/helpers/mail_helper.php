<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('send_email')) {
    function send_email($to, $subject, $message, $from = NULL, $from_name = NULL) {
        $CI =& get_instance();
        $CI->load->library('email');

        $from_email = $from ?: EMAIL_FROM;
        $from_name  = $from_name ?: EMAIL_FROM_NAME;
        $CI->email->clear(true);
        // Corrected Gmail SMTP configuration
       $config = [
            'protocol'      => SMTP_PROTOCOL,
            'smtp_host'     => SMTP_HOST,
            'smtp_port'     => SMTP_PORT,
            'smtp_user'     => SMTP_USER,
            'smtp_pass'     => SMTP_PASS,
            'smtp_crypto'   => SMTP_CRYPTO,
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'newline'       => "\r\n",
            'crlf'          => "\r\n",
            'smtp_timeout'  => SMTP_TIMEOUT,
            'validate'      => true,
            'wordwrap'      => true,
            'priority'      => 1,
        ];

        $CI->email->initialize($config);
        $CI->email->from($from_email, $from_name);
        $CI->email->to($to);
        $CI->email->subject($subject);
        $CI->email->message($message);

        if (!$CI->email->send()) {
			log_message('error', $CI->email->print_debugger(['headers']));
			return false;
		}
		return true;

    }
}
