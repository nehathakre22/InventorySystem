



$(document).on('submit','.database_opt',function(){

	var url=$(this).attr('action');
	var data=$(this).serialize();
	$.post(url,data,function(fb){
		var resp=$.parseJSON(fb);
		if(resp.status=='true'){

			alert(resp.message);
			setTimeout(function(){


				window.location.href=resp.reload;
			});
		}
		else{

				alert(resp.message);
		}
		

	})


	return false;
});

  $(document).on('click','.category_status',function(){

  var id=$(this).attr("data-id");


  $.get(BASE_URL+'/admin/category_status/'+id,function(fb){

  	alert("suceesfully status Checked...");

  });

});



  $(document).on('click','.exam_status',function(){

  var id=$(this).attr("data-id");


  $.get(BASE_URL+'/admin/exam_status/'+id,function(fb){

  	alert("Suceesfully status Checked...");

  });

});



  $(document).on('click','.student_status',function(){

  var id=$(this).attr("data-id");


  $.get(BASE_URL+'/admin/student_status/'+id,function(fb){

  	alert("Suceesfully status Checked...");

  });

});
$(document).on('click','.portal_status',function(){

  var id=$(this).attr("data-id");


  $.get(BASE_URL+'/admin/portal_status/'+id,function(fb){

  	alert("Suceesfully status Checked...");

  });

});

$(document).on('click','.question_status',function(){

  var id=$(this).attr("data-id");


  $.get(BASE_URL+'/admin/question_status/'+id,function(fb){

    alert("Suceesfully status Checked...");

  });

});


/*
  var interval;
  function countdown() {
    clearInterval(interval);
    interval = setInterval( function() {
        var timer = $('.js-timeout').html();
        timer = timer.split(':');
        var minutes = timer[0];
        var seconds = timer[1];
        seconds -= 1;
        if (minutes < 0) return;
        else if (seconds < 0 && minutes != 0) {
            minutes -= 1;
            seconds = 59;
        }
        else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

        $('.js-timeout').html(minutes + ':' + seconds);

        if (minutes == 0 && seconds == 0) { clearInterval(interval); alert('time UP'); }
    }, 1000);
  }

  $('.js-timeout').text("00:10");
  countdown();*/


   var div = document.getElementById('display');
            var submitted = document.getElementById('submitted');

              function CountDown(duration, display) {

                        var timer = duration, minutes, seconds;

                      var interVal=  setInterval(function () {
                            minutes = parseInt(timer / 60, 10);
                            seconds = parseInt(timer % 60, 10);

                            minutes = minutes < 10 ? "0" + minutes : minutes;
                            seconds = seconds < 10 ? "0" + seconds : seconds;
                    display.innerHTML = minutes + "m : " + seconds + "s" ;
                            if (timer > 0) {
                               --timer;

                            }else{
                       clearInterval(interVal)
                                SubmitFunction();
                             }

                       },1000);

                }

              function SubmitFunction(){
                submitted.innerHTML= alert('Time Over');
                document.getElementById('MCQuestion').submit();

               }
               CountDown(1000.10,div);

