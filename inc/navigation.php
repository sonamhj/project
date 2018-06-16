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
            <a class=" navbar-brand logo" href="dashboard.php"><img src="http://tribhuvan-university.edu.np/wp-content/themes/tu/images/logo.png" alt="logo">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i><b style="color: red">Logout</b></a>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i><b> Student Management </b><i class="fa fa-fw fa-arrows-v"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="registration.php">register student</a>
                        </li>
                        <li>
                            <a href="../cms/deletestudent.php">delete student</a>
                        </li>
                        <li>
                            <a href="../cms/updateStudent.php">update student</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#category"><i class="fa fa-fw fa-list"></i> <b>Result Management </b><i class="fa fa-fw fa-arrows-v"></i></a>
                    <ul id="category" class="collapse">
                        <li>
                            <a href="testing.php">Add result</a>
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