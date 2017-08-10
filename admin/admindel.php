<?php 
include('../connections/connections.php');
include('viewadmin.php');
include("includes/header.php");

$sql="DELETE from admin WHERE id='$adminid' ";
 $result = mysqli_query($connect,$sql);
 $message="Please refresh your page";
 echo "<script type='text/javascript'>alert('$message');</script>";

?>

        <div class="clear">
        </div>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Admin Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                        $query = "SELECT * FROM admin"; 
                        $result = mysqli_query($connect,$query);

                        while($rows = mysqli_fetch_array($result,MYSQL_ASSOC))
                        {   
                       $adminid   = $rows['id'];
                      $adminname = $rows['username'];	
                        
                   ?>
                    <tr>
                            <td><?php echo $adminid;?></td>
                            <td><?php echo $adminname;?></td>
                            <td><a href="">Edit</a> || <a href="admindel.php"  onclick="return confirm('Are you sure you want to delete this category?');">Delete</a></td>

                        </tr> 
                    <?php } ?>
					</tbody>
				</table>
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
