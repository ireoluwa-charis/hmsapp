<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }
    input[type="text"], input[type="email"], input[type="password"] {
      width: 100%;
      padding: 0.8rem;
      margin: 0.5rem 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      width: 100%;
      padding: 0.8rem;
      margin-top: 1rem;
      background: #28a745;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background: #218838;
    }
    .links {
      text-align: center;
      margin-top: 1rem;
    }
    .links a {
      color: #007bff;
      text-decoration: none;
    }
    .links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <form>
      <input type="text" placeholder="Full Name" required>
      <input type="email" placeholder="Email" required>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <input type="password" placeholder="Confirm Password" required>
      <button type="submit">Register</button>
    </form>
    <div class="links">
      <p>Already have an account? <a href="login.html">Login</a></p>
      <p><a href="about.html">About Us</a></p>
    </div>
  </div>
</body>
</html>
