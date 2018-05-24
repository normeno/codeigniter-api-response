<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_response {
    /**
     * @param mixed $ci Access to CodeIgniter configs
     */
    private $ci;

    /**
     * @param string $lang language
     */
    private $lang;

    /**
     * @param array $dictionary
     */
    private $dictionary;

    /**
     * @param array API Response
     */
    private $response;

    public function __construct() {
        $this->ci =& get_instance();
    }

    /**
     * @param string $key Key of dictionary
     * @param string format Format response
     * 
     * @return string|array
     */
    public function response($key, $format='array') {
        if (empty($this->lang)) { // Check if lang is valid
            $this->lang = substr($this->ci->config->item('language'), 0, 2);
            $this->dictorionary = "/lang/{$this->lang}.php"; 
        }

        return $this->set_response($this->dictionary[$key], $format);
    }

    /**
     * Load language file
     * 
     * @param string $lang ISO 639-1
     * 
     * @return object $this
     */
    public function set_lang($lang) {
        if (@include("lang/$lang.php")) {
            $this->lang = $lang;
            $this->dictionary = include("lang/{$this->lang}.php");
        }

        return $this;
    }

    /**
     * Generate response
     * 
     * @param array $data output data
     * @param string $format output format
     * 
     * @return mixed
     */
    private function set_response($data, $format) {
        switch ($format) {
            case 'array':
                return $data;
                break;
            case 'json':
                return json_encode($data);
                break;
            default:
                return $data;
        }
    }
}