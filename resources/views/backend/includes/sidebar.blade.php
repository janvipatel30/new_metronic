@php
$currentRoute = Route::current()->getName();
@endphp
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
       <!-- BEGIN SIDEBAR MENU -->
       <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
       <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
       <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
       <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
       <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
       <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
       <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
          <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
          <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
          <li class="sidebar-toggler-wrapper hide">
             <div class="sidebar-toggler">
                <span></span>
             </div>
          </li>
          <!-- END SIDEBAR TOGGLER BUTTON -->
          <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

          <li class="nav-item start {{ $currentRoute  ==  "home"   ? 'active' : '' }} open">
             <a href="{{route('home')}}" class="nav-link nav-toggle">
             <i class="icon-home"></i>
             <span class="title">Dashboard</span>
             <span class="selected"></span>
             </a>

          </li>

          <li class="nav-item start {{ $currentRoute  ==  "support-staff"  || $currentRoute  ==  "add-support-staff" ? 'active' : '' }} open">
            <a href="{{route('support-staff')}}" class="nav-link nav-toggle">
            <i class="icon-user"></i>
            <span class="title">Support Staff</span>
            <span class="selected"></span>
            </a>

         </li>


       </ul>
       <!-- END SIDEBAR MENU -->
       <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
 </div>
 <!-- END SIDEBAR -->
