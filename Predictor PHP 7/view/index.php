<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Predictor">
         

        <title>Peak and Plate Predictor</title>
         
    </head>
    <body>
        <div class="container active">
            <h1 class="text-center">Peak and Plate Predictor</h1>
            <div class="well">
                <form action="call.php" method="post">
                    <div class="form-group">
                        <label for="placaVehicular">Number of Vehicle Plate</label>
                        <input type="text" min="7" max="7"   required class="form-control" id="numPlaca" name="numPlaca" placeholder="Number of Vehicle Plate">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Date</label>
                        <input type="date" required class="form-control" name="fecha">
                    </div>
                    <div class="form-group">
                        <label for="hora">Time</label>
                        <input type="time" required class="form-control" name="hora">
                    </div>
                    <button type="submit" class="btn btn-default">Predict</button>
                </form>
            </div>
        </div>
    </body>
</html>