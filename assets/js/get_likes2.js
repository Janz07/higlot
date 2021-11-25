"use strict";

const button = document.getElementById('button');

function test() {
    var items = document.getElementsByName("tag");
    var selectedItems = "";
    for (var i = 0; i < items.length; i++) {
        if (items[i].type == "checkbox" && items[i].checked == true) selectedItems += items[i].value + "\n";
    }
    console.log(selectedItems);
}

function test2(params) {
    var array = [];
    var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');

    if (checkboxes.length < 3) {
        alert('Hey, recuerda que son 3');
    }if (checkboxes.length > 3) {
        alert('Hey, recuerda que son sólo 3');
    }if (checkboxes.length == 3) {
        for (var i = 0; i < checkboxes.length; i++) {
            array.push(checkboxes[i].value);
        }
        console.log(array);
    }

    
    



    // var planA = [1,2,3];
    // expect(planA).toEqual(jasmine.arrayContaining(array));
}

button.addEventListener('click', (event) => {
    test2();
});


