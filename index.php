<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Badwords</title>
</head>

<body>

    <header class="text-center py-5">
        <h1>Parolacce brutte</h1>
    </header>
    <main>
        <div class="container">

        <div class="row">
            <div class="col-6 m-auto">
                <form action="insertData.php" method="GET">
                    <div class="form-group">
                        <label for="phrase-input">frase da censurare</label>
                        <input type="text" class="form-control" id="phrase-input" placeholder="scrivi la frase da censurare" name="phrase">
                    </div>
                    <div class="form-group">
                        <label for="censure-word">parola da censurare</label>
                        <input type="text" class="form-control" id="censure-word" placeholder="bad-word" name="bad-word">
                    </div>
                
                    <button type="submit" class="btn btn-primary mt-3">censura!</button>
                </form>
            </div>
        </div>

        </div>
        
    </main>
    
</body>

</html>