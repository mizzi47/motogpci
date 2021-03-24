<?php
if (isset($_POST["submit_motogp"]) && !empty($_POST["submit_motogp"])){            
    if(empty($_POST["r_number"])){ 
        echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='../../motogp.html';</script>";
    } 
    else if (empty($_POST['r_name'])) {
        echo "<script type='text/javascript'>alert('Name is not filled');window.location.href='../../motogp.html';</script>";
    } 
    else if (empty($_POST['r_age'])) {
        echo "<script type='text/javascript'>alert('Age is not filled');window.location.href='../../motogp.html';</script>";
    } 
    else if (empty($_POST['r_team'])) {
        echo "<script type='text/javascript'>alert('Team is not filled');window.location.href='../../motogp.html';</script>";
    } 
    else if (empty($_POST['r_bike'])) {
        echo "<script type='text/javascript'>alert('Bike is not filled');window.location.href='../../motogp.html';</script>";
    } 
    else{
        $xml = new DomDocument("1.0", "UTF-8");
        $xml -> load('motogp.xml');
        
        $r_number = $_POST['r_number'];
        $r_name = $_POST['r_name'];
        $r_age = $_POST['r_age'];
        $r_team = $_POST['r_team'];
        $r_bike = $_POST['r_bike']; 
        $catTag = $xml->getElementsByTagName("category")->item(0);
        $checkTag = $catTag->getElementsByTagName("number");
        $i = 0;
        $presence = false;
        while($i<$checkTag->length){
            if( $checkTag[$i]->childNodes[0]->nodeValue == $r_number){
               $presence = true;    
            }
        $i++;
        }
        if($presence == true){
            $xpath = new DOMXPATH($xml);
            foreach($xpath->query("//category[1]/rider[number = '$r_number']") as $node){
                    $node->childNodes[1]->nodeValue = $r_name;
                    $node->childNodes[3]->nodeValue = $r_age;
                    $node->childNodes[7]->nodeValue = $r_team;
                    $node->childNodes[9]->nodeValue = $r_bike;
                }
            $xml->preserveWhiteSpace = false;
            $xml->formatOutput = true;
            $xml->save('motogp.xml');
            echo "<script type='text/javascript'>alert('Rider was updated successfully!');window.location.href='../../motogp.html';</script>";      
        }
        else{
            echo "<script type='text/javascript'>alert('Selected rider is not found in MotoGP');window.location.href='../../motogp.html';</script>";
        }
     }
}

if (isset($_POST["submit_moto2"]) && !empty($_POST["submit_moto2"])){
    if (empty($_POST['r_number'])) {
        echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='../../moto2.html';</script>";
    }             
    else if(empty($_POST["r_name"])){ 
        echo "<script type='text/javascript'>alert('Name is not filled');window.location.href='../../moto2.html';</script>";
    } 
    else if (empty($_POST['r_age'])) {
        echo "<script type='text/javascript'>alert('Age is not filled');window.location.href='../../moto2.html';</script>";
    } 
    else if (empty($_POST['r_team'])) {
        echo "<script type='text/javascript'>alert('Team is not filled');window.location.href='../../moto2.html';</script>";
    } 
    else if (empty($_POST['r_bike'])) {
        echo "<script type='text/javascript'>alert('Bike is not filled');window.location.href='../../moto2.html';</script>";
    } 
    else{
        $xml = new DomDocument("1.0", "UTF-8");
        $xml -> load('motogp.xml');
        
        $r_number = $_POST['r_number'];
        $r_name = $_POST['r_name'];
        $r_age = $_POST['r_age'];
        $r_team = $_POST['r_team'];
        $r_bike = $_POST['r_bike'];
        $catTag = $xml->getElementsByTagName("category")->item(1);
        $checkTag = $catTag->getElementsByTagName("number");
        $i = 0;
        $presence = false;
        while($i<$checkTag->length){
            if( $checkTag[$i]->childNodes[0]->nodeValue == $r_number){
               $presence = true;    
            }
        $i++;
        }
        if($presence == true){
            $xpath = new DOMXPATH($xml);
            foreach($xpath->query("//category[2]/rider[number = '$r_number']") as $node){
                    $node->childNodes[1]->nodeValue = $r_name;
                    $node->childNodes[3]->nodeValue = $r_age;
                    $node->childNodes[7]->nodeValue = $r_team;
                    $node->childNodes[9]->nodeValue = $r_bike;
                }
            $xml->preserveWhiteSpace = false;
            $xml->formatOutput = true;
            $xml->save('motogp.xml');
            echo "<script type='text/javascript'>alert('Rider was updated successfully!');window.location.href='../../moto2.html';</script>";
             
        }
        else{
            echo "<script type='text/javascript'>alert('Selected rider is not found in Moto2');window.location.href='../../moto2.html';</script>";
        }
     }
}

if (isset($_POST["submit_moto3"]) && !empty($_POST["submit_moto3"])){
    if(empty($_POST["r_number"])){ 
        echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='../../moto3.html';</script>";     
    } 
    else if (empty($_POST['r_name'])) {
        echo "<script type='text/javascript'>alert('Name is not filled');window.location.href='../../moto3.html';</script>";
    } 
    else if (empty($_POST['r_age'])) {
        echo "<script type='text/javascript'>alert('Age is not filled');window.location.href='../../moto3.html';</script>";
    } 
    else if (empty($_POST['r_team'])) {
        echo "<script type='text/javascript'>alert('Team is not filled');window.location.href='../../moto3.html';</script>";
    } 
    else if (empty($_POST['r_bike'])) {
        echo "<script type='text/javascript'>alert('Bike is not filled');window.location.href='../../moto3.html';</script>";
    } 
    else{
        $xml = new DomDocument("1.0", "UTF-8");
        $xml -> load('motogp.xml');
        
        $r_number = $_POST['r_number'];
        $r_name = $_POST['r_name'];
        $r_age = $_POST['r_age'];
        $r_team = $_POST['r_team'];
        $r_bike = $_POST['r_bike'];
        $catTag = $xml->getElementsByTagName("category")->item(2);
        $checkTag = $catTag->getElementsByTagName("number");
        $i = 0;
        $presence = false;
        while($i<$checkTag->length){
            if( $checkTag[$i]->childNodes[0]->nodeValue == $r_number){
               $presence = true;    
            }
        $i++;
        }
        if($presence == true){
            $xpath = new DOMXPATH($xml);
            foreach($xpath->query("//category[3]/rider[number = '$r_number']") as $node){
                    $node->childNodes[1]->nodeValue = $r_name;
                    $node->childNodes[3]->nodeValue = $r_age;
                    $node->childNodes[7]->nodeValue = $r_team;
                    $node->childNodes[9]->nodeValue = $r_bike;
                }
            $xml->preserveWhiteSpace = false;
            $xml->formatOutput = true;
            $xml->save('motogp.xml');
            echo "<script type='text/javascript'>alert('Rider was updated successfully!');window.location.href='../../moto3.html';</script>";
             
        }
        else{
            echo "<script type='text/javascript'>alert('Selected rider is not found in Moto3');window.location.href='../../moto3.html';</script>";
        }
     }
}
?>