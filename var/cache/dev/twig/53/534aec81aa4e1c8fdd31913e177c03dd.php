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
            yield "                <p>Nom d'utilisateur : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "</p>
                <div class=\"session-actions\">
                    <a href=\"";
            // line 16
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-danger\">Se Déconnecter</a>
                    <a href=\"";
            // line 17
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_post");
            yield "\" class=\"btn btn-primary\">Créer un Post</a>
                </div>
            ";
        }
        // line 20
        yield "        </div>

        <section class=\"posts-section\">
            <h2>Posts</h2>
            ";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 24, $this->source); })()))) {
            // line 25
            yield "                <div class=\"posts-tiles\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 27
                yield "                        <div class=\"post-tile\">
                            <div class=\"post-content\">
                                ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 29), "html", null, true);
                yield "
                            </div>
                            ";
                // line 31
                if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "mediaUrl", [], "any", false, false, false, 31)) {
                    // line 32
                    yield "                                <div class=\"post-image\">
                                    <img src=\"";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "mediaUrl", [], "any", false, false, false, 33))), "html", null, true);
                    yield "\" alt=\"Image du post\" class=\"uniform-image\">
                                </div>
                            ";
                }
                // line 36
                yield "                            <div class=\"post-likes\">
                                <button class=\"like-button\" data-post-id=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 37), "html", null, true);
                yield "\">j'aime</button>
                                <span>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "getLikesCount", [], "method", false, false, false, 38), "html", null, true);
                yield " likes</span>
                            </div>
                            <div class=\"post-author\">
                                <strong>
                                    <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "userId", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\">
                                        ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "getUserName", [], "method", false, false, false, 43), "html", null, true);
                yield "
                                    </a>
                                </strong>
                            </div>
                            <div class=\"post-date\">
                                ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 48), "d/m/Y H:i"), "html", null, true);
                yield "
                            </div>
                            <div class=\"post-actions\">
                                <form action=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_repost", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" method=\"POST\">
                                    <textarea name=\"comment\" placeholder=\"Ajoutez un commentaire...\"></textarea>
                                    <button type=\"submit\">Reposter</button>
                                </form>
                            </div>
                            ";
                // line 56
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "reposts", [], "any", false, false, false, 56)) > 0)) {
                    // line 57
                    yield "                                <div class=\"reposts\">
                                    <h4>Reposts :</h4>
                                    ";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "reposts", [], "any", false, false, false, 59));
                    foreach ($context['_seq'] as $context["_key"] => $context["repost"]) {
                        // line 60
                        yield "                                        <div class=\"repost-tile\">
                                            <div class=\"repost-content\">
                                                ";
                        // line 62
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "content", [], "any", false, false, false, 62), "html", null, true);
                        yield "
                                            </div>
                                            ";
                        // line 64
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "mediaUrl", [], "any", false, false, false, 64)) {
                            // line 65
                            yield "                                                <div class=\"repost-image\">
                                                    <img src=\"";
                            // line 66
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "mediaUrl", [], "any", false, false, false, 66))), "html", null, true);
                            yield "\" alt=\"Image du repost\" class=\"uniform-image\">
                                                </div>
                                            ";
                        }
                        // line 69
                        yield "                                            <div class=\"repost-author\">
                                                <strong>
                                                    <a href=\"";
                        // line 71
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "userId", [], "any", false, false, false, 71)]), "html", null, true);
                        yield "\">
                                                        ";
                        // line 72
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "getUserName", [], "method", false, false, false, 72), "html", null, true);
                        yield "
                                                    </a>
                                                </strong>
                                            </div>
                                            <div class=\"repost-date\">
                                                Publié le : ";
                        // line 77
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "createdAt", [], "any", false, false, false, 77), "d/m/Y H:i"), "html", null, true);
                        yield "
                                            </div>
                                            <div class=\"repost-actions\">
                                                <form action=\"";
                        // line 80
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_repost", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["repost"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                        yield "\" method=\"POST\">
                                                    <textarea name=\"comment\" placeholder=\"Ajoutez un commentaire...\"></textarea>
                                                    <button type=\"submit\">Reposter</button>
                                                </form>
                                            </div>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repost'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    yield "                                </div>
                            ";
                }
                // line 89
                yield "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "                </div>
            ";
        } else {
            // line 93
            yield "                <p>Aucun post disponible.</p>
            ";
        }
        // line 95
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
        return array (  276 => 95,  272 => 93,  268 => 91,  261 => 89,  257 => 87,  244 => 80,  238 => 77,  230 => 72,  226 => 71,  222 => 69,  216 => 66,  213 => 65,  211 => 64,  206 => 62,  202 => 60,  198 => 59,  194 => 57,  192 => 56,  184 => 51,  178 => 48,  170 => 43,  166 => 42,  159 => 38,  155 => 37,  152 => 36,  146 => 33,  143 => 32,  141 => 31,  136 => 29,  132 => 27,  128 => 26,  125 => 25,  123 => 24,  117 => 20,  111 => 17,  107 => 16,  101 => 14,  99 => 13,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
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
                <div class=\"session-actions\">
                    <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\">Se Déconnecter</a>
                    <a href=\"{{ path('new_post') }}\" class=\"btn btn-primary\">Créer un Post</a>
                </div>
            {% endif %}
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
                                    <textarea name=\"comment\" placeholder=\"Ajoutez un commentaire...\"></textarea>
                                    <button type=\"submit\">Reposter</button>
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
                                                    <textarea name=\"comment\" placeholder=\"Ajoutez un commentaire...\"></textarea>
                                                    <button type=\"submit\">Reposter</button>
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
