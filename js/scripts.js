//Check for JS

document.body.className = "js"


//Clear Children

function clearChildren(element) {
   for (var i = 0; i < element.childNodes.length; i++) {
      var e = element.childNodes[i];
      if (e.tagName) switch (e.tagName.toLowerCase()) {
         case 'input':
            switch (e.type) {
               case "radio":
               case "checkbox": e.checked = false; break;
               case "button":
               case "submit":
               case "image": break;
               default: e.value = ''; break;
            }
            break;
         case 'select': e.selectedIndex = 0; break;
         case 'textarea': e.innerHTML = ''; break;
         default: clearChildren(e);
      };
   };
};


// Establish Variables for Sections

var exp2 = document.getElementById("exp2");
var exp2Yes = document.getElementById("exp2Yes");
var exp2No = document.getElementById("exp2No");
var exp3Check = document.getElementById("exp3Check");
var exp3 = document.getElementById("exp3");
var exp3Yes = document.getElementById("exp3Yes");
var exp3No = document.getElementById("exp3No");


// Expanded Section Buttons

exp2Yes.onclick = function() { 
    exp2.style.display="block";
    exp3Check.style.display="block";
    exp2Yes.className -= " noActive";
    exp2No.className -= " noActive";
    exp2Yes.className += " yesActive";
    exp3Check.style.display="block";
};
exp2No.onclick = function() { 
    exp2.style.display="none";
    exp2Yes.className -= " yesActive";
    exp2Yes.className += " noActive";
    exp2No.className += " noActive";
    clearChildren(exp2);
 };

exp3Yes.onclick = function() { 
    exp3.style.display="block";
    exp3Yes.className -= " noActive";
    exp3No.className -= " noActive";
    exp3Yes.className += " yesActive";
};
exp3No.onclick = function() { 
    exp3.style.display="none";
    exp3Yes.className -= " yesActive";
    exp3Yes.className += " noActive";
    exp3No.className += " noActive";
    clearChildren(exp3);
 };

ref2Yes.onclick = function() { 
    ref2.style.display="block";
    ref3Check.style.display="block";
    ref2Yes.className -= " noActive";
    ref2No.className -= " noActive";
    ref2Yes.className += " yesActive";
    ref3Check.style.display="block";
};
ref2No.onclick = function() { 
    ref2.style.display="none";
    ref2Yes.className -= " yesActive";
    ref2Yes.className += " noActive";
    ref2No.className += " noActive";
    clearChildren(ref2);
 };

ref3Yes.onclick = function() { 
    ref3.style.display="block";
    ref3Yes.className -= " noActive";
    ref3No.className -= " noActive";
    ref3Yes.className += " yesActive";
};
ref3No.onclick = function() { 
    ref3.style.display="none";
    ref3Yes.className -= " yesActive";
    ref3Yes.className += " noActive";
    ref3No.className += " noActive";
    clearChildren(ref3);
 };

// Text Input Counting

function textLength(value){
   return value.length;
};

// Personal Statement Limit

document.getElementById('personal').onkeyup = function(){
    var count = textLength(this.value);
    var limit = document.getElementById("personalContainer");
    document.getElementById("personalLimit").innerHTML = count;
    if(380 - count < 50) { limit.style.display="block" }
    else { limit.style.display="none" };
};

// Experience Combined Limits

function dutyCount(){
    var count = document.getElementById('duty1one').value.length + document.getElementById('duty1two').value.length + document.getElementById('duty1three').value.length;
    var containers = document.getElementsByClassName("dutyContainer");
    var dutyLimits = document.getElementsByClassName("dutyLimit");
    for (i=0; i < dutyLimits.length; ++i) {
        dutyLimits[i].innerHTML = count;
    }
    if(240 - count < 50) { 
        for (i=0; i < containers.length; ++i) {
            containers[i].style.display="block"
        } 
    }
    else { 
        for (i=0; i < containers.length; ++i) {
            containers[i].style.display="none"
        }

    };
};

function dutyCount2(){
    var count = document.getElementById('duty2one').value.length + document.getElementById('duty2two').value.length + document.getElementById('duty2three').value.length;
    var containers = document.getElementsByClassName("dutyContainer2");
    var dutyLimits = document.getElementsByClassName("dutyLimit2");
    for (i=0; i < dutyLimits.length; ++i) {
        dutyLimits[i].innerHTML = count;
    }
    if(240 - count < 50) { 
        for (i=0; i < containers.length; ++i) {
            containers[i].style.display="block"
        } 
    }
    else { 
        for (i=0; i < containers.length; ++i) {
            containers[i].style.display="none"
        }

    };
};

function dutyCount3(){
    var count = document.getElementById('duty3one').value.length + document.getElementById('duty3two').value.length + document.getElementById('duty3three').value.length;
    var containers = document.getElementsByClassName("dutyContainer3");
    var dutyLimits = document.getElementsByClassName("dutyLimit3");
    for (i=0; i < dutyLimits.length; ++i) {
        dutyLimits[i].innerHTML = count;
    }
    if(240 - count < 50) { 
        for (i=0; i < containers.length; ++i) {
            containers[i].style.display="block"
        } 
    }
    else { 
        for (i=0; i < containers.length; ++i) {
            containers[i].style.display="none"
        }

    };
};


// Closing Statement Limit

document.getElementById('closerText').onkeyup = function(){
    var count = textLength(this.value);
    var limit = document.getElementById("closerContainer");
    document.getElementById("closerLimit").innerHTML = count;
    if(280 - count < 50) { limit.style.display="block" }
    else { limit.style.display="none" };
};


// Expand Extra Entries

function init() {
    var tablinks = document.getElementById('myform').getElementsByTagName('img');
    for (var i = 0, j = tablinks.length; i < j; i++) {
        tablinks[i].onclick = addit;
    };
};

function addit() {
    if(this.classList.contains("add")){
        this.parentNode.nextElementSibling.style.display="block";
    };
    if(this.classList.contains("remove")){
        this.parentNode.style.display="none";
        clearChildren(this.parentNode);
    };
};

window.onload = init;