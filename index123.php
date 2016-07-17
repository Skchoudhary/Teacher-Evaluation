<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="vieport" content="width=device-width , initial-scale=1">
    <title>Teacher Evaluation</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">
    <script type="text/javascript">
    function al()
    {
        var valBranch=document.getElementById("branch");
        var selectedValBranch=valBranch.options[valBranch.selectedIndex];
        //alert(" "+selectedValBranch.value)
        var valSem=document.getElementById("sem");
        var selectedValSem=valSem.options[valSem.selectedIndex];

        if(selectedValSem.value =="6" && selectedValBranch.value == "CSE")
        {
          localStorage.setItem(sem,selectedValSem.value);
          location.href = "demo.php";
        }
    };
    </script>
</head>
<body>
 <div class="container jumbotron">

  <div class="row text-center">
   <div class="Branch ">
    <form action="demo.php" method="post">
    <select class="col-md-12 center Branch" id="branch">
    <option value="null">Select the branch</option>
        <option value="CSE">CSE -- only this is working</option>
        <option value="ME">ME</option>
        <option value="CE">CE</option>
        <option value="ECE">ECE</option>
        <option value="IT">IT</option>
    </select>
   </div>
   <div class="Sem">
   <select class="col-md-12 center Sem" id="sem" name="sem">
   <option value="null"> Select the Semester</option>
       <option value="Sem 1">Sem 1 -- only this is working</option>
       <option value="Sem 2">Sem 2</option>
       <option value="Sem 3">Sem 3</option>
       <option value="Sem 4">Sem 4</option>
       <option value="Sem 5">Sem 5</option>
       <option value="6">Sem 6</option>
       <option value="Sem 7">Sem 7</option>
       <option value="Sem 8">Sem 8</option>
   </select>
   </div>
   <button type="submit" class="btn btn-primary go" onclick="al()">GO</button>
  </div>
  </form>
 </div>
</body>
</html>