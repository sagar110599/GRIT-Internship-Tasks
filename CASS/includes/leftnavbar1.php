  <!-- partial -->
  <?php

$uid=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlp="SELECT profilePicLocation, faculty_name, admin, hod, committee,department FROM faculty_table WHERE id='$uid'";
$resultp=mysqli_query($conn,$sqlp);

$rowp=mysqli_fetch_assoc($resultp);

$profilePicLocation=$rowp['profilePicLocation'];
$faculty_name=$rowp['faculty_name'];
$hod=$rowp['hod'];
$committee=$rowp['committee'];
$admin=$rowp['admin'];
$depart=$rowp['department'];

?>
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo $_SESSION['user_image'];?>" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $faculty_name; ?>
</span>
<?php 
                  if($hod==1)
          {
            ?>
            <span class="user-role" style="font-size: 15px">H.O.D.</span>
            <?php
          }
          if($committee==1)
          {
            ?>
            <span class="user-role" style="font-size: 15px">Committee</span>
            <?php
          }
          ?>
          <?php

      $currentyear=date("Y");
      if(date("m")>=7)
        {
          $currentyear+=1;
        }
      $previousyear=$currentyear-1;

      ?>
        <?php

          if($admin==1)
          {
            ?>
              <a href="createuser.php"><input type="submit" name="submit" value="Create User" class="btn create-user-admin" /></a>
            <?php
          }
          ?>

                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="./forms.php">
                <span class="menu-title">Form</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
           <li class="sidebar-dropdown dropdown-arrow">
            <a>
              <i class="fa fa-check-circle" aria-hidden="true" style="font-size: 15px"></i>
              <span style="font-size: 15px;cursor:pointer">My Summary</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <?php
                for($a=$currentyear-1; $a>=2017; $a--)
                {
                  ?>
                  <li>
                    <a href="summary.php?id=<?php echo $_SESSION['id']; ?>&year=<?php echo $a; ?>"><?php echo ($a-1).'-'.$a; ?></a>
                  </li>
                  <?php
                }
                ?>
              </ul>
            </div>
          </li>
            
            <li class="nav-item">
              <a class="nav-link" href="./selfapprasial.php">
                <span class="menu-title">Self Appraisals</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="./selfapprasial.php">
                <span class="menu-title">CAS Guidelines</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./selfapprasial.php">
                <span class="menu-title">View Profiles of All Faculty</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <?php
          if($hod==1)
          {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="print-self-appraisals.php">
                <span class="menu-title">PRINT APPRASIALS</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>

            <?php
          }
           
          if($hod==1)
          {
            ?>
<li class="nav-item">
              <a class="nav-link" href="viewprofiles.php">
                <span class="menu-title">VIEW FACULTY PROFILES</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>

  <?php
          }
          
          if($committee==1)
          {
            ?>
<li class="nav-item">
              <a class="nav-link" href="./selfapprasial.php">
                <span class="menu-title">VIEW PROFILES</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>

          <?php }
          if($admin==1)
          {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="./selfapprasial.php">
                <span class="menu-title">ADMIN PANEl</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
 <?php }
 if($admin==1 || $hod==1 || $committee==1)
          {
            ?>
             <li class="nav-item">
              <a class="nav-link" href="./selfapprasial.php">
                <span class="menu-title">Edir Access Request</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>

          <?php }?>

             <li class="nav-item">
              <a class="nav-link" href="./selfapprasial.php">
                <span class="menu-title">Feedback / Contact us </span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
           
           <?php
          if($hod==1)
          {
           ?>
            <li class="nav-item">
              <a class="nav-link" href="./selfapprasial.php">
                <span class="menu-title">PI Data Input Portal</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <?php
          }?>
          
          </ul>
        </nav>