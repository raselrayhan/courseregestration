var photos = ['images/nstu1.jpg','images/nstu2.jpg','images/nstu3.jpg','images/nstu4.jpg','images/nstu5.jpg','images/nstu6.jpg'];
var img = document.querySelector('.center img');

var i = 0;
function next(){
if(i<photos.length-1){
   i++;
   img.src=photos[i];

}else{

   i=0;
   img.src=photos[i];
}

}
function prev(){
   if(i>0){
      i--;
      img.src=photos[i];
   
   }else{
   
      i=photos.length-1;
      img.src=photos[i];
   }
   
   }
