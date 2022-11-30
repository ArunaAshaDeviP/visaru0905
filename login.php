
<?php
$message="";
if(count($_POST)>0)
{
    $conn=mysqli_connect("127.0.0.1","root","","Aruna");
    $result=mysqli_query($conn,"SELECT*FROM Aad WHERE Username='".$_POST["Username"]."' and '".$_POST["Password"]."'");
    $count=mysqli_num_rows($result);
    if($count!=0)
    {
        header("location:index.php");    
    }
}
?>
<html>
    <head>
        <title>web</title>
        <style>
            body {
    margin:0;
    padding:0;
    font-family:times new roman;
    background-image: url('bg.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
  background-size: cover;
  }
  
  .login{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,.5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 20px;
  }
         .login form a 
            {
                position: relative;
                display: inline-block;
                padding: 10px 20px;
                color: #03e9f4;
                font-size: 16px;
                text-decoration: none;
                text-transform: uppercase;
                overflow: hidden;
                transition: .2s;
                margin-top: 40px;
                letter-spacing: 4px
            }
            .login a:hover 
            {
                background: #dc851e;
                color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 5px #dc851e,
                            0 0 25px #dc851e,
                            0 0 50px #dc851e,
                            0 0 100px #dc851e;
            }
            
            input[type=text],[type=password]
            {
                border:#ccc 1px solid;
                padding:10px 20px;
                border-radius:50px;
            }
            .message
            {
                    color:red;
                    font-size:15px;
            }
            input[type=submit]
            {
                padding:10px 20px;
                background:#dc851e;
                border-radius:50px;
                color:white;
            }
            .login a span 
            {
                position: absolute;
                display: block;
            }
            .login a span:nth-child(1) 
            {
                top: 0;
                left: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, #dc851e);
                animation: btn-anim1 1s linear infinite;
            }
            @keyframes btn-anim1 {
    0% {
      left: -100%;
    }
    50%,100% {
      left: 100%;
    }
  }
  
  .login a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #dc851e);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
  }
  
  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }
    50%,100% {
      top: 100%;
    }
  }
  .login a span:nth-child(3) 
  {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #dc851e);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
  }
  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }
    50%,100% {
      right: 100%;
    }
  }
  .login a span:nth-child(4) 
  {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #dc851e);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
  }
  @keyframes btn-anim4 
  {
    0% {
      bottom: -100%;
    }
    50%,100% {
      bottom: 100%;
    }
  }
  button
  {
    transition: width 2s, height 2s, transform 2s;
    }
    button:hover 
    {
  width: 50px;
  height: 20px;
  transform: rotate(90deg);
    }
    </style>
    </head>
    <body>
        <font color="#262626">
            <br>
            <h1 align="center"><i>Happy birthday My Sunshine</i></h1><br>
            <form method="POST">
                <div class="login">
                    <span></span>
                    <span></span>
                    <span></span>
                    <tr><td><input type="text" name="Username" placeholder="Our special day"></td></tr>
                    <br>
                    <br>
                    <tr><td><input type="password" name="Password" placeholder="our special date"></td></tr>
                    <br>
                    <br>
                    <tr><td class="message">
                        <?php
                        if($message!="")
                        {
                            echo $message;
                        }
                        ?>
                    <a href="bd.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <br>
                    <input type="submit" name="submit" formaction="bd.php">
                    </a>
                    </div>
            </form>
        </font>
    </body>
</html>