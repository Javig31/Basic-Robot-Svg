<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Cyclobot</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style type="text/css">
      .st0{fill:#50FF9F;}
      .st1{fill:#545254;stroke:#000000;stroke-miterlimit:10;}
      .st2{opacity:0.3;}
      .st3{fill:#AEAEAF;stroke:#231F20;stroke-width:3;stroke-miterlimit:10;}
      .st4{opacity:0.21;}
      .st5{fill:none;stroke:#231F20;stroke-width:5;stroke-miterlimit:10;}
      .st6{fill:#A39FA4;stroke:#231F20;stroke-miterlimit:10;}
      .st7{fill:#5E5B60;stroke:#231F20;stroke-width:2;stroke-miterlimit:10;}
      .st8{fill:#FFFFFF;stroke:#231F20;stroke-miterlimit:10;}
      .st9{fill:#919090;}
      .st10{fill:#FFFFFF;}
      .st11{fill:none;stroke:#231F20;stroke-width:4;stroke-miterlimit:10;}
      .st12{fill:none;stroke:#231F20;stroke-width:3;stroke-miterlimit:10;}
      .st13{fill:none;stroke:#000000;stroke-miterlimit:10;}
      .st14{opacity:0.68;fill:#231F20;}
      .st15{fill:#AEAEAF;stroke:#231F20;stroke-width:2;stroke-miterlimit:10;}
      .st16{opacity:0.2;fill:#5E5B60;}
      .st17{fill:#5E5B60;}
      .st18{fill:#050505;}
      .st19{opacity:0.2;fill:#231F20;}
      .st20{opacity:0.52;fill:#545254;}
      .st21{fill:none;}
      .st22{fill:#AEAEAF;stroke:#050505;stroke-miterlimit:10;}
      .st23{fill:#BBBCBF;stroke:#231F20;stroke-miterlimit:10;}

/*Spinning eyes*/
      .st15{
        animation: spin 5s linear infinite;
        transform-origin: 50% 50% 0;
      }
      @keyframes spin { 0% {transform:rotate(360deg); } }


      .st16{
        animation: spin 5s linear infinite;
        transform-origin: 50% 50% 0;
      }
      @keyframes spin { 0% {transform:rotate(360deg); } }

 /* background */
    
      .st0 {
        transition: fill 12s;
        cursor: pointer; 
      }
    
      .st0.is-night {
        fill: black;
      }


    </style>
  </head>
  <body class="bg-faded">
    <main class="container py-4">
      <h1 class="pb-4 font-weight-bold text-center">Cyclobot</h1>
      <?php include('../images/svg-character.php'); ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script>
      $( document ).ready(function() {
        $( ".barn-building" ).click(function() {
          $('.barn-door-left').toggleClass('is-open');
          $('.barn-door-right').toggleClass('is-open');
        });

        $( ".st0" ).click(function() {
          $(this).toggleClass('is-night');
        });
      });
    </script>
  </body>
</html>