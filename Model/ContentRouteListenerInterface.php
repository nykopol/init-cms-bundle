<?php
/**
 * This file is part of the init_cms_sandbox package.
 *
 * (c) net working AG <info@networking.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 

namespace Networking\InitCmsBundle\Model;

use Doctrine\Common\EventArgs;


/**
 * @author Yorkie Chadwick <y.chadwick@networking.ch>
 */
interface ContentRouteListenerInterface {

    /**
     * @param EventArgs $args
     * @return mixed
     */
    public function prePersist(EventArgs $args);

    /**
     * @param EventArgs $args
     * @return mixed
     */
    public function preUpdate(EventArgs $args);
} 