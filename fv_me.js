function validateform()
{
  const name1=document.getElementById("name1").value;
  const name2=document.getElementById("name2").value;
  const email=document.getElementById("email").value;
  const password=document.getElementById("password").value;
  const phone=document.getElementById("phone").value;
  const pincode=document.getElementById("pincode").value;
  
  const order1=document.getElementById("order1").value;
  const order2=document.getElementById("order2").value;
  const order3=document.getElementById("order3").value;
  
  const name1_error=document.getElementById("name1error");
  const name2_error=document.getElementById("name2error");
  const email_error=document.getElementById("emailerror");
  const password_error=document.getElementById("passworderror");
  const phone_error=document.getElementById("phoneerror");
  const pincode_error=document.getElementById("pincodeerror");
  
  const order1_error=document.getElementById("order1error");
  const order2_error=document.getElementById("order2error");
  const order3_error=document.getElementById("order3error");
  
  name1_error.textContent=" ";
  name2_error.textContent=" ";
  email_error.textContent=" ";
  password_error.textContent=" ";
  phone_error.textContent=" ";
  pincode_error.textContent=" ";
  
  order1_error.textContent=" ";
  order2_error.textContent=" ";
  order3_error.textContent=" ";
  
  let isValid = true;
  
  if(name1 === "" || /\d/.test(name1) || name1.length>30  )
  {
    name1_error.textContent="re-enter";
    isValid = false;
  }
  
  if(name2 === "" || /\d/.test(name2) || name2.length>30 )
  {
    name2_error.textContent="re-enter";
    isValid = false;
  }
  
  if( email === "" || !email.includes("@") || !email.includes("."))
  {
    email_error.textContent="re-enter";
    isValid = false;
  }
  
  if(password === "" || password.length>8 || password.length<6 )
  {
    password_error.textContent="re-enter";
    isValid = false;
  }
  
  if(phone === "" || !/\d/.test(phone) || phone.length<10 || phone.length>10  )
  {
    phone_error.textContent="re-enter";
    isValid = false;
  }
  
  if(pincode === "" || pincode.length<6 || pincode.length>6 )
  {
    pincode_error.textContent="re-enter";
    isValid = false;
  }
  
  if(order1 === "" && order2 ==="" && order3 === "")
  {
    alert("atleast one");
  }
  
  
  return isValid;
}
