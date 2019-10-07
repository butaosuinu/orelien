<?php

namespace Orelien;

class Template
{
    /**
     * @var string
     */
    private $file;

    /**
     * @var array
     */
    private $params;

    function __construct(string $file, array $params)
    {
        $this->file = $file;
        $this->params = $params;
    }

    /**
     * @return void
     */
    public function render()
    {
        extract($this->params);
        include $this->file;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        ob_start();
        $this->render();
        $dist = ob_get_clean();
        return $dist ? $dist : '';
    }
}
