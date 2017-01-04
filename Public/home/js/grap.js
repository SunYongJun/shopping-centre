/*
* 倒计时  抢购的倒计时
* 首页抢购的倒计时
* 传入jquery对象 使用方法 timer($('$dsk2'));
*/
function timer($this){
	var start = Number($this.attr('start'));
	var end = Number($this.attr('end'));

	// var intDiff = parseInt(grap);   
	var intDiff = end-start;	//倒计时总秒数量
	// alert(intDiff);
	window.setInterval(function(){    
		var day=0,hour=0,minute=0,second=0,vshow=0;//时间默认值   
	    if(intDiff > 0){        
	    	day = Math.floor(intDiff / (60 * 60 * 24));        
	    	hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
	    	//显示距离现在的小时数
	    	vshow = Math.floor(intDiff / (60 * 60));
	    	minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);        
	    	second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);       
	    }    
	    if (minute <= 9) minute = '0' + minute;    
	    if (second <= 9) second = '0' + second;    
	    // $this.find('').html(day);    
	    $this.find('.t1').html(vshow);    
	    $this.find('.t2').html(minute);    
	    $this.find('.t3').html(second);        
	    intDiff--;    
	}, 1000);
	var micro = 9;
	window.setInterval(function(){
		if(micro < 0){
			micro = 9;
		}
		$this.find('.t4').html(micro);
		micro --;
	},100)
} 
