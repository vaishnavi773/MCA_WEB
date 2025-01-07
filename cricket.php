<html>
<head>
    <title>Indian Cricket Players</title>
</head>
<body>
    <h2>List of Indian Cricket Players</h2>

    <table border="1">
        <tr>
            <th>Player Name</th>
        </tr>
        <?php
		$players = [
   		"Virat Kohli",
    		"Rohit Sharma",
    		"Shubman Gill",
    		"KL Rahul",
    		"Hardik Pandya",
    		"Ravindra Jadeja",
    		"Jasprit Bumrah",
    		"Rishabh Pant",
    		"Mohammad Shami",
    		"Bhuvneshwar Kumar"
		];

        // Loop through the array and display each player's name in a table row
        foreach ($players as $player) {
            echo "<tr><td>$player</td></tr>";
        }
        ?>

    </table>
</body>
</html>