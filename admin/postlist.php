<?php include("includes/header.php");

//include("../connections/connections.php");
$result2="";
$query2="SELECT * FROM posts";
 $result2 = mysqli_query($connect,$query2);


?>

<?php include("includes/sidebar.php");?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr><th>id</th>
							<th>Post Title</th>
							<th>Category</th>
							<th>Date</th>
							<th>Body</th>
							<th>Author</th>
							<th>Image Name</th>
						</tr>
					</thead>
					<tbody><?php     
                                 while ($row = mysqli_fetch_assoc($result2)) {
 
                                    
                                    ?>
						<tr class="odd gradeX">
						<td><?php echo $row['id'];?></td>
							<td><?php echo $row['title'];?></td>
							<td><?php echo $row['category'];?></td>
							<td><?php echo $row['date'];?></td>
							<td><?php $body=$row['body'];  echo substr($body, 0,50);?></td>
							<td><?php echo $row['author'];?></td>
							<td><?php echo $row['imgname'];?></td>
							
							
						</tr>
						<?php }?>
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
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
    <div id="site_info">
      <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
	   
</body>
</html>
