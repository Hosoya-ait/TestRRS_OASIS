<?php
namespace rrsoacis\apps\Hosoya_ait\TestRRS_OASIS;

use rrsoacis\component\common\AbstractPage;
use rrsoacis\system\Config;

class MainPage extends AbstractPage
{
	public function controller($params)
	{
		$this->setTitle("Run Manager");
		$this->printPage();
	}

	function body()
	{
		self::writeContentHeader("Run Manager");

		self::beginContent();
?>
<?php
		self::endContent();
	}
}
