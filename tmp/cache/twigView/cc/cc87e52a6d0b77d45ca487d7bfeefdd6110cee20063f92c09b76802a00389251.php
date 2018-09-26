<?php

/* F:\www\aguaparatodos\vendor\cakephp\bake\src\Template\Bake\Model\entity.twig */
class __TwigTemplate_7853c49c47add53fc6a11ef2a87400ddcef223a640555a2b358223bd7ce92d32 extends Twig_Template
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
        // line 16
        $context["propertyHintMap"] = $this->getAttribute((isset($context["DocBlock"]) ? $context["DocBlock"] : null), "buildEntityPropertyHintTypeMap", array(0 => (((isset($context["propertySchema"]) ? $context["propertySchema"] : null)) ? ((isset($context["propertySchema"]) ? $context["propertySchema"] : null)) : (array()))), "method");
        // line 17
        $context["associationHintMap"] = $this->getAttribute((isset($context["DocBlock"]) ? $context["DocBlock"] : null), "buildEntityAssociationHintTypeMap", array(0 => (((isset($context["propertySchema"]) ? $context["propertySchema"] : null)) ? ((isset($context["propertySchema"]) ? $context["propertySchema"] : null)) : (array()))), "method");
        // line 18
        $context["annotations"] = $this->getAttribute((isset($context["DocBlock"]) ? $context["DocBlock"] : null), "propertyHints", array(0 => (isset($context["propertyHintMap"]) ? $context["propertyHintMap"] : null)), "method");
        // line 20
        if ((isset($context["associationHintMap"]) ? $context["associationHintMap"] : null)) {
            // line 21
            $context["annotations"] = twig_array_merge((isset($context["annotations"]) ? $context["annotations"] : null), array(0 => ""));
            // line 22
            $context["annotations"] = twig_array_merge((isset($context["annotations"]) ? $context["annotations"] : null), $this->getAttribute((isset($context["DocBlock"]) ? $context["DocBlock"] : null), "propertyHints", array(0 => (isset($context["associationHintMap"]) ? $context["associationHintMap"] : null)), "method"));
        }
        // line 25
        $context["accessible"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "getFieldAccessibility", array(0 => (isset($context["fields"]) ? $context["fields"] : null), 1 => (isset($context["primaryKey"]) ? $context["primaryKey"] : null)), "method");
        // line 26
        echo "<?php
namespace ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
        echo "\\Model\\Entity;

use Cake\\ORM\\Entity;

";
        // line 31
        echo $this->getAttribute((isset($context["DocBlock"]) ? $context["DocBlock"] : null), "classDescription", array(0 => (isset($context["name"]) ? $context["name"] : null), 1 => "Entity", 2 => (isset($context["annotations"]) ? $context["annotations"] : null)), "method");
        echo "
class ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " extends Entity
{
";
        // line 34
        if ((isset($context["accessible"]) ? $context["accessible"] : null)) {
            // line 35
            echo "
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected \$_accessible = [";
            // line 45
            echo $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "stringifyList", array(0 => (isset($context["accessible"]) ? $context["accessible"] : null), 1 => array("quotes" => false)), "method");
            echo "];
";
        }
        // line 48
        if ((isset($context["hidden"]) ? $context["hidden"] : null)) {
            // line 49
            echo "
    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected \$_hidden = [";
            // line 55
            echo $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "stringifyList", array(0 => (isset($context["hidden"]) ? $context["hidden"] : null)), "method");
            echo "];
";
        }
        // line 58
        if (( !(isset($context["accessible"]) ? $context["accessible"] : null) &&  !(isset($context["hidden"]) ? $context["hidden"] : null))) {
            // line 59
            echo "
";
        }
        // line 61
        echo "}
";
    }

    public function getTemplateName()
    {
        return "F:\\www\\aguaparatodos\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Model\\entity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 61,  89 => 59,  87 => 58,  82 => 55,  74 => 49,  72 => 48,  67 => 45,  55 => 35,  53 => 34,  48 => 32,  44 => 31,  37 => 27,  34 => 26,  32 => 25,  29 => 22,  27 => 21,  25 => 20,  23 => 18,  21 => 17,  19 => 16,);
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
{% set propertyHintMap = DocBlock.buildEntityPropertyHintTypeMap(propertySchema ?: []) %}
{% set associationHintMap = DocBlock.buildEntityAssociationHintTypeMap(propertySchema ?: []) %}
{% set annotations = DocBlock.propertyHints(propertyHintMap) %}

{%- if associationHintMap %}
    {%- set annotations = annotations|merge(['']) %}
    {%- set annotations = annotations|merge(DocBlock.propertyHints(associationHintMap)) %}
{% endif %}

{%- set accessible = Bake.getFieldAccessibility(fields, primaryKey) %}
<?php
namespace {{ namespace }}\\Model\\Entity;

use Cake\\ORM\\Entity;

{{ DocBlock.classDescription(name, 'Entity', annotations)|raw }}
class {{ name }} extends Entity
{
{% if accessible %}

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected \$_accessible = [{{ Bake.stringifyList(accessible, {'quotes': false})|raw }}];
{% endif %}

{%- if hidden %}

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected \$_hidden = [{{ Bake.stringifyList(hidden)|raw }}];
{% endif %}

{%- if not accessible and not hidden %}

{% endif %}
}
", "F:\\www\\aguaparatodos\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Model\\entity.twig", "F:\\www\\aguaparatodos\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Model\\entity.twig");
    }
}
