

const canvas = document.getElementById("canvas");
const context = canvas.getContext("2d");

let rect = {
  x: 100,
  y: 100,
  width: 20,
  height: 20,
};
let wall = {
  x: 300,
  y: 300,
  width: 10,
  height: 35,
};

let food = {
  x: 250,
  y: 50,
  width: 10,
  height: 10,
  eaten: false,
};

// Key presses from user
let left = false;
let up = false;
let right = false;
let down = false;

let step = 2;


function overlaps(box1, box2) {
  return ((box1.x < box2.x && box1.x + box1.width/2 > box2.x - box2.width/2) ||
         (box1.x > box2.x && box1.x - box1.width/2 < box2.x + box2.width/2)) &&
         ((box1.y < box2.y && box1.y + box1.height/2 > box2.y - box2.height/2) ||
         (box1.y > box2.y && box1.y - box1.height/2 < box2.y + box2.height/2));
}

function isOnCanvas(box) {
  return box.x - box.width/2 > 0 &&
         box.x + box.width/2 < canvas.width &&
         box.y - box.height/2 > 0 &&
         box.y + box.height/2 < canvas.height;
}

function drawRect(ctx, {x, y, width, height}, color="black") {
  let halfWidth = width/2;
  ctx.fillStyle = color;
  ctx.fillRect(x-width/2, y-height/2, width, height);
}

function clearCanvas(ctx) {
  ctx.fillStyle = "rgb(255, 255, 255)";
  ctx.fillRect(0, 0, canvas.width, canvas.height);
  ctx.strokeRect(0, 0, canvas.width, canvas.height);
}

// Note: adding to "canvas" instead of "document" is more correct, but I couldn't get it to work
3
window.addEventListener('keydown', function(event) {
  if (event.repeat) return;
  console.log("keydown:", event.key, event.keyCode, event.repeat);
  switch (event.key) {
    case "a":
    case "A":
      left = true;
      break;
    case "w":
    case "W":
      up = true;
      break;
    case "d":
    case "D":
      right = true;
      break;
    case "s":
    case "S":
      down = true;
      break;
  }
});

window.addEventListener('keyup', function(event) {
  console.log(event.key, event.keyCode);
  switch (event.key) {
    case "a":
    case "A":
      left = false;
      break;
    case "w":
    case "W":
      up = false;
      break;
    case "d":
    case "D":
      right = false;
      break;
    case "s":
    case "S":
      down = false;
      break;
  }
});
console.log("added key listeners");

function stopRect() {
  left = false;
  up = false;
  right = false;
  down = false;
}

// Main event loop
function draw() {
  //console.log("draw");
  clearCanvas(context);
  newRect = {
    x: rect.x,
    y: rect.y,
    width: rect.width,
    height: rect.height,
  }
  let rectChanged = false;

  // Potential transformations of newRect
  if (right) {
    newRect.x += step;
    rectChanged = true;
  } if (down) {
    newRect.y += step;
    rectChanged = true;
  } if (left) {
    newRect.x -= step;
    rectChanged = true;
  } if (up) {
    newRect.y -= step;
    rectChanged = true;
  }
  if (!food.eaten && overlaps(newRect, food)) {
    food.eaten = true;
    newRect.width += 5;
    newRect.height += 5;
    rectChanged = true;
  }

  if (rectChanged) {
    // New rectangle is valid?
    if (overlaps(newRect, wall)) {
      console.log("OVERLAP");
    } else if (!isOnCanvas(newRect)) {
      console.log("OUT OF BOUNDS");
    } else
      rect = newRect;
  }

  drawRect(context, rect);
  drawRect(context, wall);
  if (!food.eaten)
    drawRect(context, food, "green");
  window.requestAnimationFrame(draw);
}



/*
context.fillStyle = "green";
context.fillRect(10, 10, 150, 100);
context.fillStyle = "rgba(0, 0, 200, 0.5)";
context.fillRect(100, 100, 150, 100);
context.strokeRect(5, 5, 200, 200);

context.beginPath();
context.moveTo(150, 150);
context.lineTo(175, 160);
context.lineTo(125, 160);
context.closePath
context.fillStye = "pink";
context.fill()
*/

canvas.focus();
window.requestAnimationFrame(draw);
