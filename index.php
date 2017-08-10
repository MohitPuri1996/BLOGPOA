<?php
include("connections/connections.php");
$result="";
if(!isset($_GET['count']))
{
    echo "up";
    $query="SELECT * FROM posts LIMIT=6";
$count=2;
$result=mysqli_query($connect,$query);

}
else{
    echo "niche";
$count=$count+2;
$q=6+$count/2;
$query="SELECT * FROM posts LIMIT='"+$q+"'";
$result=mysqli_query($connect,$query);
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


</head>

<body>
    <div id="background">
        <?php include("menu.php");?>
        <!-- /.container -->

        <br>
        <br>
        <div class="container banner-post">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <a href="#" id="banner-heading">Be the Best Version of you</a>
                    <br>
                    <a href="#" class="btn btn-lg btn-success">READ MORE</a></div>
            </div>
        </div>
    </div>

    <!--Banner Ends-->
    <div class="container" id="content">

        <br>
        
        <?php 
             while ($row = mysqli_fetch_assoc($result)){
          ?>
           
            <div class='pro_part col-xs-12 col-sm-6 col-md-4 col-lg-4'>
            <?php if(isset($row['imgname'])){
                if($row['imgname']=="no")
                    $img="img/poa.jpg";
                else
                $img ="img/".$row['imgname'];
            ?>
      <div class='h1' id='try' style='background-image: url("<?php echo $img;?>");
background-position: center;background-size:cover;'><a href='#'></a><?php }?>
<div class='h2'>
          <div class='fl'><span><a href="category.php?pid=<?php echo $row['id'];?>">  <?php echo $row['category'];?></a></span></div><br>
          <div class='f2'><span><a href="post.php?pid=<?php echo $row['id'];?>">  <?php echo $row['title'];?>.</a></span></div>
          <br>
          <div class='f3'><span><a href="blogger.php?bid=<?php echo $row['id'];?>"> <?php echo $row['author'];?></a></span></div>
      </div>
       
        <div class='clear'></div>
      </div>
    </div>
        

<?php  }?>
            
        
        <div class="row load">
            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4"> 

            <a href="index.php" name="count" class="btn btn-lg btn-success">LOAD MORE</a>

</form>

</div></div>
        
        <div class="row">
            <div id="left-wrapper" class="col-xs-12 col-sm-12 col-lg-8 col-md-8">

                <section id="right">

                    <div class="mini-posts">

                        <h2 id="heading">Browse Our Other Genres</h2><br/>

                        
                        <!-- Mini Post -->


                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Lifestyle</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/1.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Entertainment</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/event.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Art,Culture &amp; Heritage</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/3.jpg" alt="" /></a>
                        </article>

                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Health &amp; Wellness</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/food.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Fashion &amp; Beauty</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/fashion.jpg" alt="" /></a>
                        </article>

                        <article class="mini-post col-sm-12 col-xs-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Travel &amp; Adventure</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/travel.jpg" alt="" /></a>
                        </article>

                    </div>
                </section>


            </div>
            <div id="right-wrapper" class="col-xs-12 col-sm-12 col-lg-4 col-md-4">

                <!-- Posts List -->
                <section id="right" class="row">
                    <div>
                        <br>
                        <ul class="posts col-xs-12 col-sm-12 col-lg-12 col-md-12">

                            <h1 id="heading">Reccent Post</h1>

                            <?php 
                            $p=1;

$query="SELECT * FROM posts LIMIT 4";
$result=mysqli_query($connect,$query);
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <li style='padding:5px;'>
                                        <article>
                                            <header>
<HEAD>
                                                <h3><a href='post.php?pid=<?php echo $row['id'];?>' id='genre'><?php echo $row['title'];?></a></h3>
                                                <p><?php echo $row['author'];?></p>
                                                <time class='published' datetime='2017-08-2'><?php echo $row['date'];?></time>

                                               
                                                <time class='published' ><?php echo $row['category'];?></time>
<!-- d6b50480983b95cf39058442325e382bbaf57ae4-->
                                            </header>
                                            
                                            <a href='post.php?pid=<?php echo $row['id'];?>' class='image'><img src='<?php echo"img/".$row['imgname'];?>' alt='' /></a>
                                        </article>
                                    </li>
                              <?php 
                            }
                        ?>

                        </ul>
                    </div>
                </section>


            </div>
        </div>
    </div>

    <?php include("footer.html");?>
    

    <script src="js/script.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>
