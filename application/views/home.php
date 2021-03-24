<!DOCTYPE html>
<html>
<head>
    <Title>Homepage</Title>
    <link rel="stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css"> 
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>source/homecon.png"/>
    <script type="text/javascript">
            function login() {
                window.location.href = "login.html";
            }
            function loadXMLDoc(dname)
            {
                if (window.XMLHttpRequest)
                {
                xhttp=new XMLHttpRequest();
                }
                else 
                {
                xhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xhttp.open("GET",dname,false);
                xhttp.send();
                return xhttp.responseXML;
            }
        
                xmlDoc=loadXMLDoc("source/doc/motogp.xml");         
                ct =xmlDoc.getElementsByTagName("category");
                rd =xmlDoc.getElementsByTagName("rider");
                nm =xmlDoc.getElementsByTagName("name");
                ag =xmlDoc.getElementsByTagName("age");
                no =xmlDoc.getElementsByTagName("number");
                tm =xmlDoc.getElementsByTagName("team");
                bk =xmlDoc.getElementsByTagName("bike");
        
        function getAllriders(ll) {
                xmlDoc=loadXMLDoc("source/doc/motogp.xml");
                ct = xmlDoc.getElementsByTagName("category")[ll];
                rd =ct.getElementsByTagName("rider");
                nm =ct.getElementsByTagName("name");
                ag =ct.getElementsByTagName("age");
                no =ct.getElementsByTagName("number");
                tm =ct.getElementsByTagName("team");
                bk =ct.getElementsByTagName("bike");
                document.write("<font size='5' color='yellow' face='fantasy'' ><table align='center' border = '1'>");
                document.write("<tr>");
                document.write("<td>"+"No: ");
                document.write("<td>"+"Name: ");
                document.write("<td>"+"Age: ");
                document.write("<td>"+"Number: ");
                document.write("<td>"+"Team: ");
                document.write("<td>"+"Bike: ");
                document.write("<td>"+"Category: ");
                document.write("</tr>");
                for(i=0;i<rd.length;i++){
                    cat = rd[i].parentNode.attributes;
                    document.write("<tr>");
                    document.write("<td>"+ (i+1));
                    document.write("<td>"+ nm[i].childNodes[0].nodeValue +"</td>");
                    document.write("<td>"+ ag[i].childNodes[0].nodeValue+"</td>");
                    document.write("<td>"+ no[i].childNodes[0].nodeValue+"</td>");
                    document.write("<td>"+ tm[i].childNodes[0].nodeValue+"</td>");
                    document.write("<td>"+ bk[i].childNodes[0].nodeValue+"</td>");
                    document.write("<td>"+ cat.getNamedItem("type").nodeValue+"</td>");
                    document.write("</tr>");
                }
                document.write("</table></font>");
            }
        
        function getRider() {
              xmlDoc=loadXMLDoc("source/doc/motogp.xml");
                rd =xmlDoc.getElementsByTagName("rider");
                nm =xmlDoc.getElementsByTagName("name");
                ag =xmlDoc.getElementsByTagName("age");
                no =xmlDoc.getElementsByTagName("number");
                tm =xmlDoc.getElementsByTagName("team");
                bk =xmlDoc.getElementsByTagName("bike");
              var text;
              var num = prompt("Enter Rider's Number");
              //x = xmlDoc.getElementsByTagName("number");
              for(i=0;i<rd.length;i++){
                  if(no[i].childNodes[0].nodeValue == (num) ){
                      ct = rd[i].parentNode.attributes;
                    text = "Category: " + ct.getNamedItem("type").nodeValue + "<br>"
                          + "Name: " + nm[i].childNodes[0].nodeValue + "<br>"
                          + "Age: " + ag[i].childNodes[0].nodeValue + "<br>"
                          + "Number: " + no[i].childNodes[0].nodeValue + "<br>"
                          + "Team: " + tm[i].childNodes[0].nodeValue + "<br>"
                          + "Bike: " + bk[i].childNodes[0].nodeValue + "<br>"
                    break;  
                  }
                  else{
                      text = "Rider's Number is not registered!";
                  }
              } 
            document.getElementById("riderBio").innerHTML = text;
            }
    </script>
</head>
    <body>
        <div class = "nav">
            <ul class = "pic">
                <li><img src = "source/navlogo.png" height ="50px"></li>
            </ul>
            <ul class = "pic">
                <li> <a class = "login" href ="<?php echo base_url(); ?>Admin" > Login </a></li>
            </ul>
            <ul>
                <li> <a class = "active" href = "<?php echo base_url(); ?>" > Home </a></li>
            </ul>
        </div> 
        <div class = "contain">     
        <div class = "contain">
            <br><img src="source/logo.png" class ="center">
        </div>
        <div class = "contain">
        <h1>  What is Motogp?<hr></h1>
        <p>
        Grand Prix motorcycle racing refers to the premier class of motorcycle road racing events held on road circuits sanctioned by FIM. Independent motorcycle racing events have been held since the start of the twentieth century and large national events were often given the title Grand Prix, the foundation of a recognised international governing body for motorcycle sport, the Federation Internationale de Motocyclisme in 1949 provided the opportunity to coordinate rules and regulations in order that selected events could count towards official World Championships as FIM Road Racing World Championship Grand Prix. It is the oldest established motorsport world championship.</p>
        </div>
        <!--view motogp-->
        <div class = "contain">
            <script type = "text/javascript">getAllriders(0)</script><br>
        </div>
        <div class = "contain">
            <script type = "text/javascript">getAllriders(1)</script><br>
        </div>
        <div class = "contain">
            <script type = "text/javascript">getAllriders(2)</script><br>
        </div>
        <div class = "contain">
            <button class="button" onclick="getRider()">View Rider's Bio</button>  Search By Rider's Number
            <p id="riderBio"></p>
        </div>
        </div>
        <video id="video_background" autoplay="true" loop="loop" muted="muted" volume="0"> 
    <source src="source/grandprix.mp4" type="video/mp4"> 
        </video>
    </body>
</html>