function ngh(){
    a=0;
    b=0;
    c=0;
    u=0
    a=document.getElementById("username").value;
    b=document.getElementById("pasword").value;
    c=document.getElementById("repasword").value;
    u=document.getElementById("u").value;

      if( a!=0 && b!=0 && c!=0){
        if(c==b){
       document.login.submit();
        // alert("*نام شما ثبت شد");
    }else
    alert("*در تکرار رمز دقت کنید");
    }
    else 
    alert("*تمام جاهای خالی را پرکنید");
    }
    