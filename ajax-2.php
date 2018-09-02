<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #output {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .box {
            width: 300px;
            background: #ccc;
            margin: 10px;
            padding: 20px;
        }
        img {
            width: 100%;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: "https://data.taipei/opendata/datalist/apiAccess?scope=resourceAquire&rid=bf073841-c734-49bf-a97f-3757a6013812",
                // url: "https://data.taipei/opendata/datalist/apiAccess?scope=resourceAquire&rid=24c9f8fe-88db-4a6e-895c-498fbc94df94",
                success:function(e){
                    console.log(e);
                    // console.log(e.result.results[0].ParkName);
                    // $(e.result.results).each(function(){
                    //     console.log(this.ParkName);
                    //     console.log(this.Name);
                    //     let ParkName = this.ParkName;
                    //     let OpenTime = this.OpenTime;
                    //     let Name = this.Name;
                    //     let Image = this.Image;
                    //     let content = `
                    //     <div class="box"> 
                    //         <h3>${ParkName}</h3>
                    //         <div>${OpenTime}</div>
                    //         <div>${Name}</div>
                    //         <div class="img"><img src="${Image}"></div>
                    //     </div>
                    //     `
                    //     $("#output").append(content);
                    // })
                },
                error: function(){

                }
            })
        })
    </script>
</head>
<body>
    <div id="output"></div>
</body>
</html>