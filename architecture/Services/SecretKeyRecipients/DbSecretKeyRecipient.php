<?php

namespace Architecture\Services\SecretKeyRecipients;

use Architecture\Interfaces\SecretKeyRecipientInterface;

class DbSecretKeyRecipient implements SecretKeyRecipientInterface
{
    public function getSecretKey(): string
    {
        return "db_key";
    }
}