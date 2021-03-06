<?php
    namespace sylouuu\Curl\Method;

    /**
     * Patch
     *
     * @author sylouuu
     * @link https://github.com/sylouuu/php-curl
     * @version 0.7.1
     * @license MIT
     */
    class Patch extends \sylouuu\Curl\Curl
    {
        /**
         * Constructor
         *
         * @param string $url
         * @param array $options
         */
        public function __construct($url, $options = null)
        {
            parent::__construct($url, $options);

            $this->prepare();
        }

        /**
         * Prepare the request
         */
        public function prepare()
        {
            $this->setCurlOption(CURLOPT_CUSTOMREQUEST, 'PATCH');

            if(isset($this->options['data'])) {
                // Data
                $this->setCurlOption(CURLOPT_POSTFIELDS, http_build_query($this->options['data']));
            }
        }
    }
