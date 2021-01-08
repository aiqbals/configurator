<?php

require_once('./mysqli_connect.php');
/*$con = mysqli_connect('localhost','root','','dbcars');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}*/

$sql = "SELECT name FROM model";
$result = @mysqli_query($dbc,$sql);//$con->query($sql);

if($result){
$opt = "<select name = 'Model' id='op2' onchange='run2()'>";
while ($row = mysqli_fetch_assoc($result)) {

    $opt .="<option value='{$row ['name']}'> {$row ['name']} </option>";
}
$opt .= "</select>";
}else{
    echo "Couldn't issue database query";
    echo mysqli_error($dbc);
}
mysqli_close($dbc);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <script src="all.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="all.css>-->
    <link rel="stylesheet" type="text/css" href="all - Copy.css">
</head>

<body>

    <div id="midbody"> 
     <div id="divbrand">
            <table border="0px solid blue" bgcolor="lightgrey">
                <tr>
                    <th>
                        <a href="#"><img src="Images/bmwl.png" width="50px" height="40px"> </a>&emsp;
                    </th>
                    <th>
                        <a href="#"><img src="Images/audil.png" width="50px" height="40px"> </a>&emsp; &emsp;
                        <th>
                            <a href="#"><img src="Images/bmwl.png" width="50px" height="40px"> </a>&emsp; &emsp;
                        </th>
                        <th>
                            <a href="#"><img src="Images/mrcl.png" width="50px" height="40px"> </a>&emsp; &emsp;
                        </th>
                        <th>
                            <a href="#"><img src="Images/mrcl.png" width="50px" height="40px"> </a>&emsp; &emsp;
                        </th>
                        <th>
                            <a href="#"><img src="Images/bmwl.png" width="50px" height="40px"> </a>&emsp; &emsp;
                        </th>
                        <th>
                            <a href="#"><img src="Images/audil.png" width="50px" height="40px"> </a>&emsp; &emsp;
                        </th>
                        <th>
                            <a href="#"><img src="Images/bmwl.png" width="50px" height="40px"> </a>&emsp; &emsp;
                        </th>
                        <th>
                            <a href="#"><img src="Images/bmwl.png" width="50px" height="40px"> </a>&emsp; &emsp;
                        </th>
                        <th>
                            <a href="#"><img src="Images/bmwl.png" width="50px" height="40px"> </a>&emsp; &emsp;
                        </th>
                        <th>
                            <a href="#"><img src="Images/bmwl.png" width="50px" height="40px"> </a>&emsp;
                        </th>
                </tr>
            </table>
        </div>
        <div class="half1">
            <div class="menu">
                <a href="#"><strong>Adminbereich</strong></a>
                <a href="#"><strong>Contact</strong></a>
                <a href="#"><strong>Conditions</strong></a>
                <a href="#"><strong>Impressum</strong></a>
            </div>
        </div>
        <div class="half2">
            <div align="right">
                <div align="right" id="logo">
                    <img src="Images/car.png" width="120px" height="100px" />
                </div>
                <div id="phnEml">
                    +49 03643 000006
                    <br>
                    <a href="">info@abc.de</a>
                </div>
            </div>
        </div>
        <div id="sliding">
            <!-- fileter and selection starts id=filter-->
                <!-- #endregion Jssor Slider End -->
                <div class="specification">
                    <table border="0 px solid black" width="0px">
                    <tr>
                        <td>
                            <form>

                                <div>

                                    <button type="button" onclick="displayBtn('1')">Brand</button>
                                </div>
                                <div id="btn1" >

                                    <?php
                                echo $opt;
                                ?>
                                    
                                </div>

                                


                            <select name="users" id="op1" onchange="showUser(this.value)"> <!--Call onchange() function-->
                            <option value="">Condition</option>
                            <option value="New">New</option>
                            <option value="Old">Old</option>
                            </select>
                            </form>
                        </td>
                        <td>
                            <input type="text" id="txt1" name="NewCar" value=""  placeholder="get value on option select" disabled="disabled"> <!-- to show the indivation in input field: placeholder"-->
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <form>
                            <select name="users" id="op2" onchange="run2()">
                            <option value="">Select Shape</option>
                            <option value="SUV">SUV</option>
                            <option value="Kombi">Kombi</option>
                            <option value="Vanan">Van</option>
                            <option value="Cabrio">Cabrio</option>
                            <option value="Pick">Pick up</option>
                            </select>
                            </form>
                        </td>
                        <td>
                            <p>
                                <input type="text" id="txt2" name="ShapeCar" value="" disabled="disabled"> <!-- to desable input field disabled="disabled"-->
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form>
                            <select name="users" id="op3" onchange="run3()">
                            <option value="">Select Brand</option>
                            <option value="BMW">BMW</option>
                            <option value="AUDI">AUDI</option>
                            <option value="Marcedes">Marcedes</option>
                            <option value="Porshi">Porshi</option>
                            <option value="Volkswagen">Volkswagen</option>
                            </select>
                            </form>
                        </td>
                        <td>
                            <p>
                                <input type="text" id="txt3" name="BrandCar" value="" disabled="disabled">
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form>
                            <select name="users" id="op4" onchange="run4()">
                            <option value="">Select Model</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                            <option value="A4">A4</option>
                            <option value="A6">A6</option>
                            </select>
                            </form>
                        </td>
                        <td>
                            <p>
                                <input type="text" id="txt4" name="ModelCar" value="" disabled="disabled">
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form>
                            <select name="users" id="op5" onchange="run5()">
                            <option value="">Select Engine</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Gas">Gas</option>
                            <option value="Water">Water</option>
                            <option value="Others">Others</option>
                            </select>
                             </form>
                        </td>
                        <td>
                            <p>
                                <input type="text" id="txt5" name="EngineCar" value="" disabled="disabled">
                            </p>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
            <div id="">
                <a href="#"><img src="img/newS.png" width="110" height="30" align=""></a>
            </div>

            <div class="filtres">
                <table border="1 px sold black">
                    <tr>
                        <th bgcolor="lightgrey"> <a href="landing.html"> <img src="Images/audi_a3.png" width="200" height="100" title="click to find details of BMW02"> </a> </th>
                    </tr>
                    <tr>
                        <th>Audi A1 Limosino</th>
                    </tr>
                    <tr>
                        <th bgcolor="lightgrey"> <a href="landing.html"> <img src="Images/audi_a4.png" width="200" height="100" alt="BMW02 15700Euro" title="click to find details of AUDI A0"> </a> </th>
                    </tr>
                    <tr>
                        <th>Audi A3 Limosino</th>
                    </tr>
                    <tr>
                        <th bgcolor="lightgrey"> <a href="landing.html"> <img src="Images/audi_a5.png" width="200" height="100"> </a> </th>
                    </tr>
                    <tr>
                        <th>Audi A2 Limosino</th>
                    </tr>
                    <tr>
                        <th bgcolor="lightgrey"> <a href="landing.html"> <img src="Images/audi_a6.png" width="200" height="100"> </a> </th>
                    </tr>
                    <tr>
                        <th>Audi A5 Limosino</th>
                    </tr>
                </table>
            </div>

            <div class="filtrec">
                <table>
                    <tr><strong>Recent sold cars</strong></tr>
                    <tr>
                        <th bgcolor="lightgrey"> <a href="landing.html"> <img src="Images/audi_a3.png" width="200" height="100" title="click to find details of BMW02"> </a> </th>
                    </tr>
                    <tr>
                        <th>Audi A1 Limosino</th>
                    </tr>
                    <tr>
                        <th bgcolor="lightgrey"> <a href="landing.html"> <img src="Images/audi_a4.png" width="200" height="100" alt="BMW02 15700Euro" title="click to find details of AUDI A0"> </a> </th>
                    </tr>
                    <tr>
                        <th>Audi A1 Limosino</th>
                    </tr>
                    <tr>
                        <th bgcolor="lightgrey"> <a href="landing.html"> <img src="Images/audi_a5.png" width="200" height="100"> </a> </th>
                    </tr>
                    <tr>
                        <th>Audi A1 Limosino</th>
                    </tr>
                    <tr>
                        <th bgcolor="lightgrey"> <a href="landing.html"> <img src="Images/audi_a6.png" width="200" height="100"> </a> </th>
                    </tr>
                    <tr>
                        <th>Audi A1 Limosino</th>
                    </tr>
                </table>
            </div>
           
        </div>
        <div id="randomcar">
            <table align="center">
                <tr>
                    <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px" alt="BMW 1"></td></a>
                        <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px"></td></a>
                            <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px"></td></a>
                                <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px"></td></a>
                                    <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px"></td></a>
                </tr>
                <tr>
                    <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px"></td></a>
                        <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px"></td></a>
                            <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px"></td></a>
                                <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px"></td></a>
                                    <td width="180px"><a href="landing.html"><img src="Images/slidcar.png" width="120px" height="80px"></td></a>
                </tr>
            </table>
        </div>
    </div>
    
 <div id="popup-box" >
   
     <div id="popup-container">
     <h2> Please choose a quality First </h2>
        <label class="container">NEW
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="container">USED
            <input type="radio"  name="radio">
            <span class="checkmark"></span>
        </label>
        <div id="close_popup" onclick="closePopup('popup-box')">
            <h2>Go</h2>
        </div>
     </div>
    
</div>
</body>

</html>