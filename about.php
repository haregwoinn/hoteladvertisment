<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./profile.css">
    </head>
    <style>
        body{
            margin: 0px;
            border: 0px;
            align-items: center;
        }
        .container{
            margin-top: 50px;
            width: 600px;
            height: 500px;
            border: 1px solid #7A949E;
        }
        .buton{
            display: flex;
            flex-direction: row;
            width: 200px;
            border-radius: 10px;
            margin-top: 40px;
            margin-left: 50%;
        }
        button{
            height: 40px;
        }
        input{
            padding-left: 30px;
            padding-top: auto;
            font-size: medium;
            background: transparent;
            border: none;
            border-radius: 12px;
            margin-left: 30px;
            width: 90%;
            height: 50px;
            color: rgb(32, 127, 221);;
        }
        label{
            font-size: large;
            padding: 10px;
            margin-left: 25px;
        }
        h1{
            color: rgb(32, 127, 221);
            padding: 20px;
            text-align: center;
        }
    </style>
    <body>
        <div class="container">
            <form action="action.php">
                <h1>update your information</h1>
                <label for="user"> name: </label>
                <input type="text" id="user" disabled value="haregewoin menberu@gmail.com">
                <label for="email"> email: </label>
                <input type="text" id="email" disabled value="haregewoi">
                <label for="password"> password: disabled </label>
                <input type="text" id="password" disabled  value="\\756%#&>>jfkdjfkdp09898__8">
                <div class="buton">
                    <button onclick="changetype()" id="but">Edit</button>
                    <button type="submit">save</button>
            </form>
                </div>
        </div>
    </body>
    </html>