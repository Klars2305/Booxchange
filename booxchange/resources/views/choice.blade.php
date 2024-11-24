<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="{{asset('/css/choice.css')}}" >
  @vite(['resources/js/app.js'])

</head>
<body>

 <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
 
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
      </div>
    <div class="center">

        <div class="card">
          <div class="additional">
            <div class="user-card">
              <div class="icon center mb-5">
                <i class="bi bi-person-circle"></i>
              </div>
            </div>
            <div class="more-info">
              <h1>BUYER</h1>
              <div class="coords">
                <div class="button center mb-3" style="top: 40%;">
                  <a href="{{ url('/buyer')}}"><i class="bi bi-arrow-right"></i></a>
              </div>                  
              </div>
              <div class="stats">
                <div> 
                  <div class="title">Home</div>
                  <i class="bi bi-house"></i>
                </div>
                <div>
                  <div class="title">Profile</div>
                  <i class="bi bi-person"></i>
                </div>
                <div>
                  <div class="title">Transaction</div>
                  <i class="bi bi-clipboard"></i>     
                </div>
                <div>
                  <div class="title">Notifaction</div>
                  <i class="bi bi-bell"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="general">
            <h1>BUYER</h1>
            <p style="text-align: center; font-size:x-large ;">Can buy a book.</p>               
           <span class="more"></span>
          </div>
        </div>
      
        <div class="card green">
          <div class="additional">
            <div class="user-card">
              <div class="icon center mb-5">
                <i class="bi bi-bag"></i>
              </div> 
            </div>
            <div class="more-info">
              <h1>SELLER</h1>
              <div class="coords">
                <div class="button center mb-3" style="top: 40%;">
                  <a href="{{ url('/seller')}}"><i class="bi bi-arrow-right"></i></a>
                </div>             
               </div>
              <div class="stats">
                <div> 
                  <div class="title">Home</div>
                  <i class="bi bi-house"></i>
                </div>
                <div>
                  <div class="title">Profile</div>
                  <i class="bi bi-person"></i>
                </div>
                <div>
                  <div class="title">sell</div>
                  <i class="bi bi-bag"></i>
                </div>
                <div>
                  <div class="title">Trans</div>
                  <i class="bi bi-clipboard"></i>     
                </div>
                <div>
                  <div class="title">Notifaction</div>
                  <i class="bi bi-bell"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="general">
            <h1>SELLER</h1>
            <p style="text-align: center; font-size:x-large ;">Can sell a book.</p>
            <span class="more"></span>
          </div>
        </div>
      
        <div class="card gray">
            <div class="additional">
              <div class="user-card">
                <div class="icon center mb-5">
                  <i class="fa-solid fa-arrow-right-arrow-left"></i>
                </div>
              </div>
              <div class="more-info">
                <h1>TRADE</h1>
                <div class="coords">
                <div class="button center mb-3" style="top: 40%;">
                  <a href="{{ url('/trader')}}"><i class="bi bi-arrow-right"></i></a>
                </div>                                 
                </div>
                <div class="stats">
                  <div> 
                    <div class="title">Home</div>
                    <i class="bi bi-house"></i>
                  </div>
                  <div>
                    <div class="title">Profile</div>
                    <i class="bi bi-person"></i>
                  </div>
                  <div>
                    <div class="title">sell</div>
                    <i class="bi bi-bag"></i>
                  </div>
                  <div>
                    <div class="title">Trans</div>
                    <i class="bi bi-clipboard"></i>     
                  </div>
                  <div>
                    <div class="title">Notifaction</div>
                    <i class="bi bi-bell"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="general">
              <h1>TRADE</h1>
              <p style="text-align: center; font-size: x-large;">Can trade another book with other user.</p>
              <span class="more"></span>
            </div>
          </div>

      </div>    
</body>
</html>