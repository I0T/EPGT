//���ֹ���
var inter,ln=0;
function _textScroll(tag,num) { 
	return function() 
	{ 
		textScroll(tag,num); 
	} 
} 

function textScroll(tag,num){
    textnum=tag.html().length;
	kuan=20*textnum;
    if(ln<-kuan)
    {
        //clearInterval(inter);
        tag.css("left",0);
        ln=0;
    }else{
        if(textnum>num){
            tag.css("left",ln--);
        }
	}
}
//ע��findsub���ǵ���������
function scroll(object,num){
    var findsub=arguments[2]?arguments[2]:"b";   
    object.find("a").each(function(){
		$(this).mouseover(function(){
			inter=setInterval(_textScroll($(this).find(findsub),num),10);
		})
		$(this).mouseout(function(){
			clearInterval(inter);
			//this.style.left=0;
			$(this).css("left",0);
			ln=0;
		})
	})
}
//�ͺ���scroll(object,num)�Ĺ���һ��
$.fn.scroll = function(findsub,num) {
    this.find("a").each(function(){
		$(this).mouseover(function(){
			inter=setInterval(_textScroll($(this).find(findsub),num),30);
		})
		$(this).mouseout(function(){
			clearInterval(inter);
			//this.style.left=0;
			//$(this).css("left",0);
            $(this).find(findsub).css("left",0);
			ln=0;
		})
	})
};    
//��������

function scrollSingle(object,num){
    object.find("li").each().mouseover(function(){
        //alert('���');
		$(this).keydown(function(event){
			if(event.keyCode==0x25){
				var $last=object.find("li").eq(num);
                object.prepend($last);
                object.find("a")[0].focus();
                event.preventDefault();
			}
			if(event.keyCode==0x27){
				var $last=object.find("li").eq(0);
                object.append($last);
                object.find("a")[0].focus();
                event.preventDefault();
			}
		});
    });
}
//�ͺ���scrollSingle(object,num)�Ĺ���һ��
$.fn.scrollul = function(object) {
    this.find("li").each().mouseover(function(){
        //alert('���');
        num=object.find("li").length-1;
        //showTip(num);
		this.onkeydown=function(event){
			if(event.keyCode==37){  //���
				var $last=object.find("li").eq(num);  //֮ǰд��
                object.prepend($last);                //֮ǰд��
                /*jsд��
    			var $last=object.find("li")[0][num];
    			object.find("li")[0].parentNode.insertBefore($last,object.find("li")[0]);
                */
                
                object.find("a")[0].focus();
                //showTip($("#text_scroll").text());
                event.preventDefault();
                //return false;
			};
			if(event.keyCode==39){  //�Ҽ�
				var $last=object.find("li").eq(0);  //֮ǰд��
                object.append($last);               //֮ǰд��
                /*jsд��
                object[0].appendChild(object.find("li")[0]);
                */
                
                object.find("a")[0].focus();
                //showTip($("#text_scroll").text());
                event.preventDefault();
                //return false;
			}
		};
    });   
};