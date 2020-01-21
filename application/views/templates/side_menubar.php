<aside class="main-sidebar" style="position: fixed;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
       <!-- Menu 1 -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <!-- Menu 2 -->
        <li class="active">
          <a href="#">
            <i class="fa fa-building-o"></i>
            <span>Companies</span>
            <span class="pull-right-container">
              <!-- Summarized information for the companies will be in here -->
              <!-- Let red be used, to show companies running out of fuels -->
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
              <!-- Green for finely working companies -->
              <small class="label pull-right bg-green">14</small>
            </span>
          </a>
        </li>

      


        <!-- Menu 3 -->
        <li>
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Applicants</span>
            <span class="pull-right-container">
              <span class="label bg-red pull-right">14</span>
              <span class="label bg-blue pull-right">4</span>
              <span class="label bg-green pull-right">54</span>
            </span>
          </a>
          
        </li>

        <!-- Menu 4 -->
        <li>
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Vacancies</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          
        </li>

        <!-- Menu 2 -->
        <li>
          <a href="#">
            <i class="fa fa-buysellads"></i>
            <span>Advertisement</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">6</span>
            </span>
          </a>
        </li>

        <!-- Menu 2 -->
        <li>
          <a href="#">
            <i class="fa fa-comments-o"></i>
            <span>Reviews and Comments</span>
            <span class="pull-right-container">
              <span class="label bg-blue pull-right">4</span>
            </span>
          </a>
        </li>

        <!-- Menu 2 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            <span>Statistics</span>
            <span class="pull-right-container">
              
              <span class="label bg-green pull-right">54</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="layout/top-nav.html"><i class="fa fa-circle-o"></i> <span>Usability</span> </a></li>
            <li><a href="layout/boxed.html"><i class="fa fa-circle-o"></i> <span>Completed deals</span>  <span class="label bg-green pull-right">54</span></a></li>
            <li><a href="layout/fixed.html"><i class="fa fa-circle-o"></i> <span>Financial report</span>  </a></li>
            
          </ul>
        </li>


        <!-- Menu 2 -->
        <li>
          <a href="#">
            <i class="fa fa-folder-o"></i>
            <span>Manage Pages</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
        </li>


  <!-- First menu ends -->
       <!-- Logout  -->
        <li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>