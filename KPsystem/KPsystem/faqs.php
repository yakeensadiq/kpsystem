<?php
/**
 * This template displays Faqs
 * 
 * Template Name: Faqs
 */
if (!session_id()) {
    session_start();
}
 $user_id = $_SESSION["id"];
 $username = $_SESSION['details'][$user_id]['username'];
 $email = $_SESSION['details'][$user_id]['email'];
 $role = $_SESSION['details'][$user_id]['role'];
 
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>FAQs | KeenPerform</title>
    
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-bg-profile.jpg");

  /* Set a specific height */
  min-height: 900px;
  width:100%;
    
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}
.slide-up {
    animation: slide-up 1s forwards;
  }

  @keyframes slide-up {
    from {
      transform: translateY(100%);
    }
    to {
      transform: translateY(0%);
    }
  }
</style>
<body class="fix-header">
    <?php include('web/preloader.php'); ?>
    <div id="wrapper">
        <?php include('web/nav-top.php'); ?>
        <?php include('web/nav-sidebar.php'); ?>
        <div id="page-wrapper">
            
            <div class="parallax">
                    
            <div class="container-fluid">
                
                <div class="row" style="margin-top:110px;">
                    
                    <div class="col-lg-1 col-md-1 col-sm-12 cols-xs-12">
					
					</div>
					
					<div class="col-lg-10 col-md-10 col-sm-12 cols-xs-12 slide-up">
					
						<div class="col-md-12" style="background:#ffffff;padding-top:20px;">
						    <center><h3>Frequently Asked Questions</h3></center>
						    <hr>
                        <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true" role="tablist">
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultOne" role="tab"> <a class="panel-title" data-toggle="collapse" href="#exampleCollapseDefaultOne" data-parent="#exampleAccordionDefault" aria-expanded="true" aria-controls="exampleCollapseDefaultOne"> What is KeenPerform's interactive coaching platform? </a> </div>
                                <div class="panel-collapse collapse in" id="exampleCollapseDefaultOne" aria-labelledby="exampleHeadingDefaultOne" role="tabpanel">
                                    <div class="panel-body"> The interactive coaching platform is a feature offered by KeenPerform that allows clients to connect with a team of experts in real-time for support and guidance. </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTwo" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultTwo"> Can I upload an audio file and notes when interacting with the coach? </a> </div>
                                <div class="panel-collapse collapse" id="exampleCollapseDefaultTwo" aria-labelledby="exampleHeadingDefaultTwo" role="tabpanel">
                                    <div class="panel-body"> Yes, when interacting with the coach, you have the opportunity to upload an audio file and some optional notes which will be reviewed by the team leader. </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultThree" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultThree" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultThree"> How will I know when the team leader has reviewed my audio file and notes? </a> </div>
                                <div class="panel-collapse collapse" id="exampleCollapseDefaultThree" aria-labelledby="exampleHeadingDefaultThree" role="tabpanel">
                                    <div class="panel-body"> You will be notified as soon as the team leader has completed their review and response. You can check back on your account to see their response. </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultFour" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFour" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultFour"> Who will be notified after the team leader's response? </a> </div>
                                <div class="panel-collapse collapse" id="exampleCollapseDefaultFour" aria-labelledby="exampleHeadingDefaultFour" role="tabpanel">
                                    <div class="panel-body"> The consultant will be notified after the team leader's response. The consultant will then review the response and mark the interaction as complete or escalate it to the senior manager if necessary. </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultFive" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFive" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultFive"> Can I access the team leader's response anytime? </a> </div>
                                <div class="panel-collapse collapse" id="exampleCollapseDefaultFive" aria-labelledby="exampleHeadingDefaultFive" role="tabpanel">
                                    <div class="panel-body"> Yes, you can check back on your account to see the team leader's response. </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultSix" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultSix" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultSix"> Is there a senior manager involved in the process? </a> </div>
                                <div class="panel-collapse collapse" id="exampleCollapseDefaultSix" aria-labelledby="exampleHeadingDefaultSix" role="tabpanel">
                                    <div class="panel-body"> Yes, the senior manager may be involved in the process if the consultant escalates the interaction. </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultSeven" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultSeven" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultSeven"> How does the interactive coaching platform help me achieve my goals? </a> </div>
                                <div class="panel-collapse collapse" id="exampleCollapseDefaultSeven" aria-labelledby="exampleHeadingDefaultSeven" role="tabpanel">
                                    <div class="panel-body"> The interactive coaching platform provides you with real-time support and guidance from a team of experts, empowering your success by helping you achieve your goals. </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultEight" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultEight" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultEight"> Is the platform available 24/7? </a> </div>
                                <div class="panel-collapse collapse" id="exampleCollapseDefaultEight" aria-labelledby="exampleHeadingDefaultEight" role="tabpanel">
                                    <div class="panel-body"> Availability of the platform may depend on the specific services offered by KeenPerform. </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultNine" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultNine" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultNine"> How does KeenPerform ensure the highest level of support and guidance? </a> </div>
                                <div class="panel-collapse collapse" id="exampleCollapseDefaultNine" aria-labelledby="exampleHeadingDefaultNine" role="tabpanel">
                                    <div class="panel-body"> KeenPerform is committed to providing clients with the highest level of support and guidance. The interactive coaching platform is one of the ways they strive to achieve this goal. </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" id="exampleHeadingDefaultTen" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTen" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultTen"> How do I get started with the interactive coaching platform? </a> </div>
                                <div class="panel-collapse collapse" id="exampleCollapseDefaultTen" aria-labelledby="exampleHeadingDefaultTen" role="tabpanel">
                                    <div class="panel-body"> To get started with the interactive coaching platform, connect with KeenPerform's team of experts. The specific steps may vary based on the services offered by KeenPerform. </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					</div>
					
					<div class="col-lg-1 col-md-1 col-sm-12 cols-xs-12" >
					
					</div>
				
                    
                </div>
                
				<div class="row" style="margin-top:40px;margin-bottom:100px;">
				
				    <center><h2 style="color:#ffffff;"></h2></center>
				
				</div>
				
            </div>
            
            </div>
            <?php include('web/footer.php'); ?>
        </div>
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>