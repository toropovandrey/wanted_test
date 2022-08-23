<?php

namespace Architecture;

use Architecture\Factories\SecretKeyRecipientFactory;

class Concept {
    private $client;
    private SecretKeyRecipientFactory $factory;

    public function __construct() {
        $this->client = new \GuzzleHttp\Client();
        $this->factory = new SecretKeyRecipientFactory();
    }

    public function getUserData() {
        $params = [
            'auth' => ['user', 'pass'],
            'token' => $this->getSecretKey()
        ];

        $request = new \Request('GET', 'https://api.method', $params);
        $promise = $this->client->sendAsync($request)->then(function ($response) {
            $result = $response->getBody();
        });

        $promise->wait();
    }

    /**
     * @throws \Exception
     */
    private function getSecretKey(): string
    {
        $settings = json_decode(file_get_contents("../config/settings.json"), true);
        if (!$settings) {
            throw new \Exception("can't read settings");
        }

        $recipient = $this->factory->make($settings["settings"]["get_secret_key_place"] ?? "");

        return $recipient->getSecretKey();
    }
}