<?php 

include("connections/connections.php");
if(isset($_GET['pid'])){
 $postid=$_GET['pid'];

$query="SELECT * FROM posts WHERE id='$postid'";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plan of Action</title>

    <!-- Bootstrap Core CSS -->

    <link href="css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<script>
function Change()
{
 document.getElementById('like').innerHTML = 'Liked';
 document.getElementById('btn-like').setAttribute("background-color", "red");
}</script>
</head>

<body>
<?php include("menu.php");?>
    <!-- Navigation -->
    <!-- Page Header -->
     <?php 
         
         
//$query="SELECT * FROM posts WHERE category='$category'";

$result1=mysqli_query($connect,$query);
//echo $result1;
        while ($row = mysqli_fetch_assoc($result1)){


          ?>
    <div class="container" id="maincon">
    <?php if(isset($row['imgname'])){
                if($row['imgname']=="no")
                    $img="img/poa.jpg";
                else
                $img ="img/".$row['imgname'];
            ?>
        <div id="postbackground" style='background-image: url("<?php echo $img;?>")'>
        <?php } }?>
        <br>
        <br>
        <div class="container post-post">
            <div class="row">
                <div class="col-xs-11 col-lg-10 col-md-10 col-sm-11">
                    <?php 
         
         
//$query="SELECT * FROM posts WHERE category='$category'";

$result1=mysqli_query($connect,$query);

//echo $result1;
        while ($row = mysqli_fetch_assoc($result1)){


          ?>
                    
                    <a href="#" id="post-heading"><?php echo $row['title'];?></a>
                    <br>
                   <a href="index.php"><h5>HOME</h5></a>/<a href="category.php"><h5><?php echo $row['category'];?></h5></a>
            </div>
        </div>
    </div>
    </div>
      <br>
    <div class="blog">
        <article>
       
            <div class="row">
<span class="meta">Posted by <a href="#"><?php echo $row['author'];?></a> on <?php echo $row['date'];?></span>

 <div class="col-xs-12 col-lg-3 col-md-3 col-sm-12">
     <a href="#" target="" onclick="Change();" ><button type="button" class="btn btn-like btn-md" id="btn-like"><i class="fa fa-thumbs-up " id="thumbs"> <b id="like">Like</b></i>|<b id="count">4321</b></button></a><!-- Twitter -->
    </div>
        </div>
            <?php }?>
            
<br>
                                <div class="row">
                                    <br>              

    <!-- Facebook -->
   
    <div class="col-xs-12 col-lg-3 col-md-3 col-sm-12"><div class="fb-share-button" data-href="http://planofaction.in/blog/post.php?pid=" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fplanofaction.in%2Fblog%2Fpost.php%3Fpid&amp;src=sdkpreparse"><button  type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"> Share on Facebook</i></button></a><!-- Twitter -->
    
       </div></div>
      
    <div class="col-xs-12 col-lg-3 col-md-3 col-sm-12">
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false"><button type="button" class="btn btn-twitter btn-lg"><i class="fa fa-twitter fa-2"> Share on Twitter</i></button></a><!-- Twitter -->
    </div>
   
    <div class="col-xs-12 col-lg-3 col-md-3 col-sm-12">
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false"><button  type="button" class="btn btn-pinterest btn-lg"><i class="fa fa-pinterest fa-2"> Share on Pinterest</i></button></a><!-- Twitter -->
    </div>
    </div>

                        <?php 
         
         
//$query="SELECT * FROM posts WHERE category='$category'";

$result1=mysqli_query($connect,$query);
//echo $result1;
        while ($row = mysqli_fetch_assoc($result1)){


          ?>
        <br>    <div class="row col-xs-12 col-lg-12 col-md-12 col-sm-12">
           
<?php echo $row['body'];}?>

               </div>
           

    </article>
    </div>
    <hr>
    <br>
   
    
    
             </div>
    
    <br>
         
    <!-- Blog Comments -->
<div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-2 col-md-10 offset-md-1">

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">NAME HERE
                            <small>August 25, 2017 at 1:30 PM</small>
                        </h4>
                    Great Place. 
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">NAME HERE
                            <small>August 25, 2017 at 5:00 PM</small>
                        </h4>
                        Nice Blog! 
                    </div>
                </div>

            </div>

            </div>
</div>
    <?php include("footer.html");?>
    
    <!-- Bootstrap core JavaScript -->

    
    <script src="vendor/tether/tether.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>