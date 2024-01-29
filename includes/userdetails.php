<?php
// namespace includes\userdetails;
// require_once __DIR__ . '../vendor/autoload.php';
use ipinfo\ipinfo\IPinfo;

require_once __DIR__ . "/sendrequest.php";
class UserDetails
{
    use SendRequest {
        SendRequest::__construct as private __swConstruct;
    }
    function __construct($ipaddress)
    {
        $this->__swConstruct($ipaddress);
    }


    public function set_data()
    {
        $this->all_call();
    }
}




