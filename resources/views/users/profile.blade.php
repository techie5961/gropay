@extends('layout.users.app')
@section('title')
    Users Profile
@endsection
@section('css')
    <style class="css">
        .analytics{
            border:0.1px solid var(--secondary);
            position:relative;
            overflow: hidden;
        }
        .analytics .group{
            z-index:500;
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
         .profile_photo .preview{
            display:none;
        }
        .profile_photo.active .preview{
            display:flex;
            background:var(--bg);
        }
          .setting{
            cursor:pointer;
        }
        .setting.profile{
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

                <span class="desc bold">Edit Profile</span>
             
            </div>
            <div class="column g-5 w-full">
               
                <span>All changes here are effective to your profile details</span>
            </div>
            <form enctype="multipart/form-data" action="{{ url('users/post/update/profile/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full column g-10">
           <div class="row align-center g-10">
              <div style="background-image:url('{{ asset('users/'.Auth::guard('users')->user()->photo.'') }}');background-size:cover;background-position:center;background-color:var(--bg)" class="w-full profile_photo h-100 w-100 circle">
            <img src="" alt="" class="preview w-full h-full circle">
            </div>
             <label class="h-fit no-select pointer w-fit primary-text g-5 br-5 row align-center p-10 p-x-20 bg-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M178.34,165.66,160,147.31V208a8,8,0,0,1-16,0V147.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32ZM160,40A88.08,88.08,0,0,0,81.29,88.68,64,64,0,1,0,72,216h40a8,8,0,0,0,0-16H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.12A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,100.8,66,8,8,0,0,0,3.2,15.34,7.9,7.9,0,0,0,3.2-.68A88,88,0,0,0,160,40Z"></path></svg>

                <span>Choose Image</span>
                <input onchange="
                let file=this.files[0];
                if(file){
                document.querySelector('.profile_photo .preview').src=window.URL.createObjectURL(file);
                document.querySelector('.profile_photo').classList.add('active');
                }else{
                 document.querySelector('.profile_photo').classList.remove('active');
                }
                " class="display-none" name="photo" type="file" accept="image/*">
            </label>
           </div>
                <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <label for="">Full Name</label>
               <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input autocomplete="off" value="{{ Auth::guard('users')->user()->name }}" placeholder="Your Full Name" name="name" type="text" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">Username</label>
               <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input value="{{ Auth::guard('users')->user()->username }}" autocomplete="off" readonly placeholder="Your Username" name="username" type="text" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">Email Address</label>
              <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input value="{{ Auth::guard('users')->user()->email }}" placeholder="Your Email Address" readonly name="email" type="email" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                   <label for="">Phone Number</label>
              <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input value="{{ Auth::guard('users')->user()->phone }}" placeholder="Your Mobile Number" name="phone" type="number" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                 <label for="">Nationality</label>
              <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input value="{{ Auth::guard('users')->user()->country }}" placeholder="Your Nationality" readonly name="country" type="text" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                
               
             
                <button style="height:fit-content !important;padding:10px 20px;" class="post g-5 br-0 h-fit w-fit clip-0 bold">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M219.31,72,184,36.69A15.86,15.86,0,0,0,172.69,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V83.31A15.86,15.86,0,0,0,219.31,72ZM168,208H88V152h80Zm40,0H184V152a16,16,0,0,0-16-16H88a16,16,0,0,0-16,16v56H48V48H172.69L208,83.31ZM160,72a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h56A8,8,0,0,1,160,72Z"></path></svg>
                    <span>Save Changes</span>
                   </button>
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