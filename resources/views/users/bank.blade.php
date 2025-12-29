@extends('layout.users.app')
@section('title')
    Add Bank Account
@endsection
@section('css')
    <style class="css">
        .verifying.resolved svg{
            display:none;
        }
        .verifying.resolved.success span{
            color:#4caf50;
        }
         .verifying.resolved.success svg.success{
            display:flex !important;
        }
          .verifying.resolved.error span{
            color:red;
        }
        .verifying.resolved.error svg.error{
            display:flex !important;
        }
        .setting{
            cursor:pointer;
        }
        .setting.bank{
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
        <div class="bg-inherit w-full column g-10 br-10 p-10">
            <div class="row space-between br-10 align-center">

                <span class="desc bold">Payment Settings</span>
              
            </div>
            <div class="column g-5 w-full">
             
                <span>You can add or update your bank details at anytime ,just make sure you are adding the correct bank as all withdrawals are sent inti the bank linked upon withdrawal.</span>
            </div>
            <form action="{{ url('users/post/add/bank/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Added)" class="w-full column g-10">
               <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <label for="">Account Number</label>
                <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light">
                    <input oninput="

      if((document.querySelector('.account-number').value).length == 10 &&   document.querySelector('.bank-code').value !== ''){
        document.querySelector('.verifying').classList.remove('display-none');
         document.querySelector('.verifying').classList.remove('success');
       document.querySelector('.verifying').classList.remove('error');
        document.querySelector('.verifying').classList.remove('resolved');
          document.querySelector('button.post').classList.add('disabled');
          document.querySelector('.verifying span').innerHTML='VERIFYING ACCOUNT NAME....'; 
      GetRequest(event,'{{ url('users/get/bank/auto/verify') }}?account_number=' + document.querySelector('.account-number').value + '&bank_code=' +   document.querySelector('.bank-code').value,document.createElement('div'),MyFunc.Verified);

        }
        " placeholder="Enter 10 digits account number" name="account_number" type="number" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">Account Bank</label>
                <div onclick="SlideUp()" style="border:0.1px solid var(--bg-lighter)" class="cont row align-center space-between g-10 p-10 no-select w-full h-50 bg-light">
                 <input type="hidden" class="bank-code">
                 <input type="hidden" name="bank_name" class="inp bank-name input required">
                    <span class="bank-selected">Select Bank</span>
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                </div>
                <div class="bg-green-transparent display-none verifying row g-5 align-center no-select w-full br-10 p-10">
                    <svg fill="currentColor" height="30" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_XR07" begin="0;spinner_npiH.begin+0.4s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="0;spinner_npiH.begin+0.4s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="0;spinner_npiH.begin+0.4s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_r5ci" begin="spinner_XR07.begin+0.4s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_XR07.begin+0.4s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_XR07.begin+0.4s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_npiH" begin="spinner_XR07.begin+0.8s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_XR07.begin+0.8s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_XR07.begin+0.8s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" class="success display-none" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" class="error display-none" height="20" fill="#ff0000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm37.66,130.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>

                  <span>VERIFYING ACCOUNT NAME....</span>
                </div>
                <input type="hidden" name="account_name" class="input account_name">
                <button class="post br-0 clip-0 bold disabled">Update Bank Details</button>
            </form>
        </div>
       @if ($bank_linked !== 'false')
            <div style="border:0.1px solid var(--bg-lighter)" class="w-full max-w-500 p-10 bg-light column g-10">
                <div style="background:var(--bg-lighter)" class="w-full p-10 bold desc br-0 justify-center text-center">Current Bank Details</div>
            <div class="row space-between g-10 align-center">
                <strong class="font-1" style="color:silver">Account Number :</strong>
                <span>{{ $bank->account_number }}</span>
            </div>
               <div class="row space-between g-10 align-center">
                <strong class="font-1" style="color:silver">Bank Name:</strong>
                <span>{{ $bank->bank_name }}</span>
            </div>
            <div class="row space-between g-10 align-center">
                <strong class="font-1" style="color:silver">Account Holder Name :</strong>
                <span>{{ $bank->account_name }}</span>
            </div>
        </div>
       @endif
    </section>
@endsection
@section('slideup_child')
<strong class="desc c-primary m-right-auto p-10 no-select">Select Bank</strong>
    @foreach (Banks()->data as $data)
        <div onclick="
    try{
      HideSlideUp();
      document.querySelector('.bank-selected').innerHTML='{{ $data->name }}';
      document.querySelector('.bank-code').value={{ $data->code }};
       document.querySelector('.bank-name').value='{{ $data->name }}';
      if((document.querySelector('.account-number').value).length == 10){
      document.querySelector('.verifying').classList.remove('display-none');
      document.querySelector('.verifying').classList.remove('success');
       document.querySelector('.verifying').classList.remove('error');
        document.querySelector('.verifying').classList.remove('resolved');
          document.querySelector('button.post').classList.add('disabled');
       document.querySelector('.verifying span').innerHTML='VERIFYING ACCOUNT NAME....'; 
        GetRequest(event,'{{ url('users/get/bank/auto/verify') }}?account_number=' + document.querySelector('.account-number').value + '&bank_code={{ $data->code }}',document.createElement('div'),MyFunc.Verified);

        }
    }catch(error){
    CreateNotify('error',error.stack);
    }
        " class="w-full p-10 no-select pointer clip-10 br-10 br-10 row align-center g-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#708090" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

            {{ $data->name }}
        </div>
    @endforeach
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Added : function(response,event){
                  let data=JSON.parse(response);
                if(data.status == 'success'){
                   spa(event,"{{ url('users/bank/add') }}");
                }
            },
            Verified : function(response){
               if(IsJSONABLE(response)){
                 let data=JSON.parse(response);
                document.querySelector('.verifying span').innerHTML=data.message;
                document.querySelector('.verifying').classList.add('resolved');
                document.querySelector('.verifying').classList.add(data.status);
                if(data.status == 'success'){
                    document.querySelector('input.account_name').value=data.message;
                    document.querySelector('button.post').classList.remove('disabled');

                }

               }else{
                CreateNotify('error',response);
               }
            }
          
        }
    </script>
@endsection