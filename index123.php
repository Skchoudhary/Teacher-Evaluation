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
        var selectedValSemval=selectedValSem.value;
        var selectedValBranchval=selectedValBranch.value;

        document.cookie="semval="+selectedValSemval;
        document.cookie="branchval="+selectedValBranchval;
          location.href = "demo.php";
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
        <option value="cse">CSE -- only this is working</option>
        <option value="me">ME</option>
        <option value="ce">CE</option>
        <option value="ece">ECE</option>
        <option value="it">IT</option>
    </select>
   </div>
   <div class="Sem">
   <select class="col-md-12 center Sem" id="sem" name="sem">
   <option value="null"> Select the Semester</option>
       <option value="1">Sem 1 -- only this is working</option>
       <option value="2">Sem 2</option>
       <option value="3">Sem 3</option>
       <option value="4">Sem 4</option>
       <option value="5">Sem 5</option>
       <option value="6">Sem 6</option>
       <option value="7">Sem 7</option>
       <option value="8">Sem 8</option>
   </select>
   </div>
   <button type="submit" class="btn btn-primary go" onclick="al()">GO</button>
  </div>
  </form>
 </div>
</body>
</html>