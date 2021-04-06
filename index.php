<html>
<head>
<title>My Website</title>
<meta name="viewport" content="width=device-width ,initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<style>
html,body{
    height:100%;
    width:100%;
}
 
.navbar {
    background-color:red;
    padding:1% 0;
    font-size: 1.2em;
}

.navbar-brand {
    min-height: 55px;
    padding:0px 15px 5px;
}

.navbar-default .navbar-nav li a{ 
color: #ffffff;
}

.navbar-default .navbar- nav li a:hover, .navbar-default .navbar-nav li a:active{ 
color:white; 
}

#home{
    position: relative;
    display: table;
    height: 100%;
    width: 100%;
    background:url("https://images.unsplash.com/photo-1446057032654-9d8885db76c6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1100&q=80") no-repeat center fixed;
    background-size:cover;
}
 
.landing-text{
display:table-cell;
text-align: center;
vertical-align: middle;
color: #fff ;
}

.landing-text h1{
font-size: 500%;
font-weight: 700;
}


.padding{
padding: 80px 0px;
}
.padding img{
width:100%;
}


#fixed{
    background:url('https://images.unsplash.com/photo-1499415479124-43c32433a620?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1189&q=80');
     height: 65%; 
     width: 100%; 
     background-attachment: fixed;
     background-size: cover;
}

footer{
    width:100%;
    background-color:red;
    padding:5% 10% 5% 5%;
    color: #fff;
}

.fa{
padding: 15px;
font-size: 25px;
color: #fff ;
}

.fa:hover{
    color:#D5D5D5;
    text-decoration: none;
}

.icon{
    max-width:200px;
}

@media(max-width: 768px){

    .landing-text h1{
        font-size: 300%;
    }
    .fa{
        font-size: 20px;
        padding:10px;
    }
    .icon{
        padding-top: 5%;
        max-width:100px;

    }

}

</style>
</head>











<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container-fluid">


            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" 
            data-target="#navbar-collapse-main">
            <span class="sr-only">toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
             </button>  
             <a class="navbar-brand" href="#">  <img src="https://www.designfreelogoonline.com/wp-content/uploads/2018/08/0001025-music-logo-maker-online-05.png" height="50px">  </a>
             </div>

             <div class="collapse navbar-collapse" id="navbar-collapse-main">
               <ul class="nav navbar-nav navbar-right">
               <li> <a class="active" href="#">Home</a> </li>
                <li> <a class="active" href="#" >contact us</a> </li>
                <li> <a class="active" href="#">About Us</a> </li>
               </ul>
             </div> 
        
      
</div>
</nav>


<div id="home">
<div class="landing-text">
    <h1>Jaimit's Website</h1>
    <h3>My very first basic Website</h3>
    <a href="index2.html" class="btn btn-default btn-lg">Get Started</a>
</div>
</div>


<div class="padding">
<div class="container">

    <div class="row">

        <div class="col-sm-6">
        <img src="img/bootstrap.jpg" class="img-responsive">
        </div>


        <div class="col-sm-6 text-center">
        <h2>Music is life</h2> 
        <p class="lead"> Music is a part of every known society, past and present, and is common to all human cultures across the globe.

The emotions caused by music, the attitudes of its composers and players, and the venues it is played can also vary from time to time and place to place. The music one person loves might be painful for another to listen to, and vice versa!</p>
        </div>

    </div>

</div>
</div>



<div class="padding">
<div class="container">

    <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h4>Music</h4>
                    <p> It is something to dance to, bond over, and even listen to when alone. Music is not just sound, it is its own language and it communicates so much; it is a beautiful thing. </p>
                </div> 

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <img src="img/a.png" class="img-responsive" >
                </div> 

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h4>Music is love</h4>
                    <p> I love listening to music especially because of this reason. Music has the power to unite people, make us feel at peace, make us feel understood </p>  
                </div> 

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <img src="img/bc.png" class="img-responsive">
                </div> 

    </div>

</div>
</div>


<div id="fixed" >
</div>


<div class="padding">
    <div class="container">
    
        <div class="row">
    


            <div class="col-sm-6 ">
             <h4>Quote</h4> 
           <p > You have to, take a deep breath. and allow the music 
           to flow through you. Revel in it, allow yourself 
           to awe. When you play allow the music to break your heart
            with its beauty</p>

            <p > "My idea is that there is music in the air, music all around us; the world is full of it, and you simply take as much as you require.” – Edward Elgar.</p>
           </div>


            <div class="col-sm-6">
            <img src="img/bootstrap.jpg" class="img-responsive">
            </div>
    
    
    
        </div>
      
    </div>
    </div>



    <footer class="container-fluid text-center">
        <div class="row">

        <div class="col-sm-4">
            <h3>Contact Us</h3>
            <br>
            <h4>Our Address and contact info here</h4>
        </div>
        <div class="col-sm-4">
            <h3>Connect Us</h3>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="col-sm-4">
        <img src="img/hedph.png" class="icon">
        </div>
        </div>
    </footer>


</body>
</html>