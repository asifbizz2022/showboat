<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title></title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{url('/')}}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{url('/')}}/assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="{{ url('/') }}/assets/css/pages/auth-light.css" rel="stylesheet" />
</head>

<body class="bg-silver-300"> 

<div class="container my-1">
@if(Session::has('message'))
<p class="alert alert-success">
<span class="text-black">
	{{ Session::get('message')}}
	</span>
</p>
@endif

 
</div>
    <div class="w-50 mx-auto mt-5"> 
        <div class="card"> 
             <div class="card-header">
                <h5>User Form</h5>
             </div>
            <div class="card-body">
           
            <form  method="POST" action="{{ url('user/register') }}" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
                <div class=" ">
                <div class=" "> </div>
                <label>Profile Name</label>
	 			<input type="text" name="name" class="form-control form-sm" placeholder="Profile Name">
                @error('name')
                    <span class="text-danger" >
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <div class="form-group">
                <div class=" ">
                <div class=" "> </div>
                <label>Profile Image</label>
	 			<input type="file" name="image" class="form-control form-sm" placeholder="Profile Image" onchange='openFile(event)'>
                @error('image')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <img id='output' style="height:100px; width:100px;">
            </div>
            <div class="form-group">
                <div class=" ">
                <div class=" "> </div>
                <label>Email</label>
	 			<input type="text" name="email" class="form-control form-sm" placeholder="Email">
                @error('email')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            
            <div class="form-group">
                <div class=" ">
                <div class=" "> </div>
                <label>Pan Card Number</label>
	 			<input type="text" name="pan" class="form-control form-sm" placeholder="Pan Card Number">
              
                @error('pan')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
          
            <div class="form-group">
                <div class=" ">
                <div class=" "> </div>
                  <label>Adhar Card Number</label>
	 			<input type="text" name="adhar" class="form-control form-sm" placeholder="Adhar Card Number">
                @error('adhar')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>   
            
            <div class="form-group">
                <div class=" ">
                <div class=" "> </div>
                <label>Address</label>
	 			<textarea name="address" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
            </div> 
            <div class="form-group">
                <button type="submit" class="btn btn-info"  >Add User</button>
            </div>

            
            
        </form>
            </div>
        </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script>
        var openFile = function(file) {
            var input = file.target;
            var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var output = document.getElementById('output');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
            };
    </script>
    <script src="{{ url('/') }}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ url('/') }}/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ url('/') }}/assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#register-form').validate({
                errorClass: "help-block",
                rules: {
                    first_name: {
                        required: true,
                        minlength: 2
                    },
                    last_name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        confirmed: true
                    },
                    password_confirmation: {
                        equalTo: password
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>