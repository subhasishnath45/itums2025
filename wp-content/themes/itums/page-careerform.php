<?php
	/* Template Name: Career Form Page */
	get_header();
?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
?>
<?php 

// ini_set('display_errors', 1);
if(isset($_POST['submit'])){
    // $msg = "";


    $resumefile = get_template_directory()  . '/attachment/' . basename($_FILES['career_resume']['name']);
   
    // Mine is Available
	// echo !extension_loaded('openssl')?"Not Available":"Available";
	// echo'<br>';
    // require this file only on form submit...
    require( get_template_directory()  . '/phpmailer/PHPMailerAutoload.php');
    
    define ('GUSER','itums.website@gmail.com');
    define ('GPWD','Itums@12345');

 	  $recever1 = 'itums.website@gmail.com';

    if(move_uploaded_file($_FILES['career_resume']['tmp_name'],$resumefile)){
        // sendmail($recever1,$senderemail,$sendername,$resumefile);
        // $msg = "Thanks for sending your Application";
    $sendername = $_POST['career_name'];
    $senderemail = $_POST['career_email'];
    $senderdob =   $_POST['career_dob'];
    $senderaddress = $_POST['career_address'];
    $sendercity =  $_POST['career_city'];
    $senderzipcode = $_POST['career_zip_code'];
    $academic = $_POST['career_educational_qualification'];
    $workexp = $_POST['career_work_experience'];
    $phno = $_POST['career_phone_no'];



      $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->Mailer = "smtp";
        // $mail->SMTPDebug  = 2; 
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    // $mail->CharSet   = "UTF-8";
    $mail->Username   = GUSER;
    $mail->Password   = GPWD;
    $mail->isHTML(true); 
        $mail->setFrom($senderemail,$sendername);
        $mail->addAddress($recever1);
        $mail->addAttachment($resumefile);

      $mail->Subject = 'Career Mail from - '. $sendername;
      $mail->Body = '<table class="table" cellspacing="0">
      <thead>
        <tr>
            <th colspan="2">Career Mail from - '. $sendername .'</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td colspan="2">'. '<p>Dear Sir / Madam, I am interested to work for ITUMS. My Details as follows :</p></br>' .'</td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td>'. $senderdob .'</td>
        </tr>
        <tr>
            <td>Address:</td>
            <td>'. $senderaddress .'</td>
        </tr>
        <tr>
            <td>City:</td>
            <td>'. $sendercity .'</td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td>'. $senderzipcode .'</td>
        </tr>
        <tr>
            <td>Educational Qualification:</td>
            <td>'. $academic .'</td>
        </tr>
        <tr>
            <td>Work Experience:</td>
            <td>'. $workexp .'</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>'. $senderemail .'</td>
        </tr>
        <tr>
            <td>Phone No:</td>
            <td>'. $phno .'</td>
        </tr>
      </tbody>
      </table>';
      
      $mail->send();
      echo "<script>alert('Thanks for your application.');</script>";
        
      // sendmail($recever1,$senderemail,$sendername,$resumefile);
    } else{
        // $msg = "Please check your attachment !";
    }
    // wp_redirect( home_url() );

}
?>
<div class="site-body">
    <div class="about-row05">
      <div class="container-fluid">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="team-header text-center">
                  <h3><?php the_title(); ?></h3>
                  <div class="divider divider-default"></div>
                </div>
              </div>
            </div>
            <div class="row">
            	<div class="col-md-6 offset-md-3">
            		<div class="career-form-holder">
                    <form method="post" name="frm" action="" enctype="multipart/form-data" class="career-form">
                      <div class="form-group row">
                        <label for="career_name" class="col-lg-2 col-form-label">Name:</label>
                        <input type="text" class="col-lg-10 form-control" id="career_name" name="career_name">
                      </div>
                      <div class="form-group row">
                        <label for="career_dob" class="col-lg-3 col-form-label">Date of Birth:</label>
                        <input type="date" class="col-lg-9 form-control" id="career_dob" name="career_dob">
                      </div>
                      <div class="form-group row">
                        <label for="career_address" class="col-lg-2 col-form-label">Address:</label>
                        <input type="text" class="col-lg-10 form-control" id="career_address" name="career_address">
                      </div>
                      <div class="form-group row">
                        <label for="career_city" data-validation="required" class="col-lg-2 col-form-label">City:</label>
                        <input type="text" class="col-lg-10 form-control" id="career_city" name="career_city">
                      </div>
                      <div class="form-group row">
                        <label for="career_zip_code" class="col-lg-3 col-form-label">Zip Code:</label>
                        <input type="text" class="col-lg-9 form-control" id="career_zip_code" name="career_zip_code">
                      </div>
                      <div class="form-group row">
                        <label for="career_educational_qualification" class="col-lg-3 col-form-label">Educational Qualification:</label>
                        <input type="text" class="col-lg-9 form-control" id="career_educational_qualification" name="career_educational_qualification">
                      </div>
                      <div class="form-group row">
                        <label for="career_work_experience" class="col-lg-3 col-form-label">Work Experience:</label>
                        <input type="text" class="col-lg-9 form-control" id="career_work_experience" name="career_work_experience">
                      </div>
                      <div class="form-group row">
                        <label for="career_email" class="col-lg-2 col-form-label">Email:</label>
                        <input type="text" class="col-lg-10 form-control" id="career_email" name="career_email">
                      </div>
                      <div class="form-group row">
                        <label for="career_phone_no" class="col-lg-3 col-form-label">Phone No:</label>
                        <input type="text" class="col-lg-9 form-control" id="career_phone_no" name="career_phone_no">
                      </div>
                      <div class="form-group row">
                        <label for="career_resume" class="col-lg-8 col-form-label">Attach Resume(In .doc or .pdf format):</label>
                        <input type="file" data-validation="size" data-validation-max-size="3M" class="col-lg-4 form-control" id="career_resume" name="career_resume" accept="image/*,.pdf,.doc, .docx">
                        <div class="col-lg-12 uploadedfile"></div>
                      </div>
                      <div class="form-group row">
                          <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit">
                      </div>
                    </form>
            		</div>
            	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<?php 
		endwhile;
		wp_reset_postdata();
	endif;
?>
<?php 
	get_footer();
?>