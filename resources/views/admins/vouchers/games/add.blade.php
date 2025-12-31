@extends('layout.admins.app')
@section('title')
 Create Deposit Voucher
@endsection
@section('main')
     <section class="w-full column p-10 g-10">
        <form action="{{ url('admins/post/create/voucher/process') }}"  method="POST" onsubmit="PostRequest(event,this,MyFunc.Added)" class="w-full bg-white br-10 box-shadow p-10 column g-5">
            <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="input">
            <div class="row w-full align-center g-5">
             <div class="c-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,40H48A24,24,0,0,0,24,64V176a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V64A24,24,0,0,0,208,40Zm8,136a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V64a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8Zm-48,48a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,224ZM157.66,106.34a8,8,0,0,1-11.32,11.32L136,107.31V152a8,8,0,0,1-16,0V107.31l-10.34,10.35a8,8,0,0,1-11.32-11.32l24-24a8,8,0,0,1,11.32,0Z"></path></svg>


                </div>  
                  <strong class="desc c-bg-secondary">Create New Deposit Voucher</strong>
            </div>
            <hr>
            <label for="">How many Vouchers</label>
             <div class="cont w-full h-50 border-1 border-color-silver bg-dim br-10">
                <input name="amount" value="1" placeholder="How many codes do you want to generate" type="number" class="inp no-border input w-full h-full br-10 bg-transparent required">
             </div>
            <label for="" class="m-top-5">Select Vendor</label>
            <div class="cont w-full h-50 border-1 border-color-silver bg-dim br-10">
               <select class="inp no-border input w-full h-full br-10 bg-transparent required" name="vendor_id" id="">
                <option value="" selected disabled>Choose Vendor</option>
                <option value="0">Non Vendor</option>
                @if (!$vendors->isEmpty())
                @foreach ($vendors as $data)
                    <option value="{{ $data->id }}">{{ $data->username ?? 'null' }}</option>
                @endforeach
                @endif
               </select>
            </div>
           <label for="">Voucher Value(&#8358;)</label>
             <div class="cont w-full h-50 border-1 border-color-silver bg-dim br-10">
           <input type="number" placeholder="e.g &#8358;3000" class="inp no-border input w-full h-full br-10 bg-transparent required" name="value">
             </div>
            <button class="post bg-secondary secondary-text m-top-20 m-bottom-20 w-full"><span>Create Voucher</span></button>
               <div class="w-full g-5 br-10 bg-green-transparent p-10 row align-center">
                <svg class="min-w-20 min-h-20" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--green)" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>
                <span class="c-green font-libertinus-sans">Note that the voucher code is internally generated automatically on submission and is based on the vendor and value entered,upon redemption by a user,his or her deposit wallet would be creditted the value of the voucher inputted.</span>
               </div>
        </form>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Added : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.href=data.url;
                }
            }
        }
      
    </script>
@endsection