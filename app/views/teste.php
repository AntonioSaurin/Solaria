<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation - Easy Tutorials YouTube Channel</title>
  <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      width: 100%;
      height: 100vh;
      background: #141a34;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .useful-links {
      position: absolute;
      top: 5%;
      right: 5%;

    }

    .useful-links a {
      display: block;
      color: #fff;
      text-decoration: none;
    }

    .container form {
      width: 90%;
      max-width: 500px;
      padding: 50px 30px 20px;
      background: #fff;
      border-radius: 4px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
      position: relative;
    }

    .fa-paper-plane {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      font-size: 26px;
      padding: 20px;
      border-radius: 50%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .input-group {
      width: 100%;
      display: flex;
      align-items: center;
      margin: 10px 0;
      position: relative;
    }

    .input-group label {
      flex-basis: 28%;
    }

    .input-group input,
    .input-group textarea {
      flex-basis: 68%;
      background: transparent;
      border: 0;
      outline: 0;
      padding: 10px 0;
      border-bottom: 1px solid #999;
      color: #333;
      font-size: 16px;
    }

    ::placeholder {
      font-size: 14px;
    }

    form button {
      background: #141a34;
      color: #fff;
      border-radius: 4px;
      border: 1px solid rgba(255, 255, 255, 0.7);
      padding: 10px 40px;
      outline: 0;
      cursor: pointer;
      display: block;
      margin: 30px auto 10px;
    }

    .input-group span {
      position: absolute;
      bottom: 12px;
      right: 17px;
      font-size: 14px;
      color: #f00;
    }

    #submit-error {
      color: #f00;
    }

    .input-group span i{
      color: #0f0;
    }
  </style>
</head>

<body>
  <div class="container">
    <form>
      <i class="fas fa-paper-plane"></i>

      <div class="input-group">
        <label>Full Name</label>
        <input type="text" placeholder="Enter your name" id="contact-name" onkeyup="validationName()">
        <span id="name-error"></span>
      </div>

      <div class="input-group">
        <label>Phone No.</label>
        <input type="tel" placeholder="123 456 7890" id="contact-phone" onkeyup="validationPhone()" maxlength="10">
        <span id="phone-error"></span>
      </div>

      <div class="input-group">
        <label>Email Id</label>
        <input type="email" placeholder="Enter Email" id="contact-email" onkeyup="validationEmail()">
        <span id="email-error"></span>
      </div>

      <div class="input-group">
        <label>Your Message</label>
        <textarea rows="5" placeholder="Enter your message" id="contact-textArea" onkeyup="validationTextArea()"></textarea>
        <span id="message-error"></span>
      </div>

      <button>Submit</button>
      <span id="submit-error">please fix error</span>

    </form>

  </div>
  <script>
    var nameError = document.getElementById("name-error");
    var phoneError = document.getElementById("phone-error");
    var emailError = document.getElementById("email-error");
    var messageError = document.getElementById("message-error");
    var submitError = document.getElementById("submit-error");

    function validationName() {
      var name = document.getElementById('contact-name').value;

      if (name.length == 0) {
        nameError.innerHTML = "Name required";
        return false;
      }

      if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
        nameError.innerHTML = "Write full name";
        return false;
      }
      nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
      return true;
    }

    function validationPhone() {
      var phone = document.getElementById('contact-phone').value;

      if (phone.length == 0) {
        phoneError.innerHTML = "Phone required";
        return false;
      }

      if (!phone.match(/^[0-9]{10}$/)) {
        phoneError.innerHTML = "Only digits please";
        return false;
      }
      phoneError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
      return true;
    }

    function validationEmail() {
      var email = document.getElementById('contact-email').value;

      if (email.length == 0) {
        emailError.innerHTML = "email required";
        return false;
      }

      if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[.][a-z]{2,4}$/)) {
        emailError.innerHTML = "Email invalid";
        return false;
      }
      emailError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
      return true;
    }
  </script>
</body>

</html>