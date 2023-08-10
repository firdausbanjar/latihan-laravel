<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .container {
            position: relative;
            width: 100%;
            height: 100vh;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            height: 300px;
            padding: 10px;
            text-align: justify;
            transform: translate(-50%, -50%);
            box-shadow: 5px 9px 19px 0px rgba(0, 0, 0, 0.48);
            -webkit-box-shadow: 5px 9px 19px 0px rgba(0, 0, 0, 0.48);
            -moz-box-shadow: 5px 9px 19px 0px rgba(0, 0, 0, 0.48);
        }

        .content p {
            font-size: 20px;
        }

        .content p span {
            font-size: 50px;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <P><span>Hai!</span> nama saya {{ $name }} dan saya berasal dari {{ $location }}</P>
        </div>
    </div>
</body>

</html>
