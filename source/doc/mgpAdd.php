<?php
        //FOR MOTOGP   
        if (isset($_POST["submit_motogp"]) && !empty($_POST["submit_motogp"])){
            
            if(empty($_POST["r_name"])){ 
                echo "<script type='text/javascript'>alert('Name is not filled');window.location.href='http://localhost:8012/testcode/Motogp';</script>";
            } 
            else if (empty($_POST['r_age'])) {
                echo "<script type='text/javascript'>alert('Age is not filled');window.location.href='http://localhost:8012/testcode/Motogp';</script>";
            } 
            else if (empty($_POST['r_number'])) {
                echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='http://localhost:8012/testcode/Motogp';</script>";
            } 
             else if (empty($_POST['r_number'])) {
                echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='http://localhost:8012/testcode/Motogp';</script>";
            } 
            else if (empty($_POST['r_team'])) {
                echo "<script type='text/javascript'>alert('Team is not filled');window.location.href='http://localhost:8012/testcode/Motogp';</script>";
            } 
            else if (empty($_POST['r_bike'])) {
                echo "<script type='text/javascript'>alert('Bike is not filled');window.location.href='http://localhost:8012/testcode/Motogp';</script>";
            } 
            else{
                $xml = new DomDocument("1.0", "UTF-8");
                $xml -> load('motogp.xml');

                $r_name = $_POST['r_name'];
                $r_age = $_POST['r_age'];
                $r_number = $_POST['r_number'];
                $r_team = $_POST['r_team'];
                $r_bike = $_POST['r_bike'];
                $checkTag = $xml->getElementsByTagName("number");
                $catTag = $xml->getElementsByTagName("category")->item(0);
                $i = 0;
                $presence = false;
                while($i<$checkTag->length){
                    if( $checkTag[$i]->childNodes[0]->nodeValue == $r_number){
                       $presence = true;    
                    }
                $i++;
                }
                if($presence == true){
                     echo "<script type='text/javascript'>alert('Rider number is already picked. Please pick a unique number!');window.location.href='http://localhost:8012/testcode/Motogp';</script>";
                }
                else{
                    $doc = new DomDocument("1.0", "UTF-8");
                    $doc->preserveWhiteSpace = false;
                    $doc->formatOutput = true;
                    $doc -> load('motogp.xml');
                    $catTag = $doc->getElementsByTagName("category")->item(0);
                    $signed_values = array("name" => $r_name, "age" => $r_age, "number" => $r_number, "team" => $r_team, "bike" => $r_bike);

                    $occ = $doc->createElement('rider');
                    $occ = $catTag->appendChild($occ);

                    foreach ($signed_values as $fieldname => $fieldvalue) {
                   $child = $doc->createElement($fieldname);
                   $child = $occ->appendChild($child);
                   $value = $doc->createTextNode($fieldvalue);
                   $value = $child->appendChild($value);
                    }
                    $doc->save('motogp.xml') ;
                    echo "<script type='text/javascript'>alert('Rider was added successfully!');window.location.href='http://localhost:8012/testcode/Motogp';</script>";
                }
             }
        }

        //FOR MOTO2
        if (isset($_POST["submit_moto2"]) && !empty($_POST["submit_moto2"])){
            if(empty($_POST["r_name"])){ 
                echo "<script type='text/javascript'>alert('Name is not filled');window.location.href='http://localhost:8012/testcode/Moto2';</script>";
            } 
            else if (empty($_POST['r_age'])) {
                echo "<script type='text/javascript'>alert('Age is not filled');window.location.href='http://localhost:8012/testcode/Moto2';</script>";
            } 
            else if (empty($_POST['r_number'])) {
                echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='http://localhost:8012/testcode/Moto2';</script>";
            } 
            else if (empty($_POST['r_team'])) {
                echo "<script type='text/javascript'>alert('Team is not filled');window.location.href='http://localhost:8012/testcode/Moto2';</script>";
            } 
            else if (empty($_POST['r_bike'])) {
                echo "<script type='text/javascript'>alert('Bike is not filled');window.location.href='http://localhost:8012/testcode/Moto2';</script>";
            } 
            else{
                $xml = new DomDocument("1.0", "UTF-8");
                $xml -> load('motogp.xml');

                $r_name = $_POST['r_name'];
                $r_age = $_POST['r_age'];
                $r_number = $_POST['r_number'];
                $r_team = $_POST['r_team'];
                $r_bike = $_POST['r_bike'];
                $checkTag = $xml->getElementsByTagName("number");
                $catTag = $xml->getElementsByTagName("category")->item(1);
                $i = 0;
                $presence = false;
                while($i<$checkTag->length){
                    if( $checkTag[$i]->childNodes[0]->nodeValue == $r_number){
                       $presence = true;    
                    }
                $i++;
                }
                if($presence == true){
                     echo "<script type='text/javascript'>alert('Rider number is already picked. Please pick a unique number!');window.location.href='http://localhost:8012/testcode/Moto2';</script>";
                }
                else{
                    $doc = new DomDocument("1.0", "UTF-8");
                    $doc->preserveWhiteSpace = false;
                    $doc->formatOutput = true;
                    $doc -> load('motogp.xml');
                    $catTag = $doc->getElementsByTagName("category")->item(1);
                    $signed_values = array("name" => $r_name, "age" => $r_age, "number" => $r_number, "team" => $r_team, "bike" => $r_bike);

                    $occ = $doc->createElement('rider');
                    $occ = $catTag->appendChild($occ);

                    foreach ($signed_values as $fieldname => $fieldvalue) {
                       $child = $doc->createElement($fieldname);
                       $child = $occ->appendChild($child);
                       $value = $doc->createTextNode($fieldvalue);
                       $value = $child->appendChild($value);
                    }
                    $doc->save('motogp.xml') ;
                    echo "<script type='text/javascript'>alert('Rider was added successfully!');window.location.href='http://localhost:8012/testcode/Moto2';</script>";
                }
             }
        }

        //FOR MOTO3
         if (isset($_POST["submit_moto3"]) && !empty($_POST["submit_moto3"])){
            if(empty($_POST["r_name"])){ 
                echo "<script type='text/javascript'>alert('Name is not filled');window.location.href='http://localhost:8012/testcode/Moto3';</script>";
            } 
            else if (empty($_POST['r_age'])) {
                echo "<script type='text/javascript'>alert('Age is not filled');window.location.href='http://localhost:8012/testcode/Moto3';</script>";
            } 
            else if (empty($_POST['r_number'])) {
                echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='http://localhost:8012/testcode/Moto3';</script>";
            } 
            else if (empty($_POST['r_team'])) {
                echo "<script type='text/javascript'>alert('Team is not filled');window.location.href='http://localhost:8012/testcode/Moto3';</script>";
            } 
            else if (empty($_POST['r_bike'])) {
                echo "<script type='text/javascript'>alert('Bike is not filled');window.location.href='http://localhost:8012/testcode/Moto3';</script>";
            } 
            else{
                $xml = new DomDocument("1.0", "UTF-8");
                $xml -> load('motogp.xml');

                $r_name = $_POST['r_name'];
                $r_age = $_POST['r_age'];
                $r_number = $_POST['r_number'];
                $r_team = $_POST['r_team'];
                $r_bike = $_POST['r_bike'];
                $checkTag = $xml->getElementsByTagName("number");
                $catTag = $xml->getElementsByTagName("category")->item(2);
                $i = 0;
                $presence = false;
                while($i<$checkTag->length){
                    if( $checkTag[$i]->childNodes[0]->nodeValue == $r_number){
                       $presence = true;    
                    }
                $i++;
                }
                if($presence == true){
                     echo "<script type='text/javascript'>alert('Rider number is already picked. Please pick a unique number!');window.location.href='http://localhost:8012/testcode/Moto3';</script>";
                }
                else{
                    $doc = new DomDocument("1.0", "UTF-8");
                    $doc->preserveWhiteSpace = false;
                    $doc->formatOutput = true;
                    $doc -> load('motogp.xml');
                    $catTag = $doc->getElementsByTagName("category")->item(2);
                    $signed_values = array("name" => $r_name, "age" => $r_age, "number" => $r_number, "team" => $r_team, "bike" => $r_bike);
                    // process one row at a time
                    $occ = $doc->createElement('rider');
                    $occ = $catTag->appendChild($occ);
                    // add a child node for each field
                    foreach ($signed_values as $fieldname => $fieldvalue) {
                       $child = $doc->createElement($fieldname);
                       $child = $occ->appendChild($child);
                       $value = $doc->createTextNode($fieldvalue);
                       $value = $child->appendChild($value);
                    }
                    $doc->save('motogp.xml') ;
                    echo "<script type='text/javascript'>alert('Rider was added successfully!');window.location.href='http://localhost:8012/testcode/Moto3';</script>";
                }
             }
        }
?>

 