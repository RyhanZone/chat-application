let input = document.getElementById("username");
let usererror = document.getElementById("usernameerror");

input.addEventListener("blur", function () {
  let username = input.value;
  let xhr = new XMLHttpRequest()
  xhr.open("POST", "user.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
  xhr.onload = function(){
    if(xhr.status == 200){
      let response = JSON.parse(xhr.responseText);
      usererror.innerText = response.username; 
      if(response.statuse == 'ok'){
        usererror.style.color = 'green';
      } else {
        usererror.style.color = 'red';
      }
    }
  }

  xhr.send("username=" + encodeURIComponent(username));
});