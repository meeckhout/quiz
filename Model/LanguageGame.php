<?php

class LanguageGame
{
    private array $words;
    public Word $selectedWord;
    public string $message;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
            // TODO: create instances of the Word class to be added to the words array
        }
//        $this->selectedWord = new Word("", "");
    }

    public function run(): void
    {
        if (!isset($_POST['submit'])) {
            $this->setupGame();
        }

        if (!empty($_POST['text']) && $_POST['submit'] === 'go') {
            $this->guessIsSubmitted();
        }

        if (!empty($_POST['startOver'])) {
            $this->setupGame();
        }
    }

    public function setupGame(): void
    {
        $randomWord = array_rand($this->words, 1);
        $this->selectedWord = $this->words[$randomWord];
        $_SESSION['selectedWord'] = serialize($this->selectedWord);
        $this->message = "";
    }

    public function guessIsSubmitted(): void
    {
        $this->selectedWord = unserialize($_SESSION['selectedWord']);

        $this->message = $this->selectedWord->verify();

        echo $this->message;
    }
}