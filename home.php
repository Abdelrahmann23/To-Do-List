<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    
<style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

.homepage{
    
    transform: translateY(100px);

}

.homepage{
    margin-left: 60px;
    transform: translateY(210px);
}
.homepage h1{
    color: #92C7CF;
    font-size: 50px;
    font-weight: bold;
}
.homepage h2{
    font-size: 30px;
    margin-bottom: 50px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.homepage button{
    text-decoration: none;
    font-size: 25px;
    border: none;
    border-radius: 50px;
    background-color: #92C7CF;
    padding: 10px;
    color: white;
    box-shadow: 0 5px 10px rgba(1, 1, 1, 0.925);
}
.homepage button:hover{
    background-color: #FBF9F1;
    color: #92C7CF;
    transform: scale(1.1,1.1);
}



nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 70px;
    background-color:#92C7CF;
    -webkit-backdrop-filter: blur(30px);
    backdrop-filter: blur(30px);
    width: 100%;
    position: fixed;
    z-index: 10;
}
.header{
    display: flex;
    align-items: center;
    text-decoration: none;
}
.header i{
    font-size: 35px;
    color: #FBF9F1;
}
.header .logoo{
    font-size: 30px;
    color: #FBF9F1;
}
.header h3{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: #FBF9F1;
    font-size: 25px;
}
.nav a{
    text-decoration: none;
    color: #FBF9F1;
    font-size: 25px;
    font-weight: 700;
    margin: 30px;
    padding: 10px;
    transition: all 0.1s ease;
}
.nav a:hover{
    border: none;
    background-color: #FBF9F1;
    color: #AAD7D9;
    border-radius: 50px;
}
.nav a i{
    transform: translateY(8px);
    font-size: 35px;
}
.hamburger {
            display: none;
            font-size: 30px;
            color: #FBF9F1;
            cursor: pointer;
        }

/* Sidebar (hidden initially) */
.sidebar {
    position: fixed;
    top: 0;
    left: -250px; /* Hidden off-screen */
    width: 250px;
    height: 100%;
    background-color: #92C7CF;
    transition: 0.3s ease;
    z-index: 999;
    padding-top: 70px;
}

.sidebar a {
    display: block;
    padding: 15px;
    text-decoration: none;
    color: #FBF9F1;
    font-size: 20px;
    font-weight: 700;
    transition: all 0.1s ease;
}

.sidebar a:hover {
    background-color: #FBF9F1;
    color: #AAD7D9;
}

.sidebar.active {
    left: 0; /* Sidebar slides in */
}

/* Responsive Media Queries */
@media (max-width: 768px) {

    nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 70px;
    background-color:#92C7CF;
    -webkit-backdrop-filter: blur(30px);
    backdrop-filter: blur(30px);
    width: 27%;
    position: fixed;
    z-index: 10;
}

    /* Hide regular navigation links on smaller screens */
    .nav {
        display: none;
    }

    /* Show hamburger icon */
    .hamburger {
        display: block;
    }

    .about{
        margin: -200px;
    }

    .list a {
    padding:10px;
    text-decoration: none;
    color: #FBF9F1;
    font-size: 20px;
    font-weight: 600;
    }
}


img{
    transform: translate(730px,-10px);
    border-radius: 30px;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
}

.homee{
    background-color: #FBF9F1;
    height: 750px;
    border-bottom-right-radius: 400px;
}




.title{
    color: #92C7CF;
    display: flex;
    justify-content: center;
    font-size: 2.2em;
    font-weight: 800;
    margin-bottom: 30px;
}
.content{
    display: flex;
    justify-content: center;
flex-direction: row;
flex-wrap: wrap;
}
.card{
    background-color: #92C7CF;
    width: 20.5em;
    box-shadow: 0 5px 25px rgba(1, 1, 1, 15%);
    border-radius: 10px;
    padding: 25px;
    margin: 15px;
    transition: 0.7s ease;
}
.card:hover{
    transform: scale(1.1,1.1);
}
.icon{
    display: flex;
    justify-content: center;
    color: #FBF9F1;
    font-size: 3.4em;
}
.info h3{
    display: flex;
    justify-content: center;
    color: #FBF9F1;
}
.info p{
    display: flex;
    justify-content: center;
    margin-top: 10px;
    font-size: 0.9em ;
    font-weight: bold;
}
.projects{
    background-color: aliceblue;
}
.image{
    display: flex;
    justify-content: center;
    height: 12em;
    margin-bottom: 10px;
}
.card .pp{
    font-size: 0.9999em;
    display: flex;
    justify-content: space-evenly;
}
.card .pp a{
    font-size: 1.15em;
    color: blue;
}
.card .pp a:hover{
    color: black;
}

.services{
    padding-top: 150px;
    height: 600px;
}

.about{ 
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
    margin-bottom: 260px;
    
}
.image{
    transform: translate(220px ,20px);
}
.image img{
    width: 300px;
    height: 400px;
    /* margin-top: 70px; */
    transform: translate(800px,100px);
    border-radius: 30px;
}
.paragraph{
  padding-top: 130px;
}
.paragraph h1{
    font-size: 50px;
    color: #92C7CF;
}
.paragraph .logoo{
    color: #92C7CF;
    font-size: 65px;
}
.paragraph h2{
    margin-top: 20px;
    width: 50%;
    font-size: 25px;
}


/* design footer */

.footer{
    background-color: #92C7CF;
    width: 100%;
    height: 200px;
    border-top-left-radius: 30%;
    border-top-right-radius: 30%;
}
.footer .header{
    display: flex;
    justify-content: center;
   
}

.footer .header i {
    color: #FBF9F1;
}
.list li{
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}
.list a {
  padding: 40px;
  text-decoration: none;
  color: #FBF9F1;
  font-size: 25px;
  font-weight: 800;
}
.list a:hover {

  text-decoration: none;
  color: #E5E1DA;
  font-size: 30px;
  font-weight: 900;
}

</style>


</head>
<body>

    <section class="homee" id="Home">
    <nav>
        <a href="" class="header">
            <i class='bx bx-list-check'></i>
             <h3><span class="logoo">T</span>o<span class="logoo">D</span>o<span class="logoo">L</span>ist</h3>
        </a>
         <div class="nav">
                 <a href="#Home">Home</a>
                 <a href="#features">features</a>
                 <a href="#About">About</a>
                 <a href="#Footer">Contact</a>
                 <a href="login.php"><i class='bx bx-log-in-circle'></i></a>                 
         </div>
         <div class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
     </nav>

      <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="#Home">Home</a>
        <a href="#features">Features</a>
        <a href="#About">About</a>
        <a href="#Footer">Contact</a>
        <a href="login.php"><i class='bx bx-log-in-circle'></i></a>
    </div>

         <div class="homepage">
            <h1 data-aos="fade-right" data-aos-duration="1400">Organize your work and life </h1>
            <h2 data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">manage your ideas and work from anywhere so <br>you never forget anything again.</h2>
            <button  data-aos="zoom-in-left" data-aos-duration="1400" data-aos-delay="300">start for free</button>
        </div>
        <div>
            <img  src="images/WhatsApp Image 2024-10-21 at 8.33.11 PM.jpeg" alt="" width="700px"   >
        </div>
    </section>

 <!--------------------------------------------------->   

    <section class="services" id="features">
        <h2 class="title">features</h2>
        <div class="content">
            
            <div class="card">
                <div class="icon"> <i class='bx bx-collection'></i></div>
                <div class="info">
                    <h3>Categories</h3>
                </div>
            </div>

            <div class="card">
                <div class="icon"> <i class="fa-solid fa-list-ol"></i></div>
                <div class="info">
                    <h3>Upcoming</h3>
                </div>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-regular fa-bell"></i></div>
                <div class="info">
                    <h3>Reminder</h3>
                </div>
            </div>
  
            </div>

        </div>

    </section>

 <!-- Section About -->
 <div class="about" id="About">
    <div class="image"><img src="images/done.png" alt=""></div>
    <div class="paragraph">
        <h1><span class="logoo">T</span>o<span class="logoo">D</span>O<span class="logoo">L</span>ist</h1>
        <h2>A to-do list website is a productivity tool designed to help users manage tasks efficiently. It allows users to create, organize, and track their daily activities or long-term goals in an intuitive, user-friendly interface. By categorizing tasks, setting priorities, and providing reminders.</h2>
    </div>
  </div>
  <br>


  <!-- Section footer -->
  <br>
  <div class="footer" id="Footer">
    <a href="" class="header">
        <i class='bx bx-list-check'></i>
        <h3><span class="logoo">T</span>o<span class="logoo">D</span>o<span class="logoo">L</span>ist</h3>
       </a>
     
        <div class="icons">
           <a href=""> <i class="ri-mail-line"></i></a>
            <a href=""><i class="ri-youtube-fill"></i></a>
        </div>
       <div class="list">
        <ul>
            <li>
                <a href="#Home">Home</a>
                 <a href="#features">categories</a>
                 <a href="#About">About</a>
                 <a href="login.php">login</a>
            </li>
        </ul>
       </div>
    
  </div>


 <!----------------------------------------------->   
 
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset:1,
      });

      const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');

    // Toggle sidebar on hamburger click
    hamburger.addEventListener('click', () => {
        sidebar.classList.toggle('active');
    });
    </script>
<!----------------------------------------------->

</body>
</html>