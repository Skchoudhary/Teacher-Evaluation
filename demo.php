<?php
session_start();
    $link = mysqli_connect("localhost", "root", "root", "eval");
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    // Attempt select query execution
    $semval=$_COOKIE["semval"];
    $branchval=$_COOKIE["branchval"];
    $branchval=strtolower($branchval);
    //echo $semval;
    //echo $branchval;

 if($semval == 6 and $branchval == "cse")
 {
    $sql ="SELECT subject FROM student_rec where sem=$semval AND branch ='".$branchval."'";
}
else
{
    $sql="SELECT subject FROM student_rec where sem='1' AND branch = 'cse'";
}

    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            $sub=array();
            while($row = mysqli_fetch_array($result)){
                array_push($sub,$row['subject']);
            }
                //print_r($sub);
            // Close result set
$_SESSION['sub']=$sub;
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    // Close connection

    mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="vieport" content="width=device-width , initial-scale=1">
    <title>Demo</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/semo.css">
</head>
<body class="jumbotron">
<div class="conatiner jumbotron">
    <div class="table">
        <form action="insert.php" method="post" >
        <div class="text-right">
         <label>Section</label>
         <input type="text" placeholder="section" name="sec">
        </div>
            <div class="table1 center-block">
                <table class="table table-bordered table-hover table-responsive">
                    <tr>
                        <th>Subject</th>
                        <th>Communication</th>
                        <th>Syllabus</th>
                        <th>Class Discipline</th>
                        <th>Slides/PPT</th>
                    </tr>
                    <tr>
                        <td><?php echo $sub[0]; ?></td>
                        <td>
                            <select class="form-control" name="comm1">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="syll1">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="class1">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="discp1">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                    </tr>
                                        <tr>
                        <td><?php echo $sub[1]; ?></td>
                        <td>
                            <select class="form-control" name="comm2">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="syll2">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="class2">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="discp2">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                    </tr>
                                        <tr>
                        <td><?php echo $sub[2]; ?></td>
                        <td>
                            <select class="form-control" name="comm3">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="syll3">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="class3">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="discp3">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                    </tr>
                                        <tr>
                        <td><?php echo $sub[3]; ?></td>
                        <td>
                            <select class="form-control" name="comm4">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="syll4">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="class4">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="discp4">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                    </tr>
                                        <tr>
                        <td><?php echo $sub[4]; ?></td>
                        <td>
                            <select class="form-control" name="comm5">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="syll5">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="class5">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="discp5">
                                <option value="null">Choose Grade</option>
                                <option value= 5>Very Good</option>
                                <option value= 4>Good</option>
                                <option value= 3>Average</option>
                                <option value= 2>Poor</option>
                                <option value= 1>Very poor</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="submit">
                <button class="btn btn-primary center-block marg" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>