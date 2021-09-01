

//alert("dom.js!");

button = document.getElementById("div-creator-button");
console.log("button:", button);

function makeDiv(event) {
  console.log(event)
  container = document.getElementById("container");
  //alert("making div!");
  div = document.createElement("div");
  //div.className = "alert";
  div.innerHTML = "<strong>Hello!</strong>";
  container.after(div);
  setTimeout(() => div.remove(), 1000);
}


/* Mouse activity detector */

const ACTIVITY_TIMEOUT_MS = 5000;
const ACTIVITY_LISTENER_DELAY_MS = 1000;
let lastActivity = null;
let activityTriggered = false;

function addActivityListener() {
  //activityTriggered = false;
  document.addEventListener("mousemove", mousemoveActivityListener);
}

function mousemoveActivityListener(ev) {
  console.log("activity:", ev)
  //if (activityTriggered) return;
  //activityTriggered = true;
  document.removeEventListener("mousemove", mousemoveActivityListener);
  setTimeout(document.addEventListener.bind(document, "mousemove", mousemoveActivityListener), ACTIVITY_LISTENER_DELAY_MS);
  //setTimeout(addActivityListener, 1000);
}

///document.addEventListener("mousemove", mousemoveActivityListener);
addActivityListener();
