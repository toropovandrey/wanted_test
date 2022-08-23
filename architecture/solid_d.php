<?php

namespace Architecture;

use Architecture\Interfaces\RequestServiceInterface;

class XMLHTTPRequestService implements RequestServiceInterface
{
    public function request(): void
    {

    }
}

class XMLHttpService extends XMLHTTPRequestService {}

class Http {
    private $service;

    public function __construct(RequestServiceInterface $xmlTTPRequestService) { }

    public function get(string $url, array $options) {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url) {
        $this->service->request($url, 'GET');
    }
}


