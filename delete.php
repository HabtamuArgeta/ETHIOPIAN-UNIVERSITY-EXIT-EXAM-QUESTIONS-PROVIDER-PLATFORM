<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Delete</title>
      <link rel="stylesheet" href="selectSubject.css">
   </head>
   <body>
       <img src="background.jpg" width="100%" height="150" alt="background image">
       <nav id="header">
         <button title="Fields under nutural science" onclick="ShowDepartment(1)" class="btn active" >Nutural science</button>
         <button title="Fields under social science" onclick="ShowDepartment(2)" class="btn">Social science</button>
         <button title="Fields under health science" onclick="ShowDepartment(3)" class="btn">Health science</button>
         <button title="Fields under informatics" onclick="ShowDepartment(4)" class="btn">Informatics</button>
         <button title="Feilds under engineering" onclick="ShowDepartment(5)" class="btn">Engineering</button>
      </nav>
       <main id="mainClass" style="float: right;width:84%;height:388px;display:none;">
         <form style="margin-left:30%;margin-top:8%;" method="POST" action="server.php" target="displayed_exam_container">
            <div id="deleted_message"></div>
            <input type="number" name="question_id" placeholder="Enter question id"><br><br>
            <input style="margin-left:16%" type="submit" name="submit_form_forDelete" value="delete">
            <input style="display:none" type="text" id="Exam_type_controller4delete" name="Exam_type_controller4delete">
            <input style="display:none"  type="text" id="subject_type_controller4delete" name="subject_type_controller4delete">
         </form> 
       
       </main>
      <iframe  name="displayed_exam_container" style="display:none"></iframe>
         <aside id="left_side_bar">
           <div class="natural-science">
               <div class="department">
                  <div class="subject-container">
                     <a class="subject" onclick="showMe(1)">Mathmathics</a>
                      <div class="I-Am-Hidden">
                         <div class="Exit-container"> 
                            <a class="Exit-btn" onclick="showMe(2)">Exit Exam</a>
                            <div class="I-Am-Hidden">
                                <a class= "Exams" onclick="showExam('exit',1)">2015</a>
                            </div>
                         </div>
                         <div calss="Model-container">
                            <a class="Model-btn" onclick="showMe(3)">Model Exam</a>
                            <div class="I-Am-Hidden">
                               <a class= "Exams" onclick="showExam('model',1)">2015</a>
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
                              <a class= "Exams" onclick="showExam('exit',2)">2015</a>
                          </div>
                       </div>
                       <div class="Model-container">
                          <a class="Model-btn" onclick="showMe(6)">Model Exam</a>
                          <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam('model',2)">2015</a>
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
                            <a class= "Exams" onclick="showExam('exit',3)">2015</a>
                          </div>
                       </div>
                       <div class="Model-container">
                          <a class="Model-btn" onclick="showMe(9)">Model Exam</a>
                          <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam('model',3)">2015</a>
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
                             <a class= "Exams" onclick="showExam('exit',4)">2015</a>
                          </div>
                       </div>
                       <div class="Model-container">
                          <a class="Model-btn" onclick="showMe(12)">Model Exam</a>
                          <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam('model',4)">2015</a>
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
                             <a class= "Exams" onclick="showExam('exit',33)">2015</a>
                          </div>
                       </div>
                       <div class="Model-container">
                          <a class="Model-btn" onclick="showMe(15)">Model Exam</a>
                          <div class="I-Am-Hidden">
                             <a class= "Exams" onclick="showExam('model',33)">2015</a>
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
                           <a class= "Exams" onclick="showExam('exit',5)">2015</a>
                        </div>
                     </div>
                     <div class="Model-container">
                        <a class="Model-btn" onclick="showMe(18)">Model Exam</a>
                        <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam('model',5)">2015</a>
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
                           <a class= "Exams" onclick="showExam('exit',6)">2015</a>
                        </div>
                     </div>
                     <div class="Model-container">
                        <a class="Model-btn" onclick="showMe(21)">Model Exam</a>
                        <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam('model',6)">2015</a>
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
                           <a class= "Exams" onclick="showExam('exit',7)">2015</a>
                       </div>
                     </div>
                     <div class="Model-container">
                        <a class="Model-btn" onclick="showMe(24)">Model Exam</a>
                        <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam('model',7)">2015</a>
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
                         <a class= "Exams" onclick="showExam('exit',8)">2015</a>
                      </div>
                   </div>
                   <div class="Model-container">
                      <a class="Model-btn" onclick="showMe(27)">Model Exam</a>
                      <div class="I-Am-Hidden">
                         <a class= "Exams" onclick="showExam('model',8)">2015</a>
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
                       <a class= "Exams" onclick="showExam('exit',9)">2015</a>
                    </div>
                 </div>
                 <div class="Model-container">
                    <a class="Model-btn" onclick="showMe(30)">Model Exam</a>
                    <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam('model',9)">2015</a>
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
                       <a class= "Exams" onclick="showExam('exit',10)">2015</a>
                    </div>
                 </div>
                 <div class="Model-container">
                    <a class="Model-btn" onclick="showMe(33)">Model Exam</a>
                    <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam('model',10)">2015</a>
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
                       <a class= "Exams" onclick="showExam('exit',11)">2015</a>
                    </div>
                 </div>
                 <div class="Model-container">
                    <a class="Model-btn" onclick="showMe(36)">Model Exam</a>
                    <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam('model',11)">2015</a>
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
                            <a class= "Exams" onclick="showExam('exit',12)">2015</a>
                         </div>
                      </div>
                      <div class="Model-container">
                         <a class="Model-btn" onclick="showMe(39)">Model Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam('model',12)">2015</a>
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
                          <a class= "Exams" onclick="showExam('exit',13)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(42)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam('model',13)">2015</a>
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
                          <a class= "Exams" onclick="showExam('exit',14)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(45)">Model Exam</a>
                       <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam('model',14)">2015</a>
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
                        <a class= "Exams" onclick="showExam('exit',15)">2015</a>
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(48)">Model Exam</a>
                     <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam('model',15)">2015</a>
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
                        <a class= "Exams" onclick="showExam('exit',16)">2015</a>
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(51)">Model Exam</a>
                     <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam('model',16)">2015</a>
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
                        <a class= "Exams" onclick="showExam('exit',17)">2015</a>
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(54)">Model Exam</a>
                     <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam('model',17)">2015</a>
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
                            <a class= "Exams" onclick="showExam('exit',18)">2015</a>
                         </div>
                      </div>
                      <div class="Model-container">
                         <a class="Model-btn" onclick="showMe(57)">Model Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam('model',18)">2015</a>
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
                         <a class= "Exams" onclick="showExam('exit',19)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(60)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam('model',19)">2015</a>
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
                         <a class= "Exams" onclick="showExam('exit',20)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(63)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam('model',20)">2015</a>
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
                          <a class= "Exams" onclick="showExam('exit',21)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(66)">Model Exam</a>
                       <div class="I-Am-Hidden">
                         <a class= "Exams" onclick="showExam('model',21)">2015</a>
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
                         <a class= "Exams" onclick="showExam('exit',22)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(69)">Model Exam</a>
                       <div class="I-Am-Hidden">
                         <a class= "Exams" onclick="showExam('model',22)">2015</a>
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
                        <a class= "Exams" onclick="showExam('exit',23)">2015</a>
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(72)">Model Exam</a>
                     <div class="I-Am-Hidden">
                       <a class= "Exams" onclick="showExam('model',23)">2015</a>
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
                        <a class= "Exams" onclick="showExam('exit',24)">2015</a>
                     </div>
                  </div>
                  <div class="Model-container">
                     <a class="Model-btn" onclick="showMe(75)">Model Exam</a>
                     <div class="I-Am-Hidden">
                        <a class= "Exams" onclick="showExam('model',24)">2015</a>
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
                           <a class= "Exams" onclick="showExam('exit',25)">2015</a>
                         </div>
                      </div>
                      <div class="Model-container">
                         <a class="Model-btn" onclick="showMe(78)">Model Exam</a>
                         <div class="I-Am-Hidden">
                            <a class= "Exams" onclick="showExam('model',25)">2015</a>
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
                          <a class= "Exams" onclick="showExam('exit',26)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(81)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam('model',26)">2015</a>
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
                          <a class= "Exams" onclick="showExam('exit',27)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(84)">Model Exam</a>
                       <div class="I-Am-Hidden">
                         <a class= "Exams" onclick="showExam('model',27)">2015</a>
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
                           <a class= "Exams" onclick="showExam('exit',28)">2015</a>
                         </div>
                      </div>
                      <div class="Model-container">
                         <a class="Model-btn" onclick="showMe(87)">Model Exam</a>
                         <div class="I-Am-Hidden">
                           <a class= "Exams" onclick="showExam('model',28)">2015</a>
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
                         <a class= "Exams" onclick="showExam('exit',29)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(90)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam('model',29)">2015</a>
                       </div>
                    </div>
                 </div>
             </div>
             <div class="subject-container">
                 <a class="subject" onclick="showMe(91)">Chemical Engineering</a>
                 <div class="I-Am-Hidden">
                    <div class="Exit-container"> 
                       <a class="Exit-btn" onclick="showMe(92)">Exit Exam</a>
                       <div class="I-Am-Hidden">
                         <a class= "Exams" onclick="showExam('exit',30)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(93)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam('model',30)">2015</a>
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
                          <a class= "Exams" onclick="showExam('exit',31)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(96)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam('model',31)">2015</a>
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
                          <a class= "Exams" onclick="showExam('exit',32)">2015</a>
                       </div>
                    </div>
                    <div class="Model-container">
                       <a class="Model-btn" onclick="showMe(99)">Model Exam</a>
                       <div class="I-Am-Hidden">
                          <a class= "Exams" onclick="showExam('model',32)">2015</a>
                       </div>
                    </div>
                 </div>
              </div>
            </div>
          </div>
        </aside>

        <script src="selectSubjects.js"></script>
        <script>
            function showExam(x,y){
                document.getElementById("Exam_type_controller4delete").value=x;
                document.getElementById("subject_type_controller4delete").value=y;
                document.getElementById("mainClass").style.display="block";
            }
            function handelresponse(deleted_response){
               document.getElementById('deleted_message').innerHTML=deleted_response;
            }
            function handelErrorresponse(deleted_response){
               document.getElementById('deleted_message').innerHTML=deleted_response;
               document.getElementById('deleted_message').style.color="red";
 
            }
        </script>
        
   </body>
</html>