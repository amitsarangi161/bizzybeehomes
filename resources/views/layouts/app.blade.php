<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      .bg-navy{
        background-color: #bbb; 
      }
    </style>
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>{{ config('app.name', 'AdminPanel') }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('template/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('template/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('template/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('template/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('template/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('template/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('template/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('template/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('template/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/multiselect.css')}}" rel="stylesheet">
    <link href="{{ asset('template/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">

    <script src="{{ asset('template/vendors/switchery/dist/switchery.min.js')}}"></script>
    


  
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>ADMIN PANEL</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('template/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="/home"><i class="fa fa-dashboard"></i>Dashboard<span class="label label-success pull-right"></span></a></li>


                  <li class="{{ Request::is('pages*') ? 'active' : '' }}"><a><i class="fa fa-file"></i>PAGES<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li class="{{ Request::is('pages/contactus') ? 'active' : '' }}"><a href="/pages/contactus">CONTACT US</a></li>

                      <li class="{{ Request::is('pages/aboutus') ? 'active' : '' }}"><a href="/pages/aboutus">ABOUT US</a></li>

                      <li class="{{ Request::is('pages/termsandconditions') ? 'active' : '' }}"><a href="/pages/termsandconditions">TERMS AND CONDITIONS</a></li>
                     
                    </ul>
                  </li>

                  <li class="{{ Request::is('queries*') ? 'active' : '' }}"><a><i class="fa fa-question-circle"></i>QUERY<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li class="{{ Request::is('queries/allquery') ? 'active' : '' }}"><a href="/queries/allquery">ALL QUERY</a></li>
                     
                    </ul>
                  </li>
                    <li class="{{ Request::is('subscribers*') ? 'active' : '' }}"><a><i class="fa fa-archive"></i>SUBSCRIBERS<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li class="{{ Request::is('subscribers/allsubscribers') ? 'active' : '' }}"><a href="/subscribers/allsubscribers">ALL SUBSCRIBERS</a></li>
                     
                    </ul>
                  </li>

                   
                  
                 
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
               </form>
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('template/images/img.jpg')}}" alt="">{{ Auth::user()->usertype }}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  
                    <a class="dropdown-item"  href="{{ route('logout') }}" onClick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                   </form>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{ asset('template/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{ asset('template/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
      
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            BizzybeeHomes<a href="http://bizzybeehomes.com">BizzybeeHomes</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

 


    <!-- jQuery -->
    <script src="{{ asset('template/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('template/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('template/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('template/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js')}} -->
    <script src="{{ asset('template/vendors/Chart.js')}}"></script>
    <!-- gauge.js')}} -->
    <script src="{{ asset('template/vendors/gauge.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('template/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset('template/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('template/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('template/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('template/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('template/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('template/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('template/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('template/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset('template/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('template/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('template/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('template/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('template/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('template/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('template/build/js/custom.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
  $('.select2').select2({});
  
    $('.datatable').DataTable({

    });

    $('.multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
} );

CKEDITOR.replace( 'editor' );CKEDITOR.replace( 'editor1' );
CKEDITOR.on( 'instanceReady', function( evt )
  {
    var editor = evt.editor;
   
   editor.on('change', function (e) { 
    var contentSpace = editor.ui.space('contents');
    var ckeditorFrameCollection = contentSpace.$.getElementsByTagName('iframe');
    var ckeditorFrame = ckeditorFrameCollection[0];
    var innerDoc = ckeditorFrame.contentDocument;
    var innerDocTextAreaHeight = $(innerDoc.body).height();
    console.log(innerDocTextAreaHeight);
    });
 });


    </script>
	
  </body>
</html>