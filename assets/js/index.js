function addtofav(id){    /*please complete the backend */
  if(id.style.color=="red"){
    document.getElementById("nl").style.display="block";
    gsap.from("#nl", { opacity: 0, duration: 1, delay: 0.5, x: -200 });
    setTimeout(function(){ document.getElementById("nl").style.display="none"; }, 3000);
    id.style.color="black";
   }else{
  document.getElementById("l").style.display="block";
  gsap.from("#l", { opacity: 0, duration: 1, delay: 0.5, x: -200 });
  setTimeout(function(){ document.getElementById("l").style.display="none"; }, 3000);
 id.style.color="red";
   }
}

document.getElementById("Overly").addEventListener("click", function(){
    var e =document.getElementsByClassName("modalbox");
   
           e[0].style.display = 'block';
      
   })	;
   document.getElementById("close").addEventListener("click", function(){
      var e =document.getElementsByClassName("modalbox");
    e[0].style.display= "none";
   });
   document.getElementById("Overly1").addEventListener("click", function(){
    var e =document.getElementsByClassName("modalbox");
   
           e[1].style.display = 'block';
      
   })	;
   document.getElementById("close1").addEventListener("click", function(){
      var e =document.getElementsByClassName("modalbox");
    e[1].style.display= "none";
   });
   document.getElementById("Overly2").addEventListener("click", function(){
    var e =document.getElementsByClassName("modalbox");
   
           e[2].style.display = 'block';
      
   })	;
   document.getElementById("close2").addEventListener("click", function(){
      var e =document.getElementsByClassName("modalbox");
    e[2].style.display= "none";
   });
   
   document.getElementById("Overly3").addEventListener("click", function(){
    var e =document.getElementsByClassName("modalbox");
   
           e[3].style.display = 'block';
      
   })	;
   document.getElementById("close3").addEventListener("click", function(){
      var e =document.getElementsByClassName("modalbox");
    e[3].style.display= "none";
   });
   document.getElementById("Overly4").addEventListener("click", function(){
    var e =document.getElementsByClassName("modalbox");
   
           e[4].style.display = 'block';
      
   })	;
   document.getElementById("close4").addEventListener("click", function(){
      var e =document.getElementsByClassName("modalbox");
    e[4].style.display= "none";
   });
   document.getElementById("Overly5").addEventListener("click", function(){
    var e =document.getElementsByClassName("modalbox");
   
           e[5].style.display = 'block';
      
   })	;
   document.getElementById("close5").addEventListener("click", function(){
      var e =document.getElementsByClassName("modalbox");
    e[5].style.display= "none";
   });
   
   