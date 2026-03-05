let msg = document.getElementById("msg-input");
let send_btn = document.getElementById("msg-send-btn");
let msgbox = document.getElementById("msg-body");

send_btn.addEventListener("click", handlemsg);

function handlemsg() {
  let msg_text = msg.value.trim();

  if (msg_text.length > 0) {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "chatinglogic.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
      if (xhr.status === 200) {
        console.log(xhr.responseText);
        msg.value = "";
      }
    };

    xhr.send("msg=" + encodeURIComponent(msg_text));
    loadmsg();
  } else {
    console.log("Empty message");
  }
}
function createmsg(fullname, msgtxt) {
  let div = document.createElement("div");
  div.setAttribute("class", "msg");
  let h3 = document.createElement("h3");
  div.appendChild(h3);
  let p = document.createElement("p");
  div.appendChild(p);
  h3.innerText = fullname;
  p.innerText = msgtxt;
  msgbox.appendChild(div);
}
function loadmsg() {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "chatinglogic.php", true);
  xhr.onload = function () {
    if (xhr.status == 200) {
      let response = JSON.parse(xhr.responseText);
      msgbox.innerHTML = "";
      for (let i = 0; i < response.length; i++) {
        createmsg(response[i].sender_name, response[i].msg);
      }
    }
  };
  xhr.send();
}

setInterval(loadmsg, 500);
