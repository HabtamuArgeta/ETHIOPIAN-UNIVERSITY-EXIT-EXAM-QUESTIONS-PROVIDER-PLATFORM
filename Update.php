<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Update</title>
      <link rel="stylesheet" href="selectSubject.css">
      <link rel="stylesheet" href="ExitAndModel.css">
   </head>
   <body>
       <h1 style="position: absolute; color: green;">Please select your department</h1>
       <img src="background.jpg" width="100%" height="150" alt="background image">
       <nav id="header">
         <button title="Fields under nutural science" onclick="ShowDepartment(1)" class="btn active" >Nutural science</button>
         <button title="Fields under social science" onclick="ShowDepartment(2)" class="btn">Social science</button>
         <button title="Fields under health science" onclick="ShowDepartment(3)" class="btn">Health science</button>
         <button title="Fields under informatics" onclick="ShowDepartment(4)" class="btn">Informatics</button>
         <button title="Feilds under engineering" onclick="ShowDepartment(5)" class="btn">Engineering</button>
      </nav>
      <main id="mainClass">  
         <fieldset >
            <legend id="Legend"></legend>
            <form method="POST" action="server.php" target="display_to_me">
                <div style="float:right;">
                   <input  type="number" name="searched_question_id" placeholder="Enter Question id">
                   <input  type="submit" value="search" name="searched_submit">
                   <div id="error" style="color:red"></div>
                </div>
                <input style="display:none;" type="text" id="Exam_type_inInternal" name="Exam_type_inInternal">
                <input style="display:none;" type="text" id="subject_type_inInternal" name="subject_type_inInternal">
            </form>

            <form style="display:none;" id="myForm" method="POST" action="server.php" target="hide_the_response_from_php" >
             <br><br>
               QUESTION:<br>
               <textarea id="responseContainer1" class="Question clear" name="question" required></textarea>
               <br> FIRST OPTION:<br>
               <textarea  id="responseContainer2"class="options clear"  name="firstOption"  required></textarea>
               <br>SECOND OPTION:<br>
               <textarea  id="responseContainer3"class="options clear"  name="secondOption" required></textarea>
               <br>THIRD OPTION:<br>
               <textarea  id="responseContainer4"class="options clear"  name="thirdOption" required></textarea>
               <br>FOURTH OPTION:<br>
               <textarea  id="responseContainer5"class="options clear"  name="fourthOption"required></textarea>
               <br>ANSWER:<br>
               <textarea  id="responseContainer6"class="ans clear"  name="answer"          required></textarea><br>
               <input style="display:none;" type="text" id="responseContainer7" name="Question_id_4update">
               <input style="display: none;" type="text" name="controll_exam_type4update" id="controll_exam_type4update">
               <input  style="display: none;" type="text" name="controll_subject_type4update" id="controll_subject_type4update">
                <div id="success_updates"></div>
               <input style="margin-left:50%;" type="submit" value="Update" name="submit_updates">
            </form>
         </fieldset>
      </main>
      <!-- This is used to hide the response from php when the form is submitted ,this 
      incase make the page not to refrash after submitting the form !!!-->
      <iframe id="myFrame" name="hide_the_response_from_php" style="display: none;"></iframe>
       <iframe name="display_to_me" style="display: none;"></iframe>
         <aside id="left_side_bar">
           <div class="natural-science">
               <div class="department">
                  <div class="subject-container">
                     <a class="subject" onclick="showMe(1)">Mathmathics</a>
                      <div class="I-Am-Hidden">
                         <div class="Exit-container"> 
                            <a class="Exit-btn" onclick="showMe(2)">Exit Exam</a>
                            <div class="I-Am-Hidden">
                                <a class= "Exams" onclick="showExam(1,'Mathmathics',1)" >2015</a>
                            </div>
                         </div>
                         <div calss="Model-container">
                            <a class="Model-btn" onclick="showMe(3)">Model Exam</a>
                            <div class="I-Am-Hidden">
                                <a class= "Exams" onclick="showExam(2,'Mathmathics',1)" >2015</a>
                            </div>
                         </div>
                      </div>
                  </div>
                  <div class="subject-container">
                    <a  class="subject" onclick="showMe(4)">Physics</a>
                    <div class="I-Am-Hidden">
                       <div class="Exit-container"> 
                          <a class="Exit-btn" onclick="showMe(5)">Exit Exam</a>
                          <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam(3,'Physics',2)" >2015</a>
                          </div>
                       </div>
                       <div class="Model-container">
                          <a class="Model-btn" onclick="showMe(6)">Model Exam</a>
                          <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam(4,'Physics',2)" >2015</a>
                          </div>
                       </div>
                    </div>
                </div>
                <div class="subject-container">
                    <a class="subject" onclick="showMe(7)">Chemistry</a>
                    <div class="I-Am-Hidden">
                       <div class="Exit-container"> 
                          <a class="Exit-btn" onclick="showMe(8)">Exit Exam</a>
                          <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam(5,'Chemistry',3)" >2015</a>
                          </div>
                       </div>
                       <div class="Model-container">
                          <a class="Model-btn" onclick="showMe(9)">Model Exam</a>
                          <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam(6,'Chemistry',3)" >2015</a>                      
                         </div>
                       </div>
                    </div>
                </div>
                <div class="subject-container">
                    <a class="subject" onclick="showMe(10)">Biology</a>
                    <div class="I-Am-Hidden">
                       <div class="Exit-container"> 
                          <a class="Exit-btn" onclick="showMe(11)">Exit Exam</a>
                          <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam(7,'Biology',4)" >2015</a>
                          </div>
                       </div>
                       <div class="Model-container">
                          <a class="Model-btn" onclick="showMe(12)">Model Exam</a>
                          <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam(8,'Biology',4)" >2015</a>
                          </div>
                       </div>
                    </div>
                </div>
                <div class="subject-container">
                    <a class="subject" onclick="showMe(13)">Stastics</a>
                    <div class="I-Am-Hidden">
                       <div class="Exit-container"> 
                          <a class="Exit-btn" onclick="showMe(14)">Exit Exam</a>
                          <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam(9,'Stastics',33)" >2015</a>
                          </div>
                       </div>
                       <div class="Model-container">
                          <a class="Model-btn" onclick="showMe(15)">Model Exam</a>
                          <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam(10,'Stastics',33)" >2015</a>
                          </div>
                       </div>
                    </div>
                </div>
                <div class="subject-container">
                  <a class="subject" onclick="showMe(16)">Geology</a>
                  <div class="I-Am-Hidden">
                     <div class="Exit-container"> 
                        <a class="Exit-btn" onclick="showMe(17)">Exit Exam</a>
                        <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(11,'Geology',5)" >2015</a>
                        </div>
                     </div>
                     <div class="Model-container">
                        <a class="Model-btn" onclick="showMe(18)">Model Exam</a>
                        <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(12,'Geology',5)" >2015</a>
                        </div>
                     </div>
                  </div>
              </div>
              <div class="subject-container">
                  <a class="subject" onclick="showMe(19)">Sport Science</a>
                  <div class="I-Am-Hidden">
                     <div class="Exit-container"> 
                        <a class="Exit-btn" onclick="showMe(20)">Exit Exam</a>
                        <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(13,'Sport Science',6)" >2015</a>
                        </div>
                     </div>
                     <div class="Model-container">
                        <a class="Model-btn" onclick="showMe(21)">Model Exam</a>
                        <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(14,'Sport Science',6)" >2015</a>
                        </div>
                     </div>
                  </div>
              </div>
              <div class="subject-container">
                  <a class="subject" onclick="showMe(22)">Mathmathics teacher Edu</a>
                  <div class="I-Am-Hidden">
                     <div class="Exit-container"> 
                        <a class="Exit-btn" onclick="showMe(23)">Exit Exam</a>
                        <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(15,'Mathmathics teacher Edu',7)" >2015</a>
                       </div>
                     </div>
                     <div class="Model-container">
                        <a class="Model-btn" onclick="showMe(24)">Model Exam</a>
                        <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(16,'Mathmathics teacher Edu',7)" >2015</a>
                        </div>
                     </div>
                  </div>
              </div>
              <div class="subject-container">
                <a class="subject" onclick="showMe(25)">Physics teacher Edu</a>
                <div class="I-Am-Hidden">
                   <div class="Exit-container"> 
                      <a class="Exit-btn" onclick="showMe(26)">Exit Exam</a>
                      <div class="I-Am-Hidden">
                         <a class= "Exams" onclick="showExam(17,'Physics teacher Edu',8)" >2015</a>
                      </div>
                   </div>
                   <div class="Model-container">
                      <a class="Model-btn" onclick="showMe(27)">Model Exam</a>
                      <div class="I-Am-Hidden">
                         <a class= "Exams" onclick="showExam(18,'Physics teacher Edu',8)" >2015</a>
                     </div>
                   </div>
                </div>
            </div>
            <div class="subject-container">
              <a class="subject" onclick="showMe(28)">Chemistry teacher Edu</a>
              <div class="I-Am-Hidden">
                 <div class="Exit-container"> 
                    <a class="Exit-btn" onclick="showMe(29)">Exit Exam</a>
                    <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam(19,'Chemistry teacher Edu',9)" >2015</a>
                    </div>
                 </div>
                 <div class="Model-container">
                    <a class="Model-btn" onclick="showMe(30)">Model Exam</a>
                    <div class="I-Am-Hidden">
                      <a class= "Exams" onclick="showExam(20,'Chemistry teacher Edu',9)" >2015</a>
                    </div>
                 </div>
               </div>
            </div>
            <div class="subject-container">
              <a class="subject" onclick="showMe(31)">Biology teacher Edu</a>
              <div class="I-Am-Hidden">
                 <div class="Exit-container"> 
                    <a class="Exit-btn" onclick="showMe(32)">Exit Exam</a>
                    <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam(21,'Biology teacher Edu',10)" >2015</a>
                    </div>
                 </div>
                 <div class="Model-container">
                    <a class="Model-btn" onclick="showMe(33)">Model Exam</a>
                    <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam(22,'Biology teacher Edu',10)" >2015</a>
                    </div>
                 </div>
              </div>
            </div>
            <div class="subject-container">
              <a class="subject" onclick="showMe(34)">Physical Education</a>
              <div class="I-Am-Hidden">
                 <div class="Exit-container"> 
                    <a class="Exit-btn" onclick="showMe(35)">Exit Exam</a>
                    <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam(23,'Physical Education',11)" >2015</a>
                    </div>
                 </div>
                 <div class="Model-container">
                    <a class="Model-btn" onclick="showMe(36)">Model Exam</a>
                    <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam(24,'Physical Education',11)" >2015</a>                      </div>
                   </div>
                 </div>
               </div>
             </div>
           </div> 

           <div class="Social-science">
            <div class="department">
               <div class="subject-container">
                   <a class="subject" onclick="showMe(37)">Law</a>
                   <div class="I-Am-Hidden">
                      <div class="Exit-container"> 
                         <a class="Exit-btn" onclick="showMe(38)">Exit Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam(25,'Law',12)" >2015</a>
                         </div>
                      </div>
                      <div class="Model-container">
                         <a class="Model-btn" onclick="showMe(39)">Model Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam(26,'Law',12)" >2015</a>
                        </div>
                      </div>
                   </div>
               </div>
               <div class="subject-container">
                 <a class="subject" onclick="showMe(40)">Polotical Science</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(41)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(27,'Polotical Science',13)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(42)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(28,'Polotical Science',13)" >2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
                 <a class="subject" onclick="showMe(43)">PADM</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(44)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(29,'PADM',14)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(45)">Model Exam</a>
                       <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(30,'PADM',14)" >2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
               <a class="subject" onclick="showMe(46)">Economics</a>
               <div class="I-Am-Hidden">
                  <div class="Exit-container"> 
                     <a class="Exit-btn" onclick="showMe(47)">Exit Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(31,'Economics',15)" >2015</a>
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(48)">Model Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(32,'Economics',15)" >2015</a>
                     </div>
                  </div>
               </div>
           </div>
           <div class="subject-container">
               <a class="subject" onclick="showMe(49)">Acounting</a>
               <div class="I-Am-Hidden">
                  <div class="Exit-container"> 
                     <a class="Exit-btn" onclick="showMe(50)">Exit Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(33,'Acounting',16)" >2015</a>
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(51)">Model Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(34,'Acounting',16)" >2015</a>
                     </div>
                  </div>
               </div>
           </div>
           <div class="subject-container">
               <a class="subject" onclick="showMe(52)">Business</a>
               <div class="I-Am-Hidden">
                  <div class="Exit-container"> 
                     <a class="Exit-btn" onclick="showMe(53)">Exit Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(35,'Business',17)" >2015</a> 
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(54)">Model Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(36,'Business',17)" >2015</a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
         </div> 

         <div class="Health-science">
            <div class="department">
               <div class="subject-container">
                  <a class="subject" onclick="showMe(55)">Medicine</a>
                   <div class="I-Am-Hidden">
                      <div class="Exit-container"> 
                         <a class="Exit-btn" onclick="showMe(56)">Exit Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam(37,'Medicine',18)" >2015</a>
                         </div>
                      </div>
                      <div class="Model-container">
                         <a class="Model-btn" onclick="showMe(57)">Model Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam(38,'Medicine',18)" >2015</a>
                         </div>
                      </div>
                   </div>
               </div>
               <div class="subject-container">
                 <a  class="subject" onclick="showMe(58)">Dental Medicine</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(59)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(39,'Dental Medicine',19)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(60)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(40,'Dental Medicine',19)" >2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
                 <a class="subject" onclick="showMe(61)">Pharmacy</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(62)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(41,'Pharmacy',20)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(63)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(42,'Pharmacy',20)" >2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
                 <a class="subject" onclick="showMe(64)">Radiology</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(65)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(43,'Radiology',21)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(66)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(44,'Radiology',21)" >2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
                 <a class="subject" onclick="showMe(67)">Anesthesia</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(68)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(45,'Anesthesia',22)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(69)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(46,'Anesthesia',22)" >2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
               <a class="subject" onclick="showMe(70)">Nursing</a>
               <div class="I-Am-Hidden">
                  <div class="Exit-container"> 
                     <a class="Exit-btn" onclick="showMe(71)">Exit Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(47,'Nursing',23)" >2015</a>
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(72)">Model Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(48,'Nursing',23)" >2015</a>
                      </div>
                  </div>
               </div>
           </div>
           <div class="subject-container">
               <a class="subject" onclick="showMe(73)">Midwifer</a>
               <div class="I-Am-Hidden">
                  <div class="Exit-container"> 
                     <a class="Exit-btn" onclick="showMe(74)">Exit Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(49,'Midwifer',24)" >2015</a>
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(75)">Model Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam(50,'Midwifer',24)" >2015</a>
                     </div>
                    </div>
                 </div>
              </div>
            </div>
          </div>
          <div class="Informatics">
            <div class="department">
               <div class="subject-container">
                  <a class="subject" onclick="showMe(76)">Computer Science</a>
                   <div class="I-Am-Hidden">
                      <div class="Exit-container"> 
                         <a class="Exit-btn" onclick="showMe(77)">Exit Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam(51,'Computer Science',25)" >2015</a>
                         </div>
                      </div>
                      <div class="Model-container">
                         <a class="Model-btn" onclick="showMe(78)">Model Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam(52,'Computer Science',25)" >2015</a>
                          </div>
                      </div>
                   </div>
               </div>
               <div class="subject-container">
                 <a  class="subject" onclick="showMe(79)">Information system</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(80)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(53,'Information system',26)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(81)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(54,'Information system',26)" >2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
                 <a class="subject" onclick="showMe(82)">Information Techenology</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(83)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(55,'Information Techenology',27)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(84)">Model Exam</a>
                       <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(56,'Information Techenology',27)" >2015</a>
                       </div>
                    </div>
                 </div>
              </div>
            </div>
         </div>
         <div class="Engineering">
            <div class="department">
               <div class="subject-container">
                  <a class="subject" onclick="showMe(85)">Software Engineering</a>
                   <div class="I-Am-Hidden">
                      <div class="Exit-container"> 
                         <a class="Exit-btn" onclick="showMe(86)">Exit Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam(57,'Software Engineering',28)" >2015</a>
                         </div>
                      </div>
                      <div class="Model-container">
                         <a class="Model-btn" onclick="showMe(87)">Model Exam</a>
                         <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam(58,'Software Engineering',28)" >2015</a>
                         </div>
                      </div>
                   </div>
               </div>
               <div class="subject-container">
                 <a  class="subject" onclick="showMe(88)">Biomedical Engineering</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(89)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(59,'Biomedical Engineering',29)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(90)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(60,'Biomedical Engineering',29)" >2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
                 <a class="subject" onclick="showMe(91)">Chemical Engineering</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(92,'Chemical Engineering',30)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(61)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(93)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(62,'Chemical Engineering',30)" >2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
                 <a class="subject" onclick="showMe(94)">Mechanical Engineering</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(95)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam(63,'Mechanical Engineering',31)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(96)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(64,'Mechanical Engineering',31)" >2015</a>
                      </div>
                    </div>
                 </div>
             </div>
             <div  class="subject-container">
                 <a class="subject" onclick="showMe(97)">Civil Engineering</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(98)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam(65,'Civil Engineering',32)" >2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(99)">Model Exam</a>
                       <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam(66,'Civil Engineering',32)" >2015</a>
                       </div>
                    </div>
                 </div>
              </div>
            </div>
          </div>
        </aside>

        <script src="selectSubjects.js"></script>
        <script src="formForUpdate.js"></script>
        
   </body>
</html>