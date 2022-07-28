<?php
$linguagem = $_POST['lingua'];

echo match ($linguagem) {
    'PHP' => "PHP é a mais foda mesmo!",
    'JS' => "JavaScript? Junto com PHP é perfeita!",
    'C' => "C eu acho difícil!",
    'Python' => "Python é fácil e divertida!",
    default => "Não conheço essa!",
};

