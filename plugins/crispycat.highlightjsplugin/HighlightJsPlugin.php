<?php
	namespace Crispage\Plugins;
	define("CRISPAGE") or die();

	class HighlightJsPlugin extends \Crispage\Assets\Plugin {
		public function execute() {
			global $app;

			$app("page")->links["highlightjs"] = array("rel" => "stylesheet", "src" => "/media/highlightjs/hl.css");
			$app("page")->scripts["highlightjs"] = array("src" => "/media/highlightjs/hl.js");
			$app("page")->scripts["highlightjs_all"] = array("content" => "hljs.highlightAll();");
		}
	}
?>
