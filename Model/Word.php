<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Word
{
    public string $french;
    public string $translation;

    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public function __construct()
    {
//        this->french = $french;
//        this->translation = $translation;
    }

    public function verify(string $answer): bool
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}