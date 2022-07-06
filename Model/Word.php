<?php

class Word
{

    public string $word;
    public string $answer;

    public function __construct(string $frenchWord, string $englishWord)
    {
        $this->word = $frenchWord;
        $this->answer = $englishWord;
    }

    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)

    public function verify()
    {
        if ($_POST['text'] === $this->answer) {
//            $_SESSION['result'] = 'true';
            return 'CORRECT !!';
        } else {
            return 'This answer is incorrect. The correct answer was : ' . $this->answer;
        }

//        $_SESSION['result'] = 'false';

        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}