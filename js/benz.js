function benz(){
	
}

benz.prototype.reset = function()
{
	benz.count_ads();	
	
	$('#ok').attr('onclick','benz.add_data_user();');
	$('#googleplay').attr('onclick','window.open("https://play.google.com/store/apps/details?id=com.daimler.mymbfs.th.production.android", "blank");');
    $('#appstore').attr('onclick','window.open("https://itunes.apple.com/th/app/mymbfs-thailand/id587743627?mt=8", "blank");');

    $('#button-close').attr('onclick','benz.close_alert_box();');
}

//////Add Data///////
benz.prototype.count_ads = function(){
	var param = {
        mode: 'count',
        id_ads: ads
    };
    
	ajax(service_path+'/users.php', param, 'text', '', function(data){
		//var status = JSON.parse(data).status;
 	});
}

benz.prototype.add_data_user = function(){
	if(jQuery('#name').val() == '' || jQuery('#age').val() == '' || jQuery('#tel').val() == '' || jQuery('#email').val() == '' || jQuery('#car_type').val() == '')
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		return false;
	} else {
		if(benz.validateMobileNumber(jQuery('#tel').val()) == false) {
			alert('คุณกรอกหมายเลขโทรศัพท์ไม่ถูกต้อง');
			return false;
		}
		if(benz.validateEmail(jQuery('#email').val()) == false) {
			alert('คุณกรอกอีเมล์ไม่ถูกต้อง');
			return false;
		}
		
	}
	
	var param = {
        mode: 'add_user',
        user_name: jQuery('#name').val(),
        user_age: jQuery('#age').val(),
        user_mobile: jQuery('#tel').val(),
        user_email: jQuery('#email').val(),
        user_car_type: jQuery('#car_type').val(),
        id_ads: ads
    };
    
	ajax(service_path+'/users.php', param, 'text', '', function(data){
		$('#blursheet').show();
		$('#box-alert').show();
 	});
}
//////Add Data///////

//////Action///////
benz.prototype.close_alert_box = function(){
    window.location="http://www.mercedes-benz.co.th/content/thailand/mpc/mpc_thailand_website/thng/home_mpc/passengercars/home/financialservices/leasing/my_star.html";
}
//////Action///////

//////Validate///////
benz.prototype.validateMobileNumber = function(mobile) {  
	var re = /^[0]{1}[0-9]{9}$/;
	return re.test(mobile);
}
benz.prototype.validateEmail = function(email) {  
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}
//////Validate///////