<?php

/* F:\www\aguaparatodos\vendor\cakephp\bake\src\Template\Bake\Controller\controller.twig */
class __TwigTemplate_3a498448a8b9b2de8b6881636f8d5356e21f73cf2ac88b4b03d435766e2ee070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        echo "<?php
namespace ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
        echo "\\Controller";
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo ";

use ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
        echo "\\Controller\\AppController;

/**
 * ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " Controller
 *
";
        // line 28
        if ((isset($context["defaultModel"]) ? $context["defaultModel"] : null)) {
            // line 29
            echo " * @property \\";
            echo twig_escape_filter($this->env, (isset($context["defaultModel"]) ? $context["defaultModel"] : null), "html", null, true);
            echo " \$";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "
";
        }
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["components"]) ? $context["components"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 33
            $context["classInfo"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "classInfo", array(0 => $context["component"], 1 => "Controller/Component", 2 => "Component"), "method");
            // line 34
            echo " * @property ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classInfo"]) ? $context["classInfo"] : null), "fqn", array()), "html", null, true);
            echo " \$";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classInfo"]) ? $context["classInfo"] : null), "name", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        if (twig_in_filter("index", (isset($context["actions"]) ? $context["actions"] : null))) {
            // line 38
            echo " *
 * @method \\";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
            echo "\\Model\\Entity\\";
            echo twig_escape_filter($this->env, (isset($context["entityClassName"]) ? $context["entityClassName"] : null), "html", null, true);
            echo "[]|\\Cake\\Datasource\\ResultSetInterface paginate(\$object = null, array \$settings = [])
";
        }
        // line 41
        echo " */
class ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "Controller extends AppController
{
";
        // line 44
        $context["helpers"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "arrayProperty", array(0 => "helpers", 1 => (isset($context["helpers"]) ? $context["helpers"] : null), 2 => array("indent" => false)), "method");
        // line 45
        if (twig_trim_filter((isset($context["helpers"]) ? $context["helpers"] : null))) {
            // line 46
            echo (isset($context["helpers"]) ? $context["helpers"] : null);
            echo "
";
        }
        // line 49
        $context["components"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "arrayProperty", array(0 => "components", 1 => (isset($context["components"]) ? $context["components"] : null), 2 => array("indent" => false)), "method");
        // line 50
        if (twig_trim_filter((isset($context["components"]) ? $context["components"] : null))) {
            // line 51
            echo (isset($context["components"]) ? $context["components"] : null);
            echo "
";
        }
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 55
echo $context['_view']->element(("Controller/" . $context["action"]),array(),array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "}
";
    }

    public function getTemplateName()
    {
        return "F:\\www\\aguaparatodos\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Controller\\controller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 57,  109 => 55,  105 => 54,  100 => 51,  98 => 50,  96 => 49,  91 => 46,  89 => 45,  87 => 44,  82 => 42,  79 => 41,  72 => 39,  69 => 38,  67 => 37,  56 => 34,  54 => 33,  50 => 32,  42 => 29,  40 => 28,  35 => 26,  29 => 23,  22 => 21,  19 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * Controller bake template file
 *
 * Allows templating of Controllers generated from bake.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
<?php
namespace {{ namespace }}\\Controller{{ prefix }};

use {{ namespace }}\\Controller\\AppController;

/**
 * {{ name }} Controller
 *
{% if defaultModel %}
 * @property \\{{ defaultModel }} \${{ name }}
{% endif %}

{%- for component in components %}
{% set classInfo = Bake.classInfo(component, 'Controller/Component', 'Component') %}
 * @property {{ classInfo.fqn }} \${{ classInfo.name }}
{% endfor %}

{%- if 'index' in actions %}
 *
 * @method \\{{ namespace }}\\Model\\Entity\\{{ entityClassName }}[]|\\Cake\\Datasource\\ResultSetInterface paginate(\$object = null, array \$settings = [])
{% endif %}
 */
class {{ name }}Controller extends AppController
{
{% set helpers = Bake.arrayProperty('helpers', helpers, {'indent': false})|raw %}
{% if helpers|trim %}
    {{- helpers|raw }}
{% endif %}

{%- set components = Bake.arrayProperty('components', components, {'indent': false})|raw %}
{% if components|trim %}
    {{- components|raw }}
{% endif %}

{%- for action in actions %}
    {%- element 'Controller/' ~ action %}
{% endfor %}
}
", "F:\\www\\aguaparatodos\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Controller\\controller.twig", "F:\\www\\aguaparatodos\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Controller\\controller.twig");
    }
}
