<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Word
{
    public string $french;
    public string $translation;

    public function __construct(string $french, string $translation)
    {
        $this->french = $french;
        $this->translation = $translation;
    }

    public function verify(): string
    {
        if($_POST['guess'] === $this->translation) {
            return "success";
        }
        return "failure";
    }
}