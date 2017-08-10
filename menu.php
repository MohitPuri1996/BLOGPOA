<?php

include("connections/connections.php");
$result1="";
$query1="SELECT * FROM categories";
 $result1 = mysqli_query($connect,$query1);




?>

<html>
<head>
   
        
</head>

<body style="overflow-x:hidden">
    
        <div id="header">
            <!--Navigation -->
            <nav class="navbar navbar-fixed-top links my-navbar " role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" id="tgbtn" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" ></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                        <a class="navbar-left" href="index.php" id="logo" style="float:left"><img src="img/logo.jpg" alt="" class="img-responsive"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
<?php  while ($row = mysqli_fetch_assoc($result1)) {
?>
                            <li class="resp-text"><a href="category.php?cat=<?php echo(str_replace(" & ","_and_",$row['catname']));?>"><?php echo(str_replace("_and_", " & ",$row['catname'])); ?></a></li>
<?php }?>

                           
                            <li class="resp-text" id="sbox">
                                <center class="">
                                    <form action="" style="">
                                        <p class="expandSearch">
                                            <input type="text" placeholder="Search" />
                                            <a href="#">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="375.045 607.885 30.959 30.33" enable-background="" xml:space="preserve">
					<path fill="#494949" d="M405.047,633.805l-7.007-6.542c-0.129-0.121-0.267-0.226-0.408-0.319c1.277-1.939,2.025-4.258,2.025-6.753 c0-6.796-5.51-12.306-12.307-12.306s-12.306,5.51-12.306,12.306s5.509,12.306,12.306,12.306c2.565,0,4.945-0.786,6.916-2.128 c0.122,0.172,0.257,0.337,0.418,0.488l7.006,6.542c1.122,1.048,2.783,1.093,3.709,0.101 C406.327,636.507,406.169,634.853,405.047,633.805z M387.351,629.051c-4.893,0-8.86-3.967-8.86-8.86s3.967-8.86,8.86-8.86 s8.86,3.967,8.86,8.86S392.244,629.051,387.351,629.051z"/>
				</svg>
                                            </a>
                                        </p>
                                    </form>
                                </center>
                            </li>
                            <!--                            Search button begins-->

                            <li>
                                <!--<a href="#search"><i class="fa fa-search fa-lg"></i></a>-->


                            </li>
                            <!--  Search button ends-->

                        </ul>
                    </div>
                </div>
            </nav>
            
            <!-- /.navbar-collapse -->
        </div>
    
        <!-- /.container -->
    </html> 