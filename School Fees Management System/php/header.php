
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Fees Management System</a>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                   
                    <li><a class="<?php if($page=='dashboard'){ echo 'active-menu';}?>" href="index.php">Dashboard</a></li>
                    <li><a class="<?php if($page=='student'){ echo 'active-menu';}?>" href="student.php">Student Management</a></li>
                    <li><a class="<?php if($page=='inact'){ echo 'active-menu';}?>" href="inactivestd.php">In-Active Students</a></li></li>
                    <li><a class="<?php if($page=='grade'){ echo 'active-menu';}?>" href="grade.php">Grade/Standard Levels</a></li>
                    <li><a class="<?php if($page=='fees'){ echo 'active-menu';}?>" href="fees.php">Update Fees Section</a></li>
				
                    <li><a class="<?php if($page=='report'){ echo 'active-menu';}?>" href="report.php">Report Section</a></li>
                   
					<li><a class="<?php if($page=='setting'){ echo 'active-menu';}?>" href="setting.php">Account Setting</a></li>
                    <li><a href="branch.php">School & Branches</a></li>
					<li><a href="logout.php">Logout</a></li>
              </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->