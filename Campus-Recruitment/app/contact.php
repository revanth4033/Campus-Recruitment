<!DOCTYPE html>
<html>
<head>
 <title>Contact Us</title>
 <style>
  .container {
   display: flex;
   justify-content: space-between;
   align-items: center;
   margin: 50px;
  }

  .form-container {
   width: 50%;
  }

  form {
   display: flex;
   flex-direction: column;
   align-items: flex-start;
  }

  input[type="text"], input[type="email"], textarea {
   margin-bottom: 10px;
   padding: 10px;
   border: none;
   border-radius: 5px;
   width: 100%;
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
  }

  .linkedin-profile {
   margin-top: 20px;
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
   <div class="phone-symbol">&#9742; +1 555-123-4567</div>
   <a href="https://www.linkedin.com/in/your-profile-link" class="linkedin-profile">LinkedIn Profile</a>
  </div>
 </div>
</body>
</html>