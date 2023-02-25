<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new records</title>
</head>
<body>


<div class="container">
            <header class="d-flex justify-content-between my-4"> 
                <h1>Add new records</h1>
            <div>
                <a href="" class="btn btn-primary">back</a>
            </div>
        </header>
            <form action="process.php" method="post">
                <!-- <div class="form-element my-4">
                    <input type="text" class="form-control" name="ID" id="ID" placeholder="ID">
                </div> -->
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="name" id="name" placeholder="name:">
                </div>
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="department" id="department" placeholder="department:">
                </div>
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="email" id="email" placeholder="email:">
                </div>
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="entrance_result" id="entrance_result" placeholder="entrance result:">
                </div>
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="gender" id="gender" placeholder="gender:"> 
                    </div> 
                     <input type="submit" class="btn-success" name="create" value="submit" >
                    <button type="button" onclick="check();" id="btn_check">check</button>

                </div>
            </form>
           
        </div>  
        <P id="err_msg"></P>
    
        <div class="second">
            <div class="txt">
              
            <P id="name_data"></P>
            <P id="gender_data"></P>
            <P id="department_data"></P>
            <P id="email_data"></P>
            <P id="entrance_data"></P>
            
            <P id="registration_number"></P>
            <P id="txt4"></P>
            
        
        
            </div>
        
          </div>
    

<script src="script.js"> </script>


<style>
    h1{
        color: #480;
        margin-left: 340px;
    }
    .second{
     width: 500px;
    height: 400px;
    margin-top: 40px;
    margin-bottom: 40px;
    font-family: system-ui,serif;
    color: rgb(0, 0, 0);
    display: flex;
    position: relative;
    text-align: left;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    margin-left: 400px;
    background: rgb(237, 245, 250);
    border-radius: 30px;
    }

.btn-success{
    border: 0;
    color: white;
    background: rgb(2, 109, 248);
    margin: 10px 280px;
    border-radius: 6px;
}
btn-success{
    border: 0;
    color: white;
    background: rgb(2, 109, 248);
    margin: 10px 280px;
    border-radius: 6px;
}
#btn_check{
    border: 0;
    color: white;
    background: rgb(137, 2, 248);
    border-radius: 6px;
}
#err_msg{
    margin-left: 350px;
    color: red;
    font-size: larger;
}
</style>



































    <!-- <div class="container">
        <header class="d-flex justify-content-between my-4"> <h1>add new records</h1>
        <div>
            <a href="" class="btn btn-primary">back</a>
        </div>
    </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="ID" placeholder="ID">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="name" placeholder="name:">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="department" placeholder="department:">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="email" placeholder="email:">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="entrance_result" placeholder="entrance result:">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="gender" placeholder="gender:">
            <!-- </div>
            <div class="form-element my-4">
               <select name="type" class="form-control" >
                <option value="">select book type</option>
                <option value="adventure">adventure</option>
                <option value="sport">sport</option>
                <option value="thriler">thriler</option>
                <option value="horror">horror</option>
               </select>
            </div> -->
            <!-- <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="book description:">
                <div class="form-element"> -->
                </div>
            </div>
        </form>
    </div> -->
</body>
</html>