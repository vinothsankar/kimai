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
use Twig\TemplateWrapper;

/* @Tabler/includes/footer.html.twig */
class __TwigTemplate_02a1fe42dbf8b26a6b0b00dba30f870b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/footer.html.twig"));

        // line 1
        if ($this->extensions['App\Twig\Configuration']->get("theme.show_about")) {
            // line 2
            yield "<div class=\"row text-center align-items-center flex-row\">
    <div class=\"col-12 col-lg-auto mt-3 mt-lg-0\">
        <ul class=\"list-inline list-inline-dots mb-0\">
            <li class=\"list-inline-item\">
                Copyright &copy; <a href=\"https://www.kevinpapst.de/\" target=\"_blank\" class=\"link-secondary\">Kevin Papst</a>
            </li>
            <li class=\"list-inline-item\">
                <a class=\"link-secondary\" href=\"";
            // line 9
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            yield "\">
                    ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.title"), "html", null, true);
            yield "
                </a>
            </li>
        </ul>
    </div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Tabler/includes/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  63 => 10,  59 => 9,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if config('theme.show_about') %}
<div class=\"row text-center align-items-center flex-row\">
    <div class=\"col-12 col-lg-auto mt-3 mt-lg-0\">
        <ul class=\"list-inline list-inline-dots mb-0\">
            <li class=\"list-inline-item\">
                Copyright &copy; <a href=\"https://www.kevinpapst.de/\" target=\"_blank\" class=\"link-secondary\">Kevin Papst</a>
            </li>
            <li class=\"list-inline-item\">
                <a class=\"link-secondary\" href=\"{{ path('about') }}\">
                    {{ 'about.title'|trans }}
                </a>
            </li>
        </ul>
    </div>
</div>
{% endif %}", "@Tabler/includes/footer.html.twig", "C:\\wamp64\\www\\kimai\\templates\\bundles\\TablerBundle\\includes\\footer.html.twig");
    }
}
