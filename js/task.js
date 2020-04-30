const list = document.getElementById("task__list");
const input = document.getElementById("textarea__add");
const btn = document.getElementById("btn__add");

const CHECK = "fa-check-circle";
const UNCHECK = "fa-circle-thin";
const LINE_THROUGH = "lineThrough";

let LIST, id;

let data = localStorage.getItem("TASK");

if(data){
    LIST = JSON.parse(data);
    id = LIST.length;
    loadList(LIST);
}else{
    LIST = [];
    id = 0;
}

function loadList(array){
    array.forEach(function(item){
        addTask(item.name, item.id, item.done, item.trash);
    });
}

function addTask(task, id, done, trash){
    
    if(trash){ return; }
    
    const DONE = done ? CHECK : UNCHECK;
    const LINE = done ? LINE_THROUGH : "";
    
    const item = `<li class="item">
                    <i class="fa ${DONE} co" job="complete" id="${id}"></i>
                    <p class="text ${LINE}">${task}</p>
                    <i class="fa fa-trash-o de" job="delete" id="${id}"></i>
                  </li>
                `;
    
    const position = "beforeend";
    
    list.insertAdjacentHTML(position, item);
}

// document.addEventListener("keyup",function(event){
//     if(event.keyCode == 13){
//         const task = input.value;
        
//         if(task){
//             addTask(task, id, false, false);
            
//             LIST.push({
//                 name : task,
//                 id : id,
//                 done : false,
//                 trash : false
//             });
            
//             localStorage.setItem("TASK", JSON.stringify(LIST));
            
//             id++;
//         }
//         input.value = "";
//     }
// });


document.addEventListener("click",function(event){
    if(btn){
        const task = input.value;
        
        if(task){
            addTask(task, id, false, false);
            
            LIST.push({
                name : task,
                id : id,
                done : false,
                trash : false
            });
            
            localStorage.setItem("TASK", JSON.stringify(LIST));
            
            id++;
        }
        input.value = "";
    }
});

function completeTask(element){
    element.classList.toggle(CHECK);
    element.classList.toggle(UNCHECK);
    element.parentNode.querySelector(".text").classList.toggle(LINE_THROUGH);
    
    LIST[element.id].done = LIST[element.id].done ? false : true;
}

function removeTask(element){
    element.parentNode.parentNode.removeChild(element.parentNode);
    
    LIST[element.id].trash = true;
}

list.addEventListener("click", function(event){
    const element = event.target;
    const elementJob = element.attributes.job.value;
    
    if(elementJob == "complete"){
        completeTask(element);
    }else if(elementJob == "delete"){
        removeTask(element);
    }
    
    localStorage.setItem("TASK", JSON.stringify(LIST));
});