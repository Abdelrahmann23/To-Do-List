
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<style>
   * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.sidebar {
    /* background-color: #E5E1DA; */
    background-color: #73b5c0;
    position: fixed;
    left: 0;
    top: 0;
    width: 268px;
    height: 100%;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
    transition: all 0.4s ease;
}

.logo-details {
    display: flex;
    align-items: center;
    height: 80px;
    width: 100%;
}

.logo-details i {
    font-size: 40px;
    height: 60px;
    text-align: center;
    min-width: 78px;
    line-height: 65px;
}

.logo-details .logo-name {
    font-size: 25px;
    font-weight: 500px;
}

.sidebar .nav-links {
    height: 100%;
    padding-top: 30px;
}

.sidebar .nav-links li {
    list-style: none;
    position: relative;
    transition: all 0.4s ease;
}

.sidebar .nav-links li .icon-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.sidebar .nav-links li i {
    height: 60px;
    text-align: center;
    min-width: 78px;
    line-height: 65px;
    font-size: 30px;
    color: black;
    font-size: 25px;
}

.sidebar .nav-links li a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #f8f8f8;
}

.sidebar .nav-links li:hover {
    background-color: #AAD7D9;
}

.sidebar .nav-links li a .link-name {
    font-size: 21px;
}

.sidebar .nav-links li .sub-menu {
    padding: 6px 6px 14px 80px;
    margin-top: -12px;
    background-color: #73b5c0;
    /* display: none; */
}

.sidebar .nav-links li .sub-menu a {
    padding: 5px 0;
    white-space: nowrap;
    opacity: 0.6;
    transition: all 0.3 ease;
}
.sidebar .nav-links li:hover .sub-menu a {
background-color:#73b5c0 ;
}
.sidebar .nav-links li .sub-menu a:hover {
    opacity: 2;
    background-color: #73b5c0;
}

.sidebar.close .nav-links li .sub-menu {
    position: absolute;
    top: -10px;
    left: 100%;
    padding: 10px 20px;
    border-radius: 0 15px 15px 0;
    transition: all 0.4s ease;
    opacity: 0;
    pointer-events: none;
}

.sidebar.close .nav-links li:hover .sub-menu {
    top: 0;
    opacity: 1;
    pointer-events: auto;
}

.sidebar.close .nav-links li .sub-menu .link-name {
    display: none;
}

.sidebar.close .nav-links li .sub-menu .link-name {
    font-size: 18px;
    font-weight: bold;
    opacity: 1;
    display: block;
}

/* RESPONSIVE MEDIA QUERIES */
@media (max-width: 768px) {
    /* For tablets and smaller devices */
    .sidebar {
        width: 200px; /* Reduce sidebar width */
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
    }

    .sidebar .nav-links li a .link-name {
        font-size: 18px; /* Adjust text size */
    }
}

@media (max-width: 600px) {
    /* For mobile devices */
    .sidebar {
        width: 0;
        position: absolute;
        left: -100%; /* Hide sidebar by default */
        transition: all 0.3s ease-in-out;
    }

    .sidebar.open {
        width: 250px; /* Open sidebar on toggle */
        left: 0;
    }

    .logo-details i {
        font-size: 30px;
    }

    .logo-details .logo-name {
        font-size: 20px; 
    }

    .sidebar .nav-links {
        padding-top: 20px; 
    }

    .sidebar .nav-links li a {
        font-size: 18px;
    }
}


</style>



<body>
     <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bx-list-check'></i>
            <h3 class="logo-name"><span>T</span>o <span>D</span>o <span>L</span>ist</h3>
            <i class="bx bx-x close-btn" id="close-sidebar"></i> <!-- Close icon -->
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class="fa-regular fa-user"></i>
                    <span class="link-name">Profile</span>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link-name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-list-ol"></i>
                    <span class="link-name">Upcoming</span>
                </a>
            </li>
            <li>
               <div class="icon-link">
                <a href="#">
                    <i class='bx bx-collection'></i>
                    <span class="link-name">Category</span>
                </a>
                <i class='bx bx-chevron-down'></i>
               </div>
               <ul class="sub-menu">
                <li>
                    <a class="link-name" href="#">Category</a>
                    <a href="#">Work</a>
                    <a href="#">Personal</a>
                    <a href="#">School</a>
                </li>
               </ul>
            </li>
            <li>
                <a href="calendar.php">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span class="link-name">Calendar</span>
                </a>
            </li>
            <li>
                <a href="feedback.php">
                    <i class="fa-solid fa-message"></i>
                    <span class="link-name">Feedback</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="link-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    
    <div class="toggle-btn" id="open-sidebar">
    
    </div>

    <script>
        // Function to open the sidebar 
        document.getElementById('open-sidebar').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('open');
        });

        // Function to close the sidebar
        document.getElementById('close-sidebar').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.remove('open');
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #FBF9F1;
            display: flex;
        }

        .sidebar {
            background-color: #73b5c0;
            position: fixed;
            left: 0;
            top: 0;
            width: 268px;
            height: 100%;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            transition: all 0.4s ease;
        }

        .logo-details {
            display: flex;
            align-items: center;
            height: 80px;
            width: 100%;
        }

        .logo-details i {
            font-size: 40px;
            height: 60px;
            text-align: center;
            min-width: 78px;
            line-height: 65px;
        }

        .logo-details .logo-name {
            font-size: 25px;
            font-weight: 500;
        }

        .sidebar .nav-links {
            height: 100%;
            padding-top: 30px;
        }

        .sidebar .nav-links li {
            list-style: none;
            position: relative;
            transition: all 0.4s ease;
        }

        .sidebar .nav-links li .icon-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar .nav-links li i {
            height: 60px;
            text-align: center;
            min-width: 78px;
            line-height: 65px;
            font-size: 30px;
            color: black;
            font-size: 25px;
        }

        .sidebar .nav-links li a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #f8f8f8;
        }

        .sidebar .nav-links li:hover {
            background-color: #AAD7D9;
        }

        .sidebar .nav-links li a .link-name {
            font-size: 21px;
        }

        .sidebar.close .nav-links li .sub-menu {
            position: absolute;
            top: -10px;
            left: 100%;
            padding: 10px 20px;
            border-radius: 0 15px 15px 0;
            transition: all 0.4s ease;
            opacity: 0;
            pointer-events: none;
        }

        .toggle-btn {
            margin-left: 20px;
            padding: 10px;
            cursor: pointer;
        }

        .profile-container {
            display: none; /* Hide by default */
            background-color: #E5E1DA;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
            position: absolute;
            top: 100px; /* Adjust as needed */
            left: 300px; /* Adjust to position next to the sidebar */
        }

        .profile-icon img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: black;
        }

        p {
            margin: 5px 0;
            color: #333;
        }

        .tasks-left {
            color: black;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: bold;
        }

        .btn {
            display: block;
            background-color: #92C7CF;
            color: white;
            padding: 12px;
            margin: 12px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            width: 100%;
            max-width: 300px;
            transition: background-color 0.3s ease;
            font-size: 16px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #AAD7D9;
        }

        .input-group {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .input-group input {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 300px;
        }

        .submit-btn {
            background-color: white;
            color: black;
            padding: 8px;
            margin: 12px 0;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
            width: auto;
            max-width: 200px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            text-align: center;
            align-self: center;
        }

        .submit-btn:hover {
            background-color: #92C7CF;
        }

        /* RESPONSIVE MEDIA QUERIES */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px; /* Reduce sidebar width */
            }

            .sidebar .nav-links li a .link-name {
                font-size: 18px; /* Adjust text size */
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                width: 0;
                position: absolute;
                left: -100%; /* Hide sidebar by default */
                transition: all 0.3s ease-in-out;
            }

            .sidebar.open {
                width: 250px; /* Open sidebar on toggle */
                left: 0;
            }

            .logo-details i {
                font-size: 30px;
            }

            .logo-details .logo-name {
                font-size: 20px; 
            }

            .sidebar .nav-links {
                padding-top: 20px; 
            }

            .sidebar .nav-links li a {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bx-list-check' id="logo-btn"></i>
            <h3 class="logo-name"><span>T</span>o <span>D</span>o <span>L</span>ist</h3>
    
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" id="profileLink">
                    <i class="fa-regular fa-user"></i>
                    <span class="link-name">Profile</span>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link-name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-list-ol"></i>
                    <span class="link-name">Upcoming</span>
                </a>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link-name">Category</span>
                    </a>
                    <i class='bx bx-chevron-down'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a class="link-name" href="#">Category</a>
                        <a href="#">Work</a>
                        <a href="#">Personal</a>
                        <a href="#">School</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="calendar.php">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span class="link-name">Calendar</span>
                </a>
            </li>
            <li>
                <a href="feedback.php">
                    <i class="fa-solid fa-message"></i>
                    <span class="link-name">Feedback</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="toggle-btn" id="open-sidebar">
    </div>

    <div class="profile-container">
        <div class="profile-icon">
            <img src="/project/icon.jpg" alt="Profile Icon">
        </div>
        <h2 id="usernameDisplay">mostafa_mounib</h2>
        <p id="emailDisplay">mostafamounib1@gmail.com</p>
        <p class="tasks-left">Tasks left: <span id="tasksLeft">5</span></p>
        <a href="#" class="btn" id="changeUsernameBtn">Change Username</a>
        <a href="#" class="btn" id="changePasswordBtn">Change Password</a>
        <a href="#" class="btn" id="changeEmailBtn">Change Email</a>

        <div class="input-group" id="changeUsernameForm" style="display: none;">
            <input type="text" id="newUsername" placeholder="Enter new username">
            <a href="#" class="button submit-btn" onclick="updateUsername()">Submit</a>
        </div>

        <div class="input-group" id="changePasswordForm" style="display: none;">
            <input type="password" id="newPassword" placeholder="Enter new password">
            <a href="#" class="button submit-btn" onclick="updatePassword()">Submit</a>
        </div>

        <div class="input-group" id="changeEmailForm" style="display: none;">
            <input type="email" id="newEmail" placeholder="Enter new email">
            <a href="#" class="button submit-btn" onclick="updateEmail()">Submit</a>
        </div>
    </div>

    <script>

         // Function to open the sidebar when the toggle button is clicked
         document.getElementById('open-sidebar').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('open');
        });

        // Function to close the sidebar when the 'bx bx-list-check' icon is clicked
        document.getElementById('logo-btn').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.remove('open');
        });


        // Profile link toggle script
        document.getElementById('profileLink').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            const profileContainer = document.querySelector('.profile-container');
            profileContainer.style.display = profileContainer.style.display === 'block' ? 'none' : 'block';
        });

        // Profile form toggle scripts
        document.getElementById('changeUsernameBtn').addEventListener('click', function() {
            document.getElementById('changeUsernameForm').style.display = 'block';
            document.getElementById('changeEmailForm').style.display = 'none';
            document.getElementById('changePasswordForm').style.display = 'none';
        });

        document.getElementById('changeEmailBtn').addEventListener('click', function() {
            document.getElementById('changeEmailForm').style.display = 'block';
            document.getElementById('changeUsernameForm').style.display = 'none';
            document.getElementById('changePasswordForm').style.display = 'none';
        });

        document.getElementById('changePasswordBtn').addEventListener('click', function() {
            document.getElementById('changePasswordForm').style.display = 'block';
            document.getElementById('changeUsernameForm').style.display = 'none';
            document.getElementById('changeEmailForm').style.display = 'none';
        });

        function updateUsername() {
            const newUsername = document.getElementById('newUsername').value;
            const usernameRegex = /^[A-Za-z]+$/;
            if (newUsername === "") {
                alert("Please enter a new username.");
            } else if (usernameRegex.test(newUsername)) {
                document.getElementById('usernameDisplay').innerText = newUsername;
                document.getElementById('changeUsernameForm').style.display = 'none';
            } else {
                alert("Username must contain letters only.");
            }
        }

        function updatePassword() {
            const newPassword = document.getElementById('newPassword').value;
            const passwordRegex = /^(?=.*[A-Z])(?=.*[\W_]).{8,}$/;
            if (newPassword === "") {
                alert("Please enter a new password.");
            } else if (passwordRegex.test(newPassword)) {
                alert("Password updated successfully!");
                document.getElementById('changePasswordForm').style.display = 'none';
            } else {
                alert("Password must contain at least one uppercase letter, one special character, and be at least 8 characters long.");
            }
        }

        function updateEmail() {
            const newEmail = document.getElementById('newEmail').value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (newEmail === "") {
                alert("Please enter a new email.");
            } else if (emailRegex.test(newEmail)) {
                document.getElementById('emailDisplay').innerText = newEmail;
                document.getElementById('changeEmailForm').style.display = 'none';
            } else {
                alert("Please enter a valid email address.");
            }
        }
    </script>
</body>
</html>
