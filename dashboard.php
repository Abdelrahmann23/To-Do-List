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
                <a href="#">
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
