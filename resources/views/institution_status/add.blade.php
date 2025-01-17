<!-- app/views/institution_status/add.blade.php -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sidebar With Bootstrap</title>
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sidebar.css" />
        <link rel="stylesheet" href="css/users_list.css" />
        <link rel="stylesheet" href="css/search_bar.css" />
        <link rel="stylesheet" href="css/forms.css" />
        <title>Smart Gov</title>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/nav_profile.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/forms2.css" />

        <script>
            $(document).ready(function(){
                $(".profile .icon_wrap").click(function(){
                    $(this).parent().toggleClass("active");
                    $(".notifications").removeClass("active");
                });

                $(".notifications .icon_wrap").click(function(){
                    $(this).parent().toggleClass("active");
                    $(".profile").removeClass("active");
                });

                $(".show_all .link").click(function(){
                    $(".notifications").removeClass("active");
                    $(".popup").show();
                });

                $(".close").click(function(){
                    $(".popup").hide();
                });
            });
        </script>
    </head>
//<?php
//session_start();
//include "conn.php";
//$current_user = $_SESSION['currentUser'];
//?>
//<?php
//if(isset($_POST['btn_cancel'])) {
//    echo"<script>location.href = 'modules.php?'</script>";
//}
//if(isset($_POST['btn_capture'])) {
//    echo"<script>location.href = 'hospital2.php?'</script>";
//}
//?>
    <body>

    <!-- NAVIGATION WITH LOGO AND USER PROFILE -->
    {!! Form::model(new App\Models\InstitutionDailyStatus, ['route' => ['storeInstMan']]) !!}
        <!-- ============================================================= -->
        <div class="row" style=" background-color: white;">
            <div class="column" style="float:left;">
                <img src="img/NEW KZNDOH logo1.png" style="margin-left:5%; width:350px; height:100px;">
            </div>
            <div class="column" style="width:20%; float:right;">
                <div class="column" style="width:12%; float:right;">
                    <img src="img/pic.png" alt="profile_pic" style="height:60px; width:60px; margin-top:20px;">
                </div>
                <div class="column" style=" margin-top:30px; float:right; ">
                    <span class="name" style="color:black; ">Nzuki Mtshazi</span>
                    <li ><a href="test.php"><span  style="color:black;  align: center;"><img src="img/edit.png" style="height:15px; width:15px;"></span>Edit</a>
                        <a href="index.php"><span style="color:black; margin-left:20px;"><img src="img/log-out.png" style="height:15px; width:15px;"></span>Logout</a></li>
                </div>
            </div>
        </div>
         <!-- =================================================================== -->

        <div class="wrapper">

            <aside id="sidebar" style="background-color:darkgreen;">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="#">SIDE MENU</a>
                    </div>
                </div>

                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="dashboard.php" class="sidebar-link">
                            <img src="img/Dashboard 1.png" style="height:25px; width:25px; color:white;">
                            <span>DASHBOARD</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="modules.php" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <img src="img/Modules 1.png" style="height:25px; width:25px; color:white;">
                            <span>MODULES</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar1">
                            <li class="sidebar-item">
                                <a href="air_ambulance1.php" class="sidebar-link">Air Ambulance</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="complaints1.php" class="sidebar-link">Complaints</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="emergency1.php" class="sidebar-link">Emergency Medical Services</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="generic1.php" class="sidebar-link">Generic Call</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="hospital.php" class="sidebar-link">Hospital / Clinic Daily Status</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="forensic.php" class="sidebar-link">Forensic / Montuary</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="reports.php" class="sidebar-link">
                            <img src="img/Reports 1.png" style="height:25px; width:25px; color:white;">
                            <span>REPORTS</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                            <img src="img/User Management 1.png" style="height:25px; width:25px; color:white;">
                            <span>USERS</span>
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="users.php" class="sidebar-link">All Users</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="users_role.php" class="sidebar-link">User Role Editor</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="user_group.php" class="sidebar-link">User Group SMS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="news.php" class="sidebar-link">
                            <img src="img/News & Events 1.png" style="height:25px; width:25px; color:white;">
                            <span>NEWS & EVENTS</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="gallery.php" class="sidebar-link">
                            <img src="img/Gallery 1.png" style="height:25px; width:25px; color:white;">
                            <span>GALLERY</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="settings.php" class="sidebar-link">
                            <img src="img/Settings 1.png" style="height:25px; width:25px; color:white;">
                            <span>SETTINGS</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="index.php" class="sidebar-link">
                        <img src="img/log-out.png" style="height:25px; width:25px; color:white;">
                        <span>Logout</span>
                    </a>
                </div>
            </aside>

            <div class="main p-3">
                <div class="navbar" style="background-color: yellow; margin-left:-15px; margin-top:-15px;">
                    <!-- ================================ SEARCH BAR ================================ -->
                    <div class="row1" style=" background-color: yellow; width:100%;">
                        <div class="column1" style="float:left; width:40%;">
                            <span class="name" style="color:black; "><strong>HOSPITAL / CLINIC DAILY STATUS</strong></span>
                        </div>
                        <div class="column1" style="float:right; width:30%;">
                            <input type="text" class="txt_search" placeholder="Search" name="search" style="display:none;">
                            <button type="submit" class="btn_search" style="display:none;"><i class="fa fa-search" style="color:black;"></i></button>

                            <div class="column1" style="float:right; width:10%;">
                                <button class="btn_add" style="width:70%;"><i class="fa fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- ===================================================================================== -->
                </div>

                <!-- ============================================ Caller Details ========================================= -->
                <fieldset class="fieldset" style="display:inline;">
                    <legend class="legend">Caller Details</legend>
                    <div class="user-details" style="display:inline;">
                        <div class="input-box4">
                            <span class="details">Name:</span>
                            <input type="text" name="name" required>
                        </div>
                        <div class="input-box4">
                            <span class="details">Role:</span>
                            <select class="form-control input-sm form-control-sm" id="role_id" name="role_id" required>
                                <option value="">Select User Role</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-box4">
                            <span class="details">Mobile:</span>
                            <input type="text" name="mobileNo" required>
                        </div>
                        <div class="input-box4">
                            <span class="details">e-Mail Address:</span>
                            <input type="text" name="email" required>
                        </div>
                    </div>
                </fieldset>
                <!-- ============================================ Institution Details ========================================= -->
                <fieldset class="fieldset" style="display:inline;">
                    <legend class="legend">Institution Details</legend>
                    <div class="user-details" style="display:inline;">
                        <div class="input-box5">
                            <span class="details">District:</span>
                            <select class="form-control input-sm form-control-sm" id="district" name="district" required>
                                <option value="">Select District</option>
                                @foreach($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-box4">
                            <span class="details">Institution:</span>
                            <select class="form-control input-sm form-control-sm" name="institution" id="institution" required>
                                <option value="">Select Hospital or Clinic</option>
                                @foreach($institutions as $institution)
                                <option value="{{$institution->id}}" @if(old('institution_id')==$institution->id)
                                selected="selected"@endif>{{$institution->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-box5">
                            <span class="details">Type:</span>
                            <select name="institution_type" id="institution_type" required>
                                <option value="*">Choose Institution Type</option>
                                <option value="Hospital">Hospital</option>
                                <option value="Clinic">Clinic</option>
                            </select>
                        </div>
                        <div class="input-box5">
                            <span class="details">Manager:</span>
                            <input type="text" name="manager" required>
                        </div>
                        <div class="input-box5">
                            <span class="details">Mobile No:</span>
                            <input type="text" name="contactNo" required>
                        </div>
                    </div>
                </fieldset>

                <!-- ============================================ Daily Statistics ========================================= -->
                <fieldset class="fieldset" style="display:inline;">
                    <legend class="legend">Daily Statistics</legend>
                    <div class="user-details" style="display:inline;">
                        <div class="input-box5">
                            <span class="details">No of Admissions:</span>
                            <input type="number" name="admissions" required>
                        </div>
                        <div class="input-box5">
                            <span class="details">Additional Admission's Information:</span>
                            <input type="text" name="admission_info" required>
                        </div>
                    </div>
                    <div class="user-details" style="display:inline;">
                        <div class="input-box5">
                            <span class="details">No of Deaths:</span>
                            <input type="number" name="death_count" required>
                        </div>
                        <div class="input-box5">
                            <span class="details">Cause of Deaths:</span>
                            <input type="text" name="cause_of_death" required>
                        </div>
                    </div>
                    <div class="user-details" style="display:inline;">
                        <div class="input-box5">
                            <span class="details">No of Births:</span>
                            <input type="number" name="birth_count" required>
                        </div>
                        <div class="input-box5">
                            <span class="details">Additional Birth's information:</span>
                            <input type="text" name="birth_info" required>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="legend">Beds Occupancy</legend>
                    <div id="departmentRows">
                        <tr>
                            <th>Department</th>
                            <th>Total No of Beds</th>
                            <th>Beds Available</th>
                            <th>Beds Occupied</th>
                            <th>Occupancy Rate</th>
                        </tr>
                        <!-- Default department row -->
                        <div class="department-row">
                            <input type="text" name="departments[0][name]" placeholder="Department" required>
                            <input type="number" name="departments[0][count]" placeholder="Total Beds" required oninput="calculateOccupancyRate(0)">
                            <input type="number" name="departments[0][available]" placeholder="Beds Available" required oninput="calculateOccupancyRate(0)">
                            <input type="number" name="departments[0][occupied]" placeholder="Beds Occupied" required oninput="calculateOccupancyRate(0)">
                            <input type="text" name="departments[0][rate]" placeholder="Occupancy Rate" disabled>
                        </div>
                    </div>

                    <!-- Button to add new department row -->
                    <button type="button" onclick="addDepartmentRow()">Add Department</button>
                </fieldset>
                <!-- ====================================== Call Status =============================================== -->
                <fieldset class="fieldset" style="display:inline;">
                    <legend class="legend">Call Status</legend>
                    <div class="user-details" style="display:inline;">
                        <div class="input-box1">
                            <span class="details">Additional Information:</span>
                            <textarea id="w3review" name="additional_info" required></textarea>
                        </div>
                    </div>
                </fieldset>
            </div>
            <a href="{!!URL::route('login')!!}" class="btn btn-info" role="button">CANCEL</a>
            {!! Form::submit('CAPTURE', array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}
        </div>

    <script>
        let departmentCount = 1; // Start with the initial department row.

        // Function to calculate occupancy rate
        function calculateOccupancyRate(index) {
            const totalBeds = document.querySelector(`input[name="departments[${index}][count]"]`).value;
            const bedsOccupied = document.querySelector(`input[name="departments[${index}][occupied]"]`).value;

            if (totalBeds && bedsOccupied) {
                const occupancyRate = (bedsOccupied / totalBeds) * 100;
                document.querySelector(`input[name="departments[${index}][rate]"]`).value = occupancyRate.toFixed(2) + '%';
            } else {
                document.querySelector(`input[name="departments[${index}][rate]"]`).value = '';
            }
        }

        // Function to add a new department row dynamically
        function addDepartmentRow() {
            const departmentRows = document.getElementById("departmentRows");
            const newRow = document.createElement("div");
            newRow.classList.add("department-row");

            newRow.innerHTML = `
            <input type="text" name="departments[${departmentCount}][name]" placeholder="Department" required>
            <input type="number" name="departments[${departmentCount}][count]" placeholder="Total Beds" required oninput="calculateOccupancyRate(${departmentCount})">
            <input type="number" name="departments[${departmentCount}][available]" placeholder="Beds Available" required oninput="calculateOccupancyRate(${departmentCount})">
            <input type="number" name="departments[${departmentCount}][occupied]" placeholder="Beds Occupied" required oninput="calculateOccupancyRate(${departmentCount})">
            <input type="text" name="departments[${departmentCount}][rate]" placeholder="Occupancy Rate" disabled>
        `;

            departmentRows.appendChild(newRow);
            departmentCount++;
        }
        $(document).ready(function() {
            // On district change, make an AJAX request to get the institutions
            $('#district').change(function() {
                var districtId = $(this).val();
                if (districtId) {
                    $.ajax({
                        url: '/smartGOV/public/get-institutions/' + districtId,
                        type: 'GET',
                        success: function(data) {
                            $('#institution').html('<option value="">Select Institution</option>'); // Clear current options
                            $.each(data, function(key, value) {
                                $('#institution').append('<option value="'+value.id+'">'+value.name+'</option>');
                            });
                        }
                    });
                } else {
                    $('#institution').html('<option value="">Select Institution</option>');
                }
            });
        });
    </script>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <script src="script.js"></script> -->
    </body>
</html>