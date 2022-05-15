<?php include 'header.php' ?>
<section id="inner-headline">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="pageTitle">Contact</h2>
         </div>
      </div>
   </div>
</section>
<section id="content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="about-logo">
               <h3>Contact</h3>
               <b>Business Hours:</b>
               <p>Monday – Friday : 10am to 5pm</p>
               <b>Address:</b>
               <p>Breachtape Pvt. Ltd.</p>
               <p>New Delhi (Corporate Office)</p>
               <p>7, Square House, 3rd Floor, Krishna Nagar, Opp. B4/148B, Safdarjung Enclave, New Delhi – 110029</p>
               <b>Singapore Office</b>
               <p>#27-01, Peninsula Plaza, North Bridge Road, Singapore – 178098</p>
               <b>E-mail</b>: info@breachtape.com
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <!-- Form itself -->
            <form method="post" action="ContactSave.php">
               <h3>Contact me</h3>
               <div class="control-group">
                  <div class="controls">
                     <input type="text" class="form-control" 
                        placeholder="Full Name" name="name" data-validation-required-message="Please enter your name" required />
                     <p class="help-block"></p>
                  </div>
               </div>
               <div class="control-group">
                  <div class="controls">
                     <input type="email" class="form-control" placeholder="Email" name="email" required data-validation-required-message="Please enter your email" />
                  </div>
               </div>
               </br>
               <div class="control-group">
                  <div class="controls">
                     <textarea name="txtmsg" rows="10" cols="100" class="form-control" 
                        placeholder="Message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
                  </div>
               </div>
               <div id="success"> </div>
               <!-- For success/fail messages -->
               <button type="submit" class="btn btn-primary pull-right">Send</button><br />
            </form>
         </div>
         <div class="col-md-6">
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <div style="overflow:hidden;height:500px;width:600px;">
               <div id="gmap_canvas" style="height:500px;width:600px;"></div>
               <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
               <a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
            </div>
            <script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
         </div>
      </div>
   </div>
</section>
<?php include 'footer.php' ?>