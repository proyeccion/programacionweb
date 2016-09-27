
alert("hola JS");
$(
	function(){
		//alert("Hola jquery");
		$("body").append(
			$("<h1>").text("HOLA DOM"),
			$("<button>").attr("id","btnHola").text("saluda")

	       


	    );
    	$("#btnHola").on("click",function(){
    			alert("Hola DOM");
    		});




    }

);
