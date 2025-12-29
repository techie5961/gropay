@extends('layout.users.index')
@section('title')
    Vendors
@endsection
@section('css')
<style class="css">
     .quick-link{
            position:relative;
            

        }
        .quick-link .group{
            z-index:20;
            position:relative;
        }
        .quick-link::before{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            width:40%;
            height:40%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(30px);
            z-index:10;
        }
         .quick-link::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            width:20%;
            height:20%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(20px);
            z-index:10;
        }
        .chat-btn{
            width:fit-content;
            height:fit-content;
            background:linear-gradient(to top right,greenyellow,#4caf50,green);
            padding:10px;
            border:none;
            user-select:none;
            color:white;
            font-family:var(--font);
            display:flex;
            flex-direction:row;
            align-items:center;
            clip-path:inset(0 round 5px);
            border-radius:5px;
            gap:5px;
            cursor:pointer;
        }
</style>
    
@endsection
@section('main')
    <section class="w-full column g-10 align-center">
        <strong class="hero-title">Buy {{ $voucher ?? 'coupon' }} Code</strong>
        <span class="text-center">Chat any of our verified vendors on whatsapp to buy your {{ $voucher ?? 'coupon' }} code from them.</span>
        <span class="text-center c-red" style="color:gold">Note: Do not pay to anyone not listed on this page.We will not be held responsible for loss of funds.Only pay to vendors listed on thie page.</span>
        @if ($vendors->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No Vendors Available at the moment,check back later'
            ])
        @else
           <div class="grid pc-grid-2 w-full g-10 place-center">
             @foreach ($vendors as $data)
                <div style="border:1px solid var(--bg-lighter);box-shadow:inset 5px 5px 20px var(--primary)" class="w-full br-10 p-20 column g-10 bg-light">
                   <div class="w-full row align-center g-10">
                     <img src="{{ asset('users/'.$data->photo.'') }}" alt="" class="h-70 w-70 circle">
                   
                   <div class="column m-right-auto g-5">
                    <div class="row align-center g-5">
                        <strong class="desc">{{ $data->username }}</strong>
                   <div class="c-primary">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82Zm-52.2,6.84-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                   </div> 
                    </div>
                    <span class="row align-center g-5">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg>


<span>{{ ucfirst($data->country) }}</span>
                    </span>
                   </div>

                    <button onclick="window.open('https://wa.me/{{$data->phone}}?text={{ urlencode('Hello '.ucfirst($data->username).',are you online,i want to purchase '.($voucher ?? 'coupon').' code for '.config('app.name').'') }}')" class="chat-btn">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>




                        <span>Chat</span>
                    </button>
                   </div>
                </div>
            @endforeach
           </div>
        @endif
    </section>
@endsection