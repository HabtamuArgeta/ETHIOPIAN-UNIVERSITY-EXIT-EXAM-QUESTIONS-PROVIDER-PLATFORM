function showExam(x,y,z){
    display();
    let Legend=document.getElementById("Legend");
    document.getElementById("controll_subject_type4update").value=z;
    document.getElementById('subject_type_inInternal').value=z;
    if(x%2 == 1){
      document.getElementById("Exam_type_inInternal").value="exit";
      document.getElementById("controll_exam_type4update").value="exit";
      Legend.innerHTML="2015 "+ y.toUpperCase() + " EXIT EXAM UPDATING FORM";
   }
   if(x%2 == 0){
      document.getElementById("Exam_type_inInternal").value="model";
      document.getElementById("controll_exam_type4update").value="model";
      Legend.innerHTML="2015 " + y.toUpperCase() + " MODEL EXAM UPDATING FORM";
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

  function handleResponse(col1,col2,col3,col4,col5,col6,col7) {
    document.getElementById('myForm').style.display="block";
    document.getElementById('responseContainer1').innerHTML = col1;
    document.getElementById('responseContainer2').innerHTML = col2;
    document.getElementById('responseContainer3').innerHTML = col3;
    document.getElementById('responseContainer4').innerHTML = col4;
    document.getElementById('responseContainer5').innerHTML = col5;
    document.getElementById('responseContainer6').innerHTML = col6;
    document.getElementById('responseContainer7').value = col7;
    document.getElementById('error').innerHTML="";
  }
  function  handleErrorResponse(error){
    document.getElementById('myForm').style.display="none";
    document.getElementById('error').innerHTML=error;
    document.getElementById('responseContainer1').innerHTML = "";
    document.getElementById('responseContainer2').innerHTML = "";
    document.getElementById('responseContainer3').innerHTML = "";
    document.getElementById('responseContainer4').innerHTML = "";
    document.getElementById('responseContainer5').innerHTML = "";
    document.getElementById('responseContainer6').innerHTML = ""; 
    document.getElementById('responseContainer7').value = "";

  }
  function handleSuccessUpdateResponse(response){
    document.getElementById('success_updates').innerHTML =response ; 

  }

function display(){document.getElementById("mainClass").style.display="block";}