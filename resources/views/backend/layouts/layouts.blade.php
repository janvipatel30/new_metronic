<!DOCTYPE html>
<html lang="en">
    @include('backend.includes.header')
   <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
      <div class="page-wrapper">

        @include('backend.includes.body_header')


         <div class="clearfix"> </div>


         <div class="page-container">

            @include('backend.includes.sidebar')


            <div class="page-content-wrapper">

               <div class="page-content">

                  @include('backend.includes.breadcrumbs')

                     @yield('section')

               </div>

            </div>



         </div>


         @include('backend.includes.body_footer')

      </div>

      @include('backend.includes.footer')

   </body>
</html>
