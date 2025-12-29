@extends('layout.users.index')
@section('title')
    Top Earners
@endsection
@section('css')
<style class="css">
     .quick-link{
            position:relative;
            

        }
        .quick-link .group{
            z-index:20;
            position:relative;
        }
        .quick-link::before{
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
         .quick-link::after{
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
</style>
    
@endsection
@section('main')
    <section class="w-full column g-10">
        <strong class="hero-title m-right-auto">Top Earners</strong>
        <span>Top users with the highest all time earnings.You can also be here.</span>
        @if ($top->isEmpty())
            @include('components.sections',[
                'null' => 'true',
                'text' => 'No Data Found'
            ])
        @else
         <div class="grid pc-grid-2 w-full g-10 place-center">
          
        @foreach ($top as $data)
             <div style="border:1px solid var(--bg-lighter);box-shadow:inset 5px 5px 20px var(--primary)" class="w-full align-center space-between bg-light br-10 p-20 row g-10">
                <img src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-70 w-70 circle">
             
              
                <div class="column m-right-auto g-5">
                        <span class="desc" >{{ ucfirst($data->user->username) }}</span>
                       <strong style="font-size:2rem;font-weight:900">&#8358;{{ number_format($data->total,2) }}</strong>
                     
                    </div>
                    <strong style="font-size:3rem;font-weight:900;">{{ $loop->iteration }}</strong>
                       
            </div>
        @endforeach
         </div>
            
        @endif
       </section>
@endsection