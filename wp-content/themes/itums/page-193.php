<?php
	/* Template Name: Our Franchise Page Template */
	get_header();
?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
?>
<?php 

if(isset($_POST['submit'])){

  require( get_template_directory()  . '/phpmailer/PHPMailerAutoload.php');

  define ('GUSER','itums.website@gmail.com');
  define ('GPWD','Itums@12345');

  $recever1 = 'itums.website@gmail.com';

  $company_name = $_POST['company_name'];
  $company_mobile = trim($_POST['company_mobile']);
  $company_contact_person = $_POST['company_contact_person'];
  $company_email = trim($_POST['company_email']);

  if("" == trim($_POST['company_landline'])){
    $company_landline = 'No Landline.';
  }else{
    $company_landline = $_POST['company_landline'];
  } 

  // $company_landline = $_POST['company_landline'];

  if("" == trim($_POST['company_branch'])){
    $company_branch = 'We don\'t have any Branch currently.';
  }else{
    $company_branch = $_POST['company_branch'];
  } 

  // $company_branch = $_POST['company_branch'];

  $preferred_state = $_POST['preferred_state'];
  $preferred_city = $_POST['preferred_city'];
  $company_address = $_POST['company_address'];
  $company_state = $_POST['company_state'];

  $company_city = $_POST['company_city'];
  $company_zipcode = $_POST['company_zipcode'];
  $residential_address = $_POST['residential_address'];
  $residential_state = $_POST['residential_state'];
  $residential_city = $_POST['residential_city'];
  $residential_zipcode = $_POST['residential_zipcode'];
 
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
  $mail->setFrom($company_email,$company_name);
  $mail->addAddress($recever1);
  $mail->addAttachment($resumefile);

  $mail->Subject = 'Franchise Mail from - '. $company_name;
  $mail->Body = '<table class="table" BORDER=1 cellspacing="0" CELLPADDING=1>
  <thead>
    <tr>
        <th colspan="2">Franchise Application from - '. $company_name .'</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td colspan="2">'. '<p>Hi, We would like to be a part of ITUMS. Our Details as follows :</p></br>' .'</td>
    </tr>
    <tr>
        <td>Mobile No of Our Company:</td>
        <td>'. $company_mobile .'</td>
    </tr>
    <tr>
        <td>Contact Person of Our Company:</td>
        <td>'. $company_contact_person .'</td>
    </tr>
    <tr>
        <td>Company Email Id:</td>
        <td>'. $company_email .'</td>
    </tr>
    <tr>
        <td>Company Landline No:</td>
        <td>'. $company_landline .'</td>
    </tr>
    <tr>
        <td>Company Branch:</td>
        <td>'. $company_branch .'</td>
    </tr>
    <tr>
        <td>Preferred State:</td>
        <td>'. $preferred_state .'</td>
    </tr>
    <tr>
        <td>Preferred City:</td>
        <td>'. $preferred_city .'</td>
    </tr>
    <tr>
        <td>Company Address:</td>
        <td>'. $company_address .'</td>
    </tr>
    <tr>
        <td>Company State:</td>
        <td>'. $company_state .'</td>
    </tr>
    <tr>
        <td>Company City:</td>
        <td>'. $company_city .'</td>
    </tr>
    <tr>
        <td>Company Zipcode:</td>
        <td>'. $company_zipcode .'</td>
    </tr>
    <tr>
        <td>Residential Address:</td>
        <td>'. $residential_address .'</td>
    </tr>
    <tr>
        <td>Residential State:</td>
        <td>'. $residential_state .'</td>
    </tr>
    <tr>
        <td>Residential City:</td>
        <td>'. $residential_city .'</td>
    </tr>
    <tr>
        <td>Residential Zipcode:</td>
        <td>'. $residential_zipcode .'</td>
    </tr>
  </tbody>
  </table>';
  
  $mail->send();
  echo "<script>alert('Thanks for your Franchise Application.');</script>";

//   if($_POST){
//     $headerRep  = "From: subhasishnath45@gmail.com <subhasishnath45@gmail.com>";
//     // $feedback = 'your information has been successfully Sent to ITUMS.';
//     $subjectRep = 'Thanks for reaching out to us.';
//     $messageRep = 'We will contact you soon.';
//     mail($company_email, $subjectRep, $messageRep, $headerRep);
//  }

}

?>
<div class="">
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
          		<div class="col-md-12">
          			<div class="project-info career-page-content"><?php the_content(); ?></div>
      			</div>
  			</div>
          </div>
        </div>
      </div>
    </div>

<!--     <div class="franchaise-row02">
      <div class="container-fluid">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="franchaise-modules">
                  <ul>
                    <li class="module-01">
                      <?php 
                        // $children = get_pages( array( 'child_of' => $post->ID ) );
                      ?>
                      <div class="city-grade_img_wrapper">
                        <?php 
                        // $city_icon = get_field('city-icon',$children[0]->ID);
                        // if( !empty( $city_icon ) ): ?>
                            <img src="<?php// echo esc_url($city_icon['url']); ?>" class="img-fluid" alt="<?php// echo esc_attr($city_icon['alt']); ?>" />
                        <?php// endif; ?>
                      </div>
                      <h2>
                        <a href="<?php// echo get_permalink( $children[0]->ID ); ?>">
                        <?php// echo $children[0]->post_title; ?>
                        </a>
                      </h2>
                      <section>
                          <?php// echo get_the_excerpt($children[0]->ID) ?>
                      </section> -->
        <!--                       <div class="dropdown dropdown-city">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Class A Cities
                        </button>
                        <div class="dropdown-menu dropdown-menu-city">
                          <?php 
                            // $city_tags = wp_get_post_tags($children[0]->ID);
                            // foreach ( $city_tags as $city_tag ) {
                          ?>
                          <a class="dropdown-item" href="<?php// echo get_permalink( $children[0]->ID ); ?>"><?php// echo $city_tag->name; ?></a>
                          <?php 
                            //}
                          ?>
                        </div>
                      </div> -->
                    <!-- </li> -->
<!--                     <li class="module-01">
                      <?php 
                        //$children = get_pages( array( 'child_of' => $post->ID ) );
                      ?>
                      <div class="city-grade_img_wrapper">
                        <?php 
                        //$city_icon = get_field('city-icon',$children[1]->ID);
                        //if( !empty( $city_icon ) ): ?>
                            <img src="<?php// echo esc_url($city_icon['url']); ?>" class="img-fluid" alt="<?php// echo esc_attr($city_icon['alt']); ?>" />
                        <?php// endif; ?>
                      </div>
                      <h2>
                        <a href="<?php// echo get_permalink( $children[1]->ID ); ?>">
                        <?php// echo $children[1]->post_title; ?>
                        </a>
                      </h2>
                      <section>
                          <?php// echo get_the_excerpt($children[1]->ID) ?>
                      </section> -->
<!--                       <div class="dropdown dropdown-city">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Class B Cities
                        </button>
                        <div class="dropdown-menu dropdown-menu-city">
                          <?php 
                            // $city_tags = wp_get_post_tags($children[1]->ID);
                            // foreach ( $city_tags as $city_tag ) {
                          ?>
                          <a class="dropdown-item" href="<?php// echo get_permalink( $children[1]->ID ); ?>"><?php// echo $city_tag->name; ?></a>
                          <?php 
                            //}
                          ?>
                        </div>
                      </div> -->
                    <!-- </li> -->
                    <!-- <li class="module-01">
                      <?php 
                        //$children = get_pages( array( 'child_of' => $post->ID ) );
                      ?>
                      <div class="city-grade_img_wrapper">
                        <?php 
                        //$city_icon = get_field('city-icon',$children[2]->ID);
                        //if( !empty( $city_icon ) ): ?>
                            <img src="<?php// echo esc_url($city_icon['url']); ?>" class="img-fluid" alt="<?php// echo esc_attr($city_icon['alt']); ?>" />
                        <?php// endif; ?>
                      </div>
                      <h2>
                        <a href="<?php// echo get_permalink( $children[2]->ID ); ?>">
                        <?php// echo $children[2]->post_title; ?>
                        </a>
                      </h2>
                      <section>
                          <?php// echo get_the_excerpt($children[2]->ID) ?>
                      </section> -->
<!--                       <div class="dropdown dropdown-city">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Class C Cities
                        </button>
                        <div class="dropdown-menu dropdown-menu-city">
                          <?php 
                            // $city_tags = wp_get_post_tags($children[2]->ID);
                            // foreach ( $city_tags as $city_tag ) {
                          ?>
                          <a class="dropdown-item" href="<?php// echo get_permalink( $children[2]->ID ); ?>"><?php// echo $city_tag->name; ?></a>
                          <?php 
                            //}
                          ?>
                        </div>
                      </div> -->
<!--                     </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="franchaise-row03">
      <div class="container-fluid">
        <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-7 offset-md-5">
              <div class="franchaise-tab-holder">
                <!-- Tabs with icons on Card -->
                <div class="card card-nav-tabs">
                    <div class="card-header card-header-primary">
                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab01" data-toggle="tab">
                                          <i class="fas fa-gift"></i> Benefits
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab02" data-toggle="tab">
                                          <i class="fas fa-bullseye"></i> Criteria
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab03" data-toggle="tab">
                                          <i class="fas fa-chart-line"></i> ROI
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="tab-content text-justify">
                            <div class="tab-pane active" id="tab01">
                              <?php
                                $benifits_content = get_field('offer_content',$post->ID);
                                if( !empty( $benifits_content ) ): 
                                echo $benifits_content;
                              endif; ?>
                            </div>
                            <div class="tab-pane" id="tab02">
                              <?php
                                $responsibilities_content = get_field('looking_for_content',$post->ID);
                                if( !empty( $responsibilities_content ) ): 
                                echo $responsibilities_content;
                              endif; ?>
                            </div>
                            <div class="tab-pane" id="tab03">
                              <?php
                                $eligibilities_content = get_field('investment_content',$post->ID);
                                if( !empty( $eligibilities_content ) ): 
                                echo $eligibilities_content;
                              endif; ?>
                            </div>
                        </div>
                    </div>
                  </div>
                <!-- End Tabs with icons on Card -->
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="franchaise-row04" id="franchaise-form">
      <div class="container-fluid">
        <div class="row register">
          <div class="container">
            <div class="row">
              
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>You're Welcome to be a part of ITUMS</h3>
                        <p>To know more, please reach out to us by Filling up this form.</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Be Our Franchise</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply here:</h3>
                                <form action="" method="post" name="franfrm" class="franchise-form">
                                <div class="row register-form">
                                    <div class="col-md-12"><h5>Company Information:</h5></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="company_name" class="form-control" placeholder="Company Name*" minlength="3" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="company_mobile" class="form-control" placeholder="Mobile No*" minlength="10" maxlength="10" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="company_contact_person" class="form-control" placeholder="Contact Person*" minlength="3" value="" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="company_email" class="form-control" placeholder="Email ID*" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="company_landline" class="form-control" placeholder="Landline No if any" value=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="company_branch" class="form-control" placeholder="Branches if any" value=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-12"><h5>Preferred Location:</h5></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="preferred_state" class="preferred_state form-control" >
                                                <option class="hidden" selected disabled>Please Select Your State</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="preferred_city" class="preferred_city form-control" >
                                                <option class="hidden" selected disabled>Please Select Your City</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Kolkata">Kolkata</option>
                                                <option value="Chennai">Chennai</option>
                                                <option value="Bangalore">Bangalore</option>
                                                <option value="Hyderabad">Hyderabad</option>
                                                <option value="Ahmedabad">Ahmedabad</option>
                                                <option value="Surat">Surat</option>
                                                <option value="Pune">Pune</option>
                                                <option value="Kanpur">Kanpur</option>
                                                <option value="Indore">Indore</option>
                                                <option value="Jaipur">Jaipur</option>
                                                <option value="Baroda">Baroda</option>
                                                <option value="Nagpur">Nagpur</option>
                                                <option value="Patna">Patna</option>
                                                <option value="Lucknow">Lucknow</option>
                                                <option value="Bhopal">Bhopal</option>
                                                <option value="Kochi">Kochi</option>
                                                <option value="Vishakhapatnam">Vishakhapatnam</option>
                                                <option value="Gwalior">Gwalior</option>
                                                <option value="Jabalpur">Jabalpur</option>
                                                <option value="Aurangabad">Aurangabad</option>
                                                <option value="Rajkot">Rajkot</option>
                                                <option value="Gandhinagar">Gandhinagar</option>
                                                <option value="Vellore">Vellore</option>
                                                <option value="Madurai">Madurai</option>
                                                <option value="Agra">Agra</option>
                                                <option value="Meerut">Meerut</option>
                                                <option value="Aligarh">Aligarh</option>
                                                <option value="Coimbatore">Coimbatore</option>
                                                <option value="Nashik">Nashik</option>
                                                <option value="Vijayawada">Vijayawada</option>
                                                <option value="Tiruchirapalli">Tiruchirapalli</option>
                                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                                <option value="Kozhikode">Kozhikode</option>
                                                <option value="Faridabad">Faridabad</option>
                                                <option value="Varanasi">Varanasi</option>
                                                <option value="Jamshedpur">Jamshedpur</option>
                                                <option value="Allahabad">Allahabad</option>
                                                <option value="Amritsar">Amritsar</option>
                                                <option value="Dhanbad">Dhanbad</option>
                                                <option value="Gorakhpur">Gorakhpur</option>
                                                <option value="Hubli-Dharwad">Hubli-Dharwad</option>
                                                <option value="Bhavnagar">Bhavnagar</option>
                                                <option value="Raipur">Raipur</option>
                                                <option value="Mysore">Mysore</option>
                                                <option value="Thrissur">Thrissur</option>
                                                <option value="Mangalore">Mangalore</option>
                                                <option value="Guntur">Guntur</option>
                                                <option value="Bhubaneswar">Bhubaneswar</option>
                                                <option value="Amravati">Amravati</option>
                                                <option value="Srinagar">Srinagar</option>
                                                <option value="Bhilai">Bhilai</option>
                                                <option value="Warangal">Warangal</option>
                                                <option value="Tirunelveli">Tirunelveli</option>
                                                <option value="Nellore">Nellore</option>
                                                <option value="Ranchi">Ranchi</option>
                                                <option value="Guwahati">Guwahati</option>
                                                <option value="Aurangabad">Aurangabad</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Patiala">Patiala</option>
                                                <option value="Jodhpur">Jodhpur</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Salem">Salem</option>
                                                <option value="Dehradun">Dehradun</option>
                                                <option value="Hajipur">Hajipur</option>
                                                <option value="Kollam">Kollam</option>
                                                <option value="Sangli">Sangli</option>
                                                <option value="Jamnagar">Jamnagar</option>
                                                <option value="Jammu">Jammu</option>
                                                <option value="Kurnool">Kurnool</option>
                                                <option value="Roorkee">Roorkee</option>
                                                <option value="Kannur">Kannur</option>
                                                <option value="Tiruvannamalai">Tiruvannamalai</option>
                                                <option value="Etawah">Etawah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12"><h5>Company Address:</h5></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="company_address" class="form-control" placeholder="Company Address" value=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="company_state" class="company_state form-control" >
                                                <option class="hidden" selected disabled>Please Select Company state</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="company_city" class="company_city form-control" >
                                                <option class="hidden" selected disabled>Please Select Company City</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Kolkata">Kolkata</option>
                                                <option value="Chennai">Chennai</option>
                                                <option value="Bangalore">Bangalore</option>
                                                <option value="Hyderabad">Hyderabad</option>
                                                <option value="Ahmedabad">Ahmedabad</option>
                                                <option value="Surat">Surat</option>
                                                <option value="Pune">Pune</option>
                                                <option value="Kanpur">Kanpur</option>
                                                <option value="Indore">Indore</option>
                                                <option value="Jaipur">Jaipur</option>
                                                <option value="Baroda">Baroda</option>
                                                <option value="Nagpur">Nagpur</option>
                                                <option value="Patna">Patna</option>
                                                <option value="Lucknow">Lucknow</option>
                                                <option value="Bhopal">Bhopal</option>
                                                <option value="Kochi">Kochi</option>
                                                <option value="Vishakhapatnam">Vishakhapatnam</option>
                                                <option value="Gwalior">Gwalior</option>
                                                <option value="Jabalpur">Jabalpur</option>
                                                <option value="Aurangabad">Aurangabad</option>
                                                <option value="Rajkot">Rajkot</option>
                                                <option value="Gandhinagar">Gandhinagar</option>
                                                <option value="Vellore">Vellore</option>
                                                <option value="Madurai">Madurai</option>
                                                <option value="Agra">Agra</option>
                                                <option value="Meerut">Meerut</option>
                                                <option value="Aligarh">Aligarh</option>
                                                <option value="Coimbatore">Coimbatore</option>
                                                <option value="Nashik">Nashik</option>
                                                <option value="Vijayawada">Vijayawada</option>
                                                <option value="Tiruchirapalli">Tiruchirapalli</option>
                                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                                <option value="Kozhikode">Kozhikode</option>
                                                <option value="Faridabad">Faridabad</option>
                                                <option value="Varanasi">Varanasi</option>
                                                <option value="Jamshedpur">Jamshedpur</option>
                                                <option value="Allahabad">Allahabad</option>
                                                <option value="Amritsar">Amritsar</option>
                                                <option value="Dhanbad">Dhanbad</option>
                                                <option value="Gorakhpur">Gorakhpur</option>
                                                <option value="Hubli-Dharwad">Hubli-Dharwad</option>
                                                <option value="Bhavnagar">Bhavnagar</option>
                                                <option value="Raipur">Raipur</option>
                                                <option value="Mysore">Mysore</option>
                                                <option value="Thrissur">Thrissur</option>
                                                <option value="Mangalore">Mangalore</option>
                                                <option value="Guntur">Guntur</option>
                                                <option value="Bhubaneswar">Bhubaneswar</option>
                                                <option value="Amravati">Amravati</option>
                                                <option value="Srinagar">Srinagar</option>
                                                <option value="Bhilai">Bhilai</option>
                                                <option value="Warangal">Warangal</option>
                                                <option value="Tirunelveli">Tirunelveli</option>
                                                <option value="Nellore">Nellore</option>
                                                <option value="Ranchi">Ranchi</option>
                                                <option value="Guwahati">Guwahati</option>
                                                <option value="Aurangabad">Aurangabad</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Patiala">Patiala</option>
                                                <option value="Jodhpur">Jodhpur</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Salem">Salem</option>
                                                <option value="Dehradun">Dehradun</option>
                                                <option value="Hajipur">Hajipur</option>
                                                <option value="Kollam">Kollam</option>
                                                <option value="Sangli">Sangli</option>
                                                <option value="Jamnagar">Jamnagar</option>
                                                <option value="Jammu">Jammu</option>
                                                <option value="Kurnool">Kurnool</option>
                                                <option value="Roorkee">Roorkee</option>
                                                <option value="Kannur">Kannur</option>
                                                <option value="Tiruvannamalai">Tiruvannamalai</option>
                                                <option value="Etawah">Etawah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="company_zipcode" class="form-control" placeholder="Company Zipcode" value=""/>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12"><h5>Residential Address:</h5></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="residential_address" class="form-control" placeholder="Residential Address" value=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="residential_state" class="residential_state form-control" >
                                                <option class="hidden" selected disabled>Please Select Residential state</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="residential_city" class="residential_city form-control" >
                                                <option class="hidden" selected disabled>Please Select Residential City</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Kolkata">Kolkata</option>
                                                <option value="Chennai">Chennai</option>
                                                <option value="Bangalore">Bangalore</option>
                                                <option value="Hyderabad">Hyderabad</option>
                                                <option value="Ahmedabad">Ahmedabad</option>
                                                <option value="Surat">Surat</option>
                                                <option value="Pune">Pune</option>
                                                <option value="Kanpur">Kanpur</option>
                                                <option value="Indore">Indore</option>
                                                <option value="Jaipur">Jaipur</option>
                                                <option value="Baroda">Baroda</option>
                                                <option value="Nagpur">Nagpur</option>
                                                <option value="Patna">Patna</option>
                                                <option value="Lucknow">Lucknow</option>
                                                <option value="Bhopal">Bhopal</option>
                                                <option value="Kochi">Kochi</option>
                                                <option value="Vishakhapatnam">Vishakhapatnam</option>
                                                <option value="Gwalior">Gwalior</option>
                                                <option value="Jabalpur">Jabalpur</option>
                                                <option value="Aurangabad">Aurangabad</option>
                                                <option value="Rajkot">Rajkot</option>
                                                <option value="Gandhinagar">Gandhinagar</option>
                                                <option value="Vellore">Vellore</option>
                                                <option value="Madurai">Madurai</option>
                                                <option value="Agra">Agra</option>
                                                <option value="Meerut">Meerut</option>
                                                <option value="Aligarh">Aligarh</option>
                                                <option value="Coimbatore">Coimbatore</option>
                                                <option value="Nashik">Nashik</option>
                                                <option value="Vijayawada">Vijayawada</option>
                                                <option value="Tiruchirapalli">Tiruchirapalli</option>
                                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                                <option value="Kozhikode">Kozhikode</option>
                                                <option value="Faridabad">Faridabad</option>
                                                <option value="Varanasi">Varanasi</option>
                                                <option value="Jamshedpur">Jamshedpur</option>
                                                <option value="Allahabad">Allahabad</option>
                                                <option value="Amritsar">Amritsar</option>
                                                <option value="Dhanbad">Dhanbad</option>
                                                <option value="Gorakhpur">Gorakhpur</option>
                                                <option value="Hubli-Dharwad">Hubli-Dharwad</option>
                                                <option value="Bhavnagar">Bhavnagar</option>
                                                <option value="Raipur">Raipur</option>
                                                <option value="Mysore">Mysore</option>
                                                <option value="Thrissur">Thrissur</option>
                                                <option value="Mangalore">Mangalore</option>
                                                <option value="Guntur">Guntur</option>
                                                <option value="Bhubaneswar">Bhubaneswar</option>
                                                <option value="Amravati">Amravati</option>
                                                <option value="Srinagar">Srinagar</option>
                                                <option value="Bhilai">Bhilai</option>
                                                <option value="Warangal">Warangal</option>
                                                <option value="Tirunelveli">Tirunelveli</option>
                                                <option value="Nellore">Nellore</option>
                                                <option value="Ranchi">Ranchi</option>
                                                <option value="Guwahati">Guwahati</option>
                                                <option value="Aurangabad">Aurangabad</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Patiala">Patiala</option>
                                                <option value="Jodhpur">Jodhpur</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Salem">Salem</option>
                                                <option value="Dehradun">Dehradun</option>
                                                <option value="Hajipur">Hajipur</option>
                                                <option value="Kollam">Kollam</option>
                                                <option value="Sangli">Sangli</option>
                                                <option value="Jamnagar">Jamnagar</option>
                                                <option value="Jammu">Jammu</option>
                                                <option value="Kurnool">Kurnool</option>
                                                <option value="Roorkee">Roorkee</option>
                                                <option value="Kannur">Kannur</option>
                                                <option value="Tiruvannamalai">Tiruvannamalai</option>
                                                <option value="Etawah">Etawah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="residential_zipcode" class="form-control" placeholder="Residential Zipcode" value=""/>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                      <input type="submit" name="submit" class="btnRegister"  value="Apply"/>
                                    </div>
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


</div>

<?php 
		endwhile;
		wp_reset_postdata();
	endif;
?>
<?php 
	get_footer();
?>