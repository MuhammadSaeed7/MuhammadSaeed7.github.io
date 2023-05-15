<!DOCTYPE html>

<head>

  <title>quiz</title>
</head>

<body>
  
 <?php
  
if (!empty($_POST)) {
  $ans1 = $_POST['ans1'];
  $ans2 = $_POST['ans2'];
  $ans3 = $_POST['ans3'];
  $ans4 = $_POST['ans4'];
  $ans5 = $_POST['ans5'];
  $ans6 = $_POST['ans6'];
  $ans7 = $_POST['ans7'];
  $ans8 = $_POST['ans8'];
  $ans9 = $_POST['ans9'];
  $ans10 = $_POST['ans10'];
  $correct = 0;
  
    if ($ans1 == 'd') {
      $correct++;
      
    } else {
    echo"<p> Incorrect </p>";
    }
    if ($ans2 == 'c') {
      $correct++;
     }
      else {
      echo"<p> Incorrect </p>";
    }  
    if ($ans3 == 'a') {
      $correct++;
    } else {
      echo"<p> Incorrect </p>";
    }
    if ($ans4 == 'a') {
      $correct++;
    } else {
      echo"<p>Incorrect</p>";
    }
    if ($ans5 == 'a') {
      $correct++;
    } else {
      echo"<p> Incorrect </p>";
    }
    if ($ans6 == 'd') {
      $correct++;
    } else {
      echo"<p>Incorrect </p>";
    }
    if ($ans7 == 'd') {
      $correct++;
    } else {
      echo"<p>Incorrect</p>";
    }
    if ($ans8 == 'a') {
      $correct++;
    } else {
      echo"<p>Incorrect</p>";
    }
    if ($ans9 == 'c') {
      $correct++;
    } else {
      echo"<p>Incorrect</p>";
    }
    if ($ans10 == 'b') {
      $correct++;
    } else {
      echo"<p>Incorrect</p>";
    }
    echo"<p> You got $correct correct! </p>";
    $grade = ($correct/10) * 100;
    echo("$grade %");

    } else {
      echo"<p> Please Answer the Question</p>";
  }

 ?>

  <form action="quiz.php" method="post">
    <p>1. What technology allows for faster internet speeds, lower latency, and more concurrent users than 4G technology? <br> a) 2G <br> b) 3G <br> c) 4G <br> d) 5G </p>
    <input type="text" name="ans1">
    <p>2. What is the primary use of Artificial Intelligence? <br> a) Gaming <br>
      b) Social Media <br>
      c) Making machines and systems more intelligent <br>
      d) Online shopping <br> </p>
    <input type="text" name="ans2">
    <p>3.What is the purpose of the Internet of Things (IoT)? <br> a) To connect everyday devices and appliances to the internet <br>
      b) To improve video streaming <br>
      c) To provide virtual reality <br>
      d) To improve gaming experience <br></p>
    <input type="text" name="ans3">
    <p>4. Name a few examples of how augmented reality is currently being used. <br>a) Gaming, education, training, and healthcare<br>
      b) Online shopping, Social media, Gaming <br>
      c) Gaming, Virtual Reality, 3D printing<br>
      d) Social media, Online shopping, Virtual reality <br> </p>
    <input type="text" name="ans4">
    <p>5. What is the main advantage of blockchain technology? <br> a) Decentralized and transparent record-keeping <br>
      b) Secure online shopping <br>
      c) Improved Gaming experience <br>
      d) Virtual Reality <br></p>
    <input type="text" name="ans5">
    <p>6. How does quantum computing differ from classical computing? <br> a) Quantum computing uses quantum-mechanical phenomena, such as superposition and entanglement, to perform operations on data. <br>
      b) Quantum computing uses less power than classical computing <br>
      c) Quantum computing is faster than classical computing <br>
      d) All of the above <br></p>
    <input type="text" name="ans6">
    <p>7. In which industry is the use of drones becoming increasingly popular? <br> a) Agriculture <br>
      b) Logistics <br>
      c) Construction <br>
      d) All of the above <br> </p>
    <input type="text" name="ans7">
    <p>8. How does biometrics technology work? <br> a) Using physiological or behavioral characteristics, such as fingerprints, facial recognition, and voice recognition, to identify individuals. <br>
      b) Using internet speeds <br>
      c) Using Virtual Reality <br>
      d) Using 3D printing <br> </p>
    <input type="text" name="ans8">
    <p>9. What is the name of the technology that uses 3D printing to produce physical objects? <br> a) Augmented Reality <br>
      b) Virtual Reality <br>
      c) 3D Printing <br>
      d) Internet of Things <br> </p>
    <input type="text" name="ans9">
    <p>10. What is the name of the technology that uses virtual reality to provide users with a fully immersive experience? <br> a) Augmented Reality <br>
      b) Virtual Reality <br>
      c) 3D Printing <br>
      d) Internet of Things <br> </p>
     <input type="text" name="ans10">


    <br>
    <br>
    <input type="submit">
  </form>

</body>

</html>