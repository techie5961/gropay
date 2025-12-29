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
      
      .nav-profile{
        background-color:inherit;


}
 body{
  
   background-color: var(--bg);

  
}
header{
  border-bottom:0.1px solid var(--bg-lighter);
}
.nav{
  background:var(--bg);
  
}
nav .nav{
  scrollbar-width: none;
  -webkit-scrollbar-width:none;
  padding:20px !important;
}


/* *{
  scrollbar-width: none !important;
   -webkit-scrollbar-width:none;
} */
a.searchable:hover{
  background:var(--bg-light);
}
footer{
  background:rgba(0,0,0,0.2) !important;
  position:fixed;
  bottom:0;
  left:0;
  right:0;
  padding:20px;
  
}
footer .child{
  display:grid;
  grid-template-columns: repeat(5,1fr);
  background:var(--bg-transparent);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius:1000px;
 
  padding:5px;
  gap:5px;
  border:0.1px solid var(--bg-lighter)

}
footer .child .f-links{
  width:100%;
  border-radius:1000px;
  transition: all 0.5s ease ;
  
}

.menu-icon{
  height:40px;
  width:40px;
  border-radius:50%; 
  background:var(--primary) !important;
  color:var(--primary-text) !important;
 

}
.nav-link{
  gap:20px !important;
}
.icon-group{
  color:var(--primary-light)
}
main{
  background-image:url('{{ asset('images/MYBO8726.JPG') }}');
 
   background-size:cover;
   background-position:center;
}


      @media(min-width:800px){
        nav{
            width:30%;
           
        }
        nav section.nav{
            width:100%;
            border-right:1px solid var(--bg)
        }
        main,footer,header{
            width:calc(100% - 30%) !important;
           
            margin-left:30%;
        }
      }
      header{
        left:30% !important;
      }
    
    </style>
    @yield('css')
</head>

<body class="overflow-hidden">
    <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
  <svg fill="currentColor" width="100" height="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_g88x" begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="0;spinner_yOmw.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_yOmw" begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_g88x.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path></svg>
</div>
  <header style="z-index:3000" class="pos-sticky average c-white bg p-10 top-0 left-0 right-0 bottom-0 row align-center g-10">
        <div onclick="
            document.querySelector('nav').classList.remove('mobile-display-none');
             document.querySelector('nav section.nav').classList.add('animation-trans-in-from-left');
             document.body.classList.add('overflow-hidden');
            

            " class="h-40 w-40 column pc-display-none justify-center circle p-10 menu-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 7C3.25 6.58579 3.58579 6.25 4 6.25H20C20.4142 6.25 20.75 6.58579 20.75 7C20.75 7.41421 20.4142 7.75 20 7.75H4C3.58579 7.75 3.25 7.41421 3.25 7ZM3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12ZM3.25 17C3.25 16.5858 3.58579 16.25 4 16.25H9C9.41421 16.25 9.75 16.5858 9.75 17C9.75 17.4142 9.41421 17.75 9 17.75H4C3.58579 17.75 3.25 17.4142 3.25 17Z" fill="CurrentColor"></path>
</svg>
   
        </div>
        <img src="{{ asset('favicon/logo.png?v=1.2') }}" alt="Logo" class="h-30 pc-pointer" onclick="window.location.href='{{ url('/') }}'">
        
      <img onclick="spa(event,'{{ url('users/more') }}')" src="{{ asset('users/'.Auth::guard('users')->user()->photo.'') }}" alt="" class="h-40 m-left-auto font-weight-900 desc w-40 circle no-shrink bg-dim column justify-center">        
    </header>
    {{-- NAV SECTION POSITIONED FIXED WITH TRANSPARENT BACKGROUND--}}
    <nav style="z-index:4000" onclick="
    this.querySelector('section.nav').classList.remove('animation-trans-in-from-left');
    this.classList.add('mobile-display-none');
    document.body.classList.remove('overflow-hidden');
  
    " class="pos-fixed mobile-display-none border-right-1 border-color-dim high top-0 left-0 right-0 bottom-0 bg-black-transparent average">
        {{-- NAV CHILD SECTION --}}
        <section onclick="event.stopPropagation()" class="nav transition-ease-half overflow-auto column h-full w-semi-full">
            {{-- NAV PROFILE SECTION --}}
          <div class="nav-profile z-index-1000 pos-sticky stick-top w-full column g-10 p-20">
              <img src="{{ asset('favicon/logo.png?v=1.2') }}" alt="" class="w-half">
              <div style="bsorder:0.1px solid var(--bg-lighter)" class="cont bg-light w-full h-40 row align-center">
                <input oninput="
                  let searchable=document.querySelectorAll('.searchable');
                  searchable.forEach((data)=>{
                  let text=(data.innerText).toLowerCase();
                  let regex=new RegExp((this.value).toLowerCase(),'i');
                  if(regex.test(text)){
                  data.classList.remove('display-none');
                  }else{
                   data.classList.add('display-none');
                  }
                  })
                  " placeholder="Search....." type="search" class="w-full h-full border-none bg-transparent">
              </div>
            </div>
            <div class="nav-links flex-auto p-10 bg-inherit w-full column">
              {{-- NEW NAV LINK --}}
                <a class="p-10 nav-link searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/dashboard') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                   <div class="icon-group">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,120v96a8,8,0,0,1-8,8H160a8,8,0,0,1-8-8V164a4,4,0,0,0-4-4H108a4,4,0,0,0-4,4v52a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V120a16,16,0,0,1,4.69-11.31l80-80a16,16,0,0,1,22.62,0l80,80A16,16,0,0,1,224,120Z"></path></svg>

                   </div>


                   My Dashboard
                 </a>
               @if (Auth::guard('users')->user()->type == 'vendor')
                    {{-- NEW NAV LINK --}}
                <a class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/vendor/dashboard') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                  <div class="icon-group">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M243.31,136,144,36.69A15.86,15.86,0,0,0,132.69,32H40a8,8,0,0,0-8,8v92.69A15.86,15.86,0,0,0,36.69,144L136,243.31a16,16,0,0,0,22.63,0l84.68-84.68a16,16,0,0,0,0-22.63ZM84,96A12,12,0,1,1,96,84,12,12,0,0,1,84,96Z"></path></svg>


                   </div>


                  Vendor Dashboard
                  </a> 
               @endif
              
                  {{-- NEW NAV LINK --}}
                 <a class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/tasks') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                 <div class="icon-group">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>

                   </div>

                   Tasks
                </a>
              
             
                 {{-- NEW NAV LINK --}}
                <div class="nav-group searchable nav-link c-white w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 align-center nav-link w-full main-a row g-5 no-u" >
                  <div class="icon-group">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M247.89,80.91a15.93,15.93,0,0,0-6.17-10.81A186.67,186.67,0,0,0,128,32,186.67,186.67,0,0,0,14.28,70.1,15.93,15.93,0,0,0,8.11,80.91,15.65,15.65,0,0,0,11.65,92.8l104,125.43A15.93,15.93,0,0,0,128,224h0a15.93,15.93,0,0,0,12.31-5.77h0l104-125.43A15.65,15.65,0,0,0,247.89,80.91Zm-46.77,38.94a124,124,0,0,0-146.24,0L24.09,82.74A170.76,170.76,0,0,1,128,48,170.76,170.76,0,0,1,231.91,82.74Z"></path></svg>



                   </div>
     Airtime & Data
     <svg  class="m-left-auto chevron transition-ease-half" width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                        </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/airtime/topup') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Buy Airtime</a>
                          <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/data/topup') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Buy Data Bundle</a>
                             </div>
                </div>
                {{-- NEW NAV LINK --}}
                 <a class="p-10 searchable nav-link pointer align-center clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/bank/add') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
              <div class="icon-group">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208ZM16.3,98.18a8,8,0,0,1,3.51-9l104-64a8,8,0,0,1,8.38,0l104,64A8,8,0,0,1,232,104H208v64h16a8,8,0,0,1,0,16H32a8,8,0,0,1,0-16H48V104H24A8,8,0,0,1,16.3,98.18ZM144,160a8,8,0,0,0,16,0V112a8,8,0,0,0-16,0Zm-48,0a8,8,0,0,0,16,0V112a8,8,0,0,0-16,0Z"></path></svg>



                   </div>
   Payment Details
                 </a>
                 {{-- NEW NAV LINK --}}

                  <a class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/withdraw') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                 <div class="icon-group">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm-36,80a12,12,0,1,1,12-12A12,12,0,0,1,180,144Z"></path></svg>




                   </div>
                  Withdraw Funds
                 </a>
                 {{-- NEW NAV LINK --}}
                <a class="p-10 align-center searchable nav-link pointer clip-10 w-full row g-5 no-u secondary-text"  onclick="
                  spa(event,'{{ url('users/transactions') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                     <div class="icon-group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM117.66,149.66l-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L80,164.69l26.34-26.35a8,8,0,0,1,11.32,11.32Zm0-64-32,32a8,8,0,0,1-11.32,0l-16-16A8,8,0,0,1,69.66,90.34L80,100.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM192,168H144a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm0-64H144a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Z"></path></svg>



                   </div>


                    Transaction History
                </a>
              
                 {{-- NEW NAV LINK --}}
                    <a class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/team') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                   <div class="icon-group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M64.12,147.8a4,4,0,0,1-4,4.2H16a8,8,0,0,1-7.8-6.17,8.35,8.35,0,0,1,1.62-6.93A67.79,67.79,0,0,1,37,117.51a40,40,0,1,1,66.46-35.8,3.94,3.94,0,0,1-2.27,4.18A64.08,64.08,0,0,0,64,144C64,145.28,64,146.54,64.12,147.8Zm182-8.91A67.76,67.76,0,0,0,219,117.51a40,40,0,1,0-66.46-35.8,3.94,3.94,0,0,0,2.27,4.18A64.08,64.08,0,0,1,192,144c0,1.28,0,2.54-.12,3.8a4,4,0,0,0,4,4.2H240a8,8,0,0,0,7.8-6.17A8.33,8.33,0,0,0,246.17,138.89Zm-89,43.18a48,48,0,1,0-58.37,0A72.13,72.13,0,0,0,65.07,212,8,8,0,0,0,72,224H184a8,8,0,0,0,6.93-12A72.15,72.15,0,0,0,157.19,182.07Z"></path></svg>





                   </div>


                My Team
                 </a>
                 {{-- NEW NAV LINK --}}
              
                 
              
               
               
                 
                 
                 <a class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u secondary-text"  onclick="
                  spa(event,'{{ url('users/more') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                      <div class="icon-group">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,120h-8.34a95.07,95.07,0,0,0-8.82-32.9l7.23-4.17a8,8,0,0,0-8-13.86l-7.25,4.19a97,97,0,0,0-24.08-24.08l4.19-7.25a8,8,0,0,0-13.86-8l-4.17,7.23A95.07,95.07,0,0,0,136,32.34V24a8,8,0,0,0-16,0v8.34a95.07,95.07,0,0,0-32.9,8.82l-4.17-7.23a8,8,0,0,0-13.86,8l4.19,7.25A97,97,0,0,0,49.18,73.26l-7.25-4.19a8,8,0,0,0-8,13.86l7.23,4.17A95.07,95.07,0,0,0,32.34,120H24a8,8,0,0,0,0,16h8.34a95.07,95.07,0,0,0,8.82,32.9l-7.23,4.17a8,8,0,0,0,4,14.93,7.92,7.92,0,0,0,4-1.07l7.25-4.19a97,97,0,0,0,24.08,24.08l-4.19,7.25a8,8,0,0,0,13.86,8l4.17-7.23a95.07,95.07,0,0,0,32.9,8.82V232a8,8,0,0,0,16,0v-8.34a95.07,95.07,0,0,0,32.9-8.82l4.17,7.23a8,8,0,0,0,13.86-8l-4.19-7.25a97,97,0,0,0,24.08-24.08l7.25,4.19A8,8,0,0,0,225,184a8,8,0,0,0-2.92-10.93l-7.23-4.17a95.07,95.07,0,0,0,8.82-32.9H232a8,8,0,0,0,0-16ZM72,128A55.91,55.91,0,0,1,93.38,84l25.38,44L93.38,172A55.91,55.91,0,0,1,72,128Zm56,56a55.67,55.67,0,0,1-20.78-4l25.4-44h50.8A56.09,56.09,0,0,1,128,184Zm4.62-64-25.4-44a56,56,0,0,1,76.2,44Z"></path></svg>






                   </div>

                    Account  Settings
                 </a>
                 {{-- NEW NAV LINK --}}
                




                 
                 

                 <a class="p-10 w-full bg-red pointer clip-10 pos-sticky justify-center m-top-auto stick-bottom w-full row g-5 no-u c-white" href="{{ url('users/logout') }}">
               


                  Logout
                 </a>


            </div>

        </section>
    </nav>
    <main class="c-white">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" class="child bg">
    @yield('popup')
  </div>
</section>
<section onclick="HideSlideUp()" class="slideup">
  <div onclick="event.stopPropagation()" class="child bg">@yield('slideup_child')</div>
</section>
    </main>
    <footer style="z-index:3000;">
   <div class="child">
   <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.classList.remove('active')
   });
   this.classList.add('active');

    
   
    spa(event,'{{ url('users/tasks') }}')
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column pc-pointer f-links w-full g-2 p-5 align-center">
    <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>

   </div>
    <span class="transition-ease-full">Tasks</span>
   </div>
   <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
  f_links.forEach((data)=>{
   data.classList.remove('active')
   });
   this.classList.add('active');

    spa(event,'{{ url('users/withdraw') }}')
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
    <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm-36,80a12,12,0,1,1,12-12A12,12,0,0,1,180,144Z"></path></svg>



    </div>
    <span class="transition-ease-full">Withdraw</span>
   </div>
    <div onclick="
     let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.classList.remove('active')
   });
   this.classList.add('active');

    spa(event,'{{ url('users/dashboard') }}')" class="column f-links home-nav g-2 pc-pointer align-center p-10 br-1000 clip-1000">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,120v96a8,8,0,0,1-8,8H160a8,8,0,0,1-8-8V164a4,4,0,0,0-4-4H108a4,4,0,0,0-4,4v52a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V120a16,16,0,0,1,4.69-11.31l80-80a16,16,0,0,1,22.62,0l80,80A16,16,0,0,1,224,120Z"></path></svg>

<span>Home</span>


   </div>
   
    <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.classList.remove('active')
   });
   this.classList.add('active');

    spa(event,'{{ url('users/team') }}');
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
  <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M64.12,147.8a4,4,0,0,1-4,4.2H16a8,8,0,0,1-7.8-6.17,8.35,8.35,0,0,1,1.62-6.93A67.79,67.79,0,0,1,37,117.51a40,40,0,1,1,66.46-35.8,3.94,3.94,0,0,1-2.27,4.18A64.08,64.08,0,0,0,64,144C64,145.28,64,146.54,64.12,147.8Zm182-8.91A67.76,67.76,0,0,0,219,117.51a40,40,0,1,0-66.46-35.8,3.94,3.94,0,0,0,2.27,4.18A64.08,64.08,0,0,1,192,144c0,1.28,0,2.54-.12,3.8a4,4,0,0,0,4,4.2H240a8,8,0,0,0,7.8-6.17A8.33,8.33,0,0,0,246.17,138.89Zm-89,43.18a48,48,0,1,0-58.37,0A72.13,72.13,0,0,0,65.07,212,8,8,0,0,0,72,224H184a8,8,0,0,0,6.93-12A72.15,72.15,0,0,0,157.19,182.07Z"></path></svg>


  </div>
      <span class="transition-ease-full">Team</span>
   </div>
    <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
  f_links.forEach((data)=>{
   data.classList.remove('active')
   });
   this.classList.add('active');

    spa(event,'{{ url('users/more') }}');
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
  <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,120h-8.34a95.07,95.07,0,0,0-8.82-32.9l7.23-4.17a8,8,0,0,0-8-13.86l-7.25,4.19a97,97,0,0,0-24.08-24.08l4.19-7.25a8,8,0,0,0-13.86-8l-4.17,7.23A95.07,95.07,0,0,0,136,32.34V24a8,8,0,0,0-16,0v8.34a95.07,95.07,0,0,0-32.9,8.82l-4.17-7.23a8,8,0,0,0-13.86,8l4.19,7.25A97,97,0,0,0,49.18,73.26l-7.25-4.19a8,8,0,0,0-8,13.86l7.23,4.17A95.07,95.07,0,0,0,32.34,120H24a8,8,0,0,0,0,16h8.34a95.07,95.07,0,0,0,8.82,32.9l-7.23,4.17a8,8,0,0,0,4,14.93,7.92,7.92,0,0,0,4-1.07l7.25-4.19a97,97,0,0,0,24.08,24.08l-4.19,7.25a8,8,0,0,0,13.86,8l4.17-7.23a95.07,95.07,0,0,0,32.9,8.82V232a8,8,0,0,0,16,0v-8.34a95.07,95.07,0,0,0,32.9-8.82l4.17,7.23a8,8,0,0,0,13.86-8l-4.19-7.25a97,97,0,0,0,24.08-24.08l7.25,4.19A8,8,0,0,0,225,184a8,8,0,0,0-2.92-10.93l-7.23-4.17a95.07,95.07,0,0,0,8.82-32.9H232a8,8,0,0,0,0-16ZM72,128A55.91,55.91,0,0,1,93.38,84l25.38,44L93.38,172A55.91,55.91,0,0,1,72,128Zm56,56a55.67,55.67,0,0,1-20.78-4l25.4-44h50.8A56.09,56.09,0,0,1,128,184Zm4.62-64-25.4-44a56,56,0,0,1,76.2,44Z"></path></svg>



  </div>
      <span class="transition-ease-full">Settings</span>
   </div>
   </div>
   
    </footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script>
window.onload=function(){
        document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
       
  let max_bottom=document.querySelector('footer').getBoundingClientRect().bottom;
  document.querySelector('main').style.paddingBottom=max_bottom - document.querySelector('footer').getBoundingClientRect().top + 'px'; 
 // document.querySelector('main').style.paddingBottom=document.querySelector('footer').offsetHeight + 'px';
}
    </script>
    @yield('js')
</body>
</html>