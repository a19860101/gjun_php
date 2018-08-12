<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $a = ["HTML","CSS","JAVASCRIPT","PHP"];
        $b = implode(" ",$a);

        echo $b;

        $test = "Html,Css,Javascript";
        $c = explode(",",$test);
        echo count($c);
        // foreach($c as $cc){
        //     echo $cc;
        // }


        $fruits = ["orange","apple","pineapple"];
        // sort($fruits);
        // rsort($fruits);
        $members = ["John"=>"20","Mary"=>"21","Lisa"=>"19"];
        $m1 = implode(",",$members);
        $m2 = implode(",",array_keys($members));
        echo $m2 ;
        // echo $members["Mary"];
        // asort($members);        
        // ksort($members);        
        // arsort($members);        
        // krsort($members);        
        // foreach($fruits as $fruit){
            // echo $fruit."<br>";
        // }

        foreach($members as $name=>$age){
            // echo $name.$age;
        }
    ?>
</body>
</html>