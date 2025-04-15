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

/* home/index.html.twig */
class __TwigTemplate_662feaaca429b76d56ef2f894b278673 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <div class=\"home\">
        <h1>Accueil</h1>
            <!-- Affichage des informations de session -->
            <div class=\"session-info\">
                <h3>Informations de session</h3>
                ";
        // line 13
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "                    <p>Nom d'utilisateur : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "</p>
                ";
        }
        // line 16
        yield "            </div>

        <section class=\"posts-section\">
            <h2>Posts</h2>
            ";
        // line 20
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "                <div class=\"posts-grid\">
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 23
                yield "                        <div class=\"post-tile\">
                            <div class=\"post-content\">
                                ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 25), "html", null, true);
                yield "
                            </div>
                            <div class=\"post-likes\">
                                <button class=\"like-button\" data-post-id=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 28), "html", null, true);
                yield "\">j'aime</button>
                                <span>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "getLikesCount", [], "method", false, false, false, 29), "html", null, true);
                yield " likes</span>
                            </div>
                            <div class=\"post-author\">
                                <strong>
                                    <a href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "userId", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\">
                                        ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "getUserName", [], "method", false, false, false, 34), "html", null, true);
                yield "
                                    </a>
                                </strong>
                            </div>
                            <div class=\"post-date\">
                                ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 39), "d/m/Y H:i"), "html", null, true);
                yield "
                            </div>
                        </div>
                        <hr> <!-- Séparation entre les posts -->
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                </div>
            ";
        } else {
            // line 46
            yield "                <p>Aucun post disponible.</p>
            ";
        }
        // line 48
        yield "        </section>
    </div>
    <script>
        document.querySelectorAll('.like-button').forEach(button => {
            button.addEventListener('click', () => {
                const postId = button.dataset.postId;
                fetch(`/post/\${postId}/like`, { method: 'POST' })
                    .then(response => response.json())
                    .then(data => {
                        button.nextElementSibling.textContent = `\${data.likes} likes`;
                    });
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  174 => 48,  170 => 46,  166 => 44,  155 => 39,  147 => 34,  143 => 33,  136 => 29,  132 => 28,  126 => 25,  122 => 23,  118 => 22,  115 => 21,  113 => 20,  107 => 16,  101 => 14,  99 => 13,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Accueil
{% endblock %}

{% block body %}
    <div class=\"home\">
        <h1>Accueil</h1>
            <!-- Affichage des informations de session -->
            <div class=\"session-info\">
                <h3>Informations de session</h3>
                {% if username is not empty %}
                    <p>Nom d'utilisateur : {{ username }}</p>
                {% endif %}
            </div>

        <section class=\"posts-section\">
            <h2>Posts</h2>
            {% if posts is not empty %}
                <div class=\"posts-grid\">
                    {% for post in posts %}
                        <div class=\"post-tile\">
                            <div class=\"post-content\">
                                {{ post.content }}
                            </div>
                            <div class=\"post-likes\">
                                <button class=\"like-button\" data-post-id=\"{{ post.id }}\">j'aime</button>
                                <span>{{ post.getLikesCount() }} likes</span>
                            </div>
                            <div class=\"post-author\">
                                <strong>
                                    <a href=\"{{ path('user_profile', { id: post.userId }) }}\">
                                        {{ post.getUserName() }}
                                    </a>
                                </strong>
                            </div>
                            <div class=\"post-date\">
                                {{ post.createdAt|date('d/m/Y H:i') }}
                            </div>
                        </div>
                        <hr> <!-- Séparation entre les posts -->
                    {% endfor %}
                </div>
            {% else %}
                <p>Aucun post disponible.</p>
            {% endif %}
        </section>
    </div>
    <script>
        document.querySelectorAll('.like-button').forEach(button => {
            button.addEventListener('click', () => {
                const postId = button.dataset.postId;
                fetch(`/post/\${postId}/like`, { method: 'POST' })
                    .then(response => response.json())
                    .then(data => {
                        button.nextElementSibling.textContent = `\${data.likes} likes`;
                    });
            });
        });
    </script>
{% endblock %}", "home/index.html.twig", "/Users/romain/www/fairy/templates/home/index.html.twig");
    }
}
