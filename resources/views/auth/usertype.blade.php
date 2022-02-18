<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">  
    <title>User Type</title>
</head>
<body>
    <section id="userType">
        <h2>Are you register as :</h2>
        <form action="" class="userType">
            <div class="form-data">
            <label for="student">Student</label>
            <input type="checkbox" name="check" onclick="onlyOne(this)">
            </div>
            <div class="form-data">
            <label for="client">Client</label>
            <input type="checkbox" name="check" onclick="onlyOne(this)">
            </div>
            <button type="submit">Next Step</button>
        </form>
    </section>
    <script src="js/app.js"></script>
</body>
</html>