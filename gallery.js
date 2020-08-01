
let slide = document.querySelector('.gallery-slide');
let imgs = document.querySelector('.gallery-container');

let prevbutton = document.querySelector('#prevbutton');
let nextbutton = document.querySelector('#nextbutton');


let arr=['1.jpeg','2.jpeg','3.jpeg','4.jpeg','5.jpeg']
let i=0;
document.getElementById('try').src = arr[i];


document.querySelector('#nextbutton').addEventListener('click',function(){

   
    if(i>=4)
    {
        i=0;
    }
    i++;
    document.getElementById('try').src = arr[i];


    

})


document.querySelector('#prevbutton').addEventListener('click',function(){
   
    if(i<=0)
    {
        i=5;
    }

    i--;
    document.getElementById('try').src = arr[i];


    

})