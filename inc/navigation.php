     <!-- Navigation -->
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        
            <a class=" navbar-brand logo" href="dashboard.php"><img src="../img/logo.png" width="300" height="85" alt="logo">
            </a>
        </div>

         <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <p class="text-capitalize">my account</p>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu text-capitalize">
                           
                            <li><a href="logout.php">logout</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
       
   
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-user"></i><b> Student Management </b><i class="fa fa-fw fa-arrows-v"></i></a>
                    <ul id="demo1" class="collapse">
                        <li>
                            <a href="student_detail.php">Student detail</a>
                        </li>
                        <li>
                            <a href="bulkregister.php">Register in bulk</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#category"><i class="fa fa-envelope"></i> <b>  Notification Mgmt </b><i class="fa fa-fw fa-arrows-v"></i></a>
                    <ul id="category" class="collapse">
                        <li>
                            <a href="sendmail.php">Send Mail</a>
                        </li>
                        <li>
                            <a href="">Send SMS</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-list"></i> <b> Result Management </b><i class="fa fa-fw fa-arrows-v"></i></a>
                    <ul id="demo2" class="collapse">
                        <li>
                            <a href="upload_result.php">Add result</a>
                        </li>
                        <li>
                            <a href="#">List category</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>