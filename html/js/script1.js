


let var1 = "hello", var2 = "world";

//alert(var1 + " " + var2);
//let var3 = prompt(typeof(var1));


/*
let num = 5;
do {
  let num = 4;
} while (false);
alert(num);
console.log("num = " + num);
*/

function printObj(obj) {
  console.log("Object:");
  for (key in obj)
    console.log("  " + key + ": " + obj[key]);
}
var obj1 = {
  key1: "val1",
  key2: "val2",
  num: 4,
  //incrementNum: function() {
  incrementNum() {
    this.num += 1;
  }
}
obj1["key3"] = "val3";
obj1.key4 = "val4";
obj1.incrementNum();
printObj(obj1);


function Constructor(num) {
  if (new.target)
    console.log("Constructor called with \"new\"");
  if (typeof(num) == "number")
    this.key1 = num;
  else
    this.key1 = 1;
}
var obj2 = new Constructor(45);
printObj(obj2);



var obj3 = {
  name: "obj3",
  num: 42,
  tellName() {
    console.log("obj3.tellName: " + this.name);

    console.log("obj3 equals? " + String(obj3 === this));
  },
  makeObj() {
    return {
      name: "innerobj",
      temp: this.num,
      otherObj: this,
      tellName() {
        console.log("innerobj.tellName: " + this.name);
        console.log("innerobj.temp: " + this.temp);
        console.log("innerobj.num: " + this.num);
        console.log("innerobj equals obj3? " + String(obj3 === this));
        console.log("innerobj.otherObj equals obj3? " + String(this.otherObj === this));
      },
    }
  },
}
obj3.tellName();
tmp = obj3.makeObj();
console.log("tmp.temp: " + obj3.temp);
tmp.tellName();





let range = {
  from: 1,
  to: 5,
  [Symbol.iterator]: function() {
    return {
      current: this.from,
      last: this.to,

      // 3. next() is called on each iteration by the for..of loop
      next() {
        // 4. it should return the value as an object {done:.., value :...}
        if (this.current <= this.last) {
          return { done: false, value: this.current++ };
        } else {
          return { done: true };
        }
      },
    };
  },
};

// now it works!
for (let num of range) {
  console.log(num); // 1, then 2, 3, 4, 5
}


let oneTwoThree = {
  [Symbol.iterator]() {
    return {
      cur: 1,
      done: false,
      next() {
        let ret = null;
        switch (this.cur) {
          case 1:
            ret = "one";
            break;
          case 2:
            ret = "two";
            break;
          case 3:
            ret = "three";
            break;
          default:
            return { done: true };
        }
        this.cur += 1;
        return { done: false, value: ret};
      }
    }
  },
}


function makeCounter() {
  let counter = 0;
  return function() {
    return counter++;
  }
}




/* A mini investigation into "this" */

let obj4 = {
  val: 42,
  func() {
    console.log("func() this:" + String(this));
    return function() {
      console.log("inner func() this:" + String(this));
    };
  }
}


console.log("global this:" + String(this));
let f = obj4.func();
f();



function outerFunc() {
  function innerFunc() {
    console.log("innerFunc this:" + String(this));
  }
  console.log("outerFunc this:" + String(this));
  innerFunc();
}

outerFunc();
console.log("binding..");
let outerFuncBinded = outerFunc.bind(obj4);
outerFuncBinded();



/* Get/set */

let obj5 = {
  val1: 111,
  val2_internal: 222,

  get val2() {
    return this.val2_internal++;
  }
}



let parentObj = {
  val: 42,
  fun() {
    console.log("parentObj.fun()");
  },
}
/*
let childObj = {
  __proto__: parentObj,
}
*/
function makeChildObj() {}
makeChildObj.prototype = parentObj;

function testConstructor() {}




/* DOM */
function walkDom(node, depth) {
  //console.log("  ".repeat(depth) + "* " + node.tagName + ": " + node.childNodes.length + " children, type=" + node.nodeType);
  console.log(node);
  for (child of node.childNodes) {
  //for (child of node.children) {
    walkDom(child, depth+1);
  }
}
walkDom(document.documentElement, 0);
