<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sing-in</title>
</head>
<body>
    <section id="auth">
        <form>
        <div class="title">
            <h2>Sing in</h2>
        </div>
            <div class="row">
                <label for="email">Email address*</label>
                <input type="email" name="" id="email" required>
                <Label for="password">Pssword*</Label>
                <input type="password" name="" id="password" required>
                <button type="submit" onclick="singin()">Submit</button>
                <p>New users: <a href="#" onclick="singin()" class="tetdec">Sign-up</a></p> 
            </div>
        </form>
    </section>
    <section id="clent-student">
        <form action="">
            <h2>Are you register as?</h2>
            <input type="radio" id="client" name="register" value="client">
            <label for="client">Client</label><br><br>
            <input type="radio" id="student" name="register" value="student">
            <label for="student">Student</label><br><br>
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>