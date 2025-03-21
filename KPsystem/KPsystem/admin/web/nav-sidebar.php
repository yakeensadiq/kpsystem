<?php
//nav sidebar
$current_url = $_SERVER['REQUEST_URI'];
?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">KeenPerform</span></h3>
        </div>
        <ul class="nav" id="side-menu">
            <li<?php if (strpos($current_url, "https://www.arketek.co.za/KPsystem/admin/") === 0 && $current_url !== "https://www.arketek.co.za/KPsystem/admin/dcf"): ?> class="active"<?php endif; ?>>
                <a href="https://www.arketek.co.za/KPsystem/admin/" class="waves-effect"><i class="fa fa-dashboard" style="padding-right:10px;"></i> <span class="hide-menu"> Dashboard </span></a>
            </li>
            <li<?php if ($current_url === "https://www.arketek.co.za/KPsystem/admin/dcf"): ?> class="active"<?php endif; ?>>
                <a href="https://www.arketek.co.za/KPsystem/admin/dcf" class="waves-effect"><i class="fa fa-file-text-o" style="padding-right:10px;"></i> <span class="hide-menu">Digital Coaching</span></a>
            </li>
            <li<?php if ($current_url === "https://www.arketek.co.za/KPsystem/admin/grading-tool"): ?> class="active"<?php endif; ?>>
                <a href="https://www.arketek.co.za/KPsystem/admin/grading-tool" class="waves-effect"><i class="fa fa-check-square-o" style="padding-right:10px;"></i> <span class="hide-menu">Grading Tool</span></a>
            </li>
            <li<?php if ($current_url === "www.arketek.co.za/KPsystem/admin/users"): ?> class="active"<?php endif; ?>>
                <a href="www.arketek.co.za/KPsystem/admin/users" class="waves-effect"><i class="fa fa-user" style="padding-right:10px;"></i> <span class="hide-menu">Users</span></a>
            </li>
            <li<?php if ($current_url === "https://www.arketek.co.za/KPsystem/admin/history"): ?> class="active"<?php endif; ?>>
                <a href="https://www.arketek.co.za/KPsystem/admin/history" class="waves-effect"><i class="fa fa-clock-o" style="padding-right:10px;"></i> <span class="hide-menu">Login History</span></a>
            </li>
            <li<?php if ($current_url === "https://www.arketek.co.za/KPsystem/admin/profile"): ?> class="active"<?php endif; ?>>
                <a href="https://www.arketek.co.za/KPsystem/admin/profile" class="waves-effect"><i class="fa fa-user-circle" style="padding-right:10px;"></i> <span class="hide-menu">Profile</span></a>
            </li>
            <li class="devider"></li>
            <li><a href="https://www.arketek.co.za/KPsystem/functions/base/logout.php" class="waves-effect"><i class="fa fa-sign-out" style="padding-right:10px;"></i> <span class="hide-menu">Logout</span></a></li>
           
        </ul>
    </div>
</div>
        <?php
        
        ?>