var checked = true;

function checkLogin() {
  if (checked) {
    var x = document.getElementById("fullname");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
    checked = false;
  }
}

function checkSignup() {
  if (!checked) {
    var x = document.getElementById("fullname");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
    checked = true;
  }
}

function returnDefault() {
  document.getElementById("email").innerHTML = "";
  document.getElementById("password").value = "";
  document.getElementById("name").innerHTML = "";
}

function checkEmail(email) {
  let x = JSON.parse(localStorage.getItem("users"));
  if (x == null) return false;
  for (let i = 0; i < x.length; i++) {
    if (x[i].email == email) return true;
  }
  return false;
}

function checkInfo(email, password) {
  let x = JSON.parse(localStorage.getItem("users"));
  for (let i = 0; i < x.length; i++) {
    if (x[i].email == email && x[i].password == password) return true;
  }
  return false;
}

function logIn() {
  event.preventDefault();
  let loged = false;
  sessionStorage.setItem("login", false);

  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  if (!loged) {
    if (checkInfo(email, password)) {
      loged = true;
      sessionStorage.setItem("login", true);

      window.location.href = "index.html";
    } else if (!checkEmail(email)) {
      sessionStorage.setItem("login", false);
      document.getElementById("em1").innerHTML = "E-mail is not registred !";
      document.getElementById("em1").style.color = "red";
    } else {
      sessionStorage.setItem("login", false);
      document.getElementById("pas1").innerHTML = "Password is incorrect";
      document.getElementById("pas1").style.color = "red";
    }
  }
}

function signUp() {
  event.preventDefault();
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let fullName = document.getElementById("name").value;
  let date = new Date();
  returnDefault();

  let users = {
    fullName: fullName,
    email: email,
    password: password,
    createAt: date
  };

  let getUsers = JSON.parse(localStorage.getItem("users"));
  if (!getUsers) {
    getUsers = new Array();
  }
  if (checkEmail(email)) {
    alert("This e-mail is used earlier");
    return;
  }
  let em = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/; 
  let p = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

  console.log(em.test("arlinda.sylaj@studentet.uni-pr.edu")); 
  console.log(em.exec("adenita.luta@student.uni-pr.edu"));
  console.log(p.test("ArlindaSylaj1"));
  console.log(p.exec("AdenitaLuta1"));

  if (!password.match(p)) {
    alert("Password should be 6-20 charaters long , and please have : A-Z , a-z , 1-9");
    return;
  }
  if (!email.match(em)) {
    alert("Email is the wrong format");
    return;
  }
  getUsers.push(users);

  localStorage.setItem("users", JSON.stringify(getUsers));
  document.getElementById("small").checked = true;
  alert("Succesfully Registred ! ");
  checkLogin();
}

function checkWhich() {
  if (!checked) {
    logIn();
    checkLogin();
  } else {
    signUp();
    returnDefault();
  }
}
