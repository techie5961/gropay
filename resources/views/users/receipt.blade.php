@extends('layout.users.app')
@section('title')
    Transaction Receipt
@endsection
@section('css')
    <style class="css">
        body{
            overflow: hidden;
          
        }
        .house{
              background-image:url('{{ asset('images/IMG_1495.WEBP') }}');
            background-color:var(--bg);
            background-size:cover;
            background-position:center;
            z-index:5000;
        }
        .status-details{
            position:relative;
            margin-top:30px !important;
            width:80%;
            margin-left:auto;
            margin-right:auto;
        }
        .status-details::before{
            position:absolute;
            content:'';
            left:50%;
           bottom:100%;
           transform:translateX(-50%);
           border-left:5px solid transparent;
           border-right:5px solid transparent;
           border-bottom:5px solid var(--bg-lighter);
        }
       
    </style>
@endsection
@section('main')
    <section class="pos-fixed column align-center no-select p-10 house top-0 left-0 bottom-0 right-0">
        <div class="row bg-transparent trx-head backdrop-blur-10 space-between pos-fixed top-0 left-0 right-0 p-10 align-center">
            <div onclick="
            spa(event,'{{ url('users/transactions') }}');
            " class="h-30 pc-pointer w-30 column bg circle justify-center br-10">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.5303 5.46967C10.8232 5.76256 10.8232 6.23744 10.5303 6.53033L5.81066 11.25H20C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H5.81066L10.5303 17.4697C10.8232 17.7626 10.8232 18.2374 10.5303 18.5303C10.2374 18.8232 9.76256 18.8232 9.46967 18.5303L3.46967 12.5303C3.17678 12.2374 3.17678 11.7626 3.46967 11.4697L9.46967 5.46967C9.76256 5.17678 10.2374 5.17678 10.5303 5.46967Z" fill="CurrentColor"></path>
</svg>

            </div>
            <strong class="desc">Transaction Receipt</strong>
            <span></span>
        </div>
        <div style="box-shadow:inset 0 0 50px var(--bg-light)" class="w-full max-w-500 receipt-body br-10 bg-light backdrop-blur-10 p-10">
           <div class="column desc w-fit m-x-auto">
{{ str_contains(strtolower($data->type),'deposit') ? 'Games Withdrawal' : $data->type }}
           </div>
           <strong class="w-fit column m-x-auto" style="font-size:2rem">NGN {{ number_format($data->amount,2) }}</strong>
            <span class="column {{ $data->status == 'success' ? 'c-green' : ($data->status == 'pending' ? 'c-gold' : 'c-red') }} font-1 m-x-auto w-fit">{{ $data->status }}</span>
         {{-- PROGRESS BAR SECTION --}}
          <div class="w-full m-top-10 progress-bar row justify-center g-5">
          <div class="pos-relative column align-center">
              <div class="c-green">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M16.0303 10.0303C16.3232 9.73744 16.3232 9.26256 16.0303 8.96967C15.7374 8.67678 15.2626 8.67678 14.9697 8.96967L10.5 13.4393L9.03033 11.9697C8.73744 11.6768 8.26256 11.6768 7.96967 11.9697C7.67678 12.2626 7.67678 12.7374 7.96967 13.0303L9.96967 15.0303C10.2626 15.3232 10.7374 15.3232 11.0303 15.0303L16.0303 10.0303Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z" fill="CurrentColor"></path>
</svg>

            </div>
            <div style="position:absolute;top:20px;">
                <span class="left-bar-status">Submitted</span>
            </div>
          </div>
            <hr class="bg-green">
            <div class="pos-relative column align-center">
              <div class="c-green">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M16.0303 10.0303C16.3232 9.73744 16.3232 9.26256 16.0303 8.96967C15.7374 8.67678 15.2626 8.67678 14.9697 8.96967L10.5 13.4393L9.03033 11.9697C8.73744 11.6768 8.26256 11.6768 7.96967 11.9697C7.67678 12.2626 7.67678 12.7374 7.96967 13.0303L9.96967 15.0303C10.2626 15.3232 10.7374 15.3232 11.0303 15.0303L16.0303 10.0303Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z" fill="CurrentColor"></path>
</svg>

            </div>
            <div style="position:absolute;top:20px;">
                <span>Processing</span>
            </div>
          </div>
            <hr class="bg-green">
             <div class="pos-relative column align-center">
              <div class="c-green">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M16.0303 10.0303C16.3232 9.73744 16.3232 9.26256 16.0303 8.96967C15.7374 8.67678 15.2626 8.67678 14.9697 8.96967L10.5 13.4393L9.03033 11.9697C8.73744 11.6768 8.26256 11.6768 7.96967 11.9697C7.67678 12.2626 7.67678 12.7374 7.96967 13.0303L9.96967 15.0303C10.2626 15.3232 10.7374 15.3232 11.0303 15.0303L16.0303 10.0303Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z" fill="CurrentColor"></path>
</svg>

            </div>
            <div style="position:absolute;top:20px;">
                <span class="right-bar-status">{{ $data->status == 'success' ? 'Successfull' : $data->status }}</span>
            </div>
          </div>

          </div>
          {{-- STATUS DETAILS SECTION --}}
               <div style="background:var(--bg-lighter)" class="w-full display-none status-details bg-light timer br-10 p-10 row g-10">
           
            <div class="column g-2">
             
                <span class="text-dim">
                    @switch($data->status)
                        @case('success')
                            Your transaction has been successfully processed
                            @break
                        @case('pending')
                            Your transaction is currently being processed
                            @break

                        @default
                            Your transaction has been declined by the system
                    @endswitch
                </span>

                @if ($data->status == 'pending')
                    <span class="row  align-center g-2">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C16.8362 22 20.7567 18.1162 20.7567 13.3253C20.7567 8.53446 16.8362 4.65069 12 4.65069C7.16383 4.65069 3.24334 8.53446 3.24334 13.3253C3.24334 18.1162 7.16383 22 12 22ZM12 8.74705C12.403 8.74705 12.7297 9.0707 12.7297 9.46994V13.0259L14.9484 15.2238C15.2334 15.5061 15.2334 15.9638 14.9484 16.2461C14.6634 16.5284 14.2014 16.5284 13.9164 16.2461L11.484 13.8365C11.3472 13.7009 11.2703 13.5171 11.2703 13.3253V9.46994C11.2703 9.0707 11.597 8.74705 12 8.74705Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.2405 2.33986C8.45409 2.67841 8.3502 3.1244 8.00844 3.33599L4.11657 5.74562C3.77481 5.95722 3.32461 5.8543 3.11102 5.51574C2.89742 5.17718 3.00131 4.7312 3.34307 4.5196L7.23494 2.10998C7.5767 1.89838 8.0269 2.0013 8.2405 2.33986Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.7595 2.33985C15.9731 2.0013 16.4233 1.89838 16.7651 2.10998L20.6569 4.5196C20.9987 4.7312 21.1026 5.17719 20.889 5.51574C20.6754 5.8543 20.2252 5.95722 19.8834 5.74562L15.9916 3.33599C15.6498 3.1244 15.5459 2.67841 15.7595 2.33985Z" fill="CurrentColor"></path>
</svg>

                    Estimated completion:1 to 24 hrs
                    </span>
                @endif
            </div>
          </div>
         
          {{-- DETAILS SECTION --}}
          <div class="column g-10 m-top-50">
  <div class="row w-full align-center g-10 space-between">
    <span class="text-dim">Transaction Type</span>
    <span>{{ str_contains(strtolower($data->type),'deposit') ? 'Games Withdrawal' : $data->type }}</span>
</div>
  <div class="row w-full align-center g-10 space-between">
    <span class="text-dim">Amount</span>
    <span>{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($data->amount,2) }}</span>
</div>
<div class="row w-full align-center g-10 space-between">
    <span class="text-dim">Fee</span>
    <span>{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(0,2) }}</span>
</div>
<div class="row w-full align-center g-10 space-between">
    <span class="text-dim">Transaction Number</span>
    <span>TRX{{ $data->id }}</span>
</div>

@if ($data->class == 'debit')
    <div class="row w-full align-center g-10 space-between">
    <span class="text-dim">Payment Method</span>
    <span>{{ $data->json->wallet == 'deposit_balance' ? 'Games' : ucfirst(explode('_',$data->json->wallet)[0]) }} Wallet</span>
</div>
@else
 <div class="row w-full align-center g-10 space-between">
    <span class="text-dim">Credited to</span>
    <span>{{ $data->json->wallet == 'deposit_balance' ? 'Games' : ucfirst(explode('_',$data->json->wallet)[0]) }} Wallet</span>
</div>
@endif
<div class="row w-full align-center g-10 space-between">
    <span class="text-dim">Transaction Date</span>
    <span>{{ $data->date_format }}</span>
</div>
<div class="row w-full align-center g-10 space-between">
    <span class="text-dim">Session ID</span>
    <span>{{ rand(10000000000000000,999999999999999999) }}</span>
</div>
@if (str_contains(strtolower($data->type),'withdrawal'))
 <div class="row w-full align-center g-10 space-between">
    <span class="text-dim">Recipient Details</span>
    <span>{{ strtoupper($data->json->data->bank->account_name) }} | {{ $data->json->data->bank->account_number }} | {{ $data->json->data->bank->bank_name }}</span>
</div>
@endif
  @if (str_contains(strtolower($data->type),'data bundle'))
                  
          
          <div class="row w-full align-center g-10 space-between">
          
           
                <span class="text-dim">Recipient Mobile</span>
                 <span>{{ $data->json->body->number }}</span>
                
            </div>
          
                   @endif

                    @if (str_contains(strtolower($data->type),'data bundle'))
                  
          
          <div class="row w-full align-center g-10 space-between">
          
           
                <span class="text-dim">Recipient Network</span>
                 
                  <span>{{ $data->json->body->network }}</span>
             
            </div>
          
                   @endif
                    @if (str_contains(strtolower($data->type),'data bundle'))
                  
          
          <div class="row w-full align-center g-10 space-between">
          
           
                <span class="text-dim">Data Bundle</span>
                 
                  <span>{{ ($data->json->body->amount / 1000) }}GB</span>
             
            </div>
          
                   @endif
                    @if (str_contains(strtolower($data->type),'airtime'))
                  
          
          <div class="row w-full align-center g-10 space-between">
          
           
                <span class="text-dim">Recipient Mobile</span>
                 <span>{{ $data->json->body->number }}</span>
                
             
            </div>
          
                   @endif

                    @if (str_contains(strtolower($data->type),'airtime'))
                  
          
          <div class="row w-full align-center g-10 space-between">
          
           
                <span class="text-dim">Recipient Network</span>
                 
                  <span>{{ $data->json->body->network }}</span>
             
            </div>
          
                   @endif
                  
          </div>
        
       
 


           
        
        
  
       
    
        <div style="margin:20px 0" class="row buttons-group w-full m-y-20 align-center g-10 space-between">
        <div onclick="spa(event,'{{ url('users/transactions') }}');" style="background:rgba(255,255,255,0.1)" class="br-1000 pointer p-x-50 p-20 row justify-center h-50">Go Back</div>
          <div class="br-1000 p-x-50 p-20 row justify-center h-50 bg-primary primary-text">Share Receipt</div>
     </div>
    </section>
    
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Restyle : function(){
                try{
                   
                       document.querySelector('.receipt-body').style.marginTop=document.querySelector('.trx-head').getBoundingClientRect().height + 'px';
                    //    let cont_bottom=document.querySelector('.timer').getBoundingClientRect().bottom;
                    // document.querySelector('.line').style.height=cont_bottom - document.querySelector('.timer-circle').getBoundingClientRect().bottom + 'px';
                    document.querySelector('.progress-bar').style.paddingLeft=document.querySelector('.progress-bar').getBoundingClientRect().left - document.querySelector('.left-bar-status').getBoundingClientRect().left + 'px';
                    document.querySelector('.progress-bar').style.paddingRight=Math.abs(document.querySelector('.progress-bar').getBoundingClientRect().right - document.querySelector('.right-bar-status').getBoundingClientRect().right) + 'px';
                    document.querySelector('.progress-bar').style.marginBottom=Math.abs(document.querySelector('.progress-bar').getBoundingClientRect().bottom - document.querySelector('.right-bar-status').getBoundingClientRect().bottom) + 10 + 'px';
                }catch(error){
                    alert(error.stack);
                }
                 }
        }
        MyFunc.Restyle()
    </script>
@endsection


 