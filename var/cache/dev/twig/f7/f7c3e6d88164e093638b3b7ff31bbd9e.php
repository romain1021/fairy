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

/* @WebProfiler/Icon/no-gray.svg */
class __TwigTemplate_a223589d52f8f4911bf125a05631abf9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/no-gray.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/no-gray.svg"));

        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\"><path fill=\"#999\" d=\"M10.4 8.4L8 6l2.4-2.4c.8-.8.7-1.6.2-2.2-.6-.5-1.4-.6-2.2.2L6 4 3.6 1.6C2.8.8 2 .9 1.4 1.4c-.5.6-.6 1.4.2 2.2L4 6 1.6 8.4c-.8.8-.7 1.6-.2 2.2.6.6 1.4.6 2.2-.2L6 8l2.4 2.4c.8.8 1.6.7 2.2.2.5-.6.6-1.4-.2-2.2z\"/></svg>
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
        return "@WebProfiler/Icon/no-gray.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\"><path fill=\"#999\" d=\"M10.4 8.4L8 6l2.4-2.4c.8-.8.7-1.6.2-2.2-.6-.5-1.4-.6-2.2.2L6 4 3.6 1.6C2.8.8 2 .9 1.4 1.4c-.5.6-.6 1.4.2 2.2L4 6 1.6 8.4c-.8.8-.7 1.6-.2 2.2.6.6 1.4.6 2.2-.2L6 8l2.4 2.4c.8.8 1.6.7 2.2.2.5-.6.6-1.4-.2-2.2z\"/></svg>
", "@WebProfiler/Icon/no-gray.svg", "/Users/romain/www/fairy/vendor/symfony/web-profiler-bundle/Resources/views/Icon/no-gray.svg");
    }
}
