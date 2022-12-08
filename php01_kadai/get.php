<html>

<head>
      <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Form</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: Quicksand, sans-serif;
}

html {
    font-size: 62.5%;
}

.container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-wrapper {
    width: 100rem;
    height: 70rem;
    background-color: #eee;
    border-radius: 3rem;
    box-shadow: 0 2rem 6rem rgba(0, 0, 0, 0.3);
    position: relative;
    overflow: hidden;
}

.banner {
    position: absolute;
    top: 25%;
    left: -30rem;
    text-align: center;
    color: #fff;
    width: 30rem;
    z-index: 100;
    transition: left 0.8s;
}

.container.change .banner {
    left: 5rem;
}

.banner h1 {
    font-size: 4rem;
    margin-bottom: 3rem;
}

.banner p {
    font-size: 2rem;
}

.green-bg {
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, #3ab19b, #4cbf91);
    position: absolute;
    top: 0;
    left: 0;
    z-index: 50;
    transition: width 1.5s cubic-bezier(0.19, 1, 0.22, 1);
}

.container.change .green-bg {
    width: 40%;
}

.green-bg button {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translateX(-50%);
    width: 16rem;
    height: 5rem;
    background-color: transparent;
    border: 0.1rem solid #fff;
    border-radius: 3rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    color: #fff;
    cursor: pointer;
}

.signup-form {
    width: 60rem;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    padding: 10rem 0;
    transition: left 1.5s cubic-bezier(0.19, 1, 0.22, 1);
}

.container.change .signup-form {
    left: 40rem;
}
.signup-form{
    /* justify-content:center; */
    /* align-items:center; */
}

.signup-form h1 {
    font-size: 4rem;
    color: #3aaf9f;
}

.social-media {
    display: flex;
}

.social-media i {
    width: 4rem;
    height: 4rem;
    border: 0.1rem solid #777;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 2rem;
    font-size: 2rem;
    color: #555;
}

.signup-form p {
    font-size: 1.8rem;
    color: #555;
    margin-bottom: 2rem;
}

.input-group {
    position: relative;
}

.input-group input {
    width: 28rem;
    height: 5rem;
    padding: 1rem 1rem 1rem 3rem;
    background-color: #ddd;
    border: none;
    border-radius: 0.5rem;
}

.input-group i {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
    font-size: 1.2rem;
    color: #555;
}

.signup-form button {
    width: 16rem;
    height: 5rem;
    background-color: #3aaf9f;
    border: none;
    border-radius: 3rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    color: #fff;
    margin-top: 3rem;
    cursor: pointer;
}  
    </style>
    <!-- <title>GET練習</title> -->
</head>
    <!-- <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>サンプルフォームに必要な情報を入れる</li>
            <li>form以外の方法でGETを送って見る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div> -->

    <!-- サンプル↓ -->
  <body>
    <!-- <div class="container">
      <div class="form-wrapper">
        <div class="banner">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start journey with us</p>
        </div>
        <div class="green-bg">
          <a href="get.php"><button type="button">Sign Up</button></a>
        </div> -->
        <form class="signup-form">
          <h1>Create Account</h1>
          <div class="social-media">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
          <p>or use your email for registration</p>
          <form action="get_confirm.php" method="get">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Name" name="name" />
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="mail" />
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" />
                </div>
                    <input type="submit" value=”送信”>
            </form>
        </form>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
<!-- </html>

    <form action="get_confirm.php" method="get">
        お名前: <input type="text" name="name">
        EMAIL: <input type="text" name="mail">
        <input type="submit" value="送信">
    </form>

    form以外の方法でGETを送って見る。
    <a href="get_confirm.php">GETを送る</a>

</body>

</html> -->
