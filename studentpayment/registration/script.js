function check(){
    // if(name_data.value==null){
        
    //     const msg_err=document.getElementById("err_msg").innerHTML=( "please fill all required data in the form" );

    // } 
    //-----------name value
    const name_data=document.getElementById("name").value;
    const msg_name=document.getElementById("name_data").innerHTML=( " full name : "+ name_data  );
    // document.getElementById("name1").innerHTML=(name_data)
    
    
   
    //--------------------age value
    const department_data=document.getElementById("department").value;
    const msg_dept=document.getElementById("department_data").innerHTML=("department : " + department_data);
    
    //-----------------------email value---------
    const email_data=document.getElementById("email").value;
    const msg_email=document.getElementById("email_data").innerHTML=("email : " + email_data);
    
    
    //----------------------entrance value
    const entrance_data=document.getElementById("entrance_result").value;
   
    const msg_entrance=document.getElementById("entrance_data").innerHTML=("entrance : "  + entrance_data);


    const gender_data=document.getElementById("gender").value;
    const msg_gender=document.getElementById("gender_data").innerHTML=("gender : " + gender_data);

    const msg_confirm=document.getElementById("txt4").innerHTML=("if the above data is correct please click <b>submit</b> button " );
    
    //-----------------amount
    // const amount_data=document.getElementById("gender").value;
    // const msg_amount=document.getElementById("gender_data").innerHTML=("amount : " + amount_data);
    
    // // error message 
    // if(name_data==null || age_data<18 || email_data==null || entrance_data<370 || entrance_data>700 || amount_data<100){
    //     document.getElementById("err_msg").innerHTML=(" ! Fill The Form Correctlly " );
    //     // document.getElementById("registration_number").innerHTML=( "registration_number :  error");
    // }
 
    // else{
    //     window.alert("registered sucessfully check your email ")
    
    // }
    
    // //--------------------registration number
    //             let ab=['c','f',1,'s',5,'y','j',0,'p','A',4,2,3,7,9]; 
    //              const msg_registration=document.getElementById("registration_number").innerHTML=( "registration number : "+
    //                 ab[Math.floor(Math.random()*14)]+
    //             ab[Math.floor(Math.random()*14)]+ab[Math.floor(Math.random()*14)]+ab[Math.floor(Math.random()*14)]+ab[Math.floor(Math.random()*14)]+"/23") ;
                
    // //-------------------date 
    // const msg_date=document.getElementById("date").innerHTML=("date : " + Date());
    
    // var e=document.getElementById("txt4").innerHTML=('    -      REGISTERED SUCCESSFULLY    -         '  );
    
    
    
    
    
    
    
    
    
    // }
}
            