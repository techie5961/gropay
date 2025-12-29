@extends('layout.users.app')
@section('title')
    Team
@endsection
@section('main')
    <section class="w-full grid pc-grid-2 g-5 p-10">
        @if ($team->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No Referrals Found'
            ])
        @else
        <strong class="desc grid-full">My Team</strong>
            @foreach ($team as $data)
                <div style="border:1px solid var(--bg-lighter)" class="w-full br-10 p-10 bg-light column g-10">
                    <div class="row align-center w-full g-10 space-between">
                        <img src="{{ asset('users/'.$data->photo.'') }}" alt="User Photo" class="circle clip-circle h-50 w-50">
                        <div class="column g-5 m-right-auto">
                            <strong class="font-1 bold no-select">{{ $data->name }}</strong>
                          
                               <span style="color:silver" class="row align-center">
                                   @if ($data->ref == Auth::guard('users')->user()->username)
                                    Level 1
                                    @else
                                    Indirect
                                @endif</span>
                                <div style="background:greenyellow;color:black;font-weight:bolder;padding:5px 10px;border-radius:5px;" class="w-fit p-5 p-x-10 br-2">Completed</div>
                                </div>
                                <strong style="color:greenyellow" class="c-green font-1">+ {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($data->commission,2) }}</strong>



                               
                    </div>
                  
                   
                  
                </div>
            @endforeach
        @endif
    </section>
@endsection