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

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_853c154fc5927b0ad623f2fc1cc8580b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        if ((($tmp =  !array_key_exists("accessible_label", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["collector_name"] = (((array_key_exists("collector", $context) && (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 2, $this->source); })()))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2)) : ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 2, $this->source); })())));
            // line 3
            yield "    ";
            $context["collector_name_parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["collector_name"]) || array_key_exists("collector_name", $context) ? $context["collector_name"] : (function () { throw new RuntimeError('Variable "collector_name" does not exist.', 3, $this->source); })()), ".");
            // line 4
            yield "    ";
            $context["accessible_label"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["collector_name_parts"]) || array_key_exists("collector_name_parts", $context) ? $context["collector_name_parts"] : (function () { throw new RuntimeError('Variable "collector_name_parts" does not exist.', 4, $this->source); })())) > 1)) ? (((Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 5
(isset($context["collector_name_parts"]) || array_key_exists("collector_name_parts", $context) ? $context["collector_name_parts"] : (function () { throw new RuntimeError('Variable "collector_name_parts" does not exist.', 5, $this->source); })())), ["_" => " "])) . " ") . Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::last($this->env->getCharset(), (isset($context["collector_name_parts"]) || array_key_exists("collector_name_parts", $context) ? $context["collector_name_parts"] : (function () { throw new RuntimeError('Variable "collector_name_parts" does not exist.', 5, $this->source); })())), ["_" => " "])))) : (Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 6
(isset($context["collector_name_parts"]) || array_key_exists("collector_name_parts", $context) ? $context["collector_name_parts"] : (function () { throw new RuntimeError('Variable "collector_name_parts" does not exist.', 6, $this->source); })())), ["_" => " "]))));
        }
        // line 8
        yield "<div class=\"sf-toolbar-block sf-toolbar-block-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 8, $this->source); })()), "html", null, true);
        yield " sf-toolbar-status-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 8, $this->source); })()), "normal")) : ("normal")), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("additional_classes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["additional_classes"]) || array_key_exists("additional_classes", $context) ? $context["additional_classes"] : (function () { throw new RuntimeError('Variable "additional_classes" does not exist.', 8, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" data-accessible-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accessible_label"]) || array_key_exists("accessible_label", $context) ? $context["accessible_label"] : (function () { throw new RuntimeError('Variable "accessible_label" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\" ";
        yield ((array_key_exists("block_attrs", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["block_attrs"]) || array_key_exists("block_attrs", $context) ? $context["block_attrs"] : (function () { throw new RuntimeError('Variable "block_attrs" does not exist.', 8, $this->source); })()), "")) : (""));
        yield ">
    ";
        // line 9
        if (( !array_key_exists("link", $context) || (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 9, $this->source); })()))) {
            yield "<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_profiler", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 9, $this->source); })()), "panel" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })())]), "html", null, true);
            yield "\" aria-controls=\"sf-toolbar-info-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "\" aria-haspopup=\"dialog\" aria-keyshortcuts=\"ArrowDown\">";
        }
        // line 10
        yield "        <div class=\"sf-toolbar-icon\"";
        if ((array_key_exists("link", $context) &&  !(isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 10, $this->source); })()))) {
            yield " aria-controls=\"sf-toolbar-info-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "\" aria-haspopup=\"dialog\" aria-keyshortcuts=\"ArrowDown\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 10, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</div>
    ";
        // line 11
        if ((($tmp = ((array_key_exists("link", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 11, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "</a>";
        }
        // line 12
        yield "        <div class=\"sf-toolbar-info\" id=\"sf-toolbar-info-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\" role=\"dialog\" aria-roledescription=\"details\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accessible_label"]) || array_key_exists("accessible_label", $context) ? $context["accessible_label"] : (function () { throw new RuntimeError('Variable "accessible_label" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\" tabindex=\"-1\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("text", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 12, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
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
        return array (  102 => 12,  98 => 11,  85 => 10,  75 => 9,  62 => 8,  59 => 6,  58 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if accessible_label is not defined %}
    {% set collector_name = (collector is defined and collector) ? collector.name : name %}
    {% set collector_name_parts = collector_name|split(\x27.\x27) %}
    {% set accessible_label = collector_name_parts|length > 1
        ? (collector_name_parts|first|replace({_: \x27 \x27})|title ~ \x27 \x27 ~ collector_name_parts|last|replace({_: \x27 \x27})|title)
        : collector_name_parts|first|replace({_: \x27 \x27})|title %}
{% endif %}
<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default(\x27normal\x27) }} {{ additional_classes|default(\x27\x27) }}\" data-accessible-label=\"{{ accessible_label }}\" {{ block_attrs|default(\x27\x27)|raw }}>
    {% if link is not defined or link %}<a href=\"{{ url(\x27_profiler\x27, {token: token, panel: name}) }}\" aria-controls=\"sf-toolbar-info-{{ name }}-{{ token }}\" aria-haspopup=\"dialog\" aria-keyshortcuts=\"ArrowDown\">{% endif %}
        <div class=\"sf-toolbar-icon\"{% if link is defined and not link %} aria-controls=\"sf-toolbar-info-{{ name }}-{{ token }}\" aria-haspopup=\"dialog\" aria-keyshortcuts=\"ArrowDown\"{% endif %}>{{ icon|default(\x27\x27) }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\" id=\"sf-toolbar-info-{{ name }}-{{ token }}\" role=\"dialog\" aria-roledescription=\"details\" aria-label=\"{{ accessible_label }}\" tabindex=\"-1\">{{ text|default(\x27\x27) }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "/home/antoine/projects/echo/echo-api/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_item.html.twig");
    }
}
