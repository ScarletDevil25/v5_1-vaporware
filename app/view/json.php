<?php

namespace View;
class JSON extends Template {
	public function finish() {
		header('Content-Type: application/json');

		$this->data = json_encode($this->data);
		$this->data = preg_replace_callback(
								'/\{ICON:([\w-]+)(:|\!|#)?(.*?)\}/s',	// allowed seperators: ':' (normal), '!', '#' (id)
								function ($icon)
								{
									return addslashes ( Iconset::parse($icon) );
								},
								$this->data
							);
		return $this->data;
	}
}
