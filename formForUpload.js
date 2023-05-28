function showExam(x,y,z){
    display();
    let Legend=document.getElementById("Legend");
    document.getElementById("controll_subject_type").value=z;
    if(x%2 == 1){
      document.getElementById("controll_exam_type").value="exit";
      Legend.innerHTML="2015 "+ y.toUpperCase() + " EXIT EXAM UPLOADING FORM";
   }
   if(x%2 == 0){
      document.getElementById("controll_exam_type").value="model";
      Legend.innerHTML="2015 " + y.toUpperCase() + " MODEL EXAM UPLOADING FORM";
   }
 }
 var form = document.getElementById('myForm');
 form.addEventListener('submit', function(event) {
   // Add an event listener to the iframe's load event
   var iframe = document.getElementById('myFrame');
   iframe.addEventListener('load', function() {
    var textareas=document.getElementsByClassName("clear");
    for(let i=0;i<textareas.length;i++){
      textareas[i].value="";
    }
   });
 });

function display(){document.getElementById("mainClass").style.display="block";}