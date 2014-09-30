/* 
	author: istockphp.com
*/
jQuery(function($) {
	
	$("a.topopup").click(function() {
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup(); // function show popup 
			}, 500); // .5 second
	return false;
	});
	
	/* event for close the popup */
	$("div.close").hover(
					function() {
						$('span.ecs_tooltip').show();
					},
					function () {
    					$('span.ecs_tooltip').hide();
  					}
				);
	
	$("div.close").click(function() {
		disablePopup();  // function close pop up
	});
	
	$(this).keyup(function(event) {
		if (event.which == 27) { // 27 is 'Ecs' in the keyboard
			disablePopup();  // function close pop up
		}  	
	});
	
	$("div#backgroundPopup").click(function() {
		disablePopup();  // function close pop up
	});
	
	$('a.livebox').click(function() {
		alert('Hello World!');
	return false;
	});
	

	 /************** start: functions. **************/
	function loading() {
		$("div.loader").show();  
	}
	function closeloading() {
		$("div.loader").fadeOut('normal');  
	}
	
	var popupStatus = 0; // set value
	
	function loadPopup() { 
		if(popupStatus == 0) { // if value is 0, show popup
			closeloading(); // fadeout loading
			$(".toPopup").fadeIn(0500); // fadein popup div
			$("#backgroundPopup").css("opacity", "0.8"); // css opacity, supports IE7, IE8
			$("#backgroundPopup").fadeIn(0001); 
			popupStatus = 1; // and set value to 1
		}	
	}
		
	function disablePopup() {
		if(popupStatus == 1) { // if value is 1, close popup
			$(".toPopup").fadeOut("normal");
			$("#backgroundPopup").fadeOut("normal");  
			popupStatus = 0;  // and set value to 0
		}
	}
	/************** end: functions. **************/

    /***** Registration *****/
    function saveRegData(){
        var form = $('#form');

        $.ajax({
            url:'/registration.php',
            type:'POST',
            dataType: "json",
            data: form.serialize(),
            success:function(){
                form.submit();
            }
        })
    }
    $('#submit-reg-form').on('click', function (event) {
        event.preventDefault();
        var error = 0;

        if ($('#mob').val() == '' || $('#last_name').val() == '' || $('#first_name').val() == '' || $('#email').val() == '') {
            $('#form').append("<div class='warning'>Заполните обязательные поля</div>");
            error = 1;
        }
        if ($('#sex').val() == 'Выбери пол') {
            $('#form').append("<div class='warning'>Заполните обязательные поля</div>");
            error = 1;
        }

        var myLength = $("#mob").val().length;
        if (myLength != 10) {
            $('#form').append("<div class='warning'>Заполните обязательные поля</div>");
            error = 1;
        }

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test($('#email').val())) {

            $('#form').append("<div class='warning'>Заполните обязательные поля</div>");
            error = 1;
        }

        if (error == 0) {
            saveRegData()
        }

    });

    $('#email').keydown(function () {
        this.value = this.value.replace(/[^a-zA-Z0-9-@-\\.]/g, '');
    });

    $('#email').focusout(function () {
        $('#email').filter(function () {
            var emil = $('#email').val();
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (!emailReg.test(emil)) {

                $('#form').submit(function (e) {
                    e.preventDefault();
                });
                $('#form').append("<div class='warning'>Заполните обязательные поля</div>");
            }
            else($('#form').unbind("submit"));
        })
    });

    $("#first_name").keydown(function () {
        this.value = this.value.replace(/[^а-яё]/i, "");

    });
    $("#last_name").keydown(function () {
        this.value = this.value.replace(/[^а-яё]/i, "");
    });

    $("#mob").keydown(function (e) {
        if (e.shiftKey) e.preventDefault();
        else {
            var nKeyCode = e.keyCode;
            if (nKeyCode == 8 || nKeyCode == 9) return;
            if (nKeyCode < 95) {
                if (nKeyCode < 48 || nKeyCode > 57) e.preventDefault();
            } else {
                if (nKeyCode < 96 || nKeyCode > 105) e.preventDefault();
            }
        }
    });

    /***** End of Registration *****/
}); // jQuery End