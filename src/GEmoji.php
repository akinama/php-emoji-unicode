<?php

namespace GEmoji;

class GEmoji
{
    /**
     * _value
     * 
     * @var mixed
     * @access private
     */
    private $_value;

    /**
     * __construct
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->_value = '絵文字'; 
    }

    /**
     * set
     *
     * @param mixed $string
     * @access public
     * @return void
     */
    public function set($string)
    {
        $this->_value = $string;
    }

    /**
     * get
     *
     * @access public
     * @return void
     */
    public function get()
    {
        echo $this->_value;
    }
}




