      </div>
    </main>
    <footer role="contentinfo">
        <hr>
        <div class="container">
			<div style="position: fixed;left:123px;" class="yul-wordmark">
				<table> 
					<tr><td style="vertical-align: baseline;"><span class="yul-wordmark-yale">Yale</span></td><td style="padding-left:5px;vertical-align: baseline;"><span class="yul-wordmark-smallcap">University Library</span></td></tr>
					<tr><td></td><td style="padding-left:5px;vertical-align: baseline;"><span class="yul-wordmark-italic">Digital Humanities Laboratory</span></td></tr>
				</table>
				<div style="position: fixed;right:100px;font-family:InterstateLightCondensed;">An experiment of the Yale Digital Humanities Lab</div>
			</div>
        </div>
        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
    </footer>
</body>
</html>
