<?php

namespace Architecture\Interfaces;

interface SecretKeyRecipientInterface
{
    public function getSecretKey(): string;
}