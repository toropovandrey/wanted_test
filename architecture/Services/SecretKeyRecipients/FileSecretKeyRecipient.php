<?php

namespace Architecture\Services\SecretKeyRecipients;

use Architecture\Interfaces\SecretKeyRecipientInterface;

class FileSecretKeyRecipient implements SecretKeyRecipientInterface
{
    public function getSecretKey(): string
    {
        return "file_key";
    }
}

