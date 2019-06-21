<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="s004">
      <form action="ms-uploadfile.php" method="post" enctype="multipart/form-data">
        <fieldset>
          <legend>Nota aleatoria: <?php echo rand(0,20); ?></legend>
        </fieldset>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
    <script>
      var textPresetVal = new Choices('#choices-text-preset-values',
      {
        removeItemButton: true,
      });
      async function CallWebAPI()
        {
            var valor = document.getElementById("choices-text-preset-values").value;
            await fetch('https://crearmensaje.azurewebsites.net/api/Function1?valor='+valor)
            .then(
            function(response) {
            if (response.status !== 200) {
                    console.log('Looks like there was a problem. Status Code: ' +
                    response.status);
                    return;
            }

            // Examine the text in the response
            }
            )
            .catch(function(err) {
            console.log('Fetch Error :-S', err);
            });
        }
    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
