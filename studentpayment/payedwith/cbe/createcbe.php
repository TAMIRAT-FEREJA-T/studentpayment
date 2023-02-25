<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="cbestyle.css">
    <title>pay with cbe </title>
</head>
<body>
    <div class="container">

<div class="choose">
    <div class="balance">
        ---- cbe --- <br>
        <span>current balance <h1 style="color:rgb(155, 231, 79);" id="amount" value="1000"> ********</h1></span>
      
    </div>
    <div class="inputv">
        <form action="process.php" method="post">
           
            name <input type="name" name="stud_name" id="name" width="84px"><br><br>
            school acc<input type="number" name="sc_acc_number" id="sc_acc_number">
            amount<input type="number" name="aount_of_money" id="transfer_amount">
           registration <input type="text" name="registration_number" id="registration_number">
           <!-- method <input type="text" name="telebirr" id="telebirr" placeholder="telebirr"> -->

             <input type="submit" class="btn-success" name="create" value="submit" >
          
        </form>
     
    </div>
    <div class="pay">
       
        <button onclick="transfer();" id="pay-btn">pay</button>
   <img src="mok" alt="">
    </div>
   

</div>
  
    
 <div class="ticket">
<p id="school-account"></p>
<br>
<p id="remaining_amount"></p>

    </div>
    </div>
     
    <script src="cbescript.js"></script>
</body>
</html>