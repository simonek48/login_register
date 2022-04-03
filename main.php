<!DOCTYPE html>

<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>registration</title>
    <style> 
        h1 {
            text-align: center;
        }
        html,
        body { height: 100%;
        }
        .parent {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .child {
            width: 100px;
            height: 100px;
        }
    </style>
  </head>
  <body>
    <h1>Main page</h1>
    <div class = "parent">
        <div class = "child">
            <form action = "register.php">
                <button type = "submit" class = "btn btn-primary"> Register </button>
            </form>
            <form action = "login.php">
                <button type = "submit" class = "btn btn-primary"> Login </button>
            </form>
            <form action = "list.php">
                <button type = "submit" class = "btn btn-primary"> List </button>
            </form>
        </div>
    </div>
  </body>
</html>
