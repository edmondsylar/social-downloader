<div class="class_footer">
	<p class="class_footer_p_text">
		<b>{{NAME_SITE}}</b> Made with ❤️ by Csode<span> - {{DATA_YEAR}}</span>
	</p>
</div>
<!-- cookie -->
				<div id="cookie-bar-bottom" class="cookie-bar">
					<div class="cookie-content">
						<p class="cookie_content_p">
							{{LANG site_web_cookies}}
							<br>
							<a class="cookie_content_a" href="{{CONFIG site_url}}/page/privacy">{{LANG Learn_more}}</a>
							<input id="cookie-hide" class="cookie-hide" onclick="this.parentNode.parentNode.style.display = 'none'" value="{{LANG I_understand}}" type="button">
						</p>
					</div>
				</div>
<script>

document.addEventListener('DOMContentLoaded', function(e) {
  if (getCookie('cookie_site').length > 0) {
    document.getElementById('cookie-bar-bottom').style.display = 'none';
  }
  document.getElementById('cookie-hide').addEventListener('click', function(e) {
    createCookie('cookie_site', true, 1);
	$('#cookie-bar-bottom').hide();
  })
});



var createCookie = function(name, value, days) {
  var expires;
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  }
  else {
    expires = "";
  }
  document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(c_name) {
  if (document.cookie.length > 0) {
    c_start = document.cookie.indexOf(c_name + "=");
    if (c_start != -1) {
      c_start = c_start + c_name.length + 1;
      c_end = document.cookie.indexOf(";", c_start);
      if (c_end == -1) {
        c_end = document.cookie.length;
      }
      return unescape(document.cookie.substring(c_start, c_end));
    }
  }
  return "";
}
	
</script>	