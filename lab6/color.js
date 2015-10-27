// JavaScript Document





function filling(){

loadDoc();


}

function loadDoc() {
 /* var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
	  
    if (xhttp.readyState == 4 && xhttp.status == 200) {
		
      obj = JSON.parse(xhttp.responseText);
    }
  }
   document.getElementById("demo").innerHTML = obj[0].color ;
  xhttp.open("GET", "colormap.txt", true);
  xhttp.send();*/
  	
	$.getJSON( "colormap.json", function( data ) {
 document.getElementById("demo").innerHTML = data[0].color ;
 
 
 var first = document.createElement("ul");

for(var i in data){
var entry = document.createElement('li');
entry.appendChild(document.createTextNode(data[i].color+" "+data[i].value));
first.appendChild(entry);	
	
	
	
	}

var firstdiv = document.getElementById("f");
firstdiv.appendChild(first);
 
  var second= document.createElement("ul");

for(var i in data){
var entry = document.createElement('li');

entry.appendChild(document.createTextNode(data[i].value));
second.appendChild(entry);	
	
	
	
	}
var seconddiv = document.getElementById("s");
seconddiv.appendChild(second);
 
 
 
});





}

function test(){
$('#f').on('scroll',function(){
	 document.getElementById("demo").innerHTML = "hello" ;
	var scrollHeight = Math.max(this.scrollHeight, this.clientHeight);
	var seconddiv = document.getElementById("s");
   seconddiv.scrollTop = scrollHeight ;
	
	});}
	
	
	$('hex li').on('click',function(){
		
		document.getElementById("demo").background = (this.innerHTML);
		});