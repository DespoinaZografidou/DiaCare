@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header" style="background-color: rgba(76, 112, 205, 0.8);display: flex;justify-content: space-between;">
                     <h4 style="color: white">
                         @if($title==='Patient')
                             <i class="fi fi-ss-user-injured"></i>
                         @elseif($title==='Doctor')
                             <i class="fi fi-sr-user-md"></i>
                         @elseif($title==='Admin')
                             <i class="fi fi-sr-admin"></i>
                         @endif

                         &nbsp;&nbsp;{{$title}}s</h4>

                    <div style="width: 120px;">
                        @if($title==='Doctor')
                        <button type="submit" class="btn btn-primary create"  style="background-color: rgba(90, 140, 228, 0.8);border: 2px solid white"> <i class="fi fi-rs-plus"></i>&nbsp;&nbsp;<i class="fi fi-sr-user-md"></i></button>
                        @endif
                    </div>
                </div>

                <table class="card-body">
                    {{--If the are results for the users' table then show the results--}}
                    @if(count($users)!=0)
                        @foreach($users as $u)
                            <tr class="user_tr">
                                <td style="text-align: center;">
                                    <div class="sidebar_image_div">
                                        <div class="sidebar_image_frame neon_border">
                                            <img src="{{ asset($u->profile_pic) }}" class="sidebar_image" alt=""/>
                                        </div>
                                        <div class="sidebar_status  neon_border active_account"></div>
                                    </div>
                                </td>

                                <td><i class="small"><b>{{ $u->firstname}} {{ $u->lastname}}</b><br>{{ $u->email}}</i></td>

                                <td><i class="small">{{ date('d-m-Y H:i:s', strtotime($u->created_at)) }}</i></td>

                                <td class="delete" data-firstname="{{ $u->firstname }}" data-lastname="{{ $u->lastname }}"
                                    data-email="{{ $u->email }}"  data-id="{{ $u->id }}">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="fi fi-sr-circle-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    {{--If there is not any results for this user's table then show the following message--}}
                    @if(count($users)==0)
                        <tr class="shadow-lg">
                            <td>
                                <p>There are not users yet.</p>
                            </td>
                        </tr>
                    @endif
                </table>
            </div>
            {{--the links for the next page of results--}}
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

@include('PopUpForms.ManegeUsers')
@section('sidebar')
    @include('layouts.sidebar')
@endsection
@endsection
