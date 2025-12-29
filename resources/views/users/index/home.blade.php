@extends('layout.users.index')
@section('title')
    Homepage
@endsection
@section('css')
    <style class="css">
        .observe{
            opacity:0;
        }
        .observe.scale-in{
            animation:scale-in 1.0s ease forwards;
        }
        .observe.scale-out{
            animation:scale-out 1.0s ease forwards;
        }

        @keyframes scale-in{
            0%{
                transform:scale(0.8);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
          @keyframes scale-out{
            0%{
                transform:scale(1.2);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
        .observe.trans-up{
            animation:trans-up 1s ease forwards;
        }
        @keyframes trans-up{
            0%{
                opacity:0;
                transform:translateY(30px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.trans-from-left{
            animation:trans-from-left 2s ease forwards;
        }
        @keyframes trans-from-left{
            0%{
                opacity:0;
                transform:translateX(-50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
         .observe.trans-from-right{
            animation:trans-from-right 2s ease forwards;
        }
        @keyframes trans-from-right{
            0%{
                opacity:0;
                transform:translateX(50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
          .observe.trans-from-bottom{
            animation:trans-from-bottom 2s ease forwards;
        }
        @keyframes trans-from-bottom{
            0%{
                opacity:0;
                transform:translateY(50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
                  .observe.trans-from-top{
            animation:trans-from-top 2s ease forwards;
        }
        @keyframes trans-from-top{
            0%{
                opacity:0;
                transform:translateY(-50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.rotate-in-from-left{
            animation:rotate-in-from-left 1s ease forwards;
        }
        @keyframes rotate-in-from-left{
            0%{
                transform:rotate(-90deg) translateX(-200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
        .observe.rotate-in-from-right{
            animation:rotate-in-from-right 1s ease forwards;
        }
        @keyframes rotate-in-from-right{
            0%{
                transform:rotate(90deg) translateX(200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-top{
            animation:rotate-in-from-top 1s ease forwards;
        }
        @keyframes rotate-in-from-top{
            0%{
                transform:rotate(45deg) translateY(50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-bottom{
            animation:rotate-in-from-bottom 1s ease forwards;
        }
        @keyframes rotate-in-from-bottom{
            0%{
                transform:rotate(-180deg) translateY(-50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
        .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
           color:var(--primary);
          
        }
        .features-card{
            display:flex;
            flex-direction:column;
            gap:10px;
            padding:10px;
            border:1px solid var(--bg-lighter);
            background:var(--bg-light);
            border-radius:10px;
            align-items:center;

        }
        .features-card .symbol{
            background:var(--gradient);
            padding:10px;
            border-radius:50%;
            height:70px;
            width:70px;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .features-title{
            font-weight:800;
            font-size:1.5rem;

        }
        .features-details{
            color:silver;
        }
        .faq .answer{
            display:none;
        }
        .faq .question *{
            transition: all 0.5s ease;
        }
        .faq.active .question .icon{
            background:var(--gradient);
            box-shadow: 0 0 10px var(--primary-brighter);
          

        }
         .faq.active .question .icon svg{
          transform:rotate(90deg);
          

        }
        .faq.active .question{
            display:flex;
        }
        .faq.active .answer{
            display:flex;
        }
       
        @keyframes shiny{
            0%{
                left:-25%;
            }
            25%{
                left:25%;
            }
            50%{
                left:50%;
            }
            75%{
                left:75%;
            }
            100%{
                left:100%
            }
        }
        .hero{
            /* border:1px solid var(--primary); */
            width:100%;
           
           align-items:center;
           text-align:center;
            backdrop-filter: blur(50px);
            -webkit-backdrop-filter: blur(50px);
            position: relative;
            overflow:hidden;
            background:var(--primary);
            color:var(--primary-text);
            position: absolute;;
            left:0;
            right:0;
            background-image: url('{{ asset('images/IMG_1495.WEBP') }}');
            background-size:cover;
            background-position:center;
            color:white;

        }
        .hero .hero-text{
            position:relative;
            top:0;
            left:0;
            bottom:0;
            right:0;
            z-index:100;
            backdrop-filter: blur(3px);
             -webkit-backdrop-filter: blur(3px);
             padding: 20px;

        }
        .hero::before{
            content:'';
            position: absolute;
            top:10%;
            right:10px;
            width:40%;
            height:40%;
            filter:blur(70px);
            -webkit-filter:blur(70px);
            border-radius: 50%;
            background:var(--primary);
            z-index:70;
        }
        .card{
            padding:20px;
            width:100%;
            background: var(--bg-light);
            display:flex;
            flex-direction: column;
            gap:10px;
            align-items:center;
            border-radius:10px;
            border:1px solid var(--bg-lighter);
          
        }
        .way-icon{
            height:50px;
            width:50px;
            border-radius: 50%;
            background:var(--gradient);
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            color:var(--gradient-text)


        }

    </style>
@endsection
@section('main')
    <section class="w-full align-center  g-10 column p-10">
          
        <div class="hero">
           
       <div class="hero-text">
          <div class="hero-title">
           {{ config('app.name') }} is a Global business opportunity
        </div>
        
        <span class="text-center font-1">
           Which means it's an opportunity for anybody from any part of Africa and beyond to earn, learn, and grow with cutting-edge digital solutions

        </span>
         <div style="padding-top:20px;padding-bottom:20px;" class="grid grid-2 w-full g-10 m-y-20">
        <div onclick="window.location.href='{{ url('register') }}'" style="background: var(--primary);color:var(--primary-text);" class="h-50 pointer get-started-btn w-full bold row g-10 justify-center p-10 br-5 clip-5">
       Start Earning
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
    <div onclick="window.location.href='{{ url('login') }}'" style="border:1px solid var(--primary);color:var(--primary);background:transparent" class="h-50 pointer clip-5 w-full bold row g-10 justify-center p-10 br-5">
        Sign In
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
       </div>
       </div>
        </div>
        <div class="marginalize"></div>
       
      
         <img data-class='scale-in' src="{{ asset('banners/PHOTO-2025-11-13-19-49-47.jpg') }}" alt="" class="w-full m-x-auto observe br-10 max-w-500">
        
       
        <span class="hero-title c-primary">Multiple Ways to Earn with {{ config('app.name') }}</span>
        <span class="text-center">{{ config('app.name') }} offers various innovative features that allow you to make money in different ways, all from your smartphone.</span>
        <div class="grid p-20 pc-grid-2 w-full g-10">
            <div data-class='trans-from-bottom' class="card observe">
                <div class="way-icon">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M144,16H112A64.07,64.07,0,0,0,48,80v96a64.07,64.07,0,0,0,64,64h32a64.07,64.07,0,0,0,64-64V80A64.07,64.07,0,0,0,144,16Zm-8,96a8,8,0,0,1-16,0V64a8,8,0,0,1,16,0Z"></path></svg>
                </div>
                <strong style="font-size:2rem;">Click to Earn</strong>
                <p>Get ready to earn MetaGro coins with every click! Our innovative Click to Earn feature rewards you for your participation and engagement.</p>
                
            </div>
            <div data-class='trans-from-bottom' class="card observe">
                <div class="way-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M240,56v64a8,8,0,0,1-13.66,5.66L200,99.31l-58.34,58.35a8,8,0,0,1-11.32,0L96,123.31,29.66,189.66a8,8,0,0,1-11.32-11.32l72-72a8,8,0,0,1,11.32,0L136,140.69,188.69,88,162.34,61.66A8,8,0,0,1,168,48h64A8,8,0,0,1,240,56Z"></path></svg> </div>
                <strong style="font-size:2rem;">Forex Trading Training</strong>
                <p>Elevate your game with cutting-edge, trusted digital signals powered by AI insights. Get real-time mentorship from seasoned pros.</p>
                
            </div>
            <div data-class='trans-from-bottom' class="card observe">
                <div class="way-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M192,32H64A32,32,0,0,0,32,64V192a32,32,0,0,0,32,32H192a32,32,0,0,0,32-32V64A32,32,0,0,0,192,32ZM92,176a12,12,0,1,1,12-12A12,12,0,0,1,92,176Zm0-72a12,12,0,1,1,12-12A12,12,0,0,1,92,104Zm36,36a12,12,0,1,1,12-12A12,12,0,0,1,128,140Zm36,36a12,12,0,1,1,12-12A12,12,0,0,1,164,176Zm0-72a12,12,0,1,1,12-12A12,12,0,0,1,164,104Z"></path></svg>
                </div>
                <strong style="font-size:2rem;">Ludo Games</strong>
                <p>WIN OVER ₦6,000 just by playing ludo games on our platform. Challenge friends, compete with other users, and get rewarded for your wins.</p>
                
            </div>
             <div data-class='trans-from-bottom' class="card observe">
                <div class="way-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184,89.57V84c0-25.08-37.83-44-88-44S8,58.92,8,84v40c0,20.89,26.25,37.49,64,42.46V172c0,25.08,37.83,44,88,44s88-18.92,88-44V132C248,111.3,222.58,94.68,184,89.57ZM56,146.87C36.41,141.4,24,132.39,24,124V109.93c8.16,5.78,19.09,10.44,32,13.57Zm80-23.37c12.91-3.13,23.84-7.79,32-13.57V124c0,8.39-12.41,17.4-32,22.87Zm-16,71.37C100.41,189.4,88,180.39,88,172v-4.17c2.63.1,5.29.17,8,.17,3.88,0,7.67-.13,11.39-.35A121.92,121.92,0,0,0,120,171.41Zm0-44.62A163,163,0,0,1,96,152a163,163,0,0,1-24-1.75V126.46A183.74,183.74,0,0,0,96,128a183.74,183.74,0,0,0,24-1.54Zm64,48a165.45,165.45,0,0,1-48,0V174.4a179.48,179.48,0,0,0,24,1.6,183.74,183.74,0,0,0,24-1.54ZM232,172c0,8.39-12.41,17.4-32,22.87V171.5c12.91-3.13,23.84-7.79,32-13.57Z"></path></svg>
                </div>
                <strong style="font-size:2rem;">TapSwap</strong>
                <p>A fun and easy way to earn while you tap! With just a few taps on your screen daily, you can accumulate rewards that add up fast.</p>
                
            </div>
            <div data-class='trans-from-bottom' class="card observe">
                <div class="way-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>
              </div>
                <strong style="font-size:2rem;">WhatsApp Earnings</strong>
                <p>Turn your WhatsApp views into cash! Simply post tasks, links, or promotions from {{  config('app.name') }} on your status and earn from views and engagement.</p>
                
            </div>
            <div data-class='trans-from-bottom' class="card observe">
                <div class="way-icon">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80v28a4,4,0,0,0,4,4H64V96.27A8.17,8.17,0,0,1,71.47,88,8,8,0,0,1,80,96v16h96V96.27A8.17,8.17,0,0,1,183.47,88,8,8,0,0,1,192,96v16h44a4,4,0,0,0,4-4V80A16,16,0,0,0,224,64Zm-64,0H96V56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Zm80,68v60a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V132a4,4,0,0,1,4-4H64v16a8,8,0,0,0,8.53,8A8.17,8.17,0,0,0,80,143.73V128h96v16a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25V128h44A4,4,0,0,1,240,132Z"></path></svg>
             </div>
                <strong style="font-size:2rem;">Job Opportunity Solution</strong>
                <p>Tired of submitting countless CVs without results? {{  config('app.name') }} gives you real, practical ways to make money online right from your phone.</p>
                
            </div>
            
           {{-- <img data-class='trans-from-bottom' src="{{ asset('banners/PHOTO-2025-11-10-12-09-33.jpg') }}" alt="" class="w-full observe br-10 max-w-500">
       <img data-class='trans-from-bottom' src="{{ asset('banners/PHOTO-2025-11-12-14-13-07.jpg') }}" alt="" class="w-full observe br-10 max-w-500">
       <img data-class='trans-from-bottom' src="{{ asset('banners/PHOTO-2025-11-12-22-05-31.jpg') }}" alt="" class="w-full observe br-10 max-w-500">
            <img data-class='trans-from-bottom' src="{{ asset('banners/PHOTO-2025-11-26-17-09-45.jpg') }}" alt="" class="w-full observe br-10 max-w-500">

       <img data-class='trans-from-bottom' src="{{ asset('banners/PHOTO-2025-11-18-15-58-04.jpg') }}" alt="" class="w-full observe br-10 max-w-500">
<img data-class='trans-from-bottom' src="{{ asset('banners/PHOTO-2025-11-13-13-37-57.jpg') }}" alt="" class="w-full observe br-10 max-w-500"> --}}

            
          
           
       
        
        </div>

      
       
       
        <div class="column m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">{{  config('app.name') }} Forex Trading Training</strong>
           <div style="text-align: start;">
             <p>Elevate your game with cutting-edge, trusted digital signals powered by AI insights. Get real-time mentorship from seasoned pros to sharpen your skills and avoid pitfalls.</p>
                    <p>Accelerate your growth in the fast-paced {{  config('app.name') }} Forex market today. Whether you're a beginner or experienced trader, our platform provides the tools and guidance you need to succeed.</p>
             
           </div>
            <img src="{{ asset('banners/PHOTO-2025-11-12-22-05-31.jpg') }}" alt="" data-class="trans-from-bottom" class="w-full m-x-auto observe max-w-500 br-10">
          
        </div>
        <div class="column m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">Earn Rewards With Gropay's Click To Earn Feature</strong>
           <div style="text-align: start;">
             <p>Get ready to earn MetaGro coins with every click! Our innovative Click to Earn feature rewards you for your participation and engagement.</p>
                    <p><strong>Here's how it works:</strong></p>
                    <ul style="margin-left: 20px; margin-bottom: 20px;opacity:0.7">
                        <li><strong>Click to Earn:</strong> Simply click and earn MetaGro coins.</li>
                        <li><strong>Exchange for value:</strong> Convert your MetaGro coins to cash or other rewards during listing.</li>
                        <li><strong>Accumulate points:</strong> Collect MetaGro coins and redeem them for exciting rewards.</li>
                    </ul> 
           </div>
            <img src="{{ asset('banners/PHOTO-2025-11-13-13-37-57.jpg') }}" alt="" data-class="trans-from-bottom" class="w-full m-x-auto observe max-w-500 br-10">
          
        </div>
         <div class="column m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">GroPay Ludo Games</strong>
             
           <div style="text-align: start;">
             <p>Just by playing ludo games on our platform.</p>
                    <p>GroPay isn't just about finance - It's fun too! Join the excitement with our Ludo Game feature, where you can enjoy your favorite childhood board game and earn real rewards while playing.</p>
                    <p>Challenge friends, compete with other users, and get rewarded for your wins. It's more than just a game - it's a way to relax, connect, and make money, all from the same platform.</p>

           </div>
            <img src="{{ asset('banners/PHOTO-2025-11-12-14-13-07.jpg') }}" alt="" data-class="trans-from-bottom" class="w-full m-x-auto observe max-w-500 br-10">
          
        </div>
        <div class="column m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">WE'RE NOW REGISTERED AND CERTIFIED BY THE GOVERNMENT ON SMEDAN</strong>
             
       
            <img src="{{ asset('banners/PHOTO-2025-11-25-14-26-19.jpg') }}" alt="" data-class="trans-from-bottom" class="w-full m-x-auto observe max-w-500 br-10">
          
        </div>
        <strong class="hero-title">Our Impact in Numbers</strong>
             <span>Join thousands of users who are already earning with Gropay</span>
             <div class="column align-center g-5">
                <strong class="count" data-min="1" data-current="0" data-max="50" style="font-size:3rem;"><span>0</span>K+</strong>
             <span style="opacity:0.5">Active Users</span>
             </div>
              <div class="column align-center m-top-20 g-5">
                <strong class="count" data-min="1" data-current="0" data-max="200" style="font-size:3rem;">&#8358;<span>0</span>M+</strong>
             <span style="opacity:0.5">Paid Out</span>
             </div>
              <div class="column align-center m-top-20 g-5">
                <strong style="font-size:3rem;">24/7</strong>
             <span style="opacity:0.5">Customer Support</span>
             </div>
        {{-- FAQS --}}
         <div class="column m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">Frequently Asked Questions</strong>
            <span style="color:silver;">Find answers to common questions about Gropay</span>
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How Do I Join {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
                  <span>  To get started on {{ config('app.name') }},</span>
                  <span>- Click on the `Start Earning` button at the top of the page</span>
                  <span>- Fill the form with your details</span>
                  <span>- Message any of our verified coupon vendors to buy your access/coupon code</span>
                 <span>- We value your privacy so your data are end-to-end encrypted and 100% safe on {{ config('app.name') }}</span>
                </div>
            </div>
            {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How do I start earning with Gropay?</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
                 Simply sign up for an account, we have different earning method (Click to Earn, Forex Training, Ludo Games, TapSwap, or WhatsApp Earnings),start earning right away.
                </div>
            </div>
             {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How do I withdraw my earnings?</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
              You can withdraw your earnings directly to your bank account or mobile money wallet. The minimum withdrawal amount and processing time depend on the account package.   </div>
            </div>
             
        </div>
       
    </section>
@endsection
@section('js')
    <script class="js">
        function ObserveItems(class_name){
            let observer=new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    if(entry.isIntersecting){
                        entry.target.classList.add(entry.target.dataset.class);
                    }else{
                        entry.target.classList.remove(entry.target.dataset.class);
                    }
                });
            },{
                threshold : 0
            });
            let items=document.querySelectorAll('.' + class_name);
           items.forEach((item)=>{
             observer.observe(item);
           })
        }
        function ObserveCount(){
          try{
              let observer=new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    if(entry.isIntersecting){
                        setInterval(()=>{
                            let current=parseInt(entry.target.dataset.current);
                           
                            let new_amount=parseInt(entry.target.dataset.max) == parseInt(current) ? parseInt(current) : parseInt(current) + 1;
                            entry.target.dataset.current=new_amount;
                            entry.target.querySelector('span').innerHTML=new_amount.toLocaleString();
                        },100)
                    }
                })
            })
            document.querySelectorAll('.count').forEach((count)=>{
                observer.observe(count);
            })
          }catch(error){
            alert(error.stack)
          }
        }
        window.onload=function(){
            document.querySelector('.hero').style.top=Math.abs(document.querySelector('header').getBoundingClientRect().top - document.querySelector('header').getBoundingClientRect().bottom) + 'px';
            // document.querySelector('.happy-users').style.minWidth=document.querySelector('.happy-users').getBoundingClientRect().height + 'px';
        //   alert(Math.abs(document.querySelector('.hero').getBoundingClientRect().height))
      
            document.querySelector('.marginalize').style.marginTop=Math.abs(document.querySelector('.hero').getBoundingClientRect().top - document.querySelector('.hero').getBoundingClientRect().bottom) + 'px';
         }
        ObserveItems('observe');
        ObserveCount();
    </script>
@endsection
