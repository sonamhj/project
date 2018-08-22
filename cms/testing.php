
<?php
include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';
?>

<?php 

  if (isset($_POST['semester'])) {
    
    include 'testingprocess.php';
    
  }
  
 ?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Multi Step Registration Form Using JQuery Bootstrap in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="../assets/css/bootstrap.min.css"></script>
  <style>

  .hidden
  {
   display: none;
  }
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
  
 </head>
 <body style="background: white">
 <br />
 <div class="container-fluid"> 
  <!-- Page Heading -->
  <div class="row">

    <div class="col-lg-12">
      <?php include '../inc/alert.php'; ?>
      <h1 class="page-header">
        Student Registration
      </h1>
      <ol class="breadcrumb" style="background: #e0ebeb">
        <li>
          <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="active">
          <i class="fa fa-file"></i> Admin panel
        </li>
      </ol>
    </div>
  </div>
 </div> 
  <div class="container box">
   <br />
   <h2 align="center"></h2><br />
   <?php /*echo $message;*/ ?>
   <form method="post" id="register_form">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Semester</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Student Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Marks</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     <?php include 'login_details.php'; ?>
     <?php include 'personal_details.php'; ?>
     <?php include 'fifth_sem_table.php'; ?>
    </div>
   </form>
  </div>
 </body>
</html>

<script>

$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
  
  var error_semester = '';
  
  if($.trim($('#semester').val()).length == 0)
  {
   error_semester = 'semester is required';
   $('#error_semester').text(error_semester);
   $('#semester').addClass('has-error');
  }
  else
  {
   error_semester = '';
   $('#error_semester').text(error_semester);
   $('#semester').removeClass('has-error');
  }

  if(error_semester != '')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 
 $('#btn_personal_details').click(function(){
  var error_student_name = '';
  var error_college_name = '';
  var error_symbol_number = '';
  var symbol_validation = /^\d{4}$/;
  
  if($.trim($('#student_name').val()).length == 0)
  {
   error_student_name = 'student name is required';
   $('#error_student_name').text(error_student_name);
   $('#student_name').addClass('has-error');
  }
  else
  {
   error_student_name = '';
   $('#error_student_name').text(error_student_name);
   $('#student_name').removeClass('has-error');
  }

  if($.trim($('#college_name').val()).length == 0)
  {
   error_college_name = 'college name is required';
   $('#error_college_name').text(error_college_name);
   $('#college_name').addClass('has-error');
  }
  else
  {
   error_college_name = '';
   $('#error_college_name').text(error_college_name);
   $('#college_name').removeClass('has-error');
  }

  if($.trim($('#symbol_number').val()).length == 0)
  {
   error_symbol_number = 'symbol number is required';
   $('#error_symbol_number').text(error_symbol_number);
   $('#symbol_number').addClass('has-error');
  }
  else
  {
   if (!symbol_validation.test($('#symbol_number').val()))
   {
    error_symbol_number = 'Invalid symbol Number';
    $('#error_symbol_number').text(error_symbol_number);
    $('#symbol_number').addClass('has-error');
   }
   else
   {
    error_symbol_number = '';
    $('#error_symbol_number').text(error_symbol_number);
    $('#symbol_number').removeClass('has-error');
   }
  }
  
  if($.trim($('#registration_number').val()).length == 0)
  {
   error_registraion_number = 'registration number is required';
   $('#error_registraion_number').text(error_registraion_number);
   $('#registration_number').addClass('has-error');
  }
  else
  {
   error_registraion_number = '';
   $('#error_registraion_number').text(error_registraion_number);
   $('#registration_number').removeClass('has-error');
  }

  if(error_symbol_number != '' || error_college_name != '' || error_symbol_number != '' || error_registraion_number != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
 $('#btn_contact_details').click(function(){
  
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#semester').on('click', function() {
      var semester = $('#semester').val();
      if(semester == 5) {
        $('#contact_details').removeClass('hidden');
      }
      else if(semester == 2){

        console.log("hello");
        
      }

    });
  });
</script>

<?php
include '../inc/template_footer.php';
?>
