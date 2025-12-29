@extends('layout.users.app')
@section('title')
    Vendor Dashboard
@endsection
@section('css')
    <style class="css">
        .analytics{
            border:0.1px solid var(--secondary);
            position:relative;
            overflow: hidden;
        }
        .analytics .group{
            z-index:50;
        }
     .analytics::before{
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
         .analytics::after{
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
        .analytics.loop::before{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            width:40%;
            height:40%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(50px);
            z-index:10;
        }
         .analytics.loop::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            width:20%;
            height:20%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(50px);
            z-index:10;
        }
    </style>
@endsection
@section('main')
    <section class="w-full p-10 column g-10">
        <strong style="font-size:2rem;">Vendor Portal</strong>
       
        <div class="grid grid-2 pc-grid-4 g-10">
            <div style="border:1px solid var(--bg-lighter)" class="bg-light w-full p-10 br-10">
                <div class="column text-center group w-full h-full justify-center g-10">
                    <strong class="desc">Total Coupons</strong>
                    <span>{{ number_format($total_coupons) }}</span>
                </div>
            </div>
           <div style="border:1px solid var(--bg-lighter)" class="bg-light w-full p-10 br-10">
                <div class="column text-center group w-full h-full justify-center g-10">
                    <strong class="desc">Active Coupons</strong>
                    <span>{{ number_format($active_coupons) }}</span>
                </div>
            </div>
             <div style="border:1px solid var(--bg-lighter)" class="bg-light w-full p-10 br-10">
                <div class="column text-center group w-full h-full justify-center g-10">
                    <strong class="desc">Redeemed Coupons</strong>
                    <span>{{ number_format($redeemed_coupons) }}</span>
                </div>
            </div>
            <div style="border:1px solid var(--bg-lighter)" class="bg-light w-full p-10 br-10">
                <div class="column text-center group w-full h-full justify-center g-10">
                    <strong class="desc">Total Value</strong>
                    <span>&#8358;{{ number_format($value,2) }}</span>
                </div>
            </div>
        </div>
        <strong class="desc">Coupon Codes</strong>
        <div style="backdrop-filter: blur(10px);color:greenyellow" class="w-full row br-10 p-10 bg-green-transparent no-select align-center">
          
<span> ALL COUPON CODE SHOWN HERE ARE ALLOCATED TO YOUR ACCOUNT,UPON PAYMENT FOR COUPON CODE BY DOWNLINES,CONTACT ADMIN ON WHATSAPP TO GENERATE A COUPON CODE FOR YOU THEN COME BACK HERE TO COPY THE CODE AND SEND TO YOUR DOWNLINE.</span>
        </div>
        <div onclick="
        if(this.querySelector('.options').classList.contains('display-none')){
        this.querySelector('.options').classList.remove('display-none')
        }else{
        this.querySelector('.options').classList.add('display-none')
        }
        " class="w-fit pos-relative row align-center p-10 border-1 border-color-primary g-5 no-select m-left-auto">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M12 8.75C11.5858 8.75 11.25 8.41421 11.25 8V5C11.25 4.58579 11.5858 4.25 12 4.25C12.4142 4.25 12.75 4.58579 12.75 5V8C12.75 8.41421 12.4142 8.75 12 8.75Z" fill="CurrentColor"></path>
<path d="M4 12C2.89543 12 2 11.1046 2 10C2 8.89543 2.89543 8 4 8C5.10457 8 6 8.89543 6 10C6 11.1046 5.10457 12 4 12Z" fill="CurrentColor"></path>
<path d="M10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12Z" fill="CurrentColor"></path>
<path d="M18 14C18 12.8954 18.8954 12 20 12C21.1046 12 22 12.8954 22 14C22 15.1046 21.1046 16 20 16C18.8954 16 18 15.1046 18 14Z" fill="CurrentColor"></path>
<path d="M19.25 10C19.25 10.4142 19.5858 10.75 20 10.75C20.4142 10.75 20.75 10.4142 20.75 10V5C20.75 4.58579 20.4142 4.25 20 4.25C19.5858 4.25 19.25 4.58579 19.25 5V10Z" fill="CurrentColor"></path>
<path d="M4 13.25C3.58579 13.25 3.25 13.5858 3.25 14L3.25 19C3.25 19.4142 3.58579 19.75 4 19.75C4.41421 19.75 4.75 19.4142 4.75 19L4.75 14C4.75 13.5858 4.41421 13.25 4 13.25Z" fill="CurrentColor"></path>
<path d="M11.25 19C11.25 19.4142 11.5858 19.75 12 19.75C12.4142 19.75 12.75 19.4142 12.75 19V16C12.75 15.5858 12.4142 15.25 12 15.25C11.5858 15.25 11.25 15.5858 11.25 16V19Z" fill="CurrentColor"></path>
<path d="M20 19.75C19.5858 19.75 19.25 19.4142 19.25 19V18C19.25 17.5858 19.5858 17.25 20 17.25C20.4142 17.25 20.75 17.5858 20.75 18V19C20.75 19.4142 20.4142 19.75 20 19.75Z" fill="CurrentColor"></path>
<path d="M3.25 5C3.25 4.58579 3.58579 4.25 4 4.25C4.41421 4.25 4.75 4.58579 4.75 5V6C4.75 6.41421 4.41421 6.75 4 6.75C3.58579 6.75 3.25 6.41421 3.25 6L3.25 5Z" fill="CurrentColor"></path>
</svg>

            <span>FILTER</span>
            <div style="top:calc(100% + 10px);background:rgb(0,0,0,0.5);backdrop-filter:blur(30px);-webkit-backdrop-filter:blur(30px);" class="pos-absolute options display-none z-index-1000 br-5  top-full right-0" >
                <div style="border-left:5px solid transparent;border-right:5px solid transparent;border-bottom:5px solid rgba(0,0,0,0.5);position:absolute;bottom:100%;right:10px;" class="arrow"></div>
             <div onclick="spa(event,'{{ url('users/vendor/dashboard') }}')" style="border-color:#222;" class="row pointer overflow-hidden border-bottom-1 p-10 ws-nowrap align-center w-full space-between g-10">
                    <span>All Coupons</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                </div>
                <div onclick="spa(event,'{{ url('users/vendor/dashboard?status=active') }}')" style="border-color:#222;" class="row pointer overflow-hidden border-bottom-1 p-10 ws-nowrap align-center w-full space-between g-10">
                    <span>Active Coupons</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                </div>
                   <div onclick="spa(event,'{{ url('users/vendor/dashboard?status=redeemed') }}')" class="row pointer overflow-hidden p-10 ws-nowrap align-center w-full space-between g-10">
                    <span>Redeemed/Used Coupons</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                </div>
            </div>
        </div>
        <div class="grid pc-grid-2 w-full g-10">
            @if ($coupons->isEmpty())
                @include('components.sections',[
                    'null' => true,
                    'text' => 'No Coupon Found'
                ])
            @else
                @foreach ($coupons as $data)
                    <div style="border:1px solid var(--bg-lighter);" class="w-full bg-light loop column g-10 br-10 p-10">
                     <div class="column g-10 w-full">
                          <div class="row g-10 align-center w-full space-between">
                         <strong class="desc">{{ $data->code }}</strong>
                        <div style="border-radius:5px;" onclick="copy('{{ $data->code }}')" class="w-fit p-5 bg-lighter p-x-20 m-right-auto">
                           copy
                        </div>
                        @switch($data->status)
                            @case('active')
                                <div class="p-5 br-5 bg-green c-white no-select">{{ $data->status }}</div>
                                @break
                            @case('redeemed')
                                  <div class="p-5 br-5 bg-blue c-white no-select">{{ $data->status }}</div>
                                @break
                            @default
                             <div class="p-5 br-5 bg-blue c-white no-select">{{ $data->status }}</div>
                                  
                        @endswitch

                       </div>
                     
                       <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                           
<span>Used By:</span>

                        </div>
                        <span class="bold">{{ $data->used_by }}</span>
                       </div>
                        <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                          

<span>Invited By:</span>

                        </div>
                        <span class="bold">{{ $data->ref }}</span>
                       </div>
                         <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                       



<span>Package:</span>

                        </div>
                        <span class="bold">{{ $data->package->name }}</span>
                       </div>
                        <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                       




<span>Package Cost:</span>

                        </div>
                        <span class="bold">&#8358;{{ number_format($data->package->cost,2) }}</span>
                       </div>
                         <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                         

<span>Created:</span>

                        </div>
                        <span class="bold">{{ $data->frame }}</span>
                       </div>
                     </div>
                    </div>
                @endforeach
                @if ($coupons->hasMorePages())
                   @include('components.sections',[
                    'infinite_loading' => true,
                    'page' => $coupons->currentPage() + 1
                   ]) 
                @endif
            @endif
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        InfiniteLoading();
    </script>
@endsection