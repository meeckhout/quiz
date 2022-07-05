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
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
        }
    }

    public function run(): void
    {
        if(!isset($_POST['submit'])) {
            $this->setupGame();
        }

        if(!empty(($_POST['submit'] === "submit"))) {
            $this->guessIsSubmitted();
        }

        if(!empty(($_POST['submit'] === "startOver"))) {
            $this->setupGame();
        }
    }

    public function setupGame() : void
    {
        $this->message = "";

        $randomWord = array_rand($this->words,1);
        $this->selectedWord = $this->words[$randomWord];
        $_SESSION['selectedWord'] = serialize($this->selectedWord);
        var_dump($this->selectedWord);

    }

    public function guessIsSubmitted() : void
    {
        $this->selectedWord = unserialize($_SESSION['selectedWord'], 1);
        var_dump($this->selectedWord);

        $this->message = $this->selectedWord->verify();
        echo $this->message;
    }
}

//        print_r($this->words);
//        print_r(Data::words());
//        $randomFrenchWord = array_rand(Data::words());
//        echo $randomFrenchWord;
//        $englishTranslation = Data::words()[$randomFrenchWord];
//        echo $englishTranslation;