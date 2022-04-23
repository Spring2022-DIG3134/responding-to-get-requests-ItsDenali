<?php 

//Are username and password set?
if(isset($_GET["username"]) and isset($_GET["password"])) {
    
    //If they equal DIG and 3134 respecitvely...
    if(($_GET["username"] == "DIG") {

        if ($_GET["password"] == "3134")    {

            //Encode them in place of the placeholder values
            echo(json_encode(
                [
                    "username" => $_GET["DIG"],
                    "password" => $_GET["3134"]
                ]
            ));
        }
    }) 
}

?>