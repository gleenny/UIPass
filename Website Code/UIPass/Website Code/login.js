function checkFields() {
  let username = document.getElementById("username").value.trim();
  let password = document.getElementById("password").value.trim();
  let message = document.getElementById("message").value.trim();
  if (username === "" || password === "") {
    message.textContemt = "Please fill all fields";
  } else {
    message.textContent = "";
    document.getElementById("loginForm").submit();
  }
}
