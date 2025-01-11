<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/user-profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


    <title>Document</title>
</head>

<body>
    <?php

    session_start();

    if (isset($_SESSION["id"])) {
        if (isset($_GET['uid'])) {
    ?>
            <div class="container">
                <div class="main-body">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="" alt="Admin" onerror="this.onerror=null; this.src='./images/default-profile.png'" class="rounded-circle" width="150" id="USER-PROFILE">
                                        <div class="mt-3">
                                            <h4 class="username"> </h4>
                                            <p class="text-secondary mb-1 about"></p>
                                            <p class="text-muted font-size-sm address"></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><a href="#" id="WEBSITE"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                                </svg>Website</a></h6>
                                        <span class="text-secondary"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><a href="#" id="GITHUB"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                </svg>Git-Hub</a></h6>
                                        <span class="text-secondary"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><a href="#" id="TWITTER"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                </svg>Twitter</a></h6>
                                        <span class="text-secondary"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><a href="#" id="INSTAGRAM"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                </svg>Instagram</a></h6>
                                        <span class="text-secondary"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><a href="#" id="FACEBOOK"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                </svg>Facebook</a></h6>
                                        <span class="text-secondary"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary username">

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary email">

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Mobile</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary mobile">

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary address">

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <?php
                                        if ($_SESSION["id"] == $_GET['uid']) {
                                        ?>
                                            <div class="col-sm-12">
                                                <a class="btn btn-info " target="__blank" href="edit-user.php?uid=<?php echo $_GET['uid']; ?>">Edit</a>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>

                            <div class="row gutters-sm">
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Programming</i> Status</h6>

                                            <section id="PROGRESSBARS">

                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT5WnDRXo2HbzzblAAJeQmPbZx4lsc5dVn+s66tQp27NvkzC2D" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-7/lgk5dV0tQ5uTGJr5u6SC73qfT0qln/i8dnlJf0aAAoHk7K9+iCf/A12lmoE6O" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


            <!-- CUSTOM SCRIPT   -->
            <script>
                // Load user data
                $.ajax({
                    url: "services/getUserData.php",
                    method: "GET",
                    data: {
                        REASON: "getUserData",
                        u_id: <?php echo $_GET["uid"]; ?>
                    },
                    success: function(data) {

                        // try {
                        data = JSON.parse(data);


                        userData = data.userData;

                        if (userData != null) {
                            $(".username").text(userData.name);
                            $(".email").text(userData.email);
                            $(".mobile").text(userData.mobile);
                            $(".address").text(userData.address);
                            if (userData['user-profile'].trim() != "") {
                                $("#USER-PROFILE").attr("src", userData['user-profile']);
                            }

                            // console.log($(".username"));


                            for (const key in data.socialMedia) {
                                $(`#${key}`).attr("href", data.socialMedia[key]);
                            }

                        } else {
                            alert("Something went wrong");
                            window.location.replace("index.php");
                        }



                        // console.log(data);
                        // } catch (Exception) {
                        //     alert("Something went wrong");
                        // }

                    },
                    error: function(error) {
                        console.error("error = \n", error);
                    }
                });


                // Load progrss bars
                $.ajax({
                    url: "services/getUserData.php",
                    method: "GET",
                    data: {
                        REASON: "getLanguages",
                        uid: <?php echo $_GET["uid"]; ?>
                    },
                    success: function(data) {
                        data = JSON.parse(data)
                        // console.log(data);
                        // -----------

                        data.forEach(obj => {
                            // console.log(obj);

                            let level = parseInt(obj.level);

                            let progress = (level / 3) * 100;

                            $("#PROGRESSBARS").append(`
                            <small>${obj.language}</small>
                                <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: ${progress}%" aria-valuenow="${progress}" aria-valuemin="0" aria-valuemax="100"></div>
                             </div>
                    `);
                        });


                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            </script>

    <?php
        } else {

            showAlert("Not Valid", "Required parameters are missing", "/");
        }
    } else {

        showAlert("Not Valid", "You're Not logged In", "login.html");
    }

    function showAlert($title, $desc, $url)
    {
        echo '
        <div class="container mt-5">
        <div class="card bg-warning text-white">
          <div class="card-header">
            Warning
          </div>
          <div class="card-body">
            <h5 class="card-title">' . $title . '</h5>
            <p class="card-text">' . $desc . '.</p>
            <a href=' . $url . ' class="btn btn-light">CLOSE</a>
          </div>
        </div>
      </div>
    
        ';
    }
    ?>
</body>

</html>