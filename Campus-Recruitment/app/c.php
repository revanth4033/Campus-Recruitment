<!DOCTYPE html>
<html>
<head>
 <title>Contact Us</title>
 <style>
  body {
   background: linear-gradient(to bottom, #000000, #191919);
  }

  .container {
   display: flex;
   justify-content: space-between;
   align-items: center;
   margin: 50px;
   background: rgba(255, 255, 255, 0.2);
   padding: 50px;
   box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
   backdrop-filter: blur(10px);
   border-radius: 10px;
  }

  .form-container {
   width: 40%;
  }

  form {
   display: flex;
   flex-direction: column;
   align-items: flex-start;
   background: rgba(255, 255, 255, 0.8);
   padding: 20px;
   border-radius: 10px;
   box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
  }

  input[type="text"], input[type="email"], textarea {
   margin-bottom: 10px;
   padding: 10px;
   border: none;
   border-radius: 5px;
   width: 100%;
   background-color: rgba(255, 255, 255, 0.6);
   color: #333;
   font-size: 16px;
   font-weight: bold;
  }

  input[type="submit"] {
   background-color: #4CAF50;
   color: white;
   padding: 10px;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   width: 100%;
   margin-top: 10px;
   font-size: 16px;
   font-weight: bold;
  }

  .right-container {
   width: 40%;
   display: flex;
   flex-direction: column;
   align-items: center;
  }

  .phone-symbol {
   font-size: 50px;
   margin-bottom: 20px;
   color: #fff;
  }

  .linkedin-profile {
   margin-top: 20px;
   background-color: #0077b5;
   color: #fff;
   padding: 10px;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   font-size: 16px;
   font-weight: bold;
   text-decoration: none;
   text-align: center;
  }

  .linkedin-profile:hover {
   background-color: #004471;
  }
 </style>
</head>
<body>
 <div class="container">
  <div class="form-container">
   <form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="suggestions">Suggestions:</label>
    <textarea id="suggestions" name="suggestions" rows="5" required></textarea>

    <input type="submit" value="Submit">
   </form>
  </div>

  <div class="right-container">
  <div class="phone-symbol">
   <i class="fas fa-phone"></i>
   <span>+1 (123) 456-7890</span>
  </div>
  <a href="https://www.linkedin.com/in/your-profile-link" target="_blank" class="linkedin-profile">
   <i class="fab fa-linkedin"></i> LinkedIn Profile
  </a>
 </div>
</div>
</body>
</html>