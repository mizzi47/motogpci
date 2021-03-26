<!DOCTYPE html>
<html>
    <head>
        <Title>Moto3 Admin</Title>
        <link rel="stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>source/homecon.png"/>
        <script type="text/javascript">
            function logout() {
                var ask = window.confirm("Are you sure you want to log out?");
                if (ask) {
                    window.location.href = "<?php echo base_url(); ?>";
                }
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
            xmlDoc=loadXMLDoc("<?php echo base_url(); ?>source/doc/motogp.xml");
            gp = xmlDoc.getElementsByTagName("category")[2];
            rd =gp.getElementsByTagName("rider");
            nm =gp.getElementsByTagName("name");
            ag =gp.getElementsByTagName("age");
            no =gp.getElementsByTagName("number");
            tm =gp.getElementsByTagName("team");
            bk =gp.getElementsByTagName("bike");

            function allriders() {
                document.write("<font size='5' color='yellow' face='fantasy' ><table align='center' border = '1'>");
                document.write("<tr>");
                document.write("<td>"+"No: ");
                document.write("<td>"+"Name: ");
                document.write("<td>"+"Age: ");
                document.write("<td>"+"Number: ");
                document.write("<td>"+"Team: ");
                document.write("<td>"+"Bike: ");
                document.write("</tr>");
                for(i=0;i<rd.length;i++)
                    {
                document.write("<tr>");
                document.write("<td>"+ (i+1));
                document.write("<td>"+ nm[i].childNodes[0].nodeValue+"</td>");
                document.write("<td>"+ ag[i].childNodes[0].nodeValue+"</td>");
                document.write("<td>"+ no[i].childNodes[0].nodeValue+"</td>");
                document.write("<td>"+ tm[i].childNodes[0].nodeValue+"</td>");
                document.write("<td>"+ bk[i].childNodes[0].nodeValue+"</td>");
                document.write("</tr>");
                }
                document.write("</table></font>");
            }
            
            function addRider(){ 
                alert("This option not ready yet!")
            }
            
            function deleteRider(){ 
                alert("This option not ready yet!")
            }
            
        </script>
    </head>
    <body class = "m3">
        <div class = "nav">
            <ul class = "pic">
                <li><img src = "<?php echo base_url(); ?>source/navlogo.png" height ="50px"></li>
            </ul>
            <ul class = "pic">
                <li> <a class = "log"  onclick = "javascript:logout();"> Logout </a></li>
            </ul>
            <ul>            
                <li> <a href = "<?php echo base_url(); ?>category/motogp"> MotoGP </a></li>
                <li> <a href = "<?php echo base_url(); ?>category/moto2"> Moto2 </a></li>
                <li> <a class = "active" href = "<?php echo base_url(); ?>category/moto3"> Moto3 </a></li>           
            </ul>
        </div>
        <div class = "contain">
            <br><h1 align = "center"><u>List of riders</u></h1>
        </div>
        <div class = "contain">
        <div class = "contain">
            <script type = "text/javascript">allriders()</script><br>
        </div>
        </div>
        <div class = "contain">
            <div class = "contain">
                
                <br><h2 align = "center"><u>Add New Rider</u></h2><br>
                <form method ="POST" action ="source/doc/mgpAdd.php">
                Rider's Info<br>
                Name: <input type="text" name="r_name"><br>
                Age: <input type="text" name="r_age"><br> 
                Number: <input type="text" name="r_number"><br> 
                Team: <input type="text" name="r_team"><br> 
                Bike: <input type="text" name="r_bike"><br>
                <input class="button" type="submit" name="submit_moto3" value="Add Rider">
                </form>
        </div>
        <div class = "contain">
                <h3 align = "center"><u>Remove Rider</u></h3>
                <form method ="POST" action ="source/doc/mgpDel.php"> 
                    Delete rider by number: <input type="text" name="r_number"><br>
                <input class="button" type="submit" name="submit_moto3" value="Delete Rider">
                </form>
        </div>
        <div class = "contain">
                <h3 align = "center"><u>UpdateRider</u></h3>
                <form method ="POST" action ="source/doc/mgpUpt.php">           
                Select Number: <input type="text" name="r_number"><br> 
                Name: <input type="text" name="r_name"><br>
                Age: <input type="text" name="r_age"><br> 
                Team: <input type="text" name="r_team"><br> 
                Bike: <input type="text" name="r_bike"><br>
                <input class="button" type="submit" name="submit_moto3" value="Update">
                </form>
        </div>
        </div>
    </body>
</html>