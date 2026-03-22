<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subak Pendataan Login</title>
    <link rel="icon" type="image/x-icon" href="IMG/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Charm:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+RO:wght@100..400&family=Roboto:ital,wght@0,100..900;1,100..900&family=Tangerine:wght@400;700&family=Varela+Round&display=swap" rel="stylesheet">  
    <!-- <style>body{background-image: url('assets/images/Layer1.png'); background-size: cover;}</style> -->
</head>
<body>
    <div class="container">
        <form action="<?= site_url('login/login_action') ?>" method="post">
            <div class="position-absolute top-50 start-50 translate-middle shadow">
                    <div class="card container d-flex square-box text-center">
                    <img class="card-img-top mt-4 w-75  mx-auto d-block" src="assets/images/LogoSubak.png" alt="">
                        <div class="card-body">
                            <h2 class=" text-center" style="font-family: Roboto, sans-serif;">Login Pendataan Subak</h2>
                            <form action="" method="">
                                <div class="mb-3">
                                    <label class="block text-gray-700" required>Username</label>
                                    <input type="text" name="username" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                                </div>
                                <div class="mb-3">
                                    <label class="block text-gray-700" required>Password</label>
                                    <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                                </div>
                                <button type="submit" class="btn btn-primary  mb-3">Login</button>
                                </div>
                    </div>
            </div>
        </form>
    </div>
</html>



