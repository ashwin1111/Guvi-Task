         $(document).ready(function() {
           
            $(window).load(function(event){
               $.getJSON('data.json', function(jd) {
               	$('#stage').html('<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><h2 class="jsonn">DISPLAYING DETAILS FROM JSON FILE</h2> ');
                  $('#stage').append('<br><br><div class="container"><div class="row"><div class="col-md-12 name">'+jd.name+' '+jd.initial+'</div></div><br><br><div class="row"><div class="col-md-6 phone">'+jd.phn+'</div><div class="col-md-6 email">'+jd.email+'</div></div><br><br><div class="row"><div class="col-md-12 address">'+jd.address+'</div></div><br><br><div class="row"><div class="col-md-12 colg">'+jd.colg+'</div></div><br><br><div class="row"><div class="col-md-6 deg">'+jd.deg+'</div><div class="col-md-6 cgpa">'+jd.cgpa+'</div></div><br><br><div class="row"><div class="col-md-12 achievements">'+jd.achievements+'</div></div><br><br><div class="row"><div class="col-md-12 aoi">'+jd.aoi+'</div></div></div>');

                  
                  $('#stage').append('<br></body></html>');



               });
            });
               
         });