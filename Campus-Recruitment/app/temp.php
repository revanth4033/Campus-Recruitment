<html>
    <head>
        <title>LOGIN FORM</title>
        
        <style>
            body {
  
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('login4.jpg')no-repeat;
    background-size: cover;
    background-position: center;
    color:black;
}
.wrapper {
    position: left;
    width: 300px;
    height: 340px;
    background: transparent;
    border: 2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0,.5);
    display : flex;
    justify-content: center;
    align-items: center;
}
.wrapper .form-box {
    width: 100%;
    padding: 30px;
}
.form-box h2 {
    font-size: 2em;
    color : #162938;
    text-align: center;
}
.input-box {
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #162938;
    margin: 30px 0;
}
.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color : #162938;
    font-weight: 500;
    pointer-events: none;
    transition: 0.5s;
}
.input-box input:focus~label,
.input-box input:valid~label{
    top : -5px;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #162938;
    font-weight: 600;
    padding: 0 35px 0 5px;
}
.input-box .icon{
    position: absolute;
    right: 8px;
    bottom: 15px;
    font-size: 1.2em;
    color: #162938;
    line-height: 57px;
}

.btn{
    width: 50%;
    height: 45px;
    background: #162938;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500;
    margin-right: 10px;
}

.wrapper2 {
    margin-left: 10%;
    position: center;
    width: 300px;
    height: 340px;
    background: transparent;
    border: 2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0,.5);
    display : flex;
    justify-content: center;
    align-items: center;
}
.wrapper2 .form-box {
    width: 100%;
    padding: 30px;
}
.wrapper3 {
    margin-left: 10%;
    position: right;
    width: 300px;
    height: 340px;
    background: transparent;
    border: 2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0,.5);
    display : flex;
    justify-content: center;
    align-items: center;
}
.wrapper3 .form-box {
    width: 100%;
    padding: 30px;
}
.navbar{
width: 85%;
margin: auto;
padding: 35px 0;
display: flex;
align-items: center;
justify-content: space-between;
}




*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.lsbtn{
  display: flex;
  
  
}
header a {
			color: #fff;
			text-decoration: none;
			margin-left: 20px;
            font-weight: bold;
		}
    header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
    .container{
			display: flex;
      padding-top: 110px;
      padding-left: 120px;
		}
    .logo {
			width: 100px;
			height: 100px;
			background-color: #fff;
			margin-left: 20px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 36px;
			font-weight: bold;
			color: #333;
		}
        </style>
        
    </head>
    
    <body>
    <header>
		<div class="logo">
				CR
		</div>
		<nav>
			<a href="#">Home</a>
			<a href="#">About Us</a>
			<a href="#">Contact</a>
			<a href="#">Logout</a>
		</nav>
	</header>
      <div class = "container">
        <div class="wrapper">
        <div class = "form-box login">
            <h2>Student</h2>
            <form name = "Admin" action = "register1.html" autocomplete="off" onsubmit="return validate()">
                <div class = "input-box">
                    <span class = "icon"><ion-icon name="mail"></ion-icon></span>
                    <input type = "email" name ="email" required>
                    <label>Email</label>
                </div>
                <div class = "input-box">
                    <span class = "icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type = "password" name = "pd" required>
                    <label>Password</label>
                </div>
                <div class = "lsbtn">
                <button type="submit" class = "btn">Login</button>
                <button type="submit" class = "btn">Signin</button>
                </div>
            </form>
        </div>
        </div>
    <script>
    function login() {
      window.location.href = "register1.html";
    }
      </script>
    <script>
       function validate()
     {
          var email = document.forms["Admin"]["email"].value
      var password = document.forms["Admin"]["pd"].value;
      var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(!emailPattern.test(email)){
                alert("Invalid email address");
        return false;
            }
            if (password.length < 6)
      {
        alert("Password should be at least 6 characters long");
        return false;
      }
    }
    </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!--Student login-->
        <div class="wrapper2">
        <div class = "form-box login">
            <h2>Admin</h2>
            <form name = "Admin" action = "register1.html" autocomplete="off" onsubmit="return validate()">
                <div class = "input-box">
                    <span class = "icon"><ion-icon name="mail"></ion-icon></span>
                    <input type = "email" name ="email" required>
                    <label>Email</label>
                </div>
                <div class = "input-box">
                    <span class = "icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type = "password" name = "pd" required>
                    <label>Password</label>
                </div>
                <div class = "lsbtn">
                <button type="submit" class = "btn">Login</button>
                <button type="submit" class = "btn">Signin</button>
                </div>
            </form>
        </div>
        </div>
            
      <script>
      function studentvalidate()
      {
        var email = document.forms["Admin"]["email"].value
        var password = document.forms["Admin"]["pd"].value;
        var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(!emailPattern.test(email))
        {
          alert("Invalid email address");
          return false;
        }
        if (password.length < 6)
        {
          alert("Password should be at least 6 characters long");
          return false;
        }
      }
      </script>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <div class="wrapper3">
        <div class = "form-box login">
            <h2>Company</h2>
            <form name = "Admin" action = "register1.html" autocomplete="off" onsubmit="return validate()">
                <div class = "input-box">
                    <span class = "icon"><ion-icon name="mail"></ion-icon></span>
                    <input type = "email" name ="email" required>
                    <label>Email</label>
                </div>
                <div class = "input-box">
                    <span class = "icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type = "password" name = "pd" required>
                    <label>Password</label>
                </div>
                <div class = "lsbtn">
                <button type="submit" class = "btn">Login</button>
                <button type="submit" class = "btn">Signin</button>
                </div>
            </form>
        </div>
        </div>
    </div>
        

