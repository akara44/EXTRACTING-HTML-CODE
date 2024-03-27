<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ders </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>                           
  <body>

    
    <div class="container">       
        <div class="row">
            <div class="col-lg-32">
            <label class="form-label">Kodlar</label>
                <div class="card mt-3 bg-light">
                    <div class="card-body">
                    
                    <?php
      
                    if ($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        $myUrl=$_POST['link'];
                        $readMyFile =file($myUrl);
          
                        echo '<pre>';
                        foreach ($readMyFile as $mykey => $myvalue) {
                            echo htmlspecialchars($myvalue)."<br>";
                        }
                        echo '</pre>';
      
                    }
                    ?> 
                    </div>
                </div>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                      <div class="mb-3">
                      <label class="form-label">Linki Girin</label>
                      <input type="text" class="form-control" name="link">
                      </div>
                      <button type="submit" class="btn btn-primary">Kodları Getir</button>
                </form>
            </div>
        </div>                   
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
