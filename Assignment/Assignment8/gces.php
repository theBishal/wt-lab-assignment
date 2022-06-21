<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php 
echo "<h1>Gandaki College of Engineering & Science</h1>";

$gcesStaffs = [
	"academic" => [
		[
			"name" => "Bishal Shrestha",
			"address" => "Syangja",
			"phones" => ["9856011111","987654321"],
			"subjects" => ["Micro Processor", "Logic Circuit"]
		],
		[
			"name" => "Nishal Gurung",
			"address" => "Pokhara",
			"phones" => ["9856022222","983451267"],
			"subjects" => ["Web Technology", "JAVA"]
		],
		[
			"name" => "Ashis Shrestha",
			"address" => "Kathmandu",
			"phones" => ["9856033333",],
			"subjects" => ["Physics", "PST"]
		]
	],
	"non-academic" => [
		[
			"name" => "Anushka Thapa",
			"address" => "Lampata",
			"phones" => ["9856044444"],
		],
		[
			"name" => "Rejii Magar",
			"address" => "Jomsom",
			"phones" => ["9856055555"],
		],
	]
];

//Table START
echo '<table border="3" cellspacing="10" cellpadding="10">';
//Table Header
echo '<tr><th>Type</th><th>Name</th><th>Address</th><th>Phone</th><th>Subjects</th></tr>';
foreach($gcesStaffs as $staffType => $staffDetails){
 
	foreach($staffDetails as $key => $staff ){
		//TR START
	  echo "<tr bgcolor = 'greenyellow'>";
      echo "<td bgcolor = 'skyblue' >$staffType</td>";
      echo "<td bgcolor = 'yellow'>$staff[name]</td>";
      echo "<td bgcolor = 'pink'>$staff[address]</td>";
	  echo "<td>";
    foreach ($staff["phones"] as $phone){
      echo "$phone ";
    }
    echo "</td>";
    echo "<td>";
	
    if(array_key_exists('subjects', $staff)){
		
      foreach ($staff["subjects"] as $subject){
        echo "$subject, ";
      }
    }
    echo "</td>";
	echo "</tr>";
	//TR END 
  }
}
echo "</table>";
//Table END

?>
	
</body>
</html>