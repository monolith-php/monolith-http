<?php namespace Monolith\HTTP;

class Response {
    private $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function send() {
        header('HTTP/1.1 200 OK', true, 200);
        echo $this->content;
        if (function_exists('fastcgi_finish_request')) {
            fastcgi_finish_request();
        }
    }
}