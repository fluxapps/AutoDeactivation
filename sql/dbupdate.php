<#1>
<?php
\srag\Plugins\AutoDeactivation\Repository::getInstance()->installTables();
\srag\Plugins\AutoDeactivation\Repository::getInstance()->config()->setValue(
		\srag\Plugins\AutoDeactivation\Config\ConfigFormGUI::KEY_LOCAL_USERS_ONLY,
	1
);
\srag\Plugins\AutoDeactivation\Repository::getInstance()->config()->setValue(
		\srag\Plugins\AutoDeactivation\Config\ConfigFormGUI::KEY_THRESHOLD_IN_DAYS,
	180
);
\srag\Plugins\AutoDeactivation\Repository::getInstance()->config()->setValue(
		\srag\Plugins\AutoDeactivation\Config\ConfigFormGUI::KEY_DAYS_WARNING,
	14
);
\srag\Plugins\AutoDeactivation\Notification\LastNotified::updateDB();
\srag\Notifications4Plugin\AutoDeactivation\Repository::getInstance()->installTables();
?>
