
//validate login.php
let check = ()=>{
    let phone = document.getElementById('phone').value;
    let pass = document.getElementById('pass').value;
    
    if(!phone.length){
        alert("Mobile number can't be empty.");
        return false;
    }else if(isNaN(parseInt(phone))){
        alert("Mobile number should be numeric.");
        return false;
    }else if(phone.length!=10){
        alert("Mobile number should be of length- 10");
        return false;
    }else if(!pass.length){
        alert("Please enter password");
        return false;
    }else{
        return true;
    }
};

//validate reg.php 
let checkreg = ()=>{
    let phone = document.getElementById('phone').value;
    if(!phone.length){
        alert("Mobile number can't be empty.");
        return false;
    }else if(isNaN(parseInt(phone))){
        alert("Mobile number should be numeric.");
        return false;
    }else if(phone.length!=10){
        alert("Mobile number should be of length- 10");
        return false;
    }else{
        return true;
    }
};

//validate group.php 
let checkgrp = ()=>{
    let g_name = document.getElementById('g_name').value;
    if(!g_name.length){
        alert(`Group name can't be empty`);
        return false;
    }
    else if(g_name.charCodeAt(0)>47 && g_name.charCodeAt(0)<58){
        alert(`Group name can't start with numeric value`);
        return false; 
    }
    // else if(<?php 
    //         $con = mysqli_connect('localhost','root','','way2sms');
    //         $q = "SELECT * from group_table";
    //         $res = mysqli_query($con,$q);
    //         echo "<script>alert(123)</script>";
    //         while($row = mysqli_fetch_array($res)){
    //             if($row['g_name']==g_name) 
    //                 echo "true";
    //         }
    //         ?>){
    //             alert(`Group name already exists`);
    //             return false;
    //         }
    else{
        return true;
    }
};

//validate contact.php 
let checkContact = ()=>{
    let g_name = document.getElementById('g_name2').value;
    let c_name = document.getElementById('c_name').value;
    let c_phone = document.getElementById('c_phone').value;
    if(g_name=="Name"){
        alert(`Please select a group`);
        return false;
    }
    else if(c_name.charCodeAt(0)>47 && c_name.charCodeAt(0)<58){
        alert(`Contact name can't start with numeric value`);
        return false; 
    }else if(isNaN(parseInt(c_phone))){
        alert("Mobile number should be numeric.");
        return false;
    }else if(c_phone.length!=10){
        alert("Mobile number should be of length- 10");
        return false;
    }else{
        return true;
    }
};

//validate smspage.php 
let checksms = ()=>{
    let g_name = document.getElementById('g_name').value; 
    if(g_name == "Name"){ 
        alert("Please Select a group");
        document.getElementById('err').innerHTML = ("Please select a group !");
        return false;
    }
    else return true;
};
let checksms2 = ()=>{
    let c_name = document.getElementById('c_name').value; 
    if(c_name == "Person"){
        document.getElementById('err').innerHTML = ("Please select a contact !");
        return false;
    }
    else return true;
};

// https://images.unsplash.com/photo-1554894872-1a01c75f7513?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80 
// https://images.unsplash.com/photo-1562330094-4a3730591558?ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80 
// https://images.unsplash.com/photo-1557778149-e45d68f60d04?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=697&q=80  
