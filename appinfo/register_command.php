<?php

/**
 * ownCloud - Music app
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Leizh <leizh@free.fr>
 * @author Morris Jobke <hey@morrisjobke.de>
 * @author Pauli Järvinen <pauli.jarvinen@gmail.com>
 * @copyright Leizh 2014
 * @copyright Morris Jobke 2014
 * @copyright Pauli Järvinen 2017
 */

use \OCA\Music\App\Music;

$app = new Music();
$c = $app->getContainer();

$application->add(new OCA\Music\Command\Scan(
		$c->getServer()->getUserManager(),
		$c->query('Scanner')
));
$application->add(new OCA\Music\Command\ResetDatabase(
		$c->query('Maintenance')
));
$application->add(new OCA\Music\Command\ResetCache(
		$c->query('Cache')
));
$application->add(new OCA\Music\Command\Cleanup(
		$c->query('Maintenance')
));
