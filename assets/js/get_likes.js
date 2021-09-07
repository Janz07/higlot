

const button = document.getElementById('button');

let a = ["op1", "op2", "op3"];
let b = ["op1", "op2", "op4"];
let c = ["op1", "op2", "op5"];
let d = ["op1", "op3", "op4"];
let e = ["op1", "op3", "op5"];
let f = ["op1", "op4", "op5"];

let g = ["op2", "op3", "op4"];
let h = ["op3", "op4", "op5"];




// function showValues(name) {
//     const options = document.querySelectorAll(`input[name="${name}"]:checked`); //Get the options checked
//     let values = []; //Options selected

    

//     options.forEach(option => {
//         values.push(option.value);
//     }); 


//     if (a.length == values.length) { //Compare the lenght of array, the options selected
       
//         let resu = 
//         a.every(function (value) {
//             return values.indexOf(value) !==-1;
//         });

//         if (resu == true) { //Start the comparison 
//             console.log("La a");
//         }
//         else {
//             let resu =
//             b.every(function (value) {
//                 return values.indexOf(value) !==-1;
//             });
//             if (resu == true) {
//                 console.log("La b");
//             }
//             else {
//                 let resu =
//                 c.every(function (value) {
//                 return values.indexOf(value) !==-1;
//                 });
//                 if (resu == true) {
//                   console.log("La c")  
//                 }
//                 else {
//                     let resu =
//                     d.every(function (value) {
//                     return values.indexOf(value) !==-1;
//                     });
//                     if (resu == true) {
//                         console.log("La d");
//                     }
//                     else {
//                         let resu =
//                         e.every(function (value) {
//                         return values.indexOf(value) !==-1;
//                         });
//                         if (resu == true) {
//                             console.log("La e");
//                         }
//                         else {
//                             let resu =
//                             f.every(function (value) {
//                             return values.indexOf(value) !==-1;
//                             });
//                             if (resu == true) {
//                                 console.log("La f");
//                             }
//                             else {
//                                 console.log("Pequeño error");
//                             }
//                         }
//                     }
//                 }
//             }
//         }
//     }
//     else {
//         return alert("Hey, recuerda que son 3 opciones!");
//     }
//     return values;
// }

// button.addEventListener('click', (event) => {
//     console.log((showValues('op')));
// });

button.addEventListener('click', (event) => {
    var xz = "xz";
    window.location.href = window.location.href + "?type=" + xz;
});

