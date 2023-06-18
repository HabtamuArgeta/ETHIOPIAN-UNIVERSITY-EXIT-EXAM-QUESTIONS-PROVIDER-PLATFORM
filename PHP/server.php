<?php
$question=$option_1=$option_2=$option_3=$option_4=$answer= $Exam_year=$Exit_model=$subject_id = "";
$dbName = "eueep";
$hostName = "localhost";
$userName="root";
$password="";
try {
    $conn = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//if ($_SERVER["REQUEST_METHOD"] == "POST"){
  // php for upload
 if (isset($_POST['submit_me'])) {
  $question = $_POST['question'];
  $option_1 = $_POST['firstOption'];
  $option_2 = $_POST['secondOption'];
  $option_3 = $_POST['thirdOption'];
  $option_4 = $_POST['fourthOption'];
  $answer   = $_POST['answer'];
  $subject_id = $_POST['controll_subject_type'];
  $Exit_model = $_POST['controll_exam_type'];
  $Exam_year = 2015;

    if($Exit_model == "exit"){
      $query = "INSERT INTO exit_exam(QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,ANSWER,EXAM_YEAR,SUBJECT_ID) VALUES (:QUESTION, :OPTION_1, :OPTION_2, :OPTION_3, :OPTION_4, :ANSWER, :EXAM_YEAR, :SUBJECT_ID)";
      $stmt = $conn->prepare($query);
      $stmt->execute(array(':QUESTION' => $question, ':OPTION_1' => $option_1, ':OPTION_2' => $option_2, ':OPTION_3' => $option_3, ':OPTION_4' => $option_4, ':ANSWER' => $answer, ':EXAM_YEAR' => $Exam_year, ':SUBJECT_ID' => $subject_id));
        }
    if($Exit_model == "model"){
      $query = "INSERT INTO model_exam(QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,ANSWER,EXAM_YEAR,SUBJECT_ID) VALUES (:QUESTION, :OPTION_1, :OPTION_2, :OPTION_3, :OPTION_4, :ANSWER, :EXAM_YEAR, :SUBJECT_ID)";
      $stmt = $conn->prepare($query);
      $stmt->execute(array(':QUESTION' => $question, ':OPTION_1' => $option_1, ':OPTION_2' => $option_2, ':OPTION_3' => $option_3, ':OPTION_4' => $option_4, ':ANSWER' => $answer, ':EXAM_YEAR' => $Exam_year, ':SUBJECT_ID' => $subject_id));
      }
  }

//php for take exam
  $Exit_model_for_takeExam=$subject_id_for_takeExam="";
  if (isset($_POST['submit_hidden_form'])) {
    $Exit_model_for_takeExam = $_POST["Exam_type_controller4takeExam"];
    $subject_id_for_takeExam = $_POST["subject_type_controller4takeExam"];
    if( $Exit_model_for_takeExam == "exit"){
      $Querry="SELECT QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,ANSWER FROM exit_exam WHERE  SUBJECT_ID=$subject_id_for_takeExam";
      $stmt=$conn->prepare($Querry);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $j=1;
      if(count($result)>0){
        echo "<b>2015 </b>".strtoupper( "<b>$Exit_model_for_takeExam</b>"). " <b>EXAM QUESTIONS</b>";
      }else{
        echo "<b>QUESTION IS NOT UPLOADED YET </b>";
      }
      foreach($result as $row){
          $col1=$row["QUESTION"];
          $col2=$row["OPTION_1"];
          $col3=$row["OPTION_2"];
          $col4=$row["OPTION_3"];
          $col5=$row["OPTION_4"];
          $col6=$row["ANSWER"];

          echo "<div><b>$j</b> $col1</div>";
          echo "A,$col2 <br>";
          echo "B,$col3 <br>";
          echo "C,$col4 <br>";
          echo "D,$col5 <br>";
          //echo "$col6 <br>";
          echo "<br>";
          $j=$j+1;
      }

    }
    if( $Exit_model_for_takeExam == "model"){
      $Querry="SELECT QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,ANSWER FROM model_exam WHERE  SUBJECT_ID=$subject_id_for_takeExam";
      $stmt=$conn->prepare($Querry);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $i=1;
      if(count($result)>0){
        echo "<b>2015 </b>".strtoupper( "<b>$Exit_model_for_takeExam</b>"). " <b>EXAM QUESTIONS</b>";
      }else{
        echo "<b>QUESTION IS NOT UPLOADED YET </b>";
      }
      foreach($result as $row){
          $col1=$row["QUESTION"];
          $col2=$row["OPTION_1"];
          $col3=$row["OPTION_2"];
          $col4=$row["OPTION_3"];
          $col5=$row["OPTION_4"];
          $col6=$row["ANSWER"];

          echo "<div> <b>$i</b> $col1</div>";
          echo "A,$col2 <br>";
          echo "B,$col3 <br>";
          echo "C,$col4 <br>";
          echo "D,$col5 <br>";
         // echo "$col6 <br>";
          echo "<br>";
          $i=$i+1;
      }
    }  
}


// php for display
$Exit_model_for_display=$subject_id_for_display="";
  if (isset($_POST['submit_hidden_form_forDisplay'])) {
    $Exit_model_for_display = $_POST["Exam_type_controller4display"];
    $subject_id_for_display = $_POST["subject_type_controller4display"];
    if( $Exit_model_for_display == "exit"){
      $Querry="SELECT EXIT_ID,QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,ANSWER FROM exit_exam WHERE  SUBJECT_ID=$subject_id_for_display";
      $stmt=$conn->prepare($Querry);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      if(count($result)>0){
        echo "<b>2015 </b>".strtoupper( "<b>$Exit_model_for_display</b>"). " <b>EXAM QUESTIONS</b>";
      }else{
        echo "<b>QUESTION IS NOT UPLOADED YET </b>";
      }
      foreach($result as $row){
          $col1=$row["EXIT_ID"];
          $col2=$row["QUESTION"];
          $col3=$row["OPTION_1"];
          $col4=$row["OPTION_2"];
          $col5=$row["OPTION_3"];
          $col6=$row["OPTION_4"];
          $col7=$row["ANSWER"];

          echo "<div> <b>$col1</b> $col2</div>";
          echo "A,$col3 <br>";
          echo "B,$col4 <br>";
          echo "C,$col5 <br>";
          echo "D,$col6 <br>";
          //echo "$col6 <br>";
          echo "<br>";
      }

    }
    if( $Exit_model_for_display == "model"){
      $Querry="SELECT MODEL_ID, QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,ANSWER FROM model_exam WHERE  SUBJECT_ID=$subject_id_for_display";
      $stmt=$conn->prepare($Querry);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      if(count($result)>0){
        echo "<b>2015 </b>".strtoupper( "<b>$Exit_model_for_display</b>"). " <b>EXAM QUESTIONS</b>";
      }else{
        echo "<b>QUESTION IS NOT UPLOADED YET </b>";
      }
      foreach($result as $row){
          $col1=$row["MODEL_ID"];
          $col2=$row["QUESTION"];
          $col3=$row["OPTION_1"];
          $col4=$row["OPTION_2"];
          $col5=$row["OPTION_3"];
          $col6=$row["OPTION_4"];
          $col7=$row["ANSWER"];

          echo "<div><b>$col1</b> $col2</div>";
          echo "A,$col3 <br>";
          echo "B,$col4 <br>";
          echo "C,$col5 <br>";
          echo "D,$col6 <br>";
         // echo "$col6 <br>";
          echo "<br>";
      }
    }  
}

// php for delete
$Exit_model_for_delete=$question_id_4delete=$subject_id_for_delete= "";
if(isset($_POST["DeleteData"])){
  $Exit_model_for_delete=$_POST['controll_exam_type4Delete'];
  $question_id_4delete=$_POST['Question_id_4Delete'];
  $subject_id_for_delete=$_POST["controll_subject_type4Delete"];

  if($Exit_model_for_delete == "exit"){
    $querry="DELETE FROM exit_exam WHERE EXIT_ID=:EXIT_ID AND SUBJECT_ID=:SUBJECT_ID";
    $stmt=$conn->prepare($querry);
    $stmt->bindParam(':EXIT_ID',$question_id_4delete);
    $stmt->bindParam(':SUBJECT_ID',$subject_id_for_delete);
    $stmt->execute();
    if($stmt->rowCount()>0){
      echo '<script>window.parent.handelresponseInDelete("one row is affected");</script>';
    }
  }

  if($Exit_model_for_delete == "model"){
    $querry="DELETE FROM model_exam WHERE MODEL_ID=:MODEL_ID AND SUBJECT_ID=:SUBJECT_ID";
    $stmt=$conn->prepare($querry);
    $stmt->bindParam(':MODEL_ID',$question_id_4delete);
    $stmt->bindParam(':SUBJECT_ID',$subject_id_for_delete);
    $stmt->execute();
    if($stmt->rowCount()>0){
      echo '<script>window.parent.handelresponseInDelete("one row is affected");</script>';
    }
  }
}
 // php for search form in Update
 $Exit_model_inInternal=$question_id_inInternal=$subject_id_inInternal="";
 if (isset($_POST['searched_submit'])) {
  $Exit_model_inInternal = $_POST["Exam_type_inInternal"];
  $question_id_inInternal = $_POST["searched_question_id"];
  $subject_id_inInternal=$_POST['subject_type_inInternal'];
  if( $Exit_model_inInternal == "exit"){
    $Querry="SELECT QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,ANSWER FROM exit_exam WHERE  EXIT_ID=$question_id_inInternal AND SUBJECT_ID=$subject_id_inInternal";
    $stmt=$conn->prepare($Querry);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($result)==0){
      echo '<script>window.parent.handleErrorResponse("No row with question_id='.$question_id_inInternal.'");</script>';
    }else{
    foreach($result as $row){
        $col1=$row["QUESTION"];
        $col2=$row["OPTION_1"];
        $col3=$row["OPTION_2"];
        $col4=$row["OPTION_3"];
        $col5=$row["OPTION_4"];
        $col6=$row["ANSWER"];
        
      }
    echo '<script>window.parent.handleResponse("'.$col1.'","'.$col2.'","'.$col3.'","'.$col4.'","'.$col5.'","'.$col6.'","'.$question_id_inInternal.'");</script>';
    }
  }
  if( $Exit_model_inInternal == "model"){
    $Querry="SELECT QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,ANSWER FROM model_exam WHERE  MODEL_ID=$question_id_inInternal AND SUBJECT_ID=$subject_id_inInternal";
    $stmt=$conn->prepare($Querry);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($result)>0){
      echo '<script>window.parent.handleErrorResponse("No row with question_id='.$question_id_inInternal.'");</script>';
    }else{
      foreach($result as $row){
        $col1=$row["QUESTION"];
        $col2=$row["OPTION_1"];
        $col3=$row["OPTION_2"];
        $col4=$row["OPTION_3"];
        $col5=$row["OPTION_4"];
        $col6=$row["ANSWER"];
    }
    echo '<script>window.parent.handleResponse("'.$col1.'","'.$col2.'","'.$col3.'","'.$col4.'","'.$col5.'","'.$col6.'","'.$question_id_inInternal.'");</script>';
  }
  } 
}
// php to make updates
$Exit_model_for_update=$question_id_4update=$subject_id_for_update= "";
$col1=$col2=$col3=$col4=$col5=$col6="";
if(isset($_POST['submit_updates'])){
  $Exit_model_for_update=$_POST['controll_exam_type4update'];
  $subject_id_for_update=$_POST['controll_subject_type4update'];
  $question_id_4update=$_POST["Question_id_4update"];
  $col1=$_POST['question'];
  $col2=$_POST['firstOption'];
  $col3=$_POST['secondOption'];
  $col4=$_POST['thirdOption'];
  $col5=$_POST['fourthOption'];
  $col6=$_POST['answer'];

  if($Exit_model_for_update=="exit"){
    $querry="UPDATE exit_exam SET QUESTION=:QUESTION,OPTION_1=:OPTION_1,OPTION_2=:OPTION_2,OPTION_3=:OPTION_3,OPTION_4=:OPTION_4,ANSWER=:ANSWER WHERE EXIT_ID=:EXIT_ID AND SUBJECT_ID=:SUBJECT_ID";
    $stmt=$conn->prepare($querry);
    $stmt->execute(array(':QUESTION'=>$col1,':OPTION_1'=>$col2,':OPTION_2'=>$col3,':OPTION_3'=>$col4,':OPTION_4'=>$col5,':ANSWER'=>$col6,':EXIT_ID'=>$question_id_4update,':SUBJECT_ID'=>$subject_id_for_update));
    if($stmt->rowCount()>0){
    echo '<script>window.parent.handleSuccessUpdateResponse("Data updated successfully");</script>';
    }else{
      echo '<script>window.parent.handleSuccessUpdateResponse("Errror while updating");</script>';
    }
  }
  if($Exit_model_for_update=="model"){
    $querry="UPDATE model_exam SET QUESTION=:QUESTION,OPTION_1=:OPTION_1,OPTION_2=:OPTION_2,OPTION_3=:OPTION_3,OPTION_4=:OPTION_4,ANSWER=:ANSWER WHERE MODEL_ID=:MODEL_ID AND SUBJECT_ID=:SUBJECT_ID";
    $stmt=$conn->prepare($querry);
    $stmt->execute(array(':QUESTION'=>$col1,':OPTION_1'=>$col2,':OPTION_2'=>$col3,':OPTION_3'=>$col4,':OPTION_4'=>$col5,':ANSWER'=>$col6,':MODEL_ID'=>$question_id_4update,':SUBJECT_ID'=>$subject_id_for_update));
    if($stmt->rowCount()>0){
      echo '<script>window.parent.handleSuccessUpdateResponse("Data updated successfully");</script>';
    }else{
      echo '<script>window.parent.handleSuccessUpdateResponse("Errror while updating");</script>';
    }
  }
}




}catch (PDOException $e) {
  echo "Error while connecting to database: " . $e->getMessage();
}
?>