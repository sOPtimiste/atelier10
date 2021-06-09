<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.con0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Gestion Etudiant</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container my-4">
            <h1>INSCRIPTION ETUDIANT</h1>
            <div>
                <p>
                <?php
                     echo $message;
                ?>
                </p>
            </div>

                <form method="post" action="insertion.php">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">NOM</label>
                        <input type="text" class="form-control" name ="nom" id="exampleInputName" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPrenom" class="form-label">PRENOM</label>
                        <input type="text" class="form-control" name ="prenom" id="exampleInputPrenom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAge" class="form-label">AGE</label>
                        <input type="int" class="form-control" name ="age" id="exampleInputAge">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputDate" class="form-label">Date Inscription</label>
                        <input type="date" class="form-control" name ="date_inscription" id="exampleInputDate">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputClasse" class="form-label">CLASSE</label>
                        <input type="text" class="form-control" name ="classe" id="exampleInputClasse">
                    </div>
                
                    <button type="submit" name ="submit" class="btn btn-primary">S'INSCRIRE</button>
                </form>
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>