<?php

  require("dbconnection.php");

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
      
      $errors = validate_report($report);
      if(!empty($errors)) {
        return $errors;
      }
      
      $sql = "INSERT INTO Foods ";
      $sql .= "(FoodName, GramsPerServing, CaloriesPerGram) ";
      $sql .= "VALUES (";
      $sql .= "'" . db_escape($db, $report['TripReportName']) . "',";
      $sql .= "'" . db_escape($db, $report['TripReportMileage']) . "',";
      $sql .= "'" . db_escape($db, $report['TripReportDate']) . "',";
      $sql .= "'" . db_escape($db, $report['TripReportLocation']) . "',";
      $sql .= "'" . db_escape($db, $report['TripReportAuthorUserId']) . "',";
      $sql .= "'" . db_escape($db, $report['TripReportReport']) . "'";
      $sql .= ")";
      $result = mysqli_query($db, $sql);
      
      if($result) {
          return true;
      } else {
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
      }
  }

  // send user to appropriate page
  header("Location: ../index.php");
?>