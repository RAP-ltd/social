<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 15:55
 */

namespace RAP\web;

class Request
{
    protected $get;
    protected $post;
    protected $files;
    protected $request;

    public function __construct($params = [])
    {
        $this->get = $_GET;
        if (!empty($params)) {
            foreach ($params as $param => $value) {
                $this->get[$param] = $value;
                $_GET[$param] = $value;
            }
        }
        $this->post = $_POST;
        $this->request = $_REQUEST;
        $this->files = $_FILES;
    }

    public function get($name)
    {
        return (isset($this->get[$name])) ? $this->get[$name] : null;
    }

    public function post($name)
    {
        return (isset($this->post[$name])) ? $this->post[$name] : null;
    }

    public function request($name)
    {
        return (isset($this->request[$name])) ? $this->request[$name] : null;
    }

    public function files($name)
    {
        return (isset($this->files[$name])) ? $this->files[$name] : null;
    }
}