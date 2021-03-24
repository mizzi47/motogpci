<?php
        
        if (isset($_POST["submit_motogp"]) && !empty($_POST["submit_motogp"])){
                if (empty($_POST['r_number'])) {
                echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='../../motogp.html';</script>";
                } 
                $xml = new DomDocument("1.0", "UTF-8");
                $xml -> load('motogp.xml');
                $r_number = $_POST["r_number"];
                $xpath = new DOMXPATH($xml);
                foreach($xpath->query("//category[1]/rider[number = '$r_number']") as $node){
                    $node->parentNode->removeChild($node);       
                }
                $xml->formatoutput = true;
                $xml->save('motogp.xml'); 
                if(empty($node)){     
                    echo "<script type='text/javascript'>alert('Rider not found!');window.location.href='../../motogp.html';</script>"; 
                }
                else{
                    echo "<script type='text/javascript'>alert('Rider have been deleted.');window.location.href='../../motogp.html';</script>";                 
                }                       
        }

        if (isset($_POST["submit_moto2"]) && !empty($_POST["submit_moto2"])){
                if (empty($_POST['r_number'])) {
                echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='../../moto2.html';</script>";
                } 
                $xml = new DomDocument("1.0", "UTF-8");
                $xml -> load('motogp.xml');
                $r_number = $_POST["r_number"];

                $xpath = new DOMXPATH($xml);
                foreach($xpath->query("//category[2]/rider[number = '$r_number']") as $node){
                    $node->parentNode->removeChild($node);                        
                }
                $xml->formatoutput = true;
                $xml->save('motogp.xml');  
                if(empty($node)){     
                    echo "<script type='text/javascript'>alert('Rider not found!');window.location.href='../../moto2.html';</script>"; 
                }
                else{
                    echo "<script type='text/javascript'>alert('Rider have been deleted.');window.location.href='../../moto2.html';</script>";                 
                }   
        }

        if (isset($_POST["submit_moto3"]) && !empty($_POST["submit_moto3"])){
                if (empty($_POST['r_number'])) {
                echo "<script type='text/javascript'>alert('Number is not filled');window.location.href='../../moto3.html';</script>";
                } 
                $xml = new DomDocument("1.0", "UTF-8");
                $xml -> load('motogp.xml');
                $r_number = $_POST["r_number"];

                $xpath = new DOMXPATH($xml);
                foreach($xpath->query("//category[3]/rider[number = '$r_number']") as $node){
                    $node->parentNode->removeChild($node);                        
                }
                $xml->formatoutput = true;
                $xml->save('motogp.xml');  
                if(empty($node)){     
                    echo "<script type='text/javascript'>alert('Rider not found!');window.location.href='../../moto3.html';</script>"; 
                }
                else{
                    echo "<script type='text/javascript'>alert('Rider have been deleted');window.location.href='../../moto3.html';</script>";                 
                }   
        }
