 
    <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#" style="color: white;">REGISTRATION SYSTEM</span>
                   <!--  <div id="coll" class="nav-collapse collapse"> -->
                        <ul class="nav pull-right" >
                            <?php $get_id = $_SESSION['id']; ?>
                        <?php 
                        $query= mysqli_query($conn,"SELECT * ,year(curDate())-year(dob) as age from register_tb  where user_id ='$get_id'")or die(mysqli_error($conn));
                        $row = mysqli_fetch_array($query);
                        
                        ?>
                            <li class="dropdown">
                                <ul class="nav pull-right" >
                                    <!--  <li><a class="jkl" tabindex="-1" href="#">Profile</a></li> -->
                                      
                                <a style='color:white;'href="#" id="name123" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class=""></i></a>
                                </li>
                                
                                  <ul class="nav pull-right" >   

                                <li><a  class="jkl" tabindex="-1" href="controllers/logout.php"><i class="icon-signout icon-small" style="color:#fff;"></i>&nbsp;<span style="color: #fff;">Logout</span></a></li>
                                
                                      </ul>
                                </ul>
                                 
                    <!-- </div> -->
                    <!--/.nav-collapse -->
                    <style type="text/css">
                        ul a:hover ul a{
                            background-color:darkorange!important;
                            color:black;
                        }
                        /*ul{
                            margin-right: 30px !important;
                        }*/
                    </style>
                </div>
            </div>
    </div>