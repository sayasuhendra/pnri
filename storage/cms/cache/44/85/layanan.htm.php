<?php 
class Cms57c5505aaf241_74620389Class extends \Cms\Classes\PageCode
{
public function onSend()
{
    // Collect input
    $name = post('nama');
    $email = post('email');

    // Submit form
    $to = ['suhendrakaf@yahoo.co.id', 'sayasuhendra@gmail.com'];
    $params = compact('name','email');
    Mail::sendTo($to, 'frontend::mail.notif', $params);
    if (count(Mail::failures()) > 0) return false;
    return true;
}
}
