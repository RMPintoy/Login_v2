<html>
    <head>
        <title>Login_new</title>
        <link rel="stylesheet" href="css/style.css">
        <script type = "text/javascript" src="pass.js"></script>
    </head>

    <body>
        <div class="container">
            <img id="sidepic" src="img/img3.jpg" alt="woman">
        
        <div class="log">
            <h1>Sign in</h1>
            <p>Don't have an account yet? <a class="b" href="https://workspace.google.com" target="blank">Sign up</a></p>
            <form class="form">
                <div class="type">
                <input oninput="return formvlid()" type="text" placeholder="Email address" id="email">
                </div>
                <div>
                <span class="type" id="vaild-email"></span>
                </div>
                <div class="type">
                <input oninput="return formvalid()" type="password" placeholder="Password" id="password">
                <img src="https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png"
                    onclick="show()" id="showimg">  
                </div>
                <div>
                <span class="type" id="vaild-pass"></span>
                </div>
                <button type="submit" id="btn">Sign in with email</button>
            </form> 
        </div>
        </div>
    </body>
</html>