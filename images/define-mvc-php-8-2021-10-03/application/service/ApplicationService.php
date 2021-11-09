<?php
declare(strict_types = 1);
namespace Application\Service;

use Define\Core\BaseService;
use Define\Utilities\Logger;

if(DIRECT_ACCESS != true) die("Direct access is forbidden.");

/**
 * APPLICATION SERVICE
 *
 * This is the base service class for application to be developed. Extends BaseService class.
 * Override or add default methods for your application.
 *
 * @category Application
 * @package Service
 * @author Nitesh Apte <me@niteshapte.com>
 * @copyright 2015 - 2021 Nitesh Apte
 * @version 1.0.0
 * @since 1.0.0
 * @license https://www.gnu.org/licenses/gpl.txt GNU General Public License v3
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class ApplicationService extends BaseService {

    protected Logger $logger;

    public function __construct() {
        parent::__construct();
        $this->logger = $this->container->offsetGet('LOGGER');
    }
}