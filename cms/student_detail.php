<?php

include '../inc/session.php';
include '../inc/dbcon.php';

include '../inc/template_header.php';
include '../inc/navigation.php';

$page_title = "student details";
$title = "student";
?>


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title text-capitalize">
                            List of <?= $page_title ?>
                            <a href="registration.php" class="btn btn-primary text-uppercase">add student</a>

<?php 
            include '../inc/alert.php';
            ?>

                        </h4>
                        <hr>
                    </div>
                    <div class="content table-responsive table-full-width">

                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr class="text-capitalize">

                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Batch</th>
                                <th>Regd number</th>
                                <th>Symbol</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qry = " SELECT * FROM registration ";
                                $run = mysqli_query($con, $qry);

                                while ($data = mysqli_fetch_assoc($run)) {
                                ?>
                                <tr>
                                    <td class="text-capitalize"><?php echo $data['student_name']; ?></td>
                                    <td><?php echo $data['contact_num']; ?></td>
                                    <td><?php echo $data['email'];?></td>
                                    <td class="text-capitalize"><?php echo $data['address']; ?></td>
                                    <td><?php echo $data['batch'];?></td>
                                    <td><?php echo $data['registration_num'];?></td>
                                    <td><?php echo $data['symbol_num'];?></td>
                                    <td>
                                        <a href="update.php?symnum=<?php echo $data['symbol_num']; ?>><button  type="button"
                                                    class="btn btn-default" > Edit</button></a>
                                        <a href="deletion.php?symnum=<?php echo $data['symbol_num'];?><button type="button" class="btn btn-warning" >Delete</button>
                                    </td>


                                </tr>
                                <?php }

                            ?>
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include '../inc/template_footer.php';
?>