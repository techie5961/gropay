<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png?v=1.2') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg?v=1.2') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico?v=1.2') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png?v=1.2') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest?v=1.2') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Users | @yield('title')</title>
    <style>
      :root{
        --primary-brighter:rgb(245, 245, 135);
        --primary-bright:rgb(255, 255, 67);
        --gradient:linear-gradient(to right,var(--primary),orange);
        --gradient-text:navy;
      
      }
      .nav-profile{
        background-color: var(--bg);
background-color: #cccccc;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 1200'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='0' y2='100%25' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23f5f5f5'/%3E%3Cstop offset='0.02' stop-color='%23cccccc'/%3E%3Cstop offset='0.02' stop-color='%23c3c3c3'/%3E%3Cstop offset='0.032' stop-color='%23cccccc'/%3E%3Cstop offset='0.032' stop-color='%23bbbbbb'/%3E%3Cstop offset='0.056' stop-color='%23cccccc'/%3E%3Cstop offset='0.056' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.07' stop-color='%23cccccc'/%3E%3Cstop offset='0.07' stop-color='%23a0a0a0'/%3E%3Cstop offset='0.1' stop-color='%23cccccc'/%3E%3Cstop offset='0.1' stop-color='%23e7e7e7'/%3E%3Cstop offset='0.126' stop-color='%23cccccc'/%3E%3Cstop offset='0.126' stop-color='%23bababa'/%3E%3Cstop offset='0.142' stop-color='%23cccccc'/%3E%3Cstop offset='0.142' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.159' stop-color='%23cccccc'/%3E%3Cstop offset='0.159' stop-color='%23b0b0b0'/%3E%3Cstop offset='0.17' stop-color='%23cccccc'/%3E%3Cstop offset='0.17' stop-color='%23cdcdcd'/%3E%3Cstop offset='0.197' stop-color='%23cccccc'/%3E%3Cstop offset='0.197' stop-color='%23b5b5b5'/%3E%3Cstop offset='0.218' stop-color='%23cccccc'/%3E%3Cstop offset='0.218' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.239' stop-color='%23cccccc'/%3E%3Cstop offset='0.239' stop-color='%23cecece'/%3E%3Cstop offset='0.254' stop-color='%23cccccc'/%3E%3Cstop offset='0.254' stop-color='%23cecece'/%3E%3Cstop offset='0.283' stop-color='%23cccccc'/%3E%3Cstop offset='0.283' stop-color='%23cccccc'/%3E%3Cstop offset='0.294' stop-color='%23cccccc'/%3E%3Cstop offset='0.294' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.305' stop-color='%23cccccc'/%3E%3Cstop offset='0.305' stop-color='%234e4e4e'/%3E%3Cstop offset='0.332' stop-color='%23cccccc'/%3E%3Cstop offset='0.332' stop-color='%23909090'/%3E%3Cstop offset='0.346' stop-color='%23cccccc'/%3E%3Cstop offset='0.346' stop-color='%23c5c5c5'/%3E%3Cstop offset='0.362' stop-color='%23cccccc'/%3E%3Cstop offset='0.362' stop-color='%23979797'/%3E%3Cstop offset='0.381' stop-color='%23cccccc'/%3E%3Cstop offset='0.381' stop-color='%23c2c2c2'/%3E%3Cstop offset='0.415' stop-color='%23cccccc'/%3E%3Cstop offset='0.415' stop-color='%23a8a8a8'/%3E%3Cstop offset='0.428' stop-color='%23cccccc'/%3E%3Cstop offset='0.428' stop-color='%23525252'/%3E%3Cstop offset='0.442' stop-color='%23cccccc'/%3E%3Cstop offset='0.442' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.456' stop-color='%23cccccc'/%3E%3Cstop offset='0.456' stop-color='%23a9a9a9'/%3E%3Cstop offset='0.498' stop-color='%23cccccc'/%3E%3Cstop offset='0.498' stop-color='%23dfdfdf'/%3E%3Cstop offset='0.511' stop-color='%23cccccc'/%3E%3Cstop offset='0.511' stop-color='%23cecece'/%3E%3Cstop offset='0.532' stop-color='%23cccccc'/%3E%3Cstop offset='0.532' stop-color='%23cecece'/%3E%3Cstop offset='0.541' stop-color='%23cccccc'/%3E%3Cstop offset='0.541' stop-color='%23bababa'/%3E%3Cstop offset='0.56' stop-color='%23cccccc'/%3E%3Cstop offset='0.56' stop-color='%23f0f0f0'/%3E%3Cstop offset='0.581' stop-color='%23cccccc'/%3E%3Cstop offset='0.581' stop-color='%23aaaaaa'/%3E%3Cstop offset='0.6' stop-color='%23cccccc'/%3E%3Cstop offset='0.6' stop-color='%23d7d7d7'/%3E%3Cstop offset='0.618' stop-color='%23cccccc'/%3E%3Cstop offset='0.618' stop-color='%23cacaca'/%3E%3Cstop offset='0.656' stop-color='%23cccccc'/%3E%3Cstop offset='0.656' stop-color='%23cccccc'/%3E%3Cstop offset='0.679' stop-color='%23cccccc'/%3E%3Cstop offset='0.679' stop-color='%23ababab'/%3E%3Cstop offset='0.689' stop-color='%23cccccc'/%3E%3Cstop offset='0.689' stop-color='%23d1d1d1'/%3E%3Cstop offset='0.720' stop-color='%23cccccc'/%3E%3Cstop offset='0.720' stop-color='%23bbbbbb'/%3E%3Cstop offset='0.734' stop-color='%23cccccc'/%3E%3Cstop offset='0.734' stop-color='%23cbcbcb'/%3E%3Cstop offset='0.748' stop-color='%23cccccc'/%3E%3Cstop offset='0.748' stop-color='%236b6b6b'/%3E%3Cstop offset='0.764' stop-color='%23cccccc'/%3E%3Cstop offset='0.764' stop-color='%23989898'/%3E%3Cstop offset='0.788' stop-color='%23cccccc'/%3E%3Cstop offset='0.788' stop-color='%23dcdcdc'/%3E%3Cstop offset='0.808' stop-color='%23cccccc'/%3E%3Cstop offset='0.808' stop-color='%238f8f8f'/%3E%3Cstop offset='0.831' stop-color='%23cccccc'/%3E%3Cstop offset='0.831' stop-color='%23cbcbcb'/%3E%3Cstop offset='0.856' stop-color='%23cccccc'/%3E%3Cstop offset='0.856' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.872' stop-color='%23cccccc'/%3E%3Cstop offset='0.872' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.894' stop-color='%23cccccc'/%3E%3Cstop offset='0.894' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.914' stop-color='%23cccccc'/%3E%3Cstop offset='0.914' stop-color='%23c0c0c0'/%3E%3Cstop offset='0.942' stop-color='%23cccccc'/%3E%3Cstop offset='0.942' stop-color='%23cdcdcd'/%3E%3Cstop offset='0.957' stop-color='%23cccccc'/%3E%3Cstop offset='0.957' stop-color='%237f7f7f'/%3E%3Cstop offset='0.973' stop-color='%23cccccc'/%3E%3Cstop offset='0.973' stop-color='%23cdcdcd'/%3E%3Cstop offset='1' stop-color='%23cccccc'/%3E%3Cstop offset='1' stop-color='%23e6e6e6'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' x='0' y='0' width='100%25' height='100%25'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
color:black;
}
/* body{
  
   background-color: var(--bg);
  
 
} */
div.menu.active svg.menu.open{
    display:none;
}
  
div.menu svg.menu.close{
    display:none;
}
div.menu.active svg.menu.close{
    display:flex;
}
  body{
  background-color: var(--bg);
  color:var(--text);

  
  }
   .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
  .menu-icon,.close-icon{
    background:var(--primary);
    color:var(--gradient-text);
    border-radius:10px !important;
    height:40px;
    width:40px;
  }
  header{
    position:fixed;
    top:0;
    left:0;
    right:0;
    padding:10px;
    display:flex;
    flex-direction:row;
    align-items:center;
    gap:10px;
    z-index:4000;
    backdrop-filter:blur(50px);
    -webkit-backdrop-filter:blur(50px);

  }
  .pc-footer-links{
    display:none !important;
  }
  .mobile-footer-links{
    display:flex;
    flex-direction:column;
  }
 
  footer{
    border-top:1px solid var(--bg-lighter);
  }
  .payment-patners{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:10px;
    place-items:center;
  
  }
  .patner{
    background:var(--bg-light);
    border-radius:5px;
    padding:10px;
    width:fit-content !important;
  }
  section.nav{
    display:none;
    opacity:0;
  }
section.nav.active{
  display:flex;
  animation:opaq-in 1s ease forwards;
}
@keyframes opaq-in{
  0%{
    transform:translateY(20px);
    opacity:0;
  }
  100%{
     transform:translateY(0);
    opacity:1;
  }
}
.mobile-nav{
  backdrop-filter:blur(50px);
  -webkit-backdrop-filter:blur(50px);
  background:var(--bg);
  position:fixed;
  top:0;
  left:0;
  bottom:0;
  right:0;
  padding:20px;
  display:flex;
  flex-direction:column;
  gap:20px !important;
 


 
}
.mobile-nav nav{
   display:flex;
  flex-direction:column;
  gap:10px !important;
 
}
.mobile-nav a{
  font-size:1.2rem;
}
.mobile-nav svg{
  height:20px;
  width:20px;

}
.pc-nav svg{
  height:20px;
  width:20px;

}
main,header{
   background-image:url('{{ asset('images/MYBO8726.JPG') }}');
 
   background-size:cover;
   background-position:center;
}

   @media(min-width:800px){
    .mobile-footer-links{
      display:none !important;
    }
    .pc-footer-links{
    display:grid !important;
    grid-template-columns: repeat(6,1fr);
    gap:10px;
    
  }

    .pc-footer-links a{
      padding:5px 20px;
      background:var(--bg-light) !important;
      border:1px solid var(--bg-lighter);
      display:flex;
      align-items:center;
      justify-content:center;
    

    }
    .payment-patners{
      padding-left:15vw;
      padding-right:15vw;
    }
    section.mobile-nav{
      display:none;
    }
   }
  
    
    </style>
    @yield('css')
</head>

<body class="overflow-hidden">
   <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
  <svg fill="currentColor" width="100" height="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_g88x" begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="0;spinner_yOmw.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_yOmw" begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_g88x.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path></svg>
</div>
 <header>
       
        <img  onclick="window.location.href='{{ url('/') }}'" src="{{ asset('favicon/logo.png?v=1.2') }}" alt="Logo" class="h-30 pc-pointer">
         <div onclick="
      //  if(document.querySelector('section.nav').classList.contains('active')){
     
      //   document.querySelector('section.nav').classList.remove('active');
      //   this.classList.remove('active');
         
      //  }else{
       
        document.querySelector('section.nav').classList.add('active');
        // this.classList.add('active');
         
      //  }

            " class="h-40 m-left-auto menu-icon menu w-40 column pc-display-none justify-center circle p-10">
          
          <svg class="menu open" width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 7C3.25 6.58579 3.58579 6.25 4 6.25H20C20.4142 6.25 20.75 6.58579 20.75 7C20.75 7.41421 20.4142 7.75 20 7.75H4C3.58579 7.75 3.25 7.41421 3.25 7ZM3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12ZM3.25 17C3.25 16.5858 3.58579 16.25 4 16.25H9C9.41421 16.25 9.75 16.5858 9.75 17C9.75 17.4142 9.41421 17.75 9 17.75H4C3.58579 17.75 3.25 17.4142 3.25 17Z" fill="CurrentColor"></path>
</svg>
    <svg class="menu close" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z"></path></svg>

        </div>
       
        {{-- PC NAV --}}
    <div class="row pc-nav m-left-auto mobile-display-none align-center g-10">
        {{-- NEW NAV LINK --}}
            <a class="w-full clip-10 br-10 bold p-10 font-1 w-full g-5 row align-center no-u c-white" href="{{ url('/') }}">
           


              <span class="m-top-auto">  Home</span>
            </a>
            {{-- NEW NAV LINK --}}
            <a href="{{ url('/about') }}" class="w-full clip-10 br-10 g-5 bold p-10 font-1 w-full row align-center no-u c-inherit">
            


              <span class="m-top-auto"> About Us</span>
            </a>
            {{-- NEW NAV LINK --}}
             <a href="{{ url('/coupon/checker') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
         


              <span class="m-top-auto"> Check Coupon</span>
            </a>
              <a href="{{ url('/terms') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
          

     
              <span class="m-top-auto"> Terms & Conditions</span>
            </a>
             <a href="{{ url('/coupon') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
          


              <span class="m-top-auto"> Buy Coupon</span>
            </a>
              <a href="{{ url('/earners/top') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                



              <span class="m-top-auto">Top Earners</span>
            </a>
          @if (!Auth::guard('users')->check())
                <a href="{{ url('/login') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                  

              <span class="m-top-auto"> Login</span>
            </a>
          @else
                <a href="{{ url('/users/dashboard') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
          
              <span class="m-top-auto"> Dashboard</span>
            </a>
          @endif
    </div>
    </header>
    {{-- MOBILE NAV --}}
     <section class="nav mobile-nav backdrop-blur-5 high pos-fixed bg w-full top-0 left-0 right-0">
      <div class="w-full row space-between g-10 align-center">
        <img src="{{ asset('favicon/logo.png?v=1.2') }}" alt="" class="h-100">
        <div onclick="this.closest('.mobile-nav').classList.remove('active')" class="close-icon column justify-center primary-text">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
          
        </div>
      </div>
        <nav class="c-white">
          
          {{-- NEW NAV LINK --}}
            <a class="w-full clip-10 br-10 bold p-10 font-1 w-full g-5 row align-center no-u c-white" href="{{ url('/') }}">
           

              <span class="m-top-auto">  Home</span>
            </a>
            {{-- NEW NAV LINK --}}
            <a href="{{ url('/about') }}" class="w-full clip-10 br-10 g-5 bold p-10 font-1 w-full row align-center no-u c-inherit">
            


              <span class="m-top-auto"> About Us</span>
            </a>
            {{-- NEW NAV LINK --}}
             <a href="{{ url('/coupon/checker') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
         


              <span class="m-top-auto"> Check Coupon</span>
            </a>
            {{-- NEW NAV LINK --}}
              <a href="{{ url('/terms') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
          
     
              <span class="m-top-auto">Terms & Conditions</span>
            </a>
             <a href="{{ url('/coupon') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
               



              <span class="m-top-auto"> Buy Coupon</span>
            </a>
              <a href="{{ url('/earners/top') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                



              <span class="m-top-auto">Top Earners</span>
            </a>
          @if (!Auth::guard('users')->check())
                <a href="{{ url('/login') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                   

              <span class="m-top-auto"> Login</span>
            </a>
          @else
                <a href="{{ url('/users/dashboard') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
           

              <span class="m-top-auto"> Dashboard</span>
            </a>
          @endif
       
        </nav>
    </section>
    
    
    <main class="p-10 pc-x-padding c-inherit">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" style="background:white;color:black;" class="child">

  </div>
</section>
<section onclick="HideSlideUp()" class="slideup">
  <div onclick="event.stopPropagation()" class="child bg-secondary-dark">@yield('slideup_child')</div>
</section>
    </main>
   <footer class="w-full pc-align-center c-white bg p-10 column g-10">
   <img src="{{ asset('favicon/logo-white.png?v=1.1') }}" alt="" class="grid-full w-100 pc-m-x-auto">
   <span class="font-1 grid-full">Your all-in-one platform for earning,gaming, and financial growth.Join our global community today.

</span>

 <div class="mobile-footer-links g-5">
    <strong style="border-bottom:2px solid var(--primary-bright)" class="font-1 p-y-5 w-fit">Quick LInks</strong>
   

 <a href="{{ url('about') }}" class="no-u c-white">About Us</a>
 <a href="{{ url('vendors') }}" class="no-u c-white">Buy Coupon Code</a>
 <a href="{{ url('terms') }}" class="no-u c-white">Terms & Conditions</a>
 <a href="{{ url('register') }}" class="no-u c-white">Get Started</a>
 <a href="{{ url('login') }}" class="no-u c-white">Sign In</a>
 
 </div>

 <div class="pc-footer-links g-5">
  
    <strong style="border-bottom:2px solid var(--primary-bright)" class="font-1 grid-full p-y-5 w-fit">Quick LInks</strong>
   

 <a href="{{ url('about') }}" class="no-u c-white">About Us</a>
 <a href="{{ url('vendors') }}" class="no-u c-white">Buy Coupon Code</a>
 <a href="{{ url('terms') }}" class="no-u c-white">Terms & Conditions</a>
 <a href="{{ url('register') }}" class="no-u c-white">Get Started</a>
 <a href="{{ url('login') }}" class="no-u c-white">Sign In</a>
 
 </div>

 
 <div class="w-full m-y-20 align-center grid-full text-center column justify-center">
    <span>&copy;2025 {{ config('app.name') }}.All Rights Reserved.</span>
     <span class="font-1" >Built & Designed by <a style="color:var(--primary-brighter)" href="https://wa.me/+2348118768360">Techie Innovations</a></span>
 </div>
</footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script class="js">
      window.addEventListener('load',()=>{
        try{
          // restyle
          document.querySelector('main').style.paddingTop=document.querySelector('header').getBoundingClientRect().height + 10 + 'px';
            document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
        // document.querySelector('section.nav').style.top=document.querySelector('header').offsetHeight + 'px';
     
        }catch(error){
          alert(error.stack)
        }
       });

    </script>
    @yield('js')
</body>
</html>