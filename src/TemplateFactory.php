<?php

namespace Orelien;

class TemplateFactory
{
    /**
     * @var string
     */
    private $base_dir;
    /**
     * @param string $base_dir
     */
    public function __construct(string $base_dir)
    {
        $this->base_dir = rtrim($base_dir, '\\/');
    }

    public function create(string $name, array $params): Template
    {
        return new Template(
            "{$this->base_dir}/_base.phtml",
            ['main' => "{$this->base_dir}/{$name}.phtml"] + $params
        );
    }
}
