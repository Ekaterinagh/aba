			</article>
			<aside ALIGN="center" class="col-md-1">
				<br/>	<!--http://share.pluso.ru/-->
				<script type="text/javascript">(function() {
					if (window.pluso)if (typeof window.pluso.start == "function") return;
					if (window.ifpluso==undefined) { window.ifpluso = 1;
					var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
					s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
					s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
					var h=d[g]('body')[0];
					h.appendChild(s);
				}})();</script>
				<div class="pluso" data-background="5f4e4e" data-options="big,square,line,vertical,nocounter,theme=03" 
					data-services="facebook,twitter,google,linkedin,livejournal,email">
				</div>
			</aside>
		</div>
		<br style="clear:both"/>
		<footer class="footer">        
             <p align="center"><?php $query="SELECT*FROM maintexts WHERE showhide='show'"; /*Conception du site : Ivanova E.A. © 2017 
								<br/>Mentions légales
								<br/>Contact <a href="#">ivanova</a>*/ 
								$adr=mysqli_query($db_con,$query);
								while($result=mysqli_fetch_array($adr)){
									//echo $result['name'].'<br/>';
									echo"<a href='index.php?url=".$result['url']."'>";
									echo $result['name'];
									echo"</a><br/>";
								}
								?>
								</p>
		</footer>
	</body>
</html>