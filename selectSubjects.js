let header = document.getElementById("header");
let buttons = header.getElementsByClassName("btn");
for(let i = 0; i<buttons.length;i++){
  buttons[i].addEventListener("click",function(){
  let current_active = document.getElementsByClassName("active");
  current_active[0].className = current_active[0].className.replace(" active","");
  this.className += " active";
  });
}

ShowDepartment(1);
function ShowDepartment(x){
  const department=document.getElementsByClassName("department");
  let i;
  for(i=0;i<department.length;i++){
     department[i].style.display="none";
  }
  department[x-1].style.display="block";

}

//Amaizing this code substitute 356 line of code
 function showMe(x){
 const  element = document.getElementsByClassName("I-Am-Hidden");
  element[x-1].classList.toggle("You-Are-Shown");
   }
