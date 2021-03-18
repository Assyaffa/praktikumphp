<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas1.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="" class="form-control">
                </div>

                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="">Lesson</label>
                <select class="form-select form-control" name="lesson" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="web programming">Web Programming</option>
                    <option value="database">Database</option>
                    <option value="statiska">Statiska</option>
                    <option value="pkn">PKN</option>
                    <option value="ui/ux">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="uts_value" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="uas_value" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="assignment_value" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">

            </form>
<?php
$name = $_GET['name'];
$nim = $_GET['nim'];
$lesson = $_GET['lesson'];
$uts_value = $_GET['uts_value'];
$uas_value = $_GET['uas_value'];
$assignment_value = $_GET['assignment_value'];
$value_total = $_GET['value_total'];
$value_in_alphabet = $_GET['value_in_alphabet'];
$simpan = $_GET['simpan']; 
?>
            <?php
            $value_total=($uts_value + $uas_value + $assignment_value);
            $na=($value_total / 3) 
            ?>

<?php
    if ($na <= 39 ) 
{
$value_in_alphabet = 'E' ;
}
else if ($na <= 40 )
{
$value_in_alphabet = 'D' ;
}

else if ($na <= 60 )
{
$value_in_alphabet = 'C' ;
}
else if ($na <= 70 )
{
$value_in_alphabet = 'B' ;
}
else
{
$value_in_alphabet = 'A' ;
}
?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?= $name?></li></li>
                    <li class="list-group-item">Nim : <?= $nim?></li></li>
                    <li class="list-group-item">Lesson : <?= $lesson?></li></li>
                    <li class="list-group-item"> UTS Value : <?= $uts_value?></li></li>
                    <li class="list-group-item">UAS Value : <?= $uas_value?></li></li>
                    <li class="list-group-item">Assignment Value : <?= $assignment_value?></li></li>
                    <li class="list-group-item">Value Total :<?= $value_total?></li></li>
                    <li class="list-group-item">Value in Alphabet : <?= $value_in_alphabet?></li>
                        
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Less than 40 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div>
   
   
</body>
</html>
