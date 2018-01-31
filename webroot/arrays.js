// var n = 4;
// var k = 11;
//
// var resenje = 0;
//
// for(n = 4; n <= k; n++) {
//     resenje += n;
// }
//
// console.log("Resenje je: " + resenje );

// function message() {
//     alert('hello');
//
// }

var fruitList = ["apples", "oranges", "bananas"];

fruitList [3]="pineapples"; // add new value in array

fruitList [0]= "watermelon"; //change first value in array

//fruitList.shift() removes first value from array
//"watermelon"

//var newList = fruitList.shift()  create an new array with first value from old array
//newList
//"oranges"
//and
//fruitList
//["bananas",""pineapples"]

//fruitList.pop() same thing but removes las value from array

fruitList.forEach(function (value, index) {
    console.log(value, index);
});
