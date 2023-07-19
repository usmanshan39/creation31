<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Creation31</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="index">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Appointments</span></a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="blogs">
            <i class="fas fa-blog"></i>
            <span>Blogs</span></a>
    </li> -->
    <?php 
    if($_SESSION['userType'] == "super"){
        ?>
            <li class="nav-item">
                <a class="nav-link" href="users">
                    <i class="fas fa-users"></i>
                    <span>Users</span></a>
            </li>
        <?php
    }
    ?>
    <li class="nav-item">
        <a class="nav-link" href="career">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Application</span></a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="tables">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> -->

    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="./functions/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>