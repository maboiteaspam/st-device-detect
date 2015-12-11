<?php
namespace st\DeviceDetect;

use Psr\Http\Message\RequestInterface;

interface DeviceDetectorInterface {

    /**
     * Set current request to inspect for detection.
     * Be sure to call it anytime the request changes.
     *
     * @param RequestInterface $request
     * @return DeviceDetectorInterface $this
     */
    public function setRequest (RequestInterface $request);

    /**
     * Return the type of device detected as a string.
     * Must be one of 'mobile' 'tablet' 'desktop'
     *
     * @return string
     */
    public function detect();

    public function isDeviceType($device);

    public function isMobile();

    public function isDesktop();

    public function isTablet();
}
