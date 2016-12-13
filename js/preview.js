window.onload = function(){
	v = document.getElementById("c_preview");
    s = document.getElementById("c_ok");
	    if( v && document.getElementById('c_view')) {
	        v.onclick = function(){
                //alert(document.forms[1]);
            	var str = '<div class="c_name list-group-item">Автор: ' + document.forms[1].c_username.value + '</div>';
                str += '<div class="list-group-item">Email: ' + document.forms[1].c_useremail.value + '</div>';
                str += '<div class="list-group-item">Коментарий:<br> ' + document.forms[1].c_msg.value + '</div>';
                str += '<div class="list-group-item"><img id="blah" src="#" /></div>';
                        
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
        var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
        var e = document.getElementById("c_email");
        e.onchange = function(){
        var r=e.value;
        if (!reg.test(r)) {
        e.style.backgroundColor = "red";
        s.style.pointerEvents = "none";
        v.style.pointerEvents = "none";
        } else{
            e.style.backgroundColor = "white";
            s.style.pointerEvents = "auto";
            v.style.pointerEvents = "auto";
        }
        }
        
}