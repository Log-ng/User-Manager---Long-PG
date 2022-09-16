const errList = {
  fullname: "*Fullname must be in 3 - 20 characters",
  username: "*Username must be in 3 - 10 characters",
  password: "*password must be in 2 - 8 characters",
};

const buttonCreate = () => {
  window.location = "../create";
};

const buttonLogin = () => {
  window.location = "../list";
};

const validateForm = () => {
  console.log("run here");
  let fullname = document.createForm.fullname.value;
  let username = document.createForm.username.value;
  let password = document.createForm.password.value;

  let isValidate = true;

  if (fullname.length > 20 || fullname.length < 3) {
    document.getElementById("err-fullname").innerHTML = errList.fullname;
    isValidate = false;
  } else {
    document.getElementById("err-fullname").innerHTML = '';
  }

  if (username.length > 10 || username.length < 3) {
    document.getElementById("err-username").innerHTML = errList.username;
    isValidate = false;
  } else {
    document.getElementById("err-username").innerHTML = '';
  }

  if (password.length > 8 || password.length < 2) {
    document.getElementById("err-password").innerHTML = errList.password;
    isValidate = false;
  } else {
    document.getElementById("err-password").innerHTML = '';
  }

  return isValidate;
};
