<?php
include("includes/header.php");
include("../connections/connections.php");



if(isset($_POST['submit']))
{
  $categoryname =mysqli_escape_string($connect,$_POST['catname']);
   echo "category";
  $sql="INSERT INTO categories(catname) VALUES('$categoryname')";
      echo "category1";

 $result=mysqli_query($connect, $sql);
      echo "category1000";

 if ($result) {
    echo "category has been successfullyy inserted";
    mysqli_close($connect);
}
}
?>


        <?php include("includes/sidebar.php");?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 
                 <form action='' method='post'>
                    <table class="form" >					
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Category Name..." class="medium" name="catname" />
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
