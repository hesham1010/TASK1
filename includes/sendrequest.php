<?php
use ipinfo\ipinfo\IPinfo;

trait SendRequest
{
    public $ipaddress;
    private $access_token = '4cabd073cb6d70';

    public function __construct($ipaddress)
    {
        $this->ipaddress = $ipaddress;
        $this->client = new IPinfo($this->access_token);
        $this->details = $this->client->getDetails($this->ipaddress);
    }
    function get_country()
    {
        echo $this->details->country_name;
        echo "<br/>";
    }
    function get_ip()
    {
        echo $this->ipaddress;
        echo "<br/>";
    }
    function get_city()
    {
        echo $this->details->city;
        echo "<br/>";
    }
    function get_location()
    {
        echo $this->details->loc;
        echo "<br/>";
    }
    function get_postal()
    {
        echo $this->details->postal;
        echo "<br/>";
    }
    function all_call()
    {
        $this->get_country();
        $this->get_ip();
        $this->get_city();
        $this->get_location();
        $this->get_postal();
    }
}