<!DOCTYPE hmtl>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
	</head>

	<body>

		<ul>
			<li><a href="session.php">Sessions</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul><br><br>

		<form method="GET">
			<input type="text" name="person">
			<button>Submit</button>
		</form>

		<?php
		// Output
			echo "Hi there <br>";
			print "How are you? <br>";

		// Variables
			$name = $_GET['person'];
			echo $name."<br>";
			echo $name." is a web developer. <br>";

		// Functions
			echo strlen("Kiyunna");
			echo "<br>";
			echo str_word_count("Hi Kiyunna. How are you?");
			echo "<br>";
			echo strrev("Kiyunna");
			echo "<br>";

		// Data Types
			$string = 'blah';
			$string2 = "blah";
			$integer = 20;
			$float = 20.5784;
			$true = true;
			$false = false;
			$stringArray = array("hi", "bye", "ok");
			echo $stringArray['0'];
			echo "<br>";

		// Logical Operators
			$x = 10;
			$y = 20;
			if ($x == $y){
				echo "True<br>";
				}	
			else {
				echo "False<br>";
				}

		// Switch
			$z = 1;

			switch($z){
				case 1:
					echo "The answer is one. <br><br>";
				break;
			}

		// Calculator
		echo "Calculator<br>";
		echo "<br>";
		?>

		<form>
			<input type="text" name="num1" placeholder="Number 1"/>
			<input type="text" name="num2" placeholder="Number 2"/>
			<select name="operator">
				<option>None</option>
				<option >Add</option>
				<option>Subtract</option>
				<option>Multiply</option>
				<option>Divide</option>
			</select><br>		
			<button type="submit" name="submit" value="submit">Calculate</button>
		</form>
		<p>The answer is:</p>
		<?php
			if (isset($_GET['submit'])){
				$result1 = $_GET['num1'];
				$result2 = $_GET['num2'];
				$operator = $_GET['operator'];

				switch($operator){
				case "None":
					echo "Select an operator.";
				break;
				case "Add":
					echo $result1 + $result2;
				break;
				case "Subtract":
					$result1 - $result2;
				break;
				case "Multiply":
					$result1 * $result2;
				break;
				case "Divide":
					$result1 / $result2;
				break;
			}

			// Foreach Loop
				$array = array("Kiyunna", "Flourius");
				foreach ($array as $loopdata) {
				echo "My name is ".$loopdata. "<br>";
			}
			}
		?>
	</body>
</html>