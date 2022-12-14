
	  function autocomplete(inp, arr) {
	 	 var currentFocus;
	 	 inp.addEventListener("input", function(e) {
		      var a, b, i, val = this.value;
		      closeAllLists();
		      if (!val) { return false;}
		      currentFocus = -1;
		      a = document.createElement("DIV");
		      a.setAttribute("id", this.id + "autocomplete-list");
		      a.setAttribute("class", "autocomplete-items");
		      this.parentNode.appendChild(a);
	      	  for (i = 0; i < arr.length; i++) {
	       		 if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
	        		  b = document.createElement("DIV");
	        		  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
	          		  b.innerHTML += arr[i].substr(val.length);
	          		  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
	          	      b.addEventListener("click", function(e) {
	                   inp.value = this.getElementsByTagName("input")[0].value;
	                  });
	             a.appendChild(b);
	             }
	         }
	     });
	 	
	 	 inp.addEventListener("keydown", function(e) {
	      var x = document.getElementById(this.id + "autocomplete-list");
	      if (x) x = x.getElementsByTagName("div");
	      if (e.keyCode == 40) {
	      	currentFocus++;
	        addActive(x);
	      } else if (e.keyCode == 38) {
	       currentFocus--;
	        addActive(x);
	      } else if (e.keyCode == 13) {
	        e.preventDefault();
	        if (currentFocus > -1) {
	          if (x) x[currentFocus].click();
	        }
	      }
	 	 });
	  function addActive(x) {
	    if (!x) return false;
	    removeActive(x);
	    if (currentFocus >= x.length) currentFocus = 0;
	    if (currentFocus < 0) currentFocus = (x.length - 1);
	    x[currentFocus].classList.add("autocomplete-active");
	  }
	  function removeActive(x) {
	    for (var i = 0; i < x.length; i++) {
	      x[i].classList.remove("autocomplete-active");
	    }
	  }
	  function closeAllLists(elmnt) {
	    var x = document.getElementsByClassName("autocomplete-items");
	    for (var i = 0; i < x.length; i++) {
	      if (elmnt != x[i] && elmnt != inp) {
	        x[i].parentNode.removeChild(x[i]);
	      }
	    }
	  }
	  document.addEventListener("click", function (e) {
	      closeAllLists(e.target);
	      });
	}

		var countries = ["army act 2063", "anti defiction act 2054", "audit act 2048", "armed police force act 2058", "begging prohibition act 2018", "building act 2055", "bonus act 2030", "children act 2048", "civil service act 2049", "constitution of nepal 2072", "chartered accountant act 2053", "compensation act 2019", "contract act 2056", "decorations act 2064", "donations act 2030", "drugs act 2035", "education act 2058", "election commission act 2063", "evidence act 2031", "feed act 2033", "food act 2007", "forest act 2049", "gambling act 2020", "government cases act 2049", "gorkhapatra corporation act 2019", "higher education act 2046", "house and land act 2019", "immigration act 2049", "insurance act 2049", "income tax act 2055", "investment board act 2068", "jhora area land act 2048", "kathmandu university act 2048", "labour act 2048", "legal aid act 2054", "lottery act 2025", "marriage registration act 2048", "motor vehicle act 2049", "muluki ain 2074", "music and dance academy act 2070", "narcotic drugs control act 2033", "national broadcasting act 2049", "nepal agency act 2014", "nepal bar council act 2050", "notary public act 2063", "plant protection act 2064", "pokhara university act 2053", "police act 2012", "postal act 2019", "prison act 2019", "radio act 2014", "railways act 2020", "scholarship act 2036", "seeds act 2045", "senior citizens act 2063", "ship registration act 2027", "tax settlement act 2033", "tribhuwan university act 2049", "ukhada act 2021", "university grant commission act 2050", "value added tax act 2035", "water resources act 2049", "wealth tax act 2047", "working journalists act 2051", "company related laws", "nepalko sambidhaan", "company registration", "company act", "register a marriage", "vivah darta"];
		autocomplete(document.getElementById("myInput"), countries);