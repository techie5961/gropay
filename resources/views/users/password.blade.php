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

                <span class="desc bold">Change Password</span>
             
            </div>
            <div class="column g-5 w-full">
               
                <span>Your password must at least 6 characters and must new password and confirm password must be the same.</span>
            </div>
            <form action="{{ url('users/post/update/password/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full column g-10">
               <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <label for="">Current Password</label>
               <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="current_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">New Password</label>
               <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="new_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">Confirm New Password</label>
              <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="confirm_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                
               
             
                <button class="post br-0 clip-0 bold">Update Account Password</button>
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
                    spa(event,data.url);
                }
            }
        }
    </script>
@endsection