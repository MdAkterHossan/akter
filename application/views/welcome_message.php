<!DOCTYPE html>
<html>
<body>
  
  <header>
    <a href="" class="logo">Logo</a>
    <div class="menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Team</a></li>
      </ul>
    </nav>
    <div class="clearfix"></div>
  </header>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active')
           $('nav').toggleClass('active')
        })

      })
    </script>




 <!--    <script type="text/javascript">
        

        $(document).ready(function(){
            $('.menu_toggle').click(function){
                $('.menu_toggle').toggleClass('active')
            }
        })
    </script> -->







  <h1 class="heading">
    Welcome To Akter Official
  </h1><hr>
  
  <div class="container">
    
    <div class="jumbotron" style="background-color:#5F9EA0">

      <img class="img" src="<?=base_url()?>assets/img/myProFile2.png"><br><br>
 
      <h1 class="contactInfo">Thank you for visiting my page</h1><hr>
      <p class="info col-md-12 col-lg-12 col-sm-12" >
        MySelf AKTER I am from Bangladesh, Currently living in UK
        I am a Student.<br>I love to do different activities such as video 
        capturing and Editing.I also develop website If you have any 
        query feel free to contact me Contact : +44 7778 651438</p>
      
    </div>
  
  </div><hr>
  <footer>
     <div class="footer">
        <span class="copyright">Copyright &copy;2020 AkterOfficial</span>
      </div>
  </footer>

</body>
</html>



