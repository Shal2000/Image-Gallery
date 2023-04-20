<?php
class Page_Data
{
    private string $title = "";
    private string $content = "";
    private string $css = "";
    private string $embeddedStyle = "";


    function __construct()
    {
        $this->title = "Title Goes Here";
        $this->content = "Page Content Goes Here";
        $this->css = "CSS Goes Here";
        $this->embeddedStyle = "Embedded CSS Goes Here";
    }


    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $value)
    {
        $this->title = $value;
    }
    public function getContent(): string
    {
        return $this->content;
    }
    public function setContent(string $value)
    {
        $this->content = $value;
    }
    public function appendContent(string $value)
    {
        $this->content .= $value;
    }


    public function getCSS(): string
    {
        return $this->css;
    }


    public function setCSS(string $css)
    {
        $this->css = $css;
    }
    public function appendCSS($css)
    {
        $this->css .= $css;
    }


    public function getembeddedStyle(): string
    {
        return $this->embeddedStyle;
    }
    public function setembeddedStyle(string $css)
    {
        $this->embeddedStyle = $css;
    }
    public function appendembeddedStyle($css)
    {
        $this->embeddedStyle .= $css;
    }
}
