<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="./styles/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Dashboard</title>
</head>

<body>

    <!-- import required php -->

    <?php
    include("config/config.php");
    ?>

    <!-- END -->

    <nav class="nav">

        <div class="Brndname">Edu.</div>

        <div class="searchField">
            <input type="text" id="searchInput" placeholder="search courses..">
            <label for="searchInput"><i class="fa fa-search" aria-hidden="true"></i></label>
        </div>

        <div class="btnGrps">
            <button class="searchBtn" id="searchBtn">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            <button id="MENU-ICON">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <button id="userIcon">
                <i class="fa fa-user" aria-hidden="true"></i>
            </button>
            <button>
                <i class="fa fa-cog" aria-hidden="true"></i>
            </button>
        </div>

        <div class="userDetails">

            <img src="IMG_20240713_152437_511.jpg" alt="ing not so" id="USER-LOGO">

            <p id="USERNAME"><b>Tushar</b></p>

            <div class="userBtnSection">
                <div class="profBtn">
                    <button>View Profile</button>
                </div>
                <div class="logIn-logOut-btn">
                    <button>Log</button>
                    <button>Log Out</button>
                </div>
            </div>
        </div>

    </nav>

    <main class="main">
        <div class="sidebar">
            <div class="userSide">
                <div class="userProf">

                    <input type="file" name="file" id="profileInput">

                    <img src="IMG_20240713_152437_511.jpg" alt="">
                </div>
                <h3>Tushar Mahajan</h3>
                <p>Student</p>
                <button>
                    View Profile
                </button>
            </div>

            <div>
                <ul>
                    <li><i class="fa fa-home"></i> Home</li>
                    <!-- <li><i class="fa fa-question"></i> About</li> -->
                    <li><i class="fa fa-graduation-cap"></i> courses</li>
                    <li><i class="fa fa-headphones"></i> Contact Us</li>
                </ul>
            </div>
        </div>

        <div class="content">

            <div class="courses">
                <h2>Our Courses</h2>


                <div class="courseCards">

                    <?php

                    $result = mysqli_query($con, "SELECT *FROM languages");


                    while ($row = mysqli_fetch_row($result)) {
                        // print_r($row);
                        echo '
                                <div class="card" onclick="lngClick(' . $row[0] . ')">
                                    <div class="card-heading">
                                        <img src="' . $row[2] . '" alt="">
                                    </div>
                                    <div class="cardbody">
                                        <h3>' . $row[1] . '</h3>
                                    </div>
                                    <div class="cardFooter">
                                        <div class="icon">
                                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-share" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            ';
                    }

                    ?>
                </div>

            </div>
            <br><br>
            <hr><br><br>

            <!--  -->
            <!-- start options section -->
            <div class="options">
                <h2>Quick Options</h2>


                <div class="optionCards">
                    <div class="card">
                        <div class="card-heading">
                            <h3>Contributions</h3>
                        </div>
                        <div class="cardbody">

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-heading">
                            <h3>Learning</h3>
                        </div>
                        <div class="cardbody">

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-heading">
                            <h3>Problems</h3>
                        </div>
                        <div class="cardbody">

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-heading">
                            <h3>Assignments</h3>
                        </div>
                        <div class="cardbody">

                        </div>
                    </div>
                </div>

            </div>

            <br><br>
            <hr><br><br>
            <!-- End options section -->

        </div>
    </main>

    <script>
        // toggle search-bar
        document.getElementById("searchBtn").addEventListener("click", searchBtnToggle);

        let searchField = document.getElementsByClassName("searchField")[0];

        function searchBtnToggle() {

            let displayValue = window.getComputedStyle(searchField).getPropertyValue("display");

            searchField.style.display = displayValue == "block" ? "none" : "block";
        };

        document.getElementById("userIcon").addEventListener("click", () => {
            document.getElementsByClassName("userDetails")[0].classList.toggle("userActive");
        });


        // toggle sidebar
        document.getElementById("MENU-ICON").addEventListener("click", () => {

            let sidebar = document.getElementsByClassName("sidebar")[0];

            let dProperty = window.getComputedStyle(sidebar).getPropertyValue("display");

            sidebar.style.display = (dProperty == "none") ? "block" : "none";
        })



        function lngClick(id) {
            alert(id);

            window.location.href = `content.php?id=${id}`;
        }
    </script>

</body>

</html>