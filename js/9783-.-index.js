function startProJect(){
document.getElementById("firstForm").style.display = 'none';
document.getElementById("secondForm").style.display = 'block';
}
function allOne(){
if(document.getElementById("testimonialOne").style.display === 'block'){
document.getElementById("testimonialOne").style.display = 'none';
document.getElementById("testimonialTwo").style.display = 'none';
document.getElementById("testimonialThree").style.display = 'block';    
}else if(document.getElementById("testimonialTwo").style.display === 'block'){
document.getElementById("testimonialOne").style.display = 'block';
document.getElementById("testimonialTwo").style.display = 'none';
document.getElementById("testimonialThree").style.display = 'none';    
}else if(document.getElementById("testimonialThree").style.display === 'block'){
document.getElementById("testimonialOne").style.display = 'none';
document.getElementById("testimonialTwo").style.display = 'block';
document.getElementById("testimonialThree").style.display = 'none';    
}
}
function allTwo(){
if(document.getElementById("testimonialOne").style.display === 'block'){
document.getElementById("testimonialOne").style.display = 'none';
document.getElementById("testimonialTwo").style.display = 'block';
document.getElementById("testimonialThree").style.display = 'none';    
}
else if(document.getElementById("testimonialTwo").style.display === 'block'){
document.getElementById("testimonialOne").style.display = 'none';
document.getElementById("testimonialTwo").style.display = 'none';
document.getElementById("testimonialThree").style.display = 'block';    
}
else if(document.getElementById("testimonialThree").style.display === 'block'){
document.getElementById("testimonialOne").style.display = 'block';
document.getElementById("testimonialTwo").style.display = 'none';
document.getElementById("testimonialThree").style.display = 'none';    
}
}

