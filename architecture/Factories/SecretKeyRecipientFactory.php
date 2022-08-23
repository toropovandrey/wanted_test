<?php

namespace Architecture\Factories;

use Architecture\Interfaces\SecretKeyRecipientInterface;
use Architecture\Services\SecretKeyRecipients\DbSecretKeyRecipient;
use Architecture\Services\SecretKeyRecipients\FileSecretKeyRecipient;

class SecretKeyRecipientFactory
{
    /**
     * @throws \Exception
     */
    public function make(string $keyPlace): SecretKeyRecipientInterface
    {
        switch ($keyPlace) {
            case "file": return new FileSecretKeyRecipient();
            case "db": return new DbSecretKeyRecipient();
            default: throw new \Exception("invalid {$keyPlace}");
        }
    }
}