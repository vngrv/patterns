const Singleton = {
    data: Math.random(),
    getInstance() {
        return this;
    }
};

let obj1 = Singleton.getInstance();
let obj2 = Singleton.getInstance();

console.log(obj1);
console.log(obj2);
