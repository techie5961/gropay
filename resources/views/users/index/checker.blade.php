@extends('layout.users.index')
@section('title')
    Coupon Checker
@endsection
@section('css')
<style class="css">
    input{
        color:white !important;
    }
    input::placeholder{
        color:silver;
        opacity:0.5
    }
    .c-green{
        color:greenyellow;
    }
</style>
@endsection
@section('main')
       <section class="column p-10  w-full flex-auto justify-center">
        {{-- <form action="{{ url('users/post/login/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.call_back)" class="w-full border-1 border-color-silver max-w-500 align-center br-10 bg-white  column g-5"> --}}
          <form action="{{ url('users/post/coupon/checker/process') }}" method="POST" onsubmit="document.querySelector('.coupon-summary').classList.add('display-none');PostRequest(event,this,MyFunc.call_back);" class="w-full max-w-500 align-center br-10 bg-transparent c-white column g-5">
            <div class="column w-full p-10 align-center g-5">
                <span class="hero-title">Coupon Checker</span>
             <span>Enter a coupon code below to check its status here</span>
          <div class="w-full column g-2">
             <input type="hidden" class="input" name="_token" value="{{ csrf_token() }}">
           
              <div class="cont bg-light w-full h-50" style="border:1px solid var(--bg-lighter)">
                <input autocomplete="off" readonly onfocus="this.removeAttribute('readonly')" type="text" placeholder="Enter coupon code" name="coupon" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
            
            
            
          </div>
          <div class="w-full display-none coupon-summary p-10">
            
          </div>
          
            <button class="post h-50 clip-0 br-0 m-top-20 m-bottom-10 w-full bold"><span>Check Coupon</span></button>
           
           </div>
        </form>
    </section>
    
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            call_back : function(response){
               let data=JSON.parse(response);
               if(data.status == 'success'){
              let text=`
              <div style="border:1px solid var(--bg-lighter)" class="w-full bg-light p-20 column g-10">
            <div class="row g-5 align-center">
                <span class="c-green ${data.coupon.status == 'active' ? '' : 'display-none'}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="CurrentColor"></path>
</svg>

                </span>
                 <span class="c-red ${data.coupon.status == 'active' ? 'display-none' : ''}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM8.96963 8.96965C9.26252 8.67676 9.73739 8.67676 10.0303 8.96965L12 10.9393L13.9696 8.96967C14.2625 8.67678 14.7374 8.67678 15.0303 8.96967C15.3232 9.26256 15.3232 9.73744 15.0303 10.0303L13.0606 12L15.0303 13.9696C15.3232 14.2625 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2625 15.3232 13.9696 15.0303L12 13.0607L10.0303 15.0303C9.73742 15.3232 9.26254 15.3232 8.96965 15.0303C8.67676 14.7374 8.67676 14.2625 8.96965 13.9697L10.9393 12L8.96963 10.0303C8.67673 9.73742 8.67673 9.26254 8.96963 8.96965Z" fill="CurrentColor"></path>
</svg>


                </span>
                <span>${data.coupon.text}</span>
            </div>
            <div class="row align-center g-5">
                <span class="c-green">COUPON CODE:</span>
                <span>${data.coupon.code}</span>
            </div>
             <div class="row align-center g-5">
                <span class="c-green">PACKAGE:</span>
                <span>${data.coupon.package.name}</span>
            </div>
             <div class="row align-center g-5">
                <span class="c-green">VALUE:</span>
                <span>&#8358;${data.coupon.value}</span>
            </div>
             <div class="row align-center g-5">
                <span class="c-green">STATUS:</span>
                <span>${data.coupon.status}</span>
            </div>
             <div class="row align-center g-5">
                <span class="c-green">USED BY:</span>
                <span>${data.coupon.user.username}</span>
            </div>
           
          </div>
              `;
              document.querySelector('.coupon-summary').innerHTML=text;
                document.querySelector('.coupon-summary').classList.remove('display-none');
               } 
            }
        }
    </script>

@endsection