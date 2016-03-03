<?php
/*
 * Copyright 2015 Centreon (http://www.centreon.com/)
 * 
 * Centreon is a full-fledged industry-strength solution that meets 
 * the needs in IT infrastructure and application monitoring for 
 * service performance.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *    http://www.apache.org/licenses/LICENSE-2.0  
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * For more information : contact@centreon.com
 * 
 */

namespace CentreonPerformance\Install;

use Centreon\Internal\Installer\Module\AbstractModuleInstaller;

/**
 * Class for installation of module performance
 *
 * @author Maximilien Bersoult <mbersoult@centreon.com>
 * @version 3.0.0
 * @package Centreon
 */
class Installer extends AbstractModuleInstaller
{
    /**
     * 
     * @param type $moduleDirectory
     * @param type $moduleInfo
     * @param type $launcher
     */
    public function __construct($moduleDirectory, $moduleInfo, $launcher)
    {
        parent::__construct($moduleDirectory, $moduleInfo, $launcher);
    }
    
    /**
     * 
     */
    public function customPreInstall()
    {
        
    }
    
    /**
     * Custom installation function
     *
     * Validate if php-rrd is installed
     */
    public function customInstall()
    {
        if (false === function_exists('rrd_xport')) {
            throw new \Exception("The PHP rrd module is not installed");
        }
    }
    
    /**
     * Custom uninstall function
     */
    public function customRemove()
    {
        
    }
}