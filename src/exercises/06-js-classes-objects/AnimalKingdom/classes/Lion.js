import Animal from "./Animal.js";
 
class Lion extends Animal {
 
    constructor(_name, _age){
        super(_name, _age);
    }
 
    roam(){
        console.log("Roaming: I'm scaryyyy");
    }
 
}
 
export default Lion;