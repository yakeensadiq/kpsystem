<?php
//nav sidebar

if (!session_id()) {
    session_start();
}

$user_id = $_SESSION['id'];

$sql = "SELECT role FROM users WHERE id='$user_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {
        
        $role = $row["role"];
        
    }
        ?>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">KeenPerform</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <?php
                    if($role === "QA" || $role === "Team Leader" || $role === "Consultant" || $role === "Senior Manager"){
                        ?>
                        <li> <a href="/KPsystem/dashboard" class="waves-effect"><i class="fa fa-dashboard" style="padding-right:10px;"></i> <span class="hide-menu">Dashboard </span></a> </li>
                        <?php
                        if($role === "QA"){
					    ?>
					    <li> <a href="/KPsystem/qa" class="waves-effect"><i class="fa fa-file-audio-o fa-fw"></i> <span class="hide-menu">KeenCoach</span></a> </li>
					    <li> <a href="/KPsystem/qa-history" class="waves-effect"><i class="fa fa-clock-o fa-fw"></i> <span class="hide-menu">History</span></a> </li>
					    <li> <a href="/KPsystem/grading-tool" class="waves-effect"><i class="fa fa-check-circle" style="padding-right:10px;"></i> <span class="hide-menu">Grading Tool</span></a> </li>
					    <li> <a href="/KPsystem/grading-tool-history" class="waves-effect"><i class="fa fa-check-circle" style="padding-right:10px;"></i> <span class="hide-menu">Grading History</span></a> </li>
					    <?php
					    }
					
					    if($role === "Team Leader"){
					    ?>
					    <li> <a href="/KPsystem/team-leader" class="waves-effect"><i class="fa fa-file-audio-o fa-fw"></i> <span class="hide-menu">Team Leader</span></a> </li>
					    <li> <a href="/KPsystem/team-leader-history" class="waves-effect"><i class="fa fa-clock-o fa-fw"></i> <span class="hide-menu">History</span></a> </li>
					    <?php
					    }
					
					    if($role === "Consultant"){
					    ?>
					    <li> <a href="/KPsystem/consultant" class="waves-effect"><i class="fa fa-file-audio-o fa-fw"></i> <span class="hide-menu">Consultant</span></a> </li>
					    <li> <a href="/KPsystem/consultant-history" class="waves-effect"><i class="fa fa-clock-o fa-fw"></i> <span class="hide-menu">History</span></a> </li>
					    <?php
					    }
					
					    if($role === "Senior Manager"){
					    ?>
					    <li> <a href="/KPsystem/senior-manager" class="waves-effect"><i class="fa fa-file-audio-o fa-fw"></i> <span class="hide-menu">Senior Manager</span></a> </li>
					    <li> <a href="/KPsystem/senior-manager-history" class="waves-effect"><i class="fa fa-clock-o fa-fw"></i> <span class="hide-menu">History</span></a> </li>
					    <?php
					    }
					
					    ?>
					
                        <li class="devider"></li>
                        <?php
                        if($role === "QA" || $role === "Team Leader" || $role === "Consultant" || $role === "Senior Manager"){
                        ?>
                        <li> <a href="/KPsystem/profile" class="waves-effect"><i  class="fa fa-user fa-fw"></i> <span class="hide-menu">Profile</span></a> </li>
                        <li><a href="/KPsystem/functions/base/logout.php" class="waves-effect"><i class="mdi mdi-login fa-fw"></i> <span class="hide-menu">Logout</span></a></li>
                        <?php
                        }
                        
                    }
                    else{
                        ?>
                        <li> <a href="/KPsystem/" class="waves-effect"><i class="fa fa-home " style="padding-right:10px;"></i> <span class="hide-menu">Home</span></a> </li>
                        <li> <a href="/KPsystem/register" class="waves-effect"><i class="fa fa-user-plus" style="padding-right:10px;"></i> <span class="hide-menu">Register</span></a> </li>
                        <li> <a href="/KPsystem/login" class="waves-effect"><i class="fa fa-lock" style="padding-right:10px;"></i> <span class="hide-menu">Login</span></a> </li>
                        <li> <a href="/KPsystem/contact" class="waves-effect"><i class="fa fa-headset" style="padding-right:10px;"></i> <span class="hide-menu">Support</span></a> </li>
                        <?php
                    }
                    
					
                    ?>
                    <li class="devider"></li>
                    <li><a href="/KPsystem/documentation" class="waves-effect"><i class="fa fa-circle-o text-danger" style="padding-right:10px;"></i> <span class="hide-menu">Docs</span></a></li>
                    <li><a href="/KPsystem/faqs" class="waves-effect"><i class="fa fa-circle-o text-success" style="padding-right:10px;"></i> <span class="hide-menu">Faqs</span></a></li>
                    
                    
                </ul>
            </div>
        </div>
        <?php
    }
    else{
        ?>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">KeenPerform</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li> <a href="/KPsystem/" class="waves-effect"><i class="fa fa-home " style="padding-right:10px;"></i> <span class="hide-menu">Home</span></a> </li>
                    <li> <a href="/KPsystem/register" class="waves-effect"><i class="fa fa-user-plus" style="padding-right:10px;"></i> <span class="hide-menu">Register</span></a> </li>
                    <li> <a href="/KPsystem/login" class="waves-effect"><i class="fa fa-lock" style="padding-right:10px;"></i> <span class="hide-menu">Login</span></a> </li>
                    <li> <a href="/KPsystem/contact" class="waves-effect"><i class="fa fa-headset" style="padding-right:10px;"></i> <span class="hide-menu">Support</span></a> </li>
                    <li class="devider"></li>
                    <li><a href="/KPsystem/documentation" class="waves-effect"><i class="fa fa-circle-o text-danger" style="padding-right:10px;"></i> <span class="hide-menu">Docs</span></a></li>
                    <li><a href="/KPsystem/faqs" class="waves-effect"><i class="fa fa-circle-o text-success" style="padding-right:10px;"></i> <span class="hide-menu">Faqs</span></a></li>
                    
                </ul>
            </div>
        </div>
        <?php
    }

?>