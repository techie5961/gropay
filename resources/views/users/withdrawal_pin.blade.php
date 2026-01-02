@extends('layout.users.app')
@section('title')
    Update Password
@endsection
@section('css')
    <style class="css">
          .setting{
            cursor:pointer;
        }
        .setting.password{
            background:var(--primary);
            color:var(--primary-text);
            pointer-events:none;
        }
    </style>
@endsection
@section('main')
    <section class="w-full g-10 p-10 column flex-auto align-center">
        @include('components.sections',[
            'settings' => true
        ])
        <div class="w-full column g-10 br-10 p-10">
            <div class="row space-between br-10 align-center">

                <span class="desc bold">Set Withdrawal Pin</span>
             
            </div>
            <div class="column g-5 w-full">
               
                <span>Please set a secure withdrawal pin as you must input your withdawal pin before each withdrawal on the platform,this is as a result of protecting your funds from unauthorized withdrawals. </span>
            </div>
            <form action="{{ url('users/post/update/withdrawal/pin/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full column g-10">
           <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="input inp">
                <span>Enter New Withdrawal Pin</span>
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
               <span>Re-Enter New Withdrawal Pin</span> 
                <div class="row align-center w-full g-10  place-center">
                <div style="border:1px solid var(--bg-lighter)" class="cont h-50 w-50 bg-light">
                    <input name="confirm-pin-1" oninput="if((this.value).length == 1){
                    this.closest('.row').querySelector('.pin-2').focus();
                    
                    }" type="text" inputmode="numeric" placeholder="*" maxlength="1" class="inp pin-1 text-center bold input required w-full h-full border-none bg-transparent">
                </div>
                <div style="border:1px solid var(--bg-lighter)" class="cont h-50 w-50 bg-light">
                     <input name="confirm-pin-2" onkeydown="if(event.key == 'Backspace' || event.key == 'Delete'){
                     this.value='';
                     this.closest('.row').querySelector('.pin-1').focus();
                     }" oninput="if((this.value).length == 1){
                    this.closest('.row').querySelector('.pin-3').focus();
                    
                    }" type="text" inputmode="numeric" placeholder="*" maxlength="1" class="inp pin-2 text-center bold input required w-full h-full border-none bg-transparent">
                </div>
                <div style="border:1px solid var(--bg-lighter)" class="cont h-50 w-50 bg-light">
                     <input name="confirm-pin-3" onkeydown="if(event.key == 'Backspace' || event.key == 'Delete'){
                     this.value='';
                     this.closest('.row').querySelector('.pin-2').focus();
                     }" oninput="if((this.value).length == 1){
                    this.closest('.row').querySelector('.pin-4').focus();
                    
                    }" type="text" inputmode="numeric" placeholder="*" maxlength="1" class="inp pin-3 text-center bold input required w-full h-full border-none bg-transparent">
                </div>
                <div style="border:1px solid var(--bg-lighter)" class="cont h-50 w-50 bg-light">
                     <input name="confirm-pin-4" onkeydown="if(event.key == 'Backspace' || event.key == 'Delete'){
                     this.value='';
                     this.closest('.row').querySelector('.pin-3').focus();
                     }" type="text" inputmode="numeric" placeholder="*" maxlength="1" class="inp pin-4 text-center bold input required w-full h-full border-none bg-transparent">
                </div>
             </div>
             <span>Enter your account password</span>
             <div style="border:1px solid var(--bg-lighter)" class="cont w-full bg-light h-50">
                <input name="password" type="password" placeholder="Enter Account Password" autocomplete="new-password" readonly onfocus="this.removeAttribute('readonly')" class="inp input required w-full h-full border-none bg-transparent">
             </div>
             
             <button class="post bold">Update Withdrawal Pin</button>
            </form>
        </div>
      
    </section>
    
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Updated : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,'{{ url()->current() }}');
                }
            }
        }
    </script>
@endsection