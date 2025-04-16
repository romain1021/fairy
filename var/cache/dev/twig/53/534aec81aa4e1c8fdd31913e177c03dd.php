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
<h2>Bienvenue ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</h2>

        <div class=\"user-actions\">
                    <form action=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-danger\">Se Déconnecter</button>
                    </form>
                    <form action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_post");
        yield "\" method=\"GET\">
                        <button type=\"submit\" class=\"btn btn-primary\">Créer un Post</button>
                    </form>
                    <form action=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit");
        yield "\" method=\"GET\">
                        <button type=\"submit\" class=\"btn btn-primary\">Modifier mes informations</button>
                    </form>
                </div>
        </div>

        <section class=\"posts-section\">
            <h2>Posts</h2>
            ";
        // line 27
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "                <div class=\"posts-tiles\">
                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 30
                yield "                        <div class=\"post-tile\">
                            <div class=\"post-content\">
                                ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 32), "html", null, true);
                yield "
                            </div>
                            ";
                // line 34
                if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "mediaUrl", [], "any", false, false, false, 34)) {
                    // line 35
                    yield "                                <div class=\"post-image\">
                                    <img src=\"";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "mediaUrl", [], "any", false, false, false, 36))), "html", null, true);
                    yield "\" alt=\"Image du post\" class=\"uniform-image\">
                                </div>
                            ";
                }
                // line 39
                yield "                            <div class=\"post-likes\">
                                <button class=\"like-button\" data-post-id=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 40), "html", null, true);
                yield "\">j'aime</button>
                                <span>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "getLikesCount", [], "method", false, false, false, 41), "html", null, true);
                yield " likes</span>
                            </div>
                            <div class=\"post-author\">
                                <strong>
                                    <a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "userId", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\">
                                        ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "getUserName", [], "method", false, false, false, 46), "html", null, true);
                yield "
                                    </a>
                                </strong>
                            </div>
                            <div class=\"post-date\">
                                ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 51), "d/m/Y H:i"), "html", null, true);
                yield "
                            </div>
                            <div class=\"post-actions\">
                                <form action=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_repost", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" method=\"POST\">
                                    <textarea name=\"comment\" placeholder=\"\"></textarea>
                                    <button type=\"submit\">Repondre</button>
                                </form>
                            </div>
                            ";
                // line 59
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "reposts", [], "any", false, false, false, 59)) > 0)) {
                    // line 60
                    yield "                                <div class=\"reposts\">
                                    <h4>Reposts :</h4>
                                    ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "reposts", [], "any", false, false, false, 62));
                    foreach ($context['_seq'] as $context["_key"] => $context["repost"]) {
                        // line 63
                        yield "                                        <div class=\"repost-tile\">
                                            <div class=\"repost-content\">
                                                ";
                        // line 65
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "content", [], "any", false, false, false, 65), "html", null, true);
                        yield "
                                            </div>
                                            ";
                        // line 67
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "mediaUrl", [], "any", false, false, false, 67)) {
                            // line 68
                            yield "                                                <div class=\"repost-image\">
                                                    <img src=\"";
                            // line 69
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "mediaUrl", [], "any", false, false, false, 69))), "html", null, true);
                            yield "\" alt=\"Image du repost\" class=\"uniform-image\">
                                                </div>
                                            ";
                        }
                        // line 72
                        yield "                                            <div class=\"repost-author\">
                                                <strong>
                                                    <a href=\"";
                        // line 74
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "userId", [], "any", false, false, false, 74)]), "html", null, true);
                        yield "\">
                                                        ";
                        // line 75
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "getUserName", [], "method", false, false, false, 75), "html", null, true);
                        yield "
                                                    </a>
                                                </strong>
                                            </div>
                                            <div class=\"repost-date\">
                                                Publié le : ";
                        // line 80
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "createdAt", [], "any", false, false, false, 80), "d/m/Y H:i"), "html", null, true);
                        yield "
                                            </div>
                                            <div class=\"repost-actions\">
                                                <form action=\"";
                        // line 83
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_repost", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                        yield "\" method=\"POST\">
                                                    <textarea name=\"comment\" placeholder=\"\"></textarea>
                                                    <button type=\"submit\">Repondre</button>
                                                </form>
                                            </div>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repost'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    yield "                                </div>
                            ";
                }
                // line 92
                yield "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                </div>
            ";
        } else {
            // line 96
            yield "                <p>Aucun post disponible.</p>
            ";
        }
        // line 98
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
        return array (  278 => 98,  274 => 96,  270 => 94,  263 => 92,  259 => 90,  246 => 83,  240 => 80,  232 => 75,  228 => 74,  224 => 72,  218 => 69,  215 => 68,  213 => 67,  208 => 65,  204 => 63,  200 => 62,  196 => 60,  194 => 59,  186 => 54,  180 => 51,  172 => 46,  168 => 45,  161 => 41,  157 => 40,  154 => 39,  148 => 36,  145 => 35,  143 => 34,  138 => 32,  134 => 30,  130 => 29,  127 => 28,  125 => 27,  114 => 19,  108 => 16,  102 => 13,  96 => 10,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
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
<h2>Bienvenue {{ username }}</h2>

        <div class=\"user-actions\">
                    <form action=\"{{ path('app_logout') }}\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-danger\">Se Déconnecter</button>
                    </form>
                    <form action=\"{{ path('new_post') }}\" method=\"GET\">
                        <button type=\"submit\" class=\"btn btn-primary\">Créer un Post</button>
                    </form>
                    <form action=\"{{ path('app_user_edit') }}\" method=\"GET\">
                        <button type=\"submit\" class=\"btn btn-primary\">Modifier mes informations</button>
                    </form>
                </div>
        </div>

        <section class=\"posts-section\">
            <h2>Posts</h2>
            {% if posts is not empty %}
                <div class=\"posts-tiles\">
                    {% for post in posts %}
                        <div class=\"post-tile\">
                            <div class=\"post-content\">
                                {{ post.content }}
                            </div>
                            {% if post.mediaUrl %}
                                <div class=\"post-image\">
                                    <img src=\"{{ asset('uploads/' ~ post.mediaUrl) }}\" alt=\"Image du post\" class=\"uniform-image\">
                                </div>
                            {% endif %}
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
                            <div class=\"post-actions\">
                                <form action=\"{{ path('post_repost', { id: post.id }) }}\" method=\"POST\">
                                    <textarea name=\"comment\" placeholder=\"\"></textarea>
                                    <button type=\"submit\">Repondre</button>
                                </form>
                            </div>
                            {% if post.reposts|length > 0 %}
                                <div class=\"reposts\">
                                    <h4>Reposts :</h4>
                                    {% for repost in post.reposts %}
                                        <div class=\"repost-tile\">
                                            <div class=\"repost-content\">
                                                {{ repost.content }}
                                            </div>
                                            {% if repost.mediaUrl %}
                                                <div class=\"repost-image\">
                                                    <img src=\"{{ asset('uploads/' ~ repost.mediaUrl) }}\" alt=\"Image du repost\" class=\"uniform-image\">
                                                </div>
                                            {% endif %}
                                            <div class=\"repost-author\">
                                                <strong>
                                                    <a href=\"{{ path('user_profile', { id: repost.userId }) }}\">
                                                        {{ repost.getUserName() }}
                                                    </a>
                                                </strong>
                                            </div>
                                            <div class=\"repost-date\">
                                                Publié le : {{ repost.createdAt|date('d/m/Y H:i') }}
                                            </div>
                                            <div class=\"repost-actions\">
                                                <form action=\"{{ path('post_repost', { id: repost.id }) }}\" method=\"POST\">
                                                    <textarea name=\"comment\" placeholder=\"\"></textarea>
                                                    <button type=\"submit\">Repondre</button>
                                                </form>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
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
