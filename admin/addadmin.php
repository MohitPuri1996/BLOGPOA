<?php
include("includes/header.php");
//include("/../connections/connections.php");



if(isset($_POST['submit']))
{
  $adminname =mysqli_escape_string($connect,$_POST['adminname']);
  $adminpass =mysqli_escape_string($connect,$_POST['adminpass']);
  $sql="INSERT INTO admin(username,password) VALUES('$adminname','$adminpass')";

 $result=mysqli_query($connect, $sql);

 if ($result) {
    echo "admin has been successfullyy inserted";
    mysqli_close($connect);
}
}
include("includes/sidebar.php");
?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 
                 <form action='' method='post'>
                    <table class="form" >					
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Admin Name" class="medium" name="adminname" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="password" placeholder="Enter Password" class="medium" name="adminpass" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
       <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
