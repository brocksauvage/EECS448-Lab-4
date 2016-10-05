<?php

		$score = 0;
		$answer1 = $_POST["light"];
		$answer2 = $_POST["mario"];
		$answer3 = $_POST["goku"];
		$answer4 = $_POST["coach"];
		$answer5 = $_POST["instrument"];

		if($answer1 == "Red")
		{
			$score++;
		}
		if($answer2 == "1983")
		{
			$score++;
		}
		if($answer3 == "Super Saiyan")
		{
			$score++;
		}
		if($answer4 == "James Naismith")
		{
			$score++;
		}
		if($answer5 == "Violin")
		{
			$score++;
		}

		echo "Question 1: Which color of light has the highest wavelength?" . "<br>";
		echo "Your Answer: " . $answer1 . "<br>";
		echo "Correct Answer: Red" . "<br><br>";

		echo "Question 2: When was Super Mario Bros. originally released?" . "<br>";
		echo "Your Answer: " . $answer2 . "<br>";
		echo "Correct Answer: 1983" . "<br><br>";
	
		echo "Question 3: During his first fight with Freeza, which form did Goku power up to?" . "<br>";
		echo "Your Answer: " . $answer3 . "<br>";
		echo "Correct Answer: Super Saiyan" . "<br><br>";

		echo "Question 4: Which KU Basketball coach had a losing record?" . "<br>";
		echo "Your Answer: " . $answer4 . "<br>";
		echo "Correct Answer: James Naismith" . "<br><br>";

		echo "Question 5: What musical instrument is played with a bow?" . "<br>";
		echo "Your Answer: " . $answer5 . "<br>";
		echo "Correct Answer: Violin" . "<br><br>";

		echo "Correct Answers: " . $score . "/5" . "<br>";
		echo "You scored " . (($score/5)*100) . "%" . " on this quiz.";



?>
