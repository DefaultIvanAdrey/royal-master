<?php 
    require_once 'connection.php';
?>
<head>
    <meta charset="utf-8" />
    <title>Confirmation Gate</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <style>

        body {
            background-color: #2B2D42;
            text-align: center;
        }

        p {
            font-family: "Poppins", sans-serif;
            color: white;
            font-size: 24px;
        }

        a.button {
            font-family: "Poppins", sans-serif;
            color: #3F84E5;
            background-color: white;
            padding: 16px;
            text-decoration: none;
            font-size: 24px;
            border-radius: 8px;
        }

            a.button:hover {
                font-family: "Poppins", sans-serif;
                color: #EE6C4D;
                background-color: #FFD07B;
            }

    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="center">
            <p>Login success.</p> <br/>

            <a class="button" target="_parent" href="index.php?id=<?php echo $_SESSION['id'] ?>">Click here to continue.</a>
        </div>
    </div>
</body>