<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: "list.php",
                dataType: "json",
                success:function(e){
                    // $(e).each(function(){
                    //     let name = this.name;
                    //     let mail = this.mail;
                    //     let content = `<h1>${name}</h1><p>${mail}</p>`;

                    //     $("#output").append(content);
                    // })
                    e.forEach(function(d){
                        let name = d.name;
                        let mail = d.mail;
                        let content = `<h1>${name}</h1><p>${mail}</p>`;
                        // let content = "<h1>"+name+"</h1><p>"+mail+"</p>";

                        $("#output").append(content);
                    })
                },
                error:function(){}
            })
        })
    </script>
</head>
<body>
    <div id="output"></div>
</body>
</html>