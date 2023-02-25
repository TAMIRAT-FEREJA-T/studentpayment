function transfer(){


const sc_acc=document.getElementById("sc_acc_number").value;
let acc_num_data=sc_acc;

const transfer_amount=document.getElementById("transfer_amount").value;
let tr_amount_data = transfer_amount;

const amount=document.getElementById("amount").value;
let amo_data=15000;


let total=amo_data - tr_amount_data;

if(tr_amount_data ===null)
{
window.alert("Please enter the required field");
}
else{



document.getElementById("school-account").innerHTML=("you transfered to  " + acc_num_data +  " ");
document.getElementById("remaining_amount").innerHTML=(" amount: " + total  + "<br> date : " + Date());
document.getElementById("amount").innerHTML=(  total );
}

}