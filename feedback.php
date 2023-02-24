<!-
Code Initiator - Hussain Moulana
Begin Date - Sept 22 - 2021
>
<link href="images/Logo 2.jpg" rel="short icon" type="image/jpg"/>
<!DOCTYPE php>
<php>
<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="incdec.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> DC vs MARVEL - Feedback </title>
 <style>
     
 body {
    background-image: url("images/CONTACT.jpg");
 }   
 .feedback{
  border-radius: 5px;
  background-color: hsla(0, 9%, 96%, 0.74);
  overflow: hidden;
  padding: 20px;
  margin-top: 20px;
  float: below;
}

textarea{
  margin-left: 50px;
}

input[type=email],[type=text], 

textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.mailing{
  width:50%;
}  

.feedbox{
  margin-bottom:20px;
  font-size: 120%;
  margin-left:50px;
}

.submit{
  background-color: seagreen;
  color: white;
  padding: 12px 50px;
  margin: 10px 0;
  cursor: pointer;
  border-radius:4px;
  font-size:15px;
  float: right;
  margin-right: 400px;
}
.submit:hover {
  background-color: green;
}
  @media screen and (max-width: 700px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>
    

<div class="header">
    <a class="logo" href="index.php"> <img src="images/logo.jpg" alt="image">  </a>
  
            <nav class="header-left">
                <a  href="index.php">Home</a>
                <div class="dropdown">
                    <a href="comics.php"> comics </a> <button class="dropbtn"> 
                        <em class="fa fa-caret-down"></em></button>
                
                    <div class="dropdown-options">
                      <a href="MARVEL.php" > MARVEL </a>
                      <a href="DC.php" > DC</a>
                      <a href="comicsoffer.php" > Offers</a>
                    </div> 
                    </div>
               
               <a href="contact.php">Contact</a>
               <a href="aboutus.php" > About </a>
               <a class="active" href="feedback.php"><strong>Feedback</a></strong>   
                   
             </nav>
             <div class="search-right">
                <form class="search" method="POST" action="search.php" style=" margin:auto">
                    <input type="text" placeholder="Whats on your mind??" name="search">
                    <button type="submit"><em class="fa fa-search"></em></button>
                
                </form>
                 
             </div>
             
        <div class="cart-right">
            <a href="cart.php" >
          <span class="fa fa-shopping-cart"></span> Your Cart </a>
       </div>

       <nav class="header-right">
            <a href="reg.php" > Sign Up </a>
            <a href="login.php" > Login </a>             
            </nav>
    </div>

            <div class="feedback">
            <h2>FEEDBACK</h2>
            <p class="style">We would love to hear from you...Please drop us a message in here! </p>      
            
            <form action="feedback1.php" method="POST">
                        <div class="mailing">
                        Email:
                        <input type="email" id="email" name="email" placeholder="Enter your email address..." required>
                        </div>
                        <div class="feedbox">
                        Comment Your Feedback
                        </div>
                        <textarea id="feedback" name="feedback" placeholder="Write something..." style="height:200px" required></textarea> <br>
                        
                        <button type="submit" class="submit" value ="submit" >SUBMIT</button>
            </form>

          </div>
          </div>

          <div class="footer">
           <div class="footer-left">
                
            <a href="https://www.google.com/maps/d/edit?mid=1HqXfCxWrmokna6IfjvKOA2PTFogndeJ1&usp=sharing" target="_blank"><em class="fa fa-map-marker" style=" font-size:15px"> </em> No. 7 Ridgewayplace, Colombo 04 <br> </a> 
            <em class="fa fa-phone-square" style=" font-size:15px"> </em> 011-123-1234 <br> 
            <em class="fa fa-mobile" style="font-size:20px"></em> 0771234567 <br>
            <a href="mailto:dc.vs.marvel000@gmail.com" target="_blank">  <em class="fa fa-envelope" style=" font-size:15px"></em> dc.vs.marvel000@gmail.com  </a>        </div>
        
        <div class="footer-center">
          <a href="https://www.facebook.com/TheMarvelvsDc/" target="_blank"><em class="fa fa-facebook-official" style="color:blue; font-size:40px"></em></a> 
          <a href="https://www.instagram.com/themarvelvsdc/?hl=en" target="_blank"> <em class="fa fa-instagram" style="color:magenta; font-size:40px"></em> </a> 
          <a href="https://twitter.com/TheMarvelvsDC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><em class="fa fa-twitter-square" style="color:#00acee; font-size:40px" ></em> </a>  
                <br>
             </a>  <br>
             &copy;2021-2025 copyright by DC vs MARVEL<br>
                all rights reserved.<br>
                Designed by Hussain Moulana!  
        </div>
        
        <div class="footer-right">
            
            <H6> PAYMENT METHODS </H6>
            <a href="https://www.visa.com.lk/pay-with-visa/contactless-payments/contactless-payments.html" target="_blank"> <em class="fa fa-cc-visa" style=" font-size:50px; color:navy;"></em></a>
            <a href="https://src.mastercard.com/profile/enroll" target="_blank"><em class="fa fa-cc-mastercard"  style=" font-size:50px; color:red"></em></a>
            <a href="https://www.paypal.com/lk/webapps/mpp/pay-online" target="_blank"> <em class="fa fa-cc-paypal"  style=" font-size:50px; color:darkslateblue"></em></a> <br> <br>
            <em class="fa fa-motorcycle" style=" font-size:20px"> Free Delivery Island-wide!</em> <br>
           
        </div>
        
    </div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/614a223925797d7a890022a1/1fg4pbckd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</php>