
<nav class="navbar navbar-expand-md navbar-light shadow-lg align-items-start py-2 sidebar" >
    <div class="pr-2" style="padding-top: 60px;display: flex">
        <ul class="navbar">

                <i class="nav-item pb-3 mb-3" style="color: white;display: flex;">
                    <div  class="sidebar_image_div">
                        <div class="sidebar_image_frame neon_border">
                            <img src="{{ asset(Auth::User()->profile_pic) }}" class="sidebar_image" alt=""/>
                        </div>
                        <div class="sidebar_status active_account neon_border"></div>
                    </div>

                    <div class="pt-3 pl-3" style="width: 120px">{{Auth::User()->firstname}} {{Auth::User()->lastname}}</div>
                </i>


                    <li class="nav-item button-57 pt-2" style="width: 170px;">
                        <a class="nav-link pl-2" href=""><i class="fi fi-rs-chart-histogram"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Statistics</a>
                    </li>

            @if(Auth::User()->role==='Admin')
                    <li class="choice_drop_down_user button-57 nav-item pt-2" style="width: 170px;">
                        <a class="nav-link pl-2"><i class="fi fi-sr-users-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Users</a>
                    </li>
                    <div class="drop_down_div_user bg-light">
                        <li class="nav-item button-57 pt-2" style="width: 170px;">
                            <a class="nav-link pl-2" href="{{ route('users', ['title'=>'Doctor']) }}" style="color: #07051a;"><i class="fi fi-sr-user-md"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctors</a>
                        </li>
                        <li class="nav-item button-57 pt-2" style="width: 170px;">
                            <a class="nav-link pl-2" href="{{ route('users', ['title'=>'Patient']) }} " style="color: #07051a;"><i class="fi fi-ss-user-injured"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patients</a>
                        </li>
                        <li class="nav-item button-57 pt-2" style="width: 170px;">
                            <a class="nav-link pl-2" href="{{ route('users', ['title'=>'Admin']) }}" style="color: #07051a;"><i class="fi fi-sr-admin"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admins</a>
                        </li>
                    </div>
            @endif


                <li class="nav-item button-57 pt-2 mt-4" style="width: 170px; border-top: 2px solid white">
                    <a class="nav-link pl-2" href="{{route('my.profile')}}"><i class="fi fi-ss-admin-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Profile</a>
                </li>


        </ul>

    </div>
</nav>

<script>

    $(document).ready(function (){
        // Initially hide the drop-down div
        $(".drop_down_div_user").hide();
        $(".drop_down_div_conference").hide();

        // Add click event to the drop-down trigger
        $(".choice_drop_down_user").click(function(){
            // Toggle visibility of the drop-down div
            $(".drop_down_div_user").toggle();

            // Toggle the 'active' class based on the visibility of the drop-down div
            if ($(".drop_down_div_user").is(':visible')) {
                $(".choice_drop_down_user").addClass('active');
            } else {
                $(".choice_drop_down_user").removeClass('active');
            }
        });

    });


</script>


