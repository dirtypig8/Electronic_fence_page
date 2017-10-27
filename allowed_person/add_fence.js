$(document).ready(function(){
	$('#add_fence_bt').click(function(){
		var email=$('#add_fence').val()
		if(email==''){
			alert("提醒: \r\n 資料輸入不全!")
			return false
		}else{
			
			fn_add_fence(function(){
				//fn_del_fence_list_afteradd()
				//下面這是再select_area.js裡面的fn
				fn_del_fence_list ()
			})
			
				
			
			
		}
		
	});
	
	
});



function fn_add_fence(on_success){
	$.ajax({
	  type: 'POST',                     //GET or POST
	  url: "http://127.0.0.1/Electronic_fence_page/allowed_person/add_fence.php",  //請求的頁面
	  data: {select_area: $('#select_area').val(),add_fence: $('#add_fence').val()},
	  cache: false,   //是否使用快取
	  dataType : 'html',
	  success: function(result){   //處理回傳成功事件，當請求成功後此事件會被呼叫
		console.log(result);
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

function fn_del_fence_list_afteradd(){
	$.ajax({
	  type: 'POST',                     //GET or POST
	  url: "http://127.0.0.1/Electronic_fence_page/allowed_person/del_fence_list.php",  //請求的頁面
	  data: {select_area: $('#select_area').val()},
	  cache: false,   //是否使用快取
	  dataType : 'html',
	  success: function(result){   //處理回傳成功事件，當請求成功後此事件會被呼叫
		//alert(result);
		//$('#title').text(result);
		$('#del_fence_list').html(result);
		
	  },
	  error: function(result){   //處理回傳錯誤事件，當請求失敗後此事件會被呼叫
		//your code here
		alert("發生錯誤");
		console.log(result);
	  },
	});
}

