<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
    <a class="nav-link " href="<?php $url ?>/">
      <i class="bi bi-grid"></i>
      <span>Map</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="<?php $url ?>/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php $url?>/datatables">
          <i class="bi bi-circle"></i><span>Emergency</span>
        </a>
      </li>
            </ul>
  </li><!-- End Components Nav -->
</ul>

</aside><!-- End Sidebar-->
