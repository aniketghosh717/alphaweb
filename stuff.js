document.getElementById('mode').addEventListener('click',function(){
   let a = document.getElementById('mode').value;
   if(a == "Dark")
   {
    document.getElementById('mode').value = "Light";
    document.getElementById('full').style.backgroundColor= "#d1d1af";
   }
   else{
    document.getElementById('mode').value = "Dark";
    document.getElementById('full').style.backgroundColor= "#111109";
   }

});

