<!DOCTYPE html>

<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <style> 
        .parent {
            margin: 10px;
            float: center;
            text-align: center;
        }  

        form {
            display: inline-block;
        }
    </style>
    <header>
        <div class = "parent">
            <form action = "register.php">
                <button type = "submit" class = "btn btn-outline-dark"> Register </button>
            </form>
            <form action = "login.php">
                <button type = "submit" class = "btn btn-outline-dark"> Login </button>
            </form>
            <form action = "list.php">
                <button type = "submit" class = "btn btn-outline-dark"> List </button>
            </form>
    </div>
    </header>
  </head>
</html>
