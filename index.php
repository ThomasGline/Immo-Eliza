<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ImmoEliza</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-light" id="navbar">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo2.png" width="30%" class="d-inline-block align-top" alt="">
        </a>
    </nav>
    <!-- CAROUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/architecture-1867187_1920.jpg" id="bordure">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/farm-1649146_1920.jpg" id="bordure">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/hampstead-4910147_1920.jpg" id="bordure">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/house-4498947_1920.jpg" id="bordure">
            </div>
            <div class="carousel-caption">
                <img src="assets/images/logo2.png">
                <h2>Evaluate <span style="color: rgb(90, 141, 217);">your project</span></h2>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- PROJECT -->
    </div>
    <div class="col-12 col-sm-12 col-lg-12 mb-12" id="project">
        <p class="looking">Looking for a project?</p>
        <p class="button">
            <!--<button class="search" data-toggle="modal" data-target="#step1">Search</button>-->
            <button class="evaluate" data-toggle="modal" data-target="#step2">Evaluate</button>
        </p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- LOCATION INFOS -->
            <div class="col-12 col-sm-12 col-lg-12 mb-12" style="padding-bottom:50px; padding-top:50px; text-align: center;">
            Price estimate :  <?php

if ((!isset($_POST['building'])) || (!isset($_POST['house_area']))) {
    //echo "Le formulaire n'a pas encore été exécuté";
} else {
    //echo "Le formulaire a été exécuté";

    //Etape 1 sanétisation
    $address = filter_var($_POST["address"], FILTER_SANITIZE_STRING);
    $postalcode = filter_var($_POST["postalcode"], FILTER_SANITIZE_STRING);
    $house_area = filter_var($_POST["house_area"], FILTER_SANITIZE_STRING);
    $surf_land = filter_var($_POST["surf_land"], FILTER_SANITIZE_STRING);
    $numb_facades = filter_var($_POST["numb_facades"], FILTER_SANITIZE_STRING);
    $numb_rooms = filter_var($_POST["numb_rooms"], FILTER_SANITIZE_STRING);
    $terrace_area = filter_var($_POST["terrace_area"], FILTER_SANITIZE_STRING);
    $building = $_POST['building'];
    $garden = $_POST['garden'];
    $equip_kitch = $_POST['equip_kitch'];
    $fire = $_POST['fire'];
    $pool = $_POST['pool'];
    $Sas_new = $_POST['Sas_new'];
    $Sjust_renov = $_POST['Sjust_renov'];
    $Sgood = $_POST['Sgood'];
    $Sto_refresh = $_POST['Sto_refresh'];
    $Sto_renov = $_POST['Sto_renov'];
    $Sto_restor = $_POST['Sto_restor'];
    $terrace = $_POST['terrace'];

    //echo "checkbox building value : ".$_POST['building'];

    //Etape 2 validation

    //Etape 3 exécution
    //echo $building;
    //API REQUEST
    $array_data_to_post = [
        //"address" => $address,
        "building" => $building,
        "postalcode" => filter_var($_POST["postalcode"], FILTER_VALIDATE_INT),
        "house_area" => filter_var($_POST["house_area"], FILTER_VALIDATE_INT),
        "surf_land" => filter_var($_POST["surf_land"], FILTER_VALIDATE_INT),
        "numb_facades" => filter_var($_POST["numb_facades"], FILTER_VALIDATE_INT),
        "numb_rooms" => filter_var($_POST["numb_rooms"], FILTER_VALIDATE_INT),
        "garden" => filter_var($_POST["garden"], FILTER_VALIDATE_INT),
        "terrace" => filter_var($_POST["terrace"], FILTER_VALIDATE_INT),
        "terrace_area" => filter_var($_POST["terrace_area"], FILTER_VALIDATE_INT),
        "equip_kitch" => filter_var($_POST["equip_kitch"], FILTER_VALIDATE_INT),
        "fire" => filter_var($_POST["fire"], FILTER_VALIDATE_INT),
        "pool" => filter_var($_POST["pool"], FILTER_VALIDATE_INT),
        "Sas_new" => filter_var($_POST["Sas_new"], FILTER_VALIDATE_INT),
        "Sjust_renov" => filter_var($_POST["Sjust_renov"], FILTER_VALIDATE_INT),
        "Sgood" => filter_var($_POST["Sgood"], FILTER_VALIDATE_INT),
        "Sto_refresh" => filter_var($_POST["Sto_refresh"], FILTER_VALIDATE_INT),
        "Sto_renov" => filter_var($_POST["Sto_renov"], FILTER_VALIDATE_INT),
        "Sto_restor" => filter_var($_POST["Sto_restor"], FILTER_VALIDATE_INT),
    ];
    //echo print_r($array_data_to_post);
    
    $array_data_to_post_JSON = json_encode($array_data_to_post);
    /*echo "<PRE>";
    echo ($array_data_to_post_JSON);
    echo "</PRE>";*/

    //API REQUEST
    //API Url

$url = 'http://jcmhouse3d.azurewebsites.net/estimate';
$ch = curl_init($url);
//Encode the array into JSON.
//$jsonDataEncoded = json_encode($jsonData);
 
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
 
//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $array_data_to_post_JSON);
 
//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
 
//Execute the request
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result_JSON = curl_exec($ch);
$result_decode = json_decode($result_JSON, true);

//print_r($result_decode);
//echo $result_decode['estimated_price'];

curl_close($ch);
                $fmt = new NumberFormatter( 'de_DE', NumberFormatter::CURRENCY );
                echo $fmt->formatCurrency($result_decode['estimated_price'], "EUR");
                //echo $fmt-> $result_decode['estimated_price'];
};
                ?>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer>
        <div class="container-fluid">
            <!-- FIRST LINE -->
            <div class="row" id="rowFooter">
                <!-- FIRST column / LOGO-->
                <div class="col-12 col-sm-12 col-lg-4 mb-3">
                    <img id="logoFooter" src="assets/images/logo2.png" alt="logo ImmoEliza"><br>
                    <p class="pContact">
                        +32 99 98 97 96<br>
                        infobe@immo-eliza.be
                    </p>
                </div>
                <!-- SECOND column / SUBSCRIBE-->
                <div class="col-12 col-sm-12 col-lg-4 mb-3">
                    <h4 id="titleSubscribe">SUBSCRIBE TO US</h4>
                    <form class="form-inline my-2 my-lg-0" id="formSubscribe">
                        <input class="form-control mr-sm-2" type="search" placeholder="Enter your email..."
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                            id="btnSubscribe">Subscribe</button>
                    </form>
                    <!-- THIRD column -->
                </div>
                <div class="col-12 col-sm-12 col-lg-4 mb-3">
                    <p class="pCentral">
                        CENTRAL<br>
                        Rue des Volutes, 18<br>
                        6030 Charleroi<br>
                        +32 99 98 97 96<br>
                        infobe@immo-eliza.be
                    </p>
                </div>
            </div>
            <hr>
            <!-- SECOND LINE -->
            <div class="row">
                <!-- TABLE -->
                <table class="socialNetworks">
                    <tr>
                        <td>
                            <!-- TWITTER -->
                            <div class="col-12 col-sm-12 col-lg-12 mb-12">
                                <a href="https://twitter.com" target="_blank">
                                    <i class="fa fa-twitter fa-lg" id="twitter"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            <!-- FACEBOOK -->
                            <div class="col-12 col-sm-12 col-lg-12 mb-12">
                                <a href="https://facebook.com" target="_blank">
                                    <i class="fa fa-facebook fa-lg" id="facebook"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            <!-- INSTAGRAM -->
                            <div class="col-12 col-sm-12 col-lg-12 mb-12">
                                <a href="https://instagram.com" target="_blank">
                                    <i class="fa fa-instagram fa-lg" id="instagram"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            <!-- LINKEDIN -->
                            <div class="col-12 col-sm-12 col-lg-12 mb-12">
                                <a href="https://linkedin.com" target="_blank">
                                    <i class="fa fa-linkedin fa-lg" id="linkedin"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </footer>
    <!-- STEP 2 -->
    <div class="modal" id="step2">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Fill in the form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="index.php" method="post">

                            <div class="form-group">
                            <div class="form-group">
                                <label for="registerloaclity">Address :</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label for="registerloaclity">Postalcode :</label>
                                <input type="text" class="form-control" id="postalcode" name="postalcode"
                                placeholder="Postalcode" value="6000" required>
                            </div>
                            <div class="form-group">
                                <!-- maison/appartement -->
                                <label for="registerspécification">Type :</label>
                                <input type="radio" name="building" value="house" checked="checked" required>
                                <label for="house1"> house</label>
                                <input type="radio" name="building" value="apartment">
                                <label for="house2"> apartement</label>
                            </div>
                            <!-- surface maison -->
                            <label for="registerloaclity">House area :</label>
                            <input type="number" class="form-control" name="house_area" placeholder="House area" value="250" required>
                            <!-- surface terrain -->
                            <label for="registerloaclity">Land area :</label>
                            <input type="number" class="form-control" name="surf_land" placeholder="Land area" value="19700" required>
                            <!-- facades -->
                            <label for="registerloaclity">Number of facades :</label>
                            <input type="number" class="form-control" name="numb_facades" placeholder="Number facades" value="4" required>
                            <!-- pieces -->
                            <label for="registerloaclity">Number of rooms :</label>
                            <input type="number" class="form-control" name="numb_rooms" placeholder="Number rooms" value="3" required>
                            <!-- jardin -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Garden : </label>
                                <input type="radio" name="garden" value="1" checked="checked" required>
                                <label for="garden1"> oui</label>
                                <input type="radio" name="garden" value="0">
                                <label for="garden2"> non</label>
                            </div>
                            <!-- terrace -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Terrace : </label>
                                <input type="radio" name="terrace" value="1" checked="checked" required>
                                <label for="terrace1"> oui</label>
                                <input type="radio" name="terrace" value="0">
                                <label for="terrace2"> non</label>
                            </div>
                            <!-- surface terrace -->
                            <label for="registerloaclity">Terrace area :</label>
                            <input type="number" class="form-control" name="terrace_area" placeholder="terrace area" value="30" required>
                            <!-- cuisine -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Kitchen : </label>
                                <input type="radio" name="equip_kitch" value="1" checked="checked" required>
                                <label for="kitchen1"> oui</label>
                                <input type="radio" name="equip_kitch" value="0">
                                <label for="kitchen2"> non</label>
                            </div>
                            <!-- fire -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Fire : </label>
                                <input type="radio" name="fire" value="1" required>
                                <label for="fire1"> oui</label>
                                <input type="radio" name="fire" value="0" checked="checked">
                                <label for="fire2"> non</label>
                            </div>
                            <!-- piscine -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Pool : </label>
                                <input type="radio" name="pool" value="1" required>
                                <label for="pool1"> oui</label>
                                <input type="radio" name="pool" value="0" checked="checked">
                                <label for="pool2"> non</label>
                            </div>
                            <!-- sas new -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">As new : </label>
                                <input type="radio" name="Sas_new" value="1" required>
                                <label for="pool1"> oui</label>
                                <input type="radio" name="Sas_new" value="0" checked="checked">
                                <label for="pool2"> non</label>
                            </div>
                            <!-- Sjust renov -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Recently renovated : </label>
                                <input type="radio" name="Sjust_renov" value="1" required>
                                <label for="pool1"> oui</label>
                                <input type="radio" name="Sjust_renov" value="0" checked="checked">
                                <label for="pool2"> non</label>
                            </div>
                            <!-- Sgood -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">In good condition : </label>
                                <input type="radio" name="Sgood" value="1" required>
                                <label for="pool1"> oui</label>
                                <input type="radio" name="Sgood" value="0" checked="checked">
                                <label for="pool2"> non</label>
                            </div>
                            <!-- Sto_refresh -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">requires refreshes : </label>
                                <input type="radio" name="Sto_refresh" value="1" required>
                                <label for="pool1"> oui</label>
                                <input type="radio" name="Sto_refresh" value="0" checked="checked">
                                <label for="pool2"> non</label>
                            </div>
                            <!-- Sto_renov -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">requires renovation : </label>
                                <input type="radio" name="Sto_renov" value="1" checked="checked" required>
                                <label for="pool1"> oui</label>
                                <input type="radio" name="Sto_renov" value="0">
                                <label for="pool2"> non</label>
                            </div>
                            <!-- Sto_restor -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">requires restoration : </label>
                                <input type="radio" name="Sto_restor" value="1" required>
                                <label for="pool1"> oui</label>
                                <input type="radio" name="Sto_restor" value="0" checked="checked">
                                <label for="pool2"> non</label>
                            </div>
                            <input type="submit" class="btn btn-primary" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
    <script src="https://kit.fontawesome.com/e106887b45.js" crossorigin="anonymous"></script>
</body>

</html>
