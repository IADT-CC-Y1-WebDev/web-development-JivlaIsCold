import Animal from "./Animal.js";
 
class Cat extends Animal {
 
    constructor(_name, _age){
        super(_name, _age);
    }
 
    MakeNoise(){
        console.log("MEOWWW");
    }
 
}
 
export default Cat;