@extends('layout.users.app')
@section('title')
    Deposit
@endsection
@section('main')
   <section class="w-full g-10 p-10 column flex-auto align-center">
       
        <div class="bg-inherit w-full column g-10 br-10 p-10">
            <div class="row space-between br-10 align-center">

                <span class="desc bold">Redeem Deposit Voucher</span>
              
            </div>
            <div class="column g-5 w-full">
             
                <span>Enter the voucher code in the input area below and click on the button to redeem it, If you dont have a vouche code contact any of our verified vendorss on the platform to get one.</span>
            </div>
            <form action="{{ url('users/post/redeem/deposit/voucher/process') }}" method="POST" onsubmit="PostRequest(event,this)" class="w-full column g-10">
               <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
              
                  <label for="">Voucher Code</label>
                <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center space-between g-10 p-10 no-select w-full h-50 bg-light">
                <input name="code" placeholder="Enter voucher code" type="text" class="w-full inp input required h-full br-10 border-none bg-transparent">
               
                </div>
                
                <input type="hidden" name="account_name" class="input account_name">
                <button class="post br-0 clip-0 bold">Redeem Voucher</button>
                <span class="row bold g-10 m-x-auto text-center">Dont have a voucher code? <a href="{{ url('vendors') }}" class="c-primary">Purchase one</a></span>
            </form>
        </div>
    
    </section>
@endsection