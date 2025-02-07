<!DOCTYPE html>
<head>
    <!--css-->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--whatsapp-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <title>Direwolf - Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>

<!--navigation menu-->
<?php include('nav.php');?>
<!--navigation menu-->
<!-- home -->
<div class="container mt-4 pt-4">
    <h1 class="text-center">Contact:</h1>
    <div class="row mt-4">
    

      <div class="col-lg-8">
        <p>
            We are a group of experts based mostly in Bucharest, Iasi, Arad and Bacau.
        </p>
        <div class="row mt-3">
            <div class="col-md-6">
              <div class="google-maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91160.75811617784!2d26.024426448793164!3d44.43780424470397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f93abf3cad4f%3A0xac0632e37c9ca628!2sBucure%C8%99ti!5e0!3m2!1sro!2sro!4v1677624232936!5m2!1sro!2sro" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
            </div>


  
          <div class="col-md-6">
            <form method="POST" action="send.php">

              <div><label>Your Name:</label></div>
              <div><input type="text" name="myName" class="form-control" /></div>
          
              <div><label>Your Email:</label></div>
              <div><input type="text" name="myEmail" class="form-control" /></div>
              
              <div><label>Message:</label></div>
              <div><textarea cols="40" rows="5" name="myMessage" class="form-control"></textarea></div>
          
              <div class="float-right mt-2">
                <input type="submit" value="Send" class="btn btn-primary" />
              </div>
          
            </form>
             <br>
          </div>

        </div>
    </div>
</div>
</div>
<!-- home -->

</body>
<!--Footer-->
<?php include('footer.php'); ?>
<!--Footer--> 