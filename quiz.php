<?php
	$answers = array($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"]);	
	$corrects = array("George Washington", "Blue Whale", "The Master Chief", "Neil Armstrong", "Whales");
	$score = 0;
	for($i = 0; $i < 5; $i++) {
		if(strcmp($answers[$i],$corrects[$i]) === 0) {
			$score++;
		}
	}
	
	echo "<p>Question 1: Who was the first president of the United States? </p>";
	echo "<p>You answered: " . $answers[0] . "</p>";
	echo "<p>Correct answer: " . $corrects[0] . "</p><br>";
	
	echo "<p>Question 2: What is the largest animal on Earth? </p>";
	echo "<p>You answered: " . $answers[1] . "</p>";
	echo "<p>Correct answer: " . $corrects[1] . "</p><br>";	

	echo "<p>Question 3: Who is the main character of the Halo franchise? </p>";
	echo "<p>You answered: " . $answers[2] . "</p>";
	echo "<p>Correct answer: " . $corrects[2] . "</p><br>";

	echo "<p>Question 4: Who was the first man to walk on the Moon? </p>";
	echo "<p>You answered: " . $answers[3] . "</p>";
	echo "<p>Correct answer: " . $corrects[3] . "</p><br>";

	echo "<p>Question 5: What is the loudest animal on Earth? </p>";
	echo "<p>You answered: " . $answers[4] . "</p>";
	echo "<p>Correct answer: " . $corrects[4] . "</p><br>";	
	
	echo "<p>Answered Correctly: " . $score . "/5</p>";
	echo "<p>Total Score: " . ($score * 20) . "%</p>";
?>