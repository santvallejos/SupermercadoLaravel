<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>

        p{
            font-size:15px;
            font-family: "open sans";
        }

        header{
            width: 100%;
            height: 200px;
            background-color: #2B88F3;
            /* padding-top: 40px; */
            padding-bottom: 0px;
            margin-bottom: 80px;
        }

        li{
            color: white;
            list-style: none;
            font-family: open-sans;
            font-size: 18px;
            font-family: sans-serif;
        }

        td{
            width: 30%;
            padding-right: 5px;
            vertical-align: top;
            text-align: center;
        }
        footer{
            /* width: 100%;
            height: 200px;
            background-color: #2B88F3; */
/*             padding-left: 5%;
            padding-top:2%; */
            margin-top: 40px;
        }

        table{
            width: 30%;
            margin-bottom: 5px;
            font-size: 12px;
            border-right: white solid 1.5px;
            float: left;
            max-height: 170px;
            height:100%;

        }
    </style>
</head>

    <body style="padding:0; margin:0; height:100%;" >
        <header >
            <p>Image</p>
        </header>
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        <div style="margin-left: 30px; margin-right:30px;">
             <div style="padding:50px 130px 50px 130px;">
                    <p>Hola {{ $user->username }} vamos a proceder a resetear su password</p>
                    <a href="{{ route('password.reset',['token'=>$token]) }}">Reset Password</a>
             </div>
            </div>
            <footer>
                <p>Image</p>
            </footer>

</body>
</html>