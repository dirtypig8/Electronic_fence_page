$(document).ready(function(){
	$('#del_fence_bt').click(function(){
			//先跑第一個，再跑第二個
			fn_del_fence(function(){
				update_alarm()
			})
			
			
	});
	
	
});



function fn_del_fence(on_success){
	$.ajax({
	  type: 'POST',                     //GET or POST
	  url: "http://127.0.0.1/Electronic_fence_page/fence/del_fence.php",  //請求的頁面
	  data: {select_area: $('#select_area').val(),del_fence_list: $('#del_fence_list').val()},
	  cache: false,   //是否使用快取
	  dataType : 'html',
	  success: function(result){   //處理回傳成功事件，當請求成功後此事件會被呼叫
		//alert(result);
		//$('#title').text(result);
		$('#del_fence_list').html(result);
		on_success();
	  },
	  error: function(result){   //處理回傳錯誤事件，當請求失敗後此事件會被呼叫
		//your code here
		alert("發生錯誤");
		console.log(result);

	  },
	  
	});
}

function update_alarm(on_success){
	$.ajax({
	  type: 'POST',                     //GET or POST
	  url: "http://127.0.0.1/Electronic_fence_page/fence/select_area.php",  //請求的頁面
	  data: {select_area: $('#select_area').val()},
	  cache: false,   //是否使用快取
	  dataType : 'html',
	  success: function(result){   //處理回傳成功事件，當請求成功後此事件會被呼叫
		//alert(result);
		//$('#title').text(result);
		$('#select_area_show').html(result);
		on_success();
	  },
	  error: function(result){   //處理回傳錯誤事件，當請求失敗後此事件會被呼叫
		//your code here
		alert("發生錯誤");
		console.log(result);
	  },
	});
}
