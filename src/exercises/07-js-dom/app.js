console.log("Test")

let myButton = document.getElementById("myBtn");
let text = document.getElementById("title")

myButton.addEventListener('click',function(){
    const p = document.createElement('p');
    p.innerHTML = text.value
    document.body.appendChild(p);
});

text.addEventListener("keyup", function(event){
    if (event.key == "Enter") {
        const p = document.createElement('p');
        p.innerHTML = text.value
        document.body.appendChild(p);
    }
});