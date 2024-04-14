<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VMeds</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--  font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">


    <!--custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
  .header img{
    width: 90px; height: 70px;
    padding-left: 10px;
   }
:root{   
    --green:#16a085;
    --black: #444;
    --light-color:#777;
    --box-shadow: .5rem .5rem 0 rgba(22,160,133,.2);
    --text-shadow: .4rem .4rem 0 rgba(0, 0, 0, 0.123);
    --border:.2rem solid var(--green);
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-transform: capitalize;
    transition: all .2s ease-out;
    Text-decoration: none;
} 

#log{
  border: 2px solid black;
    
    border-radius: 31px;
    padding-left: 5px;
    padding-right: 36px;
    
    padding-left: 33px;
    box-shadow: var(--box-shadow);
    color: black;
    font-size: large;
    
}
#log:hover{
    background: var(--green);
    color:#fff;
}
html{
    font-size: 65%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}  

section{
    padding:5rem 10%;
}



.heading{
    text-align: center;
    padding-bottom: 2rem;
    text-shadow: var(--text-shadow);
    text-transform: uppercase;
    color:var(--black);
    font-size: 5rem;
    letter-spacing: .4rem;
}

.heading span{
    text-transform: uppercase;
    color:rgb(100, 8, 100);
}
.btn{
    display: inline-block;
    margin-top: 1rem;
    padding: .5rem;
    padding-left: 1rem;
    border: var(--border);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    color:var(--blue);
    cursor: pointer;
    font-size:1.3rem;
}

.btn span{
    padding: .7rem 1rem;
    border-radius: .5rem;
    background:var(--green);
    color:#fff;
    margin-left: .5rem;
} 

.btn:hover{
    background: var(--green);
    color:#fff;
}

.btn:hover span{
    color: var(--green);
    background: #fff;
    margin-left: 1rem;
}
.header{
    padding: 0.1rem 8%;
    position:fixed;
    top:0; left:0; right:0;
    z-index:1000;
    box-shadow:0 .5rem 1.5rem rgba(0, 0, 0, .2);
    display: flex;
    align-items: center;
    justify-content: space-between;
    background:#fff;
}
.header .navbar a{
    font-size:1.3rem;
    color: var(--black);
    margin-left: 5rem;
}

.header .navbar a:hover{
    color: var(--blue);
}

#menu-btn{
    font-size: 1.8rem;
    border-radius: .5rem;
    background: #eee;
    color:var(--green);
    padding: 1rem 1.5rem;
    cursor:pointer;
    display:none;
}

.home{
    display:flex;
    align-items:center;
    flex-wrap:wrap;
    gap:7rem;
    padding-top: 13rem;
}

.home .image{
    flex:1 1 45rem;
}

.home .image img{
    width:100%;
}

.home .content{
    flex:1 1 35rem;
}

.home .content h3{
    font-size: 2.5rem;
    color:var(--black);
    line-height: 1.8;
    text-shadow: var(--text-shadow);
}
.home .content h1{
    font-size: 4.5rem;
    color:var(--black);
    line-height: 1.5;
    text-shadow: var(--text-shadow);
}

.home .content p{
    font-size: 1.8rem;
    color:var(--light-color);
    line-height: 1.5;
    padding: 1rem 0;
}

.icons-container{
    display: grid;
    gap: 6rem;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
    padding-top: 5rem;
    padding-bottom: 5rem;
}

.icons-container .icons{
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    text-align: center;
    padding: 2.5rem;
}

.icons-container .icons i{
    font-size:4.5rem;
    color:rgb(212, 45, 79);
    padding-bottom: .7rem;
}

.icons-container .icons p{
    font-size:2rem;
    color:var(--black);
}

.services .box-container{
    display: grid;
    gap: 6rem;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
}

.services .box-container .box{
    background: #fff;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    border:var(--border);
    padding: 2.5rem;
}

.services .box-container .box i{
    color:coral;
    font-size: 2.5rem;
    line-height: 2 ;
}

.about .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:3rem;
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{
    width:90%;
}

.about .row .content{
    flex:1 1 45rem;
}

.about .row .content h3{
    color: var(--black);
    font-size: 2.7rem;
    line-height: 1.8;
}

.about .row .content p{
    color: var(--black);
    padding: 1rem 0;
    font-size: 1.3rem;
    line-height: 1.8;
}

.doctors .box-container{
    display: grid;
    gap: 6rem;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
}

.doctors .box-container .box{
    text-align: center;
    background: #fff;
    border-radius: .5rem;
    border:var(--border);
    box-shadow:var(--box-shadow);
    padding: 2rem;
}

.doctors .box-container .box img{
    height: 20rem;
    border:var(--border);
    border-radius: .5rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
}

.doctors .box-container .box h3{
    color:var(--black);
    font-size: 2.5rem;
}

.doctors .box-container .box span{
    color:blue;
    font-size: 2rem;
}

.doctors .box-container .box .share{
    padding-top: 2rem;
}

.doctors .box-container .box .share a{
    height: 5rem;
    width: 5rem;
    line-height: 4.5rem;
    font-size: 2rem;
    color: rgb(100, 8, 100);
    border-radius: .5rem;
    border: var(--border);
    margin: .3rem;
}

.doctors .box-container .box .share a:hover{
    background: rgb(100, 8, 100);
    color: #fff;
    box-shadow:var(--box-shadow);
}

.footer .box-container{
    background: #f5f5f5;
    display: grid;
    gap: 2rem;
    grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
}

.footer .box-container .box h3{
    font-size:2.5rem;
    color:var(--black);
    padding: 1rem 0;
}

.footer .box-container .box a{
    display: block;
    font-size:1.5rem;
    color:var(--light-color);
    padding: 1rem 0;
}

.footer .box-container .box a i{
    padding-right: .5rem;
    color:var(--green)
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .credit{
    padding: 1rem;
    padding-top: 2rem;
    margin-top: 2rem;
    text-align: center;
    font-size: 2rem;
    color:var(--black);
    border-top: .1rem solid rgba(0, 0, 0, .1);
}

.footer .credit span{
    color:rgb(212, 45, 79);
}





/*media queries*/
@media(max-width:991px)
{
    html{
        font-size : 55%;
    }  

    .header{
        padding: 2rem;
    }

    section{
        padding: 3rem;
    }
}
@media(max-width:768px)
{
    #menu-btn{
        display:initial;
    }

    .header .navbar{
        position:absolute;
        top:115%; right: 2rem;
        border-radius: .5rem;
        box-shadow: var(--box-shadow);
        width:30rem;
        border: var(--border);
        background: #fff;
        transform:scale(0);
        opacity:0;
        transform-origin: top right;
        transition:none;
      }

    .header .navbar.active{
        transform:scale(1);
        opacity:1;
        transition: .2s ease-out;
    }

    .header .navbar a{
        font-size: 2rem;
        display: block;
        margin: 2.5rem;

    }
}
@media(max-width:450px)
{
    html{
        font-size : 55%;
    }  
}
</style>
<body>
    
<!--header section starts-->

<header class="header">
    <img src="logo.png">

    <nav class="navbar">
        <a id="log" href="login.php">Log-in</a>
        
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>



<section class="home" id="home">
    <div class="image">
        <img src="Healthcare.gif" alt="">
    </div>
    <div class="content">
        <h3> Quality Care</h3>
        <h1>Your Health is our Priority</h1>
        <p>We are here for your care. Medical Services on which you can Trust on 24/7.</p>
        <a href="#fitt" class="btn"> contact us <span class="fas fa-chevron-right"></span></a>
    </div>
</section>



<section class="icons-container">
    <div class="icons">
        <i class="fas fa-user-md"></i>
        <p>Doctors at work 24/7</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <p>Many Satified patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <p> Proper bed Facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-pills"></i>
        <p>Available Medication</p>
    </div>

</section>



<section class="services" id="services">

    <h1 class="heading">our<span> services</span></h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Treatment and medication is free so you can access the medical facilities anytime without paying any fee. </p>
            
        </div>
    
        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Ambulance services are available for the patients very second.</p>
            
        </div>
    
        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Doctors are available at your service , for your care and all your health problems.</p>
            
        </div>
    
        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Geniune medicines can be easily be accessed , to cure yourself completely.</p>
            
        </div>
    
        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facitily</h3>
            <p>Beds are available for healthcare , well-being of the patients 24/7.</p>
            
        </div>
    
        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Our medical srevices promises you that your health is our first priority. </p>
           
        </div>
    </div>

    
</section>



<section class="about" id="about">

    <h1 class="heading"><span>about</span> us</h1>

    <div class="row">
        <div class="image">
            <img src="about.png" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healty life</h3>
            <p>Prevention is better than cure , health is not valued till sickness comes. That's why there are doctors . But keeping the track of records and data is also very important. Through digital technology , it is possible , at your fingertips . Vmeds is a medical website made by the female students of Vit Bhopal to overcome the handwritten records and speed up the process by being online , for the girls hostel. this website will provide you ease to have appointments anytime, have a proper records of data of medications , student patients , report of every student and students can also go through a panel (FAQs), provided specially for them, to clear their doubts. This website's main priority is to save time and speed up the process of healthcare along with storing a lot of data.</p>
            
        </div>
    </div>
</section>



<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="doc.png" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    
        <div class="box">
            <img src="doc.png" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    
        <div class="box">
            <img src="doc.png" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>

   
</section> 


<section class="footer" id="fitt">
    <div class="box-container">
        <div class="box">
            <h3>quick link</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>home</a>
            <a href="#"><i class="fas fa-chevron-right"></i>services</a>
            <a href="#"><i class="fas fa-chevron-right"></i>about</a>
            <a href="#"><i class="fas fa-chevron-right"></i>doctors</a>
            <a href="#"><i class="fas fa-chevron-right"></i>bookings</a>
        </div>
    
        <div class="box">
            <h3>our services</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>dental care</a>
            <a href="#"><i class="fas fa-chevron-right"></i>diagnosis</a>
            <a href="#"><i class="fas fa-chevron-right"></i>cardiology</a>
            <a href="#"><i class="fas fa-chevron-right"></i>ambulance services</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Bed facilities</a>
        </div>
    
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-envelope"></i> abc@gmail.com</a>
            <a href="#"><i class="fas fa-envelope"></i> abc@gmail.com</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> Bhopal-Indore Highway, Kothrikalan Sehore, Madhya Pradesh – 466114</a>
            </div>
    </div>

    <div class="credit"> created by <span>Female students of VIT bhopal</span> | all rights reserved </div>
    
</section>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script
<!-- custom js filem link-->
<script src="js/script.js"></script>
</body>
</html>