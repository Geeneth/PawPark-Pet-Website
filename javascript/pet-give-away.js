var defaut = document.getElementById("pet-breed").value;
var defaultText = document.getElementById("owner-first-name").value;
console.log("this is:" + defaut);
console.log("this is:" + defaultText);

var email = document.getElementById("owner-email");

//setInterval(test, 1000);

function checkEmpty() {
  //format of the email is:
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

  //checking if all the
  if (
    document.getElementById("pet-breed").value == defaut ||
    document.getElementById("pet-age").value == defaut ||
    document.getElementById("pet-gender").value == defaut ||
    document.getElementById("owner-first-name").value == defaultText ||
    document.getElementById("owner-last-name").value == defaultText
  ) {
    alert("Please fill all the fields");
  } else if (!reg.test(document.getElementById("owner-email").value)) {
    alert("Email is invalid");
  } else {
    console.log("pet-breed:" + document.getElementById("pet-breed").value);
    console.log("pet-age:" + document.getElementById("pet-age").value);
    console.log("pet-gender" + document.getElementById("pet-gender").value);
  }
}

var submit = document.getElementById("submit-btn");
submit.addEventListener("click", checkEmpty);
