<div class="popup modal" id="user_delete" style="background-color: rgba(176, 190, 227, 0.4)">
    <div class="modal-dialog modal-md" role="document">
        <form class="modal-content" action="{{ route('user.delete',['title'=>$title]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('GET')
            <div class="modal-header" style="background-color: rgba(76, 112, 205, 0.8);" >
                <h5 class="modal-title" style="color: white">Delete User</h5>
                <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light-subtle container">
                <input id="user_id" name="id" value="" hidden>
                <p>Are you sure that you want to delete the user:</p>
                <div class="pl-4" style="display: flex;">
                    <div  class="sidebar_image_div">
                        <div class="sidebar_image_frame">
                            <img src="{{ URL('diacare_logo/diacare_logo.png') }}" class="sidebar_image" alt=""/>
                        </div>
                        <div class="sidebar_status active_account"></div>
                    </div>
                    <p class="pl-2" id="info"></p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary form-control" style="background-color: rgba(90, 140, 228, 0.8);">Delete</button>
            </div>
        </form>
    </div>

</div>


<div class="popup modal" id="create_doctor" style="background-color: rgba(176, 190, 227, 0.4)">
    <div class="modal-dialog modal-md" role="document">
        <form class="modal-content" action="{{ route('user.doctor.create',['title'=>$title]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('GET')
            <div class="modal-header" style="background-color: rgba(76, 112, 205, 0.8);" >
                <h5 class="modal-title" style="color: white">Create New Doctor</h5>
                <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light-subtle container">
                <input id="firstname" placeholder="Firstname" type="text" class="form-control mt-4 @error('firstname') is-invalid @enderror" name="firstname" required  autofocus>
                @error('firstname')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

                <input id="lastname" placeholder="Lastname" type="text" class="form-control mt-4 @error('lastname') is-invalid @enderror" name="lastname"  required >

                @error('lastname')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

                <input id="email" type="email" placeholder="Email" class="form-control mt-4 @error('email') is-invalid @enderror" name="email" required autocomplete="off">

                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

                <input id="password" type="password" placeholder="Password" class="form-control mt-4 @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary form-control" style="background-color: rgba(90, 140, 228, 0.8);">Create</button>
            </div>
        </form>
    </div>

</div>
<script>
    $(document).ready(function (){
        $('.delete').click(function(){
            const {id,firstname, lastname,email}=$(this).data();
            $('#user_id').val(id);
            $('#info').html("<b>"+firstname + " " + lastname +"</b><br>"+ email)
            $('#user_delete').fadeIn();
        });

        $('.create').click(function(){
            $('#firstname').val('');
            $('#lastname').val('');
            $('#email').val('');
            $('#password').val('');
            $('#create_doctor').fadeIn();
        });


        //function that close the popups forms
        $(".popup-close").click(function () {
            $(".popup").fadeOut();
        });
    });


</script>
