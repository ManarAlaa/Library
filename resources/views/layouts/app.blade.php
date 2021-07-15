<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- BootStrap Core Css -->
    <link href='{{ asset("vendor/temp/bootstrap/css/bootstrap.min.css") }}' rel="stylesheet">

    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/temp/shop-homepage.css') }}" rel="stylesheet">
    
</head>
<body>
     <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">library</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
         @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            
                        @else
                            
                               <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('upload')}}"  >
                                    Upload Book
                                </a></li>
                                
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

 
        </ul>
      </div>
    </div>
  </nav>
<!-- /Navigation -->

<div class="container">

    <div class="row">
    
      <div class="col-lg-3">

        <h1 class="my-4">Categories</h1>
        
        @if (count($allcategories) > 0)
        <div class="list-group">
    @foreach($allcategories as $category)
         <a href="{{route('category',$category->id)}}" class="list-group-item">{{$category->name}}</a>
          @endforeach
                      
   
        </div>
        @endif

      </div>
      <div class="col-lg-9">
      @yield('content')
</div>
</div>
</div>
<script src="vendor/temp/jquery/jquery.min.js"></script>
  <script src="vendor/temp/bootstrap/js/bootstrap.bundle.min.js"></script>



 

   
        
<!--  <main class="py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    @yield('content')
                </div>

-->
                <!--/.col-md-9 -->
  <!--              <div class="col-md-3 text-center">
                    @if (count($allcategories) > 0)
                        <ul >
                         @foreach($allcategories as $category)
                                <li><a href="#">{{$category->name}}</a></li>
                                @endforeach
                        </ul>
                    @endif
              
                </div>
-->  <!--/.col-md-3 -->
   <!--         </div>
-->       <!--/.row -->
   <!--     </div>
        

      <!--/.Script -->
  <!---     </main>
    </div>-->
</body>
</html>
