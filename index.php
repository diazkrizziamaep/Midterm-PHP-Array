<!DOCTYPE html>
<html>
<body>

<?php
$breedAge = array("Labrador"=>"10", "Poodle"=>"3", "Bulldog"=>"5");

foreach($breedAge as $x => $x_value) {
    echo "Dog Breed: ". $x . ", Dog Age: " . $x_value;
    echo "<br>";
}
?>

</body>
</html>