<html>

<head>

<?php require_once 'inc/ctec_functions.php'; ?>


</head>

<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

	<label class="reglabel" for="name">Name:</label>
	<input class="reginput" type="name" id="name"
     name="name" size="40" maxlength="60" value="">
	<br>

	<input class="button1" type="submit" value="submit">
</form>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
Color: <input type="text" name="color"><br>
Texture:<input type="text" name="texture"><br>
<input type="submit" value="submit">
</form>

<?php

// function 1
if (is_post_request()) {
    if (isset($_POST['name'])) {

        foreach ($_POST as $key => $value) {
            if (!empty($_POST[$key])) {
                echo '<p>' . $value . '</p>' . '<br><br>';
            }
        }

    }

} else

 {

    echo "no info";

    echo "<br><br>";
    
}

//function 2
if (is_get_request()) {

  echo  "The color is " . $_GET["color"] . "<br>";
  echo  "The texture is " . $_GET["texture"] . "<br>";


}



echo "<br><br>";
$str = "This is some <b>bold</b> text.";
//function 3
echo h($str);
echo "<br><br>";
echo ($str);

echo "<br><br>";

$token = 'shoes';

// Here is a URL to redeem that token
//function 4
$redeemUrl = 'https://httpbin.org/get?token=' . u($token);

echo $redeemUrl;

echo "<br><br>";

$str = 'A computer science portal for geek'; 
//function 5
echo raw_u($str);

echo "<br><br>";

//function 6
echo is_blank('abcd');

//function 7
$value = "feetball";

if (has_presence($value)) {

    echo "Variable is not empty";
    echo "<br><br>";
    echo $value;
} else {

    echo "Variable is empty";
    echo "<br><br>";
    echo $value;
}

//function 8
$value2 = "scrapple";
$min = 6;
$max = 9;
$exact = 8;

$options = array("min"=>"6", "max"=>"9", "exact"=>"8");
//echo $options['min'];

//funjction 9
if (has_length_greater_than($value2, $min)) {

    echo "<br><br>";
    echo $value2 . " has more than " . $min . " letters long.";
    echo "<br><br>";

}

//function 10

if (has_length_less_than($value2, $max)) {

    echo "<br><br>";
    echo $value2 . " has less than " . $max . " letters long.";
    echo "<br><br>";

}

//function 11

if (has_length_exactly($value2, $exact)) {

    echo "<br><br>";
    echo $value2 . " has exactly " . $exact . " letters.";
    echo "<br><br>";

}

echo has_length($value2, $options);

echo "<br><br>";

//function 12

$set = [1,3,5,7,9];
$value3 = 5;
$value4 = 6;

if (has_inclusion_of($value3, $set)) {

    echo "Value is in array";
    echo "<br><br>";

}

//function 13
if (has_exclusion_of($value4, $set)) {


    echo "Value is not in array";
    echo "<br><br>";


}

//function 14
$value5 = "paperwingz@earthlink.net";
$required_string = ".net";


if (has_string($value5, $required_string)) {

    echo $value5;
    echo "<br><br>";

} else {

    echo "string is not inside string.";
    echo "<br><br>";
}


//function 15
$value6 = "wallys1234@gmail.com";

if (has_valid_email_format($value6)) {

    echo "email is valid.";
    echo "<br><br>";

}

//function 16
$errors = array("too big", "too small", "very smooth");

 display_errors($errors=array()); 



 ?>

</body>



</html>