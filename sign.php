

<!DOCTYPE html>
<html> 
    <head>
        <title>Sign Up</title>
        <style>
    *{margin: 0; padding: 0;}
    body{background: #ecf1f4; font-family: sans-serif;}
    
    .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
    h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
    
    input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
    
    input[type="submit"]{ background: #a11b1b; border: 0; cursor: pointer; color: #fff;}
    input[type="submit"]:hover{ background: #a11b1b; transition: .6s;}
    
    ::placeholder{color: #fff;}
    a{
        color: white;
    }
    .abeg{
        color: white;
    }
</style>
    </head>
    <body>
    
        <div class="form-wrap">
        
            <form action="register.php" method="POST">
            
                <h1>Sign Up</h1>
                <input name="firstname" type="text" placeholder="Firstname" required>
                <input name="lastname" type="text" placeholder="Lastname" required>
                <input name="email" type="email" placeholder="Email" required>
                <input name="password" type="password" placeholder="Password"required>
                <input type="submit" name="submit" value="Sign Up">
               
            </form>
            <div class= abeg>
            Already have an acount?<a href="login.php">login here</a>
    </div>
       
        </div>  
    </body>
</html>
