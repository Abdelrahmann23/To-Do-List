<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
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
img{
    transform: translate(730px,-10px);
    border-radius: 30px;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
}

.homee{
    background-color: #FBF9F1;
    height: 750px;
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
    padding-top: 80px;
    height: 400px;
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
                 <a href="#"><i class='bx bx-log-in-circle'></i></a>                 
         </div>
    
     </nav>
         <div class="homepage">
            <h1>Organize your work and life </h1>
            <h2>manage your ideas and work from anywhere so <br>you never forget anything again.</h2>
            <button>start for free</button>
        </div>
        <div>
            <img src="images/WhatsApp Image 2024-10-21 at 8.33.11 PM.jpeg" alt="" width="700px">
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

<!----------------------------------------------->

</body>
</html>