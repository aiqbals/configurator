/*******dropload function****/
function loadModel(str) {
    run2();
    if (str == "") {
        document.getElementById("btn2").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("btn2").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","get_Brand.php?q="+str,true);
        xmlhttp.send();
    }
}
/*****popup open and hide ****/
function closePopup(id){
	var e = document.getElementById(id);
		e.style.display="none";
	
	}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

/**bringing value value to input field*/

    function run1() {
        document.getElementById("txt1").value = document.getElementById("op1").textc;
        

    }
    function run2() {
        var x = document.getElementById("op2").selectedIndex;
        document.getElementById("txt2").value = document.getElementsByTagName("option")[x].label;
        hideBtn('1');
    }
    function run3() {
        var x = document.getElementById("op3").selectedIndex;
        document.getElementById("txt3").value = document.getElementsByTagName("option")[x].label;
        hideBtn('1');
       // document.getElementById("txt3").value = document.getElementById("op3").textContent;
    }
    function run4() {
        document.getElementById("txt4").value = document.getElementById("op4").textContent;
    }
    function run5() {
        document.getElementById("txt5").value = document.getElementById("op5").textContent;
    }


  function hideBtn(btnName) {
     var b="btn";
  var btn=b.concat(btnName);
  document.getElementById(btn).style.visibility='hidden';
    
}

function displayBtn(btnName){
  var b="btn";
  var btn=b.concat(btnName);
  document.getElementById(btn).style.visibility='visible';

  }
  var hidden = false;
    function action() {
        hidden = !hidden;
        if(hidden) {
            document.getElementById('togglee').style.visibility = 'hidden';
        } else {
            document.getElementById('togglee').style.visibility = 'visible';
        }
    }
