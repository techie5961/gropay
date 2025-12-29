@extends('layout.users.app')
@section('title')
    Tasks
@endsection
@section('main')

    <section class="grid w-full pc-grid-2 g-10 p-10">
       
        @if ($tasks->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No task available at the moment,check back later'
            ])
        @else
        <strong class="desc grid-full">Available Tasks</strong>
            @foreach ($tasks as $data)
            <div style="border:1px solid var(--bg-lighter)" class="column  w-full no-select g-10 p-10 br-10 bg-light box-shadow">
                <div class="row w-full align-center space-between">
                   <div class="row align-center g-5">
                    <div style="background:var(--bg-lighter);border:1px solid var(--bg)" class="h-40 w-40 circle column justify-center bg-light">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80v28a4,4,0,0,0,4,4H64V96.27A8.17,8.17,0,0,1,71.47,88,8,8,0,0,1,80,96v16h96V96.27A8.17,8.17,0,0,1,183.47,88,8,8,0,0,1,192,96v16h44a4,4,0,0,0,4-4V80A16,16,0,0,0,224,64Zm-64,0H96V56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Zm80,68v60a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V132a4,4,0,0,1,4-4H64v16a8,8,0,0,0,8.53,8A8.17,8.17,0,0,0,80,143.73V128h96v16a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25V128h44A4,4,0,0,1,240,132Z"></path></svg>

                    </div>
                     <strong>{{ $data->title ?? 'null' }}</strong>
                   </div>
                    <div class="p-y-5 p-x-10 c-white bg-green br-5 bold">Reward : {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($reward ?? 0,2) }}</div>
                </div>
                <hr>
                <span class="text-average"> - Click the button below to perform the task <br> - Note that not performing task would lead to permanent banning of your account so be warned.</span>
            <div class="w-full br-1000 h-5 bg-green"></div>
           <div class="row w-full align-center space-between">
             <span>Rate Done</span>
            <span>{{ $data->completed }}/{{ $data->limit }}</span>
        
           </div>
         
           <div class="grid buttons g-10 place-center w-full align-center">
            <button onclick="
                window.open('{{ $data->link }}');
                this.closest('.buttons').querySelector('.claim-btn').classList.remove('display-none');
                " style="border-radius:1000px;clip-path:inset(0 round 1000px);background:var(--primary) !important;color:var(--primary-text) !important;" class="btn-blue br-2 clip-2 w-full">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80v28a4,4,0,0,0,4,4H64V96.27A8.17,8.17,0,0,1,71.47,88,8,8,0,0,1,80,96v16h96V96.27A8.17,8.17,0,0,1,183.47,88,8,8,0,0,1,192,96v16h44a4,4,0,0,0,4-4V80A16,16,0,0,0,224,64Zm-64,0H96V56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Zm80,68v60a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V132a4,4,0,0,1,4-4H64v16a8,8,0,0,0,8.53,8A8.17,8.17,0,0,0,80,143.73V128h96v16a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25V128h44A4,4,0,0,1,240,132Z"></path></svg>


                <span>Perform this Task</span>
            </button>
                <button onclick='
    let data=` <form action="{{ url("users/post/claim/task/reward/process") }}" onsubmit="PostRequest(event,this,MyFunc.Completed)" class="w-full align-center column p-10 g-20">
            <label style="border:2px dashed var(--bg-lighter);background:var(--bg-light)" class="w-full img-label cont pointer clip-5 br-5 no-select column p-10 justify-center h-fit no-shrink">
                <div class="column summary p-10 align-center text-center g-5">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="50" width="50"><path d="M247.93,124.52C246.11,77.54,207.07,40,160.06,40A88.1,88.1,0,0,0,81.29,88.67h0A87.48,87.48,0,0,0,72,127.73,8.18,8.18,0,0,1,64.57,136,8,8,0,0,1,56,128a103.66,103.66,0,0,1,5.34-32.92,4,4,0,0,0-4.75-5.18A64.09,64.09,0,0,0,8,152c0,35.19,29.75,64,65,64H160A88.09,88.09,0,0,0,247.93,124.52Zm-50.27,9.14a8,8,0,0,1-11.32,0L168,115.31V176a8,8,0,0,1-16,0V115.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32A8,8,0,0,1,197.66,133.66Z"></path></svg>



                    <span>ATTACH SCREENSHOT OF TASK PERFORMED</span>
                    <span>JPG,PNG,JPEG MAX:2MB</span>
                </div>
                <img src="" alt="" class="w-half display-none br-10">
                    <input onchange="MyFunc.Preview(this)" type="file" accept="image/*" class="display-none inp input required">
            </label>
          <input type="text" value="{{ $data->id }}" name="id" class="inp input display-none">
            <input type="text" value="{{ @csrf_token() }}" name="_token" class="inp input display-none">

            <label class="row display-none m-right-auto align-center g-2">
                <input checked required type="checkbox" style="transform:scale(0.7)">
                I have performed the task correctly</label>
                <span class="c-red display-none bold text-average">
                    ⚠️ Warning
Submitting without properly completing the task will result in a permanent ban with no appeal.
All proofs are verified by admins — fake or incomplete submissions are not tolerated.
                </span>
           <div class="row align-center g-10">
             <button style="border-radius:2px;clip-path:inset(0 round 2px);background:var(--primary) !important;color:var(--primary-text) !important" class="btn-blue c-white w-fit">Submit Task</button>
             <button type="button" onclick="MyFunc.Reselect(this)" style="border-radius:2px;clip-path:inset(0 round 2px);background:var(--primary) !important;color:var(--primary-text) !important" class="btn-blue c-white w-fit clip-2 br-2">Re-Select</button>
            </div>
        </form>`;
        PopUp(data)
                ' style="border-radius:1000px;clip-path:inset(0 round 1000px)" class="btn-green g-5 w-full claim-btn display-none">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="CurrentColor"></path>
</svg>

                <span>Claim Task Reward</span></button>
                
              {{-- <button onclick="GetRequest(event,'{{ url('users/get/claim/task/reward?id='.$data->id.'') }}',this,MyFunc.Completed)" class="btn-green claim-btn display-none br-5 clip-5"><span>Claim Reward</span></button> --}}
           </div>
            </div>
        @endforeach
        {{-- @if ($tasks->hasMorePages())
            @include('components.sections',[
                'page' => $tasks->currentPage() + 1,
                'infinite_loading' => true
            ])
        @endif --}}
        @endif
      
    </section>
@endsection
@section('js')
    <script class="js">
        InfiniteLoading();
        window.MyFunc = {
            Completed : function(response,event){
                let data=JSON.parse(response);
                CreateNotify(data.status,data.message);
                if(data.status == 'success'){
                    HidePopUp();
                    spa(event,'{{ url('users/tasks') }}');
                }
            },
            Preview : function(element){
                
                    if(element.files[0]){
                    
                   element.closest(".cont").querySelector("img").src=window.URL.createObjectURL(element.files[0]);
                     element.closest(".cont").querySelector("img").classList.remove("display-none");
                     element.closest(".cont").querySelector(".summary").classList.add("display-none");
                   
                    }else{
                    element.closest(".cont").querySelector("img").src="";
                     element.closest(".cont").querySelector("img").classList.add("display-none");
                     element.closest(".cont").querySelector(".summary").classList.remove("display-none");
                    }
            },
            Reselect : function(element){
                element.closest('form').querySelector('.img-label').click();
                
            }
        }
    </script>
@endsection