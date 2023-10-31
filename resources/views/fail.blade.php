<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Failure in Transactions</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,700,600);
        body {
            background-color: #f6f4f4;
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
        }
        .message-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .ui.message {
            text-align: center;
            width: 400px;
            padding: 20px;
            background-color: #ffc952 !important;
            color: #444444 !important;
        }
        .ui.message .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .ui.message p {
            font-size: 16px;
        }
        .ui.large.teal.submit.fluid.button {
            margin-top: 10px;
        }
        a {
            color: #47b8e0 !important;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <div class="ui message">
            <i class="warning icon"></i>
            <div class="content">
                <div class="header">Oops! Something went wrong.</div>
                <p>While trying to reserve money from your account</p>
            </div>
            <a class="ui large teal submit fluid button" href="#">Try again</a>
        </div>
    </div>
</body>
</html>
