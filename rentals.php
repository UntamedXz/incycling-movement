<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Rentals</title>
</head>
<style>
    body {
        background: url(./assets/images/bikee.png) no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        height: 100%;
    }
</style>
<body>
    <div id="preloader"></div>

    <?php include './includes/navbar.php'; ?>

    <div >
      
<div class="index-section " >
  <div class="page-width text-center">
    <div class="grid">
      <div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">
        
          <p class="h2" style="font-size: 40px; text-align: center;">
           <br> Rental Schedule
          </p>
        
        
          <div class="rte" style="font-size: 15px; text-align: center;">
            
              <p>Use the form below to reserve your bike!</p>
            
          </div>
        
      </div>
    </div>
  </div>
</div>


        
    </div>
  
    <div >
      
          
  <div class="index-section">


  <div >
    <div class="rte">
      
        <script>
<src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.1.1/iframeResizer.min.js"></script>
<div>
<iframe id="brm-online-booking" src="https://us.bikerentalmanager.com/book.html?shop=incyclebicycles" iframe_resizer='4.1.1"' style="width: 1px;min-width: 100%; height:75vh;" frameborder="no" scrolling="yes"></iframe>
</div>
<script type="text/javascript">
iFrameResize({
                heightCalculationMethod: "taggedElement",
                checkOrigin: false
}, '#brm-online-booking');
</script>
      
    </div>
  </div>


  </div>



        
    </div>
  
</div>
 
    <!-- SCRIPT -->
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>