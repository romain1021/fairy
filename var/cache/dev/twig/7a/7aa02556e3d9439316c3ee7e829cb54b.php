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

/* @WebProfiler/Profiler/open.css.twig */
class __TwigTemplate_3689c64f8d1f07cdf09410794cb8464e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.css.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.css.twig"));

        // line 3
        $context["mixins"] = ["break_long_words" => "-ms-word-break: break-all; word-break: break-all; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto;", "monospace_font" => "font-family: monospace; font-size: 13px; font-size-adjust: 0.5;", "sans_serif_font" => "font-family: Helvetica, Arial, sans-serif;", "subtle_border_and_shadow" => "background: #FFF; border: 1px solid #E0E0E0; box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);"];
        // line 9
        yield "
";
        // line 13
        yield "html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

";
        // line 17
        yield "html, body  {
    height: 100%;
    width: 100%;
}
body {
    background-color: #F9F9F9;
    color: #aaa;
    display: flex;
    flex-direction: column;
    ";
        // line 26
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new RuntimeError('Variable "mixins" does not exist.', 26, $this->source); })()), "sans_serif_font", [], "any", false, false, false, 26);
        yield "
    font-size: 14px;
    line-height: 1.4;
}
.header {
    background-color: #222;
    position: fixed;
    top: 0;
    display: flex;
    width: 100%;
}
.header h1 {
    color: #FFF;
    font-weight: normal;
    font-size: 21px;
    margin: 0;
    padding: 10px 10px 8px;
    word-break: break-all;
}

a.doc {
    color: #FFF;
    text-decoration: none;
    margin: auto;
    margin-right: 10px;
}

a.doc:hover {
    text-decoration: underline;
}

.empty {
    padding: 10px;
    color: #555;
}

.source {
    margin-top: 41px;
}

.source li code {
    color: #555;
}

.source li.selected {
    background: rgba(255, 255, 153, 0.5);
}

.anchor {
    position: relative;
    display: inline-block;
    top: -7em;
    visibility: hidden;
}
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
        return "@WebProfiler/Profiler/open.css.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  64 => 26,  53 => 17,  49 => 13,  46 => 9,  44 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Mixins
   ========================================================================= #}
{% set mixins = {
    'break_long_words': '-ms-word-break: break-all; word-break: break-all; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto;',
    'monospace_font': 'font-family: monospace; font-size: 13px; font-size-adjust: 0.5;',
    'sans_serif_font': 'font-family: Helvetica, Arial, sans-serif;',
    'subtle_border_and_shadow': 'background: #FFF; border: 1px solid #E0E0E0; box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);'
} %}

{# Normalization
   (normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css)
   ========================================================================= #}
html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

{# Basic styles
   ========================================================================= #}
html, body  {
    height: 100%;
    width: 100%;
}
body {
    background-color: #F9F9F9;
    color: #aaa;
    display: flex;
    flex-direction: column;
    {{ mixins.sans_serif_font|raw }}
    font-size: 14px;
    line-height: 1.4;
}
.header {
    background-color: #222;
    position: fixed;
    top: 0;
    display: flex;
    width: 100%;
}
.header h1 {
    color: #FFF;
    font-weight: normal;
    font-size: 21px;
    margin: 0;
    padding: 10px 10px 8px;
    word-break: break-all;
}

a.doc {
    color: #FFF;
    text-decoration: none;
    margin: auto;
    margin-right: 10px;
}

a.doc:hover {
    text-decoration: underline;
}

.empty {
    padding: 10px;
    color: #555;
}

.source {
    margin-top: 41px;
}

.source li code {
    color: #555;
}

.source li.selected {
    background: rgba(255, 255, 153, 0.5);
}

.anchor {
    position: relative;
    display: inline-block;
    top: -7em;
    visibility: hidden;
}
", "@WebProfiler/Profiler/open.css.twig", "/Users/romain/www/fairy/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.css.twig");
    }
}
