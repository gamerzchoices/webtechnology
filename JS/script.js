/*

document.write("<strong>This is external Java Script</strong>");


//Declaring Variables => var or let(for bigger projects let is used)
let fName = "Prabesh";
let lName = "Gupta";


//Declaring contants
const pi = 3.14;
let r = 22;

let area = pi * r * r;

//Displaying
document.write(fName + " " + lName);

//Alerting User
alert("Your system have been compromised.");

//For Developers => Wont be displayed in actual website but can be Inspect>>console
console.log(area.toFixed(1));

//Conditions

let myAge = 20;

if (myAge > 18) {
    document.write("You are eligible to vote");
}
else if (myAge == 18) {
    document.write("You are eligible to vote");
}
else {
    document.write("You are not eligible to vote");
}

//Looping

//For Loop

for (let i = 0; i < 100; i++) {
    document.write("Prabesh Gupta<br>");
}

//While Loop

let j = 1
while (j <= 100) {
    document.write(j + "<br>");
    j++;
}

//Do while loop
let k = 100
do {
    document.write(k + "<br>")
    k--;
} while (k >= 1);


//Array

const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', "Thursday", "Friday", "Saturday"];

console.log(days[6]);


// For each loop
days.forEach(function (printDay) {
    document.write(printDay + "<br>");
});


//Remove first item of array
days.shift();
console.log(days);


//Add item in first position of array
days.unshift("Bynickday");
console.log(days);

//remove last item from array

days.pop();
console.log(days);

//Add item in last of array

days.push("Hosyday");
console.log(days);

//Splicing for adding or replacing item arrayName.splice(position,remove,"Data")

days.splice(0, 0, "Goodday");
document.write(days);

*/

//Function

function fullName() {
    document.getElementById('name').innerHTML = "Prabesh Gupta";
}

function showDate() {
    document.getElementById('currentDate').innerHTML = Date();
}

function simpleInterest() {
    let p = document.getElementById('principle').value;
    let t = document.getElementById('time').value;
    let r = document.getElementById('rate').value;

    let sI = (p * t * r) / 100;

    document.getElementById('showSI').innerHTML = sI.toFixed(0);
}

//Object

let person = {
    fName: "Prabesh",
    lName: "Gupta",
    age: 20,
    address: "Kadaghari",
    country: "Nepal",

    fullName: function () {
        return this.fName + " " + this.lName;
    }

};

document.getElementById('jso').innerHTML = person.fullName();

//Math

let max = 100;
let min = 1;

let result = (Math.random() * (max - min + 1) + min);

document.getElementById('result').innerHTML = result.toFixed(0);

