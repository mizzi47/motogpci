<!DOCTYPE html>
<html>
    <head>
        <Title>MotoGP Admin</Title>
        <link rel="stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>source/homecon.png"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">
            function logout() {
                var ask = window.confirm("Are you sure you want to log out?");
                if (ask) {
                    window.location.href = "<?php echo base_url(); ?>";
                }
            }
        </script>
    </head>
    <body class = "mgp">
        <div class = "nav navbar-offset" >
            <ul class = "pic">
                <li><img src = "<?php echo base_url(); ?>source/navlogo.png" height ="50px"></li>
            </ul>
            <ul class = "pic">
                <li> <a class = "log"  onclick = "javascript:logout();"> Logout </a></li>
            </ul>
            <ul>            
                <li> <a class = "active" href = "<?php echo base_url(); ?>category/motogp"> MotoGP </a></li>
                <!-- <li> <a href = "<?php echo base_url('Motogp/sel1'); ?>"> Moto2 </a></li> -->
                <li> <a href = "<?php echo base_url(); ?>category/moto2"> Moto2 </a></li>
                <li> <a href = "<?php echo base_url(); ?>category/moto3"> Moto3 </a></li>           
            </ul>
        </div>
        <div class = "contain">
            <br><h1 align = "center"><u>List of Coach</u></h1>
        </div>
        <div class="containtable">
        <font color = 'black'>
            <table id="coach-list" class="table table-bordered table-striped table-hover">
            <font color ='black'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Assigned Riders</th>
                        <th>Age</th>
                    </tr>
                    
                </thead>
                <tbody>
                </tbody>
                </font>
            </table>
            </font>
        </div>
            <!-- <div class = "contain">
                <h3 align = "center"><u>Add New Rider</u></h3>
                <form method ="POST" action ="source/doc/mgpAdd.php">
                Rider's Info<br>
                Name: <input type="text" name="r_name"><br>
                Age: <input type="text" name="r_age"><br> 
                Number: <input type="text" name="r_number"><br> 
                Team: <input type="text" name="r_team"><br> 
                Bike: <input type="text" name="r_bike"><br>
                <input class="button" type="submit" name="submit_motogp" value="Add Rider">
                </form>
            </div>
            <div class = "contain">
                <h3 align = "center"><u>Remove Rider</u></h3>
                <form method ="POST" action ="source/doc/mgpDel.php"> 
                    Delete rider by number: <input type="text" name="r_number"><br>
                <input class="button" type="submit" name="submit_motogp" value="Delete Rider">
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
                <input class="button" type="submit" name="submit_motogp" value="Update">
                </form>
            </div> -->
        </div></div>
        
 
    </body>
    <script type="text/javascript">
$(document).ready(function() {
    $('#coach-list').DataTable({
        "ajax": {
            url : "<?php echo base_url('Motogp/get_coach'); ?>",
            type : 'GET'
        },
    });
});
</script>
</html>
