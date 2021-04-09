<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responsive Footer Section | hayaanProduction</title>
    <link rel="stylesheet" href="hayaan.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
    <div class="main-content">
    <div class="left box">
    <h2>About us</h2>
    <div class="content">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptates facere dolorem tenetur non deserunt dolore, animi inventore reprehenderit cumque nisi ipsum. Nam odit reprehenderit molestiae minus ducimus sequi at?</p>
    <div class="socia l">
    <a href="https://www.facebook.com/calihayaan2"><span class="fab fa-facebook-f"></span></a>
    <a href="https://www.twitter.com/Hayaan121?s=09"><span class="fab fa-twitter"></span></a>
    <a href="https://www.instagram.com/cali_hayaan"><span class="fab fa-instagram"></span></a>
    <a href="https://www.youtube.com/HayaanGamer"><span class="fab fa-youtube"></span></a>
    </div>
    </div>
    </div>
    <dev class="center box">
    <h2>Address</h2>
    <div class="content">
    <div class="place">
    <span class="fas fa-map-marker-alt"></span>
    <span class="text">Bosaso, Somalia</span>
    </div>
    <div class="phone">
    <span class="fas fa-phone-alt"></span>
    <span class="text">+252907065263</span>
    </div>
    <div class="Email">
    <span class="fas fa-envelope"></span>
    <span class="text">Hayaangroup93@gmail.com</span>
    </div>
    </div>
    </dev>

    <div class="right box">
    <h2>Contact us</h2>
    <div class="content">
    <form action="#">
    <div class="email">
    <div class="text">Email *</div>
    <input type="email" require>
    </div>
    <div class="msg">
    <div class="text">Massage *</div>
    <textarea name="" id="" cols="25" rows="2" require></textarea>
    </div>
    <div class="btn">
    <input type="submit" value="Send">
    </div>
    </form>
    </div>
    </div>
    </div>
    <div class="copy"> 
    <?php
    echo "Hayaan | Copyright &copy; ".date("Y");
    ?>
    </div>
    </footer>
</body>
</html>