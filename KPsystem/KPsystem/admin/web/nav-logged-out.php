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
            <li<?php if (strpos($current_url, "https://www.arketek.co.za/KPsystem/admin/login/") === 0 && $current_url !== "https://www.arketek.co.za/KPsystem/"): ?> class="active"<?php endif; ?>>
                <a href="https://www.arketek.co.za/KPsystem/admin/login" class="waves-effect"><i class="fa fa-dashboard" style="padding-right:10px;"></i> <span class="hide-menu"> Login </span></a>
            </li>
        </ul>
    </div>
</div>
        <?php
        
        ?>