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

/* auth/login.html.twig */
class __TwigTemplate_5ee765f2ff71cbcc56b881848c6d69b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "        <p style=\"color: red;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "</p>
    ";
        }
        // line 12
        yield "    <form method=\"post\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
        <label for=\"username\">Nom d'utilisateur :</label>
        <input type=\"text\" id=\"username\" name=\"username\" required>
        <br>
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>
        <br>
        <button type=\"submit\">Se connecter</button>
    </form>
    <p>Pas encore de compte ? <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Inscrivez-vous ici</a></p>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auth/login.html.twig";
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
        return array (  75 => 21,  62 => 12,  56 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    {% if error %}
        <p style=\"color: red;\">{{ error }}</p>
    {% endif %}
    <form method=\"post\" action=\"{{ path('app_login') }}\">
        <label for=\"username\">Nom d'utilisateur :</label>
        <input type=\"text\" id=\"username\" name=\"username\" required>
        <br>
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>
        <br>
        <button type=\"submit\">Se connecter</button>
    </form>
    <p>Pas encore de compte ? <a href=\"{{ path('app_register') }}\">Inscrivez-vous ici</a></p>
</body>
</html>", "auth/login.html.twig", "/Users/romain/www/fairy/templates/auth/login.html.twig");
    }
}
