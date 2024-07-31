<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>

<style>
    *{
      padding:0;
      margin:0;
    }
html,body{
    height:100%;
    width:100%;
    text-align:center;
}
.container{
    height:100%;
    width:100%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

.container form{
    height:70%;
    width:70%;
    background-color:lightgrey;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
input{
    padding:1.5vh;
    width:80%
}
h1{
    font-size:3rem;
}
textarea{
    padding:2.4vh;
    width:80%
}
#btn{
    background-color:black;
    color:white;
    border:0;
    font-size:17px;
    font-weight:400;
  transition: 0.4s ease-in-out;
}

#btn:hover{
    cursor: pointer;
    background-color: blue;
}
label{
font-size:20px;
}
</style>

</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="contact_data_insert.php" method="post">
            <label for="">First Name</label>
            <input type="text" name="first_name" placeholder="Enter your first name">
            <br>
            <label for="">Last Name</label>
            <input type="text" name="last_name" placeholder="Enter your last name">
            <br>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter your email id">
            <br>
            <label for="">Message</label>
            <textarea name="message" placeholder="Please give a message..."></textarea>
            <br>
            <input type="submit" value="submit" id="btn">

        </form>
    </div>
</body>
</html>