<?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "Remember the Titans") { $totalCorrect++; }
    if ($answer2 == "2001: A Space Odyssey") { $totalCorrect++; }
    if ($answer3 == "The Conjuring") { $totalCorrect++; }
    if ($answer4 == "Spiderman Homecoming") { $totalCorrect++; }
    if ($answer5 == "Shaun of the Dead") { $totalCorrect++; }
    
    $grade = $totalCorrect / 5 * 100;
    echo "<div id='results'>$totalCorrect / 5 correct</div>";
    echo "<div id='results'>$grade%</div>";

    echo "Question 1: What's my favorite football movie?";
    echo "<br>You answered: " . $answer1;
    echo "<br>Correct answer: Rember the Titans<br><br>"; 

    echo "Question 2: What's my favorite space movie?";
    echo "<br>You answered: " . $answer2;
    echo "<br>Correct answer: 2001: A Space Odyssey<br><br>"; 

    echo "Question 3: What's my favorite horror movie?" ;
    echo "<br>You answered: " . $answer3;
    echo "<br>Correct answer: The Conjuring<br><br>"; 

    echo "Question 4: What's my favorite super hero movie?";
    echo "<br>You answered: " . $answer4;
    echo "<br>Correct answer: Spiderman Homecoming<br><br>"; 

    echo "Question 5: What's my favorite zombie movie?";
    echo "<br>You answered: " . $answer5;
    echo "<br>Correct answer: Shaun of the Dead<br><br>"; 
    
?>