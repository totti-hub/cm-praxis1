<?php

class Standard_action_texticon_8fc01172aeb8a10685f99566a4ae61ca05d6a85e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <div class="texticon texticon-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_position', $array1)]);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
            <div class="texticon-icon texticon-size-';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_size', $array12)]);

$output11 .= ' texticon-type-';
$array13 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_type', $array13)]);

$output11 .= '">

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['value'] = NULL;
$arguments25['name'] = NULL;
$arguments25['name'] = 'iconStyle';
$output27 = '';
$array28 = array (
);
$output27 .= $renderingContext->getVariableProvider()->getByPath('iconStyle', $array28);

$output27 .= 'color: ';
$array29 = array (
);
$output27 .= $renderingContext->getVariableProvider()->getByPath('data.icon_color', $array29);

$output27 .= ';';
$arguments25['value'] = $output27;
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_color', $array23);

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['value'] = NULL;
$arguments35['name'] = NULL;
$arguments35['name'] = 'iconStyle';
$output37 = '';
$array38 = array (
);
$output37 .= $renderingContext->getVariableProvider()->getByPath('iconStyle', $array38);

$output37 .= 'background-color: ';
$array39 = array (
);
$output37 .= $renderingContext->getVariableProvider()->getByPath('data.icon_background', $array39);

$output37 .= ';';
$arguments35['value'] = $output37;
$renderChildrenClosure36 = ($arguments35['value'] !== null) ? function() use ($arguments35) { return $arguments35['value']; } : $renderChildrenClosure36;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_background', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output19 .= '
                ';
return $output19;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_type', $array17);
$array16['1'] = ' !== default';

$expression18 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) !== "default");};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = $renderChildrenClosure15;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['value'] = NULL;
$arguments40['name'] = NULL;
$arguments40['name'] = 'iconHeight';
$array42 = array (
);$arguments40['value'] = $renderingContext->getVariableProvider()->getByPath('settings.texticon.icon.{data.icon_size}.height', $array42);
$renderChildrenClosure41 = ($arguments40['value'] !== null) ? function() use ($arguments40) { return $arguments40['value']; } : $renderChildrenClosure41;
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output11 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['value'] = NULL;
$arguments43['name'] = NULL;
$arguments43['name'] = 'iconWidth';
$array45 = array (
);$arguments43['value'] = $renderingContext->getVariableProvider()->getByPath('settings.texticon.icon.{data.icon_size}.width', $array45);
$renderChildrenClosure44 = ($arguments43['value'] !== null) ? function() use ($arguments43) { return $arguments43['value']; } : $renderChildrenClosure44;
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output11 .= '
                <span class="texticon-inner-icon"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$arguments46['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('iconStyle', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$output51 = '';

$output51 .= ' style="';
$array52 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iconStyle', $array52)]);

$output51 .= '"';
$arguments46['then'] = $output51;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output11 .= '>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['image'] = NULL;
$arguments79['src'] = NULL;
$arguments79['class'] = NULL;
$arguments79['width'] = NULL;
$arguments79['height'] = NULL;
$array81 = array (
);$arguments79['image'] = $renderingContext->getVariableProvider()->getByPath('icon.0', $array81);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string82 = '{iconHeight as integer}';
$array83 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments79['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string82, $array83);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string84 = '{iconWidth as integer}';
$array85 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments79['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string84, $array85);

$output78 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
                        ';
return $output78;
};
$arguments76 = array();

$output75 .= '';

$output75 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['alt'] = NULL;
$arguments89['ismap'] = NULL;
$arguments89['longdesc'] = NULL;
$arguments89['usemap'] = NULL;
$arguments89['loading'] = NULL;
$arguments89['src'] = '';
$arguments89['treatIdAsReference'] = false;
$arguments89['image'] = NULL;
$arguments89['crop'] = NULL;
$arguments89['cropVariant'] = 'default';
$arguments89['fileExtension'] = NULL;
$arguments89['width'] = NULL;
$arguments89['height'] = NULL;
$arguments89['minWidth'] = NULL;
$arguments89['minHeight'] = NULL;
$arguments89['maxWidth'] = NULL;
$arguments89['maxHeight'] = NULL;
$arguments89['absolute'] = false;
// Rendering Array
$array91 = array();
$array91['loading'] = 'lazy';
$arguments89['additionalAttributes'] = $array91;
$array92 = array (
);$arguments89['image'] = $renderingContext->getVariableProvider()->getByPath('icon.0', $array92);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string93 = '{iconHeight as integer}';
$array94 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments89['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string93, $array94);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string95 = '{iconWidth as integer}';
$array96 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments89['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string95, $array96);

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
                        ';
return $output88;
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output75 .= '';

$output75 .= '
                    ';
return $output75;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('icon.0.extension', $array73);
$array72['1'] = ' === svg';

$expression74 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['image'] = NULL;
$arguments56['src'] = NULL;
$arguments56['class'] = NULL;
$arguments56['width'] = NULL;
$arguments56['height'] = NULL;
$array58 = array (
);$arguments56['image'] = $renderingContext->getVariableProvider()->getByPath('icon.0', $array58);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string59 = '{iconHeight as integer}';
$array60 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments56['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string59, $array60);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string61 = '{iconWidth as integer}';
$array62 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments56['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string61, $array62);

$output55 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                        ';
return $output55;
};
$arguments53['__elseClosures'][] = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['alt'] = NULL;
$arguments64['ismap'] = NULL;
$arguments64['longdesc'] = NULL;
$arguments64['usemap'] = NULL;
$arguments64['loading'] = NULL;
$arguments64['src'] = '';
$arguments64['treatIdAsReference'] = false;
$arguments64['image'] = NULL;
$arguments64['crop'] = NULL;
$arguments64['cropVariant'] = 'default';
$arguments64['fileExtension'] = NULL;
$arguments64['width'] = NULL;
$arguments64['height'] = NULL;
$arguments64['minWidth'] = NULL;
$arguments64['minHeight'] = NULL;
$arguments64['maxWidth'] = NULL;
$arguments64['maxHeight'] = NULL;
$arguments64['absolute'] = false;
// Rendering Array
$array66 = array();
$array66['loading'] = 'lazy';
$arguments64['additionalAttributes'] = $array66;
$array67 = array (
);$arguments64['image'] = $renderingContext->getVariableProvider()->getByPath('icon.0', $array67);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string68 = '{iconHeight as integer}';
$array69 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments64['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string68, $array69);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string70 = '{iconWidth as integer}';
$array71 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments64['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string70, $array71);

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
                        ';
return $output63;
};

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output11 .= '
                </span>

            </div>
            ';
return $output11;
};
$arguments8 = array();
$arguments8['parameter'] = NULL;
$arguments8['target'] = '';
$arguments8['class'] = '';
$arguments8['title'] = '';
$arguments8['language'] = NULL;
$arguments8['additionalParams'] = '';
$arguments8['additionalAttributes'] = array (
);
$arguments8['useCacheHash'] = NULL;
$arguments8['addQueryString'] = false;
$arguments8['addQueryStringMethod'] = 'GET';
$arguments8['addQueryStringExclude'] = '';
$arguments8['absolute'] = false;
$arguments8['parts-as'] = 'typoLinkParts';
$array10 = array (
);$arguments8['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.header_link', $array10);

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
        ';
return $output7;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('icon', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['__thenClosure'] = $renderChildrenClosure3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
        <div class="texticon-content">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['renderable'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['debug'] = true;
$arguments97['partial'] = 'Header/All';
$arguments97['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array102 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array102);
};
$arguments100 = array();
$arguments100['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output0 .= '
        </div>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output103 = '';

$output103 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['name'] = NULL;
$arguments104['name'] = 'Default';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output103 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['name'] = NULL;
$arguments106['name'] = 'Header';

$output103 .= NULL;

$output103 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '

    <div class="texticon texticon-';
$array111 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_position', $array111)]);

$output110 .= '">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
            <div class="texticon-icon texticon-size-';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_size', $array122)]);

$output121 .= ' texticon-type-';
$array123 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_type', $array123)]);

$output121 .= '">

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['value'] = NULL;
$arguments135['name'] = NULL;
$arguments135['name'] = 'iconStyle';
$output137 = '';
$array138 = array (
);
$output137 .= $renderingContext->getVariableProvider()->getByPath('iconStyle', $array138);

$output137 .= 'color: ';
$array139 = array (
);
$output137 .= $renderingContext->getVariableProvider()->getByPath('data.icon_color', $array139);

$output137 .= ';';
$arguments135['value'] = $output137;
$renderChildrenClosure136 = ($arguments135['value'] !== null) ? function() use ($arguments135) { return $arguments135['value']; } : $renderChildrenClosure136;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_color', $array133);

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = $renderChildrenClosure131;

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['value'] = NULL;
$arguments145['name'] = NULL;
$arguments145['name'] = 'iconStyle';
$output147 = '';
$array148 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('iconStyle', $array148);

$output147 .= 'background-color: ';
$array149 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('data.icon_background', $array149);

$output147 .= ';';
$arguments145['value'] = $output147;
$renderChildrenClosure146 = ($arguments145['value'] !== null) ? function() use ($arguments145) { return $arguments145['value']; } : $renderChildrenClosure146;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_background', $array143);

$expression144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['__thenClosure'] = $renderChildrenClosure141;

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output129 .= '
                ';
return $output129;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_type', $array127);
$array126['1'] = ' !== default';

$expression128 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) !== "default");};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments124['__thenClosure'] = $renderChildrenClosure125;

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output121 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['value'] = NULL;
$arguments150['name'] = NULL;
$arguments150['name'] = 'iconHeight';
$array152 = array (
);$arguments150['value'] = $renderingContext->getVariableProvider()->getByPath('settings.texticon.icon.{data.icon_size}.height', $array152);
$renderChildrenClosure151 = ($arguments150['value'] !== null) ? function() use ($arguments150) { return $arguments150['value']; } : $renderChildrenClosure151;
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext)]);

$output121 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['value'] = NULL;
$arguments153['name'] = NULL;
$arguments153['name'] = 'iconWidth';
$array155 = array (
);$arguments153['value'] = $renderingContext->getVariableProvider()->getByPath('settings.texticon.icon.{data.icon_size}.width', $array155);
$renderChildrenClosure154 = ($arguments153['value'] !== null) ? function() use ($arguments153) { return $arguments153['value']; } : $renderChildrenClosure154;
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output121 .= '
                <span class="texticon-inner-icon"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['0'] = $renderingContext->getVariableProvider()->getByPath('iconStyle', $array159);

$expression160 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);
$output161 = '';

$output161 .= ' style="';
$array162 = array (
);
$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iconStyle', $array162)]);

$output161 .= '"';
$arguments156['then'] = $output161;

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output121 .= '>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['image'] = NULL;
$arguments189['src'] = NULL;
$arguments189['class'] = NULL;
$arguments189['width'] = NULL;
$arguments189['height'] = NULL;
$array191 = array (
);$arguments189['image'] = $renderingContext->getVariableProvider()->getByPath('icon.0', $array191);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string192 = '{iconHeight as integer}';
$array193 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments189['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string192, $array193);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string194 = '{iconWidth as integer}';
$array195 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments189['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string194, $array195);

$output188 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
                        ';
return $output188;
};
$arguments186 = array();

$output185 .= '';

$output185 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['additionalAttributes'] = NULL;
$arguments199['data'] = NULL;
$arguments199['class'] = NULL;
$arguments199['dir'] = NULL;
$arguments199['id'] = NULL;
$arguments199['lang'] = NULL;
$arguments199['style'] = NULL;
$arguments199['title'] = NULL;
$arguments199['accesskey'] = NULL;
$arguments199['tabindex'] = NULL;
$arguments199['onclick'] = NULL;
$arguments199['alt'] = NULL;
$arguments199['ismap'] = NULL;
$arguments199['longdesc'] = NULL;
$arguments199['usemap'] = NULL;
$arguments199['loading'] = NULL;
$arguments199['src'] = '';
$arguments199['treatIdAsReference'] = false;
$arguments199['image'] = NULL;
$arguments199['crop'] = NULL;
$arguments199['cropVariant'] = 'default';
$arguments199['fileExtension'] = NULL;
$arguments199['width'] = NULL;
$arguments199['height'] = NULL;
$arguments199['minWidth'] = NULL;
$arguments199['minHeight'] = NULL;
$arguments199['maxWidth'] = NULL;
$arguments199['maxHeight'] = NULL;
$arguments199['absolute'] = false;
// Rendering Array
$array201 = array();
$array201['loading'] = 'lazy';
$arguments199['additionalAttributes'] = $array201;
$array202 = array (
);$arguments199['image'] = $renderingContext->getVariableProvider()->getByPath('icon.0', $array202);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string203 = '{iconHeight as integer}';
$array204 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments199['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string203, $array204);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string205 = '{iconWidth as integer}';
$array206 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments199['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string205, $array206);

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
                        ';
return $output198;
};
$arguments196 = array();
$arguments196['if'] = NULL;

$output185 .= '';

$output185 .= '
                    ';
return $output185;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('icon.0.extension', $array183);
$array182['1'] = ' === svg';

$expression184 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments163['__thenClosure'] = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['image'] = NULL;
$arguments166['src'] = NULL;
$arguments166['class'] = NULL;
$arguments166['width'] = NULL;
$arguments166['height'] = NULL;
$array168 = array (
);$arguments166['image'] = $renderingContext->getVariableProvider()->getByPath('icon.0', $array168);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string169 = '{iconHeight as integer}';
$array170 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments166['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string169, $array170);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string171 = '{iconWidth as integer}';
$array172 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments166['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string171, $array172);

$output165 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output165 .= '
                        ';
return $output165;
};
$arguments163['__elseClosures'][] = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['additionalAttributes'] = NULL;
$arguments174['data'] = NULL;
$arguments174['class'] = NULL;
$arguments174['dir'] = NULL;
$arguments174['id'] = NULL;
$arguments174['lang'] = NULL;
$arguments174['style'] = NULL;
$arguments174['title'] = NULL;
$arguments174['accesskey'] = NULL;
$arguments174['tabindex'] = NULL;
$arguments174['onclick'] = NULL;
$arguments174['alt'] = NULL;
$arguments174['ismap'] = NULL;
$arguments174['longdesc'] = NULL;
$arguments174['usemap'] = NULL;
$arguments174['loading'] = NULL;
$arguments174['src'] = '';
$arguments174['treatIdAsReference'] = false;
$arguments174['image'] = NULL;
$arguments174['crop'] = NULL;
$arguments174['cropVariant'] = 'default';
$arguments174['fileExtension'] = NULL;
$arguments174['width'] = NULL;
$arguments174['height'] = NULL;
$arguments174['minWidth'] = NULL;
$arguments174['minHeight'] = NULL;
$arguments174['maxWidth'] = NULL;
$arguments174['maxHeight'] = NULL;
$arguments174['absolute'] = false;
// Rendering Array
$array176 = array();
$array176['loading'] = 'lazy';
$arguments174['additionalAttributes'] = $array176;
$array177 = array (
);$arguments174['image'] = $renderingContext->getVariableProvider()->getByPath('icon.0', $array177);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string178 = '{iconHeight as integer}';
$array179 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments174['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string178, $array179);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string180 = '{iconWidth as integer}';
$array181 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments174['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string180, $array181);

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
                        ';
return $output173;
};

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output121 .= '
                </span>

            </div>
            ';
return $output121;
};
$arguments118 = array();
$arguments118['parameter'] = NULL;
$arguments118['target'] = '';
$arguments118['class'] = '';
$arguments118['title'] = '';
$arguments118['language'] = NULL;
$arguments118['additionalParams'] = '';
$arguments118['additionalAttributes'] = array (
);
$arguments118['useCacheHash'] = NULL;
$arguments118['addQueryString'] = false;
$arguments118['addQueryStringMethod'] = 'GET';
$arguments118['addQueryStringExclude'] = '';
$arguments118['absolute'] = false;
$arguments118['parts-as'] = 'typoLinkParts';
$array120 = array (
);$arguments118['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.header_link', $array120);

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
        ';
return $output117;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('icon', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['__thenClosure'] = $renderChildrenClosure113;

$output110 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output110 .= '
        <div class="texticon-content">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['section'] = NULL;
$arguments207['partial'] = NULL;
$arguments207['delegate'] = NULL;
$arguments207['renderable'] = NULL;
$arguments207['arguments'] = array (
);
$arguments207['optional'] = false;
$arguments207['default'] = NULL;
$arguments207['contentAs'] = NULL;
$arguments207['debug'] = true;
$arguments207['partial'] = 'Header/All';
$arguments207['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output110 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$array212 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array212);
};
$arguments210 = array();
$arguments210['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output110 .= '
        </div>
    </div>

';
return $output110;
};
$arguments108 = array();
$arguments108['name'] = NULL;
$arguments108['name'] = 'Main';

$output103 .= NULL;

$output103 .= '

';

return $output103;
}


}
#