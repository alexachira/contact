<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">

</head>
<body>
    <div class="container">
    <nav>
        <a href="index.php">Home</a>
        <a href="">View messages</a>
        <a href="contact.php">Send message</a>
    </nav>
    <h1>contact us</h1>
    <form action="">
        <div>
            <label for="">name</label>
           <input type="text" name="name" required>
        </div>
        <div>
            <label for="">email</label>
           <input type="email" name="email" required>
        </div> <div>
            <label for="">message</label>
           <input type="text" name="message" required>
        </div>
        <div>
            <label for="">subject</label>
           <input type="text" name="subject" required>
        </div>
        <button >submit </button>
    </form>

    </div>

</body>
</html>