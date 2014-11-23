
<!DOCTYPE html>

<html>
    <head>
        <title>Log In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        
        <div id="content">
            
            <div id="title">
                <h1>TJJF Admin Page</h1>
            </div>
            
            <div id="info">
                <form method="POST" action="admin.php">
                    <ul>  
                        <li>
                            <label>User name : </label>  
                            <input type="text" name="usermail" placeholder="user name" required>
                        </li>
                        <li>
                            <label>Password : </label>  
                            <input type="password" name="password" placeholder="password" required>
                        </li>
                    </ul>
                    <div id="center">
                        <input type="submit" value="LOG IN">
                    </div>
                </form>
            </div>
            
        </div> 
        
    </body>
</html>