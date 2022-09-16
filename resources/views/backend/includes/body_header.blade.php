@php
$currentRoute = Route::current()->getName();
@endphp

 <!-- BEGIN HEADER -->
 <div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
       <!-- BEGIN LOGO -->
       <div class="page-logo">
          <a href="index.html">
          <img src="{{ asset('public/backend/assets/layouts/layout/img/logo.png') }}" alt="logo" class="logo-default" /> </a>
          <div class="menu-toggler sidebar-toggler">
             <span></span>
          </div>
       </div>
       <!-- END LOGO -->
       <!-- BEGIN RESPONSIVE MENU TOGGLER -->
       <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
       <span></span>
       </a>
       <!-- END RESPONSIVE MENU TOGGLER -->
       <!-- BEGIN TOP NAVIGATION MENU -->
       <div class="top-menu">
          <ul class="nav navbar-nav pull-right">


             <!-- BEGIN USER LOGIN DROPDOWN -->
             <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
             <li class="dropdown dropdown-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img alt="" class="img-circle" src="{{ asset('public/backend/assets/layouts/layout/img/avatar3_small.jpg') }}" />
                <span class="username username-hide-on-mobile"> Nick </span>
                <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-default">
                   <li>
                      <a href="page_user_profile_1.html">
                      <i class="icon-user"></i> My Profile </a>
                   </li>
                   <li>
                      <a href="app_calendar.html">
                      <i class="icon-calendar"></i> My Calendar </a>
                   </li>

                   <li class="divider"> </li>
                   <li>
                      <a href="page_user_lock_1.html">
                      <i class="icon-lock"></i> Lock Screen </a>
                   </li>
                   <li>
                      <a href="{{ route('login') }}">
                      <i class="icon-key"></i> Log Out </a>
                   </li>
                </ul>
             </li>
             <!-- END USER LOGIN DROPDOWN -->

          </ul>
       </div>
       <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
 </div>
 <!-- END HEADER -->
