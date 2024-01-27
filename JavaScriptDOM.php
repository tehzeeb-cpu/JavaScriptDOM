<!-- #1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Upload Your Image</h1>
        <input type="file" id="upload">
        <img id="image" src="" alt="Profile Picture">
    </div>
    <script>
        const upload = document.getElementById("upload");
        const image = document.getElementById("image");
        upload.onchange = function(){
            var reader = new FileReader();
            reader.readAsDataURL(upload.files[0]);
            reader.onload = function(){
                file_name = reader.result;
                image.src = file_name;
            }
        }
    </script>
</body>
</html>

<!-- #2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="text">This is Light Mode</h1>
    <button onclick="toggle()">Toggle Theme</button>
    <script>
        const text = document.getElementById("text");
        function toggle(){
            const color = document.body.style.backgroundColor;
            if(color === "black"){
                text.innerHTML="This light mode!"
                document.body.style.backgroundColor = "white";
                text.style.color = "black";
            }
            else{
                text.innerHTML="This dark mode!"
                document.body.style.backgroundColor = "black";
                text.style.color = "white";
            }
        }
    </script>
</body>
</html>

<!-- #3 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .plus{
        background-color: beige;
        padding: 10px;
        border: solid 1px black;
        cursor: pointer;
    }
    .minus{
        background-color: beige;
        padding: 10px;
        border: solid 1px black;
        cursor: pointer;
    }
    .container{
        display: flex;
        justify-content: center;
    }
    .number{
        padding: 10px;
    }
</style>
<body>
    <div class="container">
        <span class="minus" id="minus">-</span>
        <span class="number" id="number">0</span>
        <span class="plus" id="plus">+</span>
    </div>
    <script>
        const number = document.getElementById("number");
        const minus = document.getElementById("minus");
        const plus = document.getElementById("plus");
        minus.addEventListener('click',()=>{
            if(Number(number.innerHTML)>0){
                number.innerHTML = Number(number.innerHTML) - 1;
            }
            else{
                alert("Counter is going below 0");
            }
        })
        plus.addEventListener('click',()=>{
            number.innerHTML = Number(number.innerHTML) + 1;
        })
    </script>
</body>
</html>

<!-- #4 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Sign Up Form</h1>
        <form action="" onsubmit="validate(event)">
        Name:<input type="text" name="name" placeholder="(Minimum 3 characters)" id="name" required></input><br>
        Email:<input type="email" name="email" placeholder="Enter Your Email" id="email" required></input><br>
        Password:<input type="text" name="password" placeholder="(Minimum 8 character)" id="password" required></input><br>
        <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        function validate(event){
            event.preventDefault();
            const name = document.getElementById("name");
            const email = document.getElementById("email");
            const password = document.getElementById("password");
            if(name.value.length>=3 && password.value.length>=8){
                alert("Form Validation Successfull !!");
            }
            else{
                alert("Form Validation Failed !!");
            }
        }
    </script>
</body>
</html>

<!-- #5 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .hide{
        display: none;
    }
    #button{
        margin-bottom: 10px;
    }
</style>
<body>
    <div class="container">
        <h1 id="text">Your image is visible</h1>
        <button id="button">Toggle Image</button>
        <div><img src="./images/image.jpg" alt="Image" id="image"></div>
    </div>
    <script>
        var text = document.getElementById("text");
        var button = document.getElementById("button");
        var image = document.getElementById("image");
        button.addEventListener('click',()=>{
            image.classList.toggle("hide");
            if(text.innerHTML != "Your image is visible"){
                text.innerHTML = "Your image is visible";
            }
            else{
                text.innerHTML = "Your image is hidden";
            }
        })
    </script>
</body>
</html>

<!-- #6 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dropdown</title>
  </head>
  <body>
    <div class="container"></div>
  </body>

  <script>
    const options = ["JavaScript", "Java", "Python", "C++"];

    const container = document.querySelector(".container");

    const heading = document.createElement("h3");
    heading.innerText = "Which is favorite Programming Language : ";

    const span = document.createElement("span");

    const select = document.createElement("select");

    options.map((data) => {
      const option = document.createElement("option");
      option.innerText = data;
      option.value = data;

      select.appendChild(option);
    });

    span.appendChild(select);

    heading.appendChild(span);

    container.appendChild(heading);
  </script>
</html>

<!-- #7 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dynamic Filter</title>
  </head>
  <body>
    <input type="text" id="filterInput" placeholder="Search for items" />
    <h3>Results:</h3>
    <ul id="itemList">
      <li>HTML</li>
      <li>CSS</li>
      <li>Tailwind CSS</li>
      <li>GitHub</li>
      <li>JavaScript</li>
    </ul>

    <script>
      const filterInput = document.getElementById("filterInput");
      const itemList = document
        .getElementById("itemList")
        .getElementsByTagName("li");

      filterInput.addEventListener("input", function () {
        const filterValue = filterInput.value.toLowerCase();

        for (let i = 0; i < itemList.length; i++) {
          const itemText = itemList[i].innerText.toLowerCase();
          if (itemText.includes(filterValue)) {
            itemList[i].style.display = "block";
          } else {
            itemList[i].style.display = "none";
          }
        }
      });
    </script>
  </body>
</html>

<!-- #8 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clock</title>

    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #000;
        color: #fff;
        font-size: 3rem;
      }

      .timer {
        padding: 20px;
        border: 2px solid #fff;
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
    <div class="timer" id="timer">
      <span id="hours">00</span> : <span id="minutes">00</span> :
      <span id="seconds">00</span>
    </div>

    <script>
      function updateTimer() {
        const currentTime = new Date();
        const hours = currentTime.getHours().toString().padStart(2, "0");
        const minutes = currentTime.getMinutes().toString().padStart(2, "0");
        const seconds = currentTime.getSeconds().toString().padStart(2, "0");
        const hexCode = `#${hours}${minutes}${seconds}`;

        document.getElementById("hours").innerText = hours;
        document.getElementById("minutes").innerText = minutes;
        document.getElementById("seconds").innerText = seconds;

        document.body.style.backgroundColor = hexCode;
      }

      setInterval(updateTimer, 1000);
    </script>
  </body>
</html>

<!-- #9 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <button type="submit" value="login" id="login" onclick="login()">Login</button>
        <button type="submit" value="logout" id="logout" onclick="logout()">Logout</button>
        <h1 id="text"></h1>
    </div>
    <script>
        function login(){
            const login = document.getElementById("login");
            const text = document.getElementById("text");
            text.textContent = "User is logged In"
            localStorage.setItem("auth", true);
        }
        function logout(){
            const logout = document.getElementById("logout");
            const text = document.getElementById("text");
            text.textContent = "User Has Not logged In"
            localStorage.setItem("auth", false);
        }
    </script>
</body>
</html>
