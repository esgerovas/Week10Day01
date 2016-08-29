<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<header id="header">
            <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                        <img src="assets/images/logo.png" class="logo"></a>
                    </div><!--navbar-header-->
                    <div id="myCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                          <?php
                    			include 'admin/db.php';
                    			session_start();
                    			$query1 = $db -> select("menu");
                           while($row = mysqli_fetch_assoc($query1)){ ?>
                            <li class="scroll"><a data-href="#home" href="#"><?=$row['name'];?></a></li>
                          <?php } ?>
                            <!-- <li class="scroll"><a data-href="#about" href="#">About</a></li>
                            <li class="scroll"><a data-href="#feature" href="#">Features</a></li>
                            <li class="scroll"><a data-href="#price" href="#">Prices</a></li>
                            <li class="scroll"><a data-href="#feedback" href="#">Feedback</a></li>
                            <li class="scroll"><a data-href="#team" href="#">Team</a></li>
                            <li class="scroll"><a data-href="#contact" href="#">Contacts</a></li> -->
                            <li class="dropdown dropdown-active">
                               <a class="dropdown-toggle" data-toggle="dropdown">Extra<b class="caret"></b></a>

                                <ul class="dropdown-menu menu">
                                    <li class="dropdown">
                                        <a  class="dropdown-toggle" data-target="dropdown">HomePages<b class="caret"></b></a>
                                         <ul class="dropdown-menu sub-menu">
                                            <li><a href="#">Default</a></li>
                                            <li><a href="#">Clickthrough</a></li>
                                            <li><a href="#">Colored</a></li>
                                            <li><a href="#">Fast Registration</a></li>
                                            <li><a href="#">Promo</a></li>
                                            <li><a href="#">Waiting List</a></li>
                                            <li><a href="#">Video Background</a></li>
                                            <li><a href="#">Youtube Embed</a></li>
                                            <li><a href="#">Vimeo Embed</a></li>
                                        </ul> <!-- /SubDropdown Menu for HomePages class name is "sub-menu"-->
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-target="dropdown">Blog<b class="caret"></b></a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li><a href="#">List</a></li>
                                            <li><a href="#">Post</a></li>
                                        </ul> <!-- /SubDropdown Menu for Blog  class name is "sub-menu"-->
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-target="dropdown">Ecommerce<b class="caret"></b></a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li><a href="#">Product grid</a></li>
                                            <li><a href="#">Product list</a></li>
                                            <li><a href="#">Product page</a></li>
                                            <li><a href="#">Card checkout</a></li>
                                            <li><a href="#">Payment confirmation</a></li>
                                        </ul><!-- /SubDropdown Menu for Ecommerce  class name is "sub-menu"-->
                                    </li>
                                    <li><a href="#">Registration</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li><a href="#">Shortcodes</a></li>
                                </ul><!-- /dropdown-menu  class name is "menu"-->
                            </li>
                        </ul><!-- /left-menu -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Login</a></li>
                            <li  class="sign"><a class="btn-custom" href ="#">Sign Up</a></li>
                        </ul><!-- /.right-menu -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.contanier -->
            </nav><!-- /nav -->
        </header>

</body>
</html>
