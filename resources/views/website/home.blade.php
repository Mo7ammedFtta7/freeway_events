<!Doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
      <meta charset="utf-8" />
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet" />
      <!-- Fontawesome -->
      <script src="https://kit.fontawesome.com/65ffd281ae.js" crossorigin="anonymous"></script>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
      <!-- Customs Css -->
      <link rel="stylesheet" href="amarous/assets/css/style.css" />
      <link rel="stylesheet" href="amarous/assets/css/jquery.loadingModal.css">

      <title>Freeway For Traning</title>
      @livewireStyles
    </head>
    

<body>
    <!-- ===============  MENU =============== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#"><img src="amarous/assets/images/logo.png" alt="logo"></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav  m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"aria-disabled="true">ABOUT US </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"  aria-disabled="true">OUR PROGRAMS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"  aria-disabled="true">CONTACT US</a>
                </li>
            </ul>

            <ul class="navbar-nav  m-auto">
                <li class="nav-item">
                    <a class="nav-link "href="https://www.facebook.com/Gatewayofficialpage/" target="_blank"><i class="fa fa-facebook"></i> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="https://www.instagram.com/gatewayofsuccess/" target="_blank"><i class="fa fa-instagram"></i> </a>
                </li>       
                       <li class="nav-item">
                    <a class="nav-link "  href="https://www.twitter.com/Gatewaytrainies/" target="_blank"><i class="fa fa-twitter"></i> </a>
                </li>          
                    <li class="nav-item">
                    <a class="nav-link " href="tel:+249911155886"><i class="fa fa-phone"></i> +249926636063 </a>
                </li>
            </ul>
            
        </div>
        </div>
    </nav>
    <!-- ===============  Upcoming programs =============== -->

    <livewire:events />
      
    <!-- ===============  Join program modal =============== -->

   <livewire:registration />


    <livewire:payment />

<div id="successModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body text-center">
                <img src="amarous/assets/images/congrats.png" alt="success">
                <p>You have been registered successfully to attend Gate of success program, Don’t forget to come on time.</p>
                <p>Stay Excited as we are ! <img src="amarous/assets/images/excited.png"></p>
                </form>
            </div>
        </div>
    </div>
</div>

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
   integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
   crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
   integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
   crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
   integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
   crossorigin="anonymous"></script>
 <!-- Custom Script -->
 <script src="amarous/assets/js/main.js"></script>
 <script src="amarous/assets/js/aes.js"></script>
 {{-- <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>--}}
<script src="amarous/assets/js/jquery.loadingModal.js"></script> 

 @livewireScripts
 <script>
    
    window.addEventListener('goToPay', payload => {
        $('#my-modal').modal('hide');
        $('#paymentModal').modal('show');
        Livewire.emit('goToPay',payload['detail']);
    });

    window.addEventListener('encrypt', payload => {
                var data=payload['detail'];
                var encrypt = new JSEncrypt();
                encrypt.setPublicKey(data['p']);
		         data['i'] = encrypt.encrypt(payload['detail']['v']+payload['detail']['i']);
                 $('body').loadingModal({text: 'Loading...'});
                Livewire.emit('doTrans',data)
    });
    window.addEventListener('response', payload => {
        $('body').loadingModal('destroy');
        if (payload['detail']['responseCode']==110) {
            $('#paymentModal').modal('hide');
            $('#successModal').modal('show');
        }else{
            alert(payload['detail']['responseMessage']);
            Livewire.emit('goToPay',payload['detail']['tranUID']);
        }
    });
    </script>
</body>

</html>