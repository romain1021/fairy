<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/images/icon-minus-square.svg */
class __TwigTemplate_f283d7941452efa13dfa472a65ebb422 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/images/icon-minus-square.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/images/icon-minus-square.svg"));

        yield "<svg width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z\"/></svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/images/icon-minus-square.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<svg width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z\"/></svg>
", "@WebProfiler/images/icon-minus-square.svg", "/Users/romain/www/fairy/vendor/symfony/web-profiler-bundle/Resources/views/images/icon-minus-square.svg");
    }
}
