window.onload = function(){
	v = document.getElementById("c_preview");
	    if( v && document.getElementById('c_view')) {
	        v.onclick = function(){
                //alert(document.forms[1]);
            	var str = '<div class="c_name">Автор: ' + document.forms[1].c_username.value + '</div>';
                str += '<div>Email: ' + document.forms[1].c_useremail.value + '</div>';
                str += '<div>Коментарий: ' + document.forms[1].c_msg.value + '</div>';
                str += '<img id="blah" src="#" />';
                        
                var reader = new FileReader();

                reader.onload = function (e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("blah").src = e.target.result;
                };

                // read the image file as a data URL.
                if(!(document.getElementById("c_img").files[0])){
                    alert('Выбирете картинку!');
                    return;
                } else{
                    reader.readAsDataURL(document.getElementById("c_img").files[0]);
                    
                }
                document.getElementById('c_view').innerHTML = str;
	        }
	    }
}