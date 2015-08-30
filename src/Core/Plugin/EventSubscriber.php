<?php

/*
 * This file is part of the Yosymfony\Spress.
 *
 * (c) YoSymfony <http://github.com/yosymfony>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yosymfony\Spress\Core\Plugin;

/**
 * Event subscriber.
 *
 * @author Victor Puertas <vpgugr@gmail.com>
 */
class EventSubscriber
{
    private $listener = [];

    /**
     * Add a listener for one event.
     *
     * @param string   $eventName
     * @param \closure|string $listener
     */
    public function addEventListener($eventName, $listener)
    {
        $this->listener[$eventName] = $listener;
    }

    /**
     * Get event listeners.
     *
     * @return array
     */
    public function getEventListeners()
    {
        return $this->listener;
    }
}
