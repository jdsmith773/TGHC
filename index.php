<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
    <title>The Good Hair Co.</title>
</head>

<body>
    <div class="container">
        <div class="image-container">
        </div>
        <div class="form-container">
            <h1>NOW ACCEPTING PRE-ORDERS</h1>
            <h4>Sign-Up Below For An Exclusive Offer!</h4>
            <p>Sign-Up for a $5 Off code and for pre-orders you will receive and additional bonus of $5 Off per bundle!  </p>
            <form action="success.php" method="post" onsubmit="return validateForm()" name="captureForm">
                <label for="name">NAME</label>
                <input type="text" id="name">
                <label for="email">EMAIL</label>
                <input type="email" name="email" id="email"><br>
                <label for="interest">Are you interested in?</label>
                <select name="customer" id="customer">
                    <option value="retail" id="retail">Retail</option>
                    <option value="wholesale" id="wholesale">Wholesale</option>
                    <option value="both" id="both">Both</option>
                </select>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
