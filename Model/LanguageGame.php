<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class LanguageGame
{
    private array $words;
    public Word $selectedWord;
    public string $message;

//    $selectedWord->french;
//    $selectedWord->translation;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
//             TODO: create instances of the Word class to be added to the words array
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
        }
    }

    public function run(): void
    {
        // TODO: check for option A or B
        print_r($this->words);
//        print_r(Data::words());
//        $randomFrenchWord = array_rand(Data::words());
//        echo $randomFrenchWord;
//        $englishTranslation = Data::words()[$randomFrenchWord];
//        echo $englishTranslation;
        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate

        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown

    }
}