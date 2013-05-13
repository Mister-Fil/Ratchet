<?php

App::uses('CakeEventListener', 'Event');

class RatchetMemoryUsageListener implements CakeEventListener {
    
    public function implementedEvents() {
        return array(
            'Rachet.WebsocketServer.getMemoryUsage' => 'getMemoryUsage',
        );
    }
    
    public function getMemoryUsage($event) {
        $event->result = array(
            'memory_usage' => memory_get_usage(true),
            'memory_peak_usage' => memory_get_peak_usage(true),
        );
    }
}