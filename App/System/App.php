<?php

namespace App\System;

class App {

    private $runtime;

    public function run($config = [])
    {

        foreach((array) $this->getRuntime()->getNodeList()[0] as $node){
            foreach($node as $content){
                $this->render(
                    $content[0]->$content[1]($content[2][0],$content[2][1],$content[2][2])
                );
            }
        }

    }

    /**
     * @return mixed
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * @param mixed $runtime
     */
    public function load(
        \App\System\Runtime\NodeList $runtime
    )
    {
        $this->runtime = $runtime;
    }

    public function render($content){
        echo $content;
    }

}