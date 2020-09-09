$(document).ready(function(){
	$('.mr-auto').on('click',function(event){
		event.preventDefault();
		var getData=$(".myData")[0];
		var data=new FormData(getData);
		$.ajax({
			url:'http://127.0.0.1/CI/index.php/PostComment/myCmnt',
			type:'POST',
			data:data,
			contentType:false,
			processData:false,
			cache:false,
			success:function(data)
			{
				$data=$.parseJSON(data);
				//console.log(data);
				if($data==="Ваша комментария успешно записана в БД"){
					$text="";
				/*date=new Date();
				$day=date.getDate();
				$month=date.getMonth();
				$year=date.getFullYear();
				$hour=date.getHours()+8;
				$min=date.getMinutes();
				$name=$('.Name').val().bold();
				 if($hour<10) $hour="0"+$hour;
				 if($min<10) $min="0"+$min;
				 if($day<10) $day="0"+$day;
				 if($month) $month="0"+$month;
				$text=$name+' '+$hour+':'+$min+'  '+$day+'.'+$month+'.'+$year;*/
				alert($data);
				$('.sentComment').html('');
				printComment();
				}
				
				//console.log($text);
			},
			error: function(request,status,error)
			{
				console.log(request.responseText);
				console.log(error+' '+status);
				alert("Возникла обшика при сохранении вашей комментарии");
			}
		});
	});
	function printComment(){
				$.ajax({
					url:'http://127.0.0.1/CI/index.php/PostComment/getCmnt',
					type:'POST',
					data:{'a':'1'},
					dataType:'JSON',
					success:function(data){
						
						$data=data;
						strDate="";

						//alert($data);
						$.each(data,function(index,element){
							gettime=((element.date).split(' ')[1]).substr(0,5);
							getdate=((element.date).split(' ')[0]).split('-');
							
							 $('.sentComment').append('<p>'+element.Name.bold()+' '+gettime+' '+getdate[2]+'-'+getdate[1]+'-'+getdate[0]+'</p>'+'<p>'+element.textComment+'</p>');
							 strDate="";
						});
						console.log(data);
					},
					error:function(request,status,error){
						alert("error");
						console.log(error);
					}
				});
	}
	printComment();
	$('.Name').on('mousedown',function(){
		$('.Name').css("background-color", "white");
	});
	$('.myTestComment').on('mousedown',function(){
		$('.myTestComment').css("background-color", "white");
	});
	$('.Name').on('blur',function(){
		$('.Name').css("background-color", "#e9ecef");
	});
	$('.myTestComment').on('blur',function(){
		$('.myTestComment').css("background-color", "#e9ecef");
	});
});