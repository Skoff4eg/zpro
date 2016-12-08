window.onload = function(){
	v = document.getElementById("c_preview");
	    if( v && document.getElementById('c_view')) {
	        v.onclick = function(){
            	var str = '<span class="c_name">' + document.forms[0].c_username.value + '</span>';
                str += '<h1>' + document.forms[0].c_useremail.value + '</h1>';
                str += '<p>' + document.forms[0].c_msg.value + '</p>';
                str += '<img id="blah" src="#" />';
                        
                var reader = new FileReader();

                reader.onload = function (e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("blah").src = e.target.result;
                };

                // read the image file as a data URL.
                reader.readAsDataURL(document.getElementById("c_img").files[0]);
                document.getElementById('c_view').innerHTML = str;
	        }
	    }
}