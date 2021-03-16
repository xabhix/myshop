<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>iSkylar</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet"/> --}}
    <!-------script of order form-------------------------->
    @yield('cssforitem')
    
    <!--for shop item -->
    {{-- @if(!Auth::user()) --}}
      @yield('cssforitem')
    
      @yield('script')
    {{-- @endif --}}
    {{-- <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script> --}}
    {{-- <script type="text/javascript" src="{{asset('assets/js/addcart.js')}}"></script> --}}
    
    {{-- <script>
      $(document).ready(function(){
       
         $('#addcart').text(JSON.parse(localStorage.getItem('items')).length);
        
      })
         
  
    </script> --}}
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async src="{{asset('assets/js/sky.js')}}"></script>

    
    
    <link href="node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body class="c-app @yield('css')"> 
    
    @if(Auth::user())
      <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <div class="c-sidebar-brand d-lg-down-none">
          {{-- <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg> --}}
        
           <a href="/home"> <svg height="40" viewBox="0 0 128 128" width="40" xmlns="http://www.w3.org/2000/svg">
              <g id="Circle_Grid" data-name="Circle Grid"><circle cx="64" cy="64" fill="#ea8953" r="64"/></g><g id="icon"><g fill="#eeefee">
                <path d="m45.273 76.3-7.545-40.147h67.243a1.028 1.028 0 0 1 1 1.276l-8.123 32.688a1.03 1.03 0 0 1 -.891.775zm-4.505-37.736 6.369 35.117 48.605-5.089 7.458-30.028z"/>
                <path d="m40.719 42.429h62.467v2.411h-62.467z"/><path d="m42.39 49.598h59.011v2.411h-59.011z"/><path d="m44.07 56.766h55.555v2.411h-55.555z"/>
                <path d="m44.429 63.927h53.412v2.411h-53.412z"/><path d="m91.034 37.358h2.411v32.804h-2.411z"/><path d="m80.909 37.358h2.411v33.849h-2.411z"/>
                <path d="m70.791 37.358h2.411v34.894h-2.411z"/><path d="m60.673 37.358h2.411v35.939h-2.411z"/><path d="m50.547 37.358h2.411v36.983h-2.411z"/></g>
                <path d="m58.228 92.181a6.17 6.17 0 1 1 -6.163-6.181 6.155 6.155 0 0 1 6.163 6.181z" fill="#414451"/><path d="m52.064 94.967a2.793 2.793 0 1 1 2.787-2.787 2.8 2.8 0 0 1 -2.787 2.787z" fill="#dbd8dd"/>
                <path d="m88.241 92.181a6.17 6.17 0 1 1 -6.163-6.181 6.155 6.155 0 0 1 6.163 6.181z" fill="#414451"/><path d="m82.077 94.967a2.793 2.793 0 1 1 2.787-2.787 2.8 2.8 0 0 1 -2.787 2.787z" fill="#dbd8dd"/>
                <path d="m94.51 83.473h-51.133a5.111 5.111 0 1 1 0-10.221h.691l-6.8-39.674h-9.7a1.53 1.53 0 0 1 0-3.059h10.992a1.528 1.528 0 0 1 1.507 1.271l7.321 42.733a1.528 1.528 0 0 1 -1.507 1.788h-2.5a2.052 2.052 0 1 0 0 4.1h51.129a1.53 1.53 0 0 1 0 3.059z" fill="#eeefee"/>
                <path d="m32.291 29.876v4.209a.219.219 0 0 1 -.22.22h-7.746a2.324 2.324 0 0 1 -2.325-2.324 2.325 2.325 0 0 1 2.325-2.325h7.746a.22.22 0 0 1 .22.22z" fill="#575b6d"/></g>
            </svg>
          </a>
          
        </div>
        <ul class="c-sidebar-nav">
          <li class="c-sidebar-nav-item">
              {{-- <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
              </svg>  --}}
           <a class="c-sidebar-nav-link" href="{{url('/')}}">
              <svg class="c-sidebar-nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="18" height="18"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg>
              <span class="c-sidebar-nav-icon"></span> Dashboard
            </a>
          </li>
          <li class="c-sidebar-nav-title">Theme</li>
          
          {{-- <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="/logout"><span class="c-sidebar-nav-icon">Logout</a>
            </li> --}}
              {{-- <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-drop"></use>
              </svg>--}} 
              
            
              <li class="c-sidebar-nav-item">
              <a class="c-sidebar-nav-link" href="{{"/profile/edit/". Auth::user()->id}}">
                
                <svg  class="c-sidebar-nav-icon" id="Solid" height="512" viewBox="0 0 512 512" width="18" height="18" xmlns="http://www.w3.org/2000/svg"><path d="m255.997 477.327 47.003-10.847-36.157-36.156z"/><path d="m246.722 446.363 7.777-33.7c.019-.083.047-.161.069-.242.037-.139.074-.278.118-.415s.088-.252.135-.376.088-.234.138-.349c.059-.137.124-.27.19-.4.049-.1.1-.195.151-.29.077-.14.159-.274.243-.408.054-.085.108-.169.165-.252.092-.134.189-.263.289-.39.061-.079.122-.157.186-.233.1-.123.213-.241.323-.357.045-.047.085-.1.131-.144l104.805-104.807c-29.258-60.181-83.362-96-145.442-96-45.522 0-87.578 19.485-118.421 54.865-31.062 35.633-48.565 85.3-49.536 140.291 18.364 9.261 93.769 44.844 167.957 44.844a298.024 298.024 0 0 0 30.722-1.637z"/><path d="m270.461 342.863h176v64h-176z" transform="matrix(.707 -.707 .707 .707 -160.078 363.266)"/><circle cx="216" cy="112" r="80"/><path d="m464 301.324a32 32 0 0 0 -54.627-22.624l45.254 45.254a31.785 31.785 0 0 0 9.373-22.63z"/></svg>
                <span class="c-sidebar-nav-icon"></span>  Edit profile</a>
              </li>
            @if(Auth::user()->role->role=="user")
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{"/ordereditems".'/'. Auth::user()->id}}">
                  
                 
                  <svg class="c-sidebar-nav-icon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  width="24" height="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
                  <span class="c-sidebar-nav-icon"></span>My order</a>
                
              </li>
            @endif 


              {{-- <svg class="c-sidebar-nav-icon"> --}}
                {{-- <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-pencil"></use> --}}
              {{-- </svg>  --}}
              
            

        @if(Auth::user()->role->role!=="user")  
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/profile/itemform">
                  
                  <svg class="c-sidebar-nav-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>  
                  
                <span class="c-sidebar-nav-icon"></span>Add Item</a></li>
          
                {{-- <svg class="c-sidebar-nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-pencil"></use>
                </svg>  --}}

          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/profile/itemtable">
                
            <svg  class="c-sidebar-nav-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/></svg>    

               {{-- <svg class="c-sidebar-nav-icon"> </svg>  --}}
               <span class="c-sidebar-nav-icon"></span> Show Item Table</a></li>
          
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/profile/itemcategory">
                {{-- <svg class="c-sidebar-nav-icon">
                      
                </svg>  --}}

              <svg class="c-sidebar-nav-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                
              <span class="c-sidebar-nav-icon"></span> Add Item Category</a></li>



              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href={{"/orderstatus"}}>
                  
                  <svg class="c-sidebar-nav-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9h-4v4h-2v-4H9V9h4V5h2v4h4v2z"/></svg>
                  
                  <span class="c-sidebar-nav-icon"></span>Order Status</a>
                
              </li>

        @endif
        

        <li class="c-sidebar-nav-item">
          {{-- <a class="c-sidebar-nav-link" href="/logout">
            
          <svg class="c-sidebar-nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="18" height="18"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>
          <span class="c-sidebar-nav-icon"></span>Logout</a> --}}

          <a class="dropdown-item c-sidebar-nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <svg class="c-sidebar-nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="18" height="18"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>
              <span class="c-sidebar-nav-icon"></span>{{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
              @csrf
          </form>
        </li>



          {{-- <li class="c-sidebar-nav-title">Components</li>
          <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
              </svg> Base</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"><span class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/cards.html"><span class="c-sidebar-nav-icon"></span> Cards</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/carousel.html"><span class="c-sidebar-nav-icon"></span> Carousel</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/collapse.html"><span class="c-sidebar-nav-icon"></span> Collapse</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/forms.html"><span class="c-sidebar-nav-icon"></span> Forms</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/jumbotron.html"><span class="c-sidebar-nav-icon"></span> Jumbotron</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/list-group.html"><span class="c-sidebar-nav-icon"></span> List group</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/navs.html"><span class="c-sidebar-nav-icon"></span> Navs</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/pagination.html"><span class="c-sidebar-nav-icon"></span> Pagination</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/popovers.html"><span class="c-sidebar-nav-icon"></span> Popovers</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/progress.html"><span class="c-sidebar-nav-icon"></span> Progress</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/scrollspy.html"><span class="c-sidebar-nav-icon"></span> Scrollspy</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/switches.html"><span class="c-sidebar-nav-icon"></span> Switches</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tables.html"><span class="c-sidebar-nav-icon"></span> Tables</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tabs.html"><span class="c-sidebar-nav-icon"></span> Tabs</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tooltips.html"><span class="c-sidebar-nav-icon"></span> Tooltips</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-cursor"></use>
              </svg> Buttons</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span> Buttons</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/button-group.html"><span class="c-sidebar-nav-icon"></span> Buttons Group</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/dropdowns.html"><span class="c-sidebar-nav-icon"></span> Dropdowns</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/brand-buttons.html"><span class="c-sidebar-nav-icon"></span> Brand Buttons</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="charts.html">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chart-pie"></use>
              </svg> Charts</a></li>
          <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-star"></use>
              </svg> Icons</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-success">Free</span></a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
              </svg> Notifications</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/alerts.html"><span class="c-sidebar-nav-icon"></span> Alerts</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/badge.html"><span class="c-sidebar-nav-icon"></span> Badge</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/modals.html"><span class="c-sidebar-nav-icon"></span> Modals</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="widgets.html">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-calculator"></use>
              </svg> Widgets<span class="badge badge-info">NEW</span></a></li>
          <li class="c-sidebar-nav-divider"></li>
          <li class="c-sidebar-nav-title">Extras</li>
          <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-star"></use>
              </svg> Pages</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="login.html" target="_top">
                  <svg class="c-sidebar-nav-icon">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Login</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="register.html" target="_top">
                  <svg class="c-sidebar-nav-icon">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Register</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="404.html" target="_top">
                  <svg class="c-sidebar-nav-icon">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                  </svg> Error 404</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="500.html" target="_top">
                  <svg class="c-sidebar-nav-icon">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                  </svg> Error 500</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="https://coreui.io" target="_top">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-cloud-download"></use>
              </svg> Download CoreUI</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="https://coreui.io/pro/" target="_top">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-layers"></use>
              </svg> Try CoreUI<strong>PRO</strong></a></li> --}}
        </ul>
        
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized">
          
        </button>
      
      </div>
    {{-- @endif --}}
    <div class="c-wrapper c-fixed-components" id="app">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
          <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
              <svg class="c-icon c-icon-lg">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
              </svg>
          </button>
                <a class="c-header-brand d-lg-none" href="#">
                  <svg width="118" height="46" alt="CoreUI Logo">
                  <use xlink:href="assets/brand/coreui.svg#full"></use>
                  </svg></a>
                  <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button"  data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                    {{-- <svg class="c-icon c-icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg> --}}
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <title>menu</title>
                      <path d="M3.75 4.5h16.5v1.5h-16.5v-1.5z"></path>
                      <path d="M3.75 11.25h16.5v1.5h-16.5v-1.5z"></path>
                      <path d="M3.75 18h16.5v1.5h-16.5v-1.5z"></path>
                      </svg>

                  </button>
                          <ul class="c-header-nav d-md-down-none">
                              <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="/home">Dashboard</a></li>
                              <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
                              <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
                          </ul>
        <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item d-md-down-none mx-2">

          <li class="nav-item">
            <a class="nav-link" href="/cart" > 
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px"><path d="M0 0h24v24H0zm18.31 6l-2.76 5z" fill="none"/>
              <path d="M11 9h2V6h3V4h-3V1h-2v3H8v2h3v3zm-4 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-9.83-3.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4h-.01l-1.1 2-2.76 5H8.53l-.13-.27L6.16 6l-.95-2-.94-2H1v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.13 0-.25-.11-.25-.25z"/>
              </svg>
              <span id="addcart" class= "badge badge-pill badge-secondary"style="position: absolute;top:0.2rem;right:9rem; background-color:blue"></span>
    
            </a>
          </li>
         





          <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">


        
            <svg href="#" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            {{-- <title>Notification</title> --}}
            <path d="M21.106 16.339l-2.047-3.779v-3.935c0-3.929-3.196-7.125-7.125-7.125s-7.125 3.196-7.125 7.125v3.935l-2.047 3.779c-0.085 0.155-0.136 0.339-0.136 0.536 0 0.621 0.504 1.125 1.125 1.125h4.075c-0.011 0.124-0.017 0.249-0.017 0.375 0 2.278 1.847 4.125 4.125 4.125s4.125-1.847 4.125-4.125v0c0-0.126-0.006-0.251-0.017-0.375h4.075c0 0 0 0 0 0 0.621 0 1.125-0.504 1.125-1.125 0-0.196-0.050-0.381-0.139-0.542l0.003 0.006zM14.559 18.375c0 0.001 0 0.001 0 0.002 0 1.45-1.175 2.625-2.625 2.625s-2.625-1.175-2.625-2.625c0-0.133 0.010-0.264 0.029-0.392l-0.002 0.014h5.196c0.017 0.113 0.027 0.243 0.027 0.375v0zM4.381 16.5l1.928-3.56v-4.315c0-3.107 2.518-5.625 5.625-5.625s5.625 2.518 5.625 5.625v0 4.315l1.928 3.56z"></path>
            </svg>
            <!--dropdown for notification --------------------  -->

        <div  id="dropdown" class="dropdown-menu dropdown-menu-right pt-0 ">
          <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
            <a class="dropdown-item" href="#">
          {{-- <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
          </svg>  --}}
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
            {{-- <title>Notification</title> --}}
            <path d="M21.106 16.339l-2.047-3.779v-3.935c0-3.929-3.196-7.125-7.125-7.125s-7.125 3.196-7.125 7.125v3.935l-2.047 3.779c-0.085 0.155-0.136 0.339-0.136 0.536 0 0.621 0.504 1.125 1.125 1.125h4.075c-0.011 0.124-0.017 0.249-0.017 0.375 0 2.278 1.847 4.125 4.125 4.125s4.125-1.847 4.125-4.125v0c0-0.126-0.006-0.251-0.017-0.375h4.075c0 0 0 0 0 0 0.621 0 1.125-0.504 1.125-1.125 0-0.196-0.050-0.381-0.139-0.542l0.003 0.006zM14.559 18.375c0 0.001 0 0.001 0 0.002 0 1.45-1.175 2.625-2.625 2.625s-2.625-1.175-2.625-2.625c0-0.133 0.010-0.264 0.029-0.392l-0.002 0.014h5.196c0.017 0.113 0.027 0.243 0.027 0.375v0zM4.381 16.5l1.928-3.56v-4.315c0-3.107 2.518-5.625 5.625-5.625s5.625 2.518 5.625 5.625v0 4.315l1.928 3.56z"></path>
            </svg>Updates<span class="badge badge-info ml-auto">42</span></a>
          {{-- <a class="dropdown-item" href="#">
          <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
          </svg> Messages<span class="badge badge-success ml-auto">42</span></a> --}}
          {{-- <a class="dropdown-item" href="#">
          <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
          </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a> --}}
          {{-- <a class="dropdown-item" href="#">
          <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
          </svg> Comments<span class="badge badge-warning ml-auto">42</span></a> --}}
          <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
          <a class="dropdown-item" href="/profile">
          {{-- <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
          </svg>  --}}
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
          Profile</a>
          
          <a class="dropdown-item" href="#">
          {{-- <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
          </svg> --}}

           
          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><path d="M0,0h24v24H0V0z" fill="none"/><path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/></g></svg>Settings</a>
          {{-- <a class="dropdown-item" href="#">
          <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
          </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a> --}}
          {{-- <a class="dropdown-item" href="#">
          <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
          </svg> Projects<span class="badge badge-primary ml-auto">42</span></a> --}}
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
          {{-- <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
          </svg>  --}}

          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
          
          Lock Account</a>
        
        
        <li class="c-header-nav-item dropdown show">
          <a class="c-header-nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <div class="c-avatar" ><img class="c-avatar-img" href="#dropdown" src={{asset('image/'.Auth::user()->image)}} alt="user@email.com" style="border-radius:50%;width:38px;height:38px"></div>
          </a>
          <div  id="dropdown" class="dropdown-menu dropdown-menu-right pt-0 ">
          <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
          <a class="dropdown-item" href="#">
          {{-- <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
          </svg>  --}}
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
            {{-- <title>Notification</title> --}}
            <path d="M21.106 16.339l-2.047-3.779v-3.935c0-3.929-3.196-7.125-7.125-7.125s-7.125 3.196-7.125 7.125v3.935l-2.047 3.779c-0.085 0.155-0.136 0.339-0.136 0.536 0 0.621 0.504 1.125 1.125 1.125h4.075c-0.011 0.124-0.017 0.249-0.017 0.375 0 2.278 1.847 4.125 4.125 4.125s4.125-1.847 4.125-4.125v0c0-0.126-0.006-0.251-0.017-0.375h4.075c0 0 0 0 0 0 0.621 0 1.125-0.504 1.125-1.125 0-0.196-0.050-0.381-0.139-0.542l0.003 0.006zM14.559 18.375c0 0.001 0 0.001 0 0.002 0 1.45-1.175 2.625-2.625 2.625s-2.625-1.175-2.625-2.625c0-0.133 0.010-0.264 0.029-0.392l-0.002 0.014h5.196c0.017 0.113 0.027 0.243 0.027 0.375v0zM4.381 16.5l1.928-3.56v-4.315c0-3.107 2.518-5.625 5.625-5.625s5.625 2.518 5.625 5.625v0 4.315l1.928 3.56z"></path>
            </svg>Updates<span class="badge badge-info ml-auto">42</span></a>
         
          <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
          <a class="dropdown-item" href="/profile">
          {{-- <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
          </svg>  --}}
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
          Profile</a>
          
          <a class="dropdown-item" href="#">
          {{-- <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
          </svg> --}}

           
          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><path d="M0,0h24v24H0V0z" fill="none"/><path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/></g></svg>Settings</a>
         
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
          {{-- <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
          </svg>  --}}

          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
          
          Lock Account</a>
          {{-- <a class="dropdown-item" href="/logout">
          {{-- <svg class="c-icon mr-2">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
          </svg>  --}}
          {{-- <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg> --}}

          {{-- Logout</a> --}}
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
            {{ __('Logout') }}
            
             
            
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>


          </div>
        </li>
        </ul>
        <div class="c-subheader px-3">
        
        <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a >Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        
        </ol>
        </div>
        </header>
      @endif
      <main class="c-main">
        <div class="container-fluid">
          <div class="fade-in">
         
          @yield('content')
          </div>
        </div>
      </main>
    </div>
  {{-- </div> --}}
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('assets/js/coreui.bundle.min.js')}}"></script>
    <!--[if IE]><!-->
    <script src="{{asset('assets/js/svgxuse.min.js')}}"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('assets/js/bundle.js')}}"></script>
    <script src="{{asset('assets/js/utils.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    {{-- <script src="{{asset('js/app.js') }}" defer></script> --}}
    @yield('scriptforvue')
    @yield('scriptfororderform')

  </body>
</html>