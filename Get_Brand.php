<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = intval($_GET['q']);

require_once('./mysqli_connect.php');

$sql = "SELECT model.model_id, model.name,model.brand FROM model INNER JOIN brand on model.brand=brand.brand_id WHERE brand.brand_id= '".$q."'";
$result = @mysqli_query($dbc,$sql);//$con->query($sql);

if($result){
$opt = "<form><select name = 'Model' id='op3' onchange='run3()'>";
while ($row = mysqli_fetch_assoc($result)) {

    $opt .="<option label='{$row ['name']}' value='{$row ['model_id']}'> {$row ['name']} </option>";
}
$opt .= "</select></form>";
}else{
    echo "Couldn't issue database query";
    echo mysqli_error($dbc);
}
mysqli_close($dbc);

echo  $opt;

?>
</body>
</html>