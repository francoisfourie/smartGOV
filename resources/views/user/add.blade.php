<!-- app/views/user/add.blade.php -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMARTGOV</title>
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sidebar.css" />
        <link rel="stylesheet" href="css/acc_reg_cards.css" />
        <link rel="stylesheet" href="css/textbox.css" />
        <link rel="stylesheet" href="css/new_acc_navbar.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Research Funding Application</title>

    </head>
    <body>
        <div class="navbar1">
            <div class="icon">
                <img src="images/gov_logo.png" style="margin-left:5%; width:250px; height:100px;">
            </div>
        </div>
        <div class="nav" style="background-color: darkgreen;">
            <h4 style="color:white; margin-top:2%; margin-left:2%; width:70%">NEW ACCOUNT REGISTRATION</h4>
            <div class="icon">
                <p class="logo" style="color:white; font-size: 50px;">Smart<span style="color:yellow;">GOV</span></p>
                <p class="logo" style="margin-top:-30px; margin-left:30px; color:white; font-size:12px;">POWERED BY QUALITY DESIGNS</p>
            </div>
        </div>


        <div class="navbar" style="background-color: yellow;">  <div class="icon"> </div></div>
        <div class="wrapper" >

            <aside id="sidebar" style="width:25%; background-color:white;">
                <button class="btn" name="btn_login" style="color:darkgreen; border-color: yellow; margin:30px;
        border-size: 13px;">Add Account Details</button>
            </aside>

            {!! Form::model(new App\Models\User, ['route' => ['storeUser']]) !!}
            <div class="main p-3">
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <label style="float:left;">First Name:<span style="color:red;">*</span></label>
                            <input type="text" placeholder="Rikwest" require name="fname">
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <label style="float:left;">Last Name:<span style="color:red;">*</span></label>
                            <input type="text" placeholder="Silindza" require name="lname">
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <label style="float:left;">Contact No:<span style="color:red;">*</span></label>
                            <input type="text" placeholder="+27 76 531 9631"require name="number">
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <label style="float:left;">e-Mail Address:</label>
                            <input type="email" placeholder="rikwest@qdsystems.net" name="email">
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="column" style="width:48%;">
                        <div class="card">
                            <label style="float:left;">Upload Image:</label>
                            <input type="file"  require name="image">
                        </div>
                    </div>
                    <div class="column" style="width:48%;">
                        <div class="form-group">
                            <label style="float:left;">Role:<span style="color:red;">*</span></label>
                            <select class="form-control input-sm form-control-sm" name="role_id" id="role_id">
                            <option value="">Select a User Role</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}" @if(old('role_id')==$role->id)
                                    selected="selected"@endif>{{$role->description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="column" style="width:48%;">
                        <div class="card">
                            <label style="float:left;">District:<span style="color:red;">*</span></label>
                            <select class="form-control input-sm form-control-sm" name="district_id" id="district_id">
                            <option value="">Select District</option>
                                @foreach($districts as $district)
                                    <option value="{{$district->id}}" @if(old('district_id')==$district->id)
                                    selected="selected"@endif>{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="column" style="width:48%;">
                        <div class="card">
                            <label style="float:left;">Institution:<span style="color:red;">*</span></label>
                            <select class="form-control input-sm form-control-sm" name="institution_id" id="institution_id">
                            <option value="">Select Hospital or Clinic</option>
                            @foreach($institutions as $institution)
                                <option value="{{$institution->id}}" @if(old('institution_id')==$institution->id)
                                selected="selected"@endif>{{$institution->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div> <br>

                <div class="row">
                    <div class="column" style="width:32%;">
                        <div class="card">
                            <label style="float:left;">User Name:</label>
                            <input type="text" placeholder="User Name" require name="userName">
                        </div>
                    </div>
                    <div class="column" style="width:32%;">
                        <div class="card">
                            <label style="float:left;">Create Password:</label>
                            <input type="password" placeholder="**********" require name="password">
                        </div>
                    </div>
                    <div class="column" style="width:32%;">
                        <div class="card">
                            <label style="float:left;">Confirm Password:</label>
                            <input type="password" placeholder="**********" require name="cpassword">
                        </div>
                    </div>
                </div>
                <a href="{!!URL::route('login')!!}" class="btn btn-info" role="button">CANCEL</a>
                {!! Form::submit('REGISTER', array('class' => 'btn btn-primary')) !!}

                {!! Form::close() !!}
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
            <script src="script.js"></script>
        </div>
    </body>
</html>