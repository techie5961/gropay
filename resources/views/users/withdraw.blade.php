@extends('layout.users.app')
@section('title')
    Withdraw
@endsection
@section('css')
    <style class="css">
       .wallets.active{
        background:#4caf50 !important;
        color:var(--primary-text) !important;
         background:var(--primary) !important;
        
        animation: scale-in-out 0.5s ease forwards;
       } 
       @keyframes scale-in-out{
        0%,100%{
            transform: scale(1)
        }

        50%{
            transform:scale(0.95);
        }

       }
      
    </style>
@endsection
@section('main')
    <section class="w-full align-center justify-center column g-10 p-10">
         <div class="bg-transparent w-full column g-10 mmax-w-500 br-10 p-10">
            <div class="row p-10 space-between br-10 align-center">

                <span class="desc bold">Withdraw Funds</span>
              
            </div>
            <div class="column g-5 w-full">
               
                <span>Select a wallet you intend to withdraw from.</span>
            </div>
            <form action="{{ url('users/post/withdraw/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Completed)" class="w-full column g-10">
              
                <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <div class="w-full grid grid-2 pc-grid-3 g-10 place-center">
                    <div onclick="
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                     });
                     this.classList.add('active');
                        document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($activities_minimum,2) }}`;
                    document.querySelector('input.wallet').value='activities_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                   
                     " class="w-full wallets transition-ease-half column bg-light align-center g-5 p-10 no-select pointer">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM84,184a12,12,0,1,1,12-12A12,12,0,0,1,84,184Zm44,0a12,12,0,1,1,12-12A12,12,0,0,1,128,184Zm0-40a12,12,0,1,1,12-12A12,12,0,0,1,128,144Zm44,40a12,12,0,1,1,12-12A12,12,0,0,1,172,184Zm0-40a12,12,0,1,1,12-12A12,12,0,0,1,172,144Zm36-64H48V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24Z"></path></svg>
                        <strong class="font-1">Activities Wallet</strong>
                        <strong class="desc">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(Auth::guard('users')->user()->activities_balance) }}</strong>
                    </div>
                     <div onclick="
                    try{
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                      });
                    this.classList.add('active');
                      document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($affiliate_minimum,2) }}`;
                    document.querySelector('input.wallet').value='affiliate_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                  

                    }catch(error){
                    CreateNotify('error',error.stack);
                    }
                     
                     " class="w-full wallets transition-ease-half column bg-light align-center g-5 p-10 no-select pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm-36,80a12,12,0,1,1,12-12A12,12,0,0,1,180,144Z"></path></svg>

                        <strong class="font-1">Affiliate Wallet</strong>
                        <strong class="desc">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(Auth::guard('users')->user()->affiliate_balance) }}</strong>
                    </div>
                     <div onclick="
                    try{
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                      });
                    this.classList.add('active');
                      document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(($deposit_minimum ?? 0),2) }}`;
                    document.querySelector('input.wallet').value='deposit_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                  

                    }catch(error){
                    CreateNotify('error',error.stack);
                    }
                     
                     " class="w-full display-none grid-full wallets transition-ease-half column bg-light align-center g-5 p-10 no-select pointer">
                       <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6669 6.13443L10.165 5.77922C9.44862 5.27225 8.59264 5 7.71504 5H7.10257C6.69838 5 6.29009 5.02549 5.90915 5.16059C3.52645 6.00566 1.88749 9.09504 2.00604 16.1026C2.02992 17.5145 2.3603 19.075 3.63423 19.6842C4.03121 19.8741 4.49667 20 5.02671 20C5.66273 20 6.1678 19.8187 6.55763 19.5632C6.96641 19.2953 7.32633 18.9471 7.68612 18.599C8.13071 18.1688 8.57511 17.7389 9.11125 17.4609C9.69519 17.1581 10.3434 17 11.0011 17H12.9989C13.6566 17 14.3048 17.1581 14.8888 17.4609C15.4249 17.7389 15.8693 18.1688 16.3139 18.599C16.6737 18.9471 17.0336 19.2953 17.4424 19.5632C17.8322 19.8187 18.3373 20 18.9733 20C19.5033 20 19.9688 19.8741 20.3658 19.6842C21.6397 19.075 21.9701 17.5145 21.994 16.1026C22.1125 9.09503 20.4735 6.00566 18.0908 5.16059C17.7099 5.02549 17.3016 5 16.8974 5H16.2849C15.4074 5 14.5514 5.27225 13.8351 5.77922L13.3332 6.13441C12.9434 6.41029 12.4776 6.55844 12 6.55844C11.5225 6.55844 11.0567 6.41029 10.6669 6.13443ZM16.75 9C17.1642 9 17.5 9.33579 17.5 9.75C17.5 10.1642 17.1642 10.5 16.75 10.5C16.3358 10.5 16 10.1642 16 9.75C16 9.33579 16.3358 9 16.75 9ZM7.5 9.25C7.91421 9.25 8.25 9.58579 8.25 10V10.75H9C9.41421 10.75 9.75 11.0858 9.75 11.5C9.75 11.9142 9.41421 12.25 9 12.25H8.25V13C8.25 13.4142 7.91421 13.75 7.5 13.75C7.08579 13.75 6.75 13.4142 6.75 13V12.25H6C5.58579 12.25 5.25 11.9142 5.25 11.5C5.25 11.0858 5.58579 10.75 6 10.75H6.75V10C6.75 9.58579 7.08579 9.25 7.5 9.25ZM19 11.25C19 11.6642 18.6642 12 18.25 12C17.8358 12 17.5 11.6642 17.5 11.25C17.5 10.8358 17.8358 10.5 18.25 10.5C18.6642 10.5 19 10.8358 19 11.25ZM15.25 12C15.6642 12 16 11.6642 16 11.25C16 10.8358 15.6642 10.5 15.25 10.5C14.8358 10.5 14.5 10.8358 14.5 11.25C14.5 11.6642 14.8358 12 15.25 12ZM17.5 12.75C17.5 12.3358 17.1642 12 16.75 12C16.3358 12 16 12.3358 16 12.75C16 13.1642 16.3358 13.5 16.75 13.5C17.1642 13.5 17.5 13.1642 17.5 12.75Z" fill="CurrentColor"></path>
</svg>

                        <strong class="font-1">Games Wallet</strong>
                        <strong class="desc">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(Auth::guard('users')->user()->deposit_balance) }}</strong>
                    </div>
                </div>
                {{-- WALLET SELECTED --}}
                <input type="hidden" name="wallet" class="input wallet">
                {{-- BANK DETAILS --}}
                  @if ($bank_linked !== 'false')
            <div style="border:1px solid var(--bg-lighter)" class="w-full no-select m-x-auto max-w-500 p-10 bg-light border-1 g-10">
                <span class="row m-y-10">Your Account Details</span>
            <div class="row space-between g-10 align-center">
                <strong class="font-1"  style="color:silver">Account Number :</strong>
                <span>{{ $bank->account_number }}</span>
            </div>
               <div class="row space-between g-10 align-center">
                <strong style="color:silver" class="font-1 text-silver">Bank Name:</strong>
                <span>{{ $bank->bank_name }}</span>
            </div>
            <div class="row space-between g-10 align-center">
                <strong class="font-1"  style="color:silver">Account Holder Name :</strong>
                <span>{{ $bank->account_name }}</span>
            </div>
           <div onclick="spa(event,'{{ url('users/bank/add') }}')" class="w-full w-fit m-left-auto m-top-10 clip-0 br-0 btn-primary-3d no-select pointer row h-40 p-10 align-center justify-center">
          <span>  Update Bank </span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

           </div>
        </div>
       @endif
       {{-- WITHDRAWAL AMOUNT --}}
                <label for="">Enter Withdrawal Amount</label>
                <div style="border:1px solid var(--bg-lighter)" class="cont row align-center bg-light w-full h-50">
                    <input placeholder="Enter withdrawal amount" name="amount" type="number" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                <span class="minimum_text"></span>
                
                 {{-- WITHDRAWALL PIN --}}
                  <span>Enter Withdrawal Pin</span>
                <div class="row align-center w-full g-10  place-center">
                <div style="border:1px solid var(--bg-lighter)" class="cont h-50 w-50 bg-light">
                    <input name="pin-1" oninput="if((this.value).length == 1){
                    this.closest('.row').querySelector('.pin-2').focus();
                    
                    }" type="text" inputmode="numeric" placeholder="*" maxlength="1" class="inp pin-1 text-center bold input required w-full h-full border-none bg-transparent">
                </div>
                <div style="border:1px solid var(--bg-lighter)" class="cont h-50 w-50 bg-light">
                     <input name="pin-2" onkeydown="if(event.key == 'Backspace' || event.key == 'Delete'){
                     this.value='';
                     this.closest('.row').querySelector('.pin-1').focus();
                     }" oninput="if((this.value).length == 1){
                    this.closest('.row').querySelector('.pin-3').focus();
                    
                    }" type="text" inputmode="numeric" placeholder="*" maxlength="1" class="inp pin-2 text-center bold input required w-full h-full border-none bg-transparent">
                </div>
                <div style="border:1px solid var(--bg-lighter)" class="cont h-50 w-50 bg-light">
                     <input name="pin-3" onkeydown="if(event.key == 'Backspace' || event.key == 'Delete'){
                     this.value='';
                     this.closest('.row').querySelector('.pin-2').focus();
                     }" oninput="if((this.value).length == 1){
                    this.closest('.row').querySelector('.pin-4').focus();
                    
                    }" type="text" inputmode="numeric" placeholder="*" maxlength="1" class="inp pin-3 text-center bold input required w-full h-full border-none bg-transparent">
                </div>
                <div style="border:1px solid var(--bg-lighter)" class="cont h-50 w-50 bg-light">
                     <input name="pin-4" onkeydown="if(event.key == 'Backspace' || event.key == 'Delete'){
                     this.value='';
                     this.closest('.row').querySelector('.pin-3').focus();
                     }" type="text" inputmode="numeric" placeholder="*" maxlength="1" class="inp pin-4 text-center bold input required w-full h-full border-none bg-transparent">
                </div>
             </div>


                 {{-- DISCLAIMER --}}
               
              <div class="w-full column g-2">
                <strong>Disclaimer:</strong>
                <span>Please double-check your withdrawal details before you continue, Please make sure the account detials you have entered are 100% correct and belongs to you. <br>
                If you provide the wrong details,your money could be sent to the wrong account and we would not be able to recover it for you. <br>
                {{  config('app.name')}} is not responsible for funds lost due to incorrect information being entered.
                </span>
              </div>
                <button class="post clip-0 bold br-0">Withdraw Now</button>
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Completed : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,data.url);
                }
            }
        }
    </script>
@endsection