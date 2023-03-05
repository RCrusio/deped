
<div class="sidebar">
    <div class="logo-details">
      <img src="assets/img/deped.png" style="width: 80px;" alt="">
      <span class="logo_name">SGOD</span>
    </div>
    <ul class="nav-links">
      <li>
  
        
        <div class="iocn-link">
          <a href="user_locator.php">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Form</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Form</a></li>
          <li><a href="user_locator.php">Tree Locator Form</a></li>
          <li><a href="user_inventory.php">Tree Inventory Form</a></li>
        </ul>
      
      </li>
      
      <li>  
        <div class="iocn-link">
          <a href="user_locator_tbl.php">  
          <i class='bx bx-history'></i>
          <span class="link_name">Reports</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Reports</a></li>
          <li><a href="user_locator_tbl.php">Tree Locator Report</a></li>
          <li><a href="user_inventory_tbl.php">Tree Inventory Report</a></li>
        </ul>
      </li>

      <li>
        <a href="try_table.php">
          <i class='bx bx-history'></i>
          <span class="link_name">try</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="try_table.php">try</a></li>
        </ul>
      </li>
      <li>
        <a href="user_account.php">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Account</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="user_account.php">Account</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        
      </div>
      <div class="name-job">
        <div class="profile_name"><?php echo $row["name"]; ?></div>
        <div class="job"><?php echo $row["status"]; ?></div>
      </div>
      <a href="logout.php"><i class='bx bx-log-out'></i></a>
    </div>
  </li>
</ul>
</div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
</section>

