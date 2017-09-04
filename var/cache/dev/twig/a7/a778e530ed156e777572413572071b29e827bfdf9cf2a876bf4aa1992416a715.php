<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c00b9593fca14e8231de8efe6622ff46260560f3dc0cf5d00e9580bb8a2f599f extends Twig_Template
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
        $__internal_ab409f8bdadfd1df1b87938cef73c38ffc92ab27a3a0c6c5e0d0706be2f20a1d = $this->env->getExtension("native_profiler");
        $__internal_ab409f8bdadfd1df1b87938cef73c38ffc92ab27a3a0c6c5e0d0706be2f20a1d->enter($__internal_ab409f8bdadfd1df1b87938cef73c38ffc92ab27a3a0c6c5e0d0706be2f20a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ab409f8bdadfd1df1b87938cef73c38ffc92ab27a3a0c6c5e0d0706be2f20a1d->leave($__internal_ab409f8bdadfd1df1b87938cef73c38ffc92ab27a3a0c6c5e0d0706be2f20a1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!empty($id)): ?>id="<?php echo $view->escape($id) ?>" <?php endif ?>*/
/* <?php foreach ($attr as $k => $v): ?>*/
/* <?php if (in_array($v, array('placeholder', 'title'), true)): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v)) ?>*/
/* <?php elseif ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
