<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory system management status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        font-family: Arial;
    }
    /* nav bar */
    
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }
    
    li {
        float: left;
    }
    
    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    li a:hover {
        background-color: #111;
    }
    /* body content */
    
    * {
        box-sizing: border-box;
    }
    
    .example {
        display: flex;
    }
    
    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        padding-right: 800px;
        background: #f1f1f1;
        border: 1px solid rgb(0, 0, 0);
        margin-top: 20px;
    }
    
    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #a5a9ac;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
        padding-right: 80px;
        margin-top: 20px;
    }
    
    form.example button:hover {
        background: #4c4e4f;
    }
    
    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
    /* send body content middle */
    
    .callout-header {
        padding: 25px 15px;
        background: rgb(223, 222, 222);
        font-size: 30px;
        color: rgb(0, 0, 0);
        border-radius: 5px;
        margin-right: 30px;
        margin-top: 30px;
        margin-bottom: 30px;
        padding-right: 200px;
    }
    
    .callout-container {
        padding: 15px;
        background-color: rgb(41, 1, 1);
        color: black;
        border-top: black;
        padding-bottom: -20px;
        padding-right: 900px;
    }
    
    .link4 {
        display: block;
        text-decoration: none;
        color: white;
    }
    
    .left {
        margin: auto;
        float: right;
        color: white;
    }
    
    .man {
        margin: auto;
        display: flex;
    }
    /* for footer */
    
    .footer {
        background-color: black;
        color: #ffffff;
        text-align: center;
        font-size: 12px;
        padding: 15px;
        margin-top: 0px;
    }
</style>


<body>
    <!-- nav bar -->
    <ul>
        <li><a class="active" href="home.html">Directory Management System</a></li>
        <li style="float:right"><a href="login.html">Admin Login</a></li>
    </ul>
    <!-- directory content -->
    <div class="man">
        <div class="callout-header">
            <p style="margin-bottom: 0px;">Scearch by Name/Contact:</p>
            <form class="example" action="/action_page.php">
                <input type="text" placeholder="Search for.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>

        </div>

        <div class="footer ">
            <p>Resize the browser window to see how the content respond to the resizing.</p>
        </div>
</body>

</html>